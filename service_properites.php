<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Serwisy - Okno właściwości serwisu</title>

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
<h1>Serwisy - Okno właściwości serwisu</h1>

<p>Okno właściwości serwisu pozwala na ustawienie parametrów dla serwisu tworzonego w Pająku. O serwisach dowiesz się więcej z tematu poświęconego <a href="services_general.php">serwisom</a>. Opisywane okno pojawia się w momencie tworzenia nowego serwisu. Można je również wywołać z menu Serwisy / Własności serwisu lub z zakładki <a href="main_tabs_myservices.php">Moje serwisy</a>. Ikona przycisku dla tego polecenia przedstawiona została powyżej.

<p>Okienko składa się z szeregu plansz, podzielonych dodatkowo na 2 kategorie:
<ul>
	<li>Główne</li>
	<ul>
	   <li><a href="#glowne_podstawowe">Podstawowe</a></li>
	   <li><a href="#htmlhelp">HTML Help</a></li>
	   <li><a href="#service_properties_mappings">Mapowania</a></li>
      <li><a href="#servicepropertiesoftenused">Wykluczone foldery i Często używane</a></li>
	   <li><a href="#servicepropertiesdocuments">Dokumenty</a></li>
	   <li><a href="#virtual_include">Wymuszone dołączanie</a></li>
	</ul>
	<li>Statystyki</li>
	<ul>
	   <li><a href="#stat_statystyki">Statystyki składników</a></li>
	   <li><a href="#stat_autorzy">Statusy i autorzy</a></li>
	</ul>
</ul>

Za ich pomocą możesz ustalić różne własności serwisu. Oto opis zakładek:

<a name="glowne_podstawowe"></a>
<h2>Główne - Podstawowe</h2>

<p>Ta zakładka pozwala na określenie ogólnych własności serwisu oraz dodatkowo umożliwia wykonanie operacji generowania pomocy <a href="tool_htmlhelp_general.php">HTML Help</a> o ile serwis jest jednocześnie projektem HTML Help. Znajdziesz tutaj dwie grupy o nazwach <b>Podstawowe informacje</b> oraz <b>Ustawienia projektu HTML Help</b>.

<p>W tej grupie możesz określić ścieżki dostępu do folderu, czy główny plik serwisu. Znajdziesz tutaj następujące ustawienia:

<p><b>Nazwa serwisu WWW</b><br>
W tym miejscu znajduje się nazwa przypisana do serwisu podczas jego tworzenia.

<p><b>Główny folder serwisu WWW</b><br>
W tym miejscu możesz zobaczyć na jaki folder jest ustawiony serwis. Możesz go zmienić klikając przycisk obok.

<p><b>Folder startowy serwisu WWW</b><br>
Jeśli chcesz, aby po przełączeniu się na wybrany serwis, program ustawiał inny folder na startowy niż folder główny serwisu, wybierz taki folder korzystając z przycisku obok.

<p><b>Główny plik serwisu</b><br>
Za pomocą przycisku obok możesz wskazać główny plik serwisu, który wykorzystywany jest przez program podczas wielu różnych fukncji (np. sprawdzanie spójności serwisu).

<p><b>Dokument podglądu</b><br>
Wybierz dokument podglądu, jaki ma być stosowany dla dokumentów w serwisie. Jeśli go wybierzesz, dokument ten będzie stosowany dla wszystkich dokumentów z serwisu, dla których nie zdefiniowano dokumentu podglądu indywidualnie.

<p><b>Grupa serwisów</b><br />
W tym miejscu możesz wpisać nazwę grupy, do jakiej ma należeć serwis. Grupy serwisów wyświetlane są na początku listy Serwisów w zakładce "Moje serwisy". Dzięki tej możliwości można łatwiej odnaleźć odpowiedni serwis na liście, co jest szczególnie istotne podczas pracy nad wieloma różnymi projektami.

<p><b>Opis serwisu WWW</b><br>
To pole pozwala Ci wprowadzić opis serwisu, abyś wiedział czego dotyczy. Możesz zaznaczyć przełącznik poniżej, aby spowodować, że za każdym razem, przy przełączaniu się na ten serwis, będzie wyświetlany jego opis.

<p><b>Pokazuj opis przy przełączaniu między serwisami</b>
Zaznacz ten przełącznik, aby spowodować, że za każdym razem, przy przełączaniu się na ten serwis, będzie wyświetlany jego opis.
<a name="charset_encoding"></a>





<a name="htmlhelp"></a>
<h2>Główne - HTML Help</h2>


<p>Ta zakładka zawiera polecenia związane z HTML Help. Znajdziesz tutaj następujące polecenia:

<p><b>Ten serwis jest projektem HTML Help</b><br>
Zaznacz ten przełącznik, jeśli chcesz włączyć dodatkowe funkcje związane z HTML Help dla tego serwisu (np. kompilacja).

<p><b>Główny plik projektu HTML Help</b><br>
Użyj przycisków obok, aby utworzyć nowy pusty plik projektu HTML Help lub, aby wybrać istniejący na dysku.

<p><b>Przycisk Kompiluj projekt</b><br>
Kliknij, aby <a href="tool_htmlhelp_hhp_compilation.php">skompilować</a> projekt do postaci CHM.

<p><b>Skompiluj szybko ten serwis</b><br>
Kliknij, aby <a href="tool_htmlhelp_folder_to_chm.php">szybko skompilować</a> aktualny serwis do postaci HTML Help.

<p><b>Przycisk Edytuj projekt</b><br>
Kliknij, aby uruchomić edytor projektu <a href="tool_htmlhelp_hhp_editor.php">HTML Help</a> wbudowany w Pająka.

<p><b>Przycisk Przeglądaj skompilowany</b><br>
Kliknij, aby otworzyć i przeglądać skompilowany plik CHM.

<p><b>Przycisk Raport kompilacji</b><br>
Kliknij, aby przeglądnąć raport z kompilacji.

<p><b>Uruchom Help Workshop</b><br>
Kliknij, aby uruchomić program MS HTML Help Workshop.




<a name="service_properties_mappings"></a>
<h2>Główne - Mapowania</h2>



<p>Ta zakładka pozwala na ustalenie mapowań serwisu na adresy sieciowe. Mapowania są przydatne w wielu wypadkach, np. podczas testowania składników serwisów napisanych w językach skryptowych, dla których podgląd musi być wywoływany za pomocą adresu URL, czy w innej sytuacji np. przez funkcję <a href="service_tool_synchronization.php">synchronizacji serwisu</a> ze zdalnym serwerem czy wstawiania plików lokalnych do plików otwieranych z serwera FTP, bądź WebDAV, przy ustalaniu ścieżek względnych do nich. Na tej zakładce znajdziesz dwie grupy dotyczące mapowań przy podglądzie oraz mapowań przy synchronizacji.

<p><b>Grupa Mapowanie przy podglądzie</b><br>
Mapowania przy podglądzie oznacza "przetłumaczenie" ścieżki dostępu do pliku na dysku na adres pod którym można ten dokument przeglądać w przeglądarce internetowej. Pozwala to na łatwiejsze przeglądanie i pracę podczas testowania dokumentów z wykorzystaniem lokalnego serwera WWW, np. skryptów PHP, które muszą być przeglądane za pomocą adresu URL. Korzystając z przycisków obok możesz zarządzać listą mapowań przypisanych do serwisów. Mapowania możesz zmieniać na zakładce Podgląd w głównym oknie programu. Domyślne mapowanie oznaczone jest ikoną czerwonej kulki (). Nowe mapowanie dodasz za pomocą <a href="settings_network_ftpservers_add_map.php">okna dodawania mapowania</a>.

<p><b>Grupa Mapowanie przy synchronizacji</b><br>
<p>Mapowanie synchronizacji określa z jakiego folderu na dysku Twojego komputera do jakiego folderu na wybranym serwerze będą wysyłane pliki. Możesz utworzyć jedno, bądź więcej mapowań, co pozwala na wybór osobnych podkatalogów serwisu lokalnego, bądź serwera FTP (lub WebDAV), które mają być <a href="service_tool_synchronization.php">synchronizowane</a> ze sobą. Nowe mapowanie dodasz za pomocą <a href="settings_network_ftpservers_add_map.php">okna dodawania mapowania</a>. Dodatkowo możesz określić, które mapowanie jest domyślne - będzie ono używane np. w funkcji publikowania dokumentów za pomocą <a href="network_publishing_general.php#publish_current">poleceń publikacji bieżącego dokumentu z menu Plik, czy publikacji dokumentów w zakładce Moje serwisy</a>. Domyślne mapowanie oznaczone jest ikoną czerwonej kulki ().



<p><b>Grupa Przypisany serwer </b><br>
Przypisanie serwera FTP lub WebDAV do Serwisu umożliwia zmianę aktywnego serwera na zakładce <a href="main_tabs_myftpservers_rights.php">Moje serwery</a> w zależności od wybranego serwisu. Aby uaktywnić ten mechanizm, zaznacz przełącznik '<b>Przy przełączaniu między serwisami uaktywnij serwer:</b>' i wybierz serwer z listy.
W przypadku, gdy w momencie zmiany serwisu aktywne jest połączenie z innym serwerem, wyświetlone zostanie pytanie czy chcesz, aby połączenie z bieżącym serwerem zostało zakończone, a serwer ma zostać zmieniony, czy nie.</p>
<p>Wskazany tutaj serwer będzie wybrany jako domyślny podczas tworzenia nowego mapowania przy synchronizacji w <a href="settings_network_ftpservers_add_map.php">oknie dodawania mapowania</a>.</p>



<a name="servicepropertiesoftenused"></a>
<h2>Główne - Wykluczone foldery i Często używane pliki</h2>

<p>Na tej zakładce masz dostęp do dwóch list:

<ul>
   <li><b>Foldery wykluczone z widoku</b> - Do tej listy możesz dodać podfoldery głównego folderu serwisu, które będą ukryte na liście plików i drzewie katalogów w <a href="main_tabs_myservices.php">zakładce Moje serwisy</a> w głównym oknie programu</li>. <br><b>Uwaga!</b> Ustawienie to ma wpływ również działanie <a href="find_ext.php">Rozszerzonego wyszukiwania i zamiany</a>. Należy jednak pamiętać, że w momencie przeciągania folderów do zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a> celem ich opublikowania przesłana zostanie również zawartośc folderów wykluczonych!
   <li><b>Często używane pliki</b> - To jest lista plików, które są często używane w tym serwisie. Możesz dodać tutaj pliki, które często używasz i szybko je otwierać za pomocą polecenia menu "Serwisy / Właściwości serwisu / Otwórz często używane serwisu", a także menu podręcznego listy plików na zakładce <a href="main_tabs_myservices.php">Moje serwisy</a>. Nie jest to lista generowana automatycznie na podstawie użyć poszczególnych plików.
</ul>
<p>Obok każdej listy znajdziesz przyciski, za pomocą których możesz nią zarządzać tj. dodawać i usuwać pojedyncze pozycje, a także zmieniać ich pozycję.</p>




<a name="servicepropertiesdocuments"></a>
<a name="metaindexing"></a>
<h2>Główne - Dokumenty</h2>

<p>Na tej zakładce znajdziesz opcje umożliwiające określenie domyślnej zawartości sekcji META dokumentów serwisu, sposobu wstawiania znaczników i kodowania znaków narodowych i znaków końca linii.

<p><b>Grupa Domyślna nazwa i rozszerzenie dokumentów</b><br />


<p>Ustawienia tej grupy pozwalają na określenie nazwy, jaka ma być domyślnie tworzona dla nowych dokumentów bieżącego serwisu. Dzięki temu jeden serwis może zawierać domyślnie pliki typu <tt>*.html</tt>, inny typu <tt>*.php</tt> itp.</p>

<p>Dostępne są dwa pola - <b>Nazwa</b> i <b>Rozszerzenie</b>, przy czym drugie z nich dodatkowo zawiera listę rozwijaną, na której umieszczono najczęściej używane rozszerzenia.</p>


<p><b>Grupa Domyślne właściwości META dokumentów w serwisie</b><br />

<p>Możesz przypisać do serwisu domyślne właściwości sekcji META, które będą automatycznie stosowane podczas tworzenia nowych dokumentów w tym serwisie. W celu zmiany ustawień sekcji META kliknij przycisk Edytuj domyślne wartości META, co spowoduje otwarcie <a href="tool_meta.php">Edytora sekcji META</a>.

<p><b>Grupa Ustawienia kodowania dla dokumentów tego serwisu</b><br />

<p><b>Domyślne kodowanie dokumentów w serwisie</b><br>
Wybierz z listy kodowanie, jakie ma być stosowane dla dokumentów tego serwisu. Domyślnie stosowane jest kodowanie wskazane w oknie <a href="settings.php">Ustawienia programu</a> /<a href="settings_editor.php"> Edytor...</a> / <a href="settings_editor_documents.php">Dokumenty</a>. Więcej na ten temat czytaj w <a href="charset_encoding.php">Kodowanie znaków narodowych</a>, jednak to ustawienie ma wyższy priorytet.

<p><b>Domyślne kodowanie znaków końca linii w serwisie</b><br>
Wybierz z listy kodowanie znaków końca linii, jakie ma być stosowane dla dokumentów tego serwisu. Domyślnie stosowane jest kodowanie wskazane w oknie <a href="settings.php">Ustawienia programu</a> / <a href="settings_editor.php"> Edytor...</a> / <a href="settings_editor_documents.php">Dokumenty</a>, jednak to ustawienie ma wyższy priorytet. Znaki mogą być kodowane, jak w systemie Windows, Unix, bądź MacOS.

<p><b>Grupa Wstawianie znaczników do dokumentów tego serwisu</b><br />



<p><b>Domyślny język dokumentów w serwisie</b><br />
Wybierz z listy język znacznikowy, który będzie domyślnie używany do tworzenia dokumentów w bieżącym serwisie. W ten sposób możesz zmienić zachowanie się programu określone w oknie Ustawienia programu. Ustawienie to będzie używane w sytuacji, gdy rozpoznanie typu dokumentu przy pomocy standardowych metod (DOCTYPE, xlmns) nie będzie możliwe. Lista zawiera nazwy wszystkich kategorii (wszystkie języki znacznikowe) obsługiwane przez Pająka. Możesz zmienić zawartość listy (dodać i usunąć język, a także zmodyfikować jego ustawienia) za pomocą <a href="tagdata_editor_tdf.php">Edytora TDF</a>.

<p><b>Znaczniki nie-XML (np. HTML 4) wstawiaj:</b><br />
Wybierz z listy sposób wstawiania znaczników. Domyślnie stosowany jest styl wstawiania znaczników wskazany w oknie <a href="settings.php">Ustawienia programu</a> / <a href="settings_editor.php"> Edytor...</a> / <a href="settings_editor_documents.php">Dokumenty</a>, możesz jednak wymusić wstawianie znaczników małymi, bądź wielkimi literami.


<a name="virtual_include"></a>
<h2>Wymuszone dołączanie plików</h2>


<p>Na tej planszy znajduje się lista plików, których analizowanie przez mechanizmy dynamicznych podpowiedzi jest wymuszone. Za pomocą przycisków umieszczonych obok listy możesz dodawać pliki różnych typów (skrypty PHP, arkusze stylów CSS i skrypty JS) oraz całe foldery.</p>
Czytaj więcej w temacie<a href="service_virtual_include.php"> Serwisy - Wymuszone dołączanie plików</a>.


<a name="stat_statystyki"></a>
<h2>Statystyki - Statystyki składników</h2>

<p>Ta zakładka pełni funkcję informacyjną i pozwala na zapoznanie się ze statystkami serwisu. <b>Uwaga!</b> Przy dużych serwisach, wygenerowanie informacji znajdujących się na tej zakładce może potrwać dłuższą chwilę! Znajdziesz tutaj następujące statystyki:

<p><b>Lista składników serwisu</b><br>
Na tej liście możesz szybko sprawdzić jakie składniki znajdują się w serwisie, ile ich jest i jaki jest ich sumaryczny rozmiar.

<p><b>Najstarszy i najnowczy dokument</b><br>
Ta lista prezentuje informacje o dokumentach, które były modyfikowane w Pająku jako pierwsze i ostatnie.

<p><b>Liczbę zadań do wykonania</b><br>
Na tej liście możesz szybko sprawdzić ile jest zadań do wykonania w całym serwisie, a także w którym dokumencie masz ich najwięcej.

<p><b>Liczbę słów, znaków, wierszy w dokumentach</b><br>
Na tej liście możesz szybko sprawdzić liczbę jest słów, znaków oraz stron w dokumentach serwisu. Za pomocą pola pod listą liczby słów i stron możesz określić jaka liczba znaków ze spacjami odpowiada jednej stronie maszynopisu. Przedstawione liczby nie dotyczą zawartości znaczników HTML, lecz jedynie tekstu wyświetlanego przez przeglądarkę. Dokładniej rzecz ujmując, funkcja zliczająca słowa i znaki pomija wszystko zawarte między znakami <tt>&lt;</tt> i <tt>&gt;</tt>, przeznaczona jest wyłącznie szacunkowego przedstawiania objętości tekstu w plikach HTML - dla innych rodzajów dokumentów dane mogą być niepoprawne.


<a name="stat_autorzy"></a>
<h2>Statystyki - Statuty i autorzy</h2>

Ta zakładka zawiera dwie listy:

<p><b>Lista statusów</b><br>
Lista statusów wyświetla informacje o ilości plików posiadających różne statusy zaawansowania, które określa się oknie informacji o dokumencie.

<p><b>Lista autorów</b><br>
Pająk pamieta w plikach o rozszerzeniach ADD informacje o użytkownikach modyfikujących dokumenty. Na tej liście prezentowani są wszyscy współtwórcy serwisu oraz ilość dokumentów przez nich zmodyfikowanych.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="services_general.php">O serwisach ogólnie</a>
	<li><a href="service_tool_synchronization.php">Synchronizacja serwisów</a>
	<li><a href="tool_htmlhelp_general.php">HTML Help</a>
	<li><a href="main_tabs_myservices.php">Zakładka Moje serwisy</a>
	<li><a href="tool_meta.php">Edytor sekcji META dokumentu</a>
	<li><a href="main_window_desc.php">Główne okno programu</a>
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