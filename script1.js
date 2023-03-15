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
let gefunden
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

        fetch("https://raw.githubusercontent.com/davidak/wortliste/master/wortliste.txt")
        .then(x => x.text())
        .then(x => {
            gefunden = x.search(answer)
            if (gefunden > -1){
                points = points + answer.length

                
                if(localStorage.getItem('roundOne')){
                    localStorage.setItem('roundTwo', points)
                }
                else {
                    localStorage.setItem('roundOne', points)
                }

                message.innerHTML = `
                <p>Du hast ein Wort gefunden! Jetzt hast du ${points} Punkte.</p>
                <button onclick="location.reload()">Runde 2</button>`
            }
            else {
                message.innerHTML = `
                <p>Das Wort existiert nicht. Du erhälst keine Punkte.</p>
                <button onclick="location.reload()">Runde 2</button>`
            }
        }
            
        );
        

        
    }
})