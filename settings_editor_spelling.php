
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Sprawdzanie pisowni i weryfikacja składni</title>

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
<h1>Ustawienia programu - Sprawdzanie pisowni i weryfikacja składni</h1>

<!-- treść pomocy -->
<p>
W tej grupie ustawień znajdziesz opcje pozwalające na konfigurację narzędzia sprawdzania pisowni oraz <a href="down_syntax_check.php">weryfikacji składni</a>, które są wbudowane w Pająka. W tej kategorii znajdują się następujące grupy ustawień:

<h2>Ignorowanie wyrazów jako poprawne</h2>

<p>W tej grupie znajdziesz zestaw przełączników odpowiadających za ignorowanie wyrazów i uznawanie je za poprawne. Wybierz, które rodzaje elementów składowych dokumentów mają być ignorowane podczas sprawdzania pisowni i uznawane za poprawne (pomijane) zaznaczając odpowiednie przełączniki.

<h2>Słownik użytkownika</h2>

<p>Ta grupa dotyczy słownika użytkownika, który jest tworzony podczas dodawania wyrazów do słownika. Zaznaczając przełącznik <b>Generuj sugestie tylko na podstawie słownika głównego</b> spowodujesz, że dla słów dodanych do słownika użytkownika propnowane będą sugestie z głównego słownika programu. Dodatkowo w tej grupie znajduje się przycisk pozwalający na uruchomienie edytora słownika użytkownika, gdzie możesz modyfikować jego zawartość.

<h2>Podkreślanie błędów pisowni w dokumencie</h2>

<p>Tutaj możesz określić zachowanie się funkcji dynamicznego sprawdzania pisowni w trakcie pisania. Dostępne są następujące ustawienia:

<p><b>Domyślnie podkreślaj błędy pisowni w nowo otwieranych dokumentach</b><br>
Zaznacz tę opcję jeśli chcesz, aby dla nowootwieranych dokumentów stosowane było podkreślanie błędnych wyrazów w locie. Nowootwarte dokumenty to takie, które nie mają jeszcze przypisanego pliku informacji o dokumencie ADD. W pliku tym pamietane są ustawienia podkreślania błędów niezależnie od tej opcji dla każdego dokumentu osobno.

<p><b>Kolor podkreślenia</b><br>
Z tej listy wybierz kolor, który będzie używany do pokreślania błędnie napisanych wyrazów.


<a name="autocorrect"></a>
<h2>Autokorekta</h2>
<p><b>Poprawiaj DWa POczątkowe WErsaliki </b><br>
Zaznacz tę opcję, jeśli dwa początkowe wersaliki (wielkie litery) mają być poprawiane w ten sposób, iż  wielka pozostanie pierwsza litera, druga zaś zostanie zamieniona na małą.

<p><b>Zamieniaj podczas pisania</b><br>
Zaznacz ten przełącznik, aby umożliwić wprowadzenie na listę par wyrazów (<b>Wyraz</b> - <b>Zamień na:</b>), które mają być automatycznie zamieniane. 

<a name="syntaxcheck"></a>
<h2>Weryfikacja składni</h2>
<p>Ta grupa ustawień odnosi się do funkcji <a href="down_syntax_check.php">weryfikacji składni</a> znaczników oraz arkuszy CSS, które są oferowane przez Pająka. Znajdziesz tutaj dwie zakładki:
<ul>
<li>Weryfikacja znacznikowych i ogólne</li>
<li>Weryfikacja składni CSS</li>
</ul>
<p>Zakładki te zawierają opcje, których nazwy tłumaczą ich zastosowanie. Dodatkowo na każdej z zakładek znajdziesz narzędzie pozwalające na konfigurację funkcji sprawdzania poprawności kodu online z wykorzystaniem walidatorów udostępnianych przez W3C&reg;. Są to ustawienia <a href="settings_w3c_html.php">weryfikatora znaczników online</a> oraz <a href="settings_w3c_css.php">weryfikatora składni CSS online</a>.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_editor.php#settingslisteditor">Inne ustawienia edytora</a>
	<li><a href="spelling.php">Sprawdzanie pisowni</a>
	<li><a href="down_syntax_check.php">Weryfikacja składni</a>
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

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>