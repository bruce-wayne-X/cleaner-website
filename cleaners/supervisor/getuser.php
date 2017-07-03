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
		$con1=mysqli_connect("localhost","root","","first_db");
		$q2=(int)($_GET['q2']);
		$q3=(string)($_GET['q3']);//10.5		
		$q4=(string)($_GET['q4']);//9.5		
		$i1=(double)$q4;
		$i2=(double)$q3;
		if($id==1)
		{mysqli_query($con1,"UPDATE bathschedule SET `".$q4."` = ".$q." WHERE id = ".$q2.";");			
		mysqli_query($con1,"UPDATE bathschedule SET `".$q3."` = ".$q." WHERE id = ".$q2.";");								
		}
		else if($id==2)
		{mysqli_query($con1,"UPDATE occasion_schedule SET `".$q4."` = ".$q." WHERE id = ".$q2.";");			
		mysqli_query($con1,"UPDATE occasion_schedule SET `".$q3."` = ".$q." WHERE id = ".$q2.";");								
		}
		else if($id==3)
		{
		mysqli_query($con1,"UPDATE bathschedule1 SET `".$q4."` = ".$q." WHERE id = ".$q2.";");			
		mysqli_query($con1,"UPDATE bathschedule1 SET `".$q3."` = ".$q." WHERE id = ".$q2.";");											
		}

?>
</body>
</html>