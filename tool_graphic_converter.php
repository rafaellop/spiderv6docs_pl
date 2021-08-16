
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
<title>Narzędzia - Konwerter plików graficznych</title>

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
<h1>Narzędzia - Konwerter plików graficznych</h1>



<!-- treść pomocy -->

<p>Konwerter plików graficznych służy przede wszystkim do konwertowania grafik z jednego formatu na inny, np. z BMP na JPEG. Umożliwia również zmianę wymiarów obrazka.

<p>Narzędzie posiada przyjazny interfejs, który prowadzi za rękę przez wszystkie etapy konwersji plików, począwszy od utworzenia listy obrazków, poprzez wybór formatu i nazwy plików docelowych, aż po zapisanie obrazków we wskazanym folderze, co przebiega szybko i sprawnie.




<h2>Uruchamianie</h2>

<p>Konwerter plików graficznych możesz uruchomić za pomocą polecenia oznaczonego ikoną pokazaną powyżej znajdującego się w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_gfx.php">Grafika i multimedia</a>, a także za pomocą przycisku pokazanego wyżej umieszczonego na pasku narzędzi.

<p>Pierwsza plansza tego narzędzia pełni funkcję informacyjną i jest powitaniem w narzędziu.

<p>Pomiędzy kolejnymi planszami poruszasz się za pomocą przycisków Dalej i Wstecz.

<h2>Wybór plików</h2>

<p>Druga plansza pozwala na wybranie grafik przeznaczonych do umieszczenia konwersji. </p>

<p>W górnej części okna możesz wybrać foldery, w których znajdują się pliki przeznaczone do konwersji. Możesz wskazać więcej niż jedną lokalizację z grafikami. Jeśli zaznaczysz przełącznik <b>Szukaj również w podfolderach</b>, przy wyszukiwaniu plików do konwersji uwzględnione zostaną również wszystkie podfoldery wybranego folderu.</p>

<p><b>Wyszukuj tylko pliki w następujących formatach</b><br />
Zaznacz formaty plików, jakie mają zostać dodane do listy plików przeznaczonych do konwersji.</p>

<p><b>Znalezione pliki graficzne</b><br />
Na liście znajdą się wszystkie obrazy wybranych formatów znalezione w podfolderach. </p>

<p>Pliki możesz również dodawać i usuwać z listy za pomocą menu z prawej strony. </p>

<p>Aby usunąć wszystkie pliki z listy, kliknij w ikonę z koszem. Spowoduje to jedynie usunięcie nazw z listy, pliki na dysku pozostaną nienaruszone!</p>




<h2>Ustawienia konwersji</h2>

<p>Trzecia plansza umożliwia wybór formatu pliku i foldera i reguły nazywania plików wynikowych.</p>


<p><b>Format plików wynikowych</b><br />
Wybierz format, w jakim mają zostać zapisane wszystkie pliki.</p>

<p><b>Folder dla plików wynikowych</b><br />
Wybierz folder, w jakim mają zostać zapisane pliki. Za pomocą okienka otwieranego przyciskiem z prawej strony możesz również utworzyć nowy folder.</p>

<b>Reguła tworzenia nazw plików</b><br />
Podaj regułę nazywania plików wynikowych. Dostępne są następujące symbole:
<ul>
	<li><b>%n</b> - stara nazwa pliku (bez rozszerzenia)</li>
	<li><b>%d</b> - aktualna data (w formacie RRRR-MM-DD)</li>
	<li><b>%o</b> - numer kolejny. Możesz ustawić numer początkowy (od którego zacznie się numeracja), a także ilość cyfr, jaka zostanie użyta (jeśli np. wybierzesz wartość "<tt>3</tt>", to cyfry będą uzupełniane z przodu zerami, np. "<tt>001</tt>", "<tt>002</tt>" itd.)</li>
</ul>




<h2>Ustawienia kompresji obrazków</h2>

<p>Plansza ta umożliwia ustawienie kompresji plików wynikowych. Zostanie pokazana wyłącznie wtedy, gdy obrazki są w formatach, które podlegają kompresji (GIF, JPG, PNG), natomiast nie zostanie wyświetlona, jeśli używasz plików BMP.</p>




<h2>Skalowanie</h2>

Opcje tej planszy umożliwiają przeskalowanie obrazków do podanych rozmiarów.

<p><b>Przeskaluj obrazki</b><br />
Zaznacz tę opcję, jeśli chcesz przeskalować obrazki.</p>

<p><b><b>Szerokość i Wysokość obrazka</b> - ustaw docelową szerokość i wysokość obrazków. </b></p>

<p><b>Odcienie szarości</b> - zaznacz tę opcję, by zmienić kolory obrazków na w odcienie szarości (zmniejsza to rozmiar pliku)</p>

<p><b>Puste miejsce kolorem</b> - jeśli obrazki skalowane będą proporcjonalnie z wypełnieniem pustego miejsca kolorem, wybierz kolor,jakim to puste miejsce ma zostać wypełnione</p>

<b>Skalowanie</b> wybierz rodzaj skalowania obrazków:
<ul>
	<li><b>Proporcjonalne, wysokość dopasowana do szerokości</b> - obrazki zostaną przeskalowane w ten sposób, by wszystkie miały jednakową szerokość, wysokość zostanie obliczona wg proporcji obrazka oryginalnego</li>
	<li><b>Proporcjonalne, szerokość dopasowana do wysokości</b> - obrazki zostaną przeskalowane w ten sposób, by wszystkie miały jednakową wysokość, szerokość zostanie obliczona wg proporcji obrazka oryginalnego</li>
	<li><b>Proporcjonalnie, z wypełnieniem pustego miejsca kolorem</b> - obrazki zostaną jak najlepiej dopasowane do podanych rozmiarów obrazka ("wpisane" w prostokąt o podanych rozmiarach) , zachowane zostaną proporcje, a ewentualne miejsce pozostałem na obrzeżach wypełnione zostanie podanym wyżej kolorem. </li>
	<li><b>Nieproporcjonalnie</b> - obrazki zostaną przeskalowane dokładnie do podanych wymiarów, bez zachowania proporcji</li>
</ul>


<h2>Podsumowanie</h2>

<p>Ostatnia plansza przedstawia podsumowanie zadań do wykonania przez Konwerter. Jeśli wszystko jest ustawione jak trzeba, kliknij "<b>Wykonaj</b>". W przeciwnym razie możesz cofnąć się do poprzednich  planszy w celu naniesienia poprawek.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_gallery.php">Kreator galerii grafik</a>
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

</body>
</html>
