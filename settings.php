
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu</title>

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
<h1>Ustawienia programu</h1>

<!-- treść pomocy -->
<p>
Pająk jest programem, który udostępnia użytkownikowi wiele opcji konfiguracyjnych. Odpowiednia konfiguracja pozwala na dostosowanie programu do własnych wymagań i potrzeb. Można definiować nie tylko sposób działania programu, ale również jego wygląd!

<p>
Do konfiguracji wszystkich możliwych aspektów działania programu służy okienko "Ustawienia programu". Okno ustawień składa się z obszaru wyświetlającego kategorie ustawień oraz obszaru gdzie można zmieniać ustawienia programu. Poszczególne opcje zostały umieszczone na planszach, do których przełączania służą przyciski umieszczone na dwóch przełączalnych zakładkach z lewej strony okna:

<ul>
	<a name="settingslist"></a>
   <li>Zakładka <b>Ogólne</b>
   <ul>
      <li><a href="settings_general.php">Ogólne</a> - ustawienia związane z ogólnym działaniem programu.
      <li><a href="settings_browse.php">Przeglądanie</a> - związane z funkcjami przeglądania edytowanych dokumentów.
      <li><a href="settings_user.php">Użytkownik programu i sprawdzanie wersji</a> - pozwalające określić użytkownika programu oraz częstotliwość sprawdzania aktualności wersji programu i wyświetlania informacji o nowościach.
      <li><a href="settings_startup.php">Przy starcie</a> - dotyczy ustawień związanych z uruchamianiem programu.
      <li><a href="settings_history.php">Historia</a> - ustawienia dotyczące zarządzania historiami np. otwieranych plików.
      <li><a href="settings_filelist.php">Lista plików</a> - ustawienia dotyczące zachowania listy plików w panelu "Moje serwisy", obsługi mechanizmu "przeciągnij i upuść"
   	<li><a href="settings_macrocodes.php">Makrokody</a> - związane z funkcją Makrokodów oferowaną przez program.
   </ul>
   <li>Zakładka <b>Inne ustawienia</b>
   <ul>
      <li><a href="settings_editor.php">Edytor, schematy kolorowania, pisownia</a> - konfiguracja edytora i ustawienia schematów kolorowania oraz opcje związane ze sprawdzaniem pisowni.
      <li><a href="settings_toolbars.php">Paski narzędzi, menu, skróty klawiszowe</a> - określają wygląd programu, konfigurację skrótów klawiszowych i zawartość pasków narzędzi.
      <li><a href="settings_codeinsight.php">Ułatwienia, dynamiczne atrybuty, inne</a> - konfiguracja funkcji ułatwień edycyjnych.
      <li><a href="settings_network.php">Ustawienia sieci i serwerów</a> - związane z obsługą sieci w programie.
      <li><a href="settings_addtools.php">Inne programy, Tidy, HTML Help </a> - umożliwiające konfigurację dodatkowych programów używanych z Pająka.
   </ul>
</ul>

<p>
 Standardowo okno to wywołuje się za pomocą skrótu klawiszowego F8 lub z poziomu głównego paska narzędzi za pomocą przycisku pokazanego obok.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%">
<!-- pokrewne tematy -->
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

</body>
</html>