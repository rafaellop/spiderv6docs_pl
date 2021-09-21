
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.0)">

<!-- nazwa strony pomocy -->
<title>Edytor TDF - Właściwości kategorii znaczników</title>

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
<h1>Edytor TDF - Właściwości kategorii znaczników</h1>







<p>Za pomocą tego narzędzia możesz określić podstawowe właściwości kategorii znaczników (języka znacznikowego) aktualnie edytowanej w <a href="tagdata_editor_tdf.php">Edytorze plików definicyjnych języków znacznikowych</a>. Dostępne są następujące ustawienia:

<p><b>Nazwa kategorii</b><br>
Nazwa kategorii (języka), której definicję znaczników edytujesz (tylko podgląd, bez możliwości zmiany - do tego służy odpowiednie polecenie w edytorze TDF).

<p><b>Opis języka</b><br>
Opis języka, którego definicję znaczników zawiera wybrana kategoria.

<p><b>Jest to język typu XML</b><br>
Opcja ta powoduje,&nbsp;że wielkość liter&nbsp;w znacznikach ma znaczenie. Przykładowo w języku XHTML wszystkie nazwy znaczników musza być pisane małymi literami. Zmienia ona również zachowanie się programu w niektórych sytuacjach, np. podczas automatycznego domykania znaczników. Jeśli opcja ta będzie wyłączona, wielkość liter będzie zależna od ustawień programu i ustawień bieżącego serwisu.

<p><b>Ścieżka do dokumentacji</b><br />
Nazwa katalogu, w którym znajdują się pliki z dokumentację tego języka. Katalog ten musi być podkatalogiem folderu Docs w katalogu głównym Pająka (standardowo <tt>C:\Program Files (x86)\CREAM.SOFTWARE\SpiderEditor</tt>).


<p><b>Pasujące DOCTYPE</b><br>
Lista zawierająca Deklaracje Typu Dokumentu (DOCTYPE). Dzięki nim możliwa jest weryfikacja poprawności składni tego dokumentu. Doctype możesz dodawać do listy i usuwać za pomocą przycisków umieszczonych obok.

<p><b>Pasujące NAMESPACES</b><br>
Lokalizacje dokumentów z definicją przestrzeni nazw (NAMESPACE). Dzięki nim możliwia jest weryfikacja poprawności składni dokumentu. Namespace możesz dodawać do listy i usuwać za pomocą przycisków umieszczonych obok.

<a name="nadrzedny"></a>
<p><b>Rozpoznaj kategorię znaczników na podstawie znacznika nadrzędnego dokumentu</b><br />
Zaznaczenie tego przełącznika spowoduje, że Pająk będzie rozpoznawał dokumenty napisane w tym języku nie tylko na podstawie deklaracji DOCTYPE bądź użytego identyfikatora przestrzeni nazw (namespace), ale także po nazwie głównego (nadrzędnego) znacznika dokumentu. Metoda ta uwzględniana jest w ostatniej kolejności, jeżeli próby rozpoznania po DOCTYPE oraz namespace zawiodą.<br>
Przydatne jest to w przypadku języków, które nie posiadają jednego, stałego DTD bądź identyfikatora namespace. (np. RSS 2.0)


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tagdata_editor_tdf.php">Edytor plików definicyjnych języków znacznikowych</a></li>
	<li><a href="main_editor_codeinsight.php">Uzupełnianie znaczników</a>
	<li><a href="settings_codeinsight_tags.php">Ustawienia Dynamicznego kodu</a>
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