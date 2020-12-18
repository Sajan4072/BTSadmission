<?php

 session_start();

  $db = mysqli_connect("localhost","root", "", "bts" );  

  if(isset($_POST['school_form']))
  { 
         $f_name=$_POST['f_name'];
         $m_name=$_POST['m_name'];
         $l_name=$_POST['l_name'];
         $dob=$_POST['dob'];
         $gender=$_POST['gender'];
         $caste=$_POST['caste'];
         $nationality=$_POST['nationality'];
         $religion=$_POST['religion'];
         $mobile_no=$_POST['mobile_no'];
         $email=$_POST['email'];
         $facebook_account=$_POST['facebook_account'];

         //radion button part
         $check_computer=$_POST['check_computer'];
         $check_connection=$_POST['check_internet'];
         $check_mobile=$_POST['check_mobile'];
         $check_connectivity=$_POST['check_connectivity'];
         $check_tv=$_POST['check_tv'];
         $check_cable=$_POST['check_cable'];
         $check_radio=$_POST['check_radio'];

         // permanenet address part

         $temp_zone=$_POST['temp_zone'];
         $temp_province=$_POST['temp_province'];
         $temp_district=$_POST['temp_district'];
         $temp_municipality=$_POST['temp_municipality'];
         $temp_wardno=$_POST['temp_wardno'];

         //temporarty part


         $per_zone=$_POST['per_zone'];
         $per_province=$_POST['per_province'];
         $per_district=$_POST['per_district'];
         $per_municipality=$_POST['per_municipality'];
         $per_wardno=$_POST['per_wardno'];


         //parents and gurdian

         $father_name=$_POST['father_name'];
         $father_contact=$_POST['father_contact'];
         $father_occupation=$_POST['father_occupation'];

         $mother_name=$_POST['mother_name'];
         $mother_contact=$_POST['mother_contact'];
         $mother_occupation=$_POST['mother_occupation'];

         $guardian_name=$_POST['guardian_name'];
         $guardian_contact=$_POST['guardian_contact'];
         $guardian_occupation=$_POST['guardian_occupation'];

         //details of brother and sister

         $bro_sis_name1=$_POST['bro_sis_name1'];
         $bro_sis_name2=$_POST['bro_sis_name2'];
         $bro_sis_name3=$_POST['bro_sis_name3'];

         $bro_sis_class1=$_POST['bro_sis_class1'];
         $bro_sis_class2=$_POST['bro_sis_class2'];
         $bro_sis_class3=$_POST['bro_sis_class3'];

         // prev school detai;s

         $prev_school_details=$_POST['prev_school_details'];
         $health_issues=$_POST['health_issues'];

         $prev_class_gradesheet=$_FILES['prev_class_gradesheet']['name'];
         $birth_certificate=$_FILES['birth_certificate']['name'];

         include('old_data.php');
         
        


        $prev_class_gradesheet=$_FILES['prev_class_gradesheet']['name'];
        $temp=$_FILES['prev_class_gradesheet']['tmp_name'];
        $dir="file/".$prev_class_gradesheet;
        move_uploaded_file($temp, $dir);


        $pp=$_FILES['pp']['name'];
        $temp=$_FILES['pp']['tmp_name'];
        $dir="file/".$pp;
        move_uploaded_file($temp, $dir);



        $pp=$_FILES['pp']['name'];
        $temp=$_FILES['pp']['tmp_name'];
        $dir="file/".$pp;
        move_uploaded_file($temp, $dir);

         header('location:./index.php');

      //   $sql=" insert into admission_school 
      //          (f_name,m_name,l_name,dob,gender,caste,nationality,religion,mobile_no,email,facebook_account,check_computer,check_connection,check_mobile,check_connectivity,check_tv,check_cable,check_radio,per_zone,per_province,per_district,per_municipality,per_wardno,temp_zone,temp_province, temp_district,temp_municipality,temp_wardno,father_name,father_contact,father_occupation,mother_name,mother_contact,mother_occupation,guardian_name,guardian_contact,guardian_occupation,bro_sis_name1,bro_sis_class1,bro_sis_name2,bro_sis_class2,bro_sis_name3,bro_sis_class3,prev_school_details,health_issues,prev_class_gradesheet,birth_certificate,pp)
      //         values('$f_name','$m_name','$l_name','$dob','$gender','$caste','$nationality','$religion','$mobile_no','$email','$facebook_account','$check_computer','$check_connection','$check_mobile','$check_connectivity','$check_tv','$check_cable','$check_radio','$per_zone','$per_province','$per_district','$per_municipality','$per_wardno','$temp_zone','$temp_province','$temp_district','$temp_municipality','$temp_wardno','$father_name','$father_contact','$father_occupation','$mother_name','$mother_contact','$mother_occupation','$guardian_name','$guardian_contact','$guardian_occupation','$bro_sis_name1','$bro_sis_class1','$bro_sis_name2','$bro_sis_class2','$bro_sis_name3','$bro_sis_class3','$prev_school_details','$health_issues','$prev_class_gradesheet','$birth_certificate','$pp')";

      // if(mysqli_query($db,$sql))
      // {
      //   $_SESSION['success']='Event and post has been successfully posted';
          
      //   header('location:./index.php');
     
      // }
      // else
      //  {
      //   $_SESSION['success']='!Opps somthing wrong in posting event and news';
              
     

      // }





         // echo $f_name,$m_name,$l_name,$dob,$gender,$caste,$nationality,$religion,$mobile_no,$email,$facebook_account."<br>computer=>".$check_computer."<br>connection=>".$check_connection."<br>mobile=>".$check_mobile."<br>connectivity=>".$check_connectivity."<br>tv=>".$check_tv."<br>cable=>".$check_cable."<br>radio=>".$check_radio."<br><br>temp_zone=>".$temp_zone."<br>per_zone=>".$per_zone."<br>temp_province=>".$temp_province."<br>per_province=>".$per_province."<br>temp_district=>".$temp_district."<br>per_district=>".$per_district."<br>temp_municipality=>".$temp_municipality."<br>per_municipality=>".$per_municipality."<br>temp_wardno=>".$temp_wardno."<br>per_wardno=>".$per_wardno."<br>parents and gurdians <br>father_name=>".$father_name."<br>father_contact=>".$father_contact."<br>father_occupation=>".$father_occupation."<br><br>mother_name=>".$mother_name."<br>mother_contact=>".$mother_contact."<br>mother_occupation=>".$mother_occupation."<br><br>guardian_name=>".$guardian_name."<br>guardian_contact=>".$guardian_contact."<br>guardian_occupation=>".$guardian_occupation."<br><br>Details of brother and sister<br<br>bro_sis_name1=>".$bro_sis_name1."<br>bro_sis_name2=>".$bro_sis_name2."<br>bro_sis_name3=>".$bro_sis_name3."<br>bro_sis_class1=>".$bro_sis_class1."<br>bro_sis_class2=>".$bro_sis_class2."<br>bro_sis_class3=>".$bro_sis_class3."<br><br>"."<br>prev_school_details=>".$prev_school_details."<br>health_issues=>".$health_issues."<br><br>"."<br>prev prev_class_gradesheet=>".$prev_class_gradesheet."<br>birth_certificate=>".$birth_certificate."<br>pp=>".$pp;
        
    

  }
  



?>