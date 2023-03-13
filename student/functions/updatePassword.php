<?php
include('../../config/dbconnect.php');

$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);   
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare("UPDATE studentprofile SET password = ? where  regnumber = ?");

$stmt->execute([$password, $regnumber]);
        
$count = $stmt->rowCount();

if ($count == 1) {
    echo "success";
} else {
    echo "failed";
}
?>