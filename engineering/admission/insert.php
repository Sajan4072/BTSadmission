<?php
   session_start();

  include('../include/connection.php');
   if(isset($_POST['submit']))
   {
  

      $firstname=$_POST['sname'];
      $middlename=$_POST['mname'];
      $lastname=$_POST['lname'];
      $DOB=$_POST['DOB'];
      $gender=$_POST['gender'];
    
      
         $nationality=$_POST['nationality'];
       
           $mobilenumber=$_POST['mobilenumber'];
            $email=$_POST['email'];
             
              $zone=$_POST['zone'];
               $province=$_POST['province'];
                $district=$_POST['district'];
                 $municipality=$_POST['municipality'];
                  $wardno=$_POST['wardno'];
                   $zone1=$_POST['zone1'];
                    $province1=$_POST['province1'];
        $district1=$_POST['district1'];
         $municipality1=$_POST['municipality1'];
          $wardno1=$_POST['wardno1'];
           $fname=$_POST['fname'];
            $contact=$_POST['contact'];
             $occupation=$_POST['occupation'];
              $mname=$_POST['moname'];
               $mcontact=$_POST['mcontact'];
                $moccupation=$_POST['moccupation'];
         $gname=$_POST['gname'];
          $gcontact=$_POST['gcontact'];
           $goccupation=$_POST['goccupation'];
            $school=$_POST['school'];
 $passed=$_POST['passed'];
  $GPA=$_POST['GPA'];
 
 $english=$_POST['english'];
 
 $science=$_POST['science'];
 $math=$_POST['math'];
 $schooltype=$_POST['schooltype'];
 $school1=$_POST['school1'];
$passed1=$_POST['passed1'];
$GPA1=$_POST['GPA1'];
 
 $english1=$_POST['english1'];
 
 $science1=$_POST['science1'];
 $math1=$_POST['math1'];


if(!is_dir("photo"))
{
  mkdir("photo");
}

  
  $slcgrade=$_FILES['slcgrade']['name'];
  

   $temp=$_FILES['slcgrade']['tmp_name'];
  
   $dir="photo/".$slcgrade;
  
   move_uploaded_file($temp, $dir);
  
   $slccharacter=$_FILES['slccharacter']['name'];
   $temp1=$_FILES['slccharacter']['tmp_name'];

   $dir1="photo/".$slccharacter;
   move_uploaded_file($temp1, $dir1);




   $birthcert=$_FILES['entrance']['name'];
   $temp3=$_FILES['entrance']['tmp_name'];

   $dir3="photo/".$birthcert;
   move_uploaded_file($temp3, $dir3);



   $entrance=$_FILES['birthcert']['name'];
   $temp4=$_FILES['birthcert']['tmp_name'];

   $dir4="photo/".$entrance;
   move_uploaded_file($temp4, $dir4);


   $recommendation=$_FILES['recommendation']['name'];
   $temp5=$_FILES['recommendation']['tmp_name'];

   $dir5="photo/".$recommendation;
   move_uploaded_file($temp5, $dir5);



   $resultcopy=$_FILES['resultcopy']['name'];
   $temp6=$_FILES['resultcopy']['tmp_name'];

   $dir6="photo/".$resultcopy;
   move_uploaded_file($temp6,$dir6);



   $pp=$_FILES['pp']['name'];
   $temp2=$_FILES['pp']['tmp_name'];

   $dir2="photo/".$pp;
   move_uploaded_file($temp2, $dir2);


  
 $faculty=$_POST['faculty'];





      $sql="insert into engineeringadmission (sname, mname, lname, DOB ,gender,  nationality ,mobilenumber , email ,zone,  province , district,  municipality , wardno , zone1 ,province1, district1 ,municipality1 ,wardno1, fname ,contact, moname,  mcontact , moccupation, occupation , gname, gcontact , goccupation ,school , passed, GPA ,English, Science, Math , schooltype,  school1, passed1, GPA1 , english1 , science1,  math1, slcgrade,  slccharacter , birthcert, entrance,  resultcopy , pp,recommendation,faculty)
                         values('$firstname' , '$middlename',  '$lastname' , '$DOB' ,'$gender', '$nationality',  
                         '$mobilenumber',  '$email',  '$zone' , '$province',  '$district',  '$municipality',  $wardno,  '$zone1' ,'$province1' ,'$district1', '$municipality1' ,'$wardno1' ,'$fname',  '$contact' ,'$occupation' , '$mname' ,'$mcontact',  '$moccupation' ,'$gname', '$gcontact',  '$goccupation', '$school', 
                         '$passed',  '$GPA' ,  '$english' ,  '$science', '$math', '$schooltype','$school1','$passed1','$GPA1','$english1','$science1','$math1','$slcgrade',  '$slccharacter' ,'$birthcert','$entrance' ,'$resultcopy','$pp','$recommendation','$faculty') ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['admission_success_engineering']='set';
          
        header('location:../index.php');
        exit();
     
      }
      else
       {
        $_SESSION['admission_error_engineering']='set';
        header('location:../index.php');
        exit();
              
     

      }
          $_SESSION['admission_error_engineering']='set';
        header('location:../index.php');

   }



?>