<?php
    require 'connection.php';
    session_start();
    $EmpEmail=mysqli_real_escape_string($con,$_POST['EmpEmail']);
    if (empty($_POST["EmpEmail"])) {
    $emailErr = "Please insert an email";
    ?> <meta http-equiv="refresh" content="2;url=EmployeeLogin.php" /> <?php
    } else {

        
        if (!filter_var($EmpEmail, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        ?> <meta http-equiv="refresh" content="2;url=EmployeeLogin.php" /> <?php
        } else {
    
    
            $EmpPassword=md5(md5(mysqli_real_escape_string($con,$_POST['EmpPassword'])));
            if(strlen($EmpPassword)<6){
            echo "Password should have at least 6 characters. Redirecting you back to employee login page...";
            ?> <meta http-equiv="refresh" content="2;url=EmployeeLogin.php" /> <?php
            } else {
    
    

  
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
               } else if ($count==0){
                ?>
                <script> window.alert("Email or Password error"); </script>
                <meta http-equiv="refresh" content="1;url=EmployeeLogin.php" />
                <?php
                session_start();
                session_unset();
                session_destroy();                                 
               }
               ob_end_flush();
               


        
    } } } 
    
 ?>

<style> *
p, h1, h2, h3, h4, h5, h6{color:Black;}

body {color:white;}
</style>