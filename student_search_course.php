<?php
/*
require 'connection.php';
$conn    = Connect();
$sql_1 = "SELECT courseID,courseName,courseType,qualificationCategory,targetAudience,speciality,fee,deliveryType FROM course";
$result_1 = mysqli_query($conn,$sql_1);*/

include 'operations.php';
$data = new Operations;
$post_data = $data -> select('course');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Student</title>
        <?php
                include('student_header.php');
                require_once('loader.php');
            ?>
</head>

<body>

</br>


</br>
    <table id="searching_results" class="table table-striped table-bordered">
        <tfoot>


        </tfoot>
        <thead>
            <tr>
                <th>Qualification</th>
                <th>Course Type</th>
                <th>Speciality</th>
                <th>Offered For</th>
                <th>Fee</th>
                <th>Delivery Mode</th>
                <th>Details</th>
            </tr>
            <tr>
            <th>Qualification</th>
                <th>Course Type</th>
                <th>Speciality</th>
                <th>Offered For</th>
                <th>Fee</th>
                <th>Delivery Mode</th>
                <th>Details</th>
            </tr>
        </thead>


   <?php

              foreach($post_data as $post){
          ?>
              <tr>
                  <td><?php echo $post["courseName"]?></td>
                  <td><?php echo $post["courseType"]?></td>
                  <td><?php echo $post["speciality"]?></td>
                  <td><?php echo $post["targetAudience"]?></td>
                  <td><?php echo $post["fee"]?></td>
                  <td><?php echo $post["deliveryType"]?></td>
                  <td><a href="view_course_details.php?id=<?php echo $post["courseID"]?>">More Details</a></td>
              </tr>
           <?php }
          ?>

    </table>


</body>

</html>
