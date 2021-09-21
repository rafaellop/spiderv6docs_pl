
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Edycja/Zaznaczony tekst na...</title>

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
<h1>Menu główne - Edycja/Zaznaczony tekst na...</h1>

<!-- Treść pomocy -->

<p>Menu to pozwala przeprowadzić szybką zmianę formatu zaznaczonego tekstu, utworzyć listę, tabelę itp. Dostępne są następujące polecenia:</p>

<p><b>Zaznaczony na objęty stylem</b><br />
Kliknij, aby objąć zaznaczony tekst znacznikiem SPAN, bądź DIV (w zależności od ustawienia w oknie <a href="settings_codeinsight_additional.php#span_div">Ustawienia programu / Inne ustawienia / Ułatwienia ... / Inne ułatwienia</a>) ze stylem CSS.

<p><b>Zaznaczony na objęty klasą</b><br />
Kliknij, aby objąć zaznaczony tekst znacznikiem SPAN, bądź DIV (w zależności od ustawienia w oknie <a href="settings_codeinsight_additional.php#span_div">Ustawienia programu / Inne ustawienia / Ułatwienia ... / Inne ułatwienia</a>)  z klasą CSS.

<p><b><a href="tool_lists.php">Zaznaczony na listę numerowaną</a></b><br />
Kliknij, aby utworzyć z zaznaczonego tekstu listę numerowaną. Każdy wiersz zaznaczonego tekstu będzie nowym elementem listy.

<p><b><a href="tool_lists.php">Zaznaczony na listę nienumerowaną</a></b><br />
Kliknij, aby utworzyć z zaznaczonego tekstu listę nienumerowaną. Każdy wiersz zaznaczonego tekstu będzie nowym elementem listy.

<p><b>Zaznaczony na linie z końcem &lt;br&gt;</b><br />
Kliknij, aby umieścić na końcu każdej linii zaznaczonego tekstu znacznik łamania linii &lt;br&gt;.

<p><b>Zaznaczony na objęty &amp;quot;</b><br />
Kliknij, aby objąć zaznaczony tekst znakami specjalnymi <tt>&amp;quot;</tt> (encja przedstawiająca cudzysłów).

<p><b><a href="tool_comment.php">Zaznaczony na komentarz</a></b><br />
Kliknij, aby utworzyć z zaznaczonego tekstu komentarz. Narzędzie automatycznie rozpoznaje użyty język i stosuje odpowiednie znaki komentarza.

<p><b>Zaznaczony na obramowany tekst</b><br />
Kliknij, aby objąć tekst tabelą z obramowaniem.

<p><b><a href="tool_text2table.php">Zaznaczony na tabelę</a></b><br />
Kliknij, aby przekształcić zaznaczony tekst w tabelę. Narzędzie umożliwia zdefiniowanie układu tabeli, stylów itp.

<p><a href="tool_embrace.php">Obejmij tekstem, lub zdejmij objęcie</a><br />
Kliknij, aby otworzyć narzędzie umożliwiające objęcie zaznaczonego tekstu podanym tekstem. Możliwe jest również usunięcie objęcia znakami komentarza itp.

<p><b>Duplikuj zaznaczenie</b><br />
Kliknij, aby wstawić zaraz za zaznaczonym tekstem dokładną kopię zaznaczonego tekstu.

<hr />

<p><!--  --><b>Zamień adresy e-mail na klikalne odsyłacze</b><br />
Kliknij, aby zmienić wszystkie adresy e-mail umieszczone w zaznaczonym tekście na odsyłacze do wysyłania poczty (objęcie znacznikiem <tt>&lt;A&gt;</tt> z odpowiednim atrybutem <tt>href</tt>).

<p><!--  --><b>Zamień adresy URL na klikalne odsyłacze</b><br />
Kliknij, aby zmienić wszystkie adresy URL umieszczone w zaznaczonym tekście na odsyłacze (objęcie znacznikiem <tt>&lt;A&gt;</tt> z odpowiednim atrybutem <tt>href</tt>).

<hr />

<p><b>Formatowanie skryptowe</b><br />
Kliknij, aby rozwinąć podmenu zawierające polecenia formatowania zaznaczonego tekstu w ten sposób, by mógł on zostać poprawnie użyty w skryptach (np. JavaScript, PHP i innych) w celu wyświetlenia go w dokumencie.

<hr>

<p><b><a href="macrocodes.php">Zaznaczony na własny makrokod</a></b><br />
Kliknij, aby utworzyć nowy makrokod na podstawie zaznaczonego tekstu.

<p><b>Zaznaczony na małe litery</b><br />
Kliknij, aby zmienić wszystkie litery w zaznaczonym tekście na małe.

<p><b>Zaznaczony na WIELKIE LITERY</b><br />
Kliknij, aby zmienić wszystkie litery w zaznaczonym tekście na WIELKIE.

<p><b>Zaznaczony na odwrotną wielkość liter</b><br />
Kliknij, aby zmienić wszystkie małe litery w zaznaczonym tekście na WIELKIE, a jednocześnie WIELKIE na małe. Funkcja ta jest przydatna szczególnie w sytuacji, gdy wprowadzałeś tekst, a jednocześnie niechcący wcisnąłeś klawisz CapsLock.

<p><b>Zaznaczony na Jak w zdaniu</b><br />
Kliknij, aby zmienić pierwszą literę zaznaczonego tekstu na wielką, a reszta na małe.

<p><b>Zaznaczony na Jak W Tytule</b><br />
Kliknij, aby zmienić pierwszą literę każdego słowa na wielką, resztę liter na małe.

<p><b>Zaznaczony na kolejną propozycję wielkości liter</b><br />
Kliknij, aby zastosować dla zaznaczonego tekstu kolejne przekształcenia wielkości liter. Najlepiej korzystać z funkcji używając domyślnego skrótu klawiszowego <tt>Shift+F3</tt>.

<hr>

<p><b>Zaznaczony na posortowany (A-Z)</b><br />
Kliknij, aby posortować linie zaznaczonego tekstu w kolejności alfabetycznej.

<p><b>Zaznaczony na posortowany (Z-A)</b><br />
Kliknij, aby posortować linie zaznaczonego tekstu w kolejności odwrotnej do alfabetycznej.

<p><b>Zaznaczony na bez znaczników HTML</b><br />
Kliknij, aby usunąć znaczniki HTML z zaznaczonego tekstu.

<p><b>Usuń puste wiersze w zaznaczonym</b><br />
Kliknij, aby usunąć wszystkie puste wiersze z zaznaczonego tekstu.

<p><b>Zamień &quot; na \&quot;</b><br />
Kliknij, aby zamienić wszystkie znaki " na \" w zaznaczonym tekście.

<p><b>Zamień ' na \'</b><br />
Kliknij, aby zamienić wszystkie znaki ' na \' w zaznaczonym tekście.


<p><b>Zamień &lt; i &gt; na &amp;lt; i &amp;gt; w zaznaczonym</b><br />
Kliknij, aby zamienić w zaznaczonym tekście znaki &lt; i &gt; na encje &amp;lt; i &amp;gt;. Umożliwia to ich wyświetlenie w dokumencie, najczęściej są one używane do przedstawienia na stronie znaczników HTML, które nie mają zostać zinterpretowane.

<p><b>Zamień &amp;lt; i &amp;gt; na &lt; i &gt; w zaznaczonym</b><br />
Kliknij, aby zamienić w zaznaczonym tekście encje &amp;lt; i &amp;gt; na znaki &lt; i &gt;. 

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
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>