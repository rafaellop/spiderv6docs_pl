<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Zakładka "Nawigator"</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>


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

<!-- nagłowek głowny tematu -->
<h1>Zakładka "Nawigator"</h1>




<p>Zakładka "Nawigator" pozwala na wygodnie przemieszczanie się w kodzie źródłowym dokumentów różnych języków obsługiwanych przez Pająka. W szybki sposób pomaga zorientować się w strukturze dokumentu, za pomocą jednego kliknięcia pozwala przenieść się do wybranego znacznika w HTML, klasy, funkcji, czy konstrukcji w językach skryptowych, czy selektora w arkuszach CSS.

<p>Zakładkę "Nawigator" włączysz za pomocą panelu po prawej lub skrótu klawiszowego CTRL+7, a także z menu pod przyciskiem pokazanym powyżej z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_view.php">Wyświetl</a>. 

<p>Okno nawigatora składa się z menu oraz dynamicznie tworzonego drzewa struktury dokumentu. </p>

<p>Gałęzie drzewka można rozwinąć klikając na plusik z lewej strony nazwy. Kliknięcie na nazwę danego elementu przenosi w miejsce jego występowania w dokumencie</p>

<p>Drzewko jest tworzone dynamicznie - jeśli jakieś elementy nie występują w skrypcie, nie będzie również odpowiadających im głównych gałęzi. Przykładowo - jeśli w dokumencie HTML nie ma żadnych obrazków, to w <b>skategoryzowany nawigator HTML</b> nie pokaże gałęzi <b>Grafiki</b></p>


<h2>Menu zakładki</h2>

W jednym dokumencie mogą zostać użyte różne języki, np. HTML, PHP, JavaScript i CSS. Nie jest możliwe wyświetlenie nawigatora dla tak skomplikowanego dokumentu, jednak można przełączać się na poszczególne nawigatory za pomocą menu w górnej części okna. 

<p><b>Dostępne są następujące nawigatory:</b></p>

<ul>
   <li><a href="#html">nawigator HTML</a></li>
   <li><a href="#html_categorized">skategoryzowany nawigator HTML</a></li>
   <li><a href="#css">nawigator CSS</a></li>
   <li><a href="#js">nawigator JavaScript</a></li>
   <li><a href="#vbs">nawigator VBScript</a></li>
   <li><a href="#php">nawigator PHP</a></li>
   <li><a href="#asp">nawigator ASP</a></li>
</ul>

<p>Ponadto w menu dostępne są dwa polecenia:</p>
<p> <b>Odświeżenie drzewa nawigatora</b>.<br />
Pająk automatycznie odświeża widok drzewka po zapisie dokumentu, lub po przełączeniu jednego nawigatora na inny. Jeśli jednak chcesz odświeżyć ręcznie drzewko skorzystaj z pokazanego obok przycisku.</p>

<p> <b>Zablokowanie aktualnego nawigatora</b>.<br />
Nawigator potrafi obsługiwać dokumenty zawierające bloki w różnych językach. Program wykrywa czy kursor znajduje się w bloku skryptu, w arkuszu CSS, czy może w części zawierającej kod HTML i automatycznie zmienia nawigator na odpowiedni. </p>
<p>Niekiedy jednak możesz chcieć, by widoczny był stale tylko jeden nawigator. Przykładowo: tworzysz dokument HTML i czasem używasz w nim skryptu PHP - ciągłe przełączanie nawigatora nie dość że rozprasza, to zajmuje czas i zasoby komputera. W takim wypadku możesz zablokować okno używając polecenia, którego ikonę przedstawiono powyżej.</p>
<p>Po zablokowaniu nawigatora przestaje działać automatyczne wykrywanie bloku kodu, w jakim znajduje się kursor. Cały czas możesz jednak nawigatora zmieniać ręcznie za pomocą przycisków menu.</p>
<p>Ponadto, używając strzałki z prawej strony przycisku, można wyświetlić podmenu zawierające dwa dodatkowe polecenia, które umożliwiają zablokowanie bieżącego typu nawigatora dla wszystkich otwartych dokumentów tego samego typu (z tym samym rozszerzeniem nazwy pliku, jak dokument bieżący), a także odblokowanie nawigatora dla wszystkich podobnych dokumentów.</p>

<h2>Wspólne dla wszystkich nawigatorów gałęzie drzewka</h2>
<p>Każdy z nawigatorów wyświetla różne dane. Jednak 3 gałęzie mają zawsze wspólne - są to:
<ul>
   <li><b>Zakładki numerowane</b>
   <li><b>Zakładki nazwane</b>
   <li><b>Zadania do wykonania</b>
</ul>
<p>Ujawniają się one tylko wtedy, gdy w edytorze są zdefiniowane zakładki lub zadania. Korzystając z nich możesz szybko odnaleźć i przejść do wybranego elementu bez względu na aktualnie wyświetlany nawigator - kliknięcie w wybraną pozycję powoduje przeniesienie kursora w odpowiednie miejsce w edytorze.</p>


<h2><a name="html"></a>Nawigator znaczników</h2>

<p> Drzewko zbudowane jest według kolejności występowania znaczników (wszystkich typów dokumentów znacznikowych obsługiwanych przez Pająka) w dokumencie i przedstawia hierarchię znaczników. Elementy podrzędne umieszczone są w gałęziach elementu nadrzędnego. </p>

<p>Przykładowo tabela HTML będzie przedstawiana za pomocą drzewka wyglądającego mniej więcej podobnie:</p>
<p>+ <tt>&lt;table&gt;</tt><br />
&nbsp;&nbsp;&nbsp; + <tt>&lt;tr&gt;</tt><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + <tt>&lt;td&gt;</tt><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + <tt><i>zawartość komórki tabeli</i></tt></p>

<h2><a name="html_categorized"></a>Skategoryzowany nawigator HTML</h2>

<p> Elementy dokumentu pogrupowane są na drzewku według typu, w osobnych gałęziach umieszczone są :
<ul>
   <li><b>Grafiki</b>, - lista grafik umieszczonych w dokumencie</li>
   <li><b>Odsyłacze</b>, - lista odsyłaczy do innych dokumentów</li>
   <li><b>Formularze</b>, - lista formularzy i ich pól,</li>
   <li><b>Arkusze stylów</b> - lista arkuszy stylów (zagnieżdżonych i dołączonych), a także ich elementów (nawet z arkuszy dołączonych!)</li>
   <li><b>Skrypty</b> - lista skryptów client-side (JavaScript, VBScript), zagnieżdżonych i dołączonych</li>
   <li><b>Skrypty server-side</b> - lista, której elementy wskazują na bloki skryptów server-side, jak PHP, lub ASP</li>
</ul>

</p>



<h2><a name="css"></a>Nawigator CSS</h2>

<p> Elementy arkusza pogrupowane są według ich rodzaju - w osobnych gałęziach drzewka umieszczone są:
<ul>
   <li><b>AT-instrukcje</b> - instrukcje CSS poprzedzone znakiem <tt>@</tt> - <tt>@import</tt>, <tt>@media</tt>, <tt>@page</tt>, <tt>@font-face</tt>, <tt>@charset</tt></li>
   <li><b>selektory elementów</b> - nazwy znaczników użyte do stworzenia stylu, </li>
   <li><b>klasy</b> - przed nazwą mają prefiks <b>.</b> (kropka), używane w dokumencie znacznikowym za pomocą atrybutu <tt>class</tt>),</li>
   <li><b>identyfikatory</b> - przed nazwą mają prefiks <b>#</b> (krzyżyk), przypisywane do elementów dokumentu znacznikowego na podstawie atrybutu <tt>id</tt></li>
</ul></p>


<h2><a name="js"></a>Nawigator JavaScript</h2>

<p> Na drzewku znajdują się gałęzie zawierające:
<ul>
   <li><b>Zmienne globalne</b> - zawiera listę wszystkich zmiennych globalnych używanych w skrypcie</li>
   <li><b>Funkcje JavaScript</b> - zawiera listę wszystkich funkcji zadeklarowanych w skrypcie. Jeśli dana funkcja zawiera instrukcje warunkowe, pętle itp. zostaną one pokazane jako gałęzie wychodzące od gałęzi z nazwą funkcji.</li>
   <li><b>Konstrukcje skryptowe</b> - zawiera listę konstrukcji skryptowych (instrukcje warunkowe, pętle itp.) użytych poza funkcjami skryptu.</li>
</ul>
</p>




<h2><a name="vbs"></a>Nawigator VBScript</h2>

<p> Drzewo składników VBScript zawiera następujące gałęzie:

<ul>
   <li><b>Stałe globalne</b> - zawiera listę wszystkich stałych globalnych w skrypcie</li>
   <li><b>Zmienne globalne</b> - zawiera listę wszystkich zmiennych globalnych w skrypcie</li>
   <li><b>Klasy</b> - zawiera listę wszystkich klas w skrypcie. Jeśli dana klasa posiada metody, zostaną one pokazane jako gałęzie wychodzące od gałęzi z nazwą klasy. Analogicznie przedstawiona jest zawartość metod.</li>
   <li><b>Funkcje</b> - zawiera listę funkcji w skrypcie. Analogicznie jak dla metod w klasie, możesz uzyskać dostęp do konstrukcji użytych w danej funkcji.</li>
   <li><b>Konstrukcje skryptowe</b> - zawiera listę konstrukcji skryptowych (instrukcje warunkowe, pętle itp.) użytych poza funkcjami skryptu.</li>
</ul>
</p>




<h2><a name="php"></a>Nawigator PHP</h2>

<p> Drzewko zawiera dwie główne gałęzie, w których umieszczone zostaną wszystkie elementy skryptu PHP.</p>


<p><b>Skrypty PHP w bieżącym dokumencie</b><br />
 Pierwsza główna gałąź drzewka zawiera listę na którą składają się: </p>
<p><ul>
   <li><b>Stałe</b></li>
   <li><b>Zmienne globalne</b></li>
   <li><b>Klasy</b> zadeklarowane w skrypcie. Gałąź klasy może posiadać podgałęzie zawierające <b>Właściwości</b> i <b>Metody</b> klasy. Metody klasy mogą zawierać kolejne podgałęzie - identycznie jak gałąź <b>Funkcje</b></li>
   <li><b>Funkcje</b> - zawiera listę wszystkich funkcji zadeklarowanych w skrypcie. Gałąź danej funkcji może zawierać gałęzie <b>Funkcje</b> zagnieżdżone, <b>Zmienne lokalne</b>, <b>Konstrukcje skryptowe</b></li>
   <li><b>Konstrukcje skryptowe</b> - zawiera listę konstrukcji skryptowych (instrukcje warunkowe, pętle itp.) użytych poza funkcjami skryptu.</li>
</ul></p>

<p><b>Zaimportowane skrypty</b><br />
Druga gałąź zawiera listę skryptów dołączanych do aktualnego skryptu (np za pomocą <tt>include()</tt>). </p>

<p>Zawartość gałęzi każdego skryptu dołączanego jest analogiczna, jak w przypadku gałęzi <b>Skrypty PHP w bieżącym dokumencie</b> i umożliwia przechodzenie do wybranych miejsc w dokumencie dołączonym!</p>

<b>Wymuszone dołączanie</b> - zawiera listę plików i folderów, których dołączenie zostało wymuszone dla serwisu bądź dla bieżącego skryptu. Więcej o <a href="service_virtual_include.php">wymuszonym dołączaniu</a>.


<h2><a name="asp"></a>Nawigator ASP</h2>

<p> Ze względu na możliwość korzystania w technologii ASP z różnych języków, nawigator ASP będzie zawierał drzewko dla języka, w którym napisany został skrypt (JS lub VBS).</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="main_editor_navigation.php">Różne sposoby nawigacji po dokumencie</a>
   <li><a href="find.php">Wyszukiwanie w Pająku</a>
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

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>
