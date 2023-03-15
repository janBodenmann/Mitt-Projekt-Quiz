<?php
$host ="localhost";
$name = "contact.sql";
$user = "root";
$passwort = "";

try{
    $mysql = new PDO("mysql:host=$host;dbname=contact", $user, $passwort);
} catch(PDOExpection $e) {
    echo "SQL Error:" .$e-> getMessage();
}
?>