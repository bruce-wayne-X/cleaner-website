
<html>
    <head>
        <title>Allocator</title>
	
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
				echo('<td ><select name="users"  onclick="printop()" >');			
						  echo("<option value=''>Select One</option>");
				echo("</select></td>");
			    }
		} 


				echo("</tr>");
		}
	?>
</table>
<p id="demo"></p> 
	<script>
		function printop()
		{
			    window.alert(5 + 6);
		document.getElementById("demo").innerHTML = 5 + 6;
		}
	</script>
</html>	
