
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Kreator eksportu z bazy danych</title>

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
<h1>Narzędzia - Kreator eksportu z bazy danych</h1>



<p>Ten kreator umożliwia szybkie wyeksportowanie danych z bazy danych do pliku. 

<p>Narzędzie posiada przyjazny interfejs, który prowadzi za rękę przez wszystkie etapy eksportowania danych.

<p>Każdy krok to osobna plansza. Po planszach możesz poruszać się za pomocą przycisków <b>Dalej</b> i <b>Wstecz</b>. nie wszystkie plansze będą zawsze widoczne - zależy to od wybranych opcji, a także sposobu uruchomienia kreatora.


<h2>Uruchamianie</h2>

<p> Kreator możesz uruchomić poleceniami w menu podręcznego dwóch elementów drzewka zakładki <a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a> (ikona polecenia pokazana została obok):

<p><b>Nazwa bazy danych - Eksportuj zawartość</b><br />
Uruchamia kreator z ustawieniami wstępnymi odpowiednimi do eksportu zawartości bieżącej bazy danych. Wyświetlona zostanie od razu plansza <a href="#wybor_wielu_tabel">wyboru tabel do wyeksportowania</a>.

<p><b>Nazwa tabeli - Eksportuj zawartość</b><br />
Uruchamia kreator z ustawieniami wstępnymi odpowiednimi do eksportu zawartości wybranej tabeli. Wyświetlona zostanie pierwsza plansza (patrz niżej) z ustawionym domyślnie eksportem klikniętej tabeli.


<a name="wybor_zakresu_danych"></a>
<h2>Zakres danych do eksportu</h2>

<p>Pierwsza plansza Kreatora umożliwia wybór jednej, lub więcej tabel, z których mają dane mają zostać wyeksportowane, bądź wprowadzenie zapytania, króre będzie wykonane w celu pobrania danych z bazy.</p>
<p>W przypadku, gdy Kreator został uruchomiony dla eksportu całej  bazy danych (z menu kontekstowego gałęzi "Nazwa bazy danych"), plansza ta zostanie pominięta. Można jednak do niej przejść wciskając klawisz 'Wstecz'.</p>

Wybierając odpowiednią opcję, wybierz, co chcesz wyeksportować:

<p><b>Pojedynczą tabelę</b><br />
Zaznacz tę opcję, by uaktywnić listę rozwijaną w celu wybrania tabeli, której całą zawartość chcesz wyeksportować. Na następnej planszy będzie można obejrzeć wyniki zapytania w postaci tabelki.

<p><b>Kilka tabel, bądź całą bazę danych</b><br />
Zaznacz tę opcję, by na następnej planszy móc wybrać jedną, bądź więcej tabel do eksportu danych. 

<p><b>Wynik działania zapytania</b><br />
Zaznacz tę opcję, by uaktywnić pole do wprowadzenie własnego zapytania. Na następnej planszy będzie można podejrzeć wyniki. Z prawej strony pola tekstowego znajdują się przyciski:

<ul>
	<li><b>Kreator zapytania SQL</b><br />Uruchamia <a href="tool_mysql_query_creator.php">Kreatora zapytania SQL</a> w celu ułatwienia zbudowania prostego zapytania pobierającego dane z nie więcej niż jednej tabeli.</li>
	<li><b>Pobierz polecenie z bieżącego dokumentu</b><br />Pozwala na odczytanie i wprowadzenie do pola tekstowego obok zapytania z bieżącego dokumentu w edytorze.</li>
	<li><b>Pobierz polecenie z pliku</b><br />Pozwala na odczytanie i wprowadzenie do pola tekstowego obok zapytania z pliku SQL zapisanego na dysku.</li>
	<li><b>Ulubione zapytania SQL</b><br />Wyświetla listę <a href="main_tabs_inspector_mysql.php#ulubione">Ulubionych zapytań SQL</a> w celu wyboru zapytania, które chcesz wykonać.</li>
</ul>

<a name="wybor_wielu_tabel"></a>
<h2>Wybór tabel do wyeksportowania</h2>

<p>Plansza "Wybór tabel do wyeksportowania" zostanie wyświetlona w dwóch przypadkach:</p>
<ul>
	<li>gdy wybierzesz na pierwszej planszy opcję eksportu kilku tabel, bądź całej bazy danych, </li>
	<li>gdy uruchomisz Kreator dla eksportu całej bazy danych (z menu kontekstowego dla gałęzi "<a href="main_tabs_inspector_mysql.php#dbtree_dbname">Nazwa bazy danych</a>" drzewka na zakładce <a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a>)</li>
</ul>

<p>Większą część zajmuje lista tabel bieżącej bazy danych. Wybierz z nich jedną, lub więcej. Jeśli chcesz zaznaczyć, bądź odznaczyć wszystkie tabele, skorzystaj z przycisków umieszczonych poniżej. Poniżej listy znajdziesz tez informację, ile tabel jest zaznaczonych. Musisz wybrać przynajmniej jedną tabelę, aby przejść dalej.</p>




<h2>Podgląd wyeksportowanych danych</h2>

<p>Plansza "Podgląd wyeksportowanych danych" zostanie wyświetlona wyłącznie w przypadku wybrania na pierwszej planszy opcji eksportu Pojedynczej tabeli (opcja pierwsza), bądź wykonania własnego zapytania SQL wprowadzonego do pola tekstowego (opcja trzecia). </p>

<p>Ma ona charakter wyłącznie informacyjny - wyświetla inspektora, który jest wypełniony danymi przeznaczonymi do eksportu. Jeśli wynik Cię zadowala, możesz kliknąć <b>Dalej</b> w celu przejścia do kolejnej planszy, na której wybierzesz format, do jakiego dane będą wyeksportowane.</p>



<h2>Wybór formatu</h2>

Kolejna plansza umożliwia wybór formatu, do jakiego zostana wyeksportowane dane z bazy. Dostępne są następujące możliwości:

<ul>
	<li><b>HTML</b> - Dane zostaną wyeksportowane do postaci dokumentów HTML, gdzie dane będą umieszczone w tabelce, której pierwszy wiersz będzie nagłówkiem zawierającym nazwy pól..</li>
	<li><b>XML</b> - Dane zostaną wyeksportowane do postaci dokumentów XML w postaci jak np.:
<pre>&lt;nazwa_tabeli&gt;
 &lt;row&gt;
    &lt;pole_1&gt;wartosc 1_1&lt;/pole_1&gt;
    &lt;pole_2&gt;wartosc 1_2&lt;/pole_2&gt;
    &lt;pole_3&gt;wartosc 1_3&lt;/pole_3&gt;
  &lt;/row&gt;
  &lt;row&gt;
    &lt;pole_1&gt;wartosc 2_1&lt;/pole_1&gt;
    &lt;pole_2&gt;wartosc 2_2&lt;/pole_2&gt;
    &lt;pole_3&gt;wartosc 2_3&lt;/pole_3&gt;
  &lt;/row&gt;
&lt;/nazwa_tabeli&gt;</pre>
	</li>
	<li><b>CSV</b> - Dane zostaną wyeksportowane do postaci plików CSV (pola oddzielane średnikami), gdzie w pierwszym wierszu znajda się nazwy pól tabeli, w kolejnych zaś wierszach znajdą się dane.</li>
	<li><b>RTF (Rich Text Format)</b> - Dane zostaną wyeksportowane do postaci dokumentów RTF, zawierających tabelkę z danymi. Pierwszy wiersz będzie nagłówkiem, zaś kolejne wiersze z danymi będą posiadały naprzemiennie białe i jasnoszare tło w celu łatwiejszej orientacji. </li>
	<li><b>MS Excel</b> - Dane zostana wyeksportowane do postaci dokumentu MS Excel.</li>
   <li><b>polecenia SQL INSERT</b> - Dane zostana wyeksportowane do postaci pliku zawierającego polecenia SQL, co umożliwia późniejsze zaimportowanie ich spowrotem do bazy danych. Dodatkowo możesz wybrać opcje:
	<ul>
      <li><b>uwzględniaj polecenie tworzenia tabel (<tt>CREATE TABLE</tt>)</b><br />Zaznacz ten przełącznik, jeśli chcesz, by generowane były polecenia tworzenia eksportowanych tabel</li>
      <li><b>uwzględniaj polecenie usunięcia tabeli (<tt>DROP TABLE IF EXISTS</tt>)</b><br />Zaznacz ten przełącznik, jeśli chcesz, by przed poleceniem utworzenia tabeli o danej nazwie wystąpiło polecenie jej usunięcia. Jest szczególnie ważne, gdy dane z ekportowanego właśnie pliku w późniejszym czasie będą importowane do bazy, w której tabele o takich nazwach mogą już istnieć. Dzięki temu uniknie się błędu próby utworzenia tabeli o tej samej nazwie.</li>
      <li><b>Uwzględniając polecenie wstawienia danych do tabeli (INSERT INTO)</b>Zaznacz ten przełącznik, jeśli chcesz, by narzędzie wyeksportowało pobrane dane do formatu SQL (co umożliwi ich późniejsze zaimportowanie do bazy danych)</li>
      <ul>
         <li><b>użyj REPLACE zamiast INSERT</b> - Jeśli włączysz tę opcję, w wynikowym pliku SQL użyte będą polecenia REPLACE zamiast INSERT.
         <li><b>użyj INSERT z IGNORE</b> - Jeśli włączysz tę opcję, w poleceniach INSERT znajdzie się dodatkowe polecenie IGNORE, dzięki któremu można obejść problem importowania już obecnych w tabeli rekordów. Są one ignorowane.
         <li><b>polecenia INSERT/REPLACE bez nazw pól</b> - Jeśli włączysz tę opcję, w poleceniach INSERT lub REPLACE nie będą się znajdować nazwy pól, dzięki czemu wynikowy plik SQL może być znacznie mniejszy (szczególnie w przypadku dużej liczby rekordów).
      </ul>
	</ul></li>
</ul>



<h2>Wybór celu eksportu</h2>

<p>Ostatnia plansza zawiera opcje umożliwiające określenia miejsca docelowego dla eksportowanych danych. Może to być plik zapisany na dysku, eksport do schowka, bądź do dokumentu w edytorze. Nie wszystkie opcje zawsze będą dostępne. Przykładowo w sytuacji, gdy eksportujesz dane z wielu tabel do formatu HTML, jedyna możliwością będzie zapisanie ich na dysku (co jest logiczne, gdyż np. plik w formacie RTF nie może być bezpośrednio edytowany w Pająku, więc można go wyłącznie zapisać na dysku).</p>

<p>Dostępne są następujące możliwości:</p>

<p><b>Eksportuj do pliku</b><br />
Zaznacz tę opcję, by zapisać gotowy plik na dysku. Jeśli eksportujesz dane z jednej tabeli, bądź pochodzące z własnego zapytania, wprowadź ścieżkę dostępu i nazwę pliku docelowego. W przypadku eksportu z wielu tabel, wprowadź ścieżkę dostępu i szablon nazwy pliku, przy czym możesz używać symbolu gwiazdki (<tt>*</tt>), który podczas zapisu pliku na dysk zostanie zastąpiony nazwę eksportowanej tabeli. Dla ułatwienia możesz skorzystać z przycisku umieszczonego obok pola, który otwiera okienko dialogowe do wskazywania ścieżki i nazwy pliku. po zaznaczeniu odpowiedniej opcji umieszczonej poniżej, nowo utworzony dokument może zostać otwarty w Pająku do edycji.

<p><b>Eksportuj do schowka</b><br />
Zaznacz tę opcję, by eksportowane dane w wybranym formacie umieszczone zostały w schowku Windows w celu ich późniejszego wykorzystania. Ta opcja nie jest dostępna w przypadku eksportu z wielu tabel.

<p><b>Eksportuj do edytora</b><br />
Zaznacz tę opcję, by eksportowane dane w wybranym formacie wkleić do edytora. Dostępne są dwie możliwości:
<ul>
	<li><b>utwórz nowy dokument</b> - zostanie utworzony nowy dokument, do którego zostaną wyeksportowane dane. Dodatkowo domyślnie zastosowany zostanie do tego dokumentu schemat kolorowania, dobrany odpowiednio do wybranego wcześniej formatu danych.</li>
	<li><b>wstaw w miejscu kursora</b> - spowoduje wklejenie danych w bieżącym dokumencie w pozycji kursora (ta opcja nie jest dostępna w przypadku eksportu z wielu tabel).</li>
</ul>


<p><b>Dołącz arkusz CSS</b><br />
Do eksportowanego pliku w formacie HTML (ta opcja dostępna jest wyłącznie dla eksportu w formacie HTML) możesz dołączyć arkusz stylów CSS. W tym celu wprowadź w tym polu ścieżkę dostępu do pliku ze stylami.  Dla ułatwienia możesz skorzystać z okna dialogowego otwieranego przyciskiem umieszczonym obok.


<h2>Zakończenie pracy</h2>

<p>Po ustawieniu wszystkich opcji ostatnią czynnością jest kliknięcie przycisku <b>Zakończ</b>. Dane zostaną wyeksportowane, zaś kreator zakończy działanie.</p>


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
	<li><a href="tool_mysql_query.php">Wykonaj zapytanie SQL</a></li>
	<li><a href="tool_mysql_query_creator.php">Kreator zapytania SQL</a></li>
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
