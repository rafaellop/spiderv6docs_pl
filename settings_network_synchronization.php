<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Synchronizacja serwisów</title>

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
<h1>Ustawienia programu - Kolejka plików i Synchronizacja serwisów</h1>


<h2>Kolejka plików</h2>

<p>Ta grupa ustawień dotyczy sposobu działania <a href="down_publishing_ftpqueue.php">kolejki plików</a>. Za pomocą znajdujących się tutaj opcji możesz określić:

<p><b>Automatycznie rozpoczynaj wykonywanie kolejki gdy online</b><br>
Zaznacz ten przełącznik jeśli chcesz, aby podczas pracy w <a href="main_tabs_myftpservers_on-offline.php">trybie online</a>, kolejka była wykonywana automatycznie zaraz po dodaniu do niej dowolnej operacji.  Pozwala to korzystać z listy plików prawie w locie.

<p><b>Pytaj o rozpoczęcie wykonywania kolejki w trybie offline</b><br>
Zaznacz tę opcję jeśli chcesz, aby program pytał o rozpoczęcie wykonywania kolejki podczas pracy w <a href="main_tabs_myftpservers_on-offline.php">trybie offline</a> w momencie gdy jakiś element jest dodawany do bieżącej kolejki.

<p><b>Ostrzegaj przed nadpisaniem pliku otwartego zdalnie</b><br>
Włącz tę opcję, aby Pająk ostrzegał przed próba napisania pliku na serwerze, który jednocześnie masz otwarty zdalnie do edycji.

<p><b>Ostrzegaj przed modyfikacjami plików znajdujących się w kolejce</b><br>
Kolejka wykonywana jest na życzenie użytkownika. Jeśli dodasz jakieś pliki do kolejki, ale nie rozpoczniesz jej wykonywania i będziesz kontynuował bezpośrednią pracę na serwerze FTP, to może się zdarzyć, że usuniesz plik, który np. w kolejce jest przeznaczony do pobrania. Włączając tę opcję zabezpieczasz się przed taką sytuacją, bowiem program będzie ostrzegał w momencie, gdy kolejka zawiera pliki, na których próbujesz dokonać jakichś modyfikacji.

<p><b>Przywołuj kolejkę na wierzch po dodaniu operacji</b><br>
Zaznacz ten przełącznik jeśli chcesz, aby kolejka była pokazywana po każdorazowym dodaniu do niej jakiejś operacji.

<p><b>Pokazuj komunikat po dodaniu do kolejki w trybie offline</b><br>
Zaznacz tę opcję, jeśli po każdorazowym dodaniu elementy do kolejki plików ma zostać wyświetlony komunikat.

<p><b>Nie przerywaj wykonywania kolejki po wystąpieniu błędu</b><br />
Jeśli zaznaczysz tę opcję, zadania przy których wystąpił błąd zostaną przeniesione na koniec kolejki, baz wyświetlania komunikatu, po czym program wznowi wykonywanie kolejki od następnej pozycji. Po wykonaniu całej kolejki pozostaną w niej tylko pozycje, przy których wystąpił błąd. Jeśli opcja będzie niezaznaczona, po wystąpieniu błędu zostanie wyświetlony komunikat, zaś program będzie oczekiwał na reakcję użytkownika.

<p><b>Automatycznie wznawiaj zerwane połączenia</b><br />
Zaznacz ten przełącznik, jeśli po zerwaniu połączenia z serwerem w trakcie wykonywania kolejki ma zostać ono nawiązane ponownie.

<p><b>Przy dodawaniu plików i katalogów do kolejki dodawaj również powiązane pliki *.add</b><br />
Zaznacz tę opcję, jeśli razem z właściwymi dokumentami na serwer mają być przesyłane pliki <a href="main_editor_addfiles.php">dodatkowych informacji o dokumencie</a> (*.add).

<p><b>Przesyłaj pliki w sposób bezpieczny</b><br />
Zaznacz tę opcję jeśli chcesz skorzystać z bezpiecznego wysyłania plików na serwer oraz pobierania plików z serwera. Bezpieczne przesyłanie polega na wgrywaniu/pobieraniu pliku na serwer/z serwera pod tymczasową nazwą i dopiero po zakończeniu tej operacji zmieniana jest nazwa pliku na właściwą. Ta funkcja zabezpiecza przed utratą plików na serwerze np. wskutek zerwania połączenia oraz przed nadgraniem starej kopii lokalnej pliku nową, nie do końca pobraną z serwera kopią.

<p><b>Kolejka plików do publikacji osobna dla każdego serwisu</b><br />
Zaznacz tę opcję jeśli program ma pamiętać kolejkę plików osobno dla każdego serwisu i automatycznie ładować ją przy zmianie serwisu na inny. Gdy opcja ta jest zaznaczona, a kolejka wykonuje się, nie można przełączać serwisów.

<p><b>Ostrzegaj o wielkości liter w odsyłaczach dodawanych dokumentów</b><br />
Zaznacz tę opcję jeśli przy dodawaniu plików typu "Dokument HTML" ma być przeprowadzana weryfikacja odsyłaczy zawartych w dokumencie pod kątem ich poprawności (wielkość liter, odsyłacz do pliku na lokalnym dysku, użycie backslash zamiast slash w ścieżkach)




<h2>Sprawdzanie aktualności plików podczas synchronizacji</h2>







<p>W tej kategorii znajdziesz kilka ustawień ustawienia odpowiedzialnych za funkcję automatycznej synchronizacji zawartości serwisu lokalnego ze zdalnym serwerem. Synchronizacja opisana została szerzej w temacie poświęconym <a href="service_tool_synchronization.php">Synchronizacji serwisu</a> oraz <a href="down_publishing_syncreport.php">kolejce synchronizacji na dolnym panelu</a>. W tej kategorii znajduje się dosłownie parę ustawień. Więcej ustawień możesz znaleźć we wspomnianym wyżej okienku.

<p><b>Wysyłaj pliki na serwer w sposób bezpieczny</b><br>
Zaznacz tę opcję jeśli chcesz skorzystać z bezpiecznego wysyłania plików na serwer. Bezpieczne wysyłanie polega na wgrywaniu pliku na serwer pod tymczasową nazwą i dopiero po zakończeniu tej operacji zmieniana jest nazwa pliku na właściwą. Ta funkcja zabezpiecza przed utratą plików na serwerze np. wskutek zerwania połączenia. Nie myl tej funkcji z możliwością nawiązywania bezpiecznych połączeń z serwerami FTP (za pomocą SSL/TSL) i WebDAV (HTTPS)!

<p><b>Nie zatrzymuj synchronizacji, gdy wystąpi błąd</b><br />
Zaznacz tę opcję, by synchronizacja nie została wstrzymana w przypadku wystąpienia błędów. Sytuacja taka mogłaby mieć miejsce, np. w przypadku, gdy w czasie między utworzeniem listy synchronizacji, a zsynchronizowaniem serwisu i serwera usunięto z dysku jakiś plik istniejący na liście.

<p><b><i>Dodatkowe minuty wyrównujące różnicę czasu</i></b><br>
<i>W wersji 5.6.2 opcję tę przeniesiono do okna <a href="settings_network_ftpservers_add.php">Właściwości serwera</a>, dzięki czemu możliwe jest wyrównywanie różnicy czasu odrębnie dla każdego serwera</i>.


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="settings_network.php#settingslistnetwork">Inne ustawienia sieci</a>
        <li><a href="service_tool_synchronization.php">Synchronizacja serwisów</a>
        <li><a href="down_publishing_ftpqueue.php">Kolejka plików FTP i WebDAV</a></li>
        <li><a href="down_publishing_syncreport.php">Kolejka synchronizacji</a></li>
        <li><a href="network_publishing_general.php">Publikowanie w Pająku</a>
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