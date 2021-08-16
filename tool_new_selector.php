
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Kreator selektora CSS</title>

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
<h1>Narzędzia - Kreator selektora CSS</h1>



<p>Ten kreator umożliwia szybkie utworzenie selektora CSS. 

<p>Narzędzie posiada przyjazny interfejs, który prowadzi za rękę przez wszystkie etapy tworzenia selektora - od wyboru nazwy znacznika, poprzez wybór klas, pseudo-klas i innych elementów, aż do zaprezentowania i umieszczenia w kodzie gotowego selektora. 

<p>Każdy krok to osobna plansza. Po planszach możesz poruszać się za pomocą przycisków <b>Dalej</b> i <b>Wstecz</b>.


<h2>Uruchamianie</h2>

<p>Kreator możesz uruchomić z zakładki <a href="main_tabs_inspector_css.php">Inspektor CSS</a> za pomocą jednego z przycisków:</p>


<ul>
	<li> <b>Kreator selektora</b> - Uruchamia kreator nowego selektora</li>
	<li> <b>Kreator selektora na podstawie bieżącego</b> - Uruchamia kreator nowego, pustego selektora, który  będzie zawierał własności ustawione na liście</li>
</ul>


<h2>Wybór znacznika</h2>


<p>Pierwsza plansza umożliwia wybór znacznika, dla którego ma mieć zastosowanie selektor.</p>

<p><b>Kategoria znaczników</b><br />
Wybierz z listy kategorię (język znaczników) znaczników, z której chcesz wskazać nazwę znacznika. 

<p><b>Znacznik</b><br />
Wybierz z listy nazwę znacznika, dla którego chce utworzyć selektor. Dalej znacznik ten będzie nazywane <i>bieżącym</i>.

<p>Kategorie i nazwy znaczników możesz edytować używając <a href="tagdata_editor_tdf.php">Edytor plików definicyjnych znaczników TDF</a>.
</p>


<p>Spośród następnych trzech opcji, aktywna może być tylko jedna (wykluczają się nawzajem):</p>

<p><b>Musi być potomkiem znacznika</b><br />
Zaznacz tę opcję, jeśli chcesz wskazać znacznik, który będzie musiał być nadrzędnym wobec bieżącego znacznika, aby selektor został dla niego zastosowany.

<p><b>Musi być następnikiem znacznika</b><br />
Zaznacz tę opcję, jeśli chcesz wskazać znacznik, który będzie musiał być umieszczony bezpośrednio przed bieżącym znacznikiem (lub inaczej - znacznik bieżący musi się znaleźć bezpośrednio po tym znaczniku).

<p><b>Musi być dzieckiem znacznika</b><br />
Zaznacz tę opcję, jeśli chcesz wskazać znacznik, który będzie musiał być "rodzicem" dla bieżącego znacznika, aby selektor został dla niego zastosowany.

<br />
<br />

<p><b>Musi być pierwszym dzieckiem swojego rodzica</b><br />
Zaznacz tę opcję, jeśli bieżący znacznik musi być pierwszym "dzieckiem" swojego rodzica, aby selektor został dla niego zastosowany.


<h2>Ustawianie klas i elementów tekstu</h2>

<p>Na tej planszy możesz określić, czy selektor będzie odnosił się do elementów oznaczonych klasą, bądź identyfikatorem:</p>

<p><b>znacznik musi zawierać oznaczenia klas (atrybut CLASS)</b><br />
Zaznacz ten przełącznik, aby dodać na listę nazwy klas, jakie musi posiadać bieżący znacznik. Klasy definiuje się w znaczniku za pomocą atrybutu <tt>class="nazwa_klasy"</tt>. Nazwy klas możesz dodawać i usuwać za pomocą poleceń obok listy klas (poniżej przełącznika).

<p><b>znacznik musi być opatrzony identyfikatorem (atrybut ID)</b><br />
Zaznacz ten przełącznik, jeśli bieżący znacznik musi posiadać identyfikator. Następnie wprowadź nazwę wymaganego identyfikatora w polu poniżej przełącznika.


<p>Możesz również zawęzić działanie selektora tylko do pierwszej linii, bądź pierwszego znaku tekstu. W tym celu zaznacz wybrany przełącznik (możesz zaznaczyć najwyżej jeden z nich):
</p>
<ul>
	<li><b>selektor odnosi się do pierwszej linii tekstu</b> (<tt>:first_line</tt>)</li>
	<li><b>selektor odnosi się do pierwszej litery tekstu</b> (<tt>:first_letter</tt>)</li>
</ul>



<h2>Wybór określonych stanów elementu</h2>

<p>Opcje tej planszy pozwalają na wybór określonych stanów elementu interfejsu, dla których zastosowanie ma mieć selektor:</p>

<p><b>kursor musi znajdować się nad elementem (<tt>:hover</tt>)</b><br />
Zaznacz ten przełącznik, jeśli selektor ma mieć zastosowanie wyłącznie wtedy, gdy kursor myszy znajduje się nad elementem. Jest to najczęściej stosowane do zmiany koloru tekstu odnośnika.

<p><b>element musi być aktywny (<tt>:active</tt>)</b><br />
Zaznacz ten przełącznik, jeśli selektor ma mieć zastosowanie wyłącznie wtedy, gdy nad elementem został wciśnięty i jeszcze nie został puszczony klawisz myszy. W tym stanie dany element jest "aktywny".

<p><b>element musi posiadać fokus (<tt>:focus</tt>)</b><br />
Zaznacz ten przełącznik, jeśli element utworzony przez bieżący znacznik musi posiadać fokus, czyli musi być aktualnie wybrany. Ma to zastosowanie np. dla pól formularza, gdzie można pole tekstowe,w którym znajduje się kursor, podświetlić innym kolorem w celu wyróżnienia go spośród innych elementów formularza.


<p>Jeśli znacznik, którego dotyczy selektor, opisuje odnośnik w dokumencie, możesz również określić własności odnośnika:</p>

<ul>
	<li><b>domyślny</b> - zwykły odnośnik, bez określonego stanu</li>
	<li><b>odnośnik nieodwiedzony</b> - odnośnik, który jeszcze nie odwiedzałeś (w historii przeglądarki nie ma wpisu o odwiedzinach tego adresu)</li>
	<li><b>odnośnik odwiedzony</b> - odnośnik, który już kiedyś odwiedziłeś (czyli przeglądarka pamięta użycie tego adresu)</li>
</ul>


<h2>Określenie języka, atrybutów i położenia tekstu w znaczniku</h2>

<p>W tej planszy możesz ustawić następujące opcje selektora:</p>

<p><b>Znacznik musi być w języku</b><br />
Zaznacz tę opcję, aby wybrać z listy język, w jakim napisano tekst zawarty w znaczniku. Język ten musi być wybrany jako argument znacznika, np. <tt>lang="pl"</tt>.


<p><b>Znacznik musi zawierać atrybuty</b><br />
Zaznacz tę opcję, jeśli bieżący znacznik musi posiadać atrybuty. Atrybuty możesz dodawać na listę i usuwać z niej za pomocą poleceń z prawej strony listy. Kliknięcie na polecenia dodania atrybutu uruchomi narzędzie <a href="tool_new_selector_attributes.php">Atrybut selektora</a>, które ułatwi ci podawanie wymaganych nazw i wartości atrybutów i odpowiednio sformatuje kod dla selektora.


<p>Możesz też określić, czy selektor ma odnosić się do tekstu zawartego z znaczniku, czy tez do tekstu dodanego przed, lub po znaczniku:</p>

<ul>
	<li><b>do tekstu w znaczniku</b></li>
	<li><b>do tekstu dodanego przed znacznikiem</b> (<tt>:before</tt>)</li>
	<li><b>do tekstu dodanego po znaczniku</b> (<tt>:after</tt>)</li>
</ul>


<h2>Podgląd, zatwierdzenie selektora, wstawienie do dokumentu</h2>

<p>Ostatnia plansza dostarcza podgląd wyniku pracy kreatora. Jeśli selektor wygląda dokładnie tak, jak sobie tego życzysz, kliknij <b>ZAKOŃCZ</b>.</p>

<p>Jeśli dokument, do którego wstawiasz selektor nie posiada sekcji HEAD i znacznika STYLE, zostaną one dodane podczas wstawiania selektora.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_tabs_inspector_css.php">Zakładka "Inspektor CSS"</a>
	<li><a href="coding_css.php">Wspomaganie dla CSS w Pająku</a>
	<li><a href="tagdata_editor_tdf_css.php">Edytor plików definicyjnych znaczników CSS</a>
	<li><a href="tagdata_editor_tdf.php">Edytor plików definicyjnych znaczników TDF</a>
	<li><a href="main_tabs_general.php">Inne zakładki</a>
	<li><a href="main_window_desc.php">Główne okno programu</a>
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
