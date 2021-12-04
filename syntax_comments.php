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
<title>Edytor schematów kolorowania - Komentarze</title>

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
<h1>Edytor schematów kolorowania - Komentarze</h1>

<!-- treść pomocy -->

Komentarze mają na celu umożliwienie wpisywania w kodzie istotnych informacji pomagających zorientować się programiście jak działa program. Jest to szczególnie istotne przy czytaniu kodu napisanego przez inną osobę. Jednak nawet własny kod - po dłuższym czasie - może stanowić zagadkę.</p>
<p>Pająk umożliwia wyróżnianie komentarzy w kodzie. Komentarze oznaczane są za pomocą specjalnych znaków lub ciągów - w&nbsp;każdym języku są to&nbsp;inne znaki, np.&nbsp;'//' oraz&nbsp;para '/*' i&nbsp;'*/' w&nbsp;PHP, '&lt;!--' i&nbsp;'--&gt;' w&nbsp;HTML itd.</p>

<p><b>Włącz kolorowanie komentarzy</b><br />
Zaznacz tę opcję, jeśli chcesz włączyć kolorowanie komentarzy. 

<ul>
<li><p><b>Komentarze jednoliniowe</b><br />
Zaznacz tę opcję, jeśli chcesz włączyć kolorowanie komentarzy jednoliniowych.</p> 
<p>Za pomocą ikon z prawej strony okna możesz dodawać, usuwać i edytować znaki początku komentarza. Dla każdego znaku komentarza można zdefiniować inny styl kolorowania.</p>
<p>Kolorowanie takie obowiązuje od znaku początku komentarza (włącznie) do końca wiersza, w którym go umieszczono. Dla przykładu w&nbsp;języku PHP jest to ciąg '//'. W&nbsp;komentarzu mogą wystąpić dowolne znaki.</p></li>

<li><p><b>Komentarze wieloliniowe</b><br />
Zaznacz tę opcję, jeśli chcesz włączyć kolorowanie komentarzy wieloliniowych.</p> 
<p>Za pomocą ikon z prawej strony okna możesz dodawać, usuwać i edytować znaki początku i końca komentarza. Dla każdej pary znaków komentarza można zdefiniować inny styl kolorowania.</p>
<p>Kolorowanie takie obowiązuje od znaku początku do znaku końca komentarza (włącznie). Nie ma znaczenia ilość wierszy kodu wchodzących w&nbsp;skład komentarza. Dla przykładu mogą to&nbsp;być pary ciągów '/*, i&nbsp;'*/' w&nbsp;języku PHP, lub&nbsp;'&lt;!--' i&nbsp;'--&gt;' w&nbsp;HTML. W&nbsp;komentarzu mogą wystąpić dowolne znaki, z&nbsp;wyłączeniem znaku (ciągu) oznaczającego koniec komentarza.</p></li>
</ul>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="syntax_editor.php">Edytor schematów kolorowania</a></li>
	<li><a href="syntax_blocks_styles_list.php">Edytor schematów kolorowania - Bloki składniowe, Style</a></li>
	<li><a href="syntax.php">Ogólnie o kolorowaniu składni w Pająku</a><li>
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