<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Mapa projektu</title>

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
<h1>Mapa projektu</h1>



<p>Mapa projektu przedstawia w sposób graficzny powiązania pomiędzy plikami w projekcie. Umożliwia też w szybki sposób przechodzenie do wybranego dokumentu. 

<p>Mapę projektu uruchomisz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_services.php">Projekty</a> / <a href="main_menu_services_properties.php">Własności projektu</a> / Mapa projektu, a także z poziomu <a href="main_tabs_myservices.php">zakładki Projekty</a> za pomocą polecenia w menu rozwijanym pod przyciskiem Własności projektu . 

<p>W oknie <a href="settings_general.php#service_map">Ustawienia programu - Ogólne</a> w sekcji Mapa projektu możesz zmienić opcje generowana mapy, m. in rodzaje plików pokazywanych na mapie, głębokość skanowania odnośników itd.</p>

<p>Okno mapy projektu zostało podzielone na dwie części:</p>

<ul>
	<li><b>Menu</b> w górnej części</li>
	<li><b>Okno zawartości</b> - tworzy resztą okna</li>
</ul>



<h2>Menu</h2>

<p>Menu pozwala na poruszanie się po dokumentach na mapie, a także na inne operacje.</p>

<p>Dwa pierwsze polecenia służą do przechodzenia dalej i cofania się, jeśli zmieniałeś dokument główny mapy (od którego rozpoczynana jest mapa). Jeśli nie zmieniałeś dokumentu głównego, te polecenia będą nieaktywne. Dokument główny domyślnie znajduje się zawsze w lewym górnym rogu mapy.</p>

<p> <b>Przejdź do poprzedniego</b> - kliknij, aby wrócić do dokumentu, który uprzednio był dokumentem głównym na mapie. </p>
<p> <b>Przejdź do następnego</b> - kliknij, aby ponownie przejść do następnego dokumentu, który wskazałeś jako dokument główny na mapie. </p>
<br />

<p>Odświeżenie podglądu - kliknij, aby ponownie wygenerować mapę</p><br />

<p>Drukuj mapę - kliknij, aby wydrukować mapę projektu.</p>

<p><b>Zapisz mapę projektu na dysk</b> - kliknij, aby zapisać mapę projektu w postaci dokumentu HTML.</p>


<h2>Okno zawartości mapy</h2>

<p>Okno to zawiera mapę w postaci ikon plików połączonych strzałkami. W oknie <a href="settings_general.php#service_map">Ustawienia programu - Ogólne</a> w sekcji Mapa projektu możesz wybrać głębokość skanowania (czyli w ilu kolejnych dokumentach od dokumentu głównego mają być szukane odnośniki), włączyć lub wyłączyć kolorowanie strzałek (domyślnie włączone), a także wybrać rodzaje plików, jakie mają być umieszczane na mapie.</p>

Jeśli klikniesz na plik prawym klawiszem myszki, ukaże się menu zawierające dwie pozycje:

<p><b>Otwórz dokument</b><br />
Kliknij, aby otworzyć wskazany dokument w Pająku.</p>

<p><b>Rozpocznij przeglądanie od niego</b><br />
Kliknij, aby rozpocząć przeglądanie od wskazanego dokumentu (wybrać jako dokument główny na mapie). Na mapie zostaną pokazane jedynie te dokumenty, do których odnośniki zawiera wskazany dokument. Identyczne działanie ma dwuklik lewym klawiszem na ikonie pliku.</p>

<p>Program stara się jak najprzejrzyściej rozmieścić pliki na mapie. Możesz jednak przenieść ikonę dokumentu w inne miejsce za pomocą techniki przeciągnij i upuść (kliknij na ikonę lewym klawiszem i przeciągnij w dowolne miejsce).</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="services_general.php">Projekty ogólnie</a>
	<li><a href="main_tabs_myservices.php">Zakładka Moje projekty</a>
	<li><a href="settings_general.php#service_map">Ustawienia programu - Ogólne - Mapa projektu</a>
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
