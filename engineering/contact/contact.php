<?php
include "../include/connection.php";
session_start();


$nameErr = $emailErr= $phoneErr= $MessageErr= "";  
$phone = $email = $name = $Message= "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      

 if (empty($_POST["name"])) {  
        $nameErr = " What is your name";  
    } else {  
            $name = input_data($_POST["name"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
               
                $nameErr = "Enter valid name";  
            }      
    }

 
 if (empty($_POST["email"])) {  
        $emailErr = " What is your email";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check if URL address syntax is valid  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               
                $emailErr = "Enter valid email";  
            }      
    } 

    if (empty($_POST["phone"])) {  
        $phoneErr = " Contact number is required";  
    } else {  
            $phone = input_data($_POST["phone"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[0-9]*$/",$phone) && strlen ($phone) != 10){
                $contactErr = "Contact should be of 10 digits";  
            }      
    }  
 
       

         if (empty($_POST["Message"])) {  
        $MessageErr = " What is your name";  
    } else {  
            $Message = input_data($_POST["Message"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[a-zA-Z0-9 ,.-_]*$/",$Message)) {
               
                $MessageErr = "Enter valid name";  
            }      
    }    
     
  }
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?> 
<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./contact.css">
</head>
<body>

  <!-- top banner -->
   
 <?php include('../include/banner.php'); ?>

    <!-- navbar -->
    <?php
      if(isset($_SESSION['login_user'])){
      ?>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light py-0 ">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
                <li class="nav-item center-menu">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../resources/resource.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../ourteam/ourteam.php">Our Team</a>
            </li>
            <?php 

          $name= $_SESSION['login_user'];
         $result = mysqli_query($db, "SELECT * FROM engineering WHERE  firstname = '$name'");
         $row= mysqli_fetch_assoc($result);
      if( $row['payment'] == '1'){
      ?><li class="nav-item center-menu">
              <a class="nav-link" href="../results/results.php">Results</a>
               </li>
            <?php }?>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="">Contact Us</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              
              
              <li class="nav-item">
                <a class="nav-link right-link" href="../student/profile.php"><?php echo "$_SESSION[login_user]";?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link right-link" href="../login/logout.php">Logout</a>
              </li>
            
            </ul>
          </form>
        </div>
      </nav>
    </div>
  <?php }
  else{
    ?>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light py-0 ">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../index.php">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link active" href="../index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.php">Events</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="../ourteam/ourteam.php">Our Team</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link active" href="">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" style="margin-right: 35px; ">
            <ul class="navbar-nav mr-5" >
              <li class="nav-item dropdown" >
                <a class="nav-link right-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false" >Login</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <a class="dropdown-item" href="../login/login.php" style="background-color: white;">Student</a>
                <a class="dropdown-item" href="../login/teacherlogin.php" style="background-color: white">Teacher</a>
                
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div>
    <?php
  }
  ?>  


  <div class="container " style="margin-top: 20px; ">
    <div class="row">
      <div class="col " style="background-color: #25408F; align-items: center; height: 580px;" >
        <h2 style="text-align: center;transform: translateX(-40px); color: white; margin-top:20px ; margin-bottom: 20px;">CONTACT US</h2>

        
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

          <div style="max-width:400px;margin:auto"> 
        <div class="input-icons"> 
  <div class="form-group row ">
    <div class="col-sm-10">
      <i class="fa fa-user icon"></i>
      <input type="text" name = "name"class="form-control input-field" id="inputName3" placeholder="Name" autocomplete="off">
      <span class="error"><?php echo $nameErr; ?> </span> 
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <i class="fa fa-phone icon"></i>

      <input type="text" name="phone" class="form-control input-field" id="inputPhone3" placeholder="Phone number(+977)" autocomplete="off">
      <span class="error"><?php echo $phoneErr; ?> </span> 
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <i class="fa fa-envelope icon" ></i>
      <input type="email" name ="email" class="form-control input-field" id="inputEmail3" placeholder="Email" autocomplete="off">
      <span class="error"><?php echo $emailErr; ?> </span> 
    </div>
  </div>


   <div class="form-group row">
    <div class="col-sm-10">
      <i class="fa fa-comment icon"></i>
    <textarea class="form-control input-field" name = "Message" id="exampleFormControlTextarea1" placeholder="Message" style="height: 250px;" ></textarea>
    <span class="error"><?php echo $MessageErr; ?> </span> 
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10" style="text-align: center;">
      <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary" style="background-color: #28ea25; border: none;">
    </div>
  </div>
</div>
</div>
</form>

      </div>
      <div class="col" style="text-align: center; color: white;" >
        <div class="text-section">
        <h3>BUDHANILKANTHA TECHNICAL SCHOOL</h3>
        <P>01-4372300<br>
          bnktechschool@gmail.com<br>
          Budhanilkantha-3, Kathmandu, Nepal
        </P>
        </div>
        
         <div class="container" style="position: relative;
  overflow: hidden;
  width: 100%;
  ">
  <iframe  class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14120.288038342855!2d85.3624916!3d27.7767553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75353d0ced2c3ea5!2sBudhanilkantha%20Technical%20School!5e0!3m2!1sen!2snp!4v1602489148755!5m2!1sen!2snp" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" style="position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;"></iframe>
</div> 
      </div>
    </div>
  </div>




<!-- footer -->



<?php include"../../include/footer.php";?>

<script src="script.js"></script>



<?php  
    if(isset($_POST['submit'])) {  
    
       
          if($nameErr == "" && $phoneErr =="" && $emailErr == "" && $MessageErr == "" ) {
        
    mysqli_query($db,"INSERT INTO user_message(name,email,phone,message) VALUES('$name', '$email','$phone','$Message');"); 

  
  echo"Your message is send successfully.";
         
    } else { 
    ?>
    <div class="box" style="position: fixed; margin-top: 100px; background-color: red; width: 250px;">
    <span class="close">&times;</span>
    <h3> <b>You didn't filled up the form correctly.</b> </h3>
  </div> 
       
        <?php 
    }  
     
  }
?>  






<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

