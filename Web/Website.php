<?php
  session_start();
?>
<!DOCTYPE html>
    <head>
        <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Főoldal</title>
        <meta name="nyíltnapok" name="konferencia" name="tudományos" name="nemzetközi">
        <link rel="stylesheet" href="websitestyle.css">
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
    if(isset($_SESSION['user']) && $_SESSION['user']===true){
      echo "<p style='color: white; text-align: center;'>Üdvözöllek, " . $_SESSION['username'] . "!</p>";
        echo'
        <nav>
            <ul>
            <li><a href="altalanos.php">Tudnivalók</a></li>
            <li><a href="program.php">Programfüzet</a></li>
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
            <li><a href="altalanos.php">Tudnivalók</a></li>
            <li><a href="program.php">Programfüzet</a></li>
            <li><a href="szervezok.php">Szervezők</a></li>
            <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
            <li><a href="tamogatok.php">Támogatók</a></li>
            <li><a href="loginmindenkinek.php">Bejelentkezés</a></li>
            <li style="float:right"><a class="active" href="about.php">Regisztráció</a></li>
        </ul>
    </nav>';
    }
        
?>
        <img src="kep.png" width=100% height=20%>

          <h1>A XI Nemzetközi Tanácsadói Konferencia</h1>
          <div id="timer">
            <span id="nap"></span>
            <span id="óra"></span>
            <span id="perc"></span>
            <span id="másodperc"></span>
          </div>
        <h1>múlva veszi kezdetét</h1>
          
        <script>
          // A céldátum létrehozása
          var targetDate = new Date("July 31, 2024 23:59:59").getTime();
      
          // Az időzítő frissítése minden másodpercben
          var timer = setInterval(function() {
            // Az aktuális dátum és idő lekérése
            var now = new Date().getTime();
      
            // Az idő különbségének kiszámítása
            var timeRemaining = targetDate - now;
      
            // Az idő konverziója napokra, órákra, percekre és másodpercekre
            var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
      
            // Az időzítő HTML elemek frissítése
            document.getElementById("nap").innerHTML = days + " nap";
            document.getElementById("óra").innerHTML = hours + " óra";
            document.getElementById("perc").innerHTML = minutes + " perc";
            document.getElementById("másodperc").innerHTML = seconds + " másodperc";
      
            // Ha elérjük a céldátumot, leállítjuk az időzítőt
            if (timeRemaining < 0) {
              clearInterval(timer);
              document.getElementById("timer").innerHTML = "Lejárt!";
            }
          }, 1000);
        </script>

        <div class="bevezeto">
            <h1>Minden tudásnak eredendője</h1>
            <h2>Ahol kérdéseid válaszra találnak!</h2>
        </div>

        <div class="regisztráció">
            <form>
                <input type="button" value="Regisztráció" onclick="location.href='about.html'">
            </form>
        </div>

        <div class="contact-container">
            <div class="contactform">
              <h1>Kapcsolatfelvétel</h1>
              <form action="..php" method="POST" onsubmit="validateForm(event)">
                <label for="email">E-mail cím: </label><br>
                <textarea id="email" name="email" rows="1" cols="50"></textarea><br>
                <label for="message">Üzenet:</label><br>
                <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
                <input type="submit" value="Küldés">
              </form>
            </div>
            <div class="empty-space"></div>
            <div class="map-container">
              <iframe width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=23.57774,46.76558,23.58432,46.76984&amp;layer=mapnik&amp;marker=46.76771,23.58103" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=46.76771&amp;mlon=23.58103#map=18/46.76771/23.58103">Nagyobb térképre váltás</a></small>
            </div>
          </div>
          <script>
            function validateForm(event) {
              event.preventDefault();
              
              var email = document.getElementById("email").value;
              if (email === "") {
    alert("Az e-mail cím mező kitöltése kötelező.");
    return false;
  }

  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Kérlek, adj meg érvényes e-mail címet.");
    return false;
  }
              var message = document.getElementById("message").value;
              if (message.trim() === "") {
                alert("Az üzenet mező nem lehet üres!");
              } else {
                alert("Visszajelzését rögzítettük. A válasszal hamarosan érkezünk emailben.");
              }
            }
          </script>

          <div class="elerhetoseg">
            <h1>Elérhetőségeink</h1>
            <p>Cím: Románia, Kolozs megye, Kolozsvár, Mihail Kogălniceanu utca 1</p>
            <p>E-mail cím: nemzetkozitudomanyoskonferencia@gmail.com</p>
            <p>Telefonszám: +40741526264</p>
          </div>
    </body>
    </html>
