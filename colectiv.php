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
    <div style="font-size: 25px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: center;">COLECTIVUL ȘCOLII</div><br>
    <div class="image-cont" style="display: block; width: 100%; position: relative;">
        <img src="Images/Prezentare/2 colectivul (a) .jpg" style="border: 3px double green; width: 97%">
        <img src="Images/agrafa - gri.png" style="width: 80px; position: absolute; top: -18px; right: 30px; transform: rotate(-10deg);">
        <img src="Images/tape.png" style="width: 200px; position: absolute; top: -50px; left: -60px;">
    </div>
    <br>
    <div style="font-size: 25px; color: rgb(27, 168, 27); margin: auto; font-weight: bold; text-align: center;">„A fi impreună este un început, a rămâne împreună este un progres, a lucra împreună este un succes.”</div><br>
    <div class="image-cont" style="display: block; width: 60%; position: relative; margin: auto;">
        <img src="Images/Prezentare/2 colectivul (b).png" style="border: 3px double green; width: 97%">
        <img src="Images/agrafa - gri.png" style="width: 80px; position: absolute; top: -18px; right: 30px; transform: rotate(-10deg);">
        <img src="Images/tape.png" style="width: 200px; position: absolute; top: -50px; left: -60px;">
    </div>
    <br>
    <div style="font-size: 25px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: initial;">Conducere</div><br>
    <div style="font-size: 18px; color: rgb(0, 70, 0); margin: auto; text-align: initial; font-weight: bold; line-height: 1.6; text-indent: 20px;">DIRECTOR - prof. inv. primar ENCIU DOMNICA</div><br>
    <div style="font-size: 25px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: initial;">Personal didactic auxiliar</div><br>
    <div style="font-size: 18px; color: rgb(0, 70, 0); margin: auto; text-align: initial; font-weight: bold; line-height: 1.6; text-indent: 20px;">Samuilă Nicoleta – secretar</div><br>
    <div style="font-size: 18px; color: rgb(0, 70, 0); margin: auto; text-align: initial; font-weight: bold; line-height: 1.6; text-indent: 20px;">Cristea Aurelia-Ana – contabil</div><br>
    <div style="font-size: 25px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: initial;">Personal nedidactic</div><br>
    <div style="font-size: 18px; color: rgb(0, 70, 0); margin: auto; text-align: initial; font-weight: bold; line-height: 1.6; text-indent: 20px;">Achim Georgeta – îngrijitor</div><br>
    <div style="font-size: 18px; color: rgb(0, 70, 0); margin: auto; text-align: initial; font-weight: bold; line-height: 1.6; text-indent: 20px;">Tătaru Aurel – îngrijitor</div><br>
    <div style="font-size: 18px; color: rgb(0, 70, 0); margin: auto; text-align: initial; font-weight: bold; line-height: 1.6; text-indent: 20px;">Niculae Doina - îngrijitor</div><br>
    <div style="font-size: 25px; color: rgb(0, 167, 0); margin: auto; font-weight: bold; text-align: initial;">Corpul profesional</div><br>
    <div style="font-size: 18px; color: rgb(0, 70, 0); margin: auto; font-weight: bold; text-align: initial;">Faceți click pe numele unui profesor pentru a afla mai multe detalii despre acesta</div><br>
   <div class="prof-cat-1">
       <div class="button1">CICLU PREȘCOLAR</div>
       <div class="flexbox hidden">
        <div class="prof-cat-2">
            <div class="button2">Grupa mică</div>
            <div class="prof-cat-3 hidden">
                <div class="nume-prof">
                DONEANU MARIANA
                </div>
                <div class="desc-prof" style="display: none">
                    <img class="prof-img" src="Images/copil.png" style="display: none;">
                    <pre class="prof-text">- prof. înv. preșcolar, titular - gradul didactic I</pre>
                </div>
            </div>
        </div>
        <div class="prof-cat-2">
            <div class="button2">Grupa mijlocie</div>
            <div class="prof-cat-3 hidden">
                <div class="nume-prof">
                JIPA AURELIA
                </div>
                <div class="desc-prof" style="display: none">
                    <img class="prof-img" src="">
                    <pre class="prof-text">- prof. înv. preșcolar, titular - gradul didactic II</pre>
                </div>
            </div>
        </div>
        <div class="prof-cat-2">
            <div class="button2">Grupa mare</div>
            <div class="prof-cat-3 hidden">
                <div class="nume-prof">
                DRAGAN VALENTINA
                </div>
                <div class="desc-prof" style="display: none">
                    <img class="prof-img" src="">
                    <pre class="prof-text">- prof. înv. preșcolar, titular - gradul didactic II</pre>
                </div>
            </div>
        </div>
       </div>
   </div>
   <div class="prof-cat-1">
    <div class="button1">CICLU ȘCOLAR</div>
    <div class="flexbox hidden">
     <div class="prof-cat-2">
         <div class="button2">Clasa pregătitoare A</div>
         <div class="prof-cat-3 hidden">
             <div class="nume-prof">
                ENCIU DOMNICA
             </div>
             <div class="desc-prof" style="display: none">
                 <img class="prof-img" src="Images/copil.png" style="display: none;">
                 <pre class="prof-text">- prof. înv. primar, titular - gradul didactic I</pre>
             </div>
         </div>
     </div>
     <div class="prof-cat-2">
         <div class="button2">Clasa pregătitoare B</div>
         <div class="prof-cat-3 hidden">
             <div class="nume-prof">
                BĂRBULESCU LUCICA
             </div>
             <div class="desc-prof" style="display: none">
                 <img class="prof-img" src="">
                 <pre class="prof-text">- prof. înv. primar, titular - gradul didactic II</pre>
             </div>
         </div>
     </div>
     <div class="prof-cat-2">
         <div class="button2">Clasa I</div>
         <div class="prof-cat-3 hidden">
             <div class="nume-prof">
                NEAGU GEORGETA
             </div>
             <div class="desc-prof" style="display: none">
                 <img class="prof-img" src="">
                 <pre class="prof-text">- prof. înv. primar, titular - gradul didactic I</pre>
             </div>
         </div>
     </div>
     <div class="prof-cat-2">
        <div class="button2">Clasa II</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                CONSTANTIN MIHAELA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- prof. înv. primar, titular - gradul didactic I</pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Clasa III A</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                PANDURU GEORGETA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- prof. înv. primar, titular - gradul didactic I</pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Clasa III B</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                PETRE MARIA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- prof. înv. primar, titular - definitivat</pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Clasa IV</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                SAVU GEORGETA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- prof. înv. primar, titular - gradul didactic I</pre>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="prof-cat-1">
    <div class="button1">CICLU GIMNAZIAL</div>
    <div class="flexbox hidden">
     <div class="prof-cat-2">
         <div class="button2">Limba si literatura română</div>
         <div class="prof-cat-3 hidden">
             <div class="nume-prof">
               MILITARU AUREL
             </div>
             <div class="desc-prof" style="display: none">
                 <img class="prof-img" src="Images/copil.png" style="display: none;">
                 <pre class="prof-text">- profesor titular - gradul didactic I
                    - specializarea limba română - limba rusă
                    </pre>
             </div>
         </div>
         <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                BOBOCEA GEORGETA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="Images/copil.png" style="display: none;">
                <pre class="prof-text">- profesor calificat
                    - specializarea limba română - limba franceză
                    - dirigintă la clasa a VIII-a
                    </pre>
            </div>
        </div>
     </div>
     <div class="prof-cat-2">
         <div class="button2">Limba Franceză</div>
         <div class="prof-cat-3 hidden">
             <div class="nume-prof">
                MILITARU GEORGETA
             </div>
             <div class="desc-prof" style="display: none">
                 <img class="prof-img" src="">
                 <pre class="prof-text">- profesor calificat
                    - specializarea limba română - limba franceză
                    </pre>
             </div>
         </div>
     </div>
     <div class="prof-cat-2">
         <div class="button2">Limba Engleza</div>
         <div class="prof-cat-3 hidden">
             <div class="nume-prof">
                NIȚU RUXANDRA
             </div>
             <div class="desc-prof" style="display: none">
                 <img class="prof-img" src="">
                 <pre class="prof-text">- profesor titulat - definitivat
                    - specializarea limba engleză - religie
                    - înscriere pentru obținerea gradului didactic II
                    </pre>
             </div>
         </div>
     </div>
     <div class="prof-cat-2">
        <div class="button2">Informatică și TIC</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                NIȚU RUXANDRA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor titulat - definitivat
                    - specializarea limba engleză - religie
                    - înscriere pentru obținerea gradului didactic II
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Matematică</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                NIȚU VIFORAȘ
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor titular - gradul didactic I
                    - specializarea matematică
                    - diriginte la clasa a VI-a
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Chimie</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                ION VASILE
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor titular - gradul didactic II
                    - specializarea biologie
                    - diriginte la clasa a VII-a
                    -înscriere pentru obținerea gradului didactic I
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Biologie</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                ION VASILE
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor titular - gradul didactic II
                    - specializarea biologie
                    - diriginte la clasa a VII-a
                    -înscriere pentru obținerea gradului didactic I
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Fizică</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                SAMUILĂ NICULAE
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor calificat
                    - specializarea fizică
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Educație tehnologică</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                SAMUILĂ NICULAE
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text"></pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Istorie</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                MARIN VERONICA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor titular - gradul didactic II
                    - specializarea istorie
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Educație socială</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                MARIN VERONICA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor titular - gradul didactic II
                    - specializarea istorie
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Geografie</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                DOBRE FLORICA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="Images/Prezentare/Dobre Florica.png.jpg">
                <pre class="prof-text">
&#9989;	profesor titular de geografie;
&#9989;	grad didactic: definitivat;
&#9989;	înscriere pentru obținerea gradului didactic II (sesiunea 2021);
&#9989;	perioada activării în cadrul Școlii Gimnaziale nr. 1 Nana: sept. 2015 până în prezent;
                    
Program:
&#9989;	Luni- Școala Gimnazială ,,Constantin Teodorescu”, Șoldanu
&#9989;	Marți- Școala Gimnazială nr. 1 Nana
&#9989;	Miercuri- Școala Gimnazială ,,Mircea Eliade”, Oltenița
&#9989;	Joi- Școala Gimnazială nr. 1 Nana
&#9989;	Vineri- Școala Gimnazială ,,Mircea Eliade”, Oltenița; Școala Gimnazială ,,Constantin Teodorescu”, Șoldanu
                        
Orar (în cadrul Școlii Gimnaziale nr. 1 Nana):

&#9989;	Marți:
1.	Clasa  a V-a A opțional geografie
2.	–
3.	Clasa a V-a B
4.	Clasa a VIII-a
5.	–
6.	Clasa a VI-a

&#9989;	Joi:
1.	Clasa a VIII-a
2.	–
3.	–
4.	Clasa a V-a A
5.	Clasa a VII-a                    
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Religie</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                ION MIRELA
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor titular - definitivat
                    - specializarea religie ortodoxă
                    -înscriere pentru obținerea gradului didactic II
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Educație fizică și sport</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                NĂSTASE CRISTIAN
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor titular - definitivat
                    - specializarea educație fizică și sport
                    - diriginte la clasa a V-a 
                    - înscriere pentru obținerea gradului didactic II
                    </pre>
            </div>
        </div>
    </div>
    <div class="prof-cat-2">
        <div class="button2">Educație muzicală</div>
        <div class="prof-cat-3 hidden">
            <div class="nume-prof">
                CHIRICĂ DORIAN
            </div>
            <div class="desc-prof" style="display: none">
                <img class="prof-img" src="">
                <pre class="prof-text">- profesor calificat, definitivat
                    - specializarea educația muzicală
                    </pre>
            </div>
        </div>
    </div>
    </div>
</div>
  </div>
</div>

<div class="modal hidden">
<div class="close" onclick="close_modal()">
&#10060;
</div>
<div class="nume-modal">

</div>
<img src="" class="img-modal">
<pre class="text-modal">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis <br>omnis dicta nisi ratione quibusdam dolor iure aliquid enim esse perspiciatis. Volupta<br>tibus obcaecati laudantium asperiores consequuntur cum, cupiditate dolores voluptatum laborum.
</pre>
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