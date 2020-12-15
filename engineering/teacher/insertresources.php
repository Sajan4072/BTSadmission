<?php
session_start();
include('include/connection.php');
	
  if(isset($_POST['submit']))
   {

   	$caption = $_POST['caption'];
   	$year = $_POST['year'];
   	$subject = $_POST['subject'];
   	$semister =$_POST['semister'];
   	$faculty = $_POST['faculty'];

	 $image=$_FILES['image']['name'];
	

	 $temp=$_FILES['image']['tmp_name'];
	
	 $dir="photo/".$image;
	
	 move_uploaded_file($temp, $dir);
 	
 	 $pdf=$_FILES['pdf']['name'];
 	 $temp1=$_FILES['pdf']['tmp_name'];

 	 $dir1="pdf/".$pdf;
 	 move_uploaded_file($temp1, $dir1);
	
	 $sql ="insert into engineering_resource(image,pdf,year,subject,semister,faculty) values('$image','$pdf','$year','$subject','$semister','$faculty')";
	 $query= mysqli_query($db,$sql);

$_SESSION['message']="POSTED";
	
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>EATGITA</title>
</head>
<body>
	<?php

	if(isset($_SESSION['message'])):


	?>
	<div class="alert alert-success">

		<?php
		echo $_SESSION['message'];

		?>
	</div>
	<?php endif ?>

</body>
</html>