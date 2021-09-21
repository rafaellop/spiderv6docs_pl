<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Tworzenie list wyliczeniowych</title>

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

<h1>Tworzenie list wyliczeniowych</h1>
<!-- nagłowek głowny tematu -->


<!-- Treść pomocy -->

<p><b>Zamiana tekstu na listę wyliczeniową</b><br />

<p>Aby zamienić fragment tekstu na listę wyliczeniową (numerowaną bądź nienumerowaną) należy:</p>

<ol>
   <li>Zaznaczyć w edytorze fragment tekstu. W zaznaczonym fragmencie każdy nowy wiersz będzie stanowił nowy element wyliczenia.</li>
   <li>Z menu podręcznego edytora wybrać pozycję "Zaznaczony tekst na... -> Zaznaczony na listę numerowaną" lub "Zaznaczony tekst na... -> Zaznaczony na listę nienumerowaną", w zależności od typu listy, którą chcesz utworzyć.</li>
   <li>W okienku Generatora wyliczeń, które pojawi się na ekranie, określ typ i inne parametry listy. Możesz także poddać jej elementy modyfikacji.</li>
</ol>

<p>Kliknięcie przycisku OK spowoduje zastąpienie zaznaczonego tekstu sporządzonym na jego podstawie wyliczeniem.</p>



<h2>Polecenia wstawiania i edycji znaczników listy</h2>

Jeśli szybko chcesz wstawić znacznik listy numerowanej <tt>&lt;OL&gt;</tt>, nienumerowanej <tt>&lt;UL&gt;</tt>, znacznik elementu listy <tt>&lt;LI&gt;</tt>, bądź szkielet listy definicyjnej <tt>&lt;DL&gt;</tt>, możesz skorzystać z poleceń w <a href="main_menu_main.php">menu głównym</a> / <a href="main_menu_htmlcode.php">Kod HTML</a> / <a href="main_menu_htmlcode_lists.php">Wyliczenia</a>, bądź na <a href="toolbars_link_format.php">pasku narzędzi Odsyłacze, tekst i formatowanie</a>.

<p>Po utworzeniu listy możesz edytować poszczególne znaczniki. Służą do tego okna edycji znaczników. Wystarczy postawić na wybranym znaczniku kursor i wcisnąć klawisz <tt>F5</tt>.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<b>Pokrewne tematy</b>
<ul>
   <li><a href="tool_lists.php">Generator wyliczeń</a></li>
   <li><a href="main_menu_htmlcode.php">Polecenia menu Kod HTML / Wyliczenia</a></li>
   <li><a href="toolbars_link_format.php">Pasek narzędzi Odsyłacze, tekst i formatowanie</a></li>
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