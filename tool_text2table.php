
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Zaznaczony tekst na tabelę</title>

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

<!-- nagłowek głowny tematu -->
<h1>Narzędzia - Zaznaczony tekst na tabelę</h1>

<p>Narzędzie to pozwala na zamianę zaznaczonego tekstu na tabelę, przy czym podział na kolumny i wiersze odbywa się wg jednego z separatorów wybranych w oknie narzędzia.

<p>Aby skorzystać z narzędzia zamiany tekstu na tabelę wejdź do <a href="main_menu_main.html">Menu głównego</a> / <a href="main_menu_edit.html">Edycja</a> / <a href="main_menu_edit_change_selected.html">Zaznaczony tekst na ...</a> / Zaznaczony na tabelę. Opisywane narzędzie uruchomisz również z paska narzędzi <a href="toolbars_link_format.html">Odsyłacze, tekst, formatowanie</a>.
   
<p>Jak już wspomniano, aby można było utworzyć tabelę składającą się z kilku kolumn, należy w oknie narzędzia wskazać separator, który będzie używany do rozpoznania kolumn lub wierszy. Możesz wybrać jeden z predefiniowanych (i najczęściej zresztą używanych) separatorów, jak średnik, spacja, czy przecinek, bądź wprowadzić własny separator poszczególnych kolumn tabeli, zaś każdy wiersz zaznaczonego tekstu stanie się wierszem tabeli. 

<p>Możesz też przekonwertować tekst na tabelę w ten sposób, że będzie ona zawierała tylko jeden wiersz, zaś poszczególne wiersze zaznaczonego tekstu utworzą zawartość komórek. Również w tym wypadku możesz podać własny separator kolumn.</p>

<p>Przykładowo zaznaczenie poniższego fragmentu i użycie opisywanego narzędzia z wybraną opcją <b>każda linia jako wiersz, średnik jako separator kolumn</b> utworzy tabelę jak pokazano niżej:

<table border="0" width="100%">
<tr>
<td>
<p><tt>jabłka;gruszki;śliwy<br/>
wiśnie;truskawki;orzechy</tt>
</td>
<td>
<table cellspacing="2" cellpadding="2" border="1">
<tr><td>jabłka</td><td>gruszki</td><td>śliwy</td></tr>
<tr><td>wiśnie</td><td>truskawki</td><td>orzechy</td></tr>
</table>
</td>
</tr>
</table>

<p>W oknie narzędzia znajduje się również przełącznik <b>Wstaw znacznik tabeli</b>. Zaznaczenie tego przełącznika powoduje wstawienie znacznika <tt>table</tt> wokół teksu przetworzonego na wiersze i kolumny. Jeśli przełącznik ten jest włączony możesz również określić parametry znacznika <tt>table</tt> klikając przycisk Właściwości tabeli, który otworzy okienko <a href="tool_table_tag.html">ustawień znacznika <tt>table</tt></a>, gdzie będziesz mógł określić np. obramowanie czy styl tabeli.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="main_menu_edit_change_selected.html">Inne operacje na zaznaczonym tekście</a>
        <li><a href="tool_table_tag.html">Znacznik table</a>
        <li><a href="tool_table_editor.html">Edytor tabel</a>
        <li><a href="tool_table_quick.html">Bardzo szybka tabela</a>
        <li><a href="main_menu_main.html">Menu programu</a>
        <li><a href="toolbars_general.html">Narzędzia na paskach</a>
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