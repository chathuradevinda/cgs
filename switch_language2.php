<?php
  //  session_start();
    $goBack = $_SERVER['HTTP_REFERER'];
    $language = $_GET['lang_base'];
    $_SESSION['language_select'] = $language;
  //  echo $_SESSION['language_select'];
  //  echo $goBack;
    header("location: $goBack");

?>
