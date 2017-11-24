<?php
if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}
// It the session is active and the name is cart, display the ontent. If not, just display the page with no data.
if(isset($_SESSION['cart'])) {
$item_id = $_SESSION['cart'][0][0];
require_once 'db_connecter.php';
$sql = "SELECT * FROM items WHERE itemcode='$item_id'";

$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

$total = 0;

echo "<div class=\"row\">";
echo "<div class=\"col-10 col-sm-10\"><h3>Cart</h3></div>";
echo "<div class=\"col-2 col-sm-2 clear-cart\"><form class=\"\" action=\"scripts/clear_cart.php\" method=\"post\"><button type=\"submit\" class=\"\"  name=\"clearCart\" id=\"clearCart\">Empty cart</button></form></div>";
echo "</div>";
echo "<hr>";
echo "<div class=\"row\">";
echo "<div class=\"col-7 col-sm-7\">";
echo "<span><b>Item</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartItem\">";
for($a=0; $a < sizeof($_SESSION['cart']); $a++) {
    echo "<li>" . $_SESSION['cart'][$a][1] . "</li>";
}
echo "</ul>";
echo "</div>";
echo "<div class=\"col-2 col-sm-2\">";
echo "<span><b>Item id</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartItemId\">";
for($a=0; $a < sizeof($_SESSION['cart']); $a++) {
    echo "<li>" . $_SESSION['cart'][$a][0] . "</li>";
}
echo "</ul>";
echo "</div>";
echo "<div class=\"col-1 col-sm-1\">";
echo "<span><b>Amount</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartAmount\">";
for($a=0; $a < sizeof($_SESSION['cart']); $a++) {
    echo "<li>" . $_SESSION['cart'][$a][2] . "</li>";
}
echo "</ul>";
echo "</div>";
echo "<div class=\"col-1 col-sm-1\">";
echo "<span><b>Price</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartPrice\">";
for($a=0; $a < sizeof($_SESSION['cart']); $a++) {
    echo "<li>" . $_SESSION['cart'][$a][3] . "</li>";
}
echo "</ul>";
echo "</div>";
echo "<div class=\"col-1 col-sm-1\">";
echo "<span><b>Total</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartTotal\">";
for($a=0; $a < sizeof($_SESSION['cart']); $a++) {
    $total += $_SESSION['cart'][$a][4];
    echo "<li>" . $_SESSION['cart'][$a][4] . "</li>";
}
echo "</ul>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "<hr>";
echo "<div class=\"row\">";
echo "<div class=\"col-10 col-sm-10\">";
echo "</div>";
echo "<div class=\"col-2 col-sm-2 cart-buy-total\">";
echo "<span><b>Order total: </b></span><span><b>" . $total . "</b></span><span><b>,-</b></span>";
echo "</br>";
echo "</br>";
echo "<button type=\"button\" onclick=\"buyCart();\" class=\"btnCartBuy\" name=\"button\">BUY</button>";
echo "</div>";
echo "</div>";
}
else {
    echo "<div class=\"row\">";
    echo "<div class=\"col-10 col-sm-10\"><h3>Cart</h3></div>";
    echo "<div class=\"col-2 col-sm-2 clear-cart\"><form class=\"\" action=\"scripts/clear_cart.php\" method=\"post\"><button type=\"submit\" class=\"\"  name=\"clearCart\" id=\"clearCart\">Empty cart</button></form></div>";
    echo "</div>";
    echo "<hr>";
    echo "<div class=\"row\">";
    echo "<div class=\"col-7 col-sm-7\">";
    echo "<span><b>Item</b></span>";
    echo "<ul class=\"ulNoShow\" id=\"cartItem\">";
    echo "</ul>";
    echo "</div>";
    echo "<div class=\"col-2 col-sm-2\">";
    echo "<span><b>Item id</b></span>";
    echo "<ul class=\"ulNoShow\" id=\"cartItemId\">";
    echo "</ul>";
    echo "</div>";
    echo "<div class=\"col-1 col-sm-1\">";
    echo "<span><b>Amount</b></span>";
    echo "<ul class=\"ulNoShow\" id=\"cartAmount\">";
    echo "</ul>";
    echo "</div>";
    echo "<div class=\"col-1 col-sm-1\">";
    echo "<span><b>Price</b></span>";
    echo "<ul class=\"ulNoShow\" id=\"cartPrice\">";
    echo "</ul>";
    echo "</div>";
    echo "<div class=\"col-1 col-sm-1\">";
    echo "<span><b>Total</b></span>";
    echo "<ul class=\"ulNoShow\" id=\"cartTotal\">";
    echo "</ul>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<hr>";
    echo "<div class=\"row\">";
    echo "<div class=\"col-10 col-sm-10\">";
    echo "</div>";
    echo "<div class=\"col-2 col-sm-2 cart-buy-total\">";
    echo "<span><b>Order total: </b></span><span><b>0</b></span><span><b>,-</b></span>";
    echo "</br>";
    echo "</br>";
    echo "<button type=\"button\" onclick=\"buyCart();\" class=\"btnCartBuy\" name=\"button\">BUY</button>";
    echo "</div>";
    echo "</div>";
}
?>
