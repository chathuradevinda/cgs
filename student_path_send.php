<?php
// var_dump($_POST);


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

$preferred_path_1   = $conn->real_escape_string($_POST['preferred_path_1']);
$preferred_path_2   = $conn->real_escape_string($_POST['preferred_path_2']);
$preferred_path_3   = $conn->real_escape_string($_POST['preferred_path_3']);
$studentID =$_SESSION['student'];// $conn->real_escape_string($_POST['']);


$sql_1   = "INSERT INTO student_path (userID,qualificationID1,qualificationID2,qualificationID3)
VALUES('".$studentID."','".$preferred_path_1."','".$preferred_path_2."','".$preferred_path_3."')";


if ($conn->query($sql_1) === TRUE) {
    echo "Your details added successfully!.";
    header("Location: student_my_profile_edit_1.php");
} else {
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
}



$conn->close();

?>
