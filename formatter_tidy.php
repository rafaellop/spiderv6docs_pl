
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Formatowanie - Ustawienia dla programu Tidy</title>

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
<h1>Formatowanie - Ustawienia dla programu Tidy</h1>

<!-- treść pomocy -->
<p>W tym oknie możesz ustawić opcje formatowania dla języków znacznikowych (jak HTML, XML), które zostaną przekazane jako parametry do zewnętrznego programu <a href="https://tidy.sourceforge.net/" target="_blank">Tidy(r)</a>. Możliwe jest także ustawienie opcji formatowania języków skryptowych. </p>

<p>Okno można wywołać za pomocą polecenia <b>Dodaj profil formatowania</b>, lub <b>Modyfikuj profil formatowania</b> w menu obok listy <b>Predefiniowane ustawienia formatowania Tidy(r)</b> w oknie <a href="settings_codeinsight_formatter.php">Ustawienia programu - Formatowanie kodu źródłowego</a>. </p>

Okno zostało podzielone na trzy zakładki:
<ul>
   <li><b>Wygląd kodu po formatowaniu</b></li>
   <li><b>Wprowadzane poprawki składni</b></li>
   <li><b>Ustawienia dotyczące języka dokumentu</b></li>
</ul>



<h2>Wygląd kodu po formatowaniu</h2>

<p>Opcje tej zakładki pozwalają na ogólne ustawienia dotyczące wyglądu kodu po sformatowaniu, ustawienie wcięć, wielkości liter itp.</p>

<p><b>Łamanie wierszy... na kolumnie</b><br />
Zaznacz tę opcję jeśli chcesz, by wiersze były łamane w określonej kolumnie. Następnie wybierz, w której kolumnie ma nastąpić łamanie wiersza.</p>

<p><b>Zawijaj wartości atrybutów</b><br />
Zaznacz tę opcję, by zezwolić na łamanie wiersza między nazwą, a wartością atrybutu znacznika, jeśli wartość ta nie będzie się mieściła w jednym wierszu (przekracza długość ustalonego wyżej wiersza). Ciąg wewnątrz wartości atrybutu nie będzie zmieniany, tzn. nie będzie tam wstawiany znak końca wiersza, nawet gdy nie będzie się ten wiersz mieścił w określonej wyżej długości wiersza.</p>

<p><b>Zawijaj łańcuchy znaków w skryptach</b><br />
Zaznacz tę opcję, jeśli chcesz zawijać wiersze w łańcuchach znaków użytych w skryptach. Jeśli łańcuchy znaków muszą pozostać niezmienione, nie zaznaczaj tej opcji!</p>

<p><b>Zawijaj linie w skryptach ASP (&lt;% ... %&gt;)</b><br />
Zaznacz tę opcję, jeśli chcesz zawijać wiersze w skryptach ASP (w bloku pomiędzy znakami <tt>&lt;%</tt> i <tt>%&gt;</tt>).</p>

<p><b>Zawijaj linie w JSTE (&lt;# ... #&gt;)</b><br />
Zaznacz tę opcję, jeśli chcesz zawijać wiersze w JSTE (w bloku pomiędzy znakami <tt>&lt;#</tt> i <tt> #&gt;</tt>).</p>

<p><b>Zawijaj linie w skryptach PHP</b><br />
Zaznacz tę opcję, jeśli chcesz zawijać wiersze w skryptach PHP (w bloku pomiędzy znakami <tt>&lt;?</tt> i <tt>?&gt;</tt>).</p>

<p><b>Zawijaj linię przed znacznikiem &lt;BR&gt;</b><br />
Zaznacz tę opcję, jeśli chcesz, by przed znacznikiem <tt>&lt;BR&gt;</tt> (znacznik HTML oznaczający łamanie wiersza) został wstawiony znak końca wiersza.</p>

<p><b>Każdy atrybut w nowej linii</b><br />
Zaznacz tę opcję, jeśli chcesz, aby każdy atrybut znacznika był umieszczany w nowej linii.</p>

<b>Wcięcia</b><br />
Wybierz czy i jakie wcięcia wierszy mają być ustawiane w dokumencie:
<ul>
   <li><b>tak</b></li>
   <li><b>automatycznie</b></li>
   <li><b>nie</b></li>
</ul>

<p><b>Wcięcie</b><br />
Wybierz głębokość pojedynczego wcięcia (ilość spacji).</p>

<p><b>Tabulacja</b><br />
Ustaw ilość spacji tworzących jeden znak tabulacji.</p>

<p><b>Znaczniki wielkimi literami</b><br />
Zaznacz ten przełącznik, aby zmienić wielkość wszystkich liter w nazwach znaczników na wielkie.</p>

<p><b>Atrybuty wielkimi literami</b><br />
Zaznacz ten przełącznik, aby zmienić wielkość wszystkich liter w nazwach atrybutów na wielkie.</p>



<h2>Wprowadzane poprawki składni</h2>

<p>W tej zakładce możesz ustawić szczegółowe opcje dotyczące formatowania znaczników.</p>

<p><b>Usuń puste akapity (<tt>&lt;P&gt; &lt;/P&gt;</tt>)</b><br />
Zaznacz tę opcję, by usunąć wszystkie puste akapity. Są one najczęściej wstawiane przez edytory typu WYSIWYG</p>

<p><b>Obejmij luźno napisany tekst znacznikami akapitów (<tt>&lt;P&gt; &lt;/P&gt;</tt>)</b><br />
Zaznacz tę opcję, jeśli chcesz, by tekst umieszczony bezpośrednio w dokumencie (lecz nie w tabeli itp.) został objęty znacznikami akapitu (<tt>&lt;P&gt; &lt;/P&gt;</tt>).</p>

<b>Obejmij znacznikami akapitów tekst wewnątrz innych znaczników</b><br />
Zaznacz tę opcję, jeśli chcesz, by tekst umieszczony pomiędzy innymi znacznikami (np. w tabeli itp.) został objęty znacznikami akapitu (<tt>&lt;P&gt; &lt;/P&gt;</tt>).</p>


<p><b>Zamieniaj&lt;B&gt; i &lt;I&gt; na &lt;EM&gt; oraz &lt;STRONG&gt;</b>
Zaznacz tę opcję, jeśli chcesz, zamienić znaczniki określające wyłącznie formatowanie na znaczniki określające znacznie (wagę, typ) objętego nimi tekstu:
<ul>
   <li><tt>&lt;B&gt;</tt> na <tt>&lt;STRONG&gt;</tt></li>
   <li><tt>&lt;I&gt;</tt> na <tt>&lt;EM&gt;</tt></li>
</ul></p>


<p><b>Zastąp przestarzałe formatowanie stylami</b><br />
Zaznacz tę opcje, jeśli chcesz, by znaczniki oznaczone w specyfikacji HTML jako przestarzałe zostały zastąpione stylami CSS.</p>

<p><b>Usuwaj znaczniki &lt;FONT&gt;</b><br />
Zaznacz tę opcję, by znaczniki <tt>&lt;FONT&gt;</tt> zostały usunięte z dokumentu. Znaczniki te w specyfikacji HTML oznaczone są jako przestarzałe (<i>depreceted</i>).</p>

<p><b>Usuń dodatkowe metainformacje Worda 2000</b><br />
Zaznacz tę opcję, jeśli chcesz, by program usuwał z dokumentu dodatkowe informacje umieszczane w nim podczas eksportu tekstu z programu MS Word do postaci dokumentu HTML. Dane te najczęściej nie są niezbędne, a powodują znaczne pogorszenie czytelności kodu HTML.

<p><b>Preferuj encje numeryczne</b><br />
Zaznacz tę opcję, by encje (czyli specjalne ciągi znaków powodujące wyświetlenie w przeglądarce odpowiedniego symbolu) inne niż wbudowane w HTML (&amp;amp;, &amp;lt;, &amp;gt; oraz &amp;quot;) były zamieniane z postaci tekstowej na postać numeryczną (np. encja tekstowa oznaczająca znak &frac12; to <tt>&amp;frac12;</tt>, a jej postać to <tt>&amp;#189;</tt>). Należy zauważyć, że użyte zostaną tylko encje zgodne z zadeklarowanym <tt>DOCTYPE</tt></p>

<p><b>Zapisuj niełamliwe spacje jako encje</b><br />
Zaznacz tę opcję, by niełamliwe (twarde) spacje zamieniane były na encję &amp;nbsp;.</p>

<p><b>Zamieniaj " i ' na encje</b><br />
Zaznacz tę opcję, by znaki cudzysłowów w tekście były zamieniane na encje (odpowiednio &amp;quot; i &amp;#39;)</p>

<p><b>Zamianiaj znak &amp; na encje</b><br />
Zaznacz tę opcję, by znaki &amp; w tekście były zamieniane na encję &amp;.</p>



<p><b>Zamieniaj \ na / w adresach URL</b><br />
Zaznacz tę opcję, by znak <tt>\</tt> w adresach URL został zamieniony na <tt>/</tt>. Znak <tt>\</tt> jest używany w systemie MS Windows i  wstawiany przez programy przy wpisywaniu ścieżek względnych.</p>

<p><b>Nie ruszaj whitespace w atrybutach</b><br />
Zaznacz tę opcję, by puste miejsca (spacje, znaki końca wiersza) w atrybutach znacznika były pozostawione dokładnie w takiej samej postaci.</p>

<p><b>Popraw błędne komentarze</b><br />
Zaznacz tę opcję, aby poprawić błędne komentarze, zawierające niedozwolone znaki, np. komentarz w komentarzu itp.</p>

<p><b>Domyślny opis grafiki (ALT) w &lt;IMG&gt;</b><br />
Wprowadź w tym polu tekst, jaki ma zostać umieszczony w opisie grafiki (jeśli nie został wpisany w znaczniku).</p>




<h2>Ustawienia dotyczące języka dokumentu</h2>

<p>W tym miejscu możesz ustawić opcje określające typ dokumentu, jaki ma być formatowany za pomocą aktualnego stylu formatowania.</p>

<b>Parsing instructions wymagają ?></b><br />
Zaznacz tę opcję, jeśli program powinien zamieniać w <tt>processing instructions</tt> ograniczniki z "<tt>></tt>" na wymaganą postać "<tt>?></tt>".

<p><b>Dokument wejściowy w XMLu</b><br />
Zaznacz tę opcję, jeśli aktualny dokument jest dokumentem XML.</p>

<p><b>Dokument wyjściowy w XMLu</b><br />
Zaznacz tę opcję, jeśli dokument ma zostać sformatowany zgodnie ze specyfikacją XML.</p>

<p><b>Dokument wyjściowy w XHTMLu</b><br />
Zaznacz tę opcję, jeśli dokument ma zostać sformatowany zgodnie ze specyfikacją XHTML</p>

<p><b>Dodaj deklarację &lt;?xml?&gt;</b><br />
Zaznacz tę opcję, jeśli chcesz, bo do dokumentu została wstawiona deklaracja dotycząca wersji XML w dokumentach XML lub XHTML.</p>

<p><b>Dodaj processing instructions XML</b><br />
Zaznacz tę opcję, jeśli chcesz dodać do dokumentu XML instrukcje przetwarzania (<i>processing instructions</i>).</p>

<p><b>Pomijaj opcjonalne znaczniki zamykające</b><br />
Zaznacz tę opcję, jeśli chcesz pominąć opcjonalne znaczniki zamykające (jak np. <tt>&lt;/LI&gt;</tt>, <tt>&lt;/P&gt;</tt>).</p>

<p><b>Dodawaj xml:space="preserve" gdy trzeba</b><br />
Zaznacz tę opcję, jeśli chcesz by do dokumentu została wstawiona konstrukcja <tt>xml:space="preserve"</tt>, gdy jest wymagana przez specyfikację.</p>

<p><b>Typ dokumentu</b><br />
Wybierz z listy typ dokumentu (DOCTYPE) jaki ma zostać wygenerowany przez program, bądź określ własny (wprowadź w polu niżej).</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="formatter_general.php">Korzystanie z funkcji formatowania</a></li>
   <li><a href="settings_codeinsight_formatter.php">Ustawienia formatowań</a></li>
   <li><a href="formatter_markuplangs.php">Ustawienia formatowania dokumentów znacznikowych</a></li>
   <li><a href="formatter_javascript.php">Ustawienia formatowania skryptów JavaScript</a></li>
   <li><a href="formatter_php.php">Ustawienia formatowania skryptów PHP</a></li>
   <li><a href="formatter_stylesheets.php">Ustawienia formatowania arkuszy CSS</a></li>
   <li><a href="tool_htmlcompressor.php">Kompresor HTML</a></li>
   <li><a href="https://tidy.sourceforge.net/docs/quickref.php" target="_blank">Opis opcji konfiguracyjnych TIDY (wymaga połączenia z internetem, otwiera się w nowym oknie)</a></li>
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
