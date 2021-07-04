<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleAllgemein.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styleSoraya.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="chart/styleChart.css" media="screen" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>
        my site
    </title>

    <script src="fireflies.js" async></script> 
    <?php include('userEingabe.php'); ?>

</head>

<body>
    <canvas id="canvas"></canvas>
    <header>

<div class="bg-image"></div>
<article class="home1">

        <div class="logo"><p>Madame Soraya</p></div>

        <div class="navi">
            <ul>
                <li><a href="home.html" >Home</a></li>
                <li><a href="soraya.php" style="color: #ffffff">Soraya</a></li>
                <li><a href="zodiac.php">Zodiac</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="inc/logout.php">Logout</a></li>
                <br>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>  
                <a href="contact.php"><i class="fas fa-mobile-alt"></i></a>
            </ul>
        </div>

</article>

<article class="home1_1">

    <div class="buttonHeader" style="height: fit-content;">
        <a href="contact.php"><h3>Termin</h3></a>
    </div>
        
    </form>
</article>
 
</header>

<main>

<article class="home2">
    <div class=box2>
        <h1>Mein Tageshoroskop von Madame Soraya</h1>
        <p class="tageshoroskop">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        
    </div>
</article>

<article class="home3">
    
    <div class=box3>

        <h1>Sorayas Blick in die Sterne</h1>
        
        <form class="userEingabe" action="http://127.0.0.1/webaufgaben-KathrinPrielinger/MadameKathrin/soraya.php" method="POST">
            
            <label for="meinName">Mein Name</label>
            <input type="text" id="meinName" name="meinName" />
            <br>

            <label for="geburtsdatum">Geburtsdatum</label>
            <input type="date" id="geburtsdatum" name="geburtsdatum" />
            <br>

            <label for="geburtsort">Geburtsort</label>
            <select type = "dropdown" id ="geburtsort" name = "geburtsort">
                <option value = "Wien" selected>Wien</option>
                <option value = "Sydney">Sydney</option>
                <option value = "New York">New York</option>
             </select>
             <br>

            <label for="datumTageshoroskop">Datum für mein Tageshoroskop</label>
            <input type="date" id="datumTageshoroskop" name="datumTageshoroskop" />
            <br>
            
            <input type="hidden" name="aktion" value="speichern">
            <br>
            
            <input type="submit" name="submit"/>
        </form>

        <?php

        

           if(isset($_POST["meinName"]) && isset($_POST["geburtsdatum"]) && isset($_POST["geburtsort"]) && isset($_POST["datumTageshoroskop"])) { 

        ?>
            
            <h2 class="meinName">Persönliches Tageshoroskop für<?php echo " " . $_POST["meinName"]?></h2>
            

            <table>   
                <tr>
                          
                    <div class="arbeit"><h4>Arbeit</h4><?php echo $randomstatement_arbeit ?></div>
                   
                    <div class="glueck"><h4>Glück</h4><?php echo $randomstatement_glueck ?></div>
                    
                    <div class="gesundheit"><h4>Gesundheit</h4><?php echo $randomstatement_gesundheit ?></div>
                   
                    <div class="liebe"><h4>Liebe</h4><?php echo $randomstatement_liebe ?></div>
                    
                    <div class="chart"><h4>Trend</h4>
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script>

        let glueck = <?php echo json_encode($randomWert_glueck); ?>;   
        let liebe = <?php echo json_encode($randomWert_liebe); ?>;   
        let gesundheit = <?php echo json_encode($randomWert_gesundheit); ?>;   
        let arbeit = <?php echo json_encode($randomWert_arbeit); ?>;   


        let ctx = document.getElementById('myChart').getContext('2d');
        let chart = new Chart(ctx, {
            // The type of chart
            type: 'line', 

            // The data
            data: {
                labels: ["Glueck", "Liebe", "Gesundheit", "Arbeit"],
                // Information about the dataset
            datasets: [{
                    label: "Wert der Kategorie",
                    backgroundColor: 'white',
                    borderColor: 'black',
                    data: [glueck, liebe, gesundheit, arbeit],
                }]
            },

            // Configuration options
            options: {
            layout: {
            padding: 10,
            },
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: 'Tageshoroskop'
                },
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Wert'
                        }
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Kategorie'
                        }
                    }]
                }
            }
        });

    </script>

                </tr>
            </table>
         
        <?php

        }

        ?>
        

        <p class="anmerkung">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et lor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et lor sit amet.</p>
        <img class="pic6" src="https://thumbs.dreamstime.com/b/zukunft-der-glaskugel-59099664.jpg">
    </div>
</article>


<article class="home5">
        <h1>Du willst mehr wissen?<br>Vereinbare einen Termin!</h1>
        

        <form class="contact" action="http://127.0.0.1/webaufgaben-KathrinPrielinger/MadameKathrin/contact.php" method="POST">
                
                <div class="formular">   
                    <label for="contactVorname">Vorname:</label>
                    <input type="text" name="contactVorname" id="contactVorname" class="required">                 
                </div>

                <div class="formular">   
                    <label for="contactNachname">Nachname:</label>
                    <input type="text" name="contactNachname" id="contactNachname" class="required">                 
                </div>

                <div class="formular">
                    <label for="contactEmail">Email:</label>
                    <input type="email" name="contactEmail" id="contactEmail" class="required">
                    
                </div>
      
              <div class="formular">
                <label for="contactMessage">Message:</label>
                <textarea name="contactMessage" id="contactMessage" class="required"></textarea>
                
              </div>

              <div class="formular">
                <button type="submit" name="action" value="submit">Bestätigen</button>
                <p id="demo"></p>
               </div>                 
    </form>
</article>

</main>

<footer>
    <nav class="foot">
        <ul>
            <li><a href="partner.html">become a partner</a></li>
            <li><a href="products.html">products</a></li>
            <li><a href="contact.html">contact us</a></li>
            <li><a href="about.html">about</a></li>            
        </ul>
    </nav>

</footer>

</body>
</html>