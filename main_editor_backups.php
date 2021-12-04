<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Kopie zapasowe przy zapisie BAK</title>

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
<h1>Kopie zapasowe przy zapisie BAK</h1>

<p>Podczas zapisu dokumentu otwartego w edytorze (z dysku lokalnego i z serwera FTP) automatycznie tworzona jest jego kopia zapasowa. Kopia ta tworzona jest z poprzedniej wersji pliku zapisanego na dysku. Dzięki tej funkcji masz możliwość przywrócenia pliku do jego ostatniej wersji, jeśli niechcący dokument został uszkodzony, bądź nieumyślnie zmieniony.</p>

<p>Kopie zapasowe mogą być tworzone:
<ul>
	<li>na dysku lokalnym podczas zapisu dokumentu otwartego w edytorze</li>
	<li>na serwerze FTP podczas zapisu dokumentu <a href="network_opendoc_ftp.php">otwartego bezpośrednio z serwera FTP</a></li>
	<li>podczas zmian w plikach nanoszonych podczas pracy narzędzia <a href="find_ext.php">Rozszerzone wyszukiwanie i zamiana</a></li>
	<li>podczas <a href="charset_encoding.php">konwersji kodowania znaków</a> w wielu dokumentach.</li>
</ul></p>


<p>Tworzenie kopii zapasowych podczas pracy <a href="find_ext.php#backups">Rozszerzonego wyszukiwania i zamiany</a> jest niezależne od wybranej opcji w Ustawieniach programu, możesz je włączyć i wyłączyć w oknie narzędzia.</p>


<h2>Nazwa pliku kopii zapasowej</h2>

Nazwa pliku kopii zapasowej tworzonego na dysku lokalny generowana jest z użyciem przedrostka <tt>bak.</tt> oraz nazwy oryginalnego dokumentu. Na przykład:

<ul>
	<li>Nazwa dokumentu: <tt><b>index.html</b></tt></li>
	<li>Nazwa pliku kopii zapasowej <tt><b>bak.index.html</b></tt></li>
</ul>
            
<p class="czerwony"><b>Uwaga!</b><br>
Sposób tworzenia nazw plików kopii zapasowej na dysku lokalnym zmieniła się w wersji 5.6.2 i została ujednolicona z nazwą kopii zapasowej na serwerze. Dla przykładu w przypadku pliku o nazwie <tt>index.html</tt>: 
<ul>
	<li><tt>index.html<b>.bak</b></tt> - w wersji 5.6.1 (i wcześniejszych)</li>
	<li><tt><b>bak.</b>index.html</tt> - od wersji 5.6.2</li>
</ul>
</p>

<h2>Odtworzenie dokumentu z kopii zapasowej</h2>

<p><b>Przywróć z pliku kopii zapasowej</b><br>
To polecenie znajduje się na pasku z prawej strony listy plików zakładki <a href="main_tabs_myservices.php">Moje serwisy</a>. Kliknij, aby przywrócić ostatnią zapisaną zawartość pliku z kopii zapasowej. Polecenie to dostępne jest jedynie dla plików posiadających kopie zapasową - w przeciwnym wypadku będzie niewidoczne. Przywracanie z kopii zapasowej w tym wypadku polega na zamianie zawartości oryginalnego pliku i pliku kopii, można więc ponownie z niego skorzystać i przywrócić stan poprzedni.

<p>Innym, 'ręcznym' sposobem przywracania zawartości z kopii zapasowej jest zamiana nazwy pliku kopii na oryginalną nazwę pliku. Wystarczy zmienić nazwę pliku usuwając rozszerzenie <tt>.bak</tt> (na dysku lokalnym), bądź usunąć przedrostek <tt>bak.</tt> (na serwerez FTP). Pliki kopii zapasowych standardowo są na liście plików ukrywane. Możesz to zmienić w oknie <a href="settings_filelist.php">Ustawienia programu / lista plików</a> (dla listy plików zakładki <a href="main_tabs_myservices.php">Moje serwisy</a>) oraz w oknie <a href="settings_network_ftpclient.php">Ustawienia programu / Wbudowany klient FTP i WebDAV</a> (dla listy plików zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a>).</p>


<h2>Co zrobić, aby pliki kopii zapasowych BAK nie były tworzone?</h2>

<p>Tworzenie kopii zapasowych podczas zapisu edytowanego dokumentu możesz wyłączyć (domyślnie jest to włączone) w oknie <a href="settings_editor_documents.php#backups">Ustawienia programu / Dokumenty</a>. </p>



<h2>Szybkie usuwanie kopii zapasowych</h2>

<p>Z czasem pliki kopii zapasowych w danym serwisie mogę przestać być potrzebne (np. po zakończeniu prac). Aby je wszystkie szybko usunąć skorzystaj z polecenia w menu <a href="main_menu_services_properties.php">Serwisy / Własności serwisu / Oczyszczanie serwisu</a>.</p>


<!-- treść pomocy -->


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
