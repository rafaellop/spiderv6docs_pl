
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
<title>Tworzenie prostego schematu kolorowania - instrukcja krok po kroku</title>

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
<h1>Tworzenie prostego schematu kolorowania - instrukcja krok po kroku</h1>





<!-- treść pomocy -->

<p>Kolorowanie składni pozwala na lepszą orientację w&nbsp;kodzie, czyni go znacznie bardziej przejrzystym. Pająk posiada kilkadziesiąt schematów kolorowania (w tym różne konfiguracje języków znaczników i&nbsp;skryptowych itp. - obsługuje praktycznie wszystkie popularne języki używane na potrzeby www i&nbsp;nie tylko). </p>
<p>Może się jednak zdarzyć, że&nbsp;będziesz potrzebował utworzyć nowy schemat kolorowania dla języka, dla którego Pająk nie dostarcza schematu, lub&nbsp;też chciałbyś zmienić i&nbsp;dostosować istniejący schemat do własnych preferencji i&nbsp;upodobań. W&nbsp;tym celu powstał 'Edytor schematów kolorowania'.</p>
<p>Domyślnie 'Edytor schematów kolorowania' jest dostępny za pomocą skrótu Ctrl+Shift+F8, a&nbsp;także z&nbsp;poziomu okna 'Ustawienia programu' i&nbsp;z&nbsp;menu 'Narzędzia'.</p>

<p>Sposób tworzenia nowego schematu przedstawiony zostanie na uproszczonym kolorowaniu dla języka HTML.</p>




<h2 name="prepare">Przygotowania do utworzenia schematu kolorowania</h2>

<p>Na początku pracy najlepiej jest zebrać jak najwięcej informacji o&nbsp;języku, dla którego będzie tworzony schemat, spisać wszystkie słowa kluczowe. </p>
<p>Najwygodniej będzie, jeśli lista słów kluczowych będzie miała postać pliku tekstowego, w&nbsp;którym każde słowo musi zawierać się w&nbsp;pojedynczej linii. Poszczególne grupy słów kluczowych powinny znaleźć się w&nbsp;osobnych plikach - później bardzo to&nbsp;ułatwi pracę.</p>

<p>Dla uproszczenia przyjęte zostaje, iż będą cztery grupy słów kluczowych języka HTML, a&nbsp;w&nbsp;każdej grupie tylko kilka wybranych pozycji (aby nie komplikować w&nbsp;tej chwili pracy). Przy większej ilości słów kluczowych wszystko przebiega identycznie:</p>

<ul>
	<li>znaczniki HTML: <b>DIV</b> , <b>IMG</b> , <b>A</b> - zapisujemy w&nbsp;pliku tags.txt</li>
	<li>atrybuty znaczników: <b>CLASS</b> , <b>SRC</b> , <b>HREF</b> - zapisujemy w&nbsp;pliku attrs.txt</li>
	<li>zdarzenia JavaScript: <b>onMouseOver</b> , <b>onClick</b> - zapisujemy w&nbsp;pliku events.txt</li>
	<li>encje: <b>&amp;nbsp;</b> - zapisujemy w&nbsp;pliku entities.txt</li>
</ul>

Z&nbsp;zebranych informacji wynika również, że&nbsp;kod HTML może zawierać też komentarze ujęte między <b>&lt;!--</b> a&nbsp;<b>--&gt;</b>.



<h2>Utworzenie nowego schematu kolorowania</h2>

<p>Aby utworzyć nowy schemat kolorowania, otwórz edytor (domyślnie skrót Ctrl+Shift+F8). Jeśli edytor już jest otwarty, a&nbsp;w&nbsp;nim edytowany jest już jakiś schemat, skorzystaj z&nbsp;ikonki 'Nowy schemat kolorowania' (w lewym górnym rogu).</p>
<p>Po utworzeniu nowego schematu kolorowania od razu dostępny jest podstawowy blok o&nbsp;nazwie 'Default'. Nie można zmieniać jego nazwy, ani&nbsp;go usunąć. Można natomiast edytować jego ustawienia. W&nbsp;bloku tym będą zagnieżdżane kolejne bloki tworzone podczas edycji schematu kolorowania.</p>



<h2>Wpisanie tekstu podglądu</h2>

Pierwszą czynnością po utworzeniu schematu będzie wpisanie przykładowego tekstu, na którym można zaobserwować wyniki pracy i&nbsp;ewentualne błędy. W&nbsp;tym celu kliknij ikonę 'Umożliwiaj modyfikację tekstu podglądu' (w prawym dolnym rogu). Następnie wpisz tam poniższy kod HTML:

<pre>&lt;a href="site.php"&gt;Link&lt;/a&gt;
&lt;div class="classname"&gt;Marek&amp;nbsp;i&amp;nbsp;Jarek&lt;/div&gt;
&lt;img src="img.gif" onMouseOver="mouseover()" onClick="click()"&gt;
&lt;!-- Comment --&gt;</pre>



<h2>Utworzenie stylu kolorowania zwykłego tekstu</h2>

<p>Zwykły tekst to&nbsp;wszystko, co nie zostało w&nbsp;schemacie zdefiniowane inaczej (jako słowo kluczowe, komentarz, liczba itd.).</p> 
<p>W celu utworzenia stylu kolorowania zwykłego tekstu kliknij w&nbsp;ikonę 'Utworzenie nowego stylu' (wielkie A&nbsp;na złotym tle). W&nbsp;oknie, które się pojawi, wpisz nazwę stylu (będziemy operowali nazwami angielskimi - w&nbsp;tym wypadku 'Default text', bez cudzysłowów), a&nbsp;następnie za pomocą dostępnych opcji określ kolor tła i&nbsp;czcionki oraz&nbsp;styl tekstu (pogrubiona, pochylona itp.). </p>
<p>Po wykonaniu ww. czynności możesz zatwierdzić zmiany za pomocą kliknięcia w&nbsp;'OK'. Jeśli po zamknięciu okna zajdzie potrzeba zmian w&nbsp;stylu kolorowania, możesz to&nbsp;zrobić w&nbsp;zakładce 'Style' w&nbsp;lewej górnej części głównego okna Edytora.</p>




<h2>Utworzenie pierwszej listy słów kluczowych - kolorowanie encji</h2>

<p>W celu utworzenia listy słów kluczowych przejdź do zakładki 'Słowa kluczowe' (nad okienkiem podglądu, na prawo) i&nbsp;zaznacz opcję 'Włącz kolorowanie słów kluczowych'.</p>
<p>Następnie kliknij w&nbsp;ikonę z&nbsp;plusem z&nbsp;prawej strony okienka 'Zbiory'. W&nbsp;okienku, które się pojawi, wpisz nazwę zbioru ('Entities'). Nie zamykaj okienka!</p>
<p>Kolejnym krokiem będzie utworzenie stylu kolorowania encji. Kliknij w&nbsp;ikonę tworzenia nowego stylu kolorowania - identycznie jak dla zwykłego tekstu.</p>
<p>Następnie zatwierdź wybór nazwy zbioru i&nbsp;przypisanego do niego stylu kolorowania. </p>
<p>Nadszedł czas na podanie słów kluczowych, które będą należały do zbioru 'Entities'. Można je po kolei wpisywać klikając na ikonę 'Dodaj słowo kluczowe' z&nbsp;prawej strony listy 'Bieżący zbiór słów kluczowych' (ikona z&nbsp;plusem). Jednak znacznie wygodniejszym rozwiązaniem (szczególnie gdy zbiór słów kluczowych jest bogaty), jest wczytanie go z&nbsp;pliku tekstowego (ikona a&nbsp;otwartym skoroszytem). Pamiętaj, iż każde słowo w&nbsp;tym pliku musi występować w&nbsp;osobnej linii! Dla zbioru 'Entities' wczytaj słowa z&nbsp;utworzonego wcześniej pliku entities.txt.</p>




<h2>Zmiana ustawień w&nbsp;zakładce 'Identyfikatory' w&nbsp;celu poprawnego kolorowania encji</h2>

<p>Niestety - mimo poprawnego wykonania powyższych kroków, encje nie chcą się poprawnie kolorować. Odpowiedzialne za to&nbsp;są ustawienia w&nbsp;zakładce 'Identyfikatory'. </p>
<p>Aby encje poprawnie były kolorowane, należy zdefiniować, jakie znaki mogą się znaleźć w&nbsp;kolorowanych słowach. W&nbsp;tym przypadku w&nbsp;okienku otwieranym za pomocą ikony 'Pierwszy symbol' wpisujemy znak <b>&amp;</b>, 'Inne symbole' definiują zakres innych znaków, jakie mogą wystąpić w&nbsp;encji (pozostawiamy domyślne <b>0-9A-Z_a-z</b>). </p>
<p>Następnie podaj sufiks (znak na końcu słowa), jakim będą się kończyły encje. Tu sufiksem jest średnik <b>;</b>. Aby dodać sufiks należy w&nbsp;sekcji Specjalne wybrać opcję 'z sufiksami' i&nbsp;zaznaczyć opcję 'z sufiksami' u&nbsp;dołu listy sufiksów. Teraz kliknij w&nbsp;ikonę 'Dodaj identyfikator' i&nbsp;wpisz w&nbsp;okienku znak <b>;</b>.</p>
<p>Po wykonaniu tych czynności możesz odznaczyć opcję 'Włącz kolorowanie identyfikatorów' - nie ma potrzeby kolorowania identyfikatorów nie będących słowami kluczowymi.</p>
<p>Od tej chwili encje powinny się kolorować wg&nbsp;zadanych w&nbsp;stylu ustawień.</p>



<h2>Utworzenie nowego bloku, zdefiniowanie separatorów - konstrukcja znacznika HTML</h2>

<p>Aby móc kolorować znacznik HTML należy utworzyć nowy blok, w&nbsp;którym umieszczone zostaną dane potrzebne do kolorowania nazwy i&nbsp;zawartości znacznika.</p>
<p>W&nbsp;celu utworzenia bloku przejdź do zakładki 'Bloki składniowe' (z lewej strony okna) i&nbsp;kliknij w ikonę 'Dodaj blok' (ikona z&nbsp;plusem). W&nbsp;okienku, które się otworzy, podaj nazwę bloku (w tym wypadku 'HTML tag'). Jeśli w&nbsp;schemacie istniałyby już inne bloki, można wskazać blok, w&nbsp;którym nowy blok mógłby zostać zagnieżdżony.</p>

<p>Pierwszą czynnością, jaką należy wykonać jest zdefiniowanie separatorów bloku w zakładce 'Bloki'. </p>

<p>Aby utworzyć nową parę separatorów kliknij na ikonę 'Dodaj separatory' (ikona z&nbsp;plusem z&nbsp;prawej strony okienka 'Separatory bloku'). Separatory te będą określać odkąd - dokąd będą obowiązywać ustawienia zdefiniowane w&nbsp;tym bloku.</p>

<p>Na pierwszy rzut oka, dla znacznika HTML mogłyby to&nbsp;być znaki &lt; (lewy separator) i&nbsp;&gt; (prawy). Zdefiniujemy jednak pary separatorów składających się ze znaków:
<ul>
	<li>&lt; + nazwa znacznika (lewy), np.&nbsp;&lt;DIV</li>
	<li>&gt; prawy</li>
</ul>
Jest to&nbsp;lepsze rozwiązanie, gdyż w&nbsp;tym wypadku kolorowane będą wyłącznie prawidłowe znaczniki HTML. Jeśli lewym separatorem byłby wyłącznie znak &lt;, to&nbsp;każdy ciąg następujący po tym znaku byłby rozpoznawany jako znacznik HTML, a&nbsp;także między znakiem &lt; a&nbsp;nazwą znacznika mogłyby się znaleźć jakieś znaki, np. spacje itp. Oczywiście byłoby błędem z punktu widzenia specyfikacji HTML..</p>

<p>W&nbsp;okienku 'Edycja separatora' znajduje się także opcja 'Ograniczniki są częścią bloku'. Należy ją zaznaczyć. Spowoduje to&nbsp;kolorowanie separatorów według reguł ustawionych w&nbsp;edytowanym bloku. Gdyby została odznaczona, separatory byłyby kolorowane wg&nbsp;reguł bloku nadrzędnego. </p>




<h2>Znów słowa kluczowe - nazwy znaczników, atrybuty i&nbsp;zdarzenia</h2>

<p>Kolejnym krokiem będzie utworzenie zbiorów słów kluczowych mających zastosowanie w&nbsp;konstrukcji znacznika HTML - 'HTML tags', 'HTML attributes', 'HTML events' (nazwy znaczników, nazwy atrybutów, nazwy zdarzeń). Postępuj tak samo, jak w&nbsp;przypadku tworzenia zbioru dla encji - utworzenie nowego zbioru, nadanie mu nazwy i&nbsp;utworzenie stylu kolorowania, wpisanie lub&nbsp;wczytanie z&nbsp;pliku zbioru słów kluczowych.</p>

<p>W tym miejscu drobna uwaga - aby kolorowanie nazw znaczników było jak najbardziej poprawne, nazwy znaczników (słowa kluczowe) muszą być w&nbsp;zbiorze 'HTML tags' poprzedzone znakiem &lt;. Lista słów będzie więc wyglądała tak:<br />
&lt;DIV<br />
&lt;IMG<br />
&lt;A</p>
<p>Oczywiście słowa kluczowe dla nazw atrybutów i&nbsp;zdarzeń będą już podane normalnie, bez żadnych znaków poprzedzających.</p>



<h2>Identyfikatory - zmiana ustawień w&nbsp;bloku znacznika</h2>

<p>Podobnie jak w&nbsp;przypadku encji, tak i&nbsp;w&nbsp;znaczniku trzeba zmienić domyślne ustawienia w&nbsp;Identyfikatorach. Jednak tym razem słowa kluczowe będą rozpoczynały się w&nbsp;większości od dowolnej litery. Dlatego też pozostaną bez zmian ustawienia 'Pierwszego symbolu' i&nbsp;Innych symboli'. Trzeba natomiast dodać prefiks '&lt;', który jest używany w&nbsp;nazwach znaczników.</p>
<p>Aby dodać prefiks, postępuj podobnie jak przy dodawaniu sufiksu w&nbsp;przypadku encji</p>




<h2>Włączenie kolorowania symboli - znak zamykający znacznik &gt;</h2>

<p>Znak &lt; otwierający znacznik HTML jest kolorowany poprawnie (wraz z&nbsp;nazwą znacznika). Jednak znak &gt;, który oznacza zakończenie znacznika, pozostaje kolorowany jak 'zwykły tekst'. </p>

<p>Żeby zmienić ten stan rzeczy, przejdź do zakładki 'Bloki' i&nbsp;po zaznaczeniu opcji 'koloruj symbole' wybierz dla symboli styl, jaki został utworzony dla znaczników HTML.</p>



<h2>Ciągi znaków - kolorowanie wartości atrybutów</h2>

<p>Schemat jest prawie gotowy. Brakuje jeszcze kolorowania wartości atrybutów znacznika. Zostanie to&nbsp;zrealizowane w zakładce Ciągi znaków.</p>

<p>Aby włączyć kolorowanie ciągów, kliknij na 'Włącz kolorowanie ciągów znaków' w zakładce 'Ciągi znaków', a&nbsp;następnie wybierz opcję 'Wieloliniowe ciągi znaków'. </p>

<p>Teraz można definiować ciągi. kliknij ikonę 'Dodaj łańcuch znaków' (ikona z&nbsp;plusem). Otworzy się okno, w&nbsp;którym można dodać znaki początku i&nbsp;końca ciągu. Będą do znaki <b>'</b> i&nbsp;<b>"</b> (dla początku i&nbsp;końca ciągu). W&nbsp;tym samym oknie można utworzyć styl, jaki będzie stosowany do ciągów. Można go nazwać 'String'</p>




<h2>Utworzenie nowego bloku dla znaczników zamykających html</h2>

<p>Znaczniki otwierające są już w&nbsp;zasadzie poprawnie kolorowane. Jednak znaczniki zamykające &lt;/DIV&gt; i&nbsp;&lt;/A&gt; nie są kolorowane. </p>

<p>Aby włączyć  kolorowanie znaczników zamykających utwórz nowy blok, jako separatory podaj ciągi zbudowane wg&nbsp;schematu '&lt;/+nazwa znacznika' (lewy) i&nbsp;'&gt;' (prawy), na przykład '&lt;DIV' (lewy) i '&gt' (prawy). Przy okazji definiowania separatorów, możesz w tej samej zakładce zdefiniować kolorowanie symboli (jak dla znaczników otwierających HTML)</p>

<p>Następnie utwórz zbiór słów kluczowych zawierających znaczniki zamykające. W tym celu przejdź do zakładki 'Słowa kluczowe'. Zbiór w tym wypadku będzie wyglądał następująco:

<ul>
	<li>&lt;DIV</li>
	<li>&lt;A</li>
</ul>

Może pojawić się pytanie: "Dlaczego nie ma tu znacznika &lt;/IMG"? Jest tak dlatego, że specyfikacja HTML nie przewiduje dla znacznika &lt;IMG odpowiadającego mu znacznika zamykającego, więc nie może on również być kolorowany. Jeśli wpiszesz w kodzie znacznik &lt;/IMG&gt;, to nie będzie on poprawnie kolorowany. W ten sposób już podczas tworzenia kodu, możesz ocenić wzrokowo, czy nie ma w nim błędów.</p>

<p>Kolorowanie zbioru - to&nbsp;samo jak dla znaczników HTML.</p>

<p>W zakładce identyfikatory utwórz prefiks '&lt;/' (postępuj identycznie, jak przy tworzeniu prefiksu w&nbsp;poprzednim bloku).</p>

<p>W znaczniku zamykającym nie ma atrybutów, zdarzeń itp. więc nie musisz ich ustawiać.</p>




<h2>Zdefiniowanie kolorowania komentarzy</h2>

<p>Ostatnią rzeczą, jaką należy (wg. uproszczonych założeń) zrobić, jest wykonanie kolorowania komentarzy. </p>

<p>Aby zdefiniować kolorowanie komentarzy, przejdź do bloku 'Default', a&nbsp;następnie do zakładki 'Komentarze'. W&nbsp;zakładce tej zaznacz opcję 'Włącz kolorowanie komentarzy', a&nbsp;następnie 'Komentarze wieloliniowe'.</p>

<p>Teraz można zdefiniować znaki początku i&nbsp;końca komentarza. W&nbsp;tym celu kliknij na ikonę 'Dodaj komentarz' (ikona z&nbsp;plusem) z&nbsp;prawej strony okna. W&nbsp;oknie, które się pojawi, wpisz w&nbsp;przypadku HTML <b>&lt!--</b> (początek) i&nbsp;<b>--&gt;</b> (koniec). W&nbsp;tym samym oknie można utworzyć nowy styl kolorowania dla komentarzy.</p>




<h2>Korzystanie ze schematu w edytorze</h2>

<p>Po zapisaniu schematu kolorowania, jest od od razu dostępny w edytorze.</p>

Aby użyć danego schematu do kolorowania składni aktualnego dokumentu, użyj przycisku 'Wybór schematu kolorowania składni' na 'Mini pasku edytora' (z lewej strony okna edytora).

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="syntax_editor.php">Edytor schematów kolorowania</a></li>
	<li><a href="settings_editor_syntax.php">Ustawienia programu - Kolorowanie składni</a></li>
	<li><a href="syntax.php">Ogólnie o kolorowaniu składni w Pająku</a></li>
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
