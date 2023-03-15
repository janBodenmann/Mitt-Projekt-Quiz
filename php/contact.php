<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  
  <link rel="stylesheet" href="../css/style_contact2.css">
</head>

<body>
  <center>
    <h2 data-text_contact="Contact Us"> Contact </h2>
  </center>
  
 
  <?php
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
    
    
    
  


}

?>

 
  
  <!-- <div class="shade">
    <div class="blackboard">
      <div class="form">
        <p id = "contact"> -->
        <center>   <p> Beschreibung: </p>
          <form action="contact.php" method="post">
    <input type ="text" name="beschreibung" size="100" maxlength="100000" accept="text/*" style="height:45px"/>  
    <p> Problem: </p>
        <input type="text"  name="problem"size="150" maxlength="10000000" accept="text/*" style="height:450px" />  


    <input type ="submit" value = "Send!" /> </center>
      </form>
    <!-- </p>
      </div>
    </div>
  </div> -->

  
  
  </body>
</html>
   
      








</body>


  </head>
  
  
   

