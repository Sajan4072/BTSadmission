<?php 
include('../include/connection.php'); 
$search=$_GET['search'];





  $sql="select * from engineering_teacher where email LIKE '%$search%' or firstname LIKE '%$search%' or lastname LIKE '%$search%'  ";
    
   $result=mysqli_query($db,$sql);
   $fetch_result=array();
 
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
      
  }

   

 echo json_encode($fetch_result);


?>