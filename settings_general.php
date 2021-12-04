
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Ogólne ustawienia</title>

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
<h1>Ustawienia programu - Ogólne ustawienia</h1>

<!-- treść pomocy -->
<p>
Ogólne ustawienia pozwalają na dostosowanie programu w zakresie ogólnym, tzn. większość ustawień, które nie znalazły własnej kategorii znajduje się właśnie w kategorii "Ogólne". Kategoria "Ogólne" podzielona jest na dwie podkategorie: "Ogólne ustawienia" oraz "Mapa serwisu"

<h2>Ogólne ustawienia</h2>

<p>W tej grupie ustawień znajdują się ustawienia o następującym znaczeniu:</P>

<p><b>Pytaj przed wyjściem z programu</b><br>
Zaznacz tę opcję, aby przy wyłączaniu programu wyświetlane było zapytanie z prośbą o potwierdzenie.

<p><b>Pytaj o zamknięcie dokumentów przed wyjściem z programu</b><br>
Zaznacz tę opcję, aby przy wyłączaniu programu w sytuacji, gdy otwartych jest więcej niż jeden dokument, wyświetlane było zapytanie z prośbą o potwierdzenie.

<p><b>Pozwól tylko na jedno uruchomienie programu</b><br>
Zaznacz tę opcję, aby zablokować możliwość uruchamiania Pająka w kilku kopiach na tym samym komputerze.

<p><b>Tytuł dokumentu zamiast nazwy pliku na pasku tytułu</b><br>
Zaznacz tę opcję, aby włączyć wyświetlanie tytułu edytowanego dokumentu, pobranego ze znacznika <tt>&lt;TITLE&gt;</tt> na pasku tytułu okna głównego Pająka.

<p><b>Wyświetlaj pełną ścieżkę na pasku tytułu</b><br>
Zaznacz tę opcję, aby włączyć wyświetlanie na pasku tytułu okna pełnej ścieżki do dokumentu zamiast samej nazwy pliku.

<p><b>Przełączaj pomiędzy dokumentami w kolejności użycia</b><br>
Zaznacz tę opcję aby włączyć inny tryb przełączania między dokumentami za pomocą kombinacji <tt>Ctrl+Tab</tt> i <tt>Shift+Ctrl+Tab</tt>, który polega na wyświetlaniu ich w kolejności ostatniego użycia. Jeśli opcja ta pozostanie niezaznaczona, dokumenty będą przełączane w kolejności, w jakiej zostały otwarte (kolejność na pasku z nazwami plików). Więcej na ten temat czytaj tez w temacie pomocy do <a href="main_editor_general.php#przelaczanie">Edytora</a>.

<p><b>Łapka nad przyciskami i podkreślane elementy na listach</b><br>
Zaznacz tę opcję, aby włączyć wyświetlanie kursora "łapki" nad elementami, które można kliknąć oraz podświetlać elementy na listach.

<p><b>Pasek przesuwu i dzielenie okna w stylu Mozilla</b><br>
Zaznacz tę opcję, aby paski przesuwu (splittery) dzielące okno na kilka części miały przycisk minimalizujący umożliwiający zminimalizowanie sąsiadującego panelu do najmniejszego dopuszczalnego rozmiaru, a także powrót z tej pozycji do poprzedniej (styl a'la Mozilla).

<p><b>Wyłącz animację zakładek poziomych</b><br>
Zaznacz tę opcję, aby wyłączyć animowane zakładki takie jak np. zakładki panelu po lewej w głównym oknie programu.

<p><b>Pokaż przycisk przełączania zakładek zamiast klikalnych pasków</b><br>
Zaznacz tę opcję, aby na paskach tytułowych zakładek (takich jak np. Moje serwisy) pojawił się przycisk, którego kliknięcie spowoduje przełączenie do następnej zakładki. W przeciwnym wypadku aktywny będzie cały pasek tytułowy zakładki.

<p><b>Wyświetlaj opis serwisu przy przełączaniu między serwisami</b><br>
Zaznacz tę opcję, aby program wyświetlał opis serwisu wprowadzony w jego właściwościach w momencie, gdy następuje zmiana aktywnego serwisu.

<p><b>Rozmiar miniatur w przeglądarce miniatur</b><br>
W tym polu wprowadź szerokość miniaturek obrazków, które są wyświetlane na liście plików przy włączonym widoku miniatur.

<p><b>Liczba elementów pamiętanych przez wieloschowek</b><br />
W tym polu wprowadź liczbę elementów jaką ma pamiętać <a href="tool_multiclipboard.php">Wieloschowek</a>.

<p><b>Automatycznie ukrywaj szybki podgląd</b><br>
Zaznacz tę opcję jeśli chcesz, aby szybki podgląd, dostępny z listy plików, był automatycznie ukrywany w momencie opuszczenia jego okna.

<p><b>Funkcja "Przejdź do odnośnika" działa jako podgląd</b><br>
Zaznacz tę opcję, aby spowodować inne działanie funkcji "Przejdź do odnośnika", która domyślnie pozwala na otwieranie plików znajdujących się pod kursorem jako wartości atrybutów typu URL. Jeśli włączysz tę opcję, funkcja ta będzie wyświetlać podgląd odnośnika zamiast otwierać go do edycji.

<p><b>Używaj przeglądarki grafik przy wybieraniu grafik</b><br>
Zaznacz tę opcję, aby używać przeglądarki grafik umożliwiającej podgląd obrazków przed ich wybraniem. Przeglądarka grafik używana jest w narzędziach pozwalających na wybór plików graficznych. Jeśli wyłączysz te opcję, będziesz korzystał ze standardowego okna wybierania plików.

<p><b>Odnośniki bezwzględne do plików lokalnych wstawiaj jako file://</b><br />
Zaznacz tę opcję, aby włączyć wstawianie odnośników do bezwzględnych ścieżek lokalnych w postaci "<tt>file://C:\plik.txt</tt>" zamiast standardowego "<tt>C:\plik.txt</tt>". Zapewnia to prawidłową interpretację tych ścieżek przez przeglądarki Mozilla oraz Opera.

<p><b>Skrót pipety do wybierania kolorów</b><br>
W tym polu wprowadź skrót klawiszowy, który będzie służył do deaktywacji trybu pobierania kolorów w okienku palety kolorów.

<p><b>Skrót pipety dodatkowo z klawiszem Windows</b><br>
Zaznacz ten przełącznik jeśli skrót dla pipety, wprowadzony w polu obok, ma działać tylko z dodatkowo wciśniętym klawiszem specjalnym Windows (WinKey).

<a name="service_map"></a>
<h2>Mapa serwisu</h2>



<p>W tej podgrupie znajdują się ustawienia odnoszące się do narzędzia pozwalającego na przeglądanie mapy serwisu WWW. Oto opis ustawień:

<p><b>Wyświetlanie określonych plików na mapie serwisu</b><br>
Cztery opcje, które powinieneś zaznaczyć zależnie od tego co preferujesz przy wyświetlaniu mapy serwisu.

<p><b>Nagłówki dokumentu w mapie jako</b><br>
Z tej listy wybierz preferowany sposób wyświetlania opisów plików prezentowanych na mapie.

<p><b>Maksymalna głębokość skanowania</b><br>
W tym polu określasz do ilu poziomów zagłębień następuje skanowanie odsyłaczy w przypadku plików wyświetlanych na mapie serwisu.

<p><b>Koloruj strzałki</b><br>
Zaznacz tę opcję, jeśli chcesz, aby strzałki wyświetlane na mapie serwisu miały różne kolory w zależności od znaczenia.

<p><b>Startowy serwisu</b><br>
W tym polu wprowadź lub wybierz za pomocą przycisku obok folder, który będzie ustawiany jako domyślny w oknie wyboru folderu, w którym tworzone są nowe serwisy, jak i te przywracane z kopii bezpieczeństwa. Jeśli pozostawisz pusty, użyta zostanie domyślna lokalizacja - folder "Moje dokumenty".

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings.php#settingslist">Inne ustawienia</a>
	<li><a href="main_window_desc.php">Wygląd programu i sposób korzystania</a>
	<li><a href="main_tabs_myservices.php">Lista plików i widok miniatur</a>
	<li><a href="tool_quickpreview.php">Szybki podgląd</a>
	<li><a href="tool_colorpalette.php">Paleta kolorów</a>
	<li><a href="tool_graphic_insert.php">Wstawianie grafik</a>
	<li><a href="services_general.php">Serwisy WWW - korzystanie</a>
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
