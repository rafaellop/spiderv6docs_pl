<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Kolorowanie składni</title>

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
<h1>Ustawienia programu - Kolorowanie składni</h1>

<!-- treść pomocy -->
<p>
Kategoria o nazwie "Kolorowanie składni" pozwala na dostosowanie kolorowania składni w dokumentach edytowanych w Pająku.

<h2>Ustawienia schematów kolorowania</h2>

<p>Okno to umożliwia dostosowanie poszczególnych schematów kolorowania do własnych potrzeb i preferencji. Aby dostosować właściwości schematu, wybierz go z listy, a następnie skorzystaj z przycisków z prawej strony listy:</p>

<p><b>Właściwości schematu kolorowania</b><br />
Kliknij, aby otworzyć okno <a href="settings_editor_syntax_properties.php">Właściwości schematu kolorowania</a> służące do zmian w ustawieniach schematu kolorowania wybranego z listy. 
Możliwe jest dopasowanie kolorów i stylów tekstu, a także rozszerzeń nazw plików, dla których dany schemat kolorowania będzie domyślnie stosowany oraz przypisanie schematu do grupy schematów kolorowania.</p>



<p><b>Ustaw schemat jako domyślny</b><br />
Kliknij, aby wybrać danych schemat jako domyślny dla nowych dokumentów. </p>
<p>Po zapisaniu dokumentu, Pająk będzie próbował zmienić domyślny schemat do kolorowania na najlepiej pasujący dla danego typu dokumentu. W tym celu brane będą pod uwagę rozszerzenia nazwy pliku przypisane do schematów kolorowania i rozszerzenie nazwy danego dokumentu.</p>



<p><b>Edycja schematu kolorowania</b><br />
Kliknij, aby otworzyć '<a href="syntax_editor.php">Edytor schematów kolorowania</a>'. Narzędzie to umożliwia tworzenie nowych i edycję istniejących schematów kolorowania. Zmiany wprowadzone za pomocą 'Edytora schematów kolorowania' są nieodwracalne, dlatego zalecane jest zapisywanie zmian w nowym pliku pozostawiając oryginalny schemat niezmieniony!</p>

<p><b>Zawsze używaj domyślnego schematu niezależnie od rozszerzenia</b><br>
Zaznacz, jeśli chcesz, aby program stosował zawsze tylko domyślnie wybrany schemat kolorowania do wszystkich otwieranych i tworzonych dokumentów, niezależnie od ich rozszerzenia i przypisanego do niego schematu kolorowania na liście.</p>

<p><b>Wyświetlaj pogrupowane schematy</b><br />
Jeśli włączysz ten przełącznik, schematy kolorowania na liście schematów w głównym oknie (na <a href="toolbars_minitoolbar.php">mini pasku przycisków</a> i w <a href="main_menu_editor.php">menu podręcznym edytora</a>) programu będą wyświetlane w sposób pogrupowany wg typów wybranych dla schematów kolorowania.

<h2>Podświetlanie nawiasów</h2>

Dzięki podświetlaniu odpowiadających sobie par nawiasów, w łatwy sposób możesz zorientować się, gdzie jest początek i koniec bieżącego bloku kodu, który objęty jest nawiasami (np pętla w skrypcie PHP). Zebrane tu opcje pozwalają określić, jakie nawiasy będą kolorowane (możesz oddzilenie wybrać każdy spośród czterech par: (), {}, [] &lt;&gt;), a także wybrać kolor tła i kolor znaków dla nawiasów. Możesz też wyłączyć wyróżnianie nawiasów w kodzie.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings.php#settingslist">Inne ustawienia</a>
	<li><a href="settings_editor_syntax_properties.php">Właściwości schematu kolorowania</a>
	<li><a href="syntax_editor.php">Edytor kolorowania składni</a>
	<li><a href="syntax.php">Ogólnie o kolorowaniu składni w Pająku</a>
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