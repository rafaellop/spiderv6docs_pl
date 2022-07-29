<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Projekty/Własności projektu</title>

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
<h1>Menu główne - Projekty/Własności projektu</h1>

<!-- Treść pomocy -->

<p>Polecenia w tym menu służą do bieżącej obsługi projektu, jak np. wyszukiwanie i zamiana tekstu w plikach projektu, synchronizacja projektu z zawartością serwera itp. Dostępne są następujące polecenia:</p>

<p><b><a href="service_properites.php">Własności projektu</a></b><br />
Kliknij, aby otworzyć okno własności projektu.

<p><b><a href="service_todotasks.php">Lista zadań do wykonania</a></b><br />
Kliknij, aby otworzyć okno zadań do wykonania. Znajdą się w nim wszystkie zadania wszystkich dokumentów projektu.

<hr>

<p><b><a href="down_links_verify.php">Weryfikacja odnośników</a></b><br />
Kliknij, aby przeprowadzić weryfikację odnośników w dokumentach projektu.

<p><b><a href="down_links_verify.php">Weryfikacja składni</a></b><br />
Wyświetla listę poleceń umożliwiających przeprowadzenie weryfikacji składni dokumentów projektu. 

<p><b><a href="down_integrity.php#service_clean_quick">Oczyszczanie projektu</a></b><br />
Kliknij, aby przeprowadzić oczyszczanie projektu. Polecenie posiada podmenu, w którym znajdziesz dodatkowe polecenia, jak <a href="down_integrity.php">Sprawdzanie spójności projektu</a>, czy wyszukiwanie jego niepotrzebne elementów (np. "osierocone" pliki *.ADD). 

<hr>

<p><b><a href="service_tool_synchronization.php">Synchronizacja projektu</a></b><br />
Kliknij, aby uruchomić narzędzie synchronizacji projektu z zawartością serwera.


<p><b><a href="service_archive.php">Archiwizacja projektu</a></b><br />
Kliknij, aby uruchomić narzędzie archiwizacji projektu.

<hr>

<p><b><a href="find_ext.php">Wyszukiwanie i zamiana w projekcie</a></b><br />
Kliknij, aby uruchomić Rozszerzone wyszukiwanie i zamianę w dokumentach projektu.


<p><b><a href="charset_encoding.php">Konwersja kodowania znaków</a></b><br />
Kliknij, aby zmienić kodowanie znaków w dokumentach projektu.

<p><b><a href="spelling.php">Sprawdzanie poprawności pisowni w projekcie</a></b><br />
Kliknij, aby sprawdzić poprawność pisowni w dokumentach projektu.


<p><b><a href="tool_typo_correct.php">Korekta typograficzna projektu</a></b><br />
Kliknij, aby uruchomić narzędzie do korekty typograficznej, która umożliwia sformatowanie tekstu w dokumentach projektu w taki sposób, by lepiej prezentował się na stronie.

<p><b><a href="formatter_general.php">Formatowanie kodu źródłowego projektu</a></b><br />
Kliknij, aby uruchomić formatowanie kodu źródłowego dokumentów projektu.


<p><b><a href="service_map.php">Mapa projektu WWW</a></b><br />
Kliknij, aby otworzyć mapę projektu prezentującą graficznie wszystkie łącza między dokumentami projektu.


<p><b><a href="service_properites.php#servicepropertiesoftenused">Otwórz często używane projektu</a></b><br />
Kliknij, aby otworzyć wszystkie często używane pliki projektu. 


<p><b><a href="service_properites.php#servicepropertiesoftenused">Dodaj otwarty do często używanych projektu</a></b><br />
Kliknij, aby dodać bieżący dokument do często używanych w projekcie.

<hr>

<p>Dwie ostatnie pozycje menu dostępne są jedynie w przypadku, gdy we właściwościach bieżącego projektu zaznaczona jest opcja, iż <a href="service_properites.php#htmlhelp">jest on jednocześnie projektem HTML Help</a>.</p>

<p><b>HTML Help</b><br />
Kliknij, aby skorzystać z szybkich opcji obsługi HTML Help.


<p><b>Skompiluj szybko projekt do <a href="tool_htmlhelp_general.php">HTML Help</a></b><br />
Kliknij, aby szybko skompilować projekt do pliku HTML Help.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="main_tabs_myservices.php">Zakładka Moje projekty</a></li>
   <li><a href="main_menu_services.php">Menu główne / Projekty</a></li>
   <li><a href="settings_toolbars.php">Ustawienia programu - Ustawienia pasków, menu i skrótów</a></li>
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