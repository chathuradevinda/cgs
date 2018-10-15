<?php
include 'operations.php';
$data = new Operations;
 $success_message = '';
 if(isset($_POST["submit"]))
 {
      $insert_data = array(
        'title' => mysqli_real_escape_string($data->conn,$_POST['qualification_title']),
        'qualificationCategory' => mysqli_real_escape_string($data->conn,$_POST['qualification_type']),
        'description' => mysqli_real_escape_string($data->conn,$_POST['qualification_description']),
        'priorQualification' => mysqli_real_escape_string($data->conn,$_POST['prior_qualification']),
        'speciality' => mysqli_real_escape_string($data->conn,$_POST['speciality'])
      );
      if($data->insert('qualification',$insert_data)){
          $last_id = $data->conn->insert_id;

          if($_POST['qualification_type']=='Educational'){
              //$last_id = conn->insert_id;
              $insert_data = array(
                  'qualificationID' => mysqli_real_escape_string($data->conn,$last_id),
                  'NVQLevel' => mysqli_real_escape_string($data->conn,$_POST['nvq_level']),
                  'prefix' => mysqli_real_escape_string($data->conn,$_POST['prefix'])
              );
              if($data->insert('educational_qualification',$insert_data)){
                  $success_message = 'Details inserted!';
              }
          }else{
              $insert_data = array(
                  'qualificationID' => mysqli_real_escape_string($data->conn,$last_id),
                  'postfix' => mysqli_real_escape_string($data->conn,$_POST['postfix'])
              );
              if($data->insert('professional_qualification',$insert_data)){
                  $success_message = 'Details inserted!';
              }
          }
      }
 }

if(isset($_POST["edit"])){
     $update_data_1 = array(
       'title' => mysqli_real_escape_string($data->conn,$_POST['qualification_title']),
       'qualificationCategory' => mysqli_real_escape_string($data->conn,$_POST['qualification_type']),
       'description' => mysqli_real_escape_string($data->conn,$_POST['qualification_description']),
       'priorQualification' => mysqli_real_escape_string($data->conn,$_POST['prior_qualification']),
       'speciality' => mysqli_real_escape_string($data->conn,$_POST['speciality'])
     );

     $update_data_2 = array(
       'qualificationID' => mysqli_real_escape_string($data->conn,$last_id),
       'NVQLevel' => mysqli_real_escape_string($data->conn,$_POST['nvq_level']),
       'prefix' => mysqli_real_escape_string($data->conn,$_POST['prefix'])
     );

     $update_data_3 = array(
       'qualificationID' => mysqli_real_escape_string($data->conn,$last_id),
       'postfix' => mysqli_real_escape_string($data->conn,$_POST['postfix'])
     );

     $where_condition = array(
        'qualificationID' => $_POST['qualificationID']
    );

     if($data->update("qualification",$update_data_1,$where_condition)){
       if(($data->update("educational_qualification",$update_data_2,$where_condition))||($data->update("professional_qualification",$update_data_3,$where_condition))){
         header("location:admin_add_qualification.php?updated=1");
       }


     }

}

if(isset($_GET["updated"])){
    $success_message = "Details Updated";
}
?>

<html>
    <head>


<?php
include "admin_header.php";
 ?>

    <body>

 <div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 40%;" id="left_section">
     <form method="post" id="a_add_qualification">
        <?php
        if(isset($_GET["edit"])){
            if(isset($_GET["qualificationID"])){
                $where= array(
                    'qualificationID' => $_GET["qualificationID"]
                );
                $single_data = $data -> select_where("qualification",$where);
                foreach ($single_data as $post) {?>
                     <label>Skill Name</label>
                     <input type="text" name="skillName" value="<?php echo $post["skillName"]; ?>" class="form-control">
                     </br>
                    <label>Skill Description</label>
                     <input type="text" name="description" value="<?php echo $post["description"]; ?>" class="form-control">
                     </br>
                     <input type="hidden" name="skillID" value="<?php echo $post["skillID"];  ?>">
                     <input type="submit" name="edit" value="Edit">
         <?php
                }
            }
        }else{

        ?>
        <br>
        <div class="form-group" id="a_add_qualification">
          <label>Qualification Title:</label>
          <div>
            <input type="text" class="w3-input" name="qualification_title" placeholder="Enter Qualification Title">
          </div>
        </div>

        <div class="form-group">
            <label>Qualification Type:</label>
            <div>
              <select class="w3-select" id="qualification_type" name="qualification_type">
         <option value="" disabled selected>-Select Qualification Type-</option>
         <option value="Educational">Educational Qualification</option>
         <option value="Professional">Professional Qualification</option>

        </select>
         </div>
          </div>

          <div class="form-group">
              <label>Description:</label>
              <div>
                <input type="text" class="w3-input" name="qualification_description" placeholder="Enter Brief Description">
              </div>
            </div>
            <div class="form-group">
              <label>Prior Qualification:</label>
              <div>
                <select class="w3-select" name="prior_qualification">
           <option value="" disabled selected>-Select Prior Qualification-</option>
           <option value="G.C.E. Ordinary Level">G.C.E.Ordinary Level</option>
           <option value="G.C.E. Advanced Level">G.C.E.Advanced Level</option>

          </select>
              </div>
            </div>

            <div id="educational" class="education" style="display:none">
                    <div class="form-group">
                            <label>Speciality:</label>
                            <div>
                                <input type="text" class="w3-input" name="speciality" placeholder="Enter Speciality">
                            </div>
                        </div>

                <div class="form-group">
                    <label>NVQ Level:</label>
                    <div>
                        <input type="text" class="w3-input" name="nvq_level" placeholder="Enter NVQ Level">
                    </div>
                </div>

                <div class="form-group">
                    <label>Prefix:</label>
                    <div>
                        <input type="text" class="w3-input" name="prefix" placeholder="Enter Prefix">
                    </div>
                </div>
            </div>

            <div id="professional" class="profession" style="display:none">
                <div class="form-group">
                    <label>Postfix:</label>
                    <div>
                        <input type="text" class="w3-input" name="postfix" placeholder="Enter Postfix">
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $("#qualification_type").change(function () {
                    if ($(this).val() == "Educational") {
                        $("#educational").show();
                        $("#professional").hide();
                    }
                    else if ($(this).val() == "Professional") {
                        $("#professional").show();
                        $("#educational").hide();
                    } else {
                        $("#professional").hide();
                        $("#educational").hide();
                    }
                });
            </script>


            <div class="form-group">
            <div id="button1">
            <button type="reset" value="Reset" name="reset" class="btn1">Reset</button>
            </div>
            <div id="button2">
                <button type="submit" value="Insert" name="submit" class="btn2">Insert</button>
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
</div>

<div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 60%;height:100%;" id="right_section">
  <table class="w3-table-all w3-hoverable">
              <thead>
                  <tr>
                      <th>Qualification Name</th>
                      <th>Description</th>
                      <th>Edit</th>

                  </tr>
              </thead>
              <tbody>
                      <?php
                          $post_data = $data -> select('qualification');
                          //print_r($post_data);
                          foreach($post_data as $post){
                              ?>
                              <tr>
                                  <td><?php
                                  echo $post["title"];
                                  ?></td>
                                  <td><?php
                                  echo $post["qualificationCategory"];
                                  ?></td>
                                  <td><a href="admin_add_skill.php?edit=1&skillID=<?php echo $post["qualificationID"]; ?>">Edit</a></td>


                              </tr>
                          <?php
                          }
                          ?>

              </tbody>
          </table>
</div>


    </body>
</html>
