<?php
session_start();
require_once 'db_connecter.php';

if(isset($_SESSION['id'])){
  /*$user = $_SESSION['email'];*/
  $userId = $_SESSION['id'];
  $date =  date('Y/m/d H:i:s');
  $array_items = array("is", "ris", "peace");
  $items = implode("€", $array_items);/*gjør om arrayet til en string med € som skilletegn*/
  $array_price = array(240, 300, 10000);
  $item_price = implode("€", $array_price);
  $total_price  = array_sum($array_price);

  $sql ="INSERT INTO `orders`(`user_id`, `date`, `items`, `item_price`, `total_price`) VALUES ('$userId', '$date', '$items', '$item_price', '$total_price')";
  $result = mysqli_query($link, $sql);
}
header("Location: ../index.php");
/*$query = "SELECT * FROM my_tbl_name WHERE array_data LIKE '%value3%'"; søker etter item 3 i arrayen*/
/*$array = explode("€", $array_data); gjør om stringen til en array*/
 ?>
