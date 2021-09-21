
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Otwieranie i edycja dokumentów bezpośrednio na serwerze</title>

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
<h1>Otwieranie i edycja dokumentów bezpośrednio na serwerze</h1>



<!-- nagłowek podtematu -->
<p>Pająk umożliwia zdalne otwieranie, edycję i zapis dokumentów. Oznacza to, iż możliwe jest dokonanie zmian bezpośrednio w plikach serwisu internetowego. Dokument taki można również przeglądać w zakładce Przeglądanie. Wszystko to wykonuje się identycznie jak dla plików znajdujących się na lokalnym dysku twardym. </p>
<p>Znacząco może to przyśpieszyć pracę, gdy trzeba np. szybko poprawić coś w serwisie, a na komputerze nie ma lokalnej kopii, bądź jest ona nieaktualna (np. przy pracy grupowej).</p>




<h2>Przygotowanie do pracy online</h2>

Aby móc edytować dokumenty online, trzeba skonfigurować połączenie ze zdalnym serwerem w zakładce <a href="main_tabs_myftpservers.php">Moje serwery</a>. Jeśli masz dla danego serwera ustawione <a href="settings_network_ftpservers_add.php">Właściwości serwera</a>, to aby otwierać i zapisywać zmiany w zdalnych dokumentach, nie musisz w nim nic zmieniać. 

<p>Aby móc przeglądać dokument umieszczony na serwerze za pomocą protokołu FTP, należy ustawić <a href="settings_network_ftpservers_add_map.php">mapowanie ścieżki na serwerze FTP na adres URL</a>. Mapowanie to określa adres URL, jaki należy użyć w celu przeglądania edytowanego pliku.</p>

<p>Z uwagi na fakt, iż  WebDAV jest rozszerzeniem protokołu HTTP, w przypadku korzystania z tego protokołu nie jest wymagane ustawiane żadnego mapowania. Po prostu adres serwera WebDAV jest jednocześnie adresem, pod którym dostępny jest dany dokument.</p>



<h2>Edycja pliku online</h2>

<p>Po ustawieniu wszystkich opcji możesz edytować pliki na serwerze za pomocą zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a> podobnie jak pliki z dysku lokalnego za pomocą zakładki <a href="main_tabs_myservices.php">Moje serwisy</a>. Aby otworzyć plik skorzystaj z polecenia w pasku narzędzi z prawej strony zakładki.  Dalsza edycja, zapis itd. przebiega identycznie, jak w wypadku edycji pliku lokalnego.</p>

Pliki otwarte online oznaczone są, dla odróżnienia od plików otwartych lokalnie, kulką z niebieską strzałką:

<ul>
	<li> oznacza plik, który nie wymaga zapisu (nowy, bądź zapisany po dokonaniu zmian)</li>
	<li> oznacza plik, w którym wprowadzono zmiany, po których nie został on zapisany</li>
</ul>

<p>Dodatkowo na pasku tytułowym programu wyświetlana jest 'Przyjazna nazwa' serwera, z którego otwarto dokument.</p>

<p><b>Edycja pliku zablokowanego</b><br />
Jeśli spróbujesz otworzyć do edycji plik <a href="main_tabs_myftpservers_lockfile.php">zablokowany</a> przez innego użytkownika, wyświetlony zostanie odpowiedni komunikat. Taki plik nie może zostać zapisany bez uprzedniego usunięcia blokady. Zabezpiecza to przed napisaniem zmian, podczas gdy dany plik jest edytowany przez innego użytkownika.</p>

<p><b>Ostrzeżenie przed nadpisaniem pliku otwartego zdalnie</b><br>
Włącz tę opcję, aby Pająk ostrzegał przed próba napisania pliku na serwerze FTP lub WebDAV, który jednocześnie masz otwarty zdalnie do edycji w Pająku.


<h2>Wstawianie odnośników</h2>
<p>Edytując plik zdalny możesz wstawiać do niego odnośniki. W celu ułatwienia wstawiania odnośników do plików serwisu, w którym edytowany plik się znajduje, stworzony został mechanizm pozwalający na wybieranie pliku z lokalnego serwisu. Mechanizm ten korzysta z ustawień <a href="service_tool_synchronization.php">mapowania dla synchronizacji serwisu</a>. </p>

<p>Mechanizm działa w ten sposób, że sprawdza położenie pliku edytowanego zdalnie na serwerze i położenie pliku, do którego wstawiany jest odnośnik w serwisie lokalnym. Następnie, wykorzystując mapowanie synchronizacji, ustala względną ścieżkę do tego pliku na serwerze i wstawia ją do dokumentu.</p>

<p><b>Uwaga!</b><br />
Ścieżka do pliku docelowego jest wstawiana bez sprawdzenia, czy plik ten istnieje na serwerze. Należy go tam wysłać, by odnośnik działał prawidłowo.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
	<li><a href="settings_network_ftpservers_add_map.php">Mapowanie ścieżki na serwerze FTP na adres URL</a>
	<li><a href="main_tabs_myftpservers.php">Zakładka Moje serwery</a>
	<li><a href="tool_open_remote.php">Narzędzia - Otwarcie strony z Sieci</a>
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