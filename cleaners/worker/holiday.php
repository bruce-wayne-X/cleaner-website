<html>
    <head>
        <title>My first PHP Website</title>
        <link href = "homework.css" type = "text/css" rel = "stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Raleway:100,500,600,800"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h2 id="title">Home Page</h2>
        <p id = "greet">Hello <?php Print " $user"?>!</p> <!--Display's user name-->

        <div class="logout">
	        <i class="fa fa-sign-out"></i>
	        <a id="log" href="../logout.php">Logout</a>
	    </div><br/><br/>    
        <div id="newsh">
        	<i class="fa fa-pencil"></i>
			<a id="sch" href="changepassword.php">Password</a>
		</div><br><br>
		<div class="show">
		<p id="content"><?php       
	        error_reporting(E_ALL ^ E_DEPRECATED);
	        mysqli_connect("localhost", "root", "","first_db") or die (mysqli_error()); //Connect to server
	    	$pid = mysqli_query($con1,"Select * from cleaners WHERE name='$user'"); // Query the users table	    	
	    	$ppid =mysqli_fetch_assoc($pid);
	    	$id=$ppid['id'];	    	
	    	$col=5;	 
	    	$query1 = mysqli_query($con1,"Select * from bathschedule");   	
	    	$rows=mysqli_num_rows($query1);	    	
	    	?>        
	    </p>
	    </div>
    </body>
</html>	
