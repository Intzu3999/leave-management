<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$EmpEmail = $_GET['EmpEmail'];
$EmpID = $_GET['EmpID'];


//deleting the row from table
$result = mysqli_query($con, "UPDATE `leave` SET `status`='Approved' WHERE EmpEmail = $EmpEmail AND EmpID = $EmpID;");

//redirecting to the display page (index.php in our case)
header("Location:AdminLeave.php");
?>

