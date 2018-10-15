<?php
 var_dump($_POST);
require 'connection.php';
$conn    = Connect();


$companyName   = $conn->real_escape_string($_POST['company_name']);
$regNo=$conn->real_escape_string($_POST['registration_no']);
$website  = $conn->real_escape_string($_POST['website']);
$email = $conn->real_escape_string($_POST['email']);
$telephone1 = $conn->real_escape_string($_POST['telephone_1']);
$telephone2 = $conn->real_escape_string($_POST['telephone_2']);
$fax = $conn->real_escape_string($_POST['fax']);
$password    = $conn->real_escape_string($_POST['pwd']);
$addressNo = $conn->real_escape_string($_POST['address_no']);
$addressLine1 = $conn->real_escape_string($_POST['address_line_1']);
$addressLine2 = $conn->real_escape_string($_POST['address_line_2']);
$city = $conn->real_escape_string($_POST['city']);

$sql_1   = "INSERT INTO user(email,hash,userCategory) VALUES('".$email."','".$password."',3)";
//echo ($sql_1);

if ($conn->query($sql_1) === TRUE) {
    $last_id = $conn->insert_id;
    $sql_2   = "INSERT INTO company (userID,companyName,regNo,website,telephone1,telephone2,fax) VALUES($last_id,'".$companyName."','".$regNo."','".$website."',".$telephone1.",".$telephone2.",".$fax.")";
    $sql_3 = "INSERT INTO user_address(userID,no,addressLine1,addressLine2,city) VALUES($last_id,'".$addressNo."','".$addressLine1."','".$addressLine2."','".$city."')";
    if($conn->query($sql_2) && $conn->query($sql_3)=== TRUE){
        echo "Thank You For Contacting Us. Last inserted ID is: " . $last_id;
        header("Location: index.php");
    }else{
        echo "Error: " . $sql_2 . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
}



$conn->close();

?>
