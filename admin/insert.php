<?php
   session_start();

  include('include/connection.php');

  

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
} 



   if(isset($_POST['news_and_event_insert']))
   {
      $post= $_POST['title'];
      $date = $_POST['date'];
   	  $NewsAndEvent=$_POST['NewsAndEvent'];
        if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
        if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
        if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }



   	  $sql="insert into news_and_event (post,description,date,school,plus2,engineering) values('$post','$NewsAndEvent','$date',$school,$plus2,$engineering) ";
   	   

   	  if(mysqli_query($db,$sql))
   	  {
   	  	$_SESSION['success']='Event and post has been successfully posted';
   	  	 	
   	  	header('location:news and events_table.php');
   	 
   	  }
   	  else
   	   {
   	  	$_SESSION['error']='!Opps somthing wrong in posting event and news';
   	    	  	header('location:news_&_event.php');
   	 

   	  }
   	  


   }

   if(isset($_POST['news_and_event_edit']))
   {



       $id=$_POST['id'];
      $post= $_POST['title'];
      $date = $_POST['date'];
      $NewsAndEvent=$_POST['NewsAndEvent'];
        if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
        if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
        if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }



      $sql="update news_and_event set post='$post' ,description='$NewsAndEvent' ,date='$date',school='$school',plus2='$plus2',engineering='$engineering' where id='$id' ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Event and post has been successfully updated';
          
        header('location:news and events_table.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
              header('location:news and events_table.php');
     

      }
      


   }


   if(isset($_POST['stu_registration']))
   {   

       include('school_student_registration/old_data.php');
       include('school_student_registration/validate.php');



       if(mysqli_query($db,"INSERT INTO school(firstname,lastname,address,fathername,contact,password,uniquecode,dob) VALUES('$fname', '$lname', '$address', '$fathername', '$contact', '$password','$uniquecodeS','$dob')"))
       {
         include('school_student_registration/clear_old_data.php');
        $_SESSION['success']="you have successfully insert student data";  
        header('location:school_stu_registration_table.php');     
       } 
       else
       {
        $_SESSION['error']="opps somthing went worng";
       }

        



   }
    if(isset($_POST['stu_registration_edit']))
   {
       
       $uniquecode=$_POST['uniquecode'];
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $address=$_POST['address'];
       $password=$_POST['password'];
       $dob=$_POST['dob'];
      $contact=$_POST['contact'];
      $fathername=$_POST['fathername'];

      $sql="update school set firstname='$fname', lastname='$lname' ,address='$address',fathername='$fathername',contact='$contact',password='$password',dob='$dob'   where uniquecode='$uniquecode' ";

      if(mysqli_query($db,$sql))
      {
         $_SESSION['success']="Informaton of uniquecode=".$uniquecode." has been successfully edited";
        header('location:school_stu_registration_table.php'); 
       
      }
      else
      {
        $_SESSION['error']="Informaton of uniquecode=".$uniquecode." has not edited somthing went wrong";
        header('location:school_stu_registration_table.php'); 

      }
      }



?>