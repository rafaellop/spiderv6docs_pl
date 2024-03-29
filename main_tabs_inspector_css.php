<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Zakładka "Inspektor CSS"</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<!-- topmenu start -->
<? include "include/topmenu.html"; ?>
<!-- topmenu end -->
	
<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Zakładka "Inspektor CSS"</h1>





<p>Zakładka "Inspektor CSS" służy do tworzenia i reedycji znaczników arkuszy stylów CSS.

<p>Okno zakładki podzielone zostało na trzy części:</p>
<ul>
	<li>Menu inspektora</li>
	<li>Listę właściwości stylu</li>
	<li>Okienko podglądu</li>
</ul>

<p>Możesz także wybrać sposób wyświetlania listy własności oraz zakres wyświetlanych własności (zgodność z poszczególnymi specyfikacjami CSS)</p>


<h2>Menu inspektora</h2>

<p>Menu inspektora składa się z następujących poleceń:</p>

<p> Kliknij, aby rozwinąć menu tworzenia klas i selektorów:</p>

<ul>
	<li> <b>Nowy selektor</b> - Tworzy nowy, pusty selektor bez nazwy</li>
	<li> <b>Nowy selektor na podstawie bieżącego</b> - Tworzy nowy, selektor bez nazwy, który będzie zawierał własności ustawione na liście</li>
	<li> <b>Nowa klasa</b> - Prosi o podanie nazwy i tworzy nową, pustą klasę</li>
	<li> <b>Nowa klasa na podstawie bieżącego</b> - Prosi o podanie nazwy i tworzy nową klasę, która będzie zawierała własności ustawione na liście</li>
	<li> <b><a href="tool_new_selector.php">Kreator selektora</a></b> - Uruchamia kreator nowego, pustego selektora</li>
	<li> <b><a href="tool_new_selector.php">Kreator selektora</a> na podstawie bieżącego</b> - Uruchamia kreator nowego, pustego selektora, który  będzie zawierał własności ustawione na liście</li>
</ul>
<br />


<p> Kliknij, aby rozwinąć menu z poleceniami wstawiania stylów za pomocą znacznika:</p>

<ul>
	<li> <b>Obejmij &lt;SPAN&gt; (inline)</b> - Kliknij, aby objąć zaznaczony tekst znacznikiem <tt>&lt;SPAN&gt;</tt> z atrybutem style, który będzie zawierał własności ustawione na liście</li>
	<li> <b>Obejmij &lt;SPAN&gt; (klasą)</b> - Kliknij, aby utworzyć nową klasę na podstawie ustawień na liście własności i objąć zaznaczony tekst znacznikiem <tt>&lt;SPAN&gt;</tt> z atrybutem class wskazującym na tę klasę</li>
	<li> <b>Obejmij &lt;DIV&gt; (inline)</b> - Kliknij, aby objąć zaznaczony tekst znacznikiem <tt>&lt;DIV&gt;</tt> z atrybutem style, który będzie zawierał własności ustawione na liście</li>
	<li> <b>Obejmij &lt;DIV&gt; (klasą)</b> - Kliknij, aby utworzyć nową klasę na podstawie ustawień na liście własności inspektora i objąć zaznaczony tekst znacznikiem <tt>&lt;DIV&gt;</tt> z atrybutem class wskazującym na tę klasę</li>
</ul>
<br />


<p> Kliknij, aby rozwinąć menu sterowania zawartością listy własności:</p>

<ul>
	<li>Wyświetla własności w formie listy</li>
	<li>Wyświetla własności w sposób pogrupowany</li>
	<li>Rozwiń wszystkie grupy</li>
	<li>Zwiń wszystkie grupy</li>
	<li>Wszystkie własności</li>
	<li>Zgodne z CSS1</li>
	<li>Zgodne z CSS2</li>
	<li>Zgodne z CSS3</li>
	<li>Zgodne z CSS Mobile 1</li>
</ul>
<br />


<p> <b>Pomoc</b> - otwiera to okno pomocy.</p>
<br />


<p><b>Lista klas i selektorów w dokumencie</b><br />
Lista zawiera wszystkie klasy i selektory istniejące w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach CSS. Elementy listy są pogrupowane na osadzone, oraz dołączone (podana jest nazwa pliki z arkuszami CSS). Wybierz z listy klasę, bądź selektor, który chcesz edytować.</p>

<a name="properties_list"></a>
<h2>Lista własności stylu</h2>

<p>Lista zawiera wszystkie właściwości dostępne w stylach CSS. Korzystając z menu możesz określić wygląd listy oraz zakres wyświetlanych własności (zgodność z poszczególnymi specyfikacjami CSS).</p>

<p>Jeśli wybierzesz opcję <b>Wyświetla własności w formie listy</b>, wszystkie własności zostaną wyświetlone w kolejności alfabetycznej w jednym ciągu. Jeśli natomiast wybierzesz <b>Wyświetla własności w sposób pogrupowany</b>, własności będą podzielone na grupy:</p>

<ul>
	<li>Bloki</li>
	<li>Czcionka</li>
	<li>Dźwięk</li>
	<li>Generowane</li>
	<li>Klasyfikacja</li>
	<li>Kolory i tło</li>
	<li>Paski przesuwu</li>
	<li>Strona</li>
	<li>Tabele</li>
	<li>Tekst</li>
	<li>Wizualne</li>
</ul>

<p><b>Uwaga!</b><br />
Jeśli którejś z grup nie widzisz, najpewniej włączyłeś ograniczenie wyświetlania własności do którejś ze specyfikacji.</p>

<p><b>Ctrl+F1 - kontekstowa pomoc do własności stylu</b><br>
Jeśli chcesz uzyskać pomoc do własności stylu, na której postawiony jest kursor, skorzsytaj ze skrótu klawiszowego Ctrl+F1. Więcej na ten temat w temacie <a href="coding_css_help.php">Wspomaganie dla CSS - Pomoc kontekstowa</a>.
</p>

<h2>Okienko podglądu</h2>

<p>Okienko podglądu znajduje się u dołu zakładki. Umożliwia ono podgląd formatowania wg ustawionych własności stylu przed wstawieniem go do dokumentu. Z prawej strony znajduje się przycisk:</p>

<p>&nbsp;<b>Wybór wykorzystywanej przeglądarki</b><br />
Kliknij, aby wybrać przeglądarkę używana do przeglądania w tej zakładce. O ile jest zainstalowana w systemie (<a href="main_preview_embed.php">czytaj więcej na ten temat</a>), możesz skorzystać z przeglądarki:
<ul>
	<li>MS Internet Explorer</li>
	<li>Mozilla</li>
</ul></p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_new_selector.php">Kreator nowego selektora</a>
	<li><a href="coding_css.php">Wspomaganie dla CSS w Pająku</a>
	<li><a href="tagdata_editor_tdf_css.php">Edytor plików definicyjnych znaczników CSS</a>
	<li><a href="main_tabs_general.php">Inne zakładki</a>
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
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>
