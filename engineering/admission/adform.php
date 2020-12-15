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
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>

    <title>Admission Form</title>

    <!-- title icon -->
   

    <!-- form -->
    <div class="title">
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
                      value="option2"
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
                    placeholder="Mobile No."
                    name="nationality"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Mobile No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="number"
                    name="mobilenumber"
                  />
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
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="zone"
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
                    name="municipality"
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
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                    id="dob"
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="wardno1"
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
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="contact"
                  />
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
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    name="mcontact"
                  />
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
                  />
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
                  <input type="file" class="form-control file-upload" name="slcgrade" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >SEE/SLC Character Certificate</label
                  >
                  <input type="file" class="form-control file-upload" name="slccharacter" />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Birth Certificate/Citizenship</label
                  >
                  <input type="file" class="form-control file-upload"  name="birthcert"/>
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Entrance Admit Card (Original</label
                  >
                  <input type="file" class="form-control file-upload" name="entrance" />
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recommendation Letter from Entrance appearing School</label
                  >
                  <input type="file" class="form-control file-upload"  name="recommendation"/>
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Result Copy</label>
                  >
                  <input type="file" class="form-control file-upload" name="resultcopy" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  >
                  <input type="file" class="form-control file-upload" name="pp"/>
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-12">
                  <p>
                    I, hereby, declare that the information provided in this
                    form is true to the best of my knowledge. I feel pleasure to
                    show my commitment in the following rules and regulations
                    strictly. If I violate the rules and regulations of the
                    school, I will accept any action against me.
                    <input
                      type="checkbox"
                      name="agreed"
                      class="agree-checkbox"
                    />
                  </p>
                </div>
              </div>
              <div class="text-center">
                <button type="Submit" class="btn btn-warning" name="submit">Submit</button>
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
