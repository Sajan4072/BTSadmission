
<!DOCTYPE html><?php
include "include/connection.php";



session_start();
 
 
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BTS</title>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="frontpage/css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
  <body>
    <!-- top banner -->
   <div class="container-fluid " style="background-color: #d5d8de;">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-4 col-4 mt-">
              <div class="logo">
                <img src="frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" />
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
              <a class="nav-link" href="galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="resources/resource.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="ourteam/ourteam.php">Our Team</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="results/results.php">Results</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="contact/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              
              
              <li class="nav-item">
                <a class="nav-link right-link" href="school/student/detail/profile.php"><?php echo "$_SESSION[login_user]";?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link right-link" href="login/logout.php">Logout</a>
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
          <span class="navbar-toggler-icon"style=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item center-menu">
              <a class="nav-link active " href="">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="./+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="./engineering/index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="events/events.php">Events</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="ourteam/ourteam.php">Our Team</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="admission/index.php">Admision form</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="contact/contact.php">Contact Us</a>
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
                <a class="dropdown-item" href="login/login.php" style="background-color: white;">Student</a>
                <a class="dropdown-item" href="login/teacherlogin.php" style="background-color: white">Teacher</a>
                
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div>
  <?php
}?>
<!-- carousel -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="frontpage/photos/group.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="frontpage/photos/sports.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="frontpage/photos/oeca1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
   

    <!-- announcement section -->
    <div class="container-fluid">
      <div class="row announcement pt-3">
        <div class="col-lg-4 ">
          <ul class="nav flex-column" style="margin-bottom: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#">NEWS AND ANNOUNCEMENT</a>
            </li>
            <?php 
 
                      include("include/connection.php");
                       
                         
                                              
                      $sql="select *from news_and_event WHERE school=1 ORDER BY id DESC LIMIT 5";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>

            <li class="nav-item">
              <a class="nav-link" href="#"
                ><i class="fa fa-circle"></i><?php echo $row['post']; ?>   <span style="margin-left:5px;font-weight:bold ;color:red; font-style: italic;">new</span></a
              >
            </li>
            <?php }?>
            <li class="nav-item"  style="text-align: center;">
              <a class="nav-link" href="school/View/news.php"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
            
        </div>
       




        <div class="col-lg-4">
          <ul class="nav flex-column"  style="margin-bottom: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#">NOTICE BOARD</a>
            </li>
                  <?php                  
                      $sql="select *from notice WHERE school=1 ORDER BY id DESC LIMIT 5";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>
            <li class="nav-item">
              <a class="nav-link" href="#"
                ><i class="fa fa-circle"></i><?php echo $row['notice']; ?></a
              >
            </li>
               <?php }?>
            <li class="nav-item"  style="text-align: center;">
              <a class="nav-link" href="school/View/notice.php"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-4  mb-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">CALENDAR EVENTS</a>
            </li>
            <?php                  
                      $sql="select *from calender WHERE school=1 ORDER BY id DESC LIMIT 2";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>
            <li class="nav-item">
              <a class="nav-link" href="#"
                ><p class="date-marker" style="width:100%; height: 60px; margin-top: 7px; margin-right: 0px;"><?php echo $row['date']; ?><br /><?php echo $row['event']; ?></p>
              </a>
            </li>
            <?php } ?>
             <li class="nav-item"  style="text-align: center;">
              <a class="nav-link" href="school/View/cal.php">
                <button type="button" class="btn btn-success">
                  View More
                </button></a>
              
            </li>

          </ul>
        </div>
      </div>
    </div>

    <!-- about us banner -->
    <div class="container-fluid">
       <div class="row p-0">
      <div class="col-lg-12">
        <div class="about-img">
          <img src="frontpage/photos/oeca1.jpg" alt="Not Available!" />
        </div>
          <div class="title">
            <form class="form-inline about my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link right-link" href="description/description.php"><h4 style="">ABOUT US</h4></a>
              </li>
            </ul>
          </form>
          </div>
        </div>
      </div>
    </div>
    </div>
   

    <!-- message section -->
    <div class="container-fluid">
      <div class="row message p-2">
        <div class="col-lg-6 col-sm-12 col-md-6 p-sm-0 p-lg-3 p-md-3 p-1" >
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>INTRODUCTION</h4>
             <p>
              Budhanilkantha is committed to academic excellence. The school is dedicated to maintain the academic environment with the help of outstanding faculty engaged in the task of creative sensibility, or sense of responsibility and moral integrity.
            We believe that children today are responsible for citizens of tomorrow. However, the nourishment of these buds cannot blossom unless and until they get excellent academic environment which will enable them become acquainted with the nation and their society and family. Budhanilkantha is committed to create homely but disciplined environment so that children may become aware of their own future.<br>
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 p-sm-0 p-lg-3 p-md-2 p-1">
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>MESSAGE FROM THE PRINCIPAL</h4>
            <div class="chief-img">
              <img src="frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <p>
              Welcome to Budanilkanta Technical School, Kathmandu, Nepal, a school deeply committed to the mission of inspiring each student a passion for learning, the confidence and competence to pursue their dreams and the commitment to serve as a compassionate global citizen who is a steward of the environment<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
     <?php include('include/footer.php'); ?>
 
    <input type="hidden" id="admission_success_school" value="<?php if(isset($_SESSION['admission_success_school'])) {echo htmlentities($_SESSION['admission_success_school']); } unset($_SESSION['admission_success_school']); ?>">

    <!-- js setup -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
     <script>

      var checksuccess =$('#admission_success_school').val();

      if(checksuccess!=='')
      {
      Swal.fire({
       title: 'success!',
      text: 'Your form has been submitte successfully',
      icon: 'success',
      confirmButtonText: 'OK'
     })
    }

  
    </script>
  </body>
</html>
