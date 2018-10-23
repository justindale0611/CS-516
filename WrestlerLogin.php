<!DOCTYPE html>
<html>
<?php require_once("header.php");
session_start();
?>
<link rel="stylesheet" type="text/css" href="Style.CSS">

<body>
	<br>
	<form method="POST" action="login_handler.php">
			<label for="username">Username:</label><br>
			<?php if(isset($_SESSION['errors']['username'])) { ?>
			<span id="usernameError" class="error"><?=$_SESSION['messages']['username']?></span>
			<?php } ?>
			<input type="text" name="username" value=""><br>
			<label for="password">Password:</label><br>
			<?php if(isset($_SESSION['errors']['password'])) { ?>
			<span id="passwordError" class="error"><?=$_SESSION['messages']['password']?></span>
			<?php } ?>
			<input type="password" name="password">
			<button type="submit" value="Login">Login</button>
		</form>
	</body>
<?php 
	require_once("Footer.php");
?>
</html>

