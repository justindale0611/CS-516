<!DOCTYPE html>
<html>
<?php require_once("header.php");
session_start();
?>
<link rel="stylesheet" type="text/css" href="Style.CSS">

<body>
	<br>
	<form method="POST" action="login_handler.php">
			<label for="login">Login:</label><br>
			<input type="text" name="login" value=""><br>
			<label for="password>password:"</label><br>
			<input type="password" name="password">
			<button type="submit" value="Login">Login</button>
		</form>
	</body>
<?php 
	require_once("Footer.php");
?>
</html>

