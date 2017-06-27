
<?php 
	$date=(string)($_GET['date']);
	$id=(int)($_GET['id']);
	//echo($id);

	error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("first_db") or die("Cannor connect to server");
	if($id==1)
		$query="SELECT distinct building FROM bathschedule where date_of_occ='$date' order by building asc";	
	else if($id==2)
		$query="SELECT distinct building FROM occasion_schedule where date_of_occ='$date' order by building asc";	
	else if($id==3)
		$query="SELECT distinct building FROM bathschedule1 where date_of_occ='$date' order by building asc";	
	
	$result=mysql_query($query);
	
	if($result === FALSE) { 
	}
	else {
		$rwid=0;		
		echo'<select name="buildx" onChange="allotgetBuilding(this.value)">';
		echo("<option value=''>Select One</option>");	
			while ($row=mysql_fetch_array($result)) { 
				$rwid=$row['building'];
			echo"<option value=" .$row['building']."> ".$row['building']."</option>";
			}
		echo"</select >";
		}	
?>

