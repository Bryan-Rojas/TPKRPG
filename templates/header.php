
<div id="userheader">
  <div class="userbar">
    <div class="leftColumn">
      <?php require_once("backend/account/account-actions.php");?>
    </div>
    <div class="rightColumn">
      <span class="fa-layers fa-fw">
        <i class="fab fa-discord fa-sm" href="#" style="color:#2d2828"></i>
      </span>
      <a href="#" style="color:#2d2828">Discord</a>

      <span class="fa-layers fa-fw">
        <i class="fab fa-facebook fa-sm" href="#" style="color:#2d2828"></i>
      </span>
      <a href="#" style="color:#2d2828">Facebook</a>

      <span class="fa-layers fa-fw">
        <i class="fas fa-users fa-sm" href="#" style="color:#2d2828"></i>
      </span>
      <a href="#" style="color:#2d2828">Forum</a>

      <span class="fa-layers fa-fw">
        <i class="fab fa-reddit fa-sm" href="#" style="color:#2d2828"></i>
      </span>
      <a href="#" style="color:#2d2828">Reddit</a>

      <span class="fa-layers fa-fw">
        <i class="fab fa-twitter fa-sm" href="#" style="color:#2d2828"></i>
      </span>
      <a href="#" style="color:#2d2828">Twitter</a>

    </div>
  </div>
</div>

<div id="adsheader">
  <div class="barforads">
    <img id="adlogo" src="imgs/misc/ad-logo.png">
  </div>
</div>

<div id="navbarheader">
  <div class="page-header">
    <div class="container-fluid">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
        <a class="navbar-brand" href="index.php"><img id="logo" src="imgs/logo/header_logo.png"></a>
          <div class="navbar-header">
            <ul class="nav navbar-nav">

              <?php
                global $username;
                if(isset($_SESSION['loggedin'])){
                  ?>
                  <li><a href="index.php">TEST</a></li>
                  <li><a href="signup.php">AYY</a></li>
                  <li><a href="login.php">We Logged In Bois</a></li>
              <?php
                }
                else{
                  ?>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="signup.php">Sign Up</a></li>
                  <li><a href="login.php">Log In</a></li>
              <?php
                }
              ?>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
