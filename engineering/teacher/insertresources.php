<?php
session_start();
include('../include/connection.php');
	
  if(isset($_POST['submit']))
   {

   	$caption = $_POST['caption'];
   	$year = $_POST['year'];
   	$subject = $_POST['subject'];
   	$semister =$_POST['semister'];
   	$faculty = $_POST['faculty'];
   	$name= $_SESSION['teacher_user'];
	
	 $dir="photo";
	 $dir1 = "pdf";
	 
   

/* Check if the directory already exists. */

if(!is_dir($dir)){

    /* Directory does not exist, so lets create it. */

    mkdir($dir);

}

if(!is_dir($dir1)){

    /* Directory does not exist, so lets create it. */

    mkdir($dir1);

}

	 $image=$_FILES['image']['name'];
	

	 $temp=$_FILES['image']['tmp_name'];
	
	 $dir="photo/".$image;
	
	 move_uploaded_file($temp, $dir);
 	
 	 $pdf=$_FILES['pdf']['name'];
 	 $temp1=$_FILES['pdf']['tmp_name'];

 	 $dir1="pdf/".$pdf;
 	 move_uploaded_file($temp1, $dir1);
	
	 $sql ="insert into engineering_resource(image,pdf,year,subject,semister,faculty,posted_by) values('$image','$pdf','$year','$subject','$semister','$faculty','$name')";
	 $query= mysqli_query($db,$sql);


if(!$query){
			
			$_SESSION['error']='error in uploading'.mysql_error();
			header('location:resources.php');

		            }
		else{?>
			
			<?php
			$_SESSION['success']='RESOURCE HAS BEEN POSTED SUCCESFULLY';
			header('location:resources.php');

		    }
		}
	
	?>


