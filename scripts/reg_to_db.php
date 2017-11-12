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
  $uGroup = 1;
  $randomNbr = mt_rand( 10000000,99999999 );
  $id = $randomNbr;
  /*
  checkId($id);
  */
  $sql_check = "SELECT * FROM users WHERE email='$email'";
  $result_check = mysqli_query($link, $sql_check);
  if(mysqli_fetch_assoc($result_check)){
    echo "Email allready in use";
  }
  else {
    $hash_pwd = password_hash($pwd, PASSWORD_BCRYPT);
    $sql = "INSERT INTO `users`(`fname`, `lname`, `address`, `zipcode`, `city`, `phone`, `email`, `pwd`, `usergroup`, `id`) VALUES ('$fname', '$lname', '$address', '$zipcode', '$city', '$phone', '$email', '$hash_pwd', $uGroup, $id )";
    $result = mysqli_query($link, $sql);
  }



/*id functions*/
  /*function checkId(){
    $sql_check = "SELECT * FROM users WHERE id='$id'"
    $result_check = mysqli_query($link, $sql_check);
    if(mysqli_fetch_assoc($result_check)){
    rollId();
    }
  }
  function rollId(){
    $id = mt_rand(100000000000, 999999999999);
    checkId();
  }*/



 ?>
