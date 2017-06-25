<!DOCTYPE html>
<html>
<head>
<title>Add New Worker</title>
</head>
<?php	
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:../index.php");
	}
?>
<body>
  <h4>Add a worker</h4>
  <form action="addworkerlist.php" method="POST">
    Enter name <br><input type="text" name="name" required="required" /> <br/>
    Enter password <br><input type="text" name="pass" required="required" /> <br/><br>
    <div class="sex">Sex:		
		<input type="radio" name="group1" id="radio1" value="Male" checked>Male
		<input type="radio" name="group1" id="radio2" value="Female" >Female			
	</div>
    <br><input type="submit" value="Save"/>
  </form>

</body>
</html>
