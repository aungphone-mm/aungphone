<?php
	session_start();
	$_SESSION['login']=0;
	session_destroy();
	header("location:index1.php");
	?>