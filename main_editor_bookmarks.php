
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Zakładki w dokumencie</title>

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
<h1>Zakładki w dokumencie</h1>

<!-- treść pomocy -->

<p>Zakładki umożliwiają oznaczenie ważnych miejsc, do których będziesz częściej wracał. Po ustawieniu zakładki w wybranym wierszu, jej ikona pojawi się na <a href="main_editor.php#gutter">rynnie</a> po lewej stronie edytora.</p>

<p>Zakładki przypisane są do miejsca, w którym zostały ustawione. Jeśli powyżej linii oznaczonej zakładka wstawisz dodatkowe linie, zakładka przesunie się o tyle samo linii w dół tak, by cały czas oznaczała to samo miejsce.</p>

<p>Pająk umożliwia utworzenie dwóch rodzajów zakładek:

<ul>
	<li><a href="#numbered">Zakładki numerowane</a></li>
	<li><a href="#named">Zakładki nazwane</a></li>
</ul></p>

<a name="numbered"></a>
<h2>Zakładki numerowane</h2>

<p>W każdym dokumencie możliwe jest utworzenie  maksymalnie 10 zakładek numerowanych. Poszczególne zakładki oznaczane są na rynnie ikonkami z cyfrą od  (zakładka numer '0') do 
 (zakładka numer '9').</p>

<p>Korzystając z menu rynny (klinij na niej lewym klawiszem myszy) możesz ustawiać i usuwać zakładki o wybranym numerze, a także przechodzić do wybranej zakładki. Możesz też szybko ustawić pierwsza wolną zakładkę (skrót klawiszowy Ctrl+K).</p>

<a name="named"></a>
<h2>Zakładki nazwane</h2>

<p>W każdym dokumencie możliwe jest utworzenie nieograniczonej ilości zakładek nazwanych. Nawet w jednym wierszu możesz ustawić więcej niż jedna zakładkę. Poszczególne zakładki nazwane oznaczone są na rynnie ikoną z litera 'A' -  .</p>

<p>Podobnie, jak w przypadku zakładek numerowanych, zakładki nazwane możesz ustawiać i usuwać za pomocą menu rynny.</p>



<h2>Poruszanie się po dokumencie za pomocą zakładek</h2>

<p>Przejść do wybranej zakładki możesz na kilka sposobów:</p>

<ul>
	<li>korzystając z poleceń w <a href="main_editor.php#gutter">menu rynny</a></li>
	<li>korzystając z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_edit.php">Edycja</a> / <a href="main_menu_edit_bookmarks.php">Zakładki w dokumencie</a></li>
	<li>korzystając z okna <a href="tool_docinfo.php#bookmark">Informacje o dokumencie / Zakładki dokumentu</a></li>
	<li>korzystając z okna <a href="find_text.php#goto">Wyszukiwanie, zamiana, przenoszenie</a> (standardowy skrót <tt>Ctrl+G</tt>)</li>
	<li>korzystając z dowolnego <a href="main_tabs_navigator.php">Nawigatora dokumentu</a></li>
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
	<li><a href="tool_docinfo.php#bookmark">Informacje o dokumencie - zakładki</a>
	<li><a href="main_editor.php">Edytor - tryb edycji kodu źródłowego</a>
	<li><a href="main_editor_todotasks.php">Zadania do wykonania</a>
	<li><a href="main_editor_navigation.php">Różne sposoby nawigacji po dokumencie</a>
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