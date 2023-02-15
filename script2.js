// Funktion checkUserInput() noch nicht fertig.


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

// Eine Funktion, die eine grosse Zahl gibt
function generateRandomBigNumber() {
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
    { number: generateRandomBigNumber(), },
];

// Ein Array mit allen Zahlen
const allNumbers = randomNumbers.concat(bigNumbers)
console.log(allNumbers)

// Variablen und Auslösung von der Funktion
const goal = document.getElementById('goalnumber')
const numbers1 = document.getElementById('numbers1')
const numbers2 = document.getElementById('numbers2')
const submitBtn = document.getElementById('submit')
const message = document.getElementById('message')


loadNumbers()

// Funktion um die Variablen zu laden
function loadNumbers() {
    goalNumber.forEach(item => goal.textContent  += item.number)
    randomNumbers.forEach(item => numbers1.textContent += item.number + " ") 
    bigNumbers.forEach(item => numbers2.textContent += item.number + " ")
}

// Funktion um zu checken, ob die Nummer, der der User eingibt, gegeben ist.
function checkUserInput() {
    const input = document.getElementById('answer').value
    // console.log(input)
    // console.log(bigNumbers.includes(input))
    
    let check = allNumbers.find(o => o.number === input);
    

    if (check != undefined){
        console.log("true");
    }
    else {
        console.log("false")
    }
}


// let obj = bigNumbers.find(o => o.number === '100');
// console.log(obj);






