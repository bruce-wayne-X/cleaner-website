
<?php 
		$building=(string)($_GET['building']);
		$floor=(string)($_GET['floor']);
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysqli_connect("localhost","root","","first_db") or die(mysqli_error());

$query1="SELECT distinct id FROM bathschedule where building = '$building' and floor = '$floor'order by id asc";
$result1=mysqli_query($con1,$query1);

 if($result1 === FALSE) { 
	echo'why do we fall';
}
else {
	
	echo('<label>Choose Bathroom</label>');
	echo'<select name="idname" >';


	echo("<option value=''>Select One</option>");	
		 
		 
		 //var_dump($row1);
		 while ($row1=mysqli_fetch_assoc($result1)) 
		 { 
		 	
			echo"<option value=" .$row1['id']."> ".$row1['id']."</option>";
		 }

	
	echo("</select>");
}
  ?>

