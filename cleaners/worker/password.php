<?php	
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$old = mysql_real_escape_string($_POST['old_password']);
		$new = mysql_real_escape_string($_POST['new_password']);
		$userq=$_SESSION['user'];
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database				
		$query = mysql_query("Select * from cleaners WHERE name='$userq'"); // Query the users table
		$row=mysql_fetch_assoc($query);
		if($row['password']==$old)
		{
			mysql_query("Update cleaners set password = '$new' where name = '$userq'");
			Print '<script>alert("Password Successfully Changed");</script>'; // Prompts the user
        	Print '<script>window.location.assign("home.php");</script>'; // redirects to login.php}
        }
		else
       	{
        	Print '<script>alert("Incorrect Old Password!");</script>'; // Prompts the user
        	Print '<script>window.location.assign("changepassword.php");</script>'; // redirects to login.php
        }		
	}
	else
	{
		header("location:home.php"); //redirects back to hom
	}
?>