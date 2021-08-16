<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">




<!-- nazwa strony pomocy -->
<title>Formatowanie - Ustawienia dla JavaScript</title>
<style type="text/css">
<!--

.scriptsymbol {
font-weight: bold;
color: #FF0000;
}

.scriptvarname {
color: #0000FF;
}

.scriptcomment {
color: #888888;
font-style: italic;
}

.scriptkeyword {
font-weight: bold;
color: #008000;
}

-->
</style>
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
            <a class="nav-link" href="contents_main.html">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.html">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.html">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.html">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.html">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.html">Ustawienia</a>
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
<div class="collapse" id="googlesearch">

        <script async src="https://cse.google.com/cse.js?cx=4dedefccca22f88c9"></script>
        <div class="gcse-search"></div>

</div>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Formatowanie - Ustawienia dla JavaScript</h1>





<!-- treść pomocy -->
<p> W tym oknie możesz ustawić opcje formatowania dla skryptów JavaScript </p>

<p>Okno ustawień dla JavaScript można wywołać z okna <a href="formatter_general.html#javascript">Formatowanie kody źródłowego</a>, lub z okna <a href="settings_codeinsight_formatter.html">ustawień programu</a>.</p>


<h2>Ustawienia bloków</h2>


<p>Wybierz sposób formatowania kodu:</p>

<b>Nawiasy otwierające w nowym wierszu</b><br />
Wybierz tę opcję, jeśli chcesz, by nawiasy klamrowe oznaczające początek ciała funkcji umieszczane były zawsze w nowym wierszu, jak na przykładzie poniżej:


<pre>
<b>function</b> nazwa_funkcji <b>()</b>
<b>{</b>
   // Ciało funkcji
<b>}</b>
</pre>

<b>Nawiasy otwierające na końcu wiersza</b><br />
Wybierz tę opcję, jeśli chcesz, by nawiasy klamrowe oznaczające początek ciała funkcji umieszczane były na końcu wiersza, w którym jest jej nazwa, jak na przykładzie poniżej:

<pre>
<b>function</b> nazwa_funkcji <b>() {</b>
   // Ciało funkcji
<b>}</b>
</pre>



<p><b>Rozmiar pojedynczego wcięcia</b><br />
Wybierz ile znaków m zostać użytych dla wcięcia jednego wiersza.</p>

<p><b>Używaj tabulatorów zamiast spacji</b><br />
Zaznacz, jeśli chcesz zamiast spacji, używać do wcinania znaku tabulatora.</p>

<p><b>Nie wstawiaj wcięć w pustych wierszach</b><br />
Zaznacz, jeśli w pustych wierszach nie maja być tworzone wcięcia.</p>




<h2>Odstępy między wierszami</h2>

<p>W tej sekcji możesz określić, czy pomiędzy poszczególnymi funkcjami  mają być umieszczone dodatkowe puste wiersze. Zwiększa to czytelność kodu.</p>

<p><b>Puste wiersze pomiędzy funkcjami</b><br />
Wybierz tę opcję, jeśli chcesz, aby pomiędzy kolejnymi deklaracjami funkcji były wstawiane dodatkowe puste wiersze.</p>

<p><b>Przerzucaj instrukcje po średniku do nowego wiersza</b><br>
Zaznacz tę opcję, aby instrukcje znajdujące się w jednej linii (oddzielone średnikami) zostały rozbite na kilka linii.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="formatter_general.html">Korzystanie z funkcji formatowania</a>
	<li><a href="settings_codeinsight_formatter.html">Ustawienia formatowań</a>
	<li><a href="formatter_markuplangs.html">Ustawienia formatowania dokumentów znacznikowych</a>
	<li><a href="formatter_stylesheets.html">Ustawienia formatowania arkuszy stylów CSS</a>
	<li><a href="formatter_php.html">Ustawienia formatowania skryptów PHP</a>
   <li><a href="formatter_tidy.html">Ustawienia formatowania za pomocą programu Tidy</a>
	<li><a href="tool_htmlcompressor.html">Kompresor HTML</a>
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