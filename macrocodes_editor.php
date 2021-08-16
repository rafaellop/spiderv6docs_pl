
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Szablony - Edytor szablonów</title>

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
<h1>Szablony - Edytor szablonów</h1>




<!-- treść pomocy -->
<p>Szablony pozwalają na szybkie wstawianie do dokumentu często wykorzystywanych lub skomplikowanych fragmentów kodu. Szerszy opis szablonów znajdziesz w opisie <a href="macrocodes.php">Szablonów</a>.</p>

<p>Edytor szablonów służy do tworzenia nowych i edycji istniejących szablonów. </p>

<p>Okno edytora składa się z kilku obszarów:</p>

<ul>
   <li><b><a href="macrocodes_editor_settings.php">Ustawienia szablonu</a></b> - przypisanie do kategorii, nazwa, typ, skrót klawiszowy</li>
	<li>Zakładki do tworzenia zawartości szablonu:</li>
	<ul>
	<li><b><a href="macrocodes_editor_sites.php">Lewa strona, środek, prawa strona</a></b> - trzy zakładki zawierające okna do wpisywania treści.</li>
   <li><b><a href="macrocodes_editor_vars.php">Zmienne</a></b> - zakładka zawiera okno inspektora zmiennych użytych w szablonie. Do tworzenia nowych i edycji istniejących zmiennych służy okno <a href="macrocodes_editor_addvar.php">Nowa zmienna szablonu/Edycja zmiennej szablonu</a>.</li>
   <li><b><a href="macrocodes_editor_blocks.php">Bloki</a></b> - zakładka zawiera listę bloków użytych w szablonie. Do tworzenia nowych i edycji istniejących bloków służy okno <a href="macrocodes_editor_addblock.php">Dodanie nowego bloku/Edycja bloku szablonu</a>.</li>
</ul>
	<li><b>Zawijaj wiersze w edytorze poszczególnych części szablonu</b> - Po zaznaczeniu tego przełącznika tekst każdej z trzech stron szablonu będzie zawijany. Dzięki temu cały wiersz tekstu będzie widoczny w sytuacji, gdy ma ono niewielkie rozmiary (okno Edytora szablonów można powiększać i pomniejszać).</li>
</ul>

<p>Standardowo okno to wywołuje się po zaznaczeniu szablonu za pomocą ikon w górnej części zakładki <a href="main_tabs_macrocodes.php">Szablony</a>, lub za pomocą wciśnięcia klawisza F2 po zaznaczeniu szablonu na drzewku.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_tabs_macrocodes.php">Zakładka Szablony</a>
	<li><a href="macrocodes.php">Szablony - ogólnie</a>
	<li><a href="settings_macrocodes.php">Ustawienia programu - Szablony.</a>
	<li><a href="macrocodes_instruction.php">Tworzenie szablonu - instrukcja krok po kroku.</a>
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
<script async src="js/cookie.js"></script>
<div class="nk-cookie-banner alert text-center mb-0 cookietxt" role="alert">
  Nasze strony wykorzystują pliki cookies. Używamy cookies i podobnych m.in. w celach reklamowych i statystycznych oraz w celu dostosowania serwisów do potrzeb użytkowników. Mogą też stosować je nasi reklamodawcy, firmy badawcze oraz dostawcy aplikacji. W przeglądarce można zmienić ustawienia dotyczące cookies. <a href="https://www.creamsoft.com/pl/pp/#cookies" target="blank">Więcej informacji</a>. Jeśli nie wyrażasz zgody, opuść tę stronę.&nbsp;

  <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.nk_hideCookieBanner()">OK</button>
</div>
<!-- End of Cookie Banner -->

</body>
</html>