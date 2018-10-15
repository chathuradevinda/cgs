

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

      <form class="" action="skills_communication_send.php?student=<?php echo $student;?>&skill=<?php echo $skill;?>&qCount=10" method="post">
      </br></br></br>
        <div class="form-group">
            <label>1. I identify some basic objectives before planning a presentation.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q1" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q1" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q1" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q1" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q1" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>2. I analyse the values, needs and limitations of my audience.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q2" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q2" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q2" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q2" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q2" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>3. I write down some main ideas first, in order to build a presentation around them.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q3" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q3" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q3" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q3" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q3" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>4. I incorporate both a preview and review of the main ideas.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q4" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q4" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q4" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q4" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q4" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>5. I develop an introduction that will catch the attention of my audience and still provide the necessary background information.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q5" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q5" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q5" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q5" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q5" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>6. My conclusion refers back to the introduction and, if appropriate, contains a call-to-action statement.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q6" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q6" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q6" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q6" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q6" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>7.The visual aids I use are carefully prepared simple, easy to read and make an impact.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q7" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q7" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q7" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q7" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q7" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>8.The number of visual aids will enhance, not detract, from my presentation.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q8" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q8" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q8" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q8" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q8" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>9.If my presentation is persuasive, I support it with logical arguments.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q9" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q9" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q9" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q9" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q9" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>10.I use anxiety to fuel the enthusiasm of my presentation, not hold me back.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q10" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q10" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q10" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q10" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q10" value="5">
                <label>5</label>
            </div>
        </div>

      <!--  <div class="form-group">
            <label>11.I ensure the benefits suggested to my audience are clear and compelling.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q11" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q11" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q11" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q11" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q11" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>12.I communicate ideas enthusiastically.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q12" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q12" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q12" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q12" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q12" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>13.I rehearse so there is a minimum use of notes and maximum attention paid to my audience.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q13" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q13" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q13" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q13" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q13" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>14.My notes contain only ‘key words’ so I avoid reading from a manuscript.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q14" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q14" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q14" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q14" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q14" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>15.My presentations are rehearsed standing up and using visual aids.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q15" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q15" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q15" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q15" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q15" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>16.I prepare answers to anticipated questions and practise replying to them.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q16" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q16" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q16" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q16" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q16" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>17.I arrange seating (if appropriate) and check audio-visual equipment in advance.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q17" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q17" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q17" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q17" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q17" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>18.I maintain good eye contact with the audience at all times.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q18" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q18" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q18" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q18" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q18" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>19.My gestures are natural and not restricted by anxiety.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q19" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q19" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q19" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q19" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q19" value="5">
                <label>5</label>
            </div>
        </div>

        <div class="form-group">
            <label>20.My voice is strong and clear, and not monotonous.</label>
            <div id="answers" style="padding-left:40px;">
                <input class="w3-radio" type="radio" name="q20" value="1">
                <label>1</label>
                </br>
                <input class="w3-radio" type="radio" name="q20" value="2">
                <label>2</label>
                </br>
                <input class="w3-radio" type="radio" name="q20" value="3">
                <label>3</label>
                </br>
                <input class="w3-radio" type="radio" name="q20" value="4">
                <label>4</label>
                </br>
                <input class="w3-radio" type="radio" name="q20" value="5">
                <label>5</label>
            </div>-->
        </div>

        <div class="form-group">
              <div id="button1">
                    <input class="w3-input" type="reset" name="Reset" style="color:azure; background-color: #012641;">
              </div>
              <div id="button2">
                    <input class="w3-input" type="submit" name="Submit Answers" style="color:azure; background-color: #012641;">
              </div>
        </div>

      </form>
      </div>
    </div>
  </body>
</html>
