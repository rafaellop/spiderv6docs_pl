<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.1.1)">

<!-- nazwa strony pomocy -->
<title>Formatowanie - Ustawienia dla języka PHP</title>
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

<!-- topmenu start -->
<? include "include/topmenu.html"; ?>
<!-- topmenu end -->

<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Formatowanie - Ustawienia dla języka PHP</h1>





<!-- treść pomocy -->
<p> W tym oknie możesz ustawić opcje formatowania dla skryptów PHP </p>

<p>Okno ustawień dla PHP można wywołać z okna <a href="formatter_general.php#php">Formatowanie kody źródłowego</a>, lub z okna <a href="settings_codeinsight_formatter.php">ustawień programu</a>.</p>


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

<p>W tej sekcji możesz określić, czy pomiędzy poszczególnymi funkcjami i klasami mają być umieszczone dodatkowe puste wiersze. Zwiększa to czytelność kodu.</p>

<p><b>Puste wiersze pomiędzy funkcjami</b><br />
Wybierz tę opcję, jeśli chcesz, aby pomiędzy kolejnymi deklaracjami funkcji były wstawiane dodatkowe puste wiersze.</p>

<p><b>Puste wiersze pomiędzy klasami</b><br />
Wybierz tę opcję, jeśli chcesz, aby pomiędzy kolejnymi deklaracjami klas były wstawiane dodatkowe puste wiersze.</p>

<p><b>Przerzucaj instrukcje po średniku do nowego wiersza</b><br>
Zaznacz tę opcję, aby instrukcje znajdujące się w jednej linii (oddzielone średnikami) zostały rozbite na kilka linii.

<p><b>Zamknięcie bloku w osobnym wierszu</b><br>
Zaznacz tę opcję, aby włączyć przenoszenia konstrukcji znajdujących się po znaku <tt>}</tt> do nowego wiersza, np. w przypadku <tt>} else {</tt>.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="formatter_general.php">Korzystanie z funkcji formatowania</a></li>
   <li><a href="settings_codeinsight_formatter.php">Ustawienia formatowań</a></li>
   <li><a href="formatter_markuplangs.php">Ustawienia formatowania dokumentów znacznikowych</a></li>
   <li><a href="formatter_stylesheets.php">Ustawienia formatowania arkuszy stylów CSS</a></li>
   <li><a href="formatter_javascript.php">Ustawienia formatowania skryptów JavaScript</a></li>
   <li><a href="formatter_tidy.php">Ustawienia formatowania za pomocą programu Tidy</a></li>
   <li><a href="tool_htmlcompressor.php">Kompresor HTML</a>
   <li><a href="coding_php.php">Korzystanie z PHP w Pająku </a>
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