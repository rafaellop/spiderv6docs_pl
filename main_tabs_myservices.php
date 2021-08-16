
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Zakładka "Moje serwisy"</title>

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
<h1>Zakładka "Moje serwisy"</h1>




<p>Zakładka "Moje serwisy" służy do pracy z plikami i folderami znajdującymi się na dysku lokalnym. Za pomocą tej zakładki możesz również tworzyć <a href="services_general.php">serwisy</a> i przełączać się między nimi. Widzisz tutaj swoje foldery, pliki, możesz je otwierać, zmieniać nazwy, tworzyć nowe i wiele innych.

<p>Zakładkę Moje serwisy włączysz za pomocą panelu po lewej lub skrótu klawiszowego CTRL+1, a także z menu pod przyciskiem pokazanym powyżej czy z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_view.php">Wyświetl</a>.

<p class="czerwony"> możesz zdefiniować ustawienia tylko jednego serwisu.</p>

<p>W odróżnieniu od zakładki Moje serwisy, zakładka <a href="main_tabs_myftpservers.php">Moje serwery</a> służy do operacji na zdalnych plikach na serwerach FTP.

<h2>Zawartość - Sterowanie serwisami</h2>

<p>W górnej części zakładki Moje serwisy, obok drzewa folderów, znajdziesz zestaw przycisków związanych z <a href="services_general.php">serwisami</a>. Za pomocą tych przycisków możesz tworzyć nowe serwisy, przeglądać własności wybranego serwisu, itd. Zestaw przycisków znajdujący się tutaj jest identyczny z <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_services.php">Serwisy</a> i tam znajdziesz opis działania znajdujących się tutaj poleceń.

<p>Powyżej drzewa folderów znajduje się lista serwisów. Jeśli zaczynasz pracę z Pająkiem, lista ta zawiera tylko jedną pozycję o nazwie "Lista plików". Pozwala ona na włączenie widoku listy plików i katalogów na drzewku i liście plików poniżej dla całego komputera.<br>
Jeśli jednak stworzysz jakieś serwisy za pomocą przycisków powyżej, na tej liście znajdziesz spis stworzonych serwisów. Wybranie serwisu ogranicza widok na drzewku folderów i liście plików tylko do zawartości folderu, który jest jednocześnie folderem startowym serwisu. Dzięki temu możesz ograniczyć się do pracy tylko na tych folderach i plikach, które wchodzą w skład bieżącego serwisu.


<p>Ikona obok nazwy serwisu określa dodatkowo:

<ul>
   <li> - Lista plików
   <li> - Normalny serwis
   <li> - Serwis będący jednocześnie <a href="tool_htmlhelp_general.php">projektem HTML Help</a>
</ul>

<p>Ponadto istnieje możliwość przywracania ostatnio otwartych plików dla każdego serwisu z osobna. Odpowiednie opcje znajdziesz w oknie <a href="settings_startup.php">Ustawienia programu / Przy starcie</a>.

<h3>Grupowanie serwisów</h3>
<p>Istnieje możliwość grupowania serwisów. Grupy umieszczone są na liście powyżej serwisów niezgrupowanych. Kliknięcie na nazwę grupy rozwinie listę zebranych w niej serwisów. Jest to szczególnie przydatne podczas pracy nad dużą liczbą różnych projektów. Grupę, do której jest przypisany bieżący serwis możesz określić w oknie <a href="service_properites.php">Okno Właściwości serwisu</a>.</p>

<h2>Zawartość - Wybór folderów i drzewo folderów</h2>

<p>Poniżej listy zawierającej listę serwisów znajdziesz drzewko folderów. Drzewo folderów wyświetla w postaci hierarchicznego drzewa foldery znajdujące się na dysku lub w bieżącym serwisie. Drzewko jest identyczne jak to z eksploratora Windows. Ma ono również przypisane identyczne z systemowym podręczne menu, za pomocą którego możesz wykonywać różne operacje na drzewku. Możesz więc zmieniać nazwy, usuwać czy kompresować (o ile odpowiednie rozszerzenie systemowe jest zainstalowane) wybrane foldery.

<h2>Zawartość - Lista plików</h2>

<p>Pod drzewkiem folderów znajduje się lista plików, która w zależności od <a href="settings_filelist.php">ustawień</a> wyświetla zarówno foldery i pliki lub wyłącznie pliki znajdujące się w bieżącym folderze. Lista plików jest identyczna z tą znaną z eksploratora Windows ma jednak dużo więcej funkcji.

<p>Domyślnie lista prezentuje pliki domyślnie na widoku szczegółowym. Oczywiście możesz zmienić widok na widok ikon czy np. widok miniatur korzystając z menu podręcznego lub przycisków znajdujących się obok, które są opisane poniżej. W przypadku włączenia widoku miniatur pokazane zostaną wyłącznie pliki graficzne - jeśli takie nie znajdują się w bieżącym folderze, wyświetlona zostanie stosowna informacja. Możesz filtrować pliki wyświetlane tutaj zawężając ilość wyświetlanych plików tylko do wybranych typów czy sortować pliki wg różnych kryteriów. Możesz oczywiście zmieniać nazwy plików, usuwać je, a poprzez dwuklik na pliku otwierać go. Lista ma układ kolumnowy, a prezentowane w kolumnach informacje to:

<ul>
   <li><b>Nazwa pliku</b> - wyświetla nazwę pliku lub folderu
   <li><b>Rozmiar</b> - rozmiar pliku
   <li><b>Typ</b> - typ pliku - typ określają również ikony
   <li><b>Zmodyfikowano</b> - data i godzina ostatniej modyfikacji
</ul>

<p>Lista plików ma również przypisane dwa menu podręczne, z których może być używane tylko jedno w danej chwili. Pierwsze menu to identyczne z systemowym podręczne menu, za pomocą którego możesz wykonywać różne operacje na drzewku jak w eksploratorze Windows Możesz więc zmieniać nazwy, usuwać czy kompresować (o ile odpowiednie rozszerzenie systemowe jest zainstalowane) wybrane pliki czy foldery. Drugie menu jest menu aplikacji i pozwala na wiele dodatkowych operacji. Menu podręczne jest identyczne z przyciskami znajdującymi się po prawej stronie listy i zostało opisane wspólnie z przyciskami poniżej. Menu, które jest w danej chwili używane określasz za pomocą przełącznika "Użyj menu systemowego" znajdującego się na pasku przycisków po prawej stronie listy lub w menu podręcznym programu. Włączenie menu systemowego jest konieczne, jeśli chcesz korzystać z funkcji <a href="how_tousecvs.php">wsparcia dla CVS</a>.

<h2>Zawartość - menu listy plików </h2>

<p>Na liście plików masz również dostęp do menu podręcznego, w którym znajdują się polecenia pozwalające na operowanie na zawartości widoku listy plików. Menu to jest identyczne z paskiem przycisków znajdującym się obok listy. Polecenia, które się tam znajdują są opisane poniżej.

<a name="myservices_menubuttons"></a>
<h2>Zawartość - pasek przycisków obok listy plików</h2>

<p>Obok listy przycisków znajduje się pasek z przyciskami. Identyczną zawartość ma menu listy plików i składa się z następujących przycisków:

<p><b>Edytuj</b><br>
Za pomocą tego przycisku otworzysz do edycji w Pająku dokumenty wybrane na liście plików. Możesz zaznaczyć kilka dokumentów i kliknąć ten przycisk, a wszystkie one zostaną załadowane do Pająka. Przycisk ten posiada również menu dostępne po kliknięciu po prawej stronie przycisku. Za pomocą przypisanego tutaj menu masz dostęp do listy ostatnio używanych plików, a także do polecenia otwierającego pliki z listy <a href="service_properites.php#servicepropertiesoftenused">często używanych plików serwisu</a>, który jest wybrany.

<p><b>Otwórz jako</b><br>
To polecenie umożliwia otwarcie pliku lub plików pod nową nazwą. Po wybraniu dokumentu na liście plików i kliknięciu tego przycisku zostaniesz poproszony o wskazanie nazwy i miejsca, gdzie ma się znaleźć nowy plik. Po zaakceptowaniu zostanie on otworzony do edycji. W ten sposób można tworzyć kopie wybranych dokumentów i od razu otwierać je do edycji.

<p><b>Importuj</b><br>
To narzędzie pomoże Ci zaimportować i przekształcić na strony WWW dokumenty różnego typu, w tym dokumenty obsługiwane przez pakiet Office, dokumenty RTF, pliki baz danych CSV i pliki tekstowe. Import opisany jest szerzej w opisie <a href="tool_importer.php">Importera plików</a>.

<p><b>Podgląd</b><br>
Za pomocą tego polecenia możesz przeglądać dokumenty HTML na <a href="main_preview_embed.php">podglądzie wbudowanym</a> w Pająka.

<p><b>Szybki podgląd</b><br>
To polecenie uruchamia narzędzie <a href="tool_quickpreview.php">Szybki podgląd</a>, za pomocą którego możesz przeglądać pliki różnego typu, np. grafiki, dźwięki, filmy, dokumenty HTML i inne.

<p><b>Wstaw odnośnik</b><br>
To polecenie uruchamia okno <a href="tool_link.php">Wstawianie odnośnika</a>, za pomocą którego możesz wstawić do aktualnie edytowanego dokumentu odsyłacz do pliku wybranego na liście.

<p><b>Informacje o dokumencie</b><br>
To polecenie uruchamia okno <a href="tool_docinfo.php">Informacje o dokumencie</a>, w którym masz dostęp do wielu informacji powiązanych z wybranym na liście plikiem.

<p><b>Zmień nazwę</b><br>
Za pomocą tego przycisku możesz zmienić nazwę zarówno katalogu jak i pliku. Jeśli zmienisz nazwę dokumentu otwartego w Pająku, zostanie wyświetlony odpowiedni komunikat.

<p><b>Przywróć z pliku kopii zapasowej</b><br>
Kliknij, aby przywrócić ostatnią zapisaną zawartość pliku z kopii zapasowej. Polecenie to dostępne jest jedynie dla plików posiadających <a href="main_editor_backups.php">kopie zapasową</a>.

<p><b>Publikuj w sieci</b><br />
To polecenie umożliwia opublikowanie wybranego(nych) plików lub folderów na aktualnie wybranym serwerze FTP. <a href="network_publishing_general.php#publish_current">Czytaj więcej na temat zaawansowanych możliwości tego polecenia</a>. </p>

<p><b>Usuń</b><br>
Ten przycisk umożliwia usuwanie dokumentów i folderów wybranych na liście.

<p><b>Nowy plik</b><br>
Użyj tego polecenia, aby utworzyć nowy plik w bieżącym katalogu. Nazwa jest tworzona na podstawie <a href="service_properites.php#servicepropertiesdocuments">ustawień nazwy domyślnego pliku dla bieżącego serwisu</a>, a w przypadku ich braku, nadawana jest nazwa <tt>index.html</tt> (lub z numerem kolejnym, jeśli plik o takiej nazwie już istnieje).

<p><b>Nowy folder</b><br>
Użyj tego polecenia, aby utworzyć nowy folder w bieżącym katalogu.

<p><b>Odśwież</b><br>
Jeśli chcesz odświeżyć listę wyświetlanych elementów użyj tego przycisku.

<p><b>Zaznaczenie wszystkich elementów</b><br>
Ten przycisk pozwala na szybkie zaznaczenie wszystkich elementów znajdujących się na liście. Dodatkowo posiada on menu rozwijane, w którym znajdziesz polecenia uruchamiające narzędzia umożliwiające zawężenie zakresu zaznaczanych plików:

<ul>
        <li><p><b>Zaznacz według rozszerzeń</b><br>Wyświetla okno zawierające listę wszystkich typów plików (rozszerzeń nazwy pliku), jakie istnieją w bieżącym folderze. Wybierz z listy rozszerzenia nazw plików, jakie mają zostac zaznaczone.
        <li><p><b>Zaznacz według nazw plików</b><br>Wyświetla okno umożliwiające wprowadzenie szablonu nazw plików, jakie mają zostać zaznaczone. W szablonie tym możesz korzystać z tzw. wildcards opisanych w temacie pomocy dla narzędzia <a href="find_ext.php#wildcards">Rozszerzone wyszukiwanie i zamiana</a>. W ten sposób możesz np. wprowadzić szablon nazwy <tt>oferta*.html</tt>. Po zatwierdzeniu szablony przyciskiem <tt>OK</tt> na liście plików wszystkie pliki pasujące do tego wzorca zostaną zaznaczone (np. <tt>oferta_1.html</tt>, <tt>oferta_2.html</tt> itp.).
</ul>

<p><b>Właściwości</b><br>
Za pomocą tego polecenia masz dostęp do systemowego okna właściwości pliku lub folderu.

<p><b>Użyj menu systemowego</b><br>
To jest przełącznik, który powoduje przypisanie do podręcznego menu listy plików menu systemowego jak w eksploratorze Windows. Jeśli przełącznik jest wyłączony, używane jest menu Pająka. Włączenie menu systemowego jest konieczne, jeśli chcesz korzystać z funkcji <a href="how_tousecvs.php">wsparcia dla CVS</a>.

<!-- dodane w 5.6 -->
<p><b>Ukrycie paska przycisków listy plików</b><br>
To jest przełącznik, który powoduje wyłączenie lub włączenie wyświetlania pasków przycisków umieszczonych obok listy plików i drzewa folderów (wyżej). Identyczne polecenie ("Ukryj pasek przycisków listy plików i drzewa katalogów") znajdziesz również w oknie <a href="settings_filelist.php">Ustawienia programu - Lista plików</a>.

<p><b>Konwertuj znaki narodowe na ...</b><br>
To polecenie uruchamia narzędzie <a href="charset_encoding.php">Konwersji znaków narodowych</a> w aktualnym folderze.

<p><b>Wyszukaj lub wyszukaj lub zamień</b><br>
To polecenie uruchamia narzędzie <a href="find_ext.php">Rozszerzonego wyszukiwania i zamiany</a> w aktualnym folderze.

<p><b>Zmiana nazwy wielu plików</b><br>
To polecenie uruchamia narzędzie <a href="tool_chameleon.php">Kameleon - zmiana nazw plików</a> i umożliwia zmianę nazw plików w wielu folderach na raz za pomocą ustalonych reguł.

<p><b>Dodaj do listy wymuszonego dołączania</b><br>
Za pomocą tego polecenia możesz dodać wybrany plik (CSS, JS lub PHP) do listy plików, które są wirtualnie dołączane do każdego dokumentu  składowego projektu. Więcej o <a href="service_virtual_include.php">wymuszonym dołączaniu</a>.

<p><b>Ulubione foldery</b><br>
To polecenie ma powiązane menu wyświetlające ulubione foldery. Ulubione foldery możesz dodawać za pomocą przycisku oznaczonego plusikiem. Wybranie folderu na tej liście powoduje szybkie przejście do niego.

<p><b>Dodaj folder do ulubionych</b><br>
Za pomocą tego przycisku dodasz bieżący folder do listy ulubionych folderów, dzięki czemu będziesz się mógł szybko do nich przełączać.

<p><b>Usuwanie wybranych ulubionych folderów</b><br>
Kliknij, aby na liście folderów wskazać folder, który ma zostać z niej usunięty. Żaden folder nie będzie usuwany z twardego dysku!

<p><b>Otwarcie bieżącego folderu w nowym oknie Exploratora Windows</b><br>
Kliknij,  aby wyświetlić nowe okno Eksploratora Windows i wyświetlić w nim zawartość bieżącego foldera.

<p><b>Widok</b><br>
Korzystając z menu pod tym przyciskiem możesz wybrać w jaki sposób elementy mają być prezentowane na liście. Możesz wybrać różne widoki podobnie jak w eksploratorze Windows, a także widok miniatur grafik.

<p><b>Filtr plików</b><br>
W menu znajdującym się pod tym przyciskiem możesz wybrać rodzaj plików, jakie są wyświetlane na liście. Dodatkowo możesz zawęzić widok plików tylko do tych zmodyfikowanych po wskazanej dacie lub o wskazanym rozszerzeniu. Służy do tego polecenie "Wyświetl tylko nowsze od daty" oraz "Ustaw filtr użytkownika". Nazwy plików na liście będą kolorowane w zależności od wybranego filtra.

<!-- usuniete w 5.6
<p><b>Rozmieść elementy</b><br>
Za pomocą menu przypisanego do tego polecenia możesz zmienić sposób sortowania elementów na liście.
 -->

<p><b>Pomoc do listy plików</b><br>
Ten przycisk wyświetla tę stronę pomocy.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="services_general.php">Serwisy ogólnie</a>
   <li><a href="service_properites.php">Okno Właściwości serwisu</a></li>
   <li><a href="settings_filelist.php">Ustawienia listy plików</a>
   <li><a href="main_tabs_myftpservers.php">Zakładka Moje serwery</a>
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