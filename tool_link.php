
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
<title>Narzędzia - Wstawianie odnośnika</title>

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
<h1>Narzędzia - Wstawianie odnośnika</h1>

<!-- treść pomocy -->

<p>Okno służy do wstawiania odsyłaczy do innych dokumentów (znacznik <tt>A</tt> w języku HTML). 

<p> Narzędzie można uruchomić z poziomu menu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_links.php">Odsyłacze</a>, a także z pasków narzędzi oraz za pomocą standardowego skrótu klawiszowego <tt>Ctrl+Shift+A</tt>. Ikona polecenia przedstawiona została powyżej.</p>

<p>Okno podzielone zostało dwie części. W górnej możliwe jest zdefiniowanie typu odsyłacza:
<ul>
	<li>Odsyłacz URL do zasobów w sieci</li>
	<li>Odsyłacz do adresu email</li>
</ul>

<p>W dolnej części możesz podać opis odsyłacza, oraz inne atrybuty znacznika.</p>




<h2>Odsyłacz URL do zasobów w sieci</h2>

<p>W tej zakładce możesz wprowadzić dane odsyłacza do zasobów w sieci (adresy do dokumentów HTML, obrazów, serwerów FTP i innych)</p>

<b>Adres URL odsyłacza</b><br />
Podaj adres odsyłacza. Korzystając z listy rozwijanej możesz wybrać jeden z ostatnio wstawianych adresów. Możesz również skorzystać z przycisków obok pola:
<ul>
	<li><b>Wybór pliku docelowego</b> - kliknij aby otworzyć narzędzie do wyboru pliku  z dysku</li>
	<li><b>Skopiowanie odnośnika do pola "Opis"</b> - kliknij, aby kopiować odnośnik do pola "Opis odsyłacza" w dolnej części okna</li>
</ul>

<p><b>Etykiety w dokumencie</b><br />
Z tej listy możesz wybrać etykietę w dokumencie docelowym, do której ma prowadzić odsyłacz.</p>

<p><b>Kopiuj tytuł do opisu</b><br />
Zaznacz ten przełącznik, aby podczas wybierania pliku odsyłacza, program poszukiwał tytułu wskazanego dokumentu (zawartość znacznika TITLE) i automatycznie umieszczał go jako opis odsyłacza w poniższym polu "Opis odsyłacza"

<p><b>Etykieta</b><br />
W tym polu możesz wprowadzić nazwę etykiety dla edytowanego, bądź tworzonego znacznika <tt>A</tt>. Etykieta zostanie wstawiona jako atrybut <tt>name</tt>.</p>

<b>Okno docelowe</b><br />
W tym polu możesz podać nazwę ramki, w której ma zostać otwarty docelowy dokument (argument <tt>target</tt> języka HTML). Pozostawienie pustego pola oznacza, iż dokument ma być otwierany w tej samej ramce. Możesz tez wskazać jedną z wartości wartość z listy:

<ul>
	<li><b>_blank</b></li>
	<li><b>_self</b></li>
	<li><b>_top</b></li>
	<li><b>_parent</b></li>
</ul>                                                                        


<h2>Odsyłacz do adresu email</h2>

<p>W tej zakładce możesz podać adres email, na który ma wskazywać odsyłacz. Kliknięcie na taki element strony www spowoduje otworzenie okna do wpisywania listu domyślnego programu pocztowego.</p>

<p><b>Adres e-mail</b><br />
Podaj adres email (lub kilka adresów), na jaki ma zostać wysłany list. Możesz wybrać z listy jeden z ostatnio wpisywanych adresów email.</p>

<p><b>Skopiowanie odsyłacza do pól "Temat listu" oraz "Opis".</b><br />
Kliknij, aby utworzyć na podstawie adresu email temat listu oraz opis odsyłacza</p>

<p><b>Wyślij kopię na adres</b><br />
Podaj adres email, na jaki ma zostać wysłana kopia listu. Możesz wybrać z listy jeden z ostatnio wpisywanych adresów email.</p>

<p><b>Ukryj adres kopii</b><br />
Kliknij, aby podany adres został oznaczony ukryty i nie był pokazywany w nagłówku listu. Jest to przydane szczególnie w sytuacjach, gdy piszesz list do większe ilości osób, które nie powinny wzajemnie poznać adresów email innych odbiorców.</p>

<p><b>Temat listu</b><br />
Wpisz domyślny temat, jaki zostanie wstawiony do listu.</p>

<p><b>Treść listu (fragment)</b><br />
Podaj fragment tekstu, jaki ma zostać wstawiony do listu. Uwaga - może to nie działać z niektórymi programami pocztowymi i przeglądarkami!</p>

<h2>Opis i skrót</h2>

<p><b>Opis odsyłacza</b><br />
W tym polu możesz podać opis odsyłacza. Jest to tekst, jaki zostanie umieszczony między znacznikami &lt;A&gt; i &lt;/A&gt;. Alternatywnie, możesz wstawić obrazek korzystając z przycisku z prawej strony pola.</p>

<p><b>Dymek nad odsyłaczem</b><br />
Wypełnij to pole, aby w momencie przesunięcia kursora myszki nad odsyłaczem pojawił się dymek z jego opisem.</p>

<p><b>Skrót klawiszowy</b><br />
Po zaznaczeniu tego przełącznika będziesz mógł wybrać skrót klawiszowy dla danego odsyłacza.</p>



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
	<li><a href="tool_link_map_editor.php">Edytor map odsyłaczy</a>
	<li><a href="tool_events_attributes.php">Zdarzenia i inne atrybuty</a>
	<li><a href="tool_style_editor.php">Edytor stylów dla znacznika</a>
	<li><a href="tool_style_class.php">Przypisywanie klasy CSS dla znacznika</a>
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

</body>
</html>