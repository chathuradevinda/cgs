<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
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
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome </title>
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
                <h2 style="text-align:center;">Welcome</h2>
            </div>
          <div id="formData" class="w3-container" style="background-color:white;opacity:0.9;">

          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          else{
              
               header("location: index_student.php");    
 
          }
         
          
          ?>
          
          <h2><?php// echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
          
          <a href="logout.php"><button type="submit"  name="logout" class="w3-input" style="width:75px;"/>Log Out</button></a>

    </div>
             </div>
          </div>
    
    
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
