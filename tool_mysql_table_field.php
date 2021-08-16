
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Serwery baz danych MySQL - Właściwości tabeli</title>

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
<h1>Narzędzia - Serwery baz danych MySQL - Właściwości pola tabeli</h1>



Okienko możesz otworzyć wyłącznie z poziomu okna <a href="tool_mysql_table_properties.php">Właściwości tabeli MySQL</a>. Służy ono do tworzenia nowych pól tabeli i edycji właściwości pól istniejących. Zbudowane jest z trzech grup ustawień: Nazwa pola, Typ przechowywanych danych, Pozostałe własności.

<a name="name"></a>
<h2>Nazwa pola</h2>
W tej grupie znajduje się tylko pole z nazwą bieżącego pola. Aby zmienić nazwę pola, wpisz ją tutaj, po czym zatwierdź przyciskiem <tt>OK</tt>.

<a name="position"></a>
<h2>Umieść</h2>
<p>W tej grupie znajduje się kilka opcji umożliwiających określenie, w którym miejscu w strukturze tabeli ma zostać umieszczone nowe pole. Może się znaleźć na początku tabeli, na jej końcu, bądź po określonym polu (do wyboru z listy). </p>
<p>Grupa jest dostępna tylko w przypadku tworzenia nowego pola. W przypadku edycji już istniejącego pola, jest niewidoczna.</p>


<a name="type"></a>
<h2>Typ przechowywanych danych</h2>

<p>Grupa "Typ przechowywanych danych" zawiera kilka elementów służących do edycji własności bieżącego pola. Nie wszystkie są na raz widoczne - zależy to od typu pola, na przykład opcja BINARY dostępna jest wyłącznie dla pól typu <tt>CHAR</tt> i <tt>VARCHAR</tt>.</p>

<p><b>Typ</b><br />
Wybierz z listy typ przechowywanych danych. Lista zawiera wszystkie typy danych, jakie mogą być nadane polu tabeli bazy danych MySQL.

<p><b>Rozmiar</b><br />
Umożliwia wprowadzenie rozmiaru pola. Opcja dostępna dla typów wymagających tej informacji, jak <tt>INTEGER</tt>, <tt>VARCHAR</tt> itp. Jeśli zaznaczysz opcję <b>Użyj domyślnego rozmiaru</b>, pole to będzie nieaktywne, zaś użyta zostanie wartość domyślna.

<p><b>Precyzja</b><br />
Określ precyzję (ilość miejsc po przecinku) dla pól typu DOUBLE, FLOAT, DECIMAL. Jeśli zaznaczysz opcję <b>Użyj domyślnego rozmiaru</b>, pole to będzie nieaktywne, zaś użyta zostanie wartość domyślna.

<p><b>ZEROFILL</b><br />
Jeśli zaznaczysz te opcję, to w przypadku wprowadzenia do pola wartości o długości krótszej, niż podana w polu "Rozmiar", pozostałe miejsce zostanie wypełnione zerami.

<p><b>UNSIGNED</b><br />
Zaznaczenie tego pola powoduje, że w polu typu liczbowego będą mogły być przechowywane wyłącznie liczby nieujemne. Dzięki temu będzie w nim można przechowywać liczby dodatnie o większej wartości.

<p><b>BINARY</b><br />
Zaznaczenie tego pola spowoduje, że podczas sortowania danych z pól typu tekstowego, wartości tego pola będą porównywane według kodów ASCII.

<p><b>Wartości</b><br />
Lista wartości, jakie mogą być użyte dla pól typu <tt>SET</tt> i <tt>ENUM</tt>. Wartości możesz dodawać i usuwać za pomocą przycisków umieszczonych obok.

<p><b>Domyślnie</b><br />
W tym polu możesz wprowadzić wartość domyślną dla pola. 



<a name="others"></a>
<h2>Pozostałe własności</h2>

Grupa pozostałe własności zawiera dwie opcje:

<p><b>NOT NULL</b><br />
Zaznacz tę opcję, jeśli jego wypełnienie w każdym rekordzie będzie wymagane (nie będzie mogło być puste). W przypadku nie podania wartości podczas dodawania nowego rekordu użyta zostanie wartość domyślna.

<p><b>AUTO INCREMENT</b><br />
Zaznacz tę opcję, aby podczas wprowadzania nowych rekordów do pola automatycznie był wprowadzany kolejny numer. Pole z zaznaczoną opcja <tt>AUTO INCREMENT</tt> musi należeć do klucza podstawowego (PRIMARY KEY) tabeli.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="main_tabs_inspector_mysql.php">Zakładka Inspektor MySQL</a></li>
   <li><a href="tool_mysql_table_properties.php">Właściwości tabeli MySQL</a></li>
   <li><a href="tool_mysql_table_index.php">Właściwości indeksu tabeli MySQL</a></li>
   <li><a href="settings_network_mysqlservers_add.php">Właściwości serwera MySQL</a></li>
   <li><a href="settings_network_mysqlservers.php">Ustawienia programu - Ustawienia serwerów baz danych MySQL</a></li>
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
