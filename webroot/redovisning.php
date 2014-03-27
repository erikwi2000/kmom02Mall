<?php 
/**
 * This is a BWi pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bwix variable with its defaults.
include(__DIR__.'/config.php'); 

//include(__DIR__ . '/theme/functions.php');
//echo __DIR__ . "--1<br>";

//global string $mepath;
//Me-path from redivisning x-cc
//include 'theme\functions.php';
//echo url() . "--2<br>";
$mepath = url() . '/../me.php';
//echo "<br> Mee-path" . $mepath;

//echo $_SERVER['HTTP_HOST'] . "--3<br>";
//echo $_SERVER['REQUEST_URI'] . "--4<br>";



// Do it and store it all in variables in the BWi container.
$bwix['title'] = "Redovisning";
// Fixa länkarna både statiska och dynamiska
$bwix['paths'] = '<p>me-sida:<a href="http://www.student.bth.se/~bjvi13/oophp/kmom01/kmom01Mall/webroot/me.php">me-sidan</a>';
$bwix['paths'] .= '<p>bwix: <a href="http://www.student.bth.se/~bjvi13/oophp/kmom01/kmom01Mall/webroot/hello.php">bwix-sidan</a>' ;
$bwix['paths'] .= '<p>me-sida:<a href="' . $mepath . '">me-sidan</a>';
$bwix['paths'] .= '<p>bwix:<a href="' . $mepath . "/../hello.php" . '">bwix-sidan</a>';
$bwix['paths'] .= '<p>github: <a href="https://github.com/erikwi2000/kmom01Mall">github</a>';

// Fixa länkarna både statiska och dynamiska kmom02
$bwix['paths2'] = '<p>me-sida:<a href="http://www.student.bth.se/~bjvi13/oophp/kmom02/kmom02Mall/webroot/me.php">me-sidan</a>';
$bwix['paths2'] .= '<p>bwix: <a href="http://www.student.bth.se/~bjvi13/oophp/kmom02/kmom02Mall/webroot/hello.php">bwix-sidan</a>' ;
$bwix['paths2'] .= '<p>me-sida:<a href="' . $mepath . '">me-sidan</a>';
$bwix['paths2'] .= '<p>bwix:<a href="' . $mepath . "/../hello.php" . '">bwix-sidan</a>';
$bwix['paths2'] .= '<p>github: <a href="https://github.com/erikwi2000/kmom01Mall">github</a>';




$bwix['main'] = <<<EOD
<article class="readable">

<h1>Redovisning av kursmomenten</h1>



<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>

<p> Miljö.
<p> Har: Latitude E5530, Windows 7 Pro. HW Intel Core i7-3540 M CPU @ 3GHz. 
Minne 16GB RAM (nice!), 128GB SSD samt 3TB USB3 disk.

<p>Använder Chrome (mest), Firefox, Opera, Safari (lite bara)
 och ibland Internet Explorer (inte ofta)
 Dessutom kämpar jag med att lagra filer/bilder etc. på Google drive....raw verkar inte fungera, säger dom..

<p>Använder de rekommenderade verktygen (FileZilla/jEdit)
 (filer: sftp://sftp.student.bth.se). Har Notepad och nyligen Adobe-verktyg.
XAMPP används.
<p>Kursmomentet.
<p> "Beginning PHP and MySQL: From Novice to Professional" riktigt bra kapitel dessa 5 första. Bör läsas i ett svep också.
<p> Guiden riktigt bra! Saknade en sådan här sammanställning i htmlphp-kursen.Även om allt inte sitter
 efter den första genomgången så känns strukturen och uppdelningen 
 riktigt berikande även om jag har lite sedan förra kursen med mig.
 <p>Anax himla bra med en "färdig" struktur då slipper man en del "trial and error" under resans gång. 
 Generellt är det himla bra att ha lite historik. Har tagit mig igenom git och github känns proffsigt!
 <p>Dynamisk meny där blev det lite dimmigt trots att jag pysslade lite med det i förra kursen. 
 Bra med exemplet array av array.
 <p> source.php riktigt berikande så bekvämt jämfört med andra verktyg
 
 <p> Anax blev bwix.
 <p> Me-sidan betydligt enklare denna gång än förra. Lite trickigt med slideshow ha tålamod så börjar det 
 byta bild.
 <p> Håll reda på .JPG och .jpg!
 <p>jEdit + FileZilla == BRA!
{$bwix['paths']}




<h2>Kmom02: Objektorienterad programmering i PHP</h2>

<p>En jobbig resa. Tuffast hittils tror att vartefter vi rapporterar 
    svårigheter så kommer ni att justera vartefter. Jag råkade ut för en "konstig sak":
     använde både Notepad och NetBeans samtidigt och projekten fungerade perfekt 
         och validerade förutom lite strul med "buttons".
Sagt och gjort fixade och plötsligen så dog sessionen vid varje inmatning, uppenbarligen
så hade jag på något sätt plockat bort en rad eller så så att det 
fungerade inte.
Sylvanas var en mycket hjälpsam "chattare". Stort TACK Jane!
     Hoppas en del "findings" är väl tatuerade i minnet.</p>
<p> Men NetBeans och www.websequencediagrams.com RIKTIGT NICE 
liksom knappgeneratorer. Det  finns så mycket där ute så en liten del vore nog.</p>
<p> Ett litet nytt mindset behövs för mig för att ta mig an detta. 
Själva upplägget med en bastant 
plattform där man hela tiden ser 
till att åtminstone alla tidigare gjorda saker fungerar  bra.
<br>Lite nytt hittar man på, lägger till osv. så efter en resa så finns mer i "skelettet" än som skapades från början.
<p> Tyvärr så har jag ägnat mycket tid åt en sak som jag gjort förut och som fanns dvs
att visa tärningen på sidan efter att jag slagit. (../img/... etc.)<br>
<br>Det som inte fungerade var kopplingen till foldrarna för bilden....och
detta har jag ju gjort flera gänger MEN ded tog tid...denna gången också.
<p> Som förut så är 20 stationer riktigt bra, för de flesta avsnitten, 
DOCK saknar jag här precis som i första kursen ett skelett med de "vital few" som man kan luta sig mot då
det "strular". <br>Böckerna är bra MEN ack så kompletta så här i början. 
Det skulle inte sitta fel med en översikt MEN tror dock att den finns där ute det är oftast bara att "surfa på"
trodde inte det fanns så mycket programvara och dessutom talar jag om fria program.
<p>Borde det inte kunna vara ett, eller flera, exjobb som skapar en sökbar kunskapsbank
anpassad/lämplig till de kurser ni kör? 
<p>Många gånger ser jag inte skogen bara för en massa träd dessutom så har jag svårt för semantiken eftersom jag har ett annat språk då jag tolkar kod¨
dvs ibland ser exemplen ut som ett helt främmande språk....dock bit för bit ungefär som programkoden så 
drar jag mig lite framåt i varje avsnitt.


{$bwix['paths2']} 
<h2>Kmom03: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom04: ...</h2>

<p>Redovisningstext...
www.websequencediagrams.com så nice speciellt napkin<br>
kkkkkkkkkkkkkkkkk

</p>


<h2>Kmom05: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom06: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom07/10: ...</h2>

<p>Redovisningstext...</p>


{$bwix['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of BWi.
include(BWI_THEME_PATH);
