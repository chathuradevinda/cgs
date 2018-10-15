<?php
include 'operations.php';
$data = new Operations;
ob_start();
require_once ('student_header.php');

 $success_message = '';

if(isset($_POST["edit"])){
     $update_data = array(
       'firstName' => mysqli_real_escape_string($data->conn, $_POST['first_name']),
       'lastName' => mysqli_real_escape_string($data->conn, $_POST['last_name']),
       'NIC' => mysqli_real_escape_string($data->conn, $_POST['nic']),
       'DOB' => mysqli_real_escape_string($data->conn, $_POST['dob']),
       'email' => mysqli_real_escape_string($data->conn, $_POST['email']),
       'mobile' => mysqli_real_escape_string($data->conn, $_POST['mobile']),
       'home' => mysqli_real_escape_string($data->conn, $_POST['residence']),
       'hash' => mysqli_real_escape_string($data->conn, $_POST['pwd']),
     );

     $where_condition = array(
        'studentID' => $_POST['studentID']
    );
ob_end_clean();
     if($data->update("student",$update_data,$where_condition)){

        header("location:student_my_profile_edit_0.php?updated=1");

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
      <?php
      include('sidebar.php');
      ?>
 <div class="w3-col w3-container" style="width:84.8%;margin-left:230px;">
   <div class="w3-card-4" style="width:100%" id="formdiv1">

     <form method="post">
        <?php
        if(isset($_GET["edit"])){
          if(isset($_GET["studentID"])){
                $where= array(
                    'userID' => $_GET["studentID"]
                );
                $single_data = $data -> select_where("student",$where);
                $single_data_1 = $data -> select_where("user",$where);
                foreach ($single_data as $post) {
                  foreach ($single_data_1 as $post_1) {
?>
                  <div class="form-group">
                      <label>First Name:</label>
                      <div>
                          <input type="text" class="w3-input" name="first_name" value="<?php echo $post["firstName"]; ?>" placeholder="Enter First Name">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Last Name:</label>
                      <div>
                          <input type="text" class="w3-input" name="last_name" value="<?php echo $post["lastName"]; ?>" placeholder="Enter Last Name">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>NIC:</label>
                      <div>
                          <input type="text" class="w3-input" name="nic" value="<?php echo $post["NIC"]; ?>" placeholder="Enter NIC No">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Date of Birth:</label>
                      <div>
                          <input type="date" class="w3-input" name="dob" value="<?php echo $post["DOB"]; ?>" placeholder="Select Date of Birth">
                      </div>
                  </div>
                  <div class="form-group">
                      <label>Mobile No:</label>
                      <div>
                          <input type="text" class="w3-input" name="mobile" value="<?php echo $post["mobile"]; ?>" placeholder="Enter Mobile No">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Residence Telephone No:</label>
                      <div>
                          <input type="text" class="w3-input" name="residence" value="<?php echo $post["home"]; ?>" placeholder="Enter Residence Telephone No">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Email Address:</label>
                      <div>
                          <input type="email" class="w3-input" name="email" value="<?php echo $post_1["email"]; ?>" placeholder="Enter Email Address">
                      </div>
                  </div>

                  <div class="form-group">
                      <label>Password:</label>
                      <div>
                          <input type="password" class="w3-input" name="pwd" value="<?php echo $post_1["hash"]; ?>" placeholder="Enter password">
                      </div>
                  </div>

                     <input type="hidden" name="studentID" value="<?php echo $post["userID"];  ?>">
                     <input type="submit" name="edit" value="Save">
         <?php
       }
     }
            }
        }else{

                        $where= array(
                            'userID' => $studentID
                        );
                            $post_data = $data -> select_where("student",$where);
                            $post_data_1 = $data -> select_where("user",$where);
                            //print_r($post_data);
                            foreach($post_data as $post){
                              foreach ($post_data_1 as $post_1) {

                              ?>

                              <div class="form-group">
                                  <label>First Name:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="first_name" value="<?php echo $post["firstName"]; ?>" placeholder="Enter First Name">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Last Name:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="last_name" value="<?php echo $post["lastName"]; ?>" placeholder="Enter Last Name">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>NIC:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="nic" value="<?php echo $post["NIC"]; ?>" placeholder="Enter NIC No">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Date of Birth:</label>
                                  <div>
                                      <input type="date" class="w3-input" name="dob" value="<?php echo $post["DOB"]; ?>" placeholder="Select Date of Birth">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>Mobile No:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="mobile" value="<?php echo $post["mobile"]; ?>" placeholder="Enter Mobile No">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Residence Telephone No:</label>
                                  <div>
                                      <input type="text" class="w3-input" name="residence" value="<?php echo $post["home"]; ?>" placeholder="Enter Residence Telephone No">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Email Address:</label>
                                  <div>
                                      <input type="email" class="w3-input" name="email" value="<?php echo $post_1["email"]; ?>" placeholder="Enter Email Address">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Password:</label>
                                  <div>
                                      <input type="password" class="w3-input" name="pwd" value="<?php echo $post_1["hash"]; ?>" placeholder="Enter password">
                                  </div>
                              </div>

                 <input type="submit" name="submit" value="Submit">
                 <a href="student_my_profile_edit_0.php">Edit</a>

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
