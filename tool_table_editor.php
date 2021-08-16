
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Edytor tabel</title>

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
<h1>Narzędzia - Edytor tabel</h1>

<p>Edytor tabel to rozbudowane narzędzie pozwalające na tworzenie tabel w dość wygodny sposób. Narzędzie składa się z kilku zakładek, na których ustala się poszczególne elementy tabeli.

<p>Okno Edytora tabel uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_tables.php">Tabele</a> / Edytor Tabel, a także z paska narzędzi <a href="toolbars_tables.php">Tabele i formularze</a>. Domyślny skrót klawiszowy uruchamiający to okno to <tt>Ctrl+T</tt>.
   
<h2>Zakładka ustawienia tabeli</h2>

<p>Na tej zakładce ustalisz podstawowe informacje o tworzonej tabeli, a także styl dla znacznika <tt>&lt;table&gt;</tt>. Znajdziesz tutaj trzy grupy ustawień:

<p>Grupa <b>Podstawowe ustawienia</b> dotyczy ustalania wymiarów i zawiera następujące ustawienia:

<p><b>Ilość kolumn w tabeli</b><br>
W tym polu określasz z ilu kolumn będzie się składać tabela.

<p><b>Ilość wierszy w tabeli</b><br>
W tym polu określasz z ilu wierszy będzie się składać tabela.

<p><b>Szerokość tabeli</b><br>
W tym polu wprowadź szerokość tabeli w punktach. Jeśli chcesz, aby wprowadzona wartość określała szerokość procentową względem okna przeglądarki, zaznacz przełącznik oznaczony jako "%".

<p><b>Obramowanie tabeli</b><br>
To pole określa grubość obramowania tabeli. Zaznacz przełacznik obok, aby niezależnie od wartości w tym polu zawsze umieszczać ten atrybut w znaczniku TABLE.

<p><b>Zawsze wstawiaj ten atrybut</b><br>
Zaznacz ten przełacznik, aby niezależnie od wartości w polu obok zawsze umieszczać atrybut w znaczniku TABLE.

<p><b>Margines komórek (cellpadding)</b><br>
Wartość wprowadzona do tego pola określa rozmiar pustej przestrzeni pomiędzy obramowaniem komórki, a jej zawartością. Inaczej mówiąc margines wewnętrzny. Zaznacz przełacznik obok, aby niezależnie od wartości w tym polu zawsze umieszczać ten atrybut w znaczniku TABLE.

<p><b>Zawsze wstawiaj ten atrybut</b><br>
Zaznacz ten przełacznik, aby niezależnie od wartości w polu obok zawsze umieszczać atrybut w znaczniku TABLE.

<p><b>Odstęp między komórkami (cellspacing)</b><br>
Wartość wprowadzona do tego pola określa rozmiar pustej przestrzeni pomiędzy obramowaniem tabeli, a obszarem wyświetlania komórki. Zaznacz przełacznik obok, aby niezależnie od wartości w tym polu zawsze umieszczać ten atrybut w znaczniku TABLE.

<p><b>Zawsze wstawiaj ten atrybut</b><br>
Zaznacz ten przełacznik, aby niezależnie od wartości w polu obok zawsze umieszczać atrybut w znaczniku TABLE.

<p><b>Wstawiaj spację &amp;nbsp; w pustych komórkach</b><br>
Jeśli zaznaczysz ten przełącznik, przy generowaniu kodu HTML tabeli Pająk umieści we wszystkich pustych komórkach bez zawartości znak niełamliwej spaci &amp;nbsp;.

<p><b>Linie obramowania tabeli</b><br>
Wartości tej listy określają sposób w jaki będą wyświetlane linie obramowania tabeli. Możliwe wartości to:
<ul>
	<li>void - brak obramowań
	<li>above - tylko na górze
	<li>below - tylko na dole
	<li>hsides - na górze i na dole
	<li>vsides - po lewej i po prawej
	<li>lhs - tylko lewstronne obramowania (również komórek)
	<li>rhs - tylko prawostronne
	<li>box - wszystkie strony
	<li>border - wszystkie strony.
</ul>

<p><b>Widoczność obramowań</b><br>
Wartości tej listy określają, które linie będą wyświetlane pomiędzy komórkami tabeli. Możliwe wartości to:
<ul>
	<li>none - brak linii
	<li>groups - pomiędzy grupami
	<li>rows - tylko pomiędzy wierszami
	<li>cols - tylko pomiędzy kolumnami
	<li>all - ze wszystkich stron.
</ul>

<p>W grupie <b>Opis i streszczenie tabeli</b> ustalisz <b>opis</b> czyli rodzaj nagłówka tabeli wyświetlany nad tabelą, a także <b>Streszczenie zawartości tabeli</b>, czyli szerszy opis zawartości tabeli, który może być przydatny w przypadku przeglądarek dla osób niepełnosprawnych. Streszczenie może być np. odczytywane na głos przez taką przeglądarkę dla osób niedowidzących.

<p>Grupa definicji stylu dla tabeli pozwala na przypisanie znacznikowi <tt>&lt;table&gt;</tt> odpowiednich stylów. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzedzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

<h2>Zakładka Ustawienia wierszy</h2>

<p>Ta zakładka pozwala określenie wspólnych ustawień dla wybranych wierszy. Znajdziesz tutaj trzy grupy: Wiersze, Wyrównanie wiersza oraz Definicja stylu dla wiersza. Opiszemy je po kolei:

<p>Grupa <b>Wiersze</b> wyświetla informacje o dostępnych wierszach w bieżącej tabeli. W dodatkowych kolumnach pokazywane są własności poszczególnych wierszy, które ustala się w kolejnych grupach.

<p>Grupa <b>Wyrównanie wiersza</b> pozwala na ustalenie:

<p><b>Wyrównanie w poziomie</b><br>
Ten parametr określa wyrównanie zawartości komórek wiersza w poziomie o ile nie posiadają one własnej definicji wyrównania.

<p><b>Wyrównanie w pionie</b><br>
Ten parametr określa wyrównanie zawartości komórek wiersza w pionie o ile nie posiadają one własnej definicji wyrównania.

<p>Grupa <b>Definicja stylu dla wiersza</b> pozwala na przypisanie znacznikowi <tt>&lt;tr&gt;</tt> odpowiadającemu wierszom odpowiednich stylów. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzedzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.


<h2>Zakładka Komórki, ustawienia i treść</h2>

<p>Ta zakładka prezentuje widok komórek tabeli i pozwala na określanie ustawień poszczególnych komórek jak i ich zawartości. Komórka, dla której wyświetlane są ustawienia, wyróżniona jest jaśniejszym kolorem. Ponadto, jeśli dla komórki zdefiniowany jest atrybut <tt>colspan</tt>, bądź <tt>rowspan</tt> z wartością większą od jeden (czyli łączenie komórek w poziomie i w pionie), komórki, które zostaną połączone z bieżąca komórką, zostają zablokowane i oznaczone kolorem ciemnoszarym. 

<p>Na zakładce, oprócz widoku uproszczonego komórek, są też trzy grupy ustawień. Dwie pierwsze "Ustawienia komórki" oraz "Definicja stylu komórki" znajdują się na zakładce "Ustawienia komórki". Trzecia grupa ustawień będzie widoczna <a href="#zawartosc">po przełączeniu się do planszy "Zawartość komórki"</a>.</p>

<h3>Plansza <b>Ustawienia komórki</b> </h3>

Elementy umieszczone w tej grupie pozwalają na określenie parametrów komórki dotyczących wyrównania i łączenia komórek. Znajdziesz tutaj następujące opcje:

<p><b>Wyrównanie w poziomie</b><br>
Ten parametr określa wyrównanie zawartości komórki w poziomie.

<p><b>Wyrównanie w pionie</b><br>
Ten parametr określa wyrównanie zawartości komórki w pionie.

<p><b>Łączenie komórek w pionie (rowspan)</b><br>
Ten parametr określa ile komórek w układzie pionowym jest łączone w jedną.

<p><b>Łączenie komórek w poziomie (colspan)</b><br>
Ten parametr określa ile komórek w układzie poziomym jest łączone w jedną.

<p><b>Komórka jest nagłówkiem</b><br>
Zaznacz ten przełacznik, aby zdefiniować, iż wybrana komórka jest komórką nagłówka tabeli.

<p><b>Przypisz do wszystkich w kolumnie</b><br>
Wypełnia tą samą treścią i ustawieniami wszystkie komórki wszystkich wierszy w wybranej kolumnie.

<p><b>Przypisz do wszystkich w wierszu</b><br>
Wypełnia tą samą treścią i ustawieniami wszystkie komórki w bieżącym wierszu.

<p>Grupa <b>Definicja stylu dla komórki</b> pozwala na przypisanie znacznikowi <tt>&lt;td&gt;</tt> odpowiadającemu komórkom odpowiednich stylów. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzedzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

<a name="zawartosc"></a>
<h3>Plansza <b>Zawartość komórki</b></h3>
<p>Elementy ułatwiające edycję zawartości komórki tabeli znajdują się w trzeciej grupie ustawień. Staje się ona widoczna po kliknięciu w przycisk "Zawartość". Największym elementem jest pole edycyjne, w którym możesz wpisywać treść komórki. Możesz wprowadzać w nim treść, jaka pojawi się we wskazanej wyżej komórce tabeli, a także tutaj obrazki, odsyłacze, formularze, itp. Ułatwieniem są przyciski znajdujące się po lewej stronie pola edycyjnego.

<p>Po wprowadzeniu zmian do ustawień wybranego wiersza należy wcisnąć przycisk <b>Zaakceptuj zmiany wprowadzone do wiersza</b>, aby zmiany zostały zapamiętane.

<h2>Zakładka Podgląd tabeli</h2>

<p>Na tej zakładce możesz zobaczyć podgląd tabeli. Podgląd wyświetlany jest we wbudowanej przeglądarce MS Internet Explorer, a zatem prezentuje wygląd tabeli w ostatecznej formie. Obok obszaru podglądu znajduje się przycisk symulacji rozdzielczości pozwalający na zobaczenie jak będzie prezentować się tabela w różnych rozdzielczościach.

<h2>Podgląd kodu tabeli</h2>



<p>Jeśli chcesz zobaczyć jak wyglądał będzie kod całej tabeli wygenerowany przez to narzędzie, zobacz na ostatnią zakładkę. Znajdziesz tam obok podglądu również przełączniki pozwalające na wybór formatowania prezentowanego kodu. Może to być HTML pisany wielkimi literami, HTML pisany małymi lub XHTML. Dodatkowo możesz włączyć zawijanie wierszy na podglądzie.

<h2>Wstawianie tabeli</h2>

<p>Jeśli zechcesz wstawić tabelę, uzyj przycisku OK po prawej stronie okna. Pod przyciskiem znajduje się menu, które pozwala na wstawienie kodu w różnym formatowaniu: HTML wielkie litery, HTML małe litery oraz XHTML. Domyślnie po wciśnięciu przycisku OK wstawiany jest kod HTML małymi literami.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_table_tag.php">Edytor znacznika TABLE</a>
	<li><a href="tool_table_quick.php">Bardzo szybka tabela</a>
	<li><a href="main_menu_main.php">Menu programu</a>
	<li><a href="toolbars_general.php">Narzędzia na paskach</a>
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
