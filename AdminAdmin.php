<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Admin</title>
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
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">        
    <!--<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>
	<header>
		<nav>
			<h1>Register New Admin</h1>
			<ul id="navli">
				<li><a class="homeblack" href="AdminHome.php"> Home</a></li> 
				<li><a class="homeblack" href="AdminEmployee.php"> Employee</a></li> 
				<li><a class="homeblack" href="AdminProject.php"> Projects</a></li>
				<li><a class="homeblack" href="AdminProjectStatus.php"> Project Status</a></li>
				<li><a class="homeblack" href="AdminLeave.php"> Leave</a></li>
				<li><a class="homered" href="AdminAdmin.php"> ADD ADMIN</a></li> 
				<li><a class="homeblack" href="AdminSettings.php"> Settings</a></li> 
				<li><a class="homeblack" href="AdminLogout.php"> Logout</a></li> 
			</ul>
		</nav>
	</header>
		

    
    
    
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Admin Information</h2>
                    <form action="AdminAdminScript.php" method="POST" enctype="multipart/form-data">

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                 <input class="input--style-1" type="text" placeholder="Name" name="AdminName" required="required">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                 <input class="input--style-1" type="text" placeholder="Admin Email" name="AdminEmail" required="required">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                 <input class="input--style-1" type="text" placeholder="H/P" name="AdminHP">
                            </div>
                        </div>     
                        <div class="col-2">
                            <div class="input-group">
                                 <input class="input--style-1" type="password" placeholder="Set Password (minimum six digit)" name="AdminPassword" required="required">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                 <input class="input--style-1" type="password" placeholder="Retype Password" name="password_2" required="required">
                            </div>
                        </div>                        
                    </div>

                <div class="p-t-20">
                    <button class="btn btn--radius btn--green" type="submit" name="reg_user">Submit</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>

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