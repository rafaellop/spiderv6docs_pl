<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Dolny panel wyników - Zapis komunikacji Pająka z serwerem</title>

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
<h1>Dolny panel wyników - Zapis komunikacji Pająka z serwerem</h1>

<!-- treść pomocy -->
<p>Ten widok zakładki <a href="down_publishing.php">Operacje publikowania</a> znajdującej się na <a href="down_panel.php">dolnym panelu wyników</a> przedstawia tzw. log serwera czyli zapis komunikacji między Pająkiem a serwerem. Log jest tworzony przy każdej operacji wykonywanej na serwerze czy to z zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a>, <a href="down_publishing_ftpqueue.php">kolejki plików</a> czy <a href="service_tool_synchronization.php">synchronizacji</a>.

<p>Przykładowy log może wyglądać następująco:

<pre>
(moje serwery) < 220 FTP server (Version 6.00LS) ready.
(moje serwery) > USER creams
(moje serwery) < 331 Password required for creams.
(moje serwery) > PASS ********
(moje serwery) < 230 User creams logged in.
(moje serwery) > TYPE I
(moje serwery) < 200 Type set to I.
(moje serwery) > PWD
(moje serwery) < 257 "/" is current directory.
(moje serwery) > CWD /
(moje serwery) < 250 CWD command successful.
(moje serwery) > PORT 192,168,1,2,4,119
(moje serwery) < 200 PORT command successful.
(moje serwery) > LIST
(moje serwery) < 150 Opening BINARY mode data connection for '/bin/ls'.
(moje serwery) < 226 Transfer complete.
(moje serwery) ! 3798 bytes received/sent in 1 seconds (3186 Bytes/sec)
(moje serwery) ! total 386
(moje serwery) ! -rw-r--r--   1 nobody  nogroup  17284 Sep 30 00:32 advertise.php
(moje serwery) ! -rw-r--r--   1 nobody  nogroup    704 Nov  3 10:45 avatar.php
(moje serwery) ! -rw-r--r--   1 nobody  nogroup   3046 Sep 30 00:32 backend.php
(moje serwery) ! -rw-r--r--   1 nobody  nogroup  16178 Sep 30 00:32 banners.php
(moje serwery) ! drwxr-xr-x   2 nobody  nogroup    512 Sep 30 00:54 cennik
</pre>

<p>Zapis logu połączenia może być pomocny w diagnozowaniu przyczyn problemów z połączeniem czy prawami dostępu na przykład.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="down_publishing.php#downpanelpublishinglist">Inne zakładki operacji publikowania</a>
	<li><a href="down_panel.php#downpanellist">Inne zakładki dolnego panelu</a>
	<li><a href="main_tabs_myftpservers.php">Zakładka "Moje serwery"</a>
   <li><a href="settings_network_ftpclient.php">Ustawienia klienta FTP i WebDAV</a>
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