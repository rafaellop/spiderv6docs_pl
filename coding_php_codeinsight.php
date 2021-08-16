
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6">

<!-- nazwa strony pomocy -->
<title>Wspomaganie dla PHP - Dynamiczny kod</title>

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
<h1>Wspomaganie dla PHP - Dynamiczny kod</h1>



<!-- treść pomocy -->


<p>Na wspomaganie PHP w Pająku składa się między innymi również mechanizm podpowiedzi nazywany Dynamiczny kod. Tak na prawdę mechanizm ten tworzą dwa narzędzia:
<ul>
   <li><a href="#code_completion">Dynamiczny kod</a></li>
   <li><a href="#code_parameter">Dynamiczne podpowiedzi</a></li>
</ul></p>

<p>Dynamiczny kod pobiera dane z <a href="tagdata_editor_tdf_php.php">pliku definicyjnego PHP</a> oraz analizuje istniejący kod skryptu. W ten sposób możliwe jest podawanie nazw i listy argumentów wbudowanych funkcji (a jest ich w sumie - łącznie z dołączonymi w modułach - grubo powyżej 2000) oraz predefiniowanych i zadeklarowanych w skrypcie zmiennych i stałych PHP. Dzięki temu można znacznie efektywniej pisać skrypty - nie trzeba pamiętać dokładnych nazw wszystkich funkcji PHP , nie trzeba pamiętać nazw metod w klasach, czy długiej listy zmiennych.</p>

<p>Jednak wspomaganie dla PHP rozpoczyna się w Pająku już w momencie wprowadzenia ciągu <tt>&lt;?</tt> oznaczającego początek bloku PHP. Gdy go wprowadzisz, a następnie wciśniesz <tt>Spację</tt>, bądź <tt>Enter</tt>, kod zostanie automatycznie uzupełniony o symbol <tt>?&gt;</tt> (koniec bloku PHP). W zależności od wybranej opcji w oknie <a href="settings_codeinsight_php.php">Ustawienia programu / Inne ustawienia / Ułatwienia... / Dynamiczne podpowiedzi w PHP</a>, między tymi symbolami może być wstawiana dodatkowa pusta linia, bądź nie.</p>


<h2><a name="code_completion"></a>Dynamiczny kod</h2>
<p>Działanie dynamicznego kodu polega na podpowiadaniu nazw elementów możliwych do wykorzystania (funkcje, metody klas, zmienne i stałe). Narzędzie można wywołać na dwa sposoby:</p>
<ol>
   <li> - za pomocą polecenia aktywowania dynamicznego kodu na mini pasku edytora (ikona pokazana obok). Podpowiedzi będą pojawiać się po chwili nieaktywności.</li>
   <li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnie wpisywanej funkcji wciskając skrót klawiszowy <tt>Ctrl+Spacja</tt></li>
</ol>
</p>

<p>Jeśli aktywowałeś automatyczne wyświetlanie, wpisz nazwę funkcji (np. <b><tt>mysql_</tt></b>) i poczekaj chwilę - pojawi się lista z elementami, których możesz użyć. Na liście podświetlona będzie pierwsza pozycja, która jest najbardziej zgodna z wpisanym ciągiem (np. dla <b><tt>mysql_c</tt></b> będzie to nazwa funkcji <b><tt>mysql_connect()</tt></b>). W przypadku, automatyczne wyświetlanie podpowiedzi jest wyłączone, aby otrzymać podpowiedź skorzystaj ze skrótu <tt>Ctrl+Spacja</tt>.</p>

<p>Narzędzie podpowiada również nazwy metod w klasach, na podstawie których utworzone zostały obiekty. Dla przykładu, jeśli istnieje klasa i jej obiekt:
<pre><b>class</b> A
<b>{</b>
   <b>function</b> A <b>()</b>
   <b>{</b>
      //kod metody
   <b>}</b>
<b>}</b>

$obiekt = <b>new</b> A;
</pre></p>

<p>Teraz wystarczy wpisać (pionowa kreska oznacza kursor w dokumencie):<br />
<pre>$obiekt->|</pre>
i użyć skrótu <tt>Ctrl+Spacja</tt> (bądź poczekać chwilę, jeśli aktywowałeś dynamiczny kod). Pojawi się okienko, w którym będzie nazwa metody <tt>A()</tt>.</p>

Analogicznie można korzystać z opisywanego mechanizmu podczas tworzenia definicji klasy rozszerzającej inną klasa (dziedziczącą po klasie) za pomocą słowa kluczowego <tt>extends</tt>. Program uwzględnia zakres widzialności pól i metod:
<pre><b>class</b> A
<b>{</b>
   <b>public function</b> A <b>()</b>
   <b>{</b>
      // kod metody
   <b>}</b>

   <b>protected function</b> R <b>()</b>
   <b>{</b>
      // kod metody
   <b>}</b>
<b>}</b>

<b>class</b> B <b>extends</b> A
<b>{</b>
  <b>public function</b> B <b>()</b>
   <b>{</b>
     // kod metody
   <b>}</b>

   <b>private function</b> P <b>()</b>
   <b>{</b>
      // kod metody
   <b>}</b>
<b>}</b>

$obiekt = <b>new</b> B;</pre>

<p>W powyższym przykładzie mechanizm dynamicznego kodu przyjdzie nam z pomocą również podczas wybierania klasy, po której ma dziedziczyć klasa <tt>B</tt> (wystarczy wcisnąć <tt>Ctrl+Spacja</tt> po wpisaniu słowa <tt>extends</tt>, a pojawi się lista klas), a także podczas używania metod dostarczanych przez obydwie klasy. Jak wiadomo, obiekt  stworzony na podstawie klasy <tt>B</tt> będzie obsługiwał również metody zawarte w klasie <tt>A</tt>, więc w podpowiedzi dla konstrukcji:<br />
<pre>$obiekt->|</pre>
znajdą się nazwy metod <tt>A()</tt> i <tt>B()</tt>, ale nie znajdą się nazwy funkcji <tt>R()</tt> i <tt>P()</tt>.</p>

<p>W przypadku funkcji wbudowanych PHP, przed nazwą funkcji wyświetlany jest typ zmiennej zwracanej przez tę funkcję, np.: <tt>int count()</tt> (co oznacza, że funkcja count(), zwraca wynik będący liczbą całkowitą - <tt>integer</tt>).</p>

<p>Po liście możesz poruszać się za pomocą pasków przewijania, strzałkami itp. (jak w każdym oknie). Aby wstawić wybraną konstrukcję do dokumentu, wciśnij <tt>Enter</tt>, bądź kliknij na nią.</p>

<p>Ikony przy nazwach określają, czy jest to nazwa zmiennej, stałej, czy funkcji</p>

<h2><a name="code_parameter"></a>Dynamiczne podpowiedzi</h2>
<p>Działanie dynamicznych podpowiedzi polega na podpowiadaniu w trakcie pisania skryptu argumentów funkcji. Narzędzia pobiera dane podobnie jak dynamiczny kod - z pliku definicyjnego i z wyników analizy skryptu. Dzięki temu nie trzeba stale pamiętać, bądź szukać w kodzie, jakich argumentów wymaga dana funkcja.</p>
<p>Narzędzie można wywołać na dwa sposoby:<br />

<ol>
   <li> <b>automatyczne podpowiadanie</b> - skorzystaj z polecenia na mini pasku edytora. Po wpisaniu nazwy funkcji i otwierającego nawiasu (np. <b><tt>mysql_connect(</tt></b> ) poczekaj - po chwili pojawi się dymek z argumentami do użycia. Argument, który w tej chwili chcesz podać, zaznaczony zostanie pogrubieniem. Ikona polecenia została pokazana wyżej.</li>
   <li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnie używanej funkcji wciskając skrót klawiszowy <tt>ctrl+\</tt></li>
</ol></p>

<p><b>Ustawienia i inne opcje dynamicznych podpowiedzi</b><br />
Opracowując rozbudowane projekty możesz także potrzebować podpowiedzi dla funkcji niepowiązanych bezpośrednio z edytowanym skryptem. Dla przykładu, bieżący skrypt może być dołączany do innego pliku, bądź całego systemu (np. jako moduł/plugin ). W takim wypadku nie ma nigdzie w bieżącym skrypcie zadeklarowanych funkcji, których możesz chcieć używać. Aby jednak umożliwić działanie Dynamicznego kodu również i dla tych funkcji, możesz wymusić dołączane pliku (lubi plików) z ich deklaracjami do mechanizmu Dynamicznego kodu. W tym celu musisz skorzystać z okna <a href="settings_codeinsight_php.php">Ustawienia programu - Dynamiczne podpowiedzi w PHP</a>.</p>

<p>W tym samym oknie możesz wybrać zastawy funkcji i zmiennych, jakie mają się pojawiać w podpowiedziach.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="coding_php.php">Wspomaganie dla PHP - ogólnie</a></li>
   <li><a href="main_editor_codeinsight.php">Dynamiczny kod</a></li>
   <li><a href="settings_codeinsight_php.php">Ustawienia programu - Dynamiczne podpowiedzi w PHP</a></li>
   <li><a href="tagdata_editor_tdf_php.php">Edytor pliku definicyjnego dla PHP</a>
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