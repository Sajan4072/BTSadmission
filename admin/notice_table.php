<?php
session_start();
include('include/connection.php');

$sql="select *from notice order by id desc ";
$result=mysqli_query($db,$sql);
$notice='set';

function short_notice($text)
{
$string = strip_tags($text);
if (strlen($string) > 25) {

    // truncate string
    $stringCut = substr($string, 0, 25);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '..';
}
return  $string;
}


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
                <div class="container">
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
                    <a  href="notices.php?type=insert" class="btn btn-primary" style="background-color: #224a8f; border: none; border-radius: 20px; margin-bottom: 5px; float: right; ">ADD</a>
                              <table class="table">
                                <thead class="blue">
                                    <tr>
                                        <TH>SN</TH>
                                        <th>NOTICE</th>
                                        <th>DATE</th>
                                        <th>SCHOOL</th>
                                        <th>+2</th>
                                        <th>ENGINEERING</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>

                                <?php 
                                 $x=1;
                                 while($notice=mysqli_fetch_array($result))
                             {

                                 ?>
                                <tr>
                                   <td><?php echo htmlentities($x); ?></td>
                                    <td><?php echo  short_notice($notice['notice']);?> </td>
                                   
                                    <td><?php echo htmlentities($notice['created_at']); ?></td>
                                   
                                    <td><?php 
                                             if($notice['school']==1)
                                              {
                                                ?>
                                            <i class="fa fa-check"></i>
                                        <?php }
                                         ?> 

                                    </td>
                                   
                                    <td><?php 
                                             if($notice['plus2']==1)
                                              {
                                                ?>
                                            <i class="fa fa-check"></i>
                                        <?php }
                                         ?> 

                                    </td>

                                    <td><?php 
                                             if($notice['engineering']==1)
                                              {
                                                ?>
                                            <i class="fa fa-check"></i>
                                        <?php }
                                         ?> 

                                    </td>
                                    </td>
                                    <td>
                                        <a href="notices.php?type=edit&&id=<?php echo $notice['id']; ?>"><i class="fa fa-edit"> </i></a>
                                        <a href="delete.php?id=<?php echo $notice['id']; ?>&&type=notice"><i class="fa fa-trash"> </i></a>
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