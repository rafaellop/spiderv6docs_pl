
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Zakładka "Inspektor MySQL"</title>

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
<h1>Zakładka "Inspektor MySQL"</h1>



<p>Zakładka "Inspektor MySQL" służy pracy na serwerze MySQL. Umożliwia tworzenie nowych tabel, wprowadzanie i odczyt danych z bazy, a także znacząco ułatwia tworzenie zapytań w edytowanych dokumentach.

<p>Zakładkę Inspektor MySQL włączysz za pomocą panelu po lewej lub skrótu klawiszowego CTRL+6, a także z menu pod przyciskiem pokazanym powyżej czy z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_view.php">Wyświetl</a>.

<p>Zakładka składa się z trzech zasadniczych części. U góry znajduje się lista baz danych. Poniżej umieszczone jest drzewko przedstawiające strukturę bieżącej bazy danych (układ tabel i ich pól), z prawej strony drzewka znajduje się pasek najczęściej używanych poleceń. U dołu zaś umieszczony jest inspektor, na którym przedstawione mogą być szczegółowe informacje i strukturze wybranej tabeli, bądź jej zawartość, a także wynik zapytania do bazy danych.</p>

<h2>Pasek i lista baz danych</h2>

<p><b>Lista wyboru bazy danych</b><br>
Wybierz z listy bazę danych, z którą aktualnie chcesz pracować. Pająk automatycznie połączy się z serwerem i wyświetli strukturę na drzewku poniżej.

<p><b>Grupowanie baz danych</b><br>
Istnieje możliwość grupowania baz danych. Grupy umieszczone są na liście powyżej baz niezgrupowanych. Kliknięcie na nazwę grupy rozwinie listę zebranych w niej baz danych. Jest to szczególnie przydatne, jeśli korzystasz z wielu różnych baz. Grupę, do której jest przypisana baza danych możesz określić w oknie <a href="settings_network_mysqlservers_add.php">Właściwości serwera MySQL</a>.</p>

<p><b>Przycisk "Ustawienia serwerów baz danych"</b><br>
   Po lewej stronie opisanej wyżej listy znajdziesz przycisk uruchamiający okienko <a href="settings_network_mysqlservers.php">Ustawień serwerów baz danych MySQL</a>, w którym możesz dodać nowe bazy danych, z którymi chcesz pracować, czy zmodyfikować ustawienia istniejących.

<p><b>Przycisk "Przerwij bieżącą operację"</b><br>
Ten przycisk pozwala na przerwanie operacji aktualnie wykonywanej na serwerze.


<p><b>Wyświetl w układzie pionowym</b><br />
Drzewo tabel będzie wyświetlone z lewej strony zakładki, inspektor struktury i zawartości tabeli po prawej.

<p><b>Wyświetl w układzie poziomym</b><br />
Drzewo tabel będzie wyświetlone u góry strony zakładki, inspektor struktury i zawartości tabeli u dołu.

<p><b>Przycisk "Pomoc"</b><br>
Wyświetlenie pomocy do zakładki Inspektora MySQL.

<h2>Drzewo struktury bazy danych</h2>

<p>Drzewo wyświetla strukturę tabel istniejących w bieżącej bazie danych. Składa się z hierarchicznie ułożonych trzech rodzajów gałęzi, z których każda posiada odrębne menu podręczne:

<p> - <a href="#dbtree_servername">Nazwa serwera baz danych (nazwa bazy danych)</a><br />
&nbsp;&nbsp;&nbsp; - <a href="#dbtree_tablename">Nazwa tabeli w bazie danych</a><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <a href="#dbtree_fieldname">Nazwa pola w tabeli</a><br />
</p>



<p>Jeśli wskażesz tabelę, bądź pole tabeli na drzewku (pojedynczym kliknięciem), wybrany element zostanie podświetlony na niebiesko. Teraz wystarczy wcisnąć <tt>Enter</tt>, by wkleić nazwę wskazanego elementu do edytora. W ten sposób ułatwione zostało budowanie zapytań do bazy w Twoich skryptach.</p>

<a name="dbtree_servername"></a>
<a name="dbtree_dbname"></a>
<h3> Nazwa serwera baz danych (nazwa bazy danych)</h3>
Gałęzią główną (korzeniem, ang. <i>root</i>) drzewa jest nazwa serwera i wybranej bazy danych. Gałąź ta posiada menu podręczne, które możesz wyświetlić klikając na niej prawym klawiszem myszy:

<p><b> Utwórz nową bazę danych</b><br />
Wyświetla okienko umożliwiające wprowadzenie nazwy nowej bazy danych. Po zaakceptowaniu, nowa baza danych jest tworzona, o ile bieżący użytkownik posiada odpowiednie uprawnienia na serwerze.

<p><b> Utwórz nową tabelę</b><br />
Wyświetla okno <a href="tool_mysql_table_properties.php">Utwórz nową tabelę</a>.

<p><b>Odświeżenie listy tabel</b><br>
Odświeża listę tabel bieżącej bazy danych na drzewku. Polecenie to przydatne jest szczególnie w sytuacji, gdy zmiany w tabelach bazy danych zostały dokonane z pominięciem narzędzi Pająka.

<p><b> Wykonaj polecenie SQL</b><br />
Otwiera okienko <a href="tool_mysql_query.php" title="Wykonaj polecenie SQL">Wykonaj polecenie SQL</a> umożliwiające ręczne wprowadzenie własnego zapytania do bazy danych.

<p><b>Wykonaj polecenia SQL z bieżącego dokumentu</b><br />
Wykonuje zapytanie SQL z bieżącego dokumentu otwartego w edytorze.


<p><b>Wykonaj polecenia SQL z pliku</b><br />
Otwiera okienko w celu wybrania pliku z zapytaniami SQL przeznaczonymi do wykonania.

<p><b> Eksportuj zawartość</b><br />
Uruchamia <a href="tool_mysql_export_tables.php">Kreator eksportu z bazy danych</a>, który umożliwia wygenerowanie gotowego dokumentu na podstawie danych pobranych z bazy.

<p><b> Właściwości serwera</b><br />
Wyświetla okno <a href="settings_network_mysqlservers_add.php">Właściwości serwera baz danych</a>.




<a name="dbtree_tablename"></a>
<h3> Nazwa tabeli w bazie danych</h3>
Kolejnym elementem drzewka jest nazwa tabeli w bazie danych. Na drzewku umieszczone są wszystkie nazwy tabel istniejące w bazie danych. Każda taka gałąź posiada własne menu podręczne zawierające polecenia obsługi tej tabeli.

<p>Spośród wszystkich tabel, jedna może być aktywna, co oznacza, że jej zawartość i struktura będą przedstawiane w dolnej części zakładki "Inspektor MySQL". Aktywna tabela wyróżniona jest pogrubieniem jej nazwy. Aby "aktywować" tabelę należy dwukliknąć na jej nazwie. Innym sposobem jest wybranie jej nazwy z listy <a href="#ulubione">Ulubionych tabeli i zapytań</a>.</p>

<p><b>Pokaż zawartość tabeli</b><br />
Ustawia bieżąca tabelę jako aktywną i przełącza dolną część zakładki na widok <a href="#table_content">zawartości tabeli</a>. Aby jeszcze szybciej wykonać to polecenie, po prostu kliknij na nazwie tabeli trzymając jednocześnie klawisz <tt>Alt</tt> (lewy).

<p><b>Pokaż strukturę tabeli</b><br />
Ustawia bieżąca tabelę jako aktywną i przełącza dolną część zakładki na widok <a href="#table_structure">Struktura tabeli</a>. Aby jeszcze szybciej wykonać to polecenie, po prostu kliknij na nazwie tabeli trzymając jednocześnie klawisz <tt>Ctrl</tt>.

<p><b>Kreator zapytania SQL</b><br />
Otwiera <a href="tool_mysql_query_creator.php">Kreator zapytania SQL</a> z wybraną domyślnie tabelą, która została kliknięta w celu wyświetlania menu podręcznego.

<p><b> Eksportuj zawartość</b><br />
Uruchamia <a href="tool_mysql_export_tables.php">Kreator eksportu z bazy danych</a>, który umożliwia wygenerowanie gotowego dokumentu na podstawie danych pobranych z bazy. Domyślnie będzie ustawiony eksport danych z tabeli, która została kliknięta.

<p><b>Polecenia administracyjne</b><br />
Wyświetla podmenu zawierąjące polecenia następujących operacji do wykonania na zaznaczonej tabeli:
<ul>
   <li>Optymalizuj tabelę (realizuje zapytanie <tt>OPTIMIZE TABLE nazwa_tabeli</tt>)</li>
   <li>Analizuj tabelę (realizuje zapytanie <tt>ANALYZE TABLE nazwa_tabeli</tt>)</li>
   <li>Sprawdź błędy tabeli (realizuje zapytanie <tt>CHECK TABLE nazwa_tabeli</tt>)</li>
   <li>Optymalizuj tabelę (realizuje zapytanie <tt>RAPAIR TABLE nazwa_tabeli</tt>)</li>
   <li>Przeładuj tabelę (realizuje zapytanie <tt>FLUSH TABLE nazwa_tabeli</tt>)</li>
</ul>
Wynik działania poleceń wyświetlony może zostać w inspektorze zawartości tabeli.
</p>




<p><b> Wklej nazwę tabeli do edytora
</b><br />
   Wkleja nazwę tabeli do edytora w miejscu postawienia kursora. Dzięki temu nie musisz pamiętać dokładnych nazw wielu tabel z różnych baz danych, ani ich wpisywać podczas ręcznego tworzenia zapytań do bazy. Nazwę tabeli możesz również wkleić do zapytania przeciągając ją z drzewka do dokumentu, bądź wciskając Enter, gdy nazwa tabeli na drzewko posiada fokus.

<p><b>Dodaj tabelę do ulubionych</b><br />
Dodaje tabelę do listy <a href="#ulubione">Ulubionych tabel i zapytań do bazy</a>. Dzięki temu będziesz miał szybki dostęp do niej nawet w sytuacji, gdy w bazie będą dziesiątki czy setki tabel.

<p><b>Zmień nazwę tabeli</b><br>
Umożliwiaj zmianę nazwy tabeli

<p><b>Usuń tabelę</b><br>
Usuwa tabele i wszystkie zawarte w niej dane. Usunięcie poprzedzone jest oknem dialogowym potwierdzenia. Pamiętaj, że usuniętej tabeli i danych nie można już odzyskać!

<p><b>Wyczyść zawartość tabeli</b><br>
Usuwa dane z tabeli. Usunięcie poprzedzone jest oknem dialogowym potwierdzenia. Pamiętaj, że usuniętych danych nie można już odzyskać!

<p><b>Właściwości tabeli</b><br />
Wyświetla okno <a href="tool_mysql_table_properties.php" title="Właściwości tabeli">Właściwości tabeli</a>, w którym możesz edytować jej strukturę (dodawać i usuwać pola, tworzyć indeksy itd.).


<a name="dbtree_fieldname"></a>
<h3> Nazwa pola w tabeli</h3>
Ostatnimi, najbardziej zagnieżdżonymi elementami drzewka są gałęzie przedstawiające nazwy pól tabeli. Obok nazwy pola znajduje się ikonka oznaczająca:

<ul>
   <li> Zwykłe pole tabeli</li>
   <li> Pole tabeli z nałożonym indeksem typu PRIMARY</li>
</ul>


<p>W menu podręcznym pola tabeli znajdziesz tylko jedno polecenie:</p>

<p><b> Wklej nazwę pola do edytora
</b><br />
Wkleja nazwę pola tabeli do edytora w miejscu postawienia kursora. Dzięki temu nie musisz pamiętać dokładnych nazw wielu pól, ani ich wpisywać podczas ręcznego tworzenia zapytań do bazy. Nazwę pola tabeli możesz również wkleić do zapytania przeciągając je z drzewka do dokumentu, bądź wciskając Enter, gdy nazwa pola tabeli na drzewko posiada fokus..




<h3>Pasek przycisków </h3>

<p>Z prawej strony drzewka znajduje się pasek przycisków zawierający najczęściej używane polecenia:</p>




<p><b> Ustawienia serwerów baz danych</b><br />
Wyświetla okno <a href="settings_network_mysqlservers.php">Ustawienia serwerów baz danych</a>.


<p><b> Utwórz nową tabelę</b><br />
Wyświetla okno <a href="tool_mysql_table_properties.php">Utwórz nową tabelę</a>.

<p><b>Zmień nazwę tabeli</b><br>
Umożliwiaj zmianę nazwy tabeli

<p><b>Usuń tabelę</b><br>
Usuwa tabele i wszystkie zawarte w niej dane. Usunięcie poprzedzone jest oknem dialogowym potwierdzenia. Pamiętaj, że usuniętej tabeli i danych nie można już odzyskać!


<p><b>Odświeżenie listy tabel</b><br>
Odświeża listę tabel bieżącej bazy danych na drzewku. Polecenie to przydatne jest szczególnie w sytuacji, gdy zmiany w tabelach bazy danych zostały dokonane z pominięciem narzędzi Pająka.

<p><b>Pokaż zawartość tabeli</b><br />
Ustawia bieżąca tabelę jako aktywną i przełącza dolną część zakładki na widok <a href="#table_content">zawartości tabeli</a>.

<p><b>Pokaż strukturę tabeli</b><br />
Ustawia bieżąca tabelę jako aktywną i przełącza dolną część zakładki na widok <a href="#table_structure">Struktura tabeli</a>.

<p><b>Kreator zapytania SQL</b><br />
Otwiera <a href="tool_mysql_query_creator.php">Kreator zapytania SQL</a> z wybraną domyślnie tabelą, która została wskazana (podświetlona na niebiesko). Jeśli nie wskazałeś żadnej tabeli, wybrana zostanie tabela aktywna (pogrubiona).

<p><b> Wykonaj polecenie SQL</b><br />
Rozwija menu zawierające następujące polecenia:

<ul>
   <li><b> Wykonaj polecenie SQL</b><br />
   <li>Otwiera okienko <a href="tool_mysql_query.php" title="Wykonaj polecenie SQL">Wykonaj polecenie SQL</a> umożliwiające ręczne wprowadzenie własnego zapytania do bazy danych.
   <li><b>Wykonaj polecenia SQL z bieżącego dokumentu</b><br />
   <li>Wykonuje zapytanie SQL z bieżącego dokumentu otwartego w edytorze.
   <li><b>Wykonaj polecenia SQL z pliku</b><br />
   <li>Otwiera okienko w celu wybrania pliku z zapytaniami SQL przeznaczonymi do wykonania.
</ul>

<p><b> Eksportuj zawartość</b><br />
Uruchamia <a href="tool_mysql_export_tables.php">Kreator eksportu z bazy danych</a>, który umożliwia wygenerowanie gotowego dokumentu na podstawie danych pobranych z bazy.

<p><b>Pomoc do listy plików</b><br>
Ten przycisk wyświetla tę stronę pomocy.


<a name="table_structure"></a>
<h2>Szczegółowa Struktura tabeli</h2>

<p>W dolnej części zakładki umieszczony zostały dwie zakładki wyświetlające zamiennie strukturę bieżącej (aktywnej) tabeli, bądź jej zawartość. Wyboru, która z zakładek ma być aktualnie wyświetlana dokonasz za pomocą przycisków u dołu.</p>

<p>Aby szybko wyświetlić inspektora struktury wybranej tabeli możesz kliknąć jej nazwę na drzewie powyżej, trzymając jednocześnie wciśnięty przycisk <tt>Ctrl</tt>. Zwartość tabeli wyświetlisz klikając na niej z wciśniętym jednocześnie klawiszem <tt>Alt</tt> (lewy).</p>

<p>Inspektor struktury tabeli zawiera podstawowe dane na temat pól wchodzących w jej skład. Są one przedstawione w czterech kolumnach:</p>

<p><b>Nazwa pola</b><br />
Nazwa pola w tabeli

<p><b>Typ danych</b><br /> Przedstawia typ danych, jaki może być przechowywany w danym polu, np. <tt>varchar(100)</tt>, <tt>enum('y', 'n')</tt>

<p><b>Puste</b><br />
Wyświetla informację, czy pole może być pusta (zawierać wartość <tt>NULL</tt>)

<p><b>Domyślna wartość </b><br />
Wyświetla domyślną wartość, jak będzie wprowadzana do tego pola.

<p><b>Inne </b><br />
Wyświetla inne informacje o polu tabeli, np. czy ma włączoną opcję 'auto_increment'.

<p>Inspektor struktury tabeli posiada menu podręczne  zawierające trzy polecenia:</p>

<p><b> Wklej nazwę pola do edytora
</b><br />
Wkleja do edytora nazwę pola, na którym kliknąłeś by wyświetlić menu (pole to w momencie wyświetlania menu zostaje wyróżnione kolorem niebieskim).

<p><b>Odśwież</b><br>
Odświeża widok inspektora pobierając ponownie z bazy danych informacje na temat tabeli.

<p><b>Edytuj strukturę tabeli</b><br />
Wyświetla okno <a href="tool_mysql_table_properties.php" title="Właściwości tabeli">Właściwości tabeli</a>, w którym możesz edytować jej strukturę (dodawać i usuwać pola, tworzyć indeksy itd.).

<p>Okno <a href="tool_mysql_table_properties.php" title="Właściwości tabeli">Właściwości tabeli</a> możesz otworzyć również za pomoca dwukliku w dowolnym miejscu inspektora struktury tabeli.</p>




<a name="table_content"></a>
<h2>Zawartość tabeli</h2>

<p>Drugi zakładka wyświetla zawartość bieżącej tabeli (wyróżnionej pogrubieniem na drzewku powyżej). Jest budowa jest bardziej skomplikowana - posiada dwa paski przycisków umożliwiające sterowanie zawartością inspektora, bogatsze jest też menu podręczne dla klikniętego rekordu.</p>

<p>Dane wyświetlane są w postaci tabelki, gdzie każdy wiersz stanowi kolejny rekord, zaś zaś w poszczególne pola wyświetlane są jako kolumny. </p>

<p>Rekordy pobierane z bazy można posortować klikając lewym klawiszem myszy na nagłówku z nazwą pola. Kliknięcie prawym klawiszem na na nagłówku dowolnego pola wyświetli listę wszystkich pól tabeli, co pozwala wybrać pole, według którego ma się odbywać sortowanie.</p>

<p>Zakładka posiada dwa paski przycisków. Pierwszy - mini pasek - posiada polecenia umożliwiające określenie zakresu danych, jakie będą wyświetlane. Umieszczono na nim przyciski:</p>

<p><b> Wyświetl wszystkie rekordy</b><br />
Kliknij ten przycisk, by wyświetlić wszystkie rekordy z bieżącej tabeli.

<p><b> Wyświetl 20 rekordów</b><br />
Kliknij ten przycisk, by wyświetlić grupę 20 rekordów z bieżącej tabeli. Uaktywnią się jednocześnie pokazane niżej przyciski służące do poruszania się po kolejnych grupach rekordów:

<p><b> Przejdź do pierwszego rekordu</b><br />

<p><b> Poprzednie 20 rekordów</b><br />

<p><b> Następne 20 rekordów</b><br />

<p>Zakładka posiada własny pasek stanu, na którym wyświetlane są informacje o bieżącym widoku, wykonanym zapytaniu jak na przykład nazwę tabeli, liczbę wyświetlanych rekordów itp. </p>


<p>Wyświetlanie danych, to jednak nie wszystko, co można zrobić za pomocą tej zakładki. Dane można również dodawać, edytować i usuwać. Umożliwiają to przyciski zebrane na drugim pasku położonym z prwej strony.</p>
<p>Edytowanie istniejących danych jest bardzo proste. Wystarczy postawić kursor na wybranym polu zacząć pisać. Dane istniejące w tym polu zostaną usunięte i zastąpione nowymi. Jeśli nie chcesz usuwać danych, a jedynie je zmienić, po wskazaniu pola kliknij na nim powtórnie. Umożliwi to bezpośrednią edycję jego zawartości. Alternatywnym sposobem umożliwienia zmiany treści pola jest wciśnięcie klawisza F2 po wskazaniu pola. Możesz też skorzystać z edytorów własności, które ułatwiają edycję bardziej rozbudowanych pól, np. pola TEXT lub TIMESTAMP. Po prostu wybierz pole i kliknij przycisk oznaczony wielokropkiem, który pojawi się wewnątrz pola.</p>
<p>Aby wprowadzić nowy rekord, możesz skorzystać z przycisku z plusem na pasku po prawej. I tu znów jest alternatywa. Jeśli wskazany jest ostatni rekord, możesz szybko utworzyć nowy wciskając na klawiaturze klawisz ze strzałką w dół. Jeszcze szybciej zrobisz to wciskając klawisz <tt>Insert</tt>.</p>
<p>Aby usunąć rekord, wystarczy wcisnąć na klawiaturze Delete, bądź skorzystać z przycisku z minusikiem na pasku po prawej.</p>
<p>Wstępnie zmiany wprowadzane są wyłącznie lokalnie na inspektorze. Po edycji rekordów, należy zatwierdzić zmiany, co spowoduje ich zapisanie do bazy danych, bądź je odrzucić. Możliwe jest również cofnięcie ostatniej operacji wykonanej lokalnie. Odpowiednie przyciski umieszczono na pasku po prawej stronie:</p>

<p><b>Zatwierdź zamiany</b><br />
Kliknij, aby zatwierdzić zmiany i wprowadzić je do bazy.

<p><b>Anuluj zmiany</b><br />
Kliknij, aby anulować zmiany wprowadzone lokalnie. Przycisk aktywny jest do momentu wprowadzenia zmian do bazy danych.

<p><b>Dodaj rekord</b><br />
Kliknij, aby dodać lokalnie nowy rekord.

<p><b>Usuń rekord</b><br />
Kliknij, aby usunąć lokalnie wskazany rekord.

<p><b>Cofnij ostatnią operację</b><br />
Kliknij, aby cofnąć ostatnią operację przeprowadzoną lokalnie. Przycisk aktywny jest do momentu wprowadzenia zmian do bazy danych.

<p><b>Odśwież widok</b><br />
Kliknij, aby odświeżyć widok zawartości bazy danych. Jeśli wprowadzono lokalnie jakieś zmiany, wyświetlone zostanie pytane o ich zapis do bazy, bądź porzucenie.

<p><b>Dodaj do Ulubionych tabel i zapytań</b><br />
Kliknij aby dodać bieżąca tabele do listy <a href="#ulubione">Ulubionych tabel i zapytań</a>.

<p><b>Lista Ulubionych tabel i zapytań</b><br />
kliknij, aby wyświetlić listę <a href="#ulubione">Ulubionych tabel i zapytań</a>.

<p><b>Usun z Ulubionych tabel i zapytań</b><br />
kliknij, aby wyświetlić listę <a href="#ulubione">Ulubionych tabel i zapytań</a> w celu wybrania z niej pozycji do usunięcia.

<p><b>Sposób sortowania</b><br>
Kliknij, aby wybrać sposób sortowania. Wyświetli się lista o zawartości identycznej, jak w menu podręcznym po kliknięciu na nagłówek pola.

<p><b> Eksportuj zawartość</b><br />
Kliknij, aby uruchomić <a href="tool_mysql_export_tables.php">Kreatora eksportu z bazy danych</a>. Domyślnie ustawiony będzie eksport bieżącej tabeli.

<p><b> Wstaw bieżące zapytanie do edytora</b><br />
Kliknij, aby wkleić do edytora zapytanie użyte do wyświetlenia bieżącej listy danych. Możesz wybrac format wklejania zapytania według szablonów zdefiniowanych w oknie <a href="settings_network_mysqlservers.php#sql_insert_templ">Ustawienia programu - Serwery baz danych MySQL</a>


<a name="ulubione"></a>
<h2>Ulubione tabele i zapytania</h2>

<p>W bazie danych może być wiele, nawet setki tabel. ich ciągłe wyszukiwanie na drzewku może więc stać się irytujące. Dlatego powstałą lista "Ulubione tabele i zapytania", która umożliwia błyskawiczne dotarcie do wybranych elementów. </p>
<p>Lista zbudowana jest z dwóch grup. W górnej części znajdują się ulubione tabele (o ile zostały dodane), w dolnej ulubione zapytania, które stworzono za pomocą <a href="tool_mysql_query_creator.php">Kreatora zapytania SQL</a>.</p>
<p>Po kliknięciu tabeli, zostaje ona ustawiona jako bieżąca, a jej zawartość zostanie wyświetlona w inspektorze według bieżących ustawień (tzn. jeśli wybrana jest na mini pasku opcja pokazywania tylko 20 rekordów, taka właśnie ich liczba zostanie pobrana z bazy). Natomiast kliknięcie ulubionego zapytania spowoduje jego wykonanie i wyświetlenie wyniku w zakładce "Zawartość".</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="coding_mysql.php">Wspomaganie dla MySQL w Pająku</a></li>
   <li><a href="tool_mysql_table_index.php">Właściwości indeksu tabeli MySQL</a></li>
   <li><a href="tool_mysql_table_field.php">Właściwości pola tabeli MySQL</a></li>
   <li><a href="settings_network_mysqlservers_add.php">Właściwości serwera MySQL</a></li>
   <li><a href="tool_mysql_export_tables.php">Eksport danych z bazy</a></li>
   <li><a href="tool_mysql_query.php">Wykonaj zapytanie SQL</a></li>
   <li><a href="tool_mysql_query_creator.php">Kreator zapytania SQL</a></li>
   <li><a href="settings_network_mysqlservers.php">Ustawienia programu - Ustawienia serwerów baz danych MySQL</a></li>
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
