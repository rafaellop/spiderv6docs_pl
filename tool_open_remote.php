<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Otwieranie strony z Sieci</title>

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
<h1>Narzędzia - Otwieranie strony z Sieci</h1>

<!-- nagłowek podtematu -->

<p>Okno służy do otwierania dokumentów zdalnych na serwerze HTTP (serwer www) bądź FTP. Możesz je otworzyć z menu <a href="main_menu_file.php">Plik</a> / Otwórz z Sieci, lub za pomocą standardowego skrótu klawiszowego <tt>Ctrl+D</tt>. Ikona polecenia została pokazana obok.</p>

<p>Okno zostało podzielone na dwie zakładki:</p>

<ul>
	<li>Otwarcie strony z sieci WWW</li>
	<li>Otwarcie strony z serwera FTP</li>
</ul>



<h2>Otwarcie strony z sieci WWW</h2>

<p>Ta zakładka umożliwia otworzenie strony z serwera WWW. Zawiera następujące pola:</p>

<p><b>Adres URL</b><br />
Wpisz adres URL do dokumentu, który chcesz otworzyć.</p>

<p><b>Użyj autoryzacji przy pobieraniu</b><br />
Zaznacz ten przełącznik, jeśli trzeba użyć prostej autoryzacji (ang. <i>basic authorization</i>) w celu uzyskania dostępu do strony.</p>

<ul>
	<li><p><b>Użytkownik, Hasło</b><br />Podaj nazwę użytkownika i hasło dla prostej autoryzacji.</p></li>
	<li><p><b>Pamiętaj hasło</b><br />Zaznacz, jeśli program ma zapamiętać hasło dla tej nazwy użytkownika.</p></li>
</ul>



<h2>Otwarcie strony z serwera FTP</h2>


<p>Ta zakładka umożliwia otworzenie strony z serwera FTP. Zawiera następujące pola:</p>

<p><b>Adres serwera</b><br />
Podaj adres serwera FTP, a którego chcesz otworzyć stronę.</p>

<p><b>Port</b><br />
Podaj numer portu, na którym pracuje serwer FTP. Standardowo jest to port nr 21.</p>

<p><b>Użytkownik, hasło</b><br />
Podaj nazwę użytkownika i hasło.</p>

<p><b>Lista serwerów FTP</b><br />
Kliknij, aby wybrać z listy nazwę <a href="settings_network_ftpservers_add.php">serwera FTP</a>, z którego mają być skopiowane i przypisane w tym okienku ustawienia.</p>

<p><b>Pamiętaj hasło</b><br />
Zaznacz, jeśli program ma zapamiętać hasło dla tej nazwy użytkownika.</p>

<p><b>Ścieżka do pliku</b>
Podaj ścieżkę do pliku na serwerze.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_menu_file.php">Menu Plik</a>
	<li><a href="network_opendoc_ftp.php">Otwieranie i edycja dokumentów bezpośrednio na serwerze - ogólnie</a>
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
