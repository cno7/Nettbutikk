<?php
  session_start();
  if($_SESSION['usergroup'] != 2 || !isset($_SESSION['usergroup'])){
    header("Location: index.php");
  }


 ?>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!--bootstrap CSS-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
     <link rel="stylesheet" href="css/master.css">
     <title>Nettbutikk</title>
   </head>
   <body>
     <?php include 'templates/navbar.php'; ?>
     <main class="container">
       <h3>Admin Controls</h3>
       <h4 class="mt-5">Add a user</h4>
       <form class="form-group" action="user_registration.php">
         <button class="btn btn-danger" type="submit">Add User</button>
       </form>
       <h4 class="mt-5">Remove a user</h4>
       <div class="col-4">
         <form class="form-group" action="scripts/remove_user.php" method="post">
           <label>Remove a user by user id</label>
           <input class="form-control" type="text" name="user_id" placeholder="User ID">
           <button class="btn btn-danger" type="submit">Remove user</button>
         </form>
       </div>
     </main>

     <!--Scripts-->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     </script>
     <?php include 'templates/footer.php'; ?>
   </body>
 </html>
