
<?php 
		$building=(string)($_GET['building']);
		$floor=(string)($_GET['floor']);
		$date=(string)($_GET['date']);
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con1=mysqli_connect("localhost","root","","first_db") or die(mysqli_error());
		echo('<ul class="ulist">');
		//echo($date);
		$query=mysqli_query($con1,"Select * from occasion_schedule where building='$building' and floor = '$floor' and date_of_occ='$date'");
		while($row=mysqli_fetch_array($query))
		{
			$rowid=$row['id'];//integer type
			echo('<li class="list">');
			echo("Bathroom: $rowid</br>");
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
						    echo("Shift: $prevs - $xs</br>");
				    }
			}
		} 
				//echo("<script></script>")
				echo("Date: ");
				echo $row['date_of_occ'];								
				echo("<br><a href=../admin/showimg.php?building=".$building."&floor=".$floor."&id=".$rowid.">click for qr</a><br>");
				echo("</li><br>");
		}
		echo('</ul>');

  ?>

