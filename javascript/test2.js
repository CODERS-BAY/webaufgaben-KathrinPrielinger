"use strict";

/*
alert('Übung 1');

alert('Willkommen in der Codersbay Linz');
alert('Du heißt ' + prompt('Wie heißt du? ', 'Gib deinen vollständigen Namen an.') + '. Herzlich Willkommen!');


alert('Übung 2');

alert('Ermittle deinen BMI');

let weight = prompt('Wie schwer bist du?');
document.write('Datentyp: ' + typeof weight + '<br>');

var height = prompt('Wie groß bist du?');
document.write('Datentyp: ' + typeof height + '<br>');

//Datentyp in Integer umwandeln
let weightNum = parseInt(weight);
let heightNum = parseInt(height);
document.write('Größe und Gewicht in Int: ' + typeof heightNum + ', ' + typeof weightNum + '<br>');

//Math.pow für zur Potenz
let bmi = Math.pow((weight / height), 2);

const bmiRounded =bmi.toFixed(3);

document.write('Dein Ergebnis ist: ' + bmiRounded + '<br>');

alert('Vergleiche dein Ergebnis mit der Tabelle');


alert('Übung 3');

const user = 'Kathrin';
const password = 'geheim123';

correct:
while(true) {
let userInputName = prompt('Wie ist Ihr Benutzername?');

if (userInputName == user) {
        alert('Username ist korrekt.');

        while(true) {
            let userPassword = prompt('Geben Sie Ihr Passwort ein.');

            if (userPassword == password) {
                alert('Passwort ist korrekt.');
                break correct;               
            }
            else {
                alert('Passwort ist nicht korrekt.')
            }
        }    
}
else {
        alert('Username ist nicht korrekt.');
    }
}



alert('Aufgabe 4: Löse die folgenden Rechenaufgaben:');

let punkte = 0;

for (var i = 0; i < 5; i++) {
    
    let number1 = Math.floor(Math.random() * 4);
    let number2 = Math.floor(Math.random() * 4);
    let ergebnis = number1 + number2;

    alert('Rechenaufgabe ' + (i+1));

    let inputErgebnis = prompt('Addiere ' + number1 + '+' + number2);
    inputErgebnis = parseInt(inputErgebnis);

    if (ergebnis == inputErgebnis) {
        
        switch(ergebnis) {
            case 0: case 1:
                punkte++;
                alert('Gut gemacht! Der Punktestand beträgt: ' + punkte);
                break;
            case 2: case 3:
                punkte++;
                alert('Super! Der Punktestand beträgt: ' + punkte);
                break;
            case 4: 
                punkte++;
                alert('Richtige Eingabe! Der Punktestand beträgt: ' + punkte);
                break;          
            default:
                alert('Das Ergebnis ist richtig, aber höher als 4. Punktestand: ' + punkte);
        }
    }
    else {
        alert('FALSCHE EINGABE.');
    }
}
alert('Aufgaben beendet. Punktestand: ' + punkte);

*/

alert('Aufgabe 5_1');

let array = [];

let personNr = i;
let index = j;

let myName;
let plz;
let dish;

let iMax = 3;
let jMax = 1;

for (let i = 0; i < iMax; i++) {
  array[i] = [];
  for (let j = 0; j < jMax; j++) {
      array[i][j] = [];

        alert('Ich heiße ' + (myName = prompt('Wie heißt du?')) + '.');
        array[array.length] = myName;

        alert('Meine PLZ ist ' + (plz = prompt('Wie ist deine PLZ?')) + '.');
        array[array.length] = plz;

        alert('Ich esse gerne ' + (dish = prompt('Was ist deine Lieblingsspeise?')) + '.');
        array[array.length] = dish;

        alert('Inhalt: ' + array);
        document.write(array.join() + '<br>');
    } 
}  

document.write(array[1][1]);


        



