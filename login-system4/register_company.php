<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Company</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="assets/css/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            a:hover {
                text-decoration: none;
            }
            #formdiv{
                margin: auto;
            }
            body{
                overflow:auto;
            }
            #button1,#button2{
                display: inline-block;
            }
        </style>
    <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-theme-l1"><i class="fa fa-home w3-margin-right"></i>SkillPoint</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white">Log In <span class="glyphicon glyphicon-log-in w3-margin-right"></span></a>

    </div>
</head>

<?php
error_reporting(E_PARSE | E_ERROR);


// define variables and set to empty values
$companynameErr = $telephone1Err = $telephone2Err = "";
$companyname = $telephone1 = $telephone2 = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $valid = true;
    if (empty($_POST["companyname"])) {
        $companynameErr = "Name is required";
        $valid = false;
    } else {
        $companyname = test_input($_POST["companyname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $companyname)) {
            $companynameErr = "Only letters and white space allowed";
            $valid = false;
        }
    }

    if (empty($_POST["telephone1"])) {
        $telephone1Err = "Contact is required";
        $valid = false;
    } else {
        $telephone1 = test_input($_POST["telephone1"]);

        if (!preg_match("/^[0-9]{10}$/", $telephone1)) {
            $telephone1Err = "Invalid contact number";
            $valid = false;
        }
    }

    if (empty($_POST["telephone2"])) {
        $telephone2Err = "Contact is required";
        $valid = false;
    } else {
        $telephone2 = test_input($_POST["telephone2"]);

        if (!preg_match("/^[0-9]{10}$/", $telephone2)) {
            $telephone2Err = "Invalid contact number";
            $valid = false;
        }
    }

    if ($valid) {




        /* Registration process, inserts user info into the database 
          and sends account confirmation email message
         */

// Set session variables to be used on profile.php page
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['company_name'] = $_POST['companyname'];


// Escape all $_POST variables to protect against SQL injections
        $company_name = $mysqli->escape_string($_POST['companyname']);
        $website = $mysqli->escape_string($_POST['website']);
        $regNo = $mysqli->escape_string($_POST['registration_no']);
        $email = $mysqli->escape_string($_POST['email']);
        $addressNo = $mysqli->escape_string($_POST['address_no']);
        $addressLine1 = $mysqli->escape_string($_POST['address_line_1']);
        $addressLine2 = $mysqli->escape_string($_POST['address_line_2']);

        $city = $mysqli->escape_string($_POST['city']);
        $telephone1 = $mysqli->escape_string($_POST['telephone1']);
        $telephone2 = $mysqli->escape_string($_POST['telephone2']);
        $fax = $mysqli->escape_string($_POST['fax']);
        $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $hash = $mysqli->escape_string(md5(rand(0, 1000)));

// Check if user with that email already exists
        $result = $mysqli->query("SELECT * FROM user WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
        if ($result->num_rows > 0) {

            $_SESSION['message'] = 'User with this email already exists!';
            header("location: error.php");
        } else { // Email doesn't already exist in a database, proceed...
            // active is 0 by DEFAULT (no need to include it here)
            $sql = "INSERT INTO user ( email,hash,userCategory, password) VALUES ('" . $email . "','" . $hash . "','3', '" . $password . "')";

            // Add user to the database
            if ($mysqli->query($sql) === TRUE) {

                $last_id = $mysqli->insert_id;
                $sql_3 = "INSERT INTO company (userID,companyName, regNo,website, telephone1,telephone2,fax) VALUES ($last_id ,'" . $company_name . "','" . $regNo . "','" . $website . "',$telephone1,$telephone2,'" . $fax . "')";
                $sql_2 = "INSERT INTO user_address(userID,no,addressLine1,addressLine2,city) VALUES($last_id,'" . $addressNo . "','" . $addressLine1 . "','" . $addressLine2 . "','" . $city . "')";

                if ($mysqli->query($sql_2) && $mysqli->query($sql_3) === TRUE) {
                    echo "Thank You For Contacting Us. Last inserted ID is: " . $last_id;
                } else {
                    echo $mysqli->error;
                }


                $_SESSION['active'] = 0; //0 until user activates their account with verify.php
                $_SESSION['logged_in'] = true; // So we know the user has logged in
                $_SESSION['message'] = "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

                // Send registration confirmation link (verify.php)
                $to = $email;
                $subject = 'Account Verification ( clevertechie.com )';
                $message_body = 'Hello' . $company_name . ',
                     Thank you for signing up!
 Please click this link to activate your account:

                    http://localhost/login-system4/verify.php?email=' . $email . '&hash=' . $hash;
                mail($to, $subject, $message_body);
                header("location: profile_company.php");
            } else {
                $_SESSION['message'] = 'Registration failed!';
                echo $mysqli->error;
                header("location: error.php");
            }
        }
        exit();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<body>



    <div class="w3-card-4" style="width:65%" id="formdiv">


        <div class="w3-container w3-theme">
            <h2>Let's get registered!</h2>
        </div>
        </br>
        <form class="w3-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">


            <div class="form-group">
                <label>
                    Company Name<span class="req">*</span>
                </label>
                <input type="text" class="w3-input" required autocomplete="off" name='companyname' placeholder="Enter Company Name" required value ="<?php echo $companyname; ?>" />
                <span class="error">* <?php echo $companynameErr; ?></span>
            </div>

            <div class="form-group">
                <label>
                    Website<span class="req">*</span>
                </label>
                <input type="text" class="w3-input" required autocomplete="off" name='website' placeholder="Enter Website" />
            </div>

            <div class="form-group">
                <label>Registration No:</label>
                <div>
                    <input type="text" class="w3-input" name="registration_no" placeholder="Enter Registration No">
                </div>
            </div>

            <div class="form-group">
                <label>
                    Email Address<span class="req">*</span>
                </label>
                <input class="w3-input" type="email" required autocomplete="off" name='email' placeholder="Enter Email Address" />
            </div>
            <div class="form-group">
                <label>address no:</label>
                <div>
                    <input class="w3-input" type="text"  name="address_no" placeholder="Enter address no " >
                </div>
            </div>
            <div class="form-group">
                <label>address line 1:</label>
                <div>
                    <input class="w3-input" type="text"  name="address_line_1" placeholder="Enter address line 1" >
                </div>
            </div>
            <div class="form-group">
                <label>address line 2:</label>
                <div>
                    <input class="w3-input" type="text"  name="address_line_2" placeholder="Enter address line 2" >
                </div>
            </div>

            <div class="form-group">
                <label>city:</label>
                <div>
                    <input class="w3-input" type="text"  name="city" placeholder="Enter city" >
                </div>
            </div>

            <div class="form-group">
                <label>Telephone No 1:</label>
                <div>
                    <input type="text" class="w3-input" name="telephone1" placeholder="Enter Telephone No" maxlength="10" required value ="<?php echo $telephone1; ?>" >
                    <span class="error">* <?php echo $telephone1Err; ?></span>

                </div>
            </div>

            <div class="form-group">
                <label>Telephone No 2:</label>
                <div>
                    <input type="text" class="w3-input" name="telephone2" placeholder="Enter Telephone No" maxlength="10" required value ="<?php echo $telephone2; ?>">
                    <span class="error">* <?php echo $telephone2Err; ?></span>
                </div>
            </div>

            <div class="form-group">
                <label>Fax:</label>
                <div>
                    <input type="text" class="w3-input" name="fax" placeholder="Enter Fax No">
                </div>
            </div>
            <div class="form-group">
                <label>
                    Set A Password<span class="req">*</span>
                </label>
                <input class="w3-input" placeholder="Enter password" type="password"required autocomplete="off" name='password'/>
            </div>

            <div class="form-group">
                <div id="button1">
                    <input class="w3-input" type="reset" name="Reset" style="color:azure; background-color: #012641;">
                </div>
                <div id="button2">
                    <input class="w3-input" type="submit" name="Submit" style="color:azure; background-color: #012641;">
                </div>
            </div>
        </form>





    </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
