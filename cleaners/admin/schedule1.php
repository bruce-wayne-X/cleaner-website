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
		$start = mysql_real_escape_string($_POST['time-min']);
	  	$end = mysql_real_escape_string($_POST['time-max']);
	  	error_reporting(E_ALL ^ E_DEPRECATED);
	  	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	  	mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database	 	  	
	  	$query = mysql_query("SELECT * FROM schedulelist ORDER BY scheduleno ASC LIMIT 1");
	  	$row = mysql_fetch_assoc($query);
	  	$userq=$_SESSION['user'];
	  	if ($row['scheduleno']!=0)
	  	{
	  		mysql_query("INSERT INTO schedulelist (`$start`,`$end`,shifts) VALUES (-1,-1,1)");	
	  		header("location: add_schedule.php"); 	  		
	  	}
	  	else 
	  	{
	  		mysql_query("update schedulelist set `$start` = -1 where scheduleno = 0 ");
	  		mysql_query("update schedulelist set `$end` = -1 where scheduleno = 0 ");
	  		$query1 = mysql_query("Select shifts from schedulelist where scheduleno = 0");
	  		$row1=mysql_fetch_array($query1);
	  		$a= $row1['shifts']+1;
	  		mysql_query("update schedulelist set shifts = '$a' where scheduleno = 0 ");	  		
	  		header("Location: add_schedule.php"); 	
	  	}	  	
	}
	else
	{
		header("location:../admin/homeadmin.php"); //redirects back to hom
	}
?>