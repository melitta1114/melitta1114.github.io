<?php
  session_start();
?>
<!DOCTYPE html>
    <head>
        <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Programfüzet</title>
        <link rel="stylesheet" href="programstyle.css">
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
              <li><a href="szervezok.php">Szervezők</a></li>
              <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
              <li><a href="tamogatok.php">Támogatók</a></li>
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
              <li><a href="szervezok.php">Szervezők</a></li>
              <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
              <li><a href="tamogatok.php">Támogatók</a></li>
              <li><a href="loginmindenkinek.php">Bejelentkezés</a></li>
              <li style="float:right"><a class="active" href="about.php">Regisztráció</a></li>
          </ul>
      </nav>';
      }
          
  ?>
            <div class="table-container">
            <table>
                <thead>
                  <tr>
                    <th>Előadás címe</th>
                    <th>Nap</th>
                    <th>Időpont</th>
                    <th>Előadó</th>
                    <th>Helyszín</th>
                    <div class=".selected"><th>Ott leszek</th></div>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A XI. Nemzetközi Tanácsadói konferencia nyitó gálája</td>
                    <td>Kedd</td>
                    <td>20:00-23:00</td>
                    <td></td>
                    <td>Babes-Bolyai Tudományegyetem főépülete</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr> 
                  <tr>
                    <td>A színész a való életben is el tudja adni magát?</td>
                    <td>Szerda</td>
                    <td>8:00-10:00</td>
                    <td>Klaus Obermaier</td>
                    <td>Színház és film kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Bölcsészet ma. Miért érdemes foglalkozni vele?</td>
                    <td>Szerda</td>
                    <td>10:00-12:00</td>
                    <td>Berki Tímea</td>
                    <td>Bölcsészettudományi kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>A Római katolikus teológusainak Erasmus élménybeszámolója</td>
                    <td>Szerda</td>
                    <td>12:00-14:00</td>
                    <td>Ozsváth Judit</td>
                    <td>Római katolikus teológia kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Meddig fejlődhet még a technológia?</td>
                    <td>Szerda</td>
                    <td>14:00-16:00</td>
                    <td>Robu Judit</td>
                    <td>Matematika és Informatika kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Az atomok nyomában</td>
                    <td>Szerda</td>
                    <td>16:00-18:00</td>
                    <td>Daniel-Aurelian Andreica</td>
                    <td>Fizika kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Az otthon kémiája</td>
                    <td>Szerda</td>
                    <td>18:00-20:00</td>
                    <td>Barabás Réka</td>
                    <td>Kémia és Vegyészmérnöki kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Fosszíliák Kolozsváron. Nem is képzelnéd hol találhatod őket</td>
                    <td>Csütörtök</td>
                    <td>8:00-10:00</td>
                    <td>Macalik Kunigunda</td>
                    <td>Biológia és Geológia kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Egy hajóval a föld körül</td>
                    <td>Csütörtök</td>
                    <td>10:00-12:00</td>
                    <td>Bartos-Elekes Zsombor</td>
                    <td>Földrajz kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Írott/Íratlan jogaink. De mik azok?</td>
                    <td>Csütörtök</td>
                    <td>14:00-16:00</td>
                    <td>Szőcs Izabella</td>
                    <td>Jogtudományi kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>A 19. század ereklyéi. Mit tanulunk a múltból?</td>
                    <td>Csütörtök</td>
                    <td>16:00-18:00</td>
                    <td>Bajusz István</td>
                    <td>Történelem és filozófia kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Ismered-e a melletted élőt? A szociológia haszna a mindennapokban.</td>
                    <td>Csütörtök</td>
                    <td>18:00-20:00</td>
                    <td>Matei Ilka Melinda</td>
                    <td>Szociológia és Szociálismunkás-képző kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Tényleg belelát a pszichológus a fejedbe? Vagy csak találgat?</td>
                    <td>Péntek</td>
                    <td>8:00-10:00</td>
                    <td>Veres Anna</td>
                    <td>Pszichológia és Neveléstudományok kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Románia GDP-je ide-oda. De mi is az pontosan?</td>
                    <td>Péntek</td>
                    <td>10:00-12:00</td>
                    <td>Rácz Béla-Gergely</td>
                    <td>Közgazdaság és Gazdálkodástudományi kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Mitől jó egy jó újságcikk?</td>
                    <td>Péntek</td>
                    <td>16:00-18:00</td>
                    <td>Kádár Magor</td>
                    <td>Politika-, Közigazgatás- és Kommunikációtudományi kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Hogyan edz helyesen és élj egészségesen?</td>
                    <td>Péntek</td>
                    <td>18:00-20:00</td>
                    <td>Gombos Leon</td>
                    <td>Testnevelés és sport kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>A zene és a vallás pedagógiája</td>
                    <td>Szombat</td>
                    <td>12:00-14:00</td>
                    <td>Gorbai Gabriella</td>
                    <td>Református tanárképző és zeneművészeti kar</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                  <tr>
                    <td>Záró gála</td>
                    <td>Vasárnap</td>
                    <td>14:00-20:00</td>
                    <td></td>
                    <td>Babes-Bolyai Tudományegyetem főépülete</td>
                    <td class="click" onclick="markAsPresent(event)">&#9744</td>
                  </tr>
                </tbody>
              </table>
              </div>
        <script>
          function markAsPresent(event) {
            var isLoggedIn = false; // Példa: be van jelentkezve
      
            if (isLoggedIn) {
              event.target.innerHTML = '&#9745;';
            } else {
              alert("A mező kijelöléséhez be kell jelentkeznie.");
            }
          }
        </script>
        </body>
        </html>