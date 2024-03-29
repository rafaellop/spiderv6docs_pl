<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6">

<!-- nazwa strony pomocy -->
<title>Narzędzia - Pływająca ramka</title>

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
<h1>Narzędzia - Pływająca ramka</h1>



<p> Narzędzie Pływająca ramka służy do szybkiego wstawienia na stronę pływającej ramki, które będzie zawierała inny dokument.

<p>Okno tworzenia Pływającej ramki uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_frames.php">Ramki</a> / Pływająca ramka.
<p>Alternatywnym sposobem uruchomienia narzędzia jest przeciągnięcie dokumentu z listy plików w obręb znacznika <tt>&lt;iframe&gt;</tt> w umieszczonego w dokumencie otwartym w edytorze.</p>



<p><b>Nazwa</b><br />
Podaj nazwę tej ramki. Nazwa ta będzie wykorzystywana np. definiowaniu odnośników, które będą wczytywały dokument do tej ramki.

<p><b>Zawartość</b><br />
Podaj ścieżkę do dokumentu, który będzie domyślnie wczytany do tej ramki. Korzystając z listy rozwijanej możesz wybrać jeden z ostatnio wstawianych adresów. Możesz również skorzystać z przycisku obok pola, aby uruchomić otworzyć okno umożliwiające wybór pliku z dysku twardego.

<p><b>Wyrównanie</b><br />
Określ wyrównanie tej ramki względem innych elementów strony. Atrybut ten określony jest w specyfikacji HTML jako przestarzały (ang. <i>deprecated</i>) i w celu wyrównania zalecane jest używanie stylów CSS.

<p><b>Suwaki</b><br />
Określ, czy paski przewijania mają się pojawić w ramce:
<ul>
	<li><b>Auto</b> - pojawia się, jeśli zajdzie taka potrzeba (dokument nie zmieści się w całości w obszarze ramki)</li>
	<li><b>Tak</b> - zawsze będę się pojawiały</li>
	<li><b>Nie</b> - nie będą się pojawiały nawet wówczas, gdy dokument nie będzie się mieścił w ramce w całości.</li>
</ul>

<p><b>Szerokość</b>, <b>Wysokość</b><br />
Określ szerokość i wysokość ramki w dokumencie.

<p><b>Szerokość marginesu</b>, <b>Wysokość marginesu</b><br />
Określ szerokość i wysokość marginesu oddzielającego zawartość ramki od innych elementów strony.

<p><b>Obramowanie wokół pływającej ramki</b><br />
Zaznacz ten przełącznik, jeśli wokól ramki ma się pojawić obramowanie.</p>





<h2>Styl elementu</h2>

<p>Ta grupa pozwala na określenie stylu dla znacznika. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzedzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

<h2>Przycisk "Zdarzenia i atrybuty"</h2>

<p>Przycisk "Zdarzenia i atrybuty" umożliwia otwarcie okna <a href="tool_events_attributes.php">Zdarzenia i inne atrybuty</a>. Okno to umożliwia określenie dodatkowych atrybutów edytowanego znacznika, które nie mają swoich odpowiedników w oknie narzędzia. Możesz tam również określić zdarzenia dla języków skryptowych pozwalające na uzyskanie różnych efektów specjalnych.

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
	<li><a href="toolbars_general.php">Narzędzia na paskach</a>
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