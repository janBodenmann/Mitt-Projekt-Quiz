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

const mysql = require('mysql');

// create a connection to the MySQL database
const connection = mysql.createConnection({
  host: '10.5.43.26',
  user: 'root',
  password: '',
  database: 'quiz'
});

// update the score for the user with ID 1
const score = 100;
const userId = 1;

const query = `UPDATE accounts SET score = ${score} WHERE username = t`;
connection.query(query, (error, results) => {
  if (error) {
    console.error(error);
  } else {
    console.log('Score updated successfully!');
  }
});


// Local Storage wird gelöscht
localStorage.clear()