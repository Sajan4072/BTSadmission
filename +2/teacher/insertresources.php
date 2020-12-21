



<?php
session_start();
include('include/connection.php');
	
  if(isset($_POST['submit']))
   {
   	
	$caption=$_POST['caption'];
	$class=$_POST['class'];
	$subject=$_POST['subject'];
	 if($_POST['law']=='Yes'){
         $law=1;
        }
        else{
         $law=0;
        }
        if($_POST['education']=='Yes'){
         $education=1;
        }
        else{
         $education=0;
        }
        if($_POST['management']=='Yes'){
         $management=1;
        }
        else{
         $management=0;
        }
        if($_POST['humanities']=='Yes'){
         $humanities=1;
        }
        else{
         $humanities=0;
        }

	

	 
	 $image=$_FILES['image']['name'];
	

	 $temp=$_FILES['image']['tmp_name'];
	
	 $dir="photo/".$image;
	
	 move_uploaded_file($temp, $dir);
 	
 	 $pdf=$_FILES['pdf']['name'];
 	 $temp1=$_FILES['pdf']['tmp_name'];

 	 $dir1="pdf/".$pdf;
 	 move_uploaded_file($temp1, $dir1);
	
	 

	 $sql="insert into college_resource(image,pdf,class,caption,subject,science,management,humanities)
	    values('$image','$pdf',$class,'$caption','$subject','$science','$management','$humanities')";
	    $query=mysqli_query($db,$sql);
	   
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




