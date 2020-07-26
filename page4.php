<?php	
	session_start();
	if(!isset($_SESSION['login'])){
	header("location:page3.php");
	}
?>
	<html>
	member page....4
	<a href="logout.php">logout</a>
</html>