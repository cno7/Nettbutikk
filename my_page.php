<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/master.css">
    <title>Change user info</title>
  </head>
  <body>
    <?php include 'templates/navbar.php'; ?>
    <div class="row">
      <div class="container text-center">
    <p>Edit information</p>
    <div class="container formStyle">
    <?php
     echo '<form action="scripts/change_user_inf.php" method="post">';
     echo 'Email: <input type="text" name="email"  value="'.$_SESSION['email'].'">';
     echo '<br />';
     echo 'First name:<input type="text" name="fname" value="'.$_SESSION['fname'].'">';
     echo '<br />';
     echo 'Last name: <input type="text" name="lname" value="'.$_SESSION['lname'].'">';
     echo '<br />';
     echo 'Phone: <input type="text" name="phone" value="'.$_SESSION['phone'].'">';
     echo '<br />';
     echo 'Address: <input type="text" name="address" value="'.$_SESSION['address'].'">';
     echo '<br />';
     echo 'Zipcode: <input type="text" name="zipCode" value="'.$_SESSION['zipCode'].'">';
     echo '<br />';
     echo 'City: <input type="text" name="city" value="'.$_SESSION['city'].'">';
     echo '<br />';
     echo '<a href="change_pwd.php">Change password</a>';
     echo '<br />';
     echo '<button type="submit">save</button>';
     echo '</form>';
     ?>
     </div>
   </div>
 </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     <?php include 'templates/footer.php'; ?>
  </body>
</html>
