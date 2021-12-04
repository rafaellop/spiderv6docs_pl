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
<title>Wyszukiwanie, zamiana, przenoszenie do wybranych elementów dokumentu</title>

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
<h1>Wyszukiwanie, zamiana, przenoszenie do wybranych elementów dokumentu</h1>


<!-- treść pomocy -->

<p>Okno służy do szybkiego wyszukiwania i ewentualnej zamiany tekstu oraz do przenoszenia się do wybranych elementów dokumentu. 

<p>W górnej części okna znajdują się elementy umożliwiające zapamiętywanie szablonów wyszukiwania i ich ponowne wykorzystywanie.</p>

<p>Dolna część podzielone została na trzy zakładki:

<ul>
   <li>Wyszukiwanie</li>
   <li>Zamiana</li>
   <li>Przejście do wybranej...</li>
</ul>


<h2>Zapamiętywanie szablonów wyszukiwania</h2>

<p>Funkcja zapamiętywania szablonów wyszukiwania przydaje się, gdy często musisz wyszukiwać te same fragmenty tekstu. W szablonie wyszukiwania zapamiętywane są teksty z pola 'Znajdź tekst' (z <a href="#find">zakładki Wyszukiwanie</a>) oraz z pól 'Znajdź tekst' i 'Zamień na' (z <a href="#replace">zakładki Zamiana</a>).</p>

<p>Do zapamiętywania szablonów i ich ponownego wykorzystywania służą następujące elementy:</p>

<p><b>Szablony wyszukiwania</b><br />
To jest lista z nazwami zapamiętanych szablonów wyszukiwania. Możesz z niej wybrać szablon, jaki ma zostać użyty.

<p><b>Dodaj szablon do listy</b><br />
Kliknij, aby dodać do listy szablon wyszukiwania według bieżących ustawień.

<p><b>Usuń szablon z listy</b><br />
Kliknij, aby usunąć z listy bieżący szablon wyszukiwania.



<h2><a name="find"></a>Wyszukiwanie</h2>

<p>Zakładka "Wyszukiwanie" umożliwia szybkie wyszukiwanie tekstu w aktualnie otwartym dokumencie.</p>

<p>Aby szybko wywołać narzędzie możesz użyć standardowego skrótu <tt>Ctrl+F</tt>, lub skorzystaj z przycisku  "Znajdź" w menu "Szukaj".</p>

<p><b>Znajdź tekst:</b><br />
Podaj tekst, który ma zostać znaleziony w dokumencie. Możesz skorzystać z listy rozwijanej, na której znajdują się ostatnio wyszukiwane frazy.</p>

<p><b>Ustawienia</b> - umożliwia ustawienie opcji dla wyszukiwanego tekstu
<ul>
   <li><b>Uwzględniaj wielkość liter</b> - zaznacz, aby w wyszukiwanym tekście wielkość liter miała znaczenie.</li>
   <li><b>Wyrażenia regularne</b> - zaznacz, aby w wyszukiwanym tekście można było używać <a href="find_regexp.php">wyrażeń regularnych</a>.</li>
   <li><b>Uwzględniaj całe wyrazy</b> - zaznacz, aby wyszukana fraza musiała być całym słowem, a nie fragmentem dłuższego słowa (np. szukając frazy 'mar' odszukane zostaną wszystkie słowa 'mar', ale nie 'marek').</li>
</ul>
</p>

<p><b>Kierunek</b> - umożliwia określenie kierunku przeszukiwania względem obecnej pozycji kursora (karetki) w dokumencie
<ul>
   <li><b>W przód</b> - wyszukiwanie rozpocznie się od miejsca postawienia kursora do końca dokumentu. Po osiągnięciu końca program pyta, czy przeszukiwać od początku dokumentu.</li>
   <li><b>W tył</b> - wyszukiwanie rozpocznie rozpoczęło się od miejsca postawienia kursora do początku dokumentu. Po osiągnięciu początku program pyta, czy przeszukiwać od końca dokumentu.</li>
   <li><b>Cały dokument</b> - wyszukiwanie obejmie cały dokument, od początku do końca. W przypadku wybrania tej opcji, opcje w sekcji "Przeszukaj" są nieaktywne.</li>
</ul></p>

<b>Przeszukaj</b> - umożliwia precyzyjniejsze określenie zakresu przeszukiwania w dokumencie
<ul>
   <li><b>cały dokument</b> - przeszukiwany zostanie cały dokument,</li>
   <li><b>zaznaczony tekst</b> - przeszukiwany zostanie tylko tekst zaznaczony w edytorze. </li>
   <li><b>tekst od linii... do linii ...</b> - przeszukiwany zostanie teks zawierający się w określonym przedziale</li>
</ul>

<p><b>Znajdź</b><br />
Kliknij, aby rozpocząć wyszukiwanie.</p>



<h2><a name="replace"></a>Zamiana</h2>

<p>Zakładka "Zamiana" umożliwia szybką zamianę tekstu w aktualnie otwartym dokumencie.</p>

<p>Aby szybko wywołać narzędzie, możesz użyć standardowego skrótu Ctrl+R, lub skorzystaj z przycisku  "Znajdź i zamień" w menu "Szukaj".</p>

<p><b>Znajdź tekst:</b><br />
Podaj tekst, który ma zostać znaleziony w dokumencie w celu zamiany. Możesz skorzystać z listy rozwijanej, na której znajdują się ostatnio wyszukiwane frazy.</p>

<p><b>Zamień na:</b><br />
Podaj tekst, na który ma zostać zamieniona fraza podana w polu "Znajdź tekst". Możesz skorzystać z listy rozwijanej, na której znajdują się ostatnio używane w tym polu frazy. Dodatkowo możesz używać symboli <tt>\r\n</tt> oznaczających powrót karetki i przejście do następnego wiersza (wprowadzone łącznie oznaczają po prostu 'koniec wiersza')</p>

<p><b>Ustawienia</b> - umożliwia ustawienie opcji dla wyszukiwanego tekstu
<ul>
   <li><b>Uwzględniaj wielkość liter</b> - zaznacz, aby w wyszukiwanym tekście wielkość liter miała znaczenie.</li>
   <li><b>Pytaj przy zamianie</b> - zaznacz, aby przy znalezieniu każdej frazy zezwalać, bądź nie zezwalać na zamianę tekstu.</a>.</li>
   <li><b>Wyrażenia regularne</b> - zaznacz, aby w wyszukiwanym tekście można było używać <a href="find_regexp.php">wyrażeń regularnych</a>.</li>
   <li><b>Uwzględniaj całe wyrazy</b> - zaznacz, aby wyszukana fraza musiała być całym słowem, a nie fragmentem dłuższego słowa (np. szukając frazy 'mar' odszukane zostaną wszystkie słowa 'mar', ale nie 'marek').</li>
</ul>
</p>

<p><b>Kierunek</b> - umożliwia określenie kierunku przeszukiwania
<ul>
   <li><b>W przód</b> - wyszukiwanie rozpocznie się od początku tekstu, do jego końca,</li>
   <li><b>W tył</b> - wyszukiwanie rozpocznie rozpoczęło się od końca tekstu, do jego początku.</li>
   <li><b>Cały dokument</b> - wyszukiwanie obejmie cały dokument, od początku do końca. W przypadku wybrania tej opcji, opcje w sekcji "Przeszukaj" są nieaktywne.</li>
</ul></p>

<b>Przeszukaj</b> - umożliwia precyzyjniejsze określenie zakresu przeszukiwania w dokumencie
<ul>
   <li><b>cały dokument</b> - przeszukiwany zostanie cały dokument,</li>
   <li><b>zaznaczony tekst</b> - przeszukiwany zostanie tylko tekst zaznaczony w edytorze. </li>
   <li><b>tekst od linii... do linii ...</b> - przeszukiwany zostanie teks zawierający się w określonym przedziale</li>
</ul>

<p><b>Znajdź następny</b><br />
Kliknij, aby odnaleźć następne wystąpienie szukanej frazy.</p>

<p><b>Zamień</b><br />
Kliknij, aby odnaleźć i zamienić odnalezioną frazę na tekst podany w polu "Zamień na".</p>

<p><b>Zamień wszystkie</b><br />
Kliknij, aby odnaleźć i zamienić wszystkie odnalezione frazy na tekst podany w polu "Zamień na".</p>



<h2><a name="goto"></a>Przejście do wybranej...</h2>

<p>Zakładka umożliwia szybkie przenoszenie się do wybranego fragmentu dokumentu:</p>

<ul>
   <li><b>etykiety</b> -  lub inaczej kotwicy, czyli do znacznika HTML o określonym atrybucie ID</li>
   <li><b>zakładki</b> - do miejsca w którym ustawiona jest wybrana <a href="main_editor_bookmarks.php#numbered">zakładka numerowana</a></li>
   <li><b>zakładki nazwanej</b> - do miejsca w którym ustawiona jest wybrana <a href="main_editor_bookmarks.php#named">zakładka nazwana</a></li>
   <li><b>zadania do wykonania</b> - do miejsca, w którym ustawione jest <a href="main_editor_todotasks.php">Zadanie do wykonania</a></li>
   <li><b>wiersza o numerze</b> - do określonego wiersza w dokumencie</li>
</ul>


<p><b>Przejdź</b><br />
Kliknij aby przejść do wybranego miejsca w dokumencie. Okno narzędzia pozostanie otwarte. Aby edytować dokument, należy postawić kursor w wybranym miejscu</p>

<p><b>Przejdź i zamknij</b><br />
Kliknij aby przejść do wybranego miejsca w dokumencie i zamknąć okno narzędzia. Kursor zostanie postawiony na początku wiersza z wybranym elementem.</p>

<p><b>Po znalezieniu tekstu</b><br>
W dolnej części okna znajduje się grupa przełączników odpowiadających za zachowanie się okna wyszukiwania po kliknięciu przycisku Znajdź lub Zamień. Można wybrać, aby po akcji kursor został przeniesiony do okna edytora z pozostawieniem otwartego okna wyszukiwania (Kursor do edytora). Można wybrać, aby kursor pozostał w oknie (Kursor w oknie) lub, aby okno wyszukiwania zostało zamknięte, a kursor został przeniesiony do edytora (Zamknij okno).
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
   <li><a href="find.php">Wyszukiwanie w Pająku</a>
   <li><a href="find_ext.php">Rozszerzone wyszukiwanie i zamiana</a>
   <li><a href="find_regexp.php">Wyszukiwanie - wyrażenia regularne</a>
   <li><a href="main_editor_navigation.php">Inne sposoby nawigacji po dokumencie</a>
   <li><a href="main_tabs_navigator.php">Zakładka "Nawigator"</a>
   <li><a href="main_menu_find.php">Menu Szukaj</a>
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
