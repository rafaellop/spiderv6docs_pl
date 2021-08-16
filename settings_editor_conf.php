
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Konfiguracja edytora</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<a name="top"></a>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Pająk V6</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="contents_main.php">Spis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_general.php">Ogólne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_howto.php">Jak to wykonać?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_support.php">Wspomaganie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_mainpage.php">Główne okno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contents_settings.php">Ustawienia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#googlesearch" role="button" aria-expanded="false" aria-controls="googlesearch">Wyszukaj</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	
<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<!-- nagłowek głowny tematu -->
<h1>Ustawienia programu - Konfiguracja edytora</h1>

<!-- treść pomocy -->
<p>
Ta kategoria ustawień edytora jest najbardziej rozbudowana. Możesz tutaj wpływać na bardzo specyficzne zachowanie edytora w zakresie czynności edycyjnych. Ta kategoria składa się pięciu grup:

<h2>Margines, rynna oraz cofnij i ponów</h2>

<p>Ta grupa pozwala na ustawienia związane z marginesami, funkcjami cofania czynności oraz wyglądem rynny i składa się z następujących ustawień:

<p><b>Pokaż prawy margines</b><br>
Zaznacz tę opcję, aby włączyć wyświetlanie prawego marginesu w edytorze. Prawy margines to linia, która pozwala np. na zawijanie tam wierszy lub może pełnić funkcję wizualnego pomocnika.

<p><b>Kolumna prawego marginesu</b><br>
W tym polu wprowadź numer kolumny, w której ma być wyświetlany prawy margines.

<p><b>Wyświetlaj rynnę</b><br>
Zaznacz tę opcję, aby włączyć wyświetlanie rynny, czyli obszaru po lewej stronie edytora, w którym znajdują się numery linii, znaczniki zawijania wierszy czy ikony zakładek.

<p><b>Szerokość rynny</b><br>
W tym polu wprowadź szerokość rynny w punktach.

<p><b>Zawijaj na prawym marginesie</b><br>
Zaznacz tę opcję, aby włączyć zawijanie wierszy na prawym marginesie, a niekoniecznie na końcu obszaru widzialnego edytora.

<p><b>Zawijaj z wcięciem</b><br>
Zaznacz tę opcję, aby włączyć zawijanie wierszy z wcięciem. Funkcja ta powoduje, że wiersze, które są zawijanie nie rozpoczynają się od początku kolejnego wiersza, ale od miejsca, w którym występuje wcięcie w wierszu poprzedzającym

<p><b>Grupowe cofnij/ponów</b><br>
Zaznacz tę opcję, aby włączyć grupowe cofanie czy ponawianie czynności. Dzięki tej opcji możesz cofać np. całe wpisane wyrazy, a nie pojedyncze literki.

<p><b>Bez kursora w cofaniu</b><br>
Zaznacz tę opcję, aby przemieszczanie kursora w edytorze nie było pamiętane w operacji cofnij/ponów.

<h2>Wcięcia</h2>

<p>Ta grupa pozwala na dostosowanie funkcji tworzącej wcięcia, określenie punktów tabulacji, itp. i składa się z następujących ustawień:

<p><b>Optymalne wcięcia</b><br>
Zaznacz tę opcję, aby włączyć wypełnianie pustego miejsca w automatycznie tworzonych wcięciach minimalną ilością znaków, używając do tego znaków TAB i spacji jednocześnie.

<p><b>Krok wcięcia</b><br>
W tym polu wprowadź wartość kroku wcięcia.

<p><b>Pozycjonuj na wcięciu</b><br>
Zaznacz tę opcję, aby kursor po wciśnięciu klawisza Enter był pozycjonowany na pierwszym znaku, który nie jest znakiem pustym (spacja, tab).

<p><b>Używaj wcięcia z powyżej</b><br>
Zaznacz tę opcję, aby podczas tworzenia automatycznych wcięć, proogram używał takiego samego wcięcia jakie znajduje się w linii poprzedzającej.

<p><b>Backspace do wcięcia</b><br>
Zaznacz tę opcję, aby przy usuwaniu znaków klawiszem Backspace, usuwane były również całe wcięcia do poziomu odpowiadającego wcięciu z powyższej linii.

<p><b>Punkty tabulacji</b><br>
Zaznacz tę opcję, aby ustalić punkty (numery kolumn) do poruszania po których poruszać się będzie klawisz TAB.

<p><b>Punkty tabulacji</b><br>
W tym polu wprowadź punkty tabulacji, czyli numery kolumn, w których będzie się zatrzymywał klawisz TAB. Numery kolumn wpisuj po przecinkach. Wpisanie tutaj wartości 3,5,15 spowoduje, że wciśnięcia klawisza TAB będą przenosić kursor o 3, 5 i 15 kolumn do przodu.

<p><b>Tabulacja co ...</b><br>
Zaznacz tę opcję, aby wybrać ile kolumn przeskakuje klawisz TAB. Innymi słowy, ile znaków zawiera się w znaku TAB.

<p><b>Ilość znaków w TAB</b><br>
W tym polu wprowadź liczbę oznaczającą ilość kolumn o jaką przesunie się kursor po wciśnięciu klawisza TAB.

<h2>Zaznaczanie</h2>

<p>Ta grupa pozwala na określenie działania funkcji zaznaczania tekstu w edytorze i składa się z następujących ustawień:

<p><b>Zaznaczaj tylko tekst</b><br>
Zaznacz tę opcję, aby zaznaczenie bloku tekstu było oznaczane kolorem tylko w wypadku gdy dotyczy tekstu. Wyłączenie tej opcji pozwala zobaczyć również zaznaczone linie, które nie zawierają tekstu.

<p><b>Zaznaczaj słowo po słowie</b><br>
Włącz tę opcję, aby zaznaczanie tekstu myszką zaznaczało całe wyrazy zamiast po kolei pojedyncze znaki.

<p><b>Wyłącz przenoszenie tekstu myszką</b><br>
Zaznacz tę opcję, aby wyłączyć możliwość przenoszenia tekstu myszką za pomocą metody przeciągnij i upuść.

<p><b>Zaznacz linię po dwukliku</b><br>
Włącz tę opcję, aby móc zaznaczać całą linię podwójnym kliknięciem.

<p><b>Zaznacz linię po trójkliku</b><br>
Włącz tę opcję, aby móc zaznaczać całą linię potrójnym kliknięciem.

<h2>Poruszanie po dokumencie</h2>

<p>W tej grupie ustawień zawarte są ustawienia związane z funkcjami poruszania po dokumencie. Składa się z ona następujących ustawień:

<p><b>Poruszaj kursorem po TAB</b><br>
Zaznacz tę opcję, jeśli chcesz, aby przesuwanie kursora klawiszami strzałek powodowało poruszanie zgodne ze wstawionymi znakami tabulacji. Jeśli używasz znaku spacji zamiast TAB, ta funkcja nie będzie działać, bowiem w dokumencie nie będzie znaków TAB.

<p><b>Sprytny TAB</b><br>
Zaznacz tę opcję jeśli chcesz, aby wciśnięcie klawisza TAB powodowało przejście do miejsca zgodnego z kolejnym wcięciem. Do dopełnienia brakujących znaków użyte zostaną spacje.

<p><b>Kursor w lewo/prawo przenosi do wyżej/niżej z początku/końca</b><br>
Zaznacz tę opcję, aby wciśnięcie klawisza strzałki w lewo powodowało przejście kursora na koniec linii wyżej, a wciśnięcie kursora w prawo, przeniesienie kursora na początek linii poniżej. Jeśli wyłączysz, kursor w lewo lub prawo będzie działać tylko do początku linii lub końca linii.

<p><b>Nie pozwalaj na kursor poza końcem dokumentu</b><br>
Zaznacz tę opcję jeśli chcesz, aby nie było możliwe poruszanie kursorem również poza końcem dokumentu. Jeśli włączysz, będziesz mógł się poruszać kursorem tylko do ostatniego znaku dokumentu.

<p><b>Nie pozwalaj na kursor pomiędzy TAB</b><br>
Włącz tę opcję jeśli chcesz, aby nie było możliwe umieszczenie kursora pomiędzy znakami TAB np. po kliknięciu tam myszką. W przeciwnym wypadku, jeśli włączysz tę opcję, będzie możliwe umieszczenie kursora wewnątrz znaku tabulacji.

<p><b>Nie pozwalaj na kursor poza końcem linii</b><br>
Włącz tę opcję jeśli chcesz, aby nie było możliwe umieszczenie kursora za znakiem końca wiersza. W przeciwnym wypadku, jeśli włączysz tę opcję, będzie możliwe umieszczenie kursora za znakiem końca wiersza i wpisywanie tam tekstu - pozostałe wolne miejsce zostanie wypełnione znakami spacji.

<h2>Konfiguracja edytora</h2>

<p>Tutaj znajdują się pozostałe ustawienia dla których powyższe grupy nie były odpowiednie. Oto dostępne opcje:

<p><b>Nie zmieniaj kolumny podczas przesuwania w pionie</b><br>
Zaznacz tę opcję jeśli chcesz, aby podczas przesuwania kursora w pionie zachowywana była pierwotna kolumna o ile to możliwe.

<p><b>Wyświetlaj numer linii podczas przewijania paskami</b><br>
Zaznacz tę opcję jeśli chcesz, aby podczas przewijania dokumentu za pomocą pasków przesuwu wyświetlana była podpowiedź z informacją o bieżącej linii.
<p><b>Kursor blokowy w trybie nadpisywania</b><br>
Zaznacz tę opcję, aby po włączeniu trybu nadpisywania klawiszem INSERT wyświetlany był specjalny kursor pozwalający na odróżnienie tego trybu.

<p><b>Używaj znaku TAB zamiast spacji przy TAB</b><br>
Zaznacz tę opcje, aby przy wciśnięciu klawisza TAB używany był znak TAB. Jeśli wolisz używać spacji zamiast TAB, wyłącz tę opcję.

<p><b>Przy wklejaniu tekstu zamieniaj znaki Unicode na encje</b><br>
Zaznacz tę opcję, aby podczas wklejania dokumentu w formacie Unicode przez schowek, znaki specjalne były zmieniane na tzw. encje, czyli odpowiadającego kody.

<p><b>Ogranicz numerowanie linii do końca dokumentu</b><br>
Zaznacz tę opcję jeśli chcesz, aby numerowanie linii widoczne na rynnie było ograniczone tylko do końca dokumentu.

<p><b>Nie pytaj o ustawienie zakładki gdzie zakładka istnieje</b><br />
Zaznacz tę opcję jeśli chcesz, aby program nie zadawał pytania w przypadku
gdy zakładka numerowana, którą chcesz ustawić znajduje się już w innym
miejscu dokumentu.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_editor.php#settingslisteditor">Inne ustawienia edytora</a>
	<li><a href="main_editor.php">Praca z edytorem</a>
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

</body>
</html>