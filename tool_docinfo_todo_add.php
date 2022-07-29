<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Narzędzia - Informacje o dokumencie</title>

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
<h1>Narzędzia - Zadanie do wykonania</h1>

<!-- treść pomocy -->

<p>Okno to umożliwia utworzenie nowego zadania do wykonania. 


<p><b>Nazwa zadania</b><br />
W tym polu wpisz nazwę zadania. Staraj się nadawać takie nazwy dla zadań, by sugerowały one o co w zadaniu chodzi. Nazwa zadania "<tt>Sprawdź czy jest dobrze</tt>" za dwa tygodnie już nic nie będzie mówiła, ale "<tt>Sprawdź pętlę pobierania danych z bazy</tt>" nawet po dłuższym czasie sugeruje, co miałeś na myśli. <br />
Przy większej ilości zdań w projekcie staje się to dość istotne - nie będziesz musiał zaglądać do treści zadania, by się mniej więcej zorientować o co w nim chodzi.


<p><b>Opis zadania</b><br />
W typ polu wprowadź szczegółowy opis zadania.

<p><b>Priorytet</b><br />
Priorytet określa wagę zadania. Jeśli zadanie, które tworzysz jest bardzo ważne, nadaj mu priorytet <tt>1 - najwyższy</tt>. W przeciwnym wypadku możesz nadać mu niższy priorytet. Dzięki temu przeglądają zadania do wykonania będziesz wiedział, którymi musisz zająć się przede wszystkim.</p>

<p><b>Zaznaczone jako wykonane</b><br />
Zaznaczenie tego przełącznika oznacza zadanie jako wykonane. Dzięki temu (w zależności od ustawień programu w oknie <a href="settings_editor_general.php">Ustawienia programu / Inne ustawienia / Edytor ... / ogólne</a>), linia zawierająca to zadanie nie będzie wyróżniana w edytorze.</p>

<p><b>Przenieś to zadanie do wykonania</b><br />
Kliknij ten przycisk, wyświetlić okienko umożliwiające wprowadzenie numeru wiersza w dokumencie, do którego zadanie ma zostać przeniesione. Przycisk ten dostępny jest wyłącznie dla zadań zdefiniowanych dla dokumentu, a nie dla całego projektu.</p>

<p><b>Przypisz do pliku</b><br />
Kliknij ten przycisk, aby przypisać zadanie do pliku. Dzięki temu po dwukliku na tym zadaniu na liście plik ten może zostać automatycznie otwarty do edycji. Nie należy jednak mylić przypisania zadania do pliku z zadaniem utworzonym bezpośrednio w dokumencie! Zadanie takie nie będzie widoczne w dokumencie do którego zostało przypisane w postaci podświelonej linii! Przycisk ten jest dostępny wyłącznie w przypadku edycji zadań przypisanych bezpośrednio do projektu, a nie do dokumentu.</p>

<p><b>Usuń to zadanie</b><br />
Kliknij ten przycisk, aby usunąć bieżące zadanie. Jest to przydatne szczególnie w sytuacji, gdy przeglądasz treść zadania juz istniejącego.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_editor_todotasks.php">Zadania do wykonania - ogólnie</a>
	<li><a href="main_editor_general.php">Praca z edytorem - ogólnie</a>
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