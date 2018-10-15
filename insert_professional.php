<?php
session_start();
require 'connection.php';
$conn    = Connect();
$ID =$_SESSION["sess_user"];
$sql_X = "SELECT userID FROM user WHERE email = '".$ID."'";
$result_X = mysqli_query($conn,$sql_X);
while($row_X = mysqli_fetch_array($result_X)){
  $studentID = $row_X['userID'];
  //echo $row_X['studentID'];
}
$_SESSION['student']=$studentID;
//insert.php;

if(isset($_POST["achieved_year"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=cgsu", "root", "");
 $student_id = $_SESSION['student'];
 for($count = 0; $count < count($_POST["achieved_year"]); $count++)
 {
  $query = "INSERT INTO student_qualification
  (qualificationID, userID,achievedYear)
  VALUES (:p_qualification,:student_id, :achieved_year )
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
     ':p_qualification'  => $_POST["p_qualification"][$count],
    ':student_id'   => $student_id,
    ':achieved_year'  => $_POST["achieved_year"][$count],

   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>
