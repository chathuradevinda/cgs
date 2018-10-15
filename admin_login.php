<?php



if(isset($_POST["submit"])){

if(!empty($_POST['email']) && !empty($_POST['hash_1']) && !empty($_POST['hash_2']) && !empty($_POST['q_1']) && !empty($_POST['q_2']) ) {
    $user=$_POST['email'];
    $pass_1=$_POST['hash_1'];
    $pass_2=$_POST['hash_2'];
    $q_1=$_POST['q_1'];
    $q_2=$_POST['q_2'];


    $admin = "admin";
    $password = "94";
    $answer_1 = "cmb";
    $answer_2 = "avi";


    if($user == $admin && $pass_1 == $password && $pass_2 == $password && $q_1 == $answer_1 && $q_2 == $answer_2)
    {

    //session_start();
    /*$_SESSION['sess_user']=$user;
  echo "Successful";
    $to      = 'wsachithre@gmail.com';
    $subject = 'Password Reset Link ( clevertechie.com )';
    $message_body = '
    Hello ,

    You have requested password reset!

    Please click this link to reset your password:

    http://localhost/login-system/reset.php?emai';

    mail($to, $subject, $message_body);
    //

    /* Redirect browser */
   header("Location: admin_index.php");
    }
  }elseif($user != $admin or $pass_1 != $password or $pass_2 != $password or $q_1 != $answer_1 or $q_2 != $answer_2){

      echo "Invalid username or password or answer!";
    }

} else {
    echo "All fields are required!";
}

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

    #button1:hover {
        background-color: #f44336;
        color: white;
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
      padding: 20px;
    }
    </style>

    <div class="w3-top">
     <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-theme-l1"><i class="fa fa-home w3-margin-right"></i>SkillPoint</a>
      <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>

      <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">Login <span class="glyphicon glyphicon-log-in w3-margin-right"> </span></a>

      <div class="w3-hide-small w3-right w3-hover-white">
        <div class="w3-dropdown-hover">
          <button class="w3-button w3-theme-d2">Signup <span class="glyphicon glyphicon-edit w3-margin-right"> </span></button>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="student_registration.html" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-user w3-margin-right"> </span>Student</a>
            <a href="institute_registration.html" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-education w3-margin-right"> </span>Institute</a>
            <a href="company_registration.html" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-briefcase w3-margin-right"> </span>Company</a>

        </div>
      </div>
     </div>
      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
        <a href="#" class="w3-bar-item w3-button">Logout</a>
      </div>
    </div>
  </head>
</br>


  <body background="../assets/resources/images/pexels-photo-7.jpeg">

  <div class="w3-card-4" style="width:50%" id="formdiv">
    <div class="w3-container w3-red">
      <h3 style="text-align:center;">You must have administrative privilages to login!</h3>

    </div>


                <div>
                  <div id="formData" class="w3-container" style="background-color:white;opacity:0.97;">
                                    <form action="" method="POST">
                      <div>

                      <p>
                      <label>Username:</label>
                      <input type="text" class="w3-input" name="email" id="email" placeholder="Enter Username" >
                      </p>
                      <p>
                      <label>Password:</label>
                      <input type="password" class="w3-input" name="hash_1" id="password_1" placeholder="Enter Password" >
                      </p>
                      <!--<p align="right" style="font-size:10px;"><input type="checkbox" onclick="myFunction()">Show Password</p>-->
                      <p>
                      <label>Re Enter Password:</label>
                      <input type="password" class="w3-input" name="hash_2" id="password_2" placeholder="Re Enter Password" >
                      </p>
                      <!--<p align="right" style="font-size:10px;"><input type="checkbox" onclick="myFunction2()">Show Password</p>-->
                      <p>
                      <label>Question 1: What is Your birth place?</label>
                      <input type="text" class="w3-input" name="q_1" id="1" placeholder="Please Answer the Question 1" >
                      </p>
                      <p>
                      <label>Question 2: What is Your mother's maiden name?</label>
                      <input type="text" class="w3-input" name="q_2" id="1" placeholder="Please Answer the Question 2" >
                      </p>

                      <input type="submit" value="Login" name="submit" class="w3-input" id="button1" style="width:100px;"/>
                      </form>
                  </div>

                </div>

  </div>

  </body>
  <!--
  <script>
function myFunction() {
    var x = document.getElementById("password_1");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function myFunction2() {
    var y = document.getElementById("password_2");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
}
</script>-->
</html>
