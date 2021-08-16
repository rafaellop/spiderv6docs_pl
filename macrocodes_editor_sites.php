
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
<title>Edytor makrokodów - prawa strona, środek, lewa strona makrokodu</title>

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
            <a class="nav-link" href="contents_main.html">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.html">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.html">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.html">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.html">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.html">Ustawienia</a>
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
<h1>Edytor makrokodów - prawa strona, środek, lewa strona makrokodu</h1>

<!-- treść pomocy -->

<p>Poniżej części z ustawieniami makrokodu znajdują się zakładki, w których tworzona będzie zawartość makrokodu.</p>

<h2>Znaczenie lewej, środkowej i prawej części makrokodu</h2>

<p>Trzy pierwsze zakładki o nazwach "Lewa strona makrokodu", "Środkowy makrokod", "Prawa strona makrokodu" zawierają okna, w których wpisywana będzie zasadnicza treść makrokodu. Okna są identyczne, mają jednak różne znaczenie podczas używania makrokodu.</p>

<p><b>Lewa część makrokodu</b> - w zależności od wybranej podczas wstawiania opcji:
<ul>
   <li><b>Wstaw makrokod w pozycji kursora</b>, lub <b>Wstaw makrokod bez środka</b> - zostanie wstawiona z lewej strony kursora, lub zaznaczonego w edytorze tekstu,</li>
   <li><b>Wstaw makrokod z lewą częścią do HEAD</b> - zostanie wstawiona do sekcji HEAD dokumentu HTML. Jeśli dokument, do którego wstawiany jest makrokod nie posiada sekcji HEAD, zostanie ona utworzona,</li>
   <li><b>Utwórz nowy dokument z makrokodu</b> - zostanie wstawiona jako pierwsza do dokumentu.</li>
</ul></p>


<p></p><b>Środkowa część makrokodu</b> - w zależności od wybranej podczas wstawiania opcji:
<ul>
   <li><b>Wstaw makrokod w pozycji kursora</b> - zostanie wstawiona za kursorem. Jeśli w edytorze był zaznaczony tekst, zostanie on nadpisany przez zawartość środkowej części. Jeśli nie zdefiniowano środkowej części (jest pusta), znaczony tekst pozostanie nienaruszony.</li>
   <li><b>Wstaw makrokod bez środka</b> - nie zostanie użyta. Jeśli w edytorze jest znaczony tekst, pozostanie on nienaruszony.</li>
   <li><b>Wstaw makrokod z lewą częścią do HEAD</b> - zostanie wstawiona z lewej strony kursora. Jeśli w edytorze jest znaczony tekst, pozostanie on nienaruszony.</li>
   <li><b>Utwórz nowy dokument z makrokodu</b> - zostanie wstawiona jako druga do dokumentu.</li>
</ul></p>

<p><b>Prawa część makrokodu</b> - w zależności od wybranej podczas wstawiania opcji:
<ul>
   <li><b>Wstaw makrokod w pozycji kursora</b>, <b>Wstaw makrokod bez środka</b>, lub <b>Wstaw makrokod z lewą częścią do HEAD</b> - zostanie wstawiona z prawej strony kursora, lub zaznaczonego w edytorze tekstu,</li>
      <li><b>Utwórz nowy dokument z makrokodu</b> - zostanie wstawiona jako trzecia do dokumentu.</li>
</ul></p>

<h2>Okno wpisywania treści</h2>

<p>Okno wpisywania treści makrokodu składa się z dwóch części - menu i okna tekstowego. </p>

<p>Menu zawiera ikony umożliwiające tworzenie i wstawianie: <a href="macrocodes_editor_vars.html">zmiennych</a> i <a href="macrocodes_editor_blocks.html">bloków</a>.</p>

<ul>
   <li><b>Zmienne</b> - lista zawiera nazwy wszystkie zmiennych zdefiniowanych w makrokodzie,</li>
   <li><b>Dodanie nowej zmiennej</b> - kliknij aby utworzyć nową zmienną (tylko dodaje zmienną, ale nie powoduje automatycznego jej wstawienia w treść makrokodu). Do tworzenia nowych i edycji istniejących zmiennych służy okno <a href="macrocodes_editor_addvar.html">Edycja zmiennej makrokodu</a>.</li>
   <li><b>Wstawienie wybranej zmiennej</b> - kliknij aby wstawić wywołanie zmiennej do treści makrokodu. W chwili użycia makrokodu w miejsce symbolu podstawiona zostanie wartość zmiennej.</li>
</ul>
<ul>
   <li><b>Bloki</b> - lista zawiera nazwy wszystkich bloków zdefiniowanych w makrokodzie</li>
   <li><b>Dodanie nowego bloku</b> - kliknij aby dodać nowy blok (tylko dodaje blok, ale nie powoduje automatycznego wstawienia w treść makrokodu). Do tworzenia nowych i edycji istniejących bloków służy okno <a href="macrocodes_editor_addblock.html">Edycja bloku makrokodu</a>.</li> 
   <li><b>Wstawienie wybranego bloku</b> - kliknij aby wstawić do treści makrokodu symbol bloku wybranego na liście. W chwili użycia makrokodu w miejsce symbolu podstawiona zostanie zawartość bloku (jeśli będzie włączony), lub symbol zostanie usunięty z treści makrokodu (jeśli blok będzie wyłączony).</li>
</ul>

<p>Poniżej menu znajduje się okno tekstowe. W nim właśnie wpisywana jest treść makrokodu.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="macrocodes_editor.html">Edytor makrokodów - wstęp</a>
   <li><a href="macrocodes_editor_vars.html">Edytor makrokodów - zmienne</a>
   <li><a href="macrocodes_editor_blocks.html">Edytor makrokodów - bloki</a>
   <li><a href="settings_macrocodes.html">Ustawienia programu - Makrokody</a>
   <li><a href="main_tabs_macrocodes.html">Zakładka Makrokody</a>
   <li><a href="macrocodes.html">Makrokody - ogólnie</a>
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