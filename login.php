<?php
	session_start();
	$stru=$_POST['uname'];
	$strp=$_POST['pass'];
	$msg="Login fail>>@@!!!^&*";
	
	include("dbcon.php");
	mysql_select_db("member_db",$con);
	$result=mysql_query("SELECT * FROM member_tbl WHERE username='$stru' AND password='$strp'");
	$acc=mysql_num_rows($result);
	if($acc!=0){
		$_SESSION['login']=1;
		header("location:page4.php");
		} else {
		header("location:page3.php?msg=$msg");
		}
?>