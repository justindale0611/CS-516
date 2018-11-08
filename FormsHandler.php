<?php
require_once("Dao.php");
session_start();


$wname = $_POST['wrestlersname'];
$wphone = $_POST['wrestlersphone'];
$wemail = $_POST['wrestlersemail'];
$pname = $_POST['parentsname'];
$pphone = $_POST['parentsphone'];
$pemail = $_POST['parentsemail'];


$bad = false;
if (empty($wname)) {
    $bad = true;
    echo $bad."wname";

}
if (empty($wphone)) {
    $bad = true;
        echo $bad."wphone";

}

if (empty($wemail)) {
    $bad = true;
        echo $bad."wemail";

}
if (empty($pname)) {
    $bad = true;
        echo $bad."pname";

}
if (empty($pphone)) {
    $bad = true;
        echo $bad."pphone";

}
if (empty($pemail)) {
    $bad = true;
        echo $bad."pemail";

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