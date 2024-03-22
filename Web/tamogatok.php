<?php
  session_start();
?>
<!DOCTYPE html>
    <head>
        <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Támogatók</title>
        <link rel="stylesheet" href="tamogatokstyle.css">
        <meta charset="UTF-8">
    </head>
    <body>
      <?php
      if(isset($_SESSION['user']) && $_SESSION['user']===true){
        echo "<p style='color: white; text-align: center;'>Üdvözöllek, " . $_SESSION['username'] . "!</p>";
          echo'
          <nav>
              <ul>
              <li><a href="Website.php">Főoldal</a></li>
              <li><a href="altalanos.php">Tudnivalók</a></li>
              <li><a href="program.php">Programfüzet</a></li>
              <li><a href="szervezok.php">Szervezők</a></li>
              <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
              <li><a href="logout.php">Kijelentkezés</a></li>';
              if(isset($_SESSION['user']) && $_SESSION['user']===true && $_SESSION['eloado']===true){
                echo '<li><a href="feltoltes.php">Előadók feladatai</a></li>';
            }
            if(isset($_SESSION['user']) && 
          $_SESSION['user'] === true && 
          isset($_SESSION['username']) && 
          $_SESSION['username'] === "admin@gmail.com"){
            echo '<li><a href="admin.php">Admin oldal</a></li>';
          }
            echo '
            </ul>
        </nav>';
      }else{
          
         echo' <nav>
          <ul>
          <li><a href="Website.php">Főoldal</a></li>
              <li><a href="altalanos.php">Tudnivalók</a></li>
              <li><a href="program.php">Programfüzet</a></li>
              <li><a href="szervezok.php">Szervezők</a></li>
              <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
              <li><a href="loginmindenkinek.php">Bejelentkezés</a></li>
              <li style="float:right"><a class="active" href="about.php">Regisztráció</a></li>
          </ul>
      </nav>';
      }
          
  ?>
        <div class="container">
            <div class="column">
              <div class="image-container"><img src="BENDKOPP.jpeg"></div>
              <h2>BENDKOPP</h2>
            <div>
                <a href="https://www.bendkopp.ro/">Weboldal</a>
              </div>
            </div>
            <div class="column">
              <div class="image-container"><img src="Wolters Kluwer.png"></div>
              <h2>Wolters Kluwer</h2>
              <div>
                <a href="https://www.wolterskluwer.com/ro-ro/solutions/ro">Weboldal</a>
              </div>
            </div>
            <div class="column">
              <div class="image-container"><img src="Codespring.jpg"></div>
              <h2>Codespring</h2>
              <div>
                <a href="https://www.codespring.ro/">Weboldal</a>
              </div>
            </div>
            <div class="column">
              <div class="image-container"><img src="OLECOM.jpeg"></div>
              <h2>OLECOM</h2>
              <div>
                <a href="https://olecom.ro/">Weboldal</a>
              </div>
            </div>
            <div class="column">
              <div class="image-container"><img src="IKEA.png"></div>
              <h2>IKEA</h2>
              <div>
                <a href="https://www.ikea.com/ro/ro/?gclsrc=aw.ds&gclid=CjwKCAjwpayjBhAnEiwA-7ena1AK37pgZyr17Wh6lzfFP3XSkRi4MEu8fbPtr9lubExOJY88RkQr6BoCJJQQAvD_BwE&gclsrc=aw.ds">Weboldal</a>
              </div>
            </div>
            <div class="column">
              <div class="image-container"><img src="DEDEMAN.PNG"></div>
              <h2>DEDEMAN</h2>
              <div>
                <a href="https://www.dedeman.ro/ro?gclid=CjwKCAjwpayjBhAnEiwA-7ena23fHO3-l_fFMqr3X5ALOSirDh075GdwSLoLIqnfbLseYGfxDVbZ4RoC1igQAvD_BwE">Weboldal</a>
              </div>
            </div>
          </div>
          </body>