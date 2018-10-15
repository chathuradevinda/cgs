<html>
    <head>
        <title>
            Add Event
        </title>

<?php
include "company_header.php";?>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"> </script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"> </script>
<script src="assets/jquery/jquery-1.11.2.js"> </script>
<script src="assets/jquery/jquery.validate.min.js"> </script>
<script src="assets/jquery/jquery-3.2.1.js"></script>
<script src="assets/jquery/jquery.validate.js"></script>
<script src="assets/jquery/c_add_event.js"></script>
<script src="assets/jquery/c_add_vacancy.js"></script>

<?php
include 'operations.php';
$data = new Operations;
 $success_message = '';



 if(isset($_POST["submit"]))
 {
      $insert_data_1 = array(
        'eventName' => mysqli_real_escape_string($data->conn, $_POST['eventName']),
        'date' => mysqli_real_escape_string($data->conn, $_POST['date']),
        'startTime' => mysqli_real_escape_string($data->conn, $_POST['startTime']),
        'endTime' => mysqli_real_escape_string($data->conn, $_POST['endTime']),
        'venue' => mysqli_real_escape_string($data->conn, $_POST['venue']),
        'entryFee' => mysqli_real_escape_string($data->conn, $_POST['entryFee']),
        'content' => mysqli_real_escape_string($data->conn, $_POST['content']),
        'details' => mysqli_real_escape_string($data->conn, $_POST['details']),
      );


      if($data->insert('event', $insert_data_1)){
        $eventid = '';
          $sql = "SELECT max(eventID) AS eventID FROM event ";
        //  echo $sql;
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result)){
            $eventid = $row['eventID'];
          }
          $insert_data_2 = array(
            'eventID' => $eventid,
            'person1' => mysqli_real_escape_string($data->conn, $_POST['resourse_person_1']),
            'person2' => mysqli_real_escape_string($data->conn, $_POST['resourse_person_2'])
          );
          if($data->insert('event_resourceperson', $insert_data_2)){
            $insert_data_3 = array(
              'userID' => $company_userID,
              'eventID' => $eventid
            );

            if($data->insert('event_company', $insert_data_3)){
               $success_message = "Inserted successfully!";
            }
              //$success_message = "Something went wrong! Please try again later!";
          }
        //    $success_message = 'Something went wrong! Please try again later.';
      }
 }

if(isset($_POST["edit"])){
     $update_data_1 = array(
       'event_name' => mysqli_real_escape_string($data->conn, $_POST['eventName']),
       'date' => mysqli_real_escape_string($data->conn, $_POST['date']),
       'sTime' => mysqli_real_escape_string($data->conn, $_POST['startTime']),
       'eTime' => mysqli_real_escape_string($data->conn, $_POST['endTime']),
       'venue' => mysqli_real_escape_string($data->conn, $_POST['venue']),
       'fee' => mysqli_real_escape_string($data->conn, $_POST['entryFee']),
       'content' => mysqli_real_escape_string($data->conn, $_POST['content']),
       'details' => mysqli_real_escape_string($data->conn, $_POST['detials']),
);

$update_data_2 = array(
  'event_name' => mysqli_real_escape_string($data->conn, $_POST['eventName']),
  'date' => mysqli_real_escape_string($data->conn, $_POST['date']),
  'sTime' => mysqli_real_escape_string($data->conn, $_POST['startTime']),
  'eTime' => mysqli_real_escape_string($data->conn, $_POST['endTime']),
  'venue' => mysqli_real_escape_string($data->conn, $_POST['venue']),
  'fee' => mysqli_real_escape_string($data->conn, $_POST['entryFee']),
  'content' => mysqli_real_escape_string($data->conn, $_POST['content']),
  'details' => mysqli_real_escape_string($data->conn, $_POST['details']),
);
     $where_condition = array(
        'eventID' => $_POST['eventID']
    );

     if($data->update("event",$update_data,$where_condition)){
        header("location:company_add_event.php?updated=1");
     }
}

if(isset($_GET["updated"])){
    $success_message = "Details Updated";
}
?>
<


    <body>

      <br>

 <div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 60%;" id="left_section">
     <form method="post" id="c_add_event">
        <?php
        if(isset($_GET["edit"])){
            if(isset($_GET["vacancyID"])){
                $where= array(
                    'eventID' => $_GET["eventID"]
                );
                $single_data = $data -> select_where("event",$where);
                foreach ($single_data as $post) {?>
                  <label>Event Title</label>
                  <input type="text" name="eventName" value="<?php echo $post["eventName"]; ?>" class="form-control" >
                  </br>
                  <label>Date</label>
                  <input type="date" name="date" value="<?php echo $post["date"]; ?>" class="form-control" >
                  </br>
                  <label>Start Time</label>
                  <input type="time" name="startTime" value="<?php echo $post["startTime"]; ?>" class="form-control" >
                  </br>
                  <label>End Time</label>
                  <input type="time" name="endTime" value="<?php echo $post["endTime"]; ?>" class="form-control" >
                  </br>
                  <label>Event Venue</label>
                  <input type="text" name="venue" value="<?php echo $post["venue"]; ?>" class="form-control" >
                  </br>
                  <label>Fee</label>
                  <input type="text" name="entryFee" value="<?php echo $post["entryFee"]; ?>" class="form-control" >
                  </br>
                  <label>Content</label>
                  <input type="text" name="content" value="<?php echo $post["content"]; ?>" class="form-control" >
                  </br>
                  <label>Details</label>
                  <input type="text" name="detials" value="<?php echo $post["detials"]; ?>" class="form-control" >
                  </br>
                  <label>Resource Person #1</label>
                  <input type="text" name="resourse_person_1" value="<?php echo $post["resourse_person_1"]; ?>" class="form-control" >
                  </br>
                  <label>Resource Person #2</label>
                  <input type="text" name="resourse_person_2" value="<?php echo $post["resourse_person_2"]; ?>" class="form-control" >
                  </br>
<!--
                <label> skills</label>
                <input type="text" name="com_id" value="<?php echo $post["userID"]; ?>" class="form-control">
              </br>-->
                     <input type="hidden" name="vacancyID" value="<?php echo $post["vacancyID"];  ?>">
                     <input type="submit" name="edit" value="Edit">
         <?php
                }
            }
        }else{


        ?>
        <br>
<div class="inputform"  id="c_add_event">
  <label>Title</label>
   <input type="text" name="eventName" class="w3-input"  placeholder="Enter qualification title">
   </br>
  <label>Date</label>
   <input type="date" name="date" class="w3-input" placeholder="Enter job description">
   </br>
  <label>Start Time</label>
   <input type="time" name="startTime" class="w3-input" placeholder="Enter minimum qualification">
   </br>
  <label>End Time</label>
   <input type="time" name="endTime" class="w3-input" placeholder="Enter salary amount">
   </br>
  <label>Venue</label>
   <input type="text" name="venue" class="w3-input" placeholder="Enter event venue">
   </br>
  <label>Entry Fee</label>
   <input type="text" name="entryFee" class="w3-input" placeholder="Enter entry fee amount">
   </br>
  <label>Event Content</label>
   <input type="text" name="content" class="w3-input" placeholder="Enter event content">
   </br>
  <label>Details</label>
   <input type="text" name="details" class="w3-input" placeholder="Enter event details">
   </br>
  <label>Resource Person #1</label>
   <input type="text" name="resourse_person_1" class="w3-input" placeholder="Enter Resourse Person No.1">
   </br>
  <label>Resource Person #2</label>
   <input type="text" name="resourse_person_2" class="w3-input" placeholder="Enter Resourse Person No.2">
   </br>

<!--
   <label>ID</label>
    <input type="text" name="com_id" class="w3-input" placeholder="Enter skill description">
  </br>-->
   <input type="submit" name="submit" value="Submit" class="w3-button"/>
</div>
        <?php
            }
        ?>
                             <span class="text-success">
                     <?php
                     if(isset($success_message))
                     {
                          echo $success_message;
                     }
                     ?>
                     </span>
     </form>




 </div>

<div class="w3-panel w3-col s4 w3-border w3-hover-border-blue" style="width: 40%;" id="right_section">
  <h4><?php echo _s_Our_Events; ?></h4>
  <table class="w3-table-all w3-hoverable">
              <thead>
                  <tr>
                      <th><?php echo _s_Event_Name; ?></th>
                      <th><?php echo _s_Date; ?></th>
                      <th><?php echo _s_Venue; ?></th>
                      <th><?php echo _s_Edit; ?></th>
                  </tr>
              </thead>
              <tbody>
                      <?php
                          $post_data = $data -> select('event');
                          //print_r($post_data);
                          foreach($post_data as $post){
                              ?>
                              <tr>
                                  <td><?php
                                  echo $post["eventName"];
                                  ?></td>
                                  <td><?php
                                  echo $post["date"];
                                  ?></td>
                                  <td><?php
                                  echo $post["venue"];
                                  ?></td>
                                  <td><a href="company_add_event.php?edit=1&eventID=<?php echo $post["eventID"]; ?>"><?php echo _s_Edit; ?></a></td>


                              </tr>
                          <?php
                          }
                          ?>

              </tbody>
          </table>
</div>


    </body>
</html>
