<?php
session_start();
include('include/connection.php');
include('include/check_login.php');
       
        $id=$_GET['id'];
       
       $type=$_GET['type'];


       if($type=='notice')
      {
           $sql=" DELETE FROM notice  WHERE id=$id ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Notice has been successfully deleted';
          
        header('location:notice_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting event and news';
              header('location:notice_table.php');
     

      }

       }

       else if($type=='news_and_event')
       {
          $sql=" DELETE FROM news_and_event  WHERE id=$id ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Event and post has been successfully deleted';
          
        header('location:news and events_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting event and news';
              header('location:news and events_table.php');

     

      }

       }


       else if($type=='calender')
       {
          $sql=" DELETE FROM calender  WHERE id=$id ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='calender Event has been successfully deleted';
          
        header('location:event_table.php');
     
      }
      else
       {
        $_SESSION['error']='!Opps somthing wrong in deleting calender Event';
              header('location:event_table.php');
              
     

      }

       }

       

?>