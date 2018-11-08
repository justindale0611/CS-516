<?php
require_once("Dao.php");
session_start();


$_SESSION['presets']['username'] = $username;

unset($_SESSION['presets']['password']);

$bad = false;
if (empty($wname)) {
    $_SESSION['formError'] = "Name is required.";
    $bad = true;
}
if (empty($wphone)) {
    $_SESSION['formError'] = "Name is required.";
    $bad = true;
}

if (empty($wemail)) {
    $_SESSION['formError'] = "Name is required.";
    $bad = true;
}
if (empty($pname)) {
    $_SESSION['formError'] = "Name is required.";
    $bad = true;
}
if (empty($pphone)) {
    $_SESSION['formError'] = "Name is required.";
    $bad = true;
}
if (empty($pemail)) {
    $bad = true;
}

if ($bad) {
    header("Location: forms.php");
    exit;
}else{
	addWrestler($wname, $wphone, $wemail);
	addParent($pname, $wname, $pphone, $pemail);
	 header("Location: Home.php");
    exit;
}

?>