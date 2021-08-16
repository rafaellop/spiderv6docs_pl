
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Wspomaganie dla MySQL - Kolorowanie składni</title>

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
<h1>Wspomaganie dla MySQL - Kolorowanie składni</h1>

<!-- treść pomocy -->

<p>Pająk wspomaga tworzenie zapytań na kilka sposobów. Możesz korzystać z <a href="tool_mysql_query_creator.php">Kreatora zapytania SQL</a>, czy <a href="tool_mysql_export_tables.php">Kreatora eksportu z bazy danych</a>, możesz też tworzyć zapytania ręcznie. W przypadku pobierania danych z jednej tabeli, nie ma nawet potrzeby kolorowania jego składni. </p>
Sprawa komplikuje się jednak, gdy zapytanie obejmuje dane z wielu pól różnych tabel z wykorzystaniem różnych sposobów łączenia, funkcji itp. W takim wypadku bardzo wygodne może okazać się kolorowanie słów kluczowych zapytania (operatorów, instrukcji, funkcji). Pająk dostarcza schemat kolorowania kodu zapytań SQL w trzech odmianach:
<ul>
	<li><b>MySQL</b></li>
	<li><b>PostgreSQL</b></li>
	<li><b>SQL</b> (standardowy)</li>
</ul>

<p>Jeśli utworzysz zapytanie w nowym dokumencie, bardzo przydatna jest możliwość wykonania go za pomocą polecenia "Wykonaj polecenia z bieżącego dokumentu" umieszczonego w <a href="main_tabs_inspector_mysql.php#dbtree_dbname">menu podręcznym gałęzi "Nazwa bazy danych"</a> na drzewku struktury bazy danych na zakładce <a href="main_tabs_inspector_mysql.php">Inspektor MySQL</a>.</p>


<p>Możesz również dostosować kolorowanie składni. Służą do tego:</p>
<ul>
	<li><a href="syntax_editor.php">Edytor schematów kolorowania</a> - umożliwia edycję schematu kolorowania, czyli dodawanie nowych funkcji itp. Należy go używać z rozwagą, gdy wprowadzonych zmian nie można cofnąć</li>
	<li><a href="settings_editor_syntax.php">Ustawienia programu - kolorowanie składni</a> - umożliwia dopasowanie schematu kolorowania składni, jednak bez wpływu na sam schemat. Zmiany w każdej chwili można cofnąć do stanu domyślnego. Za pomocą tego okna możesz również przypisać rozszerzenia nazw plików, dla jakich dany schemat ma być domyślnym.</li>
</ul>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="coding_mysql.php">Wspomaganie dla MySQL - ogólnie</a></li>
	<li><a href="syntax_editor.php">Edytor schematów kolorowania</a></li>
	<li><a href="settings_editor_syntax.php">Ustawienia programu - kolorowanie składni</a></li>
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