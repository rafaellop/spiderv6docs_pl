
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Generator wyliczeń</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<a name="top"></a>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Pająk V6</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="contents_main.php">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.php">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.php">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.php">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.php">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.php">Ustawienia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#googlesearch" role="button" aria-expanded="false" aria-controls="googlesearch">Wyszukaj</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	
<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Narzędzia - Generator wyliczeń</h1>


<p>Za pomocą Generatora wyliczeń możesz w łatwy sposób utworzyć listę numerowaną, nienumerowaną, a także listę definicyjną.</p>

<p><p>Aby uruchomić to narzędzie wejdź do <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_text.php">Tekst</a> / Edytor list wyliczeniowych. Opisywane narzędzie uruchomisz również z paska narzędzi <a href="toolbars_link_format.php">Odsyłacze, tekst, formatowanie</a>.

<p>Okno narzędzia zostanie otwarte również w przypadku, gdy skorzystasz z polecenia "Zaznaczony na listę numerowaną", bądź "Zaznaczony na listę nienumerowaną" w pasku narzędzi <a href="toolbars_link_format.php">Odsyłacze, tekst, formatowanie</a>, bądź w menu kontekstowym edytora.</p>


<p>Okno narzędzia zawiera dwie zakładki:</p>
<ul>
	<li><b>Lista wyliczeniowa</b> - służy do tworzenia listy numerowanej (<tt>&lt;OL&gt;</tt>), bądź nienumerowanej (<tt>&lt;UL&gt;</tt>)</li>
	<li><b>Lista definicyjna</b> - służy do tworzenia listy definicyjnej (<tt>&lt;DL&gt;</tt>)</li>
</ul>


<a name="ol_ul"></a>
<h2>Lista wyliczeniowa</h2>

<p>W tej zakładce możesz w łatwy sposób utworzyć listę numerowaną, bądź nienumerowaną.</p>

<p>Jeśli w edytorze zaznaczyłeś kilka linii tekstu, zostaną one umieszczone w edytorze jako punkty listy (każda linia utworzy osobny punkt).</p>

<p><b>Rodzaj</b><br />
Wybierz rodzaj listy (numerowana, czy nienumerowana).

<p><b>Mniejsze odstępy</b><br />
Zaznacz tę opcję, jeśli między wierszami mają być odstępy mniejsze niż standardowe. Ustawienie to ma status przestarzały (ang.  <i>deprecated</i>) i nie zaleca się korzystania z niego. Zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>.

<p><b>Typ</b><br /><br />
Wybierz typ liczb dla listy numerowanej, bądź symbol identyfikatora dla listy nienumerowanej. Ustawienie to ma status przestarzały (ang.  <i>deprecated</i>) i nie zaleca się korzystania z niego. Zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>.

<p><b>Numeruj od</b><br />
Wybierz liczbę początkową dla listy numerowanej. Ustawienie to ma status przestarzały (ang.  <i>deprecated</i>) i nie zaleca się korzystania z niego. Zaleca się korzystanie ze <a href="coding_css.php">stylów CSS</a>.

<p><b>Element</b><br />
W tym polu możesz wpisać i edytować treść elementu listy.

<p>Przyciski obok listy umożliwiają dodawanie, usuwanie i sortowanie (ręczne lub automatyczne) elementów. </p>

<p><b>Automatycznie ustaw wartość</b><br />
Jeśli zaznaczysz ten przełącznik program uzupełni atrybut VALUE dla każdej z opcji kolejnym numerem na liście uwzględniając oznaczoną w polu "Numeruj OD" wartość pierwszego pola o ile jest to lista numerowana






<a name="dl"></a>
<h2>Lista definicyjna</h2>

<p>W tej zakładce możesz w łatwy sposób utworzyć listę definicyjną. W tym celu w polu <b>Liczba elementów</b> (u dołu zakładki) podaj liczbę elementów listy, a następnie wypełnij listę, wpisując <b>z lewej strony hasło</b>, a <b>z prawej jego opis</b>.</p>



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




</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="main_menu_tools_text.php">Inne narzędzia z menu Tekst</a>
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

</body>
</html>