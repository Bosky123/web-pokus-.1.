<!DOCTYPE html>
<html lang="cs">
<head>
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body  onload="checkCookie()">

<!--===header===-->
<header>

<h1>Darwinpress</h1>

</header>

<!-- ===navigace=== -->
<div class="navigace">
     <nav>
    <a href="#">E-shop</a> 
    <a href="#">Vybrat design</a> 
    <a href="#">Ceník</a> 
    <a href="#">Kontakt</a> 
     </nav>
</div>

<p class="popis">Kromě tvorby designu získejte přístup k týmu profesionálů, který vás provede realizací <br> a doučí vám rychle skvělé výsledky. <br>
výsledky od realizačního týmu i s výsledky doručujeme do 48 hodin. <br><br>

postuj je velmi jednoduchý, pouze se přihlásíte, pošlete nám na email vaše požadavky, popis a my vám z ceníku za to složíme cenu. <br><br>

Realizační tým profíků Darwinpressu je stoprocentně spolehlivý a se vším vám pomůžou.
</p>

<main>


<!-- ===h3=== -->
    <h3>Kompletně vlastní výběr designu</h3>

     <!-- ===obrazek=== -->
    <img src="img/monitor.png" alt="">

    <!-- ===tlacitko s odkazem=== -->
    <button>
        <a href="#">Výběr designu ></a>
    </button>

</main>


<!--===footer===-->
<footer>

<!-- ===zakončení by ve footeru=== -->
<p class="copyright">©2022 by BOSKY</p>

</footer>


</body>

<!--===Cookies info=== -->
<script>
   
/*
   function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
    user = prompt("Please enter your name:", "");
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}

</script>



</html>