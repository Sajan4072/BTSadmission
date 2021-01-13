<?php
session_start();
include('../../include/connection.php');
	
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
			$roll=$myData[1];
			$sub=$myData[2];
			$marks=$myData[3];
			$term=$myData[4];
			$class=$myData[5];

			$sql1="insert into school_result (uniquecode,roll,subject,marks,term,class) values('".$uniquecode."','".$roll."','".$sub."','".$marks."','".$term."','".$class."')";
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
	


	// $sql="insert into school_result(class,term)
	//     values('$class','$term')";
	// $query=mysqli_query($db,$sql);
  	   
 //     $_SESSION['message']="POSTED";
	
 }


?>



