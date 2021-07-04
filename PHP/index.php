<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <p>
 <?php
 $warenbestand = 9;

 if($warenbestand == 0) {
     print "Artikel ist nicht mehr verfügbar, bitte nachbestellen.";
 }
 ?>
 </p>

 <p>
 <?php

$waren = array();
$waren[0]['Artikel'] = "Brot";
$waren[0]['Bestand'] = 20;
$waren[0]['Preis'] = 3.50;
$waren[1]['Artikel'] = "Birnen";
$waren[1]['Bestand'] = 49;
$waren[1]['Preis'] = 0.65;
$waren[2]['Artikel'] = "Chips";
$waren[2]['Bestand'] = 398;
$waren[2]['Preis'] = 1.99;

if($waren[0]['Bestand'] == 0) {
    print "Der Artikel " . $waren[0]['Artikel'] . " ist nicht verfügbar.";
} 
else if ($waren[0]['Preis'] >= 20)  {
    print "Der Artikel " . $waren[0]['Artikel'] . " wird versandkostenfrei geliefert.";
}
else if ($waren[0]['Preis'] <= 20) {
    print "Für den Artikel fallen 5 Euro Versandkosten an.";
}

?>
</p>

<p>
<?php

$i = 1;
print "While-Schleife ";
while($i <= 10) {
    print $i . " ";
    $i++;
}

print "<br />";

print "For-Schleife ";
for($i = 1; $i <= 10; $i++) {
    print $i . " ";
}

print "<br />";

print "Do-while-Schleife ";
$i = 1;
do {
    print $i . " ";
    $i++;
} while($i <= 10);

?>
</p>

<p>
<?php
print "Obst- und Gemüsehändler";

print "<br />";

$waren = array();
$waren[0]['Produkt'] = "Zucchini";
$waren[0]['Preis'] = 2;
$waren[0]['Sonderangebot'] = true;
$waren[1]['Produkt'] = "Äpfel";
$waren[1]['Preis'] = 0.50;
$waren[1]['Sonderangebot'] = false;
$waren[2]['Produkt'] = "Birnen";
$waren[2]['Preis'] = 0.70;
$waren[2]['Sonderangebot'] = false;
$waren[3]['Produkt'] = "Tomaten";
$waren[3]['Preis'] = 0.30;
$waren[3]['Sonderangebot'] = true;

foreach($waren as $inhalt) {
    if($inhalt['Sonderangebot'] == true) {
        print "Achtung Sonderangebot! " . $inhalt['Produkt'] . " Preis: " . $inhalt['Preis'] . " EURO" . '<br>';
    } 
    else {
        print $inhalt['Produkt'] . " Preis: " . $inhalt['Preis'] . " EURO" . '<br>';
    }
}
?>
</p>

<p>
<?php

function Begruessung() {
    print "Hallo ihr Lieben";
}
Begruessung();

print "<br />";

function neueBegruessung($text) {
    print $text;
}
neueBegruessung("F***YouAll");

print "<br />";

function ganzNeueBegruessung($text, $ansprache) {
    print $text . " " . $ansprache;
}

$gruss = "Hallo";
$person = "Herr Müller";
ganzNeueBegruessung($gruss, $person);

?>
</p>

<p>
<?php

print "Variante 1: ";
function zehnerpotenzen($zahl, $potenz) {
    $zahlZurPotenz = pow($zahl, $potenz);
    return $zahlZurPotenz;
}

for ($i = 1; $i <= 10; $i++) { 
print zehnerpotenzen(2, $i) . " ";
}

print "<br />";

print "Variante 2: ";
$arrayPotenz = array();

$var = 2;
for ($i = 1; $i <= 10; $i++) { 
    $arrayPotenz = $var ** $i . " ";
    print $arrayPotenz;
}

print "<br />";

print "Variante 3 - Ausgelagert: ";
include ("auslagerung.php");


?>
</p>






</body>
</html>