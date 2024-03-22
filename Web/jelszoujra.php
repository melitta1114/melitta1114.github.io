<?php
  session_start();
  $email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!DOCTYPE html>
<head> 
  <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Elfelejtett jelszó</title>
  <link rel="stylesheet" href="jelszocsere.css">
  <meta charset="UTF-8">
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
</head>
<?php
if(isset($_POST['submit1'])){
    $conn = new mysqli('localhost', 'root', '', 'php projekt');
    $email=$_GET['email'];
    $pwd=sha1($_REQUEST['username11']);
    $cpwd=sha1($_REQUEST['username1']);
    if($pwd===$cpwd){
        $reset_pwd=mysqli_query($conn, "update eloado set Jelszo='$pwd' where Email_cim='$email'");
    }
}
    if($_GET['email']){
        $conn = new mysqli('localhost', 'root', '', 'php projekt');
        $email=$_GET['email'];
        $check_details=mysqli_query($conn, "select Email_cim FROM eloado WHERE Email_cim='$email'");
        $res=mysqli_num_rows($check_details);
        if($res>0){
?>
<body>
<nav>
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
  </nav>
  <div class="container">
    <h2>Elfelejtett jelszó</h2>
    <form class="form" method="post" name="login">
        <input type="password" class="login-input" name="username11" placeholder="Új jelszó" autofocus="true"/>
        <input type="password" class="login-input" name="username1" placeholder="Új jelszó újra" autofocus="true"/>
        <input type="submit" value="Küldés" name="submit1" class="login-button"/>
  </form>
</div>
    <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@2.0.9/js/components.min.js" integrity="sha256-3UCSBV90gv8A+IA1iZst64qLbw7u9y2Y6JbfRa21tKw=" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.forms["login"].addEventListener("submit", function (event) {
                var password = document.forms["login"]["username11"].value;
                var password1 = document.forms["login"]["username1"].value;
                if (password.length < 8 || !/[a-z]/.test(password) || !/[A-Z]/.test(password) || !/\d/.test(password)) {
                    alert("A jelszónak legalább 8 karakter hosszúnak, kis és nagy betűt, valamint számot kell tartalmaznia!");
                    event.preventDefault();
                } else if (password !== password1) {
                    alert("A két jelszómezőbe beírt értékek nem egyeznek!");
                    event.preventDefault();
                }
            });
        });
    </script>
<?php if (isset($_POST['submit1'])) {
                 if ($email !== '') {
                    if (isset($_GET['email'])) {
                        $email = $_GET['email'];
                    }
                        $password=$_POST['username11'];
                        $password1=$_POST['username1'];

                        if (strlen($password) >= 8 && preg_match('/[a-z]/', $password) && preg_match('/[A-Z]/', $password) && preg_match('/\d/', $password) && $password === $password1) {
                        
                        $hashedPassword = sha1($password);
                        
                        $updateQuery = $conn->prepare("UPDATE eloado SET Jelszo = ? WHERE Email_cim = ?");
                        $updateQuery->bind_param("ss", $hashedPassword, $email);
                        $updateQuery->execute();
                
                       if ($updateQuery->affected_rows > 0) {
                            // Sikeres frissítés
                            $_SESSION['update_success'] = true;
                            echo'<script> window.location.href = "login.php";</script>';
                            exit();
                        } else {
                            // Sikertelen frissítés
                            $hashedPassword = sha1($password);
                        
                            $updateQuery = $conn->prepare("UPDATE eloado SET Jelszo = ? WHERE Email_cim = ?");
                            $updateQuery->bind_param("ss", $hashedPassword, $email);
                            $updateQuery->execute();
                            echo'<script> window.location.href = "login.php";</script>';
                        $updateQuery->close();
                        $conn->close();
                        
                        }
    }
}
}
?>
<?php
      }
    }
?>
</body>
</html>