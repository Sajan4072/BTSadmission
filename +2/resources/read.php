<?php 
session_start();
 if(!isset($_SESSION['login_user']))
 {
  header('location:../login/login.php');
 }
 if(isset($_GET['class']))
 {
   $class=$_GET['class'];
 }
 if(isset($_GET['subject']))
 {
  $subject=$_GET['subject'];
 }
 if(isset($_GET['page']))
 {
  $pageno=$_GET['page'];
 }
 
$url="resource.php?class=".$class."&&subject=".$subject."&&page=".$pageno;

 ?>
<a href="<?php echo $url; ?>">&#8592;BACK</a>
      <?php 
       include("../include/connection.php");
$id = $_GET['id'];
      $query = "SELECT id, pdf FROM college_resource WHERE id= '$id'";
$result = $db->query($query);
while ($row = $result->fetch_object()) {
  $pdf = $row->pdf;
  $target_path = "../teacher/pdf/";
  # code...
}

?>
<br>

<iframe src="<?php echo $target_path.$pdf; ?>" width = "100%" height = "800px";"></iframe>
  