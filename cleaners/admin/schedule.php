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
		$bathroom = mysql_real_escape_string($_POST['name']);	  	
		$userq=$_SESSION['user'];	  	
		if($bathroom!=0)
		{
			error_reporting(E_ALL ^ E_DEPRECATED);
			mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	  		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database	 	  	
		  	mysql_query("update schedulelist set scheduleno = '$bathroom' where scheduleno = 0 ");	 
		  	header("Location: ../admin/homeadmin.php"); 	
		  	     			  	
	    }	
	    else
		{
			header("location:../admin/homeadmin.php"); //redirects back to hom
		}	
    }  
    else
	{
		header("location:../admin/homeadmin.php"); //redirects back to hom
	}  
?>