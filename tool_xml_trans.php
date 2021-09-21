
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Kreator transformacji XSLT</title>

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
<h1>Narzędzia - Kreator transformacji XSLT</h1>



<p>Kreator transformacji XSLT pozwala na szybkie przekonwertowanie dokumentu XML na dokument innego typu za pomocą arkusza stylów XSLT. Więcej o XSLT możesz przeczytać na stronie W3C - <a href="https://www.w3.org/TR/xslt" target="_blank">XSL Transformations (XSLT) Version 1.0</a>.</p>

<p>Kreator posiada przyjazny interfejs, który prowadzi za rękę przez wszystkie etapy procesu przygotowywanie transformacji, począwszy od wskazania dokumentu, który ma zostać przekształcony, a skończywszy na zapisaniu dokumentów docelowych i wyświetleniu raportu.



<h2>Uruchamianie</h2>

<p>Kreator transformacji XSLT możesz uruchomić za pomocą polecenia oznaczonego ikoną pokazaną powyżej znajdującego się w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_creators.php">Kreatory kodu znaczników</a>, a także za pomocą przycisku pokazanego wyżej umieszczonego na pasku narzędzi.


<p>Pomiędzy planszami poruszasz się za pomocą przycisków Dalej i Wstecz.


<h2>Wybór dokumentu źródłowego</h2>

<p>Na pierwszej planszy możesz wybrać, jaki plik (lub pliki) ma zostać poddany transformacji:
<ul>
	<li>aktualnie otwarty dokument</li>
	<li>wszystkie otwarte dokumenty</li>
	<li>wskazany plik</li>
	<li>dokumenty z wybranych folderów</li>
	<li>dokumenty z wybranego serwisu WWW</li>
</ul></p>

<p>Jeśli wybierzesz jedną z trzech ostatnich pozycji, w następnej planszy będziesz mógł wybrać odpowiednio plik, folder (z podfolderami i wskazać rodzaje dokumentów), bądź <a href="services_general.php">serwis WWW</a> (i wskazać rodzaje dokumentów).</p>




<h2>Wybór arkusza XSLT</h2>

<p>W tej planszy możesz wybrać z dysku arkusz XSLT, jaki ma zostać użyty do transformacji:</p>

<p><b>użyj zadeklarowanego arkusza XSLT</b> - wybierz tę opcję, jeśli ma zostać użyty arkusz zadeklarowany w dokumencie źródłowym,<br />
<ul>
	<li><b>pytaj o nazwę arkusza, gdy brak deklaracji</b> - zaznacz, jeśli program ma zapytać o nazwę arkusza, gdy nie został on zadeklarowany w dokumencie źródłowym</li>
</ul>
<p><b>użyj wskazanego arkusza XSLT do wszystkich dokumentów</b> - wybierz tę opcję, jeśli chcesz wybrać arkusz XSLT z dysku i zastosować go do wszystkich przetwarzanych dokumentów źródłowych, bez względy na deklaracje w poszczególnych dokumentach.<br />

<p>Niektóre z powyższych opcji mogą być nieobecne (w zależności od opcji wybranej na pierwszej planszy).</p>




<h2>Ustawienia plików docelowych</h2>

<p>W tej planszy możesz wskazać folder, w którym zapisane zostana dokumenty docelowe powstałe po transformacji, a także ustawić opcje dla nazw tych dokumentów:</p>

<p><b>Folder docelowy</b><br />
Podaj ścieżkę do foldera, w którym zapisane zostaną dokumenty docelowe. Możesz skorzystać z polecenia obok, które umożliwia wybór foldera na dysku.

<p><b>Nazwy plików wynikowych konwersji</b><br />
<ul>
	<li><b>zachowaj istniejące nazwy plików</b></li>
	<li><b>zmień rozszerzenia plików na:</b> - zaznacz tę opcję i wybierz rozszerzenie z listy, bądź wprowadź własne</li>
	<li><b>dodaj do nazw plików tekst</b> - zaznacz tę opcję i wprowadź tekst, jaki ma zostać dodany na końcu nazw plików docelowych</li>
</ul>


<p><b>Wielkość liter w nazwach plików docelowych:</b><br />
<ul>
	<li><b>zachowaj istniejąca wielkość</b></li>
	<li><b>małymi literami</b></li>
	<li><b>WIELKIMI LITERAMI</b></li>
</ul>



<h2>Raport końcowy</h2>

<p>Ostatnia plansza zawiera raport z działania kreatora. Głównym elementem okna jest lista plików docelowych, jakie powstały podczas transformacji. 

<p>Lista zawiera następujące kolumny:

<ul>
	<li><b>Plik źródłowy</b> - ścieżka i nazwa pliku źródłowego</li>
	<li><b>Arkusz XSLT</b> - ścieżka i nazwa arkusza XSLT</li>
	<li><b>Plik docelowy</b> - ścieżka i nazwa pliku powstałego wskutek transformacji</li>
	<li><b>Rezultat</b> - informacja o przebiegu transformacji. Jeśli wystąpiły błędy, tu znajdziesz informacje na ten temat.</li>
</ul>

<p>Menu z prawej strony listy zawiera polecenia, które (po zaznaczeniu pozycji na liście) umożliwiają:
<ul>
	<li><b>Otworzenie pliku źródłowego w Pająku</b></li>
	<li><b>Otworzenie arkusza XSLT w Pająku</b></li>
	<li><b>Otworzenie pliku wynikowego w Pająku</b></li>
	<li><b>Podgląd pliku źródłowego</b></li>
	<li><b>Podgląd arkusza XSLT</b></li>
	<li><b>Podgląd pliku wynikowego</b></li>
</ul>

<p>Korzystając z poleceń umieszczonych pod listą, możesz zapisać na dysku raport w formacie:
<ul>
	<li><b>TXT</b></li>
	<li><b>HTML</b></li>
</ul>

<p>Po zapoznaniu się z raportem, jeśli wszystko przebiegło tak jak oczekiwałeś i nie wystąpiły błędy możesz skorzystać z przycisku <b>ZAKOŃCZ</b>, by zakończyc prace kreatora.



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
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
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>
