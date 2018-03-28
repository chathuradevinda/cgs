<?php
 var_dump($_POST);
require 'connection.php';
$conn    = Connect();


$title   = $conn->real_escape_string($_POST['qualification_title']);
$qualificationType  = $conn->real_escape_string($_POST['qualification_type']);
$qualificationDescription  = $conn->real_escape_string($_POST['qualification_description']);
$priorQualification   = $conn->real_escape_string($_POST['prior_qualification']);

$nvqLevel   = $conn->real_escape_string($_POST['nvq_level']);
$prefix   = $conn->real_escape_string($_POST['prefix']);
$speciality   = $conn->real_escape_string($_POST['speciality']);

$postfix   = $conn->real_escape_string($_POST['postfix']);

$sql_1   = "INSERT INTO qualification(title,qualificationCategory,speciality,description,priorQualification) VALUES('".$title."','".$qualificationType."','".$speciality."','".$qualificationDescription."','".$priorQualification."')";


if ($conn->query($sql_1) === TRUE) {
    $last_id = $conn->insert_id;

    if($qualificationType=='Educational'){
        $sql_2 = "INSERT INTO educational_qualification(qualificationID,NVQLevel,prefix) VALUES('".$last_id."','".$nvqLevel."','".$prefix."')";
        $conn->query($sql_2);
        echo "Thank You Adding Educational Qualification. Last inserted ID is: " . $last_id;
    }else if( $qualificationType=='Professional'){
        $sql_3 = "INSERT INTO professional_qualification(qualificationID,postfix) VALUES('".$last_id."','".$postfix."')";
        $conn->query($sql_3);
        echo "Thank You Adding Professional Qualification. Last inserted ID is: " . $last_id;
    }else{
        echo "Error: " . $sql_3 . "<br>" . $conn->error;
    }
}else{
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
}

 
$conn->close();
 
?>