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
			        xmlhttp.open("GET","getuser.php?q="+str+"&q2="+str2+"&q3="+str3+"&q4="+str4,true);//nameid(integer),bathroomid(integer),10.5(string)
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
			        xmlhttp.open("GET","findState.php?x="+x+"&y="+y+"&z="+z,true);//nameid(integer),bathroomid(integer),10.5(string)
			        //window.alert(5 + 8);

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
		        xmlhttp.open("GET","displayfindbuilding.php?building="+building,true);//nameid(integer),bathroomid(integer),10.5(string)
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
		        xmlhttp.open("GET","allotfindbuilding.php?building="+building,true);//nameid(integer),bathroomid(integer),10.5(string)
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
		        xmlhttp.open("GET","allottable.php?building="+building+"&floor="+floor,true);//nameid(integer),bathroomid(integer),10.5(string)
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
	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("SELECT distinct building FROM bathschedule order by building asc");
		echo('<label>Choose Building</label>');
		echo('<select name="xbuilding" onChange="allotgetBuilding(value)">');
		echo('<option value="">Select One</option>');
		while($row=mysql_fetch_array($query))
		{
			$rowbuilding=$row['building'];//integer type				
			echo('<option value="'.$rowbuilding.'">'.$rowbuilding.'</option>');
		}
		echo('</select>');		
	?>	
	<div id="allotfloorx"></div>
	<div id="allottable"></div>
	</div></div><br>
	<div class="right"><div class="forms">
	<h1 align="center">Allocation Display</h1>
	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
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
		<div id="displayfloorx">

		</div>
	<div id="showtable">
<table border="1 px" width="100%">
	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("Select * from bathschedule ");
		while($row=mysql_fetch_array($query))
		{
			$rowid=$row['id'];//integer type
			echo("<tr>");
			echo('<td align="center"> '.$row['id'].'</td>');
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
				    echo("<td align='center'>$prev - $x</td>");
					echo('<td >Allotted</td>');			    
				    }
			}
		} 


				echo("</tr>");
		}
	?>
</table></div>
</div>
</div>

</body>
</html>	