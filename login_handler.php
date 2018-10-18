<?php
session_start();
$name = $_POST['login'];
$password = $_POST['password'];
$_SESSION['presets']['login'] = $name;
$_SESSION['presets']['password'] = $password;

$messages = array();

$bad = false;
if (empty($name)) {
  $_SESSION['messages'][] = "Name is required.";
  $bad = true;
}
if (empty($password)) {
  $_SESSION['messages'][] = "Password is required.";
  $bad = true;
}
if ($bad) {
  header('Location: WrestlerLogin.php');
 exit;
}
// Got here, means everything validated, and the comment will post.
unset($_SESSION['presets']);
require_once 'Comments_Dao.php';
$dao = new Comments_Dao();
$dao->saveComment($name, $comment, $imagePath);
header('Location: Home.php');
exit;