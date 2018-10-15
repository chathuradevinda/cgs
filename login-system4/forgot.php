<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM user WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
       // $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( clevertechie.com )';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/login-system3/reset.php?email='.$email.'&hash='.$hash;  

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
  <title>Reset Your Password</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="assets/css/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style>
            a:hover {
                text-decoration: none;
            }
            #formdiv{
                margin: auto;
            }

            #button1,#button2{
                display: inline-block;
            }

            .form-group{
                padding-left:60px;
                padding-top:30px;
                padding-right:60px;

            }

            #buttons{
                /*padding-left: 60px;*/
                float:right;
                padding-bottom: 20px;
                padding-right: 60px;
            }

            #formData{
                margin: auto;
                padding: 30px;
            }
        </style>

    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="index.php" class="w3-bar-item w3-button w3-theme-l1"><i class="fa fa-home w3-margin-right"></i>SkillPoint</a>
            <a href="index_student.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>

            <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">Login <span class="glyphicon glyphicon-log-in w3-margin-right"> </span></a>

            <div class="w3-hide-small w3-right w3-hover-white">
                <div class="w3-dropdown-hover">
                    <button class="w3-button w3-theme-d2">Signup <span class="glyphicon glyphicon-edit w3-margin-right"> </span></button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="registration_student.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-user w3-margin-right"> </span>Student</a>
                        <a href="registration_institute.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-education w3-margin-right"> </span>Institute</a>
                        <a href="register_company.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-briefcase w3-margin-right"> </span>Company</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
        </div>
    </div>
</head>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>


<body background="../assets/resources/images/pexels-photo-6.jpeg">
    <div class="w3-card-4" style="width:50%" id="formdiv">
<div class="tab-content">
<div class="w3-container w3-theme">
                <h2 style="text-align:center;">Reset Your Password</h2>
            </div>
    <div id="formData" class="w3-container" style="background-color:white;opacity:0.9;">


    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input class="w3-input" type="email"required autocomplete="off" name="email"/>
    </div>
    <button type="submit"  class="w3-input" style="width:50px;"/>Reset</button>
    </form>
  </div>
          

</body>

</html>
