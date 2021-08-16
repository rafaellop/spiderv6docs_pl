
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Praca w trybach online i offline</title>

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
<h1>Praca w trybach online i offline</h1>

<p>Pająk dysponuje unikalną funkcją pozwalającą na pracę na serwerach FTP i WebDAV również bez aktywnego połączenia z nim. Ten tryb nazywany jest trybem <i>offline</i> w odróżnieniu od trybu pracy <i>online</i>, która odbywa się przy aktywnym połączeniu z serwerem. Oba tryby dotyczą pracy na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>.

<h2>Tryb online</h2>

<p>W tryb online przechodzi się po wybraniu serwera na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>, a następnie połączeniu z nim za pomocą przycisku znajdującego się obok listy serwerów. Domyślnie wyświetlana jest zawartość katalogu domowego użytkownika. 

<p>Po przejściu w tryb online lista plików oraz drzewko katalogów stają się aktywne, a lista serwerów jest nieaktywna, bowiem nie można zmienić serwera przy aktywnym połączeniu z innym serwerem.

<p>W trybie online niektóre funkcje, które wykonujesz na zawartości serwera odbywają się natychmiastowo. Są to takie funkcje jak:

<ul>
	<li>Usuwanie plików lub katalogów
	<li>Zmiana nazwy plików lub katalogów
	<li>Tworzenie pustych dokumentów
	<li>Tworzenie nowych katalogów
   	<li><a href="main_tabs_myftpservers_rights.php">Zmiana praw dostępu do plików lub katalogów</a>(tylko na serwerze FTP)
	<li><a href="main_tabs_myftpservers_lockfile.php">Blokowanie, odblokowywanie i informacje o blokadach dokumentów</a>
</ul>

<p>Natomiast operacje publikowania, tj. pobierania bądź wysyłania plików odbywają się za pomocą <a href="down_publishing_ftpqueue.php">kolejki plików</a>, która jest opisana szerzej w innym rozdziale. Kolejka zależnie od ustawień może być wykonywana automatycznie lub nie.

<h2>Tryb offline</h2>

<p>Tryb offline korzysta z pliku tzw. <i>cache</i>, który znajduje się na dysku. Plik ten jest tworzony podczas aktywnego połączenia z wybranym serwerem. Zatem, aby tryb offline mógł być dostępny, powinieneś choć raz połączyć się z serwerem, aby plik cache został utworzony i mógł być wykorzystywany w trybie offline. W pliku cache pamiętane są zawartości tych katalogów, które odwiedziłeś, dlatego czasem możesz w trybie offline nie zobaczyć zawartości wybranego katalogu.

<p>W tryb offline przechodzi się po wybraniu serwera na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>. O ile plik cache opisany wyżej istnieje, nie trzeba łączyć się z serwerem i od razu można pracować.

<p>W trybie offline lista plików oraz drzewko katalogów są aktywne, ale ikonki elementów są wyszarzone. W ramach zawartości pliku cache, możesz poruszać się po serwerze i wykonywać różne operacje. Operacje te jednak są w większości dodawane do <a href="down_publishing_ftpqueue.php">kolejki plików</a>, aby możliwe było wykonanie wielu funkcji na raz po uzyskaniu połączenia.

<p>W trybie offline niektóre funkcje wymagają nawiązania aktywnego połączenia z serwerem. Są to takie funkcje jak:

<ul>
	<li>Tworzenie nowych dokumentów
	<li><a href="main_tabs_myftpservers_rights.php">Zmiana praw dostępu do plików lub katalogów</a> (tylko na serwerze FTP)
	<li><a href="main_tabs_myftpservers_lockfile.php">Blokowanie, odblokowywanie i informacje o blokadach dokumentów</a>
</ul>

<p>Pozostałe operacje są dodawane do <a href="down_publishing_ftpqueue.php">kolejki plików serwera</a>, która jest opisana szerzej w innym rozdziale. Po jej uruchomieniu wszystkie zapamiętane operacje zostaną wykonane na serwerze.


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
	<li><a href="down_publishing_ftpqueue.php">Kolejka plików</a>
	<li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
	<li><a href="settings_network_ftpclient.php">Ustawienia klienta FTP i WebDAV</a>
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