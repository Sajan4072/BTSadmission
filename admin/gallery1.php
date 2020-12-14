<?php
session_start();
include('include/connection.php');


?>

<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="landing.css">
</head>
<body>
</body>
<?php 

include('include/check_login.php');

?>


<!-- top banner -->
    
   <?php 
        include('include/topbar.php');
   ?>

<div class="container">
  <div class="row">

      

     <?php 
         include('include/sidebar.php');
     ?>




            <!-- content -->
    <div class="col-lg-8 col-md-8 col-sm-12">
      <form method="post" enctype="multipart/form-data" action="upload.php" >
      <div class="container uploadsection">
        <div class="col-12">
          <div class="row"   style="color: #224a8f">
          <div class="col-1">
             <i class="fa fa-user"  style="color: #224a8f" aria-hidden="true"></i>
          </div>
          <div class="col-11">Post Pictures </div>
          </div>
          <div class="row">
            <textarea name="caption"></textarea>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              <input type="file" name="image" > 
              
            </div>
            <div class="check" style="margin-top: 12px; margin-left: 180px; color: #224a8f;">
            <div class="col-4"></div>
              <input type="checkbox" name="school" value="Yes">
            School

             <input type="checkbox" name="plus2" value="Yes">
            plus2

             <input type="checkbox" name="engineering" value="Yes">
            Engineering
          </div>
            <div class="col-4"><p style="float: right;">
            <div class="col-4"></div>
           
              
            </div>
            <div class="col-lg-6 col-md-4 col-sm-4"><p style=" margin-left: 280px;">
            <button type="submit" name="submit" class="btn btn-success" style="border: none; border-radius: 20px; margin-top: 5px;">POST</button>

            </p></div>
</form>

          </div>

        </div>
        
      </div>
    </div>
  
  </div>
</div>



<script src="script.js"></script>





<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>