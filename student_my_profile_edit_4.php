
<!DOCTYPE html>
<html>

    <head>
      <title>Welcome Student</title>
      <?php
      include 'student_header.php';
      $selectedSkill = '';
      $selectedStudent = '';
      $selectedSkillId = '';
      ?>
              <style>
              a:hover {
              text-decoration: none;
            }
              #formdiv1{
                  margin: auto;
                  padding-left: 20px;

              }
              body{
                  overflow:auto;

              }
              #button1,#button2,#button3{
                  display: inline-block;

              }
              #buttons{
                padding-left: 40px;
              }


             </style>


</head>
</br>
</br>
<body>
  <?php
  include('sidebar.php');
  ?>

<div class="w3-col w3-container" style="width:82.5%;margin-left:233px">
  <div class="w3-card-4" style="width:100%" id="formdiv1">
    <div id="soft_skills_loader" class="w3-panel w3-col s4 w3-border w3-hover-border-blue">
      <h3><?php echo _s_Soft_should_have; ?></h3>
      <div class="ss_list">
      <?php
      $sql_3 = "SELECT DISTINCT skillID,skillName FROM skills";
      $result_3 = mysqli_query($conn,$sql_3);


      while($row_3 = mysqli_fetch_array($result_3)){?>

      <div class="w3-panel w3-theme-l5">
          <table>
        <tr>
          <td width="65%"><h5><b> <?php echo $row_3['skillName']; $selectedSkill = $row_3['skillName'];?></b></td>

          <td width="35%">
            <?php
            $selectedStudent = $studentID;
      //      $selectedSkillId = $row_3['skillID'];
            //echo $selectedSkillId;
             ?>
            <!--<a href="skills_<?php //echo $row_3['skillName'];?>.php?student=<?php //echo $studentID;?>&skill=<?php //echo $row_3['skillID'];?>" onclick="loadQuestions()">-->
            <button class="w3-btn w3-theme-l4" type="button" style="width:120%;" onclick="loadQuestions('<?php echo $row_3['skillName'];?>','<?php echo $row_3['skillID'];?>')">Take quiz <span class="glyphicon glyphicon-chevron-right"></span> </button></h5>
          </a>
          </td>

        </tr>

</table>

      </div><?php
      }
      ?>
      </div>
    </div>
    <div id="soft_skills_loader" class="w3-panel w3-col s8 w3-border w3-hover-border-blue">
      <h3><?php echo _s_Your_Skill_Levels; ?></h3>
      <table class="w3-table w3-striped">
        <thead>
          <tr class="w3-light-grey w3-hover-blue">
          <th><?php echo _s_Skill; ?></th>
          <th><?php echo _s_Current_Score?></th>
        </tr>
        </thead
        <tbody>
      <?php
      $sql_1 = "SELECT DISTINCT skillID,skillScore FROM student_skill WHERE userID=$studentID";
      $result_1 = mysqli_query($conn,$sql_1);
      while($row_1 = mysqli_fetch_array($result_1)){

        $sql_2 = "SELECT skillName FROM skills WHERE skillID='".$row_1['skillID']."'";
        $result_2 = mysqli_query($conn,$sql_2);?>


        <?php
        while($row_2 = mysqli_fetch_array($result_2)){
          if($row_1['skillScore']>50){
            echo "<tr class='w3-hover-green'>";
            echo "<td>".$row_2['skillName']."</td>";
            echo "<td>".$row_1['skillScore']."%</td>";
            echo "</tr>";
          }else {
            echo "<tr class='w3-hover-red'>";
            echo "<td>".$row_2['skillName']."</td>";
            echo "<td>".$row_1['skillScore']."%</td>";
            echo "</tr>";
          }

        }?>

      </tbody>
      <?php

      }
       ?>
    </div>

  </div>
</div>
    </body>
</html>

<script>
function loadQuestions(a,b) {
    var text = a;
    var id = b;
    window.open("http://localhost/FinalCGSU/skills_"+text+".php?student=<?php echo $selectedStudent;?>&skill="+id, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=600,height=500");
}
</script>
