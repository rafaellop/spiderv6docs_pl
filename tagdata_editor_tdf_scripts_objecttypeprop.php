
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Nowa własność lub metoda</title>

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
<h1>Nowa własność lub metoda</h1>





<p>To okienko pozwala na dodanie nowej własności lub metody dla typu obiektowego z grupy obiektów wybranej w ustawieniach pliku definicyjnego dla skryptów. <a href="tagdata_editor_tdf_scripts.php">Edytor pliku definicyjnego</a> pozwala na tworzenie i modyfikację istniejącej definicji wybranego języka skryptowego, która jest wykorzystywana w funkcjach dynamicznych podpowiedzi oraz na zakładce <a href="main_tabs_languages.php">Języki programowania</a>.

<p>Okno składa się z następujących pól:

<p><b>Nazwa własności</b><br>
Wprowadź tutaj lub zmodyfikuj nazwę własności.

<p><b>Typ własności lub metody</b><br>
Zaznacz przełącznik odpowiadający typowi własności lub metody, którą definiujesz.

<p><b>Lista argumentów funkcji</b><br>
Wprowadź tutaj listę argumentów przyjmowanych przez funkcję.
Argumenty powinny być oddzielone przecinkami, zaś każdy z nich powinien składać się z określenia typu oraz nazwy (oba wyrazy powinny być oddzielone spacją - zgodnie ze składnią). Opcjonalne argumenty mogą być ujęte w nawiasy kwadratowe.

<p><b>Typ rezultatu</b><br>
Wybierz typ rezultatu zwracanego przez funkcję. Możesz wybrać jeden z typów zdefiniowanych na liście typów za pomocą okienka <a href="tagdata_editor_tdf_scripts_objecttype.php">Nowy typ lub własność typu obiektowego</a>.

<p><b>Typ rezultatu tablicy</b><br>
Wybierz typ rezultatu tablicy zwracanego przez funkcję. Możesz wybrać jeden z typów zdefiniowanych na liście typów za pomocą okienka <a href="tagdata_editor_tdf_scripts_objecttype.php">Nowy typ lub własność typu obiektowego</a>.

<p><b>Opis własności</b><br>
Wprowadź opis edytowanej własności języka, który będzie wyświetlany w dynamicznej podpowiedzi oraz na liście <a href="main_tabs_languages.php">Języki programowania</a>.

<p><b>Wsparcie w wersjach języka</b><br>
Wprowadź informację o wsparciu ze strony poszczególnych wersji języka skryptowego np. <tt>js10</tt>.

<p>Na samym dole okienka znajdują sie dodatkowe opcje pozwalające na określenie dodatkowych własności metody lub właściwości.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tagdata_editor_tdf_scripts.php">Edytor plików definicyjnych języków skryptowych</a>
	<li><a href="tagdata_editor_tdf_scripts_objecttype.php">Nowy typ lub własność typu obiektowego</a>
	<li><a href="main_tabs_languages.php">Zakładka "Języki programowania"</a>
	<li><a href="settings_codeinsight_scripts.php">Ustawienia Dynamicznego kodu</a>
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
