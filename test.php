<?php
session_start();
$item = array('appelsin', 1, 30);
if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = array($item);
}
$location=-1;

for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
  if($_SESSION['cart'][$i][0] == $item[0]){
    $location=$i;
  }
}

if($location == -1){
  array_push($_SESSION['cart'], $item);
}else{
  $_SESSION['cart'][$location][1]+=$item[1];
}

echo $_SESSION['cart'][0][1];
 ?>
