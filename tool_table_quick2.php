<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Szkielet tabeli</title>

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
<h1>Narzędzia - Szkielet tabeli</h1>

<p> Narzędzie to służy do szybkiego tworzenia tabel o zadanych wymiarach. Możesz wybrać ilość kolumn i wierszy tabeli. Następnie, w zależności od ustawionych opcji, uruchamiane będą inne narzędzia służące do ustawiania opcji poszczególnych elementów tabeli.

<p>Okno Szybkiej tabelki uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_tables.php">Tabele</a> / Szkielet tabeli, a także z paska narzędzi <a href="toolbars_tables.php">Tabele i formularze</a>.

<p>Okno zawiera następujące opcje:</p>

<p><b>Wierszy</b><br />
Wprowadź ilość wierszy. Jeśli nie wprowadzisz żadnej wartości, wiersze tabeli nie zostaną utworzone.

<p><b>Kolumn</b><br />
Wprowadź ilość wierszy. Jeśli nie wprowadzisz żadnej wartości, komórki tabeli nie zostaną utworzone. W przypadku, gdy ilość wierszy jest równa zero, pole to jest nieaktywne (aby można było utworzyć kolumnę, musi być co najmniej jeden wiersz w tabeli).

<p>Następne opcje mają za zadanie włączanie narzędzi obsługujących poszczególne elementy tabeli po kliknięciu przycisku <tt>OK</tt>:</p>

<p><b>Dołącz opis tabeli</b><br />
Zaznacz, by uruchomione zostało narzędzie <a href="tool_table_caption.php">Opis tabeli</a> w celu wprowadzenia opisu.

<p><b>Ustawienia dla wierszy</b><br />
Zaznacz, by dla każdego wiersza tabeli uruchomione zostało narzędzie <a href="tool_table_row.php">Wiersz tabeli</a> w celu ustawienia opcji danego wiersza.

<p><b>Ustawienia dla komórek</b><br />
 Zaznacz, by dla każdej komórki tabeli uruchomione zostało narzędzie <a href="tool_table_cell.php">Komórka tabeli</a> w celu ustawienia jej opcji.

<p><b>Obramowanie tabeli</b><br />
Zaznacz, by tabela została objęta ramką (argument <tt>border="1"</tt> w znaczniku <tt>TABLE</tt>).

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_table_editor.php">Edytor tabel</a>
	<li><a href="tool_table_tag.php">Edytor znacznika TABLE</a>
	<li><a href="tool_table_cell.php">Narzędzia - Komórka tabeli</a>
	<li><a href="tool_table_row.php">Narzędzia - Wiersz tabeli</a>
	<li><a href="tool_table_caption.php">Narzędzia - Opis tabeli</a>
	<li><a href="main_menu_main.php">Menu programu</a>
	<li><a href="toolbars_general.php">Narzędzia na paskach</a>
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