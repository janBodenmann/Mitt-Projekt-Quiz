<?php

<?php

// establish a connection to your MySQL database
$servername = "10.5.43.26";
$username = "root";
$password = "";
$dbname = "quiz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// retrieve the top 10 highscores from the 'users' table
$sql = "SELECT username, score FROM users ORDER BY score DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // create an array to store the highscores
  $highscores = array();

  // iterate over the query results and add each highscore to the array
  while ($row = $result->fetch_assoc()) {
    $highscore = array(
      'username' => $row['username'],
      'score' => $row['score']
    );
    array_push($highscores, $highscore);
  }

  // encode the highscores array as JSON data and return it to the client
  header('Content-Type: application/json');
  echo json_encode($highscores);
} else {
  echo "No highscores found.";
}

$conn->close();

?>