
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Informacje o dokumencie</title>

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
<h1>Narzędzia - Informacje o dokumencie</h1>

<!-- treść pomocy -->

<p>Okno to przedstawia i umożliwia edycję szeregu informacji na temat wskazanego dokumentu i powiązaniach z innymi dokumentami, pozwala na zarządzanie zadaniami i zakładkami, przedstawia informacje o przewidywanym transferze w sieci itp. Za pomocą tego okna możesz wpisywać notatki i wybierać status dokumentu, co jest bardzo przydatne przy pracy grupowej nad serwisem.</p>

<p><i><b>Uwaga!</b> W Pająku.1.0 okno to zostało gruntownie przebudowane, co zwiększyło jego czytelność i funkcjonalność, a jednocześnie zbliżyło wygląd do innych okien programu.</i></p>




<p>Okno informacji o dokumencie możesz uruchomić za pomocą polecenia oznaczonego ikoną pokazaną powyżej znajdującego się w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_view.php">Wyświetl</a> / Informacje o dokumencie, a także za pomocą przycisku pokazanego wyżej umieszczonego na mini pasku narzędzi (z lewej strony edytora).

<p>Dokument, dla którego mają być przedstawione i edytowane informacje możesz wskazać na dwa sposoby. 
<ol>
	<li>Aby uzyskać informację a temat dowolnego dokumentu w serwisie, wskaż wskaż go w zakładce <a href="main_tabs_myservices.php">Moje serwisy</a> (wystarczy raz kliknąć, nie trzeba go otwierać).</li>
	<li>Aby uzyskać informacje na temat bieżącego pliku otwartego w edytorze wystarczy postawić na nim kursor. </li>
</ol></p>

<p>Dalej dokument, dla którego wyświetlane będą informację, będzie nazywany <i>dokumentem bieżącym</i>.</p>

<p>Jeśli okno narzędzia jest już otwarte, informacje pokażą są w nim automatycznie. Jeśli nie jest otwarte, otwórz je.</p>

<p>Okno może być otwarte cały czas - nie blokuje ono pracy programu. Jeśli chwilowo nie jest potrzebne, możesz je zwinąć do paska tytułowego, klikając na ikonę obok ikony zamykania okna (na pasku tytułowym). Klikając ponownie na tę ikonę, możesz okno rozwinąć.</p>

<p>Zawartość okna umieszczona została w pięciu zakładkach:</p>

<ul>
	<li><a href="#general1">Podstawowe informacje</a></li>
   <li><a href="#general2">Statystyki</a></li>
	<li><a href="#transfer">Transfer</a></li>
	<li><a href="#bookmark">Zakładki</a></li>
	<li><a href="#todotasks">Zadania</a></li>
</ul>




<a name="general1"></a>
<h2>Podstawowe informacje</h2>

<p><b>Plik:</b><br />
Pokazuje ścieżkę dostępu i nazwę pliku, dla którego prezentowane są informacje.</p>



<p><b>Dokument podglądu</b><br />

Pokazuje dokument podglądu. Jest to dokument, który będzie wyświetlany, jeśli będziesz chciał obejrzeć bieżący dokument w przeglądarce. jest to przydatne w sytuacji, gdy bieżący dokument jest np. skryptem dołączanym do innych dokumentów, a sam w sobie nie wyświetla żadnych danych (np. plik skryptu JavaScript <tt>*.js</tt>). Za pomocą przycisków z prawej strony możesz wybrać lub usunąć przypisanie dokumentu podglądu. 





<p><b>Status</b><br />
Wybierz z listy status dokumentu. Dostępne są następujące pozycje:</p>

<ul>
	<li>nieokreślony</li>
	<li>projekt</li>
	<li>pierwsze zmiany</li>
	<li>drugie zmiany</li>
	<li>trzecie zmiany</li>
	<li>wersja alfa</li>
	<li>wersja beta</li>
	<li>wersja finalna</li>
</ul>


<p><b>Autor dokumentu</b><br />
Jeśli wskazałeś dokument na liście plików zakładki Moje serwisy, wyświetla nazwę użytkownika, który jako ostatni zapisał bieżący dokument (swoją nazwę użytkownika możesz wpisać w oknie <a href="settings_user.php">Ustawienia programu - Użytkownik</a>).<br />
Jeśli wskazałeś dokument w oknie edytora, będzie tu umieszczona informacja <i><tt>w trakcie edycji</tt></i></p>

<p><b>Notatki</b><br />
Pole tekstowe umożliwia wpisanie notatek dotyczących dokumentu (np. informacje dla innych użytkowników itp.). Za pomocą przycisków z prawej strony możesz automatycznie wstawić do notatki:</p>

<p> - bieżącą datę i godzinę</p>
<p> - nazwę bieżącego użytkownika programu</p>



<p><b>Opcje edytora</b><br />
Poniżej pola testowego notatki znajduje się kilka opcji związanych z wyświetlaniem dokumentu w oknie edytora.</p>

<ul>
	<li><b>zawijanie wierszy</b> - zaznacz, jeśli w dokumencie mają być zawijane wiersze, które nie mieszczą się w jednej linii</li>
	<li><b>pokazuj numery linii</b> - zaznacz, jeśli na rynnie z prawej strony okna edytora mają być pokazywane numery linii</li>
	<li><b>pokazuj znaki specjalne</b> - zaznacz jeśli w oknie edytora mają być pokazywane znaki specjalne, jak tabulator, znak końca wiersza itd.</li>
	<li><b>kolorowanie</b> - wybierz z listy schemat kolorowania, jaki ma być zastosowany do bieżącego dokumentu</li>
	<li><b>wymuszone kodowanie</b> - wybierz z listy kodowanie znaków narodowych, jakie ma być stosowane dla tego dokumentu przy odczycie i zapisie (bez względu na kodowanie ustawione dla serwisu bądź globalnie dla całego programu, a nawet w sekcji META tego dokumentu).</li>
	<li><b>końce linii</b> - wybierz z listy sposób kodowania znaków końca wiersza (dostępne są trzy style kodowania: CRLF (DOS/Windows), CR (Mac) i LF (Unix)).</li>
	<li>Język dokumentu - wybierz z listy język znacznikowy, który będzie domyślnie używany do tworzenia dokumentu. W ten sposób możesz zmienić zachowanie się programu określone w oknie <b>Ustawienia programu</b> oraz <b>Właściwości serwisu</b>. Ustawienie to będzie używane w sytuacji, gdy rozpoznanie typu dokumentu przy pomocy standardowych metod (DOCTYPE, xlmns) nie będzie możliwe. Lista zawiera nazwy wszystkich kategorii (wszystkie języki znacznikowe) obsługiwane przez Pająka. Możesz zmienić zawartość listy (dodać i usunąć język, a także zmodyfikować jego ustawienia) za pomocą <a href="tagdata_editor_tdf.php">Edytora TDF</a>.</li>
</ul>

<p><b>Wymuszone dołączanie</b><br />

Kliknij ten przycisk, aby uruchomić okno służące do wyboru plików, które mają być analizowane przez Pająka na potrzeby różnych mechanizmów podpowiedzi. Więcej na ten temat czytaj w temacie <a href="service_properites.php#virtual_include">Okno właściwości serwisu</a>


<a name="general2"></a>
<h2>Statystyki</h2>

<p>W tej zakładce znajdują się szczegółowe informacje na temat bieżącego dokumentu podzielone na trzy grupy:</p>

<p><b>Informacje ogólne o dokumencie</b><br />
Zawiera listę następujących informacji:
<ul>
	<li><b>Tytuł dokumentu</b> - zawartość znacznika <tt>&lt;TITLE&gt;</tt> ...<tt>&lt;/TITLE&gt;</tt>,</li>
	<li><b>Autor</b> zawartość znacznika określającego autora w <a href="tool_meta.php">sekcji META </a>)</li>
	<li><b>Opis dokumentu</b> - zawartość znacznika opisującego zawartość dokumentu w <a href="tool_meta.php">sekcji META </a></li>
	<li><b>Data utworzenia</b> - data ostatniego zapisu pliku</li>
	<li><b>Nazwa pliku</b> na dysku</li>
	<li><b>Rozmiar pliku</b> na dysku</li>
	<li><b>Strona kodowa</b> używana do kodowania znaków narodowych określona w <a href="tool_meta.php">sekcji META </a></li> <BASE>
	<li><b>Słowa kluczowe</b> podane w <a href="tool_meta.php">sekcji META </a></li>
	<li><b>Dokument bazowy</b> - dokument wskazany w znaczniku <tt>BASE</tt>, względem niego będą się odnosiły ścieżki względne w dokumencie,</li>
	<li><b>Arkusz stylów</b> - nazwa zewnętrznego pliku z arkuszami stylów (jeśli został dołączony)</li>
	<li><b>Liczba linii</b> w dokumencie</li>
	<li><b>Liczba słów</b> w dokumencie.</li>
	<li><b>Liczba znaków w słowach</b> w dokumencie.</li>
</ul></p>
Przedstawione liczby słów i znaków w słowach nie dotyczą zawartości znaczników HTML, lecz jedynie tekstu wyświetlanego przez przeglądarkę. Dokładniej rzecz ujmując, funkcja zliczająca słowa i znaki pomija wszystko zawarte między znakami <tt>&lt;</tt> i <tt>&gt;</tt>, przeznaczona jest wyłącznie szacunkowego przedstawiania objętości tekstu w plikach HTML - dla innych rodzajów dokumentów dane mogą być niepoprawne.



<p><b>Informacje o odnośnikach do innych dokumentów (powtórzenia wyeliminowane)</b><br />
<ul>
	<li><b>Etykiety w dokumencie</b> - ilość etykiet w dokumencie</li>
	<li><b>Odnośniki do etykiet</b> - ilość odnośników do etykiet w ty samym dokumencie</li>
	<li><b>Odnośniki do lokalnych</b> - ilość odnośników do dokumentów w tym samym serwisie (ścieżki względne)</li>
	<li><b>Odnośniki do zdalnych</b> - ilość odnośników do dokumentów w Sieci</li>
</ul></p>

<b>Informacje o innych plikach w dokumencie i odnośnikach do nich</b>
<ul>
	<li><b>Osadzone grafiki</b> - ilość grafik osadzony w dokumencie, osobno zdalne i lokalne</li>
	<li><b>Osadzone dźwięki</b> - ilość  osadzonych plików dźwiękowych w dokumencie, osobno zdalne i lokalne</li>
	<li><b>Osadzone inne pliki</b> - ilość innych plików osadzonych w dokumencie (np. skrypty itp.)</li>
</ul>



<a name="transfer"></a>
<h2>Transfer</h2>

<p>Górna część zakładki zawiera nazwy i wielkości plików dołączonych do dokumentu. Poniżej znajdują się informacje:</p>

<p><b>Rozmiar dokumentu z elementami</b><br />
Przedstawia informacje o wielkości plików - 
<ul>
	<li>Dokument</li>
	<li>Osadzone pliki</li>
	<li>Całość</li>
</ul></p>

<p><b>Przewidywany czas załadowania</b>
Przedstawia informacje na temat także przewidywanych czasów transferu przy różnych, standardowych prędkościach transmisji:
<ul>
	<li>modem 28.800</li>
	<li>modem 33.600</li>
	<li>modem 56.600</li>
</ul></p>


<a name="bookmark"></a>
<h2>Zakładki</h2>

<p>Opcje tej zakładki umożliwiają zarządzanie <a href="main_editor_bookmarks.php">zakładkami w dokumencie</a>. Okno zawiera menu oraz listę zakładek. </p>

<p><b>Ustawienie zakładki numerowanej</b><br />
Kliknij, aby wstawić w bieżącej linii dokumentu zakładkę numerowaną o pierwszym wolnym numerze. Możesz też skorzystać ze strzałki z prawej strony, by wstawić zakładkę o dowolnym numerze.</p>

<b>Ustawienie zakładki zakładki nazwanej</b><br />
Kliknij, aby wstawić w bieżącej linii dokumentu zakładkę nazwaną.

<p><b>Zmiana nazwy zakładki nazwanej</b><br />
Kliknij, aby zmienić nazwę zakładki wskazanej na liście (tylko zakładki nazwane).</p>

<b>Przejście do wybranej zakładki</b><br />
Kliknij, aby przejść do zakładki wskazanej na liście.

<p><b>Usunięcie wybranej zakładki</b><br />
Kliknij, aby usunąć zakładkę wskazaną na liście.</p>

<p><b>Sortowanie alfabetyczne</b><br />
Kliknij, aby posortować na liście zakładki wg kolejności alfabetycznej.</p>

<p><b>Sortowanie wg kolejności występowania w dokumencie</b><br />
Kliknij, aby posortować na liście  zakładki według kolejności ich występowania w dokumencie.</p>

<p><b>Pomoc</b><br />
Otwiera to okno pomocy.</p>

<p>Zmiana nazwy, dodawanie, usuwanie i przechodzenie do zakładek jest możliwe tylko dla dokumentów otwartych w edytorze. Jeśli bieżący dokument wskazałeś na liście plików, pojawi się monit o jego otwarcie.</p>

<p>Aby przejść do miejsca w dokumencie oznaczonego zakładką, dwukliknij na niej na liście.</p>



<a name="todotasks"></a>
<h2>Zadania</h2>

<p>Opcje tej zakładki umożliwiają zarządzanie <a href="main_editor_todotasks.php">zadaniami do wykonania</a> w dokumencie. Okno zawiera menu oraz listę zadań wraz z podstawowymi danymi o zadaniu. </p>

<p>Zadania na liście możesz zaznaczać (z lewej strony nazwy). Nie ma to żadnego wpływu na działanie zadań, ale dzięki tej opcji możesz np. zaznaczyć zadania, które już wykonałeś itp.</p>

<p><b>Dodanie nowego zadania</b><br />
Kliknij, aby dodać  w bieżącej linii dokumentu zadanie do wykonania.</p>

<p><b>Usunięcie wybranego zadania</b><br />
Kliknij, aby usunąć zadanie wskazane na liście.</p>

<p><b>Modyfikacja wybranego zadania</b><br />
Kliknij, aby zmodyfikować nazwę, treść, bądź priorytet zadania.</p>

Pięć kolejnych poleceń służy do sortowania zadań według:
<ul>
	<li><b>kolejności alfabetycznej</b> nazw zadań</li>
	<li><b>priorytetu</b> zadania (1-najwyższy, 10-najniższy)</li>
	<li><b>autora</b> zadania (alfabetycznie)</li>
	<li><b>daty utworzenia</b> zadania</li>
	<li><b>zaznaczenia</b> z lewej strony nazwy zadania</li>
</ul>

<p><b>Pomoc</b><br />
Wyświetla to okno pomocy.</p>


<p>Lista zadań zawiera następujące kolumny:</p>

<ul>
	<li><b>Nazwa</b> zadania (oraz przełącznik do zaznaczania)</li>
	<li><b>Priorytet</b></li>
	<li><b>Dopisał</b> - autor zadania</li>
	<li><b>Data</b> utworzenia zadania</li>
</ul>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_editor_bookmarks.php">Zakładki w dokumencie - ogólnie</a>
	<li><a href="main_editor_todotasks.php">Zadania do wykonania - ogólnie</a>
	<li><a href="main_editor_general.php">Praca z edytorem - ogólnie</a>
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
