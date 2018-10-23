<?php
  session_start();
  $name = $_POST['username'];
  $password = $_POST['password'];
  $_SESSION['presets']['username'] = $name;
  $_SESSION['presets']['password'] = $password;

  $errors = array();
  $bad = false;
  if (empty($name)) {
    $_SESSION['errors']['username'] = "Name is required.";
    $bad = true;
  }
  if (empty($password)) {
    $_SESSION['errors']['password'] = "Password is required.";
    $bad = true;
  }
  if ($bad) {
    header('Location: WrestlerLogin.php');
    exit;
  }
  // Got here, means everything validated, and the comment will post.
  unset($_SESSION['presets']);
  require_once 'Dao.php';
  $dao->saveLogin($name, $password);
  header('Location: Home.php');
  exit;
?>