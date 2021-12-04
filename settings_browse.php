
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Przeglądanie</title>

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
<h1>Ustawienia programu - Przeglądanie</h1>

<!-- treść pomocy -->
<p>
Kategoria o nazwie "Przeglądanie" zawiera ustawienia pozwalające na określenie ustawień związanych z funkcjami podglądu dokumentów edytowanych w programie. Za pomocą zgromadzonych tutaj ustawień możesz wpływać na podgląd wewnętrzny, dynamiczny i zewnętrzny. Kategoria "Przeglądanie" podzielona jest na  podkategorie: "Sposób działania przeglądania", "Dynamiczny podgląd dokumentu", "Wbudowana przeglądarka" oraz "Przeglądarki zewnętrzne". Oto opis tych kategorii:

<h2>Sposób działania przeglądania</h2>

<p>W tej grupie ustawień znajdują się ustawienia dotyczące ogólnych zasad działania funkcji podglądu, a ich znaczenie jest następujące:</P>

<p><b>Przeglądaj przy użyciu pliku tymczasowego</b><br>
Zaznacz tę opcję, aby przeglądać edytowane w programie pliki za pomocą pliku tymczasowego tworzonego w momencie wywołania podglądu.

<p><b>&nbsp;&nbsp;Usuwaj znacznik &lt;BASE&gt; przy wywoływaniu podglądu</b><br>
Zaznacz tę opcję, gdy chcesz, aby program usuwał przy wywoływaniu podglądu za pomocą pliku tymczasowego znacznik &lt;BASE&gt; był chwilowo usuwany.

<p><b>Przeglądaj zapisując zmiany</b><br>
Zaznacz tę opcję, aby przeglądać edytowane w programie pliki za pomocą oryginalnego pliku, który jest zapisywany w momencie wywołania podglądu.

<p><b>Wywołaj podgląd po kliknięciu zakładki "Przeglądanie"</b><br>
Zaznacz tę opcję, aby przełączać się i odświeżać podgląd przy kliknięciu zakładki "Przeglądanie" w głównym oknie programu. Jeśli wyłączysz tę opcję, kliknięcie na zakładce nadal będzie przełączać na podgląd, ale podgląd nie będzie odświeżany.

<p><b>Ostrzegaj przed podglądem niezapisanego dokumentu</b><br>
Zaznacz tę opcję, aby włączyć wyświetlanie ostrzeżenia przed podglądem niezapisanego jeszcze ani raz dokumentu. Niezapisany dokument nie posiada ustalonej ścieżki na dysku i dlatego osadzone w nim pliki (np. graficzne) mogą nie być prawidłowo wyświetlane.


<p><b>Zmieniaj mapowania przy przełączaniu serwisów</b><br>
Zaznacz tę opcję, aby program zmieniał aktywne mapowania folderów na adresy URL w momencie przełączania między serwisami.

<h2>Dynamiczny podgląd dokumentu</h2>

<p>W tej podgrupie ustalisz działanie dynamicznego podglądu odświeżanego w trakcie pisania dokumentu po zadanym czasie. Dostępne ustawienia:

<p><b>Uzyj komponentu przegladarki</b><br>
Zaznacz tę przeglądarkę, której chcesz używać jako domyślnej w przypadku podglądu dynamicznego odświeżanego w trakcie modyfikacji dokumentu.

<p><b>Położenie dynamicznego podglądu</b><br>
Wybierz w jaki sposób ma być wyświetlany dynamiczny podgląd: obok czy poniżej okna edytora.

<p><b>Suwak - Odświeżaj dynamiczny podgląd co</b><br>
Na tym pasku ustal czas nieaktywności, po którym odświeżony zostanie dynamiczny podgląd. Czas nieaktywności, to odstęp między zakończeniem modyfikacji dokumentu a odświeżeniem dynamicznego podglądu.

<h2>Wbudowana przeglądarka</h2>

<p>W tej podgrupie możesz wybrać, której przeglądarki chcesz używać jako domyślnej do wyświetlania dokumentów w zakładce <a href="main_preview_embed.php">Przeglądanie</a>. Możesz wybrać MS Internet Explorera lub Mozillę.

<h2>Przeglądarki zewnętrzne</h2>

<p>Ta podgrupa składa się z listy i przycisków służących do zarządzania tą listą. Możesz na przykład chcieć korzystać z podglądu w zewnętrznych programach przeglądarek. Na tej liście możesz określić jakie przeglądarki chcesz udostępnić do podglądu zewnętrznego. Listę dostępnych przeglądarek możesz modyfikować za pomocą przycisków umieszczonych obok. Domyślna przeglądarka zewnętrzna oznaczana jest czerwoną ikoną i używana jest w przypadku wywołania domyślnego <a href="main_preview_external.php">podglądu zewnętrznego</a>.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings.php#settingslist">Inne ustawienia</a>
	<li><a href="main_preview_general.php">Przeglądanie dokumentów</a>
	<li><a href="main_preview_dynamic.php">Korzystanie z funkcji dynamicznego podglądu</a>
	<li><a href="main_preview_embed.php">Korzystanie z funkcji wbudowanego podglądu</a>
	<li><a href="main_preview_external.php">Korzystanie z zewnętrznego podglądu</a>
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