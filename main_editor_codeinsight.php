
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Pajak V6" />

<!-- nazwa strony pomocy -->
<title>Dynamiczny kod</title>

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
<h1>Dynamiczny kod</h1>


<p>Współczesne edytory kodu wspomagają programistów w znaczącym stopniu. W wielu wypadkach programista nie musi pamiętać dokładnej składni polecenia, kolejności argumentów wywołania funkcji itp., gdyż z pomocą przychodzi mu mechanizm Dynamicznego kodu. </p>

<p>Tak na prawdę na Dynamiczny kod składają się w Pająku trzy mechanizmy

<ul>
	<li>Automatyczne uzupełniane znaczników</li>
	<li><a href="#code_completion">Dynamiczny kod</a></li>
	<li><a href="#code_parameter">Dynamiczne podpowiedzi</a></li>
</ul></p>


<a name="tag_completion"></a>
<h2>Automatyczne uzupełniane znaczników</h2>

<p>Automatyczne uzupełniane znaczników jest bardzo pomocne podczas tworzenia kodu w języku znacznikowym (jak HTML, WML, MathML, SVG itd). Dzięki tej funkcji wystarczy wpisać początek znacznika - reszta wklei się sama. </p>

Automatyczne uzupełniane znaczników możesz włączyć klikając na ikonę  na <a href="toolbars_minitoolbar.php">mini pasku edytora</a>.

<p>Więcej o automatycznym uzupełnianiu znaczników możesz przeczytać w temacie dotyczącym <a href="coding_markuplangs_codeinsight.php">wspomagania dla języków znacznikowych</a>.</p>


<a name="code_completion"></a>
<h2>Dynamiczny kod</h2>

<p>Dynamiczny kod podpowiada co możesz w danej chwili wstawić do dokumentu. Najpierw rozpoznaje język, w którym aktualnie tworzysz kod, analizuje go, a następnie porównując z danymi w plikach definicyjnych przedstawia listę kostrukcji możliwych do użycia w bieżącym kontekście.</p>

<p>Dynamiczny kod możesz wywołać na dwa sposoby:
<ol>
	<li> za pomocą polecenia aktywowania dynamicznego kodu na mini pasku edytora (ikona pokazana obok). Podpowiedzi będą pojawiać się po chwili nieaktywności.</li>
	<li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnie wpisywanej funkcji wciskając skrót klawiszowy <tt>Ctrl+Spacja</tt></li>
</ol>
</p>


<p>Więcej o Dynamicznym kodzie możesz przeczytać w tematach dotyczących:

<ul>
	<li><a href="coding_markuplangs_codeinsight.php#code_completion">wspomagania dla języków znacznikowych</a></li>
	<li><a href="coding_php_codeinsight.php#code_completion">wspomagania dla PHP</a></li>
	<li><a href="coding_scripts_jsvb_codeinsight.php#code_completion">wspomagania dla skryptów JavaScript</a></li>
	<li><a href="coding_css_codeinsight.php">wspomagania dla arkuszy stylów CSS</a></li>
</ul></p>




<a name="code_parameter"></a>
<h2>Dynamiczne podpowiedzi</h2>

<p>Dynamiczne podpowiedzi wyświetlają w dymkach podpowiedzi dla bieżącego znacznika (w językach znacznikowych), lub listę argumentów bieżącej funkcji (w językach JavaScript i PHP). narzedzie automatycznie rozpoznaje język, w którym aktualnie pracujesz i dostosowuje do niego podpowiedzi.</p>

<p>Narzędzie można wywołać na dwa sposoby:<br />

<ol>
	<li> <b>automatyczne podpowiadanie</b> - skorzystaj z polecenia na mini pasku edytora. Po wpisaniu nazwy znacznika (w języku znacznikowym), bądź nazwy funkcji (w skryptach) odczekaj chwilę, a pojawi się podpowiedź. Ikona polecenia została pokazana obok.</li>
	<li><b>za pomocą skrótu klawiszowego </b> - możesz w każdej chwili wywołać dymek z podpowiedzią do aktualnego znacznika, bądź funkcji, wciskając skrót klawiszowy <tt>ctrl+\</tt></li>
</ol></p>

<p>Więcej na temat dynamicznych podpowiedzi możesz przeczytać w tematach dotyczących:
<ul>
	<li><a href="coding_markuplangs_codeinsight.php#code_parameter">wspomagania dla języków znacznikowych</a></li>
	<li><a href="coding_php_codeinsight.php#code_parameter">wspomagania dla PHP</a></li>
	<li><a href="coding_scripts_jsvb_codeinsight.php#code_parameter">wspomagania dla skryptów JavaScript</a></li>
</ul></p>

<!-- treść pomocy -->


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Pokrewne tematy</h4>
<ul>
	<li><a href="main_editor.php">Edytor kodu źródłowego</a>
	<li><a href="coding_markuplangs_codeinsight.php">Wspomaganie dla języków znacznikowych - CodeInsight</a>
	<li><a href="coding_php_codeinsight.php">Wspomaganie dla PHP - CodeInsight</a>
	<li><a href="coding_css_codeinsight.php">Wspomaganie dla CSS - CodeInsight</a>
	<li><a href="coding_scripts_jsvb_codeinsight.php">Wspomaganie dla JavaScript - Dynamiczny kod</a>
	
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