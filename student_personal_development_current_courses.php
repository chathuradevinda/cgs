
<?php

echo "</br>";

echo "<button><a href='student_personal_development_current_qualification.php'>Back</a></button>";
session_start();
//var_dump($_POST);
require 'connection.php';
$conn    = Connect();



      $studentID = $_SESSION["student"];
      $maxNVQ = 0;
      $speciality = '';


      $nvq_level = $_SESSION["nvq"];
      $stream = $_SESSION["favor"];
    //  echo $nvq_level;
    //  echo $stream;
      //$nvq_level = $nvq_level-1;
      echo "<h5><b>Courses you can follow based on your previous qualifications as your next level</b></h5>";
      $sql_0 = "SELECT qualificationID FROM student_qualification WHERE qualificationID IN (SELECT qualificationID FROM educational_qualification WHERE NVQLevel=4)";
      $result_0 = mysqli_query($conn,$sql_0);
      while($row_0 = mysqli_fetch_array($result_0)){
         $stream = $row_0['qualificationID'];
      }

      //echo $nvq_level;
      //echo $stream;
      if($nvq_level==4){
      //$sql_1 ="SELECT relatedFields FROM related_fields WHERE qualificationID IN(SELECT qualificationID FROM qualification WHERE speciality='".$stream."' AND title='G.C.E. Advanced Level')";
        //$sql_1 ="SELECT * FROM course WHERE speciality IN (SELECT relatedFields FROM related_fields WHERE qualificationID IN(SELECT qualificationID FROM qualification WHERE speciality='".$stream."' AND title='G.C.E. Advanced Level'))";
        $sql_1 ="SELECT * FROM course WHERE speciality = '".$stream."' AND courseType IN ('Certificate Course')";
        //echo $sql_1;
      }else if($nvq_level==5) {
      //  $sql_1 ="SELECT * FROM course WHERE speciality IN(SELECT relatedFields FROM rela)";
      $sql_1 ="SELECT * FROM course WHERE speciality = '".$stream."' AND courseType IN ('Diploma')";
    }else if($nvq_level==6) {
      //  $sql_1 ="SELECT * FROM course WHERE speciality IN(SELECT relatedFields FROM rela)";
      $sql_1 ="SELECT * FROM course WHERE speciality = '".$stream."' AND courseType IN ('Higher Diploma')";
      }else{
        //$sql_1 ="SELECT * FROM course WHERE speciality IN (SELECT relatedFields FROM related_fields WHERE qualificationID IN(SELECT qualificationID FROM qualification WHERE speciality='".$stream."' AND title NOT IN('G.C.E. Advanced Level','G.C.E. Ordinary Level')))";
      }

        $result_1 = mysqli_query($conn,$sql_1);
        while($row_1 = mysqli_fetch_array($result_1)){
            echo "<div class='w3-panel w3-theme-d1'>";
            echo $row_1['courseName'];
            echo "</div>";


        }


      $conn->close();

      ?>
