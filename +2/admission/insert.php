<?php
   session_start();

  include('connection.php');
   if(isset($_POST['submit']))
   {
  

      $firstname=$_POST['firstname'];
      $middlename=$_POST['middlename'];
      $lastname=$_POST['lastname'];
      $DOB=$_POST['DOB'];
      $gender=$_POST['gender'];
      $caste=$_POST['caste'];
      $elective=$_POST['elective'];
      $elective2=$_POST['elective2'];
      $elective3=$_POST['elective3'];

      
      

      
         $nationality=$_POST['nationality'];
          $religion=$_POST['religion'];
           $mobilenumber=$_POST['mobilenumber'];
            $email=$_POST['email'];
             $facebook=$_POST['facebook'];
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
           $pfirst=$_POST['pfirst'];
            $contact=$_POST['contact'];
             $occupation=$_POST['occupation'];
              $mname=$_POST['mname'];
               $mcontact=$_POST['mcontact'];
                $occupation1=$_POST['occupation1'];
         $gname=$_POST['gname'];
          $gcontact=$_POST['gcontact'];
           $goccupation=$_POST['goccupation'];
            $sname=$_POST['sname'];
 $passed=$_POST['passed'];
  $GPA=$_POST['GPA'];
 $nepali=$_POST['nepali'];
 $english=$_POST['english'];
 $social=$_POST['social'];
 $science=$_POST['science'];
 $math=$_POST['math'];
 $eph=$_POST['eph'];
 
$slcgrade=$_FILES['slcgrade']['name'];
  

   $temp=$_FILES['slcgrade']['tmp_name'];
  
   $dir="photo/".$slcgrade;
  
   move_uploaded_file($temp, $dir);
  
   $slccharacter=$_FILES['slccharacter']['name'];
   $temp1=$_FILES['slccharacter']['tmp_name'];

   $dir1="photo/".$slccharacter;
   move_uploaded_file($temp1, $dir1);

   $pp=$_FILES['pp']['name'];
   $temp2=$_FILES['pp']['tmp_name'];

   $dir2="photo/".$pp;
   move_uploaded_file($temp2, $dir2);


  






      $sql="insert into admission (firstname , middlename,  lastname , DOB ,gender,  caste, nationality, religion,  mobilenumber,  email, facebook,  zone , province,  district,  municipality,  wardno,  zone1 ,province1 ,district1, municipality1 ,wardno1 ,pfirst,  contact ,occupation , mname ,mcontact,  ocuupation1 ,gname, gcontact,  goccupation, sname, passed,  GPA ,nepali,  english ,social,  science, math,  eph,elective , elective2 ,elective3, slcgrade,  slccharacter  ,pp)
                         values('$firstname' , '$middlename',  '$lastname' , '$DOB' ,'$gender',  '$caste' , '$nationality', '$religion',  
                         '$mobilenumber',  '$email', '$facebook',  '$zone' , '$province',  '$district',  '$municipality',  $wardno,  '$zone1' ,'$province1' ,'$district1', '$municipality1' ,'$wardno1' ,'$pfirst',  '$contact' ,'$occupation' , '$mname' ,'$mcontact',  '$occupation1' ,'$gname', '$gcontact',  '$goccupation', '$sname', 
                         '$passed',  '$GPA' ,'$nepali',  '$english' ,'$social',  '$science', '$math',  '$eph', '$elective' , '$elective2','$elective3', '$slcgrade',  '$slccharacter'  ,'$pp') ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Event and post has been successfully posted';
          
        header('location:../index.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
              
     

      }
      


   }



?>