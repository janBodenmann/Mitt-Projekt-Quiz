<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="../css/style_contact2.css">
</head>
 <a  href="http://localhost/quiz/php/geheim.php"> <button> Home </button></a> 
<body>
  <center>
    <h2 data-text_contact="Contact Us" > Contact Us! </h2>
  </center>
  
 
  <?php





if(isset($_POST["problem"]) && isset($_POST["beschreibung"]))  {
  
  
  $beschreibung = $_POST["beschreibung"];
  $problem = $_POST["problem"];
  
  if($beschreibung == "" or $problem == "") {
    echo "Bitte füll die Felder aus!";
  
  }else {
    require("config2.php");
    $stmt = $mysql->prepare("INSERT INTO ticketbeschreibung 
    (Beschreibung, Problem) VALUES(:beschreibung, :problem)");
      $stmt->bindParam(":beschreibung", $_POST["beschreibung"]);
      $stmt->bindParam(":problem", $_POST["problem"]);
      $stmt->execute();  
  }
}
  


?>

 
  
  <!-- <div class="shade">
    <div class="blackboard">
      <div class="form">
        <p id = "contact"> -->
        <center>   <p> Beschreibung: </p>
          <form class="box"action="contact.php" method="post">
          <textarea class="box"name="beschreibung" id="cnt" cols="30" rows="3"></textarea>  
          <p> Problem: </p>
          <textarea class="box" name="problem" id="cnt" cols="100" rows="23"></textarea>  
      

    <input id="submit" type ="submit" value = "Send!" /> </center>
      </form>
    <!-- </p>
      </div>
    </div>
  </div> -->

  
  
  </body>
</html>
   
      








</body>


  </head>
  
  
   

