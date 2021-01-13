<?php 

include '../include/connection.php';

$id=$_GET['id'];

$sql="select * from college where id='$id' limit 1";
$result=mysqli_fetch_assoc(mysqli_query($db,$sql));
if($result['payment']=='yes')
{
	$query="update college set payment='no'  where id='$id' ";
}
else
{
	$query="update college set payment='yes'  where id='$id' ";
}

mysqli_query($db,$query);

 ?>\