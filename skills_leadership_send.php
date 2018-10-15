<?php
require 'connection.php';
$conn    = Connect();
session_start();
$studentID = $_GET['student'];
$skillID = $_GET['skill'];
$questionCount = $_GET['qCount'];
$total = 0;

for ($i=1; $i <= $questionCount; $i++) {
  $total = $total + $conn->real_escape_string($_POST['q' . $i]);
}
  $total = $total+$total;
  $sql_1 = "INSERT INTO student_skill (skillID,userID,skillScore) VALUES ($skillID,$studentID,$total)";
  if ($conn->query($sql_1) === TRUE) {
          unset($_GET['student']);
          unset($_GET['skill']);
          ?>
          <script>
          alert("You have got <?php echo $total;?> marks!");
          self.close ();
          window.onunload = refreshParent;
          function refreshParent() {
              window.opener.location.reload();
          }
          </script>

          <?php
  } else {
      echo "Error: " . $sql_1 . "<br>" . $conn->error;
  }

$conn->close();
 ?>
