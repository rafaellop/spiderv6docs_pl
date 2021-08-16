
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Tworzenie odsyłaczy</title>

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

<h1>Tworzenie odsyłaczy</h1>
<!-- nagłowek głowny tematu -->

<!-- Treść pomocy -->

<p>Główna idea i sens istnienia hypertekstu (czyli m.in. stron internetowych w języku HTML)  to przede wszystkim możliwość tworzenia w dokumentach odsyłaczy do innych dokumentów. Mogą to być zarówno odsyłacze do innych dokumentów HTML, do których będziesz przechodzić klikając na odsyłacz w tekście strony, ale również odsyłacze do obrazków wyświetlanych na stronie itp.</p>


<h2>Tworzenie zwykłych odsyłaczy</h2>

<p>Zwykły odsyłacz w kodzie HTML oznaczany jest za pomocą znacznika <tt>&lt;A href="adres"&gt;</tt>. Odsyłaczem może być zarówno tekst, jak i obrazek.</p>

<p><b>Najprostrze utworzenie odsyłacza</b><br />
Aby najszybciej utworzyć odsyłacz:</p>
<ol>
	<li>Przeciągnij do edytowanego dokumentu dokument z listy plików na zakładce <a href="main_tabs_myservices.html">Moje serwisy</a>. </li>
	<li>W oknie <a href="tool_link.html">Wstawianie odnośnika</a>, które się otworzy wpisz tekst, który ma być odsyłaczem (np. 'Kliknij tu by przejść na następną stronę...'), wciśnij przycisk OK i... to wszystko.</li>
</ol>


<p><b>Tworzenie odsyłacza z obrazka lub tekstu</b><br />
Aby utworzyć odsyłacz z obrazka, lub z tekstu istniejącego w juz w dokumencie:
<ol>
	<li>Zaznacz znacznik obrazka lub tekst w edytorze.</li>
	<li>Włącz narzędzie <a href="tool_link.html">Wstawianie odnośnika</a> (<a href="main_menu_main.html">Menu główne</a> / <a href="main_menu_tools.html">Narzędzia</a> / <a href="main_menu_tools_links.html">Odsyłacze</a> / <b>Edytor odsyłaczy</b>, bądź na paskach narzędzi <a href="toolbars_link_format.html">Odsyłacze, tekst i formatowanie</a> i <a href="toolbars_often.html">Często używane</a>). Standardowy skrót klawiszowy co <tt>Shift+Ctrl+A</tt>.</li>
	<li>Korzystając z okna dialogowego wywoływanego przyciskiem obok pola "Adres URL odsyłacza", wybierz dokument, do którego ma prowadzić odsyłacz.</li>
	<li>Kliknij OK w oknie Wstawianie odnośnika - tekst zaznaczony w edytorze zostanie objęty znacznikiem odsyłacza.</li>
</ol>


<p><b>Tworzenie odsyłacza do pliku na serwerze FTP</b><br />
W podobny sposób możesz utworzyć odsyłacz do pliku znajdującego się na serwerze - wystarczy dokument docelowy przeciągnąć z listy plików na zakładce <a href="main_tabs_myftpservers.html">Moje serwery</a>. Jeśli masz ustawione <a href="service_properites.html#service_properties_mappings">mapowanie serwera FTP na adres URL</a>, odsyłacz będzie wskazywał na odpowiedni adres URL. W przeciwnym wypadku użyty zostanie adres serwera FTP.</p>


<h2>Tworzenie map odsyłaczy</h2>

<p>Mapy odsyłaczy to zdefiniowane za pomocą znaczników HTML aktywne obszary na obrazku. Kliknięcie na takim obszarze działa identycznie jak kliknięcie na zwykłym odsyłaczu.</p>

<p>Aby utworzyć prostą mapę odsyłaczy uruchom narzędzie <a href="tool_link_map_editor.html">Mapa odsyłaczy</a>, a następnie:</p>

<ol>
	<li>Wprowadź w zakładce <b>Ogólne ustawienia mapy</b> w polu <b>Nazwa mapy</b> nazwę, która będzie używana do obsługi mapy w dokumencie,</li>
	<li>w polu <b>Lokalizacja grafiki mapy</b> ścieżkę dostępu i nazwę pliku graficznego, dla którego tworzona będzie mapa.</li>
	<li>W zakładce <b>Definiowanie obszarów</b>, korzystając z narzędzi do rysowania (z lewej strony - prostokąt, elipsa, nieregularny) narysuj obszary aktywne.</li>
	<li>W zakładce <b>Ustawienia wybranych obszarów</b> w polu <b>Odnośnik URL</b> wprowadź adres dokumentu, do którego ma prowadzić odsyłacz. Aktualnie edytowany obszar aktywny jest na zakładce <b>Definiowanie obszarów</b> oznaczony żółta kratką.</li>
	<li>Kliknij <b>OK</b> - mapa (znacznik <tt>&lt;MAP&gt;</tt> wraz ze znacznikami <tt>&lt;AREA&gt;</tt>) wraz z obrazkiem zostanie umieszczona w dokumencie.</li>
</ol>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_link.html">Wstawianie odnośnika</a>
	<li><a href="tool_link_map_editor.html">Mapy odsyłaczy</a>
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