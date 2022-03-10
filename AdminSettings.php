<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>

    <!-- Icons font CSS-->
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
</head>




<body>
	<header>
		<nav>
			<h1>Change Password</h1>
			<ul id="navli">
				<li><a class="homeblack" href="AdminHome.php"> Home</a></li> 
				<li><a class="homeblack" href="AdminEmployee.php"> Employee</a></li> 
				<li><a class="homeblack" href="AdminProject.php"> Projects</a></li> 
				<li><a class="homeblack" href="AdminProjectStatus.php"> Project Status</a></li>
				<li><a class="homeblack" href="AdminLeave.php"> Leave</a></li>
				<li><a class="homeblack" href="AdminAdmin.php"> Add Admin</a></li> 
				<li><a class="homered" href="AdminSettings.php"> SETTINGS</a></li> 
				<li><a class="homeblack" href="AdminLogout.php"> Logout</a></li>
			</ul>
		</nav>
	</header>
		

    <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>Change Password</h1>
                        <form accept-charset="utf-8" method="post" action="AdminSettingScript.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldAdminPassword" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newAdminPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change Password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
            

            
            
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    
</body>
</html>