<?php
require 'connection.php';
$conn    = Connect();

$submit_id = $_GET['id'];

$sql_1 = "SELECT * FROM course WHERE courseID=$submit_id";
$result_1 =  mysqli_query($conn,$sql_1);

while($row_1 = mysqli_fetch_array($result_1)){
    echo "<p>".$row_1['courseID']."</p>";
    echo "<p>".$row_1['courseName']."</p>";
    echo "<p>".$row_1['deliveryType']."</p>";
    echo "<p>".$row_1['fee']."</p>";
    echo "<p>".$row_1['duration']."</p>";
    echo "<p>".$row_1['targetAudience']."</p>";
    echo "<p>".$row_1['qualificationCategory']."</p>";
    echo "<p>".$row_1['prerequisite']."</p>";
    echo "<p>".$row_1['description']."</p>";
    echo "<p>".$row_1['courseContent']."</p>";
    echo "<p>".$row_1['instituteID']."</p>";
    echo "<p>".$row_1['speciality']."</p>";
    echo "<p>".$row_1['courseType']."</p>";
    }

?>
