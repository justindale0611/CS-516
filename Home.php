<!DOCTYPE html>
<html>

<?php
	session_start();
	if(!isset($_SESSION['login'])){
		session_destroy();
		header("Location: WrestlerLogin.php");
	}
?>

<head>
	<title>Borah High School Wrestling</title>
	<link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
	<link rel="stylesheet" href="Style.CSS">
	<link rel="icon" href="Logo.jpg" type="image/gif" sizes="16x16">
</head>
<h1>
	<a href="contacts.php"><img src="transparent.png" alt="Borah Wrestler" height="25%" width="25%" onload="$(this).fadein(100)"></a>
</h1>
<div id="navigation">
<ul class="nav">
	<li class="nav-item"><a href ="Home.php">Home</a></li>
	<li class="nav-item"><a href ="Schedule.php">Schedule</a></li>
	<li class="nav-item"><a href ="LogoutHandler.php">Login Out</a></li>
	<li class="nav-item"><a href ="forms.php">Wrestler's Forms</a></li>

</ul>
</div>

<body>
<p>
	Welcome to Borah High School's wrestling page. This page contains all information needed for wrestlers, parents, fans, and administrators. We cannot thank you enough for your support and look forward to seeing you at our next match.
<img src="Alias.jpg" alt="Borah Wrestler" height="25%" width="25%" class="center">
</p>
</body>

<?php 
	require_once("Footer.php");
?>
</html>

