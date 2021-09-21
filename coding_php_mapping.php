
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Wspomaganie dla PHP - Mapowanie ścieżki do pliku na adres URL</title>

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
<h1>Wspomaganie dla PHP - Mapowanie ścieżki do pliku na adres URL</h1>



<!-- treść pomocy -->


<p>Aby móc zobaczyć efekty działania skryptu PHP musi on zostać wykonany przez interpreter PHP. W tym celu należy przeglądać taki skrypt nie bezpośrednio odczytując go z twardego dysku, ale jako stronę wysyłaną przez serwer. Dlatego trzeba ustawić mapowanie ścieżki do pliku na adres serwera. Możesz to zrobić w oknie ustawień serwisu (dla każdego serwisu trzeba ustawić osobne mapowanie). </p>

<p>Pamiętaj, że aby obejrzeć stronę, musisz mieć uruchomiony serwer <tt>http</tt>. Najpopularniejszym obecnie takim serwerem jest Apache (<a href="https://www.apache.org" target="_blank">www.apache.org</a>). Serwer ten musi udostępniać dokumenty Twojego serwisu.</p>

<p>Możliwe jest ustawienie większej mapowań dla jednego serwisu. Jest to przydatne w sytuacji, gdy elementy serwisu dostępne są nie pod jednym, ale pod większą ilością adresów, np. w poddomenach itp.</p>


<p><b>Przykładowe mapowanie</b></p>

<p>Załóżmy, że Twój serwis umieszczony jest w folderze:<br />
<tt>D:\moje_serwisy\nazwa_serwisu1\</tt></p>

<p>Serwer udostępnia dokumenty ego serwisu pod adresem:<br />
<tt>https://127.0.0.1/nazwa_serwisu1</tt></p>

<p>Aby móc przeglądać wykonane skrypty PHP z poziomu okna Pająka w oknie Przeglądanie, musisz ustawić <a href="service_properites.php#service_properties_mappings">mapowanie sieciowe w oknie Właściwości serwisu</a>. </p>

<ul>
	<li><b>Nazwa:</b> <tt>Dowolna nazwa mapowania</tt><br /></li>
	<li><b>Mapowany folder:</b> <tt>\</tt> <i>(ścieżka względna względem katalogu głównego serwisu)</i></li>
	<li><b>Na adres URL:</b> <tt>https://127.0.0.1/nazwa_serwisu1</tt></li>
</ul>


<h2>Edycja plików online</h2>
<p>Jeśli nie masz uruchomionego lokalnego serwera http, możesz edytować pliki bezpośrednio z serwera, otwierając plik z zakładki <a href="main_tabs_myftpservers.php">Moje serwery</a>. </p>

<p>Aby oglądać strony edytowane online, należy ustawić mapowanie ścieżki na serwerze na adres URL. Jest to konieczne, by Pająk wiedział pod jaki adres ma skierować żądanie wyświetlanie strony.</p>

<p>Możliwe jest ustawienie większej mapowań dla jednego serwera. Jest to przydatne w sytuacji, gdy elementy serwisu dostępne są nie pod jednym, ale pod większą ilością adresów, np. w poddomenach itp.</p>

<p><b>Przykładowe mapowanie</b></p>

<p>Załóżmy, że Twój serwis umieszczony jest na serwerze w folderze:<br />
<tt>/www/public_html</tt></p>

<p>Serwer udostępnia dokumenty ego serwisu pod adresem:<br />
<tt>https://moja_nazwa.pl/</tt></p>

<p>W takim wypadku należy w oknie <a href="settings_network_ftpservers_add.php">Właściwości serwera FTP</a> w zakładce Ustawienia mapowania utworzyć mapowanie:</p>

<ul>
	<li><b>Nazwa:</b> <tt>Dowolna nazwa mapowania</tt><br /></li>
	<li><b>Mapowany folder:</b> <tt>/www/public_html</tt></li>
	<li><b>Na adres URL:</b> <tt>https://moja_nazwa.pl/</tt></li>
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
	<li><a href="coding_php.php">Wspomaganie dla PHP - ogólnie</a></li>
	<li><a href="main_tabs_myftpservers.php">Zakładka "Moje serwery"</a>
	<li><a href="network_opendoc_ftp.php">Edycja plików online</a>
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
