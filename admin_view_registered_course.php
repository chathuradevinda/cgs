  <?php include "admin_header.php" ?>

<!DOCTYPE html>
<html>
<title>Welcome Admin</title>
<body>


<?php
require 'connection.php';
$conn    = Connect();

$submit_id = 2;

$sql_1 = "SELECT * FROM course";
$result_1 =  mysqli_query($conn,$sql_1);

echo "<table class=w3-table w3-striped>";
echo"<tr class=w3-theme>";

echo"<th>Course Name</th>";
echo"<th>Delivery Type</th>";
echo"<th>Fee</th>";
echo"<th>Duration</th>";
echo"<th>Target Audience</th>";
echo"<th>Qualification Category</th>";
echo"<th>Prerequisite</th>";
echo"<th>Description</th>";
echo"<th>Course Content</th>";
echo"<th>Institute ID</th>";
echo"<th>Speciality</th>";
echo"<th>Course Type</th>";
echo"</tr>";
while($row_1 = mysqli_fetch_array($result_1)){
  echo "<tr>";

    echo "<td><p>".$row_1['courseName']."</p>";
    echo "<td><p>".$row_1['deliveryType']."</p>";
    echo "<td><p>".$row_1['fee']."</p>";
    echo "<td><p>".$row_1['duration']."</p>";
    echo "<td><p>".$row_1['targetAudience']."</p>";
    echo "<td><p>".$row_1['qualificationCategory']."</p>";
    echo "<td><p>".$row_1['prerequisite']."</p>";
    echo "<td><p>".$row_1['description']."</p>";
    echo "<td><p>".$row_1['courseContent']."</p>";
    echo "<td><p>".$row_1['userID']."</p>";
    echo "<td><p>".$row_1['speciality']."</p>";
    echo "<td><p>".$row_1['courseType']."</p>";
  echo"</tr>";
    }
echo"</table>"
?>
</body>

</html>
