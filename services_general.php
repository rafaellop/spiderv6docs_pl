
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Projekty ogólnie</title>

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
<h1>Projekty ogólnie</h1>

<p>Podczas pracy nad wieloma projektami niezbędne okaże się pogrupowanie projektów. Do tego w Pająku służą projekty. Tworząc projekt, wskazujesz katalog nadrzędny, którego elementy (wszystkie foldery i pliki w nich zawarte) wejdą w skład projektu. Dzięki temu nie musisz szukać na twardym dysku miejsca, w którym umieszczone są dokumenty danej strony, mozolnie wyszukiwać, bądź wpisywać ścieżek - wystarczy przełączyć się na odpowiedni projekt.</p>

<p>Projekty możesz obsługiwać posługując się:
<ul>
	<li><a href="main_tabs_myservices.php">Zakładką Moje projekty</a></li>
	<li><a href="main_menu_services.php">Menu Projekty</a> (w ograniczonym stopniu)</li>
</ul></p>

<p>Jak utworzyć projekt i z niego korzystać czytaj w pomocy dla <a href="main_tabs_myservices.php">zakładki Moje projekty</a></li>.</p>

<h2>Korzyści wynikające z korzystania z Projektów</h2>

<p>Oczywiście możesz nie tworzyć projektów i korzystać z zakładki Moje projekty jak z normalnej listy plików. Jednak w takim wypadku opcje dotyczące projektów będą nieaktywne - jedyną aktywną opcją będzie możliwość utworzenia nowego projektu.</p>

<p>Natomiast utworzenie projektu umożliwia:</p>
<ul>
	<li>szybkie przełączanie się pomiędzy Twoimi projektami w zakładce <a href="main_tabs_myservices.php">Moje projekty</a></li>
	<li>przeglądanie zadań do wykonania przypisanych do dokumentów projektu</li>
	<li><a href="down_links_verify.php">weryfikację odnośników</a>, <a href="down_integrity.php">sprawdzanie spójności i oczyszczanie całego projektu</a></li>
	<li><a href="service_tool_synchronization.php">synchronizację zawartości projektu z zawartością serwera</a></li>
	<li><a href="service_archive.php">archiwizację</a> i <a href="service_restore.php">przywracanie</a> projektów</li>
	<li><a href="find_ext.php#find_settings">wyszukiwanie i zamianę w dokumentach projektu</a></li>
	<li><a href="service_map.php">utworzenie graficznej mapy projektu</a></li>
	<li>utworzenie listy <a href="service_properites.php#servicepropertiesoftenused">często używanych dokumentów projektu</a> w celu szybkiego ich otwierania</li>
	<li>utworzenie z projektu dokumentu pomocy <a href="tool_htmlhelp_general.php">HTML Help</a></li>
	<li><a href="service_properites.php#service_properties_mappings">mapowanie ścieżki na twardym dysku na adres URL</a> w celu przeglądania strony za pomocą serwera http (przydatne przy tworzeniu np. stron <a href="coding_php_mapping.php">korzystających z PHP)</a></li>
	<li><a href="service_properites.php#metaindexing">łatwe ujednolicenie sekcji META we wszystkich dokumentach projektu</a></li>
   <li>łatwe zarządzania <a href="main_editor_todotasks.php">Zadaniami do wykonania</a> w projekcie i w jego dokumentach</li>
</ul>

<p>Dodatkowo istnieje możliwość grupowania projektów na liście. Dzięki tej możliwości można łatwiej odnaleźć odpowiedni projekt na liście, co jest szczególnie istotne podczas pracy nad wieloma różnymi projektami.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_tabs_myservices.php">Zakładka "Moje projekty"</a>
	<li><a href="service_properites.php">Okno Właściwości projektu</a></li>
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