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

        if (isset($_POST['submit'])) {
           
            $Email_cim = $_POST['username'];
            $link = 'http://localhost/projekt/jelszoujra.php?email=' . urlencode($Email_cim);
            
            
            try {
                $mail = new PHPMailer(true);
        
                // Set up SMTP
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'veres.melitta2002@gmail.com';
                $mail->Password   = 'sjbj dmoz dwqn vgpz';
                $mail->Port       = 465;
                $mail->SMTPSecure='ssl';
                // Email content
                $mail->setFrom('veres.melitta2002@gmail.com');
                $mail->addAddress($Email_cim);
                $mail->isHTML(true);
                $mail->Subject = mb_encode_mimeheader('Regisztráció megerősítése', 'UTF-8', 'Q');
                $mail->Body    = 'Ön azért kapta ezt az emailt, mert elfelejtette a jelszavát a XI Nemzetközi tudományos konferencia
                oldalára való belépéshez. Az új jelszó beállításához kattintson az alábbi linkre:
                <a href="' . $link . '">Jelszócsere</a>';
                // Send email
                $mail->send();
                echo '<script>window.location.href = "Website.php";</script>';
                // Redirect or display success message
            } catch (Exception $e) {
                echo "Az e-mail küldése sikertelen. Hiba: {$mail->ErrorInfo}";
            }

            
            }
}

?>