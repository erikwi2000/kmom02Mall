<?php
/**
 * A hand of dices, with graphical representation, to roll.
 *
 */
class CDiceHand {

  /**
   * Properties
   *
   */
   	private $dices;					// Sidor på tärningen
  	private $numDices;      // Antal tärningar
		private $sum;           //summan av alla tärningars slag aka EN
        public $html;
    private $rounds;
		private $sumRound;
		private $highScore;

	


  /**
   * Constructor
   *
   * @param int $numDices the number of dices in the hand, defaults to six dices. 
   */
  public function __construct($numDices = 1) {
    for($i=0; $i < $numDices; $i++) {
      $this->dices[] = new CDiceImage();
    }
    $this->numDices = $numDices;
    $this->sum = 0;
    

    $this->sum = 0;
    $this->sumRound = 0;
		$this->rounds = 0;
		$this->highScore = 0;
		
					
  }
	
/*	---------------------
    public function __construct($numDices = 5) {
    for($i=0; $i < $numDices; $i++) {
      $this->dices[] = new CDiceImage();
    }
    $this->numDices = $numDices;
    echo "<br> num of dices -----  ".  $numDices;
    $this->sum = 0;
  }
  ------------------------
*/
	



  /**
   * Roll all dices in the hand.
   *
   */
  public function Roll() {
    $this->sum = 0;
    for($i=0; $i < $this->numDices; $i++) {
      $roll = $this->dices[$i]->Roll(1);
      $this->sum += $roll;
      $this->sumRound += $roll;

			if ($this->sumRound > $this->highScore)
			{
			$this->highScore = $this->sumRound;
			}
			$this->rounds += 1;
    }
  }


  /**
   * Get the sum of the last roll.
   *
   * @return int as a sum of the last roll, or 0 if no roll has been made.
   */
	 
  public function GetPlay() {
    return $this->sum;
  }
	
  public function GetRolls() {
    return $this->sum;
  }

	
	// Number of rounds---------------in a play
	 public function GetRoundsOK() {
	//	 echo "<br>this-rounds in GetRoundsOK-------------<br> " .  $this->rounds;
 
    return $this->rounds;
  }
		 public function GetHighScore() {
    return $this->highScore;
  }

  /**
   * Init the round.
   *
   */
  public function InitRound() {
	unset($dicehand);
    $this->sumRound = 0;
		$this->rounds = 0;
		$this->highScore = 0;		
  }
	public function CleanHighScore() {
			$this->highScore = 0;	
			$this->sumRound = 0;	
	}
		public function CleanSumRound() {
	//		$this->highScore = 0;	
			$this->sumRound = 0;	
	}
		public function SetHighScore() {
			$this->highScore = $this->sumRound;	
	}


  /**
   * Get the accumulated sum of the round.
   *
   * @return int as a sum of the round, or 0 if no roll has been made.
   */
        
        
  public function GetRoundTotal() {
    return $this->sumRound;
  }
  
//---------------------------------------------


//--------------------------------------------

  /**
   * Get the rolls as a serie of images.
   *
   * @return string as the html representation of the last roll.
   */

  public function GetRollsAsImageList() {
//$html = "111111111111111111111111111ksdhfhpkasdhghsakdgfkl";
	   
     
    $html = "<ul class='dice'>";
  //    $hhggl = "<ul class='dice'>";
    
    // echo "<br> inside ---- printing html <br>" . $html . "<br>";   
    foreach($this->dices as $dice) {       
      $val = $dice->GetLastRoll();   //  echo "<br> inside function GetRollsAsImageList inside foreach printing val<br>" . $val . "<br>";            
      $html .= "<li class='dice-{$val}'></li>";
   }
    $html .= "</ul>";
		return $html;
  }
	
	


}
