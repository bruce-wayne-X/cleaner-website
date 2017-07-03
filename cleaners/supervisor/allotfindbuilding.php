
<?php 
	$building=(string)($_GET['building']);
	$id=(int)($_GET['id']);
	//echo($id);

	error_reporting(E_ALL ^ E_DEPRECATED);
	$con1=mysqli_connect("localhost","root","","first_db") or die(mysqli_error());
	if($id==1)
		$query="SELECT distinct floor FROM bathschedule where building = '$building' order by floor asc";
	else if($id==2)
		$query="SELECT distinct floor FROM occasion_schedule where building = '$building' order by floor asc";
	else if($id==3)
		$query="SELECT distinct floor FROM bathschedule1 where building = '$building' order by floor asc";	
	
	$result=mysqli_query($con1,$query);
	
	if($result === FALSE) { 
	}
	else {
		$rwid=0;
		echo('<label>Choose Floor</label>');
		echo'<select name="floorx" onChange="allotgetfloor(this.value,\''.$building.'\')">';
		echo("<option value=''>Select One</option>");	
			while ($row=mysqli_fetch_array($result)) { 
				$rwid=$row['floor'];
			echo"<option value=" .$row['floor']."> ".$row['floor']."</option>";
			}
		echo"</select >";
		}
?>