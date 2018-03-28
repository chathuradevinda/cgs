<!DOCTYPE html>
<html>

<head>
    <title>Welcome Institute</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="#">My Profile</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar" ;>
                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-user"></span> My Profile</a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   <h3 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Details</h3>
   <form class="form-horizontal" action="send_add_course.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">First Name:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="first_name" >
            </div>
        </div>
		
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="last_name">Last Name:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="last_name" >
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="last_name">DOB:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="last_name" >
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="nic">NIC:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="nic" >
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="mobile">Mobile:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="mobile" >
            </div>
        </div>
		
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="residence">Residence:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="residence" >
            </div>
        </div>
		
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="email" >
            </div>
        </div>
        
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="address" >
            </div>
        </div>
		
		<div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
			<input type="reset" class="btn btn-default" value="Edit" />
                <input type="submit" class="btn btn-default" name="Submit" value="save">
            </div>
			</div>
		</form>
		 <h3 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Qualification</h3>
		
		<form class="form-horizontal" action="send_add_course.php" method="POST">
		
		
		
       
	   
	   <div class="form-group">
            <label class="control-label col-sm-2" for="education">Education:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="education" >
				<input type="text" class="form-control" name="education" >
				<input type="text" class="form-control" name="education" >
				<input type="text" class="form-control" name="education" >
																				
			</div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="professonal">Professonal:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="Professonal" >
				<input type="text" class="form-control" name="Professonal" >
				<input type="text" class="form-control" name="Professonal" >
				<input type="text" class="form-control" name="Professonal" >
																				
			</div>
        </div>
		
	  
		
		<div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
			<input type="reset" class="btn btn-default" value="Edit Qualification" />
                <input type="submit" class="btn btn-default" name="Submit" value="Save Qualification">
            </div>
			</div>


        
    </form>
	
	 <h3 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Skills</h3>
	 <form class="form-horizontal" action="send_add_course.php" method="POST">
		
		
		
       
	   
	   <div class="form-group">
            <label class="control-label col-sm-2" for="communiction_skill">Communication Skills:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="communiction_skill" >
				
																				
			</div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-sm-2" for="team_work">Team Work:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="team_work" >
				
																				
			</div>
        </div>
		
	  
		
		<div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
			<input type="reset" class="btn btn-default" value="Upgrade Skills" />
                <input type="submit" class="btn btn-default" name="Submit" value="Add Skills">
            </div>
			</div>


        
    </form>

</body>

</html>