<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Logout</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        
<style> *
p, h1, h2, h3, h4, h5, h6{color:Black;}
</style>
    </head>
    
    
    <body style="background-color:White";>
        <div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                
                            </div>
                            
                            <div class="panel-body">
                                <p>You have been logged out. <a href="AdminLogin.php">Login as admin again.</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>

<!-- header('location: index.php'); <?php ?> -->

