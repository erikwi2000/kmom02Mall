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


// Sanity Check, unnecessary??
if(isset($_SESSION['dump'])) {
  $dump = $_SESSION['dump'];
}
else {
	$dump = new CDump(1);
  $_SESSION['dump'] = $dump;
}

if(isset($_SESSION['dicehand'])) {
  $hand = $_SESSION['dicehand'];
}
else {
	$hand = new CDiceHand(1);
  $_SESSION['dicehand'] = $hand;
}
//----------------------------------------


$bwix['stylesheets'][] = 'css/dice.css'; 

// Do it and store it all in variables in the BWi container.

$bwix['title'] = "Tärning";


//Nytt ----------------------------------
//echo "<br> Laddar bwix";

$bwix['main'] = <<<EOD
<article class="readable">
EOD;
$bwix['main'] .= $dump->GetAdd1Part();



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

/*

*/
if($roll) {
    $hand->Roll();
    $statStringRoll = $dump->GetRollResult();
}
else if($init) {
  $hand->InitRound();
   $statStringInit = $hand->GetInitResult();
  
	
}
else if ($noll) {
  $hand->saveRound();
       $statStringNoll = $dump->GetNollResult();	

}
if($noll){
$statString = $statStringNoll;
}
if($roll){
$statString = $statStringRoll;
}


if(($roll) or ($noll)){
$diceList = $hand->GetRollsAsImageList(); 
}
else {
    $statString= "";
$diceList = "";
}
//    print_r ($dicePic);
//---------------------------
$bwix['main'] .= <<<EOD
{$diceList}
{$statString}
{$bwix['byline']}
</article> 
EOD;
include(BWI_THEME_PATH);
//echo $temp;
/*
if(isset($_SESSION['dump'])) {
  $test = $_SESSION['dump'];
}
else {
	$test = new CDump(1);
  $_SESSION['dump'] = $test;
}
echo "<p>DEBUG: " . session_name();
echo "<P>DEBUG: " . session_id();
//echo "-------" . $init;
echo "<p>Allt innehåll i arrayen \$_SESSION:<br><pre>" . 
htmlentities(print_r($_SESSION, 1)) . "</pre>";
*/

