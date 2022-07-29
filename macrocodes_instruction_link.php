<!DOCTYPE html>
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
<title>Tworzenie szablonu - instrukcja krok po kroku. Znacznik LINK do dołączania arkuszy CSS.</title>

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
<h1>Tworzenie szablonu - instrukcja krok po kroku. Znacznik LINK do dołączania arkuszy CSS.</h1>

<!-- treść pomocy -->

<p>Aby utworzyć szablon przejdź do zakładki Szablony w "Panelu zasobów z lewej". Jeśli panel nie jest widoczny, można go włączyć w menu Wyświetl. Innym sposobem jest skorzystanie ze skrótu klawiszowego (standardowo F9), lub użycie ikony "Wyświetlenie lub ukrycie panelu zasobów z lewej" na głównym pasku narzędziowym.</p>

<p>Można też otworzyć i przejść bezpośrednio do zakładki Szablony za pomocą skrótu klawiszowego Ctrl+4</p>

<p>W zakładce Szablony wybierz (lub utwórz) kategorię, w jakiej będzie umieszczony nowy szablon. Pogrupowanie szablonów w kategorie pozwala na zachowanie porządku w szablonach.</p>

<p>Następnie kliknij ikonę "Dodanie nowego szablonu".</p>




<h2>Przygotowania</h2>

<p>Przed przystąpieniem do pracy warto przemyśleć, co dany szablon będzie robił. Pozwoli to optymalnie go przygotować. W tym wypadku założenia będą następujące:
<ul>
	<li>znacznik będzie wstawiany tylko do sekcji HEAD dokumentu HTML. Cała treść znajdzie się w "Lewej części szablonu",</li>
	<li>użycie szablonu ma spowodować skopiowanie arkusza CSS w miejsce, gdzie jest zapisany dokument, do którego znacznik będzie wstawiany.</li>
</ul></p>

<p>Po otworzeniu <a href="macrocodes_editor.php">Edytora szablonów</a> wybierz dla niego nazwę. W tym wypadku najlepsza będzie "LINK - dołączanie CSS"</p>

<p>Typ szablonu może pozostać domyślny - "Po prostu szablon".</p>

<h2>Tworzenie szkieletu znacznika</h2>

<p>Najwygodniej jest utworzyć szkielet znacznika w edytorze za pomocą odpowiednich dla każdego znacznika narzędzi Pająka. Jednak dla tak prostego przykładu, jak obecnie tworzony szablon, można treść wpisać ręcznie.</p>

<p>W "Lewej części szablonu" wpisz następującą treść:<br />
<b>&lt;link rel="stylesheet" href="" type="text/css" /&gt;</b></p>


<p>W tej chwili nie jest jeszcze zdefiniowana ścieżka dostępu do pliku z arkuszami CSS. Aby ją podać, wykorzystana zostanie zmienna typu "Odsyłacz do dokumentów". </p>

<h2>Podanie ścieżki do pliku z CSS za pomocą zmiennej</h2>

Aby utworzyć zmienną, kliknij w ikonę "Dodanie nowej zmiennej" w menu nad oknem edycji treści szablonu. </p>
<ul>
	<li>W polu "Nazwa zmiennej" podaj nazwę (np. "Plik z CSS"). </li>
	<li>Opcja "Zmienna ukryta" pozostanie odznaczona (użytkownik korzystający z szablonu musi ją widzieć w inspektorze by móc zmienić ścieżkę do pliku).</li>
   <li>Typ zmiennej - wybierz typ "Odsyłacz do dokumentów". Ten typ zmiennej (podobnie jak "Odsyłacz do grafik") ma specjalną właściwość - plik wskazany w takiej zmiennej zostanie skopiowany do folderu, w którym jest zapisany dokument, do którego wstawiany jest szablon.</li>
   <li>Na koniec możesz wypełnić pole "Domyślna wartość ścieżki". Ścieżkę możesz wpisać ręcznie, lub wskaż plik za pomocą okienka otwierającego się po kliknięciu ikonę "Wybranie domyślnej ścieżki do pliku" (z prawej).</li>
</ul>

<p>Po utworzeniu zmiennej, pojawi się ona na liście zmiennych. Aby ją wstawić treści szablonu, postaw kursor między cudzysłowami wartości atrybutu href i kliknij ikonę "Wstawienie wybranej zmiennej".</p>

<p>W tej chwili szablon powinien mieć postać:<br />
<b>&lt;link rel="stylesheet" href="%pvar%Plik z CSS%pvar%" type="text/css" /&gt;</b></p>

<h2>Teraz możesz zamknąć okno za pomocą przycisku OK - szablon jest gotowy!</h2>

<p>Szablonu będzie można używać używając opcji:
<ul>
	<li>"<b>Wstaw szablon w pozycji kursora</b>" - jeśli kursor znajduje się obrębie sekcji HEAD dokumentu HTML</li>
	<li>"<b>Wstaw szablon z lewą częścią do HEAD</b>" - w tym wypadku kursor może być umieszczony gdziekolwiek - lewa część szablonu zawsze zostanie umieszczona w sekcji HEAD dokumentu HTML</li>
</ul></p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_macrocodes.php">Ustawienia programu - Szablony.</a>
	<li><a href="macrocodes_editor.php">Edytor szablonów.</a>
	<li><a href="macrocodes_instruction.php">Tworzenie szablonu - instrukcja krok po kroku - wstęp.</a>
	<li><a href="main_tabs_macrocodes.php">Zakładka Szablony</a>
	<li><a href="macrocodes.php">Szablony - ogólnie</a>
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