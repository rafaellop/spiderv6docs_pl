
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Edycja</title>

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
<h1>Menu główne - Edycja</h1>

<!-- Treść pomocy -->

<p>Menu Edycja zawiera polecenia przydatne podczas pracy z dokumentem:


<p><b>Cofnij</b><br />
Kliknij, aby cofnąć ostatnią operację w edytorze (domyślny skrót <tt>Ctrl+Z</tt>).

<p><b>Ponów</b><br />
kliknij, aby ponownie wykonać operację cofniętą w edytorze (domyślny skrót <tt>Shift+Ctrl+Z</tt>).

<hr>

<p><b>Wytnij</b><br />
Kliknij, aby wyciąć zaznaczenie do schowka (domyślny skrót <tt>Ctrl+X</tt>).

<p><b>Kopiuj</b><br />
Kliknij, aby skopiować zaznaczenie do schowka (domyślny skrót <tt>Ctrl+C</tt>).

<p><b>Wklej</b><br />
Kliknij, aby wkleić zawartość schowka (domyślny skrót <tt>Ctrl+V</tt>).

<p><b><a href="main_menu_edit_pastechange.php">Wklej ze schowka z zamianą</a></b><br />
Kliknij, aby wybrać sposób zamiany tekstu podczas wklejania.

<p><b><a href="tool_multiclipboard.php">Wieloschowek</a></b><br />
Kliknij, aby wyświetlić okno Wieloschowka (domyślny skrót <tt>Ctrl+Shift+W</tt>). Polecenie posiada podmenu wyświetlające zapamiętane w Wieloschowku elementy - aby wstawić odpowiedni fragment do edytora kliknij na wybranej pozycji. Identyczne polecenie znajdziesz w <a href="main_menu_editor.php">menu podręcznym Edytora</a>.

<p><b><a href="main_menu_edit_additionals.php">Dodatkowe polecenia</a></b><br />
Kliknij, aby wyświetlić podmenu zawierające dodatkowe polecenia edycyjne.

<hr>

<p><b>Zaznacz wszystko</b><br />
Kliknij, aby zaznaczyć cały tekst w edytorze (domyślny skrót <tt>Ctrl+A</tt>). Rozwinięcie przypisanego do tej pozycji menu daje dostęp do dodatkowych poleceń pozwalających na zaznaczanie znaczników, selektorów, tekstów między nawiasami itp. Ich opis znajdziesz w temacie pomocy <a href="main_menu_tools_navigation.php">Menu Narzędzia / Nawigacja po dokumencie</a>.</p> 


<p><b><a href="main_menu_edit_change_selected.php">Zaznaczony tekst na...</a></b><br />
Kliknij, aby otworzyć podmenu i wybrać sposób zamiany zaznaczonego tekstu.

<p><b>Znajdź i zamień '\' na '/'</b><br />
Kliknij, aby zamienić wszystkie znaki <b>\</b> na <b>/</b> w bieżącym dokumencie. 

<hr>

<p><b>Wcięcie</b><br />
Kliknij, aby wciąć bieżący wiersz w dokumencie (domyślny skrót <tt>Ctrl+Alt+Space</tt>).

<p><b>Cofnij wcięcie</b><br />
Kliknij, aby usunąć wcięcie bieżącego wiersza (domyślny skrót <tt>Shift+Ctrl+Space</tt>).


<p><b>Godzina/data</b><br />
Kliknij, aby wstawić do dokumentu bieżącą datę i godzinę w miejscu kursora. Kliknij w strzałkę obok polecenia, aby rozwinąć listę zawierającą różne formaty, w jakich możesz wstawić bieżącą datę i czas. Dodatkowo znajduje się tam polecenie uruchamiające okno <a href="settings_datetime_templates.php">Ustawień szablonów daty i czasu</a>.


<p><b><a href="tool_unicodeeditorek.php">Edytorek Unicode</a></b><br />
Kliknij, aby uruchomić okno mini edytorka, który służy do wklejania i obsługi tekstów kodowanych w Unicode.

<hr>

<p><b>Powtórzenie wstawienia znacznika</b><br />
Kliknij, aby ponownie wstawić ostatnio używany znacznik. Jeśli ostatnio używałeś makrokodu, zostanie on użyty ponownie. Jeśli podczas wstawiania zaznaczony będzie jakiś tekst, zostanie on (jeśli to możliwe) objęty tym znacznikiem. Domyślny skrót <tt>Ctrl+Q</tt>.


<p><b>Popraw znacznik w narzędziu</b><br />
Kliknij, aby otworzyć narzędzie do edycji znacznika, na którym stoi kursor (domyślny skrót <tt>F5</tt>).


<p><b>Popraw znacznik ze wszystkimi atrybutami</b><br />
Kliknij, aby otworzyć <a href="main_tabs_inspector_tags.php">Inspektora znaczników</a> z ustawieniami dla bieżącego znacznika (domyślny skrót <tt>F6</tt>).

<hr>

<p><b>Otwórz odnośnik</b><br />
Kliknij, aby otworzyć w edytorze dokument, do którego prowadzi odnośnik w bieżącym znaczniku (domyślny skrót <tt>Shift+Ctrl+O</tt>).


<p><b>Przeglądaj odnośnik</b><br />
Kliknij, aby obejrzeć w nowym oknie przeglądarki dokument, do którego prowadzi odnośnik w bieżącym znaczniku.

<hr>

<p><b>Informacje o dokumencie</b><br />
Kliknij, aby otworzyć okno informacji o bieżącym dokumencie. Korzystając z podmenu możesz otworzyć od razu wybraną zakładkę tego okna:
<ul>
	<li><a href="tool_docinfo.php">Informacje o dokumencie</a></li>
	<li><a href="tool_docinfo.php#bookmark">Nawigator zakładek</a></li>
	<li><a href="main_editor_todotasks.php">Zadania do wykonania</a></li>
</ul>
bądź też utworzyć nowe zadanie do wykonania.


<p><b><a href="main_menu_edit_bookmarks.php">Zakładki w dokumencie</a></b><br />
Kliknij, aby otworzyć podmenu zarządzania zakładkami i przemieszczania się po dokumencie.



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_toolbars.php">Ustawienia programu - Ustawienia pasków, menu i skrótów</a>
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
