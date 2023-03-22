<?php

// retrieve the highscore value from the POST request
$highscore = $_POST['highscore'];

// insert the highscore value into the MySQL database
require("config.php");
    $stmt = $mysql->prepare("INSERT INTO accounts 
    (USERNAME, PASSWORD, score) VALUES('Test User', '123456' :highscore)");
      $stmt->bindParam(":highscore", $_POST["highscore"]);
      $stmt->execute();  

?>
