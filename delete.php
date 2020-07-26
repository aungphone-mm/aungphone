<?php
	$id=$_GET['id'];
	
	include("dbcon.php");
	mysql_select_db("employee_db",$con);
	mysql_query("DELETE FROM employee WHERE No=$id");
	header("location:allquery.php");
?>