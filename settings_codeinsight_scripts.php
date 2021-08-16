
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Dynamiczne podpowiedzi w skryptach</title>

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
<h1>Ustawienia programu - Dynamiczne podpowiedzi w skryptach</h1>



<!-- treść pomocy -->
<p>
Ta grupa ustawień pozwala na określenie sposobu działania funkcji dynamicznych podpowiedzi dla języków skryptowych. W oknie tym znajduje się kilka grup ustawień odpowiedzialnych za różne funkcje podpowiedzi.

<h2>Dynamiczne podpowiedzi do JavaScript</h2>

<p>W tej grupie ustawień znajdują się przełaczniki pozwalające na określenie zawartości prezentowanej w dynamicznych podpowiedziach dla języka JavaScript. Zaznacz te opcje, które powinny być brane pod uwagę podczas tworzenia listy. Możesz określić np. czy na liście funkcji dostępnych dla dynamicznej podpowiedzi znajdą się funkcje zadeklarowane w plikach skryptów dołączonych do dokumentu, czy określić wyświetlanie elementów globalnych.

<h2>Dynamiczna pomoc do JavaScript</h2>

<p>Ta grupa pomoże w określeniu zawartości dynamicznej pomocy dymkowej wyświetlanej dla elementów języka JavaScript. 

<h2>Pozostałe opcje</h2>

<p><b>Wyświetlaj tylko metody i własności zgodne z ...</b><br />

<p>Ta opcja pozwala na określenie zgodności wyświetlanych podpowiedzi z wybraną specyfikacją języka JavaScript. Nie wszystkie przeglądarki wspierają wszystkie specyfikacje dlatego korzystając z tych opcji możesz zawęzić wyświetlane podpowiedzi tylko do elementów, które Cię interesują.

<p><b>Domyślnie w ASP używaj</b><br />

<p>Ta opcja pozwala na wskazanie preferowanego języka podczas pisania programów ASP. Dzięki temu dynamiczne podpowiedzi, które będą wyświetlane, będą dotyczyć tylko języka, który stosujesz. Możesz wybrać albo JavaScript albo VBScript.


<h2>Konstrukcje użytkownika w menu przycisku OK</h2>




<!-- treść pomocy -->
<p>Ta kategoria ustawień pozwala na zdefiniowanie specjalnych konstrukcji, które są wykorzystywane podczas wstawiania kodu generowanego przez narzędzia edytorów znaczników. Dzięki temu możesz określić własny typ wstawiania kodu znaczników np. na potrzeby języków skryptowych. Konstrukcje użytkownika, będą umieszczone w menu przycisku OK w okienkach narzędzi pozwalających na wstawianie znaczników. Konstrukcje możesz dodawać i modyfikować za pomocą przycisków obok listy. 

<p>Utworzenie konstrukcji polega na podaniu tekstu, wewnątrz którego znajdować się będzie symbol (litera poprzedzona znakiem procenta, np. <tt>%s</tt>), który podczas wstawiania kodu do dokumentu za pomocą tej konstrukcji zostanie zamienione właśnie na kod znacznika wygenerowanego przez narzędzie. Przykładowo możesz utworzyć własną konstrukcję w postaci <tt>sprintf("%s")</tt>. Jeśli jej użyjesz w narzędziu do tworzenia odsyłaczy, spowodujesz, że kod znacznika odsyłacza będzie wstawiony w następujący sposób:</P>
<pre>sprintf("&lt;a href=\"www.pajaczek.pl\" target=\"_blank\"&gt;Strona Pająka&lt;/a&gt;");</pre>



<p>Dostępne są cztery symbole posiadające następujące znacznie:
<ul>
        <li><tt>%s</tt> - wstawiany będzie kod znacznika w formatowaniu według ustawień programu</li>
        <li><tt>%h</tt> - wstawiany będzie kod znacznika w formatowaniu HTML, małymi literami</li>
        <li><tt>%H</tt> - wstawiany będzie kod znacznika w formatowaniu HTML, wielkimi literami</li>
        <li><tt>%x</tt> - wstawiany będzie kod znacznika w formatowaniu XHTML</li>
</ul>
Jeśli natomiast będziesz chciał użyć w konstrukcji znaku procenta, wstaw go za pomocą symbolu <tt>%%</tt>.</p>




<h2>Edytor plików definicyjnych dla języków skryptowych</h2>

<p>Korzystając z przycisku znajdującego się w tej grupie włączysz narzędzie <a href="tagdata_editor_tdf_scripts.html">edytora pliku definicyjnego dla skryptów</a>, które pozwala na tworzenie definicji dla nowych elementów języków skryptowych jak również modyfikację definicji już zdefiniowanych elementów skryptowych.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_codeinsight.html#settingslistcodeinsight">Inne ustawienia ułatwień</a>
	<li><a href="main_editor_codeinsight.html">Dynamiczny kod</a>
	<li><a href="coding_scripts_jsvb.html">Korzystanie ze skryptów w Pająku</a>
	<li><a href="tagdata_editor_tdf_scripts.html">Edytor pliku definicyjnego dla skryptów</a>
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
