<?php 
 
	if($_SERVER['REQUEST_METHOD']=='GET')
	{
 
	 $id  = $_GET['id'];
	 $response = array(); 

	   //$user = $_SESSION['user'];
	    error_reporting(E_ALL ^ E_DEPRECATED);
		    $con= mysql_connect("localhost", "id2079965_admin", "963147") or die (mysql_error()); //Connect to server
		    	mysql_select_db("id2079965_first_db") or die ("Cannot connect to database"); //Connect to database
		    	//$pid = mysql_query("Select * from cleaners WHERE name='$user'"); // Query the users table	    	
		    	//$ppid =mysql_fetch_assoc($pid);
		    	//$id=$ppid['id'];	    	
		    	$col=5;	 
		    	$query1 = mysql_query("Select * from bathschedule");   	
		    	$rows=mysql_num_rows($query1);	    	
		    	$visit = array(); // array of columns
				for($col=0; $col<29; $col++)
				{
	    			$visit[$col] = array(); // array of cells for column $c
	    			for($r=0; $r<$rows; $r++)
	    			{
	        			$visit[$col][$r] = 0;
	    			}
				}
				$r=0;
				$i=1;	
				//echo "<ul>";
		    	for ($col=5;$col<29;$col=$col+1)
		    	{
		    		$r=0;
		    		$query = mysql_query("Select * from bathschedule");
		    		while($row = mysql_fetch_row($query))
		    		{
		    			if (($row[$col]==$id)&&($visit[$col][$r]==0))
		    			{
		    				$coll=$col+1;
		    				$visit[$col][$r]=1;	    				
		    				while(($row[$col]!=$row[$coll])&&$coll<28)
		    				{
		    					$coll=$coll+1;	
		    				}	    				
		    				$visit[$coll][$r]=1;
		    				$a=$col+4-($col-5)/2;
		    				$b=$coll+4-($coll-5)/2;	
		    				$as="";
		    				$bs="";
		    				if($a>12){
		    					if( $a==floor($a)) 	    					
		    						$as=($a-12)."pm";	    						    					
		    					else
		    						$as=(floor($a)-12).":30pm";
		    				}
		    				else if($a==12){	    				
		    					$as=$a."pm";

		    				}		    	
		    				else{
		    					if( $a==floor($a))    					
		    						$as=$a."am";	    					
		    					else
		    						$as=floor($a).":30am";

		    				}
		    				if($b>12){
		    					if( $b==floor($b)) 	    					
		    						$bs=($b-12)."pm";
		    					else
		    						$bs=(floor($b)-12).":30pm";	    						    				
		    				}
		    				else if($b==12){
		    					$bs=$b."pm";
		    				}		    	
		    				else{
		    					if( $b==floor($b)) 	    					
		    						$bs=$b."am";
		    					else
		    						$as=floor($a).":30am";
		    				}    								    		
		    				//echo "<div class='shifts'><li>Time $as - $bs<br>";
		    				//echo "Bathroom $row[0]<br>";
		    				//echo "Building: $row[1] Floor: $row[2]<br></div><br></li>";
		    				$response[$i]= $as;       
		    				$response[$i+1]= $bs;
		    				$response[$i+2]= $row[0];
		    				$response[$i+3]= $row[1];
		    				$response[$i+4]= $row[2];
		    			$i=$i+5;
		    			}
		    			$r=$r+1;

		    		}
		    	}
		    	$response["length"]=$i-1;
		    	echo json_encode($response);
mysql_close($con);
	}	    	
?>
 
