<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Sprawdzanie poprawności pisowni</title>

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
<h1>Sprawdzanie poprawności pisowni</h1>





<p>Pająk posiada wbudowane narzędzia sprawdzania poprawności pisowni dokumentów. </p>

<p>Korzystając z poleceń <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_spelling.php">Pisownia</a> możesz uruchomić sprawdzanie pisowni zarówno dla bieżącego dokumentu, jak i - po uruchomieniu narzędzia <a href="find_ext.php">Rozszerzone wyszukiwanie i zamiana</a> - dla dokumentów całego projektu i wybranych folderów.</p>

<p>Podczas pracy w edytorze, w <a href="main_editor.php">trybie edycji kodu źródłowego</a>, możesz włączyć podkreślanie błędów pisowni (poleceniem na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>).</p>

<p>Razem z Pająkiem dostarczone zostały słowniki dla wielu języków, w tym oczywiście polski i angielski.</p>

<h2>Tezaurus</h2>

<p>Oprócz sprawdzania pisowni, możesz skorzystac także z Tezaurusa (słownik wyrazów bliskoznacznych). Dla tezaurusa dostępny jest jedynie słownik jęz. angielskiego.</p>

<p>Aby używać tezaurusa, wybierz słownik, a następnie uaktywnij tezaurusa poleceniem z <a href="main_menu_spelling.php">Menu Pisownia</a>.</p>

<h2>Autokorekta</h2>



Autokorekta umożliwia automatyczną poprawę błędnych słów już podczas wpisywania. Odpowiednie opcje znajdziesz w oknie <a href="settings_editor_spelling.php">Ustawienia programu / Inne ustawienia / Edytor ... / Sprawdzanie pisowni</a>.

<h2>Inne narzędzia</h2>

<p>Oprócz typowego sprawdzania pisowni, możesz również użyć funkcji <a href="tool_typo_correct.php">Korekty typograficznej</a>, która szybko dostosuje tekst tak, by ładnie się układał na stronie.</p>

<p>W <a href="main_menu_spelling.php">menu Pisownia</a> dostępne są również narzędzia umożliwiające szybką konwersję <a href="charset_encoding.php">kodowania znaków narodowych</a>, czy usuwania polskich liter z dokumentów.</p>

</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="down_integrity.php">Sprawdzanie spójności projektu</a>
	<li><a href="down_syntax_check.php">Sprawdzanie poprawności składni</a>
	<li><a href="down_links_verify.php">Sprawdzanie poprawności odsyłaczy</a>
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
