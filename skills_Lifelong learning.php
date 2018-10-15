

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    //      include 'student_header.php';
    //session_start();
    $skill = $_GET['skill'];
    $student = $_GET['student'];

     ?>
    <meta charset="utf-8">
    <title>Skill Evaluation</title>

            <style>
            a:hover {
            text-decoration: none;
          }
            #formdiv{
                margin: auto;
            }
            body{
                overflow:auto;

            }
            #button1,#button2{
                display: inline-block;
            }
            th{
                text-align:center;
            }
            #searching_results{

            }
           </style>


  </head>
  <body>



    <div id="question_set">
      <div class="w3-card-4" style="width:65%" id="formdiv">

      <form class="" action="skills_communication_send.php?student=<?php echo $student;?>&skill=<?php echo $skill;?>&qCount=5" method="post">
      </br></br></br>




        <div class="form-group">
              <div id="button1">
                    <input class="w3-input" type="reset" name="Reset" style="color:azure; background-color: #012641;">
              </div>
              <div id="button2">
                    <input class="w3-input" type="submit" name="Submit Answers" style="color:azure; background-color: #012641;">
              </div>
        </div>
      </div>

      </div>
      </form>
      </div>
    </div>
  </body>
</html>
