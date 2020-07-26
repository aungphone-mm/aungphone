<?php

	$sub=$_POST['sub'];
//echo var_dump($_POST);exit();	
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
	$result=mysql_query("UPDATE employee SET First_Name='$fname',Last_Name='{$lname}',Position='{$position}',Email='{$email}',PH='{$ph}',Age='{$age}',Gender='{$gender}',Address='{$address}',About='{$about}' WHERE No={$sub}") or die(mysql_error());
	header("location:allquery.php");
	mysql_close($con);
?>
