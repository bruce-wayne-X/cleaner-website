<html>
    <head>
        <title>My first PHP Website</title>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            echo "<h3>Online Quality Monitoring!</h3>";
        ?> 
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Admin</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Supervisor</label> 
                <input id="tab-3" type="radio" name="tab" class="sign-on"><label for="tab-3" class="tab">worker</label> 
                <div class="login-form">
                    <div class="sign-in-htm">
                        <form action="admin/checkadminlogin.php" method="POST">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" name ="username" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" name ="password" type="password" class="input" data-type="password">
                            </div>                        
                            <div class="group">
                                <input type="submit" class="button" value="Sign In">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="sign-up-htm">
                        <form action="supervisor/checksuperlogin.php" method="POST">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" name ="username" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" name ="password" type="password" class="input" data-type="password">
                            </div>                        
                            <div class="group">
                                <input type="submit" class="button" value="Sign In">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="sign-on-htm">
                        <form action="worker/checklogin.php" method="POST">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" name ="username" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" name ="password" type="password" class="input" data-type="password">
                            </div>                        
                            <div class="group">
                                <input type="submit" class="button" value="Sign In">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">Forgot Password?</a>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>     
        <a href="admin/loginadmin.php">Admin Login<br>
        <a href="supervisor/loginsuper.php">supervisor Login<br>
        <a href="worker/login.php">Worker Login<br>  
        <a href="user.php">For Users<br>  
    </body>
</html> 