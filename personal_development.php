
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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




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
        <li class="active"><a href="#">Personal Development</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</head>

<body>
<div>
  <div class="row">
    <div class="col-sm-4 w3-container w3-lime"><iframe height="900px" width="100%" src="personal_development_current_courses.php" name="iframe_1"></iframe></div>
    <div class="col-sm-4 w3-container w3-amber"><iframe height="900px" width="100%" src="personal_development_fields_of_interests.php" name="iframe_2"></iframe></div>
    <div class="col-sm-4 w3-container w3-lime"><iframe height="900px" width="100%" src="personal_development_related_qualifications.php" name="iframe_3"></iframe></div>
  </div>
</div>
</body>

</html>

