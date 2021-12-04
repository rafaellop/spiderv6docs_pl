<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Obejmij tekstem, lub zdejmij objęcie</title>

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
<h1>Narzędzia - Obejmij tekstem, lub zdejmij objęcie</h1>



<!-- Treść pomocy -->

<p>Narzędzie to umożliwia szybkie objęcie tekstem zaznaczonego fragmentu tekstu w bieżącym dokumencie. Możliwe jest również usunięcie objęcia np. znakami komentarza itp.</p>

<p>Okno narzędzia otworzysz z poziomu <a href="main_menu_main.php">Menu głównego</a> / <a href="main_menu_edit.php">Edycja</a> / <a href="main_menu_edit_change_selected.php">Zaznaczony tekst na...</a>, z paska narzędzi <a href="toolbars_link_format.php">Odsyłacze, tekst i formatowanie</a>, a także z <a href="main_menu_editor.php">menu kontekstowego edytora</a>.</p>

<p>Okno narzędzia zawiera dwie grupy, z których aktywna może być zawsze tylko jedna:</p>

<ul>
	<li>Obejmij tekstem</li>
	<li>Zdejmij objęcie</li>
</ul>


<h2>Obejmij tekstem</h2>

<p>Jeśli zaznaczysz opcję <b>Obejmij tekstem</b>, dostępne będą następujące opcje:</p>

<p><b>Obejmij z lewej tekstem, Obejmij z prawej tekstem</b><br />
Podaj teksty, którymi ma zostać objęty zaznaczony fragment (odpowiednio z lewej i prawej strony)

<p><b>Obejmij z obu stron tym samym tekstem</b><br />
Zaznacz tę opcję, jeśli chcesz z obu stron zaznaczonego fragmentu użyć tego samego tekstu. W takim przypadku użyty zostanie teks zdefiniowany dla lewej strony, pole tekstowe dla prawej strony będzie nieaktywne.

<p><b>Wstaw na początku (końcu) każdej linii</b><br />
Zaznacz, jeśli podane teksty mają się znaleźć nie tylko na początku i końcu zaznaczonego fragmentu, ale także na początku i na końcu każdej linii zaznaczonego fragmentu tekstu.


<h2>Zdejmij objęcie</h2>

<p>Jeśli zaznaczysz opcję <b>Zdejmij objęcie</b>, program odszuka podane niżej teksty w zaznaczonym fragmencie (odpowiednio z lewej i prawej strony) i je usunie. </p>

<p>Oba teksty muszą wystąpić w podanej kolejności (tzn. najpierw lewy, potem prawy tekst). Oznacza to, iż w przypadku, gdy jako pierwszy wystąpi tekst podany dla prawej strony, nie zostanie on usunięty.</p>

<p>Jeśli w zaznaczonym fragmencie znajdzie się więcej wystąpień podanych tekstów, wszystkie ich wystąpienia zostaną usunięte.  </p>

<p>Umożliwia to np. usunięcie znaków komentarz, bez potrzeby przechodzenia kolejno na początek i koniec komentarza w dokumencie. </p>


<p><b>Zdejmij objęcie z lewej, Zdejmij objęcie z prawej</b><br />
Podaj teksty, które mają zostać odnalezione i usunięte z zaznaczonego fragmentu.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_comment.php">Narzędzia - Komentarz</a>
	<li><a href="main_menu_edit.php">Menu Edycja</a> / <a href="main_menu_edit_change_selected.php">Zaznaczony tekst na...</a>
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
