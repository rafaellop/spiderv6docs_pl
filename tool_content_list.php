<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Generator spisu treści</title>

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
<h1>Narzędzia - Generator spisu treści</h1>

<p>Generator spisu treści umożliwia szybkie stworzenie strony tytułowej dla całej witryny, spisu rozdziałów pojedynczej strony czy nawet ładnie wyglądającego katalogu w formacie HTML.</p>

<p>Okno narzędzia składa się z trzech zakładek, z ktorych aktywna może być zawsze tyko jedna, umożliwiając utworzenie spisu:
<ul>
	<li>Spis odsyłaczy lokalnych</li>
	<li>Spis odsyłaczy do innych dokumentów</li>
	<li>Spis plików</li>
</ul></p>



<h2>Spis odsyłaczy lokalnych</h2>

<p>Jeśli wybierzesz tę zakładkę, będziesz mógł utworzyć listę odnośników do etykiet w bieżącym dokumencie.</p>

<p>Przyciski obok listy umożliwiają usunięcie odnośnika z listy, a także ustawić, bądź usunąć wcięcie elementu na liście.</p>



<h2>Spis odsyłaczy do innych dokumentów</h2>

<p>Jeśli wybierzesz tę zakładkę, będziesz mógł utworzyć listę odnośników do innych dokumentów w bieżącym dokumencie. Oprócz odnośników do dokumentów, na liście znajda się również odnośniki do etykiet w tych dokumentach.</p>

<p>Przyciski obok listy umożliwiają usunięcie odnośnika z listy, a także ustawić, bądź usunąć wcięcie elementu na liście.</p>

<p><b>Okno docelowe</b><br />
Wybierze z listy okno przeglądarki, w jakim mają być otwierane odsyłacze.



<h2>Spis plików</h2>
<p>Opcje tej zakładki pozwalają na wybór plików, do których odnośniki mają się znaleźć na liście.</p>


<p>Główną część okna stanowi lista, na której prezentowane będą dokumentu i etykiety w dokumentach, do których będą prowadziły odsyłacze w spisie treści. </p>

<p>Przyciski z prawej strony listy umożliwiają dodawania i usuwanie elementów z listy, a także wskazywanie elementów, dla których ma zostać w spisie treści utworzone wcięcie. Wcięcie (podpunkt listy).</p>

<p><b>Okno docelowe</b><br />
Wybierze z listy okno przeglądarki, w jakim mają być otwierane odsyłacze.

<p><b>Ustawienia tworzenia listy plików</b><br />
Opcje tej sekcji pozwalają wybrać, w jaki sposób ma być generowana lista odnośników spisu treści.</p>

<ul>
	<li><b>Folder</b><br />Wprowadź ścieżkę do folderu, którego zawartość chcesz przekształcić na listę plików. Za pomocą poleceń z prawej strony pola możesz wskazać folder w oknie i utworzyć listę z jego zawartości.</li>
	<li><b>Przy tworzeniu listy dodaj zamiast od nowa</b><br />Zaznacz ten przełącznik, jeśli chcesz, aby po po każdym dodaniu pliku lub plików zostały one dopisane na końcu listy. <br />Jeśli chcesz, by po każdym dodaniu pliku do listy, była ona sortowana od nowa, odznacz ten przełącznik.</li>
	<li><b>Tytuł zamiast ścieżki</b><br />Zaznacz tę opcję, aby w spisie treści pokazywane były tytuły plików odczytane ze znaczników <tt>TITLE</tt>. Jeśli ta opcja będzie odznaczone, na liście prezentowane będą ścieki dostępu do pliku.</li>
	<li><b>Podpunkty z etykiet</b><br />Zaznacz ten przełącznik, jeśli chcesz umieścić w spisie treści etykiety każdego dokumentu. Etykiety te będą przedstawiane jako podpunkty w poszczególnych dokumentach.</li>
	<li><b>Dodaj tylko pliki z rozszerzeniem</b><br />Wybierz z listy, lub wprowadź rozszerzenia nazw plików, jakie mają znaleźć się na liście. Rozszerzenia należy podawać w postaci np. <tt>*.php;*.php3;*.php4</tt>.</li></li>
	<li><b>Dodaj łącznie z wszystkimi podfolderami</b><br />Zaznacz tę opcję, aby przy wyszukiwaniu plików brane pod uwagę były również pliki z podfolderów wskazanego foldera.</li>
</ul>

<p><b>Pozwól na wybieranie wielu elementów na raz</b><br />
Zaznacz ten przełącznik, jeśli chcesz, by można było wskazywać a listach plików w zakładkach po kilka elementów na raz. </p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_lists.php">Generator list wyliczeniowych</a>
	<li><a href="main_menu_main.php">Menu programu</a></a>
	<li><a href="toolbars_general.php">Inne narzędzia na paskach</a></a>
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