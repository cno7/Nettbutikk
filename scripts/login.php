<?php
session_start();
require_once 'db_connecter.php';

    $username = $_POST["mail"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$username'";
    //executing query, storing result
    $result = mysqli_query($link, $sql);
    if(!$row = mysqli_fetch_assoc($result)){
      $_SESSION['error']= "Feil brukernavn eller passord";
      header("Location: ../login_page.php");
    }
    else {
      //verifying if password matches hash
      if(password_verify($password, $row['pwd'])){
        //assossiative array with session id, is unique for all users
        $_SESSION['id'] = $row['id'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['adress'] = $row['adress'];
        $_SESSION['zipCode'] = $row['zipCode'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['usergroup'] = $row['usergroup'];
        //return user to index.php
        header("Location: ../index.php");
      }
    }



 ?>
