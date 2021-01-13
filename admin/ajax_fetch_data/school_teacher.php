<?php 
include('../include/connection.php');
$search=$_GET['search'];

if($search=='')
{
	  $sql="select * from school_teacher where email LIKE '%$search%' or firstname LIKE '%$search%' or lastname LIKE '%$search%' or concat(firstname,' ',lastname) LIKE '%$search%' order by id desc limit 20 ";
    
   $result=mysqli_query($db,$sql);
   $fetch_result=array();
 
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
      
  }

}
else
{
	  $sql="select * from school_teacher where email LIKE '%$search%' or firstname LIKE '%$search%' or lastname LIKE '%$search%' or concat(firstname,' ',lastname) LIKE '%$search%' order by id desc ";
    
   $result=mysqli_query($db,$sql);
   $fetch_result=array();
 
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
      
  }

}





   

 echo json_encode($fetch_result);


?>