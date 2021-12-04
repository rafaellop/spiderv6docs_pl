<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">


<!-- nazwa strony pomocy -->
<title>Kolorowanie składni w Pająku</title>

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
<h1>Kolorowanie składni w Pająku</h1>




<!-- treść pomocy -->

<p>W programach do edycji kodu źródłowego, obojętnie w jakim języku, podstawową rzeczą jest kolorowanie składni. Dobrze przygotowane kolorowanie składni w znaczącym stopniu ułatwia orientację w kodzie.</p>


<p>Pająk posiada ponad 40 schematów kolorowania składni, dopasowanych optymalnie do potrzeb różnych użytkowników. Są więc schematy prostrze, kolorujące jedynie jeden, wybrany język - np. <b>JavaScript</b>, <b>CSS</b> itp. Są również bardziej zaawansowane schematy kolorujące więcej języków na raz, jak np. <b>DHTML</b>, który obsługuje jednocześnie <b>HTML</b>, <b>JavaScript</b>, <b>VBScript</b>, <b>CSS</b>. Wspomagane są również języki technologie server-side, jak <b>PHP</b>, <b>ASP</b>, <b>ColdFusion</b>, <b>Perl</b>, <b>C</b>, kolorowanie zapytań MySQL i inne.</p>

<p>Mniej (a  może też tych bardziej) zaawansowanych użytkowników Pająka z pewnością zainteresują dwa schematy kolorowania:
<ul>
	<li><b>HTML Categorized</b>, który stosuje odmienne kolory dla różnych typów znaczników HTML (obrazki na niebiesko, odnośniki na czerwono, tabele na zielono itd.). Dzięki temu kod jest jeszcze bardziej przejrzysty, łatwiej jest zorientować się, w którym miejscu znajduje się np. szukany obrazek.</li>
	<li><b>HTML Validator</b> który bardziej rozbudowany w porównianiu z innymi schematami kolorowania HTML. Oprócz zwiększenia czytelności kodu HTML za pomocą podświetlania znaczników i ich atrybutów różnymi kolorami, umożliwia on zorientować się w często popełnianych błędach. Błędy te mogą dotyczyć niedomkniętych znaczników, nieprawidłowych atrybutów czy brakujących cudzysłowów wokół wartości atrybutów, a także zakresu obsługi znaczników przez różne przeglądarki. Różne rodzaje błędów podświetlane są różnymi kolorami.</li>
</ul>


<p><b>Używanie schematów kolorowania na starszych komputerach</b><br />
Starsze komputery mogą mieć problem podczas pracy z bardziej złożonymi schematami kolorowania, jak np. <b>HTML+PHP</b>, gdyż ze względu na jego skomplikowanie i wielkość może on mocno obciążyć edytor. Dlatego też, jeśli nie edytujesz zaawansowanych skryptów PHP, warto skorzystać np. z kolorowanie <b>HTML+PHP simple</b>. Podobnie jest w przypadku np. skryptu <b>DHTML</b>, zamiast którego można używać <b>HTML+JavaScript</b>, <b>HTML+CSS</b> czy <b>HTML+VBScript</b> w zależności od aktualnych potrzeb. Dzięki możliwości zmiany schematu kolorowania podczas pracy, nie nastręcza to najmniejszych problemów.</p>

<h2>Edycja kolorowania składni</h2>

<p>W Pająku możesz tworzyć nowe i edytować istniejące schematy kolorowania. Służy to tego <a href="syntax_editor.php">Edytor schematów kolorowania</a> . Pamiętaj, że zmiany wprowadzone w schemacie kolorowania nie mogą zostać cofnięte i należy używać tej opcji ostrożnie. Najlepiej zapisywać schematy pod nową nazwą, lub wykonać kopię bezpieczeństwa istniejących schematów (pliki z rozszerzeniem *.sch)</p>

Możesz również dostosować kolory istniejącego schematu za pomocą okna <a href="settings_editor_syntax.php">Ustawienia programu - Kolorowanie składni</a>.



<h2>Używanie schematów podczas pracy z programem</h2>



<p>Pająk po rozszerzeniu nazwy pliku automatycznie rozpoznaje jakiego schematu kolorowania należy użyć do danego dokumentu. Ustawienie domyślnego kolorowania dla danego typu możesz zmienić w oknie <a href="settings_editor_syntax.php">Ustawienia programu - Kolorowanie składni</a> / <a href="settings_editor_syntax_properties.php">Właściwości schematu kolorowania</a>. Pająk pamięta również, jaki schemat kolorowania był używany w chwili zamknięcia danego dokumentu i przy jego kolejnym otwarciu zostanie on zastosowany.</p>

<p><b>Zmiana schematu kolorowania podczas pracy</b><br />
W Pająku możliwa jest zamiana schematu kolorowania stosowanego do edycji wybranego dokumentu bez przerywania pracy! W tym celu skorzystaj z polecenia <b>Wybór schematu kolorowania składni</b> na mini pasku narzędzi z lewej strony edytora, które rozwinie listę wszystkich dostępnych schematów.</p>




</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="syntax_editor.php">Edytor schematów kolorowania</a>
	<li><a href="syntax_instruction.php">Jak utworzyć schemat kolorowania? Instrukcja krok po kroku.</a>
	<li><a href="settings_editor_syntax.php">Ustawienia programu - Kolorowanie składni</a>
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