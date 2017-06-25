

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
				    echo("Shift: $prev - $x<br>");		    
				    }
			}
		} 
				//echo("<script></script>")
				echo("<a href=../admin/showimg.php?building=".$building."&floor=".$floor."&id=".$rowid.">click for qr</a><br>");
				echo("</li><br>");
		}
		echo('</ul>');
	?>

