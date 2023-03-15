const gameOne = document.getElementById('resultOne')
const gameTwo = document.getElementById('resultTwo')

gameOne.textContent = "Erstes Spiel: " + localStorage.getItem("One")
gameTwo.textContent = "Zweites Spiel: " + localStorage.getItem("Two")