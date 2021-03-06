<!DOCTYPE html>
<html>
<?php
	session_start();
	if(!isset($_SESSION['login'])){
		session_destroy();
		header("Location: WrestlerLogin.php");
	}
	include "header.php";
?>
	

<link rel="stylesheet" type="text/css" href="Style.CSS">
<body>
<p>Please fill out the following information. The information obtained here is for coaches only <br>
<form method="POST" action="FormsHandler.php">

<label for="wrestlersname">Wrestler's Name:</label><br>
			<input type="text" name="wrestlersname" id ="wrestlersname" required><br>
			<?php if(isset($_SESSION['errors']['username'])) { ?>
			<span id="usernameError" class="error"><?=$_SESSION['messages']['username']?></span>
			<?php } ?>

			<label for="wrestlersphone">Wrestler's Phone Number:</label><br>
			<input type="tel" name="wrestlersphone" id ="wrestlersphone" required><br>
			<?php if(isset($_SESSION['errors']['password'])) { ?>
			<span id="passwordError" class="error"><?=$_SESSION['messages']['password']?></span>
			<?php } ?>

			<label for="wrestlersemail">Wrestler's Email:</label><br>
			<input type="email" name="wrestlersemail" id ="wrestlersemail" required><br>

			<label for="parentsname">Emergency Contact:</label><br>
			<input type="text" name="parentsname" id ="parentsname" required><br>

			<label for="parentsphone">Emergency Phone Number:</label><br>
			<input type="tel" name="parentsphone" id ="parentsphone" required><br>

			<label for="parentsemail">Emergency Email:</label><br>
			<input type="email" name="parentsemail" id ="parentsemail" required><br>


			<button type="submit" value="Submit" name="SubmitForms">Submit</button>
			</form>

</p>
</body>

<?php 
	require_once("Footer.php");
?>
</html>

