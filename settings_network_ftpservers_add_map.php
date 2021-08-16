
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Ustawienia mapowania serwera FTP</title>

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
<h1>Ustawienia mapowania serwera FTP</h1>


<!-- treść pomocy -->
<p>To okno pozwala na ustalenie tzw. mapowania czyli przypisania folderu na serwerze FTP na adres URL, pod którym ten folder jest widoczny w sieci Internet jako strona WWW. Funkcje mapowań są przydatne np. w sytuacji gdy chcesz edytować dokumenty bezpośrednio z serwera FTP i mieć możliwość ich poprawnego podglądu. Możesz je wyświetlić dodając nowe mapowanie do ustawień wybranego serwera FTP w oknie <a href="settings_network_ftpservers_add.php" title="Właściwości serwera FTP">Właściwości serwera FTP</a>.

<p>Jednocześnie okno to jest również wykorzystywane do ustawiania mapowania-powiązania serwera FTP z wybranym serwisem lokalnym, co jest z kolei przydatne przy narzędziach automatycznej synchronizacji oraz przy wstawianiu plików do dokumentów otwieranych z serwera i ustalaniu do nich ścieżek względnych oraz do powiązania plików na dysku z odpowiednimi adresami URL, gdy na Twoim komputerze uruchomiłeś serwer HTTP (np. w celu wykonywania skryptów PHP itp.). W tej sytuacji okienko będzie otwierane za pomocą przycisków na  zakładce <a href="service_properites.php#service_properties_mappings" title="Własności serwisu - Mapowania">Mapowania w oknie Własności serwisu</a>

<p>Z uwagi na różnorodność zastosowań, pola i ich opisy nieco się różnią.</p>



<h2>Mapowanie dla podglądu</h2>

<p>Przedstawione niżej elementy znajdą się w okienku w sytuacji gdy będziesz tworzyć, bądź edytować mapowanie dla podglądu dokumentów otwartych z lokalnego dysku (okienko otwarte z zakładki <a href="service_properites.php#service_properties_mappings" title="Własności serwisu - Mapowania">Mapowania w oknie Własności serwisu</a>):


<p><b>Nazwa mapowania</b><br>
Tutaj wpisz nazwę mapowania, pod jaką będzie ono widoczne na liście mapowań na zakładce <a href="service_properites.php#service_properties_mappings" title="Własności serwisu - Mapowania">Mapowania w oknie Własności serwisu</a>, a także na liście dostępnych mapowań w zakładce <a href="main_preview_embed.php">Przeglądanie</a>.

<p><b>Mapowany folder</b><br>
Tutaj wpisz nazwę foldera (np. <tt>/public_html</tt>), który ma być mapowany na podany niżej adres. Możesz skorzystać z przycisku obok w celu wyświetlenie okienka umożliwiającego wybór folderu z dysku.

<p><b>Na adres URL</b><br>
Tutaj wpisz adres URL (np. <tt>https://127.0.0.1/pajaczek/</tt>), na który będzie mapowany wybrany wyżej folder. Adres ten będzie używany przy przeglądaniu dokumentów w Pająku, a także przekazywany do przeglądarek w sytuacji wywołania <a href="main_preview_external.php">zewnętrznego podglądu</a>.





<h2>Mapowanie przy synchronizacji</h2>

<p>Przedstawione niżej elementy znajdą się w okienku w sytuacji gdy będziesz tworzyć, bądź edytować mapowanie przy synchronizacji (okienko otwarte z zakładki <a href="service_properites.php#service_properties_mappings" title="Własności serwisu - Mapowania">Mapowania w oknie Własności serwisu</a>):


<p><b>Nazwa serwera</b><br>
Wybierz z listy nazwę serwera, z którym będzie przeprowadzana synchronizacja. Kliknij przycisk obok listy, aby utworzyć nowy serwer.

<p><b>Folder lokalny</b><br>
Tutaj wpisz nazwę foldera na dysku Twojego komputera (np. <tt>\public_html</tt>), którego zawartość ma być porównywana z zawartością wskazanego niżej foldera na serwerze. Możesz skorzystać z przycisku obok w celu wyświetlenie okienka umożliwiającego wybór folderu z dysku.

<p><b>Folder zdalny</b><br>
Tutaj wpisz adres URL (np. <tt>/public_html</tt>), którego zawartość ma być porównywana z zawartością wskazanego wyżej foldera na dysku Twojego komputera.

<p>Powyższe ustawienia mają wpływ na zachowanie się programu podczas edycji plików online - patrz niżej.</p>



<h2>Mapowanie foldera na serwerze FTP na adres URL</h2>

<p>Przedstawione niżej elementy znajdą się w okienku w sytuacji gdy będziesz tworzyć, bądź edytować mapowanie serwera FTP na adres URL (dla serwera wybranego z listy w oknie <a href="settings_network_ftpservers_add.php" title="Właściwości serwera FTP">Właściwości serwera FTP</a>):

<p><b>Mapowany folder</b><br>
Tutaj wpisz nazwę foldera (np. <tt>/public_html</tt>), który ma być mapowany na podany niżej adres.

<p><b>Na adres URL</b><br>
Tutaj wpisz adres URL (pełny adres z domeną i protokółem), na który będzie mapowany wybrany wyżej folder. Adres ten będzie używany przy przeglądaniu dokumentów otwartych do edycji bezpośrednio z serwera.

<p>Adres wpisany tutaj będzie również używany w sytuacji, gdy do dokumentu otwartego online przeciągniesz jakiś dokument z zakładki <a href="main_tabs_myservices.php">Moje serwisy</a>. W tej sytuacji, na podstawie tego mapowania oraz mapowania przy synchronizacji, Pająk obliczy poprawną ścieżkę do przeciąganego pliku i utworzy w dokumencie poprawne łącze tak, jakby przeciągany plik znajdował się w odpowiadającym folderze na serwerze (nie będzie jednak sprawdzał, czy faktyczenie tam się znajduje).</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_network_ftpservers.php">Ustawienia serwerów FTP i WebDAV</a>
	<li><a href="settings_network_ftpservers_add.php">Dodawanie serwera</a>
	<li><a href="services_general.php">Serwisy i korzystanie</a>
	<li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
	<li><a href="service_tool_synchronization.php">Synchronizacja serwisów</a>
	<li><a href="main_tabs_myftpservers.php">Zakładka Moje serwery</a>
	<li></li><a href="service_properites.php#service_properties_mappings" title="Własności serwisu - Mapowania">Własności serwisu - Mapowania</a>
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