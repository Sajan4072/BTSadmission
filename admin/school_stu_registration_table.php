<?php
session_start();
include('include/connection.php');

$sql="select *from school limit 4 ";
$result=mysqli_query($db,$sql);

// $date=now();
// echo $date;


?>
<!DOCTYPE html>
<html>

<head>
    <title>School Student Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="landing.css">
</head>
<style>
    .blue {
        background-color:#000071;
        color: white; 
        
    }
    .modal-dialog{
       background-color:#000071;
      color: white;
    }
    
  
    </style>

<body>
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
                <div class="container uploadsection">
                    <?php
                    if(isset($_SESSION['success']))
                    { 

                  ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                    <?php } ?>
                    <?php
                    if(isset($_SESSION['error']))
                    { 

                  ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                    <?php } ?>
                    <p style="display: inline-flex;">
                        <input type="text" name="search" placeholder=" search " style="border-radius:5px;border: blue;  "><i class='fa fa-search' style="margin-left: -25px; margin-top: 4px;"> </i>
                    </p>
                    <p style="display: inline-flex;">
                        <a href="school_stu_registration.php" class="btn btn-primary" style="background-color: #224a8f; border: none; border-radius: 20px; margin-bottom: 5px; margin-left: 300px">ADD</a>
                    </p>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <table class="table">
                                <thead class="blue ">
                                    <tr>
                                        <TH>SN</TH>
                                        <th>UNIQUECODE</th>
                                        <th>Name</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <?php 
                                 $x=1;
                                 while($student=mysqli_fetch_array($result))
                             {

                                 ?>
                                <tr>
                                    <td>
                                        <?php echo htmlentities($x); ?>
                                    </td>
                                    <td>
                                        <?php echo  htmlentities($student['firstname']);  echo  htmlentities($student['lastname']);?>
                                    </td>
                                    <td>
                                        <?php echo htmlentities($student['uniquecode']); ?>
                                    </td>
                                    <td>
                                        <a href="school_stu_registration.php?type=edit&&id=<?php echo htmlentities($student['uniquecode']); ?>"><i class="fa fa-edit"> </i></a>

                                        <a type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"> </i></a>
                                        <a href="#"><i class="fa fa-trash"> </i></a>
                                    </td>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-conten t">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Student details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-3 ">
                                                                <strong class="color-white">Fist Name</strong>
                                                            </div>
                                                            <div class="col-md-1 color-white">
                                                                =>
                                                            </div>
                                                            <div class="col-md-8 color-white">
                                                                 <?php echo htmlentities($student['firstname']); ?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-3 ">
                                                                <strong class="color-white">Last Name</strong>
                                                            </div>
                                                            <div class="col-md-1 color-white">
                                                                =>
                                                            </div>
                                                            <div class="col-md-8 color-white borderbg">
                                                                 <?php echo htmlentities($student['lastname']); ?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <strong class="color-white">Address</strong>
                                                            </div>
                                                            <div class="col-md-1 color-white">
                                                                =>
                                                            </div>
                                                            <div class="col-md-8 color-white">
                                                                 <?php echo htmlentities($student['address']); ?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <strong class="color-white">uniquecode</strong>
                                                            </div>
                                                            <div class="col-md-1 color-white">
                                                                =>
                                                            </div>
                                                            <div class="col-md-8 color-white">
                                                                <?php echo htmlentities($student['uniquecode']); ?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <strong class="color-white">password</strong>
                                                            </div>
                                                            <div class="col-md-1 color-white">
                                                                =>
                                                            </div>
                                                            <div class="col-md-8 color-white">
                                                                <?php echo htmlentities($student['password']); ?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                      
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <strong class="color-white">Parents Name</strong>
                                                            </div>
                                                            <div class="col-md-1 color-white">
                                                                =>
                                                            </div>
                                                            <div class="col-md-8 color-white">
                                                                <?php echo htmlentities($student['fathername']); ?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <strong class="color-white">parents contact</strong>
                                                            </div>
                                                            <div class="col-md-1 color-white">
                                                                =>
                                                            </div>
                                                            <div class="col-md-8 color-white">
                                                               <?php echo htmlentities($student['contact']); ?>
                                                            </div>
                                                        </div>
                                                        <br>
                                                         <div class="row">
                                                            <div class="col-md-3">
                                                                <strong class="color-white">dob</strong>
                                                            </div>
                                                            <div class="col-md-1 color-white">
                                                                =>
                                                            </div>
                                                            <div class="col-md-8 color-white">
                                                                <?php echo date('j F, Y', strtotime($student['dob'])); ?>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    
                                                  </div>
                                                                                                    </div>
                                                <div class="modal-footer">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <?php 
                              $x++;
                            }

                              
                              ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="script.js"></script>
<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<script>
</script>

</html>