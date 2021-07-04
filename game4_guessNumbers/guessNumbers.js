var highestNumber = 10;
var inputNumber;
var tries = 0;
var maxTries = 3;
var hiddenNumber;
var winning = false;
setRandomNumber();


function setHighestNumber() {
    highestNumber = parseInt(document.getElementById("highestNumber").value);
    setRandomNumber();
    document.getElementById("highestNumberShow").innerHTML = "Die Nummer liegt zwischen 1 und " + highestNumber;
}

function setMaxTries() {
    maxTries = parseInt(document.getElementById("setTries").value);
    tryCounter();
}

function inputCheck() {
    document.getElementById("highestNumber").disabled = true;
    document.getElementById("setTries").disabled = true;
    if (maxTries > tries) {
        var givenNumber = parseInt(document.getElementById("inputNumber").value);
    if (givenNumber != 0) {
        if (givenNumber == hiddenNumber) {
            winning = true;
            document.getElementById("infoText").innerHTML = givenNumber + " ist richtig - Gewonnen!"
        } else if (givenNumber < hiddenNumber) {
            document.getElementById("infoText").innerHTML = givenNumber + " ist falsch. Versuche eine höhere Nummer."
        } else if (givenNumber > hiddenNumber) {
            document.getElementById("infoText").innerHTML = givenNumber + " ist falsch. Versuche eine niedrigere Nummer."
        }
        tries++;
        tryCounter();
        if (maxTries == tries && !winning) {
            alert("Verloren. Die richtige Nummer ist " + hiddenNumber + ".")
            reset();
        }
    } else {
        alert("Gib eine Nummer ein!")
    }

    }
}

function setRandomNumber() {
    hiddenNumber = Math.floor(Math.random() * highestNumber + 1);
}

function tryCounter() {
    document.getElementById("tryCounter").innerHTML = "Verbleibende Versuche: " + (maxTries - tries);
}

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