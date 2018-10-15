<?php
//session_start();
include('define_language2.php');



//echo $prin;

 ?>
<head>

<title>Welcome Company</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="assets/css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js "></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" />





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



<style>
  a:hover {
  text-decoration: none;
}
</style>

<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="company_index.php" class="w3-bar-item w3-button w3-theme-l1"><i class="fa fa-home w3-margin-right"></i>SkillPoint</a>
  <a href="company_index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo _s_Home; ?></a>
  <a href="company_search_candidate.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo _s_Search_Candidates; ?></a>
  <a href="company_add_vacancy.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo _s_Publish_Vacancy; ?></a>
  <a href="company_add_event.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo _s_Publish_Event; ?></a>


  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white"><?php echo _s_Logout; ?> <span class="glyphicon glyphicon-log-out w3-margin-right"></span></a>
  <a href="company_my_profile_edit.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">
    <?php
    require 'connection.php';
    $conn    = Connect();
    $company_userID = '';
  //  session_start();
     $id = $_SESSION["sess_user"];
     $sql_X = "SELECT user.userID,company.userID,company.companyName FROM user,company WHERE user.email = '".$id."' AND user.userID = company.userID";
     $result_X = mysqli_query($conn,$sql_X);
     while($row_X = mysqli_fetch_array($result_X)){
       echo $row_X['companyName'];
       $company_userID = $row_X['userID'];
     }

    // echo $company_userID;
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
    <a href="#team" class="w3-bar-item w3-button">Search Candidates</a>
    <a href="#work" class="w3-bar-item w3-button">Publish Vacancy</a>
    <a href="#pricing" class="w3-bar-item w3-button">Publish Event</a>
    <a href="#" class="w3-bar-item w3-button">My Profile</a>
    <a href="#" class="w3-bar-item w3-button">Logout</a>
  </div>
</div>
</head>
