<?php 
include('../include/connection.php');
$search=$_GET['search'];

if($search== ' ')
{
	$sql="select * from school order by id asc  limit 20 ";
    
   $result=mysqli_query($db,$sql);
   $fetch_result=array();
 
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
      
  }

}
else
{
	$sql="select * from school where uniquecode LIKE '%$search%' or firstname LIKE '%$search%' or lastname LIKE '%$search%' or class LIKE '%$search%' or concat(firstname,' ',lastname) LIKE '%$search%' order by firstname asc   ";
    
   $result=mysqli_query($db,$sql);
   $fetch_result=array();
 
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
      
  }
}

  

   

 echo json_encode($fetch_result);


?>