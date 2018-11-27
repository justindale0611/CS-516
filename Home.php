<!DOCTYPE html>
<html>
<script type="text/javascript" source="https://ajax.googleapis.com/ajax/libs/jquery1.7.2/jquery.min.js"></script>
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
	<a href="contacts.php"><img src="transparent.png" alt="Borah Wrestler" height="25%" width="25%" onload="$(this).fadein(1)"></a>
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
<!-- <img src="Alias.jpg" alt="Borah Wrestler" height="25%" width="25%" class="center"> -->
</p>
<div class="photoGallery">
	<img class="photo" src="Alias.jpg" style="width:100%">
	<img class="photo" src="CoachG.jpg" style="width:100%">
	<img class="photo" src="CoachJ.jpg" style="width:100%">
</div>
</body>
<script>
	var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("photo");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
}	
</script>
<?php 
	require_once("Footer.php");
?>
</html>

