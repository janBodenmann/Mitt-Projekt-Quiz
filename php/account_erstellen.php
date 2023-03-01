
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
    require("config.php");
    
    if(isset($_POST["submit"])){
        var_dump($_POST);
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $stmt =$con->prepare("SELECT * FROM users WHERE username = :username OR email=:email");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $userAlreadyExists = $stmt-> fetchColumn();

    if(!$userAlreadyExists){
        registerUser($username, $email, $password);
    }
        else {

        }

function registerUser($username,$email,$password){
    global $con;
    $stmt = $con->prepare("INSERT INTO users(username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
}

    }
  
}


 ?>


<h1> Account erstellen </h1>
    <form action="register.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="pw" placeholder="Passwort" required><br>
        <input type="password" name="pw2" placeholder="Passwort wiederholen" required><br>
        <button type="submit" name="submit"> Erstellen</button>
    </form>
    <br>
    <a href="../php/login.php">Hast du bereits einen Account</a>
    

</body>

</html>