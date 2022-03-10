<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>
	<header>
		<nav>
			<h1>Employee Management System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.php">HOME</a></li> 
				<li><a class="homeblack" href="indexContact.php">CONTACT</a></li> 
				<li><a class="homeblack" href="EmployeeLogin.php">EMPLOYEE LOG IN</a></li> 
				<li><a class="homered" href="AdminLogin.php">ADMIN LOG IN</a></li> 
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
        
        <div id="divimg"></div>
	<img src="HomeBackground.jpg" style="float: left; margin-right: 100px; margin-top: 35px; margin-left: 70px">
	

	<div style="margin-top: 175px">
            <h1 style="font-family: 'Cambria', cursive; font-weight: 200; font-size: 50px; margin-top: 100px; text-align: center;">Login as Admin</h1>
	</div>
	
        <div>
            <p>Enter admin's email and password</p>
            <form accept-charset="utf-8" method="post" action="AdminLoginSubmit.php">


                <!--to print error and logout of any active session-->                                  
                <div class="tableStyle">
                <?php 
                if(isset($_SESSION["errorMessage"])){
                ?>
                    <div class="errorMessage"><?php echo $_SESSION["errorMessage"]; ?> </div>
                <?php
                unset($_SESSION["errorMessage"]);
                }                                    
                ?>
                </div>


                <div>
                    <table>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        
                        <tr>
                        <td>email:</td>
                        <td>:</td>
                        <td><input type="email" name="AdminEmail" placeholder="Admin Email"></td>
                        </tr><!-- comment -->
                        
                        <tr>
                        <td>password</td>
                        <td>:</td>  
                         <td><input type="password" name="AdminPassword" placeholder="Admin Password(min. 6 characters)" pattern=".{6,}"></td>  <!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"-->
                        </tr>
                        
                         
                        <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Login" style="color:black; background-color:orangered; display:block; width:50%; height:35px; cursor: pointer; margin: 1%";></td>
                        </tr>
                    
                    </table>
                    </div>
            </form>
        </div>

    </div>	

	
</body>
</html>