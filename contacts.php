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
	<a href="https://www.google.com/"><img src="transparent.png" alt="Borah Wrestler" height="25%" width="25%"></a>
</h1>
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
<p>PUT TABLE HERE!!!
</p>
</body>

<?php 
	require_once("Footer.php");
?>
</html>

