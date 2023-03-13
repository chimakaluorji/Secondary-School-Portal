<?php
include('../config/dbconnect.php');

//Retriving     
$regnumber = "19/2064"; //filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);
$password = "password"; //filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

$count = null;


//Define connection string global so that it can be seen by the function

$stmt = $pdo->prepare('SELECT count(*) as countStudent from studentprofile where regnumber=? and password=?');
$stmt->execute([$regnumber, $password]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $count = $row["countStudent"];
}

if ($stmt->rowCount() === 0) {
    echo '1';
    exit();
}

if ($count > 0) {
    $_SESSION['student'] = $regnumber;
    echo 'success';
} else {
    echo '0';
}
