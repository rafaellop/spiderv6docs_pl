
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
<title>Edytor schematów kolorowania - Bloki</title>

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
<h1>Edytor schematów kolorowania - Bloki</h1>

<!-- treść pomocy -->


<p>Blok stanowi fragment edytowanego kodu o&nbsp;zdefiniowanych własnościach (np. kod w&nbsp;danym języku skryptowym, zawartość znacznika HTML itp.). Każdy blok ma odrębne ustawienia kolorowania. Możliwe jest jednak wspólne używanie tych samych stylów kolorowania w różnych blokach.</p>


<h2>Separatory bloku</h2>

<p>Separatory bloku oznaczają początek i&nbsp;koniec danego bloku w&nbsp;kodzie. Przykładowe separatory dla znacznika DIV języka HTML to&nbsp;'&lt;DIV' (lewy) i&nbsp;'&gt;' (prawy). 
</p>
<p><b>Edytuj separatory.</b><br />
Po kliknięciu na ikonę 'Edytuj separatory' otworzy się okienko, w&nbsp;którym możesz określić prawy i&nbsp;lewy separator.</p>

<ul>
	<li><p><b>Separatory są częścią bloku</b><br />
Zaznacz tę opcję, jeśli chcesz, by separatory były kolorowane według ustawień danego bloku. W&nbsp;przeciwnym wypadku zastosowanie mają ustawienia domyślne danego schematu, lub&nbsp;bloku nadrzędnego (jeśli dany blok jest zagnieżdżony w&nbsp;innym).</p></li>
</ul>


<h2>Opcje bloku</h2>

<p><b>Rozróżniaj wielkość liter</b><br />
Zaznacz tę opcję, jeśli chcesz, by rozpoznawane były małe/wielkie litery użyte w&nbsp;Słowach kluczowych. </p>

<p align="left" name="metasymbol"><b>Używaj metasymbolu</b><br />
Zaznacz tę opcję, jeśli chcesz zdefiniować znak, który będzie miał specjalne znaczenie przy jednoczesnym zaznaczeniu opcji:<br />
<ul>
	<li><p><b>...jako znaku ucieczki (escape char)</b> - unieważnia znak końca ciągu znaków, co jest używane w&nbsp;różnych językach programowania w&nbsp;celu wstawienia tego znaku jako części ciągu (np. znak \ w&nbsp;PHP).</p></li>
	<li><p><b>...do zawijania długich linii</b> - wymusza łamanie wiersza w&nbsp;edytorze po napotkaniu metasymbolu.</p></li>
</ul>


<h2>Styl i&nbsp;kolorystyka</h2>

<p><b>Styl tekstu</b> - pozwala na wybranie stylu kolorowania, jaki będzie stosowany do kolorowania zwykłego tekstu w&nbsp;bloku. Zwykłym tekstem jest wszystko, co nie zostało zdefiniowane jako komentarz, ciąg, liczba, identyfikator lub&nbsp;słowo kluczowe. Można również utworzyć nowy styl, który automatycznie będzie przypisany do zwykłego tekstu.</p>

<p><b>Koloruj symbole</b><br />
Zaznacz tę opcję, jeśli chcesz wybrać lub&nbsp;utworzyć styl kolorowania dla predefiniowanych&nbsp;w&nbsp;programie symboli (znaki&nbsp;().={}[]&nbsp;itd.)</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="syntax_editor.php">Edytor schematów kolorowania - początek.</a></li>
	<li><a href="syntax_blocks_styles_list.php">Edytor schematów kolorowania - Bloki składniowe, Style</a></li>
	<li><a href="syntax_keywords.php">Edytor schematów kolorowania - Słowa kluczowe</a></li>
	<li><a href="syntax_strings.php">Edytor schematów kolorowania - Ciągi znaków</a></li>
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