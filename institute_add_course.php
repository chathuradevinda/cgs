<html>
    <head>
        <title>
            Add Event
        </title>
<?php
include "institute_header.php";
include 'operations.php';
$data = new Operations;
 $success_message = '';

 if(isset($_POST["submit"]))
 {
      $insert_data_1 = array(
        'courseName' => mysqli_real_escape_string($data->conn, $_POST['course_name']),
        'courseType' => mysqli_real_escape_string($data->conn, $_POST['course_type']),
        'speciality' => mysqli_real_escape_string($data->conn, $_POST['speciality']),
        'deliveryType' => mysqli_real_escape_string($data->conn, $_POST['delivery_type']),
        'fee' => mysqli_real_escape_string($data->conn, $_POST['fee']),
        'duration' => mysqli_real_escape_string($data->conn, $_POST['duration']),
        'targetAudience' => mysqli_real_escape_string($data->conn, $_POST['target_audience']),
        'qualificationCategory' => mysqli_real_escape_string($data->conn, $_POST['qualification_category']),
        'prerequisite' => mysqli_real_escape_string($data->conn, $_POST['prerequisite']),
        'description' => mysqli_real_escape_string($data->conn, $_POST['description']),
        'courseContent' => mysqli_real_escape_string($data->conn, $_POST['course_content']),
        'userID' => $institute_userID,
      );


      if($data->insert('course', $insert_data_1)){
               $success_message = "Inserted successfully!";
            }else{
              $success_message = "Something went wrong! Please try again later!";
            }

 }

if(isset($_POST["edit"])){
     $update_data_1 = array(
       'courseName' => mysqli_real_escape_string($data->conn, $_POST['course_name']),
       'courseType' => mysqli_real_escape_string($data->conn, $_POST['course_type']),
       'speciality' => mysqli_real_escape_string($data->conn, $_POST['speciality']),
       'deliveryType' => mysqli_real_escape_string($data->conn, $_POST['delivery_type']),
       'fee' => mysqli_real_escape_string($data->conn, $_POST['fee']),
       'duration' => mysqli_real_escape_string($data->conn, $_POST['duration']),
       'targetAudience' => mysqli_real_escape_string($data->conn, $_POST['target_audience']),
       'qualificationCategory' => mysqli_real_escape_string($data->conn, $_POST['qualification_category']),
       'prerequisite' => mysqli_real_escape_string($data->conn, $_POST['prerequisite']),
       'description' => mysqli_real_escape_string($data->conn, $_POST['description']),
       'courseContent' => mysqli_real_escape_string($data->conn, $_POST['course_content']),
       'userID' => $institute_userID,
);

     $where_condition = array(
        'courseID' => $_POST['courseID']
    );

     if($data->update("course",$update_data,$where_condition)){
        header("location:institute_add_course.php?updated=1");
     }
}

if(isset($_GET["updated"])){
    $success_message = "Details Updated";
}
?>



    <body>
      <br>

 <div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 60%;" id="left_section">
     <form method="post">
        <?php
        if(isset($_GET["edit"])){
            if(isset($_GET["courseID"])){
                $where= array(
                    'courseID' => $_GET["courseID"]
                );
                $single_data = $data -> select_where("course",$where);
                foreach ($single_data as $post) {?>
                  <label>Course Name</label>
                  <input type="text" name="course_name" value="<?php echo $post["courseName"]; ?>" class="form-control">
                  </br>
                  <label>Course Type</label>
                  <input type="text" name="course_type" value="<?php echo $post["courseType"]; ?>" class="form-control">
                  </br>
                  <label>Speciality</label>
                  <input type="text" name="speciality" value="<?php echo $post["speciality"]; ?>" class="form-control">
                  </br>
                  <label>Delivery Type</label>
                  <input type="text" name="delivery_type" value="<?php echo $post["deliveryType"]; ?>" class="form-control">
                  </br>
                  <label>Fee</label>
                  <input type="text" name="fee" value="<?php echo $post["fee"]; ?>" class="form-control">
                  </br>
                  <label>Duration</label>
                  <input type="text" name="duration" value="<?php echo $post["duration"]; ?>" class="form-control">
                  </br>
                  <label>Target Audience</label>
                  <input type="text" name="target_audience" value="<?php echo $post["targetAudience"]; ?>" class="form-control">
                  </br>
                  <label>Qualification Category</label>
                  <input type="text" name="qualification_category" value="<?php echo $post["qualificationCategory"]; ?>" class="form-control">
                  </br>
                  <label>Prerequisite</label>
                  <input type="text" name="prerequisite" value="<?php echo $post["prerequisite"]; ?>" class="form-control">
                  </br>
                  <label>Description</label>
                  <input type="text" name="description" value="<?php echo $post["description"]; ?>" class="form-control">
                  </br>
                  <label>Course Content</label>
                  <input type="text" name="course_content" value="<?php echo $post["courseContent"]; ?>" class="form-control">
                  </br>

<!--
                <label>Required skills</label>
                <input type="text" name="com_id" value="<?php// echo $post["userID"]; ?>" class="form-control">
              </br>-->
                     <input type="hidden" name="courseID" value="<?php echo $post["courseID"];  ?>">
                     <input type="submit" name="edit" value="Edit">
         <?php
                }
            }
        }else{


        ?>
        <br>
<div class="inputform">
<div class="form-group" id="i_add_course">
  <label>Course Name</label>
  <input type="text" class="w3-input" name="course_name" placeholder="Enter Course Name" >
</div>

<div class="" id="i_add_course">
  <label>Course Type</label>
  <select class="w3-select"  name="course_type">
          <option value=""disabled selected>-Select Course Type-</option>
              <?php
              $conn_1 = mysqli_connect('localhost','root','','cgsu');
              //$conn1    = Connect();
              $sql_1 = "SELECT DISTINCT title FROM qualification";
              $result_1 = mysqli_query($conn_1,$sql_1);

              while($row_1 = mysqli_fetch_array($result_1)){
              echo "<option value='".$row_1['title']."'>".$row_1['title']."</option>";
              }
              ?>
      </select>
</div>

  <div class="" id="i_add_course">
    <label>Speciality</label>
    <select class="w3-select"  name="speciality">
            <option value=""disabled selected>-Select Speciality-</option>
                <?php
                $conn_3 = mysqli_connect('localhost','root','','cgsu');
                //$conn1    = Connect();
                $sql_3 = "SELECT * FROM qualification";
                $result_3 = mysqli_query($conn_3,$sql_3);

                while($row_3 = mysqli_fetch_array($result_3)){
                echo "<option value='".$row_3['speciality']."'>".$row_3['speciality']."</option>";
                }
                ?>
        </select>
  </div>
  </br>
  <label>Delivery Type</label>
  <select class="w3-select"  name="delivery_type">
      <option value=""disabled selected>-Select Delivery Type-</option>
      <option value="Full Time">Full Time</option>
      <option value="Part Time">Part Time</option>
  </select>
  </br>
  <label>Fee</label>
  <input type="text" class="w3-input" name="fee" placeholder="Enter Fee Amount in LKR">
  </br>
  <label>Duration</label>
  <select class="w3-select"  name="duration">
      <option value=""disabled selected>-Select Course Duration-</option>
      <option value="1 Year">1 Year</option>
      <option value="2 Year">2 Year</option>
      <option value="3 Year">3 Year</option>
      <option value="4 Year">4 Year</option>
      <option value="5 Year">5 Year</option>
      <option value="6 Year">6 Year</option>
  </select>
  </br>
  <label>Target Audience</label>
  <select class="w3-select"  name="target_audience">
      <option value=""disabled selected>-Select Intended Audience-</option>
      <option value="After O/L">After O/L</option>
      <option value="After A/L">After A/L</option>
      <option value="Diploma Holders">Diploma Holders</option>
      <option value="Higher Diploma Holders">Higher Diploma Holders</option>
      <option value="Undergraduate">Undergraduate</option>
  </select>
  </br>
  <label>Qualification Category</label>
  <select class="w3-select"  name="qualification_category">
      <option value=""disabled selected>-Select Qualification Category-</option>
      <option value="Educational">Educational</option>
      <option value="Professional">Professional</option>
  </select>
  </br>
  <label>Prerequisite</label>
  <select class="w3-select"  name="prerequisite">
          <option value=""disabled selected>-Select Prerequisite-</option>
              <?php
              //require 'connection.php';
              $conn    = mysqli_connect('localhost','root','','cgsu');
              $sql_2 = "SELECT * FROM qualification";
              $result_2 = mysqli_query($conn,$sql_2);

              while($row_2 = mysqli_fetch_array($result_2)){
              echo "<option value='".$row_2['qualificationID']."'>".$row_2['title']. " in " .$row_2['speciality']."</option>";
              }
              ?>
      </select>
  </br>
  <label>Description</label>
  <input type="text" class="w3-input" name="description" placeholder="Enter Description">
  </br>
  <label>Course Content</label>
   <input type="text" class="w3-input" name="course_content" placeholder="Enter Course Content">
   </br>
   <input type="submit" name="submit" value="Submit" class="w3-button"/>
</div>
        <?php
            }
        ?>
                             <span class="text-success">
                     <?php
                     if(isset($success_message))
                     {
                          echo $success_message;
                     }
                     ?>
                     </span>
     </form>
 </div>

<div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 40%;height:100%;" id="right_section">
  <h4><?php echo _s_Our_Courses; ?></h4>
  <table class="w3-table-all w3-hoverable">
              <thead>
                  <tr>
                      <th><?php echo _s_Course_Name; ?></th>
                      <th><?php echo _s_Duration ?></th>
                      <th><?php echo _s_Target_Audience ?></th>
                      <th><?php echo _s_Edit; ?></th>
                  </tr>
              </thead>
              <tbody>
                      <?php
                          $post_data = $data -> select('course');
                          //print_r($post_data);
                          foreach($post_data as $post){
                              ?>
                              <tr>
                                  <td><?php
                                  echo $post["courseName"];
                                  ?></td>
                                  <td><?php
                                  echo $post["duration"];
                                  ?></td>
                                  <td><?php
                                  echo $post["targetAudience"];
                                  ?></td>
                                  <td><a href="institute_add_course.php?edit=1&courseID=<?php echo $post["courseID"]; ?>"><?php echo _s_Edit; ?></a></td>


                              </tr>
                          <?php
                          }
                          ?>

              </tbody>
          </table>
</div>
    </body>
</html>
