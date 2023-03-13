<?php

    try{

        $pdo = new PDO('mysql:dbname=afcsportal_db;host=127.0.0.1', 'root', '');
    
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

    } catch(PDOException $e) {
        echo json_encode($e->getMessage);

        // echo $e->getMessage();
    }

?>
