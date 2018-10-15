<?php
//require 'connection.php';
//$conn    = Connect();
//$sql_1 = "SELECT title,minimum_qualification,salary,skills_required FROM vacancy";
//$result_1 = mysqli_query($conn,$sql_1);
include 'operations.php';
$data = new Operations;
$post_data = $data -> select('vacancy');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Vacancy</title>
    <?php
    include_once('student_header.php');
    require_once('loader.php');

    ?>
</head>
<br><br>
<body>
    <table id="searching_results" class="table table-striped table-bordered">
        <tfoot>


        </tfoot>
        <thead>
            <tr>
                <th>Title</th>
                <th>Minimum Qualification</th>
                <th>Approximate Salary</th>
                <th>Required Skills</th>
            </tr>
            <tr>
              <th>Title</th>
              <th>Minimum Qualification</th>
              <th>Approximate Salary</th>
              <th>Required Skills</th>
            </tr>
        </thead>
         <?php

            foreach($post_data as $post){
        ?>
            <tr>
                <td><?php echo $post["title"]?></td>
                <td><?php echo $post["minimum_qualification"]?></td>
                <td><?php echo $post["salary"]?></td>
                <td><?php echo $post["skills_required"]?></td>
            </tr>
         <?php }
        ?>

    </table>


</body>

</html>
