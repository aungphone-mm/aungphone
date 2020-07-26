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
		
	</body>
</html>
