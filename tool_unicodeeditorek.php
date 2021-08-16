
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
<title>Narzędzia - Edytorek Unicode</title>


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
<h1>Narzędzia - Edytorek Unicode</h1>

<p>Edytorek Unicode służy do ułatwiania pracy z tekstami kodowanymi w Unicode . Możesz go otworzyć korzystając z polecenia w <a href="main_menu_spelling.html">menu Pisownia</a>, bądź <a href="main_menu_view.html">menu Wyświetl</a>. Korzystając z edytorka możesz:
<ul>
        <li>kopiować z edytora Pająka tekst (z automatyczną zamianą encji na znaki Unicode) do edytorka, a następnie do innych programów,</li>
        <li>wklejać do edytora tekst z innych programów z jednoczesną zamianą znaków Unicode na encje (entities)</li>
</ul></p>

Edytorek Unicode działa w ten sposób, że w postaci Entities wklejane są te znaki, które nie posiadają reprezentacji w bieżącym zestawie znaków. Dlatego dla ciągu składającego się z np. polskich znaków encje nie zostaną wklejone, gdyż znaki te są poprawnie wyświetlane w edytorze głównym Pająka i po prostu nie ma takiej potrzeby. Gdy jednak do edytorka Unicode wprowadzimy tekst, który nie posiada reprezentacji w bieżącym zestawie znaków, to wstawienie tekstu z Edytorka  Unicode do edytora spowoduje wstawienie encji. 

<p><b>Przykładowo:</b><br>
Do edytorka wprowadzimy tekst:
<ul>
        <li>po grecku: <b>&#932;&#943; &#949;&#7990;&#957;&#945;&#953; &#964;&#8056;</b>
        <li>po persku: <b>&#1610;&#1608;&#1606;&#1740;&#8204;&#1705;&#1615;&#1583; &#1670;&#1610;&#1587;&#1578;&#1567;</b>
</ul>

Po wklejeniu do z Edytorka Unicode do edytora (zakładając, że dokument jest kodowany w Unicode) przybierze on postać:

<ul>
        <li>napis po grecku: <b>&amp;#932;&amp;#943; &amp;#949;&amp;#7990;&amp;#957;&amp;#945;&amp;#953; &amp;#964;&amp;#8056;</b>
        <li>napis po persku: <b>&amp;#1610;&amp;#1608;&amp;#1606;&amp;#1740;&amp;#8204;&amp;#1705;&amp;#1615;&amp;#1583; &amp;#1670;&amp;#1610;&amp;#1587;&amp;#1578;&amp;#1567;</b>
</ul>

<h3>Narzędzie składa się z menu oraz pola edycji tekstu.</h3>

<p><b>Pobranie tekstu z edytora...</b><br />
Kliknij, aby pobrać zaznaczony w edytorze tekst i wkleić do edytorka Unicode z jednoczesną zamianą encji na znaki Unicode.

<p><b>Wstawienie tekstu do edytora...</b><br />
Kliknij, aby wstawić tekst z edytorka Unicode do okna edytora z jednoczesną zamianą znaków Unicode na encje. Jeśli w edytorku zaznaczony był jakiś fragment tekstu, tylko on zostanie wstawiony do edytora.

<p><b>Wyczyszczenie zawartości edytorka</b><br />
Kliknij, aby wyczyścić zawartość edytorka Unicode.

<p><b>Wytnij</b><br />
Kliknij, aby wyciąć zaznaczony tekst z edytorka Unicode do schowka (domyślny skrót <tt>Ctrl+X</tt>).

<p><b>Wklej</b><br />
Kliknij, aby wkleić do edytorka Unicode zawartość schowka (domyślny skrót <tt>Ctrl+V</tt>). Możesz tez skorzystać z poleceń w menu rozwijanym i wkleić tekst z zamianą encji na znaku UTF (domyślnie), bądź bez zamiany.

<p><b>Zaznacz wszystko</b><br />
Kliknij, aby zaznaczyć cały tekst w oknie edytorka.

<p><b>Zawijanie wierszy</b><br />
Kliknij, aby włączyć zawijanie wierszy w oknie edytorka.

<p><b>Wybór czcionki w edytorku</b><br />
Kliknij, aby uruchomić narzędzie pozwalające na wybór czcionki stosowanej w edytorku.

<p><b>Pomoc do narzędzia</b><br>
Kliknij, aby wyświetlić ten temat pomocy.

<h2>Inne możliwości wprowadzanie tekstu w Unicode</h2>

<p>Pająk wspomaga również wprowadzanie tekstów do dokumentów kodowanych w Unicode w inny sposób. Wystarczy wprowadzić tekst w dowolnym edytorze obsługującym ten format, a następnie po prostu wkleić go do edytora. Wszystkie znaki mogące sprawić problemy z wyświetlaniem zostaną zamienione na encje.</p> 

<p>Aby ponownie edytować taki tekst, skorzystaj właśnie z Edytorka Unicode.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="charset_encoding.html">Kodowanie znaków narodowych w Pająku</a></li>
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
