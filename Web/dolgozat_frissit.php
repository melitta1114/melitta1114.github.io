<?php
// dolgozat_frissit.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $szekcio = $_POST['szekcio'];
    $email = $_POST['email'];
    $cim = $_POST['cim'];
    $kulcsszo = $_POST['kulcsszo'];
    $tars = $_POST['tars'];
    $absztrakt = $_POST['absztrakt'];

    $conn = new mysqli('localhost', 'root', '', 'php_projekt');
    if ($conn->connect_error) {
        die('Nem lehet csatlakozni ' . $conn->connect_error);
    }

    $stmt = $conn->prepare("UPDATE dolgozat JOIN szekcio ON dolgozat.SzekcioID=szekcio.SzekcioID SET Cim=?, Absztrakt=?, Kulcsszavak=?, Tarsszerzok=? WHERE Email_cim=$email AND Nev=$szekcio");
    $stmt->bind_param("ssss", $cim, $absztrakt, $kulcsszo, $tars);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
