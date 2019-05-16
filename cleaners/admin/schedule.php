<?php	
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{	
		$con1= mysqli_connect("localhost", "root","","first_db") or die(mysqli_error()); //Connect to server
		Print '<script>alert("Incorrect Password!");</script>';	
		$bathroom = mysqli_real_escape_string($con1,$_POST['name']);	  	
		$userq=$_SESSION['user'];	  	
		if($bathroom!=0)
		{
			error_reporting(E_ALL ^ E_DEPRECATED);
		  	mysqli_query($con1,"update schedulelist set scheduleno = '$bathroom' where scheduleno = 0 ");	 
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