<?php
//require_once("Dao.php");
session_start();
echo "hello 1";
  // $username = $_POST['username'];
  // $password = $_POST['password'];
  // $_SESSION['presets']['username'] = $username;
  // $_SESSION['presets']['password'] = $password;

  // $errors = array();
  // $bad = false;
  // if (empty($username)) {
  //   $_SESSION['errors']['username'] = "Name is required.";
  //   $bad = true;
  // }
  // if (empty($password)) {
  //   $_SESSION['errors']['password'] = "Password is required.";
  //   $bad = true;
  // }

  // if ($bad) {
  //   echo "hello 2";
  //   header("Location: WrestlerLogin.php");
  //   exit;
  // }
  // // Got here, means everything validated, and the comment will post.

  // ////THIS NEEDS WORK
  // if (empty($errors)) {
  //   echo "hello 3";
  //   try {
  //     echo "hello 5";
  //     $dao = new Dao();
  //     $user = $dao->validateUser($username, $password);
  //     if ($user) {
  //       echo "hello 7";
  //       header("Location: Home.php");
  //     } else {
  //       echo "hello 8";
  //       $errors['message'] = "Invalid username or password";
  //       header("Location: WrestlerLogin.php");
  //     }
  //   } catch (Exception $e) {
  //     echo "hello 6";
  //     $errors['message' = "Something went wrong. Please come back later."]
  //     header("Location: WrestlerLogin.php");
  //   }
  // } else {
  //   echo "hello 4";
  //   header("Location: WrestlerLogin.php");
  //   die;
  // }
?>