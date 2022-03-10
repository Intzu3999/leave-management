<?php 
	$EmpEmail = (isset($_GET['EmpEmail']) ? $_GET['EmpEmail'] : '');
	require_once ('connection.php');
	$sql = "SELECT * FROM `project` WHERE EmpEmail = '$EmpEmail'";
	$result = mysqli_query($con, $sql);
	
?>


