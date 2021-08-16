
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Paski narzędzi - Odsyłacze, tekst, formatowanie</title>

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
<h1>Paski narzędzi - Odsyłacze, tekst, formatowanie</h1>

<!-- Treść pomocy -->

<p>Pasek zawiera polecenia uruchamiające narzędzia do wstawiania i edycji odsyłaczy, a także do formatowania i obsługi tekstu. </p>


<p><b><a href="tool_link.php">Wstawienie odnośnika</a></b><br />
Kliknij, aby uruchomić narzędzie służące do wstawiania odnośnika <tt>&lt;A&gt;</tt> (domyślny skrót <tt>Shift+Ctrl+A</tt>).

<p><b><a href="tool_link_map_editor.php">Edytor map odsyłaczy</a></b><br />
Kliknij, aby uruchomić edytor map odsyłaczy.

<p><b><a href="down_links_verify.php">Weryfikacja odsyłaczy w dokumencie</a></b><br />
Kliknij, aby sprawdzić poprawność odsyłaczy w dokumencie.

<p><b><a href="tool_comment.php">Wstawienie komentarza</a></b><br />
Kliknij, aby uruchomić narzędzie do wstawiania komentarzy. Narzędzie automatycznie rozpoznaje bieżący język programowania i wstawia odpowiednie znaki komentarza. Domyślny skrót <tt>Shift+Ctrl+K</tt>.

<p><b><a href="tool_marquee.php">Animowany tekst</a></b><br />
Kliknij, aby uruchomić narzędzie ułatwiające wstawienie animowanego tekstu <tt>&lt;MARQUEE&gt;</tt>.

<p><b><a href="tool_text_attributes.php">Formatowanie tekstu</a></b><br />
Kliknij, aby uruchomić narzędzie do wstawiania znaczników formatowania tekstu.

<p><b> <a href="tool_text_attributes.php">Znacznik nowego akapitu</a></b><br />
Kliknij, aby wstawić znacznik nowego akapitu (w zależności od <a href="settings_codeinsight_additional.php">Ustawień programu</a> - <tt>&lt;p&gt;</tt>, lub <tt>&lt;div&gt;</tt>). Jeśli klikniesz w strzałkę z prawej strony polecenia rozwinie się poleceń formatowania (identyczne, jak <a href="main_menu_htmlcode_align.php">menu Kod HTML / Wyrównanie </a>).

<p><b>Znacznik niełamliwej spacji</b><br />
Kliknij, aby wstawić kod oznaczający niełamliwą spację - <tt>&amp;nbsp;</tt>. Domyślny skrót klawiszowy <tt>Alt+Spacja</tt>.

<p><b> Znacznik pogrubionego tekstu</b><br />
Kliknij, aby wstawić znacznik pogrubienia tekstu. Jeśli klikniesz w strzałkę z prawej strony polecenia rozwinie się <a href="main_menu_htmlcode_format.php">podmenu</a> pozwalające wstawienie innych znaczników formatowania tekstu (identyczne, jak <a href="main_menu_htmlcode_format.php">menu Kod HTML / Formatowanie tekstu </a>).

<p><b>Nagłówek</b><br />
Kliknij, aby wstawić nagłówek 1-go stopnia (znacznik <tt>&lt;H1&gt;</tt>). Możesz też rozwinąć menu służące do wstawiania znaczników nagłówka innego stopnia (identyczne jak menu <a href="main_menu_htmlcode_headers.php">Kod HTML / Nagłówek</a>).

<p><b>Łamanie linii &lt;BR&gt;</b><br />
Kliknij, aby wstawić znacznik łamania linii. Możesz też rozwinąć menu zawierające pozycje identyczne, jak w menu <a href="main_menu_htmlcode_brnewline.php"> Kod HTML / Łamanie linii &lt;BR&gt;</a>.

<p><b>Zamiana zaznaczonego tekstu na...</b><br />
Kliknij, aby otworzyć listę z możliwymi sposobami zamiany zaznaczonego tekstu. Lista ta zawiera pozycje identyczne, jak w menu <a href="main_menu_edit_change_selected.php">Edycja / Zaznaczony tekst na...</a>.


<p><a href="tool_lists.php">Wyliczenia</a><br />
Kliknij, aby uruchomić <a href="tool_lists.php">Generator wyliczeń</a>. Możesz też rozwinąć menu służące do wstawiania znaczników list wyliczeniowych (identyczne jak menu <a href="main_menu_htmlcode_lists.php">Kod HTML / Wyliczenia</a>).


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_toolbars.php">Ustawienia programu - Ustawienia pasków, menu i skrótów</a>
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