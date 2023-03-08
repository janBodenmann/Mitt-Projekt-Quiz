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
          <label>Name: </label>
          <input type="name" required />
        </p>
        <p id = "contact">
          <label>E-Mail: </label>
          <input type="email" required />
        </p>
    
        <p id = "contact">
          <label>Beschreibung: </label>
          <input type="text" />
        </p>
        <p id = "contact">
          <label>Kommentar: </label>
          <textarea name ="Kommentar" rows="10" cols="40" required></textarea>
        </p>
        <p class="auswippen">
          <input type="submit" value="Senden" />
          
   
          </p>
      </div>
    </div>
  </div>









</body>

</html>