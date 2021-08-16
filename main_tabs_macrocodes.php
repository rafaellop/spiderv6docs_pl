
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Zakładka "Szablony"</title>

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
<h1>Zakładka "Szablony"</h1>

<!-- treść pomocy -->

<p>Zakładka Szablony służy do pracy <a href="macrocodes.php">szablonami</a>, które znacznie ułatwiają i przyspieszają proces tworzenia dokumentów w Pająku. Za pomocą tej zakładki możesz również tworzyć i używać szablony

<p>Zakładkę Szablony włączysz za pomocą panelu po lewej lub skrótu klawiszowego CTRL+4, a także z menu pod przyciskiem pokazanym powyżej czy z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_view.php">Wyświetl</a>.




<h2>Zawartość - Menu i drzewko szablonów</h2>

<p>Szablony pogrupowane są w kategorie w postaci drzewka. Do wykonywania operacji na drzewie służy pasek narzędziowy, dostępny w górnej części zakładki:</p>

<p> <b>Dodanie kategorii szablonów</b><br />
Kliknij, aby dodać nową kategorię (folder na drzewku) szablonów.</p>

<p> <b>Dodanie nowego szablonu</b><br />
Kliknij aby utworzyć nowy szablon w aktualnie wybranej kategorii. Do tworzenia i wprowadzania zmian w szablonach służy <a href="macrocodes_editor.php" title="Pomoc do Edytora szablonów">Edytor szablonów</a></p>

<p> <b>Usunięcie wybranego szablonu lub kategorii.</b><br />
Kliknij, jeśli chcesz usunąć szablon lub kategorię. Po kliknięciu pojawi się pytanie o potwierdzenie. Jeśli szablon, lub kategorię usunięto przypadkowo, jest możliwość przywrócenia ich z "Kosza" Windows.</p>

<p> <b>Modyfikacja wybranego szablonu lub nazwy kategorii</b><br />
Jeśli wybrany jest szablon, kliknięcie otworzy okno "Edytor szablonów".<br />
Jeśli wybrana jest kategoria, kliknięcie otworzy okienko zmiany nazwy kategorii.</p>

<p> <b>Wstawianie szablonu</b><br />
Kliknij, aby użyć szablonu. Po kliknięciu na strzałkę obok przycisku dostępne będą cztery opcje:</p>

<ul>
	<li><p> <b>Wstaw szablon w pozycji kursora</b><br />
			Kliknij, jeśli chcesz wstawić szablon w miejscu, w którym postawiono kursor w zakładce Tworzenie.</p>
			<p>Jeśli w oknie Tworzenie został zaznaczony jakiś tekst, może on zostać zamieniony na środkową część szablonu (jeśli została ona zdefiniowana w szablonie)</p>
			</li>
	<li><p> <b>Wstaw szablon bez środka</b><br />
			Kliknij, jeśli chcesz wstawić szablon w miejscu, w którym postawiono kursor w zakładce Tworzenie.</p>
			<p>Środkowa część szablonu nie zostanie użyta. Jeśli w oknie Tworzenie  został zaznaczony jakiś tekst, pozostanie on nienaruszony. Lewa i prawa część szablonu obejmą zaznaczony tekst.</p>
			<p>Opcja ta używana jest najczęściej do obejmowania zaznaczonego tekstu przygotowanym w szablonzie znacznikiem wraz z atrybutami.</p>
			</li>
	<li><p> <b>Wstaw szablon z lewą częścią do HEAD</b><br />
		Kliknij, jeśli chcesz wstawić szablon, którego lewa część zostanie umieszczona w sekcji HEAD dokumentu HTML. Jeśli aktualny dokument nie posiada sekcji HEAD, zostanie ona utworzona.</p>
		<p>Jeśli w oknie Tworzenie został zaznaczony jakiś tekst, pozostanie on nienaruszony. Środkowa i prawa część szablonu obejmą zaznaczony tekst.</p>
			</li>
	<li><p><b>Utwórz nowy dokument</b><br />
			Kliknij, jeśli chcesz utworzyć z szablonu nowy dokument. Pojawi się okienko z pytaniem o nazwę pliku docelowego i miejsce, w którym ma zostać zapisany. Nazwa nowego dokumentu będzie zaproponowana na podstawie nazwy szablonu, z którego dokument ma zostać utworzony.</p>
			<p>Jeśli w szablonzie umieszczono odnośniki do obrazków i inny dokumentów, zostaną one skopiowane we wskazane miejsce.</p>
			<p>Nowy dokument zostanie automatycznie otwarty do edycji w oknie Tworzenie.</p>
			<p>Jeśli w <a href="settings_macrocodes.php">Ustawieniach programu</a> nie zdefiniowano inaczej, jest to domyślna opcja dla szablonów typu "Szablon dokumentu".</p>
			</li>
</ul>

<p><a name="default_template"></a><b>Ustawienie szablonu domyślnym szablonem</b><br />
Umożliwia ustawienie wskazanego szablonu domyślnym szablonem nowego dokumentu. Szablon ten można wywołać za pomocą skrótu klawiszowego (standardowo Ctrl+Shift+N), lub z menu <a href="main_menu_file.php">Plik</a> / <a href="main_menu_file_new.php">Nowy dokument</a>.

</p>



<p> <b>Importowanie makroznaczników z Pająka 2000</b><br />
Kliknij, jeśli chcesz zaimportować makroznaczniki z Pająka 2000 (jeśli był zainstalowany w systemie).</p>

<p>  <b>Włączenie lub wyłączenie automatycznego podglądu szablonów</b><br />
Kliknij jeśli chcesz włączyć lub wyłączyć okienko podglądu szablonów. </p>

<p>  <b>Otwórz folder szablonów w Eksploratorze Windows</b><br />
Kliknij jeśli chcesz wyświetlić zawartośc foldera z szablonami w oknie Eksploratora Windows. </p>

<p>  <b>Pomoc do zakładki Szablony</b><br />
Wyświetla ten temat Pomocy. </p>

<p>Szablony możesz przenosić między kategoriami za pomocą przeciągania. Aby skopiować szablon do innej kategorii, bez usuwania go z kategorii oryginalnej, przeciągnij go z wciśniętym jednocześnie klawiszem CTRL.</p>


<h2>Podgląd szablonów</h2>

<p>Okno podglądu służy do zapoznania się z treścią szablonu. Można w nim na bieżąco śledzić zmiany, jakie następują w wyniku edycji zmiennych i włączania/wyłączania bloków.</p>

<p>Dostępne są dwa okna podglądu:
<ul>
	<li><p><b>Małe okno podglądu</b> - u dołu zakładki Szablony.<br />
	Mały podgląd jest włączany za pomocą ikony w pasku narzędzi w górnej części zakładki Szablony.</p></li>
	<li><p><b>Duże okno podglądu</b> - w oknie Przeglądanie.<br />
	Duży podgląd może zostać włączony, jeśli nie wystarcza małe okienko podglądu. </p></li>
	<p>Aby włączyć/wyłączyć duży podgląd należy uprzednio włączyć mały podgląd (patrz wyżej). Na okienkiem małego podglądu jest ikona "<b>Powiększ podgląd</b>" (mała lupa). Po włączeniu dużego podglądu, mały podgląd może zostać wyłączony.</p>
</ul></p>

<p>&nbsp;<b>Wybór wykorzystywanej przeglądarki</b><br />
Kliknij, aby wybrać przeglądarkę używana do przeglądania w tej zakładce. O ile jest zainstalowana w systemie (<a href="main_preview_embed.php">czytaj więcej na ten temat</a>), możesz skorzystać z przeglądarki:
<ul>
	<li>MS Internet Explorer</li>
	<li>Mozilla</li>
</ul></p>

<p><b>Wyświetlaj źródło szablonu</b><br />
Kliknij, aby na podglądzie szablonu zobaczyć kod jaki będzie generował, a nie wynik w postaci wyświetlanego przez przeglądarkę dokumentu. Opcja jest dostępna po włączeniu <b>małego podglądu</b> (patrz wyżej).</p>

<p>Poniżej okienka podglądu jest pasek statusu zawierający nazwę szablonu, a także jego typ.</p>

<h2>Zmienne i Bloki</h2>




<a name="variables"></a>
<p><b>Zmienne</b><br />
Zmienne w szablonie służą do ustawiania parametrów, które używane będą przy korzystaniu z danego szablonu. </p>
<p>Jeśli w szablonie zdefiniowano jakieś zmienne, u dołu zakładki Szablony pojawi się przycisk służący do wyświetlenia inspektora zmiennych. Można w nim zmienić domyślne wartości na własne. Powrót na listę szablonów po kliknięciu a przycisk "Szablony" (z lewej). Wprowadzone zmiany nie mają wpływu na zawartość szablonu i obowiązują do chwili przełączenia się na inny szablon.</p>

<a name="blocks"></a>
<p><b>Bloki</b><br />
Bloki w szablonie są to wydzielone fragmenty szablonu, które mogą (ale nie muszą) zostać wstawione. Pozwalają one na maksymalne dopasowanie generowanego kodu do aktualnych potrzeb. Używane są szczególnie w rozbudowanych szablonach, jak szablony dokumentów itp.</p>

<p>Jeśli w szablonie zdefiniowano jakieś bloki, u dołu zakładki Szablony pojawi się przycisk służący do wyświetlenia inspektora bloków. Można w nim włączać i wyłączać bloki, co skutkuje ich umieszczeniem (bądź nie) w wygenerowanym kodzie. Powrót na listę szablonów po kliknięciu a przycisk "Szablony" (z lewej). Wprowadzone zmiany nie mają wpływu na zawartość szablonu i obowiązują do chwili przełączenia się na inny szablon.</p>

<h2>Korzystanie ze skrótów klawiszowych</h2>

<b>Skrót klawiszowy domyślnego szablonu</b><br />
Możliwe jest wybranie jednego szablonu domyślnych szablonem dla nowego dokumentu.  W tym celu wskaż na drzewku wybrany szablon, a następnie kliknij w przycisk <a href="#default_template">Ustawienie szablonu domyślnym szablonem</a>.

<p>Szablon ten można wywołać za pomocą skrótu klawiszowego (standardowo Ctrl+Shift+N).</p>

<p><b>Korzystanie ze skrótów klawiszowych do pozostałych szablonów</b><br />
Do najczęściej wykorzystywanych szablonów możesz przypisać skróty klawiszowe. Ze względu na dużą ilość szablonów, a jednocześnie ograniczoną ilość możliwych kombinacji skrótów, wprowadzona została dwustopniowa kombinacja:</p>

<ul>
	<li><tt>Ctrl+J</tt>, a następnie skrót szablonu</li>
</ul>

<p>Po wciśnięciu <tt>Ctrl+J</tt>, przez okres zdefiniowany w <a href="settings_macrocodes.php">Ustawieniach szablonów</a>, w zakładce Szablony (standardowo 3 s.) Pająk deaktywuje wszystkie skróty klawiszowe programu i włącza skróty klawiszowe szablonów. Po upłynięciu ustalonego czasu lub kliknięciu w edytorze skróty przypisane do szablonów są deaktywowane i na powrót w programie działają skróty ogólne.</p>

<p>Skrót przypisany do danego szablonu można zobaczyć w polu opisu szablonu (pod małym okienkiem podglądu) u dołu zakładki Szablony.</p>


<p><b>Przypisywanie skrótów klawiszowych do szablonów</b><br />
Aby przypisać do szablonu skrót klawiszowy należy skorzystać z <a href="macrocodes_editor.php">Edytora szablonów</a>. W tym celu zaznacz na drzewku szablon, który chcesz edytować i kliknij w przycisk "Modyfikacja wybranego szablonu lub kategorii" (w menu nad drzewkiem szablonów), lub wciśnij przycisk <tt>F2</tt>.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="macrocodes.php">Szablony - ogólnie</a>
	<li><a href="settings_macrocodes.php">Ustawienia szablonów</a>
	<li><a href="macrocodes_editor.php">Edytor szablonów</a>
	<li><a href="macrocodes_instruction.php">Tworzenie szablonu - instrukcja krok po kroku</a>
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