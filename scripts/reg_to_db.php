<?php
  require_once 'db_connecter.php';
  /*saves variables with the entered value from user_registration.php*/
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $zipcode = $_POST['zipcode'];
  $city = $_POST['city'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $uGroup = 1;
  /* Checks the email entered by user.If used, the program will write an error message. if not, it saves the user in the database*/
  $sql_check = "SELECT * FROM users WHERE email='$email'";
  $result_check = mysqli_query($link, $sql_check);
  if(mysqli_fetch_assoc($result_check)){
    echo "Email allready in use";
    header("Location: ../index.php");
  }
  else {
    $hash_pwd = password_hash($pwd, PASSWORD_BCRYPT);
    $sql = "INSERT INTO `users`(`fname`, `lname`, `address`, `zipcode`, `city`, `phone`, `email`, `pwd`, `usergroup`) VALUES ('$fname', '$lname', '$address', '$zipcode', '$city', '$phone', '$email', '$hash_pwd', '$uGroup')";
    $result = mysqli_query($link, $sql);
    header("Location: ../index.php");
  }


 ?>
