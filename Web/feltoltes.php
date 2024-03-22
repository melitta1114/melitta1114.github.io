<?php
    session_start();
?>
<!DOCTYPE html>
    <head>
        <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Tudnivalók</title>
        <link rel="stylesheet" href="aboutstyle.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        if(isset($_SESSION['user']) && $_SESSION['user']===true){
          echo "<p style='color: white; text-align: center;'>Üdvözöllek, " . $_SESSION['username'] . "!</p>";
        }
        ?>
            <nav>
                <ul>
                <li><a href="Website.php">Főoldal</a></li>
                <li><a href="altalanos.php">Tudnivalók</a></li>
                <li><a href="program.php">Programfüzet</a></li>
                <li><a href="szervezok.php">Szervezők</a></li>
                <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
                <li><a href="tamogatok.php">Támogatók</a></li>
                <li><a href="logout.php">Kijelentkezés</a></li>
            <?php
                if(isset($_SESSION['user']) && 
                $_SESSION['user'] === true && 
                isset($_SESSION['username']) && 
                $_SESSION['username'] === "admin@gmail.com"){
                  echo '<li><a href="admin.php">Admin oldal</a></li>';
                }
            ?>
               </ul>
            </nav>

        
            <form id="myForm2" action="connect2.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="Regisztraciobutton">
        <h1>Ha ön előadóként vesz részt a konferencián...</h1>
      </div>
      <hr>

      <label for="szekcio"><b>Ön melyik szekcióban fog előadni?<span style="color: red"> *</span></b></label>
      <select name="szekcio" id="szekcio" required>
      <?php
        // Kapcsolódás az adatbázishoz
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "php projekt";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Ellenőrizze a kapcsolatot
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL lekérdezés a szekció neveinek lekérdezéséhez
        $sql = "SELECT Nev FROM szekcio";
        $result = $conn->query($sql);

        // Szekciók kiíratása a legördülő listába
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["Nev"] . "'>" . $row["Nev"] . "</option>";
        }

        $conn->close();
        ?>
    </select>

    <br>

      <label for="cim"><b>Mi az ön előadásának címe?<span style="color: red"> *</span></b></label>
      <input type="text"  name="cim" id="cim" required>

      <label for="absztrakt"><b>Töltse fel a dolgozata absztraktját!<span style="color: red"> *</span></b></label>
      <input type="text"  name="absztrakt" id="absztrakt" rows="10" cols="100" required>

      <br>

      <label for="kulcsszo"><b>Adja meg előadása kulcsszavait!<span style="color: red"> *</span></b></label>
      <input type="text"  name="kulcsszo" id="kulcsszo" required>

      <label for="pdf"><b>Töltse fel a dolgozatát PDF formátumban!<span style="color: red"> *</span></b></label>
<input type="file" name="pdf" id="pdf" accept=".pdf" onchange="checkPdfFile()" required>

<br>

<label for="ppt"><b>Töltse fel a bemutatót PPT vagy PPTX formátumban!<span style="color: red"> *</span></b></label>
<input type="file" name="ppt" id="ppt" accept=".ppt, .pptx" onchange="checkPptFile()" required>



      <br>

      <label for="tars"><b>Ha vannak társszerzői a dolgozatának, említse meg őket!</b></label>
      <input type="text"  name="tars" id="tars" rows="5" cols="55">

      <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">

      <hr>
      <button type="submit" class="registerbtn" id="registerBtn" name="submit">Küldés</button>
    </div>
  </form>

  <script>
    function checkPdfFile() {
        var pdfInput = document.getElementById('pdf');
        var pdfFileName = pdfInput.value;
        var pdfExtension = pdfFileName.split('.').pop().toLowerCase();

        if (pdfExtension !== 'pdf') {
            alert('Csak PDF fájlok tölthetők fel!');
            pdfInput.value = ''; // Töröljük a kiválasztott PDF fájlt
        }
    }

    function checkPptFile() {
        var pptInput = document.getElementById('ppt');
        var pptFileName = pptInput.value;
        var validPptExtensions = ['ppt', 'pptx'];
        var pptExtension = pptFileName.split('.').pop().toLowerCase();

        if (validPptExtensions.indexOf(pptExtension) === -1) {
            alert('Csak PPT és PPTX fájlok tölthetők fel!');
            pptInput.value = ''; // Töröljük a kiválasztott PPT fájlt
        }
    }
</script>

</body>
</html>