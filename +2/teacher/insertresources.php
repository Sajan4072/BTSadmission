<?php
session_start();
include('../include/connection.php');
	
  if(isset($_POST['submit']))
   {
   	
	$caption=$_POST['caption'];
	$class=$_POST['class'];
	$subject=$_POST['subject'];
	$name= $_SESSION['teacher_user'];
	 
    $management=1;
        
      	
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
	
	 
          $name= $_SESSION['teacher_user'];
         $result = mysqli_query($db, "SELECT * FROM college_teacher WHERE  firstname = '$name'");
      $row= mysqli_fetch_assoc($result);
      $id = $row['id'];
    

	 $sql="insert into college_resource(image,pdf,class,caption,subject,management,posted_by)
	    values('$image','$pdf',$class,'$caption','$subject','$management','$id')";
	    $query=mysqli_query($db,$sql);
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








