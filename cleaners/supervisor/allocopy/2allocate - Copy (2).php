<!doctype html>
<html>
    <head>
        <title>Allocator</title>
		<script>
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

		function getState(x) {
			        if (window.XMLHttpRequest) {
			            // code for IE7+, Firefox, Chrome, Opera, Safari
			            xmlhttp = new XMLHttpRequest();
			        } else {
			            // code for IE6, IE5
			            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			        }
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById('a'+x).innerHTML = this.responseText;
			            }
			        };
		var strURL="findState.php?country="+x;

		var req = getXMLHTTP();
//			    window.alert(5 + 6);		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('a'+x).innerHTML=req.responseText;
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);

		}		
	
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
        <h2>Home Page</h2>
        <p>Hello <?php Print " $user"?>!</p> <!--Display's user name-->
        <a href="../logout.php">Click here to go logout</a><br/><br/>
    <h2 align="center">Bathroomchi list.abhi bohot modification karna hai.lockdown bhi to karna padega yaar</h2>
    <table border="1 px" width="100%">
    <tr>
    	<th>Id</th>
		<th>Cleaning Date and Time</th>
		<th>Alert the Engineer?</th>
		<th>Any Additional COmments?</th>
		<th>Incharge</th>
		<th>Edit</th>
		<th>Delete</th>
		<th>Bathroom_details</th>
	</tr>

	</table>
	<script type="text/javascript">
		function isNumberKey(evt){
	    var charCode = (evt.which) ? evt.which : event.keyCode
	    if (charCode > 31 && (charCode < 48 || charCode > 57))
	        return false;
	    return true;
	}
	</script>

    <form action="addadminb.php" method="POST">	
		<input type="name" name="bname" required="required" onkeypress="return isNumberKey(event)"/>
		 <select name="sno" required="required">
		  <option disable selected value>Select One</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		</select>

		<input type="submit" value="Add to list"/> 		
	</form>
<table border="1 px" width="100%">
	<?php
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("first_db") or die("Cannor connect to server");
		$query=mysql_query("Select * from bathschedule ");
		while($row=mysql_fetch_array($query))
		{
			$rowid=$row['id'];//integer type
			echo("<tr>");
			echo('<td align="center"> '.$row['id'].'</td>');
		$x=0;//float type?
		for ($x = 9; $x <= 20.5; $x=$x+0.5) 
		{
		if($row["$x"]==1)
			    {echo("<td align='center'>$x</td>");
				echo('<td ><div id="a'.$x.'"><select name="users"  onclick="getState('.$x.')" onchange="showUser(value,'.$rowid.','.$x.')">');		  echo("<option value=''>Select One</option>");

				echo("</select></div></td><div id='txtHint'></div>");
			    }
		} 


				echo("</tr>");
		}
	?>
</table>

</html>	
