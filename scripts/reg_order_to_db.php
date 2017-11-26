<?php
session_start();
require_once 'db_connecter.php';

if(!isset($_SESSION['id'])){
  header("Location: ../index.php");
}
  $userId = $_SESSION['id'];
  $date =  date('Y/m/d H:i:s');
  $total=0;
  $item_array=array();

for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
  $total+=$_SESSION['cart'][$i][4];
  $itemcode=$_SESSION['cart'][$i][0];
  $new_quantity=$_SESSION['cart'][$i][2];;
  $sqli = "UPDATE items SET quantity = `quantity`-$new_quantity WHERE itemcode='$itemcode'";
  $result = mysqli_query($link, $sqli);
  array_push($item_array, implode($_SESSION['cart'][$i], "$"));
}
$items = implode($item_array, "€");

  $sql ="INSERT INTO `orders`(`user_id`, `date`, `items`, `total_price`) VALUES ('$userId', '$date', '$items', '$total')";
  $result = mysqli_query($link, $sql);
  unset($_SESSION["cart"]);
  header("Location: ../index.php");
/*$query = "SELECT * FROM my_tbl_name WHERE array_data LIKE '%value3%'"; søker etter item 3 i arrayen*/
/*$array = explode("€", $array_data); gjør om stringen til en array*/
 ?>
