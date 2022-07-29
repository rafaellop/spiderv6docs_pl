<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Edytor szablonów - prawa strona, środek, lewa strona szablonu</title>

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
<h1>Edytor szablonów - prawa strona, środek, lewa strona szablonu</h1>

<!-- treść pomocy -->

<p>Poniżej części z ustawieniami szablonu znajdują się zakładki, w których tworzona będzie zawartość szablonu.</p>

<h2>Znaczenie lewej, środkowej i prawej części szablonu</h2>

<p>Trzy pierwsze zakładki o nazwach "Lewa strona szablonu", "Środkowy szablon", "Prawa strona szablonu" zawierają okna, w których wpisywana będzie zasadnicza treść szablonu. Okna są identyczne, mają jednak różne znaczenie podczas używania szablonu.</p>

<p><b>Lewa część szablonu</b> - w zależności od wybranej podczas wstawiania opcji:
<ul>
   <li><b>Wstaw szablon w pozycji kursora</b>, lub <b>Wstaw szablon bez środka</b> - zostanie wstawiona z lewej strony kursora, lub zaznaczonego w edytorze tekstu,</li>
   <li><b>Wstaw szablon z lewą częścią do HEAD</b> - zostanie wstawiona do sekcji HEAD dokumentu HTML. Jeśli dokument, do którego wstawiany jest szablon nie posiada sekcji HEAD, zostanie ona utworzona,</li>
   <li><b>Utwórz nowy dokument z szablonu</b> - zostanie wstawiona jako pierwsza do dokumentu.</li>
</ul></p>


<p></p><b>Środkowa część szablonu</b> - w zależności od wybranej podczas wstawiania opcji:
<ul>
   <li><b>Wstaw szablon w pozycji kursora</b> - zostanie wstawiona za kursorem. Jeśli w edytorze był zaznaczony tekst, zostanie on nadpisany przez zawartość środkowej części. Jeśli nie zdefiniowano środkowej części (jest pusta), znaczony tekst pozostanie nienaruszony.</li>
   <li><b>Wstaw szablon bez środka</b> - nie zostanie użyta. Jeśli w edytorze jest znaczony tekst, pozostanie on nienaruszony.</li>
   <li><b>Wstaw szablon z lewą częścią do HEAD</b> - zostanie wstawiona z lewej strony kursora. Jeśli w edytorze jest znaczony tekst, pozostanie on nienaruszony.</li>
   <li><b>Utwórz nowy dokument z szablonu</b> - zostanie wstawiona jako druga do dokumentu.</li>
</ul></p>

<p><b>Prawa część szablonu</b> - w zależności od wybranej podczas wstawiania opcji:
<ul>
   <li><b>Wstaw szablon w pozycji kursora</b>, <b>Wstaw szablon bez środka</b>, lub <b>Wstaw szablon z lewą częścią do HEAD</b> - zostanie wstawiona z prawej strony kursora, lub zaznaczonego w edytorze tekstu,</li>
      <li><b>Utwórz nowy dokument z szablonu</b> - zostanie wstawiona jako trzecia do dokumentu.</li>
</ul></p>

<h2>Okno wpisywania treści</h2>

<p>Okno wpisywania treści szablonu składa się z dwóch części - menu i okna tekstowego. </p>

<p>Menu zawiera ikony umożliwiające tworzenie i wstawianie: <a href="macrocodes_editor_vars.php">zmiennych</a> i <a href="macrocodes_editor_blocks.php">bloków</a>.</p>

<ul>
   <li><b>Zmienne</b> - lista zawiera nazwy wszystkie zmiennych zdefiniowanych w szablonie,</li>
   <li><b>Dodanie nowej zmiennej</b> - kliknij aby utworzyć nową zmienną (tylko dodaje zmienną, ale nie powoduje automatycznego jej wstawienia w treść szablonu). Do tworzenia nowych i edycji istniejących zmiennych służy okno <a href="macrocodes_editor_addvar.php">Edycja zmiennej szablonu</a>.</li>
   <li><b>Wstawienie wybranej zmiennej</b> - kliknij aby wstawić wywołanie zmiennej do treści szablonu. W chwili użycia szablonu w miejsce symbolu podstawiona zostanie wartość zmiennej.</li>
</ul>
<ul>
   <li><b>Bloki</b> - lista zawiera nazwy wszystkich bloków zdefiniowanych w szablonie</li>
   <li><b>Dodanie nowego bloku</b> - kliknij aby dodać nowy blok (tylko dodaje blok, ale nie powoduje automatycznego wstawienia w treść szablonu). Do tworzenia nowych i edycji istniejących bloków służy okno <a href="macrocodes_editor_addblock.php">Edycja bloku szablonu</a>.</li> 
   <li><b>Wstawienie wybranego bloku</b> - kliknij aby wstawić do treści szablonu symbol bloku wybranego na liście. W chwili użycia szablonu w miejsce symbolu podstawiona zostanie zawartość bloku (jeśli będzie włączony), lub symbol zostanie usunięty z treści szablonu (jeśli blok będzie wyłączony).</li>
</ul>

<p>Poniżej menu znajduje się okno tekstowe. W nim właśnie wpisywana jest treść szablonu.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="macrocodes_editor.php">Edytor szablonów - wstęp</a>
   <li><a href="macrocodes_editor_vars.php">Edytor szablonów - zmienne</a>
   <li><a href="macrocodes_editor_blocks.php">Edytor szablonów - bloki</a>
   <li><a href="settings_macrocodes.php">Ustawienia programu - Szablony</a>
   <li><a href="main_tabs_macrocodes.php">Zakładka Szablony</a>
   <li><a href="macrocodes.php">Szablony - ogólnie</a>
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