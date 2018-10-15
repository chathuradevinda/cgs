

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
      <div class="w3-card-4" style="width:100%" id="formdiv">

      <form class="" action="skills_communication_send.php?student=<?php echo $student;?>&skill=<?php echo $skill;?>&qCount=10" method="post">
      </br></br></br>
      <div class="form-group">
          <label>1.As a leader, do you gain most satisfaction from?</label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q1" value="1">
              <label>a. Directing people and achieving results?</label>
              </br>
              <input c1lass="w3-radio" type="radio" name="q1" value="3">
              <label>b. Creating an environment in which your team could succeed?</label>
              </br>
              <input class="w3-radio" type="radio" name="q1" value="5">
              <label>c. Ensuring there is no conflict and everyone is happy?</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>2.Someone tells you, "I have not been able to concentrate on my work recently". Would you say </label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q2" value="1">
              <label>a. I sometimes have the same problem myself</label>
              </br>
              <input class="w3-radio" type="radio" name="q2" value="3">
              <label>b. You must have other things on your mind. What are they?</label>
              </br>
              <input class="w3-radio" type="radio" name="q2" value="5">
              <label>c. Pull your socks up!</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>3.When initiating action, would you ?</label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q3" value="1">
              <label>a.Share the problem and seek contributions from others before you make a decision?</label>
              </br>
              <input class="w3-radio" type="radio" name="q3" value="3">
              <label>b.Share the problem and let others share in making the decision?</label>
              </br>
              <input class="w3-radio" type="radio" name="q3" value="5">
              <label>c.Decide on the course of action and tell the team how it affects them?</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>4.You have an important task to complete. Would you -</label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q4" value="1">
              <label>a.Delegate the task to someone else, but monitor progress to make sure it is done as you would like?</label>
              </br>
              <input class="w3-radio" type="radio" name="q4" value="3">
              <label>b.Give responsibility to someone else even though it may not be done as you would like?</label>
              </br>
              <input class="w3-radio" type="radio" name="q4" value="5">
              <label>c.Do it yourself?</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>5.You have to make a speedy decision but have incomplete information. Would you </label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q5" value="1">
              <label>a.Seek clarification or more information?</label>
              </br>
              <input class="w3-radio" type="radio" name="q5" value="3">
              <label>b.Delegate the decision upwards to your boss?</label>
              </br>
              <input class="w3-radio" type="radio" name="q5" value="5">
              <label>c.Call a meeting?</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>6.What most attracts you to a leadership role?</label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q6" value="1">
              <label>a. The opportunity to achieve results with and through others?</label>
              </br>
              <input class="w3-radio" type="radio" name="q6" value="3">
              <label>b.The chance to direct people and events?</label>
              </br>
              <input class="w3-radio" type="radio" name="q6" value="5">
              <label>c.The opportunity to develop people and train others?</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>7.When told about accidents, losses or failures, would you -</label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q7" value="1">
              <label>a.Start immediate enquiries to establish the cause and allocate responsibility or blame?</label>
              </br>
              <input class="w3-radio" type="radio" name="q7" value="3">
              <label>b.Accept explanations from others?</label>
              </br>
              <input class="w3-radio" type="radio" name="q7" value="5">
              <label>c.Examine what went wrong, including your part in it, and look for ways to prevent a recurrence?</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>8.When confronted by conflict between team members, would you -</label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q8" value="1">
              <label>a.Leave them to sort out their differences in an adult way?</label>
              </br>
              <input class="w3-radio" type="radio" name="q8" value="3">
              <label>b.Encourage them to discuss their differences and find an acceptable solution?</label>
              </br>
              <input class="w3-radio" type="radio" name="q8" value="5">
              <label>c.Remind them of their responsibility to their jobs and the company/organization?</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>9.At meetings, do you tend to –.</label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q9" value="1">
              <label>a.Remain neutral until all views have been expressed, then adopt a consensus view?</label>
              </br>
              <input class="w3-radio" type="radio" name="q9" value="3">
              <label>b.Keep your own counsel but look for the best solution?</label>
              </br>
              <input class="w3-radio" type="radio" name="q9" value="5">
              <label>c.Use the opportunity to get agreement for your plans?</label>
              </br>

          </div>
      </div>
<br>
      <div class="form-group">
          <label>10.Do you like to -</label>
          <div id="answers" style="padding-left:40px;">
              <input class="w3-radio" type="radio" name="q10" value="1">
              <label>a. Maintain output without upsets?</label>
              </br>
              <input class="w3-radio" type="radio" name="q10" value="3">
              <label>b. Maintain pressure to improve results?</label>
              </br>
              <input class="w3-radio" type="radio" name="q10" value="5">
              <label>c. Motivate people to improve results through encouragement and support?</label>
              </br>

          </div>
      </div>

<br><br>

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
