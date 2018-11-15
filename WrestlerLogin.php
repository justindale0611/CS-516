<!DOCTYPE html>
<html>
<?php 
session_start();
?>
<head>
	<title>Borah High School Wrestling</title>
	<link rel="stylesheet" href="Style.CSS">
	<link rel="icon" href="Logo.jpg" type="image/gif" sizes="16x16">
</head>
<h1>
	<img src="transparent.png" alt="Borah Wrestler" height="25%" width="25%">
</h1>
<div id="navigation">
<ul class="nav">
	<li class="nav-item"><a href ="CoachingStaff.php">Home</a></li>
	<li class="nav-item"><a href ="WrestlerLogin.php">Wrestler Login</a></li>
</ul>
</div>


<link rel="stylesheet" type="text/css" href="Style.CSS">

<body>
	<div>
		<?php 
			if(isset($_SESSION['errors']['password'])){
				echo $_SESSION['errors']['password'];
				unset($_SESSION['errors']);
			}
		?>
	<br>
	<form method="POST" action="login_handler.php">
			<label for="username">Username:</label><br>
			<input type="text" name="username" id ="usersname" required><br>
			<?php if(isset($_SESSION['errors']['username'])) { ?>
			<span id="usernameError" class="error"><?=$_SESSION['messages']['username']?></span>
			<?php } ?>

			<label for="password">Password:</label><br>
			<input type="password" name="password" id ="password" required><br>
			<?php if(isset($_SESSION['errors']['password'])) { ?>
			<span id="passwordError" class="error"><?=$_SESSION['messages']['password']?></span>
			<?php } ?>
			<button type="submit" value="Login" name="LoginButton">Login</button>
			<button type="submit" value="Create Account" name="CreateAccountButton">Create Account</button>
	</form>
</body>
<?php 
	require_once("Footer.php");
?>
</html>

