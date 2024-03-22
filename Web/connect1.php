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
            $Email_cim = $_POST['email'];
            $Intezmeny = $_POST['intezmeny'];
            
            try {
                $mail = new PHPMailer(true);
        
                // Set up SMTP
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'veres.melitta2002@gmail.com';
                $mail->Password   = 'qssb jsie njjx ynut';
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

        $stmt = $conn->prepare("INSERT INTO resztvevo(Intezmeny, Vnev, Knev, Email_cim) 
        VALUES(?, ?, ?, ?)");

        $stmt -> bind_param("ssss", $Intezmeny, $Vnev, $Knev, $Email_cim);
        $stmt -> execute();
        echo "Sikeresen regisztráltál!";
        $stmt -> close();
        $conn -> close();
        echo '<script>window.location.href = "Website.php";</script>';
    }
    }
?>