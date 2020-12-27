<?php
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
  <link rel="stylesheet" type="text/css" href="./description.css">
</head>
<body>
  

<!-- top banner -->
    <div class="container-fluid ">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-6 col-md-4">
              <div class="logo">
                <img src="../frontpage/images/logo.jpg" alt="Not Available!" />
              </div>
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
              <a class="nav-link " href="../index.php">School</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../engineering/index.php">Engineering</a>
            </li>-->
            <li class="nav-item center-menu">
              <a class="nav-link" href="../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../resources/resource.php">Resources</a>
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
              <a class="nav-link " href="../../index.php">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="../index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../../engineering/index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.php">Events</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="../ourteam/ourteam.php">Our Team</a>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link right-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false" >Admission Form</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../admission/adform.php">Management</a>
                
                
              </div>
              </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="../contact/contact.php">Contact Us</a>
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
                <a class="dropdown-item" href="../login/login.php">Student</a>
                <a class="dropdown-item" href="../login/teacherlogin.php">Teacher</a>
                
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div>
  <?php
}?>
    <!-- home image -->
    <div class="row p-0">
      <div class="col-lg-12">
        <div>
          <img src="../../frontpage/photos/physicslab.jpg"  class="img-fluid" alt="Not Available!" />
             <div class="title"><h4>ABOUT US</h4></div>
        </div>
      </div>
    </div>

    

   

    <!-- message section -->
    <div class="container-fluid">
      <div class="row message p-5">
        <div class="col-lg-6 col-sm-12 col-md-6">
          <div class="row p-2">
            
             <div class="introduction">
            <h4>INTRODUCTION</h4>
            <p>
              Budhanilkantha  is committed to academic excellence. The school is dedicated to maintain the academic environment with the help of outstanding faculty engaged in the task of creative sensibility, or sense of responsibility and moral integrity.<br>

              We believe that children today are responsible for citizens of tomorrow. However, the nourishment of these buds cannot blossom unless and until they get excellent academic environment which will enable them become acquainted with the nation and their society and family. Budhanilkantha  is committed to create homely but disciplined environment so that children may become aware of their own future.<br>
              Budhanilkantha has a qualified team of instructors, who are continuously supervised and guided by a group of academicians, social workers as well as people involved in different disciplines of society. We have innovative practice in teaching and learning which can help students prove themselves outstanding in every corner of the world.
            </p>
          </div>

          </div>
          <div class="row p-2">
            
            <div class="introduction">
            <h4>OBJECTIVE</h4>
            <p>
              1. To develop the future leaders offering the School,+2 and engineering course.<br>
              2. To provide highly qualified, experienced and focused faculty and dedicated mentor to inculcate innovation and creativity.<br>
              3. To create a lively and friendly environment among all the stakeholders of the institution to develop the sense of creativity and ownership.<br>
            </p>
          </div>

          </div>
          <div class="row p-2">
            
            <div class="introduction">
            <h4>MISSION</h4>
            <p>
              1. Produce professionally competent, technically sound, proactive and ethical leaders who can manage the global workforce having diversified work groups with high adaptations to various cultures in all.<br>
              2. Set proper ways of educational vibe to establish oneself world class institution through continuing education, faculty and staff development and corporate research and consultancy.<br>
              3. Develop long term relations with other national and international educational institutions, corporate, research organizations, government and non-governmental organizations to foster broad range of self motivated learning environment.<br>
            </p>
          </div>

          </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 pl-20 ">
          <div class="row p-2">
            
             <div class="introduction">
            <h4>MESSAGE FROM THE CHIEF</h4>
            <div class="chief-img">
              <img src="../../frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <p>
               Welcome to Budanilkanta Technical School, Kathmandu, Nepal, a school deeply committed to the mission of inspiring each student a passion for learning, the confidence and competence to pursue their dreams and the commitment to serve as a compassionate global citizen who is a steward of the environment<br>
            </p>
          </div>

          </div>
          <div class="row p-2">
            
            <div class="introduction">
            <h4>PURPOSE</h4>
            <p>
              The main purpose of our school is to provide for the fullest possible developmentof each learner for living morally, creatively, and productively.
              The one continuing purpose of education, since ancient times,
              has been to bring people to as full a realization as possible of
              what it is to be a human being. Other statements of educational
              purpose have also been widely accepted: to develop the intellect, to serve social needs, to contribute to the economy, to
              create an effective work force, to prepare students for a job or
              career, to promote a particular social or political system.<br> These
              purposes offered are undesirably limited in scope, and in some
              instances they conflict with the broad purpose I have indicated;
              they imply a distorted human existence. The broader humanistic
              purpose includes all of them, and goes beyond them, for it seeks
              to encompass all the dimensions of human experience
            </p>
          </div>

          </div>
        </div>

      </div>
    </div>

    <!-- footer -->
    <div class="container-fluid">
      <div class="row bottom-section p-5 pb-0">
        <div class="col-sm-12">
          <div class="bottom-title">
            <h5>BUDHANILKANTHA TECHNICAL SCHOOL</h5>
          </div>
        </div>
      </div>

      <div class="row bottom-section pl-5 pr-5">
        <div class="col-lg-3">
          <span>Address</span><br />Budhanilkantha-3, Kathmandu, Nepal
        </div>
        <div class="col-lg-3"><span>TEL NO.</span><br />01-4372300</div>
        <div class="col-lg-3">
          <span>EMAIL</span><br />bnktechschool@gmail.com
        </div>
        <div class="col-lg-3"><span>WEBSITE</span><br />www.bts.com</div>
      </div>

      <div class="row bottom-section p-5 pb-0">
        <div class="col-sm-12">
          <div class="bottom-title">
            <h5>STAY IN TOUCH</h5>
          </div>
          <div class="social-media">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row bottom-section">
        <div class="col-sm-12">
          <div class="bottom-title">
            <h5>&copy; All rights reserved Budhanilkantha Technical School</h5>
          </div>
        </div>
      </div>
    </div>








<script src="script.js"></script>




















<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>