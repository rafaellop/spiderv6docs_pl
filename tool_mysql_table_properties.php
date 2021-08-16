
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Serwery baz danych MySQL - Właściwości tabeli</title>

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
<h1>Narzędzia - Serwery baz danych MySQL - Właściwości tabeli</h1>




<p>Okno "Właściwości tabeli" MySQL otworzysz za pomocą polecenia o tej samej nazwie w menu podręcznym otwieranym po kliknięciu prawym klawiszem myszy na nazwie tabeli na drzewku struktury bazy danych zakładki <a href="main_tabs_inspector_mysql.html">Inspektor MySQL</a>.</p>

<p><b>Nazwa tabeli</b><br />
Pole zawiera nazwę bieżącej tabeli. Klikając przycisk obok niego możesz wyświetlić okienko umożliwiające wprowadzenie nowej nazwy, co umożliwia zmianę nazwy edytowanej tabeli.

<p>Znajdujące się poniżej dwie zakładki - Pola tabeli i Indeksy tabeli umożliwiają edycję tabeli. </p>

<a name="filed"></a>
<h2>Zakładka Pola tabeli</h2>

<p>Zakładka "Pola tabeli" zawiera listę pól, jakie zawiera tabela oraz pasek przycisków.</p>

<p><b>Lista pól</b> zawiera cztery kolumny, w których wyświetlane są:<br />
<ul>
	<li><b>Nazwa pola</b>, obok którego wyświetlona jest ikonka. Małym kwadracikiem oznaczone są pola istniejące przed edycją, większym (kolorowym) pola dodane podczas edycji tabeli</li>
	<li><b>Typ danych</b>, np. <tt>varchar(50)</tt>,<tt> tinyint(4)</tt>, <tt>enum('y', 'n')</tt> itp.</li>
	<li><b>Puste</b>, informacja, czy w polu może być zapisana wartość <tt>NULL</tt></li>
	<li><b>Domyślna wartość</b>, wartość wprowadzana do pola, gdy podczas tworzenia nowego rekordu nie została ona podana bezpośrednio</li>
	<li><b>Inne</b>, informacja, czy klucz podstawowy tabeli posiada atrybut "auto_increment".</li>
</ul>

<p>Pasek umieszczony obok listy zawiera przyciski umożliwiające dodawanie, usuwanie i zmianę właściwości pola:</p>
<p><b>Dodanie nowego pola tabeli</b>, <b>Zmiana właściwości wybranego pola tabeli</b><br />Oba polecenia otwierają okno <a href="tool_mysql_table_field.html">Właściwości pola tabeli</a>, przy czym podczas edycji wybranego pola w okienko zostaną wyświetlone oczywiście jego ustawienia. Okno właściwości wybranego pola możesz otworzyć również dwuklikając na jego nazwie.

<p><b>Usunięcie pola tabeli</b><br />
Usuwa pole za tabeli. Uwaga - operacja ta jest nieodwracalna, upewnij się, że chcesz usunąć wybrane pole i że nie zawiera ono żadnych istotnych danych!

<p><b>W górę, w dół</b><br />
Umożliwiają przeniesienie zaznaczonego pola w górę, bądź w dół, strukturze tabeli.
 
 
<a name="index"></a>
<h2>Zakładka Indeksy tabeli</h2>

<p>Zakładka "Indeksy tabeli" jest identyczna z wyżej opisaną zakładką "Pola tabeli". Zawiera listę indeksów oraz pasek przycisków umożliwiających ich dodawanie, usuwanie i modyfikację.</p>

<p>Na liście, obok nazwy indeksu umieszczone są ikonki informujące o jego typie:

<ul>
	<li> indeks standardowy</li>
	<li> indeks typu PRIMARY</li>
	<li> indeks typu UNIQUE</li>
	<li> indeks typu FULL TEXT</li>
</ul>

<p>Po kliknięciu na przycisk edycji, bądź tworzenia indeksu otwarte zostanie okienko <a href="tool_mysql_table_index.html">Właściwości indeksu</a>, w którym będziesz mógł wybrać jego typ, pola których dotyczy i wprowadzić nazwę.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_tabs_inspector_mysql.html">Zakładka Inspektor MySQL</a></li>
	<li><a href="tool_mysql_table_index.html">Właściwości indeksu tabeli MySQL</a></li>
	<li><a href="tool_mysql_table_field.html">Właściwości pola tabeli MySQL</a></li>
	<li><a href="settings_network_mysqlservers_add.html">Właściwości serwera MySQL</a></li>
	<li><a href="settings_network_mysqlservers.html">Ustawienia programu - Ustawienia serwerów baz danych MySQL</a></li>
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