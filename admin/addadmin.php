<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$details = mysql_real_escape_string($_POST['details']);
		$time = strftime("%X");//time
		$date = strftime("%B %d, %Y");//date
		$decision ="no";
		$userq=$_SESSION['user'];
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		foreach($_POST['public'] as $each_check) //gets the data from the checkbox
 		{
 			if($each_check !=null ){ //checks if the checkbox is checked
 				$decision = "yes"; //sets teh value
 			}
 		}
		
		mysql_query("INSERT INTO list (details, date_posted, time_posted, public,username) VALUES ('$details','$date','$time','$decision','$userq')"); //SQL query
		header("location: homeadmin.php");
	}
	else
	{
		header("location:homeadmin.php"); //redirects back to hom
	}
?>