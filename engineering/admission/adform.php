<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link rel="stylesheet" href="../frontpage/css/style.css" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <style>
     .error{
         color: red;
         font-style: italic;
         font-size:15px; 
     }
    </style>

    <title>Admission Form</title>
</head>
    <!-- title icon -->
   

    <!-- form -->
    
<div class="container-fluid" style="margin: 0px; padding: 0px;">
      <nav class="navbar navbar-expand-xl navbar-light py-0 " >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"style="height: 20px; width: 25px;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto" >
            <li class="nav-item center-menu">
              <a class="nav-link" href="../../index.php">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link " href="../../+2/index.php" style="color: #1A237E;">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link active" href="../index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../galary/gallery.php" style="color: #1A237E;">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="../events/events.php" style="color: #1A237E;">Events</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="../ourteam/ourteam.php" style="color: #1A237E;">Our Team</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="../admission/index.php">Admision form</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="../contact/contact.php" style="color: #1A237E;">Contact Us</a>
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
                aria-expanded="false" style="color: #1A237E;">Login</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <a class="dropdown-item" href="../login/login.php" style="background-color: white">Student</a>
                <a class="dropdown-item" href="../login/teacherlogin.php" style="background-color: white">Teacher</a>
                
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
</div>
    <!-- form -->
    <div style="font-weight: bold;
  font-family: PT Sans, sans-serif;
  font-style: italic;
  margin-top: 2em;
  text-align: center;">
      <h4>Admission Form For Engineering</h4>
    </div>
    <div class="container">
      <div class="form-container">
        <div class="row">
          <div class="school-info col-lg-12 col-sm-12 col-md-12">
            
            <div class="form-title">
              <h4>Education for Enlightenment!</h4>
            </div>
          </div>
          <div class="admission-form col-lg-12 col-sm-12 col-md-12" >
            <form action="insert.php" method="POST" enctype="multipart/form-data">
              <h5>Personal Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">First Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    name="sname"
                    required
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Middle Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Middle name"
                    name="mname"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    name="lname"
                    requird
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
                    requird
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="gender">Gender: </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="exampleRadios1"
                      value="male"
                      checked

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
                      id="female"
                      value="female"
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Female
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Nationality</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Nationality"
                    name="nationality"
                    required
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Mobile No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="number"
                    name="mobilenumber"
                    id="mobilenumber"
                    required
                  />
                  <small class="error" id="mobileerror"></small>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">E-mail</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="email"
                    name="email"

                  />
                </div>
              </div>
              <h5>Permanent Address</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                   
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="zone"
                    id="zone"
                    requird
                  />
                </div> 

                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                    
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="province"
                    id="province"
                    required
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                  
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="district"
                    id="district"
                    required
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input
                    
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                    name="municipality"
                    id="municipality"
                    required
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                    
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="wardno"
                    id="wardno"
                    required
                  />
                </div>
              </div>

              <h5>Temporary Address</h5>
               same as permanent
              <input type="checkbox" id="check_as_permanent">
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                   
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="zone1"
                    id="zone1"
                   
                  />
                </div> 
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                    
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="province1"
                    id="province1"
                   
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                    
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="district1"
                    id="district1"
                   
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="dob">Municipality/Rural Municipality</label>
                  <input
                    
                    type="text"
                    class="form-control"
                    placeholder="Municipality/Rural Municipality"
                    name="municipality1"
                    id="municipality1"
                    
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                  
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="wardno1"
                    id="wardno1"
                    
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
                    name="fname"
                    required
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="contact"
                    id="contact"
                    required
                  />
                   <small class="error" id="contacterror"></small>
                </div>

                 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="occupation"
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
                    name="moname"
                    required
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="mcontact"
                    id="mcontact"
                    required
                  />
                   <small class="error" id="mcontacterror"></small>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="moccupation"
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
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="gcontact"
                    id="gcontact"
                  />
                   <small class="error" id="gcontacterror"></small>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    name="goccupation"
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
                    name="school"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Passed Year"
                    name="passed"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">SLC/SEE GPA Point</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="GPA Point or %"
                    name="GPA"
                  />
                </div>
              </div>

              <h6>Marks / Grades In</h6>
              <div class="form-row">
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">English</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="English"
                    name="english"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Science"
                    name="science"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input type="text" class="form-control" placeholder="Maths"  name="math"/>
                </div>

              </div>

              <h5>Type of School</h5>
              <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="schooltype"
                      id="exampleRadios1"
                      value="government"
                      checked
                    />
                    <label class="form-check-label" for="exampleRadios1">
                      Government
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="schooltype"
                      id="exampleRadios2"
                      value="community"
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Community
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="schooltype"
                      id="exampleRadios2"
                      value="private"
                    />
                    <label class="form-check-label" for="exampleRadios2">
                      Private 
                    </label>
                  </div>
                </div>
                </div>


               <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">School Name</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="School name"
                    name="school1"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="middleName">Passed Year</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Passed Year"
                    name="passed1"
                  />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <label for="lastName">TSLC</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="GPA Point or %"
                    name="GPA1"
                  />
                </div>
              </div>
              <h6>Marks / Grades In</h6>
              <div class="form-row">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">English</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="English"
                    name="english1"
                  />
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="firstName">Science</label>
                  <input
                    id="firstName"
                    type="text"
                    class="form-control"
                    placeholder="Science"
                    name="science1"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <label for="middleName">Maths</label>
                  <input type="text" class="form-control" placeholder="Maths" name="math1" />
                </div>
              </div>

             
              <h5>Important Documents</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Gradesheet</label
                  >
                  <input type="file" class="form-control file-upload" name="slcgrade" required />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Character Certificate</label
                  >
                  <input type="file" class="form-control file-upload" name="slccharacter" required />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Birth Certificate/Citizenship</label
                  >
                  <input type="file" class="form-control file-upload"  name="birthcert" required />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Entrance Admit Card (Original</label
                  >
                  <input type="file" class="form-control file-upload" name="entrance" required />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recommendation Letter from Entrance appearing School</label
                  >
                  <input type="file" class="form-control file-upload"  name="recommendation" required />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Result Copy</label>
                  >
                  <input required type="file" class="form-control file-upload" name="resultcopy" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  >
                  <input  required type="file" class="form-control file-upload" name="pp"/>
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-12">
                  <input
                      type="checkbox"
                      name="agreed"
                      class="agree-checkbox"
                      id="agreed"

                    /><br>
                  <p>
                    I, hereby, declare that the information provided in this
                    form is true to the best of my knowledge. I feel pleasure to
                    show my commitment in the following rules and regulations
                    strictly. If I violate the rules and regulations of the
                    school, I will accept any action against me.
                    
                    <small id="term" style="color: red; font-style: italic; font-size:20px;">you must accept term and conditions to submit form</small>
                  </p>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
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
    <script>


        $(document).ready(function() { 
           if (! $('#agreed').is(":checked"))
                     { 
                        $('#submit').attr('disabled','true');   
                    } 

                $("#agreed").click(function() { 
                    if (! $('#agreed').is(":checked"))
                     { 
                       $('#term').html("you must accept term and conditions to submit form");
                        $('#submit').attr('disabled','true');   
                     }
                     else 
                     {
                        $('#term').html("");
                       $('#submit').removeAttr('disabled','true');  
                     }
                }); 
            });

            $('#submit').click(function(){
               
                   if (! $('#agreed').is(":checked"))
                     { 
                       alert("plz accept term and condition");
                    }

            });

             $('#check_as_permanent').change(function(){




              $('#zone1').val($('#zone').val());
              $('#district1').val($('#district').val());
              $('#municipality1').val($('#municipality').val());
              $('#wardno1').val($('#wardno').val());
              $('#province1').val($('#province').val());



        });

             $('#mobilenumber').keyup(function(){
              $('#mobileerror').html('');
            
               if(! $.isNumeric($('#mobilenumber').val()) )
               {
                 $('#mobileerror').html('mobile must be Numeric');
               }

               

               if( ($("#mobilenumber").val()).length!==10)
               {
                 $('#mobileerror').html('mobile must be 10 digit');
               }
              

             });


        $('#contact').keyup(function(){
              $('#contacterror').html('');
            
               if(! $.isNumeric($('#contact').val()) )
               {
                 $('#contacterror').html('mobile must be Numeric');
               }

               

               if( ($("#contact").val()).length!==10)
               {
                 $('#contacterror').html('mobile must be 10 digit');
               }
              

             });
         $('#gcontact').keyup(function(){
              $('#gcontacterror').html('');
            
               if(! $.isNumeric($('#gcontact').val()) )
               {
                 $('#gcontacterror').html('mobile must be Numeric');
               }

               

               if( ($("#gcontact").val()).length!==10)
               {
                 $('#gcontacterror').html('mobile must be 10 digit');
               }
              

             });
          $('#mcontact').keyup(function(){
              $('#mcontacterror').html('');
            
               if(! $.isNumeric($('#mcontact').val()) )
               {
                 $('#mcontacterror').html('mobile must be Numeric');
               }

               

               if( ($("#mcontact").val()).length!==10)
               {
                 $('#mcontacterror').html('mobile must be 10 digit');
               }
              

             });






     
        
    </script>
  </body>
</html>
