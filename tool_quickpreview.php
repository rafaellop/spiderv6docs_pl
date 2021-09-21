
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Szybki podgląd</title>

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
<h1>Narzędzia - Szybki podgląd</h1>

<p>Szybki podgląd, to narzędzie umożliwiające podgląd wielu różnych typów plików bezpośrednio z Pająka, np. obrazków, dokumentów HTML, plików tekstowych, animacji, etc.

<p>Okno szybkiego podglądu uruchomisz z poziomu menu lub paska z przyciskami listy plików na zakładce <a href="main_tabs_myservices.php#myservices_menubuttons">Moje serwisy</a>. Polecenie to oznaczone jest za pomocą ikonki pokazanej powyżej.

<h2>Przeglądanie plików</h2>

<p>Aby wykonać podgląd wybranego pliku wybierz go na liście plików zakładki <a href="main_tabs_myservices.php">Moje serwisy</a>, a następnie użyj polecenia Szybki podgląd. Otworzy się okienko, a w nim zobaczysz podgląd wybranego pliku. Na Szybkim podglądzie możesz przeglądać pliki dokumentów HTML zarówno jako kod źródłowy jak i podgląd w przeglądarce, arkusze stylów CSS (Pająk generuje i wyświetla dokument HTML pozwalający na podgląd formatowana), pliki graficzne (GIF, JPG, PNG), pliki tekstowe (txt, css), animacje AVI i SWF (Flash), dźwięki WAV i muzykę MID. 

<h2>Układ okienka</h2>

<p>Okienko składa się z paska z przyciskami w górnej części oraz obszaru podglądu. 

<p><b>Pasek przycisków</b><br>
Na pasku przycisków znajdziesz polecenia pozwalające zarówno na nawigację po liście plików zakładki Moje serwisy (możesz też poruszać się po liście za pomocą klawiszy strzałek)jak i wstawianie przeglądanych mediów do tworzonych dokumentów HTML. Kolejne przyciski to:

<ul>
   <li><b>Ukrywaj podgląd gdy niepotrzebny</b> - pozwala na automatyczne zamykanie okna podglądu w sytuacji gdy opuszczono okno szybkiego podglądu</li>
	<li><b>Wstawienie do dokumentu</b> - kliknij, aby wstawić przeglądany plik do aktualnie edytowanego dokumentu.
	<li><b>Odświeżenie podglądu</b> - ponownie ładuje ten sam plik na podgląd.
	<li><b>Pomoc</b> - wyświetla tę stronę pomocy.
	<li><b>Poprzedni i Następny</b> - przyciski nawigacyjne pozwalające przeglądać kolejne pliki folderu.
	<li><b>Sposób podglądu</b>:
	<ul>
		<li>dla plików dokumentów HTML wyświetlane są tutaj dwa przyciski pozwalające na wybór widoku podglądu dokumentu w przeglądarce lub kodu źródłowego - kod źródłowy wyświetlany jest z uwzględnieniem kolorowania składni,
		<li>dla plików tekstowych wyświetlany jest przycisk umożliwiający włączenie lub wyłączenie zawijania wierszy,
		<li>dla plików graficznych wyświetlane są przyciski pozwalające na dostosowanie rozmiaru grafiki do całego obszaru podglądu lub symulację tła, czyli powielenie grafiki jak na tle strony internetowej,
		<li>dla plików AVI oraz WAV wyświetlany jest panel pozwalający na odtwarzanie tych plików multimedialnych,
	</ul>
	<li><b>Otwarcie dokumentu</b> - dla dokumentów HTML pozwala na szybkie otwarcie do edycji.
	<li><b>Informacje o dokumencie</b> - dla dokumentów HTML pozwala na zapoznanie się ze szczegółowymi <a href="tool_docinfo.php">informacji o dokumencie</a>.
	<li><b>Zawijanie wierszy</b> - włączenie zawijania wierszy dla podglądu kodu źródłowego dokumentów.
</ul>

<p>Poniżej wyświetlana jest pełna ścieżka dostępu do przeglądanego pliku, a w przypadku niektórych plików również dodatkowe informacje, jak np. dla obrazków wyświetlane są wymiary grafiki oraz rozmiar pliku.</p>

<p><b>Obszar podglądu</b><br>
Obszar podglądu po prostu pełni funkcję miejsca, w którym wyświetlane są przeglądane pliki. 

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_tabs_myservices.php">Zakładka Moje serwisy</a></a>
	<li><a href="main_preview_general.php">Przeglądanie w Pająku</a></a>
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