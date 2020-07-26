<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$position=$_POST['position'];
$email=$_POST['email'];
$ph=$_POST['ph'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$about=$_POST['about'];

include("dbcon.php");
	mysql_select_db("employee_db",$con);
	mysql_query("INSERT INTO employee (First_Name,Last_Name,Position,Email,PH,Age,Gender,Address,About) VALUES ('$fname','$lname','$position','$email','$ph','$age','$gender','$address','$about')");
	header("location:allquery.php");
	mysql_close($con);
?>
