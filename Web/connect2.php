<?php
session_start();

$szekcio = $_POST['szekcio'];
$cim = $_POST['cim'];
$absztrakt = $_POST['absztrakt'];
$kulcsszo = $_POST['kulcsszo'];
$tars = $_POST['tars'];
$email = $_POST['username'];

$conn = new mysqli('localhost', 'root', '', 'php projekt');

if ($conn->connect_error) {
    die('Nem lehet csatlakozni ' . $conn->connect_error);
} else {

    $szekcioID="SELECT dolgozat.SzekcioID FROM dolgozat JOIN szekcio ON dolgozat.SzekcioID=szekcio.SzekcioID WHERE Nev=? AND Email_cim=?";
    $query = "SELECT * FROM dolgozat JOIN szekcio ON dolgozat.SzekcioID=szekcio.SzekcioID WHERE Nev=? AND Email_cim=?";
    $stmtDolgozat = $conn->prepare($query);
    $stmtDolgozat->bind_param("ss", $szekcio, $email);
    $stmtDolgozat->execute();
    $resultDolgozat = $stmtDolgozat->get_result();

    if ($resultDolgozat->num_rows > 0) {
       
            echo '<script>alert("Már feltöltöttél dolgozatot ebben a szekcióban.");</script>';
            echo '<script>window.location.href = "Website.php";</script>';
        
    }else {

   
        $stmtEloado = $conn->prepare("SELECT Vnev, Knev FROM eloado WHERE Email_cim = ?");
        $stmtEloado->bind_param("s", $email);
        $stmtEloado->execute();
        $resultEloado = $stmtEloado->get_result();

        if ($resultEloado->num_rows > 0) {
            $rowEloado = $resultEloado->fetch_assoc();
            $Vnev = $rowEloado['Vnev'];
            $Knev = $rowEloado['Knev'];

            $nev = $Vnev . "_" . $Knev;

            $targetdir = "uploads/";

            if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0 && isset($_FILES['ppt']) && $_FILES['ppt']['error'] == 0) {
                $pdfFile = $_FILES['pdf'];
                $pptFile = $_FILES['ppt'];

                $pdfFileName = $nev . "_". $szekcio. ".pdf";
                $pdf_target_path = $targetdir . $pdfFileName;

                $pptFileName = $nev ."_". $szekcio . ".ppt";
                $ppt_target_path = $targetdir . $pptFileName;

                if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdf_target_path) &&
                    move_uploaded_file($_FILES["ppt"]["tmp_name"], $ppt_target_path)) {

                    $stmtSzekcioID = $conn->prepare("SELECT SzekcioID FROM szekcio WHERE Nev = ?");
                    $stmtSzekcioID->bind_param("s", $szekcio);
                    $stmtSzekcioID->execute();
                    $result = $stmtSzekcioID->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $szekcioID = $row['SzekcioID'];

                        $stmt = $conn->prepare("INSERT INTO dolgozat(Cim, Absztrakt, PDF, PPT, Kulcsszavak, Tarsszerzok, Email_cim, SzekcioID) 
                                VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

                        $stmt->bind_param("sssssssi", $cim, $absztrakt, $pdfFileName, $pptFileName, $kulcsszo, $tars, $email, $szekcioID);
                        $stmt->execute();
                        echo "Sikeresen feltöltötted a dolgozatod!";
                        $stmt->close();
                        $conn->close();
                        echo '<script>window.location.href = "Website.php";</script>';
                    } else {
                        echo "A szekció ID nem található.";
                    }
                } else {
                    echo "Nem sikerült feltölteni a fájlokat.";
                }
            } else {
                echo "Az előadó adatai nem találhatók az adatbázisban.";
            }
            $stmtDolgozat->close();
            $stmtEloado->close();
            $conn->close();
        }
    }
    }
?>
