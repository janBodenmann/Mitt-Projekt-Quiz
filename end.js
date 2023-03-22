// Variablen
const gameOne = document.getElementById('resultOne')
const gameTwo = document.getElementById('resultTwo')
const total = document.getElementById('resultTotal')

// Punkte pro Spiel und die totatel Punktzahl
let points1 = parseInt(localStorage.getItem("roundOne")) + parseInt(localStorage.getItem("roundTwo"))
let points2 = parseInt(localStorage.getItem("roundThree")) + parseInt(localStorage.getItem("roundFour"))
let highscore = points1 + points2

// ersetzt NaN mit 0
if(isNaN(points1)){
    points1 = 0
}

if(isNaN(highscore)){
    highscore = 0
}

// Anzeige der Punkzahlen
gameOne.textContent = "Erstes Spiel: " + points1
gameTwo.textContent = "Zweites Spiel: " + points2

total.textContent = "Total: " + highscore




// create a new FormData object and add the highscore to it
const formData = new FormData();
formData.append('highscore', highscore);

// send the FormData object to the PHP script using fetch
fetch('submit_highscore.php', {
  method: 'POST',
  body: formData
})
.then(response => {
  if (response.ok) {
    console.log('Highscore submitted successfully!');
  } else {
    console.error('Failed to submit highscore:', response.status, response.statusText);
  }
})
.catch(error => {
  console.error('An error occurred while submitting the highscore:', error);
});





// send a request to the PHP script to retrieve the highscores
fetch('php/get_highscores.php')
.then(response => response.json())
.then(data => {
  // iterate over the highscores and display them on the webpage
  data.forEach(highscore => {
    console.log(`Name: ${highscore.username}, Score: ${highscore.score}`);
  });
})
.catch(error => {
  console.error('An error occurred while retrieving the highscores:', error);
});



// Local Storage wird gelöscht
localStorage.clear()