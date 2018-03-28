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
        <li class="active"><a href="#">Search Qualifications</a></li>
        <li><a href="#">Search Institute</a></li>
        <li><a href="#">Search Company</a></li>
        <li><a href="#">Search Event</a></li>
        <li><a href="#">Personal Development</a></li>
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

<?php
    // header('Content-type:application/json');
    $conn1 = mysqli_connect('localhost','root','','cgs');
    //mysql_connect('localhost','root','') or die(mysql_error());

    //mysql_select_db('cgs');

    $sql_1 = 'SELECT * FROM qualification';
    $result_1 = mysqli_query($conn1,$sql_1);

    $rows = array();

    while($row_1 = mysqli_fetch_assoc($result_1)){
        $rows[]=$row_1; 
        //$rows[]=array('Message ID'=>$row_1['message_id']); 
        
        }


    //while($row=mysql_fetch_array($select)){
        //$rows[]=$row; 
        
    //}
    echo '<pre>';
    print_r($rows);
    echo '<pre>';
?>

</body>
</html>