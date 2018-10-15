<?php
  session_start();
  session_destroy();
  unset($_SESSION['sess_user']);
  unset($_SESSION['student']);
  unset($_SESSION['nvq']);
  unset($_SESSION['stream']);
  header("location: index.php");

 ?>
