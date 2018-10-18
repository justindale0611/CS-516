<!DOCTYPE html>
<html>
<?php require_once("header.php");?>
<link rel="stylesheet" type="text/css" href="Style.CSS">

<body>
	<br>
	<form method="post" action="login_handler.php">
			Login:<br>
			<input type="text" name="login" value=""><br>
			password:<br>
			<input type="password" name="password">
		</form>
		<button type="submit"> Submit </button>
	</body>
<?php 
	require_once("Footer.php");
?>
</html>

