
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>HTML Help - HTML Help a serwisy w Pająku</title>

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
<h1>HTML Help - HTML Help a serwisy w Pająku</h1>



<p>
Ponieważ projekt HTML Help jest zawsze oddzielnym przedsięwzięciem, Pająk umożliwia potraktowanie takiego projektu jako osobnego <a href="service_properites.php">serwisu</a>. To pozwala na zastosowanie wobec takiego serwisu wszystkich mechanizmów przewidzianych dla serwisów, np. sprawdzać poprawność składni, prowadzić zaawansowane wyszukiwanie i zamianę, czy otwierać najczęściej używane pliki.<br /><br />
Decydowanie czy projekt HTML jest jednocześnie serwisem odbywa się poprzez tworzenie nowego serwisu i zaznaczenie odpowiedniej opcji w jego oknie głównym
</p>

<h2>Ustawienia projektu HTML Help</h2>

<p><b>Ten serwis jest również projektem HTML Help</b><br />
Zaznaczenie tej opcji powoduje uaktywnienie wszystkich możliwości serwisu związanych z projektem HTML Help.
</p>
<p><b>Główny plik projektu HTML Help (<tt>.hhp</tt>)</b><br />
W oknie tym należy wpisać pełną ścieżkę dostępu do głównego pliku projektu wraz z rozszerzeniem, albo wybrać z dysku, korzystając z przycisku obok pola. 
</p>
<p><b>Kompiluj projekt</b><br />
Przycisk ten uruchamia natychmiastową kompilację wskazanego projektu.
</p>
<p><b>Skompiluj szybko ten serwis</b><br />
Po skorzystaniu z tej opcji uruchomione zostaje okno dialogowe <a href="tool_htmlhelp_folder_to_chm.php">szybkiego kompilowania</a> serwisu do postaci CHM.
</p>
<p><b>Edytuj projekt</b><br />
Przycisk ten uruchamia <a href="tool_htmlhelp_hhp_editor.php">edytor projektu</a>, co umożliwia wprowadzenie poprawek lub sporządzenie projektu od nowa.
</p>
<p><b>Przeglądaj skompilowany</b><br />
Przyciskiem tym uruchamiamy do podglądu już skompilowany plik CHM.
</p>
<p><b>Raport z kompilacji</b><br />
Po kliknięciu wywołujemy raport z przeprowadzonej kompilacji.
</p>
<p><b>Uruchom Help Workshop</b><br />
Jeżeli klikniemy na tym przycisku, otwarty zostanie program HTML Help Workshop, do którego wczytany zostanie główny plik projektu.
</p>


</td>
</tr>
</table><br />


<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - ogólne informacje</a>
	<li><a href="tool_htmlhelp_hhp_editor.php">Edytor projektu HTML Help</a>
	<li><a href="tool_htmlhelp_hhc_editor.php">Edytor spisu treści HTML Help</a>
	<li><a href="tool_htmlhelp_hhk_editor.php">Edytor skorowidza (indeksu) HTML Help</a>
	<li><a href="tool_htmlhelp_folder_to_chm.php">Szybki HTML Help z folderu</a>
	<li><a href="tool_htmlhelp_hhp_compilation.php">Kompiluj dokument HTML Help</a>
	<li><a href="tool_htmlhelp_compiler_info.php">Informacja dla kompilatora HTML Help</a>
	<li><a href="service_properites.php">Właściwości serwisu</a>
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
