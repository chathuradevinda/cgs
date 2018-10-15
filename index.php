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
     <a href="admin_login.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Administrator Login</a>
     <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>

     <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">Login <span class="glyphicon glyphicon-log-in w3-margin-right"> </span></a>

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
    </div>
     <!-- Navbar on small screens -->
     <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
       <a href="#" class="w3-bar-item w3-button">Logout</a>
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

 <body background="assets/resources/images/pexels-photo-6.jpeg">

 <div class="w3-card-4" style="width:50%" id="formdiv">
   <div class="w3-container w3-theme">
     <h2 style="text-align:center;">Let's Login!</h2>
   </div>
   <div>
     <div id="formData" class="w3-container" style="background-color:white;opacity:0.9;">
       <form action="" method="POST">

         </br>
         <p>
           <label>E-mail:</label>
           <input type="email" class="w3-input" name="email" id="email" placeholder="Enter Email" >
         </p>
         <p>
         <label>Password:</label>
         <input type="password" class="w3-input" name="password" id="password" placeholder="Enter Password" >
         </p>
         <p align="right" style="font-size:10px;"><input type="checkbox" onclick="myFunction()">Show Password</p>
         <input type="submit" value="Login" name="submit" class="w3-input" style="width:50px;"/>
       </form>
     </div>

<?php
 require 'Connection.php';
 $conn    = Connect();
 //$data = new Connect;

   if(isset($_POST["submit"])){
   if(!empty($_POST['email']) && !empty($_POST['password'])) {
       $user=$_POST['email'];
       $pass=$_POST['password'];

       $query=$conn->query("SELECT * FROM user WHERE email='".$user."'");
       $numrows=mysqli_num_rows($query);
         if($numrows!=0){
           while($row=mysqli_fetch_assoc($query)){
             $dbusername=$row['email'];
             $dbpassword=$row['hash'];

       if($user == $dbusername && $pass == $dbpassword){
       session_start();
       $_SESSION['sess_user']=$user;
       if($row['userCategory']==1){
         header("Location: student_index.php");
       }elseif ($row['userCategory']==2) {
         header("Location: institute_index.php");
       }elseif ($row['userCategory']==3) {
         header("Location: company_index.php");
       }else {
         echo "Cannot identify user type";
       }
}
   //	echo "Successful";
 /*	$to      = 'wsachithre@gmail.com';
       $subject = 'Password Reset Link ( clevertechie.com )';
       $message_body = '
       Hello ,

       You have requested password reset!

       Please click this link to reset your password:

       http://localhost/login-system/reset.php?emai';

       mail($to, $subject, $message_body);
       $_SESSION['sess_user']=$user;  */

       /* Redirect browser */

       }
     }else if($user != $dbusername or $pass != $dbpassword){
         echo "Invalid username or password!";
       }
   } else {
       echo "All fields are required!";
   }
   }
   ?>
</div>

</div>

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
