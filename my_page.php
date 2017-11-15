<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Change user information</p>
    <?php
     echo '<form action="scripts/change_user_inf.php" method="post">';
     echo '<input type="text" name="email" value="'.$_SESSION['email'].'">';
     echo '<br />';
     echo '<input type="text" name="fname" value="'.$_SESSION['fname'].'">';
     echo '<br />';
     echo '<input type="text" name="lname" value="'.$_SESSION['lname'].'">';
     echo '<br />';
     echo '<input type="text" name="phone" value="'.$_SESSION['phone'].'">';
     echo '<br />';
     echo '<input type="text" name="address" value="'.$_SESSION['address'].'">';
     echo '<br />';
     echo '<input type="text" name="zipCode" value="'.$_SESSION['zipCode'].'">';
     echo '<br />';
     echo '<input type="text" name="city" value="'.$_SESSION['city'].'">';
     echo '<br />';
     echo '<button type="submit">save</button>';
     echo '</form>';
     ?>
  </body>
</html>
