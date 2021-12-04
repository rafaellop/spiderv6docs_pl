<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<!-- nazwa strony pomocy -->
<title>Wspomaganie dla CSS</title>

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
<h1>Wspomaganie dla CSS</h1>

<!-- treść pomocy -->




<p>Kaskadowe arkusze stylów (CSS - ang. <i>Cascading Style Sheets</i>) są rekomendowanym sposobem formatowania tekstu. Za ich pomocą możesz również określać wygląd i zachowanie się innych elementów strony, jak np. obrazki w tle, dźwięki, wygląd przycisków i pól formularzy, i wiele innych. </p>

<p>Pająk wspomaga tworzenie stron z wykorzystaniem CSS, na co składają się następujące funkcje i narzędzia:

<ul>
   <li><a href="main_tabs_inspector_css.php">Zakładka "Inspektor CSS" na lewym panelu zasobów</a>
   <li><a href="coding_css_syntax.php">Kolorowanie składni</a></li>
   <li><a href="coding_css_codeinsight.php">Dynamiczny kod</a></li>
   <li><a href="main_tabs_navigator.php#css">Nawigator CSS</a></li>
   <li><a href="coding_css_help.php">Pomoc kontekstowa dla CSS na dolnym panelu</a>
   <li><a href="coding_css_macrocodes.php">Makrokody - szablony dokumentów wykorzystujące CSS</a></li>
   <li><a href="coding_css_formatting.php">Formatowanie kodu arkuszy stylów</a></li>
</ul></p>

<p>Wiele narzędzi służących do edycji znaczników posiada również opcje do <a href="tool_style_editor.php">tworzenia stylów CSS</a> i <a href="tool_style_class.php">używania klas</a>.</p>


<h2>Tworzenie prostego selektora CSS w bieżącym dokumencie</h2>

<p><b>Utworzenie nowego, pustego selektora</b><br />

<p>W celu utworzenia prostego arkusza CSS włącz zakładkę <a href="main_tabs_inspector_css.php">Inspektor CSS</a> (standardowy skrót <tt>Ctrl+3</tt>). Następnie użyj polecenia <b>Nowy selektor</b> . Utworzy się sekcja stylu w bieżącym dokumencie i szkielet pustego selektora bez nazwy.</p>

<p>Teraz trzeba nadać nazwę selektorowi - może to być np. nazwa znacznika - <tt>DIV</tt>. Wpisz ją przed nawiasem klamrowym <tt><b>{</b></tt>. W ten sposób sprawimy, że wszystkie znaczniki <tt>DIV</tt> w dokumencie będą korzystały z tego stylu.</p>

<p><b>Jak tworzyć i edytować własności stylu?</b></p>

<p>Kolejną, najważniejszą czynnością jest utworzenie stylu. Postaw kursor pomiędzy nawiasami <tt><b>{</b></tt> i <tt><b>}</b></tt> i przejdź do Inspektora CSS. W górnej części zakładki, na liście z prawej strony pojawi się nazwa selektora <tt>DIV</tt>.</p>

<p>Wcześniej tylko przygotowywałeś dokument do tworzenia stylu - w tym momencie zaczynasz naprawdę tworzyć styl dla wybranego znacznika. Styl tworzony jest za pomocą przypisywania odpowiednich wartości do własności stylu, które zostały umieszczone na liście poniżej menu. Własności te domyślnie są pogrupowane w kategorie, możesz to jednak zmienić (<a href="main_tabs_inspector_css.php">więcej w pomocy do Inspektora CSS</a>).</p>

<p>W celu ułatwienia wprowadzania wartości dla własnościCSS skorzystaj z dedykowanych narzędzi umożliwiających wybór czcionki, koloru itp. Możesz je otworzyć za pomocą przycisków znajdujących się z prawej strony pola do wpisywania wartości. W każdym takim polu znajdują się odpowiednie narzędzia dostosowane do wymaganych w nim wartości.</p>

<p><b>Tworzenie stylu dla nowego selektora</b><br />

<p>Aby ustawić formatowania czcionki, rozwiń kategorię <b>Czcionka</b> i ustaw odpowiednie własności stylu, np:
<ul>
   <li><b>font family</b>: <tt>Arial, Tahoma, sans-serif</tt> <br />(krój czcionki - pomoże Ci w wyborze okno <a href="tool_fonts_select.php">Wybierz czcionki</a>)</li>
   <li><b>font-size</b>: <tt>9pt</tt> <br />(rozmiar czcionki - pomocą służą: lista wartości predefiniowanych oraz lista możliwych do ustawienia opcji)</li>
</ul></p>

Kolor tekstu (w tym przykładzie bordowy) ustaw w kategorii <b>Kolory i tło</b>:
<ul>
 <li><b>color</b>: <tt>#800000</tt> <br />(skorzystaj z okna <a href="tool_colorpalette.php">Paleta kolorów</a>)</li>
</ul>



<p>Opcje układu tekstu ustawisz w kategorii <b>Tekst</b>:
<ul>
 <li><b>tekst-align</b>: <tt>justify</tt> <br />(wyrównanie tekstu - pomoże lista, na której są podane dopuszczalne wartości)</li>
 <li><b>text-indent</b>: <tt>2em</tt> <br />(pomoże okno umożliwiające wybór liczby z jednostką)</li>
</ul></p>


<p><b>Podsumowanie</b></p>

<p>Powyżej opisany został prosty (jednak chyba najczęściej stosowany) przykład wykorzystania arkuszy stylów CSS. Przeglądając zawartość listy własności, znajdziesz na niej o wiele więcej możliwości formatowania tekstu i innych elementów strony. Możesz wpływać na wygląd tabel, pasków przesuwania (obecnie tylko w Internet Explorerze), powiększenie, położenie i widoczność elementów, i wiele, wiele więcej. Możliwe jest np. wykorzystanie różnych stylów na ekranie i do wydruku.</p>

<p>Wykorzystując języki skryptowe jednocześnie z językami HTML i CSS, otrzymasz nową technologię DHTML (Dynamic HTML), która oferuje prawie nieograniczoną swobodę w kreacji serwisu.</p>

<p>Nazwy własności CSS w wielu przypadkach same tłumaczą swoje przeznaczenie. Jeśli jednak nie wiesz, do czego służy dana własność, przesuń kursor myszki nad nazwę danej własności i poczekaj chwilę - pojawi się podpowiedź w dymku.</p>


<h2>Jak korzystać z zewnętrznych plikow CSS</h2>

<p>Najwygodniejszym sposobem tworzenia arkuszy stylów jest stworzenie oddzielnego pliku, w którym zapisane będą wszystkie wykorzystane w dokumentach selektory, klasy itd. Dzięki temu ewentualne zmiany w tym pliku odniosą skutek w obrębie wszystkich dokumentów, do którego zostaną dołączone.</p>
<p>Dołączenie pliku *.css do dokumentu jest banalnie proste - wystarczy przeciągnąć go z listy plików do dokumentu otwartego w edytorze. Pająk automatycznie utworzy i wklei do dokumentu odpowiedni kod. W ten sposób możesz tworzyć zarówno łącza do plików *.css w dokumentach HTML (utworzony zostanie znacznik <tt>&lt;link&gt;</tt>), jak i łączyć ze sobą kilka plików CSS (wstawiona zostanie instrukcja <tt>@import</tt>).</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="syntax.php">Kolorowanie składni w Pająku</a>
   <li><a href="main_editor_codeinsight.php">Dynamiczny kod</a></li>
   <li><a href="main_tabs_navigator.php">Zakładka "Nawigator"</a></li>
   <li><a href="main_tabs_macrocodes.php">Zakładka "Makrokody"</a></li>
   <li><a href="settings_codeinsight.php">Ustawienia programu - Ułatwienia, dynamiczne atrybuty, inne</a>
   <li><a href="formatter_general.php">Formatowanie kodu źródłowego</a> - <a href="formatter_stylesheets.php">Ustawienia dla CSS</a></li>
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