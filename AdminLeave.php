<?php

require_once ('connection.php');

$sql = "SELECT employee.EmpID, employee.Name, employee.Email, leave.Reason, leave.LeaveStartDate, leave.LeaveEndDate, leave.LeaveStatus, FROM employee, leave WHERE employee.EmpEmail = leave.EmpEmail ORDER BY LeaveStartDate";
$result = mysqli_query($con, $sql);

?>



<html>
<head>
	<title>Leaves</title>
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
    
    <link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body> 
	
	<header>
		<nav>
			<h1>Manage Leave</h1>
			<ul id="navli">
				<li><a class="homeblack" href="AdminHome.php"> Home</a></li> 
				<li><a class="homeblack" href="AdminEmployee.php"> Employee</a></li> 
				<li><a class="homeblack" href="AdminProject.php"> Projects</a></li>
				<li><a class="homeblack" href="AdminProjectStatus.php"> Project Status</a></li>
				<li><a class="homered" href="AdminLeave.php"> LEAVE</a></li>
				<li><a class="homeblack" href="AdminAdmin.php"> Add Admin</a></li> 
				<li><a class="homeblack" href="AdminSettings.php"> Settings</a></li> 
				<li><a class="homeblack" href="AdminLogout.php"> Logout</a></li> 
			</ul>
		</nav>
	</header>
 
		<table>
			<tr>
				<th>Emp. ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Reason</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Total Days</th>
				<th>Status</th>
				<th>Balance</th>
                        </tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {

				$date1 = new DateTime($employee['LeaveStartDate']);
				$date2 = new DateTime($employee['LeaveEndDate']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);
				//echo "difference " . $interval->days . " days ";

					echo "<tr>";
					echo "<td>".$employee['EmpID']."</td>";
					echo "<td>".$employee['EmpName']."</td>";
					echo "<td>".$employee['EmpEmail']."</td>";
					echo "<td>".$employee['Reason']."</td>";
					echo "<td>".$employee['LeaveStartDate']."</td>";
					echo "<td>".$employee['LeaveEndDate']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['LeaveStatus']."</td>";
					//echo "<td>".$employee['Balance']."</td>";
					echo "<td><a href=\"AdminApproveLeave.php?EmpEmail=$employee[EmpEmail]&EmpID=$employee[EmpID]\"  onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> | <a href=\"AdminCancelLeave.php?EmpID=$employee[EmpID]&EmpEmail=$employee[EmpEmail]\" onClick=\"return confirm('Are you sure you want to Canel the request?')\">Cancel</a></td>";
				}
			?>
		</table>
		
	</div>
</body>
</html>