<?php
// var_dump($_POST);
require 'connection.php';
$conn    = Connect();

$qualificationID   = $conn->real_escape_string($_POST['stream']);
$related_fields   = $conn->real_escape_string($_POST['related_fields']);


$sql_1   = "INSERT INTO related_fields (qualificationID,relatedFields)
VALUES('".$qualificationID."','".$related_fields."')";


if ($conn->query($sql_1) === TRUE) {
    //$last_id = $conn->insert_id;
    echo "Thank You For Contacting Us.";
} else {
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
}



$conn->close();

?>
