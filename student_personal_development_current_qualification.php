<?php

  //  session_start();
    //require 'connection.php';
    //$conn    = Connect();
    include_once('student_header.php');
    $ID =$_SESSION["sess_user"];
    $sql_X = "SELECT userID FROM user WHERE email = '".$ID."'";
    $result_X = mysqli_query($conn,$sql_X);
    while($row_X = mysqli_fetch_array($result_X)){
      $studentID = $row_X['userID'];
      //echo $row_X['studentID'];
    }
    $_SESSION['student']=$studentID;
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Student</title>
<style>
            th{
                text-align:center;
            }
            #searching_results{

            }

            #qualification_direct{
              text-align: center;
            }

            #div a:link{
              color: inherit;
            }

            #current_qualifcation_loader{
              height: 93vh;
            }

            #preferred_qualifcation_loader{
              height: 93vh;
            }

            #soft_skills_loader{
              height: 93vh;
            }

           </style>
            <script>
              $(document).ready(function(){
                //var count = 2;
                $("a").click(function(){
                    //count = count+1;
                    $("#current_qualifcation_loader").load("student_personal_development_current_courses.php");
                });
              });
            </script>
      </head>
    </br>
<body>
  <div id="current_qualifcation_loader" class="w3-panel w3-theme-l5 w3-col s4 w3-border w3-hover-border-blue">
    <?php

    $maxNVQ = 0;
    $speciality = '';
    $conn    = Connect();
    $sql_1   = "SELECT MAX(NVQLevel)
        FROM educational_qualification
        WHERE qualificationID IN (SELECT qualificationID FROM student_qualification WHERE userID=$studentID)";
    $result_1 = mysqli_query($conn,$sql_1);
    while($row_1 = mysqli_fetch_array($result_1)){
        //  echo "<h5>You are now at NVQ Level </h5>";
          $maxNVQ = $row_1['MAX(NVQLevel)'];

          if($maxNVQ<3){
            echo "<h3>"?><?php echo _s_You_are?><?php "</h3>";
            $sql_1_2 = "SELECT qualificationID1 FROM student_path WHERE userID=$studentID";
            $result_1_2 = mysqli_query($conn,$sql_1_2);
            while($row_1_2 = mysqli_fetch_array($result_1_2)){
              $speciality = $row_1_2['qualificationID1'];
              echo "<h4>".$speciality."</h4>";
              //echo $speciality;
            }
          }else{

            //echo $maxNVQ;
            echo "<h3>"?><?php echo _s_You_now_at;?><?php echo " ".$maxNVQ ?></h3>
            <?php echo _s_Followed_stream;
            /*
          $sql_1_1 = "SELECT speciality
            FROM qualification
          WHERE qualificationID IN
            (SELECT qualificationID FROM student_qualification WHERE studentID=$studentID)
          UNION (SELECT qualificationID FROM educational_qualification WHERE NVQLevel = $maxNVQ))";*/

          $sql_1_1 = "SELECT speciality FROM qualification WHERE qualificationID IN (SELECT qualificationID FROM student_qualification WHERE qualificationID IN (SELECT qualificationID FROM educational_qualification WHERE NVQLevel = $maxNVQ))";
          //  echo $sql_1_1;
            $result_1_1 = mysqli_query($conn,$sql_1_1);
            while($row_1_1 = mysqli_fetch_array($result_1_1)){
                  $speciality = $row_1_1['speciality'];
                  echo "<b>".$speciality."</b>";
                }
          }
        }

    if($maxNVQ<3){
      echo "<h4>"?><?php echo _s_You_can; ?><?php "</h4>";
      echo '</br>';
      echo "<div id='qualification_direct' class='w3-panel w3-theme w3-round'>";
      echo "<h4>"?><?php echo _s_OL; ?><?php "</h4>";
      echo "</div>";

    }elseif($maxNVQ==3){
      $maxNVQ=$maxNVQ+1;
      //$conn_2    = Connect();
      $sql_2 = "SELECT DISTINCT title FROM qualification
      WHERE title IN ('G.C.E. Advanced Level','Certificate Course')";
      $result_2 = mysqli_query($conn,$sql_2);
      echo '</br>';
        echo "<h4>"?><?php echo _s_You_can; ?><?php "</h4>";
      echo '</br>';
      while($row_2 = mysqli_fetch_array($result_2)){
            $_SESSION["favor"] = $speciality;
            $_SESSION["nvq"] = $maxNVQ;
            //echo $_SESSION["nvq"];
            if($row_2['title']=='G.C.E. Advanced Level'){

              echo "<div id='qualification_direct' class='w3-panel w3-theme w3-round'>";
              echo "<h4>".$row_2['title']."</h4>";
              //echo $row_2['title'];
              echo "</div>";

            }else{
              //*******************************
              echo "<div id='qualification_direct' class='w3-panel w3-theme w3-round'>";
              //echo "<h4><a href='student_personal_development_current_courses.php'>".$row_2['title']."</a></h4>";
              echo "<h4><a>".$row_2['title']."</a></h4>"; // Changed this place
              //echo $row_2['title'];
              echo "</div>";
              //****************************
            }
            //echo "</br>";
          }

    }else if($maxNVQ==4){
          $maxNVQ=$maxNVQ+1;
          $sql_3 = "SELECT DISTINCT title FROM qualification
          WHERE qualificationID IN (SELECT qualificationID FROM educational_qualification WHERE NVQLevel>=$maxNVQ)
          ORDER BY title ASC";
          $result_3 = mysqli_query($conn,$sql_3);
          echo "</br>";
            echo "<h4>"?><?php echo _s_You_can; ?><?php "</h4>";
          echo '</br>';

          while($row_3 = mysqli_fetch_array($result_3)){   //Got A/L
                $_SESSION["favor"] = $speciality;
                $_SESSION["nvq"] = $maxNVQ;
              //echo $_SESSION["nvq"];
                    echo "<div id='qualification_direct' class='w3-panel w3-theme w3-round'>";
                    echo "<h4><a>".$row_3['title']."</a></h4>";
                  //  echo "<button>".$row_3['title']."</button>";
                    echo "</div>";
                }
    }else if($maxNVQ=5){
          //$maxNVQ=$maxNVQ+1;
          $sql_4 = "SELECT DISTINCT title FROM qualification
          WHERE qualificationID IN (SELECT qualificationID FROM educational_qualification WHERE NVQLevel>$maxNVQ)
          ORDER BY title ASC";
          $result_4 = mysqli_query($conn,$sql_4);
          echo "</br>";
            echo "<h4>"?><?php echo _s_You_can; ?><?php "</h4>";
          echo '</br>';

          while($row_4 = mysqli_fetch_array($result_4)){
                $_SESSION["favor"] = $speciality;
                $_SESSION["nvq"] = $maxNVQ;
              //  echo $_SESSION["nvq"];
              echo "<div id='qualification_direct' class='w3-panel w3-theme w3-round'>";
                    echo "<h4><a>".$row_4['title']."</a></h4>";
                    echo "</div>";
                  //  echo "</br>";
                }
    }else if($maxNVQ=6){
      $sql_5 = "SELECT DISTINCT title FROM qualification
      WHERE qualificationID IN (SELECT qualificationID FROM educational_qualification WHERE NVQLevel>=$maxNVQ)
      ORDER BY title ASC";
      $result_5 = mysqli_query($conn,$sql_5);
      echo "</br>";
      echo "<h4>"?><?php echo _s_You_can; ?><?php "</h4>";
      echo '</br>';

      while($row_5 = mysqli_fetch_array($result_5)){
          $_SESSION["favor"] = $speciality;
            $_SESSION["nvq"] = $maxNVQ;
          //  echo $_SESSION["nvq"];
                echo "<a href='student_personal_development_current_courses.php'>".$row_5['title']."</a>";
                echo "</br>";
            }
    }else {
       ?><?php echo _s_You_have_qualification; ?><?php
    }
    $conn->close();
?>

  </div>
  <div id="preferred_qualifcation_loader" class="w3-panel w3-theme-l5 w3-col s4 w3-border w3-hover-border-blue">
      <h3><?php echo _s_Preferred_Qualifications; ?></h3>
      <div id="load_courses" style="width:420px;">
        <?php
        $conn    = Connect();
          $sql_6 = "SELECT * FROM student_path WHERE userID=$studentID";
          $result_6 = mysqli_query($conn,$sql_6);
          while($row_6 = mysqli_fetch_array($result_6)){?>
          <div class="w3-container">
            <div class="w3-bar w3-theme-l1">
              <button class="w3-bar-item w3-button tablink w3-theme-d5" onclick="openCity(event,'Q1')"><?php
                echo $row_6['qualificationID1'];
              ?></button>
              <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Q2')"><?php
                echo $row_6['qualificationID2'];
              ?></button>
              <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Q3')"><?php
                echo $row_6['qualificationID3'];
              ?></button>
            </div>

            <div id="Q1" class="w3-container w3-border city">
              <h2><?php
                echo $row_6['qualificationID1'];
              ?></h2><p>
              <?php
              $sql_6_1 = "SELECT * FROM course WHERE speciality='".$row_6['qualificationID1']."'";
              $result_6_1 = mysqli_query($conn,$sql_6_1);
              while($row_6_1 = mysqli_fetch_array($result_6_1)){
                echo $row_6_1['courseName'];
                echo "</br>";
              }
               ?>
              </p>
            </div>

            <div id="Q2" class="w3-container w3-border city" style="display:none">
              <h2><?php
                echo $row_6['qualificationID2'];
              ?></h2>
              <p>
                <?php
                          $sql_6_2 = "SELECT * FROM course WHERE speciality='".$row_6['qualificationID2']."'";
                          $result_6_2 = mysqli_query($conn,$sql_6_2);
                          while($row_6_2 = mysqli_fetch_array($result_6_2)){
                            echo $row_6_2['courseName'];
                            echo "</br>";
                          }
                           ?>
                          </p>
            </div>

            <div id="Q3" class="w3-container w3-border city" style="display:none">
              <h2><?php
                echo $row_6['qualificationID3'];
              ?></h2>
              <p>
                <?php
                          $sql_6_3 = "SELECT * FROM course WHERE speciality='".$row_6['qualificationID3']."'";
                          $result_6_3 = mysqli_query($conn,$sql_6_3);
                          while($row_6_3 = mysqli_fetch_array($result_6_3)){
                            echo $row_6_3['courseName'];
                            echo "</br>";
                          }
                           ?>
                          </p>
            </div>
          </div>

          <script>
          function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-theme-d5", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-theme-d5";
          }
          </script>





                <?php }
                $conn->close();
        ?>

      </div>
  </div>
  <div id="soft_skills_loader" class="w3-panel w3-theme-l5 w3-col s4 w3-border w3-hover-border-blue">
    <h3><?php echo _s_Soft_skills_should_develop; ?></h3>
    <?php
    $conn    = Connect();
    $sql_3_1 = "SELECT skillName FROM skills WHERE skillID IN (SELECT skillID FROM student_skill WHERE userID = $studentID AND skillScore < 50)";
    //echo $sql_3_1;
    $result_3_1 = mysqli_query($conn,$sql_3_1);
    while($row_3_1 = mysqli_fetch_array($result_3_1)){
      echo "<div id='qualification_direct' class='w3-panel w3-theme w3-round'>";
      echo "<h4>".$row_3_1['skillName']."</h4>";
      echo "</div>";
    //  echo $row_3_1['skillName'];

    }
    $conn->close();
    ?>
  </div>
</body>
</html>
