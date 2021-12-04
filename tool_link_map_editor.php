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
<title>Narzędzia - Edytor map odsyłaczy</title>

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
<h1>Narzędzia - Edytor map odsyłaczy</h1>

<!-- treść pomocy -->

<p>Okno służy do generowania mapy odsyłaczy (znacznik <tt>MAP</tt> w języku HTML). 

<p> Narzędzie można uruchomić z poziomu menu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_links.php">Odsyłacze</a> (lub <a href="main_menu_tools_gfx.php">Grafika i multimedia</a>), a także z pasków narzędzi. Ikona polecenia przedstawiona została powyżej.</p>

<p>Okno podzielone zostało kilka części:

<p><b><a href="#area_list">Zdefiniowane obszary</a></b><br />
Zawiera listę zdefiniowanych obszarów mapy.</p>

<p><b>Zakładka <a href="#settings_general">Ogólne ustawienia mapy</a></b><br />
Zawiera ogólne ustawienia, jak nazwę mapy, lokalizację grafiki, zastosowane style itp.</p>

<p><b>Zakładka <a href="#area_define">Definiowanie obszarów</a></b><br />
Zawiera podgląd pliku graficznego oraz umożliwia narysowanie obszarów aktywnych na obrazku.</p>

<p><b>Zakładka <a href="#area_settings">Ustawienia wybranych obszarów</a></b><br />
Zawiera ustawienia dla wybranego obszaru.</p>




<h2><a name="area_list"></a>Zdefiniowane obszary</h2>

<p>Lista zawiera nazwy obszarów, które zdefiniowałeś dla swojej mapy. Kliknij nazwę obszaru, aby go wybrać. Nazwy obszarów tworzone są na podstawia zawartości <a href="#alt">atrybutu ALT</a> określanego w zakładce <a href="#area_settings">Ustawienia wybranych obszarów</a>.</p>

<p>Ikona przy nazwie obszaru informuje o tym, jakiego rodzaju to jest obszar:

<p> obszar prostokątny,</p>

<p> obszar owalny,</p>

<p> obszar nieregularny.</p>

<p>Za pomocą przycisków w menu po prawej stronie listy możesz dodawać, wskazywać, bądź usuwać obszary zdefiniowane dla mapy.</p>




<h2><a name="settings_general"></a>Ogólne ustawienia mapy</h2>

<p>W tej zakładce możesz wskazać plik graficzny, dla którego będzie utworzona mapa, podać nazwę mapy, określić styl lub wybrać klasę CSS dla obrazka.</p>

<b>Podstawowe ustawienia</b><br />
<ul>
	<li><b>Nazwa mapy</b> - podaj nazwę mapy, która użyta zostanie do połączenia mapy z odpowiednim obrazkiem (atrybut <tt>usemap</tt> w znaczniku <tt>IMG</tt> i atrybut <tt>name</tt> w znaczniku <tt>MAP</tt>).</li>
	<li><b>Domyślny odsyłacz</b> - wprowadź domyślny odsyłacz. Będzie on użyty, jeśli zostanie kliknięty obszar poza zdefiniowanymi obszarami mapy</li>
</ul>

<b>Graficzna mapa</b><br />
<ul>
	<li><b>Lokalizacja grafiki mapy</b> - podaj ścieżkę do pliku graficznego. Możesz skorzystać z <a href="tool_graphic_browser.php">przeglądarki grafik</a> uruchamianej przyciskiem z prawej strony pola.</li>
	<li><b>Opis obrazka</b> - podaj opis obrazka, który pojawi się zamiast grafiki, jeśli użytkownik nie ma włączonego wyświetlania obrazków. Opis pozwoli mu się zorientować, co przedstawia obrazek.</li>
</ul>

<p><b>Wstaw mapę odsyłaczy do schowka</b><br />
Zaznacz, jeśli nie chcesz wstawiać znaczników wygenerowanej mapy do dokumentu bezpośrednio obok obrazka, lecz skopiować do schowka w celu wklejenia jej w innym miejscu (np. na początku dokumentu).</p>

<p><b>Definicja stylu</b><br />
Ta grupa pozwala na określenie stylu dla obrazka. Znajdziesz tutaj trzy pola pozwalające na określenie:

<ul>
	<li><b>Styl</b> - W tym polu określasz styl dla obrazka umieszczanego w dokumencie. Przycisk obok uruchamia narzędzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.</li>
	<li><b>Klasa</b> - W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. </li>
	<li><b>Identyfikator elementu</b> - Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.</li>
</ul>
</p>




<h2><a name="area_define"></a>Definiowanie obszarów</h2>

<p>W tej zakładce możesz zdefiniować obszary aktywne Twojej mapy. W celu ułatwienia pracy możesz dopasować podgląd:</p>

<ul>
	<li><b>Powiększenie</b> - wybierz z listy skalę, w jakiej ma zostać wyświetlany podgląd,</li>
	<li><b>Jednostki</b> - wybierz z listy jednostki, jakie będą używane jako skala linijek</li>
</ul>

<p><b>Definiowanie obszarów</b><br />
Główną częścią zakładki jest okno podglądu, wyświetlające obrazek, dla którego tworzona jest mapa odsyłaczy. W tym samum oknie możesz rysować obszary aktywne mapy, dla których następnie będzie można podać odnośniki itp.</p>

<p>Aby utworzyć obszar aktywny, wybierz jego typ z menu po prawej stronie listy <a href="#area_list">Zdefiniowane obszary</a> (prostokąt, elipsa, nieregularny). Następnie zaznacz na obrazku fragment obrazu, który ma być odnośnikiem:</p>

<p> <b> Definiowanie obszaru o kształcie prostokąta lub elipsy</b><br />
Po wybraniu kształtu prostokąta lub elipsy (ikony pokazane obok) kliknij lewym klawiszem myszki na obrazek w miejscu, gdzie chcesz rozpocząć kreślenie figury i trzymając go wciśnięty, przeciągaj. Podgląd kształtu będzie widoczny jako markiza rysowana przerywaną linią. Po puszczeniu klawisza myszki kształt zostanie wypełniony żółtą kratką.</p>

<p> <b>Definiowanie obszaru o nieregularnym kształcie</b><br />
Po wybraniu kształtu nieregularnego (ikona pokazana obok) , kliknij lewym klawiszem myszki w pierwszy punkt, od którego chcesz zacząć rysowanie. Następnie klikaj w kolejne miejsca, gdzie ma być łamana linia. Linie będą zaznaczane na rysunku za pomocą przerywanej linii. Aby zakończyć rysowanie kształtu kliknij gdziekolwiek na obrazku prawym klawiszem myszki. Pierwszy i ostatni punkt zostaną połączone, a powstały w ten sposób obszar zostanie wypełniony żółtą kratką.</p>

<p> <b>Edycja wybranego kształtu</b><br />
Aby edytować kształt aktywnego obszaru kliknij w ikonę pokazaną obok. Następnie wybierz z listy <a href="#area_list">Zdefiniowane obszary</a>, obszar, który chcesz edytować. Możesz tez wskazać obszar bezpośrednio w oknie podglądu. Aktywny obszar, który wybrałeś, oznaczony jest kolorem żółtym, inne zdefiniowane obszary oznaczone są na biało. </p>
<p>Aby przenieść obszar w inne miejsce, kliknij lewym klawiszem na wybranym obszarze i trzymając wciśnięty, przeciągaj go w wybrane miejsce.</p>
<p>Aby zmienić wymiary obszaru prostokątnego bądź eliptycznego, kliknij lewym klawiszem myszy na punkt zaczepienia (czerwony kwadracik) w lewym górnym rogu obszaru i go przeciągaj.</p>
<p>Obszar nieregularny posiada punkty zaczepienia na każdym końcu łamanej. Każdy taki punkt można dowolnie przemieszczać zmieniając tym samym kształt obszaru.</p>
<p>Na pasku statusu okna edytora pokazane są wymiary rysowanego obszaru oraz położenie kursora myszy względem lewego górnego rogu obrazka. Wymiary podawane są podczas rysowania, przenoszenia lub zmiany rozmiaru obszarów za wyjątkiem obszarów nieregularnych.</p>






<h2><a name="area_settings"></a>Ustawienia wybranych obszarów</h2>

<p>Aby edytować obszar, wskaż go na liście <a href="#area_list">Zdefiniowane obszary</a>, bądź w zakładce <a name="area_define">Definiowanie obszarów</a>. Dostępne sa następujące opcje:</p>

<p><b>Odnośnik URL</b><br />
Podaj adres URL do którego ma prowadzić bieżący obszar.

<a name="alt"></a>
<p><b>Opis obszaru (ALT) i Dymek (TITLE)</b><br>
Podaj tekst, jaki pojawi się po najechaniu myszką nad bieżący obszar obrazka. Dodatkowo tekst ten będzie wyświetlany na liście obszarów z lewej strony edytora w celu ułatwienia jego wyboru na liście.

<p><b>Obszar bez przypisanego odsyłacza</b><br>
Zaznacz ten przełacznik, jeśli obszar nie posiada zdefiniowanego odsyłacza.

<p><b>Klawisz skrótu</b><br>
Podaj klawisz skrótu, jakiego będzie można użyć w celu przejścia pod adres, na jaki wskazuje bieżący obszar.

<p><b>Okno docelowe</b><br>
Wybierz z listy okno, w którym ma zostać wyświetlony element docelowy.

<p><b>Dodatkowe zdarzenie i atrybuty dla tego obszaru</b><br>
Kliknij ten przycisk, aby otworzyć okno służące do definiowania <a href="tool_events_attributes.php">dodatkowych atrybutów znacznika obszaru &lt;area&gt; i obsługi jego zdarzeń</a>. 




<h2>Definicja stylu</h2>

<p>Ta grupa pozwala na określenie stylu dla znacznika. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzędzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

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
	<li><a href="tool_graphic_insert.php">Wstawienie grafiki</a>
	<li><a href="tool_link.php">Wstawianie odnośnika</a>
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
