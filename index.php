
<!DOCTYPE html><?php
include "include/connection.php";

session_start();
 
  if(isset($_SESSION['login_from_collage']))
  {
      header('location:+2/index.php');
  }
  if(isset($_SESSION['login_from_engineering']))
  {
    header('location:engineering/index.php');

  }
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
     <?php include('include/banner.php'); ?>
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
          <span class="navbar-toggler-icon"></span>
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
                <a class="dropdown-item" href="login/login.php">Student</a>
                <a class="dropdown-item" href="login/teacherlogin.php">Teacher</a>
                
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
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div>
          <img src="frontpage/images/banner-img.jpg" class="img-fluid" alt="Not Available!" />
        </div>
      </div>
    </div>

    <!-- announcement section -->
    <div class="container-fluid">
      <div class="row announcement pt-5">
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
                ><i class="fa fa-circle"></i><?php echo $row['post']; ?></a
              >
            </li>
            <?php }?>
            <li class="nav-item">
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
            <li class="nav-item">
              <a class="nav-link" href="school/View/notice.php"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
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
                ><p class="date-marker" style="width:90%; height: 60px; margin-top: 7px;"><?php echo $row['date']; ?><br /><?php echo $row['event']; ?></p>
              </a>
            </li>
            <?php } ?>
             <li class="nav-item">
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
    <div class="row p-0">
      <div class="col-lg-12">
        <div class="about-img">
          <img src="frontpage/images/banner-img.jpg" alt="Not Available!" />
          <div class="title">
            <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link right-link" href="description/description.php"><h1>ABOUT US</h1></a>
              </li>
            </ul>
          </form>
          </div>
        </div>
      </div>
    </div>

    <!-- message section -->
    <div class="container-fluid">
      <div class="row message p-5">
        <div class="col-lg-6 col-sm-12 col-md-6" >
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>INTRODUCTION</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam cumque eligendi eum asperiores voluptas magnam. Pariatur,
              recusandae! Lorem ipsum dolor sit amet consectetur, adipisicing
              elit. Asperiores nobis magni cupiditate unde aliquid modi quas
              aperiam quod eligendi, beatae tempore corporis laborum
              exercitationem nesciunt repellendus ipsam. Cupiditate incidunt, ad
              alias quaerat labore asperiores hic nobis quidem excepturi
              assumenda saepe itaque consequuntur vel quibusdam? Fugiat expedita
              beatae sapiente atque sint.<br />
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni
              tenetur enim, nobis natus sunt vitae culpa, quae earum obcaecati
              magnam perferendis veniam fuga molestias maiores.
            </p>
            <button type="button" class="btn btn-success">View More</button>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6">
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>MESSAGE FROM THE CHIEF</h4>
            <div class="chief-img">
            <img src="frontpage/photos/1.jpg" alt="Not Available!" />
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
            <button type="button" class="btn btn-success">View More</button>
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
