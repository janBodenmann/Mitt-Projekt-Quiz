<?php
$host = "localhost";
$name = "test";
$user = "root";
$passwort = "";
try {
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);

} catch (PDOExpection $e) {
    echo "SQL Error: " .$e->getMessage();

}
?>