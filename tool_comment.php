
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Komentarz</title>

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
<h1>Narzędzia - Komentarz</h1>



<p> Narzędzie to służy do tworzenia komentarze w kodzie źródłowym różnych języków wspieranych w Pająku.

<p>Okno Wiersz tabeli uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_text.php">Tekst</a> / Wstawienie komentarza, a także z paska narzędzi <a href="toolbars_often.php">Często używane</a>. Domyślny skrót klawiszowy do narzędzia to <tt>Shift+Ctrl+K</tt>.


<h2>Wpisywanie komentarza</h2>

Okno narzędzia składa się z pola tekstowego służącego do wpisywania komentarza oraz kilku ikon, za pomocą których możesz wstawić do komentarza często używane treści:

<p> - tworzy komentarz na podstawie pliku informacji o dokumencie</p>
<p> - umożliwia wybór serwisu, i na tworzy komentarz na podstawie informacji o tym serwisie</p>
<p> - wstawia do komentarza bieżącą datę i godzinę</p>
<p> - wstawia do komentarze nazwę bieżącego użytkownika programu</p>

<p>Narzędzie automatycznie rozpoznaje bieżący język i wstawia odpowiednie znaki komentarza. Możliwa jest jednak sytuacja, że dostępnych jest kilka wariantów komentowania kodu (np. w jezyku PHP można wstawić <tt>//</tt> na początku każdej linii, lub objąć całość tekstu znakami <tt>/* */</tt> ). Dlatego też istnieje możliwość samodzielnego wyboru sposobu wstawiania komentarza. W tym celu wybierz odpowiedni element podmenu dostępnego po kliknięciu strzałki z prawej strony przycisku OK.</p>

<p>Jeśli w chwili uruchomienia narzędzia w edytorze zaznaczony był jakiś tekst, zostanie on automatycznie użyty jako tekst komentarza. W takiej sytuacji, jeśli tekst nie został jeszcze zmieniony, wystarczy wcisnąć przycisk <tt>Enter</tt>, aby ten tekst został objęty w edytorze odpowiednimi znakami komentarza. </p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
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
