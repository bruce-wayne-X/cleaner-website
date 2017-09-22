	<br><div class="body1">
	<div class="tabbed">
      <input name="tabbed" id="tabbed1" type="radio" checked>
      <section>
        <h1>
          <label for="tabbed1">Week Days</label>
        </h1>
        <div>
	<?php
		$building=(string)($_GET['building']);
		$floor=(string)($_GET['floor']);
		echo('<ul>');
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("Select * from bathschedule where building='$building' and floor = '$floor' ");
		while($row=mysql_fetch_array($query))
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
				echo("<a href=../admin/showimg.php?building=".$building."&floor=".$floor."&id=".$rowid.">click for qr</a><br>");
				echo("</li><br>");
		}
		echo('</ul>');
	?>
	</div>
      </section>
      <input name="tabbed" id="tabbed2" type="radio">
      <section>
        <h1>
          <label for="tabbed2">Occasion</label>
        </h1>
        <div>       
		<ul class="ulist">
		<?php
		$building=(string)($_GET['building']);
		$floor=(string)($_GET['floor']);		
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("Select * from occasion_schedule where building='$building' and floor = '$floor' ");
		while($row=mysql_fetch_array($query))
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
	</ul>
	</div>
      </section>
      <input name="tabbed" id="tabbed3" type="radio">
      <section>
        <h1>
          <label for="tabbed3">Weekend</label>
        </h1>
        <div>
          <ul class="ulist">
		<?php
		$building=(string)($_GET['building']);
		$floor=(string)($_GET['floor']);	
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("Select * from bathschedule1 where building='$building' and floor = '$floor' ");
		while($row=mysql_fetch_array($query))
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
				echo("<a href=../admin/showimg.php?building=".$building."&floor=".$floor."&id=".$rowid.">click for qr</a><br>");
				echo("</li><br>");
		}
		echo('</ul>');
	?>
	</ul>
        </div>
      </section>
    </div>
    </div>