<?php
	$id=$_GET['id'];

	include("dbcon.php");
	mysql_select_db("employee_db") or die(mysql_error());
	$sql="SELECT * FROM employee WHERE No=$id;";
	$result=mysql_query($sql) or die(mysql_error());
	$row=mysql_fetch_array($result);
?>
<html>
	<body>
	<form name="frm" action="updateemployee.php" method="post">
	<table>
		<tr><td><a href="allquery.php">Home</a></td></tr>
		<tr><td>First Name:</td><td>
	<input type="text" name="fname" value="<?php echo $row[1]; ?>"></td></tr>
	<tr><td>Last Name:</td><td>
	<input type="text" name="lname" value="<?php echo $row[2]; ?>"></td></tr>
	<tr><td>Position:</td><td><input type="text" name="position" value="<?php echo $row[3]; ?>"></td></tr>
	<tr><td>Email:</td><td>
	<input type="text" name="email" value="<?php echo $row[4]; ?>"></td></tr>
	<tr><td>Phone:</td><td>
	<input type="text" name="ph" value="<?php echo $row[5]; ?>"></td></tr>
	<tr><td>Age:</td><td>
	<input type="text" name="age" value="<?php echo $row[6]; ?>"></td></tr>
	<tr><td>Gender:</td><td>
	<input type="text" name="gender" value="<?php echo $row[7]; ?>"></td></tr>
	<tr><td>Address:</td><td>
	<input type="text" name="address" value="<?php echo $row[8]; ?>"></td></tr>
	<tr><td>About:</td><td>
	<input type="text" name="about" value="<?php echo $row[9]; ?>"></td></tr>
	<input type="hidden" name="sub" value="<?php echo $id; ?>">
	<tr><td><input type="submit" value="Update" name="submit"></td></tr>
	</table>
	</form>
	</body>
</html>