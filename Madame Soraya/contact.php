<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleAllgemein.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styleContact.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styleCarousel.css" media="screen" />
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

    <script src="imageCarousel.js" async></script>
    <script src="fireflies.js" async></script>
    <?php include('userContact.php'); ?>
    
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
                <li><a href="soraya.php">Soraya</a></li>
                <li><a href="zodiac.php">Zodiac</a></li>
                <li><a href="contact.php" style="color: #ffffff">Contact</a></li>
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

    
<article class="home5">
    <div class="formularText">
        <h1>Deine Fragen sind wichtig!</h1>
        <h2>Vereinbare einen Termin mit Madame Soraya.</h2>
        <p>Soraya nimmt sich Zeit für deine Fragen und Wünsche. <br>Hast du Zweifel? <br>Brauchst du Unterstützung oder einen Rat direkt von den Sternen? <br>Hier bist du richtig. <br>Bei einem persönlichen Termin wird sich alles für dich klären.</p>
    </div>

    <form class="contact" action="http://127.0.0.1/webaufgaben-KathrinPrielinger/MadameKathrin/contact.php" method="POST">
        <!--action="mailto: k.prielinger@gmail.com"-->
                
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

    <form class="donate" action="https://www.paypal.com/donate" method="post" target="_top">     
                        <p class="paypal1">Käffchen? - Gerne!</p>                  
                        <input type="hidden" name="hosted_button_id" value="BLCMHG7S9S8XU" />
                        <input class="paypalImg" type="image" src="https://carboncopies.org/wp-content/uploads/2019/05/donate-paypal-button.png"  name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt=""  src="https://www.paypal.com/de_AT/i/scr/pixel.gif" width="1" height="1" />
                        <p class="paypal1">Madame Soraya freut sich über deine Spende!</p> 
    </form>
</article>

<div class=home3>
        <h1>Soraya blickt für dich in die Sterne</h1>
        <h2>Hast du Fragen? Vereinbare einen persönlichen Termin.</h2>
          <div class="scene">
                    <div class="carousel" style="transform: translateZ(-288px) rotateY(-40deg);">
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                        <div class="carousel__cell"></div>
                    </div>

            </div>
    </div>




<article class="home4">
    <section>
        <h1>Location</h1>
        <p>Vereinbare einen Termin</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2667.4454708472663!2d13.98241431560013!3d48.043735979216024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4773efe0625a4ec3%3A0x4d35fb4cf603597b!2sEberstalzell%20Wipfing!5e0!3m2!1sde!2sat!4v1617396054986!5m2!1sde!2sat" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
    </section>
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