
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Ustawienia programu - Dodatkowe ułatwienia</title>

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
<h1>Ustawienia programu - Inne ułatwienia</h1>


<!-- treść pomocy -->
<p>
W tej kategorii ustawień znajdziesz liczne przełączniki, które pozwalają na włączenie bądź wyłączenie działania dodatkowych funkcji programu, które ułatwiają pracę przy tworzeniu dokumentów. Znajdziesz tutaj następujące grupy ustawień:

<h2>Ustawienia wstawiania znaczników</h2>

<p>Ta grupa jest dość ogólna i zawiera przełączniki określające np. wstawianie podwójnych cudzysłowów przy wpisaniu pojedynczego czy uzupełnianie atrybutu ALT przy wstawianiu grafiki. Oto lista opcji:

<p><b>Wstawiaj znacznik <tt>&lt;BR&gt;</tt> po wciśnięciu klawisza Enter</b><br>
Zaznacz tę opcję, aby spowodować wstawianie znacznika <tt>&lt;BR&gt;</tt> po wciśnięciu klawisza ENTER.

<p><b>Nie przenoś do nowej linii po wstawieniu <tt>&lt;BR&gt;</tt></b><br />
Zaznacz tę opcję, aby wstawienie znacznika <tt>&lt;BR&gt;</tt> za pomocą klawisza ENTER lub poleceń menu lub skrótów klawiszowych nie przenosiło kursora do nowej linii.

<p><b>Wstawiaj znacznik <tt>&lt;LI&gt;</tt> w nowej linii gdy Enter w linii z <tt>&lt;LI&gt;</tt></b><br />
Zaznacz tę opcję, aby spowodować wstawianie znacznika  <tt>&lt;LI&gt;</tt> po wciśnięciu klawisza ENTER w linii, w której znajduje się już znacznik <tt>&lt;LI&gt;</tt>. Dzięki temu można znacznie ułatwić sobie tworzenie listy wyliczeniowych.

<p><b>Używaj znaczników <tt>&lt;STRONG&gt;</tt> i <tt>&lt;EM&gt;</tt> zamiast <tt>&lt;B&gt;</tt> i 
<tt>&lt;I&gt;</tt></b><br>
Zaznacz tę opcję, aby podczas wstawiania znaczników formatowania tekstu używać znaczników wyróżnień (<tt>&lt;STRONG&gt;</tt>, <tt>&lt;EM&gt;</tt>) zamiast <tt>&lt;B&gt;</tt> i <tt>&lt;I&gt;</tt>.

<p><b>Uzupełniaj ALT w <tt>&lt;IMG ...&gt;</tt> przy wstawianiu</b><br>
Zaznacz tę opcję, aby spowodować automatyczne uzupełnianie pola ALT dla wstawianych grafik.

<p><b>Wstawiaj <tt>&lt;META&gt;</tt> i <tt>&lt;BODY&gt;</tt> w miejscu kursora</b><br>
Zaznacz tę opcję, aby program nie próbował umieszczać znaczników <tt>&lt;META&gt;</tt> i <tt>&lt;BODY&gt;</tt> na początku dokumentu, ale wstawiał je w miejscu kursora.

<p><b>Zgodnie ze standarem XML zawartość znaczników <tt>&lt;SCRIPT&gt;</tt> oraz <tt>&lt;STYLE&gt;</tt> umieszczaj w sekcji <tt>&lt;![CDATA[ ... ]]&gt;</tt></b><br />
Zaznacz tę opcję, by włączyć funkcję obejmowania bloków skryptów oraz arkuszy stylów osadzonych w dokumentach HTML za pomocą konstrukcji XML-owej <tt>&lt;![CDATA[ ... ]]&gt;</tt>, co umożliwia zgodność tworzonych stron ze standardem XHTML.

<p><b>Nie ukrywaj <tt>&lt;SCRIPT&gt;</tt>..<tt>&lt;/SCRIPT&gt;</tt></b><br>
Zaznacz tę opcję, aby program nie dodawał komentarzy wokół skryptów, które powodują ukrywanie skryptów przed przeglądarkami bez obsługi języków skryptowych.

<p><b>Nie ukrywaj <tt>&lt;STYLE&gt;</tt>..<tt>&lt;/STYLE&gt;</tt></b><br>
Zaznacz tę opcję, aby program nie dodawał komentarzy wokół arkuszy stylów, które powodują ich ukrywanie przed przeglądarkami bez obsługi stylów.

<p><b>Obejmuj tekst stylem za pomocą znacznika</b><br>
Ta grupa określa sposób obejmowania zaznaczonego tekstu stylem. Możesz wybrać tutaj preferowaną metodę obejmowania zaznaczonego tekstu stylem zgodnie albo za pomocą konstrukcji <tt>&lt;div&nbsp;style="..."&gt;</tt>...<tt>&lt;/div&gt;</tt> albo za pomocą <tt>&lt;span&nbsp;style="..."&gt;</tt>...<tt>&lt;/span&gt;</tt>






<h2>Dodatkowe ułatwienia edycyjne</h2>

<p>Kolejna grupa ustawień zawiera opcje istotne nie tylko podczas edycji znaczników, ale również podczas edycji kodu napisanego w językach skryptowych i CSS.</p>


<p><b>Automatycznie zamieniaj znaki <b>" ( { [</b> na podwójne</b><br>
Zaznacz tę opcję, aby program automatycznie zamieniał wprowadzony z klawiatury znak cudzysłowa na podwójny cudzysłów, a także automatycznie wstawiał odpowiednie nawiasy domykające po wpisaniu nawiasu otwierającego. W przypadku zaznaczonego tekstu, korzystanie z tej funkcji obejmie zaznaczony tekst parą odpowiednich znaków. Dodatkowo funkcja ta posiada funkcję odwrotna, czyli automatyczne usuwanie podwójnych nawiasów i cudzysłowów w sytuacji, gdy pomiędzy nimi nie znajduje się żaden inny tekst, a wciśnięto klawisz BACKSPACE lub DELETE z jednocześnie przytrzymanym klawiszem CTRL. Przykładowo w sytuacji (|) gdzie | to pozycja kursora, wciśnięcie DELETE lub BACKSPACE usuwa obydwa znaki otwarcia i zamknięcia nawiasów. Dla cudzysłowów poprzedzonych znakami \ (np. w PHP) usuwana jest cała sekwencja, czyli w przykładzie \"|\" gdzie | to kursor wciśnięcie DELETE lub BACKSPACE usunie całą sekwencję \"\". Funkcja działa również dla klawisza DELETE w sytuacji |() oraz BACKSPACE w sytuacji ()|, gdzie | to pozycja kursora. Oczywiście funkcja działa dla wszystkich uzupełnianych automatycznie znaków, czyli ",',`,(),{},[],<> i tylko wtedy, gdy włączona jest funkcja automatycznego uzupełniania.

<p><b>Zamieniaj &quot; ( { [ na podwójne tylko gdy zaznaczony tekst</b><br>
Zaznacz tę opcję, aby nawiasy otwierające i cudzysłowy były zamieniane na podwójne (nawiasy domykające) tylko w wypadku, gdy w edytorze jest zaznaczony jakiś tekst. W przeciwnym wypadku wstawiony będzie pojedynczy znak.

<p><b>Zamieniaj znaki " ( { [ na podwójne również, gdy sąsiadują</b><br>
Zaznacz tę opcję, aby program automatycznie zamieniał wprowadzony z klawiatury znak " lub ( lub { lub [ na podwójny odpowiednik (np. {}) również wtedy, gdy tuż obok wstawianego znaku, znajduje się jego zamykający.</p>

<p><b>Uaktualniaj datę w META przy zapisie</b><br>
Zaznacz tę opcję, aby przy każdym zapisie edytowanego dokumentu program uaktualniał datę modyfikacji zapisaną w sekcji META na datę zapisu dokumentu.

<p><b>Uaktualniaj pole "Authoring_tool" w META</b><br>
Zaznacz tę opcję, aby program uaktualniał pole "Authoring_tool" w sekcji META, przy każdorazowym zapisie dokumentu. Pole to zawiera informację o narzędziu użytym do tworzenia dokumentu.

<p><b>Nie ostrzegaj przy zagnieżdżaniu znaczników</b><br>
Domyślnie program ostrzega komunikatem, gdy użytkownik próbuje umieścić jeden znacznik wewnątrz drugiego. Wyłączając tę opcję spowodujesz, że program nie będzie już zgłaszał ostrzeżenia.

<p><b>Wstawiaj znaczniki i atrybuty HTML 4.0 małymi literami</b><br>
Zaznacz tę opcję, aby program wstawiał wszystkie znaczniki z okienek narzędziowych (a także ich atrybuty) małymi literami.

<p><b>Wstawiaj szesnastkowe kody kolorów wielkimi literami</b><br>
Zaznacz tę opcję, aby wstawiane przez program szesnastkowe kody kolorów były zapisywane wielkimi literami.

<p><b>Wstawiaj skrócone kody kolorów w CSS jeśli to możliwe</b><br>
Zaznacz tę opcję, aby kody kolorów wstawianie z palety kolorów w arkuszach stylów CSS były formatowane za pomocą skróconego kodowania, np. #FFF zamiast #FFFFFF, #ABC zamiast #AABBCC, itd.</p>

<p><b>Wstawiaj spację przed "/&gt;" w XHTML</b><br>
Zaznacz tę opcję, aby program dopisywał dodatkową spację przed znakiem domknięcia znaczników nie posiadających znacznika domykającego.

<p><b>Domyślnie wstawiaj \ przed znakami specjalnymi</b><br>
Zaznacz tę opcję, jeśli program ma domyślnie zawsze umieszczać znak '\' przed znakami specjalnymi (np. ") w znacznikach umieszczanych wewnątrz skryptów.

<p><b>Obejmuj wartość zdarzenia w znaczniku apostrofami</b><br>
Zaznacz tę opcję, aby podczas tworzenia, bądź reedycji znaczników za pomocą narzędzi do tworzenia znaczników, wartości przeznaczone dla zdarzeń (definiowane w oknie '<a href="tool_events_attributes.php">Dodatkowe zdarzenia i atrybuty</a>') obejmowane były apostrofami.



<a name="default_lang"></a>
<h2>Domyślny język dokumentów</h2>

<p>Wybierz z listy język, który będzie domyślnie wykorzystywany w przypadku niemożliwości automatycznego rozpoznania na podstawie DOCTYPE ani xmlns.

<a name="span_div"></a>

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
   <li><a href="down_syntax_check.php">Sprawdzanie składni</a>
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