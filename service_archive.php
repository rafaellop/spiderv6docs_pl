<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.0.0)">

<!-- nazwa strony pomocy -->
<title>Archiwizacja projektu</title>

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
<h1>Archiwizacja projektu</h1>



<p>Narzędzie ułatwia zarchiwizowanie projektu wraz z jego ustawieniami. Cały projekt jest pakowany i kompresowany do formatu ZIP. Ustawienia projektu zostają zachowane w dodatkowym pliku projinfo.ini, który również jest dołączany do pliku ZIP. Zarchiwizowany projekt możesz przywrócić za pomocą narzędzia <a href="service_restore.php">Przywrócenie projektu</a></p>

<p>Archiwizację możesz uruchomić z poziomu <a href="main_menu_services_properties.php">menu Projekty / Własności projektu</a> bądź z identycznego menu pod przyciskiem Własności projektu na zakładce Projekty. Okno narzędzia zawiera pięć grup opcji, za pomocą których możesz określić zakres plików wchodzących w skład archiwum, nazwę pliku docelowego, kompresję itp.</p>

<p><b>Plik docelowy</b><br>
Wskaż ścieżkę i podaj nazwę pliku docelowego (*.zip). Domyślna nazwa dla archiwum ZIP tworzona jest na bazie następującego szablonu "NazwaProjektu_(yyyy-mm-dd_hh-mm-ss).zip".


<p><b>Archiwizowane pliki</b><br>
Za pomocą dwóch przełączników możesz wykluczyć z archiwizowania:
<ul>
	<li>pliki kopii zapasowych *.bak </li>
	<li>pliki dodatkowych informacji o dokumencie *.add</li>
</ul>

<p><b>Opis archiwum</b><br>
W tym polu możesz wprowadzić krótki opis, który pozwoli ci się zorientować co zawiera projekt, gdy będziesz chciał go przywrócić za pomocą narzędzia <a href="service_restore.php">Przywrócenie projektu</a>.

<p><b>Ochrona hasłem</b><br>
Jeśli chcesz, możesz zabezpieczyć archiwum hasłem, które zapobiegnie przeglądaniu go przez niepowołane osoby. W tym celu wprowadź hasło i powtórz je w następnym polu.

<p><b>Sposób archiwizacji</b><br>
Za pomocą opcji umieszczonych w tej grupie określ rodzaj kompresji pliku archiwum. Możesz ustawić brak kompresji, bądź jej stopień:
<ul>
	<li>kompresja najlepsza</li>
	<li>kompresja normalna</li>
	<li>kompresja szybka</li>
	<li>kompresja najszybsza</li>
</ul>
Im lepsza kompresja, tym dłużej trwa kompresowanie, ale plik wynikowy jest mniejszy.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="service_restore.php">Przywracanie projektu</a>
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