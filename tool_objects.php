
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Wstawianie obiektu</title>

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
            <a class="nav-link" href="contents_main.html">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.html">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.html">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.html">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.html">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.html">Ustawienia</a>
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
<div class="collapse" id="googlesearch">

        <script async src="https://cse.google.com/cse.js?cx=4dedefccca22f88c9"></script>
        <div class="gcse-search"></div>

</div>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Narzędzia - Wstawianie obiektu</h1>



<p>Za pomocą tego narzędzia możesz umieszczać na stronie obiekty różnego typu (Java, ActiveX, itp). Aby uruchomić to narzędzie wejdź do <a href="main_menu_main.html">Menu głównego</a> / <a href="main_menu_tools.html">Narzędzia</a> / <a href="main_menu_tools_objects.html">Skrypty i obiekty</a> / Obiekt osadzony. Opisywane narzędzie uruchomisz również z paska narzędzi <a href="toolbars_objects_scripts.html">Java, ActiveX, SSI i inne</a>. Należy tutaj wspomnieć, że narzędzie to występuje pod kilkoma ikonami i pozwala na wstawianie różnych obiektów za pomocą domyślnego oznaczenia odpowiednich przełączników.

<h2>Zakładka Ustawienia obiektu</h2>

<p>Na pierwszej zakładce dokonuje się określenia podstawowych właściwości wstawianego obiektu. Jeżeli zaznaczymy przełącznik <b>Kod</b>, konieczne jest wybranie typu osadzanego obiektu (ActiveX, Java lub inny). Dla kontrolek ActiveX wyboru dokonujemy z listy po prawej stronie, zawierającej wszystkie kontrolki zainstalowane w systemie. Dla apletu Javy konieczne będzie wskazanie ścieżki dostępu do pliku *.class bądź *.jar w polu o nazwie <b>Ścieżka</b>. Można także opcjonalnie określić typ MIME tego pliku.

<p>Na zakładce <b>Dane</b> określamy ścieżkę oraz typ MIME obiektu danych, który zostanie umieszczony na stronie (jeżeli przełącznik "Kod" nie został zaznaczony) bądź przekazany osadzonej aplikacji (w przypadku zaznaczenia przełącznika "Kod").

<p>W dolnej części pierwszej zakładki określa się inne parametry: adres bazowy dla podanych ścieżek, nazwa pliku zawierającego zarchiwizowane pliki obiektu (umożliwia to zmniejszenie czasu transferu z sieci), nazwę, pod którą będzie widziany obiekt na stronie oraz komunikat, jaki będzie wyświetlany przed załadowaniem kontrolki. Należy także określić lokalizację obiektu: wielkość, marginesy, obramowanie i wyrównanie na stronie.

<p>Ważne jest także pole "Znacznik", które umożliwia zdecydowanie, za pomocą jakiego znacznika obiekt zostanie wstawiony na stronę. Znacznik <tt>&lt;OBJECT&gt;</tt> jest zgodny z HTML 4.0 i daje największe możliwości, jednak gdy zależy nam na poprawnym wyświetlaniu apletu Javy również w starszych przeglądarkach, może zajść potrzeba wykorzystania znacznika <tt>&lt;APPLET&gt;</tt>, którego używania specyfikacja języka HTML jednak nie zaleca.

<h2>Zakładka Parametry dla obiektu</h2>

<p>Na drugiej zakładce o nazmożna określić dodatkowe parametry, które zostaną przekazane wstawianemu obiektowi przy starcie. Ustala się je za pomocą narzędzia <a href="tool_param.html">parametr obiektu</a>, które jest dostępne bezpośrednio w tym oknie po kliknięciu przycisku oznaczonego plusikiem.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="tool_multimedia_insert.html">Osadzanie multimediów (Flash, Quciktime, etc)</a>
        <li><a href="tool_param.html">Parametr obiektu</a>
        <li><a href="main_menu_tools_objects.html">Inne narzedzia z menu Skrypty i obiekty</a>
        <li><a href="main_menu_main.html">Menu programu</a>
        <li><a href="toolbars_general.html">Narzędzia na paskach</a>
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
<script async src="js/cookie.js"></script>
<div class="nk-cookie-banner alert text-center mb-0 cookietxt" role="alert">
  Nasze strony wykorzystują pliki cookies. Używamy cookies i podobnych m.in. w celach reklamowych i statystycznych oraz w celu dostosowania serwisów do potrzeb użytkowników. Mogą też stosować je nasi reklamodawcy, firmy badawcze oraz dostawcy aplikacji. W przeglądarce można zmienić ustawienia dotyczące cookies. <a href="https://www.creamsoft.com/pl/pp/#cookies" target="blank">Więcej informacji</a>. Jeśli nie wyrażasz zgody, opuść tę stronę.&nbsp;

  <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.nk_hideCookieBanner()">OK</button>
</div>
<!-- End of Cookie Banner -->

</body>
</html>