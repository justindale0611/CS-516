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

$bad = false;
if (empty($wname)) {
    $bad = true;

}
if (empty($wphone)) {
    $bad = true;
    header("Location: forms.php");
    exit;
}

if (empty($wemail)) {
    $bad = true;
}
if (empty($pname)) {
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