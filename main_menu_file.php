<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Plik</title>

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
<h1>Menu główne - Plik</h1>


<!-- Treść pomocy -->

<p>Menu "Plik" służy do wykonywania podstawowych operacji na dokumentach i programie, jak otwieranie, zamykanie, zapis, bądź drukowanie. Dostępne są następujące polecenia:</p>

<p><b><a href="main_menu_file_new.php">Nowy dokument</a></b><br />
Kliknij, aby utworzyć nowy, pusty dokument. Klikając na strzałkę z prawej, możesz skorzystać z podmenu w celu uruchomienia dodatkowych narzędzi.</p>

<hr>


<p><b>Otwórz</b><br />
Kliknij aby otworzyć istniejący dokument. <br />
Klikając na strzałkę z prawej, możesz skorzystać z listy ostatnio otwieranych dokumentów. Domyślnie jest to 10 pozycji, jednak możesz to zmienić korzystając opcji w oknie <a href="settings.php">Ustawienia programu</a> / <a href="settings_history.php">Historia</a>.<br />
 Kliknięcie ostatniej pozycji na liście ('<b>Otwórz wszystkie z listy MRU</b>') spowoduje otwarcie wszystkich plików umieszczonych na liście.</p>

<p><b><a href="tool_open_remote.php">Otwórz z Sieci</a></b><br />
Kliknij, aby otworzyć dokument z Sieci za pomocą dedykowanego narzędzia.</p>

<hr>

<p><b><a href="tool_open_remote.php">Otwórz ponownie bieżący</a></b><br />
Kliknij, aby zamknąć i ponownie otworzyć bieżący dokument. Jeśli w dokumencie wprowadzono zmiany i nie zostały one zapisane, wyświetlone zostanie pytanie, czy je zapisać. Funkcja ta jest przydatna, jeśli w plikach wprowadzono zmiany poza Pająkiem.</p>

<p><b><a href="tool_open_remote.php">Otwórz ponownie wszystkie</a></b><br />
Jak wyżej, dla wszystkich dokumentów otwartych w Pająku</p>

<hr>

<p><b><a href="tool_importer.php">Importuj...</a></b><br />
Kliknij, aby otworzyć Importer plików.</p>


<b>Eksportuj...</b><br />
Kliknij, aby wyeksportować plik do wybranego formatu: <b>HTML</b> lub <b>RTF</b> (Rich Text Format). Eksportowanie polega na zapisaniu dokumentu w taki sposób, by przedstawione zostały układ i kolorowanie składni w edytorze Pająka. Pomaga to znacząco przygotowywać listingi kodu do druku itp.

<hr>


<p><b>Zapisz</b><br />
Kliknij, aby zapisać bieżący dokument.</p>


<p><b>Zapisz jako...</b><br />
Kliknij, aby zapisać bieżący dokument pod nową nazwą.</p>


<p><b>Zapisz wszystkie</b><br />
Kliknij, aby szybko zapisać wszystkie otwarte dokumenty.</p>


<p><b>Publikuj bieżący w sieci</b><br />
Kliknij, aby opublikować w sieci bieżący dokument. <a href="network_publishing_general.php#publish_current">Czytaj więcej na temat zaawansowanych możliwosci tego polecenia</a>. </p>


<p><b>Publikuj otwarte w sieci</b><br />
Kliknij, aby opublikować w sieci wszystkie otwarte dokumenty. <a href="network_publishing_general.php#publish_current">Czytaj więcej na temat zaawansowanych możliwosci tego polecenia</a>. </p>

<hr>

<p><b>Zmień nazwę bieżącego</b><br />
Kliknij, aby zmienić nazwę bieżącego pliku. Nazwa pliku zostanie zmieniona zarówno na twardym dysku, jak i w edytorze.</p>


<p><b>Zmiana nazwy wielu plików</b><br>
To polecenie uruchamia narzędzie <a href="tool_chameleon.php">Kameleon - zmiana nazw plików</a> i umożliwia zmianę nazw plików w wielu folderach na raz za pomocą ustalonych reguł.

<hr>

<p><a href="find_ext.php"> Rozszerzone wyszukiwanie + konwerter znaków</a><br />
Uruchamia najbardziej rozbudowane narzędzie Pająka służące do wyszukiwania i zamiany. Wykorzystując "Rozszerzone wyszukiwanie i zamianę" możesz wyszukiwać i zamieniać tekst w aktualnym dokumencie, wszystkich otwartych, we wszystkich lub określonych dokumentach Serwisów lub wybranych folderów, zmieniać w nich kodowanie znaków, a także sprawdzać poprawność pisowni itd.</p>

<p><a href="find.php#filesearchinfo"> Wyszukiwanie plików i katalogów</a><br />
Wyświetla okno wyszukiwania plików i katalogów na <a href="down_find_report.php">dolnym panelu programu</a>.</p>

<hr>

<p><b>Zamknij dokument</b><br />
Kliknij, aby zamknąć bieżący dokument. Jeśli w dokumencie są niezapisane zmiany, program zapyta, czy go zapisać.</p>


<p><b>Zamknij wszystkie dokumenty</b><br />
Kliknij, aby zamknąć wszystkie dokumenty otwarte w Pająku. Jeśli w którymś dokumencie są niezapisane zmiany, program zapyta, czy go zapisać.

<hr>


<p><b>Usuń bieżący dokument</b><br />
Kliknij, aby usunąć dokument edytowany aktualnie w edytorze. Wraz z usuniętym dokumentem usunięty zostanie <a href="main_editor_addfiles.php">plik dodatkowych informacji o dokumencie (<tt>*.add</tt>)</a>. Nie będzie usuwana jego <a href="main_editor_backups.php">kopia zapasowa (plik <tt>*.bak</tt>)</a>!

<hr>


<p><b>Ustawienia drukarki</b><br />
kliknij, aby otworzyć okno ustawień drukarki.

<p><b>Drukuj...</b><br />
Kliknij, aby otworzyć okienko drukowania.


<hr>

<p><b>Koniec</b><br />
Kliknij, aby zakończyć pracę programu. Wszystkie dokumenty zostaną zamknięte. Jeśli w którymś dokumencie są niezapisane zmiany, program zapyta, czy go zapisać.


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
