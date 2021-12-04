
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Zaznaczony tekst na tabelę</title>

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
<h1>Narzędzia - Zaznaczony tekst na tabelę</h1>

<p>Narzędzie to pozwala na zamianę zaznaczonego tekstu na tabelę, przy czym podział na kolumny i wiersze odbywa się wg jednego z separatorów wybranych w oknie narzędzia.

<p>Aby skorzystać z narzędzia zamiany tekstu na tabelę wejdź do <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_edit.php">Edycja</a> / <a href="main_menu_edit_change_selected.php">Zaznaczony tekst na ...</a> / Zaznaczony na tabelę. Opisywane narzędzie uruchomisz również z paska narzędzi <a href="toolbars_link_format.php">Odsyłacze, tekst, formatowanie</a>.
   
<p>Jak już wspomniano, aby można było utworzyć tabelę składającą się z kilku kolumn, należy w oknie narzędzia wskazać separator, który będzie używany do rozpoznania kolumn lub wierszy. Możesz wybrać jeden z predefiniowanych (i najczęściej zresztą używanych) separatorów, jak średnik, spacja, czy przecinek, bądź wprowadzić własny separator poszczególnych kolumn tabeli, zaś każdy wiersz zaznaczonego tekstu stanie się wierszem tabeli. 

<p>Możesz też przekonwertować tekst na tabelę w ten sposób, że będzie ona zawierała tylko jeden wiersz, zaś poszczególne wiersze zaznaczonego tekstu utworzą zawartość komórek. Również w tym wypadku możesz podać własny separator kolumn.</p>

<p>Przykładowo zaznaczenie poniższego fragmentu i użycie opisywanego narzędzia z wybraną opcją <b>każda linia jako wiersz, średnik jako separator kolumn</b> utworzy tabelę jak pokazano niżej:

<table border="0" width="100%">
<tr>
<td>
<p><tt>jabłka;gruszki;śliwy<br/>
wiśnie;truskawki;orzechy</tt>
</td>
<td>
<table cellspacing="2" cellpadding="2" border="1">
<tr><td>jabłka</td><td>gruszki</td><td>śliwy</td></tr>
<tr><td>wiśnie</td><td>truskawki</td><td>orzechy</td></tr>
</table>
</td>
</tr>
</table>

<p>W oknie narzędzia znajduje się również przełącznik <b>Wstaw znacznik tabeli</b>. Zaznaczenie tego przełącznika powoduje wstawienie znacznika <tt>table</tt> wokół teksu przetworzonego na wiersze i kolumny. Jeśli przełącznik ten jest włączony możesz również określić parametry znacznika <tt>table</tt> klikając przycisk Właściwości tabeli, który otworzy okienko <a href="tool_table_tag.php">ustawień znacznika <tt>table</tt></a>, gdzie będziesz mógł określić np. obramowanie czy styl tabeli.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="main_menu_edit_change_selected.php">Inne operacje na zaznaczonym tekście</a>
        <li><a href="tool_table_tag.php">Znacznik table</a>
        <li><a href="tool_table_editor.php">Edytor tabel</a>
        <li><a href="tool_table_quick.php">Bardzo szybka tabela</a>
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