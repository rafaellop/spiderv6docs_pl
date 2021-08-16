
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Edytor makrokodów - zakładka Zmienne w makrokodzie</title>

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
<div class="collapse" id="googlesearch">

        <script async src="https://cse.google.com/cse.js?cx=4dedefccca22f88c9"></script>
        <div class="gcse-search"></div>

</div>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Edytor makrokodów - zakładka Zmienne w makrokodzie</h1>




<!-- treść pomocy -->

<p>W zmiennych makrokodu przechowywane są wartości, które zostaną wykorzystane podczas wstawiania makrokodu do dokumentu, a także przy tworzeniu podglądu makrokodu. </p>

<p>Okno w zakładce Zmienne w makrokodzie dzieli się na dwie części - inspektora zmiennych i menu.</p>

<p><b>Inspektor zmiennych makrokodu.</b><br />
Korzystając z inspektora, możesz przypisać zmiennej wartość domyślną, jaką będzie miała przy pracy z gotowym makrokodem.</p>

<p>Kulka przy nazwie zmiennej informuje:
<table border="0">
<tr>
	<td></td>
	<td> - zmienna będzie ukryta,</td>
</tr>
<tr>
	<td></td>
	<td> - zmienne nie będzie ukryta</td>
</tr>
</table>
</p>

<p><b>Dodanie nowej zmiennej</b><br />
Kliknij, jeśli chcesz dodać nową zmienną. Do tworzenia nowych i edycji istniejących zmiennych służy okno <a href="macrocodes_editor_addvar.php">Edycja zmiennej makrokodu</a>.</p>

<p><b>Zmiana nazwy wybranej zmiennej</b><br />
Kliknij, jeśli chcesz mienić nazwę wybranej zmiennej.</p>

<p><b>Ukrycie lub odkrycie wybranej zmiennej</b><br />
Kliknij, jeśli chcesz ukryć/odkryć wybraną zmienną. Zmienna oznaczona jako ukryta (czerwona kulka przy nazwie) nie będzie się pojawiała w inspektorze zmiennych w lewym panelu głównego okna Pająka. Dzięki temu w inspektorze dostępne dla użytkownika będą jedynie te zmienne, których wartość powinien mieć możliwość zmienić. Oczywiście zmienne oznaczone jako ukryte cały czas będą widoczne w inspektorze zmiennych w zakładce "Zmienne w makrokodzie".</p>
<p>Dla przykładu - jeśli tworzysz szablon strony i umieszczasz w nim grafiki, które muszą się znaleźć na stronie, to użytkownik nie powinien mieć możliwości zmiany ścieżki do tych grafik (gdyż mógłby podać ścieżkę do innego pliku, co zniszczyłoby efekt).</p>

<p><b>Modyfikacja zmiennej</b><br />
Kliknij jeśli chcesz edytować zmienną (zmienić typ zmiennej, ale także nazwę, wartość domyślną, lub ukryć ją). Do tworzenia nowych i edycji istniejących zmiennych służy okno <a href="macrocodes_editor_addvar.php">Edycja zmiennej makrokodu</a>.</p>

<p><b>Usunięcie wybranej zmiennej</b><br />
Kliknij, jeśli chcesz usunąć wybraną zmienną. Usunięcie zmiennej nie usuwa jej wywołań z makrokodu - należy to zrobić ręcznie. Jeśli ich nie usuniesz, w chwili zapisu makrokodu Pająk spyta, czy zrobić to automatycznie.</p>

<p><b>Usunięcie wszystkich zmiennych</b><br />
Kliknij, jeśli chcesz usunąć wszystkie zmienne. Usunięcie zmiennych nie usuwa ich wywołań z makrokodu - należy to zrobić ręcznie. Jeśli ich nie usuniesz, w chwili zapisu makrokodu Pająk spyta, czy zrobić to automatycznie.</p>

<p><b>Przesuń element w górę/dół</b><br />
Kliknij, aby przesunąć zmienną w górę/dół w inspektorze zmiennych.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="macrocodes_editor.php">Edytor makrokodów - wstęp</a>
	<li><a href="macrocodes_editor_addvar.php">Edytor makrokodów - Edycja zmiennej makrokodu</a>
   <li><a href="macrocodes_editor_blocks.php">Edytor makrokodów - zakładka Bloki wykorzystywane w makrokodzie</a>
   <li><a href="macrocodes_editor_vars.php">Edytor makrokodów - zakładka Zmienne w makrokodzie</a>
	<li><a href="settings_macrocodes.php">Ustawienia programu - Makrokody</a>
	<li><a href="main_tabs_macrocodes.php">Zakładka Makrokody</a>
	<li><a href="macrocodes.php">Makrokody - ogólnie</a>
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