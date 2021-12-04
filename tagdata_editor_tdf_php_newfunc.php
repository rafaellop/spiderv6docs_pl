<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Edytor pliku definicyjnego dla PHP - Nowa funkcja PHP</title>

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
<h1>Edytor pliku definicyjnego dla PHP - Nowa funkcja PHP</h1>



<p>To okno służy do dodawania definicji nowej funkcji dla pliku definicyjnego PHP. Za pomocą znajdujących się w tym oknie pól możesz stworzyć definicję funkcji, dzięki czemu Pająk będzie potrafił ją obsługiwać z poziomu dynamicznych podpowiedzi oraz zakładki <a href="main_tabs_languages.php">Języki programowania</a>. W oknie znajdują się następujące pola:

<p><b>Nazwa funkcji</b><br>
W tym polu wprowadź nazwę funkcji np. <tt>strlen</tt>.

<p><b>Typ rezultatu</b><br>
To pole pozwala okreslić jakiego typu jest rezultat zwracany przez funkcję. Rezultat może być następującego typu:

<ul>
	<li><b>void</b>
	<li><b>string</b>
	<li><b>int</b>
	<li><b>float</b>
	<li><b>bool</b>
	<li><b>array</b>
	<li><b>object</b>
	<li><b>mixed</b>
</ul>

<p><b>Lista argumentów funkcji</b><br>
Wprowadź tutaj listę argumentów przyjmowanych przez funkcję. Argumenty powinny być oddzielone przecinkami, zaś każdy z nich powinien składać się z określenia typu oraz nazwy (oba wyrazy powinny być oddzielone spacją - zgodnie ze składnią PHP/C/C++). Opcjonalne argumenty mogą być ujęte w nawiasy kwadratowe. Na przykład dla funkcji <tt>strlen</tt> będzie to <tt>string str</tt>.

<p><b>Wersja PHP</b><br>
W tym polu wprowadź informację o wsparciu ze strony poszczególnych wersji PHP dla funkcji, którą dodajesz lub modyfikujesz, np. <tt>PHP 3, PHP 4</tt>.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tagdata_editor_tdf_php.php">Edytor pliku definicyjnego PHP</a>
	<li><a href="settings_codeinsight_php.php">Ustawienia Dynamicznego kodu dla PHP</a>
	<li><a href="main_tabs_languages.php">Zakładka "Języki programowania"</a>
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
