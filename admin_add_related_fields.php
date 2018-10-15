<html>
<?php

include "admin_header.php";

 ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  a:hover {
  text-decoration: none;
}
</style>
<body id="myPage">

<style>

#button1,#button2,#button3{
    display: inline-block;

}

#buttons{
  padding-left: 40px;
}



#formdiv1{
    margin: auto;
    padding-left: 20px;
}

.table-repsonsive{
    width:900px;

}

#e_q{
  margin: 50px;
    position: relative;
    padding-left:230px;
    width:1000px;
}
th{
  text-align: center;
  padding-top: 5px;

}

h4{

}
/*
html,body{
  background-color:#e9f5ff;
}

.container{
  background-color:#e9f5ff;
}*/
</style>
</head>

<body>
              <div id="e_q">
              <?php
              //index.php

              $connect = new PDO("mysql:host=localhost;dbname=cgsu", "root", "");
              function fill_unit_select_box($connect)
              {
              $output = '';
              $query = "SELECT * FROM qualification";
              $statement = $connect->prepare($query);
              $statement->execute();
              $result = $statement->fetchAll();
              foreach($result as $row)
              {

              $output .= '<option value="'.$row["qualificationID"].'">'.$row["title"].' in '.$row["speciality"].'</option>';
              }
              return $output;
              }

              $connect_2 = new PDO("mysql:host=localhost;dbname=cgsu", "root", "");
              function fill_unit_select_box_2($connect_2)
              {
              $output_2 = '';
              $query_2 = "SELECT * FROM qualification WHERE qualificationCategory='Educational'";
              $statement_2 = $connect_2->prepare($query_2);
              $statement_2->execute();
              $result_2 = $statement_2->fetchAll();
              foreach($result_2 as $row_2)
              {

              $output_2 .= '<option value="'.$row_2["speciality"].'">'.$row_2["speciality"].'</option>';
              }
              return $output_2;
              }

              ?>

              <div class="container">

              <form method="post" id="insert_form">
              <div class="table-repsonsive">
               <span id="error"></span>
               <table class="table table-bordered" id="item_table">
                <tr>
                 <th><h5><b>Qualification</b></h5></th>
                 <th><h5><b>Related Field</b></h5></th>
                 <th><button type="button" name="add" class="add" style="color:azure; background-color: #012641; border:0px; font-size:20px;"><span class="glyphicon glyphicon-plus"></span></button></th>
                </tr>
               </table>
               <div align="center">
                <input type="submit" name="submit" class="w3-input" value="Insert" style="color:azure; background-color: #012641; width:100px;"/>
               </div>
              </div>
              </form>
              </div>

              <script>
              $(document).ready(function(){

              $(document).on('click', '.add', function(){
              var html = '';
              html += '<tr>';
              html += '<td><select name="e_qualification[]" class="form-control e_qualification"><option value="">Select Qualification</option><?php echo fill_unit_select_box($connect); ?></select></td>';
              html += '<td><select name="speciality[]" class="form-control speciality"><option value="">Select Speciality</option><?php echo fill_unit_select_box_2($connect_2); ?></select></td>';
              html += '<td align="center"><button type="button" name="remove" class="remove" style="color:azure; background-color: #012641; border:0px; font-size:20px;text-align: center;"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
              $('#item_table').append(html);
              });

              $(document).on('click', '.remove', function(){
              $(this).closest('tr').remove();
              });

              $('#insert_form').on('submit', function(event){
              event.preventDefault();
              var error = '';

              $('.e_qualification').each(function(){
              var count = 1;
              if($(this).val() == '')
              {
              error += "<p>Select Qualification at "+count+" Row</p>";
              return false;
              }
              count = count + 1;
              });

              $('.speciality').each(function(){
              var count = 1;
              if($(this).val() == '')
              {
              error += "<p>Select Qualification at "+count+" Row</p>";
              return false;
              }
              count = count + 1;
              });

              var form_data = $(this).serialize();
              if(error == '')
              {
              $.ajax({
              url:"admin_add_related_fields_send.php",
              method:"POST",
              data:form_data,
              success:function(data)
              {
               if(data == 'ok')
               {
                $('#item_table').find("tr:gt(0)").remove();
                $('#error').html('<div class="alert alert-success">Details Saved</div>');
               }
              }
              });
              }
              else
              {
              $('#error').html('<div class="alert alert-danger">'+error+'</div>');
              }
              });

              });
              </script>
              </div>
</body>

</html>
