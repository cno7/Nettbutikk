<?php
session_start();
require_once 'db_connecter.php';

if(isset($_SESSION['id'])){
  /*$user = $_SESSION['email'];*/

  $userId = $_SESSION['id'];
  $date =  date('Y/m/d H:i:s');
  $total=0;

for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
  $total+=$_SESSION['cart'][$i][4];
  implode($_SESSION['cart'][$i], "$");
}
implode($_SESSION['cart'], "€");
$items = $_SESSION['cart'];

  $sql ="INSERT INTO `orders`(`user_id`, `date`, `items`) VALUES ('$userId', '$date', '$items')";
  $result = mysqli_query($link, $sql);
}
header("Location: ../index.php");
/*$query = "SELECT * FROM my_tbl_name WHERE array_data LIKE '%value3%'"; søker etter item 3 i arrayen*/
/*$array = explode("€", $array_data); gjør om stringen til en array*/
 ?>
