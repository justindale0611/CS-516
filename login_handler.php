<?php
require_once('Dao.php');
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $_SESSION['presets']['username'] = $username;
  $_SESSION['presets']['password'] = $password;

  $errors = array();
  $bad = false;
  if (empty($username)) {
    $_SESSION['errors']['username'] = "Name is required.";
    $bad = true;
  }
  if (empty($password)) {
    $_SESSION['errors']['password'] = "Password is required.";
    $bad = true;
  }

  if ($bad) {
    header("Location: WrestlerLogin.php");
    exit;
  }
  // Got here, means everything validated, and the comment will post.

  ////THIS NEEDS WORK
  if (empty($errors)) {
    try {
      $dao = new Dao();
      $user = $dao->validateUser($username, $password);
      if ($user) {
        header("Location: Home.php");
      } else {
        $errors['message'] = "Invalid username or password";
        header("Location: WrestlerLogin.php");
      }
    } catch (Exception $e) {
      $errors['message' = "Something went wrong. Please come back later."]
      header("Location: WrestlerLogin.php");
    }
  } else {
    header("Location: WrestlerLogin.php");
    die;
  }
?>