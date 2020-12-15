  <?php
session_start();
include('include/connection.php');

include('include/check_login.php');

$id=$_GET['id'];


$sql="select * from admission where id='$id' limit 1";
$result=mysqli_query($db,$sql);
$admission=mysqli_fetch_assoc($result);


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

    <style>
      @media print{
       body *{
        visibility: hidden;
       }
       .area-to-print, .area-to-print *{
        visibility: visible;
       }
    </style>
  </head>
  <body>
  
     
     <div class="container">
          <button class="btn btn-primary mt-3" href="javascript:void(0);"  onclick="window.print()">print</button>
     </div>

    <!-- form -->

    <div class="area-to-print">
    <div class="title">
      <h4>Amission Form for XI XII</h4>

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
            <form action="insert.php" method="POST">
              <h5>Personal Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">First Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    name="firstname"
                    value="<?php echo htmlentities($admission['firstname']); ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Middle Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Middle name"
                    name="middle name"
                    value="<?php echo htmlentities($admission['middlename']); ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    name="last name"
                    value="<?php echo htmlentities($admission['lastname']); ?>"
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
                    name="DOB"
                    value="<?php echo htmlentities($admission['DOB']); ?>"
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
                      name="gender"
                      id="exampleRadios1"
                      value="option1"
                      <?php if ($admission['gender']=="male")
                      {

                             echo"checked";
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
                      name="gender"
                      id="exampleRadios2"
                      value="option2"
                       <?php if ($admission['gender']=="Female")
                       {

                             echo"checked";
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
                      name="caste"
                      id="exampleRadios1"
                      value="dalit"
                     <?php if ($admission['caste']=="dalit")
                       {

                             echo"checked";
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
                      name="caste"
                      id="exampleRadios2"
                      value="janjati"
                         <?php if ($admission['caste']=="janjati")
                       {

                             echo"checked";
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
                      name="caste"
                      id="exampleRadios2"
                      value="brahmin"
                         <?php if ($admission['caste']=="brahmin")
                       {

                             echo"checked";
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
                      name="caste"
                      id="exampleRadios2"
                      value="others"
                         <?php if ($admission['caste']=="others")
                       {

                             echo"checked";
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
                    name="nationality"
                    value="<?php echo htmlentities($admission['nationality'])?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Religion</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Religion"
                    name="religion"
                    value="<?php echo htmlentities($admission['religion']) ?>"
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
                    name="mobilenumber"
                    value="<?php echo htmlentities($admission['mobilenumber']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">E-mail</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="example@email.com"
                    name="email"
                    value="<?php echo htmlentities($admission['email']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Facebook Account</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Facebook Account"
                    name="facebook"
                    value="<?php echo htmlentities($admission['facebook']) ?>"
                  />
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
                    name="zone"
                    value="<?php echo htmlentities($admission['zone']) ?>"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="province"
                    value="<?php echo htmlentities($admission['province']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="district"
                    value="<?php echo htmlentities($admission['district']) ?>"
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
                    name="municiipality"
                    value="<?php echo htmlentities($admission['municipality']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="wardno"
                    value="<?php echo htmlentities($admission['wardno']) ?>"
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
                    name="zone1"
                    value="<?php echo htmlentities($admission['zone1']) ?>"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="province1"
                    value="<?php echo htmlentities($admission['province1']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="district1"
                    value="<?php echo htmlentities($admission['district1']) ?>"
 
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
                    name="municipality1"
                    value="<?php echo htmlentities($admission['municipality1']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="warno1"
                    value="<?php echo htmlentities($admission['wardno1']) ?>"
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
                    name="pfirst"
                    value="<?php echo htmlentities($admission['pfirst']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="contact"
                    value="<?php echo htmlentities($admission['contact']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="occupation"
                    value="<?php echo htmlentities($admission['occupation']) ?>"
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
                    name="mname"
                    value="<?php echo htmlentities($admission['mname']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="mcontact"
                    value="<?php echo htmlentities($admission['mcontact']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="occupation1"
                    value="<?php echo htmlentities($admission['ocuupation1']) ?>"
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
                    name="gname"
                    value="<?php echo htmlentities($admission['gname']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="gcontact"
                    value="<?php echo htmlentities($admission['gcontact']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="goccupation"
                    value="<?php echo htmlentities($admission['goccupation']) ?>"
                  />
                </div>
              </div>
              <h5>Academic Record</h5>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">School Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="School name"
                    name="sname"
                    value="<?php echo htmlentities($admission['sname']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Passed Year"
                    name="passed"
                    value="<?php echo htmlentities($admission['passed']) ?>"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">SEE GPA Point</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="GPA Point"
                    name="GPA"
                    value="<?php echo htmlentities($admission['GPA']) ?>"
                  />
                </div>
              </div>
              <h6>Marks / Grades In</h6>
              <div class="form-row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="firstName">Nepali</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Nepali"
                    name="nepali"
                    value="<?php echo htmlentities($admission['nepali']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="middleName">English</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="English"
                    name="english"
                    value="<?php echo htmlentities($admission['english']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="lastName">Social Std.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Social Std."
                    name="social"
                    value="<?php echo htmlentities($admission['social']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="firstName">Science</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Science"
                    name="science"
                    value="<?php echo htmlentities($admission['science']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="middleName">Maths</label>
                  <input type="text" class="form-control" placeholder="Maths" name="math" value="<?php echo htmlentities($admission['math']) ?>"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <label for="lastName">EPH</label>
                  <input type="text" class="form-control" placeholder="EPH" name="eph" value="<?php echo htmlentities($admission['eph']) ?>"/>
                </div>
              </div>
              <h5>ELECTIVE SUBJECTS XI</h5>
              <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="gender"><h4>Elective</h4></label><br>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="elective"
                      id="exampleRadios1"
                       value="business"
                      <?php if ($admission['elective']=="business")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Business Studies
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                         name="elective"
                      id="exampleRadios2"
                     value="hotel"
                      <?php if ($admission['elective']=="hotel")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Hotel Management 
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                        name="elective"
                      id="exampleRadios2"
                       value="computer"
                      <?php if ($admission['elective']=="computer")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Computer Science 
                    </label>
                  </div>
                </div>
                </div>
                <h5>ELECTIVE SUBJECTS XII</h5>
              <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="gender"><h4>Elective I</h4></label><br>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="elective2"
                      id="exampleRadios1"
                      value="business1"
                        <?php if ($admission['elective2']=="business1")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Business Studies
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                     name="elective2"
                      id="exampleRadios2"
                       value="hotel1"
                         <?php if ($admission['elective2']=="hotel1")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Hotel Management 
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                     name="elective2"
                      id="exampleRadios2"
                      value="computer1"
                        <?php if ($admission['elective2']=="computer1")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Computer Science 
                    </label>
                  </div>
                </div>
                </div>

                 <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="gender"><h4>Elective II</h4></label><br>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="elective3"
                     
                      id="exampleRadios1"
                       value="businessmath"
                            <?php if ($admission['elective3']=="businessmath")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Business Math
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="elective3"
                     
                      id="exampleRadios2"
                      value="marketing"
                          <?php if ($admission['elective3']=="marketing")
                       {

                             echo"checked";
                        }
                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Marketing 
                    </label>
                  </div>
                </div>
                </div>
              
              <h5>Important Documents</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Gradesheet</label
                  >
                  <input type="file" name="slcgrade" class="form-control file-upload" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Character Certificate</label
                  >
                  <input type="file" name="slccharacter" class="form-control file-upload" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  >
                  <input type="file" name="pp" class="form-control file-upload" />
                </div>
              </div>
         
            
            </form>
          </div>
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
