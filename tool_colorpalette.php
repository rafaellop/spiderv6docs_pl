<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Narzędzia - Paleta kolorów</title>

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
<h1>Narzędzia - Paleta kolorów</h1>

<p>Paleta kolorów to narzędzie pozwalające na łatwe wybieranie i umieszczanie kolorów w dokumencie lub wybieranie kolorów w okienkach narzędziowych. Paleta pozwala również na tworzenie wielu różnych palet, z których korzystasz przy tworzeniu swojego projektu.

<p>Paletę kolorów można uruchomić na kilka sposobów. Przede wszystkim z mini-paska narzędzi znajdującego się obok edytora. Dodatkowo za pomocą skrótu klawiszowego Shift+Ctrl+C oraz z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_other.php">Inne narzędzia</a> / Paleta kolorów. Jak już zostało wspomniane, okno palety jest również wyświetlane przy wyborze koloru w okienkach narzędziowych różnego rodzaju. We wszystkich przypadkach polecenie uruchamiające paletę kolorów oznaczone jest ikoną pokazaną powyżej

<p>Paletę po otwarciu przez menu główne lub przycisk na mini pasku narzędzi jest dokowalna w obrębie okna głównego. Można ją na przykład zadokować po prawej stronie ekranu i mieć cały czas na widoku.</p>

<h2>Korzystanie z palety kolorów</h2>

<p>Główną zaletą tego narzędzia jest możliwość definiowania wielu różnych palet składających się z dowolnych kolorów oraz łatwe i szybkie korzystanie z nich. Paleta może się składać z teoretycznie nieograniczonej liczby kolorów. Rozwiązanie oparte o palety pozwala na zachowanie spójności kolorystycznej tworzonych stron WWW ponieważ z tych samych kolorów można korzystać w każdym narzędziu i w każdej chwili.

<p>Po instalacji programu dostępnych jest kilka podstawowych palet, które można zmieniać za pomocą listy znajdującej się w górnej części okienka. Przyciski znajdujące się poniżej listy pozwalają na zarządzanie paletami, tj.

<ul>
	<li>tworzenie nowej palety
	<li>usuwanie wybranej palety
	<li>zapisywanie palety
	<li>importowanie palety
	<li>wyświetlenie tego tematu pomocy
</ul>

<p>Aby utworzyć nową paletę należy wcisnąć przycisk tworzenia nowej palety, nadać jej nazwę w wyświetlanym okienku, a następnie zdefiniować kolory składowe. Po utworzeniu nowej palety składa się ona tylko z 16 pozycji, które nie zawierają żadnych kolorów. Aby określić kolory należy skorzystać z przycisków znajdujących się na samym dole okienka. Przyciski te są opisane dalej.

<p>Po utworzeniu własnej palety proszę ją zapisać za pomocą przycisku oznaczonego dyskietką.

<p>Narzędzie palety wyposażone jest również w bardzo przydatną funkcję importu palet utworzonych w innych programach. Można zaimportować palety z programów HomeSite (testowane na wersji 4.01) oraz Paint Shop (testowane na wersjach od 4.x do 7.04). Niezwykle przydatny jest import palety z programu Paint Shop. Można bowiem w PSP wyeksportować paletę stworzoną na podstawie wybranego pliku graficznego i zaimportować ją do Pająka. Dzięki temu zachowana zostanie kolorystyka nie tylko w ramach tekstów umieszczonych na WWW, ale również grafik.

<p>Poniżej siatki kolorów palety znajdują się przyciski umożliwiające operacje na wybranej palecie, tj.

<ul>
	<li>wybieranie koloru z poza palety za pomocą okienka wyboru koloru,
	<li>wybranie koloru przez podanie jego wartości za pomocą kodu szesnastkowego w postaci <tt>#FF7348</tt>, lub <tt>FF7348</tt> (bez znaku krzyżyka <tt>#</tt>),
	<li>Dodanie wybranego koloru do palety (siatki kolorów).
	<li>Usunięcie koloru wybranego na siatce z palety.
	<li>Zamiana wybranego na siatce koloru na kolor wybrany.
	<li>Wybranie koloru z ekranu (pipeta) - za pomocą tego przycisku możesz wybrać kolor z dowolnego miejsca na ekranie. Myszką przesuwasz po ekranie, a w okienku palety widać kolor, który jest pod myszką. Aby zakończyć wybieranie wciskasz skrót klawiszowy ustawiony w oknie <a href="settings_general.php">ustawień ogólnych</a>.
   <li>Wstawienie koloru do dokumentu lub narzędzia. Zaznaczenie dowolnego tekstu, gdy nie jest on kodem koloru (np. #0000ff lub red) w edytorze i wybranie polecenia "Wstawienie wybranego koloru" na dokowalnej palecie kolorów powoduje objęcie zaznaczonego tekstu kolorem (a dokładniej znacznikiem <tt>&lt;div&gt;</tt> z ustawieniem odpowiedniego koloru). Gdy zaznaczony tekst jest kodem koloru, jest on zamieniany na kolor wstawiany z palety kolorów.
</ul>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_general.php">Ogólne ustawienia i przypisanie skrótu pipety</a>
	<li><a href="main_menu_main.php">Menu programu</a></a>
	<li><a href="toolbars_general.php">Inne narzędzia na paskach</</ul>
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