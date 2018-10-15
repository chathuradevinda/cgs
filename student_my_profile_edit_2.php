
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

              #button1,#button2,#button3{
                  display: inline-block;

              }
              #buttons{
                padding-left: 40px;
              }


          .table-repsonsive{
              width:900px;
              margin: auto;
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

          </style>

</head>
</br>
</br>
<body>
  <?php
  include('sidebar.php');
  ?>
    <div id="e_q">
    <?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=cgsu", "root", "");
function fill_unit_select_box($connect)
{
 $output = '';
 $query = "SELECT * FROM qualification WHERE qualificationCategory='Educational'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {

  $output .= '<option value="'.$row["qualificationID"].'">'.$row["title"].' in '.$row["speciality"].'</option>';
 }
 return $output;
}

?>

  <div class="container">
   <h3 align="center"><?php echo _s_Enter_Educational_Details; ?></h3>
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th><?php echo _s_Enter_Achieved_Year; ?></th>
       <th><?php echo _s_Select_Qualification; ?></th>

       <th><button type="button" name="add" class="add" style="color:azure; background-color: #012641; border:0px; font-size:20px;"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     <div align="center">
      <input type="submit" name="submit" class="w3-input" value="<?php echo _s_Insert; ?>" style="color:azure; background-color: #012641; width:100px;"/>
     </div>
    </div>
   </form>
  </div>

  <script>
$(document).ready(function(){

 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="achieved_year[]" class="w3-input w3-border achieved_year" /></td>';
  html += '<td><select name="e_qualification[]" class="w3-input w3-border e_qualification"><option value="">Select Qualification</option><?php echo fill_unit_select_box($connect); ?></select></td>';

  html += '<td align="center"><button type="button" name="remove" class="remove" style="color:azure; background-color: #012641; border:0px; font-size:20px;text-align: center;"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });

 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });

 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.achieved_year').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Achieved Year at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.e_qualification').each(function(){
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
    url:"insert_education.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Qualification Details Saved</div>');
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
