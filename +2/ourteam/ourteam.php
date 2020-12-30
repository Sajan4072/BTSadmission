<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>ourteam</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./ourteam.css">

</head>
<body>
  

<!-- top banner -->
    <div class="container-fluid ">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-6 col-md-4">
              <div class="logo">
                <img src="../frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" />
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
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../resources/resource.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="../ourteam/ourteam.php">Our Team</a>
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
              <a class="nav-link " href="../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.php">Events</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link active" href="../ourteam/ourteam.php">Our Team</a>
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


   <!-- message section -->
<div class="container-fluid">
  <h1 style="text-align: center; color: #1a237e;">MEET OUR TEAM</h1>
      <div class="row message p-5">
        <div class="col-lg-4 col-sm-12 col-md-4 " >
          <div class="introduction">
            
            <div class="chief-img">
              <img src="../../frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <h2>JOHN SCOUT</h2>
            <h5>POST OF MINE</h5>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
             <div class="social-media" style="text-align: center;">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
            </ul>
          </div>
            
          </div>
        </div>


        <div class="col-lg-4 col-sm-12 col-md-4 " >
          <div class="introduction">
            
            <div class="chief-img">
            <img src="../../frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <h2>JOHN SCOUT</h2>
            <h5>POST OF MINE</h5>

            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
             <div class="social-media" style="text-align: center;">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
            </ul>
          </div>
            
          </div>
        </div>


        <div class="col-lg-4 col-sm-12 col-md-4">
          <div class="message-chief">
    
            <div class="chief-img">
            <img src="../../frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <h2>JOHN SCOUT</h2>
            <h5>POST OF MINE</h5>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
             <div class="social-media" style="text-align: center;">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
            </ul>
          </div>

          </div>
        </div>
      </div>


       <div class="row message p-5">
        <div class="col-lg-4 col-sm-12 col-md-4 " >
          <div class="introduction">
            
            <div class="chief-img">
              <img src="../../frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <h2>JOHN SCOUT</h2>
            <h5>POST OF MINE</h5>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
             <div class="social-media" style="text-align: center;">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
            </ul>
          </div>
            
          </div>
        </div>


        <div class="col-lg-4 col-sm-12 col-md-4 " >
          <div class="introduction">
            
            <div class="chief-img">
           <img src="../../frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <h2>JOHN SCOUT</h2>
            <h5>POST OF MINE</h5>

            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
             <div class="social-media" style="text-align: center;">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
            </ul>
          </div>
            
          </div>
        </div>


        <div class="col-lg-4 col-sm-12 col-md-4">
          <div class="introduction">
    
            <div class="chief-img">
               <img src="../../frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <h2>JOHN SCOUT</h2>
            <h5>POST OF MINE</h5>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
             <div class="social-media" style="text-align: center;">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
            </ul>
          </div>

          </div>
        </div>
      </div>
    </div>

    

   

    

    <!-- footer -->
   <?php include('../include/footer.php'); ?>


<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>