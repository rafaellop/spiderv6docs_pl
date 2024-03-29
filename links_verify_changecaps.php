<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Menu główne - Narzędzia / Weryfikacja kodu</title>

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
<h1>Sprawdzanie odsyłaczy - zmiana wielkości liter</h1>

<!-- Treść pomocy -->

<p>Na serwerach pracujących pod kontrolą systemów operacyjnych Unix i podobnych (np. Linux) - w przeciwieństwie do MS Windows - ma znaczenie wielkość liter w nazwach plików, a więc także i w odsyłaczach do tych plików w dokumentach HTML. Aby uniknąć błędów <b>bardzo zalecane jest używanie wyłącznie małych liter</b>. Dzięki temu nie będzie trzeba zastanawiać się nad wielkością liter w nazwach plików i folderów, gdyż po prostu zawsze będą pisane małymi. Należy zauważyć, że niezgodna wielkość liter w nazwach plików i w odsyłaczach do tych plików jest jednym z najpowszechniejszych błędów popełnianych przez mniej doświadczonych webmasterów.

<p>To menu zawiera polecenia umożliwiające zmianę wielkości liter w odsyłaczach: </p>


<p><b>Odsyłacze lokalne na małe litery</b><br />
Kliknij, zmienić wielkość liter w odsyłaczach lokalnych (do zasobów umieszczonych na tym samym komputerze, co edytowany plik)  na małe litery.

<p><b>Odsyłacze lokalne na WIELKIE litery</b><br />
Kliknij, zmienić wielkość liter w odsyłaczach lokalnych (do zasobów umieszczonych na tym samym komputerze, co edytowany plik) na WIELKIE litery.

<p><b>Spróbuj poprawić wielkość liter na jak w ścieżce</b><br />
Kliknij, aby program spróbował odszukać pliki wskazane przez odsyłacze i dostosował wielkość liter w odsyłaczach do stanu rzeczywistego.


<p><b><a href="down_syntax_check_css.php">Spróbuj poprawić bezwzględne na względne</a></b><br />
Kliknij, aby program spróbował odnaleźć na dysku dokumenty do których prowadzą odsyłacze bezwzględne (składające się z pełnej ścieżki dostępu do pliku na dysku, np. <tt>D:\folder_ze_strona\obrazki\obrazek.jpg</tt>) i, jeśli to możliwe, zamienił adresy na względne (typu <tt>obrazki/obrazek.jpg</tt>). 



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
        <li><a href="main_menu_tools.php">Menu główne - Narzędzia</a>
        <li><a href="down_syntax_check.php">Sprawdzanie poprawności składni w dokumentach</a>
        <li><a href="settings_toolbars.php">Ustawienia programu - Ustawienia pasków, menu i skrótów</a>
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