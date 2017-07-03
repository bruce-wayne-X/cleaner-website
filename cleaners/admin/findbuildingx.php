
<?php $building=(string)($_GET['building']);
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con1=mysqli_connect("localhost","root","","first_db") or die(mysqli_error());


$query="SELECT distinct floor FROM bathschedule where building = '$building' order by floor asc";
$result=mysqli_query($con1,$query);

 if($result === FALSE) { 

}
else {
	$rwid=0;
	echo('<label>Choose Floor</label>');
	echo'<select name="xfloor" onChange="getFloorx(\''.$building.'\',this.value)">';


	echo("<option value=''>Select One</option>");	
 while ($row=mysqli_fetch_array($result)) { 
 	$rwid=$row['floor'];
echo"<option value=" .$row['floor']."> ".$row['floor']."</option>";
 }
	echo"</select >";
}
  ?>

