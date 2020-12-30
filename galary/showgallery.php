<!DOCTYPE html>
<html>
<head>
  <title>Bts Gallery</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./galary.css">
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
              <a class="nav-link" href="../../+2/index.html">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link active" href="../../engineering/index.html">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="#">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.html">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../resources/resources.html">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../ourteam/ourteam.html">Our Team</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../results/results.html">Results</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../contact/contact.html">Contact Us</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5">
               <li class="nav-item dropdown" >
                <a class="nav-link right-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false" >Login</a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../Login/login.html">Student</a>
                <a class="dropdown-item" href="./+2/index.html">Teacher</a>
                <a class="dropdown-item" href="../../admin/admin login/index.html">Admin</a>
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div><br>

    <!-- photos of galary -->


    <div class="container">


  <?php 

                      include("../include/connection.php");
                       
                         
                                              
                      $sql="select *from photos WHERE school=1 ORDER BY id DESC";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
?>




      <div class="row row-image">
         <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2" style="float: left;">
          <img src="../admin/photo/<?php echo $row['photo']; ?>" class="img-fluid" >
          

        </div>

        
      </div>
      
    

      

         <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2 ">
          <img src="../admin/photo/<?php echo $row['photo']; ?>">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2 ">
          <img src="../admin/photo/<?php echo $row['photo']; ?>">
         </div>


     </div><br>
     <?php } ?>

     <div class="row row-image">
       <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
         <img src="../frontpage/images/banner-img.jpg" class="img-fluid" alt="one">
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
         <img src="../frontpage/images/banner-img.jpg"class="img-fluid" alt="two">
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
         <img src="../frontpage/images/banner-img.jpg" class="img-fluid" alt="three">
       </div>


     </div><
     <div class="row row-image">
       <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
         <img src="../frontpage/images/banner-img.jpg" class="img-fluid" alt="one">
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
         <img src="../frontpage/images/banner-img.jpg"class="img-fluid" alt="two">
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
         <img src="../frontpage/images/banner-img.jpg" class="img-fluid" alt="three">
       </div>

     </div>
     <br>
     <div class="row row-image">
       <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
          <img src="../frontpage/images/banner-img.jpg" class="img-fluid" alt="one">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
          <img src="../frontpage/images/banner-img.jpg"class="img-fluid" alt="two">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
          <img src="../frontpage/images/banner-img.jpg" class="img-fluid" alt="three">
        </div>


      </div><br>

      <div class="row row-image">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
          <img src="../frontpage/images/banner-img.jpg" class="img-fluid" alt="one">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
          <img src="../frontpage/images/banner-img.jpg"class="img-fluid" alt="two">
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-2">
          <img src="../frontpage/images/banner-img.jpg" class="img-fluid" alt="three">
        </div>
      


    </div>

    <br>



    <nav aria-label="Page navigation example" style="background-color: #d5d8de;">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav><br>


   
    <!-- footer -->
    <?php include('../include/footer.php'); ?>

<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>