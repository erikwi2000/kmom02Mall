 <?php
// Include the bootstrap file
include('bootstrap.php');

// Start a named session
session_name('oophp20guiden');
session_start();

if(isset($_GET['destroy'])) {
  // Unset all of the session variables.
  $_SESSION = array();

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
  echo "Sessionen raderas, <a href='?'>starta om spelet</a>";
  exit;
}


?><!doctype html>
<html lang='sv'>
<meta charset='utf-8'>
<title>Guiden 20 steg för att komma i gång med objektorienterad PHP-programmering</title>
<link rel='stylesheet' type='text/css' href='dice.css'/>
<h1>Kasta två tärningar och försök komma så nära 21 som möjligt</h1>
<p><a href='?init'>Starta en ny runda</a>.</p>
<p><a href='?roll'>Gör ett nytt kast</a>.</p>
<p><a href='?destroy'>Förstör sessionen</a>.</p>

<?php
// Get the arguments from the query string
$roll = isset($_GET['roll']) ? true : false;
$init = isset($_GET['init']) ? true : false;

// Create the object or get it from the session
if(isset($_SESSION['dicehand'])) {
  echo "<i>Objektet finns redan i sessionen</i>";
  $hand = $_SESSION['dicehand'];
}
else {
  echo "<i>Objektet finns inte i sessionen, skapar nytt objekt och lagrar det i sessionen</i>";
  $hand = new CDiceHand(2);
  $_SESSION['dicehand'] = $hand;
}

// Roll the dices 
if($roll) {
  $hand->Roll();
}
else if($init) {
  $hand->InitRound();
}
?>

<p><?=$hand->GetRollsAsImageList()?></p>

<?php if($roll): ?>
<p>Summan av detta kast blev <?=$hand->GetTotal()?>.</p>
<?php endif; ?>

<p>Summan i denna spelrundan är hittills <?=$hand->GetRoundTotal()?>.</p>


<hr>
<?php include('../template/footer_mos.php') ?>
