<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Dolny panel wyników - Raport synchronizacji</title>

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
<h1>Dolny panel wyników - Raport synchronizacji</h1>

<!-- treść pomocy -->
<p>Ten widok zakładki <a href="down_publishing.php">Operacje publikowania</a> znajdującej się na <a href="down_panel.php">dolnym panelu wyników</a> przedstawia raport synchronizacji serwisu. Synchronizacja została opisana szerzej w temacie poświęconym narzędziu <a href="service_tool_synchronization.php">synchronizacji serwisu</a>. Raport prezentowany na tej zakładce tworzony jest właśnie z wymienionego wyżej narzędzia synchronizacji serwisu na podstawie porównania zawartości serwisu lokalnego i zdalnego serwera FTP. Zakładka ta pojawia się automatycznie po utworzeniu listy plików do synchronizacji.

<p>Raport synchronizacji pełni zarazem funkcję informacyjną, jak i jest przede wszystkim narzędziem wykonywania synchronizacji, bowiem po utworzeniu listy elementów podlegających synchronizacji, synchronizacja nie jest wykonywana automatycznie, lecz program czeka na decyzję użytkownika. Możesz bowiem chcieć wyłączyć niektóre elementy z listy synchronizacji mimo, że w oknie <a href="service_tool_synchronization.php">ustawień synchronizacji</a> zdefinowałeś już pewne ustawienia.

<p>Ogólne ustawienia narzędzia synchronizacji znajdziesz tez w oknie <a href="settings_network.php">Ustawienia sieci i serwerów</a> na zakładce <a href="settings_network_synchronization.php">Kolejka plików i synchronizacja</a>.</p>

<p>Podczas wykonywania synchronizacji możesz swobodnie pracować na innym serwerze na zakładce "Moje serwery". Synchronizacja i <a href="down_publishing_ftpqueue.php">Kolejka plików FTP</a> działają niezależnie!</p>

<h2>Opis listy synchronizacji</h2>

<p>Lista prezentowana na tej zakładce składa się z kilku kolumn, które pełnią funkcję informacyjną:

<p><b>Nazwa pliku</b><br>
W tej kolumnie umieszczane są nazwy plików, które są wybrane do synchronizacji. Obok pliku znajduje się ikona typu pliku oraz przełącznik, którego wyłączenie powoduje, że plik nie będzie brany pod uwagę przy synchronizacji.

<p><b>Lokalna kopia</b><br>
W tej kolumnie znajdziesz informacje na temat daty i godziny modyfikacji lokalnej kopii pliku umieszczonego na liście synchronizacji. W nawiasie podany jest rozmiar pliku. Jeśli plik nie istnieje również podana jest odpowiednia informacja.

<p><b>Zdalna kopia</b><br>
W tej kolumnie znajdziesz informacje na temat daty i godziny modyfikacji zdalnej kopii pliku umieszczonego na liście synchronizacji. W nawiasie podany jest rozmiar pliku. Jeśli plik nie istnieje również podana jest odpowiednia informacja.

<p><b>Status</b><br>
Ta kolumna informuje o statusie elementu w kolejce synchronizacji (np. "do wykonania" lub "wykonano").

<p><b>Czynność</b><br>
Ta kolumna informuje o czynności jaka będzie wykonana na elemencie raportu synchronizacji.

<p><b>Serwer</b><br>
W tym miejscu znajduje się nazwa serwera, którego dotyczy operacja na elemencie.


<h2>Przyciski sterujące</h2>

<p>Listą elementów przeznaczonych do synchronizacji steruje się za pomocą przycisków znajdujących się po prawej stronie listy. Oto znaczenie poszczególnych:

<p><b>Przełączenie Widoku zakładki publikowanie</b><br>
Przycisk ten ma podpięte menu, za pomocą którego możesz przełączać się pomiędzy widokami zakładki <a href="down_publishing.php#downpanelpublishinglist">Operacje publikowania</a>.

<p><b>Rozpocznij synchronizację</b><br>
Ten przycisk służy do rozpoczęcia wykonywania synchronizacji plików zebranych na liście. Po rozpoczęciu, na pasku stanu poniżej listy wyświetlany jest raport o aktualnie wykonywanym zadaniu. Znajduje się tam również wskaźnik postępu, który w jasny sposób wskazuje ile pozostało do końca bieżącego zadania.

<p><b>Zatrzymaj synchronizację</b><br>
Ten przycisk służy do zatrzymywania procesu synchronizacji, który jest w trakcie wykonywania.

<p><b>Zaznacz/odznacz według rozszerzeń</b><br />
 Ten przycisk wyświetla okienko <b>Wybór rozszerzenia</b> zawierające listę rozszerzeń wszystkich plików obecnych w kolejce synchronizacji. Dzięki temu przed rozpoczęciem wykonywania kolejki masz możliwość wyłączenia z synchronizacji plików różnych typów. W ten sposób możesz jeszcze bardziej ograniczyć liczbę plików (pierwsze podobne ograniczenie znajduje się w oknie <a href="service_tool_synchronization.php#pomijanie_rozszerzen">Serwisy - Synchronizacja serwisu</a>).

<p><b>Przenieś w górę</b><br>
Ten przyciskm pozwala na przemieszczanie zadań w kolejce w górę. Zadania umieszczone wyżej są wykonywane wcześniej.

<p><b>Przenieś w dół</b><br>
Ten przyciskm pozwala na przemieszczanie zadań w kolejce w dół.


<p><b>Usuń zaznaczony element z kolejki synchronizacji</b><br>
Ten przycisk oznaczony ikoną minusa pozwala na usunięcie wybranych (podświetlonych) elementów listy synchronizacji.

<p><b>Wyczyść kolejkę synchronizacji</b><br>
Ten przycisk oznaczony ikoną kosza pozwala na wyczyszczenie listy synchronizacji.

<p><b>Zapisz raport jako HTML</b><br>

Ten przycisk pozwala na zapisanie raportu synchronizacji na dysk w postaci dokumentu HTML.

<p><b>Zapisz raport jako TXT</b><br>
Ten przycisk pozwala na zapisanie raportu synchronizacji na dysk w postaci dokumentu tekstowego TXT.

<p><b>Pomoc</b><br>
Wyświetla temat Pomocy dla bieżącej zakładki dolnego panelu.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="service_tool_synchronization.php">Synchronizacja projektów</a>
	<li><a href="services_general.php">O serwisach ogólnie</a>
	<li><a href="down_publishing.php#downpanelpublishinglist">Inne zakładki operacji publikowania</a>
	<li><a href="down_panel.php#downpanellist">Inne zakładki dolnego panelu</a>
	<li><a href="main_tabs_myftpservers.php">Zakładka "Moje serwery"</a>
	<li><a href="settings_network_ftpclient.php">Ustawienia klienta FTP</a>
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