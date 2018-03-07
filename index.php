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

      <title><?php echo $title ?> - Homepage</title>

      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/tpkrpg.css" rel="stylesheet">
      <script src="js/fontawesome-all.min.js"></script>
    </head>

    <body>

      <?php
        require_once("templates/header.php");
      ?>

      <div id="content">
        <?php
          global $username;
          if(isset($_SESSION['loggedin'])){
        ?>
            AYY WE LOGGED IN BOIS, HERE GOES A BUNCH OF BUTTONS OF STUFF TO DO<br/>

            New here?<br/>

            Click here to get your starter pokemon!<br/>

            Click here to go to the Map Selector!<br/>

            Click here to go the PokeStore!<br/>

            Click here to go the battle area!<br/>
        <?php
          }
          else{
            ?>
            <p><center>
              Welcome to The Pokemon Kyanite RPG!<br></br>

              Hey Bryan here's the to do list for site:<br/><br/>

              - Succesful sign up page<br/>
              - Sign in user after signing up<br/>
              - BCrypt passwords, get rid of that terrible md5 hashing<br/>
              - Finish the site<br/>
              - Upload Pokemon sprites<br/>
              - Study for your midterms<br/>
              - Keep original username spelling when signing in<br/>
              - Make sure re-enter password works<br/>

              <img src="imgs/pokemon/Charizard_Mega_X.png">
              <br></br>
              <b>Bryan :)</b>


            </center></p>
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
