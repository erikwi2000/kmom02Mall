 <?php 
/**
 * This is a BWi pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bwix variable with its defaults.
include(__DIR__.'/webroot/config.php'); 


// Define what to include to make the plugin to work
$bwix['stylesheets'][]        = 'css/slideshow.css';
$bwix['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the BWi container.
$bwix['title'] = "Slideshow för att testa JavaScript i BWi";

$bwix['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["one.jpg", 
"two.jpg", "tree.jpg", "four.jpg",  "five.jpg", 
"six.jpg", "six.jpg"]'>
<img src='img/me/two.jpg' width='700' height='200' alt=''/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur BWi fungerar tillsammans med JavaScript.</p>
EOD;


// Finally, leave it all to the rendering phase of BWi.
include(BWI_THEME_PATH);
