<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Generator formularzy</title>

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
<h1>Narzędzia - Generator formularzy</h1>


<!-- treść pomocy -->

<p>Generator formularzy służy do kompleksowego przygotowywania formularza. Umożliwia podanie wszystkich parametrów i umieszczenie wszelkich elementów formularza, jakie mogą być potrzebne.

<p><p>Narzędzie uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_forms.php">Formularze</a> / Edytor formularzy, lub z paska <a href="toolbars_tables.php">Tabele i formularze</a>. Ikona polecenia została pokazana obok.

Okno narzędzia zawiera dwie zakładki:
<ul>
	<li><a href="#settings">Ustawienia formularza</a></li>
	<li><a href="#elements">Elementy formularza</a></li>
</ul>


<a name="settings"></a>
<h2>Ustawienia formularza</h2>

<p>Opcje tej zakładki umożliwiają podanie opcji dotyczących wysyłania formularza:</p>

<p><b>Akcja</b><br />
W tym polu wprowadź adres, na jaki ma być przesłany formularz. Może to być np. adres skryptu CGI, adres email itp. W celu ułatwienia pracy możesz skorzystać z listy, na której umieszczone zostały najpopularniejsze nazwy protokołów przesyłania danych w Internecie.

<p><b>Metoda</b><br />
Wybierz z listy metodę wysyłania formularza (<tt>GET</tt> lub <tt>POST</tt>).

<p><b>Okno docelowe</b><br />
Wybierz z listy, lub podaj nazwę okna, do którego zostanie wczytana strona będąca rezultatem wysłania formularza.

<p><b>Kodowanie</b><br />
W tym polu możesz określić, w jakim formacie mają zostać wysłane dane. Jest to potrzebne np. w przypadku wysyłania załączników do formularza.


<p><b>Zestaw znaków</b><br />
W tym polu możesz określić kodowanie znaków narodowych, jakie ma zostać użyte w celu zakodowania tekstów w formularzu. Pamiętaj, że kodowania te muszą być obsługiwane przez serwer, w przeciwnym wypadku teksty mogą być rozpoznane nieprawidłowo. Jeśli wpisujesz więcej, niż jedno kodowanie, poszczególne kodowania powinny być oddzielane przecinkami.

<p><b>Typy plików</b><br />
W tym polu możesz wprowadzić typy plików, jakie mogą być przesyłane jako załączniki formularza. Jeśli wpisujesz więcej, niż jeden typ, poszczególne typy powinny być oddzielane przecinkami.



<h2>Styl elementu</h2>

<p>Ta grupa pozwala na określenie stylu dla znacznika. Znajdziesz tutaj trzy pola pozwalające na określenie:

<p><b>Definicja stylu</b><br>
W tym polu określasz styl dla elementu umieszczanego w dokumencie. Przycisk obok uruchamia narzedzie <a href="tool_style_editor.php">edytora stylów</a> umożliwiające stworzenie definicji stylu w przyjazny i wygodny sposób. Klikając tam możesz również modyfikować istniejący styl.

<p><b>Wybór klasy</b><br>
W tym polu podajesz identyfikator klasy przypisany znacznikowi. Rozwijana lista umożliwia dostęp do klas zdefiniowanych w bieżącym dokumencie oraz w dołączonych do niego zewnętrznych arkuszach stylów. Przycisk znajdujący się obok uruchamia <a href="tool_style_class.php">narzędzie tworzenia nowej klasy</a>. 

<p><b>Identyfikator elementu</b><br>
Tutaj podajesz unikalny identyfikator tego elementu w dokumencie. Identyfikatory te mogą być wykorzystywane np. przy wykonywaniu skoków do określonych części strony bądź w skryptach.




<a name="elements"></a>
<h2>Elementy formularza</h2>


Ta zakładka służy do wstawiania do formularza wszelkich jego elementów. Wstawione elementy będą pojawiały się na liście. Możesz na niej bezpośrednio zmieniać treść każdego ze znaczników elementów. 

Przyciski z prawej strony listy umożliwiają uruchomienie narzędzi do tworzenia elementów formularza:

<ul>
	<li><a href="tool_form_others.php">Elementy formularza</a></li>
	<li><a href="tool_form_selectlist.php">Lista wyboru</a></li>
	<li><a href="tool_form_textarea.php">Okienko tekstowe</a></li>
	<li><a href="tool_table_quick.php">Bardzo szybka tabelka</a> - ten przycisk pozwala wstawić tabelkę, w której będziesz mógł umieszczać elementy formularza</li>
</ul>

<p><b>Zawijanie wierszy</b><br />
Zaznacz tę opcję, jeśli chcesz, by wiersze na liście elementów były zawijane tak, by długie wiersze wyświetlane były w całości.



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
	<li><a href="tool_form_textarea.php">Okienko tekstowe w formularzu</a>
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