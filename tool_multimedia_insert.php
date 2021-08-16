
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Narzędzia - Osadzanie multimediów</title>

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
<h1>Narzędzia - Osadzanie multimediów</h1>


<!-- treść pomocy -->

<p>Okno ułatwia wstawianie do dokumentu multimediów, jak filmy Flash, Realmedia, Quicktime.

<p> Narzędzie można uruchomić z poziomu menu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_gfx.php">Grafika i multimedia</a>, A także z paska narzędzi <a href="toolbars_gfx.php">Grafika i multimedia</a>. Ikona polecenia przedstawiona została obok.</p>
<p>Alternatywnym sposobem uruchomienia narzędzia jest przeciągnięcie pliku multimedialnego w obręb dokumentu otwartego w edytorze.</p>


<b>Typ osadzanych mediów</b><br />
Wybierz typ osadzanego pliku:
<ul>
	<li>Macromedia Flash &trade;</li>
	<li>Macromedia Shockwave &trade;</li>
	<li>Realmedia &trade;</li>
	<li>Apple Quicktime &trade;</li>
</ul>

<p><b>Ścieżka do pliku z mediami</b><br />
Wprowadź ścieżkę do pliku z prezentacją bądź filmem. Możesz skorzystać z okienka otwieranego za pomocą przycisku obok pola.</p>

<b>Sposób osadzenia</b><br />
Wybierz, w jaki sposób prezentacja, lub film mają zostać osadzone. Możesz wybrać wstawienie za pomocą:
<ul>
	<li><b>Obiekt (ActiveX)</b> - technologia obsługiwana przez Internet Explorer</li>
	<li><b>Obiekt (ActiveX) + Embed</b> - wstawienie zarówno kontrolki ActiveX, jak i obiektu Embed (dla Netscape). Jest to zalecane ustawienie.</li>
	<li><b>Embed</b> (wymagany przez Netscape)</li>
</ul>

<h2>Parametry prezentacji</h2>

<p><b>Wysokość</b>, <b>Szerokość</b><br />
Podaj wymiary wstawianego filmu.</p>

<p><b>Nazwa</b><br />
Wpisz nazwę (name) dla wstawianego obiektu.</p>

<p><b>Identyfikator</b><br />
Wpisz identyfikator (<tt>id</tt>) wstawianego obiektu</p>


<h2>Dodatkowe parametry</h2>
<p>
Lista zawiera wszystkie parametry przekazywane do odtwarzacza mediów. Możesz zmienić domyślne dane, jak np. kolor tła, ilość odtworzeń filmu itp. Lista parametrów zmienia się wraz ze zmianą typu prezentacji wybranego w górnej części okna.</p>





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
	<li><a href="tool_objects.php">Wstawianie obiektów osadzonych  - APPLET, INSERT, OBJECT</a>
	<li><a href="tool_embed.php">Wstawianie obiektów EMBED do dokumentu</a>
	<li><a href="tool_bgsound.php">Wstawianie dźwięku w tle</a>
	<li><a href="tool_graphic_insert.php">Wstawienia grafiki</a>
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
