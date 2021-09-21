
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Dynamiczne podpowiedzi dla znaczników</title>

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
<h1>Ustawienia programu - Dynamiczne podpowiedzi dla znaczników</h1>


<!-- treść pomocy -->
<p>
Ta grupa ustawień pozwala na określenie sposobu działania funkcji dynamicznych podpowiedzi dla języków znacznikowych czy zasad uzupełniania znaczników. W oknie tym znajdziesz kilka grup, z których każda dotyczy trochę innych aspektów działania tych funkcji.

<h2>Ogólne</h2>

<p>Tutaj znajdują się ogólne opcje zarządzające działaniem funkcji dynamicznych podpowiedzi:

<p><b>Wyłącz funkcje dynamicznych podpowiedzi</b><br>
Zaznacz tę opcję, aby wyłączyć działanie funkcji podpowiedzi dymkowych do znaczników, a także automatycznego wyświetlania listy atrybutów znaczników. Po wyłączeniu dynamicznych podpowiedzi i znaczników zawsze możesz wyświetlić taką listę korzystając ze skrótów klawiszowych Ctrl+Space i Ctrl+\.

<p><b>Dynamiczne podpowiedzi do znaczników, atrybutów i wartości</b><br />
Zaznacz tę opcję, aby włączyć automatyczne wyświetlanie listy znaczników, atrybutów i ich proponowanych wartości wyświetlane po upływie określonego niżej czasu. Zakres informacji możesz ustawieć za pomocą opcji z grup <a href="#tags_list">Lista znaczników</a> i <a href="#attrs_events_list">Lista atrybutów i zdarzeń</a> (poniżej na tej planszy).

<p><b>Nie wyświetlaj automatycznie podpowiedzi podczas klikania</b><br>
Jeśli nie chcesz, aby podczas automatycznego wyświetlania listy podpowiedzi, po każdym kliknięciu myszką w obrębie znacznika lub kodu php, przywracane było okienko listy podpowiedzi, zaznacz tę opcję.</p>

<p><b>Dynamiczna pomoc do znaczników i atrybutów</b><br />
Zaznacz tę opcję, aby włączyć automatyczne wyświetlanie w dymkach pomocy do bieżącego znacznika po upływie określonego niżej czasu. Zakres informacji możesz ustawieć za pomocą opcji z grupy <a href="#dynamic_help">Dynamiczna pomoc do znaczników i atrybutów</a> (u dołu tej planszy).

<p><b>Wyświetla po upływie... sekund</b><br />
Za pomocą tego suwaka ustaw czas (w sekundach), po którym w wypadku nieaktywności użytkownika, wyświetlona zostanie lista znaczników czy atrybutów lub dynamiczna podpowiedź dymkowa.




<a name="tags_list"></a>
<h2>Lista znaczników</h2>

<p>W tej grupie znajdują się opcje ustawień wyświetlania podpowiedzi dla znaczników.</p>
<p>Zaznacz odpowiednie opcje zależnie od tego, co chciałbyś widzieć na liście podpowiedzi. Nazwy opcji tłumaczą ich zastosowanie.</p>



<a name="attrs_events_list"></a>
<h2>Lista atrybutów i zdarzeń</h2>

<p>W tej grupie znajdują się opcje ustawień wyświetlania podpowiedzi dla atrybutów i zdarzeń znacznika.</p>
<p>Zaznacz odpowiednie opcje zależnie od tego, co chciałbyś widzieć na liście podpowiedzi. Nazwy opcji tłumaczą ich zastosowanie.</p>





<a name="dynamic_help"></a>
<h2>Dynamiczna pomoc do znaczników i atrybutów</h2>

<p>W tej grupie znajdują się opcje ustawień wyświetlania pomocy dla znaczników.</p>
<p>Zaznacz odpowiednie opcje zależnie od tego, co chciałbyś widzieć w dymku pomocy. Nazwy opcji tłumaczą ich zastosowanie.</p>

<!-- 
<p><b>Gdy kursor w atrybucie znacznika, pokaż opis tego atrybutu</b><br />
Zaznacz tę opcję, aby włączyć wyświetlanie podpowiedzi również wtedy, gdy kursor znajduje się wewnątrz atrybutu znacznika


<p><b>Nie pokazuj dostępnych zdarzeń w dymkach podpowiedzi</b><br />
Zaznacz tę opcję, aby w dymku pomocy nie pojawiała się lista zdarzeń dostępnych dla bieżącego znacznika (może ona być bardzo długa).

<p><b>Pokazuj informacje o wsparciu w przeglądarkach</b><br />
Zaznacz ten przełacznik, aby w dymku pomocy pojawiała się informacja o wsparciu danego elementu w różnych przeglądarkach internetowych. -->




<h2>Edytor plików definicyjnych</h2>



<p>Korzystając z przycisku znajdującego się w tej grupie włączysz narzędzie <a href="tagdata_editor_tdf.php">edytora plików definicyjnych znaczników</a>, które pozwala na tworzenie definicji dla nowych znaczników czy też modyfikację definicji dla zdefiniowanych już w Pająku języków znacznikowych np. zasad automatycznego uzupełniania czy obsługiwanych przez znaczniki atrybutów.

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="settings_codeinsight.php#settingslistcodeinsight">Inne ustawienia ułatwień</a>
	<li><a href="main_editor_codeinsight.php">Dynamiczny kod</a>
	<li><a href="coding_css.php">Tworzenie arkuszy stylów</a>
	<li><a href="tagdata_editor_tdf.php">Edytor plików definicyjnych znaczników</a>
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
