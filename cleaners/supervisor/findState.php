
<?php 
		$x=(double)($_GET['x']);
		$y=(int)($_GET['y']);
		$z=(double)($_GET['z']);
		$id=(int)($_GET['id']);
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con1=mysqli_connect("localhost","root","","first_db") or die(mysqli_error());
		if($id==1)
		{
		$gend=mysqli_query($con1,"SELECT type FROM bathschedule where id='$y'");
		$gen=mysqli_fetch_assoc($gend);		
		}else if($id==2)
		{$gend=mysqli_query($con1,"SELECT type FROM occasion_schedule where id='$y'");
		$gen=mysqli_fetch_assoc($gend);		
		}else if($id==3)
		{$gend=mysqli_query($con1,"SELECT type FROM bathschedule1 where id='$y'");
		$gen=mysqli_fetch_assoc($gend);		
		}
		$dx=$gen['type'];
		if($dx=='H')
			$dx='M';		
		$query="SELECT * FROM cleaners where sex='$dx'";
		$result=mysqli_query($con1,$query);
		//echo"why do we fall";
 		if($result === FALSE) { 
		}	
		else {
			$rwid=0;
			echo'<select onhover="getState('.$y.','.$x.','.$z.')" onchange="showUser(this.value,'.$y.','.$x.','.$z.')">';
			echo("<option value=''>Select Worker</option>");	
				while ($row=mysqli_fetch_array($result)) { 
					$rwid=$row['id'];
				echo"<option value=" .$row['id']."> ".$row['name']."</option>";
				}
			echo"</select >";
		}
  ?>