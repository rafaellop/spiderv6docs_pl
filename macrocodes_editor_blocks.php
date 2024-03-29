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
<title>Edytor szablonów - zakładka Bloki wykorzystywane w szablonie</title>

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
<h1>Edytor szablonów - zakładka Bloki wykorzystywane w szablonie</h1>




<!-- treść pomocy -->

<p>Bloki zawierają fragmenty szablonu, które mogą (ale nie muszą) zostać wykorzystane podczas wstawiania treści szablonu do dokumentu. Pozwala to na tworzenie rozbudowanych szablonów jak np. kompletna dokumenty HTML, w których można wybierać co ma zostać wstawione do dokumentu, a co nie. </p>

<p>Przykładowo - podczas tworzenia szablonu można wpisać w blokach znacznik IMG służący do osadzenia grafik w dokumencie HTML. Użytkownik korzystający z szablonu będzie mógł zdecydować czy wstawić dany obrazek, czy nie (włączając lub wyłączając blok)</p>


<p>Zakładka Bloki wykorzystywane w szablonie zawiera listę bloków, które zostały utworzone. Do ich obsługi służy menu z prawej strony i pole wyboru przy nazwie bloku.</p>

<p>W blokach - podobne jak w lewej, środkowej i prawej stronie szablonu - można używać zmiennych, a także wstawiać inne bloki. </p>

<p><b>Bloki szablonów</b><br />
Zawiera listę dostępnych bloków. Zaznacz, jeśli domyślnie podczas korzystania z szablonu blok ma być użyty.</p>

<p><b>Dodanie nowego bloku</b><br />
Kliknij, jeśli chcesz dodać nowy blok. Do tworzenia nowych i edycji istniejących bloków służy okno <a href="macrocodes_editor_addblock.php">Edycja bloku szablonu</a>.</p>

<p><b>Zmiana nazwy wybranego bloku</b><br />
Kliknij, jeśli chcesz zmienić nazwę bloku. Jeśli dany blok został użyty w treści szablonu, jego nazwa zostanie automatycznie zmieniona we wszystkich symbolach wywołania bloku.</p>

<p><b>Edycja wybranego bloku</b><br />
Kliknij, jeśli chcesz edytować zawartość wybranego bloku. Do tworzenia nowych i edycji istniejących bloków służy okno <a href="macrocodes_editor_addblock.php">Edycja bloku szablonu</a>.</p>

<p><b>Usunięcie wybranego bloku.</b><br />
Kliknij, jeśli chcesz usunąć definicję wybranego bloku z szablonu. Usunięcie definicji bloku nie usunie jego wywołań z treści szablonu!</p>

<p><b>Usunięcie wszystkich bloków</b><br />
Kliknij, jeśli chcesz usunąć definicje wszystkich bloków z szablonu. Usunięcie definicji bloków nie usunie ich wywołań z treści szablonu!</p>

<p><b>Przenieś element w górę/Przenieś element w dół</b><br />
Kliknij, aby przenieść blok w górę/w dół. </p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="macrocodes_editor.php">Edytor szablonów - wstęp</a>
	<li><a href="macrocodes_editor_addblock.php">Edytor szablonów - Edycja bloku szablonu</a>
	<li><a href="macrocodes_editor_vars.php">Edytor szablonów - Zmienne w szablonie</a>
	<li><a href="settings_macrocodes.php">Ustawienia programu - Szablony</a>
	<li><a href="main_tabs_macrocodes.php">Zakładka Szablony</a>
	<li><a href="macrocodes.php">Szablony - ogólnie</a>
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