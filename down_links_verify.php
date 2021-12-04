<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Dolny panel wyników - Sprawdzanie poprawności odsyłaczy</title>

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
<h1>Dolny panel wyników - Sprawdzanie poprawności odsyłaczy</h1>

<!-- treść pomocy -->


<p>Narzędzie służy do sprawdzania poprawności odsyłaczy w dokumentach. Możliwe jest sprawdzanie aktualnie otwartego dokumentu, bądź wszystkich dokumentów w aktualnie otwartym Serwisie. Osobno sprawdzane są odnośniki zdalne do plików spoza serwisu (z uwagi na ewentualną konieczność połączenia z Internetem, co może bardzo wydłużyć proces weryfikacji).</p>

<p><b>Uwaga</b><br />
Nie jest możliwe sprawdzanie poprawności odsyłaczy w dokumentach edytowanych zdalnie (otwartych bezpośrednio z serwera)</p>

<p>Sprawdzane są łącza do:
<ul>
	<li>innych dokumentów HTML i podobnych, </li>
	<li>obrazków, </li>
	<li>dołączonych arkuszy CSS, dokumenty HTML, </li>
	<li>skryptów JavaScript, VBScript,</li>
	<li>obiektów osadzonych, jak np. aplety Javy, animacje Flash itp.</li>
   <li>a nawet plików dołączanych w skryptach typu server-side (np. za pomocą instrukcji <tt>include</tt> w jęz. PHP)!</li>
</ul></p>

<h2>Sprawdzanie poprawności odsyłaczy w bieżącym dokumencie</h2>

<p>Sprawdzanie odsyłaczy w bieżącym dokumencie można uruchomić na dwa sposoby:

<ul>
   <li>z <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_tools.php">Narzędzia</a> / <a href="main_menu_tools_verify.php">Weryfikacja kodu</a></li>
	<li>z poziomu zakładki Poprawność odsyłaczy - otwórz <a href="down_panel.php">dolny panel wyników</a> - kliknij przycisk "Weryfikacja odnośników w bieżącym dokumencie".</li>
</ul></p>

<p><b>Uwaga!</b><br />
Z uwagi na ewentualną konieczność połączenia z Internetem, co może bardzo wydłużyć proces weryfikacji, za pomocą tej opcji nie będą sprawdzane odnośniki zdalne (podane za pomocą bezwzględnego adresu, czyli wraz z domeną i protokołem). Możesz natomiast osobnym przyciskiem wywołać weryfikację zdalnych odsyłaczy.</p>

<h2>Sprawdzanie poprawności odsyłaczy w bieżącym Serwisie</h2>

<p>Sprawdzanie odsyłaczy w bieżącym Serwisie (wybranym na zakładce <a href="main_tabs_myservices.php">Moje serwisy</a>) obejmuje wszystkie dokumenty umieszczone w folderach należących do bieżącego Serwisu. Narzędzie można uruchomić za pomocą polecenia <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_services.php">Serwisy</a> / Weryfikacja odnośników.

<p><b>Uwaga!</b><br />
Z uwagi na ewentualną konieczność połączenia z Internetem, co może bardzo wydłużyć proces weryfikacji, za pomocą tej opcji nie będą sprawdzane odnośniki zdalne (podane za pomocą bezwzględnego adresu, czyli wraz z domeną i protokołem). Możesz natomiast osobnym przyciskiem wywołać weryfikację zdalnych odsyłaczy.</p>

<h2>Sprawdzanie poprawności zdalnych odnośników</h2>

<p>Sprawdzanie zdalnych odsyłaczy obejmuje wszystkie odnośniki, których adres jest adresem URL (z ang. <i>Universal Resource Locator</i> - uniwersalny identyfikator zasobu), składającym się z nazwy protokołu, adresu hosta (IP lub nazwa domenowa) oraz nazwy dokumentu. </p>

<p>Aby uruchomić weryfikację odnośników zdalnych, otwórz <a href="down_panel.php">dolny panel wyników</a>, a następnie kliknij przycisk "Weryfikacja zdalnych odnośników".</p>

<p><b>Uwaga!</b><br />
Sprawdzanie zdalnych odnośników może bardzo się wydłużyć jeśli sieć będzie bardzo obciążona, lub odpowiedzi od serwerów będą przychodziły z dużym opóźnieniem. Do uruchomienia tej opcji konieczne jest aktywne połączenie sieciowe.</p>

<h2>Wyniki sprawdzania poprawności odnośników</h2>

<p>Wyniki działania narzędzia prezentowane są na liście w zakładce Poprawność odsyłaczy na <a href="down_panel.php">dolnym panelu wyników</a>. Okno wyników zawiera sześć kolumn:</p>

<ul>
	<li>lewa kolumna - ikona z kulką informuje o typie komunikatu:<br />
		<table border="0">
			<tr>
				<td></td>
				<td>- informacja o poprawnym odnośniku,</td>
			</tr>
			<tr>
				<td></td>
				<td> - informacja o niepoprawnym odnośniku,</td>
			</tr>
			<tr>
				<td></td>
				<td> - informacja o niesprawdzaniu odnośnika (np. jeśli to odnośnik zdalny, a sprawdzane są tylko lokalne),</td>
			</tr>
			</table></li>
   <li><b>Źródło</b> - ścieżka dostępu i nazwa pliku w którym sprawdzano odnośniki</li>
	<li><b>Tytuł</b> - Tytuł dokumentu (zawarty pomiędzy znacznikami <tt>&lt;title&gt;</tt> i <tt>&lt;title&gt;</tt> w danym dokumencie. Pokazywanie tytułów, które spowalnia nieco proces wyszukiwania, można wyłączyć w menu z prawej strony okna.</li>
	<li><b>Odnośnik</b> - odnośnik,który poddano weryfikacji</li>
	<li><b>Rodzaj powiązania</b> - informuje o typie odnośnika (do dokumentów, grafik, arkuszy stylów itd.)</li>
	<li><b>Efekt weryfikacji</b> - informuje o poprawności, bądź niepoprawności odnośnika.</li>
</ul>

<p><b>Wyświetlaj tytuły dokumentów</b><br />
Za pomocą  tego przycisku możesz włączyć wyświetlanie tytułów dokumentów (zawartych w dokumentach pomiędzy znacznikami <tt>&lt;title&gt;</tt> i <tt>&lt;title&gt;</tt>). Spowalnia to nieco proces wyszukiwania. Tytuły umieszczone będą z kolumnie "Tytuł".</p>

<h2>Eksportowanie wyników sprawdzania poprawności odsyłaczy</h2>

<p>Aby wyeksportować wyniki sprawdzania poprawności odsyłaczy, skorzystaj z przycisków na menu z prawej strony okna wyników. Dane możesz eksportować do:
<ul>
	<li>pliku w formacie HTML</li>
	<li>pliku w formacie TXT</li>
</ul>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="down_integrity.php">Sprawdzanie spójności serwisu</a></li>
   <li><a href="down_syntax_check.php">Sprawdzanie poprawności składni</a></li>
   <li><a href="network_publishing_general.php">Publikowanie w Pająku</a></li>
   <li><a href="service_tool_synchronization.php">Automatyczna synchronizacja serwisu</a></li>
   <li><a href="services_general.php">Serwisy ogólnie</a></li>
   <li><a href="down_panel.php#downpanellist">Inne zakładki dolnego panelu wyników</a></li>
   <li><a href="main_window_desc.php">Główne okno programu</a></li>
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