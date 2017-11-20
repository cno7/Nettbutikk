<?php
  session_start();

  require_once 'db_connecter.php';

  $cur_pwd = $_POST['cur_pwd'];
  $new_pwd = $_POST['new_pwd'];
  $id = $_SESSION['id'];

  $sql = "SELECT * FROM users WHERE id='$id'";

  $result = mysqli_query($link, $sql);
  //mysqli_fetch_assoc returns an assossiative array with row from result
  if(!$row = mysqli_fetch_assoc($result)){
    echo "No user with that name!";
  } else {
    //verifying if password matches hash
    if(password_verify($cur_pwd, $row['pwd'])){
      $hash_pwd = password_hash($new_pwd, PASSWORD_BCRYPT);
      $sql_cpw = "UPDATE users SET pwd = '$hash_pwd' WHERE id='$id'";
      $result_cpw = mysqli_query($link, $sql_cpw);
    }
  }

  //return user to index.php
  header("Location: ../index.php");

 ?>
