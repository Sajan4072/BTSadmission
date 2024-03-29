<?php
include "../../../include/connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BTS</title>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="../../../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../../frontpage/css/style.css" />
  </head>
  <body>
    <!-- top banner -->
    <div class="container-fluid " style="background-color: #d5d8de;">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-4 col-4 mt-">
              <div class="logo">
                <img src="../../frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" />
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-8 ">
              <div class="top-title">
                <h4>BUDHANILKANTHA TECHNICAL SCHOOL</h4>
              </div>

              <div class="top-subtitle">
                <h5>A BETTER LEARNING FUTURE STARTS</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="quick-contact">
            <ul>
              <li><i class="fa fa-phone"></i>&nbsp;01-4372300</li>
              <li><i class="fa fa-envelope"></i>bnktechschool@gmail.com</li>
              <li>
                <i class="fa fa-map-marker"></i>&nbsp;&nbsp;Budhanilkantha-3,
                Kathmandu, Nepal
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

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
            
            <!--<li class="nav-item center-menu">
              <a class="nav-link " href="../../+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../../engineering/index.php">Engineering</a>
            </li>-->
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../index.php">Home</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../resources/resource.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../ourteam/ourteam.php">Our Team</a>
            </li>
             
      <li class="nav-item center-menu">
              <a class="nav-link" href="../../../results/results.php">Results</a>
              </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../contact/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              
              
              <li class="nav-item">
                <a class="nav-link right-link active" href=""><?php echo "$_SESSION[login_user]";?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link right-link" href="../../../login/logout.php">Logout</a>
              </li>
            
            </ul>
          </form>
        </div>
      </nav>
    </div>
<?php }else{
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
              <a class="nav-link " href="../../+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../../engineering/index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../galary/galary.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="./events/events.php">Events</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="./ourteam/ourteam.php">Our Team</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../contact/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              <li class="nav-item dropdown" >
                <a class="nav-link right-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false" >Login</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login/login.php">Student</a>
                <a class="dropdown-item" href="login/teacherlogin.php">Teacher</a>
                <a class="dropdown-item" href="admin/admin login/index.php">Admin</a>
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div>
  <?php
}?>
    

    

    <!-- about us banner -->
    <div class="row justify-content-center">
      <div class="col-lg-6">
        
          
      <h3 style="text-align: center; color: #6AAC6F">Welcome <?php echo $_SESSION['login_user'];?></h3>
        <?php 
 $query = ("SELECT * FROM school WHERE firstname='" . $_SESSION["login_user"] ."'");
  $result1 = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result1);
?>
<div class="text-center">
  
   <img src="../photos/<?php echo $row['image']; ?>" alt="" class="rounded" id="myImg" style=" width: 250px; height: 250px; " /> 
</div>
 <table class="table table-bordered">
  <tbody>
    <style type="text/css">
      tr th,td{
        text-align: center;
      }
    </style>
    <tr>
      
      <th scope="col">First Name</th>
      <td scope="col"><?php echo $row['firstname'];?></td>
      
    </tr>
    <tr>
      <th scope="col">Last Name</th>
      <td scope="col"><?php echo $row['lastname'];?></td>
    </tr>
    <tr>
      <th scope="col">Address</th>
      <td scope="col"><?php echo $row['address'];?></td>
    </tr>
    <tr>
      <th scope="col">Father's Name</th>
      <td scope="col"><?php echo $row['fathername'];?></td>
    </tr>
    <tr>
      <th scope="col">Unique Code</th>
      <td scope="col"><?php echo $row['uniquecode'];?></td>
    </tr>
    <tr>
      <th scope="col">Password</th>
      <td scope="col"><?php echo $row['password'];?></td>
      
    </tr>

    
      <th scope="col">Date of Birth</th>
      <td scope="col"><?php echo $row['dob'];?></td>
    </tr>
    <tr>
      <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Change Password</button></td>
    </tr>
  
  </tbody>
</table>
        
    </div>
        </div>
      

    
    <!-- footer -->
  <?php include('../../../include/footer.php'); ?>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Change Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <form action="" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="password"> Type New Password:</label>
    <input type="text" class="form-control" name="password">
  </div>
  
   <input type="submit" value="Save" name ="submit" class="submit" id ="btn btn-primary" style="background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;">
              
</form> 



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<?php

    

        if(isset($_POST['submit']))
    {
      
      $name= $_SESSION['login_user'];
          $password= $_POST['password'];
         $sql= ("UPDATE school SET `password` = '$password' WHERE `firstname`='$name'");
     

      if(mysqli_query($db,$sql))
      {
        ?>
          <script type="text/javascript">
            alert("Saved Successfully.");
            
          </script>
        <?php
      }
    }
  ?>
    <!-- js setup -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
