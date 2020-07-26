<?php
	
	$user=$_POST['regname'];
	$pass=$_POST['regpass'];
	$msg="Register successful";
	include("dbcon.php");
	mysql_select_db("member_db",$con);
	mysql_query("INSERT INTO member_tbl (username,password) VALUES ('$user','$pass')");
	header("location:page3.php?msg=$msg");
	mysql_close($con);
?>
