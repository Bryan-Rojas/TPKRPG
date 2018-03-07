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

      <title><?php echo $title ?> - Copyright</title>

      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/tpkrpg.css" rel="stylesheet">
      <script src="js/fontawesome-all.min.js"></script>
    </head>

    <body>
      <?php
        require_once("templates/header.php");
      ?>

      <div id="content">
        mine
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
