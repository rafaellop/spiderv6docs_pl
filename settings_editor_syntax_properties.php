
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
<title>Ustawienia programu - Kolorowanie składni - Właściwości schematu kolorowania</title>

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
<h1>Ustawienia programu - Kolorowanie składni - Właściwości schematu kolorowania</h1>

<!-- treść pomocy -->

<p>Okno 'Właściwości schematu kolorowania' pozwala na wprowadzenie zmian w ustawieniach schematu kolorowania. Możliwe jest dopasowanie kolorów i stylów tekstu, a także rozszerzeń nazw plików przypisanych do danego schematu kolorowania.</p>

<p>W odróżnieniu od '<a href="syntax_editor.php">Edytora schematów kolorowania</a>', zmiany w ustawieniach kolorów i stylów tekstu wprowadzone w tym oknie nie mają wpływ na sam schemat i możliwe jest przywrócenie ustawień domyślnych danego schematu.</p>

<p>Okno dzieli się na trzy zasadnicze części - 'Rozszerzenia przypisane do schematu' i 'Ustawienia kolorowania stylów' i 'Okno podglądu kolorowania'.</p>

<h2>Rozszerzenia przypisane do schematu</h2>

Do każdego schematu kolorowania można przypisać rozszerzenia nazw plików, dla których ten schemat będzie domyślnie stosowany. 

<p><b>Uwaga!</b><br />
Pająk umożliwia zmianę schematu kolorowania w trakcie pracy. Służy do tego przycisk 'Wybór schematu kolorowania składni' na 'Mini pasku edytora' (z lewej strony okna edytora). Jeśli w trakcie pracy zmieniono schemat kolorowania, zostanie od zapamiętany dla tego dokumentu i zastosowany przy jego kolejnym otwarciu. 
</p>

<b>Rozszerzenia przypisane do schematu</b><br />
W polu tym możesz wpisać rozszerzenia nazw plików, dla których wybrany schemat kolorowania będzie domyślnym. Rozszerzenia należy wpisywać w postaci <tt>*.rozszerzenie1;*.rozszerzenie2</tt>, czyli np. dla dokumentów HTML mogą to być: <tt>*.html;*.htm</tt>. Gwiazdka przed kropką oznacza dowolny ciąg, w związku z czym plik może mieć dowolną nazwę + rozszerzenie zdefiniowane tutaj.

<p><b>Typ schematu kolorowania</b><br />
Typ schematu kolorowania określa grupę, do której należy wybrany schemat. Grupowanie schematów kolorowania ułatwia zarządzanie schematami i ma również wpływ na ich prezentację na liście schematów kolorowania w głównym oknie programu. Schematy mogą być wyświetlane grupami lub pojedynczo w zależności od ustawienia opcji <b>Wyświetlaj pogrupowane schematy</b> w oknie <a href="settings_editor_syntax.php">Ustawienia programu - Kolorowanie składni</a>.</p>

<h2>Ustawienia kolorowania stylów</h2>

<p><b>Lista stylów</b><br />
Wybierz z listy styl kolorowania, w jakim chcesz wprowadzić zmiany. Schematy kolorowania mają nazwy stylów skonstruowane w ten sposób, by jak najłatwiej można było się zorientować, do czego dany styl jest w schemacie przypisany.</p>


<p><b>Właściwości tekstu</b><br />
Pozwala na wybór koloru i stylu tekstu</p>
<ul>
	<li><b>Kolor tekstu</b> - pozwala na wybór z listy dowolnego koloru dla tekstu. Pierwsze na liście jest kilka predefiniowanych kolorów. Wybranie ostatniej pozycji 'Wybierz..." spowoduje otwarcie okna, w którym będzie można wybrać dowolny kolor.</li>
	<li><b>Styl tekstu</b> - możesz zaznaczyć style, jakie mają zostać zastosowane do tekstu (pogrubienie, kursywa, podkreślenie, przekreślenie)</li>
</ul>


<b>Kolor tła</b>
<ul>
	<li><b>domyślny</b> - wybierz tę opcję, jeśli kolor tła ma pozostać domyślny (zdefiniowany w systemie). Jest to opcja zalecana.</li>
	<li>	<b>wybrany</b> - pozwala na wybór z listy dowolnego koloru tła. Pierwsze na liście umieszczono kilka predefiniowanych kolorów. Wybranie ostatniej pozycji 'Wybierz..." spowoduje otwarcie okna, w którym będzie można wybrać dowolny kolor.</li>
</ul>


<h2>Okno podglądu kolorowania</h2>
Podgląd kolorowania pozwala na bieżąco śledzić zmiany wprowadzane w stylu kolorowania. Możliwe jest też modyfikowanie tekstu podglądu. W tym celu skorzystaj z menu z prawej strony.

<p><b>Użyj domyślnego tekstu podglądu</b><br />
Kliknij, aby przywrócić zapisany w schemacie kolorowania tekst podglądu.</p>

<p><b>Użyj bieżącego dokumentu jako tekst podglądu</b><br />
Kliknij, aby wstawić do okienka podglądu dokument aktualnie otwarty w edytorze.</p>

<p><b>Użyj wskazanego dokumentu jako tekst podglądu</b><br />
Kliknij, aby otworzyć z dysku dokument, którego treść zostanie wpisana jako tekst podglądu.</p>

<p><b>Umożliwiaj modyfikację tekstu podglądu</b><br />
Kliknij, aby umożliwić modyfikację tekstu podglądu. Modyfikacje te nie zostaną zapisane po zamknięciu okna.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings.php#settingslist">Inne ustawienia</a>
	<li><a href="settings_editor_syntax.php">Ustawienia programu - Kolorowani składni</a>
	<li><a href="syntax_editor.php">Edytor schematów kolorowania</a>
	<li><a href="syntax.php">Ogólnie o kolorowaniu składni w Pająku</a><li>
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