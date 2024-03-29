<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Narzędzia / Nawigacja po dokumencie</title>

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
<h1>Menu główne - Narzędzia / Nawigacja po dokumencie</h1>

<!-- Treść pomocy -->

<p>Menu zawiera polecenia uruchamiające narzędzia ułatwiające poruszanie się po dokumencie i orientację w kodzie. W zależności od miejsca wywołania tego menu, dostępne są wszystkie polecenia, bądź tylko polecenia zaznaczania tekstu.
</p>


<p><b><a href="find_text.php#goto">Idź do...</a></b><br />
Kliknij, aby wybrać linię, zakładkę lub inne miejsce, do którego chcesz przejść, do której chcesz przejść(domyślny skrót <tt>Ctrl+G</tt>).


<p><b><a href="main_tabs_navigator.php">Pokaż nawigatora dokumentu</a></b><br />
Kliknij, aby pokazać zakładkę Nawigator na prawym panelu (domyślny skrót <tt>Ctrl+6</tt>). Zawiera ona szereg nawigatorów ułatwiających poruszanie się po dokumentach w różnych językach.

<p><b><a href="tool_docinfo.php">Nawigator zakładek</a></b><br />
Kliknij, aby przejść do nawigatora zakładek w oknie Informacje o dokumencie.



<p><b>Zaznacz znacznik pod kursorem</b><br />
Kliknij, aby objąć zaznaczeniem cały znacznik, na którym stoi kursor (domyślny skrót <tt>Ctrl+Alt+T</tt>). Działa tylko w językach znacznikowych, jak HTML, XML itp.</p>

<p><b>Zaznacz całość znacznika aż po zamykający</b><br />
Kliknij, aby objąć zaznaczeniem całą zawartość znacznika, na którym stoi kursor (musi on się znajdować wewnątrz znacznika (otwierającego, bądź zamykającego), którego zawartość ma być zaznaczona). Zaznaczeniem objęte zostaną również znacznik otwierający i zamykający. Funkcja dziala wyłącznie dla znaczników, które posiadają znacznik zamykający (jak &lt;table&gt;&lt;/table&gt;, &lt;p&gt;&lt;/p&gt; itp.). 

<p><b>Zaznacz wnętrze znacznika aż po zamykający</b><br />
Działa jak wyżej, przy czym zaznaczeniem nie zostanie objęty znacznik otwierający i zamykający, a jedynie tekst pomiędzy nimi.

<p><b>Zaznacz tekst pomiędzy znacznikami</b><br />
Kliknij, aby objąć zaznaczeniem tekst znajdujący się pomiędzy znacznikami (tzn. w lewo i w prawo od kursora do najbliższego znacznika). Domyślny skrót to <tt>Ctrl+Alt+D</tt>.

<p><b>Przejdź do znacznika otwierającego/zamykającego</b><br />
Kliknij, aby objąć zaznaczeniem znacznik otwierający, bądź zamykający, który odpowiada znacznikowi, na którym stoi kursor (domyślny skrót <tt>Ctrl+Alt+G</tt>). Działa tylko w językach znacznikowych, jak HTML, XML itp.


<p><b>Przejdź do następnego znacznika</b><br />
Kliknij, aby przejść na początek następnego znacznika (domyślny skrót <tt>Ctrl+Alt+Right</tt>). Działa tylko w językach znacznikowych, jak HTML, XML itp.

<p><b>Przejdź do poprzedniego znacznika</b><br />
Kliknij, aby przejść na początek poprzedniego znacznika (domyślny skrót <tt>Ctrl+Alt+Left</tt>). Działa tylko w językach znacznikowych, jak HTML, XML itp.

<p><b>Zaznacz następny znacznik</b><br />
Kliknij, aby objąć zaznaczeniem następny znacznik (domyślny skrót <tt>Shift+Ctrl+Alt+Right</tt>). Działa tylko w językach znacznikowych, jak HTML, XML itp.

<p><b>Zaznacz poprzedni znacznik</b><br />
Kliknij, aby objąć zaznaczeniem poprzedni znacznik (domyślny skrót <tt>Shift+Ctrl+Alt+Left</tt>). Działa tylko w językach znacznikowych, jak HTML, XML itp.

<p><b>Zaznacz selektor pod kursorem</b><br />
Kliknij, aby objąć zaznaczeniem zawartość selektora CSS, na którym stoi kursor (domyślny skrót <tt>Ctrl+'</tt>). Działa tylko w arkuszach stylów CSS.

<p><b>Przejdź do następnego selektora</b><br />
Kliknij, aby przejść do następnego selektora CSS (domyślny skrót <tt>Ctrl+]</tt>). Działa tylko w arkuszach stylów CSS.

<p><b>Przejdź do poprzedniego selektora</b><br />
Kliknij, aby przejść do poprzedniego selektora CSS (domyślny skrót <tt>Ctrl+[</tt>). Działa tylko w arkuszach stylów CSS.

<p><b>Przejdź do odpowiadającego nawiasu</b><br />
Kliknij, aby przejść do odpowiadającego nawiasu zamykającego, jeśli kursor stoi przy nawiasie otwierającym, lub odwrotnie (domyślny skrót <tt>Ctrl+9</tt>, łatwo zapamiętać, jako <tt>Ctrl+(</tt>). Narzędzie działa w językach skryptowych, jak JavaScript, PHP itp. Jest bardzo przydatne np. przy poruszaniu się po zawartości funkcji itp.

<p><b>Zaznacz tekst pomiędzy nawiasami</b><br />
Kliknij, aby zaznaczyć tekst pomiędzy odpowiadającymi sobie nawiasami. Jest to bardzo przydatne, gdy np. chcesz skopiować bardzo rozbudowana funkcję w skrypcie - po użyciu tego polecenia, całe ciało funkcji zostanie zaznaczone.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_menu_tools.php">Menu główne - Narzędzia</a></li>
	<li><a href="zen-coding.php">Biblioteka zen-coding z funkcjami nawigacyjnymi</a></li>
	<li><a href="main_editor_navigation.php">Różne sposoby nawigacji po dokumencie</a></li>
	<li><a href="main_tabs_navigator.php">Zakładka nawigator</a></li>
	<li><a href="settings_toolbars.php">Ustawienia programu - Ustawienia pasków, menu i skrótów</a></li>
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
