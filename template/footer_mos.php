 <?php 
function getCurrentUrl_() {
  $url = "http";
  $url .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
  $url .= "://";
  $serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
    (($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? '' : ":{$_SERVER['SERVER_PORT']}");
  $url .= $_SERVER["SERVER_NAME"] . $serverPort . htmlspecialchars($_SERVER["REQUEST_URI"]);
  return $url;
}

$self = $_SERVER['PHP_SELF']; 
$dir = trim(dirname($self), '/'); 
$dir = str_replace('kod-exempel/', '', $dir);
?>

		<?= "vmmmmmmmmmmmmmmv"?>

<p class=footer>
  <a href="http://validator.w3.org/check/referer">HTML5</a>  
  <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
  <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS3</a>
  <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
  <a href="http://validator.w3.org/i18n-checker/check?uri=<?=getCurrentUrl_()?>">i18n</a>
  <a href="http://dbwebb.se/kod-exempel/source.php?dir=<?=$dir?>&amp;file=<?=basename($self)?>#file">Sourcecode</a>
	

</p>

<script>var _gaq=[['_setAccount','UA-22093351-1'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
