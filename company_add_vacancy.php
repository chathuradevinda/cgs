<html>
    <head>
        <title>
            Add Vacancy
        </title>
<?php
include "company_header.php";
include 'operations.php';
$data = new Operations;
 $success_message = '';

 if(isset($_POST["submit"]))
 {
      $insert_data = array(
        'title' => mysqli_real_escape_string($data->conn, $_POST['title']),
        'description' => mysqli_real_escape_string($data->conn, $_POST['description']),
        'minimum_qualification' => mysqli_real_escape_string($data->conn, $_POST['minimum_qualification']),
        'salary' => mysqli_real_escape_string($data->conn, $_POST['salary']),
        'cv_mail' => mysqli_real_escape_string($data->conn, $_POST['cv_mail']),
        'skills_required' => mysqli_real_escape_string($data->conn, $_POST['skills_required']),
        'userID' => $company_userID
      );
      if($data->insert('vacancy', $insert_data))
      {
           $success_message = 'Post Inserted';
      }
 }

if(isset($_POST["edit"])){
     $update_data = array(
       'title' => mysqli_real_escape_string($data->conn, $_POST['title']),
       'description' => mysqli_real_escape_string($data->conn, $_POST['description']),
       'minimum_qualification' => mysqli_real_escape_string($data->conn, $_POST['minimum_qualification']),
       'salary' => mysqli_real_escape_string($data->conn, $_POST['salary']),
       'cv_mail' => mysqli_real_escape_string($data->conn, $_POST['cv_mail']),
       'skills_required' => mysqli_real_escape_string($data->conn, $_POST['skills_required']),
       'userID' => $company_userID
);
     $where_condition = array(
        'vacancyID' => $_POST['vacancyID']
    );

     if($data->update("vacancy",$update_data,$where_condition)){
        header("location:company_add_vacancy.php?updated=1");
     }
}

if(isset($_GET["updated"])){
    $success_message = "Details Updated";
}
?>



    <body>
      <br>

 <div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 60%;height:100%;" id="left_section">
     <form method="post" id="c_add_vacancy">
        <?php
        if(isset($_GET["edit"])){
            if(isset($_GET["vacancyID"])){
                $where= array(
                    'vacancyID' => $_GET["vacancyID"]
                );
                $single_data = $data -> select_where("vacancy",$where);
                foreach ($single_data as $post) {?>
                  <label>Title</label>
                  <input type="text" name="title" value="<?php echo $post["title"]; ?>" class="form-control">
                  </br>
                  <label>Description</label>
                  <input type="text" name="description" value="<?php echo $post["description"]; ?>" class="form-control">
                  </br>
                  <label>Minimum Qualification</label>
                  <input type="text" name="minimum_qualification" value="<?php echo $post["minimum_qualification"]; ?>" class="form-control">
                  </br>
                  <label>Salary</label>
                  <input type="text" name="salary" value="<?php echo $post["salary"]; ?>" class="form-control">
                  </br>
                  <label>CV Referring mail address</label>
                  <input type="text" name="cv_mail" value="<?php echo $post["cv_mail"]; ?>" class="form-control">
                  </br>
                  <label>Required skills</label>
                  <input type="text" name="skills_required" value="<?php echo $post["skills_required"]; ?>" class="form-control">
                  </br>
<!--
                <label>Required skills</label>
                <input type="text" name="com_id" value="<?php echo $post["userID"]; ?>" class="form-control">
              </br>-->
                     <input type="hidden" name="vacancyID" value="<?php echo $post["vacancyID"];  ?>">
                     <input type="submit" name="edit" value="Edit">
         <?php
                }
            }
        }else{


        ?>
        <br>
<div class="inputform" id="c_add_vacancy">
  <label>Title</label>
   <input type="text" name="title" class="w3-input" placeholder="Enter qualification title" >
   </br>
  <label>Description</label>
   <input type="text" name="description" class="w3-input" placeholder="Enter job description" >
   </br>
  <label>Minimum Qualification</label>
   <input type="text" name="minimum_qualification" class="w3-input" placeholder="Enter minimum qualification" >
   </br>
  <label>Salary</label>
   <input type="text" name="salary" class="w3-input" placeholder="Enter salary amount" >
   </br>
  <label>CV Referring mail address</label>
   <input type="text" name="cv_mail" class="w3-input" placeholder="Enter mail address" >
   </br>
  <label>Skill Description</label>
   <input type="text" name="skills_required" class="w3-input" placeholder="Enter skill description" >
   </br>
<!--
   <label>ID</label>
    <input type="text" name="com_id" class="w3-input" placeholder="Enter skill description">
  </br>-->
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
  <h4><?php echo _s_Our_Vacancies; ?></h4>
  <table class="w3-table-all w3-hoverable">
              <thead>
                  <tr>
                      <th><?php echo _s_Vacancy_Name; ?></th>
                      <th>Qualification Category</th>
                      <th>Delivery Type</th>

                  </tr>
              </thead>
              <tbody>
                      <?php
                          $post_data = $data -> select('vacancy');
                          //print_r($post_data);
                          foreach($post_data as $post){
                              ?>
                              <tr>
                                  <td><?php
                                  echo $post["title"];
                                  ?></td>
                                  <td><?php
                                  echo $post["description"];
                                  ?></td>
                                  <td><a href="company_add_vacancy.php?edit=1&vacancyID=<?php echo $post["vacancyID"]; ?>">Edit</a></td>


                              </tr>
                          <?php
                          }
                          ?>

              </tbody>
          </table>
</div>

    </body>
</html>
