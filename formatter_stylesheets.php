
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Formatowanie - Ustawienia dla arkuszy CSS</title>

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
<h1>Formatowanie - Ustawienia dla arkuszy CSS</h1>





<!-- treść pomocy -->
<p>W tym oknie możesz ustawić opcje dla istniejącego, bądź nowego stylu formatowania dla arkuszy CSS. Okno zostało podzielone na dwie części:
<ul>
	<li>Ustawienia selektorów i własności</li>
	<li>Wizualny układ arkusza stylów</li>
</ul></p>

<p>Okno można wywołać za pomocą polecenia <b>Dodaj profil formatowania</b>, lub <b>Modyfikuj profil formatowania</b> w menu obok listy <b>Predefiniowane ustawienia formatowania CSS</b> w oknie <a href="settings_codeinsight_formatter.php">Ustawienia programu - Formatowanie kodu źródłowego</a>. </p>


<h2>Ustawienia selektorów i własności</h2>

<p>W tej sekcji możesz ustawiać opcje dla poszczególnych selektorów, kolejności elementów, wielkości liter.</p>

<p><b>Kolejność selektorów</b><br />
Wybierz kolejność sortowania selektorów:
<ul>
	<li><b>alfabetycznie</b> - selektory będą układane w kolejności alfabetycznej</li>
	<li><b>bez zmian</b> - selektory nie będą sortowane</li>
</ul></p>

<p><b>Kolejność własności</b><br />
Wybierz kolejność sortowania własności w stylu:
<ul>
	<li><b>alfabetycznie</b> - własności będą układane w kolejności alfabetycznej</li>
	<li><b>bez zmian</b> - własności nie będą sortowane</li>
</ul></p>

<p><b>Nazwy selektorów</b><br />
Wybierz, jakimi literami mają być pisane nazwy selektorów:
<ul>
	<li><b>wielkimi literami</b></li>
	<li><b>małymi literami</b></li>
	<li><b>bez zmian</b></li>
</ul></p>

<p><b>Nazwy właściwości</b><br />
Wybierz, jakimi literami mają być pisane nazwy właściwości:
<ul>
	<li><b>wielkimi literami</b></li>
	<li><b>małymi literami</b></li>
	<li><b>bez zmian</b></li>
</ul></p>




<h2>Wizualny układ arkusza stylów</h2>

<p>W tej sekcji możesz ustawić opcje układu arkuszy - wcięcia wierszy, odstępu pomiędzy selektorami itp.</p>

<p><b>Wszystkie własności w jednym wierszu</b><br />
Wybierz tę opcję, jeśli chcesz, by wszystkie własności klasy ułożone zostały w jednym wierszu.</p>

<p><b>Każda własność w nowym wierszu</b><br />
Wybierz tę opcję, jeśli chcesz, by każda własność w klasy była umieszczona w nowym wierszu. Jeśli wybierzesz tę opcję, możesz również określić formatowanie wcięcia:
<ul>
	<li><b>Rozmiar wcięcia</b> - wybierz, ile znaków ma tworzyć wcięcie wiersza</li>
	<li><b>Używaj tabulatorów zamiast spacji</b> - zaznacz ten przełącznik, jeśli chcesz używać tabulatorów do tworzenia wcięć</li>
</ul></p>

<p><b>Dodawaj puste linie między selektorami</b><br />
Zaznacz ten przełącznik, jeśli chcesz, aby między poszczególnymi selektorami wstawiane były dodatkowe puste wiersze. Zwiększa to nieco czytelność kodu.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="formatter_general.php">Korzystanie z funkcji formatowania</a>
	<li><a href="settings_codeinsight_formatter.php">Ustawienia formatowań</a>
	<li><a href="formatter_markuplangs.php">Ustawienia formatowania dokumentów znacznikowych</a>
	<li><a href="formatter_javascript.php">Ustawienia formatowania skryptów JavaScript</a>
	<li><a href="formatter_php.php">Ustawienia formatowania skryptów PHP</a>
   <li><a href="formatter_tidy.php">Ustawienia formatowania za pomocą programu Tidy</a>
	<li><a href="tool_htmlcompressor.php">Kompresor HTML</a>
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
