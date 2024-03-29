<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./Registration.css">
  <style>
   .error{
     color: red;
   }
  </style>
</head>
<body>

<?php  
// define variables to empty values 
include "include/connection.php"; 
session_start();

if(isset($_GET['type']))
{
  $id=$_GET['id'];
  $edit='set';
  $sql="select * from school where uniquecode='$id' limit 1 ";
  $result=mysqli_query($db,$sql);
  $student=mysqli_fetch_assoc($result);

}



?>  
  <div class="container">

        <div class="row formtitle">
            <h5>STUDENT REGISTRATION FORM</h5>
        </div>
        <div class="row form body">
            <div class="col-lg-7 col-md-12 col-sm-12 bodycol">
 
<form method="post"  action="insert.php"> 

   <?php 
      if(isset($edit))
      {?>
    <input type="hidden" name="uniquecode" value="<?php echo $student['uniquecode']; ?>">

<?php
      }

    ?>   
     <div class="form-row">
      
    <div class="form-group col-md-6">
      <label for="inputName">FIRST NAME</label>  
    <input type="text" name="fname"  class="form-control" id="inputName" required placeholder="Name" autocomplete="off" value="<?php
      if(isset($edit))
      {
        echo($student['firstname']);
      }
      
    else
    {    
     if(isset($_SESSION['fname'])){ echo $_SESSION['fname']; unset($_SESSION['fname']);} 
     }  ?>">  
   
    <span class="error"><small><?php if(isset($_SESSION['fnameErr'])) echo $_SESSION['fnameErr']; unset($_SESSION['fnameErr']); ?> </small></span> 
      </div>
   <div class="form-group col-md-6">
      <label for="inputName">LAST NAME</label>  
    <input type="text" name="lname" required class="form-control" required id="inputName" placeholder="Last Name" autocomplete="off" value="<?php
     if(isset($edit))
      {
        echo($student['lastname']);
      }
      else
      {
if(isset($_SESSION['lname'])){ echo $_SESSION['lname']; unset($_SESSION['lname']);} }     ?>">  
    
    <span class="error"><small><?php if(isset($_SESSION['lnameErr'])) echo $_SESSION['lnameErr']; unset($_SESSION['lnameErr']); ?> </small></span> 
    </div>  
</div>
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail">ADDRESS</label>   
    <input type="text" required name="address" class="form-control" id="inputAddress" placeholder="Address" autocomplete="off" value="<?php 
   if(isset($edit))
      {
        echo($student['address']);
      }
      else
   
          if(isset($_SESSION['address'])){ echo $_SESSION['address']; unset($_SESSION['address']);} 
     ?>">  
   
     <span class="error"><small><?php if(isset($_SESSION['addressErr'])) echo $_SESSION['addressErr']; unset($_SESSION['addressErr']); ?> </small></span> 
    </div> 
   <div class="form-group col-md-12">
      <label for="inputEmail">FATHER'S NAME</label>
    <input type="text" name="fathername" required class="form-control" id="inputFathername" placeholder=" Father's Name" autocomplete="off"
         value="<?php 
             if(isset($edit))
      {
        echo($student['fathername']);
      }
      else
         if(isset($_SESSION['fathername'])){ echo $_SESSION['fathername']; unset($_SESSION['fathername']);} 
         ?>" 
     >  
     <span class="error"><small><?php if(isset($_SESSION['fathernameErr'])) echo $_SESSION['fathernameErr']; unset($_SESSION['fathernameErr']); ?> </small></span>  

    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail">PARENT'S CONTACT</label>
    <input type="text" name="contact" required class="form-control" id="inputFathername" placeholder=" Parent's contact" autocomplete="off"
         value="<?php 
              if(isset($edit))
      {
        echo($student['contact']);
      }
      else
          if(isset($_SESSION['contact'])){ echo $_SESSION['contact']; unset($_SESSION['contact']);}?>" 
    >  
    <span class="error"><small><?php if(isset($_SESSION['contactErr'])) echo $_SESSION['contactErr']; unset($_SESSION['contactErr']); ?> </small></span>  
    </div>
</div>

        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail">PASSWORD</label>   <a href="#" class="show-password" ><i class="fa fa-eye-slash" id="font-eye"></i></a>
    <input type="password" required name="password" id="password" class="form-control" id="inputEmail" placeholder=" Password" autocomplete="off" value="<?php
         if(isset($edit))
      {
        echo($student['password']);
      }
      

    ?>">  
   
    <span class="error"><small><?php if(isset($_SESSION['passwordErr'])) echo $_SESSION['passwordErr']; unset($_SESSION['passwordErr']); ?> </small></span> 
    </div>

    
    <div class="form-group col-md-6">
      <label for="inputEmail">UNIQUE CODE</label>
    <input type="text" name="uniquecode" required class="form-control" id="inputEmail" placeholder=" Unique code" autocomplete="off"
    value="<?php 
             if(isset($edit))
      {
        echo($student['uniquecode']);
      }
       else

   if(isset($_SESSION['uniquecode'])){ echo $_SESSION['uniquecode']; unset($_SESSION['uniquecode']);}?>" 

    <?php if(isset($edit))
    {
      echo "disabled";
    } 
    ?>
    >  
    
    <span class="error"><small><?php if(isset($_SESSION['uniquecodeErr'])) echo $_SESSION['uniquecodeErr']; unset($_SESSION['uniquecodeErr']); ?> </small></span>  
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputEmail">DATE OF BIRTH</label>
    <input type="date" name="dob" required class="form-control" id="inputEmail" placeholder=" Password" autocomplete="off"
       value="<?php 
         
             if(isset($edit))
      {
        echo($student['dob']);
      }

      if(isset($_SESSION['dob'])){echo $_SESSION['dob']; unset($_SESSION['dob']);}
       ?>" 
    >  
   

    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">CLASS</label>
      <select name="class" class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      </div>
    
</div>
        <div class="form-row">
    <div class="form-group col-md-12" style="text-align: center;">  
    <?php if(!isset($edit)) 
    {
    ?>                     
    <input type="submit" name="stu_registration" value="REGISTER" class="btn btn-primary" style="background-color: #224a8f; border: none;">  
    <?php }  else {?>
    <input type="submit" name="stu_registration_edit" value="update" class="btn btn-primary" style="background-color: #224a8f; border: none;">  

  <?php } ?>

    </div></div>                             
</form>  
  </div>
  <div class="col-lg-5 col-md-12 col-sm-12 textcol" style="background-color: black;  text-align: center; color: white;">
               

                <h1>WELCOME</h1>
                <h4 style="padding-top: 50px;">REGISTER TO<br> CONTINUE ACCESS<br> PAGE</h4>
                <br>
                <br>
                <h4 class="error"><?php if(isset($_SESSION['error'])) {echo $_SESSION['error']; unset($_SESSION['error']); } ?></h4><h4 class="error"><?php if(isset($_SESSION['success'])) {echo $_SESSION['success']; unset($_SESSION['success']); } ?></h4>
                <br>
                <a href="school_stu_registration_table.php" class="btn-primary btn btn-sm">Click to go previous page</a>
                <br>
                <?php if(!isset($edit)) {?>
                 <form style="margin-top: 25px;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                   <input method='post' name="reset" type="submit" class="btn-primary btn-sm btn" value="reset form data">
                </form>
              <?php } ?>
            </div>

            
        </div>
    </div>

<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <script >

      $('.show-password').click(function(){

      if($('#font-eye').hasClass('fa-eye-slash'))
      {
          
      $('#font-eye').removeClass('fa-eye-slash');
      $('#font-eye').addClass('fa-eye');
      $('#password').attr('type','text');
      }

      else
      {
        $('#font-eye').removeClass('fa-eye');
        $('#font-eye').addClass('fa-eye-slash');
         $('#password').attr('type','password');
      }

    });

    </script>


  
</body>  
</html> 


