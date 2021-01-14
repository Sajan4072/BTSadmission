<?php
 include("../../include/connection.php");
 session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../resource.css">
<link rel="stylesheet" href="../../frontpage/css/style.css" />
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
   <?php include"../nav/nav.php";?>
   <!-- message section -->
<div class="container-fluid">
<div class="row" style="background-color: green; height: 40px; color: white;justify-content: center; margin-bottom: 10px;">
 <h4>HERE ARE SOME RESOURCES</h4>
</div>
          
<?php include('../nav/class_nav.php'); ?>
<div class="row" style="background-color: #FAE19D; height: 50px; color: black;justify-content: center; margin-top: 20px;">
 <h1>CLASS NINE SOCIAL RESOURCES</h1>
</div>
       <div class="row" style="background-color: #fae19d; padding: 20px; margin-top: 10px; ">                      
                      
         
          <?php          
                     
            
                      $sql="select *from school_resource where class = 9 and subject = 'Social'";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>
                    
           <div class="col-lg-3 col-md-3 col-sm-3">
            
              
              <div class="text-center">
                <?php echo $row['pdf'];?><br>
                <button type="button" class="btn btn-success btnview" >
  <a href="read.php?id=<?php echo $row['id']; ?>" style="color: black;">read</a></button>
</div>
              </div>
              <?php
            }
              ?>

           </div>
        
       
              
<div class="row"  style=" justify-content: center; margin-top: 20px;">
 <h4>NOTES PHOTOS</h4>
</div>
<div class="row row-image" style="margin-top: 50px; background-color: #fae19d; ">
                    
<?php 
    $limit = 3;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  };  
$start_from = ($page-1) * $limit;  

                                 
                                  
                      $sql="select *from school_resource where class = 9 and subject = 'Social'";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style=" margin-left: 10px;" >
          <img src="../../school/teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;">
          
          <p style="text-align: center;"> <?php echo $row['subject'];?></p>
          
          </div>
          <?php
          }?>
          </div>  
</div>
<!-- pagination-->

 <nav aria-label="Page navigation example" style="background-color: #d5d8de;">
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='social9.php?page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?>
        </li> 
    <li class="page-item">
      <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM school_resource where class = 9"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='social9.php?page=".$i."'>".$i."</a></li>"; 
}
echo $pagLink . "</ul>";  
?>
</li>
 <li class="page-item">
<?php 
  if($page<$total_pages){
        ?>
        <li class='page-item'>
        <?php   
            echo "<a class='page-link' href='social9.php?page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>
   

    

    <!-- footer -->
   <?php include('../../include/footer.php'); ?>

<style>
.button {
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px 8px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>


<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
