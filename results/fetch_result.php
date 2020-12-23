<?php 

  include("../admin/include/connection.php");
$class=$_GET['class'];
$code=$_GET['uniquecode'];
$term=$_GET['term'];




$fetch_result=array();


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM school_result where uniquecode='$code' AND class='$class' AND term='$term'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $i=0; 
  while($row = $result->fetch_assoc()) {
  	  $fetch_result[$i]['uniquecode']=$row['uniquecode'];
  	  $fetch_result[$i]['class']=$row['class'];
  	  $fetch_result[$i]['id']=$row['id'];
  	  $fetch_result[$i]['roll']=$row['roll'];
  	  $fetch_result[$i]['term']=$row['term'];
  	  $fetch_result[$i]['subject']=$row['subject'];
  	  $fetch_result[$i]['marks']=$row['marks'];
        $i++;
     
  }
 
  echo json_encode($fetch_result);

} 






?>