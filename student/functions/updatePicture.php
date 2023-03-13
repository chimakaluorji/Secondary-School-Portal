<?php
include('../../config/dbconnect.php');

$regnumber = filter_input(INPUT_POST, 'regnumber', FILTER_DEFAULT);   
$fileName = filter_input(INPUT_POST, 'fileName', FILTER_DEFAULT);

//Define connection string global so that it can be seen by the function
$stmt = $pdo->prepare("UPDATE studentprofile SET photourl = ? where  regnumber = ?");

$stmt->execute([$fileName, $regnumber]);
        
$count = $stmt->rowCount();

if ($count == 1) {
    echo "success";
} else {
    echo "failed";
}

?>