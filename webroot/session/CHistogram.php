 <?php
/**
 * A class for printing a histogram.
 *
 */
class CHistogram {

  /**
   * Properties
   *
   */
  private $res;

  /**
   * Constructor
   *
   */
  public function __construct() {
    //echo __METHOD__;
  }


  /**
   * Destructor
   *
   */
  public function __destruct() {
    //echo __METHOD__;
  }


  /**
   * Prepare the histogram by calculate occurences for each key.
   *
   * @param array $values the values to prepare out the histogram from.
   */
 /*zz private function PrepareHistogram($values) {
    $this->res = array();
    foreach($values as $key => $value) {
      @$this->res[$value] .= '*'; // Use @ to ignore warning for not initiating variabel, not really nice but powerful.
    }
    ksort($this->res);
  }

zz*/
  /**
   * Return a textual representation of the histogram.
   *
   * @param array $values the values to print out the histogram from.
   * @return string as the histogram in a ul li list.
   */
 /*vv public function GetHistogram($values) {
    $this->PrepareHistogram($values);

    $html = "<ul>";
    foreach($this->res as $key => $val) {
      $html .= "<li>{$val} ($key)</li>";
    }
    $html .= "</ul>";

    return $html;
  }
vv*/

  /**
   * Return a textual representation of the histogram and include the empty ones.
   *
   * @param array $values the values to print out the histogram from.
   * @param int $max number of staples in the histogram.
   * @return string as the histogram in a ol li list.
   */
/*ww  public function GetHistogramIncludeEmpty($values, $max) {
    $this->PrepareHistogram($values);

    $html = "<ol>";
    for($i = 1; $i <= $max; $i++) {
      $val = isset($this->res[$i]) ? $this->res[$i] : null;
      $html .= "<li>{$val}</li>";
    }
    $html .= "</ol>";

    return $html;
  }
ww*/

}
