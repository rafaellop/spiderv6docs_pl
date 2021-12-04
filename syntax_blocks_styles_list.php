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
<title>Edytor schematów kolorowania - Bloki składniowe, Style</title>

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
<h1>Edytor schematów kolorowania - Bloki składniowe, Style</h1>


<!-- treść pomocy -->

<p>Z lewej strony okna 'Edytora schematów kolorowania' znajdują się dwie zakładki, które zawierają listy dostępnych bloków i stylów.</p>

<h2>Bloki składniowe</h2>
<p>Schemat kolorowania podzielony jest na pojedyncze jednostki - bloki składniowe. W&nbsp;każdym bloku można definiować odmienne sposoby kolorowania poszczególnych typów kodu, na przykład różnych języków programowania w&nbsp;jednym schemacie.</p>
<p>Bloki na liście można dodawać, usuwać i&nbsp;ustawiać (za pomocą przeciągania) w&nbsp;odpowiedniej kolejności, a&nbsp;także zagnieżdżać jeden blok w&nbsp;drugim. </p>

<p><b>Dodaj blok</b><br />
Kliknij aby dodać nowy blok. W okienku 'Nowy blok składniowy...', które pojawi się po kliknięciu tej ikony możesz wpisać nazwę bloku, a także blok nadrzędny, w którym umieszczony będzie nowy blok.</p>

<p><b>Usuń blok</b><br />
Kliknij, aby usunąć blok</p>

<b>Edytuj blok</b><br />
Kliknij aby dodać zmienić nazwę, bądź położenie blok. W okienku 'Edycja bloku składniowego...', które pojawi się po kliknięciu tej ikony możesz wpisać nową nazwę bloku, a także zmienić blok nadrzędny, dla edytowanego bloku.</p>

<p><b>Kopiuj blok z innego schematu</b><br />
Możliwe jest również kopiowanie bloków z&nbsp;innego schematu kolorowania. Po kliknięciu na tę ikonę otworzy się okienko w którym będzie można wskazać plik, z którego chcesz skopiować blok. Pliki makrokodów mają nazwy typu *.mcd. </p>
Po wybraniu pliku otworzy się okienko 'Import bloku z&nbsp;innego  schematu'. Jest ono podzielone na dwie części: 
<ul>
	<li><b>Importowany blok</b> - lista bloków istniejących w schemacie, z którego chcesz skopiować blok. Wskaż blok do skopiowania.</li>
	<li><b>Gdzie wstawić</b> - lista bloków w aktualnie edytowanym schemacie. Wskaż blok, który ma być blokiem nadrzędnym dla kopiowanego bloku.</li>
</ul>
<p>Podczas kopiowania bloku skopiowane zostają również style, użyte w danym bloku.</p>



<h2>Style</h2>
<p>Style określają sposób kolorowania i&nbsp;formatowania tekstu. Są one wykorzystywane w&nbsp;ustawieniach kolorowania dla poszczególnych <a href="syntax_identifiers.php">identyfikatorów</a>, <a href="syntax_keywords.php">słów kluczowych</a> itp. Możliwe jest wybranie koloru czcionki i tła, a także ustawienie stylu tekstu (pogrubiony, pochylony itp.)</p>

<p><b>Dodaj styl</b><br />
Kliknij, aby utworzyć nowy styl.</p>

<p><b>Usuń wybrany styl</b><br />
Kliknij, aby usunąć wybrany styl ze schematu kolorowania.</p>

<b>Edytuj styl</b><br />
Kliknij, aby edytować styl. Do edycji stylu służy okno '<a href="syntax_style_properties.php">Właściwości stylu</a>'



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
	<li><a href="syntax_identifiers.php">Edytor schematów kolorowania - Identyfikatory</a></li>
	<li><a href="syntax_keywords.php">Edytor schematów kolorowania - Słowa kluczowe</a></li><br />
	<li><a href="syntax_style_properties.php">Edytor schematów kolorowania - Właściwości stylu</a></li>
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