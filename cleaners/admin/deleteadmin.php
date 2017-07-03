<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$con1=mysql_connect("localhost", "root","","first_db") or die(mysqli_error()); //Connect to server
		$id = $_GET['id'];
		mysqli_query($con1,"DELETE FROM bathrooms WHERE id='$id'");
		header("location: home.php");
	}
?>