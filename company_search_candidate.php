<?php
//require 'connection.php';
//$conn    = Connect();
//$sql_1 = "SELECT title,minimum_qualification,salary,skills_required FROM vacancy";
//$result_1 = mysqli_query($conn,$sql_1);
include 'operations.php';
$data = new Operations;
$post_data_1 = $data -> select('student');
//$post_data_1 = $data -> select_where('Student');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Vacancy</title>
    <?php
    include_once('company_header.php');
    require_once('loader.php');

    ?>
</head>
<br><br><br>
<body>
    <table id="searching_results" class="table table-striped table-bordered">
        <tfoot>


        </tfoot>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>DOB</th>
                <th>Skills</th>
                <th>Highest Qualification</th>
            </tr>
            <tr>
              <th>Student Name</th>
              <th>DOB</th>
              <th>Skills</th>
              <th>Highest Qualification</th>
            </tr>
        </thead>
         <?php

            foreach($post_data_1 as $post){
        ?>
            <tr>
                <td><?php echo $post["firstName"]." ".$post["lastName"]?></td>
                <td><?php echo $post["lastName"]?></td>
                <td><?php echo $post["DOB"]?></td>
                <td><?php echo $post["mobile"]?></td>
            </tr>
         <?php }
        ?>

    </table>


</body>

</html>
