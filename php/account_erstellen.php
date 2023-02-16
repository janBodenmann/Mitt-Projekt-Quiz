
 <?php
 if(isset($_POST["submit"])){
    require("doc.php");
    
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


    