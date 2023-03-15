// to check if goalnumber is possible:
// take random number from array then random (plus, minus or multiply) another random number from array. repeat 3 or so times
// and you get the goal number

// Eine Funktion, die eine zufälligen Nummer gibt
function generateRandomNumber() {
    const numbers = "0123456789" 
    return numbers[Math.floor(Math.random() * numbers.length)]
}

// Eine Funktion, die eine zufälligen Nummer gibt ohne Nullen
function generateRandomNumber2() {
    const numbers = "123456789" 
    return numbers[Math.floor(Math.random() * numbers.length)]
}

// Eine Funktion, die die Zahl 10, 15 oder 20 ausgibt
function generateRandomBigNumber() {
    const numbers = ['10', '15', '20']
    return numbers[Math.floor(Math.random() * numbers.length)]
}

// Eine Funktion, die eine grosse Zahl gibt
function generateRandomBigNumber2() {
    const numbers = ['25', '50', '75', '100']
    return numbers[Math.floor(Math.random() * numbers.length)]
}

// Ein Array für die gesuchte Zahl
const goalNumber = [
    { number: generateRandomNumber2() + generateRandomNumber() + generateRandomNumber(), },
];

// Ein Array mit 4 zufälligen Nummern 
const randomNumbers = [
    { number: generateRandomNumber2(), },
    { number: generateRandomNumber2(), },
    { number: generateRandomNumber2(), },
    { number: generateRandomNumber2(), },
];

// Ein Array mit 2 grossen Nummern 
const bigNumbers = [
    { number: generateRandomBigNumber(), },
    { number: generateRandomBigNumber2(), },
];

// Ein Array mit allen Zahlen
const allNumbers = randomNumbers.concat(bigNumbers)

// Variablen und Auslösung von der Funktion
const goalNum = document.getElementById('goalnumber')
const numbers1 = document.getElementById('numbers1')
const numbers2 = document.getElementById('numbers2')
const submitBtn = document.getElementById('submit')
const message = document.getElementById('message')

let points = 0

loadNumbers()
checkUserInput()

// Funktion um die Variablen zu laden
function loadNumbers() {
    goalNumber.forEach(item => goalNum.textContent  += item.number)
    randomNumbers.forEach(item => numbers1.textContent += item.number + " ") 
    bigNumbers.forEach(item => numbers2.textContent += item.number + " ")
}

// Funktion um zu checken, ob die Nummer, der der User eingibt, gegeben ist.
function checkUserInput() {
    const input = document.getElementById('answer').value
    let counter = 0
    let difference = ""


    allNumbers.forEach(requieredNumber => {
        if(input.includes(requieredNumber.number)){
            counter++
        }
    });

   if(counter >= 6){
    answer = math.evaluate(input)
    
    goalNumber.forEach(number => {
        let goalNum = parseInt(number.number)

        let x = goalNum - answer
        let y = answer - goalNum

        if(answer == goalNum){
            points += 30
            // localStorage.setItem('Round3', points)
            difference = "Du hast die Zahl getroffen!"
        }
        else if(x == 1 || y == 1) {
            points += 20
            // localStorage.setItem('Round3', points)
            difference = "Du hast eine Differenz von 1."
        }
        else if(2 <= x && x <= 5 || 2 <= y && y <= 5 ) {
            points += 10
            // localStorage.setItem('Round3', points)
            difference = "Du hast eine Differenz von 5."
        }
        else if(6 <= x && x <= 10 || 6 <= y && y <= 10 ) {
            points += 5
            // localStorage.setItem('Round3', points)
            difference = "Du hast eine Differenz von 10."
        }
        else {
            difference = "Die Differenz ist grösser als 10."
        }

        if(localStorage.getItem('roundThree')){
            localStorage.setItem('roundFour', points)
        }
        else {
            localStorage.setItem('roundThree', points)
        }

        if(answer){
            message.innerHTML = `
            <p>Du hast die Zahl ${answer} erhalten! ${difference} Dafür hast du ${points} Punkte erhalten.</p>
            <button onclick="location.reload()">Runde 2</button>
            `
        }
    })

   }
   else if(counter != 0) {
    message.innerHTML = `
    <p>Du hast nicht alle Zahlen verwendet. Versuche es wieder.</p>
    `
    }
 
}









