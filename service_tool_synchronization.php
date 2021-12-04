
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Serwisy - Synchronizacja serwisu</title>

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

<!-- nagłowek głowny tematu -->
<h1>Serwisy - Synchronizacja serwisu</h1>





<p>Synchronizacja serwisu to funkcja pozwalająca na automatyczne uzgodnienie zawartości folderu na dysku lokalnym, będącego <a href="services_general.php">serwisem Pająka</a> z zawartością wybranego folderu zdalnego serwera zdefiniowanego w Pająku w <a href="settings_network_ftpservers.php">ustawieniach serwerów FTP i WebDAV</a>. 

<p>Aby zsychronizować ze sobą zawartość serwisu lokalnego z zawartością serwera, należy skorzystać z opisanego niżej okna "Synchronizacja serwisu", które otworzysz za pomocą polecenia z <a href="main_menu_services.php">menu Serwisy</a> / <a href="service_properites.php">Własności serwisu</a> / Synchronizacja serwisu lub z zakładki <a href="main_tabs_myservices.php">Moje serwisy</a>. Ikona polecenia przedstawiona została powyżej. W wyniku działania tego narzędzia na <a href="down_panel.php">dolnym panelu</a> w zakładce <a href="down_publishing_syncreport.php">Operacje publikowania</a> zostanie utworzona lista plików, jakie należy wysłać na serwer, bądź z niego pobrać (w zależności od kierunku synchronizacji, jaki ustawisz). </p>

<p>Okno synchronizacji składa się z dwóch zakładek: Ustawienia synchronizacji oraz Synchronizowane elementy.

<h2>Zakładka Ustawienia synchronizacji</h2>

<h3>Wybór serwera FTP/WebDAV</h3>

<p>Okienko synchronizacji pozwala na wybranie <a href="service_properites.php#service_properties_mappings">mapowania</a>, które będzie używane przy funkcji synchronizacji (lista w grupie Serwer FTP/WebDAV). Możesz bowiem jeden serwis synchronizować z różnymi serwerami FTP i WebDAV, a także różne foldery lokalne serwisu z różnymi folderami zdalnymi serwera.

<p>Wybrane tutaj mapowanie określa z jakiego folderu na dysku Twojego komputera do jakiego folderu na wybranym serwerze będą wysyłane pliki.</p>

<h3>Kierunek synchronizacji</h3>

<p>Zawartość serwisu możesz synchronizować dwukierunkowo, tzn. albo lokalny serwis ze zdalnym serwerem (wysyłanie plików na serwer) albo zdalny serwis z lokalnym serwisem (pobieranie plików z serwera).<br>

<p><b>lokalny-&gt;zdalny</b> - pozwala na publikację plików, które są nowe w serwisie lokalnym i nieistniejące na serwerze zdalnym lub są nowsze niż te same pliki na serwerze zdalnym. Dzięki temu możesz łatwo utrzymywać zgodność zawartości serwera zdalnego i lokalnego serwisu.

<p><b>zdalny-&gt;lokalny</b> - pozwala na pobieranie plików, które są nowe na serwerze zdalnym (np. wgrane przez kogoś innego) i nieistniejące w serwisie lokalnym lub są nowsze niż te same pliki w serwisie na dysku lokalnym. Dzięki temu możesz szybko zaktualizować zawartość swojej lokalnej kopii serwisu z tym co znajduje się w sieci. <b>Uwaga! Podczas synchronizacji zdalny-&gt;lokalny nie są synchronizowane pliki zablokowane przez użytkowników!</b>

<h3>Ustawienia</h3>

<p>Grupa przełączników o nazwie Ustawienia pozwala na określenie zachowania funkcji synchronizacji podczas tworzenia listy elementów do synchronizacji oraz samej synchronizacji. Dostępne tutaj ustawienia zmieniają się w zależności od wybranego kierunku synchronizacji i mogą dotyczyć zamiennie serwisu lokalnego lub zdalnego serwera przy czym ich znaczenie pozostaje mniej więcej to samo. Opiszemy tutaj przełączniki w trybie lokalny-&gt;zdalny:

<p><b>Usuwaj zdalne pliki i foldery nie istniejące w lokalnej kopii serwisu</b><br>
Włączenie tej opcji powoduje, że pliki (lub foldery) zdalne, które istnieją na serwerze, a nie mają odpowiednich w serwisie na dysku lokalnym, będą usuwane. <b>UWAGA! Włącznie tej opcji jest niebezpieczne i zaleca się stosowanie jej wyłącznie po dużym namyśle!</b>

<p><b>Zastępuj zdalne lokalnymi gdy data modyfikacji podobna</b><br>
W przypadku serwerów FTP lub WebDAV czasami nie można określić bardzo dokładnej daty i czasu. Ta opcja pozwala przyjąć pewien margines błędu i synchronizować nawet pliki o nieznacznie różnej dacie. <b>Zaleca się ostrożne korzystanie z tej funkcji.</b>

<p><b>Zastępuj zdalne lokalnymi, gdy różne rozmiary a data modyfikacji podobna sama</b><br>
W przypadku serwerów FTP lub WebDAV czasami nie można określić bardzo dokładnej daty i czasu. Ta opcja pozwala przyjąć pewien margines błędu i synchronizować nawet pliki o nieznacznie różnej dacie, ale pod warunkiem, że ich rozmiar jest różny.

<p><b>Wymuś nadpisywanie plików zdalnych mimo gdy data wskazuje, że plik lokalny jest starszy</b><br>
W przypadku serwerów FTP lub WebDAV czasami nie można określić bardzo dokładnej daty i czasu. Ta opcja powoduje zastępowanie zdalnych plików lokalnymi nawet gdy data modyfikacji pliku zdalnego wskazuje, że jest on nowszy od lokalnego. <b>Zaleca się wyjątkowo ostrożne korzystanie z tej funkcji.</b>

<p><b>Zmieniaj lokalną datę modyfikacji na zdalną</b><br>
Zaznaczając to pole spowodujesz, że podczas synchronizacji pliki lokalne otrzymają tę sama datę modyfikacji, jaką posiadają pliki zdalne.

<a name="pomijanie_rozszerzen"></a>
<h3>Pomijanie plików o wybranych rozszerzeniach</h3>

<p>W tej grupie znajduje się pole, w którym możesz wpisać rozszerzenie plików, który powinny być pomijane podczas synchronizacji. Rozszerzenia wpisuj w postaci np. <tt>*.add;*.tmp</tt>. Na <a href="#service_synchro_syncelements">drugiej zakładce tego okna</a> możesz dodatkowo wskazać, które konkretnie pliki lub foldery mają być synchronizowane lub pomijane.

<p><b>Pomijaj pliki kopii zapasowych</b><br />
Zaznacz ten przełącznik, aby program pomijał pliki kopii zapasowych zarówno z rozszerzeniem *.BAK, jak i o nazwie zbudowanej wg schematu BAK.* (nowsza postać nazwy plików kopii zapasowych tworzonych przez Pająka).

<h3>Oczyszczanie serwisu</h3>

<p>Przed przeprowadzeniem synchronizacji serwisu zaleca się <a href="down_integrity.php">oczyszczenie serwisu lokalnego</a>. Funkcje oczyszczania serwisu opisane zostały w osobnym temacie. Jeśli chcesz wywołać funkcję oczyszczania serwisu użyj przycisku znajdującego się w tej grupie i korzystając z przypisanego do niego menu wybierz zakres oczyszczania serwisu.

<a name="service_synchro_syncelements" ></a>
<h2>Zakładka Synchronizowane elementy</h2>

<h3>Wybór elementów do synchronizacji</h3>

<p>Za pomocą grupy o nazwie "Synchronizowane elementy" i znajdującej się tam listy możesz wskazać jakie pliki lub foldery mają podlegać synchronizacji. Możesz wybrać:

<p><b>Cały serwis</b><br>
Włącz ten przełącznik jeśli chcesz synchronizować cały serwis zgodnie z ustawieniami mapowania. Ta opcja jest domyślnie włączona.

<p><b>Tylko wskazane pliki lub foldery</b><br>
Włącz ten przełącznik jeśli chcesz synchronizować tylko wybrane pliki lub foldery serwisu. Pliki i foldery dodaj do listy znajdującej się poniżej. Pliki i foldery nie wchodzące w skład tej listy zostaną pominięte.


<h3>Wykluczanie z synchronizacji</h3>

<p>Za pomocą grupy o nazwie "Synchronizując pomijaj pliki/foldery" i znajdującej się tam listy możesz wskazać jakie pliki lub foldery mają bezwarunkowo <u>nie podlegać</u> synchronizacji. 

<p>Poniżej listy znajduje się przełącznik <b>Pomijaj pliki o statusie dokumentu niższym, niż wybrany poniżej</b>, którego włączenie pozwala na wybór statusu dokumentu, poniżej którego pliki są ignorowane.</p>

<h1>Generowanie listy synchronizacji</h1>

<p>Po określeniu wszystkich parametrów synchronizacji kliknij przycisk <b>Twórz listę</b>, aby program połączył się z siecią Internet i wybranym serwerem synchronizacji, a następnie utworzył listę elementów, które wymagają synchronizacji. Tworzenie listy w zależności od rozmiarów serwisu możesz potrwać dłuższą chwilę. Konieczne jest bowiem przejrzenie wszystkich katalogów znajdujących się na serwerze i porównanie ich z lokalną zawartością. Po zakończeniu tworzenia listy elementów do synchronizacji zostanie ona wstawiona na <a href="down_panel.php">dolny panel wyników</a> na zakładkę <a href="down_publishing_syncreport.php">Operacje publikowania</a>. Teraz możesz zaznaczyć wybrane pliki i przyciskiem "Rozpocznij synchronizację" () rozpocząć wykonywanie zaplanowanego zadania synchronizacji.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="services_general.php">O serwisach ogólnie</a>
	<li><a href="service_properites.php#service_properties_mappings">Ustawienia mapowania serwisu</a>
	<li><a href="down_publishing_syncreport.php">Raport synchronizacji</a>
	<li><a href="down_integrity.php">Oczyszczanie serwisu</a>
	<li><a href="settings_network_synchronization.php">Ustawienia programu - Synchronizacja serwisów</a>
	<li><a href="settings_network_ftpservers.php">Ustawienia programu - Dodawanie serwerów FTP i WebDAV</a>
	<li><a href="main_tabs_myservices.php">Zakładka Moje serwisy</a>
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