
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
<title>Narzędzia - Obiekt "Embed"</title>

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
<h1>Narzędzia - Obiekt "Embed"</h1>

<!-- treść pomocy -->

<p> Okno ułatwia wstawianie do dokumentu obiektów osadzonych za pomocą znacznika <tt>&lt;EMBED&gt;</tt>, jak np. filmy AVI, pliki MIDI itp. Obiekty te będą odtwarzane w przeglądarce za pomocą odtwarzacza (o ile zostałe zainstalowany w systemie oglądającego stronę). Znacznik ten jest oznaczony w specyfikacji HTML jako przestarzały (ang <i>depreceted</i>).

<p> Narzędzie można uruchomić z poziomu menu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_links.php">Skrypty i obiekty</a>. Ikona polecenia przedstawiona została obok.</p>

<p><b>Obiekt</b><br />
Podaj ścieżkę dostępu do obiektu.</p>

<p><b>Nazwa obiektu</b><br />
Podaj nazwę, pod jaką będzie identyfikowany obiekt w dokumencie.</p>

<p><b>Wyrównanie</b><br />
Wybierz z listy sposób wyrównania osadzonego obiektu do względem innych elementów strony.</p>

<p><b>Szerokość</b><br />
Podaj szerokość obszaru przeznaczonego na stronie do wyświetlania elementu.</p>

<p><b>Wysokość</b><br />
Podaj wysokość obszaru przeznaczonego na stronie do wyświetlania elementu.</p>

<p><b>Obramowanie</b><br />
Podaj grubość obramowania wokół obiektu na stronie.</p>

<p><b>Głośność</b><br />
Jeśli wstawiany jest obiekt odtwarzający dźwięki, podaj głośność, z jaką te dźwięki będą odtwarzane.</p>

<p><b>Automatyczne uruchomienie</b><br />
Zaznacz tę opcję, jeśli odtwarzanie filmu, bądź dźwięku ma się rozpocząć automatycznie.</p>

<p><b>Pomniejszony panel kontrolny</b><br />
Zaznacz tę opcję, jeśli panel kontrolny osadzonego obiektu ma być wyświetlony w postaci pomniejszonej.</p>

<p><b>Ukryj panel kontrolny</b><br />
Zaznacz tę opcję, jeśli panel kontrolny osadzonego obiektu nie ma zostać wyświetlony.</p>

<p><b>W nieskończoność</b><br />
Zaznacz tę opcję, jeśli dźwięk lub film ma być wyświetlany w nieskończonej pętli.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_objects.php">Wstawianie obiektów osadzonych  - APPLET, INSERT, OBJECT</a>
	<li><a href="tool_embed.php">Wstawianie obiektów EMBED do dokumentu</a>
	<li><a href="tool_bgsound.php">Wstawianie dźwięku w tle</a>
	<li><a href="tool_graphic_insert.php">Wstawienia grafiki</a>
	<li><a href="main_menu_main.php">Menu programu</a>
	<li><a href="toolbars_general.php">Inne narzędzia na paskach</a>
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