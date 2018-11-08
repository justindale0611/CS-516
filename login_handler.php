<?php
require_once("Dao.php");
//session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['presets']['username'] = $username;

$errors = array();
unset( $_SESSION['presets']['password']);
$bad = false;

if (empty($username)) {
  $_SESSION['errors']['username'] = "Name is required.";
  $bad = true;
}

if (empty($password)) {
  $_SESSION['errors']['password'] = "Password is required.";
  $bad = true;
}
if (!preg_match('~[0-9]~', $password)||!preg_match('~[a-z]~', $password)) {
    $_SESSION['message'][] = "Password must have at least one number and one lowercase letter."; 
    $bad=true;
  }

if ($bad) {
  header("Location: WrestlerLogin.php");
  exit;
}

////THIS NEEDS WORK
if (empty($errors)) {
  try {
    $dao = new Dao();
    
    //Login
    if (isset ($_POST['LoginButton'])) {
      $user = $dao->validateUser($username, $password);
      if ($user) {
          header('Location: Home.php');
          exit;
      } else {
          header('Location: Schedule.php');
          exit;
      }
    //Create Account
    } else if (isset($_POST['CreateAccountButton'])) {

      // if(empty($user)) {     
      $dao->saveLogin($username, $password);
      //   $_SESSION['logged_in']=true;
      header('Location: index.php');
      //   exit;    
      // }
    }

  } catch (Exception $e) {
    // $errors['message' = "Something went wrong. Please come back later."]
    // header("Location: WrestlerLogin.php");
    echo "somthing is wrong 1";
    echo $e;
  }
}
?>