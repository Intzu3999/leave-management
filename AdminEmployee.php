<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
   

    <!-- Title Page-->
    <title>Add Employee</title>

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
</head><!-- comment -->





<body>
	<header>
		<nav>
			<h1>Employee Information</h1>
			<ul id="navli">
				<li><a class="homeblack" href="AdminHome.php"> Home</a></li> 
				<li><a class="homered" href="AdminEmployee.php"> EMPLOYEE</a></li> 
				<li><a class="homeblack" href="AdminProject.php"> Projects</a></li> 
				<li><a class="homeblack" href="AdminProjectStatus.php"> Project Status</a></li>
				<li><a class="homeblack" href="AdminLeave.php"> Leave</a></li>
				<li><a class="homeblack" href="AdminAdmin.php"> Add Admin</a></li> 
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
                    <h2 class="title">Registration Info</h2>
                    <form action="AdminEmployeeScript.php" method="POST" enctype="multipart/form-data">


                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="Name" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="email" placeholder="Email" name="Email" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="HP Number" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="Address" name="Address" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="NRIC" name="NRIC" required="required">
                                </div>
                            </div>                            
                      </div>





                        <p>Education</p>
                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Highest Education Level">
                                            <option disabled="disabled" selected="selected">Education Level</option>
                                            <option value="Male">Masters</option>
                                            <option value="Female">Degree</option>
                                            <option value="Other">STPM/Diploma or equivalent</option>
                                            <option value="Other">SPM or below</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Education Grade" name="EduGrade" required="required" >
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Graduate Year" name="GradYear" required="required">
                        </div>

                        
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Institution Name" name="address" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Course Name" name="dept" required="required">
                        </div>

                        
                        <!--<div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>-->







                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
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
<!-- end document-->
