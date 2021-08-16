
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Właściwości serwera FTP</title>

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
<h1>Właściwości serwera FTP i WebDAV</h1>

<!-- treść pomocy -->
<p>To okno służy zarówno do określania parametrów nowego, dodawanego dopiero serwera jak i do modyfikacji ustawień istniejącego serwera FTP i WebDAV. Możesz je wyświetlić dodając lub modyfikując ustawienia wybranego serwera w oknie <a href="settings_network_ftpservers.php">Ustawienia serwerów FTP i WebDAV</a>.

<p>W okienku są dostępne dwie zakładki: "Właściwości serwera" oraz "Ustawienia mapowania"przy czym druga z nich jest jednak nieaktywna podczas edycji ustawień serwera WebDAV. Wynika to z faktu, że adres serwera WebDAV jest dokładnie tym samym adresem, którego należy użyć do przeglądania dokumentów przez przeglądarkę (protokół WebDAV jest jedynie rozszerzeniem protokołu HTTP używanego do przeglądania stron WWW).

<br><br>
<h2>Właściwości serwera</h2>

<p>Na zakładce Właściwości serwera definiujesz parametry serwera FTP, do którego chcesz mieć dostęp w Pająku. Serwery FTP to zazwyczaj serwery, na które wgrywasz pliki swojego serwisu internetowego, aby udostępnić je w sieci.

<p><b>Dane potrzebne do skonfigurowania serwera na tej zakładce uzyskasz od usługodawcy internetowego, z którego usług korzystasz. Są one również podawane przy zakładaniu konta na stronę WWW.</b>

<p>Aby skonfigurować serwer FTP do wykorzystania w Pająku na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>, w funkcjach synchronizacji czy publikacji musisz podać następujące dane w odpowiednich polach:

<p><b>Przyjazna nazwa</b><br>
W tym polu wpisz nazwę, która będzie identyfikować serwer FTP na liście serwerów. Wartość ta ma znaczenie tylko informacyjne i może być dowolna.

<p><b>Adres serwera</b><br>
Tutaj wpisz adres serwera FTP, który dodajesz do listy. Użyj adresu otrzymanego od administratora Twojego konta.

<p><b>Nazwa użytkownika</b><br>
Tutaj wprowadź nazwę użytkownika, czyli inaczej nazwę konta, do którego posiadasz uprawnienia i z którym chcesz się łączyć na tym serwerze.

<p><b>Hasło dostępu</b><br>
To jest miejsce na hasło dostępu do konta. Wpisz je bardzo uważnie, gdyż jest ono podczas wpisywania ukryte.

<p><b>Folder nadrzędny</b><br>
	To pole nie musi być wypełniane, ale możesz podać tutaj ścieżkę do folderu na zdalnym serwerze, który ma być wyświetlany jako element nadrzędny drzewa folderów. Jest to ustawienie przydatne szczególnie w przypadku wielokrotnych zagnieżdżeń folderów. Aby jeszcze łatwiej wskazać folder nadrzędny, możesz skorzystać z poleceń umieszczonych obok drzewa folderów <a href="main_tabs_myftpservers.php#tree">Zakładki "Moje serwery"</a>.

<p><b>Folder startowy</b><br>
To pole nie musi być wypełniane, ale możesz podać tutaj ścieżkę do folderu na zdalnym serwerze, do którego ma się przełączyć Pająk zaraz po podłączeniu.

<p><b>Grupa serwerów</b><br />
W tym miejscu możesz wpisać nazwę grupy, do jakiej ma należeć serwer. Grupy serweró wyświetlane są na początku listy w zakładce "Moje serwery". Dzięki tej możliwości można łatwiej odnaleźć odpowiedni serwer na liście, co jest szczególnie istotne podczas pracy nad wieloma różnymi projektami.

<p><b>Numer portu serwera</b><br>
To jest miejsce na podanie portu, na którym działa serwer FTP. Najczęściej jest to podany port numer 21, jednakże wartość ta zależy od konfiguracji serwera. Jeśli podasz nieprawidłowy port, połączenie nie będzie mogło być zrealizowane.

<p><b>Zabezpieczenie</b><br />
Jeśli chcesz użyć dla tego serwera bezpiecznego połączenia, wybierz jego rodzaj z listy obok. Więcej na ten temat czytaj niżej.

<p><b>Usunięcie zawartości cache offline dla tego serwera</b><br>
Pająk pozwala na pracę na serwerze FTP, a przynajmniej przeglądanie jego zawartości za pomocą tzw. <i>cache offline</i>, czyli specjalnego pliku, który pamięta zawartość serwera FTP i pozwala na jego przeglądanie na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a> również bez aktywnego połączenia internetowego. Tym przyciskiem możesz skasować zawartość tej pamięci, jeśli akurat masz takie życzenie. Praca w <a href="main_tabs_myftpservers_on-offline.php">trybie online i offline</a> została opisana w osobnym rozdziale.

<p><b>Komenda LIST</b><br />
Niektóre, niepoprawnie skonfigurowane, serwery nie przesyłają listingu zawartości zdalnego katalogu po komendzie LIST zgodnej z RFC. Przykładowo mogą nie wysyłać one informacji o plikach ukrytych, czyli tych zaczynających się od kropki (np. .htaccess). Dzięki tej opji możesz wybrać komendę, która będzie wysyłana do serwera, aby obejść problem z jego konfiguracją. Jeśli nie widzisz plików .htaccess na swoim serwerze wybierz listowanie za pomocą komendy LIST -aL lub skonsultuj się z administratorem swojego serwera.

<p><b>Używaj BIN do LIST</b><br />
Zaznacz, jeśli Twój serwer wymaga trybu binarnego do pobierania zawartości katalogu.


<p><b>Rozróżniaj wielkość liter na serwerze</b><br>
Zaznacz ten przełącznik jeśli chcesz, aby podczas przesyłania plików na serwer i pobierania ich z serwera (np. przez narzędzia <a href="service_tool_synchronization.php">automatycznej synchronizacji serwisów</a>) rozróżniana była wielkość liter. Ma to szczególne znaczenie w przypadku korzystania z serwerów linuksowych.

<p><b>Zmieniaj nazwy na małe litery</b><br>
Zaznacz ten przełącznik jeśli chcesz, aby podczas przesyłania plików na serwer program automatycznie zmieniał ich nazwy na pisane małymi literami.

<p><b>Łącz z serwerem FTP w trybie pasywnym</b><br>
Na samym dole ustawień znajduje się przełącznik, który odpowiada za sposób łączenia z użyciem protokołu FTP. Zaznacz ten przełącznik, jeśli chcesz, aby program zawsze łączył się z serwerami FTP w trybie pasywnym. Jeśli nie wiesz czy należy go ustawić, skonsultuj się ze swoim administratorem sieci.

<p><b>Wyrównanie różnicy czasu przy synchronizacji</b><br>
Wprowadź liczbę dodatkowych minut różnicy czasu przy porównywaniu czasów między komputerem lokalnym, a serwerem podczas tworzenia listy plików przeznaczonych do synchronizacji. Pozwoli to wyrównać czas zapisu pliku w sytuacji, gdy niepoprawnie obliczana jest ta różnica automatycznie.


<a name="secureconnections"></a>
<h2>Obsługa bezpiecznego połączenia</h2>

<p>W celu ochrony danych, które przesyłasz między serwerem, a lokalnym komputerem, Pająk został wyposażony w funkcje obsługujące bezpieczne, szyfrowane połączenia. Są one dostępne zarówno dla serwerów FTP (SSL/TLS), jak i WebDAV (HTTPS).</p>

<p><b>Uwaga! Stany Zjednoczone oraz inne Państwa nakładają ograniczenia eksportowe na technologię SSL służącą do szyfrowania danych. Ponieważ nie posiadamy kontroli nad tym skąd nasze oprogramowanie jest pobierane, nie chcemy dystrybuować kodu SSL w postaci bibliotek DLL wraz z naszym oprogramowaniem. <br /><br />
Umożliwiamy korzystanie z technologii SSL, ale nie licencjonujemy jej. Jeśli zdecydujesz się na używanie SSL upewnij się, że masz prawo do wykorzystania SSL w kraju, w którym się znajdujesz.<br /></b>
</p>

<p>Autorami bibliotek DLL z których korzysta Pająk oferując wsparcie dla SSL są:<br />
libeay32.dll - Eric Young (eay@cryptsoft.com)<br />
ssleay32.dll - Tim J. Hudson (tjh@cryptsoft.com)<br />
</p>

<p><b>Bezpieczne połączenie dla serwerów FTP</b><br />

<p>Aby dane były przesyłane w postaci bezpiecznej, należy wybrać odpowiednią pozycję z wymienionej wyżej listy "Zabezpieczenie". Dla serwerów FTP dostępne są trzy możliwości:</p>

<ul>
	<li><b>nie używaj bezpiecznego połączenia</b> - dane będą przesyłane w normalnej, niezaszyfrowanej postaci.</li>
	<li><b>połącz i przejdź na bezpieczne połączenie</b> - połączenie z serwerem odbędzie się normalnie, następnie nastąpi przejście w tryb bezpieczny, w którym dopiero przesyłane będą informacje takie jak nazwa i hasło użytkownika itd.</li>
	<li><b>wymuś użycie bezpiecznego połączenia</b> - połączenie z serwerem od początku będzie  odbywać się w postaci bezpiecznej. Opcja ta powinna być wybrana tylko i wyłącznie w sytuacji, gdy połączenie kontrolne serwera wymusza nawiązanie bezpiecznego połączenia jeszcze przed rozpoczęciem sesji FTP (zwykle wiąże się to z wykorzystaniem portu 990). </li>
</ul>

<p><b>Szyfruj również przesyłane dane</b><br />
Zaznacz ten przełącznik, jeśli dane, które przesyłasz między serwerem a lokalnym komputerem są poufne. W przeciwnym wypadku zaleca się wyłączenie tej opcji, gdyż szyfrowanie wszystkich danych niepotrzebnie zużywa zasoby systemowe zarówno Twojego komputera, jak i serwera. Oczywiście w każdym wypadku szyfrowane będą dane takie jak nazwa użytkownika, czy hasło (wynika to z budowy protokołu FTP)


<p><b>Bezpieczne połączenie dla serwerów WebDAV</b><br />

<p>W przypadku serwera WebDAV dostępne są tylko dwie możliwości - włączenie, bądź wyłączenie trybu bezpiecznego.</p>

<p><b>Szyfruj również przesyłane dane</b><br />
Przełącznik ten jest w przypadku serwera WebDAV nieaktywny - dane zawsze będą szyfrowane i nie można tego wyłączyć.

<a name="mapping"></a>
<h2>Ustawienia mapowania</h2>




<p>Ta zakładka przeznaczona jest dla bardziej zaawansowanych użytkowników. Pozwala ona na ustalenie tzw. mapowania czyli przypisania folderu na serwerze FTP na adres <tt>http</tt>, pod którym ten folder jest widoczny w sieci Internet jako strona WWW. Funkcje mapowań są przydatne np. w sytuacji gdy chcesz edytować dokumenty bezpośrednio z serwera FTP i mieć możliwość ich poprawnego podglądu.

<p>Na tej zakładce znajdziesz listę oraz zestaw przycisków pozwalający na zarządzanie listą mapowań. Lista umożliwia zdefiniowanie mapowań folderu na serwerze zdalnym na adres HTTP, który będzie używany np. przy podglądzie dokumentów otwieranych do edycji bezpośrednio z serwera FTP. Aby dodać mapowanie kliknij przycisk oznaczony plusikiem. Otworzy się okno <a href="settings_network_ftpservers_add_map.php">Ustawienia mapowania</a>, w którym będziesz mógł określić parametry mapowania.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_network_ftpservers.php">Ustawienia serwerów </a>
	<li><a href="settings_network_ftpservers_add_map.php">Ustawienia mapowania</a>
	<li><a href="main_tabs_myftpservers_on-offline.php">Praca z serwerem w trybie offline i online</a>
	<li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
	<li><a href="main_tabs_myftpservers.php">Zakładka Moje serwery</a>
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
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

</body>
</html>