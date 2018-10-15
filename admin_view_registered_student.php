<!DOCTYPE html>
<html>
<title>Welcome Admin</title>
<?php
include "admin_header.php";
require 'connection.php';
$conn    = Connect();

//$submit_id = $_GET['studentID'];
$submit_id = 6;
$sql_1 = "SELECT * FROM student";
$result_1 =  mysqli_query($conn,$sql_1);

echo"<table class=w3-table w3-striped>";
echo"<tr class=w3-theme>";
echo"<th>Student ID</th>";
echo"<th>First Name</th>";
echo"<th>Last Name</th>";
echo"<th>NIC</th>";
echo"<th>DOB</th>";
echo"<th>Mobile</th>";
echo"<th>Home</th>";



echo"</tr>";

while($row_1 = mysqli_fetch_array($result_1)){
  echo "<tr>";
    echo "<td><p>".$row_1['userID']."</p></td>";
    echo "<td><p>".$row_1['firstName']."</p></td>";
    echo "<td><p>".$row_1['lastName']."</p>";
    echo "<td><p>".$row_1['NIC']."</p>";
    echo "<td><p>".$row_1['DOB']."</p>";
    echo "<td><p>".$row_1['mobile']."</p>";
    echo "<td><p>".$row_1['home']."</p>";


echo "</tr>";
    }

echo "</table>";
?>
</body>

</html>
