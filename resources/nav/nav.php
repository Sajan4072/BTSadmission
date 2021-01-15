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
              <a class="nav-link active " href="">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="./+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="./engineering/index.php">Engineering</a>
            </li>-->
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../index.php">Home</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="../resource.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../ourteam/ourteam.php">Our Team</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../../results/results.php">Results</a>
               </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../contact/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              
              
              <li class="nav-item">
                <a class="nav-link right-link" href="../../school/student/detail/profile.php"><?php echo "$_SESSION[login_user]";?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link right-link" href="../../login/logout.php">Logout</a>
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
              <a class="nav-link active" href="../../index.php">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../+2/index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../../engineering/index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="">Resources</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../ourteam/ourteam.php">Our Team</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../contact/contact.php">Contact Us</a>
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
                <a class="dropdown-item" href="../../login/login.php">Student</a>
                <a class="dropdown-item" href="../../login/teacherlogin.php">Teacher</a>
                
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div>
  <?php
}?>