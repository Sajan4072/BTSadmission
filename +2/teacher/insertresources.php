



<?php
session_start();
include('include/connection.php');
	
  if(isset($_POST['submit']))
   {
   	
	$caption=$_POST['caption'];
	$class=$_POST['class'];
	$subject=$_POST['subject'];
	 
        if($_POST['management']=='Yes'){
         $management=1;
        }
        else{
         $management=0;
        }
       
	

	 
	 $image=$_FILES['image']['name'];
	

	 $temp=$_FILES['image']['tmp_name'];
	
	 $dir="photo/".$image;
	
	 move_uploaded_file($temp, $dir);
 	
 	 $pdf=$_FILES['pdf']['name'];
 	 $temp1=$_FILES['pdf']['tmp_name'];

 	 $dir1="pdf/".$pdf;
 	 move_uploaded_file($temp1, $dir1);
	
	 

	 $sql="insert into college_resource(image,pdf,class,caption,subject,management)
	    values('$image','$pdf',$class,'$caption','$subject','$management')";
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








