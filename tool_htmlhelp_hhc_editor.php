<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>HTML Help - Edytor spisu treści HTML Help</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<!-- topmenu start -->
<? include "include/topmenu.html"; ?>
<!-- topmenu end -->
	
<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>HTML Help - Edytor spisu treści HTML Help</h1>



<p>Spis treści jest główną częścią panelu nawigacyjnego HTML Help. Za jego pomocą poruszamy się po nieraz bardzo skomplikowanym systemie stron. Edytor pozwala na takie sporządzenie spisu treści, by z jednej strony odpowiadał logice projektu, z drugiej był ciekawy wizualnie.<br />
   Spis treści przedstawiany jest w formie drzewa tematów. Można je więc formułować jako tematy główne i podtematy, te zaś mogą zawierać swoje własne odgałęzienia. Każdą pozycję zaopatrzyć możemy we własną ikonkę, wybierając z długiej listy takie, które najbardziej odpowiadają tematowi. Możemy również wybrać najbardziej odpowiedni krój czcionki, oraz kolorystykę tła.
</p>

<h2>Uruchamianie</h2>

<p>Opisywane narzędzie możesz uruchomić za pomoca przycisku oznaczonego ikoną pokazaną powyżej. Przycisk uruchomienia tego okna znajduje się np. w menu HTML Help oraz na pasku narzędzi HTML Help, a także w oknie <a href="tool_htmlhelp_hhp_editor.php">edytora projektu HTML Help</a>.

<h2>Główne okno spisu treści</h2>

<p>
W głównym oknie edytora, po jego prawej stronie znajduje się zestaw przycisków, pozwalających na uporządkowanie tematów poprzez: ustawienie ich w odpowiedniej hierarchii w drzewie tematów (przyciski pozycjonowania: w górę, w dół, poziom wyżej, poziom niżej), zadecydowanie o rodzaju tematu (główny, podrzędny), usuwania pozycji, sortowania tematów w kolejności alfabetycznej, a także tworzenie nowych tematów na podstawie już istniejących.<br />
Po prawej stronie okna głównego jest też pole, w którym należy wpisać katalog projektu.
</p>

<h2>Ustawienia elementu</h2>

<p>
W zakładce tej decydujemy o parametrach każdego z poszczególnych elementów spisu treści. Dokonane zmiany dotyczyły będą wyłącznie tego elementu. Uwaga! Należy bezwzględnie po jakiejkolwiek zmianie w ustawieniach zaakceptować je klikając na przycisk "Aktualizuj dane elementu".
</p>

<p><b>Nazwa</b><br />
W polu tym należy wpisać nazwę, jaka będzie widniała w spisie treści.
</p>
<p><b>Aktualizuj nazwę tytułem lub nazwą pliku</b><br />
Jeżeli zaznaczymy tę opcję, w polu powyżej nie musimy wpisywać nic, bo nazwa zostanie pobrana z nagłówka dokumentu HTML widniejącego w znaczniku &lt;TITLE&gt;, a jeśli znacznik ten jest pusty, umieszczona zostanie nazwa pliku dokumentu.
</p>
<p><b>Odsyłacz do</b><br />
W polu tym jest miejsce na wpisanie odsyłacza, do którego ma prowadzić ta pozycja w spisie treści. Aby wybrać plik, można użyć przycisków obok, co umożliwi wybranie pliku z dysku, lub wskazanie pliku wewnętrznego, znajdującego się w innym projekcie HTML Help.
</p>
<p><b>Etykiety lokalne</b><br />
Gdy zaznaczony zostanie przełącznik "Szukaj" znajdujący się obok, edytor będzie wyszukiwał etykiety lokalne znajdujące się w dokumencie (np. te oznaczone jako &lt;a name="id"&gt;). Znalezione etykiety dodane będą do listy etykiet, z której to listy będzie je można wybrać, a dzięki temu utworzyć odsyłacz do konkretnej etykiety.
</p>
<p><b>Alternatywny odsyłacz</b><br />
W polu tym jest miejsce na wpisanie alternatywnego odsyłacza, do którego ma prowadzić ta pozycja w spisie treści, a który zostanie uaktywniony, gdy z jakiegoś powodu nie będzie działał odsyłacz główny. Aby wybrać plik, można użyć przycisków obok, co umożliwi wybranie pliku z dysku, lub wskazanie pliku wewnętrznego, znajdującego się w innym projekcie HTML Help.
</p>
<p><b>Etykiety lokalne</b><br />
Gdy zaznaczony zostanie przełącznik "Szukaj" znajdujący się obok, edytor będzie wyszukiwał etykiety lokalne znajdujące się w dokumencie (np. te oznaczone jako &lt;a name="id"&gt;). Znalezione etykiety dodane będą do listy etykiet, z której to listy będzie je można wybrać, a dzięki temu utworzyć odsyłacz do konkretnej etykiety. Etykiety te odnoszą się do odsyłaczy alternatywnych.
</p>
<p><b>Okno</b><br />
Pole to przeznaczone jest na wpisanie nazwy okna HTML Help, do którego załadowany ma być dokument wskazywany przez tę pozycję spisu treści. Okna HTML Help definiuje się w <a href="tool_htmlhelp_hhp_editor.php#definiowanie-okien">edytorze projektu</a>.
</p>
<p><b>Ramka</b><br />
Przeznaczeniem tego pola jest wpisanie nazwy okna, lub wybranie jednej z predefiniowanych nazw z rozwijanej listy. Ma to na celu otwieranie tej pozycji w innym niż domyślne oknie.
</p>
<p><b>Ikona elementu</b><br />
Z listy rozwijanej można wybrać 42 niestandardowe ikony, jakimi może być opatrzona każda pozycja spisu treści. Przy braku wyboru dodawane będą standardowe ikonki, tzn. książeczki dla tematu głównego i kartki dla pozostałych pozycji.
</p>
<p><b>Zmień kategorię</b><br />
Zaznaczając ten przełącznik i klikając przycisk aktualizacji elementu poniżej można spowodować, że aktualny element spisu przekształcony zostanie na kategorię (o ile jest zwykłym elementem), lub na element (jeśli jest kategorią bez podelementów)
</p>
<p><b>Aktualizuj dane elementu</b><br />
Użycie tego przycisku jest konieczne, jeśli chcemy zaakceptować zmiany ustawień dla danego elementu. Nie potwierdzenie zmian i przejście do innej pozycji spowoduje utratę ustawień.
</p>

<h2>Własności spisu treści</h2>

<p>
Zakładka ta przeznaczona jest do definiowania ustawień ogólnych spisu treści. Zaznaczone lub wpisane opcje odnosiły się będą do wszystkich pozycji. Poczynione zmiany zapisujemy razem z całym spisem treści.
</p>

<p><b>Domyślne okno</b><br />
W polu tym wprowadzamy nazwę okna HTML Help, jakie będzie używane do wyświetlania zawartości po kliknięciu na dowolny element, który nie posada własnej definicji okna.
</p>
<p><b>Domyślna ramka</b><br />
Przeznaczeniem tego pola jest wpisanie nazwy okna, lub wybranie jednej z predefiniowanych nazw z rozwijanej listy. Ma to na celu otwieranie tej pozycji w innym niż domyślne oknie.
</p>
<p><b>Czcionka</b><br />
W tym polu jest miejsce na wpisanie czcionki, jaka zostanie użyta do spisu treści. Klikając na ikonkę obok pola otwieramy systemowe okno wyboru czcionki łącznie z jej typem i rozmiarem.
</p>
<p><b>Zestaw znaków</b><br />
Z listy rozwijanej pola wybieramy skrypt czcionki, jaka będzie używana przez HTML Help. Jeżeli używamy którejś z czcionek systemowych, wystarczy ustawienie domyślne, jakie jest standardowo wyświetlane w tym polu, czyli "001 DEFAULT".
</p>
<p><b>Użyj ikon folderów zamiast książek</b><br />
Po zaznaczeniu tej opcji zamiast standardowych ikonek książek w głównych tematach użyte zostaną ikonki folderów.
</p>
<p><b>Kolor elementów</b><br />
Pole to służy do wyboru koloru tekstu spisu treści. Na liście rozwijanej znajduje się zdefiniowana lista kolorów podstawowych, oraz włącznik palety kolorów. Domyślnym kolorem jest czarny. Po prawej stronie pola znajduje się przycisk przywracania koloru domyślnego.
</p>
<p><b>Kolor tła</b><br />
Pole to służy do wyboru koloru tła spisu treści. Na liście rozwijanej znajduje się zdefiniowana lista kolorów podstawowych, oraz włącznik palety kolorów. Domyślnym kolorem jest biały. Po prawej stronie pola znajduje się przycisk przywracania koloru domyślnego.
</p>
<p><b>Wygląd</b><br />
W polu tym znajduje się lista drobnych opcji wyglądu spisu treści HTML Help. Należy zaznaczyć te, które będą potrzebne do zmiany wyglądu. Poniżej okna znajduje się przycisk przywracania ustawień domyślnych tego okna. Oto lista opcji:
<ul>
   <li><p><b>Obramowanie</b><br />
	Po zaznaczeniu tej opcji panel spisu treści otrzyma obramowanie.
   </p>
   <li><p><b>Przyciski plus i minus</b><br />
	Po zaznaczeniu tej opcji w węzłowych punktach drzewa tematów pojawią si znaki plusa dla nie rozwiniętych gałęzi, zaś minusy dla rozwiniętych.
   </p>
   <li><p><b>Pozostaw zaznaczenie</b><br />
	Po zaznaczeniu tej opcji zaznaczenie tego elementu pozostanie mimo przeniesienia się do okna prezentującego tę pozycję, co pozwala na lepszą kontrolę.
   </p>
   <li><p><b>Linia do korzenia</b><br />
	Po zaznaczeniu tej opcji rozwinięcie jakiejś gałęzi spowoduje pokazanie pionowej linii łączącej elementy gałęzi z jej główną pozycją.
   </p>
   <li><p><b>Wklęsłe ramki</b><br />
	Po zaznaczeniu tej opcji obramowanie spisu treści będzie miało wygląd wklęsły.
   </p>
   <li><p><b>Autośledzenie zaznaczenia</b><br />
	Po zaznaczeniu tej opcji zaznaczenia będą automatycznie śledzone.
   </p>
   <li><p><b>Obramowanie dialogów</b><br />
	Po zaznaczeniu tej opcji uzyskasz dodatkowe obramowanie.
   </p>
   <li><p><b>Linie łączące elementy</b><br />
	Po zaznaczeniu tej opcji poszczególne elementy zyskają dodatkowe, pionowe linie łączące je.
   </p>
   <li><p><b>Rozwijaj jedną kategorię</b><br />
	Po zaznaczeniu tej opcji rozwijana będzie tylko dana kategoria.
   </p>
   <li><p><b>Wypukłe ramki</b><br />
	Po zaznaczeniu tej opcji obramowanie spisu treści będzie wypukłe.
   </p>
   <li><p><b>Kolejność czytania z prawej na lewo</b><br />
	Opcja ta stanowi ułatwienie dla narodowości, których pismo jest typu hebrajskiego i czyta się je od prawej do lewej.
   </p>
   <li><p><b>Suwak po lewej stronie</b><br />
   	Po zaznaczeniu tej opcji pionowy suwak pojawiał się będzie po lewej stronie. Jest to ułatwienie dla używających pisma typu hebrajskiego.
   </p>
   <li><p><b>Wybieraj cały wiersz</b><br />
	Po zaznaczeniu tej opcji, w razie napisów w kilku liniach, zaznaczenie rozszerzy się na całą szerokość spisu treści.
   </p>
</ul>
</p>

<h2>Podgląd wybranego obiektu</h2>

<p>
Zakładka ta w całości służy do podglądu wybranego obiektu. Przypisaną do pozycji stronę HTML oglądać można jak w zwykłym oknie przeglądarki internetowej.
</p>


<br>
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
	<li><a href="tool_htmlhelp_hhp_editor.php">Edytor projektu HTML Help</a>
	<li><a href="tool_htmlhelp_hhk_editor.php">Edytor skorowidza (indeksu) HTML Help</a>
	<li><a href="tool_htmlhelp_folder_to_chm.php">Szybki HTML Help z folderu</a>
	<li><a href="tool_htmlhelp_hhp_compilation.php">Kompiluj dokument HTML Help</a>
	<li><a href="tool_htmlhelp_compiler_info.php">Informacja dla kompilatora HTML Help</a>
	<li><a href="tool_htmlhelp_compiler_services.php">HTML Help a projekty w Pająku</a>

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
