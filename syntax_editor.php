<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />


<!-- nazwa strony pomocy -->
<title>Edytor schematów kolorowania</title>

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
<h1>Edytor schematów kolorowania</h1>





<!-- treść pomocy -->
<p>
Edytor schematów kolorowania pozwala na tworzenie własnych schematów kolorowania. Umożliwia też dostosowanie istniejących schematów kolorowania do własnych potrzeb.</p>

<p><b>UWAGA!</b><br />
Zmiany wprowadzone za pomocą edytora są nieodwracalne. Dlatego edytując schemat należy w miarę możliwości zapisywać go do nowego pliku pozostawiając oryginalny schemat niezmieniony!</p>

<p>Okno edytora składa się następujących obszarów:</p>

<p><a href="syntax_read_save.php">Wybór schematu</a><br />
Pozwala na tworzenie, otwieranie i zapisywanie schematów kolorowania.</p>

<p><a href="syntax_blocks_styles_list.php">Bloki składniowe, Style</a><br />
Pozwala na tworzenie i modyfikacje ustawień bloków składniowych i stylów. Do edycji i tworzenia stylów służy okno '<a href="syntax_style_properties.php">Właściwości stylu</a>'.</p>

<p><b>Obszar ustawień</b>:
<ul>
	<li><a href="syntax_blocks.php">Bloki</a> - ogólne ustawienia dla bloku</li>
	<li><a href="syntax_comments.php">Komentarz</a> - ustawienia rozpoznawania i kolorowania komentarzy</li>
	<li><a href="syntax_strings.php">Ciągi znaków</a> - ustawienia dla ciągów znaków</li>
	<li><a href="syntax_numbers.php">Liczby</a> - ustawienia kolorowania liczb</li>
	<li><a href="syntax_identifiers.php">Identyfikatory</a> - ustawienia kolorowania identyfikatorów, definicje znaków dozwolonych w kolorowanych słowach kluczowych</li>
	<li><a href="syntax_keywords.php">Słowa kluczowe</a> - zbiory słów kluczowych</li>
</ul></p>

<p><a href="syntax_preview.php">Podgląd schematu kolorowania</a><br />
Okno służące do wpisywania tekstu, w którym na bieżąco można śledzić zmiany w kolorowaniu składni wprowadzane w schemacie.</p>

 Standardowo okno to wywołuje się za pomocą skrótu klawiszowego Ctrl+Shift+F8, z menu Narzędzia za pomocą przycisku pokazanego obok, lub z poziomu okna 'Ustawienia programu'.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="syntax_instruction.php">Jak utworzyć schemat kolorowania? Instrukcja krok po kroku.</a>
	<li><a href="settings_editor_syntax.php">Ustawienia programu - Kolorowanie składni</a>
	<li><a href="syntax.php">Ogólnie o kolorowaniu składni w Pająku</a></li>
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