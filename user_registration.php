<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/master.css">
    <title>Registration</title>
  </head>
  <body>
    <?php include 'templates/navbar.php'; ?>
    <div class="row">
      <div class="container text-center">
        <h3>Register account</h3>
        <form action="scripts/reg_to_db.php" method="post">
          <input type="text" name="fname" placeholder="Firstname">
          <br />
          <input type="text" name="lname" placeholder="Lastname">
          <br />
          <input type="text" name="address" placeholder="Adress">
          <br />
          <input type="text" name="zipcode" placeholder="Zipcode">
          <br />
          <input type="text" name="city" placeholder="City">
          <br />
          <input type="text" name="phone" placeholder="Phone number">
          <br />
          <input type="text" name="email" placeholder="Email">
          <br />
          <input type="password" name="pwd" placeholder="Password">
          <br />
          <?php
          if(isset($_SESSION['usergroup']) && $_SESSION['usergroup']==2){
            echo '
            <input type="text" name="usergroup" placeholder="Usergroup">
            <br />
            ';
          }
           ?>
          <button type="submit">Register</button>
        </form>
      </div>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <?php include 'templates/footer.php'; ?>
  </body>
</html>
