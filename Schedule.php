<!DOCTYPE html>
<html>

<?php 
 	session_start();
	if(!isset($_SESSION['login'])){
		session_destroy();
		header("Location: WrestlerLogin.php");
	}
require_once("header.php");?>

<link rel="stylesheet" type="text/css" href="Style.CSS">

<body  id = schedule>
<div id=schedulediv> LET'S GO LIONS! WIN WIN WIN!</div>
<p><object height="400" width="800" class="center" data="Schedule.pdf"></object>
</p>
</body>
<?php 
	require_once("Footer.php");
?>
</html>

