
<?php 
		$building=(string)($_GET['building']);
		$id=(int)($_GET['id']);
		$date=(string)($_GET['date']);
		
		$con1=mysqli_connect("localhost","root","","first_db") or die(mysqli_error());
if($id==1)
{
	$query="SELECT distinct floor FROM bathschedule where building = '$building' and date_of_occ = '$date' order by floor asc";
}
else if($id==2)
{
	$query="SELECT distinct floor FROM occasion_schedule where building = '$building' and date_of_occ = '$date' order by floor asc";
}
else if($id==3)
{
	$query="SELECT distinct floor FROM bathschedule1 where building = '$building' and date_of_occ = '$date' order by floor asc";
}
$result=mysqli_query($con1,$query);

 if($result === FALSE) { 

}
else {
	$rwid=0;
	echo('<label>Choose Floor</label>');
	echo'<select name="floor" onChange="displaygetfloor1(this.value,\''.$building.'\',\''.$date.'\')">';
	echo("<option value=''>Select One</option>");	
 while ($row=mysqli_fetch_array($result)) { 
 	$rwid=$row['floor'];
echo"<option value=" .$row['floor']."> ".$row['floor']."</option>";
 }
	echo"</select >";
}
  ?>

