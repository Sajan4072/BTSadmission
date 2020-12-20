<?php
   session_start();

  include('include/connection.php');

  




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



?>