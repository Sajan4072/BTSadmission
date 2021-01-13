<?php
 include("../include/connection.php");
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
  <link rel="stylesheet" type="text/css" href="./resource.css">
  <link rel="stylesheet" href="../frontpage/css/style.css" />

</head>
<body>
  

<!-- top banner -->
    <?php include "../include/banner.php";?>

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
          <span class="navbar-toggler-icon" style="height: 20px; width: 20px;"></span>
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
              <a class="nav-link active" href="">Resources</a>
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
                <a class="nav-link right-link" href="../school/student/detail/profile.php"><?php echo "$_SESSION[login_user]";?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link right-link" href="../login/logout.php">Logout</a>
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
              <a class="nav-link active" href="../index.php">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../engineering/index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="">Resources</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="../ourteam/ourteam.php">Our Team</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="../contact/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" style="margin-right: 35px; ">
            <ul class="navbar-nav mr-5" >
              <li class="nav-item dropdown" >
                <a class="nav-link right-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false" >Login</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <a class="dropdown-item" href="../login/login.php" style="background-color: white;">Student</a>
                <a class="dropdown-item" href="../login/teacherlogin.php" style="background-color: white">Teacher</a>
                
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div>
  <?php
}?>

   <!-- message section -->
<div class="container-fluid">
<div class="row" style="background-color: green; height: 40px; color: white;justify-content: center; margin-bottom: 10px;">
 <h4>HERE ARE SOME RESOURCES</h4>
</div>
          

<!--class -->
<div class = "class" style="text-align: center;">
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 1
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class1/eng1.php">English</a>
    <a class="dropdown-item" href="class1/math1.php">Math</a>
    <a class="dropdown-item" href="class1/science1.php">Science</a>
    <a class="dropdown-item" href="class1/social1.php">Social</a>
    <a class="dropdown-item" href="class1/nepali1.php">Nepali</a>
    <a class="dropdown-item" href="class1/grammar1.php">Grammar</a>
    
  </div>
</div>
<!--class 2-->
<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 2
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class2/eng2.php">English</a>
    <a class="dropdown-item" href="class2/math2.php">Math</a>
    <a class="dropdown-item" href="class2/science2.php">Science</a>
    <a class="dropdown-item" href="class2/social2.php">Social</a>
    <a class="dropdown-item" href="class2/nepali2.php">Nepali</a>
    <a class="dropdown-item" href="class2/grammar2.php">Grammar</a>
    
  </div>
</div>
<!--class 3-->
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 3
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class3/eng3.php">English</a>
    <a class="dropdown-item" href="class3/math3.php">Math</a>
    <a class="dropdown-item" href="class3/science3.php">Science</a>
    <a class="dropdown-item" href="class3/social3.php">Social</a>
    <a class="dropdown-item" href="class3/nepali3.php">Nepali</a>
    <a class="dropdown-item" href="class3/grammar3.php">Grammar</a>
    <a class="dropdown-item" href="class3/moral3.php">Moral</a>
    <a class="dropdown-item" href="class3/health3.php">Health</a>
    <a class="dropdown-item" href="class3/computer3.php">Computer</a>
    
  </div>
</div>
<!--class 4-->
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 4
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class4/eng4.php">English</a>
    <a class="dropdown-item" href="class4/math4.php">Math</a>
    <a class="dropdown-item" href="class4/science4.php">Science</a>
    <a class="dropdown-item" href="class4/social4.php">Social</a>
    <a class="dropdown-item" href="class4/nepali4.php">Nepali</a>
    <a class="dropdown-item" href="class4/grammar4.php">Grammar</a>
    <a class="dropdown-item" href="class4/moral4.php">Moral</a>
    <a class="dropdown-item" href="class4/health4.php">Health</a>
    <a class="dropdown-item" href="class4/computer4.php">Computer</a>
    
  </div>
</div>

<!--class5 -->
<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 5
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class5/eng5.php">English</a>
    <a class="dropdown-item" href="class5/math5.php">Math</a>
    <a class="dropdown-item" href="class5/science5.php">Science</a>
    <a class="dropdown-item" href="class5/social5.php">Social</a>
    <a class="dropdown-item" href="class5/nepali5.php">Nepali</a>
    <a class="dropdown-item" href="class5/grammar5.php">Grammar</a>
    <a class="dropdown-item" href="class5/eph5.php">EPH</a>
    <a class="dropdown-item" href="class5/computer3.php">Computer</a>
    
  </div>
</div>

<!--class6-->
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 6
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class6/eng6.php">English</a>
    <a class="dropdown-item" href="class6/math6.php">Math</a>
    <a class="dropdown-item" href="class6/science6.php">Science</a>
    <a class="dropdown-item" href="class6/social6.php">Social</a>
    <a class="dropdown-item" href="class6/nepali6.php">Nepali</a>
    <a class="dropdown-item" href="class6/grammar6.php">Grammar</a>
    <a class="dropdown-item" href="class6/eph6.php">EPH</a>
    <a class="dropdown-item" href="class6/computer6.php">Computer</a>
    
  </div>
</div>
<!-- class7-->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 7
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class7/eng7.php">English</a>
    <a class="dropdown-item" href="class7/math7.php">Math</a>
    <a class="dropdown-item" href="class7/science7.php">Science</a>
    <a class="dropdown-item" href="class7/social7.php">Social</a>
    <a class="dropdown-item" href="class7/nepali7.php">Nepali</a>
    <a class="dropdown-item" href="class7/grammar7.php">Grammar</a>
    <a class="dropdown-item" href="class7/eph7.php">EPH</a>
    <a class="dropdown-item" href="class7/opt7.php">Optional Math</a>
    <a class="dropdown-item" href="class7/computer7.php">Computer</a>
    <a class="dropdown-item" href="class7/account7.php">Account</a>
    
  </div>
</div>
<!--class8-->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 8
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class8/eng8.php">English</a>
    <a class="dropdown-item" href="class8/math8.php">Math</a>
    <a class="dropdown-item" href="class8/science8.php">Science</a>
    <a class="dropdown-item" href="class8/social8.php">Social</a>
    <a class="dropdown-item" href="class8/nepali8.php">Nepali</a>
    <a class="dropdown-item" href="class8/eph8.php">EPH</a>
    <a class="dropdown-item" href="class8/opt8.php">Optional Math</a>
    <a class="dropdown-item" href="class8/computer8.php">Computer</a>
    <a class="dropdown-item" href="class8/account8.php">Account</a>
    
  </div>
</div>

<!-- class9-->
<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 9
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class9/eng9.php">English</a>
    <a class="dropdown-item" href="class9/math9.php">Math</a>
    <a class="dropdown-item" href="class9/science9.php">Science</a>
    <a class="dropdown-item" href="class9/social9.php">Social</a>
    <a class="dropdown-item" href="class9/nepali9.php">Nepali</a>
    <a class="dropdown-item" href="class9/eph9.php">EPH</a>
    <a class="dropdown-item" href="class9/opt9.php">Optional Math</a>
    <a class="dropdown-item" href="class9/computer9.php">Computer</a>
    <a class="dropdown-item" href="class9/account9.php">Account</a>
    
  </div>
</div>
<!--class10-->
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CLASS 10
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="class10/eng10.php">English</a>
    <a class="dropdown-item" href="class10/math10.php">Math</a>
    <a class="dropdown-item" href="class10/science10.php">Science</a>
    <a class="dropdown-item" href="class10/social10.php">Social</a>
    <a class="dropdown-item" href="class10/nepali10.php">Nepali</a>
    <a class="dropdown-item" href="class10/eph10.php">EPH</a>
    <a class="dropdown-item" href="class10/opt10.php">Optional Math</a>
    <a class="dropdown-item" href="class10/computer10.php">Computer</a>
    <a class="dropdown-item" href="class10/account10.php">Account</a>
    
  </div>
</div>
</div>

   
        
<h5 style="text-align: center; margin-top: 10px; color: green;">NOTE'S PHOTOS</h5>
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

                                 
                      $sql="select *from school_resource ORDER BY id ASC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style="justify-content: center;" >
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>">

          <img src="../school/teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;"></button>
          <p style="text-align: center; font-weight: bold;"><?php echo "CLASS: "; echo $row['class']; ?></p>
          <p style="text-align: center;"> <?php echo $row['subject'];?></p>
          
          </div>
          <?php
          }?>
          </div>   
        </div>                 
                      
   
<div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../admin/photo/<?php echo $row['photo']; ?>" class="img-fluid" style="height: 350px; width: 450px;">
      </div>
      
    </div>
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


    

    <!-- footer -->
    <?php include"../include/footer.php";?>








<script src="script.js">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
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

<style type="text/css">
  .dropdown-menu .dropdown-item{
    background-color: white;
  }
</style>



<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>