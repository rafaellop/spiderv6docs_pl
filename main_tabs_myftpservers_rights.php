<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Zmiana praw dostępu do elementu</title>

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
<h1>Zmiana praw dostępu do elementu</h1>

<p>To narzędzie służy do zmiany praw dostępu do plików lub katalogów znajdujących się na zdalnym serwerze. Okienko to jest wyświetlane po wybraniu funkcji <a href="main_tabs_myftpservers.php#myftpserversrights">Zmiana praw dostępu</a> na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>.

<p>W tym okienku możesz szybko zmienić prawa dostępu do dowolnego pliku lub katalogu. Wystarczy zaznaczyć odpowiednie opcje i gotowe. możesz ustawić różne prawa dla właściciela pliku na serwerze, jego grupy i dla wszystkich. Jeśli chcesz ustawić dla wszystkich tych grup identyczne prawa dla odczytu, zapisu bądź wykonywania, skorzystaj z przycisków umieszczonych niżej.
<p>Odpowiedni kod cyfrowy pojawi się poniżej przycisków.</p>

Alternatywnie możliwe jest wprowadzenie oznaczenia cyfrowego. W tym celu zaznacz opcję <b>Podaj kod ręcznie</b> i wprowadź kod cyfrowy w polu obok.


<p>Prawa dostępu są przydatne w wypadku ograniczania dostępu do plików dla wybranych grup użytkowników. Zazwyczaj dla dokumentów HTML znajdujących się na serwerze powinny być ustawione prawa odczytu dla wszystkich użytkowników, czyli np. <tt>rw-r--r--</tt>, a dla folderów przechowujących strony WWW np. <tt>rwxr-xr-x</tt>. Trzeba Pamiętać, że w przypadku programów CGI, które muszą być uruchamiane na serwerze, najczęściej należy ustawić atrybut dopuszczający możliwość uruchamiania pliku.</p>


<p>Prawa dostępu w przypadku serwerów typu Unix określają dostęp do poszczególnych plików dla właścicieli tych plików, członków tej samej grupy użytkowników co właściciel oraz dla wszystkich innych użytkowników. Przykładowy atrybut może wyglądać następująco:<br>
<br>
<tt>rw-r--r--</tt>, lub cyfrowo <tt>644</tt>.

<p>Zapis ten można podzielić na trzy grupy po trzy znaki w jednej grupie. Pierwsze trzy znaki dotyczą praw dostępu dla właściciela pliku. Czwarty, piąty i szósty znak (licząc od lewej) określa prawa dostępu dla członków tej samej grupy użytkowników co właściciel pliku. Ostatnie trzy znaki określają natomiast prawa dla wszystkich pozostałych użytkowników. Są to pola określające dostęp publiczny.

<p>Jak wspomniano, każda grupa składa się z trzech znaków, przy czym każdy odnosi się do osobnego prawa dostępu. I tak pierwsze pole oznacza możliwość odczytu (<b>r</b>ead), drugie zapisu (<b>w</b>rite), a trzecie uruchamiania (e<b>x</b>ecute). W przypadku, gdy prawa dotyczą katalogu, ostatnie prawo (uruchamianie) dotyczy możliwości wchodzenia do foldera.

<p>Przykładowo <tt>rwxr-xr-x</tt> (cyfrowo <tt>755</tt> - to jeden z popularniejszych poziomów dostępu) określa element z prawem odczytu i zapisu dla właściciela oraz prawem odczytu dla grupy i pozostałych. <tt>rw-r--r--</tt> (cyfrowo <tt>644</tt>) to drugi bardzo popularny poziom dostępu - określa element z prawem odczytu i zapisu (kasowania) dla właściciela oraz prawem odczytu dla grupy i pozostałych.

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