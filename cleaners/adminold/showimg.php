
<html><body>
	<?php
		$building=(string)($_GET['building']);
		$floor=(string)($_GET['floor']);
		$rowid=(string)($_GET['id']);
		echo("<a rel='nofollow' href='http://www.qrcode-generator.de' border='0' style='cursor:default'><img src='https://chart.googleapis.com/chart?cht=qr&chl=Building%20-%20".$building."%0AFloor%20-%20".$floor."%0Aid%20-%20".$rowid."&chs=180x180&choe=UTF-8&chld=L|2' alt=''></a></td>");
	?>
<a href="../admin/homeadmin.php">go back!</a>
