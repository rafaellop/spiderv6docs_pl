
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Pliki dodatkowych informacji o dokumencie ADD</title>

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
<h1>Pliki dodatkowych informacji o dokumencie ADD</h1>

<p>Podczas zapisu dokumentu tworzony może być plik zawierający dodatkowe informacje dotyczące ustawień dokumentu.</p>

<p>W oknie <a href="settings_editor_documents.php#add_files">Ustawień programu</a> możesz wybrać, jakie z informacji mają być zachowywane:</p>

<ul>
	<li>ustawienia <a href="main_editor_bookmarks.php">zakładek w dokumencie</a></li>
	<li>lista<a href="main_editor_todotasks.php"> zadań do wykonania</a></li>
	<li>przypisany <a href="main_preview_prevdoc.php">dokument podglądu</a></li>
	<li><a href="settings_editor_general.php">konfiguracja edytora</a></li>
	<li><a href="syntax.php">schemat kolorowania</a>, który był jako ostatni używany podczas edycji dokumentu</li>
	<li>pozycja kursora i zaznaczenie w chwili zapisu</li>
</ul>

Nazwa pliku dodatkowych informacji tworzona jest z nazwy oryginalnego dokumentu + rozszerzenie <tt>.add</tt>. Na przykład:

<ul>
	<li>Nazwa dokumentu: <tt><b>index.html</b></tt></li>
	<li>Nazwa pliku dodatkowych informacji <tt><b>index.html.add</b></tt></li>
</ul>


<h2>Co zrobić, aby pliki ADD nie były tworzone?</h2>

<p>Wiele osób zadawało pytanie, co zrobić, by Pająk nie tworzył plików ADD w momencie zapisu dokumentu. Rozwiązanie jest bardzo proste - jeśli żadna z ww. opcji nie będzie zaznaczona, pliki dodatkowych informacji nie będą tworzone. 

<p>Należy przy tym pamiętać, że w ten sposób znacznie ogranicza się możliwość korzystania z zaawansowanych funkcji edytora (<b><a href="main_editor_todotasks.php">Zadania do wykonania</a>, <a href="main_editor_bookmarks.php">zakładki</a> itp. nie będą pamiętane po zamknięciu dokumentu!</b>)</p>


<h2>Szybkie usuwanie plików ADD</h2>

<p>Z czasem pliki dodatkowych informacji o dokumencie w danym serwisie mogę przestać być potrzebne (np. po zakończeniu prac). Aby je wszystkie szybko usunąć skorzystaj z polecenia w menu <a href="main_menu_services_properties.php">Serwisy / Własności serwisu / Oczyszczanie serwisu</a>.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_editor_general.php">Edytor - ogólnie</a>
	<li><a href="settings_editor_documents.php#add_files">Ustawienia programu / dokumenty</a>
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
