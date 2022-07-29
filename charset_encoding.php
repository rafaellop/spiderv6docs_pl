<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.1.1)">

<!-- nazwa strony pomocy -->
<title>Kodowanie znaków narodowych</title>

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
<table width="100%" border="0"  cellpadding="5" cellspacing="5">
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Kodowanie znaków narodowych</h1>

<!-- treść pomocy -->
<p>Pliki w komputerze tak naprawdę nie składają się z liczb i liter, lecz z pojedynczych liczb. Strona kodowa wskazuje, jaka liczba odpowiada jakiemu znakowi. Dla przykładu, dziesiętna liczba 65 oznacza wielką literę A, 66 oznacza B itd. Jednak w starszych stronach kodowych jest miejsce do określenia jedynie 255 znaków, co jest niewystarczające do oznaczenia wszystkich znaków narodowych. Dlatego każdy język (bądź grupa języków) posiada własną stronę kodową. To, co w jednej stronie kodowej wyświetli literę <b>Ľ</b> (<i>ISO-8859-2</i>), w innej wyświetli znak <b>Ľ</b> (w tym wypadku w <i>ISO-8859-1</i>)</p>


<p>Aby poprawnie wyświetlać znaki narodowe, program musi wiedzieć, w jakiej stronie kodowej zostały one zapisane w dokumencie. Gdyby istniała tylko jedna strona kodowa dla jednego języka, nie byłoby problemu, jednak dla samego języka polskiego istnieje kilkanaście sposobów kodowania znaków, z czego najczęściej w Internecie używane są dwa:</p>
<ul>
   <li>ISO-8859-2 - strona zgodna z normą ISO, używana w większości systemów,</li>
   <li>WIN-CP-1250 - strona używana przez MS Windows.</li>
</ul>

<p><b>Bardzo zalecaną stroną kodową jest strona zgodna z Polską Normą ISO-8859-2</b>. Jest to domyślny sposób kodowania polskich znaków w Pająku.</p>


<h2>Korzystanie z różnych stron kodowych podczas pracy</h2>

<p>Pająk pozwala na tworzenie dokumentów w praktycznie dowolnym języku. Program potrafi również automatycznie rozpoznać stronę kodową, stosowaną w danym dokumencie, na podstawie wpisów w sekcji META. Odpowiednie opcje znajdują się w oknie <a href="settings_editor_documents.php">Ustawienia programu - Dokumenty</a>, a także w <a href="main_menu_spelling.php">Menu pisownia</a>.</p>

<p>Podczas pracy z <a href="services_general.php">projektem</a>, w oknie <a href="service_properites.php#charset_encoding">Właściwości projektu</a> możesz wskazać kodowanie, jakie ma być domyślnie stosowane dla wszystkich dokumentów tego projektu. Pozwala to uniezależnić dany projekt od globalnych ustawień programu.</p>

<p>Możesz też szybko otworzyć i zapisać dokument, korzystając z wybranego kodowania za pomocą poleceń w Menu pisownia -&gt; <b>Odczytaj w kodowaniu...</b> i <b>Zapisuj w kodowaniu...</b>,  co pozwala dodatkowo korzystać z kodowania niezależnego od ustawień programu i projektu.</p>

<p>Najczęściej używaną konwersją jest zmiana kodowania znaków z WIN-CP-1250 (strona kodowa używana w MS Windows) na ISO-8859-2 (zgodna z normą ISO strona kodowa używana w większości systemów).</p>

<p>Priorytet najwyższy ma kodowanie dla dokumentu. Następnie kodowanie dla projektu i na końcu kodowanie ogólne. W przypadku zmiany kodowania do odczytu dla dokumentu następuje ponowne odczytanie dokumentu z konwersją wg wybranego kodowania. W przypadku zmiany kodowania przy zapisie dla dokumentu następuje zapisanie dokumentu w wybranym kodowaniu.</p>

<p><b>Wspomaganie dla Unicode</b></p>
<p>W celu poprawienia komfortu pracy podczas korzystania z kodowania za pomocą Unicode stworzony został mini <a href="tool_unicodeeditorek.php">edytorek unicode</a>. Narzędzie to pozwala kopiować i wklejać do dokumentu teksty zawierające encje Unicode, które automatycznie zamieniane będą na znaki UTF.</p>

<h2>Konwersja znaków narodowych</h2>

<p>Pająk umożliwia konwersję kodowania znaków na wiele różnych stron kodowych. Możesz ją przeprowadzić na kilka sposobów:</p>
<ul>
   <li> za pomocą narzędzia <a href="find_ext.php">Rozszerzone wyszukiwanie i zamiana</a>, które umożliwia konwersję kodowania w aktualnym dokumencie, wszystkich otwartych, a także w wybranych lub wszystkich dokumentach określonego folderu lub <a href="main_tabs_myservices.php">Projektu</a>. Okno możesz otworzyć za pomocą polecenia <b>Konwerter kodowania znaków</b> w menu Pisownia. Ikona polecenia została pokazana obok.</li>
   <li> szybką konwersję znaków w bieżącym dokumencie możesz przeprowadzić za pomocą polecenia <b>Znaki narodowe w bieżącym</b> w menu Pisownia. Ikona polecenia została pokazana obok.</li>
</ul>

<p>Możesz też szybko usunąć wszystkie polskie znaki w bieżącym dokumencie lub we wszystkich otwartych dokumentach, używając poleceń <b>Usuń polskie znaki w bieżącym</b> i <b>Usuń polskie znaki w otwartych</b> w menu Pisownia.</p>

<p>Podczas tworzenia nowego dokumentu możesz wybrać stronę kodową w <a href="tool_meta.php">Edytorze sekcji META</a>. Domyślnie jest ustawiona strona ISO-8859-2.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
   <li><a href="spelling.php">Sprawdzanie pisowni</a>
   <li><a href="tool_unicodeeditorek.php">Edytorek Unicode</a>
   <li><a href="find.php">Wyszukiwanie w Pająku</a>
   <li><a href="find_ext.php">Rozszerzone wyszukiwanie i zamiana (konwersja znaków narodowych)</a>
   <li><a href="down_find_report.php">Okno "Raport wyszukiwania"</a>
   <li><a href="main_menu_spelling.php">Menu Pisownia</a>
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