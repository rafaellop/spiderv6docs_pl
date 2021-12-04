
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Dolny panel wyników - Terminal</title>

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
<h1>Dolny panel wyników - Terminal</h1>

<!-- treść pomocy -->

<p>Okno wywołuje się za pomocą skrótu ALT+F9 lub pozycji z <a href="main_menu_main.php">Menu głównego</a> \ <a href="main_menu_view.php">Wyświetl</a>. Dodatkowo okno jest wywoływane automatycznie w przypadku użycia funkcji związanych z tworzeniem aplikacji, instalowaniem pakietów npm, itp.</p>

<p>Do obsługi tego okna pomocy możesz użyć przycisków menu z prawej strony:</p>

<p><b>Ścieżka</b><br />Pozwala na wybranie domyślnej ścieżki, która jest używana przy wykonywaniu poleceń z linii komend. Może to być folder odpowiadający lokalizacji aktualnie edytowanego dokumentu lub też folder aktualnie wybrany na liście plików panelu Moje Projekty.</p>

<p>Terminal Pająka jest nakładką na Windows cmd.exe i oprócz podstawowej funkcjonalności linii komend, możliwe jest korzystanie ze zmiennych programu:</p>

<ul>
	<li>$cd - ścieżka aktualnego katalogu</li>
	<li>$dd - ścieżka katalogu aktualnego dokumentu</li>
	<li>$df - ścieżka pliku aktualnego dokumentu</li>
</ul>

<p>Przykład użycia to np. <kbd>DIR $dd</kbd>, co spowoduje wyświetlenie zawartości zgodnej ze ścieżką aktualnie edytowanego dokumentu.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
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