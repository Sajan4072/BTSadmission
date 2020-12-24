<?php 

  include("../include/connection.php");

$class=$_GET['class'];
$code=$_GET['uniquecode'];
$term=$_GET['term'];




 //   $sql="select *from collegeresult where uniquecode='$code' AND class='$class'  AND term='$term' " ;
    
 //   $result=mysqli_query($db,$sql);
 //   $fetch_result=array();
 // $res=mysqli_fetch_array($result);
 //   while($row=mysqli_fetch_array($result))
 //  {
 //      $fetch_result[]=$row;
 //  }

$fetch_result=array();
  $sql = "SELECT * FROM collegeresult where uniquecode='$code' AND class='$class' AND term='$term'";
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
}

 echo json_encode($fetch_result);


?>