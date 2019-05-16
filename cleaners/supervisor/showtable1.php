

	<?php
		$building=(string)($_GET['building']);
		$floor=(string)($_GET['floor']);
		$id=(int)($_GET['id']);
		$date=(string)($_GET['date']);
		echo "<ul>";
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con1=mysqli_connect("localhost","root","","first_db") or die(mysqli_error());
		if($id==1)
		{
			$query=mysqli_query($con1,"Select * from bathschedule where building='$building' and floor = '$floor' and date_of_occ = '$date' ");	
		}
		else if($id==2)
		{
			$query=mysqli_query($con1,"Select * from occasion_schedule where building='$building' and floor = '$floor' and date_of_occ = '$date' ");		
		}
		else if($id==3)
		{
			$query=mysqli_query($con1,"Select * from bathschedule1 where building='$building' and floor = '$floor' and date_of_occ = '$date' ");		
		}
		
		while($row=mysqli_fetch_array($query))
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
						    echo("<div class='shifts'>Shift: $prevs - $xs<br>");
						    if ( $row["$x"]==-1)
						    {						   
								echo('Not Allotted</div><br>');			    
							}
							else 
								echo('Allocated</div><br>');
					    }
				}
			} 
			echo("</li></div><br>");				
		}
		echo('</ul>');
	?>

