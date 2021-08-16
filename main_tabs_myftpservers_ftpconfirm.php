
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Jaka operacja ma być wykonana?</title>

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
<h1>Jaka operacja ma być wykonana?</h1>

<p>
Podczas wysyłania plików na serwer i pobierania z serwera często zdarza się, iż dany plik istnieje już w miejscu docelowym. W takim przypadku wyświetlone zostanie to okno. Znajdzie się w nim informacja o pliku oraz możliwe do wykonania operacje.

Okno zostało podzielone na dwie części:

<ul>
	<li>Ramka z informacjami o pliku</li>
	<li>Przyciski możliwych do wykonania akcji</li>
</ul>



<h2>Ramka z informacjami o pliku</h2>

<p>W ramce znajdują się dwie grupy informacji:</p>

<ul>
	<li><b>Plik lokalny</b> - informacje o pliku na dysku Twojego komputera</li>
	<li><b>Plik zdalny</b> - informacje o pliku na serwerze FTP</li>
</ul>

<p>W każdej z tych grup znajdują się następujące informacje (odpowiednio dla pliku lokalnego i zdalnego):</p>

<ul class=",">
	<li><b>Nazwa</b> - ścieżka dostępu na dysku i nazwa pliku</li>
	<li><b>Data</b> - data ostatniego zapisu pliku</li>
   <li><b>Rozmiar</b> - rozmiar pliku w KB</li>
</ul>


<h2>Przyciski możliwych do wykonania akcji</h2>


Wybierz, jaka operacja ma być wykonana:

<p><b>Dociągnij</b><br />
Kliknij, aby dokończyć przerwane pobieranie pliku z serwera FTP. Aby operacja ta zadziałała, serwer FTP musi obsługiwać dociąganie plików.


<p><b>Nadpisz</b><br />
Kliknij, aby nadpisać (zastąpić) istniejący plik bieżący plikiem przesyłanym.

<p><b>Nadpisz wszystkie</b><br />
Kliknij, aby nadpisać (zastąpić) istniejące pliki odpowiednimi plikami przesyłanymi.

<p><b>Pomiń</b><br />
Kliknij, aby pominąć przesyłanie bieżącego pliku (nie nadpisywać istniejącego).

<p><b>Pomiń wszystkie</b><br />
Kliknij, aby pominąć przesyłanie wszystkich plików, dla których istnieją odpowiednie pliki docelowe (nie nadpisywać żadnego). W tym przypadku przesłanie będą tylko pliki, które nie mają swoich odpowiedników w miejscu docelowym.

<p><b>Anuluj</b><br />
kliknij, aby przerwać publikowanie plików z kolejki FTP.
<p><b>Pomoc</b><br />
Kliknij, aby wyświetlić to okno Pomocy.

<p><b>Wykonuj ta akcję przy operacjach na tym serwerze</b><br />
zaznacz, aby wybrana wyżej akcja zawsze była wykonywana dla bieżącego serwera (obowiązuje do końca pracy programu)</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_tabs_myftpservers.php">Zakładka Moje serwery</a>
	<li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
	<li><a href="settings_network_ftpclient.php">Ustawienia klienta FTP</a>
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