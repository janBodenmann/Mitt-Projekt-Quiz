<?php
$host ="localhost";
$name = "login.sql";
$user = "root";
$passwort = "";

try{
    $mysql = new PDO("mysql:host=$host;dbname=$login.sql", $user, $passwort);
} catch(PDOExpection $e) {
    echo "SQL Error:" .$e-> getMessage();
}


?>