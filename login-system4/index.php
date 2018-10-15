<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Welcome User</title>
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


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) { //user logging in
        require 'login.php';
    } elseif (isset($_POST['register'])) { //user registering
        require 'registration_student.php';
    }
}
?>
<body background="../assets/resources/images/pexels-photo-6.jpeg">
    <div class="w3-card-4" style="width:50%" id="formdiv">




        <div class="tab-content">


            <div class="w3-container w3-theme">
                <h2 style="text-align:center;">Let's Login!</h2>
            </div>
            <div id="formData" class="w3-container" style="background-color:white;opacity:0.9;">


                <form action="index.php" method="post" autocomplete="off">

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" class="w3-input" required autocomplete="off" name="email"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" class="w3-input" id="password" required autocomplete="off" name="password"/>
                    </div>
                    <p align="right" style="font-size:10px;"><input type="checkbox" onclick="myFunction()">Show Password</p>


                    <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
                    <button class="w3-input" style="width:75px;" name="login" />Log In</button>


                </form>

            </div>
            <div id="signup">   




            </div>  


        </div><!-- tab-content -->

    </div> <!-- /form -->


</body>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
</html>
