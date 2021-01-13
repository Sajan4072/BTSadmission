<?php
session_start();
include('include/connection.php');

include('include/check_login.php');

$id=$_GET['id'];
$faculty=$_GET['faculty'];



if($faculty=='school')
{
$sql="select * from admission_school where id='$id' limit 1";
$result=mysqli_query($db,$sql);
$admission=mysqli_fetch_assoc($result);
 
}


 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="../+2/admission/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../+2/admission/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../+2/admission/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../+2/admission/css/style.css" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>

    <title>Admission Form </title>

    <!-- title icon -->
    <link rel="shortcut icon" href="images/logo.png" />
  </head>
  <body>
    
    <!-- course structure -->
   

    <!-- form -->
    <div class="title">
      <h4>Amission Form of School</h4>
    </div>
    <div class="container">
      <div class="form-container">
        <div class="row">
          <div class="school-info col-lg-12 col-sm-12 col-md-12">
            
            <div class="form-title">
              <h4>Education for Enlightenment!</h4>
            </div>
          </div>
          <div class="admission-form col-lg-12 col-sm-12 col-md-12">
            <form action="#" method="POST">
              <h5>Personal Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">First Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    disabled
                    value="<?php echo $admission['f_name'];  ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Middle Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Middle name"
                    value="<?php echo $admission['m_name'];  ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    value="<?php echo $admission['l_name'];  ?>"
                    disabled
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Date of Birth</label>
                  <input
                    id="dob"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                    disabled
                    value="<?php echo $admission['dob']  ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-4">
                  <label for="gender">Gender: </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="exampleRadios"
                      id="exampleRadios1"
                      value="option1"

                      <?php 
                            if($admission['gender']=='male')
                            {
                              echo "checked";

                            }
                            else
                            {
                              echo "disabled";
                            }

                       ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Male
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="exampleRadios"
                      id="exampleRadios2"
                      value="option2"
                     
                      <?php 
                            if($admission['gender']=='female')
                            {
                              echo "checked";
                            }
                            else 
                            {
                              echo "disabled";
                            }
                            
                       ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Female
                    </label>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label for="gender">Caste: </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="exampleRadios2"
                      id="exampleRadios1"
                      value="option1"
                      <?php 
                            if($admission['caste']=='dalit')
                            {
                              echo "checked";
                            }
                            else 
                            {
                              echo "disabled";
                            }
                            
                       ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Dalit
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="exampleRadios2"
                      id="exampleRadios2"
                      value="option2"
                      <?php 
                            if($admission['caste']=='janajati')
                            {
                              echo "checked";
                            }
                            else 
                            {
                              echo "disabled";
                            }
                            
                       ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Janajati
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="brahamin_chhetri"
                      id="exampleRadios2"
                      value="option2"
                      <?php 
                            if($admission['caste']=='brahamin_chhetri')
                            {
                              echo "checked";
                            }
                            else 
                            {
                              echo "disabled";
                            }
                            
                       ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Brahmin/Chhetri
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="exampleRadios2"
                      id="exampleRadios2"
                      value="option2"
                      <?php 
                            if($admission['caste']=='other')
                            {
                              echo "checked";
                            }
                            else 
                            {
                              echo "disabled";
                            }
                            
                       ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Others
                    </label>
                  </div>
                </div>
              </div>


              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Nationality</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Nationality"
                      value="<?php echo $admission['nationality']  ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Religion</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Religion"
                      value="<?php echo $admission['religion']  ?>"
                  />
                </div>
              </div>


              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Mobile No.</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Mobile No."
                      value="<?php echo $admission['mobile_no']  ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">E-mail</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="example@email.com"
                      value="<?php echo $admission['email']  ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Facebook Account</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Facebook Account"
                      value="<?php echo $admission['facebook_account']  ?>"
                  />
                </div>
              </div>

               <div class="form-row">
                <div class="col-sm-4">
                  <label for="gender"> computer </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="exampleRadios6"
                      id="exampleRadios1"
                      value="option1"
                      <?php
                           if($admission['check_computer']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      yes
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="exampleRadios6"
                      id="exampleRadios2"
                      value="option2"
                       <?php
                           if($admission['check_computer']=='no')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                     No
                    </label>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label for="gender">  internet connection </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_connection"
                      id="exampleRadios1"
                      value="yes"
                       <?php
                           if($admission['check_computer']=='yes' && $admission['check_connection']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      yes
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_connection"
                      
                      value="no"
                         <?php
                           if($admission['check_computer']=='yes' && $admission['check_connection']=='no')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      No
                    </label>
                  </div>
                </div>
              </div>
                             <div class="form-row">
                <div class="col-sm-4">
                  <label for="gender"> Mobile </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_mobile"
                      id="exampleRadios1"
                      value="yes"
                        <?php
                           if($admission['check_mobile']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      yes
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_mobile"
                      id="exampleRadios2"
                      value="no"
                       <?php
                           if($admission['check_mobile']=='no')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                     No
                    </label>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label for="gender"> connectivity service</label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_connectivity"
                      id="exampleRadios1"
                      value="yes"
                      <?php
                           if($admission['check_connectivity']=='yes' && $admission['check_mobile']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                      
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      yes
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_connectivity"
                      id="exampleRadios2"
                      value="no"
                      <?php
                           if($admission['check_connectivity']=='no' && $admission['check_mobile']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      No
                    </label>
                  </div>
                </div>
              </div>
                             <div class="form-row">
                <div class="col-sm-4">
                  <label for="gender"> T.V </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_tv"
                      id="exampleRadios1"
                      value="yes"
                    <?php
                           if($admission['check_tv']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      yes
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_tv"
                      id="exampleRadios2"
                      value="no"
                  <?php
                           if($admission['check_tv']=='no')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                     No
                    </label>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label for="gender"> Cable connection in TV </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_cable"
                      id="exampleRadios1"
                      value="yes"
                       <?php
                           if($admission['check_cable']=='yes' && $admission['check_tv']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      yes
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_cable"
                      id="exampleRadios2"
                      value="no"
                       <?php
                           if($admission['check_cable']=='no' && $admission['check_tv']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      No
                    </label>
                  </div>
                </div>
              </div>

               <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="gender">Radio</label><br>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_radio"
                      id="exampleRadios1"
                      value="yes"
                      <?php
                           if($admission['check_radio']=='yes')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      yes
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_radio"
                      id="exampleRadios2"
                      value="no"
                      <?php
                           if($admission['check_radio']=='no')
                           {
                             echo "checked";
                           }
                           else
                           {
                            echo "disabled";
                           }
                      ?>                    />
                    <label class="form-check-label" for="exampleRadios2">
                      No
                    </label>
                  </div>
                </div>
                </div>
              
              <h5>Permanent Address</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    value="<?php echo $admission['per_zone']; ?>"
                    disabled
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    value="<?php echo $admission['per_province']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="District"
                    value="<?php echo $admission['per_district']; ?>"
                    disabled
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                    value="<?php echo $admission['per_municipality']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    value="<?php echo $admission['per_wardno']; ?>"
                    disabled
                  />
                </div>
              </div>
              <h5>Temporary Address</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    value="<?php echo $admission['temp_zone']; ?>"
                    disabled
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    value="<?php echo $admission['temp_province']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="District"
                    value="<?php echo $admission['temp_district']; ?>"
                    disabled
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                    value="<?php echo $admission['temp_municipality']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    value="<?php echo $admission['temp_wardno']; ?>"
                    disabled
                  />
                </div>
              </div>
              <h5>Parent's / Guardian's Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Father's Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Father's name"
                    value="<?php echo $admission['father_name']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    value="<?php echo $admission['father_contact']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php echo $admission['father_occupation']; ?>"
                    disabled
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Mother's Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Mother's name"
                    value="<?php echo $admission['mother_name']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    value="<?php echo $admission['mother_contact']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php echo $admission['mother_occupation']; ?>"
                    disabled
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Guardian's Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Guardian's name"
                    value="<?php echo $admission['guardian_name']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    value="<?php echo $admission['guardian_contact']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php echo $admission['guardian_occupation']; ?>"
                    disabled
                  />
                </div>
              </div>
              <h5>Details of brother-sister studying currently in this school</h5>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Name"
                    value="<?php echo $admission['bro_sis_name1']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="middleName">Class</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Class"
                    value="<?php echo $admission['bro_sis_class1']; ?>"
                    disabled
                  />
                </div>
                
              </div>
               <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Name"
                    value="<?php echo $admission['bro_sis_name2']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="middleName">Class</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Class"
                    value="<?php echo $admission['bro_sis_class2']; ?>"
                    disabled
                  />
                </div>
                
              </div>
               <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Name"
                    value="<?php echo $admission['bro_sis_name3']; ?>"
                    disabled
                  />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="middleName">Class</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Class"
                    value="<?php echo $admission['bro_sis_class3']; ?>"
                    disabled
                  />
                </div>
                
              </div>
              
             
             <h5>Previous school details</h5>

                 <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="firstName">Details</label>
                  
                   <textarea name="prev_school_details" class="form-control" row="6" col="5" disabled><?php echo $admission['prev_school_details']; ?></textarea>
                </div>
               </div>
                
              <h5>Mention if student have any health issues</h5>

                 <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="firstName">Health issues</label>  
                  <textarea name="prev_school_details" class="form-control" row="6" col="5" disabled><?php echo $admission['health_issues']; ?></textarea>
                  
                </div>
              </div>
              
              <h5>Important Documents</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Previous class Gradesheet</label
                  ><br>
                  <a href="download.php?id=<?php echo $admission['id'] ?>&&faculty=school&&type=gradesheet" class="btn btn-secondary">download  <i class="fa fa-download"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Birth Certificate</label
                  >
                   <br>
                  <a href="download.php?id=<?php echo $admission['id'] ?>&&faculty=school&&type=birth_certificate" class="btn btn-secondary"> download <i class="fa fa-download"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  >
                  <br>
                  <a href="download.php?id=<?php echo $admission['id'] ?>&&faculty=school&&type=pp" class="btn btn-secondary" >download <i class="fa fa-download"></i></a>
                </div>
              </div>
              
             
             </form>
          </div>
        </div>
      </div>
    </div>

    <!-- javascripts -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
