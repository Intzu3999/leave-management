<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    <!--<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">

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
</head>





<body>
	<header>
		<nav>
			<h1>Manage Projects</h1>
			<ul id="navli">
				<li><a class="homeblack" href="AdminHome.php"> Home</a></li> 
				<li><a class="homeblack" href="AdminEmployee.php"> Employee</a></li> 
				<li><a class="homered" href="AdminProject.php"> PROJECTS</a></li>
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
                    <h2 class="title">Assign Project</h2>
                    <form action="AdminProjectScript.php" method="POST" enctype="multipart/form-data">
                      

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Project Name" name="ProjName" required="required">
                        </div>


                        <div class="input-group">
                            <input class="input--style-1" type="date" placeholder="Project Start Date (yyyy-mm-dd)" name="ProjStartDate" required="required">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="Project Due Date (yyyy-mm-dd)" name="ProjEndDate" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Comment" name="Comment" required="required">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Status" name="Status">
                        </div>                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Employee Email" name="EmpEmail" required="required">
                        </div>  


                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Assign</button>
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

    





    
    

<div class="divider"></div>

        <table>
        <tr>

                <th align = "center">Project SN</th>
                <th align = "center">Project Name</th>
                <th align = "center">Start Date</th>
                <th align = "center">Due Date</th>
                <th align = "center">Comment</th>
                <th align = "center">Employee ID</th>

        </tr>

        <?php
        while ($employee = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$employee['pid']."</td>";
            echo "<td>".$employee['eid']."</td>";
            echo "<td>".$employee['pname']."</td>";
            echo "<td>".$employee['duedate']."</td>";
            echo "<td>".$employee['subdate']."</td>";
            echo "<td>".$employee['mark']."</td>";
            echo "<td>".$employee['status']."</td>";
            echo "<td><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Mark</a>"; 
        }
        ?>

        </table>
		
    
    
    
    
	
</body>
</html>