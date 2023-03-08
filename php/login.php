<?php

if(isset($_POST["submit"])){
  $text = "<p id=\"error\">Der Login ist fehlgeschlagen!</p>";
  $unsuccessful = false;
  require("config.php");
  $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME =:user");; //Username überprüfen
  $stmt->bindParam(":user", $_POST["username"]);
  $stmt->execute();
  $count = $stmt->rowCount();
  if($count == 1){
      //Username ist frei
    $row = $stmt->fetch();
    if(password_verify($_POST["pw"], $row["PASSWORD"])){
      session_start();
      $_SESSION["username"] = $row["USERNAME"];
      header ("Location: geheim.php");
    } else {
      $unsuccessful = true;
      
    }
  } else {
    $unsuccessful = true;
    
  }
  
}


?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
<center>
<p id = "error"> anmelden</p>
    <form action="login.php" method="post" data-ajax="false" class="form">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="pw" placeholder="Passwort" required> <br>
      <button type="submit" name="submit">Einloggen</button>
    </form>
    <br>
    <a href="account_erstellen.php">Noch keinen Account?</a>
    <?php if($unsuccessful) echo $text; ?>
    </body>
    </html>
    </center>




  