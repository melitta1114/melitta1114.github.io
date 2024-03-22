<?php
  session_start();
?>
<!DOCTYPE html>
<head>
  <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Regisztráció</title>
  <link rel="stylesheet" href="aboutstyle.css">
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
            <li><a href="tamogatok.php">Támogatók</a></li>
            <li><a href="loginmindenkinek.php">Bejelentkezés</a></li>
        </ul>
    </nav>';
    }
        
?>
  <form id="myForm" action="connect.php" method="post">
    <div class="container">
      <div class="Regisztraciobutton">
        <h1>Regisztráció előadóként</h1>
      </div>
      <hr>

      <label for="vezeteknev"><b>Vezetéknév<span style="color: red"> *</span></b></label>
      <input type="text" placeholder="Add meg a vezetékneved" name="vezeteknev" id="vezeteknev" required>

      <label for="keresztnev"><b>Keresztnév<span style="color: red"> *</span></b></label>
      <input type="text" placeholder="Add meg a keresztneved" name="keresztnev" id="keresztnev" required>

      <label for="intezmeny"><b>Intézmény<span style="color: red"> *</span></b></label>
      <input type="text" placeholder="Add meg az intézményt nevét ahonnan érkezel" name="intezmeny" id="intezmeny" required>

      <label for="orszag"><b>Ország<span style="color: red"> *</span></b></label>
      <input type="text" placeholder="Add meg az országot ahonnan érkezel" name="orszag" id="orszag" required>

      <label for="titulus"><b>Titulus<span style="color: red"> *</span></b></label>
      <input type="text" placeholder="Add meg a titulusod" name="titulus" id="titulus" required>

      <label for="weblink"><b>Weboldal link</b></label>
      <input type="text" placeholder="Add meg a weboldalad linkjét" name="weblink" id="weblink">


      <label for="email"><b>Email cím<span style="color: red"> *</span></b></label>
      <input type="text" placeholder="Add meg az e-mail címed" name="email" id="email" required>

      
      <label for="psw"><b>Jelszó<span style="color: red"> *</span></b></label>
      <input type="password" placeholder="Add meg a kívánt jelszavad" name="psw" id="psw" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" title="Legalább 8 karakter, 1 kisbetű, 1 nagybetű és 1 szám" required>

      <label for="jelszoujra"><b>Jelszó újra<span style="color: red"> *</span></b></label>
      <input type="password" placeholder="Erősítsd meg a kívánt jelszavad" name="psw-repeat" id="psw-repeat" required>

      <label for="kiemelteloado"><input type="checkbox" id="kiemelteloado" name="kiemelteloado"> Jelölje be, ha ön kiemelt előadó</label>

      <br>
      <label for="gdpr-checkbox"><input type="checkbox" id="gdpr-checkbox" required> GDPR elfogadása</label>

      <hr>
      <button type="submit" class="registerbtn" id="registerBtn" name="registerBtn">Regisztrálok</button>
    </div>
  </form>
  <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@2.0.9/js/components.min.js" integrity="sha256-3UCSBV90gv8A+IA1iZst64qLbw7u9y2Y6JbfRa21tKw=" crossorigin="anonymous"></script>
  
  <div class="container signin">
    <p>Már van fiókod? <a href="login.php">Jelentkezz be</a>.</p>
  </div>

  <script>
    function validateForm(event) {
      event.preventDefault(); // Megakadályozza az űrlap küldését (alapértelmezett viselkedést)
  
      var vezeteknev = document.getElementById("vezeteknev").value;
      var keresztnev = document.getElementById("keresztnev").value;
      var intezmeny = document.getElementById("intezmeny").value;
      var orszag = document.getElementById("orszag").value;
      var titulus = document.getElementById("titulus").value;
      var weblink = document.getElementById("weblink").value;
      var kiemelteloado = document.getElementById("kiemelteloado").value;
      var email = document.getElementById("email").value;
      var psw = document.getElementById("jelszo").value;
      var pswRepeat = document.getElementById("jelszoujra").value;
      var gdprCheckbox = document.getElementById("gdpr-checkbox").checked;

      if (vezeteknev === "" || keresztnev === "" || intezmeny === "" || orszag === "" || titulus === "" || email === "" || psw === "" || pswRepeat === "" ) {
        alert("Minden mező kitöltése kötelező!");
        return false;
      }

      if (!gdprCheckbox) {
        alert("A GDPR elfogadása kötelező!");
        return false;
      }

      if (psw !== pswRepeat) {
        alert("A jelszó és a jelszó megerősítése nem egyezik!");
        return false;
      }

      if (!isValidEmail(email)) {
        alert("Érvénytelen email cím!");
        return false;
      }

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "connect.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          window.location.href = "Website.php";
    }
};

var formData = new FormData(document.getElementById("myForm"));
xhr.send(formData);

    function isValidEmail(email) {
      var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email);
    }

    document.getElementById("myForm").addEventListener("submit", validateForm);
  }
  </script>

<form id="myForm1" action="connect1.php" method="post">
  <div class="container">
    <div class="Regisztraciobutton">
      <h1>Regisztráció résztvevőként</h1>
    </div>
    <hr>

    <label for="vezeteknev"><b>Vezetéknév<span style="color: red"> *</span></b></label>
    <input type="text" placeholder="Add meg a vezetékneved" name="vezeteknev" id="vezeteknev" required>

    <label for="keresztnev"><b>Keresztnév<span style="color: red"> *</span></b></label>
    <input type="text" placeholder="Add meg a keresztneved" name="keresztnev" id="keresztnev" required>

    <label for="email"><b>Email cím<span style="color: red"> *</span></b></label>
    <input type="text" placeholder="Add meg az e-mail címed" name="email" id="email" required>

    
    <label for="intezmeny"><b>Intézmény<span style="color: red"> *</span></b></label>
      <input type="text" placeholder="Add meg az intézményt nevét ahonnan érkezel" name="intezmeny" id="intezmeny" required>

    <br>
    <label for="gdpr-checkbox"><input type="checkbox" id="gdpr-checkbox" required> GDPR elfogadása</label>

    <hr>
    <button type="submit" class="registerbtn" id="registerBtn" name="registerBtn">Regisztrálok</button>
  </div>
</form>
<script defer src="https://cdn.jsdelivr.net/npm/rizalcss@2.0.9/js/components.min.js" integrity="sha256-3UCSBV90gv8A+IA1iZst64qLbw7u9y2Y6JbfRa21tKw=" crossorigin="anonymous"></script>

<div class="container signin">
  <p>Már van fiókod? <a href="loginresztvevo.php">Jelentkezz be</a>.</p>
</div>

<script>
  function validateForm(event) {
    event.preventDefault();

    var vezeteknev = document.getElementById("vezeteknev").value;
    var keresztnev = document.getElementById("keresztnev").value;
    var email = document.getElementById("email").value;
    var intezmeny = document.getElementByIdy("intezmeny").value;
    var gdprCheckbox = document.getElementById("gdpr-checkbox").checked;

    if (vezeteknev === "" || keresztnev === "" || email === "" ) {
      alert("Minden mező kitöltése kötelező!");
      return false;
    }

    if (!gdprCheckbox) {
      alert("A GDPR elfogadása kötelező!");
      return false;
    }

    if (!isValidEmail(email)) {
      alert("Érvénytelen email cím!");
      return false;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "connect1.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        window.location.href = "Website.php";
  }
};

var formData = new FormData(document.getElementById("myForm1"));
xhr.send(formData);

  function isValidEmail(email) {
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }

  document.getElementById("myForm1").addEventListener("submit", validateForm);
}
</script>

  </body>
</html>



