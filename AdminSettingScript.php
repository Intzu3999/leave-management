<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
    require 'connection.php';
    if(!isset($_SESSION['AdminEmail'])){
        header('location:index.php');
    }  
    $old_AdminPassword= md5(md5(mysqli_real_escape_string($con,$_POST['oldAdminPassword'])));
    $new_AdminPassword= md5(md5(mysqli_real_escape_string($con,$_POST['newAdminPassword'])));
    $AdminEmail=$_SESSION['AdminEmail'];
    //echo $email;
    $AdminPassword_from_database_query="SELECT AdminPassword FROM admin WHERE AdminEmail='$AdminEmail'";
    $AdminPassword_from_database_result=mysqli_query($con,$AdminPassword_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($AdminPassword_from_database_result);
    //echo $row['password'];
    if($row['AdminPassword'] = $old_AdminPassword){
        $update_AdminPassword_query="UPDATE admin SET AdminPassword='".$new_AdminPassword."' WHERE AdminEmail='".$AdminEmail."'";
        $update_AdminPassword_result=mysqli_query($con,$update_AdminPassword_query) or die(mysqli_error($con));
        echo "Your password has been updated.";
        ?>
        <meta http-equiv="refresh" content="3;url=AdminSettings.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Wrong password!!");
        </script>
        <meta http-equiv="refresh" content="1;url=AdminSettings.php" />
        <?php
        //header('location:settings.php');
    }
?>