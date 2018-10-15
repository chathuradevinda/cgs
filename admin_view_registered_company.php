<!DOCTYPE html>
<html>
<title>Welcome Admin</title>


<?php
include "admin_header.php";
require 'connection.php';
$conn    = Connect();

//$submit_id = $_GET['companyID'];
$submit_id = 1;
$sql_1 = "SELECT * FROM company";
$result_1 =  mysqli_query($conn,$sql_1);

echo"<table class=w3-table w3-striped>";
echo"<tr class=w3-theme>";
echo"<th>company ID</th>";
echo"<th>Company Name</th>";
echo"<th>Website</th>";

echo"<th>Telephone1</th>";
echo"<th>Telephone2</th>";
echo"<th>Fax</th>";


echo"</tr>";
while($row_1 = mysqli_fetch_array($result_1)){
  echo "<tr>";
    echo "<td><p>".$row_1['userID']."</p></td>";
    echo "<td><p>".$row_1['companyName']."</p></td>";
    echo "<td><p>".$row_1['website']."</p></td>";


    echo "<td><p>".$row_1['telephone1']."</p></td>";
    echo "<td><p>".$row_1['telephone2']."</p></td>";
    echo "<td><p>".$row_1['fax']."</p></td>";

echo "</tr>";
    }

echo "</table>";
?>
</body>

</html>
