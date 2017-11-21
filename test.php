<?php

$item = array('appelsin', 1, 30);
$cart = array(array("is", 2, 4), array("appelsin", 4, 5));
$location=-1;

for ($i=0; $i < sizeof($cart); $i++) {
  if($cart[$i][0] == $item[0]){
    $location=$i;
  }
}

if($location == -1){
  array_push($cart, $item);
}else{
  $cart[$location][1]+=$item[1];
}

echo $cart[0][1];
 ?>
