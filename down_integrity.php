
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
<title>Dolny panel wyników - Sprawdzanie spójności serwisu</title>

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
<h1>Dolny panel wyników - Sprawdzanie spójności serwisu</h1>



<!-- treść pomocy -->


<p>Sprawdzanie spójności serwisu służy do weryfikacji połączeń pomiędzy plikami serwisu i wskazuje elementy, które nie są wykorzystywane w serwisie. Pozwala to na łatwe utrzymywanie porządku w plikach serwisu.</p>

<p>Sprawdzane są zarówno łącza do obrazków i dokumentów w językach znaczników, jak również dołączania plików w językach skryptowych server-side (np. include w PHP).</p>

<p>Aby sprawdzić spójność serwisu skorzystaj:
<ul>
   <li>na <a href="down_panel.php">dolnym panelu wyników</a> z menu z prawej strony zakładki polecenie "Spójność serwisu", </li>
   <li>na zakładce <a href="main_tabs_myservices.php">Moje serwisy</a> z menu na liście rozwijanej Ustawienia serwisu - Oczyszczanie serwisu,</li>
   <li>w oknie <a href="service_tool_synchronization.php">Synchronizacja serwisu</a> - z menu pod przyciskiem "Operacje oczyszczania bieżącego serwisu WWW"</li>
</ul>
</p>

<p><b>Weryfikacja spójności bieżącego serwisu WWW</b><br />
Kliknij, aby uzyskać informację na temat wykorzystywania plików w bieżącym serwisie. </p>

<p><b>Wyszukiwanie osieroconych deklaracji stylów</b><br />
Kliknij aby uzyskać informację na temat deklaracji stylów CSS, które nie są wykorzystywane w żadnym dokumencie serwisu.
</p>

<p><b>Wyszukuj osierocone pliki informacji o dokumencie</b><br />
Kliknij, aby uzyskać informację o plikach zawierających dodatkowe informacje (np. przypisanie kolorowania składni, zadania do wykonania itd.) dla usuniętych plików serwisu. Standardowo pliki te są usuwane wraz z usuwanym dokumentem, jeśli jednak dokument został usunięty z poziomu innego programu, mogły one pozostać na dysku.</p>

<h2>Wyniki sprawdzania spójności serwisu</h2>

<p>Wyniki działania narzędzia prezentowane są na liście w zakładce "Spójność serwisu" na "Panelu wyników. Okno wyników zawiera cztery kolumny:</p>

<ul>
   <li><b>Nazwa pliku</b> - ścieżka dostępu i nazwa pliku, dla którego sprawdzano, czy istnieją do niego odnośniki z innych dokumentów. Ikona z kulką informuje o typie komunikatu:
      <table border="0">
         <tr>
            <td></td>
            <td>- plik jest wykorzystywany w serwisie,</td>
         </tr>
         <tr>
            <td></td>
            <td> - plik nie jest wykorzystywany w serwisie,</td>
         </tr>
      </table></li>
   <li><b>Tytuł</b> - Tytuł dokumentu - jeśli istnieje - zawarty pomiędzy znacznikami <tt>&lt;title&gt;</tt> i <tt>&lt;title&gt;</tt> w danym dokumencie. Pokazywanie tytułów, które spowalnia nieco proces wyszukiwania, można wyłączyć w menu z prawej strony okna.</li>
   <li><b>Rezultat</b> - Informacja, czy plik jest wykorzystywany w serwisie</li>
   <li><b>Ilość odwołań</b> - Informacja o ilości odwołań do pliku z innych dokumentów</li>
</ul>

<a name="service_clean_down_panel"></a>
<h2>Oczyszczanie serwisu z poziomu Panelu wyników</h2>

<p>Po przeprowadzeniu sprawdzania spójności można skorzystać z opcji dostępnych w menu z prawej strony listy znalezionych plików:<br />

<p><b>Usunięcie wybranych plików</b><br />
Kliknij, aby usunąć z dysku zaznaczone na liście pliki. Spowoduje to usunięcie plików z twardego dysku.</p>

<p><b>Usunięcie wszystkich osieroconych plików</b><br />
Kliknij, aby usunąć wszystkie pliki nieużywane w serwisie. Spowoduje to usunięcie plików z twardego dysku.</p>

<p><b>Uwaga!</b> Oczyszczanie serwisu warto przeprowadzić przed uruchomieniem <a href="service_tool_synchronization.php">Automatycznej synchronizacji serwisu</a>. Dzięki temu na serwer nie będą przesyłane niepotrzebne pliki, co skróci czas synchronizacji i w efekcie pozwoli na ograniczenie kosztów w przypadku połączenia modemowego.</p>

<a name="service_clean_quick"></a>
<h2>Szybkie oczyszczanie serwisu</h2>

<p>Aby szybko oczyścić serwis z niepotrzebnych plików, skorzystaj:
<ul>
   <li>w zakładce <a href="main_tabs_myservices.php">Moje Serwisy</a> - z menu na liście rozwijanej Własności serwisu / Oczyszczanie serwisu,</li>
   <li>w oknie <a href="service_tool_synchronization.php">Synchronizacja serwisu</a> - z menu pod przyciskiem "Operacje oczyszczania bieżącego serwisu WWW"</li>
   <li>w menu <a href="main_menu_services_properties.php">Serwisy / Własności serwisu / Oczyszczanie serwisu</a></li>
</ul></p>

<p><b>Usuń pliki informacji o dokumencie (*.add)</b><br />
Usuwa pliki <tt>*.add</tt>, w których zapisane są zadania do wykonania, ustawienia zakładek itp. dla danego dokumentu. Przed usuwaniem zostanie zadane pytanie o potwierdzenie chęci usunięcia plików ustawień. W przypadku nieumyślnego usunięcia plików, można je przywrócić z Kosza Windows.</p>

<p><b>Usuń kopie zapasowe dokumentów (*.bak)</b><br />
Usuwa kopie zapasowe dokumentów tworzone automatycznie przy zapisie dokumentu. Kopie zapasowe tworzone są przy zapisie dokumentu, o ile nie zostało to zmienione w Ustawieniach programu.</p>

<p><b>Usuń pliki tymczasowe (*.tmp;~pajtemp.*)</b><br />
Usuwa pliki tymczasowe tworzone podczas pracy z programem (np. po włączeniu Przeglądania)</p>

<p><b>Usuń wszystkie (*.add;*.bak;*.tmp;~pajtemp.*)</b><br />
Usuwa jednocześnie wszystkie powyższe pliki czyszcząc serwis za jednym kliknięciem.</p>

<p><b>Uwaga!</b> Oczyszczanie serwisu warto przeprowadzić przed uruchomieniem "Automatycznej synchronizacji serwisu". Dzięki temu na serwer nie będą przesyłane niepotrzebne pliki, co skróci czas synchronizacji i w efekcie pozwoli na ograniczenie kosztów w przypadku połączenia modemowego.</p>

<h2>Eksportowanie wyników sprawdzania poprawności odsyłaczy</h2>

<p>Aby wyeksportować wyniki sprawdzania poprawności odsyłaczy, skorzystaj z przycisków na menu z prawej strony okna wyników. Dane można eksportować do:
<ul>
   <li>pliku w formacie HTML</li>
   <li>pliku w formacie TXT</li>
</ul></p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="down_links_verify.php">Sprawdzanie poprawności odsyłaczy</a></li>
   <li><a href="down_syntax_check.php">Sprawdzanie poprawności składni</a></li>
   <li><a href="service_tool_synchronization.php">Automatyczna synchronizacja serwisu</a></li>
   <li><a href="services_general.php">Serwisy ogólnie</a></li>
   <li><a href="main_tabs_myservices.php">Zakładka "Moje Serwisy"</a></li>
   <li><a href="down_panel.html#downpanellist">Inne zakładki dolnego panelu wyników</a></li>
   <li><a href="main_window_desc.php">Główne okno programu</a></li>
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