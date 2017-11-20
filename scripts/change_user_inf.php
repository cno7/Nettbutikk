<?php
session_start();
require_once 'db_connecter.php';

if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
  $info['fname'] = $_POST['fname'];
  $info['lname'] = $_POST['lname'];
  $info['address'] = $_POST['address'];
  $info['zipCode'] = $_POST['zipCode'];
  $info['city'] = $_POST['city'];
  $info['phone'] = $_POST['phone'];
  $info['email'] = $_POST['email'];

  $sql_check = "SELECT * FROM users WHERE id='$id'";

  //validating id
  $result_check = mysqli_query($link, $sql_check);
  if(mysqli_fetch_assoc($result_check)){
    $sql = "UPDATE users SET fname = '".$info['fname']."', email='".$info['email']."', phone='".$info['phone']."', lname='".$info['lname']."', address='".$info['address']."', zipCode='".$info['zipCode']."', city='".$info['city']."' WHERE id='$id'";
    $result = mysqli_query($link, $sql);
  }
  else {
    echo 'User does not exist';
  }
}
else {
  header("Location: ../index.php");
}

//setting session variables
$_SESSION['fname']=$info['fname'];
$_SESSION['lname']=$info['lname'];
$_SESSION['address']=$info['address'];
$_SESSION['zipCode']=$info['zipCode'];
$_SESSION['city']=$info['city'];
$_SESSION['email']=$info['email'];
$_SESSION['phone']=$info['phone'];




header("Location: ../user.php");
 ?>
