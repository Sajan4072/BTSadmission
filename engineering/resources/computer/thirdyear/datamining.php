<?php
 include("../../../../include/connection.php");
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
  <link rel="stylesheet" type="text/css" href="../../resources.css">
</head>
<body>
  

<!-- top banner -->
    <div class="container-fluid ">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-6 col-md-4">
              <div class="logo">
                <a href="../../../index.php"><img src="../../../frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" /></a>              </div>
            </div>
            <div class="col-sm-8">
              <div class="top-title">
                <h1>BUDHANILKANTHA TECHNICAL SCHOOL</h1>
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
              <a class="nav-link " href="./+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="./engineering/index.php">Engineering</a>
            </li>-->
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../index.php">Home</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="../../resource.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../ourteam/ourteam.php">Our Team</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../../../results/reuslts.php">Results</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../contact/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              
              
              <li class="nav-item">
                <a class="nav-link right-link" href="../../../student/profile.php"><?php echo "$_SESSION[login_user]";?></a>
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
              <a class="nav-link active" href="../../../index.php">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../../+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../../../engineering/index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="../../resource.php">Resources</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../ourteam/ourteam.php">Our Team</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../../contact/contact.php">Contact Us</a>
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
                <a class="dropdown-item" href="../../../login/login.php">Student</a>
                <a class="dropdown-item" href="../../../login/teacherlogin.php">Teacher</a>
                
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
<div class="row" style="background-color: green; height: 40px; color: white;justify-content: center;">
 <h4>COMPUTER ENGINEERING THIRD YEAR</h4>
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
    CIVIL
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../../civilfirst.php">I Year</a>
    

    <a class="dropdown-item" href="../../civilsecond.php">II Year</a>
    

    <a class="dropdown-item" href="../../civilthird.php">III Year</a>
    
  
</div>
  </li>
  <li>
    
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" ria-expanded="false">
    COMPUTER
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="../../computerfirst.php">I Year</a>
    <a class="dropdown-item" href="../../computersecond.php">II Year</a>
    <a class="dropdown-item" href="../../computerthird.php">III Year</a>
    
  
</div>
  </li>
 
</ul> 
</div>    

        
<h5 style="text-align: center;">WELCOME TO DATA MINING</h5>

<div class="row" style="justify-content: left; margin-left: 25px;">
    <ul id="menu" style="margin-top: 10px; ">
      <li>
    
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    I SEMISTER
  </button>
   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="computernetworks.php">Computer Networks</a>
    <a class="dropdown-item" href="mis.php">Management Information System (MIS)</a>
    <a class="dropdown-item" href="telecommunication.php"> Applied Telecommunication</a>
    <a class="dropdown-item" href="distributedcomputing.php">Distributed Computing</a>
    <a class="dropdown-item" href="os.php">Operating System</a>
    <a class="dropdown-item" href="cybersecurity.php">Cyber security and social ethic</a>
    <a class="dropdown-item" href="minorproject.php"> Minor Project</a>
      <hr>
      Elective – I
      <a class="dropdown-item" href="geographicalsystem.php"> Geographical Information System</a>
       <a class="dropdown-item" href="simulation.php"> Computer Simulation and Modeling </a>
    <a class="dropdown-item" href="java.php"> Java Programming</a>
    
    
</div>
 
  </li>
  <li>
    
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" ria-expanded="false">
    II SEMISTER
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
     <a class="dropdown-item" href="multimedia.php">  Multimedia Technology</a>
    <a class="dropdown-item" href="internet.php">Internet Technology</a>
    <a class="dropdown-item" href="datamining.php">Data Mining</a>
  <a class="dropdown-item" href="software.php">Software Engineering</a>
  <a class="dropdown-item" href="majorproject.php">Major Project</a>
  <hr>
  Elective – II
  <a class="dropdown-item" href="egovernance.php">E- Governance</a>
  <a class="dropdown-item" href="ecommerce.php">E-commerce</a> 
   <a class="dropdown-item" href="embeddedsystem.php">Embedded System</a>
    
    
    
    

</div>
  </li>
 
</ul> 
</div>


  <div class="row" style="background-color: #fae19d; padding: 20px; margin-top: 10px; justify-content: center;">
    <div class="col">
         <div class="row" style="justify-content: center;"><h2>PDF FILES</h2></div>
         <div class="row">
           <?php          
                      $sql="select *from engineering_resource where faculty='computer' and subject = 'Data Mining' and semister = 'second' and year = 'third'";
                      $query=mysqli_query($db,$sql);
                      while($post= mysqli_fetch_array($query))
                      {

                      ?>
           <div class="col-lg-3 col-md-3 col-sm-3">
            
            
                
              <div class="text-center">
                
                <button type="button" class="btn btn-success btnview" >
  <a href="read.php?id=<?php echo $post['id']; ?>" style="color: black;"><?php echo $post['pdf'];?></a>
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
    $limit = 3;  
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; 
  } 
  else{ 
  $page=1;
  };  
$start_from = ($page-1) * $limit;  

                                 
                      $sql="select *from engineering_resource where faculty ='computer' and subject = 'Data Mining' and  semister = 'second' and year='third' ORDER BY id ASC LIMIT $start_from, $limit";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>

        
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style="justify-content: center;" >
          <img src="../../../teacher/photo/<?php echo $row['image']; ?>" class="img-fluid" style="height: 450px; width: 350px;">
          <p style="text-align: center;"><?php echo "semister: "; echo $row['semister']; ?></p>
          <p style="text-align: center;"> <?php echo "Faculty: "; echo $row['faculty'];?></p>
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
            echo "<a class='page-link' href='datamining.php?page=".($page-1)."'>  Prev </a>";   
        ?>
        </li>
        <?php 
        }  ?>
        </li> 
    <li class="page-item">
      <?php  
$result_db = mysqli_query($db,"SELECT COUNT(id) FROM engineering_resource"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>"; 
for ($i=1; $i<=$total_pages; $i++) {
$pagLink .= "<li class='page-item'><a class='page-link' class ='active' href='datamining.php?page=".$i."'>".$i."</a></li>"; 
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
            echo "<a class='page-link' href='datamining.php?page=".($page+1)."'>  Next </a>"; ?>
            </li>
            <?php  
        }   
  ?>
    </li>
  </ul>
</nav><br>
</div>


   

    <!-- footer -->
     <?php include"../../../../include/footer.php";?>
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