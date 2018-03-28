

<!DOCTYPE html>
<html>

    <head>
        <title>Welcome Student</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
      <a class="navbar-brand" href="#">SkillPoint</a>
    </div>

    </div>
  </div>
</nav>
</head>

    <body>
    <div class="container">
      <div class="form-group">
        <form name="ad_qualification" id="ad_qualification">
          <div id="education">
            <h2>Education Qualification</h2>
              <table class="table table-bordered" id="dynamic_field_e">
                <tr>
                  <td><input type="text" class="form-control name_list" name="e_qualification[]" id="e_qualification" placeholder="Enter Education Qualification"/></td>
                  <td><button type="button" name="add_e" id="add_e" class="btn btn-success">Add More</button></td>
                </tr>
              </table>
          </div>

          <div id="professional">
            <h2>Professional Qualification</h2>
              <table class="table table-bordered" id="dynamic_field_p">
                <tr>
                  <td><input type="text" class="form-control name_list" name="p_qualification[]" id="p_qualification" placeholder="Enter Professional Qualification"/></td>
                  <td><button type="button" name="add_p" id="add_p" class="btn btn-success">Add More</button></td>
                </tr>
              </table>
          </div>

          <div id="softskills">
            <h2>Soft Skills</h2>
              <table class="table table-bordered" id="dynamic_field_s">
                <tr>
                  <td><input type="text" class="form-control name_list" name="soft_skills[]" id="soft_skills" placeholder="Enter Soft Skill"/></td>
                  <td><button type="button" name="add_s" id="add_s" class="btn btn-success">Add More</button></td>
                </tr>
              </table>
          </div>

          <input type="button" class="btn btn-default" id="submit" name="submit" value="Submit"/>
        </form> 
      </div>
      </div>
    </body>
</html>

<script>
 $(document).ready(function(){  
      var i=1;
      var j=1;
      var k=1;

      $('#add_e').click(function(){  
           i++;  
           $('#dynamic_field_e').append('<tr id="row'+i+'"><td><input type="text" name="e_qualification[]" placeholder="Enter Education Qualification" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });



      $('#add_p').click(function(){  
           j++;  
           $('#dynamic_field_p').append('<tr id="row'+j+'"><td><input type="text" name="p_qualification[]" placeholder="Enter Professional Qualification" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });


      $('#add_s').click(function(){  
           k++;  
           $('#dynamic_field_s').append('<tr id="row'+k+'"><td><input type="text" name="soft_skills[]" placeholder="Enter Soft Skills" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });



      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#ad_qualification').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#ad_qualification')[0].reset();  
                }  
           });  
      });  
 });
</script> 