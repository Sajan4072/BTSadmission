<?php
session_start();
include('include/connection.php');
include('include/check_login.php');
       
        $id=$_GET['id'];

       $sql=" DELETE FROM news_and_event  WHERE id=$id ";
   	   

   	  if(mysqli_query($db,$sql))
   	  {
   	  	$_SESSION['success']='Event and post has been successfully deleted';
   	  	 	
   	  	header('location:news and events_table.php');
   	 
   	  }
   	  else
   	   {
   	  	$_SESSION['error']='!Opps somthing wrong in deleting event and news';
   	    	  	header('location:news_&_event.php');
   	 

   	  }

?>