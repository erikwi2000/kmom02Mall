<?php
/**
 * Render content to theme.
 *
 */

// Extract the data array to variables for easier access in the template files.
extract($bwix);

// Include the template functions.
//echo __DIR__;
include(__DIR__ . '/functions.php');

// Include the template file.
//echo __DIR__;
include(__DIR__ . '/index.tpl.php');