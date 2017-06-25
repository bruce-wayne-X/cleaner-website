<html>
    <head>
        <title>Change Your Password</title>
    </head>
   <?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value   
   ?>
    <body>        
      <p> Hello <?php Print " $user"?></p>
      <a href="home.php">Click here to go back</a><br/><br/>
      <form action="password.php" method="POST">
          Enter Old Password <input type="text" name="old_password" required="required" /> <br/>
          Enter New Password <input type="text" name="new_password" required="required" /> <br/>
          <input type="submit" value="save"/>
      </form>      
    </body>
</html>	
