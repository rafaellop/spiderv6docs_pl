<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Właściwości serwera MySQL</title>

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
<h1>Właściwości serwera MySQL</h1>



<!-- treść pomocy -->
<p>To okno służy zarówno do określania parametrów nowego, dodawanego dopiero serwera jak i do modyfikacji ustawień istniejącego serwera baz danych MySQL. Możesz je wyświetlić dodając lub modyfikując ustawienia wybranego serwera w oknie <a href="settings_network_mysqlservers.php">Ustawienia serwerów baz danych MySQL</a>.


<h2>Właściwości serwera baz danych</h2>

<p>Na zakładce Właściwości serwera definiujesz parametry serwera i bazy danych MySQL, do której chcesz mieć dostęp w Pająku. 

<p><b>Jeśli nie znasz danych potrzebnych do skonfigurowania serwera, spytaj o nie administratora serwera. Pamiętaj, że w celu polepszenia bezpieczeństwa, większość usługodawców internetowych blokuje łączenie się z serwerem MySQL inaczej, niż za pomocą nazwy serwera <tt>localhost</tt> - w takiej sytuacji nie będziesz mógł z niego korzystać bezpośrednio w Pająku.</b>

<p>Aby skonfigurować serwer baz danych do wykorzystania w Pająku na zakładce <a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a>, musisz podać następujące dane w odpowiednich polach:

<p><b>Przyjazna nazwa</b><br>
W tym polu wpisz nazwę, która będzie identyfikować serwer MySQL na liście serwerów. Wartość ta ma znaczenie tylko informacyjne i może być dowolna.

<p><b>Adres serwera</b><br>
Tutaj wpisz adres serwera MySQL, który dodajesz do listy. Użyj adresu otrzymanego od administratora Twojego konta. Jeśli serwer zainstalowany jest lokalnie, będzie to najprawdopodobniej nazwa <tt>localhost</tt>.

<p><b>Port</b><br>
To jest miejsce na podanie portu, na którym działa serwer MySQL. Najczęściej jest to podany port numer 3306, jednakże wartość ta zależy od konfiguracji serwera. Jeśli podasz nieprawidłowy port, połączenie nie będzie mogło być zrealizowane.

<p><b>Użytkownik</b><br>
Tutaj wprowadź nazwę użytkownika, czyli inaczej nazwę konta, do którego posiadasz uprawnienia i z którym chcesz się łączyć na tym serwerze.

<p><b>Hasło</b><br>
To jest miejsce na hasło dostępu do konta. Wpisz je bardzo uważnie, gdyż jest ono podczas wpisywania ukryte.

<p><b>Nie używaj hasła przy logowaniu do serwera</b><br />
Zaznacz ten przełącznik jeśli chcesz, aby podczas łączenia z serwerem zalogowanie nastąpiło jedynie przy pomocy nazwy użytkownika, bez hasła. Pole do wprowadzania hasła zostanie w tym przypadku zablokowane.<br>
Jeżeli nie wprowadzisz hasła w tym okienku dialogowym i nie zaznaczysz tego przełącznika, przy pierwszej próbie połączenia z serwerem baz danych Pająk zada pytanie o hasło


<hr />

<p><b>Baza danych</b><br />
Serwer może udostępniać wiele baz danych. W tym polu wprowadź nazwę bazy danych, z której chcesz w bieżącym połączeniu korzystać.
.

<p><b>Grupa baz danych</b><br />
W tym miejscu możesz wpisać nazwę grupy, do jakiej ma należeć baza danych. Grupy baz danych wyświetlane są na początku listy w zakładce "Inspektor MySQL". Dzięki tej możliwości, jeśli korzystasz z wielu baz danych, łatwiej odnajdziesz odpowiednią na liście.

<hr />

<p><b>Kodowanie znaków</b><br />
Wybierz z listy sposób kodowania znaków, z jakiego korzysta baza do przechowywania danych tekstowych. Jeśli wybierzesz niepoprawne kodowanie, niektóre znaki narodowe w tekstach wyświetlanych na <a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a> mogą być nieprawidłowe.

<p><b>Komenda kodowania</b><br />
W tym polu znajduje się komenda wywoływana podczas operacji na serwerze MySQL, dzięki której możliwe jest ustawienie poprawne kodowania znaków podczas komunikacji programu z serwerem. Niektóre serwery mogą nieobsługiwać domyślnych zmiennych środowiskowych NAMES i CHARSET, dlatego przy ewentualnych problemach z połączeniem z serwerem MySQL należy zmodyfikować tę komendę na adekwatną dla swojego serwera lub zdefiniować te zmienne w konfiguracji serwera. <br><br>
Uwaga! Pozostawienie tego pola pustego może spowodować, że na niektórych serwerach MySQL nie będzie mogła być poprawnie przeprowadzana konwersja znaków między różnymi standardami kodowania znaków dla pól tekstowych.

<hr />

<p><b>Usuń ulubione zapytania i tabele</b><br />
Czyści listę ulubionych zapytań i tabel serwera. Żadne dane nie będą usuwane z serwera!

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="main_tabs_inspector_mysql.php">Zakładka Inspektor MySQL</a></li>
   <li><a href="tool_mysql_table_properties.php">Właściwości tabeli MySQL</a></li>
   <li><a href="tool_mysql_table_index.php">Właściwości indeksu tabeli MySQL</a></li>
   <li><a href="tool_mysql_table_field.php">Właściwości pola tabeli MySQL</a></li>
   <li><a href="settings_network_mysqlservers.php">Ustawienia programu - Ustawienia serwerów baz danych MySQL</a></li>
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