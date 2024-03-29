<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Dolny panel wyników - Kolejka plików FTP</title>

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
<h1>Dolny panel wyników - Kolejka plików FTP</h1>

<!-- treść pomocy -->
<p>Ta lista zakładki <a href="down_publishing.php">Operacje publikowania</a> znajdującej się na <a href="down_panel.php">dolnym panelu wyników</a> przedstawia tzw. "kolejkę plików" wykorzystywaną do tworzenia listy zadań, które mają być wykonane w jednym przebiegu na serwerze FTP lub WebDAV, np. wysłanie pliku na serwer, pobranie pliku czy operacje na katalogach.

<p>"Kolejka plików" jest ściśle związana z zakładką <a href="main_tabs_myftpservers.php">Moje serwery</a> oraz <a href="main_tabs_myservices.php">Moje projekty</a>. Tworzenie zadań do kolejki odbywa się podczas przenoszenia plików lub folderów między wspomnianymi zakładkami, a także podczas operacji na zakładce "Moje serwery" w <a href="main_tabs_myftpservers_on-offline.php">trybie offline</a>.

<p>Lista kolejki włącza się automatycznie zależnie od <a href="settings_network_ftpclient.php">ustawień klienta FTP i WebDAV</a> dotyczących kolejki. Można ją również włączyć pokazując <a href="down_panel.php">dolny panel wyników</a> lub za pomocą przycisku "Pokaż panel z informacjami" na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>.

<h2>Wygląd listy</h2>

<p>Informacje na liście kolejki prezentowane są w widoku kolumnowym. Dostępne są następujące kolumny:

<p><b>Nazwa pliku</b><br>
W tej kolumnie wyświetlane są ikony oznaczające operację publikowania. Mogą to być ikony oznaczające wysyłanie pliku lub katalogu na serwer () lub pobieranie (). Dodatkowo w <a href="main_tabs_myftpservers_on-offline.php">trybie offline</a> niektóre funkcje, które w trybie online są wykonywane natychmiast, w trybie offline są dodawane do kolejki (np. usuwanie plików lub dokumentów, zmiana nazwy czy <a href="main_tabs_myftpservers_rights.php">praw dostępu</a>). <br>
Obok ikon znajduje się nazwa pliku, którego dotyczy dana operacja. Może to być nazwa pliku lub katalogu lokalnego (przy wysyłaniu) lub nazwa pliku lub katalogu zdalnego przy pobieraniu lub innych kolejkowanych funkcjach.

<p><b>Ścieżka</b><br>
Kolumna o tej nazwie zawiera informacje na temat ścieżki lokalnej (przy wysyłaniu) lub ścieżki zdalnej (przy pobieraniu).

<p><b>Docelowo</b><br>
Kolumna o tej nazwie zawiera albo ścieżkę zdalną przy wysyłaniu, która wskazuje, gdzie będzie umieszczony element kolejki, albo ścieżkę lokalną przy pobieraniu pliku, która oznacza gdzie będzie umieszczony pobierany plik zdalny.<br>
W przypadku innych funkcji kolejkujących wyświetlane są np. informacje o nowej nazwie pliku (przy zmianie nazwy) czy o nowych prawach dostępu (<a href="main_tabs_myftpservers_rights.php">zmiana praw</a>).

<p><b>Rozmiar</b><br>
W tej kolumnie jest zawsze podawany rozmiar pliku, którego dotyczy dana operacja.

<h2>Przyciski sterujące</h2>

<p>Kolejką plików steruje się za pomocą przycisków znajdujących się po prawej stronie kolejki. Oto znaczenie poszczególnych:

<p><b>Przełączenie Widoku zakładki publikowanie</b><br>
Przycisk ten ma podpięte menu, za pomocą którego możesz przełączać się pomiędzy widokami zakładki <a href="down_publishing.php#downpanelpublishinglist">Operacje publikowania</a>.

<p>
<b>Rozpocznij wykonywanie kolejki</b><br>Ten przycisk służy do rozpoczęcia wykonywania zadań zebranych w kolejce. Po rozpoczęciu, na pasku stanu poniżej listy kolejki wyświetlany jest raport o stanie aktualnie wykonywanego zadania z kolejki. Możesz tam zobaczyć informacje o przesłanych i pozostałych bajtach, prędkości połączenia oraz czasie, który pozostał do ukończenia. Znajduje się tam również wskaźnik postępu, który w jasny sposób wskazuje ile pozostało do końca bieżącego zadania.

<p>
<b>Zatrzymaj wykonanie kolejki</b><br>Ten przycisk służy do zatrzymywania kolejki, która jest wykonywana.

<p><b>Przenieś w górę</b><br>
Ten przyciskm pozwala na przemieszczanie zadań w kolejce w górę. Zadania umieszczone wyżej są wykonywane wcześniej.

<p><b>Przenieś w dół</b><br>
Ten przyciskm pozwala na przemieszczanie zadań w kolejce w dół. 

<p>
<b>Usuń bieżące zadanie</b><br>Ten przycisk pozwala na usunięcie bieżącego zadania z kolejki.

<p>
<b>Usuń wszystkie</b><br>Ten przycisk pozwala na usunięcie wszystkich zadań z kolejki.

<p>
<b>Pomoc</b><br>Powoduje wyświetenie tematu Pomocy dotyczącego kolejki publikowania.

<h2>Podpowiedzi</h2>

<p>Kolejka plików jest automatycznie pamiętana i odtwarzana między uruchomieniami programu.

<p>Możesz pobierać lub wysyłać na serwer całe foldery włącznie z całą ich zawartością. Po napotkaniu folderu na kolejce plików są one rozwijane i pobierana jest ich zawartość aż do zakończenia kolejki.

<p>Możesz ukryć panel kolejki i pracować w Pająku, a po zakończeniu kolejki usłyszysz dźwięk powiadomienia. Również na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a> w trakcie wykonywania kolejki pasek stanu jest wyświetlany na czerwono i informuje o wykonywaniu kolejki.

<p>Jeśli masz jakieś problemy z połączeniem możesz sprawdzić zapis komunikacji z serwerem FTP na  <a href="down_publishing_serverlog.php">logu połączenia z serwerem FTP</a>.

<p>Podczas wykonywania kolejki plików możesz swobodnie korzystać z zakładki "Moje serwery". Teraz oba narzędzia działają niezależnie od siebie (w poprzednich wydaniach Pająka można było jednocześnie korzystać tylko z jednego z nich).</p>

<p>Aby szybko otworzyć plik umieszczony w kolejce FTP wystarczy na nim dwukliknąć.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="down_publishing.php#downpanelpublishinglist">Inne zakładki operacji publikowania</a>
	<li><a href="down_panel.php#downpanellist">Inne zakładki dolnego panelu</a>
	<li><a href="main_tabs_myftpservers.php">Zakładka "Moje serwery"</a>
	<li><a href="settings_network_ftpclient.php">Ustawienia klienta FTP</a>
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