<?php
    session_start();
    require_once 'db_connecter.php';
    $item_id = $_POST['productId'];
    $amount = $_POST['inpBuyAmount'];

    $sql = "SELECT * FROM items WHERE itemcode='$item_id'";

    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    $item_name = $row['itemname'];
    $item_price = $row['out_price'];
    $total_price = $item_price * $amount;

    $location=-1;

    $item = array($item_id, $item_name, $amount, $item_price, $total_price);
    if(!isset($_SESSION['cart'])){
      $_SESSION['cart'] = array();
    }
    else{
      for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
        if($_SESSION['cart'][$i][0] == $item[0]){
          $location=$i;
        }
      }
    }

    if($location == -1){
      array_push($_SESSION['cart'], $item);
    }else{
      $_SESSION['cart'][$location][2]+=$item[2];
      $_SESSION['cart'][$location][4]=$item_price * $_SESSION['cart'][$location][2];
    }
    header("Location: ../cart.php");
    // Keeping this as a list of where to find what in the session array
    // in a for loop:
    // "Item id: $_SESSION['cart'][$i][0]
    // "Item name: $_SESSION['cart'][$i][1]
    // "Amount: $_SESSION['cart'][$i][2]
    // "Item price: $_SESSION['cart'][$i][3]
    // "Total price: $_SESSION['cart'][$i][4]
?>
