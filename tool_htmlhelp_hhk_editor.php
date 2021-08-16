
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>HTML Help - Edytor skorowidza (indeksu) HTML Help</title>

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
<h1>HTML Help - Edytor skorowidza (indeksu) HTML Help</h1>


<p>
Skorowidz nie jest obowiązkową częścią panelu nawigacyjnego i przy małych projektach przygotowywanie go nie ma sensu - może być pomijany. Niemniej, jest on bardzo ciekawym i sprawnym narzędziem do nawigacji. Od spisu treści różni się tym, że poszczególne pozycje nie są w postaci hierarchicznego drzewa tematów - jest to zwykły spis, oraz nie jest przyozdabiany ikonkami. Skorowidz jest spisem tematów, tzw. słów kluczowych, które mogą być ustawiane w porządku alfabetycznym. Każdy z tematów może odnosić się nie tylko do konkretnej strony, ale również do wybranego jej miejsca, oznaczonego słowem kluczowym. Pojedynczy temat może zawierać również wiele odnośników do stron lub tematów. Po kliknięciu na takim temacie otwiera się wtedy okno dialogowe z wyborem wszystkich przypisanych mu odnośników. Skorowidz jest bardzo użytecznym i wręcz niezbędnym elementem panelu nawigacyjnego przy bardziej skomplikowanych projektach, lub mniejszych, ale gdy uzasadnia to ich tematyka, np. zawierają wiele elementów do wyeksponowania na swoich stronach.
</p>

<h2>Uruchamianie</h2>

<p>Opisywane narzędzie możesz uruchomić za pomoca przycisku oznaczonego ikoną pokazaną powyżej. Przycisk uruchomienia tego okna znajduje się np. w menu HTML Help oraz na pasku narzędzi HTML Help, a także w oknie <a href="tool_htmlhelp_hhp_editor.php">edytora projektu HTML Help</a>.

<h2>Główne okno skorowidza</h2>

<p>
W głównym oknie edytora, po jego prawej stronie znajduje się zestaw przycisków, pozwalających na uporządkowanie tematów poprzez: ustawienie ich w odpowiedniej hierarchii w drzewie tematów (przyciski pozycjonowania: w górę, w dół, poziom wyżej, poziom niżej), dodanie słowa kluczowego, usuwania pozycji, lub sortowania tematów w kolejności alfabetycznej.<br />
Po prawej stronie okna głównego jest też pole, w którym należy wpisać katalog projektu.
</p>

<h2>Ustawienia elementu</h2>

<p>
W zakładce tej decydujemy o parametrach każdego z poszczególnych elementów skorowidza. Dokonane zmiany dotyczyły będą wyłącznie tego elementu. Uwaga! Należy bezwzględnie po jakiejkolwiek zmianie w ustawieniach zaakceptować je klikając na przycisk "Aktualizuj dane elementu".
</p>

<p><b>Nazwa słowa kluczowego</b><br />
W polu tym należy wpisać nazwę, jaka będzie widniała w skorowidzu.
</p>
<p><b>Aktualizuj nazwę tytułem lub nazwą pliku</b><br />
Jeżeli zaznaczymy tę opcję, w polu powyżej nie musimy wpisywać nic, bo nazwa zostanie pobrana z nagłówka dokumentu HTML widniejącego w znaczniku <tt>&lt;TITLE&gt;</tt>, a jeśli znacznik ten jest pusty, umieszczona zostanie nazwa pliku dokumentu.
</p>
<p><b>Odsyłacz do</b><br />
W polu tym jest miejsce na wpisanie odsyłacza, do którego ma prowadzić ta pozycja w indeksie. Aby wybrać plik, można użyć przycisków obok, co umożliwi wybranie pliku z dysku, lub wskazanie pliku wewnętrznego, znajdującego się w innym projekcie HTML Help.
</p>
<p><b>Etykiety lokalne</b><br />
Gdy zaznaczony zostanie przełącznik "Szukaj" znajdujący się obok, edytor będzie wyszukiwał etykiety lokalne znajdujące się w dokumencie (np. te oznaczone jako <tt>&lt;a name="id"&gt;</tt>). Znalezione etykiety dodane będą do listy etykiet, z której to listy będzie je można wybrać, a dzięki temu utworzyć odsyłacz do konkretnej etykiety.
</p>
<p><b>Tytuł i meta klucze</b><br />
W tym polu umieszczany jest tytuł dokumentu lub nazwa pliku, jeśli tytuł nie może być odczytany, oraz słowa kluczowe z sekcji &lt;meta&gt; wybranego elementu odsyłacza. Tytuł określa nazwę odsyłacza dla tego słowa kluczowego.
</p>
<p><b>Odsyłacze do tego słowa kluczowego</b><br />
Pojedyncze słowo kluczowe musi prowadzić do co najmniej jednego odsyłacza. Można jednak do jednego słowa kluczowego przypisać dowolną ilość odsyłaczy, wtedy po kliknięciu na danym słowie kluczowym otworzy się okno dialogowe z listą wszystkich przypisanych do niego odsyłaczy. Domyślny odsyłacz może być oznaczony na takim spisie czerwoną kuleczką.
</p>
<p><b>Alternatywny</b><br />
W polu tym jest miejsce na wpisanie alternatywnego odsyłacza, do którego ma prowadzić ta pozycja w indeksie, a który zostanie uaktywniony, gdy z jakiegoś powodu nie będzie działał odsyłacz główny. Aby wybrać plik, można użyć przycisków obok, co umożliwi wybranie pliku z dysku, lub wskazanie pliku wewnętrznego, znajdującego się w innym projekcie HTML Help.
</p>
<p><b>Etykiety lokalne</b><br />
Gdy zaznaczony zostanie przełącznik "Szukaj" znajdujący się obok, edytor będzie wyszukiwał etykiety lokalne znajdujące się w dokumencie (np. te oznaczone jako <tt>&lt;a name="id"&gt;</tt>). Znalezione etykiety dodane będą do listy etykiet, z której to listy będzie je można wybrać, a dzięki temu utworzyć odsyłacz do konkretnej etykiety.
</p>
<p><b>Okno</b><br />
Pole to przeznaczone jest na wpisanie nazwy okna HTML Help, do którego załadowany ma być dokument wskazywany przez tę pozycję spisu treści. Okna HTML Help definiuje się w <a href="tool_htmlhelp_hhp_editor.php#definiowanie-okien">edytorze projektu</a>.
</p>
<p><b>Ramka</b><br />
Przeznaczeniem tego pola jest wpisanie nazwy okna, lub wybranie jednej z predefiniowanych nazw z rozwijanej listy. Ma to na celu otwieranie tej pozycji w innym niż domyślne oknie.
</p>
<p><b>Aktualizuj dane elementu</b><br />
Użycie tego przycisku jest konieczne, jeśli chcemy zaakceptować zmiany ustawień dla danego elementu. Nie potwierdzenie zmian i przejście do innej pozycji spowoduje utratę ustawień.
</p>

<h2>Własności indeksu</h2>

<p>
Zakładka ta przeznaczona jest do definiowania ustawień ogólnych indeksu. Zaznaczone lub wpisane opcje odnosiły się będą do wszystkich pozycji. Poczynione zmiany zapisujemy razem z całym skorowidzem.
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

<h2>Podgląd wybranego obiektu</h2>

<p>
Zakładka ta w całości służy do podglądu wybranego obiektu. Przypisaną do pozycji stronę HTML oglądać można jak w zwykłym oknie przeglądarki internetowej.
</p>


</td>
</tr>
</table>

<br />
<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - ogólne informacje</a>
	<li><a href="tool_htmlhelp_hhp_editor.php">Edytor projektu HTML Help</a>
	<li><a href="tool_htmlhelp_hhc_editor.php">Edytor spisu treści HTML Help</a>
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
