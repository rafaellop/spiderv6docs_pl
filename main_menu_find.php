<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Szukaj</title>

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
<h1>Menu główne - Szukaj</h1>

<!-- treść pomocy -->

<p>Menu Szukaj służy do operacji wyszukiwania i zamiany tekstu w dokumentach otwartych w programie, a także zapisanych na dysku. Dostępne są następujące pozycje:

<p><a href="find_text.php#find"> Znajdź</a> <br />
Uruchamia narzędzie do wyszukiwania w aktualnie otwartym dokumencie . Standardowy skrót klawiszowy Ctrl+F.</p>

<p><a href="find_text.php#find"> Znajdź następny</a><br />
Znajduje w aktualnym dokumencie kolejne wystąpienie tekstu szukanego wcześniej za pomocą narzędzia Wyszukiwanie. Jego działanie jest identyczne, jak po kolejny wciśnięciu przycisku Znajdź w narzędzie Wyszukiwanie. Standardowy skrót klawiszowy F3.</p>

<p><a href="find_text.php#replace"> Znajdź i zamień</a> <br />
Uruchamia narzędzie do zamiany tekstu w aktualnie otwartym dokumencie . Standardowy skrót klawiszowy Ctrl+R.</p>

<p><a href="find_text.php#goto"> Idź do</a> <br />
Uruchamia narzędzie umożliwiające szybkie przenoszenie się do wybranego fragmentu dokumentu. Standardowy skrót klawiszowy Ctrl+G. Jednocześnie do tego polecenia przypisane jest podmenu pozwalające na przemieszczanie się w dokumencie pomiędzy znacznikami, selektorami, nawiasami, a także zakładkami numerycznymi i tekstowymi. Opis wszystkich tych poleceń znajdziesz w temacie pomocy do <a href="main_menu_tools_navigation.php">Menu Narzędzia / Nawigacja po dokumencie</a></p>


<p><a href="find_ext.php"> Rozszerzone wyszukiwanie + konwerter znaków</a><br />
Uruchamia najbardziej rozbudowane narzędzie Pająka służące do wyszukiwania i zamiany. Wykorzystując "Rozszerzone wyszukiwanie i zamianę" możesz wyszukiwać i zamieniać tekst w aktualnym dokumencie, wszystkich otwartych, we wszystkich lub określonych dokumentach Serwisów lub wybranych folderów, zmieniać w nich kodowanie znaków, a także sprawdzać poprawność pisowni itd.</p>

<p><a href="find.php#filesearchinfo"> Wyszukiwanie plików i katalogów</a><br />
Wyświetla okno wyszukiwania plików i katalogów na <a href="down_find_report.php">dolnym panelu programu</a>.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="find.php">Wyszukiwanie w Pająku</a>
	<li><a href="find_text.php">Wyszukiwanie, zamiana, przenoszenie do wybranych elementów dokumentu</a>
	<li><a href="down_find_report.php">Okno "Raport wyszukiwania"</a>
	<li><a href="find_regexp.php">Wyszukiwanie - wyrażenia regularne</a>
	<li><a href="main_menu_main.php">Pozostałe główne menu programu</a>
	<li><a href="main_window_desc.php">Główne okno programu</a>
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
