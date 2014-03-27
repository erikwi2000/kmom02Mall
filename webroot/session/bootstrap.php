 <?php
/**
 * Autoloader for classes.
 *
 * @param string $class the name of the class.
 */
function myAutoloader($class) {
  $path = "{$class}.php";
  if(is_file($path)) {
    include($path);
  }
}
spl_autoload_register('myAutoloader');
