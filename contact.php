<html lang="ro">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="CSS/main.css">
<?php
use PHPMailer\PHPMailer\PHPMailer;
require("D:/xampp/htdocs/msad/PHPMailer-master/src/PHPMailer.php");
require("D:/xampp/htdocs/msad/PHPMailer-master/src/SMTP.php");
require("D:/xampp/htdocs/msad/PHPMailer-master/src/Exception.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$nume = $_POST["nume"];
$email = $_POST["email"];
$mesaj = $_POST["mesaj"];
$sub = 'Formular Online - Scoala Nana Calarasi';

if(!empty($nume) && !empty($email) && !empty($sub) && !empty($mesaj))
{
  $mail = new PHPMailer();

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ltmsbot6@gmail.com';                 // SMTP username
$mail->Password = 'Sadoveanu04';                           // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('ltmsbot6@gmail.com', 'LTMS - BOT');
$mail->addAddress('ltmsbot6@gmail.com', 'LTMS - BOT');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $sub;
$mail->Body    = 'Formular trimis de <b>' . $nume . '</b><br> Email: ' . $email . '<br> Mesaj: ' . $mesaj;

if(!$mail->send()) {
    echo '<script>alert("EROARE - Mesajul nu a fost trimis!");</script>';
} else {
    echo '<script>alert("Mesajul a fost trimis cu succes!");</script>';
}
}
else
{
  echo '<script>alert("Toate câmpurile sunt obligatorii!!!");</script>';
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
  <div style="font-size: 25px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">CONTACT</div><br>
    <div class="image-cont" style="display: block; width: 100%; position: relative; box-sizing: border-box;">
        <img src="Images/contact/contact .jpg" style="border: 3px double green; width: 100%; box-sizing: border-box;">
        <img src="Images/agrafa.png" style="width: 80px; position: absolute; top: -18px; right: 30px; transform: rotate(-10deg);">
        <img src="Images/tape.png" style="width: 200px; position: absolute; top: -50px; left: -60px;">
    </div>
    <br>
    <div style="font-size: 25px; color: rgb(0, 70, 0); margin: auto; font-weight: bold; text-align: initial;">Adresă</div>
    <br style="border: 3px solid green;">
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: initial;">Strada: Marin Preda, nr. 44, comuna Nana, județul Călărași</div>
    <br>
    <div style="font-size: 25px; color: rgb(0, 70, 0); margin: auto; font-weight: bold; text-align: initial;">Harta</div>
    <br style="border: 3px solid green;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d714.2807901505464!2d26.59343722924161!3d44.26628575906405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1d86048361e8f%3A0xdfb1ef8a2b7f7b83!2sScoala%20Generala%20cu%20clasele%20I-VIII%20Nana!5e0!3m2!1sro!2sro!4v1588071185598!5m2!1sro!2sro" width="100%" height="450" frameborder="0" class="gmap"allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>   
    <br><br>
    <div style="font-size: 25px; color: rgb(0, 70, 0); margin: auto; font-weight: bold; text-align: initial;">Telefon</div>
    <br style="border: 3px solid green;">
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: initial;">0242531517</div>
    <br>
    <div style="font-size: 25px; color: rgb(0, 70, 0); margin: auto; font-weight: bold; text-align: initial;">Adresa de e-mail</div>
    <br style="border: 3px solid green;">
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: initial;">scoalanana@yahoo.com</div>
    <br>
    <div style="font-size: 25px; color: rgb(0, 70, 0); margin: auto; font-weight: bold; text-align: initial;">Puneți întrebări</div>
    <br style="border: 3px solid green;">
    <div style="font-size: 20px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: initial; text-indent: 25px;">Această secțiune este dedicată comunicării dintre școală și părinți. Mulțumim pentru interesul acordat și vă asigurăm că vom răspunde în cel mai scurt timp posibil solicitărilor dumneavoastră.</div><br>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form-email">
      <input type="text" id="nume" name="nume" placeholder="Nume și prenume" class="input-contact">
      <span class="obligatoriu"></span>
      <br>
      <input type="text" id="email" name="email" placeholder="Adresa de e-mail" class="input-contact">
      <span class="obligatoriu"></span>
      <br>
      <input type="text" id="mesaj" name="mesaj" placeholder="Mesajul dvs. (reclamații,întrebări etc.)" class="input-contact">
      <span class="obligatoriu"></span>
      <br>
      <button type="submit" id="submit">Trimite >></button>
    </form>
    <br>
  </div>
</div>

<footer>
<div class="subsol">
  Adresa ta ip este <?php echo $_SERVER['REMOTE_ADDR'] ?><br>
  &#169; Copyright 2020 - Școala Gimnazială Nr.1 "Nana"
</div>
</footer>
<script>
  document.addEventListener('input' , function(){
  var erori = document.getElementsByClassName("obligatoriu");
  var inputuri = document.getElementsByTagName("input");
  for(var i=0;i<inputuri.length;i++)
  {
      if(inputuri[i].value === ""){
      erori[i].innerHTML = "* Camp obligatoriu!";
      }
      else
      erori[i].innerHTML = "";
  }
});
</script>
<script src="JS/script.js"></script>
</body>
</html>