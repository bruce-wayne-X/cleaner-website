<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
        //Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
        echo("<script>alert(5 + 6);</script>");
        $building=mysql_real_escape_string($_POST['building']);

        $floor=mysql_real_escape_string($_POST['floor']);        
        if($building=="Add New Building")
        {
        $building=mysql_real_escape_string($_POST['newbuildingtext']);        	
        $floor=mysql_real_escape_string($_POST['newfloortext']);        	
        }

        if($floor=="Add New Floor")
        {
        $floor=mysql_real_escape_string($_POST['newfloortext']);        	
        }        

		$bname = mysql_real_escape_string($_POST['bname']);
		$snoo = mysql_real_escape_string($_POST['sno']);
		$type1 = mysql_real_escape_string($_POST['group1']);
		$userq=$_SESSION['user'];
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		
		mysql_query("INSERT INTO bathschedule (building,floor,id,scheduleno,type) VALUES ('$building','$floor','$bname','$snoo','$type1');"); //SQL query
		mysql_query("INSERT INTO bathschedule1 (building,floor,id,scheduleno,type) VALUES ('$building','$floor','$bname','$snoo','$type1');"); //
		mysql_query("select * from bathschedule;"); //SQL query	
		mysql_query("update bathschedule b inner join schedulelist s on b.scheduleno = s.scheduleno set b.`9` = s.`9`, b.`9.5` = s.`9.5`, b.`10` = s.`10`, b.`10.5` = s.`10.5`, b.`11` = s.`11`, b.`11.5` = s.`11.5`, b.`12` = s.`12`, b.`12.5` = s.`12.5`, b.`13` = s.`13`, b.`13.5` = s.`13.5`, b.`14` = s.`14`, b.`14.5` = s.`14.5`, b.`15` = s.`15`, b.`15.5` = s.`15.5`, b.`16` = s.`16`, b.`16.5` = s.`16.5`, b.`17` = s.`17`, b.`17.5` = s.`17.5`, b.`18` = s.`18`, b.`18.5` = s.`18.5`, b.`19` = s.`19`, b.`19.5` = s.`19.5`, b.`20` = s.`20`, b.`20` = s.`20.5` where building = '$building' and floor = '$floor' and id = '$bname'");	
		mysql_query("select * from bathschedule1;"); //SQL query	
		mysql_query("update bathschedule1 b inner join schedulelist s on b.scheduleno = s.scheduleno set b.`9` = s.`9`, b.`9.5` = s.`9.5`, b.`10` = s.`10`, b.`10.5` = s.`10.5`, b.`11` = s.`11`, b.`11.5` = s.`11.5`, b.`12` = s.`12`, b.`12.5` = s.`12.5`, b.`13` = s.`13`, b.`13.5` = s.`13.5`, b.`14` = s.`14`, b.`14.5` = s.`14.5`, b.`15` = s.`15`, b.`15.5` = s.`15.5`, b.`16` = s.`16`, b.`16.5` = s.`16.5`, b.`17` = s.`17`, b.`17.5` = s.`17.5`, b.`18` = s.`18`, b.`18.5` = s.`18.5`, b.`19` = s.`19`, b.`19.5` = s.`19.5`, b.`20` = s.`20`, b.`20` = s.`20.5` where building = '$building' and floor = '$floor' and id = '$bname'");	
		echo("<script>window.alert(5 + 6);</script>");
		header("location: ../admin/homeadmin.php");

	}
	else
	{
		header("location: ../admin/homeadmin.php");
		//header("location:../supervisor/allocate.php"); //redirects back to hom
	}
?>