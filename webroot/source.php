<?php 
/**
 * This is a BWi pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bwix variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$bwix['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
//echo "<br>-----------------------1 " . '..' . "--2 " . '..';
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
//echo "<br>-----------------------1 " . '..' . "--2 " . '..';
//$nytt1 = new CDice(2);
//echo "<br>-----------------------1 " . '..' . "--2 " . '..';

//$nytt2 = new CDiceHand(2);
//echo "<br>-----------------------1 " . '..' . "--2 " . '..';

// Do it and store it all in variables in the BWi container.
$bwix['title'] = "Visa källkod";

$bwix['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


$bwix['main'] .=<<<EOD

{$bwix['byline']}
EOD;
// Finally, leave it all to the rendering phase of BWi.
//echo "<br>---------------------" . BWI_THEME_PATH . "<br>";
include(BWI_THEME_PATH);
//echo "<br>---------------------" . BWI_THEME_PATH . "<br>";