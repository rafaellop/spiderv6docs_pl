
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Edytor - tryb edycji wizualnej</title>

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

	<table cellspacing="5" cellpadding="5" width="100%" border="0">
	<tr>
		<td>
			<!-- nagłowek głowny tematu -->
			<h1>Edytor - tryb edycji wizualnej</h1>
			<p>
				Tryb edycji wizualnej w znacznym stopniu ułatwia pracę nas stroną. Jest
				on przydatny przede wszystkim dla początkujących webmasterów, którzy nie
				mają jeszcze dość doświadczenia w tworzeniu stron www bezpośrednio w
				języku HTML w <a href="main_editor.php">trybie edycji kodu
				źródłowego</a>).
				<p>

					Aby przełączyć edytor z trybu edycji kodu na tryb wizualny użyj polecenia "Edytor wizualny" w <a href="main_menu_editor.php">menu podręcznym edytora edycji kodu</a> (ikona polecenia pokazana obok), bądź na <a href="toolbars_minitoolbar.php">mini pasku narzędzi</a> (miniaturka ikony
					pokazanej obok)
				</p>
				<p>
					W trybie edycji wizualnej można edytować jedynie dokumenty HTML.
				</p>
				<h2>Ograniczenia trybu edycji wizualnej</h2>
				<p>
					Większość narzędzi służących do wstawiania znaczników działa
					identycznie, jak w <a href="main_editor.php">trybie edycji kodu
					źródłowego</a>. Nie działają natomiast niektóre narzędzia służące do
					obsługi edytora.
					<p>
						Do najważniejszych narzędzi i własności, które są nieaktywne w trybie
						wizualnym należą:
					</p>
					<ul>
						<li><a href="main_tabs_inspector_tags.php">Inspektor znaczników</a>
						<li><a href="find_text.php">Znajdź i zamień</a>
						<li>Okna edycji niektórych znaczników, jak np. znacznik<tt>&lt;FRAMESET&gt;</tt>itp. Jeśli włączysz okna edycji znaczników
								struktury dokumentu, jak<tt>&lt;BODY&gt;</tt>, czy<tt>&lt;META&gt;</tt>, edytor automatycznie zostanie przełączony to
								trybu tekstowego.
						<li>Podkreślanie błędów pisowni i niektóre narzędzia <a href="spelling.php">sprawdzania pisowni</a>
						<li><a href="main_editor.php#gutter">Rynna edytora </a>, na której umieszczane mogą być dodatkowe informacje
						<li>Podział okna edytora na dwie części
						<li><a href="main_preview_dynamic.php">Dynamiczny podgląd</a>
						<li>Nawigatory kodu na <a href="main_tabs_navigator.php">zakładce
													Nawigator</a> (po użyciu <a href="main_tabs_navigator.php#html_categorized">nawigatora
													skategoryzowanego HTML</a> Pająk zostanie automatycznie przełączony na <a href="main_editor.php">tryb edycji kodu</a>)
						<li>Narzędzia do wstawiania skryptów
						<li><a href="tool_docinfo.php">Informacje o dokumencie</a></li>
					</ul>
					<h2>Praca w trybie wizualnym</h2>
					<p>
						Tworząc stronę w trybie wizualnym od razu widzisz, jak ona będzie
						wyglądała. Dzięki temu łatwiej jest rozmieścić elementy strony w taki
						sposób, w jaki później będą wyświetlane w przeglądarce.
					</p>
					<p>
						<b>Ikony znaczników</b>
						<br>
						W celu łatwiejszego odnalezienia na stronie
						znaczników formatowania akapitu (<tt>&lt;P&gt;</tt>, <tt>&lt;DIV&gt;</tt>, <tt>&lt;BR&gt;</tt>,<tt>&lt;SPAN&gt;</tt>, a także dla komentarzy), w
						oknie edytora, w miejscu gdzie w kodzie wstawiony jest znacznik
						umieszczony będzie jego symbol.
						<p>
							<b>Tworzenie i formatowanie tabeli</b>
							<br>
							Ramki tabeli i jej komórek
							oznaczone są w edytorze za pomocą szarych linii. Po kliknięciu w ramkę
							tabeli, możesz zmienić jej wymiar przeciągając ją w odpowiednie miejsce.
							<p>
								<b>Wstawianie obrazków</b>
								<br>
								Aby wstawić obrazek na stronę, użyj
								narzędzia <a href="tool_graphic_insert.php">Wstawianie grafiki</a>.
								Możesz tez dwukliknąć nazwę pliku obrazka na liście plików w zakładce <a href="main_tabs_myservices.php">Moje serwisy</a>(narzędzie do wstawiania
								grafiki uruchomi się automatycznie). Możesz tez skorzystać ze skrótu
								klawiszowego (standardowo<tt>Shift+Ctrl+I</tt>). Nie jest obsługiwane
								natomiast przeciąganie obrazków do dokumentu.
								<h2>Ustawienia edycji wizualnej</h2>
								<p>
									Aby kod utworzony podczas pracy w trybie wizualnym można było łatwo
									edytować, podczas przełączania do <a href="main_editor.php">trybu edycji
									kodu</a> może on zostać sformatowany za pomocą narzędzi <a href="formatter_general.php">formatowania kodu</a>. W oknie <a href="settings_editor_wysiwyg.php">Ustawień programu</a> możesz wybrać <a href="formatter_markuplangs.php">schemat formatowania HTML</a>, jaki ma
									zostać zastosowany. W&nbsp;tym samym oknie możesz ustawić inne opcje trybu
									wizualnego
								</p>
								<!-- treść pomocy -->
		</td>
	</tr>
	</table>

	<table>
	<tr>
		<td width="100%" class="tbrelatedtopics"><!-- pokrewne tematy -->
			<ul>
				<li><a href="main_editor_general.php">Edytor - ogólnie</a>
				<li><a href="main_editor.php">Edycja w trybie edycji kodu źródłowego</a>
				<li><a href="toolbars_minitoolbar.php">Mini pasek edytora</a>
				<li><a href="main_tabs_general.php">Inne zakładki</a>
				<li><a href="main_window_desc.php">Główne okno programu</a></li>
			</ul>
		</td>
		<td valign="top" class="srodek"><a href="#top">Do&nbsp;góry</a></td>
	</tr>
	</table>



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