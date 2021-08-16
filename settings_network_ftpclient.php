
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Wbudowany klient FTP i WebDAV</title>

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
<h1>Ustawienia programu - Wbudowany klient FTP i WebDAV</h1>

<!-- treść pomocy -->
<p>
W tej kategorii znajdziesz ustawienia odpowiedzialne za ogólne funkcjonowanie wbudowanego w Pająka klienta FTP znajdującego się na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a> oraz <a href="down_publishing_ftpqueue.php">kolejki plików FTP i WebDAV</a> na dolnym panelu. Kategoria ta składa się z kilku grup ustawień. Oto one:

<h2>Lista plików na serwerze</h2>

<p>Ta grupa ustawień odpowiada za działanie listy plików i zakładki "Moje serwery". Znajdziesz tu opcje:

<p><b>Ukrywaj pliki kopii bezpieczeństwa BAK na liście plików FTP</b><br>
Zaznacz ten przełącznik jeśli chcesz, aby program ukrywał pliki kopii bezpieczeństwa (rozpoczynające się od <tt>bak.</tt>) i nie pokazywał ich na liście plików wyświetlającej zawartość serwera FTP.

<p><b>Przechowuj pliki informacji o dokumencie na serwerze FTP</b><br>
Zaznacz tę opcję jeśli chcesz, aby program przechowywał pliki informacji o dokumencie (używane kolorowanie, pozycja kursora, autor, etc) na serwerze FTP wraz z dokumentem, którego dany plik dotyczy.

<p><b>Usuwając pliki z serwera usuwaj także ich kopie zapasowe</b><br>
Zaznacz tę opcję jeśli chcesz, aby program podczas usuwania wybranych plików z serwera, usuwał również kopie zapasowe tych plików z rozszerzeniem BAK.

<p><b>Usuwaj katalogi z serwera FTP wraz z całą zawartością</b><br>
Zaznacz tę opcję jeśli chcesz, aby program pozwalał na usuwanie z serwera katalogów nawet jeśli są niepuste. Bądź ostrożny przy używaniu tej funkcji.

<p><b>Pokazuj rozmiar zdalnych plików w bajtach</b><br>
Zaznacz tę opcję jeśli chcesz, aby na liście plików zawartości serwera FTP, rozmiary plików były wyświetlane w bajtach zamiast kilobajtów.

<p><b>Wyświetlaj katalogi na liście plików</b><br>
Zaznacz tę opcję, aby spowodować wyświetlanie zdalnych katalogów na liście plików. Jeśli wyłączysz tę opcje, na liście plików będą wyświetlane wyłącznie pliki.</p>


<h2>Praca grupowa</h2>

<p>Pająk wspomaga pracę grupową nad serwisem umożliwiając blokowanie plików, nad którymi pracujesz. Dzięki temu Twoi współpracownicy będą wiedzieli, że danego pliku nie należy ruszać. W tej grupie znajdziesz trzy ustawienia wspólna dla serwerów FTP i WebDAV:</p>

<p><b>Wyłącz sprawdzanie blokady plików zdalnych</b><br />
Zaznacz tę opcję, aby program nie sprawdzał podczas modyfikacji plików, czy są one zablokowane. Dzięki temu liczba komend przesyłanych do serwerów jest mniejsza i publikacja może działać szybciej jednak tracisz kontrolę nad informacją o blokadzie plików przez innych użytkowników. Nie zaleca się korzystania z tej opcji (domyślnie jest wyłączona), jednak jej włączenie przyspiesza operacje przeprowadzane na serwerze (szczególnie przesyłanie dużej ilości niewielkich plików), co może mieć znaczenie w przypadku korzystania z powolnego łącza.

<p><b>Pytaj przed wykonywaniem operacji na zablokowanych plikach</b><br>
W wypadku gdy plik, na którym ma być wykonana operacja jest zablokowany, program pyta czy na pewno wykonać tę operację i jest to uzależnione od stanu tej opcji.

<p><b>Nie pytaj przed próbą nadgrania pliku zablokowanego przez samego siebie</b><br>
W wypadku gdy plik, na którym ma być wykonana operacja jest zablokowany, program pyta czy na pewno wykonać tę operację i jest to uzależnione od stanu tej opcji. Możesz oznaczyć ten przełącznik, aby program nie wyświetlał informacji o blokadzie dla zablokowanych plików, ale tylko tych, które zostały zablokowane przez ciebie.



<h2>Blokowanie dokumentów na serwerze FTP</h2>

<p>Pająk pozwala na blokowanie dokumentów, nad którymi pracujesz. Temat jest szerzej poruszony w opisie okienka <a href="main_tabs_myftpservers_lockfile.php">Blokowania dokumentów</a>. Tutaj znajdziesz kilka ustawień odpowiedzialnych za działanie tej funkcji:

<p><b>Nie pytaj o tekst komentarza przy blokowaniu plików</b><br>
Pliki, nad którymi pracujesz, możesz blokować, aby nikt inny nie mógł ich w tym czasie otworzyć. Kiedy ktoś będzie próbował otworzyć taki plik w Pająku wyświetlony mu zostanie tekst komentarza, o który zapytany zostaniesz w momencie nakładania blokady. Jeśli nie chcesz, aby program pytał o tekst tego komentarza, zaznacz tę opcję.

<p><b>Domyślny komentarz</b><br>
W tym miejscu możesz wprowadzić komunikat, który zostanie wyświetlony osobie próbującej otworzyć plik, który zablokowałeś.

<h2>Blokowanie dokumentów na serwerze WebDAV</h2>

<p><b>Nie pytaj o dodatkowe właściwości przy blokowaniu plików</b><br />
Zaznacz tę opcję, jeśli chcesz blokować pliki z domyślnymi ustawieniami. W przeciwnym wypadku zostaniesz poproszony o zaakceptowanie ustawień blokady 

<p><b>Blokuj zasoby na wyłączność</b><br />
Zaznacz tę opcję, by uniemożliwić jakąkolwiek ingerencję w zablokowany plik. Jeśli będzie odznaczone, blokada będzie miała wyłącznie charakter informacyjny

<p><b>Rekurencyjnie blokuj foldery</b><br />
Zaznacz tę opcję, jeśli w przypadku blokowania foldera, zablokowane mają być również wszystkie jego elementy (łącznie z podfolderami)

<p><b>Domyślny czas trwania blokady</b><br />
Wybierz z listy domyślny czas trwania blokady. Ustawienie to jest istotne, gdy nie ma zostać wyświetlane okienko z dodatkowymi ustawieniami.



<h2>Podtrzymywanie połączenia z serwerem</h2>

<p>Pająk potrafi podtrzymywać połączenie z serwerem FTP mimo rozłączania połączenia w przypadku nieaktywności, co często jest ustawione na serwerze. W tej grupie możesz włączyć podtrzymywanie i wybrać sposób w jaki będzie ono wykonywane:

<p><b>Podtrzymuj kontrolne połączenie z serwerem FTP</b><br>
Zazwyczaj serwery FTP rozłączają połączenie jeśli przez dłuższy czas nie jest wykonywana żadna operacja. Jeśli chcesz podtrzymywać połączenie, zaznacz tę opcję i wybierz metodę podtrzymania poniżej.

<p><b>Podtrzymuj kontrolne za pomocą polecenia</b><br>
Nie wszystkie serwery wspierają komendę NOOP podtrzymującą połączenie. Za pomocą tej listy możesz wybrać jaka komenda ma być uruchamiana dla podtrzymania połączenia. Jest to sposób na oszukanie serwerów bez obsługi NOOP.

<p><b>Podtrzymuj połączenie co określony czas</b><br>
Znajac czas przy którym serwer rozłącza bezczynne połączenie możesz ustalić tutaj krótszy okres czasu, po którym będzie wykonywana wybrana wyżej komenda podtrzymania połączenia. W ten sposób możesz podtrzymać połączenie tuż przed jego rozłączeniem.

<h2>Praca w trybie offline</h2>

<p>Pająk potrafi pracować z serwerami FTP nawet gdy nie ma aktywnego połączenia z siecią Internet. Ta unikalna funkcja opisana została w temacie poświęconym pracy w <a href="main_tabs_myftpservers_on-offline.php">trybach online i offline</a>. Tutaj znajdziesz kilka ustawień związanych z pracą w trybie offline:

<p><b>Przy braku połączenia pracuj w trybie offline</b><br>
Jeśli nie ma połączenia z serwerem program może pracować na tzw. cache, czyli zapisanej na dysku ostatniej reprezentacji zawartości serwera. Jeśli wyłączysz tę opcję, utracisz tę możliwość.

<p><b>Automatycznie połącz z serwerem gdy nie można wykonać operacji offline</b><br>
Zaznacz tę opcję jeśli chcesz, aby program automatycznie łączył się z serwerem, gdy pewnej funkcji nie można wykonać w trybie offline.

<p><b>Przycisk Wyczyść zawartość cache</b><br>
Kliknięcie tego przycisku powoduje wyczyszczenie pliku cache, w którym pamiętana jest zawartość serwera FTP i dzięki któremu możliwa jest praca na serwerze bez aktywnego połaczenia.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_network.html#settingslistnetwork">Inne ustawienia sieci</a>
	<li><a href="main_tabs_myftpservers.php">Zakładka Moje serwery</a>
	<li><a href="down_publishing_ftpqueue.php">Kolejka plików FTP</a>
	<li><a href="main_tabs_myftpservers_on-offline.php">Praca w trybie online i offline</a>
	<li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
	<li><a href="service_tool_synchronization.php">Synchronizacja serwisów</a>
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
