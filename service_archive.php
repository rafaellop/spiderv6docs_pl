
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Archiwizacja serwisu</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<a name="top"></a>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Pająk V6</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="contents_main.php">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.php">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.php">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.php">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.php">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.php">Ustawienia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#googlesearch" role="button" aria-expanded="false" aria-controls="googlesearch">Wyszukaj</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	
<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Archiwizacja serwisu</h1>



<p>Narzędzie ułatwia zarchiwizowanie serwisu wraz z jego ustawieniami. Cały serwis jest pakowany i kompresowany do formatu ZIP. Ustawienia serwisu zostają zachowane w dodatkowym pliku projinfo.ini, który również jest dołączany do pliku ZIP. Zarchiwizowany serwis możesz przywrócić za pomocą narzędzia <a href="service_restore.php">Przywrócenie serwisu</a></p>

<p>Archiwizację możesz uruchomić z poziomu <a href="main_menu_services_properties.php">menu Serwisy / Własności serwisu</a> bądź z identycznego menu pod przyciskiem Własności serwisu na zakładce Serwisy. Okno narzędzia zawiera pięć grup opcji, za pomocą których możesz określić zakres plików wchodzących w skład archiwum, nazwę pliku docelowego, kompresję itp.</p>

<p><b>Plik docelowy</b><br>
Wskaż ścieżkę i podaj nazwę pliku docelowego (*.zip). Domyślna nazwa dla archiwum ZIP tworzona jest na bazie następującego szablonu "NazwaSerwisu_(yyyy-mm-dd_hh-mm-ss).zip".


<p><b>Archiwizowane pliki</b><br>
Za pomocą dwóch przełączników możesz wykluczyć z archiwizowania:
<ul>
	<li>pliki kopii zapasowych *.bak </li>
	<li>pliki dodatkowych informacji o dokumencie *.add</li>
</ul>

<p><b>Opis archiwum</b><br>
W tym polu możesz wprowadzić krótki opis, który pozwoli ci się zorientować co zawiera serwis, gdy będziesz chciał go przywrócić za pomocą narzędzia <a href="service_restore.php">Przywrócenie serwisu</a>.

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
	<li><a href="service_restore.php">Przywracanie serwisu</a>
	<li><a href="services_general.php">O serwisach ogólnie</a>
	<li><a href="service_tool_synchronization.php">Synchronizacja serwisów</a>
	<li><a href="main_tabs_myservices.php">Zakładka Moje serwisy</a>
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