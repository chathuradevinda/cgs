<?php
session_start();

if(!isset($_SESSION['language_select'])){
  $_SESSION['language_select'] = 1;
}

if($_SESSION['language_select']==1){
  include('English.php');
  $_SESSION['pass'] = 1;
}elseif ($_SESSION['language_select']==2) {
  include('Sinhala.php');
  $_SESSION['pass'] = 2;
}else{
  echo "Error in language pack";
}

 ?>
