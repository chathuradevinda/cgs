<?php
require 'connection.php';
$conn    = Connect();
$sql_1 = "SELECT courseID,courseName,courseType,qualificationCategory,targetAudience,speciality,fee,deliveryType FROM course";
$result_1 = mysqli_query($conn,$sql_1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Student</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                
            <script src="https://code.jquery.com/jquery-1.12.4.js "></script>     
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" /> 
 
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
                        <a href="#">Search Course</a>
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
</head>

<body>
    <table id="searching_results" class="table table-striped table-bordered">
        <tfoot>
            

        </tfoot>
        <thead>
            <tr>
                <th>Qualification</th>
                <th>Course Type</th>
                <th>Speciality</th>
                <th>Offered For</th>
                <th>Fee</th>
                <th>Delivery Mode</th>
                <th>Details</th>
            </tr>
            <tr>
            <th>Qualification</th>
                <th>Course Type</th>
                <th>Speciality</th>
                <th>Offered For</th>
                <th>Fee</th>
                <th>Delivery Mode</th>
                <th>Details</th>
            </tr>
        </thead>

            <?php
                while($row_1 = mysqli_fetch_array($result_1)){
                    echo'
                    <tr>
                        <td>'.$row_1["courseName"].'</td>
                        <td>'.$row_1["courseType"].'</td>
                        <td>'.$row_1["speciality"].'</td>
                        <td>'.$row_1["targetAudience"].'</td>
                        <td>'.$row_1["fee"].'</td>
                        <td>'.$row_1["deliveryType"].'</td>
                        <td><a href="view_course_details.php?id='.$row_1["courseID"].'">More Details</a></td>
                    </tr>';
                }
                    ?>

    </table>


</body>

</html>

    <script>


    $(document).ready(function() {
    $('#searching_results').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.header()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );


    </script>