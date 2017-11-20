<?php
session_start();
require_once 'db_connecter.php';

if(isset($_SESSION['id'])){
  $user = $_SESSION['email'];
  $userId = $_SESSION['id'];
  $date =  date('Y/m/d H:i:s');
  $array = array("is", "ris", "peace");
  $items = implode("€", $array);/*gjør om arrayet til en string med € som skilletegn*/

  $sql ="INSERT INTO `orders`(`user`, `userId`, `date`, `items`) VALUES ('$user', '$userId', '$date', '$items')";
  $result = mysqli_query($link, $sql);
}
header("Location: ../index.php");
/*$query = "SELECT * FROM my_tbl_name WHERE array_data LIKE '%value3%'"; søker etter item 3 i arrayen*/
/*$array = explode("€", $array_data); gjør om stringen til en array*/
 ?>
