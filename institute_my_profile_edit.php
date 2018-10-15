<?php
include 'operations.php';
$data = new Operations;
ob_start();
require_once ('institute_header.php');

 $success_message = '';

if(isset($_POST["edit"])){
     $update_data = array(
       'instituteName' => mysqli_real_escape_string($data->conn, $_POST['institute_name']),
       'website' => mysqli_real_escape_string($data->conn, $_POST['website']),
       'regNo' => mysqli_real_escape_string($data->conn, $_POST['reg_no']),
       'telephone1' => mysqli_real_escape_string($data->conn, $_POST['telephone_line1']),
       'telephone2' => mysqli_real_escape_string($data->conn, $_POST['telephone_line2']),
       'fax' => mysqli_real_escape_string($data->conn, $_POST['fax']),
       'no' => mysqli_real_escape_string($data->conn, $_POST['no']),
       'addressLine1' => mysqli_real_escape_string($data->conn, $_POST['address_line1']),
       'addressLine2' => mysqli_real_escape_string($data->conn, $_POST['address_line2']),
       'city' => mysqli_real_escape_string($data->conn, $_POST['city']),

     );

     $where_condition = array(
        'instituteID' => $_POST['instituteID']
    );
ob_end_clean();
     if($data->update("institute",$update_data,$where_condition)){

        header("location:institute_my_profile_edit.php?updated=1");

     }
}

if(isset($_GET["updated"])){
    $success_message = "Details Updated";
}
?>

<html>
    <head>
        <title>
            Hello
        </title>
        <style>

        #formdiv1{
            margin: auto;
            padding-left: 20px;
            padding-top: 20px;
        }
        #buttons{
          /*padding-left: 60px;*/
          float:right;
          padding-bottom: 20px;
          padding-right: 20px;
        }
        #button1,#button2,#button3{
          display: inline-block;
        }
       </style>
    </head>
  </br>
  </br>
    <body>
    
 <div class="w3-col w3-container" style="width:84.8%;margin-left:230px;">
   <div class="w3-card-4" style="width:100%" id="formdiv1">

     <form method="post">
        <?php
        if(isset($_GET["edit"])){
          if(isset($_GET["instituteID"])){
                $where= array(
                    'userID' => $_GET["instituteID"]
                );
                $single_data = $data -> select_where("institute",$where);
                $single_data_1 = $data -> select_where("user_address",$where);
                foreach ($single_data as $post) {
                  foreach ($single_data_1 as $post_1) {
?>
                  <div class="form-group">
                      <label>Institute Name:</label>
                      <div>
                          <input type="text" class="w3-input" name="institute_name" value="<?php echo $post["instituteName"]; ?>" placeholder="Enter institute Name">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Website:</label>
                      <div>
                          <input type="text" class="w3-input" name="website" value="<?php echo $post["website"]; ?>" placeholder="Enter Website">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Reg No:</label>
                      <div>
                          <input type="text" class="w3-input" name="reg_no" value="<?php echo $post["regNo"]; ?>" placeholder="Enter Registraion No">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Telephone Line 1:</label>
                      <div>
                          <input type="text" class="w3-input" name="telephone_line1" value="<?php echo $post["telephone1"]; ?>" placeholder="Enter Telephone Line 1">
                      </div>
                  </div>
                  <div class="form-group">
                      <label>Telephone Line 2:</label>
                      <div>
                          <input type="text" class="w3-input" name="telephone_line2" value="<?php echo $post["telephone2"]; ?>" placeholder="Enter Telephone Line 2">
                      </div>
                  </div>


                  <div class="form-group">
                      <label>Fax:</label>
                      <div>
                          <input type="text" class="w3-input" name="fax" value="<?php echo $post["fax"]; ?>" placeholder="Enter Fax No">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>No:</label>
                      <div>
                          <input type="text" class="w3-input" name="no" value="<?php echo $post_1["no"]; ?>" placeholder="Enter Address No">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Address Line 1:</label>
                      <div>
                          <input type="text" class="w3-input" name="address_line1" value="<?php echo $post_1["addressLine1"]; ?>" placeholder="Enter Address Line 1">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Address Line 2:</label>
                      <div>
                          <input type="text" class="w3-input" name="address_line2" value="<?php echo $post_1["addressLine2"]; ?>" placeholder="Enter Address Line 2">
                      </div>
                  </div>
                  <div class="form-group">
                      <label>City:</label>
                      <div>
                          <input type="text" class="w3-input" name="city" value="<?php echo $post_1["city"]; ?>" placeholder="Enter City  Name">
                      </div>
                  </div>


                     <input type="hidden" name="instituteID" value="<?php echo $post_1["userID"];  ?>">
                     <input type="submit" name="edit" value="Save">
         <?php
       }
     }
            }
        }else{

                        $where= array(
                            'userID' => 55
                        );
                            $post_data = $data -> select_where("institute",$where);
                            $post_data_1 = $data -> select_where("user_address",$where);
                            //print_r($post_data);
                            foreach($post_data as $post){
                              foreach ($post_data_1 as $post_1) {

                              ?>

                              <div class="form-group">
                                  <label>Institute Name:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="institute_nameName" value="<?php echo $post["instituteName"]; ?>" placeholder="Enter Institute Name">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Website:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="website" value="<?php echo $post["website"]; ?>" placeholder="Enter Website">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Reg No:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="reg_no" value="<?php echo $post["regNo"]; ?>" placeholder="Enter Registraion No">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Telephone Line 1:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="telephone_line1" value="<?php echo $post["telephone1"]; ?>" placeholder="Enter Telephone Line 1">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>Telephone Line 2:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="telephone_line2" value="<?php echo $post["telephone2"]; ?>" placeholder="Enter Telephone Line 2">
                                  </div>
                              </div>


                              <div class="form-group">
                                  <label>Fax:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="fax" value="<?php echo $post["fax"]; ?>" placeholder="Enter Fax No">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>No:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="no" value="<?php echo $post_1["no"]; ?>" placeholder="Enter Address No">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Address Line 1:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="address_line1" value="<?php echo $post_1["addressLine1"]; ?>" placeholder="Enter Address Line 1">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Address Line 2:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="address_line2" value="<?php echo $post_1["addressLine2"]; ?>" placeholder="Enter Address Line 2">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>City:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="city" value="<?php echo $post_1["city"]; ?>" placeholder="Enter City  Name">
                                  </div>
                              </div>


                 <input type="submit" name="submit" value="Submit">
                 <a href="institute_my_profile_edit.php">Edit</a>

                 <?php
                 //?edit=1&studentID=33
}}
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




    </body>
</html>
