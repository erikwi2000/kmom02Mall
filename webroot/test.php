<?php
session_start();
var_dump($_SESSION);
?>
 
<!doctype html>
<html>
<head>
<meta charset='utf-8'/>
<title>test.php testsida för sessioner</title>
</head>
 
 
<body>
 
<?php
 
echo "SID: " . SID . '<br>';
 
 
if(isset($_SESSION['testvarde1'])){
    echo "<br>Testvarde1 = ".$_SESSION['testvarde1'];
   }
   else {
   $_SESSION['testvarde1'] = 100;
       echo "<br>Nu skapas testvärde1= ".$_SESSION['testvarde1'];
   }
 
 echo " <br>Nu dubblar vi testvärde1.<br>";
 $_SESSION['testvarde1'] = $_SESSION['testvarde1'] * 2;
 
echo "<br>Nu är testvärde1= ".$_SESSION['testvarde1'];
 
echo "<br>Nu är variablerna:<br>";
 
var_dump($_SESSION);
 
echo '<br><a href="test.php">Uppdatera</<><br>';
 
?>
</body>
</html>