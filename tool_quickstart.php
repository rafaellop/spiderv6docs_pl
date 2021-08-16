
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Szybki Start</title>

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
<h1>Narzędzia - Szybki Start</h1>

<p>
Szybki start to narzędzie pozwalające w kilku krokach przygotować szkielet strony w postaci nagłówków, sekcji <a href="tool_meta.php">META</a> oraz sekcji <a href="tool_body.php">BODY</a>. Tworzenie odbywa się w kilku krokach. Najpierw pojawia się opisywane tutaj okienko, następnie zależnie od ustawień przełączników, okienka edytorów <a href="tool_meta.php">META</a> i <a href="tool_body.php">BODY</a>.
 
<p>Okno Szybkiego Startu uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_structure.php">Struktura</a> / Szybki Start lub <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_creators.php">Kreatory kodu znaczników</a> / Szybki Start, ale także z podmenu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_file.php">Plik</a> / <a href="main_menu_file_new.php">Nowy</a> / <a href="main_menu_tools_creators.php">Kreatory kodu znaczników</a> / Szybki Start. Oczywiście również z paska narzędzi <a href="toolbars_often.php">Często używane</a> oraz skrótem <tt>Shift+Ctrl+Q</tt>. Ikona polecenia przedstawiona została powyżej.
   
<h2>Wygląd okienka</h2>

<p>Okienko składa się z kilku pól pozwalających na opisanie głównych parametrów tworzenego dokumentu. Znajdują się tam takie opcje jak:

<p><b>Deklaracja typu dokumentu</b><br>
DTD określa składnię używanego w dokumencie języka.

<p><b>Tytuł dokumentu</b><br>
Wprowadź tutaj tytuł dokumentu, który będzie wyświetlany na pasku tytułowym okna przeglądarki.

<p><b>Adres bazowy dokumentu</b><br>
Wprowadź tutaj adres, który będzie używany przez przeglądarkę do odczytywania elementów wskazywanych przez ścieżki względne. Nie jest to wymagane.

<p>Jeśli chcesz, aby okno <b>Szybkiego Startu</b> pozwoliło na utworzenie dodatkowo sekcji w dokumencie, zaznacz przełączniki:

<p><b>Dołącz sekcję META</b><br>
Zaznacz jeśli chcesz po wciśnięciu OK przejść do określania parametrów <a href="tool_meta.php">sekcji META</a>.

<p><b>Dołącz sekcję BODY</b><br>
Zaznacz jeśli chcesz po wciśnięciu OK przejść do określania ustawień <a href="tool_body.php">znacznika BODY</a>.

<p><b>Utwórz strukturę ramkową FRAMESET</b><br />
Zaznacz jeśli chcesz po wciśnięciu OK przejść do definiowania struktury ramkowej za pomocą <a href="tool_frameeditor.php">Kreatora ramek</a>. Opcja dostępna tylko w przypadku wybrania DOCTYPE odpowiedniego dla dokumentów z definicją ramek.

<p><b>Dołącz prolog XML dla dokumentów typu XML</b><br />
Powoduje dołączenie prologu XML <tt>&lt;?xml version="1.0" encoding="encoding"?&gt;</tt> dla dokumentów typu XML. Opcja dostępna tylko w przypadku wybrania DOCTYPE odpowiedniego dla dokumentów typu XML. 

<p>Po zaznaczeniu tych przełączników uruchomione zostaną kolejne narzędzia, za pomocą których określisz dalsze parametry. Więcej informacji na temat tych narzędzi znajdziesz w tematach pomocy im poświęconych.

<p><b>Twórz nowy dokument podczas Szybkiego Startu</b><br>
Możesz wyłączyć tę opcję, aby wynik działania funkcji Szybki Start zastępował tekst w bieżacym dokumencie, zamiast tworzyć nowy.</p>

<p>Po przejściu przez wszystkie etapy zostanie utworzony nowy dokument i wstawiona do niego będzie wygenerowana struktura.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_meta.php">Narzędzie ustawień META</a>
	<li><a href="tool_body.php">Narzędzie ustawień BODY</a>
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