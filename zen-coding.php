<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Wsparcie dla biblioteki zen-coding w Pająku</title>
<style type="text/css">

</style>

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
 <h1>Wsparcie dla biblioteki zen-coding w Pająku</h1>




<p>Zen-coding to biblioteka JavaScript stworzona pierwotnie przez Sergeya Chikuyonoka, a obecnie rozwijana na licencji MIT. Założeniem twórców tej biblioteki było ułatwienie i przyspieszenie tworzenia kodu przez autorów stron WWW z wykorzystaniem (x)HTML, CSS, XML lub jakiegokolwiek innego ustrukturyzowanego formatu kodu. Podstawową funkcją biblioteki zen-coding jest mechanizm rozwijania skrótów, które można szybko napisać, w duże struktury kodu. Przykładowo wpisanie poniższego kodu:</p>

<pre>
div#page>div.logo+ul#navigation>li*5>a
</pre>

<p>i wywołanie polecenia rozwijania kodu, spowoduje zastąpienie powyższego skrótu przez kod:</p>

<pre>
&lt;div id="page"&gt;
        &lt;div class="logo"&gt;&lt;/div&gt;
        &lt;ul id="navigation"&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
&lt;/div&gt;
</pre>

<p>Mechanizm skrótów posiada strukturę modułową, dzięki której możliwe jest rozwijanie kodu w różnych językach. Aktualnie zen-coding wspiera języki CSS, HTML, XML/XSL i HAML. Ze składnią zen-coding oraz przykładami skróty znaleźć można na <a href="#zen-coding-examples">dole strony</a>.</p>

<h2>Aktualne funkcje mechanizmu rozwijania skrótów w zen-coding</h2>

<ul>
	<li>atrybuty ID i CLASS: np.<tt> div#page.section.main</tt></li>
	<li>Atrybuty użytkownika: np. <tt>div[title]</tt>, <tt>a[title="Hello world" rel]</tt>, <tt>td[colspan=2]</tt></li>
	<li>Powielanie elementów: np. <tt>li*5</tt> da w wyniku znacznik &lt;li&gt; powielony pięć razy.</li>
	<li>Numerowanie elementów przy użyciu znaku '$': np. <tt>li.item$*3</tt> da w wyniku znacznik &lt;li&gt; tag powielony trzy razy, a znak '$' zostanie zastąpiony numerem elementu.</li>
	<li>Wielokrotne użycie znaku '$' powoduje wyrównanie liczby zerami: np. <tt>li.item$$$</tt> da to samo co <tt>li.item001<</tt>/li>
	<li>Grupowanie skrótów z nieskończonym zagnieżdżaniem: np. <tt>div#page>(div#header>ul#nav>li*4>a)+(div#page>(h1>span)+p*2)+div#footer</tt>. Można dosłownie zapisać skrótem cały dokument w jednym wierszu kodu!</li>
	<li>Obsługa filtrów (<a href="https://code.google.com/p/zen-coding/wiki/Filters" target="_blank">więcej o filtrach</a> na stronie zen-coding)</li>
	<li>Można pomijać pisanie znacznika div gdy element skrótu zaczyna się od ID lub CLASS: np. <tt>#content>.section</tt> daje w wyniku to samo co div#content&gt;div.section</li>
</ul>

<p>Zen-coding to nie tylko mechanizm rozwijania skrótów. Biblioteka oferuje również wyjątkowo przydatne akcje dla twórców stron WWW jak: obejmowanie tekstu kodem rozwijanym ze skrótów, zwijanie znaczników, komentowanie kodu, usuwanie znaczników, itp. Pająk natomiast jest jednym z niewielu edytorów kodu, które w pełni wspierają bibliotekę Zen-Coding!</p>

<h1>Wykorzystanie biblioteki zen-coding w Pająku</h1>

<p>Pełne wsparcie dla wszystkich funkcji zen-coding oferowane jest przez niewielką liczbę programów, a Pająk należy do tej grupy oferując następujące polecenia zen-coding (w nawiasach podano domyślne skróty klawiszowe, które można zmodyfikować w <a href="settings_toolbars_hotkeys.php">oknie ustawień skrótów klawiszowych</a>):</p>

<ul>
	<li>Rozwiń skrót (Alt+E)</li>
	<li>Obejmij rozwiniętym skrótem (Ctrl+Alt+W)</li>
	<li>Odpowiadające znaczniki w tył (Alt+Strzałka w górę)</li>
	<li>Odpowiadające znaczniki w przód (Alt+Strzałka w dół)</li>
	<li>Przejdź do miejsca edycji w przód (Alt+Strzałka w prawo)</li>
	<li>Przejdź do miejsca edycji w tył (Alt+Strzałka w lewo)</li>
	<li>Usuń znacznik (Alt+Del)</li>
	<li>Połącz wiersze (Alt+M)</li>
	<li>Znacznik skrócony/rozwinięty (Alt+J)</li>
	<li>Obejmij komentarzem (Alt+K)</li>
	<li>Odpowiadające znaczniki (Alt+P)</li>
	<li>Zaznacz wiersz (Alt+L)</li>
</ul>

<p>Polecenia te są również dostępne z poziomu <a href="main_menu_tools.php">menu Narzędzia</a> / Polecenia zen-coding oraz na pasku narzędzi <a href="toolbars_often.php">Często używane</a>.</p>

<p>Teraz prosty przykład wykorzystania zen-coding w Pająku. Najpierw dość skompikowany, aby zobaczyć całą magię Proszę zatem otworzyć nowy, pusty dokument i wkleić w nim następujący kod:</p>

<pre>
table+
</pre>

<p>Po wklejeniu tego tekstu, proszę ustawić kursor tekstowy na końcu (za <i>footer</i>) i wywołać polecenie "zen-coding: Rozwiń Skrót" z menu <a href="main_menu_tools.php">Narzędzia</a> / Polecenia zen-coding lub uruchomić to polecenie za pomocą skrótu klawiszowego ALT+E. W efekcie wprowadzony skrót rozwinie się do postaci:</p>

<pre>
&lt;table&gt;
 &lt;tr&gt;
  &lt;td&gt;&lt;/td&gt;
 &lt;/tr&gt;
&lt;/table&gt;
</pre>

<p>A teraz bardziej skomplikowany, jakby magiczny przykład tego, jak bardzo zen-coding przyspiesza kodowanie. Wpiszmy w edytorze następujący fragment:</p>

<pre>
O mnie
Moje strony
Aktualności
Blog
Kontakt
</pre>

<p>Następnie skorzystajmy z funkcji obejmowania rozwinięciem skrótu. Zaznaczmy cały wpisany wyżej tekst i uruchamiamy polecenie objęcia zaznaczonego tekstu rozwiniętym skrótem za pomocą ww. menu lub skrótu klawiszowego (CTRL+ALT+W). Wyświetlone zostanie okienko, w którym należy podać skrót. Wprowadź w to okienko na przykład skrót:</p>

<pre>
div#header>ul#navigation>li.item$*>a>span
</pre>

<p>i kliknij przycisk OK. W efekcie powstanie następująca zawartość, a kursor ustawi się w miejscu dogodnym do wprowadzenia adresu URL dla pierwszej pozycji menu!</p>

<pre>
&lt;div id="header"&gt;
	&lt;ul id="navigation"&gt;
		&lt;li class="item1"&gt;&lt;a href=""&gt;&lt;span&gt;O mnie&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;li class="item2"&gt;&lt;a href=""&gt;&lt;span&gt;Moje strony&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;li class="item3"&gt;&lt;a href=""&gt;&lt;span&gt;Aktualności&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;li class="item4"&gt;&lt;a href=""&gt;&lt;span&gt;Blog&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
		&lt;li class="item5"&gt;&lt;a href=""&gt;&lt;span&gt;Kontakt&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</pre>

<p>To tylko dwa proste przykłady dotyczące HTML. <a href="#zen-coding-examples">Więcej przykładów</a> znaleźć można poniżej, w opisie składni skrótów zen-coding. Oprócz HTML, zen-coding umożliwia rozwijanie kodu CSS, XML, a Pająk automatycznie przełącza sposób działania zen-coding, bazując na aktualnie edytowanym typie dokumentu lub bloku, w którym znajduje się kursor, np. w kodzie CSS lub dokumencie XML. Przykładowo w dokumencie CSS lub w bloku &lt;script&gt;&lt;/script&gt; rozwinięcie kodu: <tt>fl:l|fc</tt> spowoduje wygenerowanie kodu: <tt>float: left;</tt> </p>

<p>Kod źródłowy biblioteki zen-coding wykorzystywanej przez Pająka znajduje się w katalogu <i>Settings/zen-coding</i> w pliku <i>ispidey_zencoding.js</i>.</p>

<a name="zen-coding-examples">&nbsp;</a>
<h2>Składnia zen-coding, przykłady i ich rozwinięcia</h2>

<pre>
Składnia: <b>E#name</b>

Przykład: div#name
Rozwinięcie: &lt;div id="name"&gt;&lt;/div&gt;
</pre>

<pre>
Składnia: <b>E.name</b>

Przykład: div.name
Rozwinięcie: &lt;div class="name"&gt;&lt;/div&gt;

Przykład: div.one.two
Rozwinięcie: &lt;div class="one two"&gt;&lt;/div&gt;

Przykład: div#name.one.two
Rozwinięcie: &lt;div id="name" class="one two"&gt;&lt;/div&gt;
</pre>

<pre>
Składnia: <b>E>E</b>

Przykład: head>link

Rozwinięcie:
&lt;head&gt;
    &lt;link/&gt;
&lt;/head&gt;

Przykład: table>tr>td

Rozwinięcie:
&lt;table&gt;
&lt;tr&gt;
    &lt;td&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;

Przykład: ul#name>li.item

Rozwinięcie:
&lt;ul id="name"&gt;
    &lt;li class="item"&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

<pre>
Składnia: <b>E+E</b>

Przykład: p+p

Rozwinięcie:
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;

Przykład: div#name>p.one+p.two

Rozwinięcie:
&lt;div id="name"&gt;
    &lt;p class="one"&gt;&lt;/p&gt;
    &lt;p class="two"&gt;&lt;/p&gt;
&lt;/div&gt;
</pre>

<pre>
Składnia: <b>E[attr]</b>

Przykład: p[title]
Rozwinięcie: &lt;p title=""&gt;&lt;/p&gt;

Przykład: td[colspan=2]
Rozwinięcie: &lt;td colspan="2"&gt;&lt;/td&gt;

Przykład: span[title="Hello" rel]
Rozwinięcie: &lt;span title="Hello" rel=""&gt;&lt;/span&gt;
</pre>

<pre>
Składnia: <b>E|filter</b>

Przykład: p.title|e
Rozwinięcie: &lt;p class="title"&gt;&lt;/p&gt;
</pre>

<pre>
Składnia: <b>E*N</b>

Przykład: p*3
Rozwinięcie:
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;

Przykład: ul#name>li.item*3
Rozwinięcie:
&lt;ul id="name"&gt;
    &lt;li class="item"&gt;&lt;/li&gt;
    &lt;li class="item"&gt;&lt;/li&gt;
    &lt;li class="item"&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

<pre>
Składnia: <b>E*N$</b>

Przykład: p.name-$*3
Rozwinięcie:
&lt;p class="name-1"&gt;&lt;/p&gt;
&lt;p class="name-2"&gt;&lt;/p&gt;
&lt;p class="name-3"&gt;&lt;/p&gt;

Przykład: select>option#item-$*3
Rozwinięcie:
&lt;select&gt;
    &lt;option id="item-1"&gt;&lt;/option&gt;
    &lt;option id="item-2"&gt;&lt;/option&gt;
    &lt;option id="item-3"&gt;&lt;/option&gt;
&lt;/select&gt;
</pre>

<pre>
Składnia: <b>E+</b>

Przykład: ul+
Rozwinięcie:
&lt;ul&gt;
    &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;

Przykład: table+
Rozwinięcie:
&lt;table&gt;
&lt;tr&gt;
    &lt;td&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;

Przykład: dl+
Rozwinięcie:
&lt;dl&gt;
    &lt;dt&gt;&lt;/dt&gt;
    &lt;dd&gt;&lt;/dd&gt;
&lt;/dl&gt;
</pre>

<br><br><small>Przygotowano na podstawie <a href="https://code.google.com/p/zen-coding/" target="_blank">dokumentacji zen-coding</a></small>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="https://code.google.com/p/zen-coding/" target="_blank">Dokumentacja zen-coding online</a></li>
	<li><a href="main_editor_navigation.php">Różne sposoby nawigacji po dokumencie</a></li>
	<li><a href="main_menu_tools_navigation.php">Polecenia ułatwiające nawigację po dokumencie</a></li>
	<li><a href="main_tabs_navigator.php">Zakładka nawigator</a></li>
	<li><a href="settings_toolbars.php">Ustawienia programu - Ustawienia pasków, menu i skrótów</a></li>
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