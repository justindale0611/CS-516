<!DOCTYPE html>
<html>
<?php require_once("header.php");
session_start();
?>
<link rel="stylesheet" type="text/css" href="Style.CSS">

<body>
	<br>
	<form method="POST" action="login_handler.php">
			Login:<br>
			<input type="text" name="login" value=""><br>
			password:<br>
			<input type="password" name="password">
			<div><input type="submit" value="Login">    </div>
		</form>
	</body>
<?php 
	require_once("Footer.php");
?>
</html>

