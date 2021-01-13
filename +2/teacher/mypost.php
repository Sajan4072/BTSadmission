<?php
session_start();

include('../../include/connection.php');
$id=$_SESSION['teacher_user'];
$sql="select *from college_resource where posted_by='$id' order by id desc ";
$result=mysqli_query($db,$sql);
$mypost='set';
?>
<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="gal.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="gal.css">
</head>
<body>
</body>
<!-- top banner -->
    
    <div class="container-fluid">
      <div class="row top-banner p-2">
        <div class="col-lg-2 col-md-2 col-12">
           <div class="logo">
                <img src="../teacher/frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" />
              </div>
        </div>
                <div class="col-lg-8 col-md-8 col-12">
                   <div class="top-title">
                <h1>BUDHANILKANTHA TECHNICAL SCHOOL</h1>
              </div>

              <div class="top-subtitle">
                <h5>A BETTER LEARNING FUTURE STARTS</h5>
              </div>  
                </div>
                        <div class="col-lg-2 col-md-2 col-12">
                          <div class="row" style="margin-top: 60px; margin-right: 2px;">
                            <div class="col-6"><h5><i style="margin-right: 5px; margin-top: 10px;" class="fa fa-user" aria-hidden="true"></i><a href="../profile.php" style="text-decoration: none; color: black;"><?php echo $_SESSION['teacher_user']; ?></a></h5></div>
                            <div class="col-6">
                               <a href="logout.php"> <button type="submit" class="btn btn-primary" style="background-color: #224a8f; border: none; float: left; border-radius: 20px;">LOGOUT</button></a>
                            </div>
                          </div>
                           
                        </div>
      </div>
    </div>


<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="container sidebar">
        <div class="row">
          <ul class="unstyled" >
       
            <li><a href="resources.php"><i class="fa fa-file"  ></i>RESOURCES </a></li>
           
            <li><a href="results.php"><i class="fa fa-file" ></i>RESULTS</a></li>
             <li><a href="#"><i class="fa fa-file" ></i>MYPOSTS</a></li>
           
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="container">
                  <?php
                    if(isset($_SESSION['success']))
                    { 

                  ?>
                  <div class="alert alert-success mt-4" role="alert">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                  </div>

                 <?php } ?>

                  <?php
                    if(isset($_SESSION['error']))
                    { 

                  ?>
                  <div class="alert alert-danger mt-4" role="alert">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                  </div>

                 <?php } ?>

                <style type="text/css">
table {
  
  counter-reset: row-num;
}
table tr {
  counter-increment: row-num;
}
table tr td:first-child::before {
    content: counter(row-num) ". ";
}
</style>
                            <table class="table mt-5">
                                <thead class="blue">
                                    <tr>
                                        <th>SN</th>
                                        <th>PHOTO</th>
                                        <th>PDF</th>
                                        <th>Subject</th>
                                       <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                           <?php while($post=mysqli_fetch_array($result)) {?>
                                <tr>
                                   <td></td>
                                    <td><a href="#"><img src="photo/<?php echo $post['image']; ?>" alt="" style="height: 80px; width: 80px;" ></a></td>
                                    <td><a href="read.php?id=<?php echo $post['id']; ?>"><i class="fas fa-file-pdf fa-3x"></i></a></td>
                                    <td><?php echo $post['subject']; ?></td>
                                    <td><?php echo $post['class']; ?></td>
                                   
                                  
                                    <td>
                                       
                                        <a href="include/delete.php?id=<?php echo $post['id']; ?>&&type=resources"><i class="fa fa-trash fa-lg"> </i></a>
                                    </td>
                                </tr>
                              <?php } ?>

                            
                            </table>

                        </div>
                    </div>
    
</div>
</div>





<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>