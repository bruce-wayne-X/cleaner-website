

	<?php
		$building=(string)($_GET['building']);
		$id=(int)($_GET['id']);
		$floor=(string)($_GET['floor']);
		$date=(string)($_GET['date']);
		echo "<ul>";
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		if($id==1)
			$query=mysql_query("Select * from bathschedule where building='$building' and floor = '$floor' and date_of_occ = '$date' ");
		else if($id==2)
			$query=mysql_query("Select * from occasion_schedule where building='$building' and floor = '$floor' and date_of_occ = '$date'");
		else if($id==3)
			$query=mysql_query("Select * from bathschedule1 where building='$building' and floor = '$floor' and date_of_occ = '$date'");
		
		while($row=mysql_fetch_array($query))
		{

			$rowid=$row['id'];//integer type
			echo("<div class='baths'><li class='work'>Bathroom: ");
			echo $row['id'];
			echo "<br><br>";
			$x=0;//float type?
			$y=0;//arity:P
			$prev;
			for ($x = 9; $x <= 20.5; $x=$x+0.5) 
			{
				if($row["$x"]!=0)
				{
					    if($y==0)
					    {
					    	$y++;
					    	$prev=$x;
					    }
					    else if($y==1)
					    {
					    $y=0;
					    $prevs="";
		    				$xs="";
		    				if($prev>12){
		    					if( $prev==floor($prev)) 	    					
		    						$prevs=($prev-12)."pm";	    						    					
		    					else
		    						$prevs=(floor($prev)-12).":30pm";
		    				}
		    				else if($prev==12){	    				
		    					$prevs=$prev."pm";

		    				}		    	
		    				else{
		    					if( $prev==floor($prev))    					
		    						$prevs=$prev."am";	    					
		    					else
		    						$prevs=floor($prev).":30am";

		    				}
		    				if($x>12){
		    					if( $x==floor($x)) 	    					
		    						$xs=($x-12)."pm";
		    					else
		    						$xs=(floor($x)-12).":30pm";	    						    				
		    				}
		    				else if($x==12){
		    					$xs=$x."pm";
		    				}		    	
		    				else{
		    					if( $x==floor($x)) 	    					
		    						$xs=$x."am";
		    					else
		    						$xs=floor($x).":30am";
		    				}
					    echo("<div class='shifts'>Shift: $prevs - $xs");
						echo('<div id="a'.$x.'b'.$rowid.'c'.$prev.'"><select name="users" onclick="getState('.$rowid.','.$x.','.$prev.')" onchange="showUser(value,'.$rowid.','.$x.','.$prev.')">');
						echo("<option value=''>Select Worker</option>");

						echo("</select></div></div><br>");
						}
				}
			} 
			echo("</li></div><br>");
		}
		echo('</ul >');
	?>

