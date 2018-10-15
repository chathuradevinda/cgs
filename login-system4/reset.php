<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';
session_start();

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']); 
    $hash = $mysqli->escape_string($_GET['hash']); 

    // Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM user WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: error.php");
    }
}
else {
    $_SESSION['message'] = "Sorry, verification failed, try again!";
    header("location: error.php");  
}
?>
<!DOCTYPE html>
<html >
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
</head>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<body>
    <div class="w3-card-4" style="width:50%" id="formdiv">




        <div class="tab-content">


            <div class="w3-container w3-theme">
                <h2 style="text-align:center;">Choose Your New Password</h2>
            </div>
            <div id="formData" class="w3-container" style="background-color:white;opacity:0.9;">

          <form action="reset_password.php" method="post">
              
                    <div class="field-wrap">
            <label>
              New Password<span class="req">*</span>
            </label>
            <input type="password" class="w3-input" required name="newpassword" autocomplete="off"/>
          </div>
              
          <div class="field-wrap">
            <label>
              Confirm New Password<span class="req">*</span>
            </label>
            <input type="password" class="w3-input" required name="confirmpassword" autocomplete="off"/>
          </div>
          
          <!-- This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">    
          <input type="hidden" name="hash" value="<?= $hash ?>">    
            <input type="submit" value="Apply"  class="w3-input" style="width:50px;"/>
  
         
          
          </form>

    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
