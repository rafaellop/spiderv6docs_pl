<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Zablokowanie elementu</title>

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
<h1>Zablokowanie elementu</h1>

<p>
Pracując nad plikami możesz chcieć zablokować dostęp dla innych użytkowników do aktualnie modyfikowanych na zdalnym serwerze dokumentów. Jest to funkcja wyjątkowo przydatna w wypadku pracy grupowej, gdzie kilka osób pracuje wspólnie nad projektem. Aby powiadomić innych o tym, że plik jest właśnie modyfikowany, możesz użyć blokowania. Okienko to jest wyświetlane po wybraniu funkcji <a href="main_tabs_myftpservers.php#myftpserverslockfile">Zablokowanie wybranych dokumentów</a> na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a> lub jako okno informacyjne po wybraniu polecenia <a href="main_tabs_myftpservers.php#myftpserverslockfileinfo">Informacji o blokadzie</a>.

<p>Podczas wybrania funkcji blokowania plików wyświetlane jest to okno, a użytkownik jest proszony o podanie informacji opisującej blokadę. W przypadku przeglądania informacji o blokadzie, wyświetlane są informacje umieszczone na serwerze przez użytkownika, który zablokował plik. Opcje umieszczone w oknie blokowania plików różnia się nieco w zależności, czy pracujesz na serwerze FTP, czy WebDAV.

<h2>Pola widoczne podczas blokowania pliku na serwerze FTP</h2>

<p><b>Nazwa pliku</b><br>
Wyświetla nazwę pliku, który będzie blokowany lub którego dotyczy wyświetlana informacja o blokadzie.

<p><b>Blokujący użytkownik</b><br>
Wyświetla informacje o użytkowniku, który zakłada blokadę. W przypadku nakładania blokady informacje te są pobierane z <a href="settings_user.php">Ustawień dotyczących użytkownika programu</a>. W przypadku wyświetlania informacji o blokadzie w oknie wyświetlana jest informacja o użytkowniku, który zablokował plik. Jeśli użytkownik podał adres email, będziesz mógł w niego kliknąć i wysłać email do użytkownika.

<p><b>Data założenia blokady</b><br>
W tym miejscu wyświetlana jest data i godzina nałożenia blokady, co pełni funkcje informacyjne.

<p><b>Opis blokady</b><br>
W przypadku blokowania pliku w polu tym możesz wprowadzić informacje o przyczynie nałożenia blokady. Informacje te są wyświetlane gdy ktoś chce sprawdzić <a href="main_tabs_myftpservers.php#myftpserverslockfileinfo">Informacje o blokadzie</a> na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>. Dobrze jest podać tutaj jakieś informacje, aby powiadomić innych użytkowników dlaczego dana blokada została nałożona.


<h2>Pola widoczne podczas blokowania pliku na serwerze WebDAV</h2>

<p><b>Nazwa pliku</b><br>
Jak dla FTP.

<p><b>Blokujący użytkownik</b><br>
Jak dla FTP.

<p><b>Czas trwania blokady</b><br />
Lista umożliwiająca określanie czasu, przez jaki blokada jest ważna. Domyślnie <i>[nieograniczony]</i>.

<p><b>Dodatkowe własności:</b><br />
<ul>
<li><b>nie zezwalaj na modyfikację zasobów objętych blokadą</b> - zaznaczenie tej opcji uniemożliwi jakąkolwiek ingerencję w zablokowany plik. Jeśli będzie odznaczone, blokada będzie miała wyłącznie charakter informacyjny.</li>
<li><b>zablokuj folder wraz z całą zawartością</b> - jeśli blokowanym elementem jest folder, po zaznaczeniu tej opcji, zablokowane będą również wszystkie jego elementy (łącznie z podfolderami)</li>
</ul>

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
	<li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
	<li><a href="settings_network_ftpclient.php">Ustawienia klienta FTP</a>
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