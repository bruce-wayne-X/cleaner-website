<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$con1=mysqli_connect("localhost", "root","","first_db") or die(mysqli_error()); //Connect to server
		$details = mysqli_real_escape_string($con1,$_POST['details']);
		$time = strftime("%X");//time
		$date = strftime("%B %d, %Y");//date
		$decision ="no";
		$userq=$_SESSION['user'];
		foreach($_POST['public'] as $each_check) //gets the data from the checkbox
 		{
 			if($each_check !=null ){ //checks if the checkbox is checked
 				$decision = "yes"; //sets teh value
 			}
 		}
		
		mysqli_query($con1,"INSERT INTO list (details, date_posted, time_posted, public,username) VALUES ('$details','$date','$time','$decision','$userq')"); //SQL query
		header("location: homeadmin.php");
	}
	else
	{
		header("location:homeadmin.php"); //redirects back to hom
	}
?>