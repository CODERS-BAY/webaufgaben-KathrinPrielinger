<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleAllgemein.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styleSoraya.css" media="screen" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&family=Dela+Gothic+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>
        my site
    </title>
</head>

<body>
    <?php
//mySQLi-Objekt herstellen
$connection = new mysqli("localhost","root","","madamesoraya");
//Überprüfen ob Verbindungsfehler
if($connection->connect_error)
die("Verbindungsfehler ". $connection->connect_error);

/*Überprüfung was im Array drin ist*/
print_r($_POST);


if(!empty($_POST['geburtsdatum']) && !empty($_POST['geburtsort']) && !empty($_POST['datumTageshoroskop'])) {


    //ARBEIT
    

$sql1 = "SELECT id_arbeit FROM arbeit ORDER BY RAND() LIMIT 1 ";
$id_arbeit =  mysqli_query($connection, $sql1);
if (!$sql1) {
die('Could not query:' . mysql_error());
}

$randomArbeit_id = $id_arbeit ->fetch_object()->id_arbeit;
$randomArbeit_id = intval($randomArbeit_id);

//GLÜCK
$id_glueck;

$sql1 = "SELECT id_glueck FROM glueck ORDER BY RAND() LIMIT 1 ";
$id_glueck =  mysqli_query($connection, $sql1);
if (!$sql1) {
die('Could not query:' . mysql_error());
}

$randomid_glueck = $id_glueck ->fetch_object()->id_glueck;

$randomid_glueck = intval($randomid_glueck);

//GESUNDHEIT
$id_gesundheit;

$sql1 = "SELECT id_gesundheit FROM gesundheit ORDER BY RAND() LIMIT 1 ";
$id_gesundheit =  mysqli_query($connection, $sql1);
if (!$sql1) {
die('Could not query:' . mysql_error());
}

$randomid_gesundheit = $id_gesundheit ->fetch_object()->id_gesundheit;

$randomid_gesundheit = intval($randomid_gesundheit);

//LIEBE
$id_liebe;

$sql1 = "SELECT id_liebe FROM liebe ORDER BY RAND() LIMIT 1 ";
$id_liebe =  mysqli_query($connection, $sql1);
if (!$sql1) {
die('Could not query:' . mysql_error());
}

$randomid_liebe = $id_liebe ->fetch_object()->id_liebe;

$randomid_liebe = intval($randomid_liebe);



    $gebDate = $_POST["geburtsdatum"];
    $ort = $_POST["geburtsort"];
    $date = $_POST["datumTageshoroskop"];

    $sql = "INSERT INTO user_eingaben (geb_datum, ort, abfrage_datum,id_arbeit,id_glueck,id_gesundheit,id_liebe) " . " VALUES ('".$gebDate."', '".$ort."', '".$date."',".$randomArbeit_id.",".$randomid_glueck.",".$randomid_gesundheit.",".$randomid_liebe.")";
    
    $result = $connection->query($sql);
    print_r($result);
}

print_r ("Geburtsdatum " . $_POST["geburtsdatum"] . "<br>" .
     "Geburtsort " . $_POST['geburtsort'] . "<br>" .
     "Tageshoroskop für Datum " . $_POST["datumTageshoroskop"]);


//arbeit
$sql2 = "SELECT arbeit.id_arbeit, arbeit.statement_arbeit FROM arbeit INNER JOIN user_eingaben ON arbeit.id_arbeit = user_eingaben.id_arbeit";
$wertStatement_arbeit =  mysqli_query($connection, $sql2);
if (!$sql2) {
die('Could not query:' . mysql_error());    
}

$statement_arbeit = $wertStatement_arbeit ->fetch_object()->statement_arbeit;
//$wert_arbeit = $wertStatement_arbeit ->fetch_object()->wert_arbeit;

print_r($statement_arbeit);

//liebe
$sql2 = "SELECT liebe.id_liebe, liebe.statement_liebe FROM liebe INNER JOIN user_eingaben ON liebe.id_liebe = user_eingaben.id_liebe";
$wertStatement_liebe =  mysqli_query($connection, $sql2);
if (!$sql2) {
die('Could not query:' . mysql_error());    
}

$statement_liebe = $wertStatement_liebe ->fetch_object()->statement_liebe;

print_r($statement_liebe);



//glueck
$sql2 = "SELECT glueck.id_glueck, glueck.statement_glueck FROM glueck INNER JOIN user_eingaben ON glueck.id_glueck = user_eingaben.id_glueck";
$wertStatement_glueck =  mysqli_query($connection, $sql2);
if (!$sql2) {
die('Could not query:' . mysql_error());    
}

$statement_glueck = $wertStatement_glueck ->fetch_object()->statement_glueck;

print_r($statement_glueck);

//gesundheit
$sql2 = "SELECT gesundheit.id_gesundheit, gesundheit.statement_gesundheit FROM gesundheit INNER JOIN user_eingaben ON gesundheit.id_gesundheit = user_eingaben.id_gesundheit";
$wertStatement_gesundheit =  mysqli_query($connection, $sql2);
if (!$sql2) {
die('Could not query:' . mysql_error());    
}

$statement_gesundheit = $wertStatement_gesundheit ->fetch_object()->statement_gesundheit;

print_r($statement_gesundheit);


  //Verbindungschließen
  mysqli_close($connection);
?>





</body>
</html>