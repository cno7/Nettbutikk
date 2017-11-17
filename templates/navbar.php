<header>
  <!-- Top navbar -->
  <nav class="navbar navbar-light navbar-expand-md d-none d-md-block">
    <div class="container">
      <div class="navbar-nav ml-auto">
        <div class="btn-group mr-4">
          <button type="button" class="btn btn-sm btn-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User
          </button>
          <div class="dropdown-menu">
            <?php
            if(isset($_SESSION['email'])){
              echo  '<a class="dropdown-item" href="scripts/logout.php">Log out</a>';
              echo '<a class="dropdown-item" href="user_registration.php">Register</a>';
              echo '<a class="dropdown-item" href="user.php">My page</a>';
            }
            else {
            echo '<a class="dropdown-item" href="./login_page.php">Log in</a>';
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
            <li class="nav-item active">
              <a class="nav-link" href="test.php">Log in</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="test.php">Register</a>
            </li>
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
            <a class="dropdown-item" href="productlist.php?type=Frukt">Frukt</a>
            <a class="dropdown-item" href="productlist.php?type=Bær">Bær</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
