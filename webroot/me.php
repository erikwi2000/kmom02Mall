<?php 
/**
 * This is a BWi pagecontroller.
 *
 */
// Include the   essential config-file which also creates the $bwix variable with its defaults.

//echo "Dir= in me.php at webroot<br>" . __DIR__ ;
include(__DIR__ .'/config.php'); 
//echo "<br>Dir= after config include <br>" . __DIR__ ;

//echo "<br>--" . __DIR__ . "    4";

//include 'functions/functionurl.php';
//echo "<br>--" . url();
//echo $mepath . "------";
// Define what to include to make the plugin to work
$bwix['stylesheets'][]        = 'css/slideshow.css';
$bwix['jquery']               = true;
$bwix['javascript_include'][] = 'js/slideshow.js';
//include ('test3.php');

//echo CNavigation::GenerateMenu($menu, $class);
//dump($_SERVER);

//dump(BWI_THEME_PATH);
// Do it and store it all in variables in the BWi container.
$bwix['title'] = "Om mig";
//echo getCurrentUrl();


 
// anropa funktionen så här
//dump($_SERVER);


$bwix['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me" data-images='["/one.jpg", 
"/two.jpg", "/tree.jpg", "/four.jpg",  "/five.jpg"]'>
<img src='img/me/six.jpg' width='700' height='200' alt=''/>
</div>
<article class="readable">
<h1>Om Mig</h1>

 <p>Mitt namn är Björn Viklund och jag är sedan drygt ett år "övertalig" dvs jag har blivit 
 "utsatt" för avgångsvederlag i stället för att ha den stora glädjen att jobba med något jag tycker om.


<p>Min bakgrund är civilingenjör inom elektro 1974, lic inom samma område 1988.

Har sedan 1988 jobbat i princip inom Ericsson med elektronik för deras system. 
Den senaste *sista_(?) positionen var inom teknikledning på Sony Mobile i Lund 
MEN 2012-2013 så minskade man arbetsstyrkan med mer än tusen personer i Lund. 
Och vi gamlingar, och flera andra, fick då lämna med, för oss gamla iaf, en bra deal. 
Så inga hard feelings rörande detta men jobbet var så kul att jag gärna jobbat
 också de två åren fram till 65.

<br>Då jag studerade så fick man utbildning inom assembler(sic), Cobol, Algol 
MEN sedan då man började jobba landade man på Fortran iaf. 
Ja jag gjorde exjobb i Simula också om någon vet vad det var (och vad det blivit).

<p>Under de nästan 40 åren har det blivit assistent, lärare, forskningsingenjör,
 forskare, systemingenjör, projektledare, chef och dessutom varit fackordförande 
 lokalt i Sveriges Ingenjörer ( heter så numer).

<p>Jag upplever det som lite onödigt att låta denna erfarenhet endast användas för att mata duvor. 
Har en konsulttjänst på Vascaia men det finns varken jobb eller konsultuppdrag för mig verkar det som.

<br>Så jag tänkte att lite programmmering skulle kanske vara berikande, och iaf roligt, 
så jag sökte till ett par distansutbildningar. 
En heltid i HV och en 1/4 tid på BTH. Efter några veckor så kändes 
dock BTH mera lämpat och anpassat för distansundervisning. 
Men som gammal KTH elev/anställd så vet jag att man alltid kan anpassa efter 
hand osså. 
<p>Inte ens som lärare duger man längre iom att det skall vara licenser osv..... om
inte den allra senaste informationen PISA låter fler erfarna hoppa in i undervisning igen.
<br> Annars var det en rolig tid då rummet fylldes till 
brädden av elever vid både föreläsningar och övningar.

<p>Efter de nästan 5 åren i Lund har jag flyttat tillbaka till Stockholm men ett besök på 
BTH är inte osannolikt, vid rätt tillfälle, har haft kontakt med 
lärare där tidigare då jag ansvarade för vidareutbildningar för våra ingenjörer 
i Kista. Tyvärr minns jag inte namnen men skulle någon lärare känna till
 detta vore det jätteroligt att knyta ihop "säcken", aligning the dots sas.

<p>Bor f.n. i Upplands Väsby men funderar på att flytta mer lantligt dock 
hoppas jag på att fortfarande ha hög bitrate så jag kan "andas".

<br>Fritid är varierande eftersom jag inte hinner allt samtidigt men 
golf, dans, natur, jakt, lantställena som jag har tillsammans med min bror.
Samt ett partnerskap med en skånsk f.d. bondmora numer operationssköterska. 
<p>Jaa man kan hitta de mest fantastiska saker även i skåneland.

Har jobbat med att gå ner i vikt tre gånger på allvar. Tre varianter: pulver på 1000cal/dag, jättejobbigt!, svälta i princip, jättejobbigt!, LCHF inte lika jobbigt men efter en tid blir det stor saknad efter kolhydraterna så då blir det tillbaka igen.

<p>/bwi aka bjvi13 


<p>Vill du veta mer så hittar du mig på de vanliga platserna som 
<a href="https://plus.google.com/+bjornwiklund_privat/about">Google+</a>, 
<a href="http://se.linkedin.com/in/erikwi2000">LinkedIn</a>, 
<a href="http://instagram.com/erikwi2000">Instagram</a>,
 <a href="https://www.facebook.com/oldman24">Facebook</a>, 
<!-- <a href="http://mikaelroos.se/youtube">Youtube</a>,  
 <a href="http://mikaelroos.se/flickr">Flickr</a>,  -->
 <a href="https://github.com/erikwi2000">GitHub</a> 
 och 
 <a href="https://twitter.com/erikwi2000">Twitter</a>.

{$bwix['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of BWi.
//echo BWI_THEME_PATH;
include(BWI_THEME_PATH);
//echo getCurrentUrl();
//echo "<br> xxxxx";
//dump($_SERVER);
//dump($bwix);
