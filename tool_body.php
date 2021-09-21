
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Ustawienia BODY</title>

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
<h1>Narzędzia - Ustawienia BODY</h1>

<p>Okienko ustawień sekcji BODY pozwala na określenie własności dla znacznika <tt>&lt;body&gt;</tt>. Znacznik ten określa wygląd tej części strony, która wyświetla informacje. Dlatego ustawienia tej sekcji mają często wpływ na wygląd dokumentu. Jednakże o ile okno to oferuje wiele ustawień, wiele z nich jest już przestarzałych. Obecnie zaleca się stosowanie <a href="coding_css.php">stylów CSS</a> do określania wyglądu dokumentu. Mimo to, opisywane narzędzie może się czasem przydać. 

<p>Okno Ustawień sekcji BODY uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_structure.php">Struktura</a> / Edytor sekcji &lt;body&gt;, a także z paska narzędzi <a href="toolbars_often.php">Często używane</a> oraz skrótem <tt>Shift+Ctrl+B</tt>. 
<p>Aby szybko wstawić tło do zacznika <tt>&lt;body&gt;</tt> w umieszczonego w dokumencie otwartym w edytorze, przeciągnij w obręb tego znacznika do niego obrazek z listy plików. Narzędzie "Ustawienia BODY" otworzy się automatycznie i od razu wprowadzona będzie odpowiednia ścieżka do obrazka.</p>
   
<h2>Ustawienia tła i kolorów - przestarzałe</h2>

<p>Pierwsza część okienka pozwala na określenie kolorystyki i tła graficznego podkładu dla dokumentu. Wszystkie te ustawienia mają status przestarzały (ang. <i>deprecated</i>) i nie zaleca się korzystania z nich. Zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>. Znajdziesz tutaj następujące ustawienia:

<p><b>Podkład graficzny </b><br>
Zaznacz, aby wybrać podkład graficzny dla dokumentu.

<p><b>Ścieżka do podkładu graficznego </b><br>
Określa ścieżkę dostępu do pliku z podkładem graficznym dla tej strony. Naciskając przycisk obok możesz wybrać obrazek za pomocą okienka dialogowego.

<p><b>Kolor tła </b><br>
Zaznacz, aby wybrać kolor tła dla dokumentu.

<p><b>Kolor tekstu </b><br>
Zaznacz, aby wybrać kolor tekstu w dokumencie.

<p><b>Kolor odsyłaczy </b><br>
Zaznacz, aby wybrać kolor odsyłaczy w dokumencie.

<p><b>Kolor aktywnych odsyłaczy </b><br>
Zaznacz, aby wybrać kolor odsyłaczy, z którymi łączy się przeglądarka.

<p><b>Kolor odwiedzonych odsyłaczy </b><br>
Zaznacz, aby wybrać kolor odsyłaczy, z które były już odwiedzane.

<p><b>Uproszczony podgląd</b><br>
Tutaj wyświetlany jest podgląd grafiki użytej jako tło strony WWW wraz z podglądem kolorów tekstu. Dzięki temu możesz łatwiej ocenić jak dany kolor tekstu pasuje do użytego podkładu.

<h2>Ustawienia marginesu MS Internet Explorer</h2>

<p>Znajdujące się w tej grupie ustawienia pozwalają na określenie ustawień marginesów. Niestety, te ustawiania działają wyłącznie w MS Internet Explorer dlatego i w tym wypadku zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>. Znajdziesz tutaj następujące ustawienia:

<p><b>Marginesy Internet Explorer</b><br>
Zestaw czterech przełączników i czterech pól, w których określa odległość zawartości strony od brzegów przeglądarki: lewego, prawego, górnego i dolnego.

<p><b>Znak wodny w Internet Explorer</b><br>
Włączenie znaku wodnego ustanawia stałe, nie przesuwające się, tło strony.

<h2>Ustawienia marginesu Netscape</h2>

<p>Znajdujące się w tej grupie ustawienia pozwalają na określenie ustawień marginesów. Niestety, te ustawiania działają wyłącznie w przeglądarce Netscape dlatego i w tym wypadku zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>. Znajdziesz tutaj dwa przełączniki i dwa pola odpowiadające za szerokość marginesu (lewy i prawy) oraz wysokość (górny i dolny). 

<h2>Styl elementu</h2>

<p>Ta grupa pozwala na określenie stylu dla znacznika. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzędzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

<h2>Przycisk "Zdarzenia i atrybuty"</h2>

<p>Przycisk "Zdarzenia i atrybuty" umożliwia otwarcie okna <a href="tool_events_attributes.php">Zdarzenia i inne atrybuty</a>. Okno to umożliwia określenie dodatkowych atrybutów edytowanego znacznika, które nie mają swoich odpowiedników w oknie narzędzia. Możesz tam również określić zdarzenia dla języków skryptowych pozwalające na uzyskanie różnych efektów specjalnych.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="coding_css.php">Tworzenie stylów</a>
	<li><a href="tool_quickstart.php">Narzędzie Szybki Start</a>
	<li><a href="tool_meta.php">Narzędzie ustawień META</a>
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
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>