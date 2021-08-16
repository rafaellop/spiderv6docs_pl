
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Edytor plików definicyjnych języków znacznikowych</title>

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
            <a class="nav-link" href="contents_main.html">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.html">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.html">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.html">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.html">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.html">Ustawienia</a>
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
<h1>Edytor plików definicyjnych języków znacznikowych</h1>







<p>Aby uzyskać dostęp do edytora plików definicyjnych (nazywanym w skrócie edytorem TDF - od ang. <i>TagDefinition</i>) użyj polecenia <b>Edytor plików definicyjnych TDF</b> (ikona polecenia jest pokazana wyżej), które znajduje się w <a href="main_menu_view.html">Menu Wyświetl</a> / <a href="main_menu_view_settings.html">Ogólne ustawienia programu</a>. Możesz również uruchomić go za pomocą przycisku znajdującego się w oknie <a href="settings.html">Ustawienia programu</a> w kategorii <a href="settings_codeinsight_tags.html">Ułatwienia, dynamiczne atrybuty, inne</a> lub w menu. Przycisk pokazany został powyżej. 

<p>Za pomocą edytora TDF możesz modyfikować lub rozszerzać listę znaczników w językach obsługiwanych przez Pająka z poziomu narzędzi dynamicznej pomocy (podpowiedzi dla znacznika, znaczników i ich atrybutów itp), a nawet (czy może przede wszystkim) tworzyć całkiem nowe definicje języków do tej pory nieobsługiwanych przez program. Dzięki temu Pająk jest niesamowicie elastycznym narzędziem, znacząco ułatwiającym tworzenie dokumentów w praktycznie dowolnym języku znacznikowym (nawet w języku nieznanym twórcom programu) przy zachowaniu działających mechanizmach podpowiedzi i automatycznego uzupełniania kodu.

<p>Tworzenie od podstaw pliku definicyjnego dla języka znacznikowego jest jednak zajęciem bardzo żmudnym i czasochłonnym. Dlatego Pająk został wyposażony w unikalny mechanizm importowania danych języka z jego DTD. Wystarczy plik DTD zaimportować za pomocą opisanych niżej poleceń, a plik TDF zostanie automatycznie utworzony.</p>

<p>Okno edytora TDF składa się z dwóch głównych obszarów, tj. listy obsługiwanych języków znacznikowych (wraz z przyciskami umożliwiającymi jej obsługę) oraz obszaru z zakładkami, gdzie definiuje się ustawienia znaczników wybranego języka.

<h2>Kategorie znaczników</h2>

<p>W tym miejscu możesz zarządzać listą języków znacznikowych, jakie obsługuje Pająk, dodawać je i usuwać,a także wybierać bieżący język.

<p><b>Kategorie</b><br>
Wybierz z listy kategorię (język znacznikowy), aby móc modyfikować definicję jego znaczników. Za pomocą przycisków obok możesz dodać, usunąć bądź zmienić nazwę kategorii.

<p><b>Właściwości</b><br>
Kliknij ten przycisk, by otworzyć okno <a href="tagdata_editor_tdf_properties.html">Właściwości kategorii znaczników</a>, w którym będzie można edytować takie ustawienia, jak ścieżkę do dokumentacji, czy opis języka,

<p><b>Importuj</b><br />
Pod tym przyciskiem kryją się dwa polecenia:
<ul>
	<li><b>Importuj plik DTD</b> - pod tym przyciskiem kryje się potężne narzędzie umożliwiając automatyczne zaimportowanie znaczników dowolnego języka z jego DTD. Jego obsługa sprowadza się do wskazania pliku DTD przeznaczonego do zaimportowania.
	<li><b>Importuj plik TDF</b> - to polecenie umożliwia zaimportowanie utworzonego wcześniej własnego pliku TDF (np. z archiwum, czy wersji Pająka wcześniejszych od 5.3.0)
</ul>

<p class="czerwony"><b>Uwaga</b><br>
Jeśli tworzyłeś w Pająku w wersji wcześniejszej niż 5.3.0 własne pliki TDF, musisz jest zaimportowac za pomoca wymienionego wyżej polecenia <b>Importuj plik TDF</b>!</p>



<h2>Znaczniki</h2>

<p><b>Znaczniki w wybranej kategorii</b><br>
Wybierz znacznik, aby móc modyfikować jego definicję. Za pomocą przycisków umieszczonych poniżej możesz zarządzać listą znaczników tj. dodawać nowe, usuwać czy zmieniać nazwy, a także ustawić jeden ze znaczników jako znacznik nadrzędny dokumentu. Znacznik nadrzędny dokumentu ma znaczenie podczas rozpoznawania języka w którym jest tworzony dokument (czytaj więcej na ten temat w opisie przełącznika <b>Rozpoznaj kategorię znaczników na podstawie znacznika nadrzędnego dokumentu</b> w pomocy do okna <a href="tagdata_editor_tdf_properties.html#nadrzedny">Właściwości kategorii znaczników</a>).

<p>Grupa zakładek znajdująca się po prawej stronie okna pozwala na określanie parametrów dla znacznika wybranego na liście. Po wybraniu znacznika możesz określić jego parametry w zakładkach:

<h3>Podstawowe dane znacznika</h3>

<p>Ta zakładka pozwala na określenie ogólnych ustawień znacznika nie związanych z jego atrybutami i obsługiwanymi zdarzeniami dla języków skryptowych. Masz tutaj dostęp do następujących pól:

<p><b>Nazwa znacznika</b><br />
Nazwę możesz zmienić korzystając z przycisku umieszczonego obok pola z nazwą.

<p><b>Bez zawartości</b><br />
Określa, czy znacznik może zawierać jakąś treść. Przykładami znaczników w XHTML bez zawartości są <tt>&lt;img /&gt;</tt>, <tt>&lt;br /&gt;</tt>, które nie posiadają odpowiedniego znacznika zamykającego.

<p><b>Zamknięcie nie wymagane</b><br>
Określa czy zamknięcie znacznika jest wymagane. Opcja ta nie dotyczy znaczników języków XML'owych.

<p><b>Opis znacznika</b><br>
Opis wyświetlany jest np. w podpowiedziach do znaczników.

<p><b>Status znacznika</b><br>
Określa status znacznika, np. czy jest specyficzny dla jakiejś przeglądarki, czy może już zaniechany (deprecated).

<p><b>Autouzupełnianie</b><br>
To jest definicja reguły automatycznego uzupełniania. Znak | oznacza pozycję, w której ma być ustawiony kursor po uzupełnieniu znacznika.

<p><b>Plik dokumentacji</b><br />
Nazwa pliku z dokumentacją dla bieżącego znacznika. Ważne jest by oprócz nazwy tego pliku, prawidłowo określić nazwę katalogu z dokumentacją dla bieżącej kategorii w oknie <a href="tagdata_editor_tdf_properties.html#nadrzedny">Właściwości kategorii znaczników</a>. Dokumentacja ta jest będzie wyświetlana na <a href="down_help.html">dolnym panelu pomocy</a> po użyciu polecenia <b>Wyświetl pomoc dla bieżącego znacznika</b> (np. w <a href="main_menu_editor.html">menu podręcznym edytora</a>, standardowy skrót to <tt>Ctrl+F1</tt>).

<p><b>Znaczniki zawierające się:</b><br>
Określa listę znaczników, które mogą być umieszczone wewnątrz modyfikowanego znacznika. Na przykład wewnątrz znacznika <tt>&lt;UL&gt;</tt> może być tylko znacznik <tt>&lt;LI&gt;</tt>. Symbol <tt>*</tt> oznacza dowolny znacznik.

<p><b>Podgląd</b><br>
Określa tekst podglądu, który jest używany w inspektorze znaczników podczas modyfikacji znacznika.

<p><b>Podgląd (CSS)</b><br>
Określa tekst podglądu, który jest używany w inspektorze stylów CSS podczas modyfikacji stylu dla znacznika.

<p><b>Zgodność</b><br />
Zaznacz ten przełącznik, aby określić zgodność bieżącego znacznika z przeglądarkami. Następnie kliknij przycisk obok, aby otworzyć okno <a href="tagdata_editor_tdf_compatibility.html">Zgodność z przeglądarkami</a>. Informacja ta wyświetli się np. w podpowiedziach do znaczników.


<p>W celu zaakceptowania zmian koniecznie kliknij przycisk zapisz oznaczony pokazaną obok ikoną dyskietki. Dopiero wtedy zostaną one zapisane do pliku. W przypadku próby przełączenia się do innej zakładki, bądź wyłączenia edytora TDF program również spyta czy chcesz zachować zmiany. </p>


<h3>Atrybuty znacznika</h3>

<p>Na tej zakładce ustala się jakie atrybuty są dostępne dla wybranego znacznika oraz jakimi cechami się charakteryzują. Nowe atrybuty dodajesz za pomocą przycisku oznaczonego plusikiem. Po dodaniu atrybut dopisywany jest do listy i możliwe jest ustalenie jego parametrów w polach poniżej:

<p><b>Nazwa atrybutu</b><br />
Aby ją zmienić kliknij w przycisk obok pola.

<p><b>Opis atrybutu</b><br>
Opis wyświetlany jest np. w podpowiedziach do atrybutów.

<p><b>Status atrybutu znacznika</b><br>
Określa status atrybutu, np. czy jest specyficzny dla jakiejś przeglądarki, czy może już zaniechany (deprecated).

<p><b>Ten atrybut jest wymagany</b><br>
Niektóre znaczniki wymagają pewnych atrybutów. Tutaj możesz zaznaczyć, że atrybut, który modyfikujesz jest właśnie takim wymaganym atrybutem modyfikowanego znacznika.

<p><b>Typ atrybutu</b><br>
Określa typ atrybutu, który powoduje, że dla danego atrybutu używany jest taki, a nie inny edytor własności w inspektorze znaczników.

<p><b>Wartości</b><br>
Określa listę wartości dla modyfikowanego atrybutu znacznika. Wartości te są wyświetlane w inspektorze znaczników oraz w funkcji dynamicznych atrybutów. Jeśli atrybut może posiadać wiele wartości oddzielonych za pomocą separatora, zaznacz przełącznik <b>Dopuszczaj wartości wielokrotne</b>, a następnie wprowadź <b>Separator</b> (najczęściej jest to średnik, przecinek, bądź spacja).

<p><b>Zgodność</b><br />
Zaznacz ten przełącznik, aby określić zgodność bieżącego atrybutu z przeglądarkami. Następnie kliknij przycisk obok, aby otworzyć okno <a href="tagdata_editor_tdf_compatibility.html">Zgodność z przeglądarkami</a>. Informacja ta wyświetli się np. w podpowiedziach do znaczników.


<p>W celu zaakceptowania zmian koniecznie kliknij przycisk zapisz oznaczony pokazaną obok ikoną dyskietki. Dopiero wtedy zostaną one zapisane do pliku. W przypadku próby przełączenia się do innej zakładki, bądź wyłączenia edytora TDF program również spyta czy chcesz zachować zmiany. </p>


<h3>Zdarzenia znacznika</h3>

<p>Na tej zakładce ustala się jakie zdarzenia dla języków skryptowych są dostępne dla wybranego znacznika (na przykład <tt>onClick</tt>, czy <tt>onFocus</tt> itd.). Do dodawania i usuwania zdarzeń służą przycisku umieszczone obok listy. Dostępne są następujące ustawienia dla zdarzenia:

<p><b>Nazwa zdarzenia</b><br />
Możesz ją zmienić klikając na przycisk obok pola.

<p><b>Opis zdarzenia</b><br />
Pokaże się w podpowiedzi dla znacznika.

<p><b>Status zdarzenia</b><br />
Określa, czy zdarzenie jest opisane w specyfikacji języka, czy tez jest rozszerzeniem którejś z przeglądarek.

<p><b>Rodzaj zdarzenia</b><br />
Określa "skąd pochodzi" zdarzenie (np. od kliknięcia przyciskim myszy, czy wciśnięcia klawisza na klawiaturze).

<p><b>Zgodność</b><br />
Zaznacz ten przełącznik, aby określić zgodność bieżącego atrybutu z przeglądarkami. Następnie kliknij przycisk obok, aby otworzyć okno <a href="tagdata_editor_tdf_compatibility.html">Zgodność z przeglądarkami</a>. Informacja ta wyświetli się np. w podpowiedziach do znaczników.

<p>W celu zaakceptowania zmian koniecznie kliknij przycisk zapisz oznaczony pokazaną obok ikoną dyskietki. Dopiero wtedy zostaną one zapisane do pliku. W przypadku próby przełączenia się do innej zakładki, bądź wyłączenia edytora TDF program również spyta czy chcesz zachować zmiany. </p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tagdata_editor_tdf_properties.html#nadrzedny">Właściwości kategorii znaczników</a></li>
	<li><a href="tagdata_editor_tdf_compatibility.html">Zgodność z przeglądarkami</a></li>
	<li><a href="main_editor_codeinsight.html">Uzupełnianie znaczników</a>
	<li><a href="settings_codeinsight_tags.html">Ustawienia Dynamicznego kodu</a>
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