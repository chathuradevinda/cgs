<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <title>Error</title>
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
          <h1>Thanks for stopping by</h1>
        </div>
            <div id="formData" class="w3-container" style="background-color:white;opacity:0.9;">

  
          <p><?= 'You have been logged out!'; ?></p>
          
          <a href="index.php"><button class="w3-input" style="width:50px;"/>Home</button></a>
            </div>
    </div>
    </div>
</body>
</html>
