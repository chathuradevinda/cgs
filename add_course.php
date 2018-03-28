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
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Add Course</a>
                    </li>
                    <li>
                        <a href="#">Search Institute</a>
                    </li>
                    <li>
                        <a href="#">Search Company</a>
                    </li>
                    <li>
                        <a href="#">Search Event</a>
                    </li>
                    <li>
                        <a href="#">Personal Development</a>
                    </li>
                </ul>
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
    <form class="form-horizontal" action="send_add_course.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="course_name">Course Name:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="course_name" placeholder="Enter Course Name">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="course_type">Course Type:</label>
            <div class="col-xs-4">
            <select class="form-control" id="course_type" name="course_type">
                    <option>-Select Course Type-</option>
                        <?php
                        $conn_1 = mysqli_connect('localhost','root','','cgs');
                        //$conn1    = Connect();
                        $sql_1 = "SELECT DISTINCT title FROM qualification";
                        $result_1 = mysqli_query($conn_1,$sql_1);
                    
                        while($row_1 = mysqli_fetch_array($result_1)){
                        echo "<option value='".$row_1['title']."'>".$row_1['title']."</option>";
                        }
                        ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="speciality">Speciality:</label>
            <div class="col-xs-4">
            <select class="form-control" id="speciality" name="speciality">
                    <option>-Select Speciality-</option>
                        <?php
                        $conn_3 = mysqli_connect('localhost','root','','cgs');
                        //$conn1    = Connect();
                        $sql_3 = "SELECT * FROM qualification";
                        $result_3 = mysqli_query($conn_3,$sql_3);
                    
                        while($row_3 = mysqli_fetch_array($result_3)){
                        echo "<option value='".$row_3['speciality']."'>".$row_3['speciality']."</option>";
                        }
                        ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="delivery_type">Delivery Type:</label>
            <div class="col-xs-4">
                <select class="form-control" id="delivery_type" name="delivery_type">
                    <option>-Select Delivery Type-</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="fee">Fee:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="fee" placeholder="Enter Fee Amount in LKR">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="duration">Course Duration:</label>
            <div class="col-xs-4">
                <select class="form-control" id="duration" name="duration">
                    <option>-Select Course Duration-</option>
                    <option value="1 Year">1 Year</option>
                    <option value="2 Year">2 Year</option>
                    <option value="3 Year">3 Year</option>
                    <option value="4 Year">4 Year</option>
                    <option value="5 Year">5 Year</option>
                    <option value="6 Year">6 Year</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="target_audience">Target Audience:</label>
            <div class="col-xs-4">
                <select class="form-control" id="target_audience" name="target_audience">
                    <option>-Select Intended Audience-</option>
                    <option value="After O/L">After O/L</option>
                    <option value="After A/L">After A/L</option>
                    <option value="Diploma Holders">Diploma Holders</option>
                    <option value="Higher Diploma Holders">Higher Diploma Holders</option>
                    <option value="Undergraduate">Undergraduate</option>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="qualification_category">Qualification Category:</label>
            <div class="col-xs-4">
                <select class="form-control" id="qualification_category" name="qualification_category">
                    <option>-Select Qualification Category-</option>
                    <option value="Educational">Educational</option>
                    <option value="Professional">Professional</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="prerequisite">Prerequisite:</label>
            <div class="col-xs-4">
            <select class="form-control" id="prerequisite" name="prerequisite">
                    <option>-Select Prerequisite-</option>
                        <?php
                        //require 'connection.php';
                        $conn    = mysqli_connect('localhost','root','','cgs');
                        $sql_2 = "SELECT * FROM qualification";
                        $result_2 = mysqli_query($conn,$sql_2);
                    
                        while($row_2 = mysqli_fetch_array($result_2)){
                        echo "<option value='".$row_2['qualificationID']."'>".$row_2['title']. " in " .$row_2['speciality']."</option>";
                        }
                        ?>
                </select>
            </div>
        </div>
    

        <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="description" placeholder="Enter Description">
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="course_content">Course Content:</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="course_content" placeholder="Enter Course Content">
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