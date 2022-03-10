<?php
    require 'connection.php';
    session_start();
?>
<?php 
	$EmpEmail = (isset($_GET['EmpEmail']) ? $_GET['EmpEmail'] : '');
	require_once ('connection.php');
	$sql = "SELECT * FROM `project` where EmpEmail = '$EmpEmail'";
	$result = mysqli_query($con, $sql);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
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
			<h1>My Projects</h1>
			<ul id="navli">
				<li><a class="homeblack" href="EmployeeHome.php"> Home</a></li> 
				<li><a class="homered" href="EmployeeProject.php"> PROJECTS</a></li> 
				<li><a class="homeblack" href="EmployeeLeave.php"> Apply</a></li>
				<li><a class="homeblack" href="EmployeeLeaveList.php"> My Leave</a></li>                                 
				<li><a class="homeblack" href="EmployeeSetting.php"> Settings</a></li> 
				<li><a class="homeblack" href="EmployeeLogout.php"> Logout</a></li>
			</ul>
		</nav>
	</header>
		
    
  	 
	<div class="divider">Search Function Here</div>
	<div class="divider"></div>
        <div class="divider"></div>
	<div class="divider"></div>
        <div class="divider"></div>
	<div id="divimg">
            
        <table>
        <tr>
            <th align = "center">Project ID</th>
            <th align = "center">Project Name</th>
            <th align = "center">Due Date</th>
            <th align = "center">Sub Date</th>
            <th align = "center">Mark</th>
            <th align = "center">Status</th>
            <th align = "center">Option</th>
        </tr>

        <?php
            while ($employee = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$employee['ProjID']."</td>";
            echo "<td>".$employee['ProjName']."</td>";
            echo "<td>".$employee['ProjStartDate']."</td>";
            echo "<td>".$employee['ProjEndDate']."</td>";
            echo "<td>".$employee['Comment']."</td>";
            echo "<td>".$employee['Status']."</td>";
            echo "<td><a href=\"EmployeeProjectScript.php?EmpEmail=$employee[EmpEmail]&EmpID=$employee[EmpID]\">Submit</a>";
        }
        ?>
        </table>  
    
    
    
    
	
</body>
</html>