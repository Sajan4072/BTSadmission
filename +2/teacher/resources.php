<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="gal.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="gal.css">
</head>
<body>
</body>
<!-- top banner -->
    
    <div class="container-fluid">
      <div class="row top-banner p-2">
        <div class="col-lg-2 col-md-2 col-12">
           <div class="logo">
                <img src="../teacher/frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" />
              </div>
        </div>
                <div class="col-lg-8 col-md-8 col-12">
                   <div class="top-title">
                <h1>BUDHANILKANTHA TECHNICAL SCHOOL</h1>
              </div>

              <div class="top-subtitle">
                <h5>A BETTER LEARNING FUTURE STARTS</h5>
              </div>  
                </div>
                        <div class="col-lg-2 col-md-2 col-12">
                          <div class="row" style="margin-top: 60px; margin-right: 2px;">
                            <div class="col-6"><h5><i style="margin-right: 5px; margin-top: 10px;" class="fa fa-user" aria-hidden="true"></i><a href="../profile.php" style="text-decoration: none; color: black;"><?php echo $_SESSION['teacher_user']; ?></a></h5></div>
                            <div class="col-6">
                               <a href="logout.php"> <button type="submit" class="btn btn-primary" style="background-color: #224a8f; border: none; float: left; border-radius: 20px;">LOGOUT</button></a>
                            </div>
                          </div>
                           
                        </div>
      </div>
    </div>


<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="container sidebar">
        <div class="row">
          <ul class="unstyled" >
     
            <li><a href="#"><i class="fa fa-file"  ></i>RESOURCES </a></li>
           
            <li><a href="results.php"><i class="fa fa-file" ></i>RESULTS</a></li>
            <li><a href="mypost.php"><i class="fa fa-file" ></i>MYPOST</a></li>
          </ul>
        </div>
      </div>
    </div>
    



     <div class="col-lg-8 col-md-8 col-sm-12">
      <form method="post" enctype="multipart/form-data" action="insertresources.php" >
      <div class="container uploadsection">

 <?php if(isset($_SESSION['error'])) {?>
             <div class="alert alert-danger" role="alert">
  <?php echo $_SESSION['error']; 
  unset($_SESSION['error']);
   ?>
</div><?php } ?>

 <?php if(isset($_SESSION['success'])){?>
             <div class="alert alert-success" role="alert">
  <?php echo $_SESSION['success']; 
  unset($_SESSION['success']);
   ?>
</div><?php } ?>


        
        <div class="col-12">
          <div class="row"   style="color: #224a8f">
          <div class="col-1">
             <i class="fa fa-user"  style="color: #224a8f" aria-hidden="true"></i>
          </div>
          <div class="col-11">Post Resources</div>
          </div>
          <div class="row">
            <textarea name="caption" style="height: 50px;"></textarea>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              Choose images
              <input type="file" name="image" > 
              
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              Choose pdf file
              <input type="file" name="pdf" > 
              
            </div>
          </div>



          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              Choose class
             <!--  <input type="number" name="class" >  -->
             <select name="class" id="class">
               <option selected disabled>choose class</option>
               <option value="11">Class 11</option>
               <option value="12">Class 12</option>
             </select>
              
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px; margin-bottom: 5px;">
              Choose subject
             <!--  <input type="text" name="subject" >  -->
             <select name="subject" id="subject">
                   <option selected disabled>choose subject</option>
             </select>
              
            </div>
          </div>
          <div class="row">
            <div class="check" style="margin-top: 10px; margin-left: 7px; color: #224a8f;">
            <div class="col-4"></div>
            
             

            
          </div>
          </div>




            
            <div class="col-4"><p style="float: right;">
            <div class="col-4"></div>
           
              
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"><p style=" margin-left: 280px;">
            <button type="submit" name="submit" class="btn btn-success" style="border: none; border-radius: 20px; margin-top: 5px;float: right;">POST</button>

            </p></div>
</form>

          </div>

        </div>
        
      </div>
    </div>
  </div>

</div>




<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script >
  var class11=" <option selected disabled>choose subject</option>"+
              "<option value='C.English'>C.English</option>"+
              "<option value='C.Nepali'>C.Nepali</option>"+
              "<option value='Accounting'>Accounting</option>"+
              "<option value='Economics'>Economics</option>"+
              "<option value='Business Studies'>Business Studies</option>"+
              "<option value='Hotel Management'>Hotel Management</option>";

  var class12=" <option selected disabled>choose subject</option>"+
            "<option value='C.English'>C.English</option>"+
            "<option value='Accounting'>Accounting</option>"+
            "<option value='Economics'>Economics</option>"+
            "<option value='Business Studies'>Business Studies</option>"+
            "<option value='Hotel Management'>Hotel Management</option>"+
            "<option value='Business Matematics'>Business Matematics</option>"+
            "<option value='Marketing'>Marketing</option>";

          $('#class').change(function(){
              
              fill_subject($('#class').val());

          });
          function fill_subject(stu_class)
          {
             $('#subject').html('');

            if(stu_class==null)
            {

            }
            else
            {
               if(stu_class==11)
               { 
                   $('#subject').append(class11);
               }
               if(stu_class==12)
               {
                   $('#subject').append(class12);
               }
            }
          }

    
</script>
</body>
</html>