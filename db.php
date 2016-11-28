<?php

$host = "localhost";
$dbname = "tvattstuga";
$user = "root";
$pass = "root";

$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

if ($dbh->connect_error) {
    die("Kan inte nå databasen för tillfället: " . $dbh->connect_error);
} 

?>