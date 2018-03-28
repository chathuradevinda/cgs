<?php
// var_dump($_POST);
require 'connection.php';
$conn    = Connect();


$courseName   = $conn->real_escape_string($_POST['course_name']);
$course_type   = $conn->real_escape_string($_POST['course_type']);
$speciality   = $conn->real_escape_string($_POST['speciality']);
$deliveryType   = $conn->real_escape_string($_POST['delivery_type']);
$fee = $conn->real_escape_string($_POST['fee']);
$duration = $conn->real_escape_string($_POST['duration']);
$targetAudience = $conn->real_escape_string($_POST['target_audience']);
$qualificationCategory = $conn->real_escape_string($_POST['qualification_category']);
$prerequisite = $conn->real_escape_string($_POST['prerequisite']);
$description = $conn->real_escape_string($_POST['description']);
$courseContent  = $conn->real_escape_string($_POST['course_content']);
$instituteID =6;// $conn->real_escape_string($_POST['']);


$sql_1   = "INSERT INTO course (courseName,deliveryType,fee,duration,targetAudience,qualificationCategory,prerequisite,description,courseContent,instituteID,speciality,courseType) 
VALUES('".$courseName."','".$deliveryType."','".$fee."','".$duration."','".$targetAudience."','".$qualificationCategory."','".$prerequisite."','".$description."','".$courseContent."',".$instituteID.",'".$speciality."','".$course_type."')";

 
if ($conn->query($sql_1) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Thank You For Contacting Us. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
}
 

 
$conn->close();
 
?>