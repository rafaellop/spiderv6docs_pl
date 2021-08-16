
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
<title>Narzędzia - Prosta korekta typograficzna</title>

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
<h1>Narzędzia - Prosta korekta typograficzna</h1>



<!-- treść pomocy -->

<p>Prosta korekta typograficzna służy do szybkiego sformatowania tekstu w taki sposób, by tekst prezentował się ładnie na stronie, a jego układ był jak najbardziej zgodny z zasadami typografii. Jest to realizowane za pomocą niełamliwych spacji &amp;nbsp; w stawianych w odpowiednich miejscach, co powoduje łączenie wyrazów w nierozdzielne pary, poprawiając tym samym układ tekstu na stronie.</p>

Narzędzie uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_spelling.php">Pisownia</a> / Korekta typograficzna. Ikona polecenia została pokazana obok.

<p>Okno zawiera na dwie zakładki:

<ul>
	<li>Źródło korekty</li>
	<li>Ustawienia korekty typograficznej</li>
</ul></p>


<h2>Źródło korekty</h2>

<p>W tej zakładce możesz ustawić zakres działania narzędzia:</p>

<ul>
	<li><b>Zaznaczony tekst</b></li>
	<li><b>Aktualny dokument</b></li>
	<li><b>Wszystkie otwarte</b> - wszystkie dokumenty otwarte aktualnie w Pająku</li>
	<li><b>Serwis WWW</b> - wybierz z listy serwis, którego dokumenty mają być poddane korekcie. Możesz określić za pomocą odpowiednich ustawień, czy uwzględniane mają być wyłącznie pliki HTML, bądź samodzielnie podać rozszerzenia nazw plików (w postaci np.: <tt>*.php;*.php3</tt>)</li>
	<li><b>Foldery</b> - korekcie poddane zostaną pliki zawarte w folderach umieszczonych na liście. Foldery możesz dodawać i usuwać za pomocą poleceń obok listy. Dodatkowo możesz określić typy plików, jakie mają zostac uwzględnione, a także, czy Pająk ma przeszukiwać wszystkie podfoldery umieszczone we wskazanych folderach.</li>
	<li><b>Pliki</b> - korekcie poddane zostaną pliki umieszczone na liście. Możesz je dodawać i usuwać za pomocą poleceń obok listy. </li>
</ul>

<p><b>Twórz kopie bezpieczeństwa (*.bak)</b><br />
Zaznacz tę opcję, by podczas przeprowadzania korekty tworzone były kopie bezpieczeństwa zapisywanych plików (ustawienie to dostępne jest tylko w przypadku wybrania jednego z zakresów: <b>Serwis WWW</b>, <b>Foldery</b>, <b>Pliki</b>). 

<p><b>Pomijaj tekst w tabelach</b><br />
Zaznacz tę opcję, by podczas przeprowadzania korekty pomijane były teksty umieszczone w tabeli. Jest to czasem konieczne, gdy tabele mają wąskie kolumny - w takim wypadku przeprowadzenie korekty mogłoby pogorszyć wizualny efekt. 


<h2>Ustawienia korekty typograficznej</h2>

<p>Opcje w tej sekcji umożliwiają zmianę ustawień korekty. Dzięki nim możesz zdefiniować, jakie fragmenty tekstu mają zostać poddane korekcie. Zaznaczenie odpowiednich opcji powoduje wstawienie po danym wyrażeniu niełamliwej spacji, dzięki czemu wyrażenie to będzie połączone z następnym wyrazem i w razie, gdyby miało być ostatnim elementem wiersza, zostanie przeniesione do wiersza następnego. </p>

<ul>
	<li><b>nie zostawiaj spójników na końcach linii</b></li>
	<li><b>nie zostawiaj skrótów na końcach linii</b></li>
	<li><b>nie zostawiaj cyfr i liczb porządkowych na końcach <b>linii</b></b></li>
	<li><b>nie zostawiaj pojedynczych liter na końcach linii</b></li>
	<li><b>nie zostawiaj nazw tytułów naukowych, zawodowych itp. na końcach linii</b></li>
	<li><b>nie zostawiaj skrótów przed nazwiskami, zwrotami grzeczn. itp. na końcach linii</b></li>
	<li><b>zamieniaj znaki typograficzne na encje</b> - zaznacz tę opcję, by narzędzie zamieniało na encje znaki typograficzne, które mogłyby zostać niewłaściwie wyświetlane na stronie, jak np. pauzy, półpauzy, cudzysłowy drukarskie (dolny/lewy i górny/prawy).</li>
	<li><b>usuwaj spacje pomiędzy wyrazami a znakami interpunkcyjnymi</b></li>
</ul>

<p><b>Nie zostawiaj na końcach linii wyrazów:</b><br />
Zaznacz tę opcję, aby podać wyrazy, jakich nie chcesz zostawiać na kocu linii (będą one przenoszone do nowej). Aby dodać słowo, wpisz je w polu poniżej, następnie kliknij polecenie <b>Dodanie wyrazu do listy</b> (plusik) z prawej strony listy. Aby usunąć, wybierz słowo na liście i kliknij <b>Usunięcie wybranego wyrazu</b> (minusik). Możesz też usunąć wszystkie słowa z listy za pomocą polecenia <b>Wyczyszczenie listy wyrazów</b>.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="charset_encoding.php">Zmiana kodowania znaków narodowych</a>
	<li><a href="spelling.php">Sprawdzanie poprawności pisowni</a>
	<li><a href="main_menu_main.php">Menu programu</a>
	<li><a href="toolbars_general.php">Inne narzędzia na paskach</a>
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