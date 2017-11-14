<?php
session_start();
require_once 'db_connecter.php';
$error = "";

if (isset($_POST['submit'])) {
  if (empty($_POST['mail']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
  }
  else {
    $username = $_POST["mail"];
    $password = $_POST["password"];
    /*
    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    */
    $query = mysql_query("select * from login where password='$pwd' AND username='$email'", $connection);
    $rows = mysql_num_rows($query);
    if ($rows == 1) {
      $_SESSION['login_user']=$username; // Initializing Session
      header("location: ./index.php"); // Redirecting To Other Page
    }
    else {
      $error = "Username or Password is invalid";
    }
  }
}

 ?>
