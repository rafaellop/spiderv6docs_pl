
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Paski narzędzi - Mini pasek</title>

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
<h1>Paski narzędzi - Mini pasek</h1>

<!-- Treść pomocy -->

<p>Mini pasek zawiera polecenia służące do bieżącej obsługi aktualnego dokumentu.</p>


<p><b>Zamknięcie aktualnego dokumentu</b><br />
Kliknij, aby zamknąć bieżący dokument.

<p><b>Przejście do wybranego dokumentu</b><br />
Kliknij, aby rozwinąć listę aktualnie otwartych dokumentów. za pomocą tej listy możesz przełączać się pomiędzy dokumentami. 

<p><b>Wyświetl pierwszy dokument</b><br />
Kliknij, aby przejść do pierwszego dokumentu otwartego aktualnie w edytorze.


<p><b>Wyświetl poprzedni dokument</b><br />
Kliknij, aby przejść do poprzedniego dokumentu otwartego aktualnie w edytorze.


<p><b>Wyświetl następny dokument</b><br />
Kliknij, aby przejść do następnego dokumentu otwartego aktualnie w edytorze.

<p><b>Wyświetl ostatni dokument</b><br />
Kliknij, aby przejść do ostatniego dokumentu otwartego aktualnie w edytorze.

<p><b>Wyświetlenie, lub ukrycie rynny</b><br />
kliknij, aby wyświetlić, bądź ukryć <a href="main_editor.php#gutter">rynnę edytora</a>.

<p><b>Numerowanie linii</b><br />
Kliknij, aby wyświetlić, bądź ukryć numery linii na rynnie.

<p><b>Wyświetlenie znaków specjalnych</b><br />
Kliknij, aby pokazać, bądź ukryć znaki specjalne w edytorze (jak znak końca wiersza, tabulator itp.)

<p><b>Zawijanie wierszy</b><br />
Kliknij, aby włączyć zawijanie wierszy, które nie mieszczą się jednej linii w edytorze.

<p><b>Ustawienie dokumentu podglądu</b><br />
Kliknij, aby otworzyć narzędzie służące do ustawienia <a href="main_preview_prevdoc.php">dokumentu podglądu</a>.

<p><b>Wybór schematu kolorowania składni</b><br />
Kliknij, aby wyświetlić listę dostępnych schematów kolorowania i zmienić schemat dla bieżącego dokumentu. W zależności od <a href="settings_editor_syntax.php">ustawień programu</a> schematy mogą być pogrupowane, lub nie.

<p><b>Wybór schematu kolorowania składni</b><br />
Kliknij, aby zmienić wyświetlić listę dostępnych schematów kolorowania i zmienić schemat.

<p><b>Podświetlanie par nawiasów</b><br />
Kliknij, aby włączyć, bądź wyłączyć <a href="settings_editor_syntax.php">podświetlanie odpowiadających sobie par nawiasów</a>.

<p><b>Tryb edycji wizualnej</b><br />
Kliknij, aby włączyć, lub wyłączyć <a href="main_editor_wysiwyg.php">tryb edycji wizualnej</a>.

<p><b>Podział poziomy</b><br />
Kliknij, aby włączyć, lub wyłączyć poziomy podział <a href="main_editor.php#twoparts">okna edytora</a> na dwie części.

<p><b>Podział pionowy</b><br />
Kliknij, aby włączyć, lub wyłączyć pionowy podział <a href="main_editor.php#twoparts">okna edytora</a> na dwie części.

<p><b>Automatyczne uzupełnianie znaczników</b><br />
Kliknij, aby włączyć, bądź wyłączyć funkcję <a href="main_editor_codeinsight.php#tag_completion">automatycznego uzupełniania znaczników</a>.

<p><b>Dynamiczne podpowiedzi</b><br />
Kliknij, aby włączyć, bądź wyłączyć funkcję <a href="main_editor_codeinsight.php#code_parameter">dynamicznych podpowiedzi</a>.

<p><b>Dynamiczny kod</b><br />
Kliknij, aby włączyć, bądź wyłączyć funkcję <a href="main_editor_codeinsight.php#code_completion">dynamicznego kodu</a>.

<p><b>Wcięcie zaznaczonego tekstu</b><br />
Kliknij, aby ustawić wcięcie dla zaznaczonego tekstu.

<p><b>Usuń wcięcie zaznaczonego tekstu</b><br />
Kliknij, aby usunąć wcięcie dla zaznaczonego tekstu.

<p><b>Informacje o dokumencie</b><br />
Kliknij, aby otworzyć okno <a href="tool_docinfo.php">Informacje o dokumencie</a>.


<p><b>Nawigator zakładek</b><br />
Kliknij, aby otworzyć okno <a href="tool_docinfo.php#bookmark">Nawigator zakładek</a>

<p><b>Zadania do wykonania</b><br />
Kliknij, aby otworzyć okno <a href="tool_docinfo.php#todotasks">Zadania do wykonania</a>

<p><b>Paleta kolorów</b><br />
Kliknij, aby uruchomić <a href="tool_colorpalette.php">paletę kolorów</a> (domyślny skrót <tt>Shift+Ctrl+C</tt>). narzędzie umożliwia wybór koloru z palety, a także pobranie próbki koloru z dowolnego miejsca na ekranie za pomocą pipety.

<p><b>Dynamiczny podgląd</b><br />
Kliknij, aby wyświetlić, bądź ukryć okno <a href="main_preview_dynamic.php">dynamicznego podglądu</a>.



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_toolbars.php">Ustawienia programu - Ustawienia pasków, menu i skrótów</a>
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