<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">        
    <!--<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">  
    
    <link rel="stylesheet" type="text/css" href="styleview.css">
</head>





<body>
	<header>
		<nav>
			<h1>Change Password</h1>
			<ul id="navli">
				<li><a class="homeblack" href="EmployeeHome.php"> Home</a></li> 
				<li><a class="homeblack" href="EmployeeProject.php"> Projects</a></li> 
				<li><a class="homeblack" href="EmployeeLeave.php"> Apply</a></li>
				<li><a class="homeblack" href="EmployeeLeaveList.php"> My Leave</a></li>                                 
				<li><a class="homered" href="EmployeeSetting.php"> SETTINGS</a></li> 
				<li><a class="homeblack" href="EmployeeLogout.php"> Logout</a></li>
			</ul>
		</nav>
	</header>
		

    
    <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <form method="post" action="EmployeeSettingScript.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldEmpPassword" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newEmpPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
            
            
	
</body>
</html>