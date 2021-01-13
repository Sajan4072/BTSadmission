<?php
session_start();
error_reporting(0);
include('../include/connection.php');
	
 if(isset($_POST['submit']))
   {
   	
	
	

	 
	 $fileName=$_FILES['csv']['name'];
	

	 $fileTmpName=$_FILES['csv']['tmp_name'];


	 $fileExtension=pathinfo($fileName,PATHINFO_EXTENSION);
		
	 $allowedType=array('csv');
	 if (!in_array($fileExtension,$allowedType))
	 {
	 	?>
	 	<div class="alert alert-danger">
	 		Inavalid File extension 
	 	</div> 
	 	<?php
	 }
	else{
		$handle=fopen($fileTmpName,'r');
		while(($myData=fgetcsv($handle,1000,','))!==FALSE)
		  {
			$uniquecode=$myData[0];
			$class=$myData[1];
			$faculty=$myData[2];
			$roll=$myData[3];
			$term=$myData[4];
			$sub=$myData[5];
			$marks=$myData[6];

			$sql1="insert into collegeresult (uniquecode,roll,subject,marks,term,class,faculty) values('".$uniquecode."','".$roll."','".$sub."','".$marks."','".$term."','".$class."','".$faculty."')";
			$query1=mysqli_query($db,$sql1);
;
			
		  }
		if(!$query1){
			
			$_SESSION['error']='error in uploading'.mysql_error();
			header('location:results.php');

		            }
		else{?>
			
			<?php
			$_SESSION['success']='RESULT HAS BEEN POSTED SUCCESFULLY';
			header('location:results.php');

		    }
		}
	}
	?>