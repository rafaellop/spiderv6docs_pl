
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Rozszerzone wyszukiwanie i zamiana</title>

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
<h1>Rozszerzone wyszukiwanie i zamiana</h1>


<!-- treść pomocy -->

<p>Za pomocą narzędzia "Rozszerzone wyszukiwanie i zamiana" można wykonać trzy podstawowe typy operacji: wyszukiwanie i zamianę tekstu, konwersję znaków narodowych oraz uruchomić sprawdzanie poprawności pisowni. Można również określić zakres działania - od pojedynczego dokumentu, po cały serwis (lub nawet szerzej).</p>

<h2>Sposób działania</h2>

<p><b>Wyszukiwanie i zamiana tekstu</b> - pozwala na zaawansowane wyszukiwanie i zamianę tekstu w dokumentach.</p>

<p><b>Konwersja kodowania znaków</b><br />
Wybierz tę opcję, by zmienić w dokumentach stronę kodową używaną na wybraną z listy. Dzięki tej funkcji możliwa jest na przykład zmiana strony kodowania z używanej wyłącznie w MS Windows strony kodowej WINDOWS-CP-1250 na ISO-8859-2 (zgodny z normą ISO standard używany na pozostałych platformach).</p>
<p>Aby przeczytać więcej na temat konwersji kodowania znaków - <a href="charset_encoding.php">kliknij tutaj</a>.</p>

<p><b>Sprawdzanie pisowni</b><br />
Wybierz tę opcję, by przeprowadzić sprawdzenie pisowni.<br />
Aby przeczytać więcej na temat sprawdzania pisowni - <a href="spelling.php">kliknij tutaj</a>.</p>

<h2><a name="find_settings"></a>Sposób działania - Wyszukiwanie i zamiana tekstu</h2>

<p>Jeśli wybrana została opcja <b>Wyszukiwanie i zamiana tekstu</b> Możliwe jest ustawienie następujących opcji:</p> 

<p><b>Wyszukiwanie zwykłe</b><br />
Wyszukiwany tekst będzie tekst dokładnie w takiej postaci, w jakiej został wprowadzony.</p>


<p><a name="wildcards"></a><b>Używaj wildcards</b><br />
Wyszukiwany tekst może zawierać symbole wieloznacznych (tzw. wildcards), które zastępować będą odpowiednie znaki. Dostępne są następujące symbole:
<ul>
	<li><tt>*</tt> - zastępuje dowolny ciąg znaków (również pusty)</li>
	<li><tt>?</tt> - zastępuje dowolny znak</li>
	<li><tt>#</tt> - zastępuje dowolna cyfrę (<tt>od 0 do 9</tt>)</li>
	<li><tt>@</tt> - zastępuje dowolną literę (<tt>a-z, A-Z</tt>)</li>
	<li><tt>$</tt> - zastępuje dowolny znak alfanumeryczny (cyfra bądź litera)</li>
	<li><tt>~</tt> - zastępuje dowolny znak nie będący znakiem alfanumerycznym ani spacją</li>
</ul></p>

<p>Przykład użycia wildcards: aby znaleźć w dokumencie HTML wszystkie znaczniki otwierające i zamykające, należy wprowadzić tekst <tt>&lt;*&gt;</tt>.</p>

<p>Należy pamiętać, iż wyszukując ciąg określony wyrażeniem <tt>abc*</tt> wynikiem będzie ciąg <tt>abc</tt> i dowolny występujący po nim znak. Nie będą uwzględniane w wyniku wyszukiwanie dalsze znaki. Tak więc, w przypadku wyszukiwania wg. podanego wyrażenia w ciągu <tt>abcdefgh</tt>, znaleziona zostanie jedynie fraza <tt>abcd</tt>. </p>


<p><b>Używaj wyrażeń regularnych</b><br />
Wyszukiwany tekst może zawierać <a href="find_regexp.php">wyrażenia regularne</a> opisane szerzej w osobnym temacie.</p>

<p>Przykład użycia wyrażeń regularnych: aby znaleźć w dokumencie HTML wszystkie znaczniki otwierające nagłówek dowolnego stopnia (<tt>&lt;H1&gt; do &lt;H6&gt;</tt>), pisane wielkimi, bądź małymi literami, należy wprowadzić tekst <tt>&lt;[hH]\d&gt;</tt>.</p>
                                                                                                                                  
<p><b>Uwzględniaj wielkość liter</b><br />
Zaznacz, aby w wyszukiwanym tekście wielkość użytych liter miała znaczenie.</p>

<p><b>Uwzględniaj całe wyrazy</b><br />
Zaznacz, aby wyszukana fraza musiała być całym słowem, a nie fragmentem dłuższego słowa (np. szukając frazy 'mar' odszukane zostaną wszystkie słowa 'mar', ale nie 'marek').</p>

<p><b>Nie pokazuj wyników zamiany</b><br />
Zaznacz tę opcję, jeśli nie chcesz, by po wykonanej zamianie pokazywał się "Panel wyników" z <a href="down_find_report.php">raportem wyszukiwania i zamiany</a>.</p>

<a name="backups"></a>
<p><b>Twórz kopie bezpieczeństwa przy modyfikacji plików</b><br />
<p>Zaznacz tę opcję, jeśli podczas zmian w dokumentach otwieranych bezpośrednio z twardego dysku (opcje 'w wybranym serwisie', 'w folderach', lub 'w plikach' w sekcji Źródło) mają być tworzone <a href="main_editor_backups.php">kopie bezpieczeństwa</a> oryginalnych, nie zmienionych dokumentów. Dzięki tej opcji, w przypadku gdy zmiany będą inne od zamierzonych, możesz przywrócić oryginalne dokumenty.</p>

<p><b>Nie konwertuj przy wyszukiwaniu</b><br />
Zaznacz, aby przy wyszukiwaniu tekstu nie była przeprowadzana konwersja kodowania. Zaznaczenie tej opcji ta jest potrzebne w przypadku, gdy w przeszukiwanych dokumentach nie ma w sekcji HEAD oznaczenia kodowania, a jednocześnie nie ma być zmieniane kodowanie (np. dla plików dołączanych do innych dokumentów w skryptach serwer-side, np. za pomocą include w PHP).</p>
                                         

<p>Do wprowadzenia tekstów służy druga zakładka - "<a href="#find_change">Wyszukiwanie i zamiana</a>".</p>

<h2>Źródło</h2>

<p>Za pomocą ustawień w tej sekcji zakładki "Ustawienia wyszukiwania i zamiany" możliwe jest określenie zakresu działania narzędzia - od aktualnie edytowanego dokumentu, aż do ściśle określonych rodzajów dokumentów w wybranym Serwisie, folderach itd. W zależności od wybranego zakresu (źródła danych) dostępne są opcje:</p>

<p><b>w aktywnym dokumencie</b> - operacje będą przeprowadzane na dokumencie aktualnie otwartym w edytorze. Nie ma dodatkowych opcji.</p>

<p><b>we wszystkich otwartych</b> - operacje będą przeprowadzane na wszystkich dokumentach otwartych aktualnie w Pająku. Nie ma dodatkowych opcji.</p>

<p><b>w wybranym serwisie</b> - operacje będą wykonywane na wszystkich plikach <a href="services_general.php">Serwisu</a> wybranego z listy (przy czym pomijane są pliki i foldery <a href="service_properites.html#servicepropertiesoftenused">wyłączone z widoku w ustawieniach serwisu</a>. Można zawęzić rodzaje plików do:
	<ul>
		<li><b>dokumenty HTML</b> - pliki o rozszerzeniach określonych jako "dokumenty HTML" w oknie "Ustawienia programu" na zakładce "Lista plików"</li>
		<li><b>pliki:</b> - pole tekstowe umożliwia wpisanie rozszerzeń plików w celu zawężenia rodzajów dokumentów, jakie mają być brane pod uwagę. Rozszerzenia należy podawać w postaci np. <tt>*.php;*.php3;*.php4</tt>.</li>
		<li><b>Pomiń pliki/foldery przy wyszukiwaniu i zamianie</b> - do listy poniżej dodaj pliki, bądź foldery, które mają być pomijane przy wyszukiwaniu i zamianie w wybranym serwisie</li>
	</ul>
</p>



<p><b>w folderach</b> - operacje będą wykonywane na wszystkich plikach w folderach umieszczonych na liście. Listę folderów można edytować za pomocą przycisków z prawej strony.
	<ul>
		<li><b>Pliki z rozszerzeniem</b> - pole tekstowe umożliwia wpisanie rozszerzeń plików w celu zawężenia rodzajów dokumentów, jakie mają być brane pod uwagę. Rozszerzenia należy podawać w postaci np. <tt>*.php;*.php3;*.php4</tt>.</li>
		<li><b>łącznie z wszystkimi podfolderami</b> - zaznacz, aby rozszerzyć zakres operacji na pliki z wszystkich podfolderów w wybranych folderach</li>
		<li><b>Pomiń pliki przy wyszukiwaniu i zamianie</b> - do listy poniżej dodaj pliki, które mają być pomijane przy wyszukiwaniu i zamianie w wybranych folderach</li>
	</ul>
</p>

<p><b>w plikach</b> - operacje będą wykonywane na wszystkich plikach umieszczonych na liście. Listę plików można edytować za pomocą przycisków z prawej strony. </p></li>
</ul>

<h2><a name="find_change"></a>Wyszukiwania i zamiana</h2>

<p>Do wprowadzania tekstu służą dwa pola tekstowe:</p>

<p><b>Znajdź</b><br />
Pole służy do wprowadzenia szukanego tekstu. Jeśli w zakładce "<a href="#find_settings">Ustawienia wyszukiwania i zamiany</a>" zaznaczone są odpowiednie opcje, możliwe jest użycie "wildcards" lub wyrażeń regularnych.</p>

<p><b>Zamień na</b><br />
Pole służy do wprowadzenia tekstu, jaki ma zostać wstawiony w miejsce znalezionego, jeśli uruchomiona została "Zamiana"</p>

<p>Zawartość obu pól jest pamiętana przez program nawet po jego zamknięciu i ponownym otworzeniu.</p>

<p><a name="templates"></a><b>Szablony wyszukiwania</b><br />
Lista zawiera szablony wyszukiwania. Domyślnie dostępne są najczęściej używane, jak szablon adresu email itp.. Możesz dodawać i usuwać szablony za pomocą przycisków z prawej strony listy:
<ul>
	<li><b>Dodanie bieżącego szablonu wyszukiwania</b> - kliknij, aby utworzyć z tekstu w polu "Znajdź" nowy szablom wyszukiwania.</li>
	<li><b>Usunięcie szablonu wyszukiwania</b> - kliknij, aby usunąć z listy wybrany szablon wyszukiwania</li>
</ul>


<p>Aby ułatwić korzystanie z zamiany tekstu, możesz skorzystać z menu nad polem "Zamień na":

<ul>   
   <li><a name="variables"></a><p><b>Wstawienie zmiennej...</b> - kliknij i wybierz z menu zmienną, jakiej chcesz użyć. Po wybraniu zmiennej, w polu "Zamień na" wstawiony zostanie jej symbol, który podczas zostaną podczas działania funkcji na odpowiednią, wybraną wartość:</p>
        <ul>
             <li><b>Nazwa pliku bez ścieżki dostępu</b>: (zmienna <tt>%paj_filename%</tt>) wstawia nazwę pliku, w którym dokonywana jest zamiana,</li>
             <li><b>Nazwa pliku ze ścieżką dostępu</b>:  (zmienna <tt>%paj_filefullpath%</tt>) wstawia ścieżkę dostępu i nazwę pliku, w którym dokonywana jest zamiana,</li>
             <li><b>Ścieżka dostępu bez nazwy pliku</b>: (zmienna <tt>%paj_filepath%</tt>) wstawia ścieżkę dostępu do pliku, w którym dokonywana jest zamiana,</li>
             <li><b>Nazwa pliku ze ścieżką względną (tylko serwis WWW)</b>: (zmienna <tt>%paj_filerelfullpath%</tt>) wstawia ścieżkę dostępu (względem głównego katalogu serwisu) i nazwę pliku, w którym dokonywana jest zamiana,</li>
             <li><b>Ścieżka względna pliku w serwisie WWW</b>: (zmienna <tt>%paj_filerelpath%</tt>) wstawia ścieżkę dostępu (względem głównego katalogu serwisu) do pliku, w którym dokonywana jest zamiana,</li>
             <li><b>Data i czas modyfikacji dokumentu</b>: (zmienna <tt>%paj_filedatetime%</tt>) wstawia datę i czas ostatniego zapisu dokumentu, w którym dokonywana jest zamiana (w formacie RRRR-MM-DD GG-MM-SS),</li>
             <li><b>Status dokumentu</b>: (zmienna <tt>%paj_filestatus%</tt>) wstawia status dokumentu, w którym dokonywana jest zamiana (status dokumentu można ustawić w oknie "Informacje o dokumencie")</li>
             <li><b>Komentarz pliku</b>: (zmienna <tt>%paj_filecomment%</tt>) wstawia komentarz dokumentu, w którym dokonywana jest zamiana (komentarz dokumentu można podać w oknie "Informacje o dokumencie")</li>
             <li><b>Ostatni autor pliku</b>: (zmienna <tt>%paj_filelastmodifiedby%</tt>) wstawia nazwę użytkownika, który jako ostatni zapisał dokument,</li>
             <li><b>Bieżąca data</b>: (zmienna <tt>%paj_date%</tt>) wstawia bieżąca datę (w formacie <tt>RRRR-MM-DD</tt>)</li>
             <li><b>Bieżący czas</b>: (zmienna <tt>%paj_time%</tt>) wstawia bieżący czas (w formacie <tt>GG-MM-SS</tt>)</li>
             <li><b>Bieżąca data i czas</b>: (zmienna <tt>%paj_datetime%</tt>) wstawia bieżąca datę i czas (w formacie <tt>RRRR-MM-DD GG-MM-SS</tt>)</li>
        </ul>
   </li>
   <li><p><b>Włączenia wyświetlania znaków specjalnych</b> - kliknij aby włączyć lub wyłączyć wyświetlania znaków specjalnych, jak znak końca wiersza itp.</p></li>
   <li><p><b>Włączenia zawijania wierszy</b> - kliknij aby włączyć lub wyłączyć zawijanie wierszy.</p></li>
   <li><p><b>Skopiowanie tekstu z pola "Znajdź" do "Zamień na"</b> - kliknij aby skopiować tekst z pola "Znajdź" do "Zamień na". Funkcja ta jest bardzo przydatna, gdy w schowku jest inny, potrzebny tekst.</p></li>
   <li><p><b>Zamiana tekstu między polami "Znajdź" i "Zamień na"</b> - kliknij aby zamienić ze sobą zawartość pól "Znajdź" i "Zamień na".</p></li>
   <li><p><b>Wyczyść tekst z wybranego pola</b> - kliknij aby rozwinąć podmenu zawierające polecenia wyczyszczenia zawartości pola 'Znajdź', 'Zamień na', bądź obu tych pól.</p></li>
</ul>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="find.php">Wyszukiwanie w Pająku</a>
	<li><a href="find_text.php">Wyszukiwanie, zamiana, przenoszenie do wybranych elementów dokumentu</a>
	<li><a href="down_find_report.php">Okno "Raport wyszukiwania"</a>
	<li><a href="find_regexp.php">Wyszukiwanie - wyrażenia regularne</a>
	<li><a href="spelling.php">Sprawdzanie pisowni</a>
	<li><a href="charset_encoding.php">Konwersja znaków narodowych</a>
	<li><a href="main_menu_find.php">Menu Szukaj</a>
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
