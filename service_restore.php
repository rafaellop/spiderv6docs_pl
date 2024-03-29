<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Przywracanie projektu</title>

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
<h1>Przywracanie projektu</h1>



<p>Narzędzie uruchomisz z<a href="main_menu_services.php"> menu Projekty</a>. Za jego pomocą możesz przywrócić z projekt archiwum *.zip utworzonego przez narzędzie <a href="service_archive.php">Archiwizacja projektu</a>. 


<p></p>Uwaga: Poprawne archiwum ZIP utworzone przez Pająka zawiera spakowane pliki projektu, a także dodatkowy plik projinfo.ini, w którym zawarte są ustawienia projektu. Jeśli archiwum nie będzie zawierało tego pliku, narzędzie zgłosi błąd, a projekt nie zostanie przywrócony. W takiej sytuacji należy rozpakować go innym programem obsługującym format ZIP (np. WinZIP, bądź Foldery skompresowane w Windows XP) do odpowiedniego katalogu na dysku, a następnie utworzyć projekt w normalny sposób.</p>

<p><b>Plik archiwum z projektem</b><br>
Wskaż plik zawierający pliki projektu.

<p><b>Informacje o archiwum</b><br>
   <p>Jeśli wskazany wyżej plik jest prawidłowym archiwum projektu utworzonym przez Pająka, w polach tej grupy wyświetlone zostaną dane na temat daty jego utworzenia, nazwy archiwizowanego projektu, a także komentarz wprowadzony podczas archiwizowania. </p>

<p><b>Opcje przywracania</b><br>
Ta grupa elementów zawiera dwa pola, w których możesz wprowadzić nową nazwę projektu (domyślnie podawana jest nazwa zachowana w momencie archiwizacji) i ścieżkę dostępu do foldera, do którego mają zostać rozpakowane pliki projektu.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="service_archive.php">Archiwizacja projektów</a>
	<li><a href="services_general.php">O projektach ogólnie</a>
	<li><a href="service_tool_synchronization.php">Synchronizacja projektów</a>
	<li><a href="main_tabs_myservices.php">Zakładka Moje projekty</a>
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
