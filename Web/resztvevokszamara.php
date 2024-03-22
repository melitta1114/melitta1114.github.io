<?php
  session_start();
?>
<!DOCTYPE html>
    <head>
        <title>XI Nemzetközi Tanácsadói Konferencia/tanár/diák/egyetem/nyíltnapok/ismerkedés/Résztvevőknek</title>
        <link rel="stylesheet" href="resztvevokszamarastyle.css">
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
              <li><a href="szervezok.php">Szervezők</a></li>
              <li><a href="tamogatok.php">Támogatók</a></li>
              <li><a href="logout.php">Kijelentkezés</a></li>';
              if(isset($_SESSION['user']) && $_SESSION['user']===true && $_SESSION['eloado']===true){
                echo '<li><a href="feltoltes.php">Előadók feladatai</a></li>';
            }
            if(isset($SESSION['user']) && $_SESSION['user']===true && $_SESSION['eloado']===true && $_SESSION['username']==="admin@gmail.com"){
              echo '<li><a href="admin.php">Admin oldal</a></li>';
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
              <li><a href="szervezok.php">Szervezők</a></li>
              <li><a href="tamogatok.php">Támogatók</a></li>
              <li><a href="loginmindenkinek.php">Bejelentkezés</a></li>
              <li style="float:right"><a class="active" href="about.php">Regisztráció</a></li>
          </ul>
      </nav>';
      }
          
  ?>

        <h1>Előadóink</h1>

        <div class="container">
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Klaus Obermaier.png"></div></div>
              <h2>Klaus Obermaier</h2>
              <div>
                <p>Klaus Obermaier médiaművész, előadóművészeti rendező, koreográfus és zeneszerző.

                  Klaus Obermaier új médiumokkal alkot innovatív műveket a színházművészetben, zenében és installációkban, melyeket a kritikusok és a közönség is magasra értékel.
                  
                  Intermédia előadásai és művei Európában, Ázsiában, Észak- és Dél-Amerikában, valamint Ausztráliában láthatók fesztiválokon és színházakban. Több projektje, mint például a D.A.V.E, Apparition, Le Sacre Du Printemps, Dancing House és Ego, úttörőnek és műfajdefinálónak számítanak az új művészeti formák kifejlődése szempontjából, amelyek az emberi interakciókat digitális rendszerekkel ötvözik.
                  
                  Obermaier vendégprofesszor az olasz Velencei IUAV Egyetemen és a romániai Kolozsvári Babeș-Bolyai Egyetemen, ahol interaktív művészetet és multimédiás előadóművészetet tanít.</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Berki Tímea.jpeg"></div></div>
              <h2>Berki Tímea</h2>
              <div>
                <p>Oktatási tevékenység:
                  * Pathológia- 2 évig szemináriumok és gyakorlatok vezetése
                  * Immunológia alapjai - 21 éve szemináriumok, gyakorlatok, előadások tartása magyar, angol és német nyelven
                  *Signal transduction – Medical Biotechnology MsC
                  *Immunologiai módszerek – Klinikai Laboratóriumi Kutató MsC</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Ozsváth Judit.jpg"></div></div>
              <h2>Ozsváth Judit</h2>
              <div>
                <p>
                  Oktatott tantárgyak:
                  
                  Katekétika
                  A Tanárképző Intézet azoknak az egyetemi hallgatóknak a képzését vállalja fel, akik a szakképzés mellett a tanári pályához szükséges tudást és képességeket is el szeretnék sajátítani. A tanári igazolás, amelyet az alapképzéssel párhuzamos I-es szintű pedagógiai modul elvégzésével megszerezhetnek a hallgatók, lehetőséget kínál arra, hogy tanulmányaik befejeztével tanárként dolgozzanak a közoktatás kötelező szakaszában. Ahhoz, hogy valaki oktatóként helyezkedjék el a középiskola felső szakaszában (XI-XII. osztály), a posztliceális vagy az egyetemi oktatásban, el kell végeznie a II-es szintű pedagógiai modult is. Az I-es és II-es szintű pedagógiai modult igazoló oklevelek nem veszítik érvényüket.</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Robu Judit.jpg"></div></div>
              <h2>Robu Judit</h2>
              <div>
                <p>
                  A Babeș–Bolyai Tudományegyetem informatika szakán végzett 1980-ban. 1980–1990 között a Szamos-Tisza Vízügyi Igazgatóság rendszerelemző-programozója. 1990-től egyetemi oktató, 1993-ig tanársegéd, 2008-ig adjunktus, azóta egyetemi docens.</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Daniel-Aurelian Andreica.png"></div></div>
              <h2>Daniel-Aurelian Andreica</h2>
              <div>
                <p>
                  LOCUL SUSȚINERII PUBLICE A TEZEI DE ABILITARE	Facultatea de Fizică, str. Kogălniceanu Mihail nr. 1, Amfiteatrul Augustin Maior (clădirea centrală a Universității, etajul 2)
                  TITLUL TEZEI DE ABILITARE	Investigating materials with μsr and μsr under pressure. Selected studies.
                  COMPONENȚA COMISIEI DE ABILITARE	1. Prof. univ. dr. Diana MARDARE, Universitatea „Alexandru Ioan Cuza” din Iași
                  2. Prof. univ. dr. ing. Coriolan TIUȘAN, Universitatea Tehnică din Cluj-Napoca

                  3. Prof. univ. dr. Viorel POP, Universitatea „Babeș – Bolyai” din Cluj-Napoca</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Barabás Réka.jpg"></div></div>
              <h2>Barabás Réka</h2>
              <div>
                <p>
                  Nanobioanyagok, vegyipari műveletek matematikai modellezése, kompozitanyagok előállítása és jellemzése, az IoT (internet of things) alkalmazása a kémiai- és vegyipari folyamatokban</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Macalik Kunigunda.jpg"></div></div>
              <h2>Macalik Kunigunda</h2>
              <div>
                <p>
                  Fő kutatási terület: növényökológia, vízi- és mocsári növények taxonómiája és ökológiája.
                  Kutatási témák:

                  Vizes élőhelyek minősítése a Túr-menti védett területen.
                  A Kárpátok néhány endémikus és reliktum növényfajának vizsgálata – elterjedés, populációméret-becslések, genetikai variabilitás.
                  Oktatott tantárgyak: Bevezetés a biológiába (BSc), Általános ökológia (gyakorlatok, BSc), Hidrobiológia (BSc), Bevezetés a környezetvédelembe (BSc)</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Bartos-Elekes Zsombor.jpg"></div></div>
              <h2>Bartos-Elekes Zsombor</h2>
              <div>
                <p>
                  Kutatási terület:

                  Térképészet: térképtörténet (Erdély régi térképeken, Cholnoky Térképtár, Magyar László), vetülettan (régi térképek dátum- és vetületi paraméterei), tematikus kartográfia (etnikai és felekezeti térképek), térképek szerkesztése és rajzolása
                  Helynévtan: mesterséges névadások (hatósági település- és utcanév-rendezések), névegységesítés (helységnévtárak, tájbeosztások, exonimák), térképi névhasználat (többnyelvű területen)
                  Tudománytörténet: földrajzoktatás a kolozsvári egyetemen</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Szőcs Izabella.jpg"></div></div>
              <h2>Szőcs Izabella</h2>
              <div>
                <p>
                  Strada Teodor Mihali, Nr. 58-60
                  Campus FSEGA
                  400591, Cluj-Napoca, Romania
                  Tel: +40 264 418 652/3/4/5
                  Fax: +40 264 412 570
                  Birou: 450
                  E-mail: izabella.szocs</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Bajusz István.jpg"></div></div>
              <h2>Bajusz István</h2>
              <div>
                <p>
                  Bajusz István régész, történész, a kolozsvári Babeş-Bolyai Tudományegyetem történelem szakán szerzett diplomát 1978-ban. Ettől az évtől a zilahi Történelmi Múzeum muzeológusa, majd főmuzeológusa és kutatója. Fő kutatási területe a római provinciális régészet. 1978-tól a porolissumi (Mojgrád, Szilágy megye) ásatások résztvevője. 1995-től a BBTE tanára, ahol egyetemes ókortörténetet és régészetet tanít, a magyar egyetemi hallgatók régészeti gyakorlatának irányítója. Érdeklődési köre szerteágazó, a középkori és újkori iparművészet/ötvösség, néprajz területére is kiterjed. Alapító tagja és igazgatója a Pósta Béla Egyesületnek, amely szakkollégiumi kutatómunka szervezésével, a régészhallgatók képzésének elősegítésével foglalkozik.</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Matei Ilka Melinda.jpg"></div></div>
              <h2>Matei Ilka Melinda</h2>
              <div>
                <p>
                  Szaktitkárnő – magyar tagozat

                  alapképzés – antropológia, humán erőforrás, szociológia, szociális munka
                  mesterik
 

                  Tel: 0264 – 419.958s</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Veres Anna.jpg"></div></div>
              <h2>Veres Anna</h2>
              <div>
                <p>
                  2014-ben végeztem Pszichológia alapképzésen, ezt követte két év mesterképzés a Pszichológiai Tanácsadás és Beavatkozás szakon. 2016-ban felvételt nyertem a Pszichodiagnosztika és Tudományosan Igazolt Pszichológiai Beavatkozások doktori iskolába. Doktori értekezésem a karrierfejlesztés és karriertervezés témaköröket vizsgálja.</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Rácz Béla-Gergely.jpg"></div></div>
              <h2>Rácz Béla-Gergely</h2>
              <div>
                <p>
                  Rácz Béla Gergely, közgazdász, egyetemi adjunktus a Babeş-Bolyai Tudományegyetem Közgazdaság- és Gazdálkodástudományi Karán. 2016 óta RMDSZ tag, ugyanakkor a Romániai Magyar Közgazdász Társaság alelnöke és a Gazdasági Tanácsadó Klub koordinátora.</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Kádár Magor.jpg"></div></div>
              <h2>Kádár Magor</h2>
              <div>
                <p>
                  Tapasztalt tréner és felsőoktatási tanár, erős háttérrel a helymárkázásban, stratégiai tervezésben és személyes fejlődésben. Hisz abban, hogy átalakítja a világot az oktatáson keresztül, valamint inspiráló környezeteket teremt az ötletek felvirágzásához és a közösségek növekedéséhez.</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Gombos Leon.png"></div></div>
              <h2>Gombos Leon</h2>
              <div>
                <p>
                  A Szabadidősport és Sporttudományok Kar dékánja, oktató a Sportjátékok Tanszékén.
                  Érdeklődési területek: Testnevelés, Versenysport, A fizikai aktivitás gyakorlásának hatása az egészségi állapotra, Kommunikáció a sporttevékenységekben, Sporttevékenységek és intézmények szervezése és irányítása. Kutatómunkája négy önálló szerzős könyvvel és két társszerzős könyvvel, öt ISI Web of Science cikkel, több mint 30 közlött munkával a nemzetközi adatbázisokban indexált elismert folyóiratokban nyilvánul meg, valamint több mint 10 nemzetközi konferencia Tudományos Bizottságának tagja, tagja számos hazai és nemzetközi szakmai szervezetnek.</p>
              </div>
            </div>
            <div class="column">
              <div class="image-wrapper"><div class="image-container"><img src="Gorbai Gabriella.jpg"></div></div>
              <h2>Gorbai Gabriella</h2>
              <div>
                <p>
                  Oktatott tárgyak: neveléstörténet, neveléselmélet, keresztyén pszichopedagógia, személyes, kognitív és szociális kompetenciák fejlesztése, a pedagógia története és a magyar tudomány fejlődése, a valláspedagógia pszichológiai alapjai</p>
              </div>
            </div>
          </div>
              </body>
              </html>