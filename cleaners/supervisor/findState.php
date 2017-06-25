
<?php 
		$x=(double)($_GET['x']);
		$y=(int)($_GET['y']);
		$z=(double)($_GET['z']);
		$id=(int)($_GET['id']);
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		if($id==1)
		{
		$gend=mysql_query("SELECT type FROM bathschedule where id='$y'");
		$gen=mysql_fetch_assoc($gend);		
		}else if($id==2)
		{$gend=mysql_query("SELECT type FROM occasion_schedule where id='$y'");
		$gen=mysql_fetch_assoc($gend);		
		}else if($id==3)
		{$gend=mysql_query("SELECT type FROM bathschedule1 where id='$y'");
		$gen=mysql_fetch_assoc($gend);		
		}
		$dx=$gen['type'];
		if($dx=='H')
			$dx='M';		
		$query="SELECT * FROM cleaners where sex='$dx'";
		$result=mysql_query($query);
		//echo"why do we fall";
 		if($result === FALSE) { 
		}	
		else {
			$rwid=0;
			echo'<select onhover="getState('.$y.','.$x.','.$z.')" onchange="showUser(this.value,'.$y.','.$x.','.$z.')">';
			echo("<option value=''>Select Worker</option>");	
				while ($row=mysql_fetch_array($result)) { 
					$rwid=$row['id'];
				echo"<option value=" .$row['id']."> ".$row['name']."</option>";
				}
			echo"</select >";
		}
  ?>

