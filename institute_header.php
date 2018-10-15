<?php
//session_start();
include('define_language2.php');



//echo $prin;

 ?>


<head>

  <title>Welcome Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="assets/css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--form validator-->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"> </script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"> </script>
<script src="assets/jquery/jquery-1.11.2.js"> </script>
<script src="assets/jquery/jquery.validate.min.js"> </script>
<script src="assets/jquery/jquery-3.2.1.js"></script>
<script src="assets/jquery/jquery.validate.js"></script>
<script src="assets/jquery/i_add_event.js"></script>
<script src="assets/jquery/i_add_course.js"></script>
<script src="assets/jquery/i_reg.js"></script>


<style type="text/css">
label.error {
	font-size:13px;
	color:red;
}
label.valid {
	background: url('/js/jquery/img/valid.gif') no-repeat;
	height:21px;
	width:21px;
	display:block;
	padding-left: 21px;
}

</style>
-->



<style>
    a:hover {
    text-decoration: none;
  }
    #formdiv{
        margin: auto;
    }
    body{

    }
    #button1,#button2{
        display: inline-block;
    }
   </style>

   <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
   <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-theme">Close
     <i class="fa fa-remove"></i>
   </a>
   <a href="#" class="w3-bar-item w3-button">Link 1</a>
   <a href="#" class="w3-bar-item w3-button">Link 2</a>
   <a href="#" class="w3-bar-item w3-button">Link 3</a>
   <a href="#" class="w3-bar-item w3-button">Link 4</a>
   <a href="#" class="w3-bar-item w3-button">Link 5</a>
   </nav>


   <!-- Navbar -->
   <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align">
   <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
   <a href="institute_index.php" class="w3-bar-item w3-button w3-theme-l1"><i class="fa fa-home w3-margin-right"></i>SkillPoint</a>
   <a href="institute_index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo _s_Home; ?></a>
   <a href="institute_add_course.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo _s_Publish_Course; ?></a>
   <a href="institute_add_event.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo _s_Publish_Event; ?></a>
   <a href="institute_edit_course.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo _s_Edit_course_details; ?></a>

   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white"><?php echo _s_Logout; ?> <span class="glyphicon glyphicon-log-out w3-margin-right"></span></a>
   <a href="my_profile_edit_#.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">
     <?php
     require 'connection.php';
     $conn    = Connect();
     $institute = '';
     //session_start();
      $id = $_SESSION["sess_user"];
      $sql_X = "SELECT user.userID,institute.userID,institute.instituteName FROM user,institute WHERE user.email = '".$id."' AND user.userID = institute.userID";
     // $sql_X = "SELECT userID FROM user WHERE email = '".$id."'";
      $result_X = mysqli_query($conn,$sql_X);
      while($row_X = mysqli_fetch_array($result_X)){
        echo $row_X['instituteName'];
        $institute_userID = $row_X['userID'];

      }
     // echo "$institute";
      ?>
      <span class="glyphicon glyphicon-user w3-margin-right"></span></a>
      <div class="w3-hide-small w3-right w3-hover-white">

       <div class="w3-dropdown-hover">
         <button class="w3-button w3-theme-d2"><?php echo _s_lan; ?> <span class="glyphicon glyphicon-edit w3-margin-right"> </span></button>
         <div class="w3-dropdown-content w3-bar-block w3-card-4">
           <div class="w3-dropdown-hover">
             <div class="w3-dropdown-content w3-bar-block w3-card-4">
               <a href="switch_language.php?lang_base=1" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-globe w3-margin-right"> English</span></a>
               <a href="switch_language.php?lang_base=2" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-globe w3-margin-right"> සිංහල</span></a>
             </div>
           </div>
             </div>
       </div>
      </div>

   </div>

   <!-- Navbar on small screens -->
   <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
     <a href="add_course.php" class="w3-bar-item w3-button">Home</a>
     <a href="add_event.php" class="w3-bar-item w3-button">Publish Event</a>
     <a href="edit_course.php" class="w3-bar-item w3-button">Edit Course Details</a>
     <!--<a href="#contact" class="w3-bar-item w3-button">Search Event</a>
     <a href="#" class="w3-bar-item w3-button">Personal Development</a>-->
       <a href="#" class="w3-bar-item w3-button">Logout</a>


   </div>
   </div>
   </head>

   <!-- Sidebar on click -->
