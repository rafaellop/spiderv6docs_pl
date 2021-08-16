
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Edytor pliku definicyjnego dla PHP</title>

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
<h1>Edytor pliku definicyjnego dla PHP</h1>





<p>Za pomocą edytora pliku definicyjnego PHP możesz modyfikować lub rozszerzać definicję języka PHP, z której Pająk korzysta w funkcjach dynamicznych podpowiedzi i na zakładce <a href="main_tabs_languages.php">Języki programowania</a>. Aby uzyskać dostęp do edytora pliku definicyjnego PHP użyj polecenia <b>Edytor pliku definicyjnego PHP</b>, które znajduje się w menu głównym. Możesz również uruchomić go za pomocą przycisku znajdującego się w ustawieniach programu w kategorii <a href="settings_codeinsight_php.php">Ułatwienia, dynamiczne atrybuty, inne</a> lub w menu. Przycisk pokazany został powyżej. 

<p>Okno edytora pliku definicyjnego PHP składa się z dwóch zakładek: zakładki "Stałe i zmienne" oraz "Funkcje".

<h2>Zakładka "Stałe i zmienne"</h2>

<p>Na tej zakładce definiujesz predefiniowane stałe oraz zmienne i przypisujesz je do jednej z dostępnych kategorii. Dodawane zmienne i stałe możesz przypisać do kategorii:

<ul>
	<li>Stałe PHP
	<li>Zmienne Apache (request)
	<li>Zmienne Apache (server)
	<li>Zmienne PHP
</ul>

<p>Po wybraniu kategorii na liście z lewej strony zakładki pojawi się spis elementów przypisanych do wybranej kategorii. Klikając na wybranym pola "Opis" i "Typ wartości" zostaną odpowiednio wypełnione. Możesz wtedy zmienić wybrany element. 

<p>Jeśli chcesz dodać nowy element do wybranej kategorii, postępuj podobnie. Wybierz kategorię i przyciskiem oznaczonym "plusikiem" dodaj nowy element. Następnie możesz go edytować we wspomnianych polach "Opis" i "Typ elementu".

<h2>Typy elementów</h2>

<p>Dla elementów składowych kategorii na pierwszej zakładce możesz przypisywać rózne typy:

<ul>
	<li><b>string</b> - typ "ciąg znaków"
	<li><b>int</b> - typ "liczba całkowita"
	<li><b>float</b> - typ "liczba zmiennoprzecinkowa"
	<li><b>bool</b> - typ "logiczny"
	<li><b>array</b> - typ "tablicowy"
	<li><b>object</b> - typ "obiekt"
</ul>

<p>Od typów zależy w jaki sposób działają niektóre funkcje dynamicznych podpowiedzi. Typ elementu jest również wyświetlany na zakładce <a href="main_tabs_languages.php">Języki programowania</a> w głównym oknie programu.

<h2>Zakładka "Funkcje"</h2>

<p>Na tej zakładce możesz definiować funkcje, które są wspierane w PHP obsługiwanym w Pająku. Po lewej stronie zakładki znajdziesz listę kategorii funkcji. Kategorie pomagają w posegregowaniu funkcji na grupy. 
Kategorie służą do prezentowania funkcji w ujęciu hierarchicznym na drzewku <a href="main_tabs_languages.php">Języki programowania</a> w głownym oknie. W ustawieniach <a href="settings_codeinsight_php.php">Ułatwienia, dynamiczne atrybuty, inne</a> możesz również dzięki temu wyłączać obsługę wybranych kategorii funkcji w funkcjach dynamicznych podpowiedzi. Kategorie możesz dodawać i usuwać za pomocą znajdujących się pod listą przycisków.

<p>Obok listy kategorii znajduje się lista przypisanych do niej funkcji. Po wybraniu kategorii na liście po lewej, wczytywane są tutaj nazwy wszystkich znajdujących się w danej kategorii funkcji. Funkcje możesz dodawać, usuwać i edytować za pomocą przycisków pod listą. Edycja i dodanie nowej odbywa się w okienku <a href="tagdata_editor_tdf_php_newfunc.php">Nowa funkcja PHP</a>.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_editor_codeinsight.php">Dynamiczny kod w edytorze</a>
	<li><a href="main_tabs_languages.php">Zakładka "Języki programowania"</a>
	<li><a href="settings_codeinsight_php.php">Ustawienia Dynamicznego kodu</a>
	<li><a href="tagdata_editor_tdf_php_newfunc.php">Nowa funkcja PHP</a>
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
<script async src="js/cookie.js"></script>
<div class="nk-cookie-banner alert text-center mb-0 cookietxt" role="alert">
  Nasze strony wykorzystują pliki cookies. Używamy cookies i podobnych m.in. w celach reklamowych i statystycznych oraz w celu dostosowania serwisów do potrzeb użytkowników. Mogą też stosować je nasi reklamodawcy, firmy badawcze oraz dostawcy aplikacji. W przeglądarce można zmienić ustawienia dotyczące cookies. <a href="https://www.creamsoft.com/pl/pp/#cookies" target="blank">Więcej informacji</a>. Jeśli nie wyrażasz zgody, opuść tę stronę.&nbsp;

  <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.nk_hideCookieBanner()">OK</button>
</div>
<!-- End of Cookie Banner -->

</body>
</html>
