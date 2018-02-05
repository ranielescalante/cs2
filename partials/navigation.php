<!-- CSS -->
<style type="text/css">
  .nav-wrapper .header {
    font-family: 'Monoton', cursive; 
    margin: 45px; 
    font-size: 3em;
}

@media only screen and (max-width : 992px){
  #mobile-demo .header {
    font-family: 'Monoton', cursive;
    font-size: 3em;
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .nav-wrapper .header {
    margin: 35%;
  }

}

@media only screen and (max-width : 600px){
  #mobile-demo .header {
    font-family: 'Monoton', cursive;
    font-size: 3em;
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .nav-wrapper .header {
    margin: 10%;
  }
}
</style>

<?php
$user = "";
    if(isset($_SESSION['role'])){
      $user = $_SESSION['role'];
    }
?>
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
        <a href="index.php" class="header center-align teal-text text-lighten-2" >TGLC</a>
        <a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="large material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="items.php">Items</a></li>
          <?php if(isset($_SESSION['name'])){

            }else{
              ?>
              <li><a href="register.php">Sign In</a></li>
              <?php
            }
          ?>
          <!-- <li><a href="cart.php">Cart</a></li> -->
          <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "customer") {

              echo "<li><a href='cart.php'>Cart</a></li>";
              echo "<li><a href='userprofile.php'>My Account</a></li>";
              echo "<li><a href='userOderHistory.php'>Order History</a></li>";

            }else if (isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
                echo "<li><a href='userprofile.php'>My Account</a></li>";
                echo "<li><a href='orders.php'>Admin Dash</a></li>";
            }
          
          ?>
          <?php if(isset($_SESSION['name'])){
          echo "<li><a href='logout.php'>Logout</a></li>";
          }
          ?>
        </ul>
    </div>
  </nav>
</div>

<ul class="side-nav center-align" id="mobile-demo">
          <!-- <li><img src="img/logo.png" alt="TGLC" style="background-color: black;height:15%;width:100%;"></li> --><li ><a href="index.php" class="header center teal-text text-lighten-2">TGLC</a></li><hr>
          <?php if (isset($_SESSION['name'])) {

            echo "<li><a href='userprofile.php'>My Account</a></li><hr>";
          }

          ?>
          <li><a href="gallery.php">Gallery</a></li><hr>
          <li><a href="items.php">Items</a></li><hr>
          <?php if(isset($_SESSION['name'])){

            }else{
              ?>
              <li><a href="register.php">Sign In</a></li><hr>
              <?php
            }
          ?>
          <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "customer") {

              echo "<li><a href='cart.php'>Cart</a></li><hr>";
              echo "<li><a href='userOderHistory.php'>Order History</a></li>";
              
            }else if (isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
              
                echo "<li><a href='orders.php'>Admin Dash</a></li><hr>";
            }
          
          ?>
          <?php if(isset($_SESSION['name'])){
          echo "<li><a href='logout.php'>Logout</a></li><hr>";
          }
        ?>
</ul>

