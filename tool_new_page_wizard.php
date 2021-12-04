
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Kreator nowej strony z szablonu</title>

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
<h1>Narzędzia - Kreator nowej strony z szablonu</h1>


<p>Ten kreator umożliwia szybkie utworzenie nowego, kompletnego dokumentu na podstawie szablonów stron dostępnych również na <a href="main_tabs_macrocodes.php">zakładce Makrokody</a>. Narzędzie włącza się automatycznie w momencie pierwszego uruchomienia programu. 
<p>Kreator składa się z trzech plansz. Do ich przełączania służą przyciski Dalej i Wstecz umieszczone u dołu okna.</p>

<h2>Uruchamianie kreatora</h2>

<p>W górnej części okna znajdziesz dwie opcje odpowiedzialne za uruchamianie kreatora: 

<p><b>Wyświetlaj to okno przy uruchamianiu Pająka</b><br />
Pozostaw zaznaczoną, jeśli podczas każdego uruchomienia programu kreator ma być automatycznie uruchamiany. 
<p><b>Wyświetlaj to okno gdy tworzony jest nowy dokument</b><br />
Pozostaw tę opcję zaznaczoną, by domyślną akcją podczas tworzenia nowego dokumentu było uruchomienia tego kreatora. W przypadku odznaczenia tej opcji, w edytorze zostanie otwarty nowy, pusty dokument.

<p>W każdej chwili podczas pracy programu możesz uruchomić kreatora korzystając z poleceń dostępnych w Menu Plik / Nowy dokument, bądź Narzędzia / Kreatory kodu znaczników </p>

<h2>Wybór szablonu strony</h2>

<p>Poniżej przełączników odpowiedzialnych za uruchamianie kreatora znajduje się najważniejszy element narzędzia - plansza umożliwiająca wybór szablonu. Możesz wybrać spośród kilkudziesięciu szablonów stron zebranych w dwóch kategoriach - Komerycyjne i Prywatne. Ten podzial jest oczywiście tylko umowny. Po prostu w kategorii Komercyjne znajdują się szablony stron wyglądających bardziej "oficjalnie", zaś w kategorii Prywatne szablony basujące bardziej do stworzenia własnej strony domowej itd. </p>
<p>Po wybraniu szablonu z drzewka po jego lewej stronie pojawi się obraz podglądu. </p>
<p>Jeśli zdecydujesz się użyć danego szablonu, kliknij w przycisk Dalej u dołu planszy.</p>


<h2>Ustawienia i treść dokumentu</h2>

<p>Elementy zebrane na drugiej planszy umożliwiają dostosowanie strony do własnych potrzeb. Z lewej strony umieszczono listę bloków. Każdy blok oznacza element, który można włączyć, bądź wyłączyć podczas generowania strony. W przypadku szablonów stron są to elementy menu strony (tzn. przyciski do pozostałych podstron). </p>
<p>Z prawej strony planszy umieszczono dwie zakładki: </p>

<p><b>Treść nowej strony</b><br />
<p>W tej zakładce możesz wprowadzić treść dokumentu. Domyślnie jest tu umieszczony przykładowy tekst. Jego zmiana nie jest konieczna, gdyż po wygenerowaniu dokumentu HTML i otwarciu do w edytorze będzie można ją w każdej chwili zmienić.</p>

<p><b>Zaawansowane</b><br />
W tej zakładce znajduje się inspektor zmiennych makrokodu służącego do wygenerowania strony. Są to zmienne zawierające tytuł strony, dymki podpowiedzi, ścieżki dostępu do plików załączonych do szablonu (np. grafiki itd.). Najczęściej nie trzeba tu nic zmieniać. 
Więcej na ten temat przeczytasz w temacie pomocy <a href="how_pagefrom_macrocode.php">Jak szybko stworzyć atrakcyjną stronę</a>.


<h2>Podgląd wygenerowanej strony</h2>

<p>Trzecia plansza kreatora służy do obejrzenia gotowej strony we wbudowanej przeglądarce. Dodatkowo istnieje możliwość wyświetlenia dokumentu w nowym oknie domyślnej przeglądarki w systemie, a także wybór komponentu przeglądarki używanego do podglądu w Pająku (MS Internet Explorer, bądź Mozilla).</p>


<h2>Zapis na dysk i edycja dokumentu</h2>

<p>W momencie uruchomienia podglądu dokument został już zapisany na dysku. Możesz zamknąć kreator przyciskiem <b>Zamknij</b> u dołu okna. Zapewne jednak zechcesz go dalej edytować i dostosowywać do własnych potrzeb, wypełnić treścią itd. W tym celu możesz kliknąć przycisk <b>Otwórz do edycji</b>. Kreator zakończy pracę, a nowo wygenerowany dokument zostanie otwarty w edytorze.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="main_tabs_macrocodes.php">Zakładka Makrokody</a>
   <li><a href="how_pagefrom_macrocode.php">Jak szybko stworzyć atrakcyjną stronę</a>
   <li><a href="main_menu_file_new.php">Menu główne - Plik/Nowy dokument</a>
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
