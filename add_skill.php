<?php
 var_dump($_POST);
require 'connection.php';
$conn    = Connect();


$skillName   = $conn->real_escape_string($_POST['skill_name']);
$description   = $conn->real_escape_string($_POST['description']);



$sql_1   = "INSERT INTO skills (skillName,description) VALUES('".$skillName."','".$description."')";

 
if ($conn->query($sql_1) === TRUE) {
    echo "Thank You For Contacting Us.";
} else {
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
}
 

 
$conn->close();
 
?>