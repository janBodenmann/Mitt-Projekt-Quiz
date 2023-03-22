// Variablen
const gameOne = document.getElementById('resultOne')
const gameTwo = document.getElementById('resultTwo')
const total = document.getElementById('resultTotal')

// Punkte pro Spiel und die totatel Punktzahl
let points1 = parseInt(localStorage.getItem("roundOne")) + parseInt(localStorage.getItem("roundTwo"))
let points2 = parseInt(localStorage.getItem("roundThree")) + parseInt(localStorage.getItem("roundFour"))
let totalPoints = points1 + points2

// ersetzt NaN mit 0
if(isNaN(points1)){
    points1 = 0
}

if(isNaN(totalPoints)){
    totalPoints = 0
}

// Anzeige der Punkzahlen
gameOne.textContent = "Erstes Spiel: " + points1
gameTwo.textContent = "Zweites Spiel: " + points2

total.textContent = "Total: " + totalPoints

// Local Storage wird gelöscht
localStorage.clear()