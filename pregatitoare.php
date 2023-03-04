<html lang="ro">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="CSS/main.css">
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

  <div class="left-wrapper-noutati">
    <div style="font-size: 25px; color: green; margin: auto; font-weight: bold; text-align: center; text-decoration: underline;">Ținte strategice</div>
    <br><hr style="border: 2px solid green;"><br>
    <div style="font-size: 17px; color: rgb(27, 168, 27); margin: auto; font-weight: bold; text-align: center;">
    <ul style="width: 100%; display: block; margin: auto; box-sizing: border-box; list-style-type: none; padding-inline-start: 0px; padding-left: 0;">
      <li>&#10070; lărgirea orizontului fiecărui elev</li>
      <li>&#10070; creșterea competențelor</li>
      <li>&#10070; utilizarea corectă a informației primite</li>
      <li>&#10070; respectarea valorilor societății noastre</li>
    </ul>
    </div>
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
    <div style="font-size: 22px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">CLASA PREGĂTITOARE</div><br>
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">Înscrierea în învățămâtul primar 2020</div><br>
    <div class="image-cont" style="display: block; width: 100%; position: relative;">
        <img src="Images/inscrieri/2. (a) Clasa pregatitoare (a) .jpg" style="border: 3px double green; width: 97%">
        <img src="Images/agrafa.png" style="width: 80px; position: absolute; top: -18px; right: 30px; transform: rotate(-10deg);">
        <img src="Images/tape.png" style="width: 200px; position: absolute; top: -50px; left: -60px;">
    </div>
    <br>
    <div style="font-size: 25px; color: rgb(0, 107, 0); margin: auto; font-weight: bold; text-align: initial;">Procedura de înscriere</div><br>
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: justify; text-indent: 25px;">Copiii care împlinesc vârsta de 6 ani până pe 31 august 2020 inclusiv – trebuie sa fie înscriși de părinți în cele două clase pregătitoare ale școlii noastre.
        <br><br>În cazul în care un copil împlinește vârsta de 6 ani în perioada 1 septembrie – 31 decembrie 2020, iar părintele vrea să îl înscrie la școală, copilul trebuie să susțină o examinare psihosomatică și numai dacă dezvoltarea este corespunzătoare poate urma clasa pregătitoare. Dacă părintele nu optează pentru evaluarea psihosomatică sau în cazul în care copilul nu a fost declarat pregătit pentru școală, în urma evaluării, atunci acesta va fi înscris în învățământul preșcolar, la grupa mare.
    </div>
    <br>
    <div style="font-size: 25px; color: rgb(0, 107, 0); margin: auto; font-weight: bold; text-align: initial;">Documentele necesare înscrierii: </div><br>
    <ul style="display: block; width: 100%; margin: auto; font-size: 18px; font-family: sans-serif; box-sizing: border-box; font-weight: bold; color: rgb(0, 167, 0); list-style-type: none; padding-left: 0;">
        <li>- cerere de înscriere tip</li>
        <li>- copii ale cărților de identitate ale părinților</li>
        <li>- copie a certificatului de naștere a copilului;</li>
        <li>- evaluarea psihosomatică de la CJRAE (doar acolo unde este cazul).</li>
    </ul>
    <br>
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: justify; text-indent: 25px;"><span style="color: black;">Programul de completare a cererilor tip de înscriere,</span> conform metodologiei, zilnic in intervalul orar 8.00-14.00 (luni-vineri), în urma unei programări stabilite de școală. </div><br>
    <div style="font-size: 20px; color: red; margin: auto; font-weight: bold; text-align: justify; text-indent: 25px;"><span style="color: black;">Perioada de încriere: </span>04-23 martie.</div><br>
    <a style="font-size: 15px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center; padding: 4px; margin: auto; width: 100%; display: block; font-style: italic;" href="Images/inscrieri/2. (b) proiect_metodologie_-inscriere_invatamant-primar.pdf">Metodologie înscriere în învățământul primar 2020-2021</a>
    <a style="font-size: 15px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center; padding: 4px; margin: auto; width: 100%; display: block; font-style: italic;" href="Images/inscrieri/2. (c) proiect_calendar_inscriere_invatamant_primar.pdf.pdf">Calendarul înscrierii în învățământul primar 2020-2021</a>
    <a style="font-size: 15px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center; padding: 4px; margin: auto; width: 100%; display: block; font-style: italic;" href="Images/inscrieri/2. (d) Precizari_Eval_Psihosomatica_2020.pdf">Precizări evaluare psihosomatică</a>
    <a style="font-size: 15px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center; padding: 4px; margin: auto; width: 100%; display: block; font-style: italic;" href="Images/inscrieri/2. (e)  CERERE_TIP_CLSPRG_2020_ETAPA_I.pdf">Cerere tip înscriere clasa pregătitoare</a>
    <br>
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