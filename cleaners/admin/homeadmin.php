   <?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>

<html>
    <head>
        <title>My first PHP Website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel= "stylesheet" href="home.css" type="text/css">                    

        <script type="text/javascript">

			function showUser(str,str2,str3) {
			    //window.alert(5 + 6);
			    if (str == "") {
			        document.getElementById("txtHint").innerHTML = "";
			        return;
			    } else {
			        if (window.XMLHttpRequest) {
			            // code for IE7+, Firefox, Chrome, Opera, Safari
			            xmlhttp = new XMLHttpRequest();
			        } else {
			            // code for IE6, IE5
			            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			        }
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("txtHint").innerHTML = this.responseText;
			            }
			        };
			        //window.alert(5 + 6);
			        xmlhttp.open("GET","getuser.php?q="+str+"&q2="+str2+"&q3="+str3,true);//nameid(integer),bathroomid(integer),10.5(string)
			        //window.alert(5 + 8);

			        xmlhttp.send();
			        //window.alert(5 + 9);
			    }
			}

		function getState(y,x) {
			        if (window.XMLHttpRequest) {
			            // code for IE7+, Firefox, Chrome, Opera, Safari
			            xmlhttp = new XMLHttpRequest();
			        } else {
			            // code for IE6, IE5
			            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			        }
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById('a'+x+'b'+y).innerHTML = this.responseText;
			            }
			        };
			        xmlhttp.open("GET","findState.php?country="+x+"&y="+y,true);//nameid(integer),bathroomid(integer),10.5(string)
			        //window.alert(5 + 8);

			        xmlhttp.send();
			    }

		function getBuilding(building)
		{
			//var strURL="findbuilding.php?building="+building;
				if(building!="Add New Building")
				{
		    		document.getElementById('newbuilding').innerHTML='';
		    		document.getElementById('newfloor').innerHTML='';
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById('floorx').innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","findbuilding.php?building="+building,true);//nameid(integer),bathroomid(integer),10.5(string)
		        //window.alert(5 + 8);

		        xmlhttp.send();
		    	}
		    	else
		    	{
					//window.alert(5 + 8);
		    		document.getElementById('newbuilding').innerHTML='Other: <input type="text" required="required" name="newbuildingtext" />';
		    		document.getElementById('newfloor').innerHTML='Other: <input type="text" required="required" name="newfloortext" />';
		    	}
		}

		function getFloor(floor)
		{

				if(floor=="Add New Floor")
				{
		    		document.getElementById('newfloor').innerHTML='Other: <input type="text" name="newfloortext" />';
		    	}
		    	else
		    	{
		    		document.getElementById('newfloor').innerHTML='';	
		    	}

		}

		function getBuildingx(building)
		{
		    		document.getElementById('newbuildingx').innerHTML='';
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById('floorxx').innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","findbuildingx.php?building="+building,true);//nameid(integer),bathroomid(integer),10.5(string)
		        //window.alert(5 + 8);

		        xmlhttp.send();
		}

		function getFloorx(building,floor)
		{

		var strURL="getfloorx.php?building="+building+"&floor="+floor;

	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            req = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            req = new ActiveXObject("Microsoft.XMLHTTP");
	        }
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('showid').innerHTML=req.responseText;						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}

		}


		function displaygetBuilding(building)
		{
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById('displayfloorx').innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","displayfindbuilding.php?building="+building,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
		}

		function displaygetfloor(floor,building)
		{
		        //window.alert(5 + 8);
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById('showtable').innerHTML = this.responseText;
		            }
		        };
		        //window.alert(5 + 8);
		        xmlhttp.open("GET","showtable.php?building="+building+"&floor="+floor,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
				
		}
		function show() { document.getElementById('date').style.display = 'block'; }
        function hide() { document.getElementById('date').style.display = 'none'; }
	</script>

    </head>
    <body>
        <h2 id="title">Home Page</h2>
        <p id="greet">Hello <?php Print " $user"?>!</p> <!--Display's user name-->
        <div class="logout">
	        <i class="fa fa-sign-out"></i>
	        <a id="log" href="../logout.php">Logout</a>
	    </div>	

	<script type="text/javascript">
		function isNumberKey(evt){
	    var charCode = (evt.which) ? evt.which : event.keyCode
	    if (charCode > 31 && (charCode < 48 || charCode > 57))
	        return false;
	    return true;
	}
	</script>	
	<div id="newsh">
        <i class="fa fa-plus"></i>
		<a id="sch" href="add_schedule.php">Schedule</a>
	</div><br><br>		
	<div class="left">
	<div class="forms">	
	<h3 class="tags">Add New Bathroom</h3>
	<form action="addadminb.php" method="POST">	
		<div class="submits">
		<?php
			error_reporting(E_ALL ^ E_DEPRECATED);
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("first_db") or die("Cannor connect to server");
			$query=mysql_query("SELECT distinct building FROM bathschedule order by building asc");
			echo('<label for="building">Choose Building</label>');
			echo('<select name="building" id="building" onChange="getBuilding(value)">');
			echo('<option value="">Select One</option>');
			while($row=mysql_fetch_array($query))
			{
				$rowbuilding=$row['building'];//integer type				
				echo('<option value="'.$rowbuilding.'">'.$rowbuilding.'</option>');
			}
			echo('<option value="Add New Building">Select New Building</option>');
			echo('</select>');
		?>
		</div>	
		<div id="newbuilding"></div>
		<div id="floorx">
		<div class="selects">
			<label for="floor">Choose Floor</label>
			<select name="floor" id="floor" onChange="getFloor(value)">
			<option value="">Select One</option>
			<option value="Add New Floor">Add New Floor</option>
		</select>
		</div>
		</div>
		<div id="newfloor"></div>

		<div class="texts">
			<label for="newbath">New Bathroom Number</label>
			<input type="text" id="newbath" placeholder="Bathroom ID" name="bname" required="required" onkeypress="return isNumberKey(event)"/>
		</div><br>
		<div class="check">Bathroom Type:		
			<input type="radio" name="group1" id="radio1" value="Male" checked>Male
			<input type="radio" name="group1" id="radio2" value="Female" >Female
			<input type="radio" name="group1" id="radio3" value="Handicapped"><label for="radio3">Handicapped</label><br><br>
		</div>

		<div class="selects">
		<?php
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("first_db") or die("Cannor connect to server");
			$query=mysql_query("SELECT scheduleno FROM schedulelist order by scheduleno asc");
			echo('<label for="sche">Select from existing schedules</labe>'); 
			echo('<select name="sno" id="sche" required="required">');
			echo('<option disable selected value >Select One</option>');
			while($row=mysql_fetch_array($query))
			{
				$scheduleno=$row['scheduleno'];//integer type				
				echo('<option value="'.$scheduleno.'">'.$scheduleno.'</option>');					
			}
			echo('</select>');		
		?>
		</div><br>
		<input type="submit" value="Add to list"/> 		
	</form>
	</div>
	</div>
	

	<div class="right">
	<div class="forms">
		<h3 class="tags">Assign schedule to bathrooms</h3>
		<form action="addadminbx.php" method="POST">	
			<div class="selects">
				<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					mysql_connect("localhost","root","") or die(mysql_error());
					mysql_select_db("first_db") or die("Cannor connect to server");
					$query=mysql_query("SELECT distinct building FROM bathschedule order by building asc");
					echo('<label for="build">Choose Building</label>');
					echo('<select name="xbuilding" id="build" onChange="getBuildingx(value)">');
					echo('<option value="">Select One</option>');
					while($row=mysql_fetch_array($query))
					{
						$rowbuilding=$row['building'];//integer type				
						echo('<option value="'.$rowbuilding.'">'.$rowbuilding.'</option>');
					}
					echo('</select>');					
				?>
			</div>

			<div id="newbuildingx"></div>
			<div id="floorxx">
				<div class="selects">
					<label for="flo">Choose Floor</label>
					<select name="xfloor" id="flo">
						<option value="">Select One</option>
					</select>
				</div>
			</div>
			<div id="newfloor"></div>
			<div id="showid">
				<div class="selects">
					<label for= "baths">Choose Bathroom</label>
					<select name="idname" onChange="getidx(value)" id="baths">
						<option value="">Choose</option>
					</select>		
				</div>	
			</div>
		
		
			<?php
				mysql_connect("localhost","root","") or die(mysql_error());
				mysql_select_db("first_db") or die("Cannor connect to server");
				$query=mysql_query("SELECT scheduleno FROM schedulelist order by scheduleno asc");
				echo('<label for="sched">Choose From existing Schedule</label>');
				echo('<select name="xsno" required="required" id="sched">');
				echo('<option disable selected value >Select One</option>');
				while($row=mysql_fetch_array($query))
				{
					$scheduleno=$row['scheduleno'];//integer type				
					echo('<option value="'.$scheduleno.'">'.$scheduleno.'</option>');					
				}
				echo('</select>');								
			?><br><br>
			<div class="check">Schedule For:		
				<input type="radio" name="group2" id="for1" value="Week" onclick="hide();" checked>Week Days
				<input type="radio" name="group2" id="for2" value="Special" onclick="show();" >Special Occasions	
				<input type="radio" name="group2" id="for3" value="Both" onclick="hide();" >Weekend<br><br>
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>
				<div id="date" style="display: none;"">Select Date <input type="date" name="date" value="date"></div>
			</div>
			<br>
			<input type="submit" value="Allocate schedule!"/> 		
		</form>
	</div>
	</div>
	<br><br>

	<h1 align="center" id="faltu">Schedule Display </h1>
	<div class="show">
	<?php
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("SELECT distinct building FROM bathschedule order by building asc");
		echo('<select name="building" onChange="displaygetBuilding(value)">');
		echo('<option value="">Choose New</option>');
		while($row=mysql_fetch_array($query))
		{
			$rowbuilding=$row['building'];//integer type				
			echo('<option value="'.$rowbuilding.'">'.$rowbuilding.'</option>');
		}
		echo('</select>');
	?>
	<div id="displayfloorx"></div>
	<div id="showtable">
		<ul class="ulist">
		<?php
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("first_db") or die("Cannor connect to server");
			$query=mysql_query("Select * from bathschedule ");
			while($row=mysql_fetch_array($query))
			{
				$rowid=$row['id'];//integer type
				echo('<li class="list">');
				echo "Bathroom: $rowid<br>";
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
		    						$prevs=floor($prev).":30am";
		    				}
						    echo("Shift: $prevs - $xs</br>");							
					    }
					}
				} 
				echo("</li><br>");
			}
		?>
	</ul>
	</div>
	</div>  
</div>

</html>	



