<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{	
		Print '<script>alert("Incorrect Password!");</script>';	
	  	$con1=mysqli_connect("localhost", "root","","first_db") or die(mysqli_error()); //Connect to server
		$start = mysqli_real_escape_string($con1,$_POST['time-min']);
	  	$end = mysqli_real_escape_string($con1,$_POST['time-max']);
	  	error_reporting(E_ALL ^ E_DEPRECATED);

	  	$query = mysqli_query($con1,"SELECT * FROM schedulelist ORDER BY scheduleno ASC LIMIT 1");
	  	$row = mysqli_fetch_assoc($query);
	  	$userq=$_SESSION['user'];
	  	if ($row['scheduleno']!=0)
	  	{
	  		mysqli_query($con1,"INSERT INTO schedulelist (`$start`,`$end`) VALUES (-1,-1)");	
	  		header("location: add_schedule.php"); 	  		
	  	}
	  	else 
	  	{
	  		mysqli_query($con1,"update schedulelist set `$start` = -1 where scheduleno = 0 ");
	  		mysqli_query($con1,"update schedulelist set `$end` = -1 where scheduleno = 0 ");	  		
	  		header("Location: add_schedule.php"); 	
	  	}	  	
	}
	else
	{
		header("location:../admin/homeadmin.php"); //redirects back to hom
	}
?>