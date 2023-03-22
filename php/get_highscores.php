<?php

// retrieve the highscores from the MySQL database
// ...

// encode the highscores as JSON data and return them to the client
header('Content-Type: application/json');
echo json_encode($highscores);

?>
