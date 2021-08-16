
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6">

<!-- nazwa strony pomocy -->
<title>HTML Help - Ogólne informacje</title>

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
<h1>HTML Help - Ogólne informacje</h1>



<p>
HTML Help jest uniwersalnym formatem tworzenia pomocy w postaci jednolitych plików o rozszerzeniu CHM. Tworzenie pomocy w tym formacie dostępne jest każdemu, kto potrafi utworzyć strony HTML, oraz posiada zainstalowany w systemie HTML Help Workshop lub inny program posiadający kompilator CHM. <br /> <br />
HTML Help to nic innego, jak zestaw stron HTML wraz z arkuszami stylów, skryptami i grafikami skompilowana i skompresowana do postaci jednego pliku CHM, w którym zachowane zostaje całe bogactwo form, jakie cechuje format HTML. <br /> <br />
Ponieważ HTML Help ma wbudowaną możliwość komunikowania się z programami, służy głównie do tworzenia pomocy do tych programów i ze względu na łatwość wykonania jest do tego celu powszechnie wykorzystywana. Jednak łatwość budowy i możliwości prezentacyjne wykorzystywane są także do innych celów niż pomoc do programów. Wbudowany mechanizm indeksowania i bardzo dobry mechanizm wyszukiwania umożliwiają tworzenie doskonałych baz danych. Dzięki zachowaniu wszystkich cech HTML może być wykorzystany do gromadzenia adresów internetowych, poczty elektronicznej - wszystko to z możliwością opisu czy dołączenia grafik. Można również format ten wykorzystać do prezentacji albumów, grafik, a także wirtualnych pism i książek.<br /><br />

<h2>Tworzenie CHM w Pająku</h2>

<p>
Tworzenie HTML Help w Pająku zostało maksymalnie uproszczone i sprowadzone do znajomości posługiwania się kilkoma narzędziami:
</p>

<p><b>Edytor projektu</b><br />
<a href="tool_htmlhelp_hhp_editor.php">Edytor projektu</a> umożliwia ustalenie wszystkich parametrów: jakie pliki mają być dołączone, ogólne ustawienia całości projektu - wygląd, rozmiary, zachowanie, właściwości okien, oraz HTML Help Api, czyli komunikacja z plikami i programami.
</p>

<p><b>Edytor spisu treści</b><br />
<a href="tool_htmlhelp_hhc_editor.php">Edytor</a> służy do tworzenia spisu treści - głównej części nawigacyjnej pliku pomocy. Umożliwia przypisanie każdej pozycji określonej strony, które jest następnie wyświetlana w oknie głównym. Spis treści sporządzony jest w postaci hierarchicznego drzewa ikonek oraz nazw. Edytor pozwala również na dostosowanie spisu do indywidualnych potrzeb w zakresie wyglądu.
</p>

<p><b>Edytor indeksu</b><br />
<a href="tool_htmlhelp_hhk_editor.php">Edytor indeksu</a> pozwala na utworzenie skorowidza znakomicie ułatwiającego nawigację po całości. Poszczególne pozycje indeksu stanowią odwołania do konkretnych miejsc w aktualnym albo zewnętrznym projekcie. Można również grupować określone tematy, albo wywoływać okienka dialogowe zawierające grupy tematów.
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
        <li><a href="tool_htmlhelp_compiler_services.php">HTML Help a serwisy w Pająku</a>
        <li><a href="tool_htmlhelp_hhp_editor.php">Edytor projektu HTML Help</a>
        <li><a href="tool_htmlhelp_hhc_editor.php">Edytor spisu treści HTML Help</a>
        <li><a href="tool_htmlhelp_hhk_editor.php">Edytor skorowidza (indeksu) HTML Help</a>
        <li><a href="tool_htmlhelp_folder_to_chm.php">Szybki HTML Help z folderu</a>
        <li><a href="tool_htmlhelp_hhp_compilation.php">Kompiluj dokument HTML Help</a>
        <li><a href="tool_htmlhelp_compiler_info.php">Informacja dla kompilatora HTML Help</a>
        <li><a href="https://msdn.microsoft.com/en-us/library/windows/desktop/ms669985(v=vs.85).aspx" target="_blank">Pobierz HTML Help Workshop</a>


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