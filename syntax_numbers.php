
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
<title>Edytor schematów kolorowania - Liczby</title>

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
<h1>Edytor schematów kolorowania - Liczby</h1>

<!-- treść pomocy -->

<p>W każdym bloku można włączyć kolorowanie liczb. Pozwala to na ich wyróżnienie w tekście. Rozpoznawane i odmiennie kolorowane mogą być liczby dziesiętne i szesnastkowe. Można również zdefiniować inne znaki, które będą kolorowanie wraz z liczbą (na przykład znak '#', który w arkuszach stylów CSS oznacza liczbę szesnastkową).</p>

<p><b>Włącz kolorowanie liczb</b><br />
Zaznacz tę opcję, jeśli chcesz włączyć kolorowanie liczb. </p>

<p><b>Dziesiętne</b><br />
Umożliwia wybór z listy lub utworzenie nowego stylu kolorowania dla liczb dziesiętnych.</p>

<p><b>Szesnastkowe</b><br />
Umożliwia wybór z listy lub utworzenie nowego stylu kolorowania dla liczb szesnastkowych.</p>

<h2>Specjalne</h2>
Wybierz, w którym miejscu liczby mogą się znaleźć znaki specjalne (w tym wypadku nie będące cyframi z zakresu 0-9 lub literami z zakresu A-F). Możliwe są trzy warianty (aktywny zawsze może być tylko jeden):

<ul>

	<li><p><b>z prefiksami</b>
	 - umożliwia tworzenie i edycję listy znaków specjalnych występujących bezpośrednio przed liczbą (bez spacji). Jeśli zaznaczysz opcję '<b>z prefiksami</b>' (przełącznik z prawej strony), kolorowanie prefiksów będzie włączone. </p></li>

	<li><p><b>z sufiksami</b>
		 - umożliwia tworzenie i edycję listy znaków specjalnych występujących bezpośrednio za liczbą (bez spacji). Jeśli zaznaczysz opcję '<b>z sufiksami</b>' (przełącznik z prawej strony), kolorowanie sufiksów będzie włączone. </p>
		<p><b>dozwolone wielokrotne</b> - zaznacz tę opcję, jeśli chcesz umożliwić kolorowanie więcej niż jednego sufiksu w liczbie.</p></li>
	
	<li><b>obydwa</b>
		 - umożliwia tworzenie i edycję listy par znaków specjalnych występujących bezpośrednio przed i za liczbą (bez spacji). Jeśli zaznaczysz opcję '<b>z sufiksami i sufiksami</b>' (przełącznik z prawej strony), zdefiniowane prefiksy i sufiksy będą zastosowane. </li>
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
	<li><a href="syntax_blocks_styles_list.php">Edytor schematów kolorowania - Bloki składniowe, style</a>
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
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

</body>
</html>