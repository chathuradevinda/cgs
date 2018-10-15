<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error_student.php");    
}
else {
    // Makes it easier to read
    //$first_name = $_SESSION['first_name'];
    //$last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>


<!DOCTYPE html>
<html>
<title>Welcome <?= $first_name.' '.$last_name ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="assets/css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
  a:hover {
  text-decoration: none;
}
</style>

<body id="myPage">

<!-- Sidebar on click -->
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
  <a href="#" class="w3-bar-item w3-button w3-theme-l1"><i class="fa fa-home w3-margin-right"></i>SkillPoint</a>
  <a href="index_student.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
  <a href="searching_student.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Search Qualifications</a>
  <a href="searching_institute.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Search Institute</a>
  <a href="searching_company.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Search Company</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Search Event</a>
  <a href="personal_development.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Personal Development</a>

  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">Logout <span class="glyphicon glyphicon-log-out w3-margin-right"></span></a>
  <a href="my_profile_edit_0.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">My Profile <span class="glyphicon glyphicon-user w3-margin-right"></span></a>

 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Search Qualifications</a>
    <a href="#work" class="w3-bar-item w3-button">Search Institute</a>
    <a href="#pricing" class="w3-bar-item w3-button">Search Company</a>
    <a href="#contact" class="w3-bar-item w3-button">Search Event</a>
    <a href="#" class="w3-bar-item w3-button">Personal Development</a>
    <a href="#" class="w3-bar-item w3-button">My Profile</a>
    <a href="" class="w3-bar-item w3-button">Logout</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="assets/resources/images/pexels-photo-4.jpeg" alt="boat" style="width:100%;min-height:300px;max-height:600px;">
</div>


<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Why should you choose Skill Point?</h2>
<p>
    We are not limited to help you in finding better career advices.
    We give you the opportunity to develop your own skill in educational, professional as well as soft skills which are essential in persuing a career in your life.
    Browse for our range of service to you.
</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="assets/resources/images/pexels-photo-3.jpeg" alt="Vernazza" style="width:100%">
  <div class="w3-container">
  <h3>Search Qualifications</h3>
  <h4>Feel like you need more Qualifications?</h4>
  <p>Browse here for vast range of Qualifications provide by leading Institute in Sri Lanka.</p>

  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="assets/resources/images/pexels-photo-2.jpeg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>Search Company</h3>
  <h4>Looking for a career opportunity?</h4>
  <p>Browse here for leading companies who offer best career opportunities for you.</p>

  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="assets/resources/images/pexels-photo-1.jpeg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>Personal Development</h3>
  <h4>Want to know how you perform with your soft skill?</h4>
  <p>Sometimes you may want to increase the level of expertise in your soft skills. Take a test now!</p>

  </div>
  </div>
</div>

</div>


<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-theme w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Visit us for more career guidance by meeting our experts.</p>
      <p><i class="fa fa-map-marker w3-text-theme w3-xlarge"></i>  No 15, Chatham Street, Colombo</p>
      <p><i class="fa fa-phone w3-text-theme w3-xlarge"></i>  +94 11 2237223</p>
      <p><i class="fa fa-envelope-o w3-text-theme w3-xlarge"></i>  info@skillpoint.com</p>
    </div>

    </div>
  </div>




<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-theme-l2" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-theme-l2" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-theme-l2" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-theme-l2" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-theme-l2 w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="#" target="_blank">Skill Point</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-theme-l2 w3-hide-small">Go To Top</span>
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
