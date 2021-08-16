
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>HTML Help - Edytor projektu HTML Help</title>

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
<h1>HTML Help - Edytor projektu HTML Help</h1>


<p>Za pomocą edytora projektu HTML Help ustalamy wszystkie parametry projektu, oraz decydujemy o późniejszych właściwościach, jakie będzie miał utworzony z projektu plik CHM. Także w tym edytorze ustalamy, jakie dodajemy do projektu składniki.
</p>

<h2>Uruchamianie</h2>

<p>Opisywane narzędzie możesz uruchomić za pomocą przycisku oznaczonego ikoną pokazaną powyżej. Przycisk uruchomienia tego okna znajduje się np. w menu HTML Help oraz na pasku narzędzi HTML Help.

<h2>Użycie edytora projektu</h2>

<p>
Edytor projektu podzielony jest na cztery części-zakładki, każda spełniający inną funkcję w procesie tworzenia projektu.
</p>

<h2>Pliki składowe projektu</h2>

<p><b>Pliki projektu przeznaczone do wkompilowania</b><br />
W jedynym, dużym oknie należy wczytać z dysku wszystkie pliki, jakie chcemy umieścić w projekcie. Do tego celu służy ikonka z plusem znajdująca się prawej stronie okna. Można dodawać wiele plików jednocześnie, lub, w czasie dalszego tworzenia projektu, dodawać również pojedyncze pliki. Ikona z minusem służy do usuwania zbytecznych plików.</p>

<h2>Ogólne ustawienia projektu</h2>

<p>W zakładce tej ustalamy takie parametry, jak domyślne ustawienia ogólne, parametry międzynarodowe języka i czcionek, rodzaje plików definicyjnych, oraz ustawienia samego kompilatora.</p><br />

<p><b>Domyślne parametry</b></p>
<ul>
   <li><p><b>Domyślny tytuł</b><br />
		W tym polu wpisz domyślny tytuł okna pomocy. Wartość ta ma jednak mniejsze znaczenie niż tytuł zdefiniowany dla domyślnego okna.</p>
   <li><p><b>Domyślna strona startowa</b><br />
   		Korzystając z rozwijanej listy wybierz plik, który będzie załadowany do okna HTML Help w momencie uruchomienia pliku CHM. Wartość ta ma jednak mniejsze znaczenie niż strona startowa zdefiniowana dla domyślnego okna.</p>
   <li><p><b>Domyślne okno</b><br />
		Korzystając z rozwijanej listy wybierz okno, które będzie używane do wyświetlania zawartości HTML Help. Lista może być na tym etapie pusta, bowiem okna definiuje się w następnej zakładce.</p>
</ul>

<p><b>Ustawienia międzynarodowe</b></p>
<ul>
   <li><p><b>Język</b><br />
		Z listy tej można wybrać język, w jakim napisane są strony wchodzące w skład projektu HTML Help.
   <li><p><b>Zestaw znaków</b><br />
		Z listy tej można wybrać odpowiedni skrypt dla czcionki używanej na stronach projektu HTML Help.
   <li><p><b>Czcionka</b><br />
		Korzystając z przycisku obok oznaczonym literką "A" móżna wybrać rodzaj czcionki, oraz jej rozmiar. Czcionka ta będzie miała zastosowanie w interfejsie skompilowanego pliku CHM - nie do wyświetlenia zawartości stron.
</ul>

<p><b>Pliki definicyjne projektu</b></p>
<ul>
   <li><p><b>Nazwa pliku CHM po kompilacji</b><br />
		W polu tym jest miejsce na wpisanie nazwy pliku, jaka będzie nadana skompilowanemu plikowi HTML Help. Jeśli nie podasz rozszerzenia nazwy pliku (<tt>.chm</tt>), Pająk zrobi to automatycznie.</p>
   <li><p><b>Nazwa pliku raportu</b><br />
		Jeśli chcemy, by sporządzony został raport z kompilacji, należy w tym polu wpisać nazwę pliku raportu z rozszerzeniem (np. <tt>raport.txt</tt>).</p>
   <li><p><b>Nazwa pliku spisu treści</b><br />
   		W polu tym należy wprowadzić nazwę pliku spisu treści, który ma być użyty do tego projektu HTML Help. <a href="tool_htmlhelp_hhc_editor.php">Spis treści</a> można utworzyć edytorem, jaki zostanie otwarty po kliknięciu na ikonkę obok pola. Jeśli plik ze spisem treści istnieje już na dysku, możesz wskazać go za pomocą okienka otwieranego przyciskiem obok.</p>
   <li><p><b>Nazwa pliku skorowidza</b><br />
   		W polu tym należy wprowadzić nazwę pliku skorowidza (indeksu), który ma być użyty do tego projektu HTML Help. <a href="tool_htmlhelp_hhk_editor.php">Skorowidz</a> można utworzyć edytorem, jaki zostanie otwarty po kliknięciu na ikonkę obok pola. Jeśli plik indeksu istnieje już na dysku, możesz wskazać go za pomocą okienka otwieranego przyciskiem obok.</p>
   <li><p><b>Automatyczne tworzenie spisu treści (<tt>.hhc</tt>) podczas kompilacji</b><br />
   		Włączenie tej opcji pozwala na automatyczne utworzenie spisu treści na podstawie znajdujących się w plikach składowych projektu tytułów stopnia pierwszego, drugiego, itd., odpowiednio zagnieżdżając poziomy. Funkcja ta działa tym poprawniej, im mniej poziomów uwzględniamy. Nazwami w spisie treści stają się tytuły danego stopnia.</p>
        <ul type="circle">
   		<li><p><b>Maks. poziom zagłębienia:</b><br />
   				W polu zdefiniować można, ile poziomów zagłębienia uwzględniać ma automatycznie tworzony spis treści.</p>
        </ul>
   <li><p><b>Włącz słowa kluczowe z plików HTML</b><br />
		Włączenie tej opcjio powoduje automatyczne utworzenie skorowidza na podstawie słów kluczowych znajdujących się w plikach składowych projektu. Słowa kluczowe tworzy się w specjalny sposób. Przykładowa definicja słowa kluczowego w pliku HTML może wyglądać następująco:
<pre>
<b>&lt;object type</b>="aplication/x-oleobject"
<b>classid</b>="clasid:1e2a7bd0-dab9-11d0-b93a-00c04fc99f9e"&gt;
   <b>&lt;param</b> <b>name</b>="Keyword" <b>value</b>="Pająk"&gt;
   <b>&lt;param</b> <b>name</b>="Keyword" <b>value</b>="HTML"&gt;
   <b>&lt;param</b> <b>name</b>="Keyword" <b>value</b>="PHP"&gt;
   <b>&lt;param</b> <b>name</b>="Keyword" <b>value</b>="XHTML"&gt;
<b>&lt;/object&gt;</b>
</pre>
W Pająku, na pasku narzędzi "HTML Help" znajduje się narzędzie do tworzenia <a href="tool_htmlhelp_compiler_info.php">słów kluczowych HTML Help</a>.</p>
</ul>   
   
<p><b>Ustawienia kompilatora</b></p>
<ul>
   <li><p><b>Kompatybilność</b><br />
   Opcja wybrana z listy określa zgodność z bibliotekami HTML Help. Nowsza wersja wymaga posiadania w systemie nowszej wersji przeglądarki MS Internet Explorer, ale daje również większe możliwości, jak np. tworzenie binarnych skorowidzów.
   </p>
   <li><p><b>Bez folderów w pliku wynikowym</b><br />
   Zaznaczenie tej opcji spowoduje wyłączenie z kompilacji wszystkich podfolderów w katalogu projektu.
   </p>
   <li><p><b>Wsparcie dla rozszerzonej dekompilacji</b><br />
   Opcja ta została dodana ze względu na obecność w specyfikacji HTML Help, jednakże nawet jej wyłączenie nie powoduje, iż dekompilacja projektu jest niemożliwa. Można odzyskać wszystko, oprócz definicji projektu (plik HHP).
   </p>
   <li><p><b>Wkompiluj informację o wyszukiwaniu pełnotekstowym</b><br />
   Zaznaczenie tej opcji pozwala utworzyć bazę dla pełnotekstowego wyszukiwania. Jest ona w formie osobnej zakładki w skompilowanym pliku CHM.
   </p>
	<li><p><b>Nazwa pliku stop list dla wyszukiwania pełnotekstowego</b><br>W tym polu wprowadź nazwę pliku z definicją stop list dla wyszukiwania pełnotekstowego. Zdefiniowanie takiego pliku oraz wpisanie w nim słów, które nie powinny być uwzględniane podczas wkompilowywania informacji o wyszukiwaniu pełnotekstowym, pozwalają zmniejszyć rozmiar pliku wynikowego CHM. Przykładowa lista takich słów może zawierać spójniki lub inne słowa, które nie mają znaczenia przy wyszukiwaniu. Plik stop listy definiuje się wpisując do niego po jednym słowie w każdym wierszu.</p>
   <li><p><b>Utwórz binarny skorowidz</b><br />
   Zaznaczenie tej opcji pozwala na utworzenie binarnej wersji skorowidza. W HTML Help istnieją dwie wersje indeksu: binarna, i jako mapa witryny. Binarna jest mniejsza, szybsza w działaniu, pozwala łączyć ze sobą skorowidze różnych plików, jest automatycznie sortowana w trakcie kompilacji, pozwala łączyć wyrazy kluczowe zawarte w dokumentach HTML (KLinks). Mapa natomiast nie musi być kompilowana, można ją wykorzystać nie tylko w pliku <tt>*.chm</tt>, ale i na stronach WWW, użytkownik ma pełną kontrolę nad jej zawartością (jest to plik tekstowy z formatowaniem HTML).
   </p>
   <li><p><b>Utwórz binarny spis treści</b><br />
   Pozwala utworzyć binarną wersję spisu treści, co przyspiesza jej ładowanie, gdy spis jest bardzo obszerny. Jedną z jego zalet jest możliwość zastosowania nieobecnej w HTML Help Workshop opcji Next/Previous w pasku narzędziowym (pozwala to przeglądać po kolei dokumenty do przodu lub wstecz za pomocą przycisków na pasku). Wersja binarna ma ograniczenia, np. nie obsługuje ikon innych niż książka i strona, a także typów informacji. W normalnych warunkach tworzenie binarnego spisu treści nie jest konieczne. Jeżeli chcemy łączyć później pliki archiwów (Merge), jest to wręcz niedozwolone. 
   </p>
</ul><br />
   
<a name="definiowanie-okien"></a>
   <h2>Definiowanie okien</h2>
   
<p>
Definiowanie okien nie jest obowiązkowe. Utworzenie jednak chociaż jednego okna pozwala na określenie mnóstwa dodatkowych parametrów wyglądu i zachowania okna HTML Help. Dodatkowe definicje okien mogą być również użyteczne, jeśli niektóre tematy mają być wyświetlane w osobnych oknach. Definicje okien mają pierwszeństwo przed niektórymi domyślnymi ustawieniami projektu.
</p>

<p>Uwaga! W oknie tym po dokonaniu jakiejkolwiek zmiany należy ją zatwierdzić klikając na przycisku "Zapamiętaj ustawienia aktualnego okna" oznaczonym ikonką  w przeciwnym razie dokonane zmiany nie będą uwzględnione.
</p><br />


<p><b>Nazwa okna</b><br />
Lista zawiera nazwy wszystkich okien zdefiniowanych dla aktualnego projektu. Okna można dodawać i usuwać za pomocą przycisków obok, oznaczonych "+" oraz "-".

<p>Poniżej listy okien znajduje się pięć zakładek z umieszczonymi wyżej przyciskami służącymi do ich przełączania:</p>

<ul>
        <li><b>Informacja</b>
        <li><a href="#dimensions">Rozmiary, panel</a>
        <li><a href="#toolbar">Pasek narzędzi</a>
        <li><a href="#main_files">Pliki główne</a>
        <li><a href="#design">Styl wyglądu</a>
</ul>

<a name="dimensions"></a>
<h3>Rozmiary, panel</h3>
<ul>
   <li><p><b>Tytuł okna</b><br />
	W tym polu należy wpisać tytuł, jaki będzie pokazywał się na pasku tytułowym okna HTML Help.
	</p>
   <li><p><b>Pamiętaj pozycję i rozmiar okna po zmianie przez użytkownika</b><br />
	Zaznaczenie tej opcji powoduje, że będzie zapamiętywana pozycja i rozmiar okna po ich zmianie przy następnym otwarciu.
	</p>
   <li><p><b>Okno pomocy HTML Help zawsze na wierzchu</b><br />
	Zaznaczenie tej opcji powoduje, że okno HTML Help będzie wobec innych okien systemu zawsze na wierzchu.
	</p>
   <li><p><b>Rozmiar i pozycja okna</b><br />
	W czterech polach: "Od lewej", "Od góry", "Szerokość", "Wysokość" ustawiamy pozycję okna wobec ekranu.
	</p>
   <li><p><b>Autoustawianie</b><br />
	Po kliknięciu na przycisku "Autoustawianie" otworzy się przykładowe okno, którego ręczne ustawienie spowoduje wpisanie wybranych wymiarów i położenia do ustawień.
	</p>
   <li><p><b>Domyślne rozmiary</b><br />
   Po kliknięciu na przycisku "Domyślne rozmiary" spowoduje ustawienie rozmiarów okna HTML Help według rozmiarów domyślnych.
   </p>
</ul>

<p><b>Panel nawigacyjny</b></p>
<ul>
   <li><p><b>Wyświetlaj panel nawigacyjny</b><br />
   Nie zaznaczenie tej opcji spowoduje, że nie będą pokazywane zakładki: spisu treści, indeksu, wyszukiwania, ulubionych.
   </p>
   <li><p><b>Po otwarciu panel ukryty</b><br />
   Zaznaczając tą opcję powodujemy, że po otwarciu okna HTML Help schowany będzie panel nawigacyjny z zakładkami.
   </p>
   <li><p><b>Automatycznie ukrywaj lub wyświetlaj</b><br />
   Włączenie tej opcji spowoduje automatyczne ukrywanie lub pokazywanie panelu nawigacyjnego w momencie, gdy użytkownik opuszcza lub uaktywnia okno HTML Help.
   </p>
   <li><p><b>Szerokość</b><br />
   W oknie tym można ustalić, jaką szerokość będzie miał panel nawigacyjny w oknie HTML Help.
   </p>
   <li><p><b>Pozycja zakładek</b><br />
   Z listy rozwijanej wybieramy pozycję zakładek panelu nawigacyjnego. Są trzy możliwości: standardowo "Na górze", oraz "Po lewej" i "Na dole".
   </p>
   <li><p><b>Synchronizuj automatycznie spis treści</b><br />
   Włączenie tej opcji umożliwia automatyczną synchronizację oglądanego dokumentu ze spisem treści - zaznaczona w spisie treści zostaje wtedy aktualnie oglądana pozycja.
   </p>
   <li><p><b>Ukryj pasek przycisków</b><br />
      Zaznaczając tę opcję powodujemy, iż pasek z przyciskami funkcyjnymi zostanie ukryty. Można go uaktywnić wybierając odpowiednią pozycję w menu.
   </p>
   <li><p><b>Ukryj tekst na pasku</b><br />
   Po zaznaczeniu tej opcji spowodujemy, że napisy pod przyciskami na pasku nie będą pokazywane.
   </p>
   <li><p><b>Domyślna zakładka</b><br />
   Z listy rozwijanej możemy wybrać, która z zakładek panelu nawigacyjnego będzie eksponowana w momencie otworzenia HTML Help. Domyślnie jest to "Spis treści". Ilość zakładek na liście zależna jest od tego, ile ich zdefiniujemy w poniższych opcjach.
   </p>
   <li><p><b>Zakładka "Wyszukaj"</b><br />
   Zaznaczenie tej opcji spowoduje uaktywnienie zakładki wyszukaj. Stosuje się to w przypadku dużych i bardzo dużych projektów, lub ze względu na ich specyfikę, np. jako baza danych.
   </p>
	<ul>
		   <li><p><b>Zaawansowane</b><br />
   				Włączenie tej opcji spowoduje, że zakładka wyszukiwania będzie posiadała dodatkową możliwość logicznych warunków wyszukiwania. Odbywa się to przez dodanie obok pola na wpisanie szukanego ciągu znaków listy rozwijanej z operatorami: AND, OR, NEAR, NOT. Dzięki temu wyszukiwanie zyskuje nowe możliwości i staje się bardziej precyzyjne.
			</p>
	</ul>
   <li><p><b>Zakładka "Ulubione"</b><br />
   Zaznaczenie tej opcji powoduje, że do panelu nawigacyjnego dodana zostanie dodatkowa zakładka. Do niej można dopisać każdy z aktualnie przeglądanych stron, co umożliwia później szybsze do nich dotarcie.
   </p>
</ul><br />


<a name="toolbar"></a>
<h3>Pasek narzędzi</h3>

<p><b>Podstawowe przyciski</b></p>
<ul>
   <li><p><b>Pokaż/Ukryj</b><br />
   Zaznaczenie tej opcji dodaje na pasku narzędziowym przycisk, który chowa lub pokazuje schowany panel nawigacyjny.
   </p>
   <li><p><b>Wstecz</b><br />
   Zaznaczenie tej opcji dodaje na pasku narzędziowym przycisk, który powoduje cofnięcie do poprzednio przeglądanej strony.
   </p>
   <li><p><b>Dalej</b><br />
   Zaznaczenie tej opcji dodaje na pasku narzędziowym przycisk, który przenosi nas do następnej ze stron, jeśli cofnęliśmy się do poprzedniej.
   </p>
   <li><p><b>Zatrzymaj</b><br />
   Przycisk szczególnie przydatny, gdy za pomocą HTML Help poruszamy się po zasobach Internetu. Przycisk zatrzymuje ładowanie strony.
   </p>
   <li><p><b>Odśwież</b><br />
   Przycisk ten powoduje ponowne załadowanie zawartości okna.
   </p>
   <li><p><b>Start</b><br />
   Przycisk ten ładuje stronę zdefiniowaną w następnej zakładce "<b>Pliki główne</b>" jako stronę startową.
   </p>
   <li><p><b>Opcje</b><br />
   Przycisk uruchamia listę, na której znajdują się wszystkie zdefiniowane przez użytkownika opcje HTML Help, dodatkowo: systemowe opcje internetowe, drukowanie, oraz przełącznik wyróżniania podczas wyszukiwania (zaznaczanie blokiem wyszukanych fraz)
   </p>
   <li><p><b>Drukuj</b><br />
   Przycisk umożliwia drukowanie. Po jego kliknięciu pokazuje się okno wyboru dwóch możliwości: drukowanie wybranego tematu, albo drukowanie zaznaczonego nagłówka ze wszystkimi podtematami.
   </p>
   <li><p><b>Zlokalizuj</b><br />
   Kliknięcie na tym przycisku powoduje wskazanie pozycji aktualnie przeglądanej strony w spisie treści.
   </p>
</ul>

<p><b>Dodatkowe przyciski</b></p>
<ul>
   <li><p><b>Skocz 1</b><br />
   Przycisk definiowany całkowicie przez użytkownika. W dwu polach jest miejsce na opis przycisku, który pojawiał się będzie pod jego ikoną na pasku, oraz na odwołanie do lokalnej strony, bądź na wpisanie adresu internetowego.
   </p>
   <li><p><b>Skocz 2</b><br />
   Przycisk definiowany całkowicie przez użytkownika. W dwu polach jest miejsce na opis przycisku, który pojawiał się będzie pod jego ikoną na pasku, oraz na odwołanie do lokalnej strony, bądź na wpisanie adresu internetowego.
   </p>
   <li><p><b>Wstecz</b><br />
   Przycisk powoduje cofnięcie się do wcześniej przeglądanej strony. Uwaga! Wymaga obecności binarnego spisu treści.
   </p>
   <li><p><b>Dalej</b><br />
   Przycisk powoduje przejście do następnej strony. Uwaga! Wymaga obecności binarnego spisu treści.
   </p>
   <li><p><b>Zwiększenie rozmiaru czcionki</b><br />
   Przycisk ten powoduje przełączanie między rozmiarami czcionek, zdefiniowanymi w przeglądarce internetowej w menu Widok->Rozmiar tekstu. Do wyboru są następujące ustawienia czcionek: największa, większa, średnia, mniejsza, najmniejsza. Uwaga! Zmiana rozmiaru czcionki za pomocą tego przycisku powoduje identyczną zmianę we wszystkich oknach przeglądarki systemowej.
   </p>
</ul>

<p><b>Nietypowe przyciski</b><br>
	Zaznaczenie tych przycisków pozwala na umieszczenie na pasku narzędziowym nietypowych przycisków. W tej jednak wersji HTML Help Workshop nie zostały włączone przez firmę Microsoft do użytkowania. Są wprawdzie wyświetlane, ale nie są czynne zgodnie ze swoim przeznaczeniem.
	</p>
<p>
Dostępne są następujące przyciski: "Spis treści", "Skorowidz", "Wyszukaj", "Historia", "Ulubione", "Notatki", "Wstecz", "Dalej".
</p>

<a name="main_files"></a>
<h3>Pliki główne</h3>

<ul>
   <li><p><b>Spis treści</b><br />
   W polu tym wpisujemy nazwę pliku spisu treści HHC wraz z rozszerzeniem. Można go wczytać z dysku, korzystając z ikonki obok pola. W razie otwierania edytora, gdy plik spisu treści już jest sporządzony i znajduje się w katalogu projektu, zostaje on automatycznie w tym polu uwzględniony.
   </p>
   <li><p><b>Skorowidz</b><br />
   W polu tym wpisujemy nazwę pliku skorowidza HHK wraz z rozszerzeniem. Można go wczytać z dysku, korzystając z ikonki obok pola. W razie otwierania edytora, gdy plik indeksu już jest sporządzony i znajduje się w katalogu projektu, zostaje on automatycznie w tym polu uwzględniony.
   </p>
   <li><p><b>Domyślny temat</b><br />
   W polu tym wpisujemy nazwę pliku projektu wraz z rozszerzeniem, który będzie otwierany w momencie otwarcia HTML Help. Plik ten można również wczytać z dysku korzystając z ikonki obok pola.
   </p>
   <li><p><b>Strona startowa</b><br />
   W polu tym wpisujemy nazwę pliku wraz z rozszerzeniem, który będzie uaktywniany w razie zdefiniowania w poprzedniej zakładce przycisku "Start". Plik ten można również wczytać z dysku, korzystając z ikonki obok pola.
   </p>
</ul>

<a name="design"></a>
<h3>Styl wyglądu</h3>
<p>
Poniższe opcje mają tylko niewielkie znaczenie dla wyglądu HTML Help. Wiele z nich nigdy nie jest używane przy budowaniu projektu - te nie zostaną opisane.
</p>

<p><b>Podstawowe</b></p>
<ul>
   <li><p><b>Przycisk maksymalizacji</b><br />
	Tylko po zaznaczeniu tej opcji pokazany zostanie przycisk maksymalizacji okna HTML Help.
   </p>
   <li><p><b>Pokaż zmaksymalizowane</b><br />
	Po zaznaczeniu tej opcji okno HTML Help otwierane będzie jako zmaksymalizowane.
   </p>
   <li><p><b>Przycisk minimalizacji</b><br />
	Tylko po zaznaczeniu tej opcji pokazany zostanie przycisk minimalizacji okna HTML Help.
   </p>
   <li><p><b>Pokaż zminimalizowane</b><br />
	Po zaznaczeniu tej opcji okno HTML Help otwierane będzie jako zminimalizowane do paska zadań.
   </p>
   <li><p><b>Okno Pop-Up</b><br />
	Po zaznaczeniu tej opcji w oknach HTML Help dozwolone będzie otwierane okien Pop-Up.
   </p>
   <li><p><b>Okno typu dziecko</b><br />
	Po zaznaczeniu tej opcji w oknach HTML Help dozwolone będzie otwierane okien  typu dziecko.
   </p>
   <li><p><b>Obcinaj (clip) okna dzieci</b><br />
	Obcinane będą okna typu dzieci.
   </p>
   <li><p><b>Obcinaj (clip) okna równorzędne</b><br />
	Obcinane będą okna równorzędne.
   </p>
   <li><p><b>Poziomy pasek przesuwu</b><br />
	Tylko po zaznaczeniu tej opcji pojawi się poziomy pasek przesuwu, gdy okno będzie zmniejszane. W przeciwnym razie zawartość okna będzie automatycznie dopasowywana do jego rozmiarów.
   </p>
   <li><p><b>Pionowy pasek przesuwu</b><br />
	Tylko po zaznaczeniu tej opcji pojawi się pionowy pasek przesuwu, gdy okno będzie zmniejszane. W przeciwnym razie zawartość okna będzie automatycznie dopasowywana do jego rozmiarów.
   </p>
   <li><p><b>Obramowanie</b><br />
	Po zaznaczeniu tej opcji pojawi się obramowanie strony o charakterze dekoracyjnym. Inne opcje określają rodzaj obramowania.
   </p>
   <li><p><b>Okno typu dialogowego</b><br />
	Po zaznaczeniu tej opcji w oknach HTML Help dozwolone będzie otwierane okien  typu dialogowego.
   </p>
   <li><p><b>Pokrywające</b><br />
	Po zaznaczeniu tej opcji w oknach HTML Help dozwolone będzie pokrywanie się okien.
   </p>
   <li><p><b>Grubsze obramowanie</b><br />
	Po zaznaczeniu tej opcji obramowanie strony będzie znacznie grubsze niż standardowe.
   </p>
   <li><p><b>Zablokowane</b><br />
	Po zaznaczeniu tej opcji rozmiary okna HTML Help będą zablokowane.
   </p>
</ul> 
  
<p><b>Rozszerzone</b></p>
<ul>
   <li><p><b>Okno typu narzędziowego</b><br />
	Po zaznaczeniu tej opcji w oknach HTML Help dozwolone będzie otwierane okien  typu narzędziowego.
   </p>
   <li><p><b>Wklęsłe obramowanie</b><br />
	Po zaznaczeniu tej opcji obramowania będą typu wklęsłego.
   </p>
   <li><p><b>Obramowanie trójwymiarowe</b><br />
	Po zaznaczeniu tej opcji obramowania będą trójwymiarowe.
   </p>
   <li><p><b>Wyrównanie do prawej</b><br />
	W niezdefiniowanych stylami tekstach nastąpi wymuszenie wyrównania do prawej. Stosuje się to głównie do tekstów narodowości typu hebrajskiego, gdzie czyta się od prawej do lewej strony.
   </p>
   <li><p><b>Czytanie z prawej do lewej.</b><br />
	Stosuje się to głównie do tekstów narodowości typu hebrajskiego, gdzie czyta się od prawej do lewej strony.
   </p>
   <li><p><b>Kontroluj okno rodzica</b><br />
	Następuje ścisłe powiązanie okna podrzędnego z nadrzędnym.
   </p>
   <li><p><b>Akceptuj przenoszone pliki</b><br />
	Po zaznaczeniu tej opcji następuje akceptacja przenoszonych plików.
   </p>
   <li><p><b>Zawsze na wierzchu</b><br />
	Po zaznaczeniu tej opcji okno HTML Help ustawiane będzie wobec innych okien systemu zawsze na wierzchu.
   </p>
   <li><p><b>Przycisk pomocy kontekstowej</b><br />
	Po zaznaczeniu tej opcji dozwolony będzie przycisk pomocy kontekstowej.
   </p>
   <li><p><b>Nie informuj okna rodzica</b><br />
	Po zaznaczeniu tej opcji nastąpi wymuszenie braku kontroli między oknem podrzędnym a głównym.
   </p>
   <li><p><b>Przezroczyste</b><br />
	Po zaznaczeniu tej opcji dodatkowe okna będą przezroczyste.
   </p>
</ul>

<h2>HTML Help API oraz dołączona pomoc</h2><br />

<p><b>Lista połączonych z aktualną pomocą innych plików pomocy</b><br />
	HTML Help może składać się również z wielu podrzędnych plików HTML Help włączonych do głównego pliku. Włączenie ich odbywa się przez tę listę. Korzystając z przycisków obok można wybrać pliki CHM do włączenia. Należy jednak pamiętać, że dołączone pliki CHM muszą zawsze znajdować się w tym samym katalogu, co plik projektu głównego. Trzeba również do spisu treści głównego projektu dodać odsyłacz do spisów treści dołączonych plików CHM.
</p>

<p><b>Lista stałych przypisanych do tematu</b><br />
	Na liście tej można przypisać stałe tekstowe do wybranych plików HTML Help, lub też wskazać pliki nagłówkowe zawierające te definicje. Definicje tutaj umieszczone przydatne są podczas korzystania z HTML Help API w programach Windows, dzięki czemu można wywoływać określone tematy pomocy bezpośrednio z tych programów.
</p>

<p><b>Gdy ta stała lub numer jest przekazana do HTML Help API</b><br />
	W tym polu należy wpisać nazwę stałej, jaka będzie przypisana do pliku wybranego w polu niżej.
</p>

<p><b>Niech odnosi się ona do tego pliku</b><br />
	Z listy rozwijanej tego pola należy wybrać plik, jaki ma być powiązany z nazwą lub numerem z pola powyżej.
</p>

<p><b>Mapowanie dla HTML Help API</b><br />
	Lista przeznaczona jest do wskazania plików nagłówkowych zawierających powiązania między numerami kontekstowymi pomocy a stałymi powiązanymi z plikami. W językach programowania pomoc kontekstowa jest najczęściej wywoływana przez wartości liczbowe. Ta sekcja pozwala powiązać (zamapować) stałe liczbowe ze stałymi powiązanymi z plikami Przykładowa zawartość pliku nagłówkowego może wyglądać następująco:<br /><br />
<tt>#define IDH_CI_CONTENTS 1060<br />
#define IDH_CI_INTRO 1040<br />
#define IDH_CI_STEP 1010</tt>
</p>

<p><b>Okienka wyskakujące Pop_Up</b><br />
	Lista przeznaczona jest do wskazania plików nagłówkowych zawierających definicje okienek wyskakujących Pop_Up.
</p><br />


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - ogólne informacje</a>
	<li><a href="tool_htmlhelp_hhc_editor.php">Edytor spisu treści HTML Help</a>
	<li><a href="tool_htmlhelp_hhk_editor.php">Edytor skorowidza (indeksu) HTML Help</a>
	<li><a href="tool_htmlhelp_folder_to_chm.php">Szybki HTML Help z folderu</a>
	<li><a href="tool_htmlhelp_hhp_compilation.php">Kompiluj dokument HTML Help</a>
	<li><a href="tool_htmlhelp_compiler_info.php">Informacja dla kompilatora HTML Help</a>
	<li><a href="tool_htmlhelp_compiler_services.php">HTML Help a serwisy w Pająku</a>

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
