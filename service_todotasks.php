
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Zadania do wykonania w serwisie</title>

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
<h1>Zadania do wykonania w serwisie</h1>

<!-- treść pomocy -->

<p>Okno <b>Zadania do wykonania</b> w serwisie służy do przeglądania i tworzenia <a href="main_editor_todotasks.php">zadań</a> zdefiniowanych dla poszczególnych dokumentów w bieżącym <a href="services_general.php">serwisie</a>, jak i dla całego <a href="services_general.php">serwisu</a>. Za jego pomocą możesz również otwierać dokumenty i przechodzić do linii, w których zdefiniowano zadanie. Aby wyświetlić to okno skorzystaj z polecenia <b>Lista zadań do wykonania</b> w menu <a href="main_menu_services_properties.php">Serwisy / Własności serwisu</a>.</p>

<p>Zadania dla dokumentów i dla serwisu zostały umieszczone na dwóch osobnych zakładkach. Powyżej zakładek znajduje się pasek przycisków zawierający następujące polecenia: </p>

<p><b>Odświeżenie listy dokumentów</b><br />
Kliknij, aby odświeżyć listę zadań ustawionych dla dokumentów serwisu.

<p><b>Dodanie nowego zadania do bieżącego dokumentu bądź serwisu</b><br />
Kliknij, aby dodać nowe zadanie do listy. W zależności od aktywnej zakładki, zadanie zostanie przypisane do bieżącego dokumentu, bądź do serwisu.

<p><b>Usunięcie wybranego zadania</b><br />
Kliknij, aby usunąć zadanie wskazane na liście (tej operacji nie można cofnąć!).

<p><b>Modyfikacja wybranego zadania</b><br />
Kliknij, aby otworzyć okno służące do <a href="tool_docinfo_todo_add.php">tworzenia i edycji zadań</a> do wykonania. Jeśli dokument, dla którego chcesz zmodyfikować zadanie nie jest otwarty, zostanie wyświetlone pytanie, czy go otworzyć. 

<p><b>Przejście do wybranego zadania</b><br />
Kliknij, aby przejść do wybranego zadania do wykonania. Po otwarciu dokumentu zostanie wyświetlone pytanie, czy chcesz obejrzeć listę zadań dla tego dokumentu.

<p><b>Kopiuj wybrane zadanie do listy zadań w aktualnym serwisie</b><br />
Kliknij, aby skopiować zadanie z dokumentu na listę zadań serwisu. Zadanie będzie nadal powiązane z dokumentem źródłowym, jednak nie będzie odsyłało do konkretnego miejsca (wiersza) w tym dokumencie.


<p>Cztery kolejne polecenia służą do sortowania zadań według:
<ul>
	<li><b>kolejności alfabetycznej</b> nazw zadań</li>
	<li><b>priorytetu</b> zadania (1-najwyższy, 10-najniższy)</li>
	<li><b>autora</b> zadania (alfabetycznie)</li>
	<li><b>daty utworzenia</b> zadania</li>
</ul>

Sortować można również za pomocą kliknięcia w nagłówek tabeli. </p>

<p><b>Pomoc</b><br />
Wyświetla to okno pomocy.</p>


<p>Lista zadań zawiera następujące kolumny:</p>

<ul>
	<li><b>Nazwa</b> zadania (oraz przełącznik do zaznaczania)</li>
	<li><b>Plik</b> którego dotyczy to zadanie</li>
	<li><b>Priorytet</b></li>
	<li><b>Dopisał</b> - autor zadania</li>
	<li><b>Data</b> utworzenia zadania</li>
</ul>


<p>Poniżej znajduje się pole tekstowe wyświetlające wprowadzony <b>Opis zadania</b>.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_editor_todotasks.php">Zadania do wykonania - ogólnie</a>
	<li><a href="services_general.php">Serwisy - ogólnie</a>
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