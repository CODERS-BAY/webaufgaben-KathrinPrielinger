var highestNumber = 10;
var inputNumber;
var tries = 0;
var maxTries = 3;
var hiddenNumber;
var winning = false;
setRandomNumber();

//Höchste Nummer bestimmen
function setHighestNumber() {
    highestNumber = parseInt(document.getElementById("highestNumber").value);
    setRandomNumber();  
    document.getElementById("highestNumberShow").innerHTML = "Die Nummer liegt zwischen 1 und " + highestNumber;
}

//Max. Versuche angeben
function setMaxTries() {
    maxTries = parseInt(document.getElementById("setTries").value);
    tryCounter();
}

//Tipp abgeben
function inputCheck() {
    document.getElementById("highestNumber").disabled = true;
    document.getElementById("setTries").disabled = true;
    //Wenn maxTries höher als Versuche
    if (maxTries > tries) {
        var givenNumber = parseInt(document.getElementById("inputNumber").value);
    //Wenn eingegebene Num nicht 0 ist    
    if (givenNumber != 0) {
        //Wenn eingegebene Num gleich wie die versteckte Num ist
        if (givenNumber == hiddenNumber) {
            //gewonnen
            winning = true;
            document.getElementById("infoText").innerHTML = givenNumber + " ist richtig - Gewonnen!"
        //Wenn eingegebene Num kleiner als hiddenNum ist
        } else if (givenNumber < hiddenNumber) {
            document.getElementById("infoText").innerHTML = givenNumber + " ist falsch. Versuche eine höhere Nummer."
        //Wenn eingegebene Num größer als hiddenNum ist
        } else if (givenNumber > hiddenNumber) {
            document.getElementById("infoText").innerHTML = givenNumber + " ist falsch. Versuche eine niedrigere Nummer."
        }
        tries++;
        tryCounter();
        //Wenn maxTries gleich Versuche ist und nicht gewonnen 
        if (maxTries == tries && !winning) {
            alert("Verloren. Die richtige Nummer ist " + hiddenNumber + ".")
            reset();
        }
    } else {
        alert("Gib eine Nummer ein!")
    }

    }
}

//RandomNum erzeugen
function setRandomNumber() {
    hiddenNumber = Math.floor(Math.random() * highestNumber + 1);
}
//Zähler: maxTries - Versuche
function tryCounter() {
    //
    document.getElementById("tryCounter").innerHTML = "Verbleibende Versuche: " + (maxTries - tries);
}

//Neustart
function reset() {
    document.getElementById("setTries").value = "3";
    document.getElementById("highestNumber").value = "10";
    document.getElementById("inputNumber").value = "";
    setMaxTries();
    setHighestNumber();
    setRandomNumber();
    document.getElementById("highestNumber").disabled = false;
    document.getElementById("setTries").disabled = false;
}