
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienie dokumentu podglądu</title>

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
<div class="collapse" id="googlesearch">

        <script async src="https://cse.google.com/cse.js?cx=4dedefccca22f88c9"></script>
        <div class="gcse-search"></div>

</div>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Ustawienie dokumentu podglądu</h1>

<!-- treść pomocy -->

<p>Czasem zdarza się, że edytujesz dokument, który nie ma być jednak bezpośrednio oglądany, lecz jedynie stanowić część innego dokumentu. Może to być np. skrypt w języku JavaScript, bądź arkusza stylów CSS, który sam w sobie nic nie wyświetla, natomiast jest dołączane do dokumentu HTML. Podobnie - możesz edytować dokument, który będzie miał być umieszczony w jednej z ramek innego dokumentu. Innym, częstym przypadkiem jest tworzenie serwisu korzystającego z technologii <i>server-side</i>, jak np. <a href="coding_php.php">PHP</a>. W takim wypadku często łączy się kilka plików z funkcja mi w jeden dokument, np. za pomocą funkcji <tt>include()</tt>. </p>

<p>W każdym takim wypadku możesz dla edytowanego dokumentu ustawić "dokument podglądu". Pająk będzie wyświetlał ustawiony tutaj dokument w momencie, gdy wywołasz podgląd edytowanego dokumentu. Dokument podglądu może znajdować się zarówno na dysku lokalnego komputera, na serwerze internetowym itp.</p>

<p><b>Dla przykładu:</b><br />
Edytujesz skrypt <tt>moj_skrypt.js</tt>, który jest dołączony do dokumentu <tt>moj_dokument.html</tt>. W momencie, gdy wywołasz podgląd skryptu <tt>moj_skrypt.js</tt>, wyświetlony zostanie dokument <tt>moj_dokument.html</tt>.

<p>Dokument podglądu może być ustawiony dla całego serwisu (w oknie <a href="service_properites.php">Własności serwisu</a>), a ponadto może być zapamiętywane osobno dla każdego dokumentu w <a href="main_editor_addfiles.php">dodatkowych informacji o dokumencie </a>.</p>

<p>Dokument podglądu ma jeszcze jedno, dodatkowe znaczenie, niezwiązane bezpośrednio w przeglądaniem dokumentów. Opisane wyżej łączenie se sobą skryptów PHP może odbywać się za pomocą ich przeciągania do bieżącego skryptu z listy plików. W takim wypadku Pająk spyta, czy utworzyć ścieżkę dostępu do dołączanego pliku względem dokumentu podglądu. Jeśli bieżący skrypt jest tylko modułem umieszczonym w podkatalogu, a nie samodzielnym skryptem który wyświetla gotowy dokument, utworzenie ścieżki względem jego dokumentu podglądu może być właściwsze, gdyż ostatecznie, to właśnie względem tego dokumentu będą tworzone ścieżki dostępu podczas linkowania skryptów przez interpreter PHP.</p>

<h2>Opcje okna Ustawienie dokumentu podglądu</h2>

<b>Używaj dokumentu podglądu przypisanego do serwisu</b> <br />
Jeśli zaznaczysz tę opcję, po włączeniu <a href="main_preview_embed.php">zakładki Przeglądanie</a>, wyświetlony w niej zostanie dokument wskazany jako dokument podglądu w oknie <a href="service_properites.php">Własności serwisu</a>.


<p><b>Przeglądaj za pomocą dokumentu </b><br />
Zaznacz tę opcje i wskaż dokument, który ma być używany do podglądu bieżącego dokumentu.

<p><b>Nie używaj dokumentu podglądu</b><br />
Zaznacz tę opcję, jeśli bieżący dokument ma być przeglądany zawsze bezpośrednio (nie będzie używany dokument podglądu, nawet jeśli został on wskazany w oknie <a href="service_properites.php">Własności serwisu</a>).

<p><b>Przekazuj następujące parametry przy podglądzie:</b><br />
Zaznacz tę opcję i podaj parametry, jakie maja zostać przekazane do dokumentu podglądu. Dzięki tej opcji możesz zasymulować przekazanie do dokumentu danych z formularza. 

<p>Aby dodać parametr kliknij w plusik na menu obok listy parametrów i w oknie które się pokaże podaj nazwą parametru i jego wartość. </p>

<p>Żeby przekazywanie parametrów mogło działać, musi być włączone <a href="service_properites.html#service_properties_mappings">mapowanie przeglądania</a> i serwer, który żądanie obsłuży.</p>

<p>Parametry zostaną przekazane przy użyciu metody GET, czyli w adresie URL. </p>

<p>Przykładowo - zakładając, że adres do miejsce, gdzie udostępniony jest dokument podglądu to <tt>https://localhost/</tt>), jeśli ustawisz opcje:

<ul>
	<li><b>dokument podglądu</b>: <tt>moj_dokument.php</tt></li>
	<li><b>nazwa</b>: <tt>program</tt></li>
	<li><b>wartość</b>: <tt>Pajaczek</tt></li>
</ul>

to adres do URL dokumentu, który zostanie wyświetlony będzie wyglądał następująco:

<ul>
	<li><tt>https://localhost/moj_dokument.php?program=Pajaczek</tt></li>
</ul></p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_preview_general.php">Przeglądanie - ogólnie</a>
	<li><a href="main_preview_embed.php">Zakładka "Przeglądanie"</a>
	<li><a href="main_preview_external.php">Używanie zewnętrznych przeglądarek</a>
	
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