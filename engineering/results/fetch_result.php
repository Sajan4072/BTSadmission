<?php 

  include("connection.php");
$semester=$_GET['semester'];
$code=$_GET['uniquecode'];
$term=$_GET['term'];




   $sql="select *from enginneringresult where uniquecode='$code' AND semester='$semester'  AND term='$term' " ;
    
   $result=mysqli_query($db,$sql);
   $fetch_result=array();
 $res=mysqli_fetch_array($result);
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
  }

 echo json_encode($fetch_result);


?>