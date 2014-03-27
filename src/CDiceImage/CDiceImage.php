<?php
/**
 * A dice with images as graphical representation.
 *
 */
class CDiceImage extends CDice {

  /**
   * Properties
   *
   */
  const FACES = 6;


  /**
   * Constructor
   *
   */
  public function __construct() {
    parent::__construct(self::FACES);
  }


  /**
   * Get the rolls as a serie of images.
   *
   */
	 
/*
 public function GetRollsAsImageList() {
    $html = "<ul class='dice'>";
    foreach($this->rolls as $val) {
      $val = $dice->GetLastRoll();
      echo "<br>====== dice last roll " . $val;
      $html .= "<li class='dice-{$val}'></li>";
			echo "<br> CHECK01  ";
    }
    $html .= "</ul>";
    return $html;
  }
*/


}
