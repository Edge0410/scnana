// Navbar responsive - vizualizare de pe telefon
//initiem functia pentru generarea calendarului
calendar_load();
function responsive() {
    var x = document.getElementById("mynavbar");
    var cont = document.getElementsByClassName("dropdown-content");
    if (x.className === "navbar") {
      x.className += " responsive";
    } else {
      x.className = "navbar";
      for(i=0;i<cont.length;i++)
      cont[i].style.display = '';
    }
  }

// functii pentru navbar - meniuri
// algoritizam tot ce inseamna actiunea unui meniu din navbar prin javascript pentru omiterea dublu clickurilor

function show(index){
    var cont = document.getElementsByClassName("dropdown-content");
    if(cont[index].style.display == '')
        k = 0;
    else
        k = 1;
    for(i=0;i<cont.length;i++)
    cont[i].style.display = '';
    setTimeout(function(){var cont = document.getElementsByClassName("dropdown-content");
    if(k == 0)
    cont[index].style.display = 'block';
} , 50)
}

function hide(){
    var cont = document.getElementsByClassName("dropdown-content");
    for(i=0;i<cont.length;i++)
    cont[i].style.display = 'none';
}

// trick pentru disparitia meniurilor navbarului atunci cand apasam click in afara lui

$('html').click(function() {
  var cont = document.getElementsByClassName("dropdown-content");
  for(i=0;i<cont.length;i++)
    cont[i].style.display = '';
  var top = document.getElementById("mynavbar");
  top.className = "navbar";
});

$('#mynavbar').click(function(event){
    event.stopPropagation();
});

// Initializarea calendarului

function calendar_load()
{
  var table = document.getElementsByClassName("calendar-container")[0];
  var datanum = document.getElementsByClassName("data-number");
  var month = document.getElementsByClassName("month")[0];
  var date = new Date();
  var months = ["Ianuarie" , "Februarie" , "Martie" , "Aprilie" , "Mai" , "Iunie" , "Iulie" , "August" , "Septembrie" , "Octombrie" , "Noiembrie" , "Decembrie"];
  var monthsdays = [31,31,28,31,30,31,30,31,31,30,31,30,31];
  month.innerHTML = months[date.getMonth()] + ' ' + date.getFullYear();
  var ziuasapt = date.getDay();
  if(ziuasapt == 0)
    ziuasapt == 7;
  var incepluna = ziuasapt - (date.getDate() % 7);
  if(incepluna <= 0)
    incepluna += 7;
  var lunacurenta = date.getMonth();
  var ziuacurenta = date.getDate();
  for(i=0;i<datanum.length;i++)
  {
    if(i < incepluna){
      datanum[i].innerHTML = monthsdays[lunacurenta] - Math.abs(incepluna - i) + 1;
      datanum[i].style.backgroundColor = "gray";
      datanum[i].style.color = "white";
    }
    if(i >= incepluna && ((i - incepluna + 1) <= monthsdays[lunacurenta+1]))
      datanum[i].innerHTML = i - incepluna + 1;
    if(ziuacurenta == i - incepluna + 1){
      datanum[i].style.backgroundColor = "red";
      datanum[i].style.color = "white";
    }
      // facem un efect pentru a marca ziua de azi.
    if((i - incepluna + 1) > monthsdays[lunacurenta+1])
      {
        datanum[i].innerHTML = (i - incepluna + 1) - monthsdays[lunacurenta+1];
        datanum[i].style.backgroundColor = "gray";
      datanum[i].style.color = "white";
      }
  }
}

// Animarea panoului de noutati + calendar + misiunea scolii
/*
window.addEventListener("scroll" , function(){
  var panel = document.getElementsByClassName("left-wrapper")[0];
  var body = document.getElementsByTagName("BODY")[0];
  var poz_panel = panel.offsetTop;
  var scrollfromtop = body.scrollTop;
    if(window.innerWidth >= 951)
    {
      if(scrollfromtop > poz_panel + 30){
      var newpoz = scrollfromtop - (poz_panel + 35);
      panel.style.paddingTop = newpoz+'px';
      }
    }
})

*/

//Algoritmizarea panoului de profesori - legaturi intre butoane (categorii - subcategorii)

Array.from(document.querySelectorAll('.button1'), function (elem) {
  elem.addEventListener('click', function hideContent(e) {
      e.currentTarget.parentNode.querySelector('.flexbox').classList.toggle('hidden');
      e.currentTarget.parentNode.querySelector('.button1').classList.toggle('active2');
  });
});

Array.from(document.querySelectorAll('.button2'), function (elem) {
  elem.addEventListener('click', function hideContent(e) {
      e.currentTarget.parentNode.querySelector('.button2').classList.toggle('active2');
      var x = e.currentTarget.parentNode.querySelectorAll('.prof-cat-3');
      for(i=0;i<x.length;i++)
        x[i].classList.toggle("hidden");
  });
});

Array.from(document.querySelectorAll('.nume-prof'), function (elem) {
  elem.addEventListener('click', function hideContent(e) {
      var modal = document.getElementsByClassName("modal")[0];
      var nume = document.getElementsByClassName("nume-modal")[0];
      var img = document.getElementsByClassName("img-modal")[0];
      var text = document.getElementsByClassName("text-modal")[0];
      document.querySelector('.modal').classList.toggle('hidden');
      nume.innerHTML = e.currentTarget.parentNode.querySelector(".nume-prof").innerHTML;
      var copimg = e.currentTarget.parentNode.querySelector(".desc-prof").querySelector(".prof-img");
      img.src = copimg.src;
      var coptext = e.currentTarget.parentNode.querySelector(".desc-prof").querySelector(".prof-text");
      text.innerHTML = coptext.innerHTML;
  });
});

//Functii pentru asocierea datelor in modal - descriere profesor

function close_modal()
{
  var modal = document.getElementsByClassName("modal")[0];
  modal.classList.toggle("hidden");
}

function showmodal2()
{
  var modal = document.getElementsByClassName("modal2")[0];
  modal.classList.toggle("hidden");
}

//Algoritmizare panou de concursuri scolare

Array.from(document.querySelectorAll('.close2'), function (elem) {
  elem.addEventListener('click', function hideContent(e) {
      e.currentTarget.parentNode.classList.toggle('hidden');
  });
});

Array.from(document.querySelectorAll('.olimp-button'), function (elem) {
  elem.addEventListener('click', function hideContent(e) {
      e.currentTarget.parentNode.querySelector('.olimp-prof').classList.toggle('hidden');
      e.currentTarget.parentNode.querySelector('.olimp-faza').classList.toggle('hidden');
      e.currentTarget.parentNode.querySelector('.olimp-button').classList.toggle('active2');
  });
});

Array.from(document.querySelectorAll('.faza-desc'), function (elem) {
  elem.addEventListener('click', function hideContent(e) {
      e.currentTarget.parentNode.querySelector('.flexbox-clase').classList.toggle('hidden');
      e.currentTarget.parentNode.querySelector('.faza-desc').classList.toggle('active2');
  });
});

Array.from(document.querySelectorAll('.clasa-button'), function (elem) {
  elem.addEventListener('click', function hideContent(e) {
      e.currentTarget.parentNode.querySelector('.olimp-elevi').classList.toggle('hidden');
      e.currentTarget.parentNode.querySelector('.clasa-button').classList.toggle('active2');
  });
});

function search_redirect()
{
  var text1 = document.getElementsByClassName("search-bar")[0].value;
  var links = document.getElementsByClassName("result");
  text1 = text1.replace(/\s/g, '');
  var index = -1;
  var index_result = 0;
  for(i=0;i<links.length;i++)
  {
    var result = 0;
    var text2 = links[i].innerHTML;
    text2 = text2.replace(/\s/g, '');
    var length1 = text1.length;
    var length2 = text2.length;
    var arr = Array.from(Array(length1+1), () => new Array(length2+1))
    for(j=0;j<length1+1;j++)
      for(k=0;k<length2+1;k++)
        arr[j][k] = 0;
    for(j=0;j<length1+1;j++){
      for(k=0;k<length2+1;k++)
      {
        if (j == 0 || k == 0) 
          arr[j][k] = 0; 
        else if (text1[j-1] == text2[k-1]) 
        { 
          arr[j][k] = arr[j-1][k-1] + 1; 
          result = Math.max(result, arr[j][k]); 
        } 
        else arr[j][k] = 0; 
      }
    }
    if(result > index_result)
      {
        index_result = result;
        index = i;
      }
  }
  if(index_result <= 3)
    alert("Nu s-au găsit rezultate");
  else
    window.location.href = links[index].href;
}

