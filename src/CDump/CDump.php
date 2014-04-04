<?php
/**
 * A class for dumping, with graphical representation, to roll.
 *
 */
class CDump {

private $secret;
public $roll;
public $noll;
public $init;
public $hello;
public $test;
public $engang = "gång.";
public $flergang = "gånger.";


  public function __construct() {
 $this->secret = "";
 }
 
 
 
 /*
  public function GetInitResult () {

      if(isset($_SESSION['dicehand'])) {
  $hand = $_SESSION['dicehand'];
}
else {
	$hand = new CDiceHand(1);
  $_SESSION['dicehand'] = $hand;
}
   //  unset($dicehand);
    $hand->sumRound = 0;
    $hand->sumRoundAll = 0;		
		$hand->rounds = 0;
		$hand->highScore = 0;	
		$this->dicePic = array();		
	//	$hand->dicePic = ""; 
  }

 */

 
  public function GetNollResult () {
         $engang = "gång.";
$flergang = "gånger.";

		$resultString = ""; 
		$statString = ""; 
		$saveString = "";
      if(isset($_SESSION['dicehand'])) {
  $hand = $_SESSION['dicehand'];
}
else {
	$hand = new CDiceHand(1);
  $_SESSION['dicehand'] = $hand;
}
      
      
     {
    

		$highScore = $hand->GetHighScore();
		$totall = $hand->GetRoundTotal(); 
		$hand->CleanSumRound();
		$temp = $hand->GetSumRound();
		$statStringNoll = "<h4>Din summa: $temp "; 		
		$ppppp = $hand->GetRoundsOK();	
		if($ppppp == 1) {
			$statStringNoll .= "Du har kastat tärningen: $ppppp $engang "; 
		}
		else {
			$statStringNoll .= "Du har kastat tärningen: $ppppp $flergang "; 
		}
		$statStringNoll .= "Highscore: $highScore</h4>"; 
		$hand->CleanSumRound();
               // echo "kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
return $statStringNoll;
}
  }
  
 
 
 

 
 
public function GetHello() {
 $hello = "Hello world";
 return $hello;
 }
 
 public function GetInputInfo() {
     $statStringRoll = "EMPTY";
     $choice = "destruct";
 $roll = isset($_GET['roll']) ? true : false;
 if($roll){$choice = "roll"; 
//$dump->GetRollResult();
 }
$init = isset($_GET['init']) ? true : false;
 if($init){$choice = "init";
 
 }
$noll = isset($_GET['noll']) ? true : false; 
 if($noll){$choice = "noll";
 
 }
//echo "<br> choice" . $choice;
 
     
 
 

return $choice;

 }
 
 
 public function GetRollResult () {
     
     if(isset($_SESSION['dicehand'])) {
  $hand = $_SESSION['dicehand'];
}
else {
	$hand = new CDiceHand(1);
  $_SESSION['dicehand'] = $hand;
}

//-------

//--------------------
 $roll = TRUE;
 $engang = "gång.";
 $flergang = "gånger.";
 $statStringRoll = "";
if($roll){ 
    if ( $hand->GetRoundTotal() != 100){ 
//		echo "<br>--" .  $hand->GetRoundTotal();
    if ($hand->GetRolls() != 1){ 
            $statStringRoll = "<h4>Du slog en: " .  $hand->GetRolls() . "'a. <br>"; 		
				} else { 
            $statStringRoll = "<h4>Tyvärr du slog en " . 
						$hand->GetRolls(). "'a och dina poäng nollställs!!!"; 
            $hand->CleanSumRound(); 				
						$hand->SetRoundTotal() ;
        } 
    } 
		else{ 
                if ($hand->GetRolls() != 1){
        $statStringRoll .= "<h2>Grattis! Du har uppnått 100 poäng!!!"; 
        if(($hand->getHighScore() == 0) || 
				($hand->GetRolls() < $hand->getHighScore())){ 
                $hand->setHighScore(); 
                $statStringRoll .= 
		"<br>Du är hemma till 100!</h3>"; 
            
        } 
                }
                else {
                    
                 $statStringRoll = "<h4>Tyvärr du slog en " . 
						$hand->GetRolls(). "'a och dina poäng nollställs!!!"; 
            $hand->CleanSumRound(); 				
						$hand->SetRoundTotal() ;   
                    
                }
    } 
		$tot = $hand->GetSumRound();
		$statStringRoll .= " Din summa: $tot";		
		$totall = $hand->GetRoundTotal(); 
		$statStringRoll .= " Din summaTotalt: $totall "; 
		
	$ppppp = $hand->GetRoundsOK();	
	if($ppppp == 1) {
	$statStringRoll .= "Du har kastat tärningen: $ppppp $engang "; 
	}
	else {
		$statStringRoll .= "Du har kastat tärningen: $ppppp $flergang "; 
		}
	
	$highScore = $hand->GetHighScore();
	$statStringRoll .= "Highscore: $highScore</h4>"; 
       // $statStringRoll .="in dump";
return $statStringRoll;
 }}

 public function GetAdd1Part() {
   $transport =<<<EOD
<h2>Spela tärning till 100</h2>
<p> Spelet är att summera alla slag och försöka nå till 
100, vägen kan sparas i steg vartefter. DOCK
inte över 100. Man får avsluta när man själv vill.
Sedan är det också önskvärt är att nå 
fram på så få slag som möjligt.

<br>



<div class="span-1">
    <span>Reglerna för summering är:</span>
    <ul>
				<li> 2-6 addera till din total.
				<li> 1 då, tyvärr, så landar din total på 0 igen
    </ul>
</div>


  <div style="margin:5px;">      
<a  href="?init" class="LinkButton">   Starta spelet. </a>    
<a href="?roll" class="LinkButton">   Kasta tärningen.</a>
<a   href="?noll" class="LinkButton">   Spara&amp;Nolla.</a>
<a  href="?destroy" class="LinkButton">   Förstör session.   </a>  
                  
</div>

			
			

EOD;
    return $transport; 
     
 }

 
}
