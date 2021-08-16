<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">


<!-- nazwa strony pomocy -->
<title>Narzędzia - Edytor znacznika TABLE</title>

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
<h1>Narzędzia - Edytor znacznika TABLE</h1>

<p>To narzędzie służy do określania atrybutów znacznika tabeli. Po wypełnieniu wybranych pól i zaznaczeniu odpowiednich opcji do dokumentu wstawiony zostanie znacznik otwierający tabelę w postaci &lt;TABLE&gt;&lt;/TABLE&gt;. Dodatkowo pierwszy z wstawionych znaczników uzupełniony będzie o listę zdefiniowanych atrybutów.

<p>Okno Edytora znacznika TABLE uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_tables.php">Tabele</a> / Edytor znacznika &lt;table&gt;, a także z paska narzędzi <a href="toolbars_tables.php">Tabele i formularze</a>.

<h2>Ustawienia znacznika TABLE</h2>

<p><b>Szerokość tabeli</b><br>
Wybierz wartość, która będzie szerokością tabeli. Jeśli zaznaczysz poniższy przełącznik, podawany rozmiar będzie wstawiony w postaci procentowej.

<p><b>Rozmiar podawany w procentach</b><br>
Jeśli zaznaczysz ten przełącznik, podawany powyżej rozmiar będzie wstawiony w postaci procentowej.

<p><b>Wysokość tabeli</b><br>
Wybierz wartość, która będzie wysokością tabeli. Jeśli zaznaczysz poniższy przełącznik, podawany rozmiar będzie wstawiony w postaci procentowej.

<p><b>Rozmiar podawany w procentach</b><br>
Jeśli zaznaczysz ten przełącznik, podawany powyżej rozmiar będzie wstawiony w postaci procentowej.

<p><b>Odstęp między komórkami</b><br>
W tym miejscu możesz wprowadzić wartość oznaczającą odstęp między komórkami tabeli.

<p><b>Margines wewnętrzny komórki</b><br>
W tym miejscu możesz wprowadzić wartość oznaczającą szerokość marginesu wewnętrznego komórki.

<p><b>Obramowanie wokół tabeli</b><br>
Wprowadź tutaj wartość określającą grubość obramowania tabeli.

<p><b>Rodzaj obramowania zewnętrznego</b><br>
Wybierz wartość określającą, które części obramowania mają być widoczne.

<p><b>Obramowanie pomiędzy komórkami</b><br>
Wybierz wartość określającą, które części ramek pomiędzy komórkami mają być widoczne.

<p><b>Streszczenie zawartości tabeli</b><br>
Możesz tutaj wpisać krótką informację dotyczącą treści przedstawianej przez tabelę.

<h2>Styl elementu</h2>

<p>Ta grupa pozwala na określenie stylu dla znacznika. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzedzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>.

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

<h2>Przycisk "Zdarzenia i atrybuty"</h2>

<p>Przycisk "Zdarzenia i atrybuty" umożliwia otwarcie okna <a href="tool_events_attributes.php">Zdarzenia i inne atrybuty</a>. Okno to umożliwia określenie dodatkowych atrybutów edytowanego znacznika, które nie mają swoich odpowiedników w oknie narzędzia. Możesz tam również określić zdarzenia dla języków skryptowych pozwalające na uzyskanie różnych efektów specjalnych.

<h2>Wskazówka</h2>

<p>Jeżeli chcesz szybko utworzyć tabelę, a nie znasz się za bardzo na języku HTML, możesz posłużyć się narzędziem <a href="tool_table_quick.php">Bardzo szybka tabelka</a>, za pomocą którego zrobisz to łatwo i przyjemnie. Bardziej rozbudowane tabele możesz budować za pomocą <a href="tool_table_editor.php">edytora tabel</a>.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_table_editor.php">Edytor tabel</a>
	<li><a href="tool_table_quick.php">Bardzo szybka tabela</a>
	<li><a href="main_menu_main.php">Menu programu</a>
	<li><a href="toolbars_general.php">Narzędzia na paskach</a>
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