<div class="containo">
<?php 
	date_default_timezone_set("America/Lima");
	$building=(string)($_GET['building']);	
	//echo($id);

	error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("first_db") or die("Cannor connect to server");	
	$query="SELECT distinct floor FROM attendance where building = '$building' order by floor desc";	
	
	$result=mysql_query($query);
	
	if($result === FALSE) { 
	}
	else {			
			while ($row=mysql_fetch_array($result)) {				
				$rwid=$row['floor'];
				$query1="SELECT distinct id FROM attendance where building = '$building' and floor = '$rwid' order by id asc";
				$result1=mysql_query($query1);
				$widthh=mysql_num_rows($result1);
				$with = 255*$widthh;
				echo '<div class="fl" style="width:'.$with.'px">';
				while($row1=mysql_fetch_array($result1)){
					$bathid=$row1['id'];
					echo '<div class="foo">';
					$query2="SELECT * FROM attendance where building = '$building' and floor = '$rwid' and id='$bathid'";
					$result2=mysql_query($query2);
					$data=mysql_fetch_row($result2);
					$schdd=$data[4];
					$query3="SELECT shifts FROM schedulelist where scheduleno='$schdd'";
					$result3=mysql_query($query3);
					$shift=mysql_fetch_array($result3);
					$shiftno=$shift['shifts'];
					$sc=100/$shiftno;				
					$visit = array(); // array of columns				
					for($col=0; $col<52; $col++)
					{		    		
		        			$visit[$col] = 0;		    			
					}
					for($j=5;$j<52;$j=$j+2)
					{
						if($data[$j]!=0&&($visit[$j]==0)){
							$k=$j+2;
	    					$visit[$j]=1;	    				
		    				while(($data[$j]!=$data[$k])&&$k<52)
		    				{
		    					$k=$k+2;	
		    				}		    				
		    				$visit[$k]=1;
		    				$ab=($j+31)/4;
		    				$cd=($k+31)/4;
		    				$start="";
		    				$end="";
		    				if($ab>12){
		    					if( $ab==floor($ab)) 	    					
		    						$start=($ab-12)."pm";	    						    					
		    					else
		    						$start=(floor($ab)-12).":30pm";
		    				}
		    				else if($ab==12){	    				
		    					$start=$ab."pm";

		    				}		    	
		    				else{
		    					if( $ab==floor($ab))    					
		    						$start=$ab."am";	    					
		    					else
		    						$start=floor($ab).":30am";

		    				}
		    				if($cd>12){
		    					if( $cd==floor($cd)) 	    					
		    						$end=($cd-12)."pm";
		    					else
		    						$end=(floor($cd)-12).":30pm";	    						    				
		    				}
		    				else if($cd==12){
		    					$end=$cd."pm";
		    				}		    	
		    				else{
		    					if( $cd==floor($cd)) 	    					
		    						$end=$cd."am";
		    					else
		    						$end=floor($cd).":30am";
		    				} 
		    				$bno=$data[0];
		    				$flo=$data[2];
		    				$wor=$data[$j];
		    				$queryy=mysql_query("select name from cleaners where id = '$wor'");
		    				$resultt= mysql_fetch_assoc($queryy);
		    				if (mysql_num_rows($queryy)==0){
		    					$worker="No Worker Alloted";
		    				}
		    				else{
		    					$worker=$resultt['name'];
		    				}
		    				if($data[$j+1]==-1){
		    					if (date('H')<$ab){		    						
		    						if (floor($ab)==$ab){
		    							echo '<div class = "small" style="width:'.$sc.'%;background:white">';	
		    							echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Not Done</p></div></div>';
										echo '</div>';
									}
									else {	
										if (date('i')<30){
											echo '<div class = "small" style="width:'.$sc.'%;background:white">';						
											echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Not Done</p></div></div>';				
											echo '</div>';
										}
										else {
											echo '<div class = "small" style="width:'.$sc.'%;background:yellow">';							
											echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Not Done</p></div></div>';
											echo '</div>';
										}
									}
		    					}
		    					else if (date('H')>=$ab&&date('H')<$cd){
		    						if (floor($cd)==$cd){
		    							echo '<div class = "small" style="width:'.$sc.'%;background:yellow">';	
		    							echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Not Done</p></div></div>';
										echo '</div>';
									}
									else {	
										if (date('i')<30){
											echo '<div class = "small" style="width:'.$sc.'%;background:yellow">';
											echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Not Done</p></div></div>';
											echo '</div>';
										}
										else {
											echo '<div class = "small" style="width:'.$sc.'%;background:red">';	
											echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Not Done</p></div></div>';
											echo '</div>';
										}
									}
		    					}	
		    					else{
		    						echo '<div class = "small" style="width:'.$sc.'%;background:red">';	
		    						echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Not Done</p></div></div>';
									echo '</div>';
		    					}		    					
		    				}
		    				else if($data[$j+1]==1){
		    					echo '<div class = "small" style="width:'.$sc.'%;background:green">';	
		    					echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Done on Time</p></div></div>';
								echo '</div>';
		    				}
		    				else if($data[$j+1]==2){
		    					echo '<div class = "small" style="width:'.$sc.'%;background:orange">';	
		    					echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'<br>Status : Done Late</p></div></div>';
								echo '</div>';
		    				}
		    				else {
		    					echo '<div class = "small" style="width:'.$sc.'%;background:black">';
		    					echo '<div class="dropdown"><div class="dropbtn"> Dropdown</div><div class="dropdown-content"><p>Shift: '.$start.' - '.$end.'<br>Bathroom No. '.$bno.'<br>Floor '.$flo.'<br>Worker : '.$worker.'</p></div></div>';
		    					echo '</div>';
		    				}
						}
					}
					echo '</div>';
				}
				echo "</div><br><br><br>";
			}
		}
?></div>