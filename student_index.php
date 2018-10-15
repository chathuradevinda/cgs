<!DOCTYPE html>
<html>
<?php
include 'student_header.php';
?>

<body>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="assets/resources/images/pexels-photo-4.jpeg" alt="boat" style="width:100%;min-height:300px;max-height:600px;">
</div>


<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2><?php echo _s_Why_Should; ?></h2>
<p><?php echo _s_We_are_not; ?></p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <a href="student_search_course.php">
  <img src="assets/resources/images/pexels-photo-3.jpeg" style="width:100%">
  <div class="w3-container">
  <h3><?php echo _s_Search_Courses; ?></h3>
  <h4><?php echo _s_feel_like; ?></h4>
  <p><?php echo _s_Browese_here; ?></p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <a href="student_search_vacancy.php">
  <img src="assets/resources/images/pexels-photo-2.jpeg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
    <h3><?php echo _s_Search_Vacancy; ?></h3>
  <h4><?php echo _s_Looking_for; ?></h4>
  <p><?php echo _s_Browese_for; ?></p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <a href="student_personal_development_current_qualification.php">
  <img src="assets/resources/images/pexels-photo-5.jpeg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
    <h3><?php echo _s_Personal_Development; ?></h3>
  <h4><?php echo _s_Want_to_know; ?></h4>
  <p><?php echo _s_Sometimes_you; ?></p>
  </div>
  </div>
</div>

</div>


<!-- Contact Container -->




<!-- Footer -->
<?php
include_once('footer.php');
?>

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
