<?php
require_once("Dao.php");
session_start();
$dao = new Dao();


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

if ($bad) {
  header("Location: WrestlerLogin.php");
  exit;
}

////THIS NEEDS WORK
if (empty($errors)) {
  echo "we are in if";
  try {
    $dao = new Dao();
    
    if (isset ($_POST['LoginButton'])) 
    {
      $user = $dao->validateUser($username, $password);
    } 
    else if (isset($_POST['CreateAccountButton'])) {
      $user=$dao->getUsername($username);   

    if(empty($user)){     
      $dao->saveLogin($username, $password);
      $_SESSION['logged_in']=true;
      header('Location: Schedule.php');
      exit;    }
}
//     if ($user) {
//       header("Location: Home.php");
//     } else {
//       //$errors['message'] = "Invalid username or password";
//       header("Location: WrestlerLogin.php");
//     }
  
// } else {
//   // header("Location: WrestlerLogin.php");
//   // die;
//   echo "something is wrong 2";
}

 catch (Exception $e) {
    // $errors['message' = "Something went wrong. Please come back later."]
    // header("Location: WrestlerLogin.php");
    echo "somthing is wrong 1";
    echo $e;
  }
?>