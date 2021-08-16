
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<script type="text/javascript" language="JavaScript">
<!--

//-->
</script>
<title>Wspomaganie dla JavaScript - Dynamiczny kod</title>

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
<h1>Wspomaganie dla JavaScript - Dynamiczny kod</h1>



<!-- treść pomocy -->


<p>Na wspomaganie JavaScript w Pająku składa się między innymi również mechanizm podpowiedzi nazywany Dynamiczny kod. Tak na prawdę mechanizm ten tworzą dwa narzędzia:
<ul>
	<li><a href="#code_completion">Dynamiczny kod</a></li>
	<li><a href="#code_parameter">Dynamiczne podpowiedzi</a></li>
</ul></p>

<p><b>UWAGA!</b><br />
Dynamiczny kod nie jest dostępny dla języka VBScript.</p>

<p>Dynamiczny kod pobiera dane z <a href="tagdata_editor_tdf_scripts.php">pliku definicyjnego dla skryptów</a> oraz analizuje istniejący kod skryptu. W ten sposób możliwe jest podawanie nazw i listy argumentów wbudowanych funkcji oraz predefiniowanych i zadeklarowanych w skrypcie zmiennych i stałych JavaScript. Dzięki temu można znacznie efektywniej pisać skrypty - nie trzeba pamiętać dokładnych nazw wszystkich funkcji JavaScript, czy długiej listy zmiennych.</p>

<a name="code_completion"></a>
<h2>Dynamiczny kod</h2>
Działanie dynamicznego kodu polega na podpowiadaniu nazw elementów możliwych do wykorzystania (funkcje, zmienne i stałe). Narzędzie można wywołać na dwa sposoby:
<ol>
	<li> <b>automatyczne wyświetlanie podpowiedzi</b> - skorzystaj z polecenia na mini pasku edytora (ikona polecenia została pokazana obok). Podpowiedzi będą pojawiać się po chwili nieaktywności.</li>
	<li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnie wpisywanej funkcji wciskając skrót klawiszowy <tt>Ctrl+Spacja</tt></li>
</ol>
</p>

<p>Jeśli aktywowałeś automatyczne wyświetlanie, wpisz początek nazwy funkcji i poczekaj chwilę - pojawi się lista z elementami, których możesz użyć. Na liście podświetlona będzie pierwsza pozycja, która jest najbardziej zgodna z wpisanym ciągiem. W przypadku, automatyczne wyświetlanie podpowiedzi jest wyłączone, aby otrzymać podpowiedź skorzystaj ze skrótu <tt>Ctrl+Spacja</tt>.</p>

<p>Dla przykładu, jeśli istnieje funkcja:
<pre>
<b>function</b> moja_funkcja <b>(a, b)</b>
<b>{</b>
      a = a + b;
<b>}</b>
</pre></p>

<p>Teraz wystarczy wpisać (pionowa kreska oznacza kursor w dokumencie):<br />
<pre>moja|</pre>
i użyć skrótu <tt>Ctrl+Spacja</tt> (bądź poczekać chwilę, jeśli aktywowałeś dynamiczny kod). Pojawi się okienko, w którym będzie nazwa funkcja <tt>moja_funkcja</tt>.</p>

<p>Po liście możesz poruszać się za pomocą pasków przewijania, strzałkami itp. (jak w każdym oknie). Aby wstawić wybraną konstrukcję do dokumentu, wciśnij <tt>Enter</tt>, bądź kliknij na nią.</p>

<p>Ikony przy nazwach określają, czy jest to nazwa zmiennej, stałej, czy funkcji</p>

<h2><a name="code_parameter"></a>Dynamiczne podpowiedzi</h2>
Działanie dynamicznych podpowiedzi polega na podpowiadaniu w trakcie pisania skryptu argumentów funkcji. Narzędzia pobiera dane podobnie jak dynamiczny kod - z pliku definicyjnego i z wyników analizy skryptu. Dzięki temu nie trzeba stale pamiętać, bądź szukać w kodzie, jakich argumentów wymaga dana funkcja.</p> 
<p>Narzędzie można wywołać na dwa sposoby:<br />

<ol>
   <li> <b>automatyczne podpowiadanie</b> - skorzystaj z polecenia na mini pasku edytora. Po wpisaniu nazwy funkcji i otwierającego nawiasu (np. <b><tt>moja_funkcja(</tt></b> ) poczekaj - po chwili pojawi się dymek z argumentami do użycia. Argument, który w tej chwili chcesz podać, zaznaczony zostanie pogrubieniem. Ikona polecenia została pokazana wyżej.</li>
	<li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnie używanej funkcji wciskając skrót klawiszowy <tt>ctrl+\</tt></li>
</ol></p>

<p><b>Ustawienia i inne opcje dynamicznych podpowiedzi</b><br />
Aby dopasować dynamiczne podpowiedzi do swoich potrzeb, skorzystaj z okna <a href="settings_codeinsight_scripts.php">Ustawienia programu - Dynamiczne podpowiedzi w skryptach</a>.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="coding_scripts_jsvb.php">Wspomaganie dla JavaScript i VBScript - ogólnie</a></li>
	<li><a href="main_editor_codeinsight.php">Dynamiczne podpowiedzi</a></li>
	<li> <a href="settings_codeinsight_scripts.php">Ustawienia programu - Dynamiczne podpowiedzi w skryptach</a></li>
   <li><a href="tagdata_editor_tdf_scripts.php">Edytor pliku definicyjnego dla skryptów</a></li>
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
