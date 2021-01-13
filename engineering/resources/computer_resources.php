<?php
 include("../include/connection.php");
 session_start();
  if(!isset($_SESSION['login_user']))
 {
  header('location:../login/login.php');
 }
 if(isset($_GET['year']))
 {
     $year=$_GET['year'];
 }
 if(isset($_GET['subject']))
 {
    $subject=$_GET['subject'];
 }
 if(isset($_GET['semester']))
 {
     $semester=$_GET['semester'];
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
<style>
ul#menu li {
    display: inline;
}
</style>

<body>
    <!-- top banner -->
    <?php include('../include/banner.php'); ?>
    <!-- navbar -->
    <?php include('nav/nav.php'); ?>
    <!-- message section -->
    <div class="container-fluid">
        <div class="row" style="background-color: green; min-height: 40; color: white;justify-content: center;">
            <h4>WELCOME TO COMPUTER ENGINEERING <span style="text-transform: uppercase;"><?php echo $year; ?></span> YEAR <?php if(isset($subject)) echo "[".$subject."]"; ?></h4>
        </div>
        <?php include('faculty/faculty.php'); ?>
        <?php 
  if($year=='first') 
  {
    include('computer_year/first.php');
  }
  if($year=='second') 
  {
    include('computer_year/second.php');
  }
  if($year=='third') 
  {
    include('computer_year/third.php');
  }
  ?>



      <!-- this is fist page in computer engineering  starts here-->

  <?php if(!isset($subject)) {?>
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

                                 
                      $sql="select *from engineering_resource where faculty ='computer' and year='$year' and image IS NOT NULL AND image <> '' ORDER BY id ASC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style="justify-content: center;">
                <img src="../teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;">
                <p style="text-align: center;">
                    <?php echo "semister: "; echo $row['semister']; ?>
                </p>
                <p style="text-align: center;">
                    <?php echo "Faculty: "; echo $row['faculty'];?>
                </p>
                <p style="text-align: center;">
                    <?php echo $row['subject'];?>
                </p>
            </div>
            <?php
          }?>
        </div>
        <nav aria-label="Page navigation example" style="background-color: #d5d8de;">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <?php if($page>=2){  
        ?>
                <li class='page-item'>
                    <?php 
            echo "<a class='page-link' href='computer_resources.php?year=".$year."&&page=".($page-1)."'>  Prev </a>";   
        ?>
                </li>
                <?php 
        }  ?>
                </li>
                <li class="page-item">
                    <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM engineering_resource where faculty='computer' "); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='computer_resources.php?year=".$year."&&page=".$i."'>".$i."</a></li>"; 
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
            echo "<a class='page-link' href='computer_resources.php?year=".$year."&&page=".($page+1)."'>  Next </a>"; ?>
                </li>
                <?php  
        }   
  ?>
                </li>
            </ul>
        </nav><br>
      <?php } ?>
      <!-- this is fist page of computer engineering  end here -->




<?php if(isset($subject)) {?>


  <div class="row" style="background-color: #fae19d; padding: 20px; margin-top: 10px; justify-content: center;">
    <div class="col">
         <div class="row" style="justify-content: center;"><h2>PDF FILES</h2></div>
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

                      $sql="select *from engineering_resource where faculty='computer' and subject = '$subject' and semister = '$semester' and year = '$year' and pdf IS NOT NULL AND pdf <> '' LIMIT $start_from, $limit " ;
                      $query=mysqli_query($db,$sql);
                      while($post= mysqli_fetch_array($query))
                      {

                      ?>
           <div class="col-lg-3 col-md-3 col-sm-3">
            
            
                
              <div class="text-center">
                
                <button type="button" class="btn btn-success btnview" >
  <a href="read.php?year=<?php echo $year; ?>&&semester=<?php echo $semester; ?>&&page=<?php echo $pageno;?>&&subject=<?php echo $subject; ?>&&id=<?php echo $post['id']; ?>&&faculty=computer" style="color: black;"><?php echo $post['pdf'];?></a>
  </button>
</div>
              </div>
               <?php
         }
         ?>

           </div>
          </div>
        </div>   





 <div class="row row-image" style="margin-top: 50px; background-color: #fae19d; justify-content: center; ">
              <div class="col">
              <div class="row" style="justify-content: center;"><h2>NOTES PHOTOS</h2></div>
<?php 
   

                                 
                      $sql="select *from engineering_resource where faculty ='computer' and subject = '$subject' and  semister = '$semester' and year = '$year'and image IS NOT NULL AND image <> '' ORDER BY id ASC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style="justify-content: center;">
                <img src="../teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;">
                <p style="text-align: center;">
                    <?php echo "semester: "; echo $row['semister']; ?>
                </p>
                <p style="text-align: center;">
                    <?php echo "Faculty: "; echo $row['faculty'];?>
                </p>
                <p style="text-align: center;">
                    <?php echo $row['subject'];?>
                </p>
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
            echo "<a class='page-link' href='computer_resources.php?year=".$year."&&semester=".$semester."&&subject=".$subject."&&page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?>
        </li> 
    <li class="page-item">
      <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM engineering_resource where faculty='computer' "); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='computer_resources.php?year=".$year."&&semester=".$semester."&&subject=".$subject."&&page=".$i."'>".$i."</a></li>"; 
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
            echo "<a class='page-link' href='computer_resources.php?year=".$year."&&semester=".$semester."&&subject=".$subject."&&page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>

<?php } ?>






    </div>
    <!-- footer -->
    <?php include"../../include/footer.php";?>
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