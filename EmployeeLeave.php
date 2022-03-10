<?php
    require 'connection.php';
    session_start();
?>

<?php 
	$EmpEmail = (isset($_GET['EmpEmail']) ? $_GET['EmpEmail'] : '');
	$sql = "SELECT * FROM `employee` WHERE EmpEmail = '$EmpEmail'";
	$result = mysqli_query($con, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['EmpName']);
	//echo "$id";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Apply Leave</title>
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
			<h1>Apply Leave</h1>
			<ul id="navli">
				<li><a class="homeblack" href="EmployeeHome.php"> Home</a></li> 
				<li><a class="homeblack" href="EmployeeProject.php"> Projects</a></li> 
				<li><a class="homered" href="EmployeeLeave.php"> APPLY</a></li>
				<li><a class="homelack" href="EmployeeLeaveList.php"> My Leave</a></li> 				<li><a class="homeblack" href="EmployeeSetting.php"> Settings</a></li> 
				<li><a class="homeblack" href="EmployeeLogout.php"> Logout</a></li>
			</ul>
		</nav>
	</header>
		
    
    
	<div class="divider"></div>
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Apply Leave Form</h2>
                    <form action="EmployeeLeaveScript.php?EmpEmail=<?php echo $EmpEmail?>" method="POST">


                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Reason" name="Reason">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<p>Start Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="start date (yyyy-mm-dd)" name="LeaveStartDate">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                            	<p>End Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="end date (yyyy-mm-dd)" name=LeaveEndDate">
                                   
                                </div>
                            </div>
                        </div>
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
		
    
    
</body>
</html>