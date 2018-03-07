<?php
  global $username;
  if(isset($_SESSION['loggedin'])){
    ?>
    <div class="account-actions">
      <a href="profile.php"><?php echo $_SESSION['loggedin']; ?></a> - <a href="backend/account/logout.php">Log Out</a>
    </div>
<?php
  }
  else{
    ?>
    <div class="account-actions">
      <a href="login.php">Log In</a> - <a href="signup.php">Sign Up</a>
    </div>
<?php
  }
?>
