<?php
			include("dbcon.php");
			mysql_select_db("employee_db") or die(mysql_error());
			$sql="SELECT * FROM employee;";
			$result=mysql_query($sql);
			
?>
<html>
	<script type="text/javascript">
	function deleteId(id)
		{
			var id=id;
			var del=window.confirm("Are you sure to delete");
				if (del==true)
				{
					window.location="deleteq.php?id="+id;
					}
		}
		</script>
	
	<body>
<?php
			echo "<table border=1>";
			echo "<tr><td>Name</td><td>Position</td><td>Email</td><td>Phone</td><td>Age</td><td>Gender</td><td>Address</td><td>About</td><td>Action</td></tr>";
			while($row=mysql_fetch_array($result)){
			echo "<tr><td>".$row[1]." ".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td><a href='#' onClick='deleteId($row[0]);'>delete</a>  <a href='updateq.php?id={$row[0]}'>Update</a>
			</td></tr>";
			}
			echo "</table>";
?>
<a href="insertemp.php">Insert Employee</a>
		<form name="frm" action="insertemployee.php" method="post">
	<table>
	<tr><td><a href="allquery.php">Home</a></td></tr>
		<tr><td>First Name:</td><td>
	<input type="text" name="fname"></td></tr>
	<tr><td>Last Name:</td><td>
	<input type="text" name="lname"></td></tr>
	<tr><td>Position:</td><td><input type="text" name="position"></td></tr>
	<tr><td>Email:</td><td>
	<input type="text" name="email"></td></tr>
	<tr><td>Phone:</td><td>
	<input type="text" name="ph"></td></tr>
	<tr><td>Age:</td><td>
	<input type="text" name="age"></td></tr>
	<tr><td>Gender:</td><td> 
	<input type="text" name="gender"></td></tr>
	<tr><td>Address:</td><td>
	<input type="text" name="address"></td></tr>
	<tr><td>About:</td><td>
	<input type="text" name="about"></td></tr>
	<input type="hidden" name="sub">
	<tr><td><input type="submit" value="Insert"></td></tr>
	</table>
	</form>
	</body>
</html>
