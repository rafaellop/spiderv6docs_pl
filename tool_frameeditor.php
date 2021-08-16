
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Kreator ramek</title>

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
<h1>Narzędzia - Kreator ramek</h1>


<!-- treść pomocy -->

<p>Kreator ramek umożliwia tworzenie najbardziej nawet skomplikowanych ramek w sposób prosty i przyjemny. Za pomocą kilku kliknięć możesz wizualnie tworzyć układy, zmieniać ich wielkości, czy wprowadzać modyfikacje układu.</p>

<p>Zawartość okna kreatora została tematycznie pogrupowana w pięciu zakładkach, co znacząco ułatwia pracę w narzędziu:
<ul>
	<li><a href="#frameset_editor">Definiowanie układu ramek</a></li>
	<li>Ustawienia wybranej ramki (<a href="#frameset_settings">ustawienia głównej ramki</a>, <a href="#curr_frame_settings">ustawienia ramki podrzędnej</a>)</li>
	<li><a href="#add_site_settings">Dodatkowe ustawienia strony</a></li>
	<li><a href="#structure_preview">Podgląd struktury ramkowej</a></li>
	<li><a href="#code_preview">Podgląd kodu źródłowego</a></li>
</ul></p>




<h2>Uruchamianie</h2>

<p><p>Narzędzie uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_frames.php">Ramki</a> / Kreator ramek. Ikona polecenia została pokazana obok.

<p>W momencie uruchomienia kreatora zostaniesz poproszony o podanie nazwy dokumentu, w którym umieszczona ma zostać struktura ramek. Po utworzeniu tego dokumentu włączone zostanie okno narzędzia.</p>


<a name="frameset_editor"></a>
<h2>Definiowanie układu ramek</h2>

<p>W tej zakładce możesz wizualnie tworzyć układ ramek w dokumencie.</p>

Pierwotny układ to dwie ramki pionowe. Możesz to zmienić w drugiej zakładce narzędzia, bądź za pomocą menu kontekstowego pojawiającego się po kliknięciu na wybraną ramkę prawym klawiszem myszy.

<p>Zaznacz ramkę (bieżąca ramka wyróżniona jest kolorem białym), a następnie skorzystaj z przycisków menu:

<p><b>Podziel w pionie</b><br />
Kliknij, aby podzielić bieżącą ramkę na dwie ramki pionowe.

<p><b>Podziel w poziomie</b><br />
Kliknij, aby podzielić bieżącą ramkę na dwie ramki poziome.

<p><b>Usunięcie wybranego podziału</b><br />
Kliknij, aby usunąć podział bieżącej ramki. Usunięte zostaną wszystkie ramki, które tworzą dany podział (znacznik FRAMESET). Każda para ramek tworząca podział jest otoczona pojedynczym obramowaniem, co ułatwia zorientowanie się, jak przebiegają podziały.

<p><b>Zmiana rozmiaru podglądu układu</b><br />
Wybierz z listy rozmiar podglądu układu. Masz do wyboru standardowe wielkości ekranów w Windows:
<ul>
	<li>640x480</li>
	<li>800x600</li>
	<li>1024x768</li>
	<li>1280x1024</li>
	<li>1600x1200</li>
	<li>Domyślny - dopasowuje się do wymiarów okna</li>
</ul>

<p>Jeśli chcesz zmienić proporcje podziału, "chwyć" za kontur ramki i przeciągnij w odpowiednie miejsce.</p>

<p>Aby edytować bieżącą (zaznaczoną na biało) ramkę przejdź do następnej zakładki - <a href="#curr_frame_settings">Ustawienia wybranej ramki</a>. W tym celu możesz podwójnie kliknąć na wybranej ramce.</p>




<a name="frameset_settings"></a>
<h2>Ustawienia wybranej ramki - Podział i ustawienia głównej ramki</h2>

W tej sekcji zakładki <b>Ustawienia wybranej ramki</b>  ustawisz opcje dotyczące układu ramek, w skład którego wchodzi bieżąca ramka (znacznik &lt;FRAMESET&gt;). 

<p><b>Sposób podziału</b><br />
Wybierz sposób, w jaki ramki mają być umieszczone:
<ul>
	<li><b>Podział pionowy</b> - ramki będą umieszczone jedna obok drugiej</li>
	<li><b>Podział poziomy</b> - ramki będą umieszczone jedna nad drugą</li>
</ul>

<p><b>Styl</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzędzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Klasa</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>ID</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy ładowaniu dokumentu do ramki itp.

<p><b>Obramowanie wokół ramki</b><br />
Zaznacz tę opcję, jeśli chcesz określić grubość obramowania wokół ramki. Ustawienie to ma status przestarzały (ang.  <i>deprecated</i>) i nie zaleca się korzystania z niego. Zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>.</p>
<ul>
	<li><b>Grubość obramowania</b> - wprowadź grubość obramowania</li>
</ul>

<p><b>Kolor obramowania</b><br />
Zaznacz tę opcję, jeśli chcesz wybrać kolor obramowania, a następnie kliknij w pole obok w celu otworzenia <a href="tool_colorpalette.php">palety kolorów</a> która umożliwia wskazanie koloru. Ustawienie to ma status przestarzały (ang.  <i>deprecated</i>) i nie zaleca się korzystania z niego. Zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>.</p>

<p><b>Odstęp pomiędzy ramkami</b><br />
Wprowadź odstęp, jaki ma być zachowany pomiędzy sąsiednimi ramkami.




<a name="curr_frame_settings"></a>
<h2>Ustawienia wybranej ramki - Ustawienia ramki podrzędnej</h2>

<p>W tej sekcji zakładki <b>Ustawienia wybranej ramki</b> ustawisz opcje bieżącej ramki (wybranej w zakładce <a href="#frameset_editor">Definiowanie układu ramek</a>).</p>

<p><b>Nazwa ramki</b><br />
Podaj nazwę bieżącej ramki.

<p><b>Zawartość</b><br />
Wprowadź adres dokumentu, jaki ma być wczytany do bieżącej ramki. Możesz skorzystać z listy rozwijanej, na której znajdują się ścieżki do ostatnio używanych dokumentów, bądź z narzędzia do wyboru pliku (przycisk obok pola).

<p><b>Rozmiar</b><br />
Podaj rozmiar ramki (szerokość - gdy ramki obok siebie, wysokość, gdy jedna nad drugą)
<ul>
	<li><b>Rozmiar w procentach</b> - Zaznacz te opcję, jeśli rozmiar ramki chcesz podać w procentach. W tym wypadku pojawi się suwak, którym będziesz mógł wybrać wartość procentową.</li>
</ul>

<p><b>Zabezpiecz przed zmianą rozmiaru</b><br />
Zaznacz tę opcję, jeśli chcesz, by gość serwisu nie mógł zmienić rozmiaru ramki. W przeciwnym wypadku, gdy umieści myszkę nad miejscem, w którym kończy się ramka, będzie mógł je "chwycić" i zmienić rozmiar ramki.

<p><b>Suwaki</b><br /><br />
Wybierz, czy w ramce mają być widoczne paski przewijania. Dostępne są trzy opcje:
<ul>
	<li><b>Automatycznie</b> - będą się pojawiały automatycznie w sytuacji, gdy dokument będący zawartością ramki nie będzie się w całości w niej mieścił,</li>
	<li><b>Zawsze widoczne</b> -  będą widoczne bez względu na to czy dokument trzeba przewijać, czy tez mieści się w całości,</li>
	<li><b>Zawsze ukryte</b> -  nigdy nie będą widoczne (jeśli zdarzy się, iż dokument nie mieści się w ramce, nie będzie możliwości jego przewinięcia).</li>
</ul>

<p><b>Szerokość marginesu</b>, <b>Wysokość marginesu</b><br />
Wprowadź szerokość i wysokość marginesu wokół ramki.

<p><b>Styl, Klasa, ID, Obramowanie wokół ramki, Grubość obramowania, Kolor obramowania</b><br />
Elementy te pozwalają ustawić opcje dla bieżącej ramki, działając identycznie jak analogiczne elementy określające opcje ramki nadrzędnej w sekcji <a href="#frameset_editor">Podział i ustawienia głównej ramki</a>.



<a name="add_site_settings"></a>
<h2>Dodatkowe ustawienia strony</h2>

<p>W tej zakładce możesz ustawić opcje dla strony zawierającej strukturę ramek.</p>

<p><b>Tytuł strony</b><br />
Wprowadź tytuł strony (znacznik &lt;TITLE&gt;).

<p><b>Ustawienie sekcji META</b><br />
Kliknij, aby otworzyć <a href="tool_meta.php">Edytor sekcji META</a> w celu ustawienia informacji dotyczących dokumentu.

<p><b>Wstawiaj również znaczniki spoza specyfikacji</b><br />
Jeśli zaznaczysz tę opcję, Pająk w ostatecznym kodzie strony ramkowej umieści również te atrybuty, które nie są zalecane w specyfikacji HTML. Jeśli wyłączysz tę opcję, atrybuty te zostaną pominięte, nawet w przypadku gdy je ustawisz w opcjach zakładki <a href="#curr_frame_settings">Ustawienia wybranej ramki</a>.

<p><b>Treść wyświetlana w przeglądarce bez obsługi ramek</b><br />
W tym polu możesz wpisać treść, jaka ma się pojawić w przeglądarce, która nie obsługuje ramek. W praktyce takich przeglądarek już się nie używa, gdyż nawet nowe przeglądarki tekstowe potrafią poprawnie obsłużyć ramki.


<a name="structure_preview"></a>
<h2>Podgląd struktury ramkowej</h2>

W tej zakładce przedstawiony został wygląda ramek w dokumencie wraz z ich zawartością według wybranych ustawień. 

<p><b>Zmiana rozmiaru podglądu</b><br />
Wybierz z listy rozmiar podglądu. Masz do wyboru standardowe wielkości ekranów w Windows:
<ul>
	<li>640x480</li>
	<li>800x600</li>
	<li>1024x768</li>
	<li>1280x1024</li>
	<li>1600x1200</li>
	<li>Domyślny - dopasowuje się do wymiarów okna</li>
</ul>

<a name="code_preview"></a>
<h2>Podgląd kodu źródłowego</h2>



<p>W tej zakładce możesz przejrzeć kod źródłowy, jaki zostanie wstawiony do dokumentu.</p>

<p>Masz do wyboru trzy style kodu:
<ul>
	<li><b>HTML - wielkie litery</b> - kod zostanie przedstawiony w języku HTML, gdzie wszystkie znaczniki ich atrybuty pisane będą wielkimi literami</li>
	<li><b>HTML - małe litery</b> - kod zostanie przedstawiony w języku HTML, gdzie wszystkie znaczniki ich atrybuty pisane będą małymi literami</li>
	<li><b>XHTML</b> - kod zostanie przedstawiony w języku XHTML (następca HTML)</li>
</ul>

<p><b>Zawijanie wierszy na podglądzie kodu źródłowego ramek</b><br />
Zaznacz tę opcję, aby kod źródłowy w oknie podglądu był zawijany tak, aby widoczne były wszystkie znaczniki i ich zawartość.



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
	<li><a href="tool_frameset.php">Edytor znacznika układu ramek FRAMESET</a>
	<li><a href="main_menu_main.php">Menu programu</a>
	<li><a href="toolbars_general.php">Inne narzędzia na paskach</a>
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
