
<!DOCTYPE html>
<html>

    <head>
        <title>Welcome Student</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SkillPoint</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" ;>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Search Qualifications <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Educational Qualification</a></li>
            <li><a href="#">Professional Qualification</a></li>
          </ul>
        </li>
        <li><a href="#">Search Institute</a></li>
        <li><a href="#">Search Company</a></li>
        <li><a href="#">Search Event</a></li>
        <li><a href="#">Personal Development</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<style>

/*
 * Sidebar
 */

.table-repsonsive{
    width:900px;
    margin: auto;
}
#e_q{
    position: sticky;
    padding-left:230px;
    width:1000px;
} 
.container{
    position: sticky;
    padding-left:100px;
    width:900px;
    margin: auto;
}
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 0;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 48px; /* Height of navbar */
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {

  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {

  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {


  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }
</style>
</head>

<body>
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#">
                  <span data-feather="home"></span>
                  My Profile<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="my_profile_edit_0.php">
                  <span data-feather="file"></span>
                  Edit Personal Details
                </a>
              </li>
              <li class="nav-item">
                <a href="my_profile_edit_1.php" >
                  <span data-feather="shopping-cart"></span>
                  My Path
                </a>
              </li>
              <li class="nav-item">
                <a href="my_profile_edit_2.php" >
                  <span data-feather="shopping-cart"></span>
                  Education Qualifications
                </a>
              </li>
              <li class="nav-item">
                <a  class="nav-link active" href="my_profile_edit_3.php">
                  <span data-feather="users"></span>
                  Professional Qualifications
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Soft Skills
                </a>
              </li>
            </ul>
          </div>
        </nav>

    <div id="e_q">
    <?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=cgs", "root", "");
function fill_unit_select_box($connect)
{
 $output = '';
 $query = "SELECT * FROM qualification WHERE qualificationCategory='Professional'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {

     $output .= '<option value="'.$row["qualificationID"].'">'.$row["title"].'</option>';

     
  //$output .= '<option value="'.$row["qualificationID"].'">'.$row["title"].'</option>';
 }
 return $output;
}

?>

  <div class="container">
   <h4 align="center">Enter Professional Details</h4>
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Enter Achieved Year</th>
       <th>Select Qualification</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Insert" />
     </div>
    </div>
   </form>
  </div>

  <script>
$(document).ready(function(){

 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="achieved_year[]" class="form-control achieved_year" /></td>';
  html += '<td><select name="e_qualification[]" class="form-control e_qualification"><option value="">Select Qualification</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
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

<div id="p_q">


</div>

    </body>

</html>

<script>
function edu_open(){
    
    document.getElementById("e_q").style.display = "block";
    location.reload(true);
}

function edu_close(){
    document.getElementById("e_q").style.display = "none";
}

function prof_open(){
    document.getElementById("p_q").style.display = "block";
}

function prof_close(){
    document.getElementById("p_q").style.display = "none";
}
</script>