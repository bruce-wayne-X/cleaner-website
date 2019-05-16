<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
	if($_SERVER['REQUEST_METHOD'] == "POST") //Added an if to keep the page secured
	{
		$con1=mysqli_connect("localhost", "root","","first_db") or die(mysql_error()); //Connect to server
        $building=mysqli_real_escape_string($con1,$_POST['xbuilding']);
        $floor=mysqli_real_escape_string($con1,$_POST['xfloor']);        
		$bname = mysqli_real_escape_string($con1,$_POST['idname']);
		$snoo = mysqli_real_escape_string($con1,$_POST['xsno']);	
		$occasion = mysqli_real_escape_string($con1,$_POST['group2']);		
		$userq = $_SESSION['user'];

		if($occasion=="Week"){					
			mysqli_query($con1,"update bathschedule set scheduleno='$snoo' where building = '$building' and floor = '$floor' and id = '$bname';"); //SQL query
			mysqli_query($con1,"select * from bathschedule;"); //SQL query
			mysqli_query($con1,"update bathschedule b inner join schedulelist s on b.scheduleno = s.scheduleno set b.`9` = s.`9`, b.`9.5` = s.`9.5`, b.`10` = s.`10`, b.`10.5` = s.`10.5`, b.`11` = s.`11`, b.`11.5` = s.`11.5`, b.`12` = s.`12`, b.`12.5` = s.`12.5`, b.`13` = s.`13`, b.`13.5` = s.`13.5`, b.`14` = s.`14`, b.`14.5` = s.`14.5`, b.`15` = s.`15`, b.`15.5` = s.`15.5`, b.`16` = s.`16`, b.`16.5` = s.`16.5`, b.`17` = s.`17`, b.`17.5` = s.`17.5`, b.`18` = s.`18`, b.`18.5` = s.`18.5`, b.`19` = s.`19`, b.`19.5` = s.`19.5`, b.`20` = s.`20`, b.`20` = s.`20.5` where building = '$building' and floor = '$floor' and id = '$bname'"); //SQL query
			header("location: ../admin/homeadmin.php");
		}
		else if($occasion=="Special"){		
			$dato = mysqli_real_escape_string($con1,$_POST['date']);
			$ask=mysqli_query($con1,"select * from occasion_schedule where building = '$building' and floor = '$floor' and id = '$bname' and date_of_occ = '$dato';");
			if(mysql_num_rows($ask)==0)
			{
				$puchle = mysqli_query($con1,"select * from bathschedule where building = '$building' and floor = '$floor' and id = '$bname';");
				$mil = mysql_fetch_assoc($puchle);
				$tp = $mil['type'];
				mysqli_query($con1,"insert into occasion_schedule (building,floor,id,date_of_occ,type) values ('$building','$floor','$bname','$dato','$tp')");	
			}			
			mysqli_query($con1,"update occasion_schedule set scheduleno='$snoo' where building = '$building' and floor = '$floor' and id = '$bname' and date_of_occ = '$dato';");		
			mysqli_query($con1,"select * from occasion_schedule;"); //SQL query
			mysqli_query($con1,"update occasion_schedule b inner join schedulelist s on b.scheduleno = s.scheduleno set b.`9` = s.`9`, b.`9.5` = s.`9.5`, b.`10` = s.`10`, b.`10.5` = s.`10.5`, b.`11` = s.`11`, b.`11.5` = s.`11.5`, b.`12` = s.`12`, b.`12.5` = s.`12.5`, b.`13` = s.`13`, b.`13.5` = s.`13.5`, b.`14` = s.`14`, b.`14.5` = s.`14.5`, b.`15` = s.`15`, b.`15.5` = s.`15.5`, b.`16` = s.`16`, b.`16.5` = s.`16.5`, b.`17` = s.`17`, b.`17.5` = s.`17.5`, b.`18` = s.`18`, b.`18.5` = s.`18.5`, b.`19` = s.`19`, b.`19.5` = s.`19.5`, b.`20` = s.`20`, b.`20` = s.`20.5` where building = '$building' and floor = '$floor' and id = '$bname'"); //SQL quer	
			header("location: ../admin/homeadmin.php");
		}
		else{			
			mysqli_query($con1,"update bathschedule1 set scheduleno='$snoo' where building = '$building' and floor = '$floor' and id = '$bname';"); //SQL query
			mysqli_query($con1,"select * from bathschedule1;"); //SQL query
			mysqli_query($con1,"update bathschedule1 b inner join schedulelist s on b.scheduleno = s.scheduleno set b.`9` = s.`9`, b.`9.5` = s.`9.5`, b.`10` = s.`10`, b.`10.5` = s.`10.5`, b.`11` = s.`11`, b.`11.5` = s.`11.5`, b.`12` = s.`12`, b.`12.5` = s.`12.5`, b.`13` = s.`13`, b.`13.5` = s.`13.5`, b.`14` = s.`14`, b.`14.5` = s.`14.5`, b.`15` = s.`15`, b.`15.5` = s.`15.5`, b.`16` = s.`16`, b.`16.5` = s.`16.5`, b.`17` = s.`17`, b.`17.5` = s.`17.5`, b.`18` = s.`18`, b.`18.5` = s.`18.5`, b.`19` = s.`19`, b.`19.5` = s.`19.5`, b.`20` = s.`20`, b.`20` = s.`20.5` where building = '$building' and floor = '$floor' and id = '$bname'"); //SQL query
			header("location: ../admin/homeadmin.php");
		}
	}
	else
	{
		header("location: ../admin/homeadmin.php");
		//header("location:../supervisor/allocate.php"); //redirects back to hom
	}
?>