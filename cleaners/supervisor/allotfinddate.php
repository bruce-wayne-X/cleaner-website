
<?php 
	$date=(string)($_GET['date']);
	$id=(int)($_GET['id']);
	//echo($id);

	error_reporting(E_ALL ^ E_DEPRECATED);
	$con1=mysqli_connect("localhost","root","","first_db") or die(mysqli_error());
	if($id==1)
		$query="SELECT distinct building FROM bathschedule where date_of_occ='$date' order by building asc";	
	else if($id==2)
		$query="SELECT distinct building FROM occasion_schedule where date_of_occ='$date' order by building asc";	
	else if($id==3)
		$query="SELECT distinct building FROM bathschedule1 where date_of_occ='$date' order by building asc";	
	
	$result=mysqli_query($con1,$query);
	
	if($result === FALSE) { 
	}
	else {
		$rwid=0;		
		echo'<select name="buildx" onChange="allotgetBuilding1(this.value,\''.$date.'\')">';
		echo("<option value=''>Select One</option>");	
			while ($row=mysqli_fetch_array($result)) { 
				$rwid=$row['building'];
			echo"<option value=" .$row['building']."> ".$row['building']."</option>";
			}
		echo"</select >";
		}	
?>

