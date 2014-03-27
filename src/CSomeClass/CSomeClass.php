<?php
class SomeClass {
 
  public static $counter = 0;
 
  public function __construct() {
    self::$counter++;
  }
 
  public function __destruct() {
    self::$counter--;
  }
}
  