<?php
require_once("Dao.php");
session_start();

$wname = $_POST['wrestlersname'];
$wphone = $_POST['wrestlersphone'];
$wemail = $_POST['wrestlersemail'];
$pname = $_POST['parentsname'];
$pphone = $_POST['parentsphone'];
$pemail = $_POST['parentsemail'];
echo $wname."    ";
echo $wphone."    ";
echo $wemail."    ";
echo $pname."    ";
echo $pphone."    ";
echo $pemail."    ";

exit;

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
    $bad = true;
}
if (empty($pemail)) {
    $bad = true;
}

//if ($bad) {
  //  header("Location: forms.php");
    //exit;
//}

addWrestler($wname, $wphone, $wemail);
addParent($pname, $wname, $pphone, $pemail);
header("Location: Home.php");
exit;


?>