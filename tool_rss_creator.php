<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Kreator kanału RSS</title>

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
<h1>Narzędzia - Kreator kanału RSS</h1>



<p>Ten kreator pomoże Ci utworzyć kanał RSS lub zmodyfikować istniejący już kanał, który możesz załadować z dysku. Kanały RSS to wygodny sposób dostarczania wiadomości do użytkowników, a Pająk posiada wbudowany czytnik RSS.


<h2>Uruchamianie</h2>

<p>Kreator kanału RSS możesz uruchomić za pomocą polecenia oznaczonego ikoną pokazaną powyżej znajdującego się w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_creators.php">Kreatory kodu znaczników</a>.


<p>Pomiędzy planszami poruszasz się za pomocą przycisków Dalej i Wstecz.


<h2>Wybór dokumentu źródłowego</h2>




<p>Na pierwszej planszy możesz wybrać, czy chcesz tworzyć nowy kanał, czy edytować istniejący:
<ul>
   <li>utwórz nowy kanał RSS od zera</li>
   <li>modyfikuj istniejący kanał RSS</li>
</ul></p>

Na kolejnych planszach będziesz edytować rózne ustawienia. W zależności od wybranej wyżej opcji, będą one już wypełnione, bądź nie.




<h2>Wybór pliku źródłowego XML dla kanału RSS</h2>

<p>W tej planszy możesz wybrać z dysku plik źródłowy kanału RS, bądź wskazać miejsce w którym ma zostać zapisany nowy plik z ustawieniami kanału. Wprowadź do pola tekstowego ścieżkę dostępu, dla ułatwienia użyj przycisku umieszczonego obok.</p>




<h2>Wymagane ustawienia - kodowanie znaków, tytuł i opis</h2>

<p>Na tej planszy musisz wprowadzić dane wymagane dla utworzenia kanału.</p>

<p><b>Kodowanie znaków</b><br />
Wybierz z listy sposób kodowania znaków narodowych w tworzonym kanale.

<p><b>Tytuł</b><br />
Wprowadź tytuł kanału RSS

<p><b>Odsyłacz do głównej strony serwisu WWW</b><br />
Tutaj podaj odsyłacz do serwisu WWW (strony w Internecie) do której odnosi się kanał RSS.

<p><b>Opis kanału</b><br />
Tutaj wprowadź krótkie streszczenie zawartości i tematyki kanału



<h2>Dodatkowe ustawienia kanału</h2>

<p>Na tej planszy możesz określić dodatkowe, niewymagane parametry kanału RSS. Warto jednak poświęcić chwilę, aby uzupełnić te informacje.</p>

<p><b>Język kanału RSS</b><br />
Wybierz język z listy, który jest używany w kanale RSS. Dzięki temu czytniki potrafią np. grupować kanały zapisane w określonym języku.

<p><b>Copyright</b><br />
W tym miejscu podaj informacje na temat praw autorskich do treści przekazywanych w kanale RSS.

<p><b>Webmaster</b><br />
Adres email osoby odpowiedzialnej za techniczne sprawy związane z udostępnianiem kanału RSS.

<p><b>Edytor</b><br />
Adres email osoby odpowiedzialnej za treść wiadomości publikowanych za pomocą kanału RSS.

<p><b>Publikacja</b><br />
Data publikacji zawartości kanału.

<p><b>Zmiana</b><br />
Data dokonania ostatniej zmiany kanału RSS.

<h3>Logo graficzne kanału RSS</h3>

<p><b>URL obrazka</b><br />
W tym polu należy podać adres URL pliku graficznego logo kanału RSS

<p><b>Tytuł dla logo kanału RSS</b><br />
Tytuł logo kanału używany jest w opisie obrazka wyświetlanym w dymku za pomocą atrybutu ALT

<p><b>Odsyłacz do głównej strony serwisu WWW</b><br />
Tutaj podaj odsyłacz do serwisu WWW (strony w Internecie) do której odnosi się kanał RSS

<p><b>Opis logo kanału</b><br />
Opis logo kanału jest umieszczany jako tekst podpowiedzi (za pomocą atrybutu TITLE) w odsyłaczu, którym objęty jest obrazek logo kanału

<p><b>Szerokość i wysokość logo kanału</b><br />
W tym polu możesz podać wymiary obrazka logo kanału. Specyfikacja definiuje domyślną wartość wymiarów na <tt>88x31</tt>. Maksymalna wartość wymiarów dopuszczanych przez specyfikację RSS 2.0 to <tt>144x400</tt>.

<p><b>Wstaw wymiary obrazka</b><br />
Jeśli nie chcesz, aby wymiary obrazka były umieszczone w definicji kanału RSS, wyłącz ten przełącznik. W przeciwnym wypadku zaznacz go.




<h2>Zasady aktualizacji i klasyfikacja zawartości kanału</h2>

<p>Na tej planszy znajdują się dwie grupy ustawień odpowiedzialne za określanie zasad aktualizacji kanału oraz dołączenie klasyfikacji zawartości (treści) według RSACi (PICS).</p>

<p><b>Ważność - Time To Live (TTL)</b><br />
Ta własność określa czas w minutach przez jaki kanał RSS może pozostać w cache czytnika bez aktualizacji. Po upływie tego czasu kanał powinien zostać zaktualizowany automatycznie. Jeśli nie chcesz definiować tego parametru, ustaw wartość w tym polu na <tt>-1</tt>.

<p><b>Pomiń dni</b><br />
Możesz tutaj zaznaczyć te dni tygodnia, w których czytniki nie powinny aktualizować kanału RSS.

<p><b>Pomiń godziny</b><br />
Możesz tutaj zaznaczyć te godziny w ciągu dnia, w których czytniki nie powinny aktualizować kanału RSS.


<p><b>Dołącz klasyfikację zawartości RSACi (PICS)</b><br />
Zaznacz ten przełącznik jeśli chcesz zdefiniować klasyfikację treści znajdujących się w kanale RSS w standardzie PICS, tzn. określić stopień wulgaryzmów, seksu, przemocy i nagości dostarczanych przez kanał. Klasyfikacja tworzona jest w/g wymogów RSACi. Dodatkowo możesz podać dane o autorze klasyfikacji (adres jest pobierany z Ustawień użytkownika programu) i okresie ważności.




<h2>Elementy składowe kanału RSS</h2>

<p>Na tej planszy musisz zdefiniować elementy składowe tworzonego kanału RSS:</p>

<p><b>Elementy</b><br />
Lista zawiera wszystkie elementy składowe kanału RSS. Wybierając element powodujesz, że jego parametry są ładowane do poniższych pól. Aby dodać nowy element wciśnij przycisk + i podaj jego tytuł, a następnie wypełnij pozostałe pola i zapisz zmiany za pomocą przycisku Przypisania zmian. Za pomocą pozostałych przycisków możesz usuwać elementy kanału. Obok listy znajduje się kilka przycisków służących do jej obsługi - możesz dodawać i usuwać elementy, a także przypisać zmiany do bieżącego elementu.

<p><b>Tytuł elementu</b><br />
Tytuł elementu wyświetlany najczęściej jako nagłówek artykułu.

<p><b>Autor</b><br />
W tym polu podaj adres email lub nazwę autora lub obydwie informacje.


<h3>Ustawienia wybranego elementu:</h3>
W tej grupie zebrane są ustawienia elementu wybranego z listy powyżej.

<p><b>Opis elementu</b><br />
W tym polu możesz podać szerszy opis elementu, np. fragment artykułu, do którego odnosi się element. Za pomocą przycisków obok oraz menu kontekstowego możesz wstawić kilka prostych znaczników formatujących tekst. W tym wypadku opis zostanie umieszczony w sekcji CDATA

<p><b>URL</b><br />
Tutaj możesz podać odsyłacz do zasobu elementu w sieci. Zobacz również pomoc dla pola obok

<p><b>GUID</b><br />
GUID to globalny identyfikator elementu. Najczęściej jest to odsyłacz do zasobu w sieci. Jest to unikalny tekst, który jest często wykorzystywany przez czytniki do sprawdzania czy element jest nowszy w stosunku do poprzedniego. Jeśli dodatkowo zaznaczysz przełącznik znajdujący się obok określisz, że GUID oznacza odsyłacz URL do zasobu w sieci, który może być otwarty w przeglądarce

<p><b>Komentarze</b><br />
W tym polu podaj adres URL do strony gdzie można przeglądać i dodawać komentarze dotyczące tego elementu

<p><b>Publikacja</b><br />
Data publikacji elementu

<p><b>Nazwa źródła</b><br />
Jeśli element jest tworzony na podstawie tekstu źródłowego, np. książki lub artykułu w sieci, możesz tutaj podać jego nazwę, a obok odsyłacz do tego tekstu

<p><b>Odsyłacz</b><br />
Jeśli element jest tworzony na podstawie tekstu źródłowego, np. książki lub artykułu w sieci, możesz tutaj podać jego adres URL, a obok jego nazwę

<p><b>URL załącznika</b><br />
Jeśli chcesz, możesz wskazać plik załącznika odnoszącego się do elementu. W tym polu podajesz adres URL załącznika w sieci. Pozostałe dwa pola: rozmiar i typ MIME muszą być również zdefiniowane:

<p><b>Rozmiar (załącznika do elementu)</b><br />
Jeśli wskazałeś URL do pliku załącznika odnoszącego się do elementu, w tym polu musisz podać rozmiar pliku w bajtach.

<p><b>Typ MIME załącznika do elementu</b><br />
Jeśli wskazałeś URL do pliku załącznika odnoszącego się do elementu, w tym polu musisz wybrać typ MIME dla pliku załącznika, np. <tt>image/gif</tt> jeśli załącznik jest plikiem GIF.

<p><b>Kategorie</b><br />
To jest pole, gdzie wyświetlane są kategorie, do których przypisany jest element. Możesz podać dowolną liczbę kategorii. Dla kategorii możesz również określić parametr URL domeny. Do dodawania i usuwania kategorii służą przyciski umieszczone obok listy.



<h2>Zapisywanie i podgląd kanału</h2>

<p>Ostatnim krokiem jest zapisanie gotowego pliku kanału RSS i ewentualne wywołanie podglądu. Znajdziesz tu następujące polecenia: </p>


<p><b>Zapisz kanał</b><br />
Kliknij, aby zapisać plik XML z ustawieniami kanału. Jeśli edytujesz istniejący kanał, Pająk spyta, czy na pewno chcesz ten plik nadpisać.

<p><b>Zobacz podgląd</b><br />
Kliknij, aby wyświetlić podgląd gotowego kanału.

<p><b>Zobacz kod źródłowy</b><br />
Kliknij, aby wyświetlić kod źródłowy XML kanału.

<p><b>Otwórz plik XML kanału do edycji po zamknięciu okna</b><br>
Zaznacz ten przełącznik jeśli chcesz otworzyć wygenerowany plik XML kanału RSS do edycji w edytorze po zamknięciu tego okna.</p>


<h2>Koniec pracy narzędzia</h2>

Gratulacje, Twój kanał RSS jest gotowy. Ostatnią czynnością jest kliknięcie przycisku <b>Zamknij</b>.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
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
