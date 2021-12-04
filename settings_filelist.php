
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Lista plików</title>

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
<h1>Ustawienia programu - Lista plików</h1>

<!-- treść pomocy -->
<p>
Kategoria o nazwie "Lista plików i otwieranie" pozwala na określenie zachowania listy plików w panelu "Moje serwisy", a także działanie funkcji "Przenieś i upuść". Możesz tutaj również przypisać rozszerzenia do określonych kategorii plików. W grupie tej znajdują się następujące podgrupy: "Lista plików i otwieranie", "Obsługa Przenieś i upuść", "Filtry plików". 

<h2>Lista plików i otwieranie</h2>

<p>Ta podgrupa ustawień dotyczy bezpośrednio zachowania się listy plików. Dostępne są tutaj następujące opcje:

<p><b>Wyświetlaj foldery na liście plików</b><br>
Zaznacz tę opcję, aby spowodować wyświetlanie folderów na liście plików. Jeśli wyłączysz tę opcje, na liście plików będą wyświetlane wyłącznie pliki.

<p><b>Zmieniaj folder na folder otwieranego dokumentu</b><br>
Zaznacz tę opcję, jeśli chcesz, aby w momencie otwierania pliku, aktualny folder był zmieniany na folder, w którym znajduje się otwierany dokument.

<p><b>Zmieniaj folder na folder zapisywanego dokumentu</b><br>
Zaznacz tę opcję, jeśli chcesz, aby w momencie zapisywania pliku, aktualny folder był zmieniany na folder, do którego zapisywany jest dokument.

<p><b>Zmieniaj folder na folder uaktywnianego dokumentu</b><br> 
Zaznacz tę opcję, jeśli chcesz, aby podczas przełączania się między dokumentami, aktualny folder był zmieniany na folder, w którym zapisany jest dokument, na który się przełączasz.

<p><b>Wstawiaj odnośniki lokalne małymi literami</b><br>
Zaznacz tę opcję, aby odnośniki do plików wstawianych do dokumentów były zawsze wstawiane małymi literami.

<p><b>Ukrywaj pliki kopii bezpieczeństwa BAK na liście plików</b><br>
Zaznacz tę opcje, jeśli chcesz ukryć na liście plików kopie bezpieczeństwa (BAK) wykonywane podczas pracy nad dokumentami.

<p><b>Przenoś usuwane pliki do Kosza</b><br>
Zaznacz tę opcję, aby pliki, które usuwasz, trafiały do kosza Windows i mogły być ewentualnie odzyskane.

<p><b>Usuwając pliki z dysku usuwaj także ich kopie zapasowe</b><br>
Zaznacz tę opcję, jeśli chcesz usuwać pliki kopii bezpieczeństwa BAK razem z plikami oryginalnymi, których kopiami są pliki BAK.

<p><b>Ukryj pasek przycisków listy plików i drzewa katalogów</b><br>
Zaznacz tę opcję, jeśli nie chcesz, aby obok listy plików i drzewa katalogów na zakładce "Moje serwisy" umieszczony był pasek przycisków do obsługi tej listy.</p>

<p><b>Wyświetlaj ikony overlay na liście plików i folderów</b><br />
Wyłącz tę opcję, aby program nie wyświetlał 'nakładek' na ikonach plików i folderów. Przyspieszy to odświeżanie listy plików.<br>
Ikony overlay są stosowane przez różne programy, jak np. systemy kontroli wersji CVS itp.
                                                      
                                                                                                

<h2>Obsługa "Przenieś i upuść"</h2>

<p>Ta podgrupa ustawień dotyczy operacji przenoszenia i upuszczania plików w ramach listy plików. Dostępne są tutaj następujące opcje:

<p><b>Przenosząc pliki HTML z listy plików wstawiaj odnośnik</b><br>
Zaznacz tę opcję, aby przenoszenie za pomocą myszki plików z listy plików nad edytor nie powodowało otwierania ich do edycji, ale wstawienie odsyłacza do nich.

<p><b>Przenosząc inne pliki z listy plików edytuj w narzędziu</b><br>
Zaznacz tę opcję, aby przenoszenie za pomocą myszki plików innych niż dokumenty HTML z listy plików nad edytor powodowało otwieranie ich do edycji w odpowiednim narzędziu.

<p><b>Przenosząc pliki HTML/PHP do bloku PHP włączaj do dokumentu</b><br>
Zaznacz tę opcję, aby przenoszenie za pomocą myszki plików dokumentów HTML oraz PHP z listy plików nad edytor nie powodowało otwierania ich do edycji, ale wstawienie konstrukcji włączającej w stylu PHP, np. include ("nazwa_pliku").

<h2>Filtry plików</h2>

<p>Ta podgrupa ustawień pozwala przypisać wybrane rozszerzenia do określonych grup plików i w ten sposób umożliwia odpowiednie filtrowanie plików na liście plików. Dostępne są następujące ustawienia:

<p><b>Filtr plików - Dokumenty HTML</b><br>
W tym polu wprowadź rozdzielone średnikami nazwy rozszerzeń dla tych typów plików, których chcesz używać jako dokumentów HTML. Rozszerzenia powinny mieć postać np. *.html;*.php.

<p><b>Filtr plików - Pliki graficzne</b><br>
W tym polu wprowadź rozdzielone średnikami nazwy rozszerzeń dla tych typów plików, których chcesz używać jako plików graficznych. Rozszerzenia powinny mieć postać np. *.gif;*.jpg

<p><b>Filtr plików - Pliki Web</b><br>
W tym polu wprowadź rozdzielone średnikami nazwy rozszerzeń dla tych typów plików, których chcesz używać jako plików web, czyli plików wykorzystywanych na stronach (np. animacje). Rozszerzenia powinny mieć postać np. *.avi;*.swf.

<p><b>Filtr plików - Ukrywaj pliki</b><br />
W tym polu wprowadź rozdzielone średnikami nazwy rozszerzeń dla tych typów plików, które mają być zawsze ukryte na liście plików na zakładce "<a href="main_tabs_myservices.php">Moje serwisy</a>".

<p><b>Ostrzegaj przy otwieraniu plików bez rozszerzenia</b><br>
Zaznacz tę opcję, jeśli chcesz, aby program wyświetlał ostrzeżenie podczas próby otwarcia pliku bez rozszerzenia.</p>

<h2>Powiązania plików z Pająkiem</h2>

<p>W tej grupie ustawień masz możliwość powiązania Pająka z wybranymi typami plików. Znajdziesz tutaj listę z typami, oraz przyciski do nadawania powiązania oraz usuwania go.

<p>Na liście znajdziesz nazwy typów oraz rozszerzenia plików, dla których możesz przypisać powiązanie z Pająkiem w menu kontekstowym eksploratora Windows. Dodatkowo powiązanie ustala dla plików wybranego typu ikony w stylu Pająka. 
<p>Aby powiązać z Pająkiem wybrane typy plików, zaznacz je używając przełącznika i wciśnij przycisk przypisania. </p>
<p>Aby usunąć powiązanie dla wybranych typów, odznacz te typy na liście i wciśnij przycisk przypisania..</p>

<p><b>Uwaga! Do zmiany powiązań w systemie wymagane są odpowiednie uprawnienia!</b> 

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="settings.php#settingslist">Inne ustawienia</a>
        <li><a href="main_tabs_myservices.php">Moje serwisy i lista plików</a>
        <li><a href="main_editor_backups.php">Tworzenie kopii bezpieczeństwa</a>
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