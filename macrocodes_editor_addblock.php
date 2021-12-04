
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Edytor makrokodów - Edycja bloku makrokodu</title>

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
<h1>Edytor makrokodów - Edycja bloku makrokodu</h1>


<!-- treść pomocy -->

<p>Okno edycji bloku makrokodu umożliwia edycję tekstu umieszczonego w bloku, a także tworzenie i wstawianie zmiennych. </p>
<p>Możliwe jest również zagnieżdżanie bloków, przy czym nie można zagnieździć bloku w samym sobie. Nie można w tym oknie tworzyć nowych bloków - bloki, którego wywołanie chcesz umieścić w treści edytowanego bloku,  musi już istnieć w makrokodzie.</p>

<p><b>Nazwa</b><br />
Podaj nazwę tworzonego bloku.</p>

<p><b>Zmienne</b><br />
Możesz wybrać z listy zmienną, której wywołanie chcesz umieścić w treści bloku.</p>

<p><b>Dodanie nowej zmiennej</b><br />
Kliknij aby utworzyć nową zmienną (tylko dodaje zmienną, ale nie powoduje automatycznego jej wstawienia w treść makrokodu). Do tworzenia nowych i edycji istniejących zmiennych służy okno <a href="macrocodes_editor_addvar.php">Edycja zmiennej makrokodu</a>.</p>

<p><b>Wstawienie wybranej zmiennej</b><br />
Kliknij aby wstawić wywołanie zmiennej w treść makrokodu,. W chwili użycia makrokodu w miejsce wywołania podstawiona zostanie wartość zmiennej.</p>

<p><b>Bloki</b><br />
Możesz wybrać z listy blok, którego wywołanie chcesz umieścić w treści edytowanego bloku.</p>

<p><b>Wstawienie wybranego bloku</b><br />
Kliknij, aby wstawić w treści wywołanie bloku wybranego na liście.</p>

<p><b>Treść bloku makrokodu</b><br />
W oknie tekstowym wprowadź tekst, który będzie treścią bloku makrokodu.
</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="macrocodes_editor.php">Edytor makrokodów - wstęp</a>
	<li><a href="macrocodes_editor_blocks.php">Edytor makrokodów - zakładka Bloki wykorzystywane w makrokodzie</a>
   <li><a href="macrocodes_editor_vars.php">Edytor makrokodów - zakładka Zmienne w makrokodzie</a>
	<li><a href="settings_macrocodes.php">Ustawienia programu - Makrokody</a>
	<li><a href="main_tabs_macrocodes.php">Zakładka Makrokody</a>
	<li><a href="macrocodes.php">Makrokody - ogólnie</a>
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