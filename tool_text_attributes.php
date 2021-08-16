<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Narzędzia - Atrybuty tekstu</title>

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
<h1>Narzędzia - Atrybuty tekstu</h1>

<p>Narzędzie <b>Atrybuty czcionki</b> pozwala określić właściwości czcionki użytej dla wybranego fragmentu tekstu. Na liście wyboru kroju czcionek wystarczy zaznaczyć odpowiednią czcionkę i dodać ją do listy przyciskiem oznaczonym plusikiem. Możesz podać kilka krojów czcionek, które są używane w zależności od tego, czy są one zainstalowane w komputerze, na którym przeglądana jest strona. Narzędzie to uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools_text.php">Tekst</a> / Formatowanie tekstu, a także z paska narzędzi <a href="toolbars_link_format.php">Odsyłacze tekst i formatowanie</a>.

<h1>Zakładka Postawowe formatowanie</h1>

<p>Pierwsza z zakładek zawiera kontrolki pozwalające na wybór podstawowego formatowania takiego jak kolory, rozmiar, krój oraz styl dla tekstu. Znajdziesz tam odpowiednie elementy w trzech grupach: Prosty wygląd, Krój czcionki, Styl elementu.

<h2>Grupa Prosty Wygląd</h2>

<p>W tej grupie możesz określić rozmiar oraz kolor czcionki:

<p><b>Rozmiar czcionki</b><br/>
W tym polu możesz wybrać sposób określania rozmiaru czcionki. Może mieć ona rozmiar dokładnie taki, jaki podasz w następnym polu, może być także zwiększona lub zmniejszona o wskazaną liczbę w stosunku do bieżącego rozmiaru. Wybranie "nie uwzględniaj" nie wpływa na rozmiar czcionki.

<p><b>Rozmiar czcionki</b><br/>
Określa rozmiar czcionki, określany zgodnie z zasadą w polu po lewej.

<p><b>Kolor tekstu</b><br/>
Wybierz kolor dla tekstu korzystając z listy.

<h2>Grupa Krój czcionki</h2>

<p>Ta grupa pozwala na określenie kroju bądź krojów czcionek, które będą użyte. Znajdziesz tutaj następujące pola:

<p><b>Lista czcionek systemowych</b><br/>
Wybierz tutaj czcionkę, którą chcesz dodać do listy czcionek dostępnych dla tekstu, a następnie wciśnij przycisk oznaczony ikoną "+".

<p><b>Lista przypisanych czcionek</b><br/>
Jest to lista czcionek ustawionych w kolejności ważności. Jeżeli w przeglądarce użytkownika nie dostępna jest któraś z tych czcionek, użyta zostanie następna w kolejności. Czcionki możesz dodawać i usuwać za pomocą przycisków znajdujących się obok listy.

<h2>Grupa Styl elementu</h2>

<p>Znacznik formatowania i atrybutów tekstu może być wstawiony do dokumentu na kilka sposobów. W tej grupie określasz jaka to będzie metoda. Możesz wybrać:

<ul>
        <li><b>Jako znacznik <tt>font</tt></b> - ten sposób jest oznaczony w specyfikacji HTML jako niezalecany. Powinieneś korzystać raczej ze <tt>span</tt> lub <tt>div</tt></li><br/><br/>

        <li><b>Jako znacznik <tt>basefont</tt></b> - ten sposób jest absolutnie niezalecany gdyż działa w zasadzie tylko w MS Internet Explorerze. Ustala on wybrane atrybuty dla wszystkich czcionek używanych w dokumencie. Tutaj zdecydowanie lepszym rozwiązaniem jest skorzystanie z <a href="coding_css.php">arkusza stylów</a>.</li><br/><br/>

        <li><b>Jako znacznik <tt>span</tt></b> - ten sposób umieszcza w dokumencie definicję formatowania tekstu za pomocą znacznika <tt>span</tt> i zapisanego w jego atrybucie <tt>style</tt> własności formatowania tekstu. Skorzystaj z tej metody, jeśli chcesz wyróżnić wyraz w tekście, gdyż nie powoduje to rozpoczęcia nowego akapitu. Przykładowe użycie tej metody umieści w dokumencie tekst: <tt>&lt;span style="font-size: xx-small; color: #FFFF00"&gt;&lt;/span&gt;</tt></li><br/><br/>

        <li><b>Jako znacznik <tt>div</tt></b> - ten sposób działa podobnie jak powyższy jednakże powoduje utworzenie nowego bloku stylu, to znaczy najczęściej nowego akapitu.</li>
</ul>

<h1>Zakładka Dodatkowe</h1>

<p>Opisane powyżej formatowania, to jednak nie wszystko. Na zakładce Dodatkowe znajduje się 30 przełączników, które umożliwiają wprowadzanie rozmaitych stylów i efektów dodatkowych, niekiedy bardzo interesujących, a niekiedy wręcz niezbędnych jak np. pogrubienie czy pochylenie tekstu. Podczas korzystania z tego narzędzia użytkownik nie musi znać na pamięć wszystkich znaczników formatujących tekst - Pająk zrobi wszystko za niego. Zaznacz po prostu odpowiednie przełączniki zgodne z formatowaniem jakie chcesz uzyskać.

<h1>Porady</h1>

<p>Przy tworzeniu stron z wykorzystaniem czcionek należy pamiętać, że nie we wszystkich systemach zainstalowane są te same czcionki, co na komputerze wykorzystywanym do tworzenia strony. Trzeba więc z umiarem korzystać z list służących do wyboru czcionek.

<p>Zaznaczenie pola "Czcionka bazowa" powoduje wstawienie do dokumentu znacznika &lt;basefont&gt;. Służy on do określania podstawowych parametrów czcionki w dokumencie, wykorzystywanych tam, gdzie nie zostały użyte inne znaczniki formatujące. Jednak jego wykorzystanie nie jest zalecane przez najnowszą specyfikację języka HTML - także i w tym przypadku bardziej wskazane jest użycie stylów.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="main_menu_tools_text.php">Menu formatowania tekstu</a>
        <li><a href="coding_css.php">Korzystanie ze stylów w Pająku</a>
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
<script async src="js/cookie.js"></script>
<div class="nk-cookie-banner alert text-center mb-0 cookietxt" role="alert">
  Nasze strony wykorzystują pliki cookies. Używamy cookies i podobnych m.in. w celach reklamowych i statystycznych oraz w celu dostosowania serwisów do potrzeb użytkowników. Mogą też stosować je nasi reklamodawcy, firmy badawcze oraz dostawcy aplikacji. W przeglądarce można zmienić ustawienia dotyczące cookies. <a href="https://www.creamsoft.com/pl/pp/#cookies" target="blank">Więcej informacji</a>. Jeśli nie wyrażasz zgody, opuść tę stronę.&nbsp;

  <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.nk_hideCookieBanner()">OK</button>
</div>
<!-- End of Cookie Banner -->

</body>
</html>