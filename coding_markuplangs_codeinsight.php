<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Wspomaganie dla jęz. znacznikowych - Dynamiczny kod</title>

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
<h1>Wspomaganie dla jęz. znacznikowych - Dynamiczny kod</h1>





<!-- treść pomocy -->


<p>Na wspomaganie dla jęz. znacznikowych w Pająku składa się między innymi również mechanizm Dynamicznego kodu. Tak na prawdę mechanizm ten tworzą trzy narzędzia:
<ul>
	<li><a href="#tag_completion">Automatyczne uzupełnienie znaczników</a></li>
	<li><a href="#code_completion">Dynamiczny kod</a></li>
	<li><a href="#code_parameter">Dynamiczne podpowiedzi</a></li>
</ul></p>

<p>Informacje podawane przez Dynamiczny kod Pająk pobiera ze specjalnych plików definicyjnych dla języków znacznikowych - TDF. Do edycji danych służy specjalne narzędzie - <a href="tagdata_editor_tdf.php">Edytor plików definicyjnych języków znacznikowych</a>. Korzystając z niego możesz również dodawać i usuwać obsługiwane języki znacznikowe. Dzięki temu Pająk jest wszechstronnym i bardzo elastycznym edytorem, doskonałym do tworzenia dokumentów w dowolnym języka znacznikowym.</p>


<a name="tag_completion"></a>
<h2>Automatyczne uzupełniane znaczników</h2>

<p>Automatyczne uzupełniane znaczników jest bardzo pomocne podczas tworzenia kodu w języku znacznikowym (jak HTML, WML, MathML, SVG itd). Dzięki tej funkcji wystarczy wpisać początek znacznika - reszta wklei się sama. </p>

Przykładowo wpisujesz:
<pre><b>&lt;a</b></pre>
a następnie spację, bądź znak zamknięcia znacznika <tt>&lt;</tt>. Dzięki działaniu tej funkcji, znacznik zostanie uzupełniony (znak | oznacza miejsce, gdzie znajdzie się kursor):
<pre><b>&lt;a href</b>="|"<b>&gt;&lt;/a&gt;</b></pre>

<p>Korzystając z <a href="tagdata_editor_tdf.php">Edytora pliku definicyjnego dla jęz. znacznikowych</a> możesz zmienić tekst, jakim zostanie uzupełniony znacznik. Jeśli ustawiłeś odpowiednie opcje w oknie <a href="settings_codeinsight_tags.php">Ustawień programu</a>, zmieniona zostanie również wielkość liter w znaczniku.</p>




<h2><a name="code_completion"></a>Dynamiczny kod</h2>

<p>Działanie dynamicznego kodu polega na podpowiadaniu nazw elementów możliwych do wykorzystania (atrybuty znacznika, zawartość atrybutów). Narzędzie można wywołać na dwa sposoby:</p>
<ol>
	<li> - za pomocą polecenia aktywowania dynamicznego kodu na mini pasku edytora (ikona pokazana obok). Podpowiedzi będą pojawiać się po chwili nieaktywności.</li>
	<li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnie wpisywanej funkcji wciskając skrót klawiszowy <tt>Ctrl+Spacja</tt></li>
</ol>
</p>

<p>Jeśli aktywowałeś automatyczne wyświetlanie, wpisz postaw kursor w obrębie znacznika. Dynamiczne podpowiedzi będą dotyczyły:

<ul>
	<li><b>możliwych do wstawienia atrybutów znacznika</b> - jeśli postawisz kursor wszędzie, poza wartością atrybutu</li>
	<li><b>możliwych do wstawienia wartości danego atrybutu</b> - jeśli postawisz kursor wewnątrz wartości atrybutu. W tym wypadku na pierwszej pozycji będzie polecenie uruchomienia narzędzia, z którego możesz skorzystać do ustawienia wartości atrybutu (np. okno wyboru obrazka)</li>
	<li><b>możliwych do wstawienia encji</b> - jeśli postawisz kursor poza znacznikiem</li>
</ul>

<p>W przypadku, automatyczne wyświetlanie podpowiedzi jest wyłączone, aby otrzymać podpowiedź skorzystaj ze skrótu <tt>Ctrl+Spacja</tt>.</p>

<p>Po liście możesz poruszać się za pomocą pasków przewijania, strzałkami itp. (jak w każdym oknie). Aby wstawić wybraną konstrukcję do dokumentu, wciśnij <tt>Enter</tt>, bądź kliknij na nią.</p>

<p>Ikony przy nazwach określają, jakiego typu wartość argumentu będzie wstawiona (odsyłacz, styl itp.). </p>

<h2><a name="code_parameter"></a>Dynamiczne podpowiedzi</h2>
<p>Działanie dynamicznych podpowiedzi polega na wyświetlaniu, w trakcie pisania dokumentu, podpowiedzi dla bieżącego znacznika. W podpowiedziach znajdziesz informacje na temat przeznaczenia znacznika, możliwych do użycia atrybutów, wymaganych wartości atrybutów. </p>

<p>Podpowiedź można wywołać na dwa sposoby:<br />

<ol>
	<li><b>automatyczne podpowiadanie</b> - skorzystaj z polecenia na mini pasku edytora. Po ustawieniu kursora wewnątrz znacznika poczekaj - po chwili pojawi się dymek podpowiedzią.</li>
	<li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnie używanego znacznika wciskając skrót klawiszowy <tt>ctrl+\</tt></li>
</ol></p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="coding_html.php">Wspomaganie dla HTML - ogólnie</a></li>
	<li><a href="coding_markuplangs.php">Wspomaganie dla jęz. znacznikowych - ogólnie</a></li>
	<li><a href="main_editor_codeinsight.php">Dynamiczne podpowiedzi</a></li>
	<li><a href="settings_codeinsight_tags.php">Ustawienia programu - Dynamiczne podpowiedzi</a></li>
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
