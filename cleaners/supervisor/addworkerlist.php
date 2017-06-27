<?php	
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$name = mysql_real_escape_string($_POST['name']);
		$pass = mysql_real_escape_string($_POST['pass']);
		$sex = mysql_real_escape_string($_POST['group1']);		
		$userq=$_SESSION['user'];
		error_reporting(E_ALL ^ E_DEPRECATED);
		$conn=mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database			
		mysql_query("INSERT INTO cleaners (name, password, sex) VALUES ('$name','$pass','$sex')"); //SQL query
		$last=mysql_insert_id();
		//mysql_query("CREATE TABLE $name (`9` int(11) not null default 0,`9.5` int(11) not null default 0,`10` int(11) not null default 0,`10.5` int(11) not null default 0,`11` int(11) not null default 0,`11.5` int(11) not null default 0,`12` int(11) not null default 0,`12.5` int(11) not null default 0,`13` int(11) not null default 0,`13.5` int(11) not null default 0,`14` int(11) not null default 0,`14.5` int(11) not null default 0,`15` int(11) not null default 0,`15.5` int(11) not null default 0,`16` int(11) not null default 0,`16.5` int(11) not null default 0,`17` int(11) not null default 0,`17.5` int(11) not null default 0,`18` int(11) not null default 0,`18.5` int(11) not null default 0,`19` int(11) not null default 0,`19.5` int(11) not null default 0,`20` int(11) not null default 0,`20.5` int(11) not null default 0);"); //SQL query
		Print '<script>alert("Worker Successfully Added '.$last.'");</script>'; // Prompts the user
       	Print '<script>window.location.assign("allocate.php");</script>'; // redirects to login.php}
	}
	else
	{
		header("location:allocate.php"); //redirects back to hom
	}
?>