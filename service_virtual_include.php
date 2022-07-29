<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Projekty - Wymuszone dołączanie plików</title>

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
<h1>Projekty - Wymuszone dołączanie plików</h1>


<p>Wymuszone dołączanie plików jest mechanizmem, który pozwala na wskazanie, które pliki mają być analizowane przez program podczas tworzenia dynamicznych podpowiedzi. Jest to szczególnie przydatne, gdy plik, który powinien zostać przeanalizowany (np. plik <tt>*.css</tt> zawierający arkusze stylów) nie jest połączony bezpośrednio z bieżącym dokumentem, gdyż bieżący dokument nie jest wyświetlany w projekcie bezpośrednio, lecz jest dołączany po stronie serwera (np. za pomocą funkcji <tt>include()</tt> w PHP) do wykonywanego skryptu server-side. Taka sytuacja ma często miejsce w przypadku bardziej rozbudowanych projektów internetowych, w których funkcje o różnym przeznaczeniu zebrane są w osobnych plikach. </p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="services_general.php">O projektach ogólnie</a>
   <li><a href="service_properites.php#virtual_include">Własności projektu</a>
	<li><a href="service_tool_synchronization.php">Synchronizacja projektów</a>
	<li><a href="tool_htmlhelp_general.php">HTML Help</a>
	<li><a href="main_tabs_myservices.php">Zakładka Moje projekty</a>
	<li><a href="tool_meta.php">Edytor sekcji META dokumentu</a>
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