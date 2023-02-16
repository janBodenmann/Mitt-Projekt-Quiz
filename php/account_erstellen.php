
 <?php
 if(isset($_POST["submit"])){
    require("login_data.php");
    $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME =:user");; //Username überprüfen
    $stmt->bindParam(":user", $_POST["username"]);
    $stmt->execute();
    $count = $stmt->rowCount();
    if($count == 0){
        //Username ist frei
    
    if ($_POST["pw"] == $_POST["pw2"]) {
        
        $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD) VALUES (:user, :pw) ");
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


    