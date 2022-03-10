<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<!--<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>
	<header>
		<nav>
			<h1>Homepage</h1>
			<ul id="navli">
				<li><a class="homered" href="EmployeeHome.php"> HOME</a></li> 
				<li><a class="homeblack" href="EmployeeProject.php"> Projects</a></li> 
				<li><a class="homeblack" href="EmployeeLeave.php"> Apply</a></li>
				<li><a class="homeblack" href="EmployeeLeaveList.php"> My Leave</a></li> 
				<li><a class="homeblack" href="EmployeeSetting.php"> Settings</a></li> 
				<li><a class="homeblack" href="EmployeeLogout.php"> Logout</a></li>
			</ul>
		</nav>
	</header>
		

    
    
		
	<div class="divider"></div>

	<p style="text-align: center; font-size: 40px">About Global Business Partners</p>

	<div style="float: left; width: 33%">
    	
    	<p style="text-align: center;"><img src=".jpg" alt="Company Picture" style="width:250px"></p>
    	<h2 style="text-align: center; font-family:Montserrat ">Company detail here ... </h2>
    	
	</div>

	<div style="float: left; width: 33%">
    	
    	<p style="text-align: center;"><img src=".jpg" alt="Viens Code Img" style="width:250px"></p>
    	<h2 style="text-align: center; font-family:Montserrat ">Viens Code Information ...</h2>
    	
	</div>

	<div style="float: left; width: 33%">
    	
    	<p style="text-align: center;"><img src=".jpg" alt="Viens Code Img" style="width:250px"></p>
    	<h2 style="text-align: center; font-family:Montserrat ">Cont. Viens Code Information ...</h2>
    	
	</div>

	</div>


	
</body>
</html>