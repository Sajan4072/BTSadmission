
<?php
  session_start();

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
   .error
   {
     color: red;
     text-decoration: italic;
   }
    </style>
  </head>
  <body>
      <?php if(isset($_SESSION['success']))
      { 
      ?>
    <div class="container alert alert-success" role="alert">
      <?php echo $_SESSION['success']; unset($_SESSION['success']); ?> <a href="../index.php"> click here to go home page</a> 
   </div>
 <?php } ?>

 <?php if(isset($_SESSION['error']))
      { 
      ?>
    <div class="container alert alert-danger" role="alert">
      <?php echo $_SESSION['error']; unset($_SESSION['error']); ?> 
   </div>
 <?php } ?>
    
    <!-- course structure -->
   

    <!-- form -->
    <div class="title">
      <h4>Amission Form for School</h4>
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
            <form action="insert.php" method="POST" id="basic-form" enctype="multipart/form-data" >
              <h5>Personal Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <p>
                  <label for="firstName">First Name</label>
                  <input
                    id="f_name"
                    name="f_name"
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    value="<?php  if(isset($_SESSION['f_name'])) { echo $_SESSION['f_name']; } unset($_SESSION['f_name']) ?>"
                    
                  />
                </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Middle Name</label>
                  <input
                  id="m_name"
                  name="m_name"
                    type="text"
                    class="form-control"
                    placeholder="Middle name"
                    value="<?php  if(isset($_SESSION['m_name'])) { echo $_SESSION['m_name']; } unset($_SESSION['m_name']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Last Name</label>
                  <input
                  id="l_name"
                   name="l_name"
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    id="lastName"
                    value="<?php  if(isset($_SESSION['l_name'])) { echo $_SESSION['l_name']; } unset($_SESSION['l_name']) ?>"
                    
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Date of Birth</label>
                  <input
                    id="dob"
                    name="dob"
                    type="date"
                    class="form-control"
                    placeholder="DD-MM-YYYY"
                      value="<?php  if(isset($_SESSION['dob'])) { echo $_SESSION['dob']; } unset($_SESSION['dob']) ?>"
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
                      value="male"
                      <?php
                        if(isset($_SESSION['gender']))
                        {
                          if($_SESSION['gender']=='male')
                          {
                            echo "checked";
                            unset($_SESSION['gender']);
                          }
                        }
                       else
                       {
                        echo "checked";
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
                      value="female"
                      <?php
                         if(isset($_SESSION['gender']))
                        {
                          if($_SESSION['gender']=='female')
                          {
                            echo "checked";
                            unset($_SESSION['gender']);
                          }
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
                      <?php
                        if(isset($_SESSION['caste']))
                        {
                          if($_SESSION['caste']=='dalit')
                          {
                            echo "checked";
                            unset($_SESSION['caste']);
                          }
                        }
                       else
                       {
                        echo "checked";
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
                      value="janajati"
                       <?php
                        if(isset($_SESSION['caste']))
                        {
                          if($_SESSION['caste']=='janajati')
                          {
                            echo "checked";
                            unset($_SESSION['caste']);
                          }
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
                      value="brahamin_chhetri"
                        <?php
                        if(isset($_SESSION['caste']))
                        {
                          if($_SESSION['caste']=='brahamin_chhetri')
                          {
                            echo "checked";
                            unset($_SESSION['caste']);
                          }
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
                      value="other"
                        <?php
                        if(isset($_SESSION['caste']))
                        {
                          if($_SESSION['caste']=='other')
                          {
                            echo "checked";
                            unset($_SESSION['caste']);
                          }
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
                     name="nationality"
                    type="text"
                    class="form-control"
                    placeholder="Nationality"
                     value="<?php  if(isset($_SESSION['nationality'])) { echo $_SESSION['nationality']; } unset($_SESSION['nationality']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Religion</label>
                  <input
                    name="religion"
                     type="text"
                    class="form-control"
                    placeholder="Religion"
                     value="<?php  if(isset($_SESSION['religion'])) { echo $_SESSION['religion']; } unset($_SESSION['religion']) ?>"
                  />
                </div>
              </div>


              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Mobile No.</label>
                  <input
                    name="mobile_no"
                    type="text"
                    class="form-control"
                    placeholder="Mobile No."
                    required
                     value="<?php  if(isset($_SESSION['mobile_no'])) { echo $_SESSION['mobile_no']; } unset($_SESSION['mobile_no']) ?>"
                  />
                  <?php   if(isset($_SESSION['error_mobile']))
                  {
                  ?>

                  <div class="error">
                   <small><?php echo $_SESSION['error_mobile']; unset($_SESSION['error_mobile']) ?></small>
                  </div>
                <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">E-mail</label>
                  <input
                    type="email"]
                    name="email"
                    class="form-control"
                    placeholder="example@email.com"
                    required
                     value="<?php  if(isset($_SESSION['email'])) { echo $_SESSION['email']; } unset($_SESSION['email']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Facebook Account</label>
                  <input
                    type="text"
                     name="facebook_account"
                    class="form-control"
                    placeholder="Facebook Account"
                     value="<?php  if(isset($_SESSION['facebook_account'])) { echo $_SESSION['facebook_account']; } unset($_SESSION['facebook_account']) ?>"
                  />
                </div>
              </div>

               <div class="form-row">
                <div class="col-sm-4">
                  <label for="gender">Do you have computer? </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_computer"
                      id="check_computer_yes"
                      value="yes"
                         <?php
                        if(isset($_SESSION['check_computer']))
                        {
                          if($_SESSION['check_computer']=='yes')
                          {
                            echo "checked";
                            unset($_SESSION['check_computer']);
                          }
                        }
                       else
                       {
                        echo "checked";
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
                      name="check_computer"
                      id="check_computer_no"
                      value="no"
                       <?php
                        if(isset($_SESSION['check_computer']))
                        {
                          if($_SESSION['check_computer']=='no')
                          {
                            echo "checked";
                            unset($_SESSION['check_computer']);
                          }
                        }

                        ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                     No
                    </label>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label for="gender">If yes do you have internet connection? </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_internet"
                      id="check_internet"
                      value="yes"
                         <?php
                        if(isset($_SESSION['check_internet']))
                        {
                          if($_SESSION['check_internet']=='yes')
                          {
                            echo "checked";
                            unset($_SESSION['check_internet']);
                          }
                        }
                       

                      ?>
                     
                    >
                    <label class="form-check-label" for="exampleRadios1">
                      yes
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_internet"
                      id="check_internet1"
                      value="no"
                       <?php
                        if(isset($_SESSION['check_internet']))
                        {
                          if($_SESSION['check_internet']=='no')
                          {
                            echo "checked";
                            unset($_SESSION['check_internet']);
                          }
                        }
                        else
                       {
                        echo "checked";
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
                  <label for="gender">Do you have Mobile? </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_mobile"
                      id="check_mobile_yes"
                      value="yes"
                         <?php
                        if(isset($_SESSION['check_mobile']))
                        {
                          if($_SESSION['check_mobile']=='yes')
                          {
                            echo "checked";
                            unset($_SESSION['check_mobile']);
                          }
                        }
                       else
                       {
                        echo "checked";
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
                      id="check_mobile_no"
                      value="no"
                     <?php
                        if(isset($_SESSION['check_mobile']))
                        {
                          if($_SESSION['check_mobile']=='no')
                          {
                            echo "checked";
                            unset($_SESSION['check_mobile']);
                          }
                        }
                       

                      ?>

                    />
                    <label class="form-check-label" for="exampleRadios2">
                     No
                    </label>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label for="gender">If yes do you have connectivity service? </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_connectivity"
                      id="check_connectivity"
                      value="yes"
                       <?php
                        if(isset($_SESSION['check_connectivity']))
                        {
                          if($_SESSION['check_connectivity']=='yes')
                          {
                            echo "checked";
                            unset($_SESSION['check_connectivity']);
                          }
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
                      id="check_connectivity1"
                      value="no"
                         <?php
                        if(isset($_SESSION['check_connectivity']))
                        {
                          if($_SESSION['check_connectivity']=='no')
                          {
                            echo "checked";
                            unset($_SESSION['check_connectivity']);
                          }
                        }
                        else
                       {
                        echo "checked";
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
                  <label for="gender">Do you have T.V? </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_tv"
                      id="check_tv_yes"
                      value="yes"
                       <?php
                        if(isset($_SESSION['check_tv']))
                        {
                          if($_SESSION['check_tv']=='yes')
                          {
                            echo "checked";
                            unset($_SESSION['check_tv']);
                          }
                        }
                        else
                       {
                        echo "checked";
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
                      id="check_tv_no"
                      value="no"
                       <?php
                        if(isset($_SESSION['check_tv']))
                        {
                          if($_SESSION['check_tv']=='no')
                          {
                            echo "checked";
                            unset($_SESSION['check_tv']);
                          }
                        }
                       

                      ?>
                    />
                    <label class="form-check-label" for="exampleRadios2">
                     No
                    </label>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label for="gender">If yes do you have Cable connection? </label>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_cable"
                      id="check_cable"
                      value="yes"

                       <?php
                        if(isset($_SESSION['check_cable']))
                        {
                          if($_SESSION['check_cable']=='yes')
                          {
                            echo "checked";
                            unset($_SESSION['check_cable']);
                          }
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
                      id="check_cable1"
                      value="no"
                        <?php
                        if(isset($_SESSION['check_cable']))
                        {
                          if($_SESSION['check_cable']=='no')
                          {
                            echo "checked";
                            unset($_SESSION['check_cable']);
                          }
                        }
                        else
                       {
                        echo "checked";
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
                  <label for="gender">Do you have Radio</label><br>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="check_radio"
                      id="exampleRadios1"
                      value="yes"
                       <?php
                        if(isset($_SESSION['check_radio']))
                        {
                          if($_SESSION['check_radio']=='yes')
                          {
                            echo "checked";
                            unset($_SESSION['check_radio']);
                          }
                        }
                        else
                       {
                        echo "checked";
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
                        if(isset($_SESSION['check_radio']))
                        {
                          if($_SESSION['check_radio']=='no')
                          {
                            echo "checked";
                            unset($_SESSION['check_radio']);
                          }
                        }
                       
                        ?>
                    />
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
                   
                    type="text"
                    class="form-control"
                    name='per_zone'
                    id='per_zone'
                    placeholder="Province"
                    value="<?php  if(isset($_SESSION['per_zone'])) { echo $_SESSION['per_zone']; } unset($_SESSION['per_zone']) ?>"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
                 
                    type="text"
                    class="form-control"
                    name="per_province"
                    id="per_province"
                    placeholder="Province"
                    value="<?php  if(isset($_SESSION['per_province'])) { echo $_SESSION['per_province']; } unset($_SESSION['per_province']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                 
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="per_district"
                    id="per_district"
                     value="<?php  if(isset($_SESSION['per_district'])) { echo $_SESSION['per_district']; } unset($_SESSION['per_district']) ?>"
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
                    name="per_municipality"
                    id="per_municipality"
                    value="<?php  if(isset($_SESSION['per_municipality'])) { echo $_SESSION['per_municipality']; } unset($_SESSION['per_municipality']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
                  
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="per_wardno"
                    id="per_wardno"
                    value="<?php  if(isset($_SESSION['per_wardno'])) { echo $_SESSION['per_wardno']; } unset($_SESSION['per_wardno']) ?>"
                  />
                </div>
              </div>
             
              <h5>Temporary Address</h5>
                <input
                      type="checkbox"
                      
                      class="check_as_permanent"
                      id="check_as_permanent"
                    /> same as permanent 
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Zone</label>
                  <input
                  
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="temp_zone"
                    id="temp_zone"
                     value="<?php  if(isset($_SESSION['temp_zone'])) { echo $_SESSION['temp_zone']; } unset($_SESSION['temp_zone']) ?>"
                  />
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">Province</label>
                  <input
              
                    type="text"
                    class="form-control"
                    placeholder="Province"
                    name="temp_province"
                    id="temp_province"
                     value="<?php  if(isset($_SESSION['temp_province'])) { echo $_SESSION['temp_province']; } unset($_SESSION['temp_province']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="dob">District</label>
                  <input
                 
                    type="text"
                    class="form-control"
                    placeholder="District"
                    name="temp_district"
                    id="temp_district"
                     value="<?php  if(isset($_SESSION['temp_district'])) { echo $_SESSION['temp_district']; } unset($_SESSION['temp_district']) ?>" 
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
                    name="temp_municipality"
                    id="temp_municipality"
                     value="<?php  if(isset($_SESSION['temp_municipality'])) { echo $_SESSION['temp_municipality']; } unset($_SESSION['temp_municipality']) ?>"
                  />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                  <label for="dob">Ward No.</label>
                  <input
     
                    type="text"
                    class="form-control"
                    placeholder="Ward No."
                    name="temp_wardno"
                    id="temp_wardno"
                     value="<?php  if(isset($_SESSION['temp_wardno'])) { echo $_SESSION['temp_wardno']; } unset($_SESSION['temp_wardno']) ?>"
                  />
                </div>
              </div>
              <h5>Parent's / Guardian's Details</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Father's Name</label>
                  <input
                    name="father_name"
                    type="text"
                    class="form-control"
                    placeholder="Father's name"
                    required
                    value="<?php  if(isset($_SESSION['father_name'])) { echo $_SESSION['father_name']; } unset($_SESSION['father_name']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                  name="father_contact"
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    required
                    value="<?php  if(isset($_SESSION['father_contact'])) { echo $_SESSION['father_contact']; } unset($_SESSION['father_contact']) ?>"
                  />
                     <?php   if(isset($_SESSION['error_father_contact']))
                  {
                  ?>

                  <div class="error">
                   <small><?php echo $_SESSION['error_father_contact']; unset($_SESSION['error_father_contact']) ?></small>
                  </div>
                <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="father_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php  if(isset($_SESSION['father_occupation'])) { echo $_SESSION['father_occupation']; } unset($_SESSION['father_occupation']) ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Mother's Name</label>
                  <input
                    name="mother_name"
                     type="text"
                    class="form-control"
                    placeholder="Mother's name"
                    required
                    value="<?php  if(isset($_SESSION['mother_name'])) { echo $_SESSION['mother_name']; } unset($_SESSION['mother_name']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                  name="mother_contact"
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    required
                    value="<?php  if(isset($_SESSION['mother_contact'])) { echo $_SESSION['mother_contact']; } unset($_SESSION['mother_contact']) ?>"
                  />
                     <?php   if(isset($_SESSION['error_mother_contact']))
                  {
                  ?>

                  <div class="error">
                   <small><?php echo $_SESSION['error_mother_contact']; unset($_SESSION['error_mother_contact']) ?></small>
                  </div>
                <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="mother_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php  if(isset($_SESSION['mother_occupation'])) { echo $_SESSION['mother_occupation']; } unset($_SESSION['mother_occupation']) ?>"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="firstName">Guardian's Name</label>
                  <input
                    name="guardian_name"
                    type="text"
                    class="form-control"
                    placeholder="Guardian's name"
                    required
                    value="<?php  if(isset($_SESSION['guardian_name'])) { echo $_SESSION['guardian_name']; } unset($_SESSION['guardian_name']) ?>"
                  />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="middleName">Contact No.</label>
                  <input
                    name="guardian_contact"
                    type="text"
                    class="form-control"
                    placeholder="Contact No."
                    required
                    value="<?php  if(isset($_SESSION['guardian_contact'])) { echo $_SESSION['guardian_contact']; } unset($_SESSION['guardian_contact']) ?>"
                  />
                     <?php   if(isset($_SESSION['error_guardian_contact']))
                  {
                  ?>

                  <div class="error">
                   <small><?php echo $_SESSION['error_guardian_contact']; unset($_SESSION['error_guardian_contact']) ?></small>
                  </div>
                <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="lastName">Occupation</label>
                  <input
                    name="guardian_occupation"
                    type="text"
                    class="form-control"
                    placeholder="Occupation"
                    value="<?php  if(isset($_SESSION['guardian_occupation'])) { echo $_SESSION['guardian_occupation']; } unset($_SESSION['guardian_occupation']) ?>"
                  />
                </div>
              </div>
              <h5>Details of brother-sister studying currently in this school</h5>
              <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">Name</label>
                  <input
                     name="bro_sis_name1"
                    type="text"
                    class="form-control"
                    placeholder="Name"
                    value="<?php  if(isset($_SESSION['bro_sis_name1'])) { echo $_SESSION['bro_sis_name1']; } unset($_SESSION['bro_sis_name1']) ?>"
                  />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="middleName">Class</label>
                  <input
                    name="bro_sis_class1"
                    type="text"
                    class="form-control"
                    placeholder="Class"
                    value="<?php  if(isset($_SESSION['bro_sis_class1'])) { echo $_SESSION['bro_sis_class1']; } unset($_SESSION['bro_sis_class1']) ?>"
                  />
                </div>
                
              </div>
               <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">Name</label>
                  <input
                   name="bro_sis_name2"
                    type="text"
                    class="form-control"
                    placeholder="Name"
                    value="<?php  if(isset($_SESSION['bro_sis_name2'])) { echo $_SESSION['bro_sis_name2']; } unset($_SESSION['bro_sis_name2']) ?>"
                  />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="middleName">Class</label>
                  <input
                  name="bro_sis_class2"
                    type="text"
                    class="form-control"
                    placeholder="Class"
                    value="<?php  if(isset($_SESSION['bro_sis_class2'])) { echo $_SESSION['bro_sis_class2']; } unset($_SESSION['bro_sis_class2']) ?>"
                  />
                </div>
                
              </div>
               <div class="form-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="firstName">Name</label>
                  <input
                 name="bro_sis_name3"
                    type="text"
                    class="form-control"
                    placeholder="Name"
                    value="<?php  if(isset($_SESSION['bro_sis_name3'])) { echo $_SESSION['bro_sis_name3']; } unset($_SESSION['bro_sis_name3']) ?>"
                  />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label for="middleName">Class</label>
                  <input
                  name="bro_sis_class3"
                    type="text"
                    class="form-control"
                    placeholder="Class"
                    value="<?php  if(isset($_SESSION['bro_sis_class3'])) { echo $_SESSION['bro_sis_class3']; } unset($_SESSION['bro_sis_class3']) ?>"
                  />
                </div>
                
              </div>
              
             
             <h5>Previous school details</h5>

                 <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="firstName">Details</label>
                  <input
                    name="prev_school_details"
                    type="text"
                    class="form-control"
                    placeholder="Enter Details"
                    value="<?php  if(isset($_SESSION['prev_school_details'])) { echo $_SESSION['prev_school_details']; } unset($_SESSION['prev_school_details']) ?>"
                  />
                </div>
               </div>
                
              <h5>Mention if student have any health issues</h5>

                 <div class="form-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <label for="firstName">Health issues</label>
                  <input
                    name="health_issues"
                    type="text"
                    class="form-control"
                    placeholder="Mention health issues if any"
                    value="<?php  if(isset($_SESSION['health_issues'])) { echo $_SESSION['health_issues']; } unset($_SESSION['health_issues']) ?>"
                  />
                </div>
              
              <h5>Important Documents</h5>
              <div class="form-row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Previous class Gradesheet</label
                  >
                  <input type="file" class="form-control file-upload" name="prev_class_gradesheet" required />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Birth Certificate</label
                  >
                  <input type="file" class="form-control file-upload" name="birth_certificate" required />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <label for="file" class="file-label"
                    >Recent PP size Photo</label
                  >
                  <input type="file" class="form-control file-upload" name="pp" required />
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
                      value="yes"
                      id='agreed'
                      
                    />
                    <?php
                       if(isset($_SESSION['agreed']))
                       {
                           ?>
                           <div class="error">
                             
                             <small><?php echo $_SESSION['agreed']; unset($_SESSION['agreed']);  ?></small>
                           </div>

                      <?php }?>
                  </p>
                </div>
              </div>
              <div class="text-center">
                <button type="Submit" class="btn btn-warning" name="school_form" >Submit</button>
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

     

        $('#check_computer_no').click(function() {


          $('#check_internet').attr("disabled","disabled");
          $('#check_internet1').attr("disabled","disabled");
 
         });

        $('#check_computer_yes').click(function() {


          $('#check_internet').removeAttr("disabled","disabled");
          $('#check_internet1').removeAttr("disabled","disabled");
 
        });


         $('#check_mobile_no').click(function() {


          $('#check_connectivity').attr("disabled","disabled");
          $('#check_connectivity1').attr("disabled","disabled");
 
         });

        $('#check_mobile_yes').click(function() {


          $('#check_connectivity').removeAttr("disabled","disabled");
          $('#check_connectivity1').removeAttr("disabled","disabled");
 
        });

          $('#check_tv_no').click(function() {


          $('#check_cable').attr("disabled","disabled");
          $('#check_cable1').attr("disabled","disabled");
 
         });

        $('#check_tv_yes').click(function() {


          $('#check_cable').removeAttr("disabled","disabled");
          $('#check_cable1').removeAttr("disabled","disabled");
 
        });


        $('#check_as_permanent').change(function(){




              $('#temp_zone').val($('#per_zone').val());
              $('#temp_district').val($('#per_district').val());
              $('#temp_municipality').val($('#per_municipality').val());
              $('#temp_wardno').val($('#per_wardno').val());
              $('#temp_province').val($('#per_province').val());



        });
});



        

   </script>


  </body>
</html>
