
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Korzystanie z GIT, SVN lub CVS w Pająku</title>

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
<h1>Korzystanie z GIT, SVN lub CVS w Pająku</h1>

<!-- Treść pomocy -->



<p>Począwszy od wersji 5.6.0 Pająka, dostępne jest proste wsparcie dla funkcji kontroli wersji (GIT, SVN lub CVS) dla projektów na zakładce <a href="main_tabs_myservices.php">Moje serwisy</a>. Wsparcie to polega w głównej mierze na obsłudze funkcji oferowanych przez darmowego klienta GIT, SVN lub CVS o nazwie Tortoise. Wersja <a href="https://www.tortoisegit.net/" target="_blank">GIT</a>, wersja <a href="https://www.tortoisesvn.net/" target="_blank">SVN</a> lub wersja <a href="https://www.tortoisecvs.org/" target="_blank">CVS</a>.</p>

<p>Program TortoiseGIT, TortoiseSVN Lub TortoiseCVS, którego można pobrać ze strony <a href="https://www.tortoisegit.net/" target="_blank">https://www.tortoisegit.net/</a>, <a href="https://www.tortoisesvn.net/" target="_blank">https://www.tortoisesvn.net/</a> lub <a href="https://www.tortoisecvs.org/" target="_blank">https://www.tortoisecvs.org/</a>, oferuje możliwość dostępu zarówno do lokalnych, jak i zdalnych repozytoriów GIT, SVN lub CVS. Korzystanie z niego jest bardzo proste i odbywa się w całości za pomocą poleceń wywoływanych przy użyciu menu kontekstowego, dostępnego po kliknięciu prawym przyciskiem myszki na folderze lub pliku na dysku lokalnym w Pająku.</p>

<p>Pająk oprócz oferowania dostępu do poleceń TortoiseGIT, TortoiseSVN lub TortoiseCVS w menu kontekstowym, wspiera również obecnie tzw. <i>ikony overlay</i>, które program TortoiseGIT, TortoiseSVN lub TortoiseCVS wykorzystuje do wizualnego oznaczania stanu lokalnych kopii plików i katalogów z repozytorium. Przykładowo zmodyfikowane lokalnie pliki, a nie wgrane jeszcze do repozytorium, posiadać mogą czerwone ikony.</p>

<p>Aby korzystać z funkcji wspierających GIT, SVN lub CVS i TortoiseGIT, TortoiseSVN lub TortoiseCVS z poziomu Pająka, należy pobrać  <a href="https://www.tortoisegit.net" target="_blank">pobrać TortoiseSVN</a>, <a href="https://www.tortoisesvn.net" target="_blank">pobrać TortoiseSVN</a> lub <a href="https://www.tortoisecvs.org" target="_blank">TortoiseCVS</a> i zainstalować w swoim systemie. Program jest dostępny również w polskiej wersji językowej. Po instalacji można natychmiast pobrać zawartość dowolnego repozytorium i umieścić w wybranym serwisie Pająka. Aby to uczynić należy utworzyć nowy serwis w Pająku, następnie na liście zawartości katalogu serwisu kliknąć prawym przyciskiem myszki i z menu kontekstowego wybrać polecenie "SVN Checkout" lub "CVS Pobierz do kontroli". Użycie tej funkcji spowoduje wyświetlenie okna pobierania modułu do kontroli, gdzie należy wskazać ustawienia serwera przechowującego główne repozytorium oraz dane autoryzacyjne dostępu do serwera.</p>

<p>Po pobraniu modułu do lokalnej kopii w serwisie Pająka, możemy przystąpić do edycji zawartości modułu po prostu pracując na plikach tak, jak dotychczas. W każdej chwili możemy zatwierdzić zmodyfikowany plik w repozytorium korzystając z podręcznego menu listy plików oraz polecenia "SVN Zatwierdź" lub "CVS Zatwierdź". Możemy przeglądać historię modyfikacji pliku, a posiadając zainstalowane narzędzie typu diff (np. <a href="https://www.prestosoft.com/ps.asp?page=edp_examdiff" target="_blank">ExamDiff</a>), również przeglądać różnice w lokalnej kopii pliku w stosunku do oryginału w repozytorium GIT, SVN lub CVS. </p>

<p>TortoiseGIT, TortoiseSVN lub TortoiseCVS oferuje oczywiście o wiele więcej funkcji typowych dla GIT, SVN lub CVS, które nie sposób tutaj opisać. Prosimy o zapoznanie się z dokumentacją TortoiseGIT, TortoiseSVN lub TortoiseCVS w celu pełnego wykorzystania jego funkcji w Pająku.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a target="_blank" href="main_tabs_myservices.php">Zakładka Moje serwisy</a></li>
   <li><a target="_blank" href="https://www.tortoisegit.net/">Strona domowa TortoiseGIT</a></li>
   <li><a target="_blank" href="https://www.tortoisesvn.net/">Strona domowa TortoiseSVN</a></li>
   <li><a target="_blank" href="https://www.tortoisecvs.org/">Strona domowa TortoiseCVS</a></li>
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