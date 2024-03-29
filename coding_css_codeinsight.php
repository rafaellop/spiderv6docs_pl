<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.1.1)">

<!-- nazwa strony pomocy -->
<title>Wspomaganie dla CSS - Dynamiczny kod</title>

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
<h1>Wspomaganie dla CSS - Dynamiczny kod</h1>

<!-- treść pomocy -->


<p>Na wspomaganie CSS w Pająku składa się między innymi również mechanizm dynamicznego kodu.</p>

<p>Dynamiczny kod pobiera dane z <a href="tagdata_editor_tdf_css.php">pliku definicyjnego CSS</a> oraz analizuje istniejący kod arkuszy (w tym dołączonych do bieżącego arkusza za pomocą klauzuli <tt>@import</tt>). W ten sposób możliwe jest podawanie w podpowiedziach odpowiednich nazw własności CSS. Można dzięki temu znacznie efektywniej pisać arkusze, gdyż pomimo tego, że istnieją przeznaczone do tworzenia arkuszy narzędzia, czasem szybciej jest wpisać kod "z palca".</p>


<p>Działanie dynamicznego kodu polega na podpowiadaniu nazw elementów możliwych do wykorzystania (funkcje, metody klas, zmienne i stałe). Narzędzie można wywołać na dwa sposoby:
<ol>
	<li> <b>automatyczne wyświetlanie podpowiedzi</b> - skorzystaj z polecenia na mini pasku edytora (ikona polecenia została pokazana obok). Podpowiedzi będą pojawiać się po chwili nieaktywności.</li>
 <li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnie wpisywanej funkcji, wciskając skrót klawiszowy <tt>ctrl+spacja</tt>.</li>
</ol>
</p>

<p>Jeśli aktywowałeś automatyczne wyświetlanie, wpisz początek nazwy własności (np. <tt><b>font-</b></tt>) i poczekaj chwilę - pojawi się lista z elementami, których możesz użyć. Na liście podświetlona będzie pierwsza pozycja, która jest najbardziej zgodna z wpisanym ciągiem (np. dla <tt><b>font-</b></tt> będzie to nazwa funkcji <tt><b>font-family</b></tt>). W przypadku, gdy automatyczne wyświetlanie jest wyłączone, aby otrzymać podpowiedź, skorzystaj ze skrótu.</p>

<p>Po liście możesz poruszać się za pomocą pasków przewijania, strzałkami itp. (jak w każdym oknie). Aby wstawić wybraną konstrukcję do dokumentu, wciśnij <tt>Enter</tt> bądź kliknij na nią.</p>

<p>Ikony przy nazwach określają typ własności.</p>

<ul>
	<li> - Dźwięk</li>
	<li> - Bloki</li>
	<li> - Klasyfikacja</li>
	<li> - Kolory i tło</li>
	<li> - Czcionka</li>
	<li> - Generowane</li>
	<li> - Paski przesuwu</li>
	<li> - Strona</li>
	<li> - Tabele</li>
	<li> - Tekst</li>
	<li> - Wizualne</li>
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
	<li><a href="coding_css.php">Wspomaganie dla CSS - ogólnie</a></li>
	<li><a href="main_editor_codeinsight.php">Dynamiczny kod</a></li>
	<li><a href="tagdata_editor_tdf_css.php">Edytor pliku definicyjnego dla CSS</a>
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