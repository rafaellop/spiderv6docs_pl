<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Kreator zapytania SQL</title>

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
<h1>Narzędzia - Kreator zapytania SQL</h1>



<p>Ten kreator umożliwia szybkie utworzenie prostego zapytania SQL w celu pobrania danych z pojedynczej tabeli. 

<p>Narzędzie posiada przyjazny interfejs, który prowadzi za rękę przez wszystkie etapy tworzenia zapytania SQL - od wyboru pól tabeli, z której mają zostać pobrane dane, przez określenie warunków, jakie muszą zostać spełnione, aż do określenia kolejności, w jakiej zostaną zwrócone rekordy.

<p>Każdy krok to osobna plansza. Po planszach możesz poruszać się za pomocą przycisków <b>Dalej</b> i <b>Wstecz</b>.


<h2>Uruchamianie</h2>

<p> Kreator możesz uruchomić poleceniem umieszczonym w<a href="main_tabs_inspector_mysql.php#dbtree_tablename"> menu podręcznym dla tabeli na drzewku</a> w zakładce <a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a>. Ikona polecenia została pokazana obok.</p>
<p>Drugim miejscem, z którego możesz otworzyć Kreatora zapytania SQL jest plansza tworzenia zapytania do bazy danych w <a href="tool_mysql_export_tables.php#wybor_zakresu_danych">Kreatorze eksportu z bazy danych</a>.</p>



<h2>Wybór tabeli</h2>

<p>Pierwsza plansza umożliwia wybór tabeli oraz jej pól, które zostaną dodane do zapytania.</p>

<p><b>Tabela</b><br />
Wybierz z listy rozwijanej tabelę, z której chcesz pobierać dane. Domyślnie wybrana jest tabela, na której kliknięto, by uruchomić kreator.

<p><b>Pola</b><br />
Zaznacz na liście pola wybranej tabeli, które mają zostać dodane do zapytania.



<h2>Określenie warunków</h2>

<p>Na tej planszy znajdują się opcje umożliwiające określenie warunków, jakie musza spełniać zwracane rekordy. Wybierz jedną z opcji:</p>

<p><b>uwzględniaj wszystkie rekordy</b><br />
<p><b>uwzględniaj tylko rekordy spełniające warunek:</b><br />

<p>W przypadku wyboru drugiej opcji, aktywne stanie się pole tekstowe do wprowadzenia warunków (sekcja po słowie <tt>WHERE</tt> w zapytanieu SQL), a także elementy ułatwiające ich tworzenie (ich użycie wstawia odpowiednie słowo w miejscu kursora w polu zapytania):</p>

<p><b>Wstaw nazwę pola:</b><br />
Wybierz z listy nazwę pola w wybranej wcześniej tabeli. Kliknij przycisk z plusem umieszczony obok listy aby wstawić nazwę pola tabeli do budowanego warunku.

<p><b>Wstaw operator</b><br />
Kliknij wybrany przycisk, aby wstawić do tworzonego warunku jeden z operatorów: <tt>AND</tt>, <tt>OR</tt>, <tt>NOT</tt>.


<p><b>Porównania</b><br />
Kliknij, aby rozwinąć listę zawierającą różne operatory porównania, jak <tt>LIKE</tt>, <tt>REGEXP</tt> itp.

<p><b>Matematyczne</b><br />
Kliknij, aby rozwinąć listę zawierającą różne funkcje matematyczne, jak <tt>Abs()</tt>, <tt>Sin()</tt> itp.

<p><b>Łańcuchy</b><br />
Kliknij, aby rozwinąć listę zawierającą różne funkcje obsługi tekstu, jak <tt>Concat()</tt>, <tt>RTrim()</tt> itp.

<p><b>Data i czas</b><br />
Kliknij, aby rozwinąć listę zawierającą różne funkcje obsługi daty i czasu, jak <tt>Month()</tt>, <tt>Now()</tt> itp.



<h2>Określenie porządku sortowania rekordów</h2>

<p>Kolejna plansza umożliwia określenie sortowania rekordów maksymalnie dla trzech pól. W tym celu dostępne są trzy listy rozwijane z nazwami pól pobieranych z bazy:
<ul>
	<li><b>Sortuj według</b></li>
	<li><b>Następnie według</b></li>
	<li><b>Następnie według</b></li>
</ul>

<p>Pod każdą z list znajdują się przełączniki umożliwiające porządek sortowania (rosnąco, lub malejąco).</p>


<p><b>Pozostałe opcje zapytania</b><br />
Tutaj znajdziesz przełącznik umożliwiający wstawienia do zapytania instrukcji <tt>DISTINCT</tt>, co spowoduje iż rekordy powtarzające się zostaną usunięte (każdy rekord wystąpi tylko raz).

<h2>Zakończenie</h2>

<p>Ostatnia plansza to podsumowanie. Znajduje się na niej pole tekstowe wyświetlające gotowe zapytanie. Dodatkowo możesz skorzystać z przycisku Dodaj zapytanie do ulubionych, dzięki czemu możesz zbudowane zapytanie zachować do późniejszego wielokrotnego użycia (przycisk umożliwiający skorzystanie z jednego z  "Ulubione zapytania" znajdziesz na zakładce <a href="main_tabs_inspector_mysql.php#table_content">Inspektor MySQL</a> na pasku przycisków obok listy zawartości tabeli).</p>

<p>Ostatnią czynnością, jaką należy wykonać jest kliknięcie przycisku <b>Zakończ</b>, co spowoduje wykonanie zapytania i zamknięcie Kreatora. Wyniki działania Kreatora zostaną wyświetlone na liście <a href="main_tabs_inspector_mysql.php#table_content">zawartości tabeli</a> w dolnej części zakładki <a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a>.</p>


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
	<li><a href="tool_mysql_query.php">Wykonaj zapytanie SQL</a></li>
	<li><a href="tool_mysql_export_tables.php">Kreator eksportu z bazy danych</a></li>
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
