
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
<title>Dolny panel wyników - Raporty wyszukiwania</title>

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
<h1>Dolny panel wyników - Raporty wyszukiwania</h1>

<!-- treść pomocy -->

<p>Okno otwiera się po wykonaniu w Pająku funkcji <a href="find_ext.php">rozszerzonego wyszukiwania</a> (gdy znaleziono ciągi znaków pasujące do wzorca), wywołaniu polecenia wyszukiwania plików lub folderów lub <a href="spelling.php">sprawdzania pisowni</a> (gdy znaleziono błędy), a także po skorzystaniu z polecenia <a href="find.php#filesearchinfo">Wyszukiwanie plików we wskazanym folderze</a>. Listę elementów można sortować klikając na nagłówku każdej z kolumn. W przypadku nieznalezienia słów przez funkcję wyszukiwania, lub braku błędów przy sprawdzaniu pisowni, okno nie zostanie wyświetlone.</p>

<h2>Raport rozszerzonego wyszukiwania i sprawdzania pisowni</h2>

<p>Aby wyświetlić w edytorze plik z odnalezionym słowem, wystarczy dwukliknąc na danej linii raportu. Dodatkowo istnieje możliwość przeciągania plików z raportu wyszukiwania do zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a> w celu szybkiego ich opublikowania.</p>

<p>Do obsługi wyników w oknie służy menu po prawej stronie:</p>

<p><b>Rozszerzone wyszukiwanie i zamiana</b><br />
Kliknij, aby ponownie otworzyć okno <a href="find_ext.php">rozszerzonego wyszukiwania i zamiany</a>. W oknie tym, oprócz opcji wyszukiwania i zamiany tekstu, dostępne są również opcje zmiany kodowania znaków i sprawdzania pisowni.</p>

<p><b>Powtórz rozszerzone przeszukiwanie korzystające z tych samych ustawień</b><br />
Kliknij, aby ponownie uruchomić funkcję rozszerzonego wyszukiwania, bądź sprawdzania pisowni, korzystając z tych samych ustawień, dla których funkcja ta była uruchomiona poprzednio. Funkcja nie działa w przypadku, gdy ostatnią czynnością w oknie "Rozszerzone wyszukiwanie i zamiana" była zmiana kodowania znaków.</p>

<p><b>Otwórz wybrane pliki do edycji</b><br />
Kliknij, aby załadować do edytora wybrane pliki, w których odnaleziono poszukiwany tekst.</p>

<p><b>Wczytanie raportu</b><br />
Kliknij, aby wczytać z dysku plik z raportem wyszukiwania, bądź sprawdzania pisowni.</p>

<p><b>Zapisanie raportu</b><br />
Kliknij, aby zapisać na dysk raport wyszukiwania, bądź sprawdzania pisowni.</p>


<p><b>Eksportuj raport do pliku HTML</b><br />
Kliknij, aby eksportować raport wyszukiwania, bądź sprawdzania pisowni w formacie dokumentu HTML.</p>

<p><b>Eksportuj raport do formatu TXT</b><br />
Kliknij, aby eksportować raport wyszukiwania , bądź sprawdzania pisowni w formacie pliku TXT.</p>

<p><b>Wyświetlaj tytuły dokumentów</b><br />
Kliknij, aby włączyć wyświetlanie tytułów dokumentów (zawartych w dokumentach pomiędzy znacznikami <tt>&lt;title&gt;</tt> i <tt>&lt;title&gt;</tt>). Spowalnia to nieco proces wyszukiwania. Tytuły umieszczone będą z kolumnie "Tytuł".</p>

<p><b>Pomoc do zakładki</b><br />
Wyświetla ten temat pomocy do programu.</p>


<h2>Raport wyszukiwania plików</h2>

<p>Ten widok podzielony jest na dwie części. Z lewej strony widnieje lista odnalezionych plików, z prawej zaś umieszczone zostały zakładki z opcjami umożliwiającymi zdefiniowanie kryteriów wyszukiwania (nazwa pliku, folder do przeszukania, data, rozmiar pliku i inne).</p>
<p>Obok listy znajduje się pasek przycisków, dzięki którym możesz uruchomić i zatrzymać wyszukiwanie, wyświetlić (bądź ukryć) zakładki kryteriów wyszukiwania, a także zmienić widok listy odnalezionych plików.</p>
Więcej na ten temat znajdziesz w <a href="find.php#filesearchinfo">temacie pomocy o wyszukiwaniu w Pająku</a>.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="find_ext.php">Rozszerzone wyszukiwanie i zamiana</a></li>
   <li><a href="spelling.php">Sprawdzanie pisowni</a></li>
   <li><a href="charset_encoding.php">Zmiana kodowania znaków</a></li>
   <li><a href="down_panel.php#downpanellist">Inne zakładki dolnego panelu wyników</a></li>
   <li><a href="main_window_desc.php">Główne okno programu</a></li>
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
