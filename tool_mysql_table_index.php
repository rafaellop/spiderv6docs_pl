<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Serwery baz danych MySQL - Właściwości indeksu tabeli</title>

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
<h1>Narzędzia - Serwery baz danych MySQL - Właściwości indeksu tabeli</h1>



<p>Okienko możesz otworzyć wyłącznie z poziomu okna <a href="tool_mysql_table_properties.php">Właściwości tabeli MySQL</a>. Służy ono do tworzenia nowych pól tabeli i edycji właściwości pól istniejących. Zbudowane jest z trzech grup ustawień: Nazwa indeksu, Rodzaj indeksu, Należące pola.</p>

<h2>Nazwa indeksu</h2>
<p>Zawiera jedynie pole tekstowe umożliwiające wprowadzenie, bądź zmianę indeksu.</p>

<h2>Rodzaj indeksu</h2>
Grupa ta zawiera grupę czterech przełączników oznaczających rodzaj indeksu. Wybierz jeden z nich:

<p><b>Indeks standardowy</b><br />
Optymalizuje wyszukiwanie w tabeli względem zadanych pól.

<p><b>indeks PRIMARY KEY</b><br />
Klucz podstawowy, identyfikuje jednoznacznie każdy rekord w tabeli. Do tego indeksu musi należeć pole z zaznaczoną opcją AUTO INCREMENT (w oknie <a href="tool_mysql_table_field.php">Właściwości pola</a>).

<p><b>Indeks UNIQUE</b><br />
Gwarantuje unikalność wartości danego pola pośród wszystkich w tabeli - nie będzie można wprowadzić do tabeli dwóch rekordów o takiej samej zawartości pól objętych tym indeksem.

<p><b>Indeks FULLTEXT</b><br />
Powoduje indeksowanie całej zawartości pól tekstowych, co przyspiesza operacje wyszukiwania. Pamiętaj jednak, że jednocześnie opóźnia to wprowadzanie danych do bazy, gdyż każde słowo z zawartości tego pola w rekordzie musi być dodawane do indeksu.


<h2>Należące pola</h2>

<p>W tej grupie znajduje się lista pól, które możesz wybrać w celu dodania ich do tworzonego, bądź edytowanego indeksu. Aby dodać pole, zaznacz przełącznik znajdujący się obok jego nazwy.</p>


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
	<li><a href="tool_mysql_table_properties.php">Właściwości pola tabeli MySQL</a></li>
	<li><a href="settings_network_mysqlservers_add.php">Właściwości serwera MySQL</a></li>
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
