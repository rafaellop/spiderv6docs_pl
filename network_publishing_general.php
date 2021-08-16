
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Publikowanie - ogólnie</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<a name="top"></a>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Pająk V6</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="contents_main.php">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.php">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.php">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.php">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.php">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.php">Ustawienia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#googlesearch" role="button" aria-expanded="false" aria-controls="googlesearch">Wyszukaj</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	
<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Publikowanie - ogólnie</h1>

<!-- nagłowek podtematu -->

<p>Pająk posiada bardzo rozbudowane narzędzia służące do publikacji dokumentów i serwisów w siecie, a także do bezpośredniej pracy nad dokumentami na serwerze.</p>

<p>Do publikowania dokumentów lub całych serwisów w sieci służą wbudowane w Pająka moduły <b>FTP</b> i <b>WebDAV</b> znajdujące się na <a href="main_tabs_myftpservers.php">zakładce Moje serwery</a>.</p>


<h3>Obsługa WebDAV</h3>



<p>Więcej na temat WebDAV możesz przeczytać na stronie <a href="https://www.webdav.org" target="_blank">www.webdav.org</a>.</p>


<h2>Publikowanie pojedynczych i wielu dokumentów</h2>

<h3>Przygotowanie listy serwerów</h3>
<p>Podstawową czynnością, jaką musisz wykonać, aby móc przesyłać pliki między swoim komputerem, a serwerem w sieci, jest przygotowanie listy serwerów. W tym celu wyświetl zakładkę <a href="main_tabs_myftpservers.php">Moje serwery</a> i kliknij przycisk wyświetlający okno <a href="settings_network_ftpservers.php">Ustawienia sieci i serwerów</a> (całkiem u góry, po prawej stronie listy serwerów). Korzystając z niego, będziesz mógł dodać nowy serwer na listę za pomocą okienka <a href="settings_network_ftpservers_add.php">Dodaj serwer...</a> wyświetlanego za pomocą przycisku z plusikiem.
<p>Po zatwierdzeniu zmian, dodane serwery pojawią się na liście w zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>. Wystarczy teraz kliknąć przycisk oznaczony zieloną wtyczką, Jeśli wprowadzone dane są poprawne, Pająk połączy się z serwerem (w zależności od ustawień - i w razie potrzeby - możesz zostać poproszony o potwierdzenie, czy komputer jest połączony z siecią, bądź o nawiązanie połączenia) i... możesz zacząć przesyłać pliki!
</p>

<h3>Jak opublikować dokument z dysku lokalnego w sieci Internet?</h3>
<p>Połącz się z serwerem na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>, wejdź do odpowiedniego foldera i z listy plików na zakładce <a href="main_tabs_myservices.php">Moje serwisy</a> przeciągnij wybrany dokument do obszaru wyświetlającego zawartość serwera. Dokument zostanie dodany do <a href="down_publishing_ftpqueue.php">Kolejki plików FTP</a>, która znajduje się na <a href="down_panel.php">dolnym panelu</a>. Możesz też publikować pliki do Sieci przeciągając je do zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a> z innych okien, jak np. z Eksploratora Windows. Dodatkowo istnieje możliwość opublikowania pliku za pomocą przeciągania go na listę plików serwera z <a href="down_find_report.php">Raport wyszukiwania</a>.

<p>Jeśli chcesz już opublikować dokument, wciśnij w oknie kolejki przycisk rozpoczynający wykonywanie zadań. Jeśli chcesz wysłać inne dokumenty, postępuj z nimi tak samo jak z poprzednim.
<p>Możesz również wysyłać na serwer całe katalogi zawierające podkatalogi i pliki. Struktura wysyłanego katalogu zostanie odtworzona na serwerze.


<a name="publish_current">
<h3>Publikowanie bieżącego dokumentu, Publikowanie wszystkich otwartych dokumentów</h3>
<p>Istnieje również szybki sposób publikowania aktualnie edytowanego dokumentu, bądź wszystkich otwartych dokumentów na serwerze. Skorzystaj w tym celu z polecenia <b>Publikuj bieżący w sieci</b> umieszczonego w <a href="main_menu_file.php">Menu Plik</a> (bądź <b>Publikuj otwarte w sieci</b> aby umieścić na serwerze wszystkie otwarte dokumenty).
<p>Domyślnie funkcja ta przesyła dokumenty do bieżącego folderu na liście plików zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a>.Aby Pająk mógł opublikować dokumenty, konieczne jest czynne połączenie z serwerem - w przeciwnym razie pliki zostaną jedynie dodane do <a href="down_publishing_ftpqueue.php">kolejki plików ftp</a> i przesłane po jej uruchomieniu.</p>, jeśli dla bieżącego <a href="services_general.php">serwisu</a> istnieje jedno lub więcej <a href="service_tool_synchronization.php">mapowań dla synchronizacji</a>, funkcja ta skorzysta z domyślnego mapowania i prześle plik do odpowiedniego folderu na serwerze.


<h3>Publikowanie dokumentu poleceniem z zakładki Moje serwisy</h3>
<p>Na pasku przycisków zakładki <a href="main_tabs_myservices.php">Moje serwisy</a> znajduje się polecenie <b>Publikuj w sieci</b>. Umożliwia ono przesłanie elementu wskazanego na liście plików tej zakładki na wybrany serwer. Funkcja ta potrafi korzystać z mapowania dla synchronizacji (czytaj wyżej w opisie funkcji <b>Publikowanie bieżącego dokumentu, Publikowanie wszystkich otwartych dokumentów</b>).


<h3>Jak pobrać pliki z serwera na dysk lokalny?</h3>
<p>Pobieranie plików na dysk lokalny przebiega identycznie, jak publikowanie ich w Internecie. Wystarczy przeciągnąć plik z zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a> do katalogu docelowego na zakładce <a href="main_tabs_myservices.php">Moje serwisy</a>, a następnie uruchomić wykonywanie kolejki.
<p>W identyczny sposób można pobierać całe katalogi - struktura pobieranego katalogu (podkatalogi i zawarte w nich pliki) zostanie odbudowana na dysku lokalnym.



<h3>Automatyczne wykonywanie kolejki</h3>
<p>Możliwe jest automatyczne wykonywanie kolejki, co jest bardzo wygodne, gdy wielokrotnie wysyłasz i pobierasz różne pliki przy aktywnym cały czas połączeniu. W tym celu wybierz odpowiednie opcje w <a href="settings_network_ftpclient.php">Ustawieniach programu</a>.



<h2>Obsługa bezpiecznych połączeń</h2>



Pająk umożliwia nawiązywanie bezpiecznych (szyfrowanych) połączeń zarówno z serwerami FTP (SSL/TLS), jak i WebDAV (HTTPS). Sposób łączenia się z serwerem należy wybrać w oknie <a href="settings_network_ftpservers_add.php">Właściwości serwera</a>.
<p><a href="settings_network_ftpservers_add.php#secureconnections">Koniecznie kliknij TU przeczytaj więcej o obsłudze bezpiecznych połączeń!.</a></p>


<h2>Synchronizacja serwisów</h2>



<p>Pająk umożliwia <a href="service_tool_synchronization.php">Synchronizację serwisów</a>.  Ta unikatowa funkcja pozwala szybko porównać i automatycznie zsynchronizować zawartość serwisu na dysku twardym i w Internecie.</p>
<p>Dzięki synchronizacji odpada konieczność ręcznego przeglądania wielu katalogów i porównywania plików. Teraz za pomocą kilku kliknięć można oszczędzić wiele czasu. </p>
<p>W celu zabezpieczenia danych, przed zsynchronizowaniem serwisu na dysku i w Internecie, utworzona zostaje <a href="down_publishing_syncreport.php">kolejka synchronizacji</a>, na której możesz zweryfikować listę plików, jakie mają zostać przesłane, bądź usunięte.</p>
<p>Synchronizacja jest możliwa w obie strony, tzn. zarówno z komputera lokalnego na serwer w Sieci, jak i z Sieci na komputer lokalny.</p>



<h2>Praca zdalna</h2>



Kolejną bardzo przydatną właściwością Pająka jest możliwość <a href="network_opendoc_ftp.php">edycji dokumentów otwieranych bezpośrednio z serwera</a> za pomocą zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a>.



<h2>Ułatwienia w pracy grupowej</h2>

<p>Jeśli nad projektem pracuje wiele osób, niezmiernie ważną sprawą jest kontrolowanie, jaki dokument kto w danej chwili edytuje, i niedopuszczenie do nadpisania czyichś zmian. </p>
<p>Pająk umożliwia zabezpieczenie dokumentów poprzez <a href="main_tabs_myftpservers_lockfile.php">nakładanie blokady na dokument</a>. Możesz to zrobić za pomocą polecenia w menu w zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>.</p>



<h2>Praca w trybie offline</h2>

<p>Pająk dysponuje unikalną funkcją pozwalającą na pracę na serwerze FTP również bez aktywnego połączenia z nim. Ten tryb nazywany jest <a href="main_tabs_myftpservers_on-offline.php">trybem <i>offline</i></a> w odróżnieniu od trybu pracy <i>online</i>, który odbywa się przy aktywnym połączeniu z serwerem FTP. Oba tryby dotyczą pracy na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>.
<p>Tryb offline korzysta z pliku tzw. <i>cache</i>, który znajduje się na dysku. Plik ten jest tworzony podczas aktywnego połączenia z wybranym serwerem FTP.




</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_tabs_myftpservers.php">Zakładka Moje serwery</a>
	<li><a href="settings_network.php">Ustawienia programu - Ustawienia sieci i serwerów FTP</a></li>
	<li><a href="tool_open_remote.php">Narzędzia - Otwarcie strony z Sieci</a>
	<li><a href="settings_network_ftpservers_add_map.php">Mapowanie ścieżki na serwerze FTP na adres URL</a>
	<li><a href="main_tabs_myftpservers_on-offline.php">Praca na serwerze offline</a>
	<li><a href="main_tabs_myftpservers_lockfile.php">Blokowanie dokumentów</a>
	<li><a href="service_tool_synchronization.php">Synchronizacja serwisów</a>
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

</body>
</html>