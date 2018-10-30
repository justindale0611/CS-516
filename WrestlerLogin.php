<!DOCTYPE html>
<html>
<?php 
include "header.php";
session_start();
?>
<link rel="stylesheet" type="text/css" href="Style.CSS">

<body>
	<br>
	<form method="POST" action="login_handler.php">
			<label for="username">Username:</label><br>
			<input type="text" name="username" required><br>
			<?php if(isset($_SESSION['errors']['username'])) { ?>
			<span id="usernameError" class="error"><?=$_SESSION['messages']['username']?></span>
			<?php } ?>

			<label for="password">Password:</label><br>
			<input type="password" name="password" required><br>
			<?php if(isset($_SESSION['errors']['password'])) { ?>
			<span id="passwordError" class="error"><?=$_SESSION['messages']['password']?></span>
			<?php } ?>
			<button type="submit" value="Login">Login</button>
	</form>
</body>
<?php 
	require_once("Footer.php");
?>
</html>

