<!DOCTYPE html>

<html>
   <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styleAllgemein.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="styleZodiac.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="modal/styleModal.css" media="screen" />
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

        <script src="modal/modal.js" async></script>
        <script src="fireflies.js" async></script>
        
    
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
                <li><a href="zodiac.php" style="color: #ffffff">Zodiac</a></li>
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
            <form class="donate" action="https://www.paypal.com/donate" method="post" target="_top">     
                <p class="paypal1">Käffchen? - Gerne!</p>                  
                <input type="hidden" name="hosted_button_id" value="BLCMHG7S9S8XU" />
                <input class="paypalImg" type="image" src="https://carboncopies.org/wp-content/uploads/2019/05/donate-paypal-button.png"  name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt=""  src="https://www.paypal.com/de_AT/i/scr/pixel.gif" width="1" height="1" />
                <p class="paypal1">Madame Soraya freut sich über deine Spende!</p> 
            </form>
            
            <div class="box2">
                <h1>Was sagen mir dir Sterne?</h1>
                <p class="beschreibung1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.   
                    <p class="beschreibung2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
            </div>
            
        
        </article>
    
        <article class="sternzeichenHome">

            <div class="widderPic">
            <button onclick="document.getElementById('id01').style.display='block'"><img src="https://www.diamond-painting-deutschland.de/images/product_images/popup_images/Sternzeichen-Widder-Nachtleuchtend.jpg" alt="Widder"></button>
            </div>
            
                <!-- The Modal -->
                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'"
                    class="close" title="Close Modal">&times;</span>
    
                    <!-- Modal Content -->
                
                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><img src="https://www.diamond-painting-deutschland.de/images/product_images/popup_images/Sternzeichen-Widder-Nachtleuchtend.jpg"></button>
                            <br>
                            <span class="psw">Widder sind stets auf der Suche nach Bestätigung ihrer Persönlichkeit. Ihnen fehlt es oft an Konzentration. Sie sind eher ungeduldig, 
                                dickköpfig und hartnäckig. Widder sind jedoch auch enthusiastisch und optimistisch. Manchmal fehlt es ihnen jedoch an Einsicht und Urteilsvermögen. 
                                Sie wechseln zwischen vorschneller Begeisterung und Phasen der Entmutigung und Lustlosigkeit.</span>
                                <br>
                    </div>
                </div> 

            <div class="stierPic">
            <button onclick="document.getElementById('id02').style.display='block'"><img src="https://i.pinimg.com/originals/5a/f5/ef/5af5efec16f97cdf469e506d69c5373b.jpg" alt="Stier"></button> 
            </div>

                <!-- The Modal -->
                <div id="id02" class="modal">
                    <span onclick="document.getElementById('id02').style.display='none'"
                    class="close" title="Close Modal">&times;</span>
    
                    <!-- Modal Content -->
                
                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"><img src="https://i.pinimg.com/originals/5a/f5/ef/5af5efec16f97cdf469e506d69c5373b.jpg"></button>
                            <br>
                            <span class="psw">Der Stier strebt vor allem nach Ruhe, materieller und moralischer Sicherheit. Am liebsten möchte er im Einklang mit der Natur leben, indem er sich dieser anpasst und all ihre Vorteile für sich nutzt. 
                            Es fällt ihm leicht, sich an den kleinen Dingen des Lebens zu freuen.. Der Stier ist sentimental und treu. Schwierigkeiten versucht er aus dem Weg zu gehen.</span>
                            <br>
                    </div>
                </div> 

            <div class="sorayaPic1">
            <button onclick="myalert()"><img src="https://st2.depositphotos.com/2249091/7773/i/450/depositphotos_77739154-stock-photo-shocked-fortune-teller-reading-cards.jpg" alt="soraya"></button>
            </div>

            <div class="zwillingPic">
            <button onclick="document.getElementById('id03').style.display='block'"><img src="https://www.inti.tv/wp-content/uploads/2017/07/geminis-elemento.jpg" alt="Zwilling"></button>
            </div>

                <!-- The Modal -->
                <div id="id03" class="modal">
                <span onclick="document.getElementById('id03').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn"><img src="https://www.inti.tv/wp-content/uploads/2017/07/geminis-elemento.jpg"></button>
                        <br>
                    <span class="psw">Der Zwilling ist stets auf der Suche nach seiner Identität. Er wird von einer ungemeinen Neugier angetrieben, über die er sich seiner Außenwelt gegenüber öffnet. Der Zwilling ist sympathisch, umgänglich, kommunikativ und intelligent und passt sich problemlos an jegliche Situationen an. Er ist für alle Geisteshaltungen empfänglich, bleibt aber stets subjektiv. Er geht gern Risiken ein, was ihn manchmal daran hindert, sein Leben zu genießen.</span>
                        <br>
                    </div>
                </div> 



            <div class="krebsPic">
            <button onclick="document.getElementById('id04').style.display='block'"><img src="https://i.pinimg.com/736x/8d/5c/ed/8d5cedbb6db5d5bb145ca2b9afbae801.jpg" alt="Krebs"></button>
            </div>

                <!-- The Modal -->
                <div id="id04" class="modal">
                <span onclick="document.getElementById('id04').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn"><img src="https://i.pinimg.com/736x/8d/5c/ed/8d5cedbb6db5d5bb145ca2b9afbae801.jpg"></button>
                        <br>
                    <span class="psw">Der Krebs ist sehr sensibel. Er schwelgt oft in Nostalgie und hängt an der Vergangenheit im Allgemeinen, und insbesondere an seiner frühen Kindheit. Der Krebs ist sanft, liebevoll und zärtlich. Außerdem ist er empfänglich, intuitiv und herzlich. Der Krebs braucht ein schützendes Umfeld, das ihm Sicherheit bietet. Nachlässigkeit und Trägheit gehören aber ebenfalls zu seiner Persönlichkeit.</span>
                        <br>
                    </div>
                </div> 


            <div class="loewePic">
            <button onclick="document.getElementById('id05').style.display='block'"><img src="https://i.pinimg.com/originals/f2/f5/4c/f2f54c26bcc9f7d1aab97d36fad9c92d.jpg" alt="Loewe"></button>
            </div>
                
                <!-- The Modal -->
                <div id="id05" class="modal">
                <span onclick="document.getElementById('id05').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn"><img src="https://i.pinimg.com/originals/f2/f5/4c/f2f54c26bcc9f7d1aab97d36fad9c92d.jpg"></button>
                        <br>
                    <span class="psw">Der Löwe strahlt von Natur aus. Er besitzt eine ständige Selbstbeherrschung und versucht ebenso über sein Gebiet zu herrschen. Er ist großzügig, autoritär, stolz, anspruchsvoll und manchmal auch kompromisslos. Er ist sich seiner selbst bewusst.</span>
                        <br>
                    </div>
                </div>

            <div class="jungfrauPic">
            <button onclick="document.getElementById('id06').style.display='block'"><img src="https://th.bing.com/th/id/R92d4887d03982da3bf7913f08da32831?rik=6Rsb8lyCNIWCrQ&pid=ImgRaw" alt="Jungfrau"></button>
            </div>

                <!-- The Modal -->
                <div id="id06" class="modal">
                <span onclick="document.getElementById('id06').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn"><img src="https://th.bing.com/th/id/R92d4887d03982da3bf7913f08da32831?rik=6Rsb8lyCNIWCrQ&pid=ImgRaw"></button>
                        <br>
                    <span class="psw">Jungfrauen sind oft sehr in sich gekehrt. Sie stellen sich selbst in Frage, was dazu führt, dass sie sich zurückziehen. Sie studieren, analysieren, messen ab, berechnen und wählen methodisch alles aus, was sie tun. Die Jungfrau ist Königin der Organisation und der Selbstkritik. Sie braucht Ordnung und Organisation und hat das Bedürfnis, sich nützlich zu fühlen.</span>
                        <br>
                    </div>
                </div>


            <div class="sorayaPic2">
            <button onclick="myalert()"><img src="https://www.kvinnligatalare.se/wp-content/uploads/2016/12/kvinnligatalare_tips_talare_trendforelasning.jpg" alt="soraya"></button>
            </div>

            <div class="waagePic">
            <button onclick="document.getElementById('id07').style.display='block'"><img src="https://pisco.womenworking.com/29ee3aa4-f9b5-4b9e-99bf-088248e4afa5.jpg" alt="Waage"></button>
            </div>

                <!-- The Modal -->
                <div id="id07" class="modal">
                <span onclick="document.getElementById('id07').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id07').style.display='none'" class="cancelbtn"><img src="https://pisco.womenworking.com/29ee3aa4-f9b5-4b9e-99bf-088248e4afa5.jpg"></button>
                        <br>
                    <span class="psw">Stets auf der Suche nach Ausgeglichenheit und Harmonie, hat die Waage das Bedürfnis, sich auch in einem solchen Umfeld voll Ausgewogenheit und Einklang zu entwickeln und zu entfalten. Sie sucht in allen Dingen die goldene Mitte, das Mittelmaß, Sie strebt nach ausgeglichenen Beziehungen zu ihrem Umfeld und versucht stets, die bestmögliche Wahl zu treffen.</span>
                        <br>
                    </div>
                </div>

                <div class="skorpionPic">
            <button onclick="document.getElementById('id08').style.display='block'"><img src="https://i.pinimg.com/originals/57/68/e8/5768e889dc25db9b89922421f82661cc.jpg" alt="Skorpion"></button>
            </div>

                <!-- The Modal -->
                <div id="id08" class="modal">
                <span onclick="document.getElementById('id08').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id08').style.display='none'" class="cancelbtn"><img src="https://i.pinimg.com/originals/57/68/e8/5768e889dc25db9b89922421f82661cc.jpg"></button>
                        <br>
                    <span class="psw">Der Skorpion ist leidenschaftlich und beherrscht zugleich. Er ist leicht zu begeistern auf der ständigen Suche nach Nonkonformismus. Er hat das ständige Verlangen, den Dingen auf den Grund zu gehen. Außerdem sind Skorpione meinst sehr kreativ. Manche nutzen diese Kreativität positiv, andere nicht.</span>
                        <br>
                    </div>
                </div>

            <div class="schuetzePic">
            <button onclick="document.getElementById('id09').style.display='block'"><img src="https://cartes-voyance.fr/wp-content/uploads/2018/11/sagittaire-300x300.jpg" alt="Schuetze"></button>
            </div>

                <!-- The Modal -->
                <div id="id09" class="modal">
                <span onclick="document.getElementById('id09').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id09').style.display='none'" class="cancelbtn"><img src="https://cartes-voyance.fr/wp-content/uploads/2018/11/sagittaire-300x300.jpg"></button>
                        <br>
                    <span class="psw">Der Schütze ist enthusiastisch, fröhlich, optimistisch, herzlich und großzügig. Er strebt die volle Entfaltung seiner Persönlichkeit an. Außerdem ist er ausgeglichen und zuversichtlich und liebt Abenteuer. Er ist auf der ständigen Suche nach seinem Glück. Seine lustige Art und sein guter Wille sind deutlich, aber er neigt dazu, Komplikationen aus dem Weg zu gehen.</span>
                        <br>
                    </div>
                </div>

            <div class="steinbockPic">
            <button onclick="document.getElementById('id010').style.display='block'"><img src="https://kikimoraki.ru/wp-content/uploads/2019/12/goroskop-dlya-kozerogov-na-2020-god-sleduyushhaya-stantsiya-olimp-1-700x699.png" alt="Steinbock"></button>
            </div>

                <!-- The Modal -->
                <div id="id010" class="modal">
                <span onclick="document.getElementById('id010').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id010').style.display='none'" class="cancelbtn"><img src="https://kikimoraki.ru/wp-content/uploads/2019/12/goroskop-dlya-kozerogov-na-2020-god-sleduyushhaya-stantsiya-olimp-1-700x699.png"></button>
                        <br>
                    <span class="psw">Der Steinbock nimmt häufig eine defensive und skeptische Haltung an. Er ist von Natur aus vorsichtig, misstrauisch, geduldig und hartnäckig. Er grenzt sich klar von den Anderen ab. Er hat den Ruf, niemandem zu vertrauen. Er ist standhaft, hat ein hohes Konzentrationsvermögen und einen messerscharfen Verstand. Er hört auf seine Vernunft und gibt sich nicht leicht geschlagen.</span>
                        <br>
                    </div>
                </div>

            <div class="sorayaPic3">
            <button onclick="myalert()"><img src="https://media.istockphoto.com/photos/telling-fortune-from-magic-ball-picture-id505945762?k=6&m=505945762&s=612x612&w=0&h=TcfQ6XEd4vsoeKPzYSKQhstL2KF1Ey0yLZRP0tht7fA=" alt="soraya"></button>
            </div>



            <div class="wassermannPic">
            <button onclick="document.getElementById('id011').style.display='block'"><img src="https://i.pinimg.com/originals/12/74/93/12749386881561cfc30da677129dc621.jpg" alt="Wassermann"></button>
            </div>

                <!-- The Modal -->
                <div id="id011" class="modal">
                <span onclick="document.getElementById('id011').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id011').style.display='none'" class="cancelbtn"><img src="https://i.pinimg.com/originals/12/74/93/12749386881561cfc30da677129dc621.jpg"></button>
                        <br>
                    <span class="psw">Der Wassermann ist auf der stetigen Suche nach Unabhängigkeit. Er versucht sich von den Prinzipien, die ihm eingeschärft wurden, abzunabeln und seine eigenen Wurzeln zu schlagen, seine eigenen Werte zu schaffen. Er besteht auf seine Willens- und Handlungsfreiheit. Er kann sich an jegliche Situationen anpassen. Er ist außerdem originell, nonkonformistisch, opportunistisch, neugierig und wechselhaft und somit oft auch unvorhersehbar.</span>
                        <br>
                    </div>
                </div>

            <div class="fischePic">
            <button onclick="document.getElementById('id012').style.display='block'"><img src="https://i.pinimg.com/736x/30/c5/e6/30c5e60fec10552665349831edbfd9be.jpg"alt="Fische"></button>
            </div>

                <!-- The Modal -->
                <div id="id012" class="modal">
                <span onclick="document.getElementById('id012').style.display='none'"
                class="close" title="Close Modal">&times;</span>
    
                <!-- Modal Content -->
                
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id012').style.display='none'" class="cancelbtn"><img src="https://i.pinimg.com/originals/12/74/93/12749386881561cfc30da677129dc621.jpg"></button>
                        <br>
                    <span class="psw">Fische werden oft von intensiven Gefühlen eingeholt. Sie sind leicht zu begeistern, inspiriert, sensibel, einfühlsam und erfinderisch. Fische streben nach Zuneigung und spiritueller Verbundenheit. Sie sind außerdem besonders großzügig. Oft werden Sie jedoch auch von Angst und Sorgen geplagt, die sie wechselhaft und launisch wirken lassen.</span>
                        <br>
                    </div>
                </div>

        </article>

        <form class="contact" action="http://127.0.0.1/webaufgaben-KathrinPrielinger/MadameKathrin/contact.php" method="POST">
                
                <h1>Dein Kontakt zu den Sternen!</h1>


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
    
    <script>
        function myalert() {
            alert("Vereinbare einen Termin mit Madame Soraya!\n");
        }
    </script>

</body>
</html>