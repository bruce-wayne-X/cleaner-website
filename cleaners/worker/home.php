<html>
    <head>
        <title>My first PHP Website</title>
        <link href = "homework.css" type = "text/css" rel = "stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Raleway:100,500,600,800"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript">
		    var datefield=document.createElement("input")
		    datefield.setAttribute("type", "date")
		    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
		        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
		        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
		        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n') 
		    }
		</script>
		 
		<script>
		if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
		    jQuery(function($){ //on document.ready
		        $('#dato').datepicker({
		        	dateFormat: 'yy-mm-dd'
		        });
		    })
		}
		</script>
 	   </head>
   <?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  	
   }
   else{
      header("location: ../index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value   
   ?>
    <body>
        <h2 id="title">Home Page</h2>
        <p id = "greet">Hello <?php Print " $user"?>!</p> <!--Display's user name-->

        <div class="logout">
	        <i class="fa fa-sign-out"></i>
	        <a id="log" href="../logout.php">Logout</a>
	    </div><br/><br/>    
        <div id="newsh">
        	<i class="fa fa-pencil"></i>
			<a id="sch" href="changepassword.php">Password</a>
		</div><br><br>
		<div class="show left">
		<h3 class="subh">Your schedule for today</h3>       
	    <p id="content"><?php       
	        error_reporting(E_ALL ^ E_DEPRECATED);
	        mysql_connect("localhost", "root", "") or die (mysql_error()); //Connect to server
	    	mysql_select_db("first_db") or die ("Cannot connect to database"); //Connect to database
	    	$pid = mysql_query("Select * from cleaners WHERE name='$user'"); // Query the users table	    	
	    	$ppid =mysql_fetch_assoc($pid);
	    	$id=$ppid['id'];	    	
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
			echo "<ul>";
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
	    				echo "<div class='shifts'><li>Time $as - $bs<br>";
	    				echo "Bathroom $row[0]<br>";
	    				echo "Building: $row[1] Floor: $row[2]<br></li></div><br>";
	    			}
	    			$r=$r+1;
	    		}
	    	}
	    	echo "</ul>";
	    	?>        
	    </p>
	    </div>
	    <div class="right">	
			<form action="home.php">
				<h3>Take a Leave</h3><br>
				Enter Date: <br><input type="date" name="fname"><br><br>
				Enter Reason: <br><input type="text" name="lname"><br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
    </body>
</html>	
