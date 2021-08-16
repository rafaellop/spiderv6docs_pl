
<html>
<head>
<meta charset="utf-8">

<meta name="Keywords" content="">
<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Generator słów kluczowych</title>

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
<h1>Narzędzia - Generator słów kluczowych</h1>



<p>Za pomocą Generatora słów kluczowych możesz w łatwy sposób utworzyć listę słów występujących w wybranym dokumencie. Możesz go uruchomić poleceniem w <a href="tool_meta.php#keywords">"Edytorze sekcji META" w zakładce "Indeksowanie oraz słowa kluczowe"</a>. Dodatkowo możliwe jest uruchomienie narzędzia poleceniem w wyskakującym okienku Dynamicznego kodu dla atrybutu <tt>content</tt> w znaczniku <tt>&lt;meta name="Keywords" content="|"&gt;</tt> (znak <tt>|</tt> oznacza tu miejsce ustawienia kursora).


<p>Okno narzędzia składa się z dwóch zakładek: </p>
<ul>
        <li><a href="#source">Źródło generowania słów kluczowych</a>
        <li><a href="#list">Wyszukaj słowa kluczowe</a>
</ul>
Domyślnie źródłem, w którym poszukiwane są słowa, jest bieżący dokument, lecz łatwo możesz to zmienić korzystając z ustawień zakład</p>



<a name="source"></a>
<h2>Źródło generowania słów kluczowych</h2>

<p>Wybierz dokument źródłowy, z którego będą pobierane słowa: </p>
<ul>
        <li><b>bieżący dokument</b> otwarty w edytorze
        <li><b>wszystkie otwarte</b> w edytorze
        <li><b>wybierz dokument</b> - wprowadź ścieżkę dostępu do pola obok, bądź skorzystaj z przycisku umożliwiającego wskazanie pliku na dysku
        <li><b>w wybranym serwisie</b> - wybierz z listy serwis, którego dokumenty mają zostać uwzględnione podczas przeszukiwania. Dodatkowo możesz zawęzić wybór do plików HTML, bądź plików innych typów (wprowadź w polu obok rozszerzenia nazw takich plików rozdzielane średnikami, w postaci np.: <tt>*.htm;*.html;*.php</tt>)
</ul>


<a name="list"></a>
<h2>Wyszukaj słowa kluczowe</h2>
<p>Większą część tej zakładki zajmuje lista słów kluczowych. Składa się ona z dwóch kolumn: <b>Słowo kluczowe</b> i <b>Wystąpienia</b>. Każde odnalezione słowo dodane do listy będzie tylko raz - jeśli wystąpi więcej razy, po prostu zwiększona zostanie liczba w kolumni 'Wystąpienia'. dzięi temu łatwo możesz się zorientować, jakie słowa występują w Twoich dokumentach najczęściej.

<p>Gdy lista jest zostanie wypełniona, zaznacz słowa, które będą umieszczone na liście słów kluczowych w dokumencie. </p>

<p>Z prawej strony listy słów kluczowych umieszczony jest pasek przycisków umożliwiający jej obsługę: </p>

<p><b>Szukaj słów kluczowych w wybranym źródle</b><br />
Kliknij, aby program wyczyścił listę, a następnie wyszukał słowa i utworzył ich listę na podstawie wybranych wyżej dokumentów.

<p><b>Dodaj słowa kluczowe z wybranego źródła</b><br />
Kliknij, aby program wyszukał słowa na podstawie wybranych wyżej dokumentów i dodał je do słow istniejących na liście. 

<p><b>Zaznacz wszystkie</b><br />
Kliknij, aby zaznaczyć wszystkie słowa na liście. 

<p><b>Odznacz wszystkie</b><br />
Kliknij, aby odznaczyć wszystkie słowa na liście.

<p>Poniżej znajdują się dwa pola umożliwiające sprecyzowanie warunków, jakie musza spełnić słowa, by zostały dodane do listy:</p>

<p><b>Minimalna liczba znaków w słowie</b><br />
Określ minimalną liczbę znaków, jakie musi zawierać słowo, by zostało dodane do listy. Dzięki temu możesz uniknąć dodawania spójników itp.

<p><b>Minimalna liczba powtórzeń</b><br />
Określ ile minimalnie razy musi wystąpić słowo, aby zostało dodane do listy.



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