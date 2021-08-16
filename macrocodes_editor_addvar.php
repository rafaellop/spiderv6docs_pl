
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Edytor makrokodów - Edycja zmiennej makrokodu</title>

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
<h1>Edytor makrokodów - Edycja zmiennej makrokodu</h1>




<!-- treść pomocy -->
<p>Okna edycji zmiennej pozwala podanie nazwy, typu, wartości domyślnej,a także na ukrywanie/odkrywanie zmiennych.</p>

<p><b>Nazwa zmiennej</b><br />
Umożliwia podanie nazwy zmiennej. Podczas reedycji istniejącej zmienne, pole to jest nieaktywne.</p>

<b>Zmienna ukryta</b><br />
Zaznacz, jeśli zmienna ma zostać oznaczona jako ukryta. Zmienna oznaczona jako ukryta nie będzie się pojawiała w inspektorze zmiennych w lewym panelu głównego okna Pająka. Dzięki temu w inspektorze dostępne dla użytkownika będą jedynie te zmienne, których wartość powinien mieć możliwość zmienić. Oczywiście zmienne oznaczone jako ukryte cały czas będą widoczne w inspektorze zmiennych w zakładce "Zmienne w makrokodzie".</p>
<p>Dla przykładu - jeśli tworzysz szablon strony i umieszczasz w nim grafiki, które muszą się znaleźć na stronie, to użytkownik nie powinien mieć możliwości zmiany ścieżki do tych grafik (gdyż mógłby podać ścieżkę do innego pliku, co zniszczyłoby efekt).</p>


<p><b>Typ zmiennej</b><br />
Za pomocą typu zmiennej określone zostaje narzędzie, jakim będzie można wybierać wartość zmiennej. Pozwala to na uniknięcie błędów, jeśli podana zostałaby nieprawidłowa wartość. Znacznie ułatwia też podawanie wartości (przykładowo dla zmiennej typu kolor wprowadzanie wartości odbywa za pomocą narzędzia "Paleta kolorów" - nie trzeba znać kodów kolorów). </p>

<p>Dostępne są następujące typy zmiennych

<ul>
	<li><b>Wartość typu kolor</b> - pozwala wybrać kolor za pomocą narzędzia.</li>
	<li><b>Nazwa i lista klas</b> - jeśli w edytowanym właśnie dokumencie umieszczono arkusze CSS, pozwala wybrać klasę. Jest to bardzo przydatne podczas tworzenia dokumentów HTML, gdyż pozwala wstawiać klasy do znaczników bez ciągłego pamiętania ich nazw.</li>
	<li><b>Wartość typu data</b> - pozwala wybrać datę za pomocą specjalnego narzędzia.</li>
	<li><b>Lista wartości</b> - pozwala na wybranie jednej wartości z dostępnych na liście.</li>
	<li><b>Wartość liczbowa</b> - pozwala na wpisanie liczby, bądź wybranie jej za pomocą strzałek góra/dół.</li>
	<li><b>Odsyłacz do dokumentów</b> - pozwala na wskazanie dokumentu. Dokument ten będzie skopiowany w miejsce, gdzie zapisany jest dokument, w którym użyty został makrokod. Zmienna używana najczęściej do dołączania do strony arkuszy stylów itp.</li>
	<li><b>Odsyłacz do grafik</b> - pozwala wybrać obrazek. Wskazany obrazek skopiowany zostanie automatycznie w miejsce, gdzie zapisany jest dokument, w którym użyty został makrokod.</li>
	<li><b>Wartość typu Styl</b> - pozwala wybrać i ustawić własności stylu CSS za pomocą narzędzia.</li>
	<li><b>Lista okien</b> - pozwala wybrać okno docelowe dla odnośnika (np. <tt>_blank</tt> itd..)</li>
	<li><b>Wartość typu tekst</b> - pozwala na wpisanie tekstu, który zostanie umieszczony w makrokodzie.</li>
	<li><b>Wartość wielolinijkowa</b> - pozwala na wpisanie wielu linii tekstu.</li>
</ul>
</p>

<p><b>Domyślna wartość...</b><br />
W zależności od wybranego typu zmiennej, w tym miejscu pojawi się pole tekstowe lub ikona narzędzia do wprowadzenia domyślnej wartości dla zmiennej.</p>

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
	<li><a href="macrocodes_editor_vars.php">Edytor makrokodów - zakładka Zmienne w makrokodzie</a>
	<li><a href="macrocodes_editor_blocks.php">Edytor makrokodów - Bloki w makrokodzie</a>
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