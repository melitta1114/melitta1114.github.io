<?php
    session_start();
?>
<!DOCTYPE html>
    <head>
        <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Tudnivalók</title>
        <link rel="stylesheet" href="altalanosstyle.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        if(isset($_SESSION['user']) && $_SESSION['user']===true){
          echo "<p style='color: white; text-align: center;'>Üdvözöllek, " . $_SESSION['username'] . "!</p>";
            echo'
            <nav>
                <ul>
                <li><a href="Website.php">Főoldal</a></li>
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
                <li><a href="program.php">Programfüzet</a></li>
                <li><a href="szervezok.php">Szervezők</a></li>
                <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
                <li><a href="tamogatok.php">Támogatók</a></li>
                <li><a href="loginmindenkinek.php">Bejelentkezés</a></li>
                <li style="float:right"><a class="active" href="about.php">Regisztráció</a></li>
            </ul>
        </nav>';
        }
            
    ?>
            <p>1.Mi a Nemzetközi Tudományos Konferencia?</p>
            <p> A Nemzetközi Tudományos Konferencia(következőekben NTK) egy kétévente megrendezett esemény melynek célja, hogy az egyetemekre készülő diákok jobban belelássanak az egyes karok képzési kínálataiba. Az esemény fő célja az, hogy a fiatalok kellőképpen tájékoztatva legyenek mielőtt egyetemre mennek, ezzel elkerülve, hogy amiatt hagyják ott a választott szakjaikat, mert nem az várta őket amire számítottak. Az NTK minden alkalommal más és más egyetemeken van megrendezve különböző országokban. Idén Romániában a Babes-Bolyai Tudományegyetemen kerül megrendezésre a rendezvény.
            </p>
            <p>2.Csak a leendő egyetemisták az esemény célközönsége?</p>
            <p>Egyáltalán nem. Mivel bárki beregisztrálhat az oldalra és nem kérjük hogy adják meg az életkort vagy a tanintézményt amelyben jelenleg tanulnak, ezért úgy sem tudnánk leszűrni a célközönséget az iskolás diákokra. Leendő egyetemista lehet akárhány éves, pályakezdő vagy akár olyan személy, aki szakmát szeretne váltani, mind találhat hasznos előadásokat a konferencián. Röviden a válasz: bárki jöhet, szívesen fogadunk minden érdeklődőt.</p>
            <p>3.Kell fizetni az eseményen való részvételért?</p>
            <p>Mivel az esemény az Európai Unió által támogatva van, nem kell fizetni az eseményen való részvételért.</p>
            <p>4.Meg kell jelölnöm külön, hogy melyik előadásokon veszek részt?</p>
            <p>Igen. Erre lehetőséged nyílik a Programfüzet menüpontnál. Egyszerűen csak x-el be a mezőket azok mellett az előadások mellett amelyeken részt szeretnél venni. Így tudjuk majd, hogy körülbelül melyik előadásra hány embert várhatunk.</p>
            <p>5.Kötelező beregisztrálni mielőtt megjelenek az előadáson?</p>
            <p>Igen, az előadás előtt maximum fél órával be kell jelölnöd, hogy ott leszel. Másképp nem engedünk be, ha a neved nem lesz rajta a jelenléti listán.</p>
            <p>6.Más kérdésem van. Hol kaphatok rá választ?</p>
            <p>A Főoldalon találsz egy Kapcsolatfelvétel nevű részt, ott tedd fel nyugodtan kérdéseidet.</p>
        </body>
        </html>