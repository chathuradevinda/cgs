<!DOCTYPE html>
<html>
<title>Welcome Institute</title>
<head>

<?php
  include 'institute_header.php';
 ?>
 </br>
<body id="myPage">



</br></br>
<div class="w3-card-4" style="width:65%" id="formdiv">

<div class="panel-heading"><h2><b><?php echo _s_Edit_course_details ?></b></h2></div>
<div class="panel-body">

</br>

<!-- Change course details -->
<form class="w3-container" action="institute_edit_course.php" method="POST">
      <table>
        <thead>
          <th>
            <select name = "cName" class="w3-input">
				<option value = "pick"><?php echo _s_Select_Course; ?></option>
					<?php
					$con = mysqli_connect('localhost','root','','cgsu');
					$sql = mysqli_query($con, "SELECT courseName FROM course");
					$row = mysqli_num_rows($sql);
					while($row = mysqli_fetch_array($sql)){
					echo"<option value = '".$row['courseName'] ."'>".$row['courseName']."</option>";
					}
					?>
			</select>
          </th>
          <th>
              <input type='submit' name='submit2' Value=<?php echo _s_Submit; ?> class="w3-input" style="color:azure; background-color: #012641; width:100px;"/>
          </th>
        </thead>
      </table>
</form>


	<?php
if(isset($_POST['submit2'])){
  $connection    = mysqli_connect('localhost','root','','cgsu');
  $cName = $_POST['cName'];
  $query2 ="SELECT * FROM course WHERE courseName='$cName' ";


        $result_set2 = mysqli_query($connection,$query2) or die (mysql_error ());

		if($result_set2){
                          $record2 = mysqli_fetch_array($result_set2);
	?>


	</br>
	</br>



       <!--update course-->
    <form class="w3-container" action="institute_edit_course.php" method="POST" id="validateForm" onSubmit="return confirm('Do you really want to update the form?');">

        <div class="form-group">
            <label class="control-label col-sm-2" for="course_name">Course Name:</label>
            <div>
                <input type="text" class="w3-input" name="course_name" placeholder="Enter Course Name" value="<?php echo $record2['courseName']; ?>">
            </div>
        </div>

</br>

        <div class="form-group">
            <label class="control-label col-sm-2" for="course_type">Course Type:</label>
            <div>
            <select class="w3-input" id="course_type" name="course_type">
                    <option>-Select Course Type-</option>

                        <?php
                        $conn_1 = mysqli_connect('localhost','root','','cgsu');
                        //$conn1    = Connect();
                        $sql_1 = "SELECT DISTINCT title FROM qualification";
                        $result_1 = mysqli_query($conn,$sql_1);

                        while($row_1 = mysqli_fetch_array($result_1)){
                        echo "<option value='".$row_1['title']."'>".$row_1['title']."</option>";
                        }
                        ?>

					 <option value="<?php echo $record2['courseType']; ?>" selected="selected"><?php echo $record2['courseType']; ?></option>
                </select>
            </div>
        </div>
</br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="speciality">Speciality:</label>
            <div>
            <select class="w3-input" id="speciality" name="speciality">
                    <option>-Select Speciality-</option>

                        <?php
                        $conn_3 = mysqli_connect('localhost','root','','cgsu');
                        //$conn1    = Connect();
                        $sql_3 = "SELECT * FROM qualification";
                        $result_3 = mysqli_query($conn_3,$sql_3);

                        while($row_3 = mysqli_fetch_array($result_3)){
                        echo "<option value='".$row_3['speciality']."'>".$row_3['speciality']."</option>";
                        }
                        ?>

					 <option value="<?php echo $record2['speciality']; ?>" selected="selected"><?php echo $record2['speciality']; ?></option>
                </select>
            </div>
        </div>
</br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="delivery_type">Delivery Type:</label>
            <div>
                <select class="w3-input" id="delivery_type" name="delivery_type">
                    <option>-Select Delivery Type-</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
					 <option value="<?php echo $record2['deliveryType']; ?>" selected="selected"><?php echo $record2['deliveryType']; ?></option>
                </select>
            </div>
        </div>

</br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="fee">Fee:</label>
            <div>
                <input type="text" class="w3-input" name="fee" placeholder="Enter Fee Amount in LKR" value="<?php echo $record2['fee']; ?>">
            </div>
        </div>
</br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="duration">Duration:</label>
            <div>
                <select class="w3-input" id="duration" name="duration">
                    <option>-Select Course Duration-</option>
                    <option value="1 Year">1 Year</option>
                    <option value="2 Year">2 Year</option>
                    <option value="3 Year">3 Year</option>
                    <option value="4 Year">4 Year</option>
                    <option value="5 Year">5 Year</option>
                    <option value="6 Year">6 Year</option>
					 <option value="<?php echo $record2['duration']; ?>" selected="selected"><?php echo $record2['duration']; ?></option>


                </select>
            </div>
        </div>
</br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="target_audience">Target Audience:</label>
            <div>
                <select class="w3-input" id="target_audience" name="target_audience">
                    <option>-Select Intended Audience-</option>
                    <option value="After O/L">After O/L</option>
                    <option value="After A/L">After A/L</option>
                    <option value="Diploma Holders">Diploma Holders</option>
                    <option value="Higher Diploma Holders">Higher Diploma Holders</option>
                    <option value="Undergraduate">Undergraduate</option>
					 <option value="<?php echo $record2['targetAudience']; ?>" selected="selected"><?php echo $record2['targetAudience']; ?></option>

                </select>
            </div>
        </div>
</br>

        <div class="form-group">
            <label class="control-label col-sm-2" for="qualification_category">Qualification Category:</label>
            <div>
                <select class="w3-input" id="qualification_category" name="qualification_category">
                    <option>-Select Qualification Category-</option>
                    <option value="Educational">Educational</option>
                    <option value="Professional">Professional</option>
					 <option value="<?php echo $record2['qualificationCategory']; ?>" selected="selected"><?php echo $record2['qualificationCategory']; ?></option>

                </select>
            </div>
        </div>
</br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="prerequisite">Prerequisite:</label>
            <div>
            <select class="w3-input" id="prerequisite" name="prerequisite" >
                    <option>-Select Prerequisite-</option>
                        <?php
                        //require 'connection.php';
                        $conn    = mysqli_connect('localhost','root','','cgsu');
                        $sql_2 = "SELECT * FROM qualification";
                        $result_2 = mysqli_query($conn,$sql_2);

                        while($row_2 = mysqli_fetch_array($result_2)){
                        echo "<option value='".$row_2['qualificationID']."'>".$row_2['title']. " in " .$row_2['speciality']."</option>";
                        }
                        ?>
					 <option value="<?php echo $record2['prerequisite']; ?>" selected="selected"><?php echo $record2['prerequisite']; ?></option>

                </select>
            </div>
        </div>
    </br>

        <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description:</label>
            <div>
                <input type="text" class="w3-input" name="description" placeholder="Enter Description" value="<?php echo $record2['description']; ?>">
            </div>
        </div>

</br>
        <div class="form-group">
            <label class="control-label col-sm-2" for="course_content">Course Content:</label>
            <div>
                <input type="text" class="w3-input" name="course_content" placeholder="Enter Course Content" value="<?php echo $record2['courseContent']; ?>">
            </div>
        </div>
</br>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input name="submit1" type="submit" class="w3-input" style="color:azure; background-color: #012641; width:100px;" value=<?php echo _s_Update; ?>>
            </div>
        </div>
    </form>
	<?php
		}
		} ?>
</div>
</div>





<?php
      $connection11    = mysqli_connect('localhost','root','','cgsu');

        if(isset($_POST['submit1'])){


          $coursename = $_POST['course_name'];
          $coursetype = $_POST['course_type'];
          $speciality = $_POST['speciality'];
          $deliverytype=$_POST['delivery_type'];
          $fee = $_POST['fee'];
          $duration=$_POST['duration'];
          $targetaudience = $_POST['target_audience'];
          $qualificationcategory=$_POST['qualification_category'];
          $prerequisite=$_POST['prerequisite'];
          $description=$_POST['description'];
          $coursecontent= $_POST['course_content'];

		  $query1 = "UPDATE course SET courseName='".$coursename."', courseType='".$coursetype."',  speciality='".$speciality."', deliveryType='".$deliverytype."', fee='".$fee."', duration='".$duration."', targetAudience='".$targetaudience."',qualificationCategory='".$qualificationcategory."',prerequisite='".$prerequisite."',description='".$description."',courseContent ='".$coursecontent."' WHERE courseName='".$coursename."'";


          $result_set1 = mysqli_query($connection11, $query1);

          if($result_set1){
            echo "<script type='text/javascript'>alert('Information Update Complete!')</script>";
            }
            else{
              echo $connection->error;
            }
        }?>


</body>
</html>
