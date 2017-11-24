<?php
session_start();
require_once 'db_connecter.php';

if(!isset($_SESSION['id'])){
  header("Location: index.php");
}
  $userId = $_SESSION['id'];
  $date =  date('Y/m/d H:i:s');
  $total=0;
  $test=array();

for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
  $total+=$_SESSION['cart'][$i][4];
  array_push($test, implode($_SESSION['cart'][$i], "$"));
}
$items = implode($test, "€");
echo $items;
  $sql ="INSERT INTO `orders`(`user_id`, `date`, `items`) VALUES ('$userId', '$date', '$items')";
  $result = mysqli_query($link, $sql);

/*$query = "SELECT * FROM my_tbl_name WHERE array_data LIKE '%value3%'"; søker etter item 3 i arrayen*/
/*$array = explode("€", $array_data); gjør om stringen til en array*/
 ?>
