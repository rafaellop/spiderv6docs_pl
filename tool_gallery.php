
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.0)">

<!-- nazwa strony pomocy -->
<title>Narzędzia - Kreator galerii grafik</title>

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
<h1>Narzędzia - Kreator galerii grafik</h1>

<p>Kreator galerii grafik pozwala na bardzo szybkie utworzenie galerii z obrazków. Automatycznie potrafi generować miniatury, układa je w tabeli, a także tworzy dokumenty dla każdej grafiki.</p>

<p>Kreator galerii grafik posiada przyjazny interfejs, który prowadzi za rękę przez wszystkie etapy procesu tworzenia galerii, począwszy od utworzenia listy obrazków, poprzez wybór układu miniatur i przycisków, aż po zapisanie galerii we wskazanym folderze, co przebiega szybko i sprawnie.

<p>Przed przystąpieniem do tworzenia galerii można przygotować przyciski do poruszania się po galerii - Następny, Poprzedni, Pierwszy, Ostatni, Galeria (nie jest to konieczne, można wstawić napisy), a także arkusz stylów CSS (również opcjonalny).</p>


<h2>Uruchamianie</h2>

<p>Kreator galerii grafik możesz uruchomić za pomocą polecenia oznaczonego ikoną pokazaną powyżej znajdującego się w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_gfx.php">Grafika i multimedia</a>, a także za pomocą przycisku pokazanego wyżej umieszczonego na pasku narzędzi.

<p>Pierwsza plansza tego narzędzia pełni funkcję informacyjną i jest powitaniem w narzędziu.

<p>Pomiędzy kolejnymi planszami poruszasz się za pomocą przycisków Dalej i Wstecz.




<h2>Wybór plików</h2>

<p>Druga plansza pozwala na wybranie grafik przeznaczonych do umieszczenia w galerii.

<p>W górnej części okna możesz wybrać foldery, z których pliki mają być umieszczone w galerii. Możesz wskazać więcej niż jedną lokalizację z grafikami. Jeśli zaznaczysz przełącznik <b>Uwzględnij podfoldery</b>, przy wyszukiwaniu plików do galerii uwzględnione zostaną również wszystkie podfoldery wybranego folderu.</p>

<p>Za pomocą przełączników <b>Dodaj tylko pliki typu:</b> możesz określić typy plików, jakie jedynie mają zostać dodane do galerii.</p>

<p>W dolnej części znajduje się lista plików do utworzenia z nich galerii. Za pomocą menu z prawej strony listy możesz dodawać, bądź usuwać z niej pliki, a także zmieniać ich kolejność (ma to wpływ na kolejność umieszczania grafik w galerii). </p>

<p>Możesz również szybko posortować pliki według daty, typu, lub nazwy, na liście klikając w nagłówek wybranej kolumny. Kolejne kliknięcie na ten sam nagłówek odwraca kolejność sortowania.</p>

<p>Aby usunąć wszystkie pliki z listy, kliknij w ikonę z koszem. Spowoduje to jedynie usunięcie nazw z listy, pliki na dysku pozostaną nienaruszone!</p>




<h2>Wygląd galerii</h2>

<p>Trzecia plansza umożliwia ustawienie wyglądu galerii.</p>

<p><b>Dołącz arkusz stylów</b><br />
Zaznacz jeśli chcesz w galerii użyć przygotowanego wcześniej arkusza stylów. Jeśli zaznaczysz przełącznik <b>Kopiuj z galerią</b> wskazany arkusz zostanie skopiowany w miejsce zapisu galerii. W przeciwnym razie wstawiona zostanie jedynie ścieżka do niego.</p>

<p><b>Twórz osobne dokumenty z elementami galerii</b><br />
Zaznacz tę opcję, jeśli dla każdego obrazka grafiki ma zostać utworzony osobny dokument. W przeciwnym wypadku odnośniki w pliku z miniaturami będą wskazywały bezpośrednio na duże obrazy w galerii.</p>

<p><b>Przyciski w galerii</b><br />
Wybierz gdzie w plikach z elementami galerii mają zostać umieszczone przyciski będące odnośnikami do dokumentów w galerii. Jeśli nie wpiszesz żadnych ścieżek, wstawione zostaną domyślne napisy <tt>[następny]</tt>, <tt>[poprzedni]</tt> itp. </p>
<p>W przypadku, gdy nie zaznaczono opcji <b>Twórz osobne dokumenty z elementami galerii</b>, pola te będą nieaktywne.</p>

<b>Tabela miniatur i  wygląda galerii</b><br />
W tej sekcji możesz ustawić wygląd dokumentów w galerii. Możesz:
<ul>
   <li>dopasować układ tabeli (ilość wierszy i kolumn - program stara się automatycznie dostosować wartości), </li>
   <li>wybrać kolor (z listy predefiniowanych kolorów, lub po wybraniu z listy pozycji "Wybierz...", dowolny kolor za pomocą <a href="tool_colorpalette.php">Palety kolorów</a>), bądź obrazek dla tła tabeli (za pomocą <a href="tool_graphic_browser.php">Przeglądarki grafik</a>), </li>
   <li>przypisać ustawienia sekcji Meta (za pomocą <a href="tool_meta.php">Edytora sekcji META</a>)</li>
   <li>wybrać, lub utworzyć styl (<a href="tool_style_editor.php">Styl dla znacznika</a>), albo klasę CSS (<a href="tool_style_class.php">wybierz lub utwórz klasę</a>) dla tabeli z grafikami,</li>
   <li>podać identyfikator elementu</li>
</ul>




<h2>Pliki docelowe galerii</h2>

<p>W czwartej planszy musisz określić ścieżki plików i formaty docelowe dla grafik.</p>

<p>Określ, czy galeria (plik z miniaturami) ma zostać po utworzeniu otwarta w Pająku, czy tylko zapisana na dysk. Określ tez ścieżkę i nazwę pliku głównego galerii.</p>

<p><b>Obrazki do utworzenie galerii</b><br />
W tej sekcji wybierz format pliku dużego obrazka w galerii (najczęściej bez zmiany).</p>

<p><b>Zapisuj pliki do folderu</b><br />
Jeśli zaznaczysz tę opcję, duże pliki będą kopiowane do wskazanego folderu. Konieczne jest podanie ścieżek bezwzględnych, które w trakcie tworzenia galerii zamienione będą na ścieżki względne od dokumentu głównego. Jeśli nie zaznaczysz tej opcji, w galerii użyte zostaną tylko ścieżki do tych grafik w ich obecnym miejscu. </p>

<p>Następnie określ szablon nazwy dokumentu z dużym obrazkiem (gdzie <tt>%o</tt> oznacza numer porządkowy, <tt>%n</tt> oryginalną nazwę bez rozszerzenia). Nie należy podawać rozszerzenia nazwy pliku.</p>


<p><b>Ustawienia ogólne miniatur obrazków</b><br />
W tej sekcji określ format pliku z miniaturą, ścieżkę bezwzględną do foldera, w którym mają zostać umieszczone miniatury (również zostanie zamieniona na względną) oraz szablon nazwy pliku dla miniatury (gdzie <tt>%o</tt> oznacza numer porządkowy, <tt>%n</tt> oryginalną nazwę dużego obrazka bez rozszerzenia).  Nie należy podawać rozszerzenia nazwy pliku.</p>




<h2>Ustawienia szczegółowe dla miniatur</h2>

<p>Ustawienia planszy piątej dotyczą wyłącznie miniatur</p>

<p><b>Ustawienia szczegółowe miniatur obrazków</b><br />
W tej sekcji ustaw szczegóły dla miniatur:</p>

<p><b><b>szerokość i wysokość obrazka</b> - ustaw maksymalną szerokość i wysokość miniatury. </b></p>

<p><b>Puste miejsce kolorem</b> - jeśli obrazek skalowany proporcjonalnie z wypełnieniem pustego miejsca kolorem, wybierz kolor,jakim to puste mijsce ma zostać wypełnione</p>

<p><b>Przezroczysty GIF</b> - jeśli obrazek skalowany proporcjonalnie z wypełnieniem pustego miejsca kolorem, to możesz zaznaczyć tę opcję, by wypełnione miejsca były na obrazku przezroczyste (tylko dla plików GIF)</p>

<p><b>Odcienie szarości</b> - zaznacz tę opcję, by miniatury były w odcieniach szarości (zmniejsza to rozmiar pliku)</p>

<b>Skalowanie</b> wybierz rodzaj skalowania miniatury:
<ul>
   <li><b>Proporcjonalne, wysokość dopasowana do szerokości</b> - miniatury zostaną przeskalowane w ten sposób, by wszystkie miały jednakową szerokość, wysokość zostanie obliczona wg proporcji obrazka oryginalnego</li>
   <li><b>Proporcjonalne, szerokość dopasowana do wysokości</b> - miniatury zostaną przeskalowane w ten sposób, by wszystkie miały jednakową wysokość, szerokość zostanie obliczona wg proporcji obrazka oryginalnego</li>
   <li><b>Proporcjonalnie, z wypełnieniem pustego miejsca kolorem</b> - miniatury zostaną jak najlepiej dopasowane do podanych rozmiarów obrazka ("wpisane" w prostokąt o podanych rozmiarach) , zachowane zostaną proporcje, a ewentualne miejsce pozostałem na obrzeżach wypełnione zostanie podanym wyżej kolorem. </li>
   <li><b>Nieproporcjonalnie</b> - miniatury zostaną przeskalowane dokładnie do podanych wymiarów, bez zachowania proporcji</li>
</ul>

<p><b>Nie twórz ponownie juz utworzonych miniatur</b><br />
Zaznacz tę opcję, aby przy ewentualnych poprawkach w układzie tabeli, stylów itp. program nie tworzył ponownie tych samych miniatur (skraca to znacząco czas ponownego tworzenia galerii). Pamiętaj, że po zmianie dotyczącej samych plików z miniaturami należy odznaczyć tę opcję, by odniosły one efekt.</p>

<p><b>Po kliknięciu ładuj do okna docelowego</b><br />
Wybierz z listy ramkę, do której mają być ładowane dokumenty z dużymi obrazkami (atrybut <tt>TARGET</tt> znacznika <tt>A</tt>. Najczęściej pole może pozostać puste.</p>

<p><b>Opis pod miniaturą</b>, <b>Opis w dymku podpowiedzi</b><br />
Wybierz opcje dla opisów miniatur</p>

<p><b>Styl komórki tabeli zawierającej miniaturę</b><br />
Wybierz styl dla komórek tabeli, w których umieszczone będą miniatury - podobnie jak dla całej tabeli galerii w planszy trzeciej.</p>




<h2>Ustawienia kompresji obrazków</h2>

<p>Plansza ta umożliwia ustawienie kompresji obrazków. Zostanie pokazana wyłącznie wtedy, gdy obrazki są w formatach, które podlegają kompresji (GIF, JPG, PNG), natomiast nie zostanie wyświetlona, jeśli używasz plików BMP.</p>




<h2>Podgląd galerii obrazów i zakończenie działania kreatora</h2>

<p>Jest to ostatnia plansza kreatora. W oknie podglądu możesz obejrzeć wyniki swojej pracy.</p>

<p>Za pomocą przycisków w menu pod oknem podglądu możesz wyświetlić podgląd galerii w nowym oknie przeglądarki, odświeżyć obraz, bądź go wydrukować.</p>

<p>Jeśli jesteś zadowolony z wyników działania kreatora, kliknij w przycisk "<b>Wykonaj</b>", co spowoduje zapisanie galerii na dysk we wskazanym miejscu. W przeciwnym wypadku możesz kliknąć przycisk "<b>Wstecz</b>" i cofnąć się do dowolnej planszy.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="tool_graphic_converter.php">Konwerter plików graficznych</a>
   <li><a href="tool_graphic_browser.php">Przeglądarka grafik</a>
   <li><a href="tool_graphic_insert.php">Wstawianie grafik do dokumentu</a>
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

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>