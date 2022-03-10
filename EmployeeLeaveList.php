<?php
    require 'connection.php';
    session_start();


    $EmpEmail = (isset($_GET['EmpEmail']) ? $_GET['EmpEmail'] : '');
    $sql = "SELECT * FROM `employee` WHERE EmpEmail = '$EmpEmail'";
    $result = mysqli_query($con, $sql);
    $employee = mysqli_fetch_array($result);
    //echo "$id";
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Leave History</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

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
			<h1>My Leaves History</h1>
			<ul id="navli">
				<li><a class="homeblack" href="EmployeeHome.php"> Home</a></li> 
				<li><a class="homeblack" href="EmployeeProject.php"> Projects</a></li> 
				<li><a class="homeblack" href="EmployeeLeave.php"> Apply</a></li>
				<li><a class="homered" href="EmployeeLeaveList.php"> MY LEAVE</a></li> 
				<li><a class="homeblack" href="EmployeeSetting.php"> Settings</a></li> 
				<li><a class="homeblack" href="EmployeeLogout.php"> Logout</a></li>
			</ul>
		</nav>
	</header>
		
    <table>
        <tr>
            <th>Leave ID</th>
            <th>Reason</th>
            <th>Start</td>
            <th>End</th>
            <th>Status</th>
        </tr>    

            <?php
            while ($employee = mysqli_fetch_assoc($result)) {

                    echo "<tr>";
                    echo "<td>".$employee['LeaveID']."</td>";
                    echo "<td>".$employee['Reason']."</td>";
                    echo "<td>".$employee['LeaveStartDate']."</td>";
                    echo "<td>".$employee['LeaveEndDate']."</td>";
                    echo "<td>".$employee['LeaveStatus']."</td>";
                    echo "<td><a href=\"submit.php?EmpEmail=$employee[EmpEmail]&EmpID=$employee[EmpID]\">Submit</a>";
            }
            ?>         
    </table>
    
          	
    
    
</body>
</html>