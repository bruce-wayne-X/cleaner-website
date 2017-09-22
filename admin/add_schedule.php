<!DOCTYPE html>
<html>
<head>
<title>Add New Schedule</title>
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<?php	
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
	$min=8;
	$max=10;
	$i=0;
?>
<body>

<div data-role="page">
  <div data-role="header">
    <h1>Range Slider</h1>
  </div>

  <div data-role="main" class="ui-content">
    <form action="schedule1.php" method="POST">
      <div data-role="rangeslider">          	
        <label for="price-min">Start Time:</label>
        <input type="range" name="time-min" id="price-min" value="<?php echo $min ?>" min="9" max="20" step="0.5">
        <label for="price-max">End Time:</label>        
        <input type="range" name="time-max" id="price-max" value="<?php echo $max ?>" min="9" max="20" step="0.5">
      </div>
        <input type="submit" data-inline="true" value="Save">               
      </form>
  </div>
  <?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
    mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database       
    $query = mysql_query("SELECT * FROM schedulelist ORDER BY scheduleno ASC LIMIT 1");
    $row = mysql_fetch_row($query);
    $userq=$_SESSION['user'];
    if ($row[0]!=0)
    {
      echo "<p>No shifts have been added in this schedule</p><br>";      
    }
    else 
    {
  		echo "<p>Some Shifts are added already<p>";      
  		$i=1;         
  		while($i<25)
  		{
    		if($row[$i]!=0)
    		{                    
  				$b=$i+1;
				while($b<25&&$row[$b]==0)
        		{
            		$b=$b+1;
          		}
          		$a=$i+8-($i-1)/2;           
          		$c=$b+8-($b-1)/2;
          		$as="";
	    		$cs="";
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
				if($c>12){
					if( $c==floor($c)) 	    					
						$cs=($c-12)."pm";
					else
						$cs=(floor($c)-12).":30pm";	    						    				
				}
				else if($c==12){
					$cs=$c."pm";
				}		    	
				else{
					if( $c==floor($c)) 	    					
						$cs=$c."am";
					else
						$as=floor($a).":30am";
				}            
          		echo "<br>Shift: $as to $cs <br>";
          		$i=$b+1;
        }
        else
        {
          $i=$i+1;
        }
      } 
    } 
  ?>
  <div data-role="main" class="ui-content">
  	<form action="schedule.php" method="POST">
  		<p>Save Bathroom Schedule as:</p>
      	<input type="text" name="name" required="required"/> 
  		<input type="submit" data-inline="true" value="Submit" >               
  	</form>
  </div>
</div> 

</body>
</html>
