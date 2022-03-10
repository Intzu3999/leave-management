<?php
require 'connection.php';
session_start();
ob_start();
 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 



  
  
 // Define $myusername and $mypassword
$EmpEmail=$_POST['EmpEmail'];
$EmpPassword=$_POST['EmpPassword'];
 


// To protect MySQL injection (more detail about MySQL injection)
$EmpEmail = stripslashes($EmpEmail);
$EmpPassword = stripslashes($EmpPassword);
$EmpEmail = mysqli_real_escape_string($con, $EmpEmail);
$EmpPassword = mysqli_real_escape_string($con, $EmpPassword);
$sql="SELECT EmpEmail, EmpPassword FROM employee WHERE EmpEmail='".$EmpEmail."' and EmpPassword='".$EmpPassword."'";
$result=mysqli_query($con,$sql);
 


// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['EmpEmail'] = $EmpEmail;
$_SESSION['EmpPassword'] = $EmpPassword;
header("location:EmployeeHome.php");
} else {
echo "Wrong Username or Password";
?> <meta http-equiv="refresh" content="3;url=EmployeeLogin.php" /> <?php
}


ob_end_flush();
?>
          
           