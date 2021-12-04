<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6">

<!-- nazwa strony pomocy -->
<title>Edytor pliku definicyjnego dla CSS</title>

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
<h1>Edytor pliku definicyjnego dla CSS</h1>






<p>Za pomocą edytora pliku definicyjnego CSS możesz modyfikować lub rozszerzać definicję CSS, z której Pająk korzysta w funkcjach dynamicznych podpowiedzi i na zakładce <a href="main_tabs_languages.php">Języki programowania</a>. Aby uzyskać dostęp do edytora pliku definicyjnego CSS użyj polecenia <b>Edytor pliku definicyjnego CSS</b>, które znajduje się w menu głównym. Możesz również uruchomić go za pomocą przycisku znajdującego się w ustawieniach programu w kategorii <a href="settings_codeinsight_php.php">Ułatwienia, dynamiczne atrybuty, inne</a> lub w menu. Przycisk pokazany został powyżej. 

<p>Okno edytora pliku definicyjnego CSS składa się z dwóch części: "Listy własności" zawierającej wszystkie własności CSS oraz zakładek "Podstawowe dane", "Przyjmowane wartości" i "Wsparcie w przeglądarkach".

<h2>Lista własności</h2>

<p>Lista zawiera wszystkie własności dostępne w CSS. Możesz dodawać nowe własności i usuwać istniejące. </p>

<p>Ikona obok nazwy własności zależna jest od ustawienia "Przynależność do grupy" w zakładce "Podstawowe dane".</p>

<p><b>Zapisz zmiany</b><br />
Kliknij, aby zapisać zmiany w pliku definicyjnym CSS</p>



<h2>Podstawowe dane</h2>

<p><b>Opis własności</b><br />
W tym miejscu wprowadź opis wybranej własności</p>

<p><b>Przynależność do grupy</b><br />
Określ grupę, do jakiej należy wybrana własność. Wybór grupy ma wpływ na grupowanie własności w <a href="main_tabs_inspector_css.php">Inspektorze CSS</a>, oraz określa ikonę, jaką będzie miała dana własność.</p>

<p><b>Ścieżka do pliku z dokumentacją</b><br />
W tym miejscu możesz podać ścieżkę do pliku z dokumentacją dla wybranej własności. Pozwoli to korzystać z Pomocy dla bieżącego dokumentu (skrót Ctrl+F1)</p>

<p><b>Własność jest skróconym odpowiednikiem innych własności</b><br />
Zaznacz, jeśli wybrana własność nie ma przyjmować własnych wartości, lecz przyjmować wartości innych własności CSS. </p>

<p>Po zaznaczeniu tej opcji musisz dodać na listę własności, których wartości mają być przyjmowane przez wybraną własność. Aby dodać własność skorzystaj z menu z prawej strony listy. Do dodawania własności służy okno <a href="tagdata_editor_tdf_css_property.php">Dodaj własność do listy...</a>. Pamiętaj, że kolejność podawanych własności ma znaczenie i należy ją podać w kolejności wyszczególnionej w specyfikacji CSS. Za pomocą przycisków w menu możesz przesuwać własności na liście</p>




<h2>Przyjmowane wartości</h2>

<p><b>Przyjmowane wartości</b><br />
W tym miejscu możesz podać wartości, jakie może przyjąć wybrana własność CSS. Obsługa listy wartości za pomocą przycisków z prawej strony.

<ul>
	<li><b>Własność może przyjąć wartość <tt>inherit</tt></b> - zaznacz, jeśli ta wartość ma się znaleźć na liście wartości.<br />
			Wybranie <tt>inherit</tt> podczas tworzenia stylu CSS oznacza, że wartość dla danej własności będzie dziedziczona z elementu nadrzędnego.</li>
	<li><b>Własność może przyjąć wielokrotne wartości</b> - zaznacz, jeśli własność może przyjąć kilka wartości oddzielonych od siebie spacjami.<br />
		Przykładowo własność <tt>background-position</tt>, może jednocześnie przyjąć wartości np. <tt>top left</tt>. Ustawienie to ma wpływ na działanie funkcji ułatwień edycyjnych, m. in. <a href="main_editor_codeinsight.php">Dynamiczny kod</a>, <a href="main_tabs_inspector_css.php">Inspektor CSS</a>.</li>
</ul>


<p><b>Własność może być także...</b>
Zaznacz przełącznik określający jakiego typu wartość może przyjmować edytowana aktualnie własność. Możliwe są do wyboru:</p>

<ul>
	<li><b>adres URL</b> - zaznacz, jeśli własność jest adresem UR i wskaż na liście z prawej typ dokumentu, do jakiego odnośnik będzie łączył,</li>
	<li><b>nazwa czcionki</b></li>
	<li><b>łańcuch znaków</b></li>
	<li><b>wartość liczbowa - rodzaj</b> - po zaznaczeniu tej opcji możesz wybrać typ liczby, jaki będzie mógł być wartością własności (całkowita, rzeczywista, z wartością, procentowa, kąt, czas, częstotliwość)</li>
</ul>





<h2>Wsparcie w przeglądarkach</h2>

<p>W tej zakładce możesz określić standardy, w których występuje dana własność i stopień obsługi jej przez różne przeglądarki internetowe</p>

<p><b>Wsparcie w standardach CSS</b><br />
Wybierz standardy CSS, w których występuje dana własność. Możesz wybrać spośród:</p>
<ul>
	<li>CSS1</li>
	<li>CSS2</li>
   <li>CSS2.1</li>
	<li>CSS3</li>
	<li>CSS Mobile Profile 1.0</li>
   <li>CSS TV Profile 1.0</li>
</ul>

<b>Wsparcie w przeglądarkach</b><br />

Zaznacz przełącznik <b>Określ wsparcie własności w przeglądarkach WWW</b> aby uaktywnić przycisk <a href="tagdata_editor_tdf_compatibility.php">Wsparcie w przeglądarkach</a> uruchamiający narzędzie o tej samej nazwie. Dzięki temu będzie można określić, które przeglądarki i w jakim stopniu obsługują dana własność CSS. Informacja ta znajdzie się w podpowiedzi podczas tworzenia stylu.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_tabs_languages.php">Zakładka "Języki programowania"</a>
	<li><a href="main_tabs_inspector_css.php">Inspektor CSS</a>
	<li><a href="main_editor_codeinsight.php">Dynamiczny kod</a>
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
