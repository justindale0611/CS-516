<!DOCTYPE html>
<html>
<?php 
	include "header.php";
?>
<link rel="stylesheet" type="text/css" href="Style.CSS">
<body>
<p>Please fill out the following information. The information obtained here is for coaches only <br>
<form method="POST" action="FormsHandler.php">

<label for="wrestlersname">Wrestler's Name:</label><br>
			<input type="text" name="wrestlersname" required><br>
			<!-- <?php if(isset($_SESSION['errors']['username'])) { ?>
			<span id="usernameError" class="error"><?=$_SESSION['messages']['username']?></span>
			<?php } ?> -->

			<label for="wrestlersphone">Wrestler's Phone Number:</label><br>
			<input type="tel" name="wrestlersphone" required><br>
			<!-- <?php if(isset($_SESSION['errors']['password'])) { ?>
			<span id="passwordError" class="error"><?=$_SESSION['messages']['password']?></span>
			<?php } ?> -->

			<label for="wrestlersemail">Wrestler's Email:</label><br>
			<input type="email" name="wrestlersemail" required><br>

			<label for="parentsname">Emergency Contact:</label><br>
			<input type="text" name="parentsname" required><br>

			<label for="parentsphone">Emergency Phone Number:</label><br>
			<input type="tel" name="parentsphone" required><br>

			<label for="paretsemail">Emergency Email:</label><br>
			<input type="email" name="paretsemail" required><br>


			<button type="submit" value="Submit" name="SubmitForms">Submit</button>
			</form>

</p>
</body>

<?php 
	require_once("Footer.php");
?>
</html>

