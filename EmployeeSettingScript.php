<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['EmpEmail'])){
        header('location:index.php');
    }  
    $old_EmpPassword= md5(md5(mysqli_real_escape_string($con,$_POST['oldEmpPassword'])));
    $new_EmpPassword= md5(md5(mysqli_real_escape_string($con,$_POST['newEmpPassword'])));
    $EmpEmail=$_SESSION['EmpEmail'];
    //echo $email;
    $EmpPassword_from_database_query="SELECT EmpPassword FROM employee WHERE EmpEmail='$EmpEmail'";
    $EmpPassword_from_database_result=mysqli_query($con,$EmpPassword_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($EmpPassword_from_database_result);
    //echo $row['password'];
    if($row['EmpPassword'] = $old_EmpPassword){
        $update_EmpPassword_query="UPDATE employee SET EmpPassword=$new_EmpPassword WHERE EmpEmail=$EmpEmail";
        $update_EmpPassword_result=mysqli_query($con,$update_EmpPassword_query) or die(mysqli_error($con));
        echo "Your password has been updated.";
        ?>
        <meta http-equiv="refresh" content="3;url=EmployeeSetting.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Wrong password!!");
        </script>
        <meta http-equiv="refresh" content="1;url=EmployeeSetting.php" />
        <?php
        //header('location:settings.php');
    }
?>