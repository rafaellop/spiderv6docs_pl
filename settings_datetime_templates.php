
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Szablony daty i czasu</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<a name="top"></a>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Pająk V6</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="contents_main.php">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.php">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.php">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.php">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.php">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.php">Ustawienia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#googlesearch" role="button" aria-expanded="false" aria-controls="googlesearch">Wyszukaj</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	
<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Ustawienia programu - Szablony daty i czasu</h1>

<!-- treść pomocy -->
<p>
W tym oknie znajduje się lista szablonów używanych podczas wklejania daty i czasu za pomocą polecenia Godzina/Data w <a href="main_menu_edit.php">Menu Edycja</a>, bądź w menu rozwijanym po kliknięciu w strzałkę obok tego polecenia. Znajdujące się obok listy przyciski umożliwiają dodawanie, usuwanie, zmianę kolejności szablonów, a także przywrócenie szablonów domyślnych.

<p>Tworząc szablon używaj następujących symboli, które zostaną zamienione przez program na odpowiednie wartości daty i czasu:

<ul>
        <li><b>y</b> lub <b>yy</b> - rok (zawsze 2 cyfry, np. "99", "05")
        <li><b>yyy</b> lub <b>yyyy</b> - rok (zawsze 4 cyfry, np. "1999", "2005")
        <li><b>m</b> - numer miesiąca (1 lub 2 cyfry, od 1 do 12)
        <li><b>mm</b> - numer miesiąca (zawsze 2 cyfry, z poprzedzającym zerem, od 01 do 12)
        <li><b>mmm</b> - skrót nazwy miesiąca (np. "sty", "cze", "gru")
        <li><b>mmmm</b> - pełna nazwa miesiąca (np. "stycznia", "czerwca", "grudnia")
        <li><b>d</b> - numer dnia miesiąca (1 lub 2 cyfry, od 1 do 31)
        <li><b>dd</b> - numer dnia miesiąca (zawsze 2 cyfry, od 01 do 31)
        <li><b>h</b>, <b>hh</b> - godzina (odpowiednio 1 lub 2, oraz zawsze 2 cyfry)
        <li><b>hampm</b>, <b>hhampm</b> - godzina w formacie dwunastogodzinnym (odpowiednio 1 lub 2, oraz zawsze 2 cyfry z przedziału 0-12 lub 00-12)
        <li><b>n</b>, <b>nn</b> - minuta (odpowiednio 1 lub 2, oraz zawsze 2 cyfry)
        <li><b>s</b>, <b>ss</b> - sekunda (odpowiednio 1 lub 2, oraz zawsze 2 cyfry)
        <li><b>unixtimestamp</b> - unixowy znacznik czasu (liczba sekund jakie upłynęły od godziny 00:00:00 w dniu 1 stycznia 1970)
</ul>

<p><b>UWAGA!</b> Wszystkie pozostałe znaki, jakie chcesz umieścić w szablonie daty i czasu, musza być objęte cudzysłowami!</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="settings.php#settingslist">Główne ustawienia</a>
   <li><a href="main_menu_edit.php">Menu Edycja</a>
</ul>
</td>
</tr>
</table>
<!-- pokrewne tematy koniec-->
<p class="prawa"><a href="#top">Do&nbsp;góry</a></p>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha512-kBFfSXuTKZcABVouRYGnUo35KKa1FBrYgwG4PAx7Z2Heroknm0ca2Fm2TosdrrI356EDHMW383S3ISrwKcVPUw==" crossorigin="anonymous"></script>
</div><!-- container end -->

<!-- Cookie Banner -->
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>
