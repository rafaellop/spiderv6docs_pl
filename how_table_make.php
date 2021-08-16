
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Tworzenie i edycja tabel</title>

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
<h1>Tworzenie i edycja tabel</h1>

<!-- Treść pomocy -->

<p>Za pomocą tabeli możemy w ładny sposób przedstawić jakieś dane, korzystając przy tym z możliwości obramowania i łączenia komórek. Jednak tabele nie służą tylko do tego. Bardzo często są też używane do ułożenia i formatowania poszczególnych części strony WWW. Trudno jest nawet to zauważyć, ponieważ tabele te nie posiadają ani obramowania, ani widocznych kolumn czy komórek.</p>

<p>Pająk posiada kilka narzędzi służących do kompleksowego tworzenia tabeli od podstaw - od prostego kreatora do bardzo zaawansowanego edytora tabel. Istnieją też narzędzia do edycji poszczególnych znaczników tabeli.</p>


<p><b>Szybkie utworzenie tabeli</b>

<p>Aby szybko utworzyć tabelę jak pokazana poniżej, skorzystaj z polecenia <a href="tool_table_quick.php">Bardzo szybka tabelka</a> w <a href="main_menu_main.php">menu głównym</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_creators.php">Kreatory kodu znaczników</a>.</p>


		<table width="200" border="1">
		<tr>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
		</tr>
		</table>

<div>&nbsp;</div>

<ol>
	<li>Wybierz ilość wierszy i kolumn - w tym celu kliknij na siatce i przeciągnij kursor myszy w odpowiednie miejsce tak, by zaznaczone było tyle kolumn i wierszy, ile chcesz utworzyć w tabeli (w tym wypadku 2 wiersze po 3 kolumny). Możesz tez skorzystać z suwaków po prawej stronie i u dołu siatki w celu ustawienia większej ilości wierszy (skok co 5). Ilość aktualnie wybranych wierszy i kolumn jest wyświetlana w prawym dolnym rogu okna narzędzia.</li>
	<li>Kliknij na przycisk Parametry tabeli w prawym dolnym rogu, obok siatki i ustaw odpowiednie parametry dla znacznika <tt>&lt;TABLE&gt;</tt> (w tym przypadku <tt>Szerokość tabeli</tt>: 200, <tt>Obramowanie wokół tabeli:</tt> 1). Wciśnij OK.</li>
	<li>Po ustaleniu parametrów tabeli wciśnij przycisk OK. Możesz tez skorzystać z opcji na liście rozwijanej obok przycisku OK w celu wstawienia kodu tabeli w odpowiednim formatowaniu.</li>
</ol>

<p>Drugim, bardziej złożonym narzędziem jest <a href="tool_table_quick2.php">Szybka tabelka</a> Narzędzie to pozwala łatwo i szybko stworzyć dowolną tabelę. Krok po kroku narzędzie będzie Ciebie prowadzić przez proces tworzenia tabeli - po kolei będziesz wybierać ilość wierszy i kolumn, ich formatowanie, opis tabeli itp..</p>

<h2>Zaawansowane narzędzia</h2>

<p>Bardziej wydajnym jednak narzędziem do tworzenia tabel jest <a href="tool_table_editor.php">Edytor tabel</a>. Po uruchomieniu tego narzędzia powinno ukazać się okno zawierające kilka zakładek. Każda z nich odpowiada za tworzenie i przedstawianie różnych elementów tabeli, jak wybór ilości kolumn i wierszy, obramowanie tabeli itp, ustawienia znaczników kolumn i wierszy, tworzenie i przypisywanie stylów, czy wreszcie podgląd gotowej tabeli i wygenerowanego kodu HTML. </p>


<h2>Polecenia wstawiania i edycji znaczników tabeli</h2>

<p>Jeśli chcesz szybko wstawić znacznik tabeli <tt>&lt;TABLE&gt;</tt>, bądź jej elementu (wiersz <tt>&lt;TR&gt;</tt>, komórka <tt>&lt;TD&gt;</tt>, opis <tt>&lt;CAPTION&gt;</tt>), możesz skorzystać z poleceń w <a href="main_menu_main.php">menu głównym</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_tables.php">Tabele</a>, bądź <a href="main_menu_htmlcode.php">Kod HTML</a> / <a href="main_menu_htmlcode_tables.php">Tabele</a>, a także z poleceń na <a href="toolbars_tables.php">pasku narzędzi Tabele i formularze</a>.</p>

<p>Po utworzeniu tabeli możesz edytować poszczególne znaczniki. Służą do tego okna edycji znaczników. Wystarczy postawić na wybranym znaczniku kursor i wcisnąć klawisz <tt>F5</tt>.</p>

<p>Innym sposobem edycji znaczników tabeli, jest skorzystanie z <a href="main_tabs_inspector_tags.php">Inspektora znaczników</a> na lewym panelu.</p> W tym celu postaw kursor na znaczniku i wciśnij klawisz <tt>F6</tt>. Jeśli Inspektor znaczników jest cały czas aktywny, opcje znacznika pojawią się na nim automatycznie po postawieniu na znaczniku kursora.


<h2>Zamiana tekstu na tabelę</h2>

<p>Pająk zawiera również narzędzie <a href="tool_text2table.php">Zamiana tekstu na tabelę</a>. Jest ono bardzo przydatne szczególnie w przypadku, gdy musisz ułożyć w tabeli tekst np. z pliku CSV (tekst oddzielany średnikami) itp. Narzędzie pozwala określić znak, który ma być używany jako separator kolumn, ustawić opcje znacznika <tt>&lt;TABLE&gt;</tt> itd.

<p>Narzędzie możesz uruchomić z <a href="main_menu_main.php">menu głównego</a> / <a href="main_menu_edit.php">Edycja</a> / <a href="main_menu_edit_change_selected.php">Zaznaczony tekst na...</a><i> Zaznaczony na tabelę</i>. Identyczne podmenu znajdziesz w <a href="main_menu_editor.php">menu kontekstowym edytora</a>, a także na pasku narzędzi <a href="toolbars_link_format.php">Odsyłacze, tekst i formatowanie</a>.</p>

<h2>Tworzenie tabel z baz danych</h2>

<p>W Pająku możliwe jest również tworzenie tabel na podstawie danych pobieranych z baz danych SQL. Więcej o tej tematyce można znaleźć w rozdziale poświęconym <a href="coding_mysql.php">bazom danych</a>.</p>

<h2>Najszybszy sposób wstawiania tła tabeli</h2>

Najszybszym sposobem wstawiania tła obrazka tła tabeli jest przeciągnięcie go z listy plików do edytora w obręb znacznika <tt>&lt;table&gt;</tt>. Otwarte zostanie <a href="tool_style_editor.php">narzędzie do edycji stylu</a>, w którym automatycznie będzie wprowadzona ścieżka do przeciąganego obrazka. Wystarczy kliknąć OK i... gotowe. Identycznie możesz wstawić tło do komórki i wiersza tabeli (<tt>&lt;td&gt;</tt>, <tt>&lt;th&gt;</tt>, <tt>&lt;tr&gt;</tt>),

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
	<li><a href="tool_table_quick.php">Bardzo szybka tabelka</a>
	<li><a href="tool_table_quick2.php">Szybka tabelka</a>
	<li><a href="tool_table_tag.php">Edytor znacznika TABLE</a>
	<li><a href="tool_table_row.php">Edytor znacznika wiersza tabeli TR</a>
	<li><a href="tool_table_cell.php">Edytor znacznika komórki tabeli TD</a>
	<li><a href="tool_text2table.php">Zamiana tekstu na tabelę</a>
	<li><a href="main_menu_tools_tables.php">Polecenia menu Narzędzia / Tabele</a>
	<li><a href="main_menu_tools_tables.php">Polecenia menu Kod HTML / Tabele</a>
	<li><a href="toolbars_tables.php">Pasek narzędzi Tabele i formularze</a>
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

</body>
</html>