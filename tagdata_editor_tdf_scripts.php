
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Edytor pliku definicyjnego dla skryptów</title>

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
<h1>Edytor pliku definicyjnego dla skryptów</h1>





<p>Za pomocą edytora pliku definicyjnego języków skryptowych możesz modyfikować lub rozszerzać definicje języka JavaScript i VBScript obsługiwanych w Pająku w narzędziach dynamicznych podpowiedzi i na zakładce <a href="main_tabs_languages.php">Języki programowania</a>. Aby uzyskać dostęp do edytora użyj polecenia <b>Edytor skryptowych plików definicyjnych</b>, które znajduje się w menu głównym. Możesz również uruchomić go za pomocą przycisku znajdującego się w ustawieniach programu w kategorii <a href="settings_codeinsight_scripts.php">Ułatwienia, dynamiczne atrybuty, inne</a> lub w menu. Przycisk pokazany został powyżej.

<p>Okno edytora pliku definicyjnego skryptów składa się z dwóch zakładek: zakładki "Języki skryptowe" oraz "Typy obiektowe".

<h2>Zakładka "Języki skryptowe"</h2>

<p>Ta zakładka składa się z listy wyboru, z której wybierasz język (JavaScript lub VBScript) dla którego będziesz przygotowywał listę obsługiwanych funkcji i własności.

<p>Znajdująca się poniżej lista pozwala na definiowanie funkcji i własności dla wybranego języka. W pierwszej kolumnie listy znajduje się nazwa metody lub własności obsługiwanej w tym języku. Druga kolumna to opis, który pojawia się np. na zakładce <a href="main_tabs_languages.php">Języki programowania</a> lub w pomocy dynamicznej. Obok nazw elementów znajdują się ikony, które oznaczają:

<table border="0">
<tr>
	<td></td>
	<td>- metodę, czyli funkcję</td>
</tr>
<tr>
	<td></td>
	<td>- własność, czyli pole obiektu</td>
</tr>
</table>

<p>Kolejne elementy możesz dodawać, usuwać i modyfikować za pomocą przycisków znajdujących się obok listy. Podczas dodawania lub usuwania elementów otwiera się okienko <a href="tagdata_editor_tdf_scripts_globals.php">Element języka skryptowego</a> w którym możesz podać definicję nowego elementu.

<a name="tdf_scripts_objecttypes"></a>
<h2>Typy obiektowe</h2>

<p>Ta zakładka jest nieco bardziej skomplikowana. Znajduje się tutaj definicja typów obiektowych używanych w ASP, JavaScript, JavaScript w HTML oraz obiektów JavaScript typu wyrażenie regularne. Aby zmodyfikować wybraną grupę obiektów wybierz typ na liście. Do listy poniżej zostanie wczytana lista typów obiektowych przypisanych do wybranej grupy. Za pomocą przycisku obok listy z grupą obiektów możesz przypisać do wybranej grupy kilka obiektów globalnych w okienku <a href="tagdata_editor_tdf_scripts_globaltypes.php">Globalne obiekty i typy</a>. 

<p>Poniżej listy wyboru grupy obiektów znajdują się dwie listy: "Lista typów" oraz "Właściwości i metody bieżącego typu":

<p><b>Lista typów</b><br>
Lista typów obiektowych zdefiniowanych w grupie wybranej powyżej. Kliknięcie nazwy typu spowoduje wyświetlenie jego właściwości i metod na liście z prawej strony. Za pomocą przycisków poniżej listy możesz modyfikować listę typów. Po kliknięciu dodania lub modyfikacji wybranego typu pojawi się okienko <a href="tagdata_editor_tdf_scripts_objecttype.php">właściwości typu obiektowego</a>.

<p><b>Właściwości i metody bieżącego typu</b><br>
Po wybraniu typu obiektowego na liście opisanej powyżej w opisywanej teraz liście pojawią się przypisane do wybranego typu obiektowego metody i własności. Podobnie jak w przypadku opisanym na początku tej strony pomocy, ikony wyświetlane obok nazw elementów mają następujące znaczenie:

<table border="0">
<tr>
	<td></td>
	<td>- metodę, czyli funkcję</td>
</tr>
<tr>
	<td></td>
	<td>- własność, czyli pole obiektu</td>
</tr>
</table>

<p>Za pomocą przycisków poniżej listy możesz modyfikować listę elementów przypisanych do wybranego typu. Po kliknięciu dodania lub modyfikacji wybranego typu pojawi się okienko <a href="tagdata_editor_tdf_scripts_objecttypeprop.php">Właściwość lub metoda</a>.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tagdata_editor_tdf_scripts_globals.php">Element języka skryptowego</a>
	<li><a href="tagdata_editor_tdf_scripts_objecttype.php">właściwości typu obiektowego</a>
	<li><a href="tagdata_editor_tdf_scripts_globals.php">Element języka skryptowego</a>
	<li><a href="tagdata_editor_tdf_scripts_objecttypeprop.php">Właściwość lub metoda</a>
	<li><a href="settings_codeinsight_scripts.php">Dynamiczny kod w skryptach</a>
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
