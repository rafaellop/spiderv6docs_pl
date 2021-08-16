
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Edytor schematów kolorowania - Identyfikatory</title>

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
<h1>Edytor schematów kolorowania - Identyfikatory</h1>

<!-- treść pomocy -->

<p>Identyfikatory są to fragmenty tekstu, które zawierają wyłącznie znaki z zakresów zdefiniowanych jako 'Pierwszy symbol' i 'Inne symbole'. Ustawienia te mają również wpływ na kolorowanie słów kluczowych.</p>

<p><b>Włącz kolorowanie identyfikatorów</b><br />
Kliknij,aby włączyć kolorowanie identyfikatorów. Włączenie/wyłączenie tej opcji nie ma wpływu na kolorowanie słów kluczowych.</p>

<p><b>Lista stylów</b> umożliwia wybór lub utworzenie stylu kolorowania, który zostanie użyty do kolorowania identyfikatorów.</p>

<p><b>Pierwszy symbol</b><br />
Kliknij, jeśli chcesz zdefiniować zakres dla znaku, który musi wystąpić jako pierwszy w identyfikatorze. Dla przykładu, zakres znaków obejmujący wszystkie wielkie i małe litery definiuje się jako 'A-Za-z' itp. </p>

<p><b>Inne symbole</b><br />
Kliknij, jeśli chcesz zdefiniować zakres znaków, które mogą wystąpić w dalszej części w identyfikatora. Sposób definiowania zakresów - patrz '<b>Pierwszy symbol</b>'. </p>

<p><b>UWAGA!</b><br />
Zdefiniowany pierwszy symbol i inne symbole mają wpływ również na kolorowanie <a href="syntax_keywords.php">słów kluczowych</a>! Jeśli słowo kluczowe zawiera niezdefiniowany tutaj znak, nie będzie ono poprawnie kolorowane! Ważna jest wielkość liter (bez względu na ustawienie opcji 'Rozróżniaj wielkość liter' na zakładce '<a href="syntax_blocks.php">Blok</a>'). Dla przykładu - gdy zakres 'Pierwszy symbol' zawiera 'A-Z', a słowo kluczowe rozpoczynane jest małą literą, nie będzie ono poprawnie kolorowane.</p>

<h2>Specjalne</h2>
Wybierz, w którym miejscu identyfikatora mogą się znaleźć znaki specjalne, tzn. takie, które nie zostały zdefiniowane jako 'Pierwszy symbol' i 'Inne symbole'. Dzięki temu możliwe jest na przykład kolorowanie znaku '$' (dolar) w nazwach zmiennych języka PHP, gdy jednocześnie nie może on występować w <a href="syntax_keywords.php">słowach kluczowych</a>. 

<ul>
	<li><p><b>z prefiksami</b>
	 - umożliwia utworzenie i edycję listy znaków specjalnych występujących bezpośrednio przed identyfikatorem (bez spacji). Jeśli zaznaczysz '<b>z prefiksami</b>' (przełącznik pod listą), zdefiniowane prefiksy będą kolorowane. </p></li>

	<li><p><b>z sufiksami</b>
		 - umożliwia utworzenie i edycję listy znaków specjalnych występujących bezpośrednio za identyfikatorem (bez spacji). Jeśli zaznaczysz '<b>z sufiksami</b>' (przełącznik pod listą), zdefiniowane sufiksy będą kolorowane.</p></li>
	
	<li><b>obydwa</b>
		 - umożliwia utworzenie i edycję listy par znaków specjalnych występujących bezpośrednio przed i za identyfikatorem (bez spacji). Jeśli zaznaczysz '<b>z sufiksami i sufiksami</b>' (przełącznik pod listą), zdefiniowane prefiksy i sufiksy będą kolorowane. </li>
</ul>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="syntax_editor.php">Edytor schematów kolorowania</a></li>
	<li><a href="syntax_keywords.php">Edytor schematów kolorowania - Słowa kluczowe</a></li>
	<li><a href="syntax_blocks_styles_list.php">Edytor schematów kolorowania - Bloki składniowe, Style</a></li>
	<li><a href="syntax.php">Ogólnie o kolorowaniu składni w Pająku</a><li>
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