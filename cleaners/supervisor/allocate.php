<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>
<!doctype html>
<html>
    <head>
        <title>Allocator</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel= "stylesheet" href="home.css" type="text/css">                    

		<script>
			function showUser(str,str2,str3,str4) {

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
			        xmlhttp.open("GET","getuser.php?id="+qwer()+"&q="+str+"&q2="+str2+"&q3="+str3+"&q4="+str4,true);//nameid(integer),bathroomid(integer),10.5(string)
			        //window.alert(5 + 8);

			        xmlhttp.send();
			        //window.alert(5 + 9);
			    }
			}

		function getState(y,x,z) {
			        if (window.XMLHttpRequest) {
			            // code for IE7+, Firefox, Chrome, Opera, Safari
			            xmlhttp = new XMLHttpRequest();
			        } else {
			            // code for IE6, IE5
			            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			        }
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById('a'+x+'b'+y+'c'+z).innerHTML = this.responseText;
			            }
			        };
			        xmlhttp.open("GET","findState.php?id="+qwer()+"&x="+x+"&y="+y+"&z="+z,true);//nameid(integer),bathroomid(integer),10.5(string)
			        //window.alert(5 + 8);

			        xmlhttp.send();
			    }
		function displaygetBuilding1(building,date)
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
		        xmlhttp.open("GET","displayfindbuilding1.php?id="+qwert()+"&building="+building+"&date="+date,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
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
		        xmlhttp.open("GET","displayfindbuilding.php?id="+qwert()+"&building="+building,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
		}
		function displaygetDate(date)
		{		
				document.getElementById('hikuchh').style.display = 'none';
				document.getElementById('abuilding1').style.display = 'block';		
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById('abuilding1').innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","displayfinddate.php?id="+qwert()+"&date="+date,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
		}
		function allotgetDate(date)
		{		
				document.getElementById('hikuch').style.display = 'none';
				document.getElementById('axbuilding1').style.display = 'block';		
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById('axbuilding1').innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","allotfinddate.php?id="+qwer()+"&date="+date,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
		}
		function allotgetBuilding1(building,date)
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
		                document.getElementById('allotfloorx').innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","allotfindbuilding1.php?id="+qwer()+"&building="+building+"&date="+date,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
		}
		function allotgetBuilding(building)
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
		                document.getElementById('allotfloorx').innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","allotfindbuilding.php?id="+qwer()+"&building="+building,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
		}
		function allotgetfloor(floor,building)
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
		                document.getElementById('allottable').innerHTML = this.responseText;
		            }
		        };
		        //window.alert(5 + 8);
		        xmlhttp.open("GET","allottable.php?id="+qwer()+"&building="+building+"&floor="+floor,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
				
		}
		function allotgetfloor1(floor,building,date)
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
		                document.getElementById('allottable').innerHTML = this.responseText;
		            }
		        };
		        //window.alert(5 + 8);
		        xmlhttp.open("GET","allottable1.php?id="+qwer()+"&building="+building+"&floor="+floor+"&date="+date,true);//nameid(integer),bathroomid(integer),10.5(string)
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
		        xmlhttp.open("GET","showtable.php?id="+qwert()+"&building="+building+"&floor="+floor,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
				
		}
		function displaygetfloor1(floor,building,date)
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
		        xmlhttp.open("GET","showtable1.php?id="+qwert()+"&building="+building+"&floor="+floor+"&date="+date,true);//nameid(integer),bathroomid(integer),10.5(string)
		        xmlhttp.send();
				
		}
		function qwer()
		{
			var gender = document.querySelector('input[name = "group1"]:checked').value;
			//document.getElementById("myd").innerHTML = gender;
			return gender;
		}		
		function qwert()
		{
			var gender1 = document.querySelector('input[name = "group2"]:checked').value;
			//document.getElementById("myd").innerHTML = gender;
			return gender1;
		}		
		function radio2()
		{
            document.getElementById('displayfloorx').innerHTML = "";
            document.getElementById('showtable').innerHTML = "";
            document.getElementById("abuilding").selectedIndex=0;
            document.getElementById("date_dis1x").selectedIndex=0;
		}
		function radio1()
		{
            document.getElementById('allotfloorx').innerHTML = "";
            document.getElementById('allottable').innerHTML = "";			
            document.getElementById("axbuilding").selectedIndex=0;
            document.getElementById("date_disx").selectedIndex=0;
		}
		function show() { 
			document.getElementById('date_dis').style.display = 'block';
			document.getElementById('axbuilding').style.display = 'none';
			document.getElementById('hikuch').style.display = 'block';
		}
		function hide() { document.getElementById('date_dis').style.display = 'none'; 
			document.getElementById('hikuch').style.display = 'none';
			document.getElementById('axbuilding1').style.display = 'none';
			document.getElementById('axbuilding').style.display = 'block';
		}
		function showw() { 
			document.getElementById('date_dis1').style.display = 'block';
			document.getElementById('abuilding').style.display = 'none';
			document.getElementById('hikuchh').style.display = 'block';
		}
		function hidd() { document.getElementById('date_dis1').style.display = 'none'; 
			document.getElementById('hikuchh').style.display = 'none';
			document.getElementById('abuilding1').style.display = 'none';
			document.getElementById('abuilding').style.display = 'block';
		}	    		
		</script>
    </head>
   
    <body>
        <h2 id="title">Home Page</h2>
        <p id="greet">Hello <?php Print " $user"?>!</p> <!--Display's user name-->
        <div class="logout">
	        <i class="fa fa-sign-out"></i>
	        <a id="log" href="../logout.php">Logout</a>
	    </div>
        <div id="newsh">
        <i class="fa fa-plus"></i>
		<a id="sch" href="addworker.php">Worker</a>
	</div><br><br>		    
	
	<div class="left"><div class="forms">
	<h1 align="center">Allocation </h1>

	<div class="check">Schedule For:		
		<input type="radio" name="group1" value="1" checked onchange="radio1()" onclick="hide();">Week Days
		<input type="radio" name="group1" value="2" onchange="radio1()" onclick="show();">Special Occasions	
		<input type="radio" name="group1" value="3" onchange="radio1()" onclick="hide();">Weekend<br><br>
	</div>
	<div id="date_dis" style="display: none;">
	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query12=mysql_query("Select distinct date_of_occ from occasion_schedule ");
		echo('<select id = "date_disx"name="datebuilding" onChange="allotgetDate(this.value)">');
		echo('<option value="">Choose Date</option>');
		while($row=mysql_fetch_array($query12))
		{
			$datebuild=$row['date_of_occ'];//integer type				
			echo('<option value="'.$datebuild.'">'.$datebuild.'</option>');
		}
		echo('</select>');
	?>	
	</div>	
	<div id="myd"></div>
	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("SELECT distinct building FROM bathschedule order by building asc");
		echo('<label>Choose Building</label>');
		echo('<select id="axbuilding" onChange="allotgetBuilding(value)">');
		echo('<option value="">Select One</option>');
		while($row=mysql_fetch_array($query))
		{
			$rowbuilding=$row['building'];//integer type				
			echo('<option value="'.$rowbuilding.'">'.$rowbuilding.'</option>');
		}
		echo('</select>');		
	?>	
	<div id="hikuch" style="display: none;">
	<select><option>Select One</option></select></div>
	<div id="axbuilding1"></div>
	<div id="allotfloorx"></div>
	<div id="allottable"></div>
	</div></div>

	<div class="right"><div class="forms">
	<h1 align="center">Allocation Display</h1>
	<div class="check">Schedule For:		
		<input type="radio" name="group2" id="2" onchange="radio2()" value="1" checked onclick="hidd();">Week Days
		<input type="radio" name="group2" id="2" onchange="radio2()" value="2" onclick="showw();">Special Occasions	
		<input type="radio" name="group2" id="2" onchange="radio2()" value="3" onclick="hidd();">Weekend<br><br>
	</div>
	<div id="date_dis1" style="display: none;">
	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query123=mysql_query("Select distinct date_of_occ from occasion_schedule ");
		echo('<select id="date_dis1x" name="datebuildingx" onChange="displaygetDate(this.value)">');
		echo('<option value="">Choose Date</option>');
		while($row1=mysql_fetch_array($query123))
		{
			$datebuild1=$row1['date_of_occ'];//integer type				
			echo('<option value="'.$datebuild1.'">'.$datebuild1.'</option>');
		}
		echo('</select>');
	?>	
	</div>

	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("SELECT distinct building FROM bathschedule order by building asc");
		echo('<label>Choose Building</label>');
		echo('<select id="abuilding" onChange="displaygetBuilding(value)">');		
		echo('<option value="">Select One</option>');
		while($row=mysql_fetch_array($query))
		{
			$rowbuilding=$row['building'];//integer type				
			echo('<option value="'.$rowbuilding.'">'.$rowbuilding.'</option>');
		}
		echo('</select>');

		
	?>
	<div id="hikuchh" style="display: none;">
	<select><option>Select One</option></select></div>
	<div id="abuilding1"></div>
	<div id="displayfloorx"></div>
	<div id="showtable"></div>
</div>
</div>

</body>
</html>	