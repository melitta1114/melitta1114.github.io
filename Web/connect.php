<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Autoload file
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


    $conn = new mysqli('localhost', 'root', '', 'php projekt');
    if($conn->connect_error){
        die('Nem lehet csatlakozni ' . $conn->connect_error);
    }else{

        if (isset($_POST['registerBtn'])) {
            $Vnev = $_POST['vezeteknev'];
            $Knev = $_POST['keresztnev'];
            $Intezmeny = $_POST['intezmeny'];
            $Orszag = $_POST['orszag'];
            $Titulus = $_POST['titulus'];
            $Weboldal_link = $_POST['weblink'];
            $Email_cim = $_POST['email'];
            $Jelszo = $_POST['psw'];
            $hashedPassword = sha1($Jelszo);
            $Kiemelt_eloado = isset($_POST['kiemelteloado']) ? 'igen' : 'nem';
            
            try {
                $mail = new PHPMailer(true);
        
                // Set up SMTP
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'veres.melitta2002@gmail.com';
                $mail->Password   = 'stxs buji hagn yohl';
                $mail->Port       = 465;
                $mail->SMTPSecure='ssl';
                // Email content
                $mail->setFrom('veres.melitta2002@gmail.com');
                $mail->addAddress($Email_cim, $Vnev, $Knev);
                $mail->isHTML(true);
                $mail->Subject = mb_encode_mimeheader('Regisztráció megerősítése', 'UTF-8', 'Q');
                $mail->Body    = 'Köszönjük a regisztrációt!';
        
                // Send email
                $mail->send();
                echo '<script>window.location.href = "Website.php";</script>';
                // Redirect or display success message
            } catch (Exception $e) {
                echo "Az e-mail küldése sikertelen. Hiba: {$mail->ErrorInfo}";
            }
        
        $stmt = $conn->prepare("INSERT INTO eloado(Vnev, Knev, Intezmeny, Orszag, Titulus, Weboldal_link, Email_cim, Jelszo, Kiemelt_eloado) 
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt -> bind_param("sssssssss", $Vnev, $Knev, $Intezmeny, $Orszag, $Titulus, $Weboldal_link, $Email_cim, $hashedPassword, $Kiemelt_eloado);
        $stmt -> execute();
        echo "Sikeresen regisztráltál!";
        $stmt -> close();
        $conn -> close();
        echo '<script>window.location.href = "Website.php";</script>';
    }
}
?>