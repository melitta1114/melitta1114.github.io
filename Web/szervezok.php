<?php
  session_start();
?>
<!DOCTYPE html>
    <head>
        <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Szervezők</title>
        <link rel="stylesheet" href="szervezokstyle.css">
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
              <li><a href="altalanos.php">Tudnivalók</a></li>
              <li><a href="program.php">Programfüzet</a></li>
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
              <li><a href="altalanos.php">Tudnivalók</a></li>
              <li><a href="program.php">Programfüzet</a></li>
              <li><a href="resztvevokszamara.php">Résztvevőknek</a></li>
              <li><a href="tamogatok.php">Támogatók</a></li>
              <li><a href="loginmindenkinek.php">Bejelentkezés</a></li>
              <li style="float:right"><a class="active" href="about.php">Regisztráció</a></li>
          </ul>
      </nav>';
      }
          
  ?>

    <div class="container">
      <div class="column">
        <div class="image-container"><img src="Szász Levente.jpg"></div>
        <h2>Szász Levente</h2>
        <div>
          <p>PROFI SZERVEZETEK TAGJA

            • AIB – Nemzetközi Üzleti Akadémia (aib.msu.edu) – 2014-2015
            • EME – Erdélyi Múzeumi Egyesület (www.eme.ro)
            • EurOMA – Európai Üzemeltetési Menedzsment Egyesület (www.euroma-online.org)
            • GMRG – Globális Gyártáskutatási Csoport (www.gmrg.org) – 2008-2011
            • IMSS – Nemzetközi Gyártási Stratégiai Felmérés (www.manufacturingstrategy.net)
            • KAB – Magyar Tudományos Akadémia Kolozsvári Területi Bizottsága (www.kab.ro) – titkár (2010-2014), az Gazdaságtudományi Szekció elnöke (2014-jelenleg)
            • MTA – Magyar Tudományos Akadémia, külső tag (www.mta.hu)
            • RMKT – Romániai Magyar Közgazdász Társaság (www.rmkt.ro)</p>
        </div>
      </div>
      <div class="column">
        <div class="image-container"><img src="Soós Anna.jpg"></div>
        <h2>Soós Anna</h2>
        <div>
          <p>Tudományos társulati tagság:

            Gesellschaft für Angewante Mathematik und Mechanik (GAMM)
            
            IMS Istitute of Mathematical Statisitcs
            
            Bernoulli Society
            
            INFORMS/Applied Probability Society
            
            Magyar Operációkutatási Társaság
            
            Román Matematikai Társaság
            
            Romániai Valószínűségszámítás és Statisztika Társaság
            
            Erdélyi Magyar Műszaki és Tudományos Társaság
            
            Erdélyi Múzeum Egyesület
            
            Farkas Gyula Egyesület a Matematikáért és az Informatikáért
            
            Ipari és Alkalmazott Matematikai Társaság (SIAM)</p>
        </div>
      </div>
      <div class="column">
        <div class="image-container"><img src="Markó Bálint.jpg"></div>
        <h2>Markó Bálint</h2>
        <div>
          <p>Könyvek
            > Markó, B., Ujvárosi, L., László, Z. (2010): Gerinctelen állatismeret I. Az állati jellegű egysejtűektől a gyűrűsférgekig. Gyakorlati könyv egyetemi és középiskolai használatra. – Kolozsvári Egyetemi Kiadó / Presa Universitară Clujeană, Apáthy könyvek, ISBN 978-973-595-128-3, 978-973-595-129-0, Kolozsvár, p. 240. [pdf, 6549.9k]
            > Ujvárosi, L., Markó, B. (2007): Gerinctelen állattan I. Az állati jellegű egysejtűektől a gyűrűsférgekig. Rendszertani és morfológiai alapok. – Kolozsvári Egyetemi Kiadó / Presa Universitară Clujeană, Apáthy könyvek, ISBN 978-973-610-596-8, 978-973-610-585-2, Kolozsvár, p. 319. [fejezet, pdf, 11353.9k]</p>
        </div>
      </div>
      <div class="column">
        <div class="image-container"><img src="Szabó Tünde Petra.jpg"></div>
        <h2>Szabó Tünde Petra</h2>
        <div>
          <p>április 2014 - jelenlegi időpont: egyetemi tanár, Babeș-Bolyai Egyetem, Gazdaságtudományi és Vállalkozásvezetési Kar, Gazdaságtudományi és Vállalkozásvezetési Tanszék, Magyar Nyelvű Gazdaságtudományi és Vállalkozásvezetési Tanszék

            október 2011 - március 2014: egyetemi előadó, 2012 májusától magyar vonalért felelős dékánhelyettes, Babeș-Bolyai Egyetem, Gazdaságtudományi és Vállalkozásvezetési Kar, Gazdaságtudományi és Vállalkozásvezetési Tanszék, Magyar Nyelvű Gazdaságtudományi és Vállalkozásvezetési Tanszék
            
            október 2009 - október 2011: egyetemi előadó, Babeș-Bolyai Egyetem, Gazdaságtudományi és Vállalkozásvezetési Kar, Statisztika-Prognosztika-Matematika Tanszék
            
            február 2007 - október 2009: egyetemi adjunktus, Babeș-Bolyai Egyetem, Gazdaságtudományi és Vállalkozásvezetési Kar, Statisztika-Prognosztika-Matematika Tanszék
            
            február 2005 - február 2007: egyetemi előkészítő, Babeș-Bolyai Egyetem, Gazdaságtudományi és Vállalkozásvezetési Kar, Statisztika-Prognosztika-Matematika Tanszék
            
            október 2003 - február 2005: tanári munkatárs a Matematika a Gazdaságiaknak tantárgyban, Babeș-Bolyai Egyetem, Gazdaságtudományi és Vállalkozásvezetési Kar</p>
        </div>
      </div>
      <div class="column">
        <div class="image-container"><img src="Cardos Ildikó Réka.jpg"></div>
        <h2>Cardos Ildikó Réka</h2>
        <div>
          <p>1.ENELFA - ENtrepreneurship by E-Learning For Adults, Leonardo Da Vinci Program – Innováció átadása, projekt szám: LLP-LdV-TOI-2011-HU-018, UBB partner, 2011 – 2013, kutatócsapat tagja.

            2.AgriPolicy: Kibővített hálózat az Agripolicy elemzéséhez, FP7 211760, UBB partner, 2008 – 2010, kutatócsapat tagja.
            
            3.MONTIFIC – Többnyelvű belső pénzügyi ellenőrzési ontológia, UBB partner, 2008 – 2010, kutatócsapat tagja.
            
            4.Kutatási projekt - Támogatás: Koncepcionális modell a helyi közigazgatások számviteli rendszerének javítására a globális modernizációs trendek kontextusában, CNCSIS 961 - IDEI 2352, időszak: 2009-2011, kutatócsapat tagja.</p>
        </div>
      </div>
      <div class="column">
        <div class="image-container"><img src="Székely Imre.jpeg"></div>
        <h2>Székely Imre</h2>
        <div>
          <p>TKutatás

            2007 -  Evaluarea politicilor macroeconomice ale ţărilor recent devenite membre ale Uniunii Europene în vederea adoptării euro. Részvétel formája: kutatócsoport tagja. A kutatásról (témavezető/partner intézetek): Centrul de Cercetări Financiare şi Monetare „Victor Slavescu” és a Babes-Bolyai Tudományegyetem partnerségében.
            2006 - Monitorizarea trecerii la euro a ţărilor recent devenite membre ale U.E. Analize şi sinteze. Részvétel formája: kutatócsoport tagja. A kutatásról (témavezető/partner intézetek): Centrul de Cercetări Financiare şi Monetare „Victor Slavescu” és a Babes-Bolyai Tudományegyetem partnerségében.</p>
        </div>
      </div>
    </div>
        </body>
        </html>