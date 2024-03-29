<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Formatowanie - Ustawienia dla jęz. znacznikowych</title>

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
<h1>Formatowanie - Ustawienia dla jęz. znacznikowych</h1>

<!-- treść pomocy -->
<p>W tym oknie możesz ustawić opcje dla istniejącego, bądź nowego stylu formatowania dla języków znacznikowych (jak HTML, XML).</p>

<p>Okno można wywołać za pomocą polecenia <b>Dodaj profil formatowania</b>, lub <b>Modyfikuj profil formatowania</b> w menu obok listy <b>Predefiniowane ustawienia formatowania znacznikowych</b> w oknie <a href="settings_codeinsight_formatter.php">Ustawienia programu - Formatowanie kodu źródłowego</a>. </p>




<h2>Globalne ustawienia</h2>

<p>W tej sekcji możesz ustawić opcje, które będą obowiązywały podczas formatowania całego dokumentu.</p>

<p><b>Nie ingeruj w zawartość znaczników</b><br />
Zaznacz ten przełącznik, aby podczas formatowania nie były dokonywane żadne zmiany wewnątrz znaczników.</p>

<p><b>Pojedyncze wcięcie</b><br />
Wybierz ile znaków m zostać użytych dla wcięcia jednego wiersza, oraz znak, jaki ma być użyty do wcinania (spacja lub tabulator).</p>

<p><b>Wielkość liter w znacznikach</b><br />
Wybierz wielkość liter, jaka ma być użyta w znacznikach:
<ul>
	<li>wielkie litery</li>
	<li>małe litery</li>
	<li>bez zmian</li>
</ul></p>




<h2>Formatowanie poszczególnych znaczników</h2>

Opcje tej sekcji pozwalają dopasować formatowanie wybranych znaczników. Możesz dodawać i usuwać znaczniki, które chcesz formatować, ustalać odstępy przed znacznikiem i po nim itd.

<p><b>Lista znaczników</b><br />
Na tej liście znajdują się znaczniki, które będą formatowane. Znaczniki dodajesz i usuwasz za pomocą przycisków poniżej listy, a ustawienia możesz możesz modyfikować za pomocą pól z prawej strony listy.</p>

<p>Pierwszą pozycją jest domyślna "<b>Pozostałe znaczniki</b>". Określa ona opcje formatowania dla wszystkich znaczników, które nie znalazły się na liście. Pozycji tej nie możesz ani usunąć, ani zmienić jej nazwy.</p>


<h2>Odstępy wokół znacznika</h2>

<p>Za pomocą opcji w tej grupie możesz ustawić odstępy, jakie mają być wstawione przed znacznikiem i po nim.</p>

<b>Zachowuj istniejące odstępy</b><br />
Zaznacz tę opcję, aby zachować istniejące w dokumencie odstępy między znacznikami.

<p><b>Modyfikuj odstępy</b><br />
Zaznacz tę opcję, jeśli chcesz mieć wpływ na odstępy między znacznikami.</p>

<p>Możliwe jest indywidualne wybranie odstępów dla :
<ul class=",">
	<li><b>znacznika otwierającego</b> - np. znacznik <tt>&lt;A&gt;</tt></li>
	<li><b>znacznika zamykającego</b> - np. znacznik <tt>&lt;/A&gt;</tt></li>
</ul></p>

<p>Dla każdej z wymienionych opcji możesz wybrać ustawienia odstępów przed i za znacznikiem.</p>

<p>Ustawienia odstępów <b>przed</b> znacznikiem:
<ul>
	<li><b>brak odstępu</b> - znacznik będzie umieszczony bezpośrednio za poprzedzającym go tekstem, lub innym znacznikiem. Wyjątkowo może być umieszczony w nowym wierszu, jeśli ustawienia dla poprzedzającego znacznika wymuszają wstawienie po nim pustej linii. Ustawienie takie powoduje, iż kod jest bardziej zwarty, lecz jednocześnie mniej czytelny,</li>
	<li><b>ewentualna spacja</b> - przed znacznikiem może być wstawiana spacja, jeśli przed i po znaczniku znajduje się czysty tekst (nie znacznik),</li>
	<li><b>od nowej linii</b> - znacznik będzie umieszczony w nowej linii. Powoduje lepszą czytelność kodu,</li>
	<li><b>dodaj puste linie</b> - pozwala podać ilość pustych linii, jaka ma być wstawiona przed znacznikiem (przydatne np. do wyróżnienia znacznika otwierającego nagłówek <tt>&ltH1&gt;</tt>).</li>
</ul></p>

<p>Ustawienia odstępów <b>po</b> znaczniku:
<ul>
	<li><b>brak odstępu</b> - następny element kodu (tekst, lub znacznik) będzie umieszczony bezpośrednio za aktualnym znacznikiem. Wyjątkowo następny znacznik może być umieszczony w nowym wierszu, jeśli tak ustawione jego opcje formatowania. Ustawienie takie powoduje, iż kod jest bardziej zwarty, lecz jednocześnie mniej czytelny.</li>
	<li><b>od nowej linii</b> - kolejny znacznik lub tekst będzie umieszczony w nowej linii. Powoduje lepszą czytelność kodu.</li>
	<li><b>dodaj puste linie</b> - pozwala podać ilość pustych linii, jaka ma być wstawiona po znaczniku (przydatne np. do wyróżnienia znacznika zamykającego nagłówek <tt>&lt/H1&gt;</tt>).</li>
</ul></p>




<h2>Inne ustawienia tego formatowania</h2>

<p><b>Wcinaj zawartość tego znacznika</b><br />
Zaznacz tę opcję, jeśli chcesz, by bieżący znacznik był wcinany zgodnie z ustawieniami globalnymi stylu formatowania.</p>

<p><b>Zachowuj zawartość tego znacznika</b><br />
Zaznacz tę opcję, jeśli chcesz zachować zawartość bieżącego znacznika dokładnie w takiej postaci, w jakiej jest w dokumencie. </p>


<p><b>Usuń ten znacznik z dokumentu</b><br />
Zaznacz ten przełącznik jeśli chcesz, by bieżący znacznik był usuwany z dokumentu podczas formatowania. Jest to przydatne do usuwania np. znaczników niepoprawnie obsługiwanych przez przeglądarki (np.  <tt>&ltBLINK&gt;</tt> obsługiwany jedynie przez przeglądarki Netscape)
<ul>
	<li><b>Usuń jedynie znacznik zamykający</b> - zaznacz tę opcję, by usunąć jedynie znaczniki zamykające. Jest to przydatne do usuwania znaczników zamykających, które nie są wymagane, lecz opcjonalnie mogą występować (np.  <tt>&lt/P&gt;</tt> na końcu akapitu,  <tt>&lt;/LI&gt;</tt> na końcu elementu listy itp.). Opcja ta jest aktywna jedynie przy zaznaczonym przełączniku <b>Usuń ten znacznik z dokumentu</b>.</li>
</ul>
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
	<li><a href="formatter_general.php">Korzystanie z funkcji formatowania</a>
	<li><a href="settings_codeinsight_formatter.php">Ustawienia formatowań</a>
	<li><a href="formatter_stylesheets.php">Ustawienia formatowania arkuszy stylów CSS</a>
	<li><a href="formatter_javascript.php">Ustawienia formatowania skryptów JavaScript</a>
	<li><a href="formatter_php.php">Ustawienia formatowania skryptów PHP</a>
   <li><a href="formatter_tidy.php">Ustawienia formatowania za pomocą programu Tidy</a>
	<li><a href="tool_htmlcompressor.php">Kompresor HTML</a>
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