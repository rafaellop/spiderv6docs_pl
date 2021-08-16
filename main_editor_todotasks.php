
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Zadania do wykonania</title>

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
<h1>Zadania do wykonania</h1>

<!-- treść pomocy -->

<p>Zadania do wykonania służą zachowywania dodatkowych informacji na temat serwisu bądź dokumentu. Istnieją dwa typy zadań: 
<ul>
        <li><b>Przypisane do serwisu</b> - są to zadania ogólne, jakie możesz ustawić dla całego <a href="services_general.php">serwisu</a> (np. w celu sporządzenia notatki typu 'co jeszcze chcę tu zrobić')
        <li><b>Przypisane do dokumentu</b> - przypisane są do miejsca, w którym zostały ustawione w danym dokumencie. Jeśli powyżej linii, w dla której ustawiłeś zadanie, wstawisz dodatkowe linie, zadanie przesunie się o tyle samo linii w dół tak, by cały czas znajdowało się w tym samym logicznym miejscu kodu.
</ul>

<p>W odróżnieniu od <a href="main_editor_bookmarks.php">zakładek</a>, które służą raczej do podręcznego oznaczania miejsc w dokumencie, zadania do wykonania są znacznie bardziej rozbudowane.</p>

<p>Zadania są szczególnie przydatne podczas pracy grupowej nad serwisem. Przy ich pomocy możesz przekazywać współtwórcom projektu wskazówki, oznaczać miejsca, na które trzeba szczególnie uważać itp. </p>






<h2>Jak ustawić i odczytać zadanie do wykonania dla całego serwisu?</h2>

<p>Często zdarza się, że chcesz coś zapisać sobie na potem, ale ta informacja nie dotyczy konkretnego dokumentu, lecz jest bardziej ogólna. W takiej sytuacji możesz utworzyć zadanie dla całego serwisu. Możesz to zrobić za pomocą poleceń w oknie <a href="service_todotasks.php">Zadania do wykonania w serwisie</a> - otworzysz je poleceniem <b>Lista zadań do wykonania</b> znajdującym się w <a href="main_menu_services_properties.php">Menu głównym / Serwisy / Własności serwisu</a>, bądź w menu pod przyciskiem <b>Własności serwisu</b> na zakładce <a href="main_tabs_myservices.php">Moje serwisy</a>. W tym samym oknie możesz przeglądać zadania zdefiniowane dla serwisu.



<h2>Jak ustawić i odczytać zadanie do wykonania dla dokumentu?</h2>
<p>Aby ustawić zadanie dla określonej linii w dokumencie, uruchom narzędzie <a href="tool_docinfo_todo_add.php">Zadanie do wykonania</a>. W tym celu kliknij na niej prawym klawiszem myszy, a następnie w <a href="main_menu_editor.php">menu kontekstowym edytora</a> skorzystaj z polecenia <b>Informacje o dokumencie / Dodaj zadanie do wykonania</b>, bądź <a href="main_menu_edit_bookmarks.php">Zakładki w dokumencie / Dodaj zadanie do wykonania</a> (to samo menu wyświetli się, gdy klikniesz lewym klawiszem na belce po prawej stronie edytora). Usuwanie zadań odbywa się za pomocą poleceń umieszczonych w tym samym menu (polecenie jest widoczne tylko gdy dla bieżącej linii ustawiono zadanie).

<p>Ustawiając w dokumencie zadanie do wykonania możesz podać:</p>

<ul>
	<li>Nazwę zadania</li>
	<li>Opis zadania</li>
	<li>Priorytet</li>
</ul>

<p>Ponadto możesz oznaczyć zadanie jako wykonane, a także w ustawieniach programu (<a href="settings_editor_general.php">Ustawienia programu / Inne ustawienia / Edytor ... / Ogólne</a>) zaznaczyć opcję niewyróżniania w edytorze wierszy, w których istnieją zadania oznaczone jako wykonane. Dzięki temu będzie ono widoczne na liście zadań, ale będą zwracały już twojej uwagi podczas pracy.</p>


<p>Dzięki specjalnemu oznaczeniu zadań (zmieniony kolor tła linii z zadaniem) nie sposób takiego zadania nie zauważyć. Dodatkowo przy otwieraniu dokumentu, dla którego przypisane zostało zadanie, wyświetlony zostanie specjalny komunikat (wyświetlanie komunikatu można wyłączyć w oknie <a href="settings_editor_documents.php">Ustawień programu</a>).</p>

<p>Aby szybko odczytać treść zadania zdefiniowanego dla takiej wyróżnionej linii, wystarczy nad nią najechać kursorem myszy - tytuł i opis pojawią się na pasku stanu (na dole okna programu), w miejscu gdzie wyświetlana jest zazwyczaj podpowiedź pomocy. Oczywiście gdy tytuł lub opis są długie, mogą się nie zmieścić na pasku stanu - aby odczytać treść zadania dla takiej linii, wystarczy na niej kliknąć z wciśniętym jednocześnie klawiszem <tt>CTRL</tt>.</p>


<h2>Priorytety zadań</h2>

<p>Zadania oznaczone są w dokumencie za pomocą koloru tła linii, w której ustawione zostało zadanie. Kolor tego tła określony jest przez priorytet zadania, przy czym:</p>

<table cellspacing="5" cellpadding="0" border="0">
<tr>
	<td align="right">1 - </td>
	<td>priorytet najwyższy</td>
	<td style="background-color: #FF0000">podświetlenie czerwone</td>
</tr>
<tr>
	<td align="right">5 - </td>
	<td>priorytet średni (domyślny)</td>
	<td style="background-color: #FFE200">podświetlenie żółte</td>
</tr>
<tr>
	<td>10 - </td>
	<td>priorytet najniższy</td>
	<td style="background-color: #198E73">podświetlenie zielone</td>
</tr>
</table>
</p>
<p>Pozostałe priorytety mają kolory pośrednie pomiędzy przedstawionymi powyżej - od czerwonego, poprzez żółty do zielonego. Kolory podświetlenia dla poszczególnych priorytetów możesz zmienić w oknie <a href="settings_editor_general.php">Ustawienia programu - Ogólne ustawienia edytora</a></p>

<h2>Poruszanie się po dokumencie za pomocą zadań</h2>

<p>Przejść do wybranego zadania w bieżącym dokumencie możesz na kilka sposobów:</p>

<ul>
	<li>korzystając z okna <a href="tool_docinfo.php#todotasks">Informacje o dokumencie / Zadania do wykonania</a></li>
	<li>korzystając z okna <a href="find_text.php#goto">Wyszukiwanie, zamiana, przenoszenie do wybranych elementów dokumentu</a> (standardowy skrót <tt>Ctrl+G</tt>)</li>
</ul>

<p>Ponadto, korzystając z okna <a href="service_todotasks.php">Zadania do wykonania w serwisie</a>, możesz jest przeglądać, usuwać i przechodzić do zadań ustawionych dla wszystkich dokumentów bieżącego serwisu. </p>









</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_docinfo.php#todotasks">Informacje o dokumencie - zadania do wykonania</a>
	<li>Edytor <a href="tool_docinfo_todo_add.php">Zadanie do wykonania</a></li>
	<li><a href="main_editor.php">Edytor - tryb edycji kodu źródłowego</a>
	<li><a href="main_editor_bookmarks.php">Zakładki w dokumencie</a>
	<li><a href="main_editor_navigation.php">Różne sposoby nawigacji po dokumencie</a>
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