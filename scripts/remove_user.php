<?php
require_once 'db_connecter.php';

$user_id=$_POST['user_id'];

$sql = "DELETE FROM users WHERE id='$user_id'";

$result=mysqli_query($link, $sql);

header("Location: ../admin.php");
 ?>
