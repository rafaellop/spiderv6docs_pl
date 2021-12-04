<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Edytor makrokodów - ustawienia makrokodu</title>

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
<h1>Edytor makrokodów - ustawienia makrokodu</h1>




<p><b>Kategoria makrokodu</b><br />
Pozwala na wybór kategorii, w której umieszczony zostanie aktualnie edytowany makrokod. Domyślnie wskazuje na kategorię wybraną w chwili uruchomienia edytora.</p>

<p><b>Nazwa</b><br />
W tym polu wpisz nazwę makrokodu.</p>

<p><b>Typ makrokodu</b><br />
Pozwala na wybór typu makrokodu (domyślnie "Po prostu makrokod"). Ustawienie to ma wpływ na sposób wstawiania i podglądu makrokodu (zdefiniowany w oknie "Ustawienia programu"). Określa również opis pod małym okienkiem podglądu, co pozwala użytkownikowi zorientować się co danym makrokod zawiera.</p> 

<p>Dostępne są następujące typy:</p>

<ul>
	<li><b>Po prostu makrokod</b> - zwykły makrokod o niezdefiniowanym typie.</li>
	<li><b>Skrypt JavaScript</b> - zawiera skrypt w języku JavaScript</li>
	<li><b>Skrypt JScript</b> - zawiera skrypt w języku JScript</li>
	<li><b>Skrypt VBScript</b> - zawiera skrypt w języku VBScript</li>
	<li><b>Skrypt PHP</b> - zawiera skrypt w języku PHP</li>
	<li><b>Skrypt Perl</b> - zawiera skrypt w języku Perl</li>
	<li><b>Obrazek</b> - zawiera kod służący do wstawienia obrazka</li>
	<li><b>Obiekt</b> - zawiera kod obiektu</li>
	<li><b>Szablon dokumentu</b> - zawiera szablon dokumentu. Domyślnie użycie makrokodu tego typu powoduje automatyczne utworzenie nowego dokumentu (można to zmienić w oknie <a href="settings_macrocodes.php">Ustawienia makrokodów</a>).</li>
	<li><b>Znak specjalny</b> - zawiera znak specjalny, np. encję dla liter alfabetu greckiego itp.</li>
</ul>

<p><b>Skrót klawiszowy</b><br />
Umożliwia wybór skrótu klawiszowego dla danego makrokodu. Można wybrać kombinację klawiszy Shift, Ctrl, Alt i jednego z pozostałych klawiszy alfanumerycznych i funkcyjnych.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_macrocodes.php">Ustawienia programu - Makrokody.</a>
	<li><a href="macrocodes_editor.php">Edytor makrokodów - wstęp</a>
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