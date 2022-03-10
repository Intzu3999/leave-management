                   <div class="collapse navbar-collapse" id="navli">
                       <ul id="navli" class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['AdminEmail'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> </a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else if(isset($_SESSION['EmpEmail'])){
                            ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else {
                            ?>
                            <li><a class="homered" href="index.html">HOME</a></li>
                            <li><a class="homeblack" href="indexContact.html">CONTACT</a></li>
                            <li><a class="homeblack" href="EmployeeLogin.html">EMPLOYEE LOG IN</a></li>
                            <li><a class="homeblack" href="AdminLogin.html">ADMIN LOG IN</a></li>

                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>