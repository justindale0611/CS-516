<!DOCTYPE html>
<html>
<?php 
	include "header.php";
?>
<link rel="stylesheet" type="text/css" href="Style.CSS">
<body>
<p>THIS IS A BLANK PAGE LEFT HERE ON PURPOSE!!!! LEAVE ME ALONE PLEASE!!
<label for="wrestlersname">Wrestler's Name:</label><br>
			<input type="text" name="wrestlersname" required><br>
			<!-- <?php if(isset($_SESSION['errors']['username'])) { ?>
			<span id="usernameError" class="error"><?=$_SESSION['messages']['username']?></span>
			<?php } ?> -->

			<label for="wrestlersphone">Wrestler's Phone Number:</label><br>
			<input type="text" name="wrestlersphone" required><br>
			<!-- <?php if(isset($_SESSION['errors']['password'])) { ?>
			<span id="passwordError" class="error"><?=$_SESSION['messages']['password']?></span>
			<?php } ?> -->

			<label for="wrestlersemail">Wrestler's Email:</label><br>
			<input type="text" name="wrestlersemail" required><br>

			<label for="parentsname">Emergency Contact:</label><br>
			<input type="text" name="parentsname" required><br>

			<label for="parentsphone">Emergency Phone Number:</label><br>
			<input type="text" name="wrestlersphone" required><br>

			<label for="paretsemail">Emergency Email:</label><br>
			<input type="text" name="paretsemail" required><br>


			<button type="submit" value="Login" name="LoginButton">Login</button>
			<button type="submit" value="Create Account" name="CreatAccountButton">Create Account</button>

</p>
</body>

<?php 
	require_once("Footer.php");
?>
</html>

