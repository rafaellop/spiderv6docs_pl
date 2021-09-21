
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Ustawienia sieci i serwerów FTP</title>

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
<h1>Ustawienia programu - Ustawienia sieci i serwerów</h1>


<!-- treść pomocy -->
<p>
Pająk oferuje szeroki zakres funkcji związanych z obsługą sieci Internet. W zakres tych funkcji wchodzą funkcje publikowania na serwerach FTP z wykorzystaniem wbudowanego klienta FTP i WebDAV, czy funkcji automatycznej synchronizacji serwisów, ale także funkcje podglądu czy otwierania dokumentów z sieci przez protokoły FTP i HTTP. W tej kategorii ustawień masz dostęp do wszystkich opcji związanych z sieciowym funkcjonowaniem Pająka. 

<p>
Dostępne są następujące grupy ustawień w ramach tego okna:

<ul>
	<a name="settingslistnetwork"></a>
	<li><a href="settings_network_net.php">Ustawienia sieci</a> - ogólne ustawienia związane z funkcjonowaniem połączeń sieciowych w Pająku.
	<li><a href="settings_network_ftpservers.php">Serwery FTP i WebDAV</a> - dodawanie serwerów FTP i WebDAV obsługiwanych w Pająku.
	<li><a href="settings_network_ftpclient.php">Wbudowany klient FTP i WebDAV</a> - ustawienia związane z wbudowanymi w Pająka klientami FTP i WebDAV.
	<li><a href="settings_network_synchronization.php">Kolejka plików i Synchronizacja serwisów</a> - ustawienia <a href="down_publishing_ftpqueue.php">kolejki plików</a> serwerów FTP i WebDAV oraz ogólne ustawienia <a href="service_tool_synchronization.php">Synchronizacji serwisów</a>.
        <li><a href="settings_network_mysqlservers.php">Serwery baz danych MySQL</a> - ustawienia związane z wbudowaną w Pająka obsługą serwerów baz danych MySQL, dodawanie i usuwanie baz danych.
   <li><a href="settings_network_rss.php">Ustawienia kanałów RSS</a> - ustawienia związane z wbudowaną w Pająka obsługą kanałów najnowszych wiadomośći (RSS).
</ul>

<p>
&nbsp;Okno to wywołuje się za pomocą polecenia w menu znajdującym się pod przyciskiem pokazanym obok. Możesz również dostać się do tych ustawień korzystając z głównego okna ustawień oraz kategorii znajdujących się na drugiej zakładce <a href="settings.php">głównego okna ustawień</a>.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings.php#settingslist">Główne ustawienia</a>
	<li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
	<li><a href="service_tool_synchronization.php">Synchronizacja serwisów</a>
	<li><a href="main_tabs_myftpservers.php">Wbudowany klient FTP</a>
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
