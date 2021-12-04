<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Serwisy</title>

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
<h1>Menu główne - Serwisy</h1>

<!-- Treść pomocy -->

<p>Polecenia w tym menu służą do pracy z plikami i folderami znajdującymi się na dysku lokalnym. Za pomocą tego menu możesz również tworzyć <a href="services_general.php">serwisy</a> i przełączać się między nimi.</p>

<p>Polecenia i układ menu są identyczne, jak w zakładce <a href="main_tabs_myservices.php">Moje serwisy</a>. Dostępne są następujące polecenia:</p>



<p><b><a href="service_properites.php">Własności serwisu</a></b><br />
Kliknij, aby otworzyć okno własności serwisu. Możesz również skorzystać z <a href="main_menu_services_properties.php">podmenu</a>, aby użyć dodatkowych opcji.

<hr>

<p><b>Nowy serwis</b><br />
Kliknij, aby utworzyć nowy serwis.

<p><b>Usuń serwis</b><br />
Kliknij,aby usunąć bieżący serwis. Usunięcie serwisu spowoduje jedynie wykasowanie informacji o tym serwisie z Pająka. Żadne pliki nie będą usuwane z dysku twardego.

<p><b>Zmień nazwę serwisu</b><br />
Kliknij, aby zmienić nazwę bieżącego serwisu.

<hr>

<p><b>Dodaj składnik do serwisu</b><br />
Kliknij, aby wskazać i skopiować składnik (plik lub zawartość foldera) do bieżącego serwisu. Będziesz mógł wskazać miejsce w serwisie, do którego elementy mają zostać skopiowane.

<p><b>Usuń składnik serwisu</b><br />
Kliknij, aby usunąć wskazany składnik (plik lub zawartość foldera) z bieżącego serwisu.<br /> UWAGA! Element ten zostanie usunięty z dysku i przeniesiony do Kosza. 

<hr>

<p><b><a href="service_restore.php">Przywracanie serwisu</a></b><br />
Kliknij, aby uruchomić narzędzie Przywracania serwisu.


<p><b><a href="services_general.php">Pomoc do serwisu</a></b><br />
Kliknij, aby otworzyć pomoc do serwisów.

<hr>

<p><b>Rozwiń podfoldery</b><br />
Kliknij, aby rozwinąć wszystkie podfoldery folderu zaznaczonego na drzewie w zakładce Moje Serwisy.

<p><b>Zwiń podfoldery</b><br />
Kliknij, aby zwinąć wszystkie podfoldery folderu zaznaczonego na drzewie w zakładce Moje Serwisy.



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="main_tabs_myservices.php">Zakładka Moje serwisy</a></li>
   <li><a href="settings_toolbars.php">Ustawienia programu - Ustawienia pasków, menu i skrótów</a></li>
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