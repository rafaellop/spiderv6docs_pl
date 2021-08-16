<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Zakładka "Inspektor znaczników"</title>

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
<h1>Zakładka "Inspektor znaczników"</h1>

<p>Zakładka "Inspektor znaczników" służy do tworzenia i reedycji znaczników. Umożliwia edycję znaczników w różnych językach, dla których zostały wprowadzone dane w <a href="tagdata_editor_tdf.php">Edytorze plików definicyjnych znaczników TDF.</a>

<p>Zakładkę Inspektor znaczników włączysz za pomocą panelu po lewej lub skrótu klawiszowego CTRL+2, a także z menu pod przyciskiem pokazanym powyżej czy z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_view.php">Wyświetl</a>. Zakładka ta otwierana jest też po użyciu skrótu <tt>F6</tt>, gdy kursor stoi w obrębie znacznika.

<p>Obecnie obsługiwane są języki wg następujących specyfikacji:</p>

<ul>
        <li>HTML 4.01</li>
        <li>MathML 2.0</li>
   <li>P3P 1.0</li>
        <li>RSS 2.0</li>
        <li>SMIL 1.0</li>
        <li>SVG 1.0</li>
   <li>WML 1.1</li>
   <li>WML 1.2</li>
        <li>WML 1.3</li>
        <li>WML 2.0</li>
   <li>XTHML 1.0</li>
   <li>XTHML 1.1</li>
</ul>

<p>Za pomocą tej zakładki edytowane mogą być znaczniki, które nie posiadają dedykowanych okien edycyjnych. </p>

<p>Okno zakładki podzielone zostało na trzy części:</p>
<ul>
        <li>Menu inspektora</li>
        <li>Listy atrybutów i zdarzeń oraz opis znacznika</li>
        <li>Okienko podglądu</li>
</ul>


<h2>Menu</h2>
<p>W menu dostępne są następujące pozycje:</p>

<p><b>Grupa</b><br />
Zawiera listę obsługiwanych przez inspektora języków znacznikowych. Ustawienia dla języków możesz edytować za pomocą <a href="tagdata_editor_tdf.php">Edytora plików definicyjnych znaczników TDF</a> Jeśli Pająk nie może określić, w jakim języku znaczników tworzony jest dokument, domyślnie przyjmowane jest, iż jest to HTML  4.01. Jeśli wybrałeś inny język, zablokuj wybór za pomocą przycisku z kłódką umieszczonego po prawej stronie listy.</p>

<p><b>Znacznik</b><br />
Zawiera listę wszystkich znaczników wybranej grupy.</p>

<p><b>Wstawienie znacznika</b><br />
Wstawia nowy znacznik wraz z ustawionymi atrybutami i zdarzeniami.</p>

<p><b>Pomoc</b><br />
Otwiera to okno pomocy.</p>



<h2>Lista atrybutów i zdarzeń</h2>

<p><b>Atrybuty</b><br />
Zawiera listę atrybutów obsługiwanych przez wybrany znacznik. Obok nazwy atrybutu jest pole, w które możesz wpisać wartość. Jeśli dana wartość jest np. kolorem, klasą CSS itp., możesz skorzystać z narzędzia uruchamianego za pomocą kliknięcia w przycisk, który pojawi się z prawej strony tego pola. Ułatwi to podanie prawidłowej wartości dla danego atrybutu.</p>

<p><b>Zdarzenia</b><br />
Zawiera listę zdarzeń obsługiwanych przez wybrany znacznik. W polu z prawej strony wpisz nazwę funkcji, która obsłuży zdarzenie. Możesz również stworzyć nową funkcję klikając na strzałkę, która pojawi się z prawej strony tego pola.</p>



<h2>Opis znacznika</h2>

<p>Pod listą atrybutów i zdarzeń znajduje się pole opisu znacznika zawierające jego opis. Przykładowo, dla znacznika <tt>A</tt> języka HTML opis będzie wyglądał następująco:</p>

<p><tt>Nazwa: <b>A</b><br />
Opis: <b>Tworzenie połączeń między dokumentami</b><br />
Status: <b>Normalny</b><br />
Zamknięcie: <b>Wymagane</b></tt></p>


<h2>Okienko podglądu</h2>
<p>Okienko podglądu znajduje się u dołu zakładki. Umożliwia ono podgląd formatowania wybranego znacznika przed wstawieniem go do dokumentu.</p>

<p>&nbsp;<b>Wybór wykorzystywanej przeglądarki</b><br />
Kliknij, aby wybrać przeglądarkę używana do przeglądania w tej zakładce. O ile jest zainstalowana w systemie (<a href="main_preview_embed.php">czytaj więcej na ten temat</a>), możesz skorzystać z przeglądarki:
<ul>
        <li>MS Internet Explorer</li>
        <li>Mozilla</li>
</ul></p>


<p>Podgląd z użyciem arkuszy stylów bieżącego dokumentu<br>
Ten przycisk jest przełącznikiem umożliwiającym podglądanie formatowania bieżącego znacznika (wybranego u góry zakładki), przy czym do jego formatowania zostaną użyte arkusze stylów utworzone w bieżącym dokumencie otwartym w edytorze, bądź do tego dokumentu dołączone. W ten sposób możesz na bieżąco obserwować, jak będzie dany element wyglądał w bieżącym dokumencie i jaki wpływ  na znacznik mają wprowadzane przez Ciebie zmiany w inspektorze.
</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="main_tabs_general.php">Inne zakładki</a>
        <li><a href="tagdata_editor_tdf.php">Edytorze plików definicyjnych znaczników TDF</a>
        <li><a href="main_window_desc.php">Główne okno programu</a>
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