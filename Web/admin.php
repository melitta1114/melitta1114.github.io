<?php
  session_start();
?>
<!DOCTYPE html>
<head>
  <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Admin felület</title>
  <link rel="stylesheet" href="aboutstyle.css">
  <meta charset="UTF-8">
</head>
<body>
        <nav>
            <ul>
            <li><a href="Website.php">Főoldal</a></li>
            <li><a href="altalanos.php">Tudnivalók</a></li>
            <li><a href="program.php">Programfüzet</a></li>
            <li><a href="szervezok.php">Szervezők</a></li>
            <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
            <li><a href="tamogatok.php">Támogatók</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
            </ul>
        </nav>

        <div class="Regisztraciobutton">
        <h2>Szekciók és előadók</h2>
</div>
 <?php   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "php projekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Űrlap elküldésének kezelése
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $szekcio_nev = $_POST["szekcio_nev"];
    $eloado_nev = $_POST["eloado_nev"];

    // Szekció hozzáadása az adatbázishoz
    $sql = "INSERT INTO szekcio (SzekcioID, Nev) VALUES ('$szekcio_nev', '$eloado_nev')";

    if ($conn->query($sql) === TRUE) {
        echo "Szekció hozzáadva!";
    } else {
        echo "Hiba: " . $sql . "<br>" . $conn->error;
    }
}

$szekcio_query = "SELECT SzekcioID, Nev FROM szekcio";
$szekciok = $conn->query($szekcio_query);

echo "<div class='container'>";

while ($szekcio = $szekciok->fetch_assoc()) {
    echo "<h3>Szekció: " . $szekcio['Nev'] . "</h3>";

    // Előadók és dolgozatok lekérdezése a szekcióhoz
    $query = "SELECT eloado.Vnev, eloado.Knev, szekcio.Nev
              FROM eloado 
              JOIN dolgozat ON eloado.Email_cim = dolgozat.Email_cim 
              JOIN szekcio ON dolgozat.SzekcioID=szekcio.SzekcioID
              WHERE dolgozat.SzekcioID = " . $szekcio['SzekcioID'];
    
    $result = $conn->query($query);

    
    while ($row = $result->fetch_assoc()) {
        echo " " . $row['Vnev'] ." ".$row['Knev']."<br>";

    }
    
}

echo "</div>";

$conn->close();
?>
<div class="container">
<form id="myForm4" method="post">
    <div class="Regisztraciobutton">
      <h1>Szekció hozzáadása</h1>
    </div>
    <div>
      <label for="szekcio_nev">Szekció kódja:</label>   
      <input type="text" id="szekcio_nev" name="szekcio_nev" required>
    </div>
    <div>
      <label for="eloado_nev">Szekció neve:</label>
      <input type="text" id="eloado_nev" name="eloado_nev" required>
    </div>
    <div>
      <button type="submit" class="registerbtn">Szekció hozzáadása</button>
    </div>
  </form>
</div>
  </body>
</html>



