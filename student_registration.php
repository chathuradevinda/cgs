<?php
 var_dump($_POST);
require 'connection.php';
$conn    = Connect();


$firstName   = $conn->real_escape_string($_POST['first_name']);
$lastName   = $conn->real_escape_string($_POST['last_name']);
$nic   = $conn->real_escape_string($_POST['nic']);
$dob   = $conn->real_escape_string($_POST['dob']);
$addressNo = $conn->real_escape_string($_POST['address_no']);
$addressLine1 = $conn->real_escape_string($_POST['address_line_1']);
$addressLine2 = $conn->real_escape_string($_POST['address_line_2']);
$city = $conn->real_escape_string($_POST['city']);
$mobile    = $conn->real_escape_string($_POST['mobile']);
$residence = $conn->real_escape_string($_POST['residence']);
$email = $conn->real_escape_string($_POST['email']);
$password   = $conn->real_escape_string($_POST['pwd']);

$sql_1   = "INSERT INTO student (firstName,lastName,NIC,DOB,mobile,home,email,hash) VALUES('".$firstName."','".$lastName."','".$nic."','".$dob."','".$mobile."','".$residence."','".$email."','".$password."')";

 
if ($conn->query($sql_1) === TRUE) {
    $last_id = $conn->insert_id;
    $sql_2 = "INSERT INTO student_address(studentID,no,addressLine1,addressLine2,city) VALUES('".$last_id."','".$addressNo."','".$addressLine1."','".$addressLine2."','".$city."')";
    if($conn->query($sql_2) === TRUE){
        echo "Thank You For Contacting Us. Last inserted ID is: " . $last_id;
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 

 
$conn->close();
 
?>