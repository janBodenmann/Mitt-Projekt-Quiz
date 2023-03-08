<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  
  <link rel="stylesheet" href="../css/style_contact.css">
</head>

<body>
  <center>
    <h2 data-text_contact="Contact Us"> Contact </h2>
  </center>
  
 
 
  <?php

if (isset($_POST["submit"])){
mail ("jan.bodenmann@lernende.bfo-vs.ch", "Kontaktformular", 'Name: '.$_POST["name"].'Email: '.$_POST["email"])

?>
<?php
}
?>
 
  
  <div class="shade">
    <div class="blackboard">
      <div class="form">
        <p id = "contact">
          
        <form action="contact.php" method="post">
      <input type="text" name="name" placeholder="Beschreibung:" required><br>
      <br>
      Namen eingeben: <input type="text" name="einName" size="30" maxlength="40">     
      <textarea name="message" rows="8" cols="80" required></textarea><br>
      <button type="submit" name="submit">Absenden</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
      </form>
    </p>
      </div>
    </div>
  </div>

  
  
  </body>
</html>
   
      








</body>


  </head>
  
    <?php
    if(isset($_POST["submit"])){
      mail("tutorialworktv@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' Priorität: '.$_POST["priorität"].' Nachricht: '.$_POST["message"]);
      ?>
      <h1 style="color: green;">Das Kontaktformular wurde abgesendet!</h1>
      <?php
    }
     ?>
   

