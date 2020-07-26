<?php
	if(isset($_GET['msg']))
	echo $_GET['msg'];
?>
	
<html>
	<body>
		<form name="frm" action="login.php" method="post">
		User Name:<input type="text" name="uname">
		Password:<input type="password" name="pass">
		<input type="submit" name="submit" value="Login">
		</form>
		<form name="reg" action="register.php" method="post">
		User Name:<input type="text" name="regname">
		Password:<input type="password" name="regpass">
		<input type="submit" name="submit" value="Register">
		</form>
	</body>
</html>
