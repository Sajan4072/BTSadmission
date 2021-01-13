<?php
session_start();
error_reporting(0);
$resources='set';

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
              Choose PDF
              <input type="file" name="pdf" > 
              
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px">
              Choose class <br>
              <select name="class" id="class">
                <option selected disabled>choose class</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
               <option value="10">10</option>
                
              </select>
           
            </div>
          </div>


          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin-top: 10px; margin-bottom: 5px;">
              Choose subject
             
              
                  <select name="subject" id="subject">
                  <option selected disabled>Choose subject</option>
                    
                  </select>
             
              
            </div>
          </div>







            
            <div class="col-4"><p style="float: right;">
            <div class="col-4"></div>
           
              
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"><p style=" margin-left: 280px;">
            <button type="submit" name="submit" class="btn btn-success" style="border: none; border-radius: 20px; margin-top: 5px; float: right;">POST</button>

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
</body>
<script>

  // for class 1 and 2
    var class2=  " <option selected disabled>Choose subject</option>"+
                 "<option value='English'>English</option>"+
                 "<option value='Grammar'>Grammar</option>"+
                 "<option value='Math'>Math</option>"+
                 "<option value='Nepali'>Nepali</option>"+
                 "<option value='Science'>Science</option>"+
                 "<option value='Social'>Social</option>";

  // for classs 3 and 4 

   var class3=  " <option selected disabled>Choose subject</option>"+
                 "<option value='English'>English</option>"+
                 "<option value='Grammar'>Grammar</option>"+
                 "<option value='Math'>Math</option>"+
                 "<option value='Nepali'>Nepali</option>"+
                 "<option value='Science'>Science</option>"+
                 "<option value='Social'>Social</option>"+
                 "<option value='Health'>Health</option>"+
                 "<option value='Computer'>Computer</option>"+
                 "<option value='Moral'>Moral</option>";
   // class 5 and 6
var class5=  " <option selected disabled>Choose subject</option>"+
                 "<option value='English'>English</option>"+
                 "<option value='Grammar'>Grammar</option>"+
                 "<option value='Math'>Math</option>"+
                 "<option value='Nepali'>Nepali</option>"+
                 "<option value='Science'>Science</option>"+
                 "<option value='Social'>Social</option>"+          
                 "<option value='Computer'>Computer</option>"+
                 "<option value='EPH'>EPH</option>";

var class7=  " <option selected disabled>Choose subject</option>"+
                 "<option value='English'>English</option>"+
                 "<option value='Grammar'>Grammar</option>"+
                 "<option value='Math'>Math</option>"+
                 "<option value='Nepali'>Nepali</option>"+
                 "<option value='Science'>Science</option>"+
                 "<option value='Social'>Social</option>"+          
                 "<option value='Computer'>Computer</option>"+
                 "<option value='EPH'>EPH</option>"+
                 "<option value='Account'>Account</option>"+
                 "<option value='Optional Math'>Optional math</option>";

  //class 8 and 9 10

  var class8=  " <option selected disabled>Choose subject</option>"+
                 "<option value='English'>English</option>"+
                 "<option value='Math'>Math</option>"+
                 "<option value='Nepali'>Nepali</option>"+
                 "<option value='Science'>Science</option>"+
                 "<option value='Social'>Social</option>"+          
                 "<option value='Computer'>Computer</option>"+
                 "<option value='EPH'>EPH</option>"+
                 "<option value='Account'>Account</option>"+
                 "<option value='Optional Math'>Optional math</option>";




            
  $('#class').change(function(){
   
       var get_class=$('#class').val();
        fill_subject(get_class);
  });

  function fill_subject(get_class)
  {
     $('#subject').html('');
     if(get_class==1 || get_class==2)
     {
       $('#subject').append(class2);
     }
       if(get_class==3 || get_class==4)
     {
       $('#subject').append(class3);
     }
      if(get_class==5 || get_class==6)
     {
       $('#subject').append(class5);

     }

      if(get_class==7)
     {
       $('#subject').append(class7);
     }
      if(get_class==8 || get_class==9 || get_class==10)
     {
       $('#subject').append(class8);
     }
    
  }

</script>
</html>