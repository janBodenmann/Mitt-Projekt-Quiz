<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account erstellen</title>
</head>

<body>
 <?php
 if(isset($_POST["submit"])){
    require("database_login.sql");
    $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME =:user");; //Username überprüfen
    $stmt->bindParam(":user", $_POST["username"]);
    $stmt->execute();
    $count = $stmt->rowCount();
    if($count == 0){
        //Username ist frei
    
    if ($_POST["pw"] == $_POST["pw2"]) {
        
        $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD) VALUES (:user, .:pw) ");
        $stmt->bindParam(":user", $_POST["username"]);
        $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
        $stmt->bindParam(":pw", $hash);
        $stmt->execute();
        echo "Dein Account wurde angelegt";
    } else {
        echo "Die Passwörter stimmen nicht überein";
    }
    

    
    
    } else {
        echo "Der Username ist bereits vergeben";
    }
 
    
}

  
 
 ?>


    
    <h1> Account erstellen </h1>
    <form action="../php/register.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="pw" placeholder="Passwort" required><br>
        <input type="password" name="pw2" placeholder="Passwort wiederholen" required><br>
        <button type="submit" name="submit"> Erstellen</button>
    </form>
    <br>
    <a href="../php/doc.php">Hast du bereits einen Account</a>


</body>

</html>