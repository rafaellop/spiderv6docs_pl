<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Pomoc HTML Help</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<!-- topmenu start -->
<? include "include/topmenu.html"; ?>
<!-- topmenu end -->
	
<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<h1>Pomoc HTML Help</h1>
<!-- nagłowek głowny tematu -->

<!-- Treść pomocy -->



<p>Pliki w formacie CHM (HTML Help) są obecnie najpopularniejszą postacią pomocy w programach dla MS Windows. </p>
<p>Plik CHM zawiera zwykłe dokumenty HTML, oraz obrazki, spis treści, skorowidz, a także dane umożliwiające odwoływanie się do poszczególnych dokumentów z programu, do którego ww. pomoc jest utworzona.</p>
<p>Pająk wspomaga tworzenie takich plików udostępniając bardzo wygodny interfejs. Do skompilowania pliku CHM konieczne jest jednak zainstalowanie programu HTML Help Workshop.</p>

<p><b>Instalacja programu MS HTML Help Workshop</b><br>

<p>Program MS HTML Help Workshop należy pobrać ze strony <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/ms669985(v=vs.85).aspx" target="_blank">Microsoft MSDN</a>.</p>

<p>Po pobraniu programu należy go zainstalować w systemie.</p>

<p>Kolejną czynnością jest wskazanie w ustawieniach Pająka ścieżki dostępu do kompilatora HTML Help - programu <b>hhc.exe</b>. Standardowo jest ona następująca: <tt>C:\Program Files (x86)\HTML Help Workshop\hhc.exe</tt>. </p>

<p>Okno ustawień służące do wskazania ścieżki dostępu możesz wyświetlić korzystając z polecenia w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_view.php">Wyświetl</a> / <a href="main_menu_view_settings.php">Ogólne ustawienia programu</a> / <a href="settings_addtools.php">Dostosuj Tidy i dodatkowe narzędzia</a>. Po uruchomieniu ww. okna przejdź do <a href="settings_addtools_htmlhelp.php">zakładki HTML Help</a> i wskaż ścieżkę.</p>


<h2>Szybkie kompilowanie folderu do pliku CHM</h2>

<p>Najprostszym sposobem utworzenia pliku w formacie HTML Help jest skompilowanie całego folderu do pliku CHM. Możesz to zrobić korzystając narzędzia <a href="tool_htmlhelp_folder_to_chm.php">Szybki HTML Help z folderu</a>. Narzędzie to uruchomisz korzystając z polecenia w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_htmlhelp.php">HTML Help</a> / <b>Kompilacja folderu do HTML Help</b>.</p>

<p>Po wybraniu folderu do skompilowania i ustawieniu pozostałych opcji (<a href="tool_htmlhelp_folder_to_chm.php">tutaj dokładny opis okna</a>) kliknij na przycisk "Kompiluj". narzędzie utworzy listę plików, a następnie skompiluje plik pomocy. </p>

<p>Jeśli kompilacja zostanie ukończona pomyślnie, wyświetlony zostanie raport o przebiegu kompilacji, a następnie pytanie, czy chcesz obejrzeć skompilowany plik CHM.</p>

<p>Kompilacja może potrwać od kilku do kilkudziesięciu sekund w zależności od szybkości komputera, a także ilości i wielkości plików wchodzących w skład docelowego pliku pomocy.</p>




<h2>Korzystanie z Serwisu będącego projektem HTML Help</h2>

<p>Znaczącym ułatwieniem podczas tworzenia pomocy w formacie CHM jest możliwość zdefiniowania Serwisu jako Projektu HTML Help. W tym celu zaznacz opcję "Ten serwis jest również projektem HTML Help" w drugiej zakładce okna <a href="service_properites.php">Właściwości serwisu</a>. Dzięki temu wszystkie ustawienia bieżącego projektu HTML Help będziesz miał w dostępne z jednego miejsca.</p>


<p><b>Przygotowanie projektu w Edytorze HTML Help</b><br>

<p>Po zaznaczeniu ww. opcji musisz jeszcze wykonać kilka czynności, aby utworzyć główny plik projektu (*.HHP). W tym celu kliknij w oknie ustawień serwisu na polecenie "Edytuj projekt". Spowoduje to otwarcie <a href="tool_htmlhelp_hhp_editor.php">Edytora projektu HTML Help</a>.</p>

<p>Pierwszą czynnością będzie wskazanie folderu, w którym znajdują się pliki mające wejść w skład projektu HTML Help. Wskazane jest, by wszystkie pliki wchodzące w skład tego projektu znajdowały się w tym folderze, lub w znajdujących się w nim podfolderach. Folder projektu wskażesz za pomocą polecenia w górnej części okna.</p>

<p>Następnie możesz kliknąć polecenie "Zapisz bieżący projekt HTML Help" znajdujące się z prawej strony. Zostaniesz poproszony o podanie nazwy docelowego pliku *.CHM. Kursor automatycznie zostanie umieszczony w odpowiednim polu Edytora w zakładce "Ogólne ustawienia projektu".</p>

<p>Kolejną czynnością będzie dodanie wszystkich plików, które mają wejść w skład pomocy, na listę "Pliki projektu przeznaczone do wkompilowania" w pierwszej zakładce okna edytora. Jest to ważne przede wszystkim dla plików, do których odsyłacze nie są jawnie zadeklarowane w dokumentach HTML Help, czyli np. do obrazków używanych w efektach podmiany po najechaniu kursorem myszy nad przycisk itp. Inne pliki, do których odsyłacze umieszczone są bezpośrednio w znacznikach HTML, kompilator dołączy do pliku CHM automatycznie.</p>

<p>Aby po otwarciu pliku CHM od razu widać było początkowy dokument, musisz go wskazać w polu "Domyślna strona startowa" (w lewej, górnej części drugiej zakładki edytora).</p>


<p><b>Utworzenie spisu treści</b><br>

<p>Aby ułatwić użytkownikom korzystanie z pomocy, należy utworzyć spis treści. W tym celu uruchom <a href="tool_htmlhelp_hhc_editor.php">Edytor spisu treści HTML Help</a>. Możesz to zrobić korzystając z polecenia w drugiej zakładce Edytora projektu HTML Help, jak również w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_htmlhelp.php">HTML Help</a>. W pierwszym przypadku, po zapisaniu pliku spisu treści, zostanie on automatycznie przypisany do projektu. W przeciwnym wypadku nazwę pliku spisu treści będziesz musiał wpisać w ręcznie edytorze projektu.</p>

<p>W spisie treści możesz wstawiać <b>Kategorie</b> (w pomocy do Pająka są to np. 'foldery' <i>Jak to wykonać?</i> itp.), a w każdej kategorii możesz umieszczać jej elementy, jak kolejne podkategorie i pozycje. Możesz to zrobić korzystając z poleceń z prawej strony listy pozycji spisu treści.

<p>Pozycja różni się od kategorii tym, iż nie może zawierać podelemetów. Możliwa jest jednak zamiana kategorii na pozycje i odwrotnie (w zakładce "Ustawienia elementu"). W tej samej zakładce możesz przypisać do każdej kategorii i pozycji dokument, który zostanie wyświetlony na ten element w spisie treści. Pamiętaj, aby po każdej zmianie w ustawieniach elementu kliknąć na przycisk "Aktualizuj dane elementu".

<p>Szczegółowy opis narzędzia znajdziesz w temacie pomocy <a href="tool_htmlhelp_hhc_editor.php">Edytor spisu treści HTML Help</a></p>


<p><b>Utworzenie indeksu</b><br>

<p>Indeks (skorowidz) umożliwia przeglądanie wszystkich tematów pomocy. Jest to lista wszystkich tematów, jakie są zawarte w pliku CHM.

<p>Korzystając z <a href="tool_htmlhelp_hhk_editor.php">Edytora indeksu HTML Help</a> możesz utworzyć projekt skorowidza (plik *.HHK). Tworzenie go jest bardzo podobne do tworzenia spisu treści, przy czym nie można tworzyć kategorii - wszystkie elementy umieszczone są kolejno na jednej liście.</p>

<p>Aby szybko utworzyć skorowidz, możesz skorzystać z polecenia "Przekształć zawartość folderu na skorowidz", które znajdującego się z prawej strony listy skorowidza. W podmenu, które się pokaże, możesz ustawić kilka opcji w celu lepszego dopasowania skorowidza do Twoich potrzeb.</p>


<p><b>Wyszukiwanie w pomocy HTML Help</b><br>

Aby dodać do pliku pomocy zestaw słów kluczowych ułatwiających wyszukiwanie, zaznacz opcję "Włącz słowa kluczowe z plików HTML" w <a href="tool_htmlhelp_hhp_editor.php">Edytorze projektu HTML Help</a>, w zakładce "Ogólne ustawienia projektu". </p>


<p><b>Kompilacja projektu w bieżącym serwisie</b><br>

<p>Gdy wszystko jest już przygotowane, możesz skompilować projekt. W tym celu skorzystaj z polecenia "Skompiluj projekt" w <a href="main_menu_main.php">Menu głównym</a> / <a href="main_menu_htmlhelp.php">HTML Help</a> / <b>HTML Help w bieżącym serwisie</b>, bądź w oknie <a href="service_properites.php">Właściwości serwisu</a>.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_htmlhelp_hhp_editor.php">Edytor projektu HTML Help</a>
	<li><a href="tool_htmlhelp_hhc_editor.php">Edytor spisu treści HTML Help</a>
	<li><a href="tool_htmlhelp_hhk_editor.php">Edytor skorowidza (indeksu) HTML Help</a>
	<li><a href="tool_htmlhelp_folder_to_chm.php">Szybki HTML Help z folderu</a>
	<li><a href="main_menu_htmlhelp.php">Menu HTML Help</a>
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