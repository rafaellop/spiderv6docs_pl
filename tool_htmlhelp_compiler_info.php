<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>HTML Help - Informacja dla kompilatora HTML Help</title>

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
<h1>HTML Help - Informacja dla kompilatora HTML Help</h1>



<p>
Narzędzie to umożliwia umieszczenie w projekcie dwóch rodzajów słów kluczowych ułatwiających zarówno nawigację, jak i wyszukiwanie. Oba sposoby mogą funkcjonować niezależnie, ale również równolegle. W oknie narzędzia znajdują się tylko dwie małe zakładki, oddzielne dla każdego rodzaju. Obiekty zawierające zestawy słów kluczowych winniśmy zamieszczać w nagłówku dokumentu HTML, w ramach HEAD; możemy je łączyć.
</p>

<h2>Uruchamianie</h2>

<p>Opisywane narzędzie możesz uruchomić za pomocą przycisku oznaczonego ikoną pokazaną powyżej. Przycisk uruchomienia tego okna znajduje się w menu HTML Help oraz na pasku narzędzi HTML Help.

<h2>Słowa kluczowe</h2>

<p>
Słowa kluczowe są uzupełnieniem przy tworzeniu skorowidza. Aby zostały uwzględnione, należy w <a href="tool_htmlhelp_hhp_editor.php">edytorze projektu</a>, w zakładce ogólnych ustawień zaznaczyć opcję "Włącz słowa kluczowe z plików HTML". Uwaga! Słowa kluczowe, chociaż umieszczane w procesie kompilacji jako elementy indeksu, nie są jego częściami składowymi rejestrowanymi w pliku skorowidza.
</p>

<p><b>Słowo kluczowe</b><br />
W polu tym wpisujemy słowo kluczowe. Możemy dodawać zarówno pojedyncze słowa kluczowe, jak również dowolną ich ilość na raz. W tym przypadku należy zwrócić uwagę na dwie sprawy: Słowa kluczowe nie mogą zawierać spacji, oraz oddzielamy je za pomocą średnika, również bez spacji, np: "Słowo;Słowo;Słowo_kluczowe". Dodajemy je przy pomocy przycisku z plusem obok pola poniżej.
</p>
<p><b>Słowa kluczowe</b><br />
Pole to zawiera zestaw słów kluczowych, jakie zostały wprowadzone. Możemy je usuwać lub dodawać nowe, korzystając z przycisków obok pola.
</p>

<h2>Nazwy ALink</h2>

<p>
ALink są słowami kluczowymi stanowiącymi powiązanie między danym dokumentem a innymi dokumentami. Jeśli jakiś ALink odnosi się do ośmiu dokumentów, użycie go spowoduje wyświetlenie listy wszystkich tych dokumentów. Praktycznie wygląda to tak, że ten sam ALink zamieszczamy w wybranych dokumentach, zaś po jego wywołaniu następuje pokazanie listy wszystkich tych dokumentów, w których został umieszczony. 
</p>

<p><b>Nazwa ALink</b><br />
W polu tym wpisujemy nazwę ALink. Możemy dodawać zarówno pojedyncze słowa, jak również dowolną ich ilość na raz. W tym przypadku należy zwrócić uwagę na dwie sprawy: Nazwy ALink nie mogą zawierać spacji, oraz oddzielamy je za pomocą średnika, również bez spacji, np: "Nazwa;Nazwa;Nazwa_ALink". Dodajemy je przy pomocy przycisku z plusem obok pola poniżej.
</p>
<p><b>Nazwy ALink</b><br />
Pole to zawiera zestaw nazw ALink, jakie zostały wprowadzone. Możemy je usuwać lub dodawać nowe, korzystając z przycisków obok pola.
</p>

</td>
</tr>
</table><br />

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - ogólne informacje</a>
	<li><a href="tool_htmlhelp_hhp_editor.php">Edytor projektu HTML Help</a>
	<li><a href="tool_htmlhelp_hhc_editor.php">Edytor spisu treści HTML Help</a>
	<li><a href="tool_htmlhelp_hhk_editor.php">Edytor skorowidza (indeksu) HTML Help</a>
	<li><a href="tool_htmlhelp_folder_to_chm.php">Szybki HTML Help z folderu</a>
	<li><a href="tool_htmlhelp_hhp_compilation.php">Kompiluj dokument HTML Help</a>
	<li><a href="tool_htmlhelp_compiler_services.php">HTML Help a projekty w Pająku</a>

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
