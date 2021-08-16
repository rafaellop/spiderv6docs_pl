
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Wyświetl</title>

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
<h1>Menu główne - Wyświetl</h1>

<!-- Treść pomocy -->

<p>Za pomocą tego menu możesz wyświetlić różne elementy programu, jak poszczególne panele, okna ustawień itp.</p>

<p><b>Przeglądanie</b><br />
Kliknij, aby włączyć zakładkę Przeglądanie w celu obejrzenia bieżącego dokumentu. Jeśli w <a href="settings_browse.php">Ustawieniach programu / Przeglądanie</a> ustawiłeś zewnętrzne przeglądarki, możesz wybrać przeglądarkę, która wyświetli stronę w swoim oknie. Standardowy skrót <tt>F11</tt>.


<p><b>Dodatkowe narzędzia</b><br />
Wybierz z podmenu program, który chcesz uruchomić. Listę programów możesz modyfikować w oknie <a href="settings_addtools_tools.php">Ustawienia programu - Dodatkowe narzędzia</a>. Jeśli nie umieściłeś na tej liście żadnych programów, przycisk w menu pozostaje nieaktywny.

<hr />

<p><b>Wyświetl edytor</b><br />
Kliknij, aby wyświetlić <a href="main_editor_general.php">okno edytora</a> (standardowy skrót <tt>Ctrl+F10</tt>).

<p><b>Dynamiczny podgląd</b><br />
Kliknij, aby wyświetlić, bądź ukryć okno <a href="main_preview_dynamic.php">dynamicznego podglądu</a>.

<p><b>Mapowania przeglądania</b><br />
Kliknij, aby wybrać mapowanie ścieżki na twardym dysku na adres URL. Mapowanie to jest konieczne, by móc oglądać wyniki działania skryptów serwer-side, jak np. PHP. Mapowania możesz ustawiać osobno dla każdego serwisu w oknie <a href="service_properites.html#service_properties_mappings">Właściwości serwisu</a>.

<hr />

<p><b>Ogólne ustawienia programu</b><br />
Kliknij, aby zmienić bieżące ustawienia programu otwierając okno <a href="settings.php">ustawień programu</a>. Podmenu dostępne po kliknięciu strzałki rozwija <a href="main_menu_view_settings.php">menu poleceń dotyczących ustawień</a>.


<p><b>Widok</b><br />
Kliknij, aby wyświetlić, bądź schować paski narzędzi lub panele. Polecenie wyświetla <a href="main_menu_view_view.php">podmenu</a> pozwalające na zmianę ustawień wyglądu głównego okna.

<hr />


<p><b>Pierwszy dokument</b><br />
Kliknij, aby przejść do pierwszego dokumentu otwartego aktualnie w edytorze.


<p><b>Poprzedni dokument</b><br />
Kliknij, aby przejść do poprzedniego dokumentu otwartego aktualnie w edytorze.


<p><b>Następny dokument</b><br />
Kliknij, aby przejść do następnego dokumentu otwartego aktualnie w edytorze.


<p><b>Ostatni dokument</b><br />
Kliknij, aby przejść do ostatniego dokumentu otwartego aktualnie w edytorze.

<hr />


<p><b>Informacje o dokumencie</b><br />
Kliknij, aby otworzyć okno informacji o bieżącym dokumencie. Korzystając z podmenu możesz otworzyć od razu wybraną zakładkę tego okna:
<ul>
        <li><a href="tool_docinfo.php">Informacje o dokumencie</a></li>
        <li><a href="tool_docinfo.html#bookmark">Nawigator zakładek</a></li>
        <li><a href="tool_docinfo.html#todotasks">Zadania do wykonania</a></li>
</ul>
bądź też utworzyć nowe zadanie do wykonania.


<p><b>Zakładki w dokumencie</b><br />
Kliknij, aby otworzyć podmenu zarządzania zakładkami i przemieszczania się po dokumencie. Menu to jest identyczne, jak menu <a href="main_menu_edit_bookmarks.php">Edycja / Zakładki w dokumencie</a>.

<hr />


<p><a href="tool_zoomek.php">Szkło powiększające</a><br />
Kliknij, aby uruchomić szkło powiększające. Narzędzie pokazuje powiększony obraz ekrany w sąsiedztwie kursora myszy.

<p><a href="tool_recorder.php">Nagrywarka czynności</a><br />
Kliknij, aby uruchomić nagrywarkę czynności. Narzędzie umożliwia późniejsze odtworzenie zapisanych operacji.

<p><b><a href="tool_multiclipboard.php">Wieloschowek</a></b><br />
Kliknij, aby wyświetlić okno Wieloschowka (domyślny skrót <tt>Ctrl+Shift+W</tt>). Polecenie posiada podmenu wyświetlające zapamiętane w Wieloschowku elementy - aby wstawić odpowiedni fragment do edytora kliknij na wybranej pozycji. Identyczne polecenie znajdziesz w <a href="main_menu_editor.php">menu podręcznym Edytora</a>.

<p><b><a href="tool_unicodeeditorek.php">Edytorek Unicode</a></b><br />
Kliknij, aby uruchomić okno mini edytorka, który służy do wklejania i obsługi tekstów kodowanych w Unicode.

<p><b><a href="tool_colorpalette.php">Paleta kolorów</a></b><br />
Kliknij, aby uruchomić paletę kolorów (domyślny skrót <tt>Shift+Ctrl+C</tt>). narzędzie umożliwia wybór koloru z palety, a także pobranie próbki koloru z dowolnego miejsca na ekranie za pomocą pipety.



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