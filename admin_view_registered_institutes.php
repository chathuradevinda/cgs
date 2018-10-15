<!DOCTYPE html>
<html>
<title>Welcome Admin</title>




<?php
include "admin_header.php";
require 'connection.php';
$conn    = Connect();

//$submit_id = $_GET['instituteID'];
$submit_id = 6;
$sql_1 = "SELECT * FROM institute";
$result_1 =  mysqli_query($conn,$sql_1);

echo"<table class=w3-table w3-striped>";
echo"<tr class=w3-theme>";

echo"<th>Institute Name</th>";
echo"<th>Website</th>";

echo"<th>Reg No</th>";
echo"<th>Telephone1</th>";
echo"<th>Telephone2</th>";
echo"<th>Fax</th>";



while($row_1 = mysqli_fetch_array($result_1)){
  echo "<tr>";

    echo "<td><p>".$row_1['instituteName']."</p></td>";
    echo "<td><p>".$row_1['website']."</p>";

    echo "<td><p>".$row_1['regNo']."</p>";
    echo "<td><p>".$row_1['telephone1']."</p>";
    echo "<td><p>".$row_1['telephone2']."</p>";
    echo "<td><p>".$row_1['fax']."</p>";


echo "</tr>";
    }

echo "</table>";
?>
</body>

</html>
