<?php

  if(isset($_SESSION['login_from_collage']))
  {
      header('location:+2/index.php');
  }
  if(isset($_SESSION['login_from_engineering']))
  {
  	header('location:engineering/index.php');

  }



?>