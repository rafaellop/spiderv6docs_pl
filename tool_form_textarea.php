
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Okienko tekstowe w formularzu</title>

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
<h1>Narzędzia - Okienko tekstowe w formularzu</h1>


<!-- treść pomocy -->

<p>To narzędzie służy do tworzenia i edycji okienka tekstowego w formularzu (znacznik <tt>&lt;TEXTAREA&gt;</tt>).

<p><p>Narzędzie uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_forms.php">Formularze</a> / Okienko tekstowe w formularzu, lub z paska <a href="toolbars_tables.php">Tabele i formularze</a>. Ikona polecenia została pokazana obok.

<p><b>Nazwa</b><br />
Podaj nazwę okienka tekstowego. Jest to konieczne to zidentyfikowania elementu podczas przetwarzania danych z formularza na serwera.

<p><b>Kolumn</b>,<b>Wierszy</b><br />
Wprowadź rozmiar okienka tekstowego (ilość kolumn i wierszy tekstu).


<p><b>Tylko do odczytu</b><br />
Zaznacz tę opcję, jeśli okienko ma być <i>tylko do odczytu </i>(np. w celu prezentacji tekstu, bez możliwości jego zmiany)


<p><b>Zablokowane</b><br />
Zaznacz tę opcję, jeśli okienko ma być zablokowane (atrybut <tt>disabled="disabled"</tt>).

<p><b>Zawijanie</b><br />
Wybierz sposób zawijania wierszy w okienku tekstowym:
<ul>
	<li><b>off</b> - tekst nie będzie zawijany (domyślne)</li>
	<li><b>physical</b> - tekst będzie zawijany w okienku i w tej samej postaci wysyłany do serwera.</li>
	<li><b>virtual</b> - tekst będzie zawijany tylko w okienku, do serwera przesłany będzie bez zawijania</li>
</ul>

<p><b>Tekst domyślny</b><br />
Wprowadź domyślny tekst, jaki umieszczony zostanie w okienku tekstowym.


<h2>Styl elementu</h2>

<p>Ta grupa pozwala na określenie stylu dla znacznika. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzędzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.

<h2>Przycisk "Zdarzenia i atrybuty"</h2>

<p>Przycisk "Zdarzenia i atrybuty" umożliwia otwarcie okna <a href="tool_events_attributes.php">Zdarzenia i inne atrybuty</a>. Okno to umożliwia określenie dodatkowych atrybutów edytowanego znacznika, które nie mają swoich odpowiedników w oknie narzędzia. Możesz tam również określić zdarzenia dla języków skryptowych pozwalające na uzyskanie różnych efektów specjalnych.


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
	<li><a href="tool_form_editor.php">Generator formularzy</a>
	<li><a href="tool_form_selectlist.php">Lista wyboru w formularzu</a>
	<li><a href="tool_form_others.php">Inne elementy formularza</a>
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