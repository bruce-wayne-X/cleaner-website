<!DOCTYPE html>
<html>
	<head>
	Brouhaha!
	</head>
<body>
		//<script type="text/javascript">window.alert(5 + 6);</script>
		<?php
		$id= (int)($_GET['id']);
		$q = (int)($_GET['q']);
		mysql_connect("localhost","root","");
		mysql_select_db("first_db") or die("Cannor connect to server");
		$q2=(int)($_GET['q2']);
		$q3=(string)($_GET['q3']);//10.5		
		$q4=(string)($_GET['q4']);//9.5		
		$i1=(double)$q4;
		$i2=(double)$q3;
		if($id==1)
		{mysql_query("UPDATE bathschedule SET `".$q4."` = ".$q." WHERE id = ".$q2.";");			
		mysql_query("UPDATE bathschedule SET `".$q3."` = ".$q." WHERE id = ".$q2.";");								
		}
		else if($id==2)
		{mysql_query("UPDATE occasion_schedule SET `".$q4."` = ".$q." WHERE id = ".$q2.";");			
		mysql_query("UPDATE occasion_schedule SET `".$q3."` = ".$q." WHERE id = ".$q2.";");								
		}
		else if($id==3)
		{
		mysql_query("UPDATE bathschedule1 SET `".$q4."` = ".$q." WHERE id = ".$q2.";");			
		mysql_query("UPDATE bathschedule1 SET `".$q3."` = ".$q." WHERE id = ".$q2.";");											
		}
		echo("haha");
?>
</body>
</html>