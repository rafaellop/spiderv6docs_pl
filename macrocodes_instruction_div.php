<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Tworzenie szablonu - instrukcja krok po kroku. Znacznik DIV z atrybutami.</title>

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
<h1>Tworzenie szablonu - instrukcja krok po kroku. Znacznik DIV z atrybutami.</h1>

<!-- treść pomocy -->

<p>Aby utworzyć szablon przejdź do zakładki Szablony w "Panelu zasobów z lewej". Jeśli panel nie jest widoczny,możesz go włączyć w menu Wyświetl. Innym sposobem jest skorzystanie ze skrótu klawiszowego (standardowo F9), lub użycie ikony "Wyświetlenie lub ukrycie panelu zasobów z lewej" na głównym pasku narzędziowym.</p>
<p>Można też otworzyć i przejść bezpośrednio do zakładki Szablony za pomocą skrótu klawiszowego Ctrl+4</p>

<p>W zakładce Szablony należy wybrać (lub utworzyć) kategorię, w jakiej będzie umieszczony nowy szablon. Pogrupowanie szablonów w kategorie pozwala na zachowanie porządku w szablonach.</p>

<p>Następnie kliknij ikonę "Dodanie nowego szablonu".</p>



<h2>Przygotowania</h2>

<p>Przed przystąpieniem do pracy warto przemyśleć, co dany szablon będzie robił. Pozwoli to optymalnie go przygotować. W tym wypadku założenia będą następujące:
<ul>
	<li>jeśli zostanie użyty gdy w edytorze jest zaznaczony tekst, tekst ten ma zostać objęty z lewej i z prawej strony znacznikami <tt>&lt;div&gt;</tt> i <tt>&lt;/div&gt;</tt></span>- wykorzystane zostaną lewa i prawa strona szablonu</li>
	<li>szablon ma umożliwiać podanie atrybutów: <tt>id</tt> i <tt>class</tt> - wykorzystane zostaną zmienne</li>
	<li>atrybuty nie muszą koniecznie być użyte (np. nie zawsze potrzebne będzie wstawienie class) - umieszczone zostaną w blokach</li>
</ul></p>

<p>Po otworzeniu <a href="macrocodes_editor.php">Edytora szablonów</a> należy wybrać dla niego nazwę. W tym wypadku najlepsza będzie "<tt>DIV + id + class</tt>"</p>

<p>Typ szablonu może pozostać domyślny - "Po prostu szablon".</p>




<h2>Tworzenie szkieletu znacznika</h2>

<p>Najwygodniej jest utworzyć szkielet znacznika w edytorze za pomocą odpowiednich dla każdego znacznika narzędzi Pająka. Jednak dla tak prostego przykładu, jak obecnie tworzony szablon, możesz treść wpisać ręcznie.</p>

<p>Z założeń wynika, że jeśli w chwili wstawienia szablonu w edytorze był zaznaczony tekst, to powinien on zostać objęty znacznikami <tt>&lt;div&gt;</tt> (z lewej strony) i <tt>&lt;/div&gt;</tt> (z prawej). Aby to osiągnąć, w zakładce "Lewa strona szablonu" wpisz <tt>&lt;div&gt;</tt>, a <tt>&lt;/div&gt;</tt> w zakładce "Prawa strona szablonu". Środek pozostanie pusty.</p>

<p>Kolejną czynnością będzie wstawienie atrybutów. Aby atrybuty można było wstawiać opcjonalnie, należy użyć bloków. Aby jednak mieć na początku pracy wgląd w ostateczny, pełny widok szablonu, najwygodniej jest wpisać treść w znaczniku w zakładce "Lewa strona szablonu". Do boków tekst zostanie przeniesiony później.</p>

<p>Po uzupełnieniu znacznika o atrybuty będzie, tekst w zakładce "Lewa strona szablonu" będzie wyglądał następująco:<br />
<tt>&lt;div class="" id=""&gt;</tt></p>




<h2>Wykorzystanie zmiennych</h2>

<p>Teraz należy uzupełnić wartości atrybutów, które obecnie są puste. Możesz wpisać je tam bezpośrednio, jednak najlepszym wyjściem jest wykorzystanie w tym celu zmiennych - podczas korzystania z szablonu będzie można dopasować wartości atrybutów do aktualnych potrzeb.</p>

<p>Jako pierwsza zostanie utworzona zmienna dla wartości atrybutu <tt>class</tt>. Aby utworzyć zmienną, kliknij w ikonę "Dodanie nowej zmiennej" w menu nad oknem edycji treści szablonu. </p>
<ul>
	<li>W polu "Nazwa zmiennej" podaj nazwę (np. "Nazwa klasy"). </li>
	<li>Opcja "Zmienna ukryta" pozostanie odznaczona (użytkownik korzystający z szablonu musi ją widzieć w inspektorze by móc zmienić jej wartość).</li>
	<li>Typ zmiennej - jako że jest to argument <tt>class</tt>, należy wybrać typ "Nazwa i lista klas CSS". Wybranie tego typu spowoduje automatyczne wypełnienie się listy, jeśli w dokumencie, do którego użytkownik będzie chciał wstawić szablon, będzie wstawiony lub dołączony zewnętrzny arkusz stylów CSS.</li>
	<li>Na koniec można wypełnić pole "Domyślna nazwa klasy". Spowoduje o umieszczenie tej wartości na liście klas, nawet w przypadku, gdy w arkuszu stylów CSS nie będzie takiej klasy.</li>
</ul>

<p>Podobnie należy postąpić dla wartości atrybutu <tt>id</tt>. Jedyną różnica będzie wybór typu zmiennej - tym razem "Wartość typu tekst".</p>

<p>Po utworzeniu zmiennej pojawi się ona na liście zmiennych. Aby ją wstawić do treści szablonu, należy postawić kursor między cudzysłowami danej wartości i kliknąć ikonę "Wstawienie wybranej zmiennej".</p>




<h2>Przeniesienie atrybutów znacznika do bloków</h2>

<p>Gdy atrybuty wraz ze zmiennymi są gotowe, można je przenieść do bloków. </p>

<p>Aby przenieść treść do bloku, należy ją najpierw wyciąć i umieścić w schowku. Można to zrobić za pomocą menu kontekstowego (kliknij prawym przyciskiem myszy na zaznaczonym tekście), lub za pomocą standardowego skrótu Ctrl+X. Najlepiej wyciąć tekst wraz ze spacją umieszczoną przed nim - wtedy wstawiając blok zawsze będzie on oddzielony spacją od poprzedzającej go nazwy znacznika, bądź treści innego bloku.</p>

<p>Następnie należy utworzyć nowy blok - za pomocą ikony "Dodanie nowego bloku". W oknie "Edycja bloku szablonu" podaj nazwę bloku (np. "Atrybut CLASS", lub "Atrybut ID") i wkleić skopiowany tekst (za pomocą menu kontekstowego lub skrótu Ctrl+V).</p>

<p>Po utworzeniu bloku należy wstawić jego wywołanie w miejsce wyciętego atrybutu. Aby wstawić blok w znaczniku  umieść kursor w odpowiednim miejscu znacznika (tam skąd został wycięty tekst dla bloku) i kliknij ikonę "Wstawienie wybranego bloku".</p>

<p>Po wstawieniu wywołań bloków do treści lewej części szablonu, powinna ona mieć postać:<br />
<tt>&lt;DIV%pblock%Atrybut CLASS%pblock%%pblock%Atrybut ID%pblock%&gt;</tt></p>



<h2>Teraz możesz zamknąć okno za pomocą przycisku OK - szablon jest gotowy!</h2>

<p>Szablonu będzie można używać używając opcji:
<ul>
	<li>"<b>Wstaw szablon w pozycji kursora</b>"</li>
	<li>"<b>Wstaw szablon bez środka</b>"</li>
</ul>
W obu przypadkach szablon zostanie wstawiony w miejscu gdzie stał kursor. Jeśli w edytorze był zaznaczony jakiś tekst, zostanie on objęty z lewej o prawej strony odpowiednią częścią szablonu.
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