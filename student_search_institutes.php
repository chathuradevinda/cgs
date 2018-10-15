<?php
/*
require 'connection.php';
$conn    = Connect();
$sql_1 = "SELECT instituteName,website,email,telephone1,telephone2 FROM institute";
$result_1 = mysqli_query($conn,$sql_1);*/

include 'operations.php';
$data = new Operations;
//$post_data_1 = $data -> select('user');
$post_data_2 = $data -> select('institute');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Institute</title>
    <?php
                include('student_header.php');
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
                <th>Institute Name</th>
                <th>Website</th>

                <th>Telephone Line 1</th>
                <th>Telephone Line 2</th>
                                <th>Fax</th>


            </tr>
            <tr>
            <th>Institute Name</th>
                <th>Website</th>

                <th>Telephone Line 1</th>
                <th>Telephone Line 2</th>
                <th>Fax</th>

            </tr>
        </thead>
        <tr>
         <?php
             $where_data = array(
                 'userCategory' => 2
             );

            //  $post_data_1 = $data -> select('institute');
              //$post_data_2 = $data -> select_where('user',$where_data);
              foreach($post_data_2 as $post){
            //    foreach ($post_data_2 as $post_2) {
          ?>
                  <td><?php echo $post["instituteName"]?></td>
                  <td><?php echo $post["website"]?></td>

                  <td><?php echo $post["telephone1"]?></td>
                  <td><?php echo $post["telephone2"]?></td>
                  <td><?php echo $post["fax"]?></td>
                </tr>
           <?php
      //  }
       }
      ?>

    </table>


</body>

</html>

<?php

?>
