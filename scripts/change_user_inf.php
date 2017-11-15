<?php
session_start();
require_once 'db_connecter.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$zipcode = $_POST['zipCode'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "UPDATE WHERE id=".$_SESSION['id']."(`fname`, `lname`, `address`, `zipcode`, `city`, `phone`, `email`,) VALUES ('$fname', '$lname', '$address', '$zipcode', '$city', '$phone', '$email')";

 ?>
