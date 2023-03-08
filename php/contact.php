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
          
        <form action="index.php" method="post">
      <input type="text" name="name" placeholder="Name" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <select name="priorität">
        <option value="hoch">Hoch</option>
        <option value="mittel">Mittel</option>
        <option value="gering">Gering</option>
      </select><br>
      <textarea name="message" rows="8" cols="80" required></textarea><br>
      <button type="submit" name="submit">Absenden</button>
    </form>
  </body>
</html>
   
          </p>
      </div>
    </div>
  </div>









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
   

