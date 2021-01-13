 <?php
 session_start();
 if(!isset($_SESSION['login_user']))
 {
  header('location:../login/login.php');
 }
 if(isset($_GET['year']))
 {
     $year=$_GET['year'];
 }
 if(isset($_GET['subject']))
 {
    $subject=$_GET['subject'];
 }
 if(isset($_GET['semester']))
 {
     $semester=$_GET['semester'];
 }
 if(isset($_GET['page']))
 {
  $pageno=$_GET['page'];

 }
 if(isset($_GET['faculty']))
 {
 	$faculty=$_GET['faculty'];
 }
 
 ?>
<?php
 if($faculty=='civil')
 {
   $prevurl="civil_resources.php?year=".$year."&&semester=".$semester."&&subject=".$subject."&&page=".$pageno;
 }
 else
 {
   $prevurl="computer_resources.php?year=".$year."&&semester=".$semester."&&subject=".$subject."&&page=".$pageno;
 }
  ?>
 <a href="<?php echo $prevurl; ?>">&#8592;BACK</a>
 


      <?php 
      include"../include/connection.php";
$id = $_GET['id'];
      $query = "SELECT id, pdf FROM engineering_resource WHERE id= '$id'";
$result = $db->query($query);
while ($row = $result->fetch_object()) {
  $pdf = $row->pdf;
  $target_path = "../teacher/pdf/";
  # code...
}

?>
<br>

<iframe src="<?php echo $target_path.$pdf; ?>" width = "100%" height = "800px";></iframe>
  