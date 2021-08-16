
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6">

<!-- nazwa strony pomocy -->
<title>Narzędzia - Elementy formularza</title>

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
<h1>Narzędzia - Elementy formularza</h1>


<!-- treść pomocy -->

<p>Generator formularzy służy do kompleksowego przygotowywania formularza. Umożliwia podanie wszystkich parametrów i umieszczenie wszelkich elementów formularza, jakie mogą być potrzebne.

<p><p>Narzędzie uruchomisz z poziomu <a href="main_menu_main.html">Menu głównego</a> / <a href="main_menu_tools.html">Narzędzia</a> / <a href="main_menu_tools_forms.html">Formularze</a> / Inne elementy formularza, lub z paska <a href="toolbars_tables.html">Tabele i formularze</a>. Ikona polecenia została pokazana obok.

<p>Okno narzędzia podzielone zostało na trzy części:
<ul>
	<li><a href="#elements">Dostępne elementy formularzy</a></li>
	<li><a href="#settings">Opcje elementów formularza</a></li>
	<li><a href="#elem_list">Lista utworzonych składników formularza</a></li>
</ul>

<p>W celu utworzenie elementu formularza wybierz element z listy, ustaw jego opcje, a następnie dodaj go na listę utworzonych elementów za pomocą przycisku "Dodaj" obok listy składników formularza u dołu okna.</p>



<a name="elements"></a>
<h2>Dostępne elementy formularzy</h2>

<p>W tej części okna możesz wybrać element, który chcesz wstawić do formularza. Dostępne sa następujące typy elementów:</p>

<ul>
	<li><b>Pole edycyjne "Tekst"</b> - zwykłe jednolinijkowe pole tekstowe</li>
	<li><b>Pole hasła "Password"</b> - pole do wpisywania hasła - wszystkie litery wyświetlane na stronie będą jako gwiazdki w celu ukrycia prawdziwego tekstu przed ewentualnym podglądaniem hasła</li>
	<li><b>Pole ukryte "Hidden"</b> - pole ukryte formularza, służy do prechowywania wartości, które nie musza być wyświetlane na stronie, jednak powinny zostać przesłane z formularzem.</li>
	<li><b>Opcja "CheckBox"</b> - przełącznik do wybierania opcji, popularny 'haczyk'</li>
	<li><b>Opcja "Radio"</b> - przełącznik do wybierania jednej z kilku opcji w danej grupie</li>
	<li><b>Plik "File"</b> - pole służące do podania ścieżki do pliku, który ma zostać wysłany z formularzem</li>
	<li><b>Przycisk "Submit"</b> - przycisk wysyłający formularz</li>
	<li><b>Przycisk "Reset"</b> - przycisk czyszczący zawartość formularza</li>
	<li><b>Zwykły przycisk</b> - przycisk bez przypisanej domyślnej akcji</li>
	<li><b>Potwierdzenie obrazek</b> - obrazek, którego kliknięcie działa jak kliknięcie na przycisk "Submit"</li>
</ul>

<p>W zależności, od tego, jaki typ elementu wybierzesz, zmieniają się opcje elementów formularza dostępne z prawej strony tej listy.</p>


<a name="settings"></a>
<h2>Opcje elementów formularza</h2>

<p>Opcje tej zakładki umożliwiają podanie opcji dla poszczególnych elementów formularza.</p>

<p><b>Uwaga!</b><br />
Poniżej przedstawione zostały wszystkie dostępne opcje. Jednak dla poszczególnych elementów formularza niektóre z nich mogą nie występować, gdyż nie są przez dany element obsługiwane (np. nie występuje maksymalna długość tekstu dla obrazka, URL do obrazka w przypadku pola tekstowego itp.)

<p><b>Nazwa</b><br />
Podaj nazwę bieżącego elementu. Jest to konieczne to zidentyfikowania elementu podczas przetwarzania danych z formularza na serwera.

<p><b>Wartość</b><br />
Podaj domyślną wartość dla bieżącego elementu.

<p><b>Opis obrazka</b><br />
Podaj opis wstawianego obrazka (tylko przycisk graficzny).

<p><b>URL do grafiki</b><br />
Podaj adres URL do obrazka (tylko przycisk graficzny). Możesz skorzystać z listy, na której znajdują się ostatnio adresy do używanych obrazków, bądź z przycisku obok pola, który otwiera <a href="tool_graphic_browser.html">przeglądarkę grafik</a>.

<b>Kolejność podczas TAB</b><br />
Zaznacz tę opcję, jeśli chcesz określić indeks tabulacji tego elementu wśród elementów formularza. Indeks ten określa kolejność elementów podczas poruszania się po formularzu za pomocą klawisza <tt>TAB</tt>.

<p><b>Klawisz skrótu</b><br />
Zaznacz tę opcję, jeśli chcesz wybrać klawisz skrótu do tego elementu formularza na stronie. Skrótem klawiszowym będzie <tt>Alt+znak</tt>, który  wybierzesz z listy obok. 

<b>Rozmiar</b><br />
Podaj rozmiar elementu będący ilością znaków (pola tekstowe), bądź pikseli (inne elementy).

<p><b>Maksymalna długość</b><br />
Podaj ilość znaków, jaka może być maksymalnie wpisana w bieżącym polu.

<p><b>Wyrównanie</b><br />
Określ, jak ma być wyrównywany ten element względem innych elementów strony. Atrybut ten określony jest w specyfikacji HTML jako przestarzały (ang. <i>deprecated</i>) i w celu wyrównania zalecane jest używanie stylów CSS.

<p><b>Tylko do odczytu</b><br />
Zaznacz tę opcję, jeśli okienko ma być <i>tylko do odczytu </i>(np. w celu prezentacji tekstu, bez możliwości jego zmiany)

<p><b>Zablokowany</b><br />
Zaznacz tę opcję, jeśli okienko ma być zablokowane (atrybut <tt>disabled="disabled"</tt>).

<p><b>Wybrany</b><br />
Zaznacz tę opcję, jesli bieżący element ma być oznaczony jako wybrany (<tt>checked</tt>). Tylko dla elementów typu <tt>radio</tt> i <tt>checkbox</tt>.


<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzędzie <a href="tool_style_editor.html">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.html">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.




<a name="elem_list"></a>
<h2>Elementy formularza</h2>


<p>Ta część okna zawiera listę wszystkich elementów dodanych do formularza. 

<p><b>Dodaj</b><br />
Kliknij na ten przycisk, aby dodać bieżący element do listy. Za pomocą strzałki z prawej strony tego przycisku możesz wybrać sposób wstawiania elementów formularza.</p>

<p><b>Czyść</b><br />
Kliknij na ten przycisk, aby szybko usunąć wszystkie dodane składniki formularza.




<h2>Przycisk "Zdarzenia i atrybuty"</h2>

<p>Przycisk "Zdarzenia i atrybuty" umożliwia otwarcie okna <a href="tool_events_attributes.html">Zdarzenia i inne atrybuty</a>. Okno to umożliwia określenie dodatkowych atrybutów edytowanego znacznika, które nie mają swoich odpowiedników w oknie narzędzia. Możesz tam również określić zdarzenia dla języków skryptowych pozwalające na uzyskanie różnych efektów specjalnych.


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
	<li><a href="tool_form_editor.html">Generator formularzy</a>
	<li><a href="tool_form_textarea.html">Okienko tekstowe w formularzu</a>
	<li><a href="tool_form_selectlist.html">Lista wyboru w formularzu</a>
	<li><a href="main_menu_main.html">Menu programu</a>
	<li><a href="toolbars_general.html">Inne narzędzia na paskach</a>
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