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


//Funktion Kategorien random auswählen und id_kategorie rausfiltern
function randomKategorien_id($id_kategorie, $id_kategorieAusDB) {
    global $connection;
    $sql1 = "SELECT " . $id_kategorieAusDB . "  FROM " . $id_kategorie . " ORDER BY RAND() LIMIT 1 ";
    $id_kategorie =  mysqli_query($connection, $sql1);
    if (!$sql1) {
    die('Could not query:' . mysql_error());
    }

    $randomKategorie_id = $id_kategorie->fetch_object();
    $randomKategorie_id = $randomKategorie_id->$id_kategorieAusDB;
    $randomKategorie_id = intval($randomKategorie_id);

    return $randomKategorie_id;
}

//Funktion Kategorien random auswählen und statement_kategorie rausfiltern
function randomKategorien_statement($statement_kategorie, $statement_kategorieAusDB) {
    global $connection;
    $sql1 = "SELECT " . $statement_kategorieAusDB . "  FROM " . $statement_kategorie . " ORDER BY RAND() LIMIT 1 ";
    $statement_kategorie =  mysqli_query($connection, $sql1);
    if (!$sql1) {
    die('Could not query:' . mysql_error());
    }

    $randomKategorie_statement = $statement_kategorie->fetch_object();
    $randomKategorie_statement = $randomKategorie_statement->$statement_kategorieAusDB;

    return $randomKategorie_statement;
}

//Funktion Kategorien random auswählen und wert_kategorie rausfiltern
function randomKategorien_wert($wert_kategorie, $wert_kategorieAusDB) {
    global $connection;
    $sql1 = "SELECT " . $wert_kategorieAusDB . "  FROM " . $wert_kategorie . " ORDER BY RAND() LIMIT 1 ";
    $wert_kategorie =  mysqli_query($connection, $sql1);
    if (!$sql1) {
    die('Could not query:' . mysql_error());
    }

    $randomKategorie_wert = $wert_kategorie->fetch_object();
    $randomKategorie_wert = $randomKategorie_wert->$wert_kategorieAusDB;
    $randomKategorie_wert = intval($randomKategorie_wert);

    return $randomKategorie_wert;
}

//Funktion die prüft, ob Datensatz in DB schon vorhanden ist
function datensatzVorhanden() {
    global $connection;
    
    $sql3 = "SELECT id_eingabe FROM user_eingaben WHERE ort = ". $_POST['geburtsort'] . "AND geb_datum  = ". $_POST['geburtsdatum'] ." AND abfrage_datum = " . $_POST['datumTageshoroskop'];
    $wert_kategorie =  mysqli_query($connection, $sql3);
    if(!$sql3) {
        die('Could not query:' . mysql_error());
    }  

    $id_eingabeAktuell = "id_eingabe";

    $sql3 = "SELECT statement_arbeit, statement_glueck, statement_gesundheit, statement_liebe FROM arbeit, glueck, gesundheit, liebe WHERE " .$id_eingabeAktuell ." = id_eingabe";
    
    $randomstatement_arbeit = "statement_arbeit";
    $randomstatement_glueck = "statement_glueck";
    $randomstatement_gesundheit = "statement_gesundheit";
    $randomstatement_liebe = "statement_liebe";
    
    $sql3 = "SELECT wert_arbeit, wert_glueck, wert_gesundheit, wert_liebe FROM arbeit, glueck, gesundheit, liebe WHERE  " .$id_eingabeAktuell ." = id_eingabe";
    
    $randomWert_arbeit = "wert_arbeit";
    $randomWert_glueck = "wert_glueck";
    $randomWert_gesundheit = "wert_gesundheit";
    $randomWert_liebe = "wert_liebe";
}

if(!empty($_POST['geburtsdatum']) && !empty($_POST['geburtsort']) && !empty($_POST['datumTageshoroskop'])) {
    
    //Aufruf Funktion datensatzVorhanden
    if(datensatzVorhanden()) {

    }
    else {
        //Aufruf Funktion randomKategorien_id
        $randomid_arbeit = randomKategorien_id("arbeit", "id_arbeit");
        $randomid_glueck = randomKategorien_id("glueck", "id_glueck");
        $randomid_gesundheit = randomKategorien_id("gesundheit", "id_gesundheit");
        $randomid_liebe = randomKategorien_id("liebe", "id_liebe");

        //Aufruf Funktion randomKategorien_statement
        $randomstatement_arbeit = randomKategorien_statement("arbeit", "statement_arbeit");
        $randomstatement_glueck = randomKategorien_statement("glueck", "statement_glueck");
        $randomstatement_gesundheit = randomKategorien_statement("gesundheit", "statement_gesundheit");
        $randomstatement_liebe = randomKategorien_statement("liebe", "statement_liebe");

        //Aufruf Funktion randomKategorien_Wert
        $randomWert_arbeit = randomKategorien_wert("arbeit", "wert_arbeit");
        $randomWert_glueck = randomKategorien_wert("glueck", "wert_glueck");
        $randomWert_gesundheit = randomKategorien_wert("gesundheit", "wert_gesundheit");
        $randomWert_liebe = randomKategorien_wert("liebe", "wert_liebe");

        //Usereingaben und id_Kategorien von Webseite in DB speichern
        $gebDate = $_POST["geburtsdatum"];
        $ort = $_POST["geburtsort"];
        $date = $_POST["datumTageshoroskop"];
    
        $sql = "INSERT INTO user_eingaben (geb_datum, ort, abfrage_datum, id_arbeit, id_glueck, id_gesundheit, id_liebe) " . " VALUES ('".$gebDate."', '".$ort."', '".$date."',".$randomid_arbeit.",".$randomid_glueck.",".$randomid_gesundheit.",".$randomid_liebe.")";
    
    }

    $result = $connection->query($sql);
    print_r($result);
}

    /*print_r ("Name" . $_POST["meinName"] . "Geburtsdatum " . $_POST["geburtsdatum"] . "<br>" .
        "Geburtsort " . $_POST['geburtsort'] . "<br>" .
        "Tageshoroskop für Datum " . $_POST["datumTageshoroskop"]);
    */
        

  //Verbindungschließen
  mysqli_close($connection);
?>

</body>
</html>