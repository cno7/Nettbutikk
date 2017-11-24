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
    sleep(2);
    header("Location: ../productpage.php?product=" . $row['itemname']);
    // Keeping this as a list of where to find what in the session array:
    // for($a=0; $a < sizeof($_SESSION['cart']); $a++) {
    //     echo "Item id: " . $_SESSION['cart'][$a][0] . "</br>";
    //     echo "Item name: " . $_SESSION['cart'][$a][1] . "</br>";
    //     echo "Amount: " . $_SESSION['cart'][$a][2] . "</br>";
    //     echo "Item price: " . $_SESSION['cart'][$a][3] . "</br>";
    //     echo "Total price: " . $_SESSION['cart'][$a][4] . "</br>";
    // }

?>
