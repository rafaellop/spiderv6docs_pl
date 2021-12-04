<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Serwery baz danych MySQL</title>

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
<h1>Ustawienia programu - Serwery baz danych MySQL</h1>




<!-- treść pomocy -->
<p>
W tej kategorii ustawień masz możliwość zdefiniowania ustawień serwerów baz danych MySQL, z których korzystasz przy tworzeniu swojej witryny. Ta kategoria składa się tylko z listy, do której możesz dodawać nowe serwery, modyfikować istniejące czy w ogóle zarządzać listą, za pomocą przycisków znajdujących się obok niej, a także jednej opcji opisanej niżej. 

<p>Dodawanie serwerów baz danych odbywa się za pomocą osobnego okienka o nazwie <a href="settings_network_mysqlservers_add.php">Właściwości serwera baz danych MySQL</a>, przy czym oczywiście dla każdej bazy danych należy zdefiniować utworzyć osobne połączenie. W tym samym oknie zmodyfikujesz ustawienia wybranego na liście serwera.
 
 
<a name="sql_insert_templ"></a>
<h2>Format wklejania zapytania w inspektorze tabel SQL</h2>
Ta lista zawiera szablony służące do formatowania wklejanego do edytora bieżącego zapytania, którego wynikiem jest aktualny widok tabeli SQL w zakładce <a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a>. Aby wkleić zapytanie w jednym z prezentowanych tutaj formatów należy wcisnąć przycisk <b>Wstaw bieżące zapytanie do edytora</b> znajdujący się obok widoku zawartości tabeli Inspektora MySQL. 
<p>Do edycji listy szablonów służą przyciski umieszczone z jej prawej strony. Używając ich możesz dodawać, usuwać i edytować szablony, a także przywrócić szablony domyślne. </p>
<p>Najważniejszym elementem szablonu jest symbol <tt>%s</tt>, który oznacza miejsce umieszczenia zapytania SQL we wklejanym tekście. </p>
 
 
<p><b>Numeruj kolumny w widoku zawartości tabeli</b><br />
Zaznacz tę opcję, jeśli chcesz, by w widoku <a href="main_tabs_inspector_mysql.php#table_content">zawartości tabeli na zakładce Inspektor MySQL</a>, obok nazw pola tabeli pojawił się numer kolejny.</a>.

<p><b>Przy przeciąganiu tabeli do edytora użyj kreatora eksportu</b><br />
Zaznacz tę opcję, jeśli chcesz, by po przeciągnięciu tabeli z drzewa struktury bazy danych otwarty został automatycznie <a href="tool_mysql_export_tables.php">Kreator eksportu z bazy danych</a>.

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
	<li><a href="settings_network_mysqlservers_add.php">Właściwości serwera MySQL</a></li>
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