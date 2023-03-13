<?php
try {
    $pdo = new PDO('mysql:dbname=kendimky_gma_db;host=localhost', 'kendimky_gma_user', 'P@ssw0r');
}catch(PDOException $e){
    echo "Didn't connection. Error: " . $e;
}
?>
