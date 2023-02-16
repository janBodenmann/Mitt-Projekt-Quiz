
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


  