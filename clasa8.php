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
  <div style="font-size: 25px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">Clasa a VIII-a</div><br>
    <div class="image-cont" style="display: flex; width: 100%; position: relative; border: 3px double green; box-sizing: border-box;">
        <img src="Images/Clase/5. (a) Clasa a VIII-a .jpg" style="width: 100%">
        <img src="Images/agrafa.png" style="width: 80px; position: absolute; top: -18px; right: 30px; transform: rotate(-10deg);">
        <img src="Images/tape.png" style="width: 200px; position: absolute; top: -50px; left: -60px;">
    </div>
    <br>
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">An școlar 2019-2020</div><br><br>
    <div style="font-size: 22px; color: rgb(0, 107, 0); margin: auto; font-weight: bold; text-align: center;">Evaluarea Națională clasa a VIII-a - <a href="https://www.edu.ro/evaluarea-na%C8%9Bional%C4%83-elevilor-de-clasa-viii-en-viii" style="color: red;">click aici pentru a accesa edu.ro</a></div><br>
    <div style="font-size: 20px; color: rgb(0, 107, 0); margin: auto; font-weight: bold; text-indent: 20px;">Calendarul EN VIII în anul școlar 2019-2020 este următorul:</div>
    <br>
    <ul style="font-family: sans-serif; font-weight: bold; font-size: 15px; list-style-type: none;">
<li>&#9989; 2-5 iunie - Înscrierea elevilor</li>
<li>&#9989; 5 iunie - Încheierea cursurilor pentru clasa a VIII-a</li>	
<li>&#9989; 15 iunie - Limba și literatura română – proba scrisă</li>	
<li>&#9989; 17 iunie - Matematică– proba scrisă</li>	
<li>&#9989; 18 iunie - Limba și literatura maternă – proba scrisă</li>	
<li>&#9989; 22 iunie - Afișarea rezultatelor înaintea contetațiilor (până la ora 12:00)</li>	
<li>&#9989; 22 iunie - Depunerea contetațiilor (orele 14:00 20:00)</li>	
<li>&#9989; 23-26 iunie - Soluționarea contetațiilor</li>	
<li>&#9989; 27 iunie - Afișarea rezultatelor finale după soluționarea contetațiilor</li>	 
    </ul>
    <br>
    <a style="font-size: 15px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; padding: 4px; margin: auto; width: 100%; display: block; text-align: center;" href="Images/Clase/5. (b) ordin-4916_2019-EN-VIII-2019-2020.pdf" download>Ordin 4916_2019 organizare și defășurare EN_VIII_2019-2020</a><br>
    <a style="font-size: 15px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; padding: 4px; margin: auto; width: 100%; display: block; text-align: center;" href="Images/Clase/5. (c) OMEN-nr.-4948-din-27.08.2019_admitere_liceu_an-scolar_2020-2021.pdf" download>OMEN 4948_2019 admitere liceu an școlar_2020-2021</a><br>
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