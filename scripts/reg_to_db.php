<?php
  require_once 'db_connecter.php';

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $zipcode = $_POST['zipcode'];
  $city = $_POST['city'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];

  $sql_check = "SELECT * FROM users WHERE email='$email'";

  $result_check = mysqli_query($link, $sql_check);
  if(mysqli_fetch_assoc($result_check)){
  echo "Email allready in use";
  }
  else {
  $hash_pwd = password_hash($pwd, PASSWORD_BCRYPT);
  $sql = "INSERT INTO `users`(`fname`, `lname`, `address`, `zipcode`, `city`, `phone`, `email`, `pwd`) VALUES ('$fname', '$lname', '$address', '$zipcode', '$city', '$phone', '$email', '$hash_pwd')";
  $result = mysqli_query($link, $sql);
  }






 ?>
