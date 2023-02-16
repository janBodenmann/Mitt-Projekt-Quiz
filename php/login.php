<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../php/doc.php">
  <link rel="stylesheet" href="../php/account_erstellen.php">
</head>

<body>

<?php
if(isset($_POST["submit"])){
  require("database");
  $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME =:user");; //Username überprüfen
  $stmt->bindParam(":user", $_POST["username"]);
  $stmt->execute();
  $count = $stmt->rowCount();
  if($count == 0){
      //Username ist frei
    $row = $stmt->fetch();
    if(password_verify($_POST["pw"], $row["PASSWORD"])){
      session_start();
      $_SESSION["username"] = $row["USERNAME"];
      header ("Location: gehem.php");
    } else {
      echo "string";
    }
    } else {
    echo "Der Login ist fehgeschlagen";
  }
}


?>


  <h10>anmelden</h10>
  <form action="../html/index.html" method="post" data-ajax="false">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="pw" placeholder="Passwort" required> <br>
    <button type="submit" name="submit">Einloggen</button>
  </form>
  <br>
  <a href="../php/account_erstellen.php">Noch keinen Account?</a>



</body>

</html>