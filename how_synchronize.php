<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Synchronizacja projektów</title>

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

<h1>Synchronizacja projektów</h1>
<!-- nagłowek głowny tematu -->




<!-- Treść pomocy -->

<p>Synchronizacja projektów pozwala w szybki i niezwykle łatwy sposób zsynchronizować zawartość projektu na dysku lokalnym i na serwerze. </p>
<p>Za pomocą kilku kliknięć możesz wysłać na serwer pliki bez konieczności sprawdzania, które z nich zostały od czasu ostatniej aktualizacji projektu zmienione. </p>
<p>Narzędzie to ułatwia również prace grupową - jeśli ktokolwiek z osób pracujących nad projektem zmieni coś na serwerze, nie musisz za każdym razem tego sprawdzać - Pająk pobierze zmienione pliki, uaktualniając projekt istniejący na dysku twardym.</p>

<h2>Jak zsynchronizować projekt na dysku z zawartością serwera?</h2>

<p>Aby móc skorzystać z synchronizacji muszą być spełnione dwa podstawowe warunki:
<ul>
	<li>musi być utworzony <a href="services_general.php">Projekt</a></li>
	<li>muszą być zdefiniowane <a href="settings_network_ftpservers.php">ustawienia Serwera FTP</a></li>
</ul></p>

<p>Jeśli oba warunki są spełnione, skorzystaj z polecenia "Synchronizacja projektu" znajdującego się w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_services.php">Projekty</a> / <a href="main_menu_services_properties.php">Własności projektu</a> (podmenu rozwijane strzałką z prawej strony), lub w menu pod przyciskiem "Właściwości projektu" w górnej części zakładki <a href="main_tabs_myservices.php">Moje projekty</a>.</p>

<div>Mapowanie przy synchronizacji</div>

<p>Jeśli istnieje mapowanie dla synchronizacji, uruchomi się narzędzie pozwalające na wybór ustawień i uruchomienia synchronizacji. W przeciwnym wypadku poproszony zostaniesz o utworzenie takiego mapowania, po czym pojawi się okno <a href="service_properites.php#service_properties_mappings">Właściwości projektu</a>, w którym będziesz mógł to zrobić.</p>

<p>Mapowanie przy synchronizacji pozwala powiązać folder w bieżącym projekcie oraz folder na wybranym serwerze FTP, których zawartość będzie następnie porównywana.</p>

<div>Utworzenie kolejki synchronizacji</div>

<p>Jeśli istnieje już mapowanie dla synchronizacji, uruchomione zostanie okno synchronizacji projektu. W oknie tym przeważnie nie trzeba nic zmieniać, możliwe jest jednak wykluczenie plików i folderów spod synchronizacji, bądź zawężenie synchronizacji do wybranych folderów. Szczegółowy opis okna przeczytaj w temacie <a href="service_tool_synchronization.php">Projekty - Synchronizacja projektu</a>.</p>

Możesz tez określić kierunek synchronizacji:
<ul>
	<li><b>lokalny --> zdalny</b> - po dokonaniu porównania, nowsze pliki będą wysyłane z komputera lokalnego na serwer</li>
	<li><b>zdalny --> lokalny</b> - po dokonaniu porównania, nowsze pliki będą pobierane z serwera na komputer lokalny</li>
</ul>

<p>Następnie kliknij w przycisk "Twórz listę". Spowoduje to pobranie z serwera listy istniejących na nim plików i porównanie jej z plikami istniejącymi na dysku twardym lokalnego komputera w odpowiednich (określonych przez mapowanie) folderach. W zależności od prędkości łącza i ilości plików na serwerze, może to potrwać kilka minut. W tym czasie widoczne będzie okienko pokazujące zaawansowanie pracy narzędzia - w każdej chwili możesz ją przerwać za pomocą przycisku "Zatrzymaj".</p>

<p><b>Ważne</b> - w trakcie tworzenia kolejki synchronizacji, żadne pliki nie są przesyłane na serwer i z serwera - pobierana jest jedynie lista wszystkich plików i tworzona lista plików wymagających uaktualnienia. Nie musisz więc obawiać się utraty danych. </p>


<div>Synchronizacja plików</div>

<p>Po utworzeniu, lista zostanie wyświetlona na <a href="down_publishing_syncreport.php">dolnym panelu wyników</a>. Teraz możesz ostatecznie zweryfikować listę i ewentualnie odznaczyć pliki, które nie mają jednak zostać zsynchronizowane (np. często zdarza się, że w katalogach pozostają niepotrzebne kopie zapasowe obrazków i dokumentów, które nie mają się znaleźć na serwerze).</p>

<p>Po zweryfikowaniu listy plików, kliknij w polecenie "Rozpocznij synchronizację" w menu z prawej strony zakładki.</p>

<p>Podczas synchronizacji nie możesz przeprowadzac żadnych operacji na serwerze z poziomu zakladki <a href="main_tabs_myftpservers.php">Moje serwery</a> - zostaje ona zablokowana.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="service_tool_synchronization.php">Narzędzie do synchronizacji projektu</a>
	<li><a href="main_tabs_myservices.php">Zakładka "Moje projekty"</a>
	<li><a href="services_general.php">Projekty - ogólnie</a>
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