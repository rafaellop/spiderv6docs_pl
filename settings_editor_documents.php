
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6">

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Dokumenty</title>

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
<h1>Ustawienia programu - Dokumenty</h1>

<!-- treść pomocy -->
<p>
W tej kategorii masz wpływ na czynności wykonywane podczas otwierania i zapisywania edytowanych w programie dokumentów. Możesz określić tutaj zasady kodowania znaków narodowych czy ustawienia pamietane wraz z dokumentem. Ta kategoria składa się z trzech grup: "Otwieranie dokumentów", "Zapisywanie dokumentów", "Pamiętanie ustawień wraz z dokumentem", które opisujemy poniżej.

<h2>Otwieranie dokumentów</h2>

<p>W tej grupie ustawień znajdujesz opcje dotyczące czynności wykonywanych podczas otwierania dokumentów do edycji. Oto dostępne ustawienia:

<p><b>Konwertuj entities przy otwieraniu dokumentu</b><br>
Zaznacz tę opcję, aby włączyć konwersję znaków specjalnych zapisanych jako tzw. encje na znaki narodowe o ile to możliwe.

<p><b>Przypomnij, jeżeli w dokumencie są zadania do wykonania</b><br>
Zaznacz tę opcję, aby przy otwieraniu dokumentu program sprawdzał, czy w dokumencie są ustawione zadania do wykonania i przypominał o nich.

<p><b>Sprawdzaj czy zmieniony poza edytorem</b><br>
Zaznacz tę opcję, aby program sprawdzał, czy aktualnie edytowany dokument nie został zmieniony poza programem. Sprawdzanie odbywa się co pewien czas określony w polu obok. W przypadku wykrycia zmian proponowane będzie załadowanie dokumentu z dysku lub zapisanie aktualnego na dysk, bądź  zignorowanie tego faktu.

<p><b>Nie konwertuj znaków narodowych przy otwieraniu</b><br>
Zaznacz tę opcję, aby program nie próbował konwersji znaków narodowych.

<p><b>Jeśli nie rozpoznano kodowania dokumentu</b><br>
Jeśli Pająk nie rozpoznał kodowania znaków narodowych, możliwe są dwa sposoby działania:

<ul>
	<li><b>nie przeprowadzaj konwersji</b> - Zaznacz tę opcję, aby program nie przeprowadzał konwersji znaków narodowych.</li>
	<li><b>otwórz używając kodowania</b> - Zaznacz tę opcję, aby program próbował konwersji znaków narodowych, przyjmując za kodowanie wejściowe format wybrany z listy obok.</li>
</ul>

<p><b>Automatycznie zmień mapowanie jeśli dokument z podfolderu serwisu, dla którego przypisano mapowanie</b><br />
Zaznaczenie tej opcji powoduje, że w sytuacji, gdy dla serwisu, z którego pochodzi otwierany dokument przypisane jest mapowanie dla katalogu, z którego odczytywany jest dokument, ustawiane jest mapowanie przypisane do tego katalogu.

<h2>Zapisywanie dokumentów</h2>

<p>W tej grupie ustawień znajdujesz opcje dotyczące czynności wykonywanych podczas zapisywania dokumentów. Oto dostępne ustawienia:

<p><b>Zapisuj znaki końca linii w formacie:</b><br>
Wybierz z listy sposób kodowania znaków końca linii, jaki ma być stosowany domyślnie w Pająku. Dostępne są trzy możliwości:
<ul>
	<li>CRLF (DOS/Windows)</li>
	<li>CR (Mac)</li>
	<li>LF (UNIX)</li>
</ul>

<p><b>Autozapis dokumentów</b><br>
Zaznacz tę opcję, aby włączyć funkcję automatycznego zapisywania dokumentów co określoną w polu obok liczbę minut.

<p><a name="backups"></a><b>Twórz kopię zapasową przy zapisie dokumentu lokalnie</b><br>
Zaznacz tę opcję, aby program tworzył w sposób automatyczny <a href="main_editor_backups.php">kopie zapisywanych dokumentów</a>. Kopie posiadają rozszerzenie *.BAK.

<p><a name="backups"></a><b>Twórz kopię zapasową przy zapisie dokumentu na serwerze</b><br>
Zaznacz tę opcję, aby podczas <a href="network_opendoc_ftp.php">edycji pliku online</a>, program tworzył w sposób automatyczny <a href="main_editor_backups.php">kopie zapisywanych dokumentów</a>. Kopie posiadają rozszerzenie *.BAK.

<p><b>Nie konwertuj znaków narodowych przy zapisie</b><br>
Zaznacz tę opcję, aby wyłączyć konwersję znaków narodowych przy zapisie.

<p><b>Nie dodawaj trzybajtowego nagłówka dla plików Unicode</b><br>
Włącz tę opcję, aby Pająk nie dopisywał 3 bajtów specjalnego nagłówka do plików Unicode. nagłówek ten jest używany przez Pająka do rozpoznawania plików Unicode i jest zgodny ze specyfikacją XML, jednak niektóre parsery, po jego napotkaniu takiego nagłówka, odmawiają pracy.

<p><b>Konwertuj entities na UTF przy zapisie dokumentów Unicode.</b><br>
Zaznacz tę opcję, aby podczas zapisu dokumentów w kodowaniu Unicode, encje zostały zamienione na znaki UTF.

<p><b>Domyślne rozszerzenie przy zapisie</b><br>
W tym miejscu wybierz jakie rozszerzenie ma być domyślnie nadawane plikom zapisywanym na dysk, gdy nie jest przypisana do nich żadna nazwa.

<p><b>Domyślne kodowanie przy zapisie</b><br>
Z tej listy wybierz kodowanie domyślne stosowane przy zapisie dokumentów, które nie posiadają ustalonego w sekcji META kodowania.

<p><b>Jeżeli w dokumencie brak deklaracji kodowania zapisz w pierwotnym kodowaniu</b><br>
Zaznacz tę opcję, aby zapisać dokument bez przypisanego w sekcji META kodowania za pomocą tego samego kodowania, które zostało użyte przy jego odczycie.

<p><b>Jeżeli w dokumencie brak deklaracji kodowania zawsze zapisuj w kodowaniu domyślnym</b><br>
Zaznacz tę opcję, aby zapisać dokument bez przypisanego w sekcji META kodowania za kodowania domyślnego wybranego z listy powyżej.

<p><b>Ostrzegaj jeśli brak deklaracji kodowania może uniemożliwić przeglądarkom rozpoznanie użytego kodowania</b><br>
Zaznacz ten przełącznik, aby program ostrzegał przy zapisie dokumentów bez przypisanego w sekcji META kodowania znaków. Jeśli Pająk ma ostrzegać tylko raz, przy pierwszej próbie zapisu każdego dokumentu, zaznacz przełącznik <b>Ostrzegaj tylko przy pierwszej próbie zapisania dokumentu</b>.


<a name="add_files"></a>
<h2>Pamiętanie ustawień wraz z dokumentem</h2>

<p>Ta grupa pozwala na określenie jakie <a href="main_editor_addfiles.php">ustawienia są pamiętane wraz z dokumentem w pliku ADD</a> i automatycznie ustawianie po ponownym otwarciu dokumentu. Znajdziesz tutaj następujące opcje:

<p><b>Całkowicie wyłącz tworzenie plików ADD</b><br>
Zaznacz tę opcję, aby całkowicie wyłączyć tworzenie plików informacji o dokumencie ADD, gdzie przechowywane są preferencje dotyczące edytowanego dokumentu.

<p><b>Pamiętaj ustawienia zakładek</b><br>
Zaznacz tę opcję, aby program pamiętał ustawienia zakładek.

<p><b>Pamiętaj listę zadań do wykonania</b><br>
Zaznacz tę opcję, aby program pamiętał ustawienia listy zadań do wykonania.

<p><b>Rozwinięcie drzewka nawigatora</b><br>
Zaznacz tę opcję, jeśli Pająk ma pamiętać stan nawigatora dokumentu w momencie zamykania pliku.

<p><b>Pamiętaj przypisany dokument podglądu</b><br>
Zaznacz tę opcję, aby program pamiętał przypisany dokument podglądu.

<p><b>Pamiętaj konfigurację edytora</b><br>
Zaznacz tę opcję, aby program pamiętał konfigurację edytora (np. zawijanie wierszy, numerowanie linii).

<p><b>Pamiętaj schemat kolorowania</b><br>
Zaznacz tę opcję, aby program pamiętał użyty dla dokumentu schemat kolorowania.

<p><b>Pamiętaj pozycję kursora i zaznaczenie</b><br>
Zaznacz tę opcję, aby program pamiętał pozycję kursora i zaznaczenie w dokumencie.

<p><b>Pamiętaj imię i nazwisko autora</b><br>
Zaznacz tę opcję, aby program pamiętał imię i nazwisko osoby, która jako ostatnia zapisywała dokument. Opcja przydatna w przypadku pracy grupowej nad serwisem..

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_editor.html#settingslisteditor">Inne ustawienia edytora</a>
	<li><a href="charset_encoding.php">Kodowanie znaków narodowych</a>
	<li><a href="main_editor.php">Praca z edytorem</a>
	<li><a href="main_editor_addfiles.php">Plik informacji o dokumencie ADD</a>
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