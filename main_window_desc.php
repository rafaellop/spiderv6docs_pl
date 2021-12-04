<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Okno główne programu</title>

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
<h1>Okno główne programu</h1>

<p>Okno główne Pająka składa się z kilku zasadniczych części:</p>



<p><b><a href="main_menu_main.php">Menu główne</a></b><br />
Zawiera szereg menu, które udostępniają wszystkie narzędzia programu.

<p><b>Lewy panel zasobów</b><br />
Lewy panel zasobów możesz wyświetlić korzystając z polecenia w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_view.php">Wyświetl</a> / <a href="main_menu_view_view.php">Widok</a>, a także za pomocą standardowego skrótu klawiszowego <tt>F9</tt>.
<p>Zawiera zakładki:</p>
<ul>
	<li><a href="main_tabs_myservices.php">Moje serwisy</a> - służy do zarządzania <a href="services_general.php">serwisami</a> (wyświetlana skrótem klawiszowym <tt>Ctrl+1</tt>)</li>
	<li><a href="main_tabs_inspector_tags.php">Inspektor znaczników</a> - służy do tworzenia i edycji znaczników w językach znacznikowych (wyświetlana skrótem klawiszowym <tt>Ctrl+2</tt>)</li>
	<li><a href="main_tabs_inspector_css.php">Inspektor CSS</a> - służy do tworzenie i edycji arkuszy stylów CSS  (wyświetlana skrótem klawiszowym <tt>Ctrl+3</tt>)</li>
	<li><a href="main_tabs_macrocodes.php">Makrokody</a> - służy do tworzenia, edycji i korzystania z <a href="macrocodes.php">makrokodów (wyświetlana skrótem klawiszowym <tt>Ctrl+4</tt>)</a>.</li>
</ul>


<p><b>Panel środkowy</b><br />
Panel środkowy jest wyświetlany cały czas i nie możesz go wyłączyć. Zawiera zakładki:</p>
<ul>
	<li><b>Tworzenie</b> - zawiera edytor w <a href="main_editor.php">trybie tekstowym</a> i w <a href="main_editor_wysiwyg.php">trybie graficznym (wysiwyg)</a></li>
	<li><a href="main_preview_general.php">Przeglądanie</a> - służy do przeglądania tworzonego dokumentu w oknie przeglądarki internetowej.</li>
</ul>


<p><b>Prawy panel zasobów</b><br />
Prawy panel zasobów możesz wyświetlić korzystając z polecenia w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_view.php">Wyświetl</a> / <a href="main_menu_view_view.php">Widok</a>, a także za pomocą standardowego skrótu klawiszowego <tt>Ctrl+F9</tt>.
<p>Zawiera zakładki:</p>
<ul>
	<li><a href="main_tabs_myftpservers.php">Moje serwery</a> - służy do publikowania dokumentów w Sieci (wyświetlana skrótem klawiszowym <tt>Ctrl+5</tt>)</li>
	<li><a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a> - służy do pracy z serwerami baz danych MySQL (wyświetlana skrótem klawiszowym <tt>Ctrl+6</tt>)</li>
	<li><a href="main_tabs_navigator.php">Nawigator</a> - zawiera nawigatory dokumentów tworzonych w HTML i innych językach (wyświetlana skrótem klawiszowym <tt>Ctrl+7</tt>)</li>
	<li><a href="main_tabs_languages.php">Języki programowania</a> - zawiera zestaw definicji dla kilku języków programowania (wyświetlana skrótem klawiszowym <tt>Ctrl+8</tt>)</li>
</ul>

<p><b>Dolny panel wyników</b><br />
Dolny panel możesz wyświetlić korzystając z polecenia w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_view.php">Wyświetl</a> / <a href="main_menu_view_view.php">Widok</a>, a także za pomocą standardowego skrótu klawiszowego <tt>Alt+F9</tt>.
<p>Zawiera zakładki:</p>
<ul>
	<li><a href="down_links_verify.php">Poprawność odsyłaczy</a> - wyświetla raporty po wykonaniu operacji sprawdzania poprawności odsyłaczy</li>
	<li><a href="down_syntax_check.php">Poprawność składni</a> - wyświetla raporty po wykonaniu operacji sprawdzania poprawności składni dokumentów</li>
	<li><a href="down_integrity.php">Spójność serwisu</a> - wyświetla raporty po wykonaniu operacji sprawdzania spójności serwisu</li>
	<li><a href="down_find_report.php">Raport wyszukiwania</a> - wyświetla raporty po wykonaniu operacji wyszukiwania, bądź sprawdzania pisowni.</li>
	<li><a href="down_publishing.php">Operacje publikowania</a> - wyświetla listy plików przeznaczonych do publikacji (kolejkę FTP i synchronizacji)oraz raporty na temat operacji publikowania.</li>
	<li><a href="down_help.php">Pomoc do programu</a> - zawiera różne tematy pomocy do programu i obsługiwanych przez Pająka języków programowania</li>
</ul>



<p><b>Paski narzędzi</b><br />
W oknie głównym programu może być wyświetlane również kilka <a href="toolbars_general.php">pasków narzędzi</a> zawierających polecenia uruchamiające różne narzędzia. 


</td>
</tr>
</table>

<table>
<tr>
<td width="100%">

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