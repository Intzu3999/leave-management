<?php
require_once ('connection.php');
$sql = "SELECT * from `project`";

//echo "$sql";
$result = mysqli_query($con, $sql);

?>



<html>
<head>
	<title>Project Status</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>Project Status</h1>
			<ul id="navli">
				<li><a class="homeblack" href="AdminHome.php"> Home</a></li> 
				<li><a class="homeblack" href="AdminEmployee.php"> Employee</a></li> 
				<li><a class="homeblack" href="AdminProject.php"> Projects</a></li> 
				<li><a class="homered" href="AdminAdmin.php"> PROJECT STATUS</a></li> 
				<li><a class="homeblack" href="AdminLeave.php"> Leave</a></li>
				<li><a class="homeblack" href="AdminAdmin.php"> Add Admin</a></li> 
				<li><a class="homeblack" href="AdminSettings.php"> Settings</a></li> 
				<li><a class="homeblack" href="AdminLogout.php"> Logout</a></li> 
			</ul>
		</nav>
	</header>

    
    
    
    
    
	<div class="divider">Search Function Here</div>
	<div class="divider"></div>
        <div class="divider"></div>
	<div class="divider"></div>
        <div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Project Start Date</th>
				<th align = "center">Project Due Date</th>
				<th align = "center">Comment</th>
				<th align = "center">Status</th>
				<th align = "center">Employee Email</th>
				<th align = "center">Admin Email</th>
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
					echo "<td>".$employee['EmpEmail']."</td>";
					echo "<td>".$employee['AdminEmail']."</td>";

				}


			?>

		</table>
		
	
</body>
</html>