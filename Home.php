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
	<link rel="stylesheet" href="Style.CSS">
	<link rel="icon" href="Logo.jpg" type="image/gif" sizes="16x16">
</head>
<h1>
<!-- 	<img src="transparent.png" alt="Borah Wrestler" height="25%" width="25%">
 --></h1>
<div id="navigation">
<ul class="nav">
	<li class="nav-item"><a href ="Home.php">Home</a></li>
	<li class="nav-item"><a href ="Schedule.php">Schedule</a></li>
	<!-- <li class="nav-item"><a href ="WrestlerLogin.php">Wrestler Login</a></li> -->
<!-- 	<li class="nav-item"><a href ="CoachingStaff.php">Coaching Staff</a></li>
 -->	
 <li class="nav-item"><a href ="LogoutHandler.php">Login Out</a></li>
	<li class="nav-item"><a href ="forms.php">Wrestler's Forms</a></li>

</ul>
</div>

<link rel="stylesheet" type="text/css" href="Style.CSS">
<body>
<p>Welcome to Borah High School's wrestling page. This page contains all information needed for wrestlers, parents, fans, and administrators. We cannot thank you enough for your support and look forward to seeing you at our next match.
<img src="Alias.jpg" alt="Borah Wrestler" height="25%" width="25%" class="center">
</p>
</body>

<?php 
	require_once("Footer.php");
?>
</html>

