<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Dynamiczne podpowiedzi w PHP</title>

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
<h1>Ustawienia programu - Dynamiczne podpowiedzi w PHP</h1>



<!-- treść pomocy -->
<p>
Ta grupa ustawień pozwala na określenie sposobu działania funkcji dynamicznych podpowiedzi dla języka PHP. W oknie tym znajduje się kilka grup ustawień odpowiedzialnych za różne funkcje podpowiedzi.

<h2>Dynamiczne podpowiedzi do PHP</h2>

<p>W tej grupie ustawień znajdują się przełaczniki pozwalające na określenie zawartości prezentowanej w dynamicznej pomocy dla PHP. Zaznacz te opcje, które powinny być brane pod uwagę podczas tworzenia listy pomocy dynamicznej dla PHP. W przypadku funkcji PHP możesz również wskazać, które kategorie funkcji powinny być ujęte na liście podpowiedzi. 

<p>W grupie tej znajduje się również lista zawierająca spis kategorii funkcji PHP, których zawartość (funkcje) będą prezentowane na liście dynamicznej podpowiedzi dla PHP. Dla listy kategorii funkcji dostępne są też następujące opcje:

<p><b>Wyświetlaj tylko zgodne z PHP 3</b><br>
Zaznacz tę opcję, aby na liście dynamicznej podpowiedzi wyświetlać wyłącznie funkcje z wersji 3 języka PHP.

<p><b>Wyświetlaj zwracany typ dla funkcji wbudowanych w PHP</b><br>
Zaznacz tę opcję, aby w podpowiedzi znalazła się informacja o typie danych zwracanych przez daną funkcję (jako że PHP przeprowadza konwersję typów w locie i nie jest ona podawana przy deklaracji funkcji, informacja ta dostępna jest wyłącznie dla funkcji wbudowanych).

<p><b>Zgodność typów</b><br>
Zaznacz wybraną opcję, która odpowiada preferowanej weryfikacji zgodności propozycji funkcji na liście dynamicznej pomocy z tym, czego oczekujesz.

<p>W grupie ustawień dynamicznych podpowiedzi dla PHP znajdują się jeszcze trzy opcje:

<p><b>Nie traktuj znaków ?>  w cudzysłowie jako ograniczników bloku PHP</b><br>
Dynamiczne podpowiedzi dla PHP działają w obrębie bloku &lt;? .. ?&gt;. Czasami jednak program może się gubić, gdy w bloku PHP użyty jest ciąg zawierający taki fragment. Jeśli program napotka takie miejsce, wyłącza obsługę dynamicznych podpowiedzi dla PHP. Jeśli chcesz się przed tym zabezpieczyć, możesz zaznaczyć tę opcję. Program będzie wtedy sprawdzał, czy napotkany koniec bloku ?> nie jest przypadkiem częścią ciągu. Pozwala to zachować działanie dynamicznych podpowiedzi, jednakże zaznaczenie tej opcji znacznie opóźnia działanie dynamicznych podpowiedzi dla PHP.

<p><b>Wyświetlaj tylko frazy zaczynające się od tekstu znajdującego się pod kursorem</b><br>
Zaznacz tę opcję, jeśli chcesz, bo w podpowiedziach znalazły się wyłącznie elementy pasujące do wprowadzonego tekstu. 

<p><b>Uzupełniając &lt;? i &lt;?php wstawiaj pustą linię między nimi</b><br />
Zaznacz, jeśli chcesz, aby uzupełnianie &lt;? i &lt;?php do ?&gt; automatycznie wstawiało pustą linię i umieszczało tam kursor

<h2>Dynamiczna pomoc do PHP</h2>

<p>W tej grupie znajdują się ustawienia dotyczące pomocy dymkowej wyświetlanej dla kodu PHP:

<p><b>Wyświetlaj typy argumentów funkcji w dymkach</b><br>
Zaznacz tę opcję, jeśli chcesz, aby program podczas dynamicznej pomocy dymkowej wyświetlał typy argumentów jakich oczekuje dana funkcja.

<p><b>Wyróżniaj bieżący argument funkcji</b><br>
Zaznacz tę opcję, jeśli chcesz, aby program wyświetlał w podpowiedzi dla funkcji odpowiednim pogrubieniem atrybut funkcji, które w danym momencie powinien być wprowadzony.

<h2>Edytor pliku definicyjnego dla PHP</h2>

<p>Korzystając z przycisku znajdującego się w tej grupie włączysz narzędzie <a href="tagdata_editor_tdf_php.php">edytora pliku definicyjnego dla PHP</a>, które pozwala na tworzenie definicji dla nowych elementów języka PHP czy też modyfikację definicji dla zdefiniowanych już funkcji i obiektów PHP.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_codeinsight.php#settingslistcodeinsight">Inne ustawienia ułatwień</a>
	<li><a href="main_editor_codeinsight.php">Dynamiczny kod</a>
	<li><a href="coding_php.php">Korzystanie z PHP w Pająku</a>
	<li><a href="tagdata_editor_tdf_php.php">Edytor pliku definicyjnego dla PHP</a>
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
