<?php
header('Content-Type: text/html; charset=utf-8');

    require 'connection.php';
    session_start();
    $AdminEmail=mysqli_real_escape_string($con,$_POST['AdminEmail']);
    if (empty($_POST["AdminEmail"])) {
    $emailErr = "Please insert an email";
    ?> <meta http-equiv="refresh" content="2;url=AdminLogin.php" /> <?php
    } else {

        
        if (!filter_var($AdminEmail, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        ?> <meta http-equiv="refresh" content="2;url=AdminLogin.php" /> <?php
        } else {
    
    
            $AdminPassword=md5(md5(mysqli_real_escape_string($con,$_POST['AdminPassword'])));
            if(strlen($AdminPassword)<6){
            echo "Password should have at least 6 characters. Redirecting you back to admin login page...";
            ?> <meta http-equiv="refresh" content="2;url=AdminLogin.php" /> <?php
            } else {
    
    
    
                
               // Define $myusername and $mypassword
               $AdminEmail=$_POST['AdminEmail'];
               $AdminPassword=$_POST['AdminPassword'];

               // To protect MySQL injection (more detail about MySQL injection)
               $AdminEmail = stripslashes($AdminEmail);
               $AdminPassword = stripslashes($AdminPassword);
               $AdminEmail = mysqli_real_escape_string($con, $AdminEmail);
               $AdminPassword = mysqli_real_escape_string($con, $AdminPassword);                
                
                
                $admin_authentication_query="SELECT AdminID, AdminEmail FROM admin WHERE AdminEmail='".$AdminEmail."' and AdminPassword='".$AdminPassword."'";
                $admin_authentication_result=mysqli_query($con,$admin_authentication_query) or die(mysqli_error($con));
                
               // rows_fetched is counting table row
                $rows_fetched=mysqli_num_rows($admin_authentication_result);
                
                if($rows_fetched==0){
                //no user
                //redirecting to same login page
                ?>
                <script> window.alert("Email or Password error"); </script>
                <meta http-equiv="refresh" content="1;url=AdminLogin.php" />
                <?php
                session_start();
                session_unset();
                session_destroy();
                //header('location: login');
                //echo "Wrong email or password.";
                } else {
                $row=mysqli_fetch_array($admin_authentication_result);
                $_SESSION['AdminEmail']=$AdminEmail;
                $_SESSION['AdminPassword']=$AdminPassword;
                $_SESSION['AdminID']=$row['AdminID']; 
                $AdminName =$_POST['AdminName'];
                header('location: AdminHome.php');
        }
        
        
    } } }
    
 ?>

<style> *
p, h1, h2, h3, h4, h5, h6{color:Black;}

body {color:white;}
</style>