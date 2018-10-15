<?php
include 'operations.php';
$data = new Operations;
 $success_message = '';
 if(isset($_POST["submit"]))
 {
      $insert_data = array(
        'skillName' => mysqli_real_escape_string($data->conn, $_POST['skillName']),
        'description' => mysqli_real_escape_string($data->conn, $_POST['description'])
      );
      if($data->insert('skills', $insert_data))
      {
           $success_message = 'Post Inserted';
      }
 }

if(isset($_POST["edit"])){
     $update_data = array(
        'skillName' => mysqli_real_escape_string($data->conn, $_POST['skillName']),
        'description' => mysqli_real_escape_string($data->conn, $_POST['description'])
     );

     $where_condition = array(
        'skillID' => $_POST['skillID']
    );

     if($data->update("skills",$update_data,$where_condition)){
        header("location:admin_add_skill.php?updated=1");
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

 <div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 40%;height:100%;" id="right_section">
     <form method="post" id="a_add_skill">
        <?php
        if(isset($_GET["edit"])){
            if(isset($_GET["skillID"])){
                $where= array(
                    'skillID' => $_GET["skillID"]
                );
                $single_data = $data -> select_where("skills",$where);
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

<div class="inputform" id="a_add_skill">
  <label>Skill Name</label>
   <input type="text" name="skillName" class="w3-input" placeholder="Enter skill name" >
   </br>
  <label>Skill Description</label>
   <input type="text" name="description" class="w3-input" placeholder="Enter skill description">
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

<div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 60%;" id="right_section">
  <table class="w3-table-all w3-hoverable">
              <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Qualification Category</th>
                      <th>Delivery Type</th>

                  </tr>
              </thead>
              <tbody>
                      <?php
                          $post_data = $data -> select('skills');
                          foreach($post_data as $post){
                              ?>
                              <tr>
                                  <td><?php
                                  echo $post["skillName"];
                                  ?></td>
                                  <td><?php
                                  echo $post["description"];
                                  ?></td>
                                  <td><a href="admin_add_skill.php?edit=1&skillID=<?php echo $post["skillID"]; ?>">Edit</a></td>


                              </tr>
                          <?php
                          }
                          ?>

              </tbody>
          </table>
</div>
    </body>
</html>
