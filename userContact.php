<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleAllgemein.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styleContact.css" media="screen" />
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


if(!empty($_POST['contactVorname']) && !empty($_POST['contactNachname']) && !empty($_POST['contactEmail']) && !empty($_POST['contactMessage'])) {
    
    
        //Usereingaben von Contact in DB speichern
        $vorname = $_POST["contactVorname"];
        $nachname = $_POST["contactNachname"];
        $email = $_POST["contactEmail"];
        $message = $_POST["contactMessage"];

        $sql = "INSERT INTO user_contacts (vorname, nachname, email, nachrichten) VALUES ('".$vorname."','".$nachname."', '".$email."','".$message."')";

    $result = $connection->query($sql);
    print_r($result);
}

/*print_r ($_POST["contactVorname"] . "<br>" . $_POST["contactNachname"] . "<br>" .
        $_POST["contactEmail"] . "<br>" .
        $_POST["contactMessage"]);
        */
    

  //Verbindungschließen
  mysqli_close($connection);
?>

</body>
</html>