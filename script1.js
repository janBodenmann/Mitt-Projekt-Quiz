// Es fehlt die Prüfung, ob das eingegebene Wort überhaupt existiert. Braucht warscheinlich eine Datenbank (ein Wörterbuch). Zweite Runde?


// Eine Funktion, die einen zufälligen Buchstaben aus dem Alphabet gibt
function generateRandomLetter() {
    const alphabet = "AABCDEEFGHIIJKLMNOOPQRSTUUVWXYZÄÖÜ" //Ich hab die Vokalen zwei Mal eingegeben, damit sie mehr vorkommen
    return alphabet[Math.floor(Math.random() * alphabet.length)]
}

// Ein Array mit zufälligen Buchstaben 
const randomLetters = [
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
    { letter: generateRandomLetter(), },
];

// Variablen und Auslösung von der Funktion
const quiz= document.getElementById('quiz')
const submitBtn = document.getElementById('submit')
const message = document.getElementById('message')
let points = 0
loadLetters()

// Funktion um die Variablen zu laden
function loadLetters() {
    const letters = document.getElementById('letters')
    randomLetters.forEach(item => letters.textContent += item.letter + " ") //nimmt die Werte aus dem Array und fügt sie zusammen mit einem Leerzeichen dazwischen
}

// Event vom Button "Schicken" um die Antwort "zu schicken"
submitBtn.addEventListener('click', () => { 
    const answer = document.getElementById('answer').value
    if(answer != ""){ // wenn die Antwort nicht leer ist, dann...

        points = points + answer.length
        message.innerHTML = `
           <h3>Du hast ein Wort gefunden! Jetzt hast du ${points} Punkte.</h3>
           <button onclick="location.reload()">Runde 2</button>
        ` //Wir könnten eine zweite Runde einbauen. Also pro Spiel würde es 2 Runden geben. Die Punktzahl muss noch gespeichert werden
    }
})