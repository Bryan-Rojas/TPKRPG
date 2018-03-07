<?php
  session_start();
  require_once("system/functions.php");
  require_once("system/config.php");

  if($maintenance == true){
    echo "The site is currently under maintenance. Sorry! :(";
  }
  else{
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title><?php echo $title ?> - Login</title>

      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/tpkrpg.css" rel="stylesheet">
      <link href="css/login.css" rel="stylesheet">
      <script src="js/fontawesome-all.min.js"></script>
    </head>

    <body>
      <?php
        require_once("templates/header.php");
      ?>

      <div id="content">
        <?php
          if(isset($_SESSION['loggedin'])){
            ?>
            <p><center>How'd you end up here? You're already logged in. Do you want to <a href="backend/account/logout.php">log out</a>?</center></p>
        <?php
          }
          else{
            ?>
            <div class="wrapper">
              <form class="form-signin" role="form" action="backend/account/login-handling.php" method="POST">
                <h2 class="form-signin-heading"><center>Log In</center></h2>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
                <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                <label class="checkbox" style="margin-left: 20px;">
                  <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">    Remember me?
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
              </form>
            </div>
        <?php
          }
        ?>
      </div>

      <div id="footer" class="text-center">
        <div class="leftColumn">
          <div id="footerimages">
            <img id="footerlogo" src="imgs/pokemon/Zoroark.png">
            <img src="imgs/logo/footer_logo.png">
          </div>
        </div>
        <div class="rightColumn">
          <div id="footerInfo">
            <p>© 2018 TPKRPG</a><br/>
              Pokémon © 1995 - 2018 Nintendo/Creatures Inc./Game Freak Inc.<br/>
              <a href="rules.php">[Rules] </a>
              <a href="credits.php">[Credits] </a>
              <a href="privacy.php">[Privacy] </a>
              <a href="tos.php">[Terms of Service] </a>
              <a href="copyright.php">[Copyright]</a></p>
          </div>
        </div>
      </div>

      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
  }
?>
