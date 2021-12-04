<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu podręczne edytora w trybie graficznym</title>

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
<h1>Menu podręczne edytora w trybie graficznym</h1>

<!-- Treść pomocy -->

<p>Menu podręczne <a href="main_editor_wysiwyg.php">edytora w trybie graficznym</a> zawiera polecenia uruchamiające najczęściej używane w tym trybie funkcje i narzędzia:</p>

<!--

<p><b>Popraw znacznik w narzędziu</b><br />
Kliknij, aby otworzyć narzędzie do edycji znacznika, na którym stoi kursor (domyślny skrót <tt>F5</tt>).
-->

<p><b>Tabele - tryb graficzny</b><br />
Wyświetla podmenu zawierające polecenia obsługi tabel, jak edycja wiersza i komórki, a także podziału i łączenia komórek.

<hr />

<p><b>Schowek</b><br />
Wyświetla podmenu zawierające polecenia obsługi schowka: </a></p>
 
<ul>
        <li><p><b>Wytnij</b><br />Kliknij, aby wyciąć zaznaczenie do schowka (domyślny skrót <tt>Ctrl+X</tt>).
        <li><p><b>Kopiuj</b><br />Kliknij, aby skopiować zaznaczenie do schowka (domyślny skrót <tt>Ctrl+C</tt>).
        <li><p><b>Kopiuj linię</b><br />Kliknij, aby skopiować do schowka całą linię, w której znajduje się kursor.
        <li><p><b>Wklej</b><br />Kliknij, aby wkleić zawartość schowka (domyślny skrót <tt>Ctrl+V</tt>).
        <li><p><b>Wklej ze schowka z zamianą</b><br />Kliknij, aby wybrać sposób zamiany tekstu podczas wklejania. Podmenu to jest identyczne, jak <a href="main_menu_edit_pastechange.php">menu Edycja / Wklej ze schowka z zamianą</a>.
        <li><p><b><a href="tool_multiclipboard.php">Wieloschowek</a></b><br />Kliknij, aby wyświetlić okno Wieloschowka (domyślny skrót <tt>Ctrl+Shift+W</tt>). Polecenie posiada podmenu wyświetlające zapamiętane w Wieloschowku elementy - aby wstawić odpowiedni fragment do edytora kliknij na wybranej pozycji. Identyczne polecenie znajdziesz w <a href="main_menu_edit.php">menu Edycja</a>.
</ul>

<p><b>Zaznacz wszystko</b><br />
Kliknij, aby zaznaczyć cały tekst w edytorze (domyślny skrót <tt>Ctrl+A</tt>)

<p><b>Zaznaczony tekst na...</b><br />
Kliknij, aby otworzyć podmenu i wybrać sposób zamiany zaznaczonego tekstu. Podmenu to jest identyczne, jak <a href="main_menu_edit_change_selected.php">menu Edycja / Zaznaczony tekst na...</a>.

<p><b>Język dokumentu</b><br>
Kliknij, aby wskazać język znacznikowy, w którym tworzony jest dokument (polecenie jest przydatne, gdy Pająk nie rozpozna samodzielnie języka na podstawie sekcji META, czy znacznika DOCTYPE).

<p><b>Kodowanie</b><br>
Kliknij, aby skorzystać z poleceń zmiany kodowania znaków w bieżącym dokumencie.

<hr />

<p><b>Edytor wizualny</b><br />
Kliknij, aby wyłączyć tryb edycji wizualnej (włączyć tryb <a href="main_editor.php">edycji kodu źródłowego</a>).</p>

<p><b>Przeglądanie</b><br />
Kliknij, aby włączyć zakładkę Przeglądanie w celu obejrzenia bieżącego dokumentu. Jeśli w <a href="settings_browse.php">Ustawieniach programu / Przeglądanie</a> ustawiłeś zewnętrzne przeglądarki, możesz wybrać przeglądarkę, która wyświetli stronę w swoim oknie. Standardowy skrót <tt>F11</tt>.

<p><b>Widok głównego okna</b><br />
Kliknij, aby wyświetlić, bądź schować paski narzędzi lub panele. Polecenie wyświetla <a href="main_menu_view_view.php">podmenu</a> pozwalające na zmianę ustawień wyglądu głównego okna.

<p><b>Funkcje edytora</b><br />
Kliknij, aby wyświetlić podmenu zawierające polecenia sterujące pracą edytora. 

<hr />

<p><b>Otwórz odnośnik</b><br />
Kliknij, aby otworzyć w edytorze dokument, do którego prowadzi odnośnik w bieżącym znaczniku (domyślny skrót <tt>Shift+Ctrl+O</tt>).


<p><b>Przeglądaj odnośnik</b><br />
Kliknij, aby obejrzeć w nowym oknie przeglądarki dokument, do którego prowadzi odnośnik w bieżącym znaczniku.

<hr>

<p><b>Nawigacja po dokumencie</b><br />
Zawiera polecenia uruchamiające narzędzia ułatwiające poruszanie się po dokumencie i orientację w kodzie. Podmenu to ma polecenia ułożone identycznie, jak w menu <a href="main_menu_tools_navigation.php">Narzędzia / Nawigacja po dokumencie</a>.

<p><b>Zakładki w dokumencie</b><br />
Kliknij, aby otworzyć podmenu zarządzania zakładkami i przemieszczania się po dokumencie. Podmenu to ma polecenia ułożone identycznie, jak w menu <a href="main_menu_edit.php">Narzędzia / Zakładki w dokumencie</a>.

<hr />

<p><b>Zamknij dokument</b><br />
Kliknij, aby zamknąć bieżący dokument. Jeśli w dokumencie są niezapisane zmiany, program zapyta, czy go zapisać.</p>

<p><b>Dostosuj paski, menu i skróty</b><br />
Kliknij, aby otworzyć <a href="settings_toolbars.php">okno, w którym będzie można dostosować ww. elementy programu</a>.</p>

<p><b>Pomoc do edytora</b><br>
Ten przycisk wyświetla stronę pomocy dla edytora.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_editor_wysiwyg.php">Edytor w trybie graficznym</a>
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