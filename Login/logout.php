<?php

session_start();
if(isset($_SESSION['login_user']))
{
	unset($_SESSION['login_user']);
	unset($_SESSION['login_from_school']);
	header('location:../index.php');
}

?>