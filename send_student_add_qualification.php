<?php  
 $connect = mysqli_connect("localhost", "root", "", "cgs");  
 $e_count = count($_POST["e_qualification"]);
 $p_count = count($_POST["p_qualification"]);
 $s_count = count($_POST["soft_skills"]);  
 $student_ID = 22;

 if($e_count > 0)  
 {  
      for($i=0; $i<$e_count; $i++)  
      {  
           if(trim($_POST["e_qualification"][$i] != ''))  
           {  
                $sql_1 = "INSERT INTO student_qualification(qualificationID,studentID) VALUES('".mysqli_real_escape_string($connect, $_POST["e_qualification"][$i])."','".$student_ID."')";  
                mysqli_query($connect, $sql_1);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 } 
 
 
 if($p_count > 0)  
 {  
      for($i=0; $i<$p_count; $i++)  
      {  
           if(trim($_POST["p_qualification"][$i] != ''))  
           {  
                $sql_2 = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                mysqli_query($connect, $sql_2);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }


 if($s_count > 0)  
 {  
      for($i=0; $i<$s_count; $i++)  
      {  
           if(trim($_POST["soft_skills"][$i] != ''))  
           {  
                $sql_3 = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                mysqli_query($connect, $sql_3);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }
 ?> 