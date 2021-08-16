
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
<!-- nazwa strony pomocy -->
<title>Edytor - tryb edycji kodu źródłowego</title>

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
<h1>Edytor - tryb edycji kodu źródłowego</h1>



<p>Tryb edycji kodu źródłowego jest częściej stosowanym trybem edycji w Pająku. Jest też znacznie bardziej rozbudowany i posiada więcej opcji niż <a href="main_editor_wysiwyg.php">tryb graficzny</a>.</p>

<p>Okno edycji kodu źródłowego składa się z dwóch elementów:</p>
<ul>
	<li><a href="#editor">Edytora</a> - w nim przeprowadzasz edycję kodu źródłowego dokumentu</li>
	<li><a href="#gutter">Rynny</a> - na niej umieszczane będą dodatkowe informacje dot. dokumentu</li>
</ul>

<p>Ponadto możesz w trybie edycji kodu źródłowego włączyć okno <a href="main_preview_dynamic.php">dynamicznego podglądu</a>.</p>

<a name="editor"></a>
<h2>Edytor</h2>

<p>W edytorze przeprowadzać będziesz wszelkie operacje związane z kodem źródłowym dokumentu. W celu usprawnienia pracy edytor obsługuje wiele skrótów klawiszowych, posiada menu kontekstowe, kolorowanie składni i wiele innych własności.</p>

<p><a name="editorhiglighting"></a><b>Kolorowanie składni</b><br />




<p>Podstawowym wymogiem współczesnego edytora kodu źródłowego dla dowolnego języka jest kolorowanie składni. Pozwala to na znacznie łatwiejszą orientację w kodzie. Edytor kodu w Pająku został także wyposażony w bardzo rozbudowane <a href="syntax.php">kolorowanie składni</a>, które umożliwia łatwiejsze rozróżnianie znaczników HTML i ich atrybutów, nazw funkcji i instrukcji w językach programowania i wielu innych. W sumie z programem dostarczone zostało ponad 40 schematów kolorowania.</p>

<p>W Pająku podczas pracy możliwa jest zmiana schematu kolorowania. W tym celu skorzystaj z polecenia <b>Wybór schematu kolorowania składni</b> na mini pasku narzędzi z lewej strony edytora, które rozwinie listę wszystkich dostępnych schematów.</p>

<p>Możesz również <a href="settings_editor_syntax.php">dostosowywać kolorowanie składni</a>, a nawet za pomocą <a href="syntax_editor.php">Edytora schematów kolorowania</a>  edytować istniejące i tworzyć nowe schematy.</p>

<p>Ponadto, podczas tworzenia bardziej skomplikowanych elementów kodu, w szczególności skryptów, gdzie występują zagnieżdżone w sobie pętle, instrukcje warunkowe itp. bardzo przydatna jest funkcja kolorowana (wyróżniania) odpowiadających sobie par nawiasów. W ten sposób łatwo jest rozpoznać początek i koniec bloku, w którym stoi kursor.</p>

<p><b>Zadania do wykonania</b><br />

<p>Niejednokrotnie podczas pracy z programem będziesz chciał sporządzić notatki, które będą przypominały co należy jeszcze zrobić. Jeśli nad projektem pracuje więcej osób, możliwe jest w ten sposób przekazywanie sobie istotnych informacji.</p>

<p>Takimi właśnie notatkami są w Pająku <a href="main_editor_todotasks.php">Zadania do wykonania</a>. Każde utworzone zadanie przypisane jest do konkretnej linii w konkretnym dokumencie. Linia, w której dodałeś zadanie oznaczona będzie kolorem, który zależy od priorytetu (ważności) zadania (priorytet ustawiasz podczas tworzenia zadania). Kolory poszczególnych priorytetów możesz zmienić korzystając z okna <a href="settings_editor_general.php">Ustawień programu</a></p>

<p>Wystarczy dwukliknąć na linii, w której istnieje zadanie do wykonania, by otworzyło się okienko z opisem tego zadania.</p>

<p><b>Zakładki w dokumencie</b><br />

<p>Zakładki umożliwiają oznaczenie ważnych miejsc, do których będziesz częściej wracał. Po ustawieniu zakładki w wybranym wierszu, jej ikona pojawi się na <a href="#gutter">rynnie</a>. Więcej o korzystaniu zakładek czytaj <a href="main_editor_bookmarks.php">tutaj</a>.</p>

<a name="twoparts"></a>
<p><b>Podział okna edytora na dwie części</b><br />

<p>Czasem zachodzi potrzeba jednoczesnej edycji początku i końca dokumentu. Najczęściej ma to miejsce podczas pisania skryptów, gdy chcesz widzieć np. deklarację funkcji i jednocześnie edytować inną funkcję. W takim wypadku z pomocą przychodzi możliwość podziału okna na dwie części. Okno edytora możesz podzielić na dwa sposoby:</p>

<ul>
	<li>w pionie</li>
	<li>w poziomie</li>
</ul>

<p>W celu podzielenia okna edytora skorzystaj z polecenia na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>.</p>


<p><b>Podkreślanie błędów</b><br />

<p>Bardzo przydatną funkcją edytora jest podkreślanie błędów w pisowni. Niepoprawnie napisane wyrazy będą oznaczane czerwonym wężykiem (kolor wężyka możesz zmienić w oknie <a href="settings_editor_spelling.php">Ustawień programu</a>). Podkreślanie błędów możesz włączyć lub wyłączyć za pomocą polecenia na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>.</p>
<p>Więcej o sprawdzaniu pisownie <a href="spelling.php">czytaj tutaj</a>.</p>


<p><b>Automatyczne uzupełnianie znaczników, Dynamiczne podpowiedzi, Dynamiczny kod</b><br />


<p>Podczas pracy z dokumentami w różnych językach niejednokrotnie zdarzy Ci się zapomnieć składni jakiegoś elementu (znacznika, funkcji itp.). W takim wypadku z pomocą przychodzą funkcje Dynamicznego kodu. Zostały one szerzej opisane w temacie dotyczącym <a href="main_editor_codeinsight.php">dynamicznego kodu</a>.</p>


<p><b>Menu podręczne</b><br />

<p>Edytor posiada bardzo rozbudowane <a href="main_menu_editor.php">menu podręczne</a> (inaczej nazywane menu kontekstowym). Możesz je wywołać klikając prawym klawiszem myszki w dowolnym miejscu edytora. </p>

<p>Używają poleceń z tego menu możesz wykonać większość operacji w programie, jak np. otwieranie, zapis i zamykanie dokumentów, zmiana schematu kolorowania, <a href="main_editor_navigation.php">nawigacja po dokumencie</a>, zamiana tekstu na tabele, sprawdzanie poprawności pisownie i wiele innych.</p>


<p>Możliwe jest także dostosowanie menu kontekstowego. Najłatwiej można to zrobić klikając polecenie "Dostosuj paski, menu i skróty" znajdujące się u dołu menu podręcznego edytora i w oknie które się otworzy, przejść do kategorii <a href="settings_toolbars_editor.php">Menu kontekstowe edytora</a>.</p>



<a name="gutter"></a>
<h2>Rynna</h2>

<p>Rynna służy do wyświetlania dodatkowych informacji przydatnych podczas pracy przy edycji kodu. Możesz ją włączyć za pomocą polecenia na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>, lub w oknie <a href="settings_editor_conf.php">Ustawień programu</a>.</p>

<p>Na rynnie mogą się znaleźć następujące elementy:</p>

<ul>
	<li><b>numery linii dokumentu</b> - możesz je włączyć, lub wyłączyć korzystając z polecenia na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>,</li>
	<li><b>ikona zawiniętego wiersza</b> - pojawia się w momencie gdy wiersz nie mieści się w jednym wierszu na ekranie, a jednocześnie włączony jest zawijanie wierszy (zawijanie możesz włączyć i wyłączyć za pomocą polecenia na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>)</li>
	<li><b>ikony zakładek w dokumencie</b> - umożliwiają oznaczenie ważnego miejsca, w celu łatwego jego odnalezienia,</li>
</ul>

<p>Rynna posiada menu, do którego dostęp możesz uzyskać klikając na niej lewym klawiszem myszy. Układ poleceń tego menu jest identyczny, jak w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_edit.php">Edycja</a> / <a href="main_menu_edit_bookmarks.php">Zakładki w dokumencie</a>.</p>




<!-- treść pomocy -->


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_editor_general.php">Edytor - ogólnie</a>
	<li><a href="main_editor_codeinsight.php">Dynamiczny kod</a>
	<li><a href="main_preview_dynamic.php">Dynamiczny podgląd</a>
	<li><a href="main_editor_todotasks.php">Zadania do wykonania</a>
	<li><a href="main_editor_bookmarks.php">Zakładki w dokumencie</a>
	<li><a href="main_menu_editor.php">Menu podręczne edytora</a>
	<li><a href="toolbars_minitoolbar.php">Mini pasek edytora</a>
	<li><a href="main_editor_navigation.php">Różne sposoby nawigacji po dokumencie</a>
	<li><a href="main_editor_wysiwyg.php">Edycja w trybie graficznym</a>
	<li><a href="main_tabs_general.php">Inne zakładki</a>
	<li><a href="main_window_desc.php">Główne okno programu</a>

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