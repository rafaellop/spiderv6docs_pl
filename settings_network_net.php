
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Ustawienia sieci</title>

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
<h1>Ustawienia programu - Ustawienia sieci</h1>

<!-- treść pomocy -->
<p>
W tej kategorii ustawień znajdziesz ustawienia odpowiedzialne za ogólne funkcjonowanie połaczeń sieciowych z Internetm w Pająku. Znajdziesz tutaj następujące grupy ustawień:

<h2>Pytanie o połączenie</h2>

<p>Ta grupa dotyczy sposobu łączenia z siecią Internet. Znajdziesz tutaj trzy opcje: możesz nakazać programowi zawsze pytać o dostępne połączenie lub tylko gdy go nie wykryto. Możesz również całkowicie wyłączyć to pytanie np. w sytuacji gdy Twój komputer jest cały czas podłączony do sieci za pomoca łącza stałego.



<h2>Ustawienia proxy dla połączeń HTTP i FTP</h2>

<p>W przypadku połączeń HTTP lub FTP, np. w funkcji aktywacji kodów, publikowania, sprawdzania informacji o najnowszej wersji, wbydowanym kliencie FTP czy przy synchronizacji konieczne może być skonfigurowanie serwera PROXY, który udostępnia połączenie sieciowe. Skonsultuj się z administratorem swojej sieci, aby sprawdzić, czy potrzebujesz konfigurować serwer PROXY. W tej grupie znajdziesz następujące ustawienia:

<p><b>Korzystaj z serwera proxy dla połączeń</b><br>
Zaznacz ten przełącznik jeśli chcesz ustawić serwer proxy, przez który łączysz się z siecią Internet. Aby wprowadzić odpowiednie dane skontaktuj się z administratorem swojej sieci.

<p><b>Sposób łączenia się z serwerem proxy (typ serwera PROXY FTP)</b><br>
Cztery opcje określające preferowany sposób autoryzacji połączenia dla serwerów proxy. Aby wprowadzić odpowiednie dane skontaktuj się z administratorem swojej sieci.

<p><b>Adres serwera proxy</b><br>
W tym polu wprowadź adres serwera proxy, przez który łączysz się z siecią Internet.  Aby wprowadzić odpowiednie dane skontaktuj się z administratorem swojej sieci.

<p><b>Port serwera proxy</b><br>
W tym polu wprowadź port, przez który łączysz się z serwerem proxy. Aby wprowadzić odpowiednie dane skontaktuj się z administratorem swojej sieci.

<p><b>Użytkownik serwera proxy</b><br>
W tym polu wprowadź nazwę użytkownika, której używasz przy łączeniu się z serwerem proxy. Aby wprowadzić odpowiednie dane skontaktuj się z administratorem swojej sieci.

<p><b>Hasło do serwera proxy</b><br>
W tym polu wprowadź hasło użytkownika, którego używasz przy łączeniu się z serwerem proxy. Aby wprowadzić odpowiednie dane skontaktuj się z administratorem swojej sieci.

<p><b><strike>Łącz z serwerami FTP w trybie pasywnym</strike></b>
Począwszy od wersji 5.4.0 przełącznik ten znajduje się w oknie <a href="settings_network_ftpservers_add.php">Właściwości serwera FTP i WebDAV</a>, dzięki czemu możliwe jest ustawienie trybu pasywnego/aktywnego oddzielnie dla każdego serwera.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_network.php#settingslistnetwork">Inne ustawienia sieci</a>
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