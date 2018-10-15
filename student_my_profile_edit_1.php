
<!DOCTYPE html>
<html>

    <head>
      <title>Welcome Student</title>
      <?php
      include 'student_header.php';
      ?>
              <style>
              #formdiv1{
                  margin: auto;
                  padding-left: 20px;
              }
              #buttons{
                /*padding-left: 60px;*/
                float:right;
                padding-bottom: 20px;
                padding-right: 20px;
              }
              #button1,#button2,#button3{
                display: inline-block;
              }
             </style>


</head>
</br>
</br>
<body>
  <?php
  include('sidebar.php');
  ?>

    <div id="m_p">
      <div class="w3-col w3-container" style="width:84.8%;margin-left:230px;">
        <div class="w3-card-4" style="width:100%" id="formdiv1">
        </br>
        <form class="w3-container" style="height:90vh;"action="student_path_send.php" method="POST">
            <label>Select preferred path 1:</label>

            <select class="w3-select"  name="preferred_path_1">
                    <option value="1">-Select your preferred path-</option>
                        <?php
                        $conn_1 = mysqli_connect('localhost','root','','cgsu');
                        //$conn1    = Connect();
                        $sql_1 = "SELECT DISTINCT speciality FROM qualification";
                        $result_1 = mysqli_query($conn_1,$sql_1);

                        while($row_1 = mysqli_fetch_array($result_1)){
                        echo "<option value='".$row_1['speciality']."'>".$row_1['speciality']."</option>";
                        }
                        ?>
                </select>
              </br>
              </br>
              </br>
          <div class="form-group">
            <label>Select preferred path 2:</label>

            <select class="w3-select" name="preferred_path_2">
                    <option value="2">-Select your preferred path-</option>
                        <?php
                        $conn_2 = mysqli_connect('localhost','root','','cgsu');
                        //$conn1    = Connect();
                        $sql_2 = "SELECT DISTINCT speciality FROM qualification";
                        $result_2 = mysqli_query($conn_2,$sql_2);

                        while($row_2 = mysqli_fetch_array($result_2)){
                        echo "<option value='".$row_2['speciality']."'>".$row_2['speciality']."</option>";
                        }
                        ?>
                </select>
        </div>

      </br>
      </br>
        <div class="form-group">
            <label>Select preferred path 3:</label>

            <select class="w3-select" name="preferred_path_3">
                    <option value="3">-Select your preferred path-</option>
                        <?php
                        $conn_3 = mysqli_connect('localhost','root','','cgsu');
                        //$conn1    = Connect();
                        $sql_3 = "SELECT DISTINCT speciality FROM qualification";
                        $result_3 = mysqli_query($conn_3,$sql_3);

                        while($row_3 = mysqli_fetch_array($result_3)){
                        echo "<option value='".$row_3['speciality']."'>".$row_3['speciality']."</option>";
                        }
                        ?>
                </select>

        </div>
      </br>
      </br>
      </br>



        <div class="form-group">
<div id="buttons">
  <div id="button1">
        <input class="w3-input" type="reset" name="Reset" value="Reset" style="color:azure; background-color: #012641;">
  </div>
  <div id="button2">
        <input class="w3-input" type="submit" name="Save" value="Submit" style="color:azure; background-color: #012641;">
  </div>
</div>

        </div>

    </form>
  </div>


  </body>
</div>
</div>
</html>

</script>
