<?php
session_start();
?>
<!DOCTYPE html>
<head>
  <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Bejelentkezés</title>
  <link rel="stylesheet" href="loginstyle.css">
  <meta charset="UTF-8">
</head>
<body>
<nav>
    <ul>
        <li><a href="Website.html">Főoldal</a></li>
        <li><a href="altalanos.html">Tudnivalók</a></li>
        <li><a href="program.html">Programfüzet</a></li>
        <li><a href="szervezok.html">Szervezők</a></li>
        <li><a href="resztvevokszamara.html">Résztvevőknek</a></li>
        <li><a href="tamogatok.html">Támogatók</a></li>
        <li style="float:right"><a class="active" href="about.php">Regisztráció</a></li>
    </ul>
    </nav>
    <?php
    require('db.php');
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        // Check user is exist in the database
        $query    = "SELECT * FROM `resztvevo` WHERE Email_cim='$username'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['user']=true;
            $_SESSION['eloado']=false;
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: Website.php");
            exit();
        } else {
            echo "<div class='form'>
            <h3 style='color: white; text-align: center;'>Hibás email cím.</h3><br/>
            <p class='link' style='color: white; text-align: center;'>Kattints ide az újonnan való belépéshez: <a href='loginresztvevo.php'>Belépés</a></p>
            <p class='link' style='color: white; text-align: center;'>Ha még nincs fiókod regisztrálj: <a href='about.html'>Regisztráció</a></p>
                  </div>";

        }
    } else {
?>

    <div class="container">
    <h2>Bejelentkezés résztvevőként</h2>
    <form class="form" method="post" name="login">
        <input type="text" class="login-input" name="username" placeholder="Email cím" autofocus="true"/>
        <input type="submit" value="Bejelentkezés" name="submit" class="login-button"/>
        <p class="link"><a href="about.php">Még nincs fiókod? Regisztrálj!</a></p>
  </form>
  </div>
  <script src="loginscript.js"></script>
<?php
    }
?>
</body>
</html>