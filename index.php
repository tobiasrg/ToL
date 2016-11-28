<?php
echo "hello";

var_dump();

require 'db.php';

echo "world";

var_dump();

// Hämta alla användare

$sql = "SELECT * FROM `user`";
if ( !$stmt = $dbh->query($sql) ){
    echo "Fel!<br>";
    var_dump ( $dbh->errorInfo() );
}

echo "<h3>Registrerade användare</h3>";
while ( $user = $stmt->fetch() ){
    echo $user['iduser'] . ": ".$user['username']."<br>";
    var_dump($user);
}

?>