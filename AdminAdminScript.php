<?php
require_once ('connection.php');

// initializing variables
$AdminName = "";
$AdminEmail = "";
$AdminHP = "";
$AdminPassword = "";
$errors = array();

 

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $AdminName = mysqli_real_escape_string($con, $_POST['AdminName']);
  $AdminEmail = mysqli_real_escape_string($con, $_POST['AdminEmail']);
  $AdminHP = mysqli_real_escape_string($con, $_POST['AdminHP']);
  $AdminPassword = mysqli_real_escape_string($con, $_POST['AdminPassword']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($AdminName)) { array_push($errors, "Admin Name is required"); }
  if (empty($AdminEmail)) { array_push($errors, "Email is required"); }
  if (empty($AdminPassword)) { array_push($errors, "Password is required"); }
  if ($AdminPassword != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $admin_check_query = "SELECT * FROM admin WHERE AdminName='$AdminName' OR AdminEmail='$AdminEmail' LIMIT 1";
  $result = mysqli_query($con, $admin_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['AdminName'] === $AdminName) {
      array_push($errors, "Admin name already exists");
    }

    if ($user['AdminEmail'] === $AdminEmail) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$AdminName = ($AdminName);
        $AdminEmail = ($AdminEmail);
        $AdminHP = ($AdminHP);
        $AdminPassword = ($AdminPassword);//encrypt the password before saving in the database

  	$query = "INSERT INTO `admin` (`AdminID`, `AdminName`, `AdminEmail`, `AdminHP`, `AdminPassword`) VALUES('', '$AdminName', '$AdminEmail', '$AdminHP', '$AdminPassword')";
  	mysqli_query($con, $query);
  	//$_SESSION['AdminEmail'] = $AdminEmail;
  	//$_SESSION['success'] = "You are now logged in";        
  	header('location: AdminAdmin.php');
  }
}     



?>