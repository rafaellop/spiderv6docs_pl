
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6">

<!-- nazwa strony pomocy -->
<title>Przeglądanie dokumentów - ogólnie</title>

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
<h1>Przeglądanie dokumentów - ogólnie</h1>

<!-- treść pomocy -->


<p>Zakładka "Przeglądanie" umieszczona jest w <a href="main_tabs_general.php#tabs_center">środkowym panelu</a>, którego nie możesz wyłączyć. Na tej zakładce możesz przeglądać aktualnie tworzony dokument. Umożliwia ona tez podgląd makrokodów, jeśli na <a href="main_tabs_macrocodes.php">zakładce Makrokody</a> została ustawiona taka opcja.</p>


<h2>Wbudowany podgląd</h2>

<p>Ze względu na bardzo szybko zmieniająca się ofertę programową wielkich firm i coraz nowsze rozszerzenia wprowadzane przez nie do języka HTML, zdecydowano, że Pająk nie zostanie wyposażony we własny system podglądu tworzonej strony. Położono natomiast silny nacisk na ułatwienie pracy z dostępnymi na rynku przeglądarkami. W chwili obecnej możesz używać do podglądu jednej z przeglądarek:
</p>


<p>Z poziomu Pająka można wykonać natychmiastowy podgląd pola edycji(domyślny klawisz <tt>F11</tt>) aktualnie edytowanej strony za pomocą zakładki "Przeglądanie". Funkcja ta wymaga zainstalowanej w systemie jednej z przeglądarek

<ul>
	<li>MS Internet Explorer w wersji 3.02 lub nowszej</li>
	<li>Mozilla 1.x</li>
</ul></p>


<h2>Zewnętrzna przeglądarka</h2>

<p>Dla osób, które używają innych przeglądarek Pająk został także wyposażony w inną możliwość podglądu strony. Używany mechanizm komunikacyjny DDE powoduje, ze po naciśnięciu klawisza Ctrl+F11, strona aktualnie wyświetlana w edytorze, natychmiast pojawia się w oknie domyślnej przeglądarki (domyślną przeglądarkę możesz ustawić w oknie <a href="settings_browse.php">Ustawień programu</a>) w takiej postaci, w jakiej zobaczą ją użytkownicy sieci Internet na całym świecie. W ten sposób Pająk może pracować z kilkoma różnymi przeglądarkami na raz. </p>

<p>Przeglądarki są wykrywane przez Pająka przy starcie. Można również ręcznie zdefiniować przeglądarki korzystając z okienka <a href="settings_browse.php">Ustawień programu</a> lub (również z tego samego okienka) przeprowadzić ich powtórną detekcję.</p>


<h2>Ustawianie dokumentu podglądu</h2>


Czasem zdarza się, że edytujesz dokument, który nie ma być jednak bezpośrednio oglądany, lecz jedynie stanowić część innego dokumentu. Możesz też chcieć przekazać do dokumentu jakieś parametry za pomocą metody GET (w adresie URL). W takim wypadku skorzystaj z okna 
	<li><a href="main_preview_prevdoc.php">Ustawienie dokumentu podglądu</a>.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_preview_embed.php">Zakładka "Przeglądanie"</a>
	<li><a href="main_preview_external.php">Używanie zewnętrznych przeglądarek</a>
	<li><a href="main_preview_prevdoc.php">Ustawienie dokumentu podglądu</a>
	<li><a href="main_editor.php">Edytor - ogólnie</a>
	<li><a href="main_tabs_general.php">Inne zakładki</a>
	<li><a href="main_window_desc.php">Główne okno programu</a>
	
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
