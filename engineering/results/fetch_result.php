<?php 

  include("../include/connection.php");
$semester=$_GET['semester'];
$code=$_GET['uniquecode'];
$term=$_GET['term'];



$fetch_result=array();
   $sql="select *from enginneringresult where uniquecode='$code' AND semester='$semester'  AND term='$term' " ;
   
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $i=0; 
  while($row = $result->fetch_assoc()) {
  	  $fetch_result[$i]['uniquecode']=$row['uniquecode'];
  	  $fetch_result[$i]['semester']=$row['semester'];
  	  $fetch_result[$i]['id']=$row['id'];
  	  $fetch_result[$i]['roll']=$row['roll'];
  	  $fetch_result[$i]['term']=$row['term'];
  	  $fetch_result[$i]['subject']=$row['subject'];
  	  $fetch_result[$i]['marks']=$row['marks'];
        $i++;
     
  }
} 
  

 echo json_encode($fetch_result);


?>