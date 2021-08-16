
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Mapa serwisu</title>

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
<h1>Mapa serwisu</h1>



<p>Mapa serwisu przedstawia w sposób graficzny powiązania pomiędzy plikami w serwisie. Umożliwia też w szybki sposób przechodzenie do wybranego dokumentu. 

<p>Mapę serwisu uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_services.php">Serwisy</a> / <a href="main_menu_services_properties.php">Własności serwisu</a> / Mapa serwisu, a także z poziomu <a href="main_tabs_myservices.php">zakładki Serwisy</a> za pomocą polecenia w menu rozwijanym pod przyciskiem Własności serwisu . 

<p>W oknie <a href="settings_general.php#service_map">Ustawienia programu - Ogólne</a> w sekcji Mapa serwisu możesz zmienić opcje generowana mapy, m. in rodzaje plików pokazywanych na mapie, głębokość skanowania odnośników itd.</p>

<p>Okno mapy serwisu zostało podzielone na dwie części:</p>

<ul>
	<li><b>Menu</b> w górnej części</li>
	<li><b>Okno zawartości</b> - tworzy resztą okna</li>
</ul>



<h2>Menu</h2>

<p>Menu pozwala na poruszanie się po dokumentach na mapie, a także na inne operacje.</p>

<p>Dwa pierwsze polecenia służą do przechodzenia dalej i cofania się, jeśli zmieniałeś dokument główny mapy (od którego rozpoczynana jest mapa). Jeśli nie zmieniałeś dokumentu głównego, te polecenia będą nieaktywne. Dokument główny domyślnie znajduje się zawsze w lewym górnym rogu mapy.</p>

<p> <b>Przejdź do poprzedniego</b> - kliknij, aby wrócić do dokumentu, który uprzednio był dokumentem głównym na mapie. </p>
<p> <b>Przejdź do następnego</b> - kliknij, aby ponownie przejść do następnego dokumentu, który wskazałeś jako dokument główny na mapie. </p>
<br />

<p>Odświeżenie podglądu - kliknij, aby ponownie wygenerować mapę</p><br />

<p>Drukuj mapę - kliknij, aby wydrukować mapę serwisu.</p>

<p><b>Zapisz mapę serwisu na dysk</b> - kliknij, aby zapisać mapę serwisu w postaci dokumentu HTML.</p>


<h2>Okno zawartości mapy</h2>

<p>Okno to zawiera mapę w postaci ikon plików połączonych strzałkami. W oknie <a href="settings_general.php#service_map">Ustawienia programu - Ogólne</a> w sekcji Mapa serwisu możesz wybrać głębokość skanowania (czyli w ilu kolejnych dokumentach od dokumentu głównego mają być szukane odnośniki), włączyć lub wyłączyć kolorowanie strzałek (domyślnie włączone), a także wybrać rodzaje plików, jakie mają być umieszczane na mapie.</p>

Jeśli klikniesz na plik prawym klawiszem myszki, ukaże się menu zawierające dwie pozycje:

<p><b>Otwórz dokument</b><br />
Kliknij, aby otworzyć wskazany dokument w Pająku.</p>

<p><b>Rozpocznij przeglądanie od niego</b><br />
Kliknij, aby rozpocząć przeglądanie od wskazanego dokumentu (wybrać jako dokument główny na mapie). Na mapie zostaną pokazane jedynie te dokumenty, do których odnośniki zawiera wskazany dokument. Identyczne działanie ma dwuklik lewym klawiszem na ikonie pliku.</p>

<p>Program stara się jak najprzejrzyściej rozmieścić pliki na mapie. Możesz jednak przenieść ikonę dokumentu w inne miejsce za pomocą techniki przeciągnij i upuść (kliknij na ikonę lewym klawiszem i przeciągnij w dowolne miejsce).</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="services_general.php">Serwisy ogólnie</a>
	<li><a href="main_tabs_myservices.php">Zakładka Moje serwisy</a>
	<li><a href="settings_general.php#service_map">Ustawienia programu - Ogólne - Mapa serwisu</a>
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
