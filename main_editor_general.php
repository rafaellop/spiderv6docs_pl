
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Edytor - ogólnie</title>

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
<h1>Edytor - ogólnie</h1>

<!-- treść pomocy -->


<p>Na zakładce Tworzenie zawarte jest podstawowe narzędzie Pająka - jego edytor stron. Właśnie tutaj powstaje strona WWW. To tutaj za pomocą odpowiednich narzędzi uzyskujemy wszystkie efekty. </p>

<p>Zakładka Tworzenie umieszczona jest w <a href="main_tabs_general.php#tabs_center">środkowym panelu</a>, którego nie możesz wyłączyć. Domyślnie to właśnie ona jest włączona, w niej też otwierane będą nowe dokumenty.</p>



<h2>Wybór trybu pracy edytora</h2>

<p>Pająk umożliwia dwa tryby pracy nad dokumentem HTML
<ul>
   <li><a href="main_editor.php">tryb edycji kodu źródłowego</a></li>
   <li><a href="main_editor_wysiwyg.php">tryb graficzny (WYSIWYG)</a></li>
</ul></p>

<p>Dokumenty innych typów (np. skrypty, arkusze stylów CSS itd.)  wyłącznie w trybie edycji kodu źródłowego.</p>

<p>Większość pracy w Pająku, będziesz wykonywać w trybie kodu źródłowego. W tym trybie możesz edytować dokumenty innych typów (np. skrypty, arkusze stylów CSS itd.). Tryb wizualny przeznaczony umożliwia prace jedynie nad dokumentem HTML i jest raczej dla początkujących użytkowników programu.</p>

<p>Gdy nabierzesz juz trochę wprawy, będziesz rzadziej korzystać z menu i pasków narzędziowych, bowiem większość operacji można wykonać za pomocą skrótów klawiszowych. Skróty te możesz dopasować do własnych potrzeb w oknie <a href="settings_toolbars_hotkeys.php">Ustawień programu</a> </p>



<h2>Otwieranie, zapisywanie i zamykanie dokumentów</h2>

<p><b>Nowy dokument</b><br />

<p>Nowy dokument możesz utworzyć na kilka sposobów:</p>

<ul>
   <li>z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_file.php">Plik</a> / <a href="main_menu_file_new.php">Nowy dokument</a> - różne typy dokumentów i ich elementów</li>
   <li>za pomocą makrokodu będącego szablonem dokumentu</li>
</ul>

Aby szybko utworzyć nowy dokument, skorzystaj ze skrótu klawiszowego:
<ul>
   <li><b>Ctrl+N</b> - (nowy pusty dokument)</li>
   <li><b>Ctrl+Shift+N </b> - dokument będzie utworzony z domyślnego makrokodu 
</ul>

<p>Nowy dokument może być otwierany w <a href="main_editor.php">trybie edycji kodu źródłowego</a>, bądź w <a href="main_editor_wysiwyg.php">trybie graficznym</a>, w zależności od opcji wybranej w <a href="settings_editor_wysiwyg.php">Ustawieniach programu</a>.</p>


<p><b>Otwieranie dokumentów</b><br />

<p>Dokument możesz otworzyć również na kilka sposobów:</p>
<ul>
<li>z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_file.php">Plik</a>:
   <ul>
      <li><b>Otwórz</b> - otwiera plik z dysku, możesz skorzystać z menu rozwijanego tego polecenia, w którym znajdują się ostatnio otwierane dokumenty</li>
      <li><a href="tool_open_remote.php">Otwórz z sieci</a> - otwiera narzędzie umożliwiające otworzenie pliku za pomocą sieci.</li>
      <li><a href="tool_importer.php">Importuj</a> - umożliwia import z dysku pliku w formacie nieobsługiwanym bezpośrednio przez Pająka</li>
   </ul>
<li><b>z menu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_services.php">Serwisy</a> / <a href="main_menu_services_properties.php">Własności serwisu</a> / Otwórz często używane serwisu</b> - Otwiera pliki z listy <a href="service_properites.php#servicepropertiesoftenused">często używanych dokumentów serwisu</a>
<li>z listy plików na <a href="main_tabs_myservices.php">zakładce Moje serwisy</a>
<li>z listy plików na zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a> - w Pająku możliwa jest także <a href="network_opendoc_ftp.php">edycja dokumentów otwieranych bezpośrednio z serwera FTP</a>!
<li>za pomocą przeciągnięcia dokumentu z okna Exploratora Windows
<li>za pomocą dwukliku na pustym obszarze w miejscu edytora, gdy nie ma otwartych dokumentów.</li>
</ul>

<p><b>Zapis dokumentów</b><br />

Dokumenty możesz zapisywać:
<ul>
   <li>jak w każdej innej aplikacji Windows za pomocą menu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_file.php">Plik</a> Zapisz, Zapisz jako... i Zapisz wszystkie.</li>
   <li>za pomocą polecenia Zapisz na <a href="toolbars_main.php">Głównym pasku</a></li>
</ul>

<p>Ponadto możesz eksportować dokumenty do formatu HTML lub RTF za pomocą polecenia w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_file.php">Plik</a> Eksportuj. Eksportowanie polega na zapisaniu dokumentu w taki sposób, by przedstawione zostały układ i kolorowanie składni w edytorze Pająka. Pomaga to znacząco przygotowywać listingi kodu do druku itp. </p>

<p>Podczas zapisu dokumentu tworzona są dwa dodatkowe pliki:
<ul>
   <li><a href="main_editor_backups.php">kopia zapasowa</a></li>
   <li><a href="main_editor_addfiles.php">plik dodatkowych informacji dla dokumentu</a></li>
</ul></p>

<a name="przelaczanie"></a>
<h2>Przełączanie się między dokumentami</h2>

<p>W Pająku możesz otworzyć praktycznie dowolną ilość dokumentów. Oczywiście otwarcie np. 1000 plików spowolni pracę programu, jednak teoretycznie jest to możliwe.</p>

<p>Nazwy aktualnie otwartych dokumentów przedstawiane są na przyciskach u góry edytora (można je przenieść na dół za pomocą zmiany tej opcji w <a href="settings_editor_general.php">Ustawieniach programu</a>. Klikając na odpowiednie przyciski możesz przełączać się między dokumentami. Jeśli przytrzymasz chwilę kursor nad przyciskiem z nazwą dokumentu, pojawi się dymek z pełną ścieżką dostępu do niego. </p>

Z prawej strony nazwy dokumentu znajduje się ikona z kulką, której wygląd oznacza:
<ul>
   <li> - Dokument nie został zmieniony od ostatniego zapisu, bądź od momentu otwarcia w edytorze.
   <li> - Dokument nie został zmieniony od ostatniego zapisu, bądź od momentu otwarcia w edytorze. Strzałka oznacza, że dokument jest otwarty do edycji bezpośrednio z serwera.
   <li> - W dokumencie dokonano zmian od ostatniego zapisu, bądź od momentu otwarcia w edytorze.
   <li> - W dokumencie dokonano zmian od ostatniego zapisu, bądź od momentu otwarcia w edytorze. Strzałka oznacza, że dokument jest otwarty do edycji bezpośrednio z serwera.
</ul>

<p>Jeśli otworzysz wiele dokumentów, przełączanie się między nimi (szczególnie gdy przyciski tych dokumentow nie są położone obok siebie) może być nieefektywne. W takim wypadku możesz skorzystać z polecenia <b>Przejście do wybranego dokumentu</b> na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>. Polecenie to spowoduje rozwinięcie listy z nazwami wszystkich dokumentów otwartych w Pająku. Identyczne działanie ma kliknięcie prawym klawiszem na któryś z przycisków z nazwą dokumentu. </p>

<p>Na liście rozwijanej z nazwami plików możesz określić również sposób nazywania dokumentów, a także zamknąć bieżący dokument, bądź zmienić kolejność otwartych dokumentów. W tym celu kliknij jedną z pozycji:</p>

<ul>
   <li><b>Zamknij ten dokument</b> - zamyka dokument, na którego nazwie kliknąłeś, wyświetlając listę rozwijaną. Dodatkowo to polecenia zawiera podmenu, w którym umieszczone zostały polecenia <b>Zamknij wszystkie dokumenty</b> oraz <b>Zamknij wszystkie oprócz tego</b>.</li>.
   <li><b>Nowy dokument</b> - tworzy nowy pusty dokument. Dodatkowo polecenie to posiada podmenu identyczne jak analogiczne polecenie w <a href="main_menu_file.php">menu Plik</a>.</li>.  
   <li><b>Publikuj bieżący do sieci</b> - pozwala opublikować w sieci bieżący dokument. <a href="network_publishing_general.php#publish_current">Czytaj więcej na temat zaawansowanych możliwości tego polecenia</a>. </li> Dodatkowo, w podmenu dostępne jest polecenie "Publikuj otwarte w sieci".
   <li>[<i>tu znajduje się lista otwartych dokumentów</i>]</li>
   <li><b>Wyświetlaj tylko nazwy plików</b> - wyświetla tylko nazwę pliku (na liście ścieżkę + nazwę)</li>
   <li><b>Wyświetlaj ścieżkę względem projektu</b> - wyświetla ścieżkę względem <a href="service_properites.php">katalogu głównego serwisu</a> + nazwę pliku</li>
   <li><b>Wyświetlaj tytuł (jeżeli dostępny)</b> - wyświetla tytuł dokumentu HTML (zawartość znacznika <tt>&lt;TITLE&gt;</tt>)</li>
   <li><b>Zmień kolejność dokumentów</b> - otwiera okno wyświetlające listę otwartych dokumentów, ich tytuły i ścieżki dostępu. Wystarczy wskazać dokument i przesunąć go w kolejności w górę lub dół i za pomocą strzałek umieszczonych obok. Polecenie to jest aktywne tylko wówczas, gdy otwarte są przynajmniej dwa dokumenty.</li>
</ul>


<p>W celu szybkiego przełączenia się między dokumentami możesz również skorzystać z poleceń na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>:
<ul>
   <li><b>Wyświetlenie pierwszego dokumentu</b> - przechodzi do pierwszego dokumentu na liście otworzonych w Pająku</li>
   <li><b>Wyświetlenie poprzedniego dokumentu</b> - przechodzi do poprzedniego dokumentu na liście (domyślny skrót <tt>Shift+Ctrl+Tab</tt>)</li>
   <li><b>Wyświetlenie następnego dokumentu</b> - przechodzi do następnego dokumentu na liście (domyślny skrót <tt>Ctrl+Tab</tt>)</li>
   <li><b>Wyświetlenie ostatniego dokumentu</b> - przechodzi do ostatniego dokumentu na liście otworzonych w Pająku</li>
</ul></p>

<p>Te same polecenia znajdziesz w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_view.php">Wyświetl</a>.</p>

<p><b>Przełączanie między dokumentami w kolejności użycia</b><br>
Pająk potrafi ułatwić pracę nad wieloma dokumentami dzięki ulepszonej funkcji przełączania się między dokumentami w kolejności ich użycia. Jeśli zaznaczysz opcję o wyżej wymienionej nazwie na planszy <a href="settings_general.php">Ustawienia programu / Ogólne</a> zmienione zostanie zachowanie się programu przy użyciu skrótu klawiszowego <tt>Ctrl+TAB</tt> i <tt>Shift+Ctrl+TAB</tt>. Dokumenty będą przełączane w takiej kolejności, w jakiej ostatnio były edytowane, a nie w kolejności ich otwierania (kolejność na pasku z nazwami plików). Dzięki temu znacznie łatwiej jest przełączać się pomiędzy dwoma dokumentami oddalonymi od siebie na pasku. Mechanizm ten działa wyłącznie podczas korzystania ze skrótów klawiszowych, nie zaś podczas korzystania z poleceń na <a href="toolbars_minitoolbar.php">mini pasku narzędzi</a>!
</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="main_editor.php">Edytor w trybie edycji kodu źródłowego</a>
   <li><a href="main_editor_wysiwyg.php">Edycja w trybie graficznym</a>
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
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

</body>
</html>