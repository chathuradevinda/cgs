<script>
$(function(){

    $('#s_reg').validate({

        rules:{
            'firstName':{
                required:true,
            },
            'lastName':{
                required:true,
            },

            'nic':{
                required:true,
                maxlength:10
            },
            'dob':{
                required:true,
                date:true,
            },
            'addressNo':{
                required:true,
            },
            'addressLine_1':{
                required:true,
            },

            'city':{
                required:true,
            },
            'mobile':{
                required:true,
                number:true,
                maxlength:10,
            },

          'residence':{
              number:true,
              maxlength:10,
          },

          'email':{
            required:true,
            email:true,

          },

            'pwd':{
            required:true,
            minlength:5,
            },

        },
        messages:{

            'firstName':{
                required:'Please enter first name',
            },
            'lastName':{
                required:'Please enter last name',
            },

            'nic':{
                required:'Please enter NIC no ',
                maxlength:'Please enter the valid NIC',

            },
            'website':{
              required:'Please enter a wesite',

            },

            'addressNo':{
              required:'Please enter address no',

            },
            'addressLine_1':{
              required:'Please enter a address line 1',


            'city':{
              required:'Please enter the city',

            },
            'mobile':{
              required:'Please enter mobile no',
              number:'Please enter only numeric values',
              maxlength:'Please enter a valid telephone number',
            },

            'residence':{

              number:'Please enter only numeric values ',
              maxlength:'please enter a valid residence telephone number',

            },

            'email':{
              required:'Please enter a email',
              email:'Please enter a valid email address',

            },

            'pwd':{
              required:'Please enter your password',
              minlength:'please enter password at least 5 characters',

            },
        },
    });
});
</script>





<?php
 //var_dump($_POST);
require 'connection.php';
$conn    = Connect();


$firstName   = $conn->real_escape_string($_POST['firstName']);
$lastName   = $conn->real_escape_string($_POST['lastName']);
$nic   = $conn->real_escape_string($_POST['nic']);
$dob   = $conn->real_escape_string($_POST['dob']);
$addressNo = $conn->real_escape_string($_POST['addressNo']);
$addressLine1 = $conn->real_escape_string($_POST['addressLine_1']);
$addressLine2 = $conn->real_escape_string($_POST['addressLine_2']);
$city = $conn->real_escape_string($_POST['city']);
$mobile    = $conn->real_escape_string($_POST['mobile']);
$residence = $conn->real_escape_string($_POST['residence']);
$email = $conn->real_escape_string($_POST['email']);
$password   = $conn->real_escape_string($_POST['pwd']);


$sql_1   = "INSERT INTO user (email,hash,userCategory) VALUES('".$email."','".$password."',1)";


if ($conn->query($sql_1) === TRUE) {
    $last_id = $conn->insert_id;
    $sql_2   = "INSERT INTO student(userID,firstName,lastName,NIC,DOB,mobile,home) VALUES('".$last_id."','".$firstName."','".$lastName."','".$nic."','".$dob."','".$mobile."','".$residence."')";
    $sql_3 = "INSERT INTO user_address(userID,no,addressLine1,addressLine2,city) VALUES('".$last_id."','".$addressNo."','".$addressLine1."','".$addressLine2."','".$city."')";
    if($conn->query($sql_2) && $conn->query($sql_3) === TRUE){
        echo "Thank You For Contacting Us. Last inserted ID is: " . $last_id;
        header("Location: index.php");
    }else{
        echo "Error: " . $sql_1 . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
}



$conn->close();

?>
