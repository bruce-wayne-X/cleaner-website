
<?php 
		$building=(string)($_GET['building']);
		$id=(int)($_GET['id']);
		error_reporting(E_ALL ^ E_DEPRECATED);
		
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
if($id==1)
{
	$query="SELECT distinct floor FROM bathschedule where building = '$building' order by floor asc";
}
else if($id==2)
{
	$query="SELECT distinct floor FROM occasion_schedule where building = '$building' order by floor asc";
}
else if($id==3)
{
	$query="SELECT distinct floor FROM bathschedule1 where building = '$building' order by floor asc";
}
$result=mysql_query($query);

 if($result === FALSE) { 

}
else {
	$rwid=0;
	echo('<label>Choose Floor</label>');
	echo'<select name="floor" onChange="displaygetfloor(this.value,\''.$building.'\')">';
	echo("<option value=''>Select One</option>");	
 while ($row=mysql_fetch_array($result)) { 
 	$rwid=$row['floor'];
echo"<option value=" .$row['floor']."> ".$row['floor']."</option>";
 }
	echo"</select >";
}
  ?>

