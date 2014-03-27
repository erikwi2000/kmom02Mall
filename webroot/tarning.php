<?php 
/**
 * This is a BWi pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bwix variable with its defaults.
include(__DIR__.'/config.php'); 


  session_start(); 
if(isset($_GET['destroy'])) { 
  // Unset all of the session variables. 
  $_SESSION = array(); 
//echo "<br> DESTROY "  ;
  // If it's desired to kill the session, also delete the session cookie. 
  // Note: This will destroy the session, and not just the session data! 

 if (ini_get("session.use_cookies")) { 
      $params = session_get_cookie_params(); 
      setcookie(session_name(), '', time() - 42000, 
          $params["path"], $params["domain"], 
          $params["secure"], $params["httponly"] 
      ); 
  } 

  // Finally, destroy the session. 
  session_destroy(); 
  $sessiondestroyed = 'Spelet rensat!'; 
} 
else 
{ 
  $sessiondestroyed = ''; 
} 



//----------------------------------------


$bwix['stylesheets'][] = 'css/dice.css'; 

// Do it and store it all in variables in the BWi container.

$bwix['title'] = "Tärning";


//Nytt ----------------------------------
//echo "<br> Laddar bwix";
$bwix['main'] = <<<EOD
<article class="readable">

<h2>Spela tärning till 100</h2>
<p> Spelet är att summera alla slag och försöka nå till 
100 eller så högt som möjligt. Man får avsluta när man själv vill också.
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
<a  href="?init" class="LinkButton">   Starta på nytt. </a>    
<a href="?roll" class="LinkButton">   Kasta tärningen.</a>
<a   href="?noll" class="LinkButton">   Nollställ score´s.</a>
<a  href="?destroy" class="LinkButton">   Förstör session.   </a>                    
</div>

			
			

EOD;

$roll = isset($_GET['roll']) ? true : false;
$init = isset($_GET['init']) ? true : false;
$noll = isset($_GET['noll']) ? true : false; 


if(isset($_SESSION['dicehand'])) {
  $hand = $_SESSION['dicehand'];
}
else {
	$hand = new CDiceHand(1);
  $_SESSION['dicehand'] = $hand;
}

if($roll) {
  $hand->Roll();
}
else if($init) {
  $hand->InitRound();
}
else if ($noll) {
  $hand->CleanHighScore();
	$roll = TRUE;
}


$diceList = $hand->GetRollsAsImageList(); 

$resultString = ""; 
$statString = ""; 

if($roll){ 
    if ( $hand->GetRoundTotal() != 100){ 
        if ($hand->GetRolls() != 1){ 
            $resultString = "<h4>Du slog en: " .  $hand->GetRolls() . "'a</h4>"; 
        } else { 
            $resultString = "<h4>Tyvärr du slog en " . $hand->GetRolls(). "'a och dina poäng nollställs!!!"; 
            $hand->CleanSumRound();             
        } 
    } else{ 
        $resultString .= "<h2>Grattis! Du har uppnått 100 poäng!!!</h2>"; 
        if(($hand->getHighScore() == 0) || ($hand->GetRolls() < $hand->getHighScore())){ 
                $hand->setHighScore(); 
                $resultString .= "<h3>Du har satt ett nytt highscore!</h3>"; 
        } 
    } 
  $totall = $hand->GetRoundTotal(); 
	$statString = "<h4>Din nuvarande summa: $totall </h4>"; 
		
	$ppppp = $hand->GetRoundsOK();	
	if($ppppp == 1) {
	$statString .= "<h4>Du har kastat tärningen: $ppppp gång </h4>"; 
	}
	else {
		$statString .= "<p><h4>Du har kastat tärningen: $ppppp gånger </h4></p>"; 
}
	
	$highScore = $hand->GetHighScore();
	$statString .= "<h4>Highscore: $highScore</h4>"; 
}
$bwix['main'] .= <<<EOD
{$diceList}
{$resultString}
{$statString}


{$bwix['byline']}
</article> 

EOD;

include(BWI_THEME_PATH);

