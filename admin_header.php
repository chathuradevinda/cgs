<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="assets/css/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="assets/css/w3.css">

<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"> </script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"> </script>
<script src="assets/jquery/jquery-1.11.2.js"> </script>
<script src="assets/jquery/jquery.validate.min.js"> </script>
<script src="assets/jquery/jquery-3.2.1.js"></script>
<script src="assets/jquery/jquery.validate.js"></script>
<script src="assets/jquery/a_add_skill.js"></script>
<script src="assets/jquery/a_add_qualification.js"></script>


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

    a{
      font-size: 12px;
    }
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
<div class="w3-top" >
  <div class="w3-bar w3-theme-d2 w3-left-align">
   <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
   <a href="admin_index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
   <a href="admin_add_skill.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Skill</a>
   <a href="admin_add_qualification.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Qualification</a>
   <a href="admin_add_related_fields.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Related Qualifications</a>

   <a href="admin_view_registered_course.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Registered Course</a>
   <a href="admin_view_registered_student.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Registered Student</a>
   <a href="admin_view_registered_institutes.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Registered Institute</a>
   <a href="admin_view_registered_company.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Registered Company</a>

   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">Logout <span class="glyphicon glyphicon-log-out w3-margin-right"></span></a>

  </div>
    </head>
