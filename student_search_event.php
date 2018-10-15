<?php

/*
require 'connection.php';
$conn    = Connect();
$sql_1 = "SELECT eventName,venue,date,entryFee,content FROM event";
$result_1 = mysqli_query($conn,$sql_1);*/

include 'operations.php';
$data = new Operations;
$post_data = $data -> select('event');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Event</title>

    <?php
      include_once('student_header.php');
    ?>
</head>
<br><br>
<body>
    <table id="searching_results" class="table table-striped table-bordered">
        <tfoot>


        </tfoot>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Venue</th>
                <th>Date</th>
                <th>Entry Fee</th>
                <th>Content</th>

            </tr>
            <tr>            <th>Event Name</th>
                            <th>Venue</th>
                            <th>Date</th>
                            <th>Entry Fee</th>
                            <th>Content</th>
                                    </tr>
        </thead>
                             <?php

              foreach($post_data as $post){
          ?>
              <tr>
                  <td><?php echo $post["eventName"]?></td>
                  <td><?php echo $post["venue"]?></td>
                  <td><?php echo $post["date"]?></td>
                  <td><?php echo $post["entryFee"]?></td>
                  <td><?php echo $post["content"]?></td>
              </tr>
           <?php }
          ?>

    </table>


</body>

</html>

<?php
    require_once('loader.php');
?>
