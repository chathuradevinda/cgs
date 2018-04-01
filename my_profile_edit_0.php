
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
#p_i{
    position: sticky;
    padding-left:400px;
    width:1600px;
} 
.container{
    position: sticky;
    padding-left:300px;
    width:1200px;
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
                <a  class="nav-link active" href="my_profile_edit_0.php">
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
                <a href="my_profile_edit_3.php">
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

    <div id="p_i">
        
<form class="form-horizontal" action="student_registration.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="first_name">First Name:</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="last_name">Last Name:</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="nic">NIC:</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="nic" placeholder="Enter NIC No">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
        <div class="col-xs-4">
          <input type="date" class="form-control" name="dob" placeholder="Select Date of Birth">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="address_no">Address No:</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="address_no" placeholder="Enter Address No">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="address_line_1">Line 1:</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="address_line_1" placeholder="Enter Address Line 1">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="address_line_2">Line 2:</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="address_line_2" placeholder="Enter Address Line 2">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="city">City:</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="city" placeholder="Enter City">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="mobile">Mobile No:</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="residence">Residence Telephone No:</label>
        <div class="col-xs-4">
          <input type="text" class="form-control" name="residence" placeholder="Enter Residence Telephone No">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email Address:</label>
        <div class="col-xs-4">
          <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
        </div>
      </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-xs-4"> 
        <input type="password" class="form-control" name="pwd" placeholder="Enter password">
      </div>
    </div>

    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" name="Submit">
      </div>
    </div>
  </form>
        
    </body>

</html>

</script>