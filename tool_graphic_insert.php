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
<title>Narzędzia - Wstawianie grafiki</title>

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
<h1>Narzędzia - Wstawianie grafiki</h1>

<!-- treść pomocy -->

<p>Okno służy do wstawiania grafik do dokumentu (znacznik <tt>IMG</tt> w języku HTML). 

<p> Narzędzie można uruchomić z poziomu menu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_gfx.php">Grafika i multimedia</a>, a także z pasków narzędzi oraz za pomocą standardowego skrótu klawiszowego <tt>Ctrl+Shift+I</tt>. Ikona polecenia przedstawiona została powyżej.</p>

<p>Okno zawiera dwie zakładki:
<ul>
	<li><b>Ustawienia</b> - w nim możesz ustawić wszelkie atrybuty znacznika <tt>IMG</tt></li>
	<li><b>Podgląd</b> - umożliwia podgląd obrazka w takiej postaci, w jakiej zostanie wstawiony do dokumentu.</li>
</ul>



<h2>Ustawienia</h2>

<p><a name="localization"></a><b>Lokalizacja</b><br />
Podaj ścieżkę do pliku graficznego. Korzystając z listy rozwijanej możesz wybrać jeden z ostatnio wstawianych adresów. Możesz również skorzystać z przycisku obok pola, aby uruchomić <a href="tool_graphic_browser.php">przeglądarkę grafik</a>, która umożliwia wybór obrazka.</p>

<p><b>Opis obrazka</b><br />
Podaj opis obrazka, który użyty zostanie jako atrybut <tt>ALT</tt> znacznika <tt>IMG</tt>. Pozwoli to użytkownikowi, który nie może zobaczyć obrazka, zorientować się, co on przedstawia (np. w przeglądarkach tekstowych typu Lynx).</p>

<p><b>Dymek</b><br />
Podaj opis obrazka, który użyty zostanie jako atrybut <tt>TITLE</tt> znacznika <tt>IMG</tt>. Przeglądarka graficzna (jak Internet Explorer, czy Mozilla, Opera itp.) wyświetli ten opis w postaci 'dymka nad obrazkiem'. Za pomocą przycisku umieszczonego obok tego pola możesz łatwo skopiować tutaj tekst z pola <b>Opis obrazka</b> (wyżej).</p>

<p><b>Wymiary</b><br />
Podaj wysokość i szerokość obrazka. Jeśli wskazałeś obrazek za pomocą <a href="tool_graphic_browser.php">przeglądarki grafik</a>,program automatycznie wstawi właściwe, oryginalne wymiary zapisane w obrazku. </p>
<p>Jeśli obrazek ma być skalowany względem wielkości okna przeglądarki, możesz podać wartość procentową - w tym celu zaznacz przełącznik '<tt>%</tt>'.</p>
<p>Jeśli wymusiłeś zmianę wymiarów obrazka wpisując w pola inne wartości, możesz przywrócić oryginalne wartości klikając na przycisk pomiędzy polami 'w pionie' i 'w poziomie'. </p>

<p><b>Odstępy</b><br />
Podaj odstępy, jakie mają być zachowane pomiędzy obrazkiem, a pozostałymi elementami strony.</p>

<p><b>Wyrównanie</b><br />
Wybierz w jaki sposób obrazek ma być wyrównywany względem innych elementów strony.</p>
<p>Ustawienie to ma status przestarzały (ang.  <i>deprecated</i>) i nie zaleca się korzystania z niego. Zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>.</p>

<p><b>Użyj mapy</b><br />
Jeśli w dokumencie zdefiniowano mapy odsyłaczy, możesz wybrać mapę, jaka ma być zastosowana dla obrazka. </p>
<p>Klikając na przycisk obok pola , możesz uruchomić Edytor map odsyłaczy i utworzyć dla obrazka nową mapę odsyłaczy. </p>

<p><b>Obramowanie</b><br />
Wprowadź liczbę określającą grubość obramowania (atrybut <tt>border</tt>). Domyślnie jest to wartość "0" (najczęściej używana).</p>
<p>Ustawienie to ma status przestarzały (ang.  <i>deprecated</i>) i nie zaleca się korzystania z niego. Zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>.</p>
<p>Zaznaczenie przełącznika "<b>Zawsze wstawiaj</b>" spowoduje, że atrybut <tt>border</tt> będzie wstawiany do znacznika <tt>IMG</tt> zawsze, nawet gdy jego wartość wynosi 0.</p>
<p>Włączenie przełącznika "<b>Nigdy nie wstawiaj</b>" spowoduje, że wartość atrybutu <tt>border</tt> nie zostanie nigdy wstawiona. Jednakże, jeśli podasz wartość obramowania różną od 0, to przy zaznaczonej tej opcji i jednocześnie przy włączonej opcji "<b>Wstaw wymiary, obramowanie, itp. jako styl</b>" wstawiona zostanie jego wartość, ale tylko w formie definicji stylu inline.</p>




<h2><a name="rollover"></a>Zastosuj efekt podmiany</h2>

<p>Jeśli zaznaczysz przełącznik przy tytule sekcji, możliwe będzie wybranie obrazka do podmiany po najechaniu myszką nad wstawiany obrazek (ang. <i>rollover</i>).</p>

<p><b>Podmień na</b><br />
Użyj tego pola,aby podać plik, do podmiany (identycznie jak dla pola <a href="#localization">Lokalizacja</a>)</p>




<h2>Styl elementu</h2>

<p>Ta grupa pozwala na określenie stylu dla znacznika. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzędzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

<p><b>Wstaw wymiary, obramowanie, itp. jako styl</b><br />
Jeśli zaznaczysz ten przełącznik, parametry wymiaru obrazka, odstępy oraz obramowanie będą wstawianie w postaci stylu CSS w ramach atrybutu STYLE zamiast odpowiednich atrybutów HTML.


<h2>Podgląd</h2>

<p>Na tej zakładce możesz zobaczyć, jak będzie wyglądał obrazek w przeglądarce (uwzględniając przezroczystość, wymuszoną zmianę rozmiarów itd.).</p>



<h2>Przycisk "Zdarzenia i atrybuty"</h2>

<p>Przycisk "Zdarzenia i atrybuty" umożliwia otwarcie okna <a href="tool_events_attributes.php">Zdarzenia i inne atrybuty</a>. Okno to umożliwia określenie dodatkowych atrybutów edytowanego znacznika, które nie mają swoich odpowiedników w oknie narzędzia. Możesz tam również określić zdarzenia dla języków skryptowych pozwalające na uzyskanie różnych efektów specjalnych.







</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_graphic_browser.php">Przeglądarka grafik</a>
	<li><a href="tool_gallery.php">Kreator galerii grafik</a>
	<li><a href="tool_graphic_converter.php">Konwerter grafik</a>
	<li><a href="main_menu_main.php">Menu programu</a>
	<li><a href="toolbars_general.php">Inne narzędzia na paskach</a>
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