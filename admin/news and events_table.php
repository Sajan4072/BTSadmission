<?php
session_start();
include('include/connection.php');

$sql="select *from news_and_event order by id desc ";
$result=mysqli_query($db,$sql);

// $date=now();
// echo $date;


?>
<!DOCTYPE html>
<html>

<head>
    <title>News and event</title>
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

    .blue{
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
                    <a  href="news_&_event.php?type=insert" class="btn btn-primary" style="background-color: #224a8f; border: none; border-radius: 20px; margin-bottom: 5px; margin-left: 500px;">ADD</a>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <table class="table">
                                <thead class="blue">
                                    <tr>
                                        <TH>ID</TH>
                                        <th>POST</th>
                                        <th>DATE</th>
                                        <th>SCHOOL</th>
                                        <th>+2</th>
                                        <th>ENGINEERING</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>

                                <?php 
                                 $x=1;
                                 while($event=mysqli_fetch_array($result))
                             {

                                 ?>
                                <tr>
                                   <td><?php echo htmlentities($x); ?></td>
                                    <td><?php echo  htmlentities($event['post']);?></td>
                                   
                                    <td> <?php echo htmlentities($event['date']); ?> </td>
                                   
                                    <td><?php 
                                             if($event['school']==1)
                                              {
                                                ?>
                                            <i class="fa fa-check"></i>
                                        <?php }
                                         ?> 

                                    </td>
                                   
                                    <td><?php 
                                             if($event['plus2']==1)
                                              {
                                                ?>
                                            <i class="fa fa-check"></i>
                                        <?php }
                                         ?> 

                                    </td>

                                    <td><?php 
                                             if($event['engineering']==1)
                                              {
                                                ?>
                                            <i class="fa fa-check"></i>
                                        <?php }
                                         ?> 

                                    </td>
                                    </td>
                                    <td>
                                        <a href="news_&_event.php?type=edit&&id=<?php echo $event['id']; ?>"><i class="fa fa-edit"> </i></a>
                                        <a href="delete.php?id=<?php echo $event['id']; ?>&&type=news_and_event"><i class="fa fa-trash"> </i></a>
                                    </td>
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

</html>