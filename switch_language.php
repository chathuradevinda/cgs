<?php
    session_start();
    $goBack = $_SERVER['HTTP_REFERER'];
    $language = $_GET['lang_base'];
    $_SESSION['language_select'] = $language;
    header("location: $goBack");

?>
