  <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="container sidebar">
        <div class="row">
          <ul  id="accsidebar">
               <li class="btn <?php if(isset($news_and_event)){echo "active";} ?>"><a href="news and events_table.php" class="active"><i class="fa fa-newspaper-o" ></i>NEWS AND EVENTS</a></li>

            <li class="btn <?php if(isset($notice)){echo "active";} ?>"><a href="notice_table.php"><i class="fa fa-bars" ></i>NOTICES</a></li>
           <li class="btn <?php if(isset($event)){echo "active";} ?>"><a href="event_table.php"><i class="fa fa-calendar"  ></i> CALENDER EVENTS</a></li>
            
            <li class="btn <?php if(isset($gallery)){echo "active";} ?>"><a href="gallery_table.php"><i class="fa fa-picture-o"  ></i>GALLERY UPDATE</a></li>

       
           

            <div class="dropdown show">
            <li class="btn <?php if(isset($admission)){echo "active"; } ?>">
              <a class="btn btn-secondary dropdown-toggle"href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none; ">
                <i class="fa fa-calendar" ></i>Admission form
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="admission_table_managment.php">Managment</a>
                <a class="dropdown-item" href="admission_table_engineering.php">Engineering</a>
                <a class="dropdown-item" href="admission_table_school.php">School</a>
              </div>
               </li>
            </div>

            <div class="dropdown show">
            <li class="btn <?php if(isset($teacher)){echo "active"; }  ?>">
              <a class="btn btn-secondary dropdown-toggle"href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none; ">
                <i class="fa fa-calendar" ></i>Teacher
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="collage_teacher_registration_table.php">Managment</a>
                <a class="dropdown-item" href="engineering_teacher_registration_table.php">Engineering</a>
                <a class="dropdown-item" href="school_teacher_registration_table.php">School</a>
              </div>
               </li>
            </div>
            <div class="dropdown show">
            <li class="btn <?php if(isset($students)){echo"active";} ?>">
              <a class="btn btn-secondary dropdown-toggle"href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none; ">
                <i class="fa fa-calendar" ></i>Student
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="collage_student_registration_table.php">Managment</a>
                <a class="dropdown-item" href="engineering_student_registration_table.php">Engineering</a>
                <a class="dropdown-item" href="school_stu_registration_table.php">School</a>
              </div>
               </li>
            </div>
          </ul>
        </div>
      </div>
    </div>


 

  
  <style>


.top-banner {
  background-color:  #d5d8de;
}

.top-banner img {
  width: 100%;
}

.top-title h1 {
  margin-top: 10px;
  font-size: 30px;
  font-weight: bolder;
  color: #1a237e;
}

.top-subtitle h5 {
  font-style: italic;
  font-weight: bold;
  color: green;
  font-size: 22px;
}

.sidebar{
   margin-top: 30px; 
}
.sidebar ul li {
  list-style: none;
  padding: 2px;
  width: 200px;
  height: 50px;
  border: 1px solid #1a237e;
  background-color:  #1a237e;
  margin:10px;
  transition: background-color 0.5s;
  
}
.sidebar ul{
float: left;
text-align: center; 
}
.sidebar ul li a{
  font-size: 15px;
  color: white;
  float: left;
  text-decoration: none;
  
}
.sidebar ul li:hover {
  
  
  background-color: #011a21;
}
.sidebar ul li.active {
  
  
  background-color: #011a21;
}


.sidebar ul li a i{
  margin-right: 10px;
}
.uploadsection{
   margin-top: 70px; 
   box-shadow: 10px 10px 5px #dedbd5; 
   border-radius: 20px; 
   width: 80%;
}
textarea{
  background-color:#dedbd5; 
  height: 200px; 
  width: 100%;
  border: none; 
  border-radius: 20px; 
  border: none; 
  margin-top: 5px;
}

.dropdown-menu a{
  color: black; 
  background-color: grey
}

  </style>