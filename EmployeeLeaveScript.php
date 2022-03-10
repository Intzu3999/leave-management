<?php
//including the database connection file
require_once ('connection.php');

//getting SESSION(EmpEmail) of the data from url
$EmpEmail = $_GET['EmpEmail'];
//echo $id;
$LeaveStartDate = $_POST['LeaveStartDate'];
//echo "$reason";
$LeaveEndDate = $_POST['LeaveEndDate'];
$Reason = $_POST['Reason'];
$LeaveStatus = $_POST['LeaveStatus'];


$sql = "INSERT INTO `leave`(`LeaveID`, `LeaveStartDate`, `LeaveEndDate`, `Reason`, `LeaveStatus` , `EmpEmail`) VALUES ('','$LeaveStartDate','$LeaveEndDate','$Reason','Pending','$EmpEmail')";
$result = mysqli_query($con, $sql);

//redirecting to the display page (index.php in our case)
header("Location:EmployeeLeave.php?EmpEmail=$EmpEmail");
?>

