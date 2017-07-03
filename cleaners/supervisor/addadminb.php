<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
        Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
		$con1=mysqli_connect("localhost", "root","","first_db") or die(mysqli_error()); //Connect to server
        
        $building=mysqli_real_escape_string($con1,$_POST['building']);

        $floor=mysqli_real_escape_string($con1,$_POST['floor']);        
        if($building=="Add New Building")
        {
        $building=mysqli_real_escape_string($con1,$_POST['newbuildingtext']);        	
        $floor=mysqli_real_escape_string($con1,$_POST['newfloortext']);        	
        }

        if($floor=="Add New Floor")
        {
        $floor=mysqli_real_escape_string($con1,$_POST['newfloortext']);        	
        }        

		$bname = mysqli_real_escape_string($con1,$_POST['bname']);
		$snoo = mysqli_real_escape_string($con1,$_POST['sno']);		
		$userq=$_SESSION['user'];
		
		mysqli_query($con1,"INSERT INTO bathschedule (building,floor,id,scheduleno) VALUES ('$building','$floor','$bname','$snoo');"); //SQL query
		mysqli_query($con1,"select * from bathschedule;"); //SQL query
		mysqli_query($con1,"update bathschedule b inner join schedulelist s on b.scheduleno = s.scheduleno set b.`9` = s.`9`, b.`9.5` = s.`9.5`, b.`10` = s.`10`, b.`10.5` = s.`10.5`, b.`11` = s.`11`, b.`11.5` = s.`11.5`, b.`12` = s.`12`, b.`12.5` = s.`12.5`, b.`13` = s.`13`, b.`13.5` = s.`13.5`, b.`14` = s.`14`, b.`14.5` = s.`14.5`, b.`15` = s.`15`, b.`15.5` = s.`15.5`, b.`16` = s.`16`, b.`16.5` = s.`16.5`, b.`17` = s.`17`, b.`17.5` = s.`17.5`, b.`18` = s.`18`, b.`18.5` = s.`18.5`, b.`19` = s.`19`, b.`19.5` = s.`19.5`, b.`20` = s.`20`, b.`20` = s.`20.5` "); //SQL query
		header("location: ../supervisor/allocate.php");
	}
	else
	{
		header("location:../supervisor/allocate.php"); //redirects back to hom
	}
?>