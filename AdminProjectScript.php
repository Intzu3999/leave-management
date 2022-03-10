<?php

require_once ('connection.php');

$ProjName = $_POST['ProjName'];
$ProjStartDate = $_POST['ProjStartDate'];
$ProjEndDate = $_POST['ProjEndDate'];
$Comment = $_POST['Comment'];
$Status = $_POST['Status'];
$EmpEmail = $_POST['EmpEmail'];
$AdminEmail = $_POST['AdminEmail'];


$sql = "INSERT INTO `project`(`ProjID`, `ProjName`, `ProjStartDate` , `ProjEndDate` , `Comment` , `Status` , `EmpEmail` , `AdminEmail`) VALUES ('' , '$ProjName' , '$ProjStartDate' , '$ProjEndDate' , '$Comment' , 'ongoing' , '$EmpEmail' , '$AdminEmail')";
$result = mysqli_query($con, $sql);


if(($result) == 1){
    
    
    header("Location: AdminProjectStatus.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>