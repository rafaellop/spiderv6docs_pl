
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
<title>Ustawienia weryfikacji składni znaczników online</title>

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
<h1>Ustawienia weryfikacji składni znaczników online</h1>



<!-- treść pomocy -->

<p>Narzędzie weryfikacji składni znaczników online pozwala na sprawdzanie poprawności dokumentów znacznikowych z wykorzystaniem walidatora składni W3C&reg; dostępnego na stronach organizacji W3C. Jest to alternatywne narzędzie w stosunku do wbudowanego w Pająka walidatora składni dokumentów znacznikowych. Pająk potrafi przesyłać do skryptu walidatora aktualnie edytowany dokument, niezależnie czy jest on otwary z serwera czy też lokalnie, a wyniki walidacji są wyświetlane na dolnym panelu.</p>

<p>Okno ustawień walidatora składni znaczników online może być wyświetlone albo poprzez okno ustawień edytora z zakładki "<a href="settings_editor_spelling.php#syntaxcheck">Pisownia i weryfikacja składni</a>" albo automatycznie przy każdym wywołaniu narzędzia weryfikacji składni online za pomocą polecenia z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_verify.php">Weryfikacja kodu</a> / Sprawdź składnię online lub uruchamiając to narzędzie z <a href="down_panel.php">dolnego panelu wyników</a>.</p>

<p>Okno ustawień walidatora pozwala na zdefiniowanie ustawień raportu weryfikacji. Przede wszystkim można wybrać tryb prosty lub rozszerzony. W trybie prostym stosowane są domyślne ustawienia skryptu. Tryb rozszerzony pozwala natomiast na zdefiniowanie parametrów, wpływających na wyniki weryfikacji składni.</p>

<h2>Parametry rozszerzonego trybu pracy</h2>

<p><b>Kodowanie znaków w dokumencie</b><br>
Tutaj możesz wymusić korzystanie z określonego kodowania znaków narodowych w dokumencie. Tej opcji można np. używać w celach testowych. Jednakże dokument powinien zawierać odpowiednią informację o kodowaniu. W innym wypadku walidator będzie narzekał na jej brak.</p>

<p><b>Wymuś łagodnie kodowanie znaków</b><br>
Włączenie tej opcji powoduje "łagodniejsze" korzystanie z funkcji wymuszania kodowania znaków, wybieranej za pomocą listy obok. Ma zastosowanie np. w sytuacji, gdy analizowany dokument nie posiada deklaracji kodowania.</p>

<p><b>Typ dokumentu</b><br>
Tutaj możesz wymusić korzystanie z określonego schematu typu dokumentu podczas analizy składni. Tej opcji można np. używać w celach testowych. Jednakże dokument powinien zawierać odpowiednią informację o typie dokumentu (DOCTYPE). W innym wypadku walidator będzie narzekał na jej brak.</p>

<p><b>Wymuś łagodnie typ dokumentu</b><br>
Włączenie tej opcji powoduje "łagodniejsze" korzystanie z funkcji wymuszania typu dokumentu, wybieranej za pomocą listy obok. Ma zastosowanie np. w sytuacji, gdy analizowany dokument nie posiada deklaracji typu DOCTYPE.</p>

<p><b>Wyświetlaj kod źródłowy</b><br>
Włączenie tej opcji powoduje wyświetlanie kodu źródłowego analizowanej strony i odsyłaczy przy opisach błędów, kierujących dokładnie do tego miejsca w kodzie, w którym występuje błąd.</p>

<p><b>Wyświetlaj drzewo dokumentu</b><br>
Włączenie tej opcji powoduje wygenerowanie widoku dokumentu na podstawie znaczników H1 do H6. Dla poprawnie utworzonych dokumentów spodowuje to, wyświetlenie poprawnej struktury drzewiastej.</p>

<p><b>Weryfikuj strony błędów</b><br>
Funkcja przydatna przy analizie dokumentów otwieranych z serwera i przesyłanych do analizatora za pomocą funkcji mapowania przy podglądzie (przesyłany jest odsyłacz do strony, a nie treść strony). Dzięki niej można analizować strony błędów, wyświetlane np. wtedy, gdy analizowana strona nie może być odnaleziona.</p>

<p><b>Wyświetlaj rozbudowany raport</b><br>
Włączenie tej opcji powoduje umieszczenie w wynikach analizy większej liczby wyjaśnień i sugestii dotyczących wyników walidacji.</p>

<h2>Dodatkowe ustawienia walidatora</h2>

Na pierwszej zakładce o nazwie "Tryb działania" znajduje się opcja:

<p><b>Zawsze wyświetlaj to okno przed weryfikacją online</b><br>
Zaznacz tę opcję, jeśli chcesz, aby okno ustawień walidatora online było wyświetlane za każdym razem, gdy uruchamiasz funkcję analizy składni online.</p>

<p>Druga zakładka pozwala natomiast na zdefiniowanie własności związanych z obsługą skryptu. Najprawdopodobniej nie będziesz potrzebował zmieniać tych własności. Może się jednak zdarzyć sytuacja, gdy skrypt zostanie zmodyfikowany przez pracowników W3C w ten sposób, że nazwy pól formularza obsługi skryptu lub adres skryptu zostaną zmienione. Wtedy narzędzie walidatora może przestać działać poprawnie. Będziesz jednak mógł za pomocą tych pól tak ustawić połączenie ze skryptem, aby działał poprawnie, również na innych nazwach pól, czy pod innym adresem URL.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_menu_tools.php">Menu główne - Narzędzia</a>
	<li><a href="down_syntax_check.php">Sprawdzanie poprawności składni w dokumentach</a>
	<li><a href="settings_w3c_css.php">Ustawienia weryfikacji składni CSS online</a>
	<li><a href="settings_editor_spelling.php#syntaxcheck">Ustawienia weryfikacji składni</a>
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