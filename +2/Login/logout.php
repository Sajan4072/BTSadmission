<?php
session_start();
if(isset($_SESSION['login_user']))
{
	unset($_SESSION['login_user']);
	
}
if(isset($_SESSION['login_from_collage']))
{
	
	unset($_SESSION['login_from_collage']);
}

header('location:../index.php');
?>