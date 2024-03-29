<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Komórka tabeli</title>

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
<h1>Narzędzia - Komórka tabeli</h1>

<p> Narzędzie to służy do tworzenia i edycji znacznika wiersza tabeli <tt>&lt;TR&gt;</tt> 

<p>Okno Komórka tabeli uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_tables.php">Tabele</a> / Komórka tabeli, a także z paska narzędzi <a href="toolbars_tables.php">Tabele i formularze</a>. 

<h2>Wybór typu komórki</h2>

<p>W grupie Typ komórki wskaż, jaką komórkę chcesz utworzyć. Komórki nagłówka od zwykłych różnią się domyślnym sposobem formatowania tekstu. </p>

<p><b>zwykła (&lt;TD&gt;)</b><br />
Wybierz, jeśli chcesz utworzyć zwykłą komórkę tabeli (domyślnie zwykły tekst).</p>

<p><b>nagłówka (&lt;TH&gt;)</b><br />
Wybierz, jeśli chcesz utworzyć komórkę nagłówka tabeli(domyślnie tekst pogrubiony).</p>

<p>Jeśli reedytujesz istniejącą komórkę tabeli, opcje te będą nieaktywne (ustawione wg istniejącego typu).</p>

<h2>Ustawienia znacznika</h2>


<b>Zawartość komórki</b><br />
W tym polu możesz pisać tekst, który zostanie umieszczony w edytowanej komórce. Przyciskiem z prawej strony możesz uruchomić:
<ul>
	<li><a href="tool_graphic_insert.php">narzędzie do wstawiania grafik</a>, za którego pomocą możesz wstawić do komórki obrazek,
	<li><a href="tool_link.php">narzędzie do wstawiania odsyłacza</a>, za którego pomocą możesz wstawić do komórki odsyłacz do innego dokumentu w sieci.
</ul>



<p><b>Szerokość</b><br>
Wybierz wartość, która będzie szerokością komórki. Jeśli zaznaczysz przełącznik z prawej strony pola, podawany rozmiar będzie wstawiony w postaci procentowej.

<p><b>Wysokość</b><br>
Wybierz wartość, która będzie wysokością komórki. Jeśli zaznaczysz przełącznik z prawej strony pola, podawany rozmiar będzie wstawiony w postaci procentowej.

<p><b>Wyrównanie w poziomie</b><br />
Wybierz z listy sposób wyrównania zawartości komórki w poziomie.</p>

<p><b>Wyrównanie w pionie</b><br />
Wybierz z listy sposób wyrównania zawartości komórki w pionie.</p>

<p><b>Łącz kolumny (Colspan)</b><br />
Jeśli chcesz scalić kilka komórek w kolejnych kolumnach, wprowadź w tym polu odpowiednią liczbę komórek do połączenia. <br />
Pamiętaj, aby w kodzie HTML odpowiednio zmniejszyć ilość komórek w bieżącym wierszu tak, by suma wszystkich wartości <tt>Colspan</tt> w tym wierszu była równa ilości kolumn tabeli (przy czym brak tego atrybutu w znaczniku <tt>TD/TH</tt> oznacza domyślną wartość <tt>1</tt>).</p>

<p><b>Łącz wiersze (Rowspan)</b><br />
Jeśli chcesz scalić kilka komórek w kolejnych wierszach, wprowadź w tym polu odpowiednią liczbę komórek do połączenia. <br />
Pamiętaj, aby w kodzie HTML odpowiednio zmniejszyć ilość komórek w kolejnych wierszach tak, by suma wszystkich wartości <tt>Rowspan</tt> w danym wierszu była równa ilości wierszy tabeli (przy czym brak tego atrybutu w znaczniku <tt>TD/TH</tt> oznacza domyślną wartość <tt>1</tt>).</p>




<h2>Styl elementu</h2>

<p>Ta grupa pozwala na określenie stylu dla znacznika. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzędzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz nazwę klasy, która zostanie przypisana znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

<h2>Przycisk "Zdarzenia i atrybuty"</h2>

<p>Przycisk "Zdarzenia i atrybuty" umożliwia otwarcie okna <a href="tool_events_attributes.php">Zdarzenia i inne atrybuty</a>. Okno to umożliwia określenie dodatkowych atrybutów edytowanego znacznika, które nie mają swoich odpowiedników w oknie narzędzia. Możesz tam również określić zdarzenia dla języków skryptowych pozwalające na uzyskanie różnych efektów specjalnych.



</td>
</tr>
</table>


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
	<li><a href="tool_table_tag.php">Edytor znacznika TABLE</a>
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
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>
