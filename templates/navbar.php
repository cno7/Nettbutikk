<header>
  <!-- Top navbar -->
  <nav class="navbar navbar-light navbar-expand-md d-none d-md-block">
    <div class="container">
      <div class="mr-auto top-text">
        <?php
          if (isset($_SESSION['id'])) {
            echo "Logged in as: ".$_SESSION['fname']." ".$_SESSION['lname'];
            if($_SESSION['usergroup']==2){
              echo ' (admin)';
            }
          }
         ?>
      </div>
      <div class="navbar-nav ml-auto">
        <div class="btn-group mr-4">
          <button type="button" class="btn btn-sm btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User
          </button>
          <div class="dropdown-menu">
            <?php
            if(isset($_SESSION['email'])){
              echo '<a class="dropdown-item" href="scripts/logout.php">Log out</a>';
              echo '<a class="dropdown-item" href="user.php">My page</a>';
            }
            else {
            echo '<a href="#" class="dropdown-item" data-toggle="modal" data-target="#loginMenu">Log In</a>';
            echo '<a class="dropdown-item" href="user_registration.php">Register</a>';
            }
            ?>
          </div>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Item 1</a>
            <a class="dropdown-item" href="#">Item 2</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main navbar -->
  <div class="navbar navbar-expand-md navbar-light" id="headerJumbo">
    <div class="container">
      <a class="navbar-brand" href="index.php" id="pageTitle"><h1>Lefdal</h1></a>
      <div class="ml-auto mr-4 d-block d-md-none">
        <a href="#" data-toggle="collapse" data-target="#productsMenu"><img src="images/products.jpg"></a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="test.php"></a>
          </li>
        </ul>
        <form action="productlist.php" method="get" class="form-inline mr-auto">
          <div class="form-group">
            <div class="input-group">
              <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search for products" size="40">
              <div class="input-group-btn">
                <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right d-none d-md-block">
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><img src="images/cart.jpg" class="img-fluid" id="imgCart"></a>
          </li>
        </ul>
        <div class="navbar-nav ml-auto d-block d-md-none">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="test.php">Cart</a>
            </li>
            <?php
            if(isset($_SESSION['email'])){
              echo  '
              <li class="nav-item active">
                <a class="nav-link" href="scripts/logout.php">Log out</a>
              </li>
              ';
              echo  '
              <li class="nav-item active">
                <a class="nav-link" href="user.php">My page</a>
              </li>
              ';
            }
            else {
              echo  '
              <li class="nav-item active">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#loginMenu">Log In</a>
              </li>
              ';
              echo  '
              <li class="nav-item active">
                <a class="nav-link" href="user_registration.php">Register</a>
              </li>
              ';
            }
            ?>
            <li class="nav-item active">
              <a class="nav-link" href="test.php">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Products navbar -->
  <nav class="navbar navbar-light navbar-expand-md d-none d-md-block">
    <div class="container">
      <div class="navbar-nav ml-5">
        <div class="btn-group mr-4">
          <button type="button" class="btn btn-sm dropdown-toggle btn-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
          </button>
          <div class="dropdown-menu" id="prodDropdown">
            <a class="dropdown-item" href="productlist.php?type=Fruit">Fruit</a>
            <a class="dropdown-item" href="productlist.php?type=Candy">Candy</a>
            <a class="dropdown-item" href="productlist.php?type=Vegetable">Vegetables</a>
            <a class="dropdown-item" href="productlist.php?type=Milk">Milk</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!-- Login menu-->
<div id="loginMenu" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Log in</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="scripts/login.php" method="post">
          <div class="form-group">
            <label>Email Address</label>
            <input class="form-control" type="text" name="mail" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <p class="text-danger text-center"><?php
          if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
          }
          else{
            echo "";
          }
           ?></p>
          <div class="form-group">
            <button class="btn btn-danger float-right" type="submit">Login</button>
          </div>
         </form>
      </div>
    </div>
  </div>
</div>
<!--Mobile products menu-->
<div id="productsMenu" class="panel panel-default panel-collapse collapse d-md-none">
  <div class="container">
    <ul class="nav flex-column">
      <li class="nav-item nav-prod">
        <a class="nav-link" href="productlist.php?type=Fruit">Fruit</a>
      </li>
      <li class="nav-item nav-prod">
        <a class="nav-link" href="productlist.php?type=Candy">Candy</a>
      </li>
      <li class="nav-item nav-prod">
        <a class="nav-link" href="productlist.php?type=Vegetables">Vegetables</a>
      </li>
      <li class="nav-item nav-prod">
        <a class="nav-link" href="productlist.php?type=Milk">Milk</a>
      </li>
    </ul>
  </div>
</div>
