<?php
  session_start();
?>
<!DOCTYPE html>
<head> 
  <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Elfelejtett jelszó</title>
  <link rel="stylesheet" href="jelszocsere.css">
  <meta charset="UTF-8">
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
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
          <li><a href="tamogatok.php">Támogatók</a></li>
          <li><a href="logout.php">Kijelentkezés</a></li>';
          if(isset($_SESSION['user']) && $_SESSION['user']===true && $_SESSION['eloado']===true){
            echo '<li><a href="feltoltes.php">Előadók feladatai</a></li>';
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
          <li><a href="tamogatok.php">Támogatók</a></li>
          <li><a href="loginmindenkinek.php">Bejelentkezés</a></li>
          <li style="float:right"><a class="active" href="about.php">Regisztráció</a></li>
      </ul>
  </nav>';
  }
      
?>
   <div class="container">
    <h2>Elfelejtett jelszó</h2>
    <form class="form" method="post" name="login" action="sendpasswordreset.php">
        <input type="text" class="login-input" name="username" placeholder="Email cím" autofocus="true"/>

        <input type="submit" value="Küldés" name="submit" class="login-button"/>
  </form>
</div>
    <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@2.0.9/js/components.min.js" integrity="sha256-3UCSBV90gv8A+IA1iZst64qLbw7u9y2Y6JbfRa21tKw=" crossorigin="anonymous"></script>
 
  
  <script>
    function validateForm(event) {
      event.preventDefault(); // Megakadályozza az űrlap küldését (alapértelmezett viselkedést)
  
      var email = document.getElementById("email").value;
      var newPassword = document.getElementById("new-password").value;
      var confirmPassword = document.getElementById("confirm-password").value;
  
      // E-mail ellenőrzése
      var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (!email.match(emailRegex)) {
        alert("Érvénytelen e-mail cím!");
        return false;
      }
    }
  
    document.getElementById("passwordForm").addEventListener("submit", validateForm);
  </script>
  
</body>
</html>


