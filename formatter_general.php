<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Formatowanie kodu źródłowego</title>

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
<h1>Formatowanie kodu źródłowego</h1>




<!-- treść pomocy -->
<p>Za pomocą narzędzia do formatowania kodu źródłowego możesz szybko uporządkować i sformatować kod w Twoich dokumentach. Ponadto możesz samodzielnie określać reguły formatowania kodu dla różnych języków.</p>

<p> Narzędzie do formatowania kodu możesz uruchomić za pomocą polecenia oznaczonego ikoną pokazaną powyżej znajdującego się w menu <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_formatting.php">Formatowanie i kompresja kodu</a>, a także za pomocą przycisku pokazanego wyżej umieszczonego na pasku narzędzi. </p>

<p><b>Okno narzędzia zawiera dwie zakładki:</b>
<ul>
	<li><b>Źródło formatowania</b> - pozwala określić, gdzie ma być formatowany kod</li>
	<li><b>Opcje formatowania</b> - zawiera opcje formatowania kodu</li>
</ul></p>

Możesz również użyć utworzonych wcześniej stylów formatowania wybierając określony styl z listy rozwijanej po kliknięciu strzałki przy ikonie narzędzia formatowania na <b>Często używanych narzędzi</b>, lub korzystając z menu <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_formatting.php">Formatowanie i kompresja kodu</a> / <b>Szybkie formatowanie bieżącego</b>. Jeśli zaznaczysz fragment tekstu w dokumencie, tylko on zostanie sformatowany.

<h2>Źródło formatowania</h2><br />

<p>Za pomocą ustawień tej zakładki możliwe jest określenie zakresu działania narzędzia - od aktualnie edytowanego dokumentu, aż do ściśle określonych rodzajów dokumentów w wybranym Projekcie, folderach itd. Dostępne są opcje:</p>

<p><b>w aktywnym dokumencie</b> - operacje będą przeprowadzane na dokumencie aktualnie otwartym w edytorze.</p>

<p><b>w zaznaczonym tekście</b> - operacje będą przeprowadzane na zaznaczonym tekście w dokumencie aktualnie otwartym w edytorze.</p>

<p><b>we wszystkich otwartych</b> - operacje będą przeprowadzane na wszystkich dokumentach otwartych aktualnie w Pająku.</p>

<p><b>w wybranym Projekcie</b> - operacje będą wykonywane na wszystkich plikach <a href="services_general.php">Projektu</a> wybranego z listy. Można zawęzić rodzaje plików do plików z określonym rozszerzeniem:
	<ul>
		<li><b>pliki:</b> - pole tekstowe umożliwia wpisanie rozszerzeń plików w celu zawężenia rodzajów dokumentów, jakie mają być brane pod uwagę. Rozszerzenia należy podawać w postaci np. <tt>*.php;*.php3;*.php4</tt>.</li>
	</ul>
</p>

<p><b>w folderach</b> - operacje będą wykonywane na wszystkich plikach w folderach umieszczonych na liście. Listę folderów można edytować za pomocą przycisków z prawej strony.
	<ul>
		<li><b>Pliki z rozszerzeniem</b> - pole tekstowe umożliwia wpisanie rozszerzeń plików w celu zawężenia rodzajów dokumentów, jakie mają być brane pod uwagę. Rozszerzenia należy podawać w postaci np. <tt>*.php;*.php3;*.php4</tt>.</li>
		<li><b>łącznie z wszystkimi podfolderami</b> - zaznacz, aby rozszerzyć zakres operacji na pliki z wszystkich podfolderów wybranego folderu</li>
	</ul>
</p>

<p><b>w plikach</b> - operacje będą wykonywane na wszystkich plikach umieszczonych na liście. Listę plików można edytować za pomocą przycisków z prawej strony. </p></li>
</ul>

<p><b>Twórz kopie bezpieczeństwa</b><br />
Zaznacz, jeśli chcesz by podczas formatowania wybranych dokumentów w folderach, lub Projekcie, tworzone były ich kopie bezpieczeństwa.</p>




<h2>Opcje formatowania</h2>

<p>W tej zakładce możesz wybrać język, którego kod ma zostać sformatowany, a także rodzaj formatowania wybranego języka. Możesz wybrać więcej niż jeden język na raz - Pająk automatycznie rozpozna i dopasuje formatowanie do języka!</p>

<p>Pająk zawiera dwa oddzielne narzędzia formatowania - wbudowane bezpośrednio w program, oraz korzystające z zewnętrznego programu <a href="https://www.w3.org/People/Raggett/tidy/" target="_blank">Tidy(r)</a></p>


<h2>Użyj reguł formatowania wbudowanych w program</h2>

<p>Opcje w tej sekcji umożliwiają wybór języka, którego kod ma zostać sformatowany. Jest to narzędzie bezpośrednio wbudowane w program.</p>

<p>W celu formatowania kodu danego języka, zaznacz przełącznik przy jego nazwie, a następnie wybierz z listy schemat formatowania.</p>

<p><b>Formatuj HTML</b><br />
Zaznacz tę opcję, aby formatować kod HTML. Następnie wybierz z listy schemat formatowania.:
<ul>
	<li><b>Formatowanie bardzo oszczędne</b> - formatuje kod w sposób jak najbardziej zmniejszający rozmiar dokumentu, jednak pozostawiając go stosunkowo przejrzystym. Kod elementów podrzędnych będzie wcinany jedną spacją. Usunięte zostaną niepotrzebne puste wiersze.</li>
	<li><b>Formatowanie oszczędne</b> - formatuje kod w sposób przejrzysty. Kod elementów podrzędnych będzie wcinany jednym tabulatorem. Między niektórymi znacznikami, np. pomiędzy tabelami, pozostawione zostaną pojedyncze wiersze przerwy. Usunięte zostaną niepotrzebne puste wiersze.</li>
	<li><b>Formatowanie przejrzyste</b> - formatuje kod w sposób najbardziej przejrzysty. Znaczniki formatowania. Znaczniki określające strukturę dokumentu, wstawiające obrazki itp. zostaną umieszczone w osobnych wierszach. Usunięte zostaną niepotrzebne puste wiersze.</li>
	<li><b>Kompresja kodu</b> - formatuje kod w sposób jak najbardziej zwarty usuwając wszystkie niepotrzebne spacje, znaki końca wiersza itp. Dzięki temu kod HTML ma najmniejszą możliwą objętość i ładuje się szybciej. </li>
</ul>
</p>


<b>Formatuj CSS</b><br />
Zaznacz tę opcję, aby formatować arkusze CSS (osadzone w dokumentach, lub w osobnych plikach). Następnie wybierz z listy schemat formatowania.:

<ul>
	<li><b>Formatowanie najbardziej skrócone</b> - formatuje kod CSS umieszczając każdą klasę w pojedynczym wierszu, jedną bezpośrednio pod drugą. Usuwa wszystkie puste wiersze.</li>
	<li><b>Formatowanie skrócone</b> - formatuje kod CSS umieszczając każdą klasę w pojedynczym wierszu, oddzielając poszczególne klasy jednym pustym wierszem. Usuwa wszystkie pozostałe puste wiersze.</li>
	<li><b>Formatowanie przejrzyste</b> - formatuje kod CSS umieszczając każdy element klasy w pojedynczym wierszu. Kod elementów podrzędnych będzie wcinany jednym tabulatorem. Poszczególne klasy oddzielone będą pojedynczym pustym wierszem. Pozostałe puste wiersze są usuwane.</li>
</ul>


<a name="javascript"></a>
<p><b>Formatuj JavaScript</b><br />
Zaznacz tę opcję, aby formatować kod skryptów JavaScript. Za pomocą polecenia <a href="formatter_javascript.php">Ustawienia formatowania</a> możesz dostosować styl formatowania dla JavaScript.</p>

<a name="php"></a>
<p><b>Formatuj skrypty PHP</b><br />
Zaznacz tę opcję, aby formatować kod skryptów PHP. Za pomocą polecenia <a href="formatter_php.php">Ustawienia formatowania</a> możesz dostosować styl formatowania dla PHP.</p>

<p><b>Dostosowanie stylów formatowania</b><br />
Możesz również utworzyć własne style formatowania lub dostosować istniejące za pomocą opcji okna <a href="settings_codeinsight_formatter.php">Ustawienia programu - Formatowanie kodu źródłowego</a></p>




<h2>Zmień tylko wielkość znaków znaczników w dokumentach</h2>

<p>Zaznacz tę opcję jeśli chcesz, aby formater zmienił jedynie wielkość znaków w znacznikach w dokumentach, które będą formatowane. Następnie wybierz wielkość liter (małe/WIELKIE).</p>



<h2>Użyj zewnętrznego programu W3C Tidy (r)</h2>

<p>Wybranie tej opcji umożliwia skorzystanie z programu Tidy do formatowania dokumentów HTML, który został dostarczony wraz z Pająkiem. Możesz skorzystać z następujących stylów formatowania:</p>

<ul>
	<li><b>Formatuj do edycji kodu</b> - formatuje kod w sposób przejrzysty, umożliwiając łatwiejszą jego edycję. Kod elementów podrzędnych będzie wcinany dwoma spacjami, poszczególne znaczniki oddzielone pustym wierszem</li>
	<li><b>Formatu do publikacji</b> - formatuje kod w sposób zwarty, usuwając wcięcia, niepotrzebne puste wiersze itp.</li>
	<li><b>Konwersja HTML na XHTML</b> - konwertuje kod HTML dostosowując go do specyfikacji XHTML</li>
	<li><b>Usuń formatowanie Worda 2000</b> - usuwa z dokumentu niepotrzebne zazwyczaj znaczniki,style itp. wstawiane do HTML przy eksporcie dokumentów do formatu HTML z programu MS Word</li>
	<li><b>Usuń przestarzałe formatowanie</b> - usuwa z dokumentu znaczniki oznaczone w specyfikacji jako przestarzałe (<i>deprecated</i>), najczęściej dotyczące formatowania tekstu, zamieniając je na style CSS.</li>
</ul>



<p>Więcej o tym programie możesz przeczytać na stronie <a href="https://tidy.sourceforge.net/" target="_blank">stronie Tidy(r)</a> (w jęz. angielskim).</p>


<h2>Przyciski z prawej strony</h2>

<p><b>Formatuj</b><br />
Użyj tego przycisku, aby sformatować dokumenty używając wybranych opcji.</p>

<p><b>Ustawienia</b><br />
Użyj tego przycisku, otworzyć okno <a href="settings_codeinsight_formatter.php">Ustawienia programu / Inne ustawienia / Ułatwienia(...) / Formatowanie kodu źródłowego</a> w celu dopasowania opcji formatowania. W tym oknie możesz również edytować i tworzyć nowe style formatowania kodu</p>

 
</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="settings_codeinsight_formatter.php">Ustawienia formatowań</a></li>
   <li><a href="formatter_markuplangs.php">Ustawienia formatowania dokumentów znacznikowych</a></li>
   <li><a href="formatter_stylesheets.php">Ustawienia formatowania arkuszy stylów CSS</a></li>
   <li><a href="formatter_javascript.php">Ustawienia formatowania skryptów JavaScript</a></li>
   <li><a href="formatter_php.php">Ustawienia formatowania skryptów PHP</a></li>
   <li><a href="formatter_tidy.php">Ustawienia formatowania za pomocą programu Tidy</a></li>
   <li><a href="tool_htmlcompressor.php">Kompresor HTML</a></li>
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
