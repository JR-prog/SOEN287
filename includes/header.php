<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h2 style="margin: 0 10px 0 13px; font-family: 'Orbitron', sans-serif">
    Aisles
  </h2>
  <hr id />
  <a href="http://localhost/SOEN287/veg_fruit.php" class="aisle-link"
    >Earth Produce</a
  >
  <a href="http://localhost/SOEN287/dairy.php" class="aisle-link">Dairy</a>
  <a href="http://localhost/SOEN287/snacks_aisle.php" class="aisle-link"
    >Snacks</a
  >
  <a href="http://localhost/SOEN287/beverages.php" class="aisle-link">Drinks</a>
  <a href="http://localhost/SOEN287/bakery.php" class="aisle-link">Bakery</a>
  <a href="http://localhost/SOEN287/interstellar.php" class="aisle-link"
    >Interstellar foods</a
  >
  <?php 
  if ((isset($_SESSION['user'])) && ($_SESSION['user']['role'] == "admin")){ 
    echo '  <a href="http://localhost/SOEN287/backstore_access.php" class="aisle-link"
    >Backstore</a
  >';}
?>

</div>

<nav class="navbar navbar-custom fixed-top header">
  <div class="d-flex justify-content-start">
    <h2
      style="
        font-size: 160%;
        font-family: 'Orbitron', sans-serif;
        padding-right: 0;
      "
    >
      <a
        class="hide-mobile"
        href="http://localhost/SOEN287/homepage.php"
        style="color: white; text-decoration: none; margin-right: 15px"
        >Mars Colonist Pantry</a
      >
      <a
        class="show-mobile"
        href="http://localhost/SOEN287/homepage.php"
        style="color: white; text-decoration: none; margin-right: 15px"
        >MCP</a
      >
    </h2>

    <span style="font-size: 30px; cursor: pointer" onclick="openNav()"
      >&#9776;
    </span>
  </div>

  <div class="d-flex justify-content-end">
    <a class="nav-link" href="http://localhost/SOEN287/login.php">
      <ion-icon name="person"></ion-icon>
    </a>

    <a class="nav-link" href="http://localhost/SOEN287/shopping-cart.php">
      <ion-icon name="cart-sharp"></ion-icon>
    </a>

    <a class="nav-link" href="http://localhost/SOEN287/logout.inc.php">Logout
    <?php ?>
    </a>
  </div>
</nav>

<!--For login and shopping cart icons-->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<!-- For header aisle menu-->
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>
