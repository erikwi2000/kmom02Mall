 <?php 
/**
 * This is a BWi pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bwix variable with its defaults.
include(__DIR__.'/webroot/config.php'); 



// Do it and store it all in variables in the BWi container.
$bwix['title'] = "404";
$bwix['header'] = "";
$bwix['main'] = "This is a BWi 404. Document is not here.";
$bwix['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of BWi.
include(BWI_THEME_PATH);
