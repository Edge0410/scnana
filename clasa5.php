<html lang="ro">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="CSS/main.css">
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(!isset($_POST["gender"]))
  {
    echo '<script>alert("Selecteaza genul!")</script>';
  }
  else if(!isset($_POST["util"]))
  {
    echo '<script>alert("Toate câmpurile sunt obligatorii!!!")</script>';
  }
  else if(!isset($_POST["conf"]))
  {
    echo '<script>alert("Toate câmpurile sunt obligatorii!!!")</script>';
  }
  else if(!isset($_POST["cons"]))
  {
    echo '<script>alert("Toate câmpurile sunt obligatorii!!!")</script>';
  }
  else if(!isset($_POST["func"]))
  {
    echo '<script>alert("Toate câmpurile sunt obligatorii!!!")</script>';
  }
  else if(!isset($_POST["optional"]))
  {
    echo '<script>alert("Toate câmpurile sunt obligatorii!!!")</script>';
  }
  else if(!isset($_POST["propuneri"]))
  {
    echo '<script>alert("Toate câmpurile sunt obligatorii!!!")</script>';
  }
  else if(!isset($_POST["parola"]))
  {
    echo '<script>alert("Parola nu a fost introdusă")</script>';
  }
  else{
  $gender = $_POST["gender"];
  $util = $_POST["util"];
  $conf = $_POST["conf"];
  $cons = $_POST["cons"];
  $func = $_POST["func"];
  $optional = $_POST["optional"];
  $propuneri = $_POST["propuneri"];
  $parola = $_POST["parola"];
  if($parola == "optional5"){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chestionar";
  $trimfunc = "";
  foreach ($func as $i){
    $trimfunc = $trimfunc . "," . $i;
  }
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO chestionar (gen, util, conformitate, consultare, functie, optional, propuneri)
    VALUES ('$gender[0]', '$util[0]', '$conf[0]', '$cons[0]', '$trimfunc', '$optional[0]', '$propuneri[0]')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo '<script>alert("Chestionarul a fost trimis! Multumim!")</script>';
  } catch(PDOException $e) {
    echo '<script>alert("Eroare! Chestionarul nu a putut fi trimis!")</script>';
  }
}
else
{
  echo '<script>alert("Parola incorectă!")</script>';
}
  }
}
?>
<head>
<!--JQUERY DECLARATION-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body style="position: relative;">


<div class="title">
    <img src="Images/titlu.png" class="img-1">
</div>
<div class="img-float-container" style="right: 40px; top: 30px; transform: rotate(5deg);">
    <img src="Images/autobuz.png" width="250" height="250">
</div>
<div class="img-float-container"  style="left: 40px; top: 30px;">
    <img src="Images/23625-7-school-transparent-picture (1).png" width="250" height="250">
</div>


<div class="nav-cont">
    <div class="navbar" id="mynavbar">
      <a href="index.php" class="active" style="margin-left: auto;">Acasă</a>
      <div class="dropdown" onclick="show(0)">
          <button class="dropbtn">Școala Noastră &#8659;</button>
          <div class="dropdown-content">
            <a href="prezentare.php">Prezentare</a>
            <a href="colectiv.php">Colectivul</a>
            <a href="oferta.php">Oferta educationala</a>
            <a href="regulament.php">Regulament</a>
            <a href="program.php">Program</a>
          </div>
        </div> 
      <div class="dropdown" onclick="show(1)">
        <button class="dropbtn">Activități Școlare &#8659;</button>
        <div class="dropdown-content">
          <a href="concursuri.php">Olimpiade și concursuri</a>
          <a href="maibun.php">Programul „Să știi mai multe, să fii mai bun!”</a>
          <a href="proiecte.php">Proiecte</a>
        </div>
      </div> 
      <div class="dropdown" onclick="show(2)">
        <button class="dropbtn">Înscrieri &#8659;</button>
        <div class="dropdown-content">
          <a href="gradinita.php">Grădiniță</a>
          <a href="pregatitoare.php">Clasa pregătitoare</a>
        </div>
      </div>
      <div class="dropdown" onclick="show(3)">
        <button class="dropbtn">Clase &#8659;</button>
        <div class="dropdown-content">
          <a href="primar.php">Clasele pregătitoare-IV</a>
          <a href="clasa5.php">Clasa a V-a</a>
          <a href="clasa6.php">Clasa a VI-a</a>
          <a href="clasa7.php">Clasa a VII-a</a>
          <a href="clasa8.php">Clasa a VIII-a</a>
        </div>
      </div> 
      <a href="contact.php" style="margin-right: auto;">Contact</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsive()">&#9776;</a>
    </div>
    <img src="Images/copil.png" class="img-navbar">
  </div>
<br>
<br>

<div class="wrapper">
  <div class="left-wrapper">
    <div class="left-wrapper-noutati">
    <img src="Images/basketball_PNG1103.png" style="width: 60px; height: 60px; position: absolute; top: -20px; right: -20px;" class="rotating-img">
    <div style="font-size: 25px; color: green; margin: auto; font-weight: bold; text-align: center; text-decoration: underline;">Noutăți</div>
    <br><hr style="border: 2px solid green;"><br>
    <a class="link-wrapper" href="https://www.edu.ro/m%C4%83surile-stabilite-de-ministerul-educa%C8%9Biei-%C8%99i-cercet%C4%83rii-cu-privire-la-reluarea-cursurilor">&#9864; Măsurile stabilite de Ministerul Educației și Cercetării cu privire la reluarea cursurilor</a>
    <br><br>
    <a class="link-wrapper" href="https://www.edu.ro/liceeni-din-comunit%C4%83%C8%9Bile-dezavantajate-din-punct-de-vedere-tehnologic-vor-primi-tablete">&#9864; Liceeni din comunitățile dezavantajate din punct de vedere tehnologic vor primi tablete</a>
    <br><br>
    <a class="link-wrapper" href="https://www.edu.ro/ministerul-educa%C8%9Biei-%C8%99i-cercet%C4%83rii-lansat-un-amplu-proces-de-consultare-public%C4%83-pentru-realizarea">&#9864; EDU.RO: Ministerul Educației și Cercetării a lansat un amplu proces de consultare publică pentru realizarea profilului de competențe ale cadrului didactic</a>
  </div>
  <br>
  <div class="left-wrapper-noutati">
    <div style="font-size: 25px; color: green; margin: auto; font-weight: bold; text-align: center; text-decoration: underline;">Misiunea Școlii</div>
    <img src="Images/exclamation.png" style="width: 60px; position: absolute; top: -35px; right: -30px;">
    <br><hr style="border: 2px solid green;"><br>
    <div style="font-size: 17px; color: rgb(27, 168, 27); margin: auto; font-weight: bold; text-align: center;">Educația nu este un privilegiu, ci este un drept al tuturor. De aceea, școala noastră este deschisă tuturor celor care au nevoie de educație.</div>
  </div>
  <br>

  <div class="left-wrapper-noutati" style="background-color: white; margin-bottom: 5px;">
    <div style="font-size: 25px; color: green; margin: auto; font-weight: bold; text-align: center; text-decoration: underline; width: 100%;">CALENDAR</div>
  </div>
  <div class="left-wrapper-noutati">
    <div style="font-size: 20px; color: green; margin: auto; font-weight: bold; text-align: center; text-decoration: underline;" class="month">Decembrie 2013</div>
    <br>
      <table class="calendar-container" style="border-spacing: 2px;">
        <tr>
          <td style="background-color: gray; color: white;">Lu</td>
          <td style="background-color: gray; color: white;">Ma</td>
          <td style="background-color: gray; color: white;">Mi</td>
          <td style="background-color: gray; color: white;">Jo</td>
          <td style="background-color: gray; color: white;">Vi</td>
          <td style="background-color: gray; color: white;">Sa</td>
          <td style="background-color: gray; color: white;">Du</td>
        </tr>
        <tr>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
        </tr>
        <tr>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
        </tr>
        <tr>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
        </tr>
        <tr>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
        </tr>
        <tr>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
        </tr>
        <tr>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
          <td class="data-number"></td>
        </tr>
      </table>
  </div>
  <br>
  <div class="left-wrapper-noutati">
  <div style="font-size: 20px; color: green; margin: auto; font-weight: bold; text-align: center; text-decoration: underline;">Linkuri Utile:</div>
  <br><hr style="border: 2px solid green;"><br>
    <a class="link-wrapper" href="http://edu.ro">&#9864; Edu.ro</a><br>
    <a class="link-wrapper" href="http://olimpiade.ro">&#9864; Olimpiade.ro</a><br>
    <a class="link-wrapper" href="http://ISJ-CL.RO">&#9864; Inspectoratul Școlar Județean - Călărași</a> 
  </div>
  </div>
  <div class="main-wrapper">
  <div style="font-size: 25px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">Clasa a V-a</div><br>
    <div class="image-cont" style="display: flex; width: 100%; position: relative; border: 3px double green; box-sizing: border-box;">
        <img src="Images/Clase/2. (a) Clasa a V-a .jpg" style="width: 33%">
        <img src="Images/Clase/2. (b) Clasa a V-a .jpg" style="width: 34%">
        <img src="Images/Clase/2. (c) Clasa a V-a .jpg" style="width: 33%">
        <img src="Images/agrafa.png" style="width: 80px; position: absolute; top: -18px; right: 30px; transform: rotate(-10deg);">
        <img src="Images/tape.png" style="width: 200px; position: absolute; top: -50px; left: -60px;">
    </div>
    <br>
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">An școlar 2019-2020</div><br>
    <div style="font-size: 21px; color: rgb(0, 167, 0); margin: auto; font-weight: bolder; text-decoration: underline; ">Planul cadru</div><br>
    <div style="font-size: 18px; color: rgb(0, 127, 0); margin: auto; font-weight: bold; ">Pentru o privire de ansamblu la nivel gimnazial puteți studia noul <a style="color: red;" href="Images/Clase/2. (d) Plan cadru gimnaziu.pdf">plan cadru.</a></div><br>
    <div style="font-size: 21px; color: rgb(0, 167, 0); margin: auto; font-weight: bolder; text-decoration: underline; ">Materiile ce se studiază în clasa a V-a sunt:</div><br>
    <img src="Images/Clase/2. (e) Clasa a V-a .jpg" class="img-5">
    <ul style="display: block; width: 30%; list-style-type: decimal; font-size: 16px; color: rgb(0, 127, 0); font-weight: bold; line-height: 1.6;">
      <li>Limba și literatura română</li>
      <li>Limba engleză </li>
      <li>Limba franceză</li>
      <li>Matematică</li>
      <li>Educație socială</li>
      <li>Geografie</li>
      <li>Istorie</li>
      <li>Biologie</li>
      <li>Religie</li>
      <li>Educație plastică</li>
      <li>Educație muzicală</li>
      <li>Educație fizică și sport</li>
      <li>Educație tehnologică</li>
      <li>Informatică și TIC</li>
      <li>Opțional geografie „Curiozități geografice”</li>
    </ul>
    <br>
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">Tabel cu profesorii și materiile predate de aceștia la clasa a V-a</div><br>
    <table class="tabel-profi">
      <tr>
        <td>Nr.crt</td>
        <td>Nume și prenume</td>
        <td>Disciplina predată</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Bobocea Geta</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Limba și literatura română</li>
            <li>&#9989; Educație plastică</li>
          </ul>
        </td>
      </tr>

      <tr>
        <td>2.</td>
        <td>Nițu Ruxandra</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Limba engleză</li>
            <li>&#9989; Religie</li>
            <li>&#9989; Informatică și TIC</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Militaru Georgeta</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Limba franceză</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Nițu Viforaș</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Matematică</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Marin Veronica</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Istorie</li>
            <li>&#9989; Educație socială</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Dobre Florica</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Geografie</li>
            <li>&#9989; Opțional geografie</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Ion Vasile</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Biologie</li>
            <li>&#9989; Educație tehnologică</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Chirică Dorian</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Educație muzicală</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Tănase Cristian</td>
        <td>
          <ul style="padding-left: 0; list-style-type: none; margin: 0;">
            <li>&#9989; Educație fizică și sport</li>
          </ul>
        </td>
      </tr>
    </table>
    <br>
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">Orarul clasei a V-a</div><br>
    <table class="tabel-profi orar">
      <tr>
        <td>Nr.crt</td>
        <td>Luni</td>
        <td>Marți</td>
        <td>Miercuri</td>
        <td>Joi</td>
        <td>Vineri</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Religie</td>
        <td>Educație fizică și sport</td>
        <td>Biologie</td>
        <td>Geografie</td>
        <td>Educație plastică</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Limba engleză</td>
        <td>Matematică</td>
        <td>Limba și literatura română</td>
        <td>Istorie</td>
        <td>Educație muzicală</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Limba și literatura română</td>
        <td>Opțional geografie</td>
        <td>Educație fizică și sport</td>
        <td>Limba franceză</td>
        <td>Istorie</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Educație socială</td>
        <td>TIC</td>
        <td>Limba engleză</td>
        <td>Limba și literatura română</td>
        <td>Matematică</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Limba și literatura română</td>
        <td>Matematică</td>
        <td>Matematică</td>
        <td>Limba franceză</td>
        <td>Consiliere și dezvoltare personală</td>
      </tr>
      <tr>
        <td>6.</td>
        <td></td>
        <td>Educație tehnologică</td>
        <td></td>
        <td>Educație fizică și sport</td>
        <td></td>
      </tr>
    </table>
    <br>
    <div style="font-size: 21px; color: rgb(150, 107, 200); margin: auto; font-weight: bolder; text-align: center;">CHESTIONAR PENTRU ELEVI</div><br>
    <div style="font-size: 19px; color: rgb(150, 107, 200); margin: auto; font-weight: bolder; text-align: center;">Disciplina opțională, an școlar 2019-2020</div><br>
    <div style="font-size: 17px; color: rgb(0, 0, 0); margin: auto; font-weight: bolder; text-align: justify; text-indent: 20px;">Dragi elevi, vă rugăm să ne ajutați în cunoașterea nevoilor/intereselor voastre cu privire la studiul disciplinei opționale. Vă rugăm să răspundeți la întrebările noastre. Opinia voastră este importantă pentru alegerea disciplinei opționale în anul școlar următor.</div><br>
    <div style="font-size: 17px; color: rgb(255, 0, 0); margin: auto; font-weight: bolder; text-align: justify; text-indent: 20px;">Pentru ca acest chestionar să fie valid, va rugăm sa completați toate câmpurile!</div><br>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="chestionar">
        <div style="font-size: 19px; color: rgb(0, 0, 0); margin: auto; font-weight: bolder; ">Selecteaza genul:</div><br>
        <input type="radio" name="gender[]" value="Masculin"><label for="gender[]">Masculin</label><br>
        <input type="radio" name="gender[]" value="Feminin"><label for="gender[]">Feminin</label><br>
        <br>
        <div style="font-size: 19px; color: rgb(0, 0, 0); margin: auto; font-weight: bold; ">1. Consideri util studiul disciplinelor opţionale pe care le-ai parcurs până în prezent?</div><br>
        <input type="radio" name="util[]" value="Foarte util"><label for="util[]">Foarte Util</label><br>
        <input type="radio" name="util[]" value="Util"><label for="util[]">Util</label><br>
        <input type="radio" name="util[]" value="Puțin util"><label for="util[]">Puțin util</label><br>
        <input type="radio" name="util[]" value="Inutil"><label for="util[]">Inutil</label><br>
        <input type="radio" name="util[]" value="Nu știu"><label for="util[]">Nu știu</label><br>
        <br>
        <div style="font-size: 19px; color: rgb(0, 0, 0); margin: auto; font-weight: bold; ">2. Disciplinele opţionale pe care le-ai studiat până acum au fost în conformitate cu interesul şi motivaţia ta?</div><br>
        <input type="radio" name="conf[]" value="De cele mai multe ori"><label for="conf[]">De cele mai multe ori</label><br>
        <input type="radio" name="conf[]" value="Uneori"><label for="conf[]">Uneori</label><br>
        <input type="radio" name="conf[]" value="Niciodată"><label for="conf[]">Niciodată</label><br>
        <input type="radio" name="conf[]" value="Nu știu"><label for="conf[]">Nu știu</label><br>
        <br>
        <div style="font-size: 19px; color: rgb(0, 0, 0); margin: auto; font-weight: bold;">3. De regulă, esti consultat în privinţa alegerii disciplinelor opţionale?</div><br>
        <input type="radio" name="cons[]" value="De cele mai multe ori"><label for="cons[]">De cele mai multe ori</label><br>
        <input type="radio" name="cons[]" value="Uneori"><label for="cons[]">Uneori</label><br>
        <input type="radio" name="cons[]" value="Niciodată"><label for="cons[]">Niciodată</label><br>
        <input type="radio" name="cons[]" value="Nu știu"><label for="cons[]">Nu știu</label><br>
        <br>
        <div style="font-size: 19px; color: rgb(0, 0, 0); margin: auto; font-weight: bold;">4. Dacă Da, în funcție de ce ai ales disciplinele opționale? (se pot bifa mai multe variante)</div><br>
        <input type="checkbox" name="func[]" value="în funcție de interese și nevoi"><label for="func[]">în funcție de interese și nevoi</label><br>
        <input type="checkbox" name="func[]" value="în funcție de profesorul care propune"><label for="func[]">în funcție de profesorul care propune</label><br>
        <input type="checkbox" name="func[]" value="în funcție de aptitudinile mele"><label for="func[]">în funcție de aptitudinile mele</label><br>
        <input type="checkbox" name="func[]" value="în funcție de ce am auzit de la alți colegi de școală"><label for="func[]">în funcție de ce am auzit de la alți colegi de școală</label><br>
        <input type="checkbox" name="func[]" value="nu mă interesează"><label for="func[]">nu mă interesează</label><br>
        <br>
        <div style="font-size: 19px; color: rgb(0, 0, 0); margin: auto; font-weight: bold;">5. La care disciplină din trunchiul comun ai dori să parcurgi și o disciplină opțională?</div><br>
        <input type="radio" name="optional[]" value="Romana"><label for="optional[]">Limba și literatura română</label><br>
        <input type="radio" name="optional[]" value="Engleza"><label for="optional[]">Limba engleză</label><br>
        <input type="radio" name="optional[]" value="Franceza"><label for="optional[]">Limba franceză</label><br>
        <input type="radio" name="optional[]" value="Matematica"><label for="optional[]">Matematică</label><br>
        <input type="radio" name="optional[]" value="Ed.sociala"><label for="optional[]">Educație socială</label><br>
        <input type="radio" name="optional[]" value="Geografie"><label for="optional[]">Geografie</label><br>
        <input type="radio" name="optional[]" value="Istorie"><label for="optional[]">Istorie</label><br>
        <input type="radio" name="optional[]" value="Biologie"><label for="optional[]">Biologie</label><br>
        <input type="radio" name="optional[]" value="Religie"><label for="optional[]">Religie</label><br>
        <input type="radio" name="optional[]" value="Ed.plastica"><label for="optional[]">Educație plastică</label><br>
        <input type="radio" name="optional[]" value="Ed.muzicala"><label for="optional[]">Educație muzicală</label><br>
        <input type="radio" name="optional[]" value="Sport"><label for="optional[]">Educație fizică și sport</label><br>
        <input type="radio" name="optional[]" value="Ed.tehnologica"><label for="optional[]">Educație tehnologică</label><br>
        <input type="radio" name="optional[]" value="Info & TIC"><label for="optional[]">Informatică și TIC</label><br>
        <input type="radio" name="optional[]" value="Fizica"><label for="optional[]">Fizică</label><br>
        <br>
        <div style="font-size: 19px; color: rgb(0, 0, 0); margin: auto; font-weight: bold;">6. Propune una, două sau trei teme care te interesează şi te pasionează și care ar putea deveni opționalul pe care îl vei studia anul următor școlar:</div><br>
        <textarea style="width: 100%; height: 100px;" name="propuneri[]" placeholder="exemplu: spatiul cosmic, web design etc."></textarea><br>
        <br>
        <div style="font-size: 19px; color: rgb(0, 0, 0); margin: auto; font-weight: bold;">Introdu parola clasei (pentru a preveni abuzul):</div><br>
        <input type="password" name="parola" style="border: 1px solid black; padding: 3px; border-radius: 5px; height: 30px; margin-bottom:10px;" placeholder="Parola :)" class="sub-parola">
        <br>
        <button type="submit" class="sub-button">Trimite chestionarul</button><br>
      </form>
</div>
</div>

<footer>
<div class="subsol">
  Adresa ta ip este <?php echo $_SERVER['REMOTE_ADDR'] ?><br>
  &#169; Copyright 2020 - Școala Gimnazială Nr.1 "Nana"
</div>
</footer>
<script src="JS/script.js"></script>
</body>
</html>