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
	<img src="transparent.png" alt="Borah Wrestler" height="25%" width="25%">
</h1>
<div id="navigation">
<ul class="nav">
	<li class="nav-item"><a href ="Home.php">Home</a></li>
	<li class="nav-item"><a href ="Schedule.php">Schedule</a></li>
	<li class="nav-item"><a href ="LogoutHandler.php">Login Out</a></li>
	<li class="nav-item"><a href ="forms.php">Wrestler's Forms</a></li>

</ul>
</div>

<link rel="stylesheet" type="text/css" href="Style.CSS">
<body =table>
	<p>


	<?php require_once "Dao.php";
		$dao = new Dao();
		$wrestler = $dao->getWrestler();
		if(empty($wrestler)){
			echo "IT IS EMPTY!!!!!!!";
			
		}
	?>
<div>
	<table border="1">

    		<?php
      		foreach ($wrestler as $wrestler)
        {
          echo "<tr>
                  <td>
                  Name: " . ($wrestler['wrestlersname']) . "<br>
                  Phone: " . ($wrestler['phone']) . "<br>
                  Gender: " . ($wrestler['email']) . "<br>
				  </td>
        		</tr>";
        }
    		?>
  	</table>
</div>
</p>
</body>

<?php 
	require_once("Footer.php");
?>
</html>

