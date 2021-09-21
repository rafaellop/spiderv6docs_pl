
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>HTML Help - Szybki HTML Help z folderu</title>

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
<h1>HTML Help - Szybki HTML Help z folderu</h1>



<p>
Pająk, prócz budowy skomplikowanych projektów HTML Help, umożliwia także bardzo szybką kompilację projektu utworzonego na bazie już przygotowanego katalogu z zawartością HTML. Nie jest wtedy wymagane sporządzanie ani spisu treści, ani indeksu, ani nawet wymaganego przy normalnym projekcie przygotowania pliku projektu. W proponowanej formie kompilacji katalogu z zawartością HTML wymagane jest tylko ustawienie kilku elementarnych opcji - resztę wykonuje sam program.
</p>

<h2>Uruchamianie</h2>

<p>Opisywane narzędzie możesz uruchomić za pomocą przycisku oznaczonego ikoną pokazaną powyżej. Przycisk uruchomienia tego okna znajduje się np. w menu HTML Help oraz na pasku narzędzi HTML Help.

<h2>Okno główne</h2>

<p>
W oknie głównym kompilacji folderu do CHM znajdują się dwie zakładki: "Ogóle ustawienia", "Więcej ustawień", oraz przycisk kompilacji i podglądu, do wyboru, już skompilowanego pliku CHM, oraz raportu z kompilacji; na dole znajduje się również pasek postępu kompilacji. Domyślnie wszystkie opcje są włączone (prócz wyboru czcionki, bo ta jest zdefiniowana w plikach HTML), więc praktycznie wystarczy wybrać katalog, wpisać w odpowiednie pola nazwy i rozpocząć kompilację.
</p>

<h2>Ogólne ustawienia</h2>

<p><b>Folder do kompilacji do pliku CHM</b><br />
W polu tym należy umieścić nazwę katalogu przeznaczonego do kompilacji. Katalog wybieramy za pomocą przycisku umieszczonego obok pola.
</p>
<p><b>Strona startowa pomocy</b><br />
W polu tym, korzystając z przycisku obok pola, należy wskazać plik z kompilowanego katalogu, który będzie wyświetlany jako strona startowa.
</p>
<p><b>Tytuł okna pomocy</b><br />
W polu tym wpisujemy nazwę (tytuł), jaki będzie pokazywany na pasku tytułowym pliku CHM.
</p>
<p><b>Nazwa pliku CHM</b><br />
W tym polu należy wpisać nazwę pliku, jaki powstanie po kompilacji. Należy podać nazwę wraz z rozszerzeniem .chm
</p>
<p><b>Zakładki oraz pasek narzędzi</b><br />
Część ta dotyczy zawartości panelu sterowania - które z zakładek mają być obecne, oraz czy ma widnieć pasek z przyciskami.
</p>
<ul>
   <li><p><b>Zakładka "Spis treści"</b><br />
	Po zaznaczeniu tej opcji umieszczona zostanie zakładka ze spisem treści, sporządzonym na podstawie ustawień domyślnych.
   </p>
   <li><p><b>Zakładka "Skorowidz"</b><br />
	Po zaznaczeniu tej opcji umieszczona zostanie zakładka ze skorowidzem, sporządzonym na podstawie ustawień domyślnych.
   </p>
   <li><p><b>Zakładka "Wyszukaj"</b><br />
	Po zaznaczeniu tej opcji umieszczona zostanie zakładka z możliwością wyszukiwania, ale bez opcji rozszerzonych.
   </p>
   <li><p><b>Zakładka "Ulubione"</b><br />
	Po zaznaczeniu tej opcji umieszczona zostanie zakładka, w której można umieścić wybrane pozycje do ich ponownego, szybkiego otwarcia.
   </p>
   <li><p><b>Umieść pasek narzędzi w oknie pomocy</b><br />
	Po zaznaczeniu tej opcji u góry pliku CHM umieszczony zostanie pasek narzędziowy ze standardowymi przyciskami.
   </p>
</ul>

<h2>Więcej ustawień</h2>

<p>
Zadaniem tej zakładki jest ogólne ustalenie właściwości dotyczących kompilowanych plików HTML, oraz języka.
</p>

<p><b>Spis treści i indeks</b><br />
Widniejące poniżej opcje dotyczą sposobu interpretacji przez kompiler plików HTML przy konstruowaniu spisu treści oraz indeksu.
</p>
<ul>
   <li><p><b>Użyj <tt>&lt;TITLE&gt;</tt> jako nazw pozycji w spisie treści</b><br />
	Celem tej opcji jest, aby program próbował odczytać i użyć w tworzonym automatycznie spisie treści tytułów umieszczonych w dokumentach w obrębie znacznika <tt>&lt;TITLE&gt;</tt>. Gdy opcja ta jest wyłączona, albo gdy program nie może znaleźć znacznika <tt>&lt;TITLE&gt;</tt>, użyta zostanie nazwa pliku bez rozszerzenia.
   </p>
   <li><p><b>Etykiety w dokumentach na podpozycje spisu</b><br />
	Zaznaczając tą opcję powodujemy, że program będzie próbował odczytać zdefiniowane w dokumencie etykiety, by następnie utworzyć z nich podkategorie w spisie treści dla dokumentu, z którego są odczytywane.
   </p>
   <li><p><b>Użyj <tt>&lt;TITLE&gt;</tt> jako nazw pozycji w skorowidzu</b><br />
	Celem tej opcji jest, aby program próbował odczytać i użyć w tworzonym automatycznie spisie treści tytułów umieszczonych w dokumentach w obrębie znacznika <tt>&lt;TITLE&gt;</tt>. Gdy opcja ta jest wyłączona, albo gdy program nie może znaleźć znacznika <tt>&lt;TITLE&gt;</tt>, użyta zostanie nazwa pliku bez rozszerzenia.
   </p>
   <li><p><b>Etykiety w dokumentach na pozycje indeksu</b><br />
	Zaznaczając tą opcję powodujemy, że program będzie próbował odczytać zdefiniowane w dokumencie etykiety, a następnie utworzy z nich pozycje indeksu.
   </p>
</ul>

<p><b>Język pomocy</b><br />
Widniejące poniżej opcje dotyczą użytego języka. Jeśli został on zdefiniowany w użytych plikach składowych, nie ma potrzeby modyfikacji poniższych opcji.
</p>

<ul>
   <li><p><b>Język</b><br />
		Z listy tej można wybrać język, w jakim napisane są strony wchodzące w skład skompilowanego HTML Help.
	</p>
   <li><p><b>Czcionka</b><br />
		Korzystając z przycisku obok oznaczonym literką "A" móżna wybrać rodzaj czcionki, oraz jej rozmiar. Czcionka ta będzie miała zastosowanie w interfejsie skompilowanego pliku CHM - nie do wyświetlenia zawartości stron.
	</p>
   <li><p><b>Zestaw znaków</b><br />
		Z listy tej można wybrać odpowiedni skrypt dla czcionki używanej na stronach skompilowanego HTML Help.
	</p>
</ul>



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
	<li><a href="tool_htmlhelp_hhp_compilation.php">Kompiluj dokument HTML Help</a>
	<li><a href="tool_htmlhelp_compiler_info.php">Informacja dla kompilatora HTML Help</a>
	<li><a href="tool_htmlhelp_compiler_services.php">HTML Help a serwisy w Pająku</a>

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
