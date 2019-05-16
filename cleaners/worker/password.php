<?php	
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$con1=mysqli_connect("localhost", "root",""."first_db") or die(mysqli_error()); //Connect to server
		$old = mysqli_real_escape_string($con1,$_POST['old_password']);
		$new = mysqli_real_escape_string($con1,$_POST['new_password']);
		$userq=$_SESSION['user'];

		$query = mysqli_query($con1,"Select * from cleaners WHERE name='$userq'"); // Query the users table
		$row=mysqli_fetch_assoc($query);
		if($row['password']==$old)
		{
			mysqli_query($con1,"Update cleaners set password = '$new' where name = '$userq'");
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