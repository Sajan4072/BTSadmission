<?php
 include("../include/connection.php");
 session_start();
 if(!isset($_SESSION['login_user']))
 {
  header('location:../login/login.php');
 }
 if(isset($_GET['class']))
 {
   $class=$_GET['class'];
 }
 if(isset($_GET['subject']))
 {
  $subject=$_GET['subject'];
 }
 if(isset($_GET['page']))
 {
  $pageno=$_GET['page'];
 }
 else
 {
  $pageno=1;
 }
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="resources.css">
  <link rel="stylesheet" href="../../frontpage/css/style.css" />
</head>
<body>
  

<!-- top banner -->
    <div class="container-fluid ">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-6 col-md-4">
              <div class="logo">
                <a href="../index.php"><img src="../frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" /></a>              </div>
            </div>
            <div class="col-sm-8">
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
              <a class="nav-link " href="./+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="./engineering/index.php">Engineering</a>
            </li>-->
            <li class="nav-item center-menu">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="resource.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../ourteam/ourteam.php">Our Team</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../results/results.php">Results</a>
               </li>
            
           
            <li class="nav-item center-menu">
              <a class="nav-link" href="../contact/contact.php">Contact Us</a>
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

 

   <!-- message section -->
<div class="container-fluid">
<div class="row" style="background-color: green; height: 40px; color: white; justify-content: center;">
 <h4>HERE ARE SOME RESOURCES OF MANAGEMENT FACULTY</h4>
</div>
<style>
ul#menu li {
  display:inline;
}
</style>

<div class="row" style="justify-content: center;">
    <ul id="menu" style="margin-top: 10px; ">
      <li>
    
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    MANAGEMENT
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="resource.php?class=11" style="background-color: white;">Class 11</a>
    <a class="dropdown-item" href="resource.php?class=12" style="background-color: white;">Class 12</a>
  </div>
  </li>
 </ul> 
</div>      

<?php if(isset($class))
  { 
   if($class==11)
   {
     include('management/class11.php');  
   }

   if($class==12)
   {
     include('management/class12.php');
   } 

 } ?>

 <!--  ---------------------------------------------------------------------------------------------------------------------------------
                  ********************** this part is displayed at first like resource.php PART1 start*********************************
  --------------------------------------------------------------------------------------------------------------------------------- -->
      <?php if(!isset($class)){ ?>
<h5 style="text-align: center;">NOTE'S PHOTOS</h5>
            <div class="row row-image" style="margin-top: 50px; background-color: #fae19d; justify-content: center; ">
<?php 
    $limit = 3;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  };  
$start_from = ($page-1) * $limit;  

                                 
                      $sql="select *from college_resource ORDER BY id ASC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style="justify-content: center;" >
          <img src="../teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;">
          <p style="text-align: center;"><?php echo "class: "; echo $row['class']; ?></p>
          <p style="text-align: center;"> <?php echo $row['subject'];?></p>
          
          
          </div>
          <?php
          }?>
          </div>   
        </div>                 
                      
   

 <nav aria-label="Page navigation example" style="background-color: #d5d8de;">
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='resource.php?page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?>
        </li> 
    <li class="page-item">
      <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM college_resource"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='resource.php?page=".$i."'>".$i."</a></li>"; 
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
            echo "<a class='page-link' href='resource.php?page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>
<?php } ?>
 <!--  ---------------------------------------------------------------------------------------------------------------------------------
                  ********************** ************* PART1 END*********************************
  --------------------------------------------------------------------------------------------------------------------------------- -->





   <!--  ---------------------------------------------------------------------------------------------------------------------------------
      ********************** this part is displayed when class 11 or 12 is selected  like class11mng.php class12mng.php **************   
                                               *******  PART2 START*********************************
  --------------------------------------------------------------------------------------------------------------------------------- -->

<?php if(isset($class) && !isset($subject) ){ ?>

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
                      $sql="select *from college_resource where management = 1 and class = $class and image IS NOT NULL AND image <> '' ORDER BY id ASC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>        
                     


        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" >
          <img src="../teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;">
          <p style="text-align: center;"><?php echo "class: "; echo $row['class']; ?></p>
          <p style="text-align: center;"> <?php echo $row['subject'];?></p>
          
          </div>
          <?php
          }?>
          </div>                    
                      
   


<nav aria-label="Page navigation example" style="background-color: #d5d8de;">
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='resource.php?class=".$class."&&page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?>
       </li>
    <li class="page-item">
      <?php  

$result_db = mysqli_query($db,"SELECT COUNT(id) FROM college_resource where class=$class and image IS NOT NULL AND image <> ''"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='resource.php?class=".$class."&&page=".$i."'>".$i."</a></li>"; 
}
echo $pagLink . "</ul>";  
?></li>
     <li class="page-item">
<?php 
  if($page<$total_pages){
        ?>
        <li class='page-item'>
        <?php   
            echo "<a class='page-link' href='resource.php?class=".$class."&&page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>

<?php } ?>
 <!--  ---------------------------------------------------------------------------------------------------------------------------------
                  ********************** ************* PART2 END*********************************
  --------------------------------------------------------------------------------------------------------------------------------- -->


   <!--  ---------------------------------------------------------------------------------------------------------------------------------
      ********************** this part is displayed when class 11 or 12 is selected  like class11mng.php class12mng.php **************   
                                               *******  PART2 START*********************************
  --------------------------------------------------------------------------------------------------------------------------------- -->

<?php if(isset($subject) && isset($class)) { ?>
         <div class="row" style="background-color: #fae19d; padding: 20px; margin-top: 10px; justify-content: center;">
    <div class="col">
         <div class="row" style="justify-content: center;"><h2>NOTE'S PHOTO</h2></div>
         <div class="row">
   <?php 
    $limit = 3;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  };  
$start_from = ($page-1) * $limit;  
         
                      $sql="select *from college_resource where management = 1 and class = $class and subject = '$subject'  and image IS NOT NULL AND image <> '' ORDER BY id ASC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" >
          <img src="../teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;">
          <p style="text-align: center;"><?php echo "class: "; echo $row['class']; ?></p>
          <p style="text-align: center;"> <?php echo $row['subject'];?></p>
          
          </div>
          <?php
          }?>
          </div>   
        </div> 
      </div> 

         

  <div class="row" style="background-color: #fae19d; padding: 20px; margin-top: 10px; justify-content: center;">
    <div class="col">
         <div class="row" style="justify-content: center;"><h2>PDF FILES</h2></div>
         <div class="row">
           <?php          
                      $sql="select *from college_resource where management = 1 and class =$class and subject = '$subject'  and pdf IS NOT NULL AND pdf <> '' LIMIT $start_from, $limit ";
                      $query=mysqli_query($db,$sql);
                      while($post= mysqli_fetch_array($query))
                      {

                      ?>
           <div class="col-lg-3 col-md-3 col-sm-3">
            
            
                
              <div class="text-center">
                
                <button type="button" class="btn btn-success btnview" >
  <a href="read.php?id=<?php echo $post['id']; ?>&&class=<?php echo $class; ?>&&subject=<?php echo $subject; ?>&&page=<?php echo $pageno; ?>" style="color: black;"><?php echo $post['pdf'];?></a>
  </button>
</div>
              </div>
               <?php
         }
         ?>

           </div>
          </div>
        </div>             
                      
   


   <nav aria-label="Page navigation example" style="background-color: #d5d8de;">
  <ul class="pagination justify-content-center">
    <li class="page-item">
     <?php if($page>=2){  
        ?><li class='page-item'> 
          <?php 
            echo "<a class='page-link' href='resource.php?class=".$class."&&subject=".$subject."&&page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?> 
      </li>
    <li class="page-item"><?php  

$result_db = mysqli_query($db,"SELECT COUNT(id) FROM college_resource where class=$class and subject='$subject' "); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='resource.php?class=".$class."&&subject=".$subject."&&page=".$i."'>".$i."</a></li>"; 
}
echo $pagLink . "</ul>";  
?></li>
    <li class="page-item">
<?php 
  if($page<$total_pages){
        ?>
        <li class='page-item'>
        <?php   
            echo "<a class='page-link' href='resource.php?class=".$class."&&subject=".$subject."&&page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>
<?php } ?>




 <!--  ---------------------------------------------------------------------------------------------------------------------------------
                  ********************** ************* PART2 END*********************************
  --------------------------------------------------------------------------------------------------------------------------------- -->



    </div>

    

    <!-- footer -->
       <?php include('../include/footer.php'); ?>

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