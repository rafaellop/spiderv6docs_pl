<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Globalne obiekty i typy</title>

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
<h1>Globalne obiekty i typy</h1>





<p>To okienko pozwala na dodanie nowego globalnego obiektu o określonym typie do grupy obiektów wybranej w ustawieniach pliku definicyjnego dla skryptów. <a href="tagdata_editor_tdf_scripts.php">Edytor pliku definicyjnego</a> pozwala na tworzenie i modyfikację istniejącej definicji wybranego języka skryptowego, która jest wykorzystywana w funkcjach dynamicznych podpowiedzi oraz na zakładce <a href="main_tabs_languages.php">Języki programowania</a>.

<p>Okno składa się z następujących pól:

<p><b>Lista globalnych obiektów i ich typów</b><br>
Lista ta zawiera globalne zmienne typu obiektowego oraz przypisane im typy obiektowe. Do zdefiniowanych tutaj zmiennych można odwoływać się z poziomu języka skryptowego.

<p><b>Nazwa obiektu</b>
Nazwa obiektu, któremu przypisany zostanie typ. Obiekt specjalny o nazwie "_root_" oznacza typ, do którego własności i metod odwoływać się można bez podania nazwy obiektu.

<p><b>Typ</b><br>
Wybierz typ opisujący podaną zmienną obiektową. Typ zależy od wybranej grupy obiektów. Nowe typu można przypisywać korzystając z okienka <a href="tagdata_editor_tdf_scripts_objecttype.php">Nowego typu obiektowego</a>.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tagdata_editor_tdf_scripts_objecttype.php">Nowy typ obiektowy</a>
	<li><a href="tagdata_editor_tdf_scripts.php">Edytor plików definicyjnych języków skryptowych</a>
	<li><a href="main_tabs_languages.php">Zakładka "Języki programowania"</a>
	<li><a href="settings_codeinsight_scripts.php">Ustawienia Dynamicznego kodu</a>
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
