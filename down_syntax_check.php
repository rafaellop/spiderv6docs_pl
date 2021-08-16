
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />


<!-- nazwa strony pomocy -->
<title>Dolny panel wyników - Sprawdzanie poprawności składni dokumentów</title>

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
<h1>Dolny panel wyników - Sprawdzanie poprawności składni dokumentów</h1>


<!-- treść pomocy -->

<p>Narzędzie sprawdzania składni służy do sprawdzenia zgodności dokumentów z odpowiednimi specyfikacjami i wyświetla komentarze na temat poprawności i obsługi elementów dokumentu przez przeglądarki. Możliwa jest weryfikacja dokumentów utworzonych w językach znaczników (jak HTML, SVG, WML) i arkuszy stylów CSS (przy czym arkusze CSS mogą być zagnieżdżone w innych dokumentach).</p>

<p>Narzędzie sprawdzania składni można uruchomić z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_verify.php">Weryfikacja kodu</a> poleceniem Sprawdź składnię lub uruchamiając to narzędzie z <a href="down_panel.php">dolnego panelu wyników</a>.</p>

<p>Pająk umożliwia bezpośrednią weryfikację dokumentów otwartych w edytorze lub też za pomocą dokumentu podglądu, co przydaje się zwłaszcza podczas edycji dokumentów, które są poprawne dopiero przy włączeniu ich do innych dokumentów, np. plików dołączanych w PHP np. za pomocą polecenia <tt>include</tt> .</p>

<p>Wyniki sprawdzania składni i zgodności z przeglądarkami wyświetlane są na zakładce Poprawność składni dolnego panelu wyników.</p>

<h2>Sprawdzanie poprawności składni języków znaczników</h2>


<p>Pająk umożliwia sprawdzanie składni różnych języków i ich wersji. Są to m. in.:
<ul>
	<li>HTML (HyperText Markup Language) i XHTML</li>
	<li>MathML (Mathematical Markup Language)</li>
	<li>SMIL (Synchronized Multimedia Integration Language)</li>
	<li>SVG (Scalable Vector Graphics)</li>
	<li>WML (Wireless Markup Language)</li>
</ul>

<p>Dokładny spis wszystkich wersji obsługiwanych języków można uzyskać za pomocą narzędzia <a href="tagdata_editor_tdf.php">Edytor plików definicyjnych TDF</a>.</p>

<p>Dodatkowo program oferuje możliwość weryfikacji składni języków znaczników online za pomocą walidatora W3C&reg;. W tym wypadku program przesyła kod edytowanego dokumentu lub jego adres (jeśli otwarty bezpośrednio z serwera) do skryptu analizatora, znajdującego się na serwerach W3C&reg;. Więcej o <a href="settings_w3c_html.php">ustawieniach weryfikatora składni znaczników online</a>.</p>

<p>Aby uruchomić sprawdzanie składni użyj polecenia "Sprawdź składnię dokumentu" z poziomu <a href="main_menu_main.php">Menu głownego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_verify.php">Weryfikacja kodu</a></p>


<h2>Sprawdzanie poprawności CSS</h2>

<p>Pająk umożliwia sprawdzanie poprawności składni i sprawdzanie zgodności arkuszy CSS z różnymi przeglądarkami. </p>

<p>Aby uruchomić sprawdzanie składni arkuszy CSS użyj polecenia "Sprawdzanie składni CSS" z poziomu <a href="main_menu_main.php">Menu głownego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_verify.php">Weryfikacja kodu</a>.</p>

<p>Dodatkowo program oferuje możliwość weryfikacji składni CSS online za pomocą walidatora W3C&reg;. W tym wypadku program przesyła kod edytowanego dokumentu lub jego adres (jeśli otwarty bezpośrednio z serwera) do skryptu analizatora, znajdującego się na serwerach W3C&reg;. Więcej o <a href="settings_w3c_css.php">ustawieniach weryfikatora składni CSS online</a>.</p>

<p>Aby uruchomić sprawdzanie zgodności arkuszy CSS z różnymi przeglądarkami użyj menu przypisanego do polecenia "Sprawdzanie składni CSS":

<ul>
	<li><b>Sprawdź składnię CSS</b> - działanie jak po kliknięciu w przycisk - sprawdza poprawność składni CSS,</li>
   <li><b>Sprawdź zgodność z CSS Level 1.0</b>, <b>...CSS Level 2.0</b>, <b>...CSS Level 2.1</b>, <b>...CSS Level 3.0</b>, <b>...CSS Mobile Profile 1.0</b>, <b>...CSS TV Profile 1.0</b> - sprawdza zgodność arkuszy stylów ze specyfikacjami odpowiednich wersji CSS.</li>
	<li><b>Sprawdź zgodność z przeglądarkami</b> - sprawdza zgodność CSS z różnymi wersjami przeglądarek i wyświetla informacje na temat obsługi przez nie poszczególnych elementów arkusza stylów</li>
</ul>
</p>

<p>Opcje zgodności danych elementów CSS z przeglądarkami można ustawiać w oknie "Edytor pliku definicyjnego CSS" dostępnym z poziomu: menu  "Wyświetl" - "Ogólne ustawienia programu" lub liście rozwijanej przycisku "Ustawienia programu" na "<a href="toolbars_main.php">Głównym pasku</a>".</p>

<h2>Wyniki sprawdzania poprawności składni i zgodności CSS</h2>

<p>Wyniki działania narzędzia prezentowane są w zakładce "Poprawność składni" na "Panelu wyników", który pojawia się automatycznie, jeśli są uwagi, ostrzeżenia lub informacje dotyczące dokumentu.</p>

<p>Okno wyników zawiera trzy kolumny:
<ul>
	<li>lewa kolumna - ikona z kulką informuje o typie komunikatu: <br>
		<table border="0">
			<tr>
				<td></td>
				<td>- informacja o niezgodnościach z przeglądarkami, sugestie na temat lepszych rozwiązań,</td>
			</tr>
			<tr>
				<td></td>
				<td> - ostrzeżenie o możliwych problemach w niektórych przeglądarkach,</td>
			</tr>
			<tr>
				<td></td>
				<td> - błąd składni.</td>
			</tr>
			</table></li>
	<li><b>Komunikat weryfikacji składni</b> - informacje na temat znalezionych błędach i niezgodnościach</li>
   <li><b>Nazwa pliku</b> w którym znaleziono błąd</li>
	<li><b>Numer linii</b> - numer linii, do którego odnosi się dana pozycja</li>
</ul></p>

<p>Po kliknięciu na pozycję w wynikach weryfikacji, edytor przejdzie do odpowiedniej linii i  zostanie ona podświetlona.

<p>Raport możesz eksportować do pliku w formacie TXT, bądź HTML. W tym celu skorzystaj z przycisku na pasku po prawej stronie zakładki.

<p>Jeśli uznasz że któryś z elementów wymeinionych na liście nie jest błędem, bądź tak włąsnie chcesz mieć zbudowany dokument możesz usunąć z listy wszystkie błędy określonego typu. W tym celu kliknij na danym elemencie prawym klawiszem myszy, a następnie skorzystaj z polecenia "<b>Usuń wszystkie błędy tego typu</b>" w menu kontekstowym.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="down_syntax_check_css.php">Opcje sprawdzania zgodności CSS ze specyfikacją i przeglądarkami</a></li>
   <li><a href="settings_editor_spelling.php#syntaxcheck">Ustawienia programu - ustawienia sprawdzania składni</a></li>
   <li><a href="tagdata_editor_tdf.php">Edytor plików definicyjnych znaczników (TDF)</a></li>
   <li><a href="tagdata_editor_tdf_css.php">Edytor pliku definicyjnego CSS</a></li>
   <li><a href="down_panel.php#downpanellist">Inne zakładki dolnego panelu wyników</a></li>
   <li><a href="main_window_desc.php">Główne okno programu</a></li>
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

</body>
</html>
